<template>
    <ais-instant-search :search-client="searchClient" index-name="articles_index">
        <div class="row entries-wrap wide">
            <ais-search-box placeholder="Search here…" submit-title="🔎 Submit the query" reset-title="❌ Remove the query" autofocus
                            :class-names="{ 'ais-SearchBox-input': 'col-six tab-full', 'ais-SearchBox-submit': 'submit btn btn--primary tab-full', 'ais-SearchBox-reset': 'tab-full', 'ais-SearchBox-form': 'group row' }">
                <div slot="submit-icon">🔎 Submit the query</div>
                <div slot="reset-icon">❌ Remove the query</div>
            </ais-search-box>
        </div>
        <div class="row entries-wrap wide">
            <div class="entries">

                <ais-hits :class-names="{'ais-Hits': 'MyCustomHits', 'ais-Hits-list': 'MyCustomHitsList', 'ais-Hits-item': 'MyCustomHitsItem',}" :escapeHTML="false" :transform-items="s">
                    <template slot="item" slot-scope="{ item, index }">
                        <article class="col-block">
                            <div class="item-entry">
                                <div class="item-entry__thumb">
                                    <a :href="'/blog/' + item.url" class="item-entry__thumb-link">
                                        <img src="/images/thumbs/single/standard/standard-1000.jpg" alt="">
                                    </a>
                                </div>
                                <div class="item-entry__text">
                                    <h1 class="item-entry__title">
                                        <a :href="'/blog/' + item.url">
                                            <ais-highlight :hit="item" attribute="title"/>
                                        </a>
                                    </h1>
                                    <div class="item-entry__date">
                                        <a :href="'/blog/' + item.url">
                                            <ais-highlight :hit="item" attribute="created_at"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </template>
                </ais-hits>
            </div>
        </div>
        <div class="row pagination-wrap">
            <div class="col-full">
                <ais-pagination>
                    <ul slot-scope="{currentRefinement, nbPages, pages, isFirstPage,isLastPage, refine, createURL}" class="pgn aos-init">
                        <li class="paginate-hide">
                            <a class="pgn__num" :href="createURL(0)" @click.prevent="refine(0)">‹‹</a>
                        </li>
                        <li class="paginate-hide">
                            <a class="pgn__num" :href="createURL(currentRefinement - 1)" @click.prevent="refine(currentRefinement - 1)">‹</a>
                        </li>
                        <li v-for="page in pages" :key="page" class="paginate-hide">
                            <a :href="createURL(page)" @click.prevent="refine(page)">
                                <span class="pgn__num" :class="{current: page === currentRefinement ? 'bold' : '' }">{{ page + 1 }}</span>
                            </a>
                        </li>
                        <li class="paginate-hide">
                            <a class="pgn__num" :href="createURL(currentRefinement + 1)" @click.prevent="refine(currentRefinement + 1)">›</a>
                        </li>
                        <li class="paginate-hide">
                            <a class="pgn__num" :href="createURL(nbPages)" @click.prevent="refine(nbPages)">››</a>
                        </li>
                    </ul>
                </ais-pagination>

            </div>
        </div>
    </ais-instant-search>
</template>

<script>
    import algoliasearch from 'algoliasearch/lite';

    export default {
        data() {
            return {
                searchClient: algoliasearch(
                    process.env.MIX_ALGOLIA_APP_ID,
                    process.env.MIX_ALGOLIA_SECRET
                ),
            };
        },
    };
</script>
<style>
    .MyCustomHitsList {
        list-style: none;
    }

    .paginate-hide {
        display: inline-block;
    }
</style>
