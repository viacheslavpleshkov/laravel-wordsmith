<template>
    <div>
        <div class="comments-wrap">
            <div id="comments" class="row">
                <div class="col-full">
                    <h3 class="h2">Comment</h3>
                    <ol class="commentlist">
                        <li class="depth-1 comment" v-for="comment in comments">
                            <div class="comment__avatar">
                                <v-gravatar class="avatar"  :email="comment.user.email" width="50" height="50"/>
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
        </div>
    </div>
</template>


<script>
    export default {
        props: {
            articleId: {
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
        },
        methods: {
            fetchComments() {
                axios.get("/api/v1/comments/" + this.articleId).then(response => {
                    this.comments = response.data;
                });
            },
        }
    };
</script>
