<template>
    <div class="row entries-wrap wide">
        <div class="entries">
            <article class="col-block" v-for="article in articles" :key="article.id">
                <div class="item-entry" data-aos="zoom-in">
                    <div class="item-entry__thumb">
                        <a :href="'/blog/'+article.url" class="item-entry__thumb-link">
                            <img v-if="article.images === 'none'" src="/images/thumbs/single/standard/standard-1000.jpg" :alt="article.title">
                            <img v-else :src="host + article.images" :alt="article.title">
                        </a>
                    </div>
                    <div class="item-entry__text">
                        <div class="item-entry__cat">
                            <a :href="'/categories/'+article.category.url">{{ article.category.name }}</a>
                        </div>
                        <h1 class="item-entry__title"><a :href="'/blog/'+article.url">{{ article.title }}</a></h1>
                        <div class="item-entry__date">
                            <a :href="'/blog/'+article.url">{{ article.created_at }}</a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <pagination :limit ="2" :meta_data="meta_data" v-on:next="fetchArticles"></pagination>
    </div>
</template>
<script>
    import Pagination from './Pagination';

    export default {
        components: {
            Pagination
        },
        data() {
            return {
                host: process.env.MIX_URL_FILE,
                articles: [],
                meta_data: {
                    last_page: null,
                    current_page: 1,
                    prev_page_url: null
                }
            }
        },
        mounted() {
            this.fetchArticles();
        },
        methods: {
            fetchArticles(page = 1) {
                axios.get('/api/v1/articles/', {
                    params: {
                        page
                    }
                }).then((res) => {
                    this.articles = res.data.data;
                    this.meta_data.last_page = res.data.last_page;
                    this.meta_data.current_page = res.data.current_page;
                    this.meta_data.prev_page_url = res.data.prev_page_url;
                });
            }
        }
    }
</script>