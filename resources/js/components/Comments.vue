<template>
    <div>
        <div class="comments-wrap">
            <div id="comments" class="row">
                <div class="col-full">
                    <h3 class="h2">Comment</h3>
                    <ol class="commentlist">
                        <li class="depth-1 comment" v-for="comment in comments">
                            <div class="comment__avatar">
                                <img class="avatar" src="/images/avatars/user.jpg" alt=""
                                     width="50" height="50">
                            </div>
                            <div class="comment__content">
                                <div class="comment__info">
                                    <div class="comment__author">{{ comment.user.name }}</div>
                                    <div class="comment__meta">
                                        <div class="comment__time">{{ comment.created_at }}</div>
                                    </div>
                                </div>
                                <div class="comment__text"><p>{{ comment.body }}</p>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="row comment-respond">
                <div id="respond" class="comments">
                    <h3 class="h2">Add Comment<span>Your email address will not be published</span></h3>
                    <form id="contactForm">
                        <fieldset>
                            <div class="message form-field">
                                <textarea ref="body" id="cMessage" class="full-width" placeholder="Your Message*"></textarea>
                            </div>
                            <button id="submit" type="submit" @click.prevent="addComment" class="btn btn--primary btn-wide btn--large full-width">Add Comment</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        props: {
            userName: {
                type: String,
                required: true
            },
            postId: {
                type: Number,
                required: true
            }
        },
        data() {
            return {
                comments: []
            };
        },
        created() {
            this.fetchComments();
            Echo.private("comment").listen("CommentSent", e => {
                this.comments.push({
                    user: {
                        name: e.user.name
                    },
                    body: e.comment.body
                });
            });
        },
        methods: {
            fetchComments() {
                axios.get("/api/v1/comments/" + this.postId).then(response => {
                    this.comments = response.data;
                });
            },
            addComment() {
                let body = this.$refs.body.value;
                axios.post("/api/v1/comments/" + this.postId, {body}).then(response => {
                    this.comments.push({
                        user: {
                            name: this.userName
                        },
                        body: this.$refs.body.value
                    });
                    this.$refs.body.value = "";
                });
            }
        }
    };
</script>
