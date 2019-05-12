<template>
    <div class="row pagination-wrap">
        <div class="col-full">
            <nav class="pgn" data-aos="fade-up">
                <ul class="pagination pagination-lg">
                    <li :class="{ 'disabled': meta_data.prev_page_url === null }">
                        <a href="#" class="pgn__prev" @click="next(meta_data.current_page-1)"></a>
                    </li>
                    <li v-for="page in meta_data.last_page" :key="page">
                        <div v-if="meta_data.current_page === page">
                            <span class="pgn__num current">{{ page }}</span>
                        </div>
                        <div v-else>
                            <a href="#" @click.prevent="next(page)"><span class="pgn__num">{{ page }}</span></a>
                        </div>
                    </li>

                    <li :class="{ 'disabled': meta_data.current_page === meta_data.last_page }">
                        <a href="#" class="pgn__next" @click="next(meta_data.current_page+1)"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['meta_data'],
        methods: {
            next(page) {
                this.$emit('next', page);
            }
        }
    }
</script>