<template>
    <ais-instant-search :search-client="searchClient" index-name="articles_index">
        <div class="row entries-wrap wide">
            <ais-search-box
                    placeholder="Search here…"
                    submit-title="🔎 Submit the query"
                    reset-title="❌ Remove the query"
                    autofocus
                    :class-names="{
    'ais-SearchBox-input': 'col-six tab-full',
    'ais-SearchBox-submit': 'submit btn btn--primary tab-full',
    'ais-SearchBox-reset': 'tab-full',
    'ais-SearchBox-form': 'group row',
  }">
                    <div slot="submit-icon">🔎 Submit the query</div>
                    <div slot="reset-icon">❌ Remove the query</div>
            </ais-search-box>
        </div>
        <div class="row entries-wrap wide">
            <div class="entries">

                <ais-hits :class-names="{
    'ais-Hits': 'MyCustomHits',
    'ais-Hits-list': 'MyCustomHitsList',
    'ais-Hits-item': 'MyCustomHitsItem',
  }"
                          :escapeHTML="false"
                          :transform-items="s">
                    <div slot="item" slot-scope="{ item, index }">
                        <article class="col-block">
                            <div class="item-entry">
                                <div class="item-entry__thumb">
                                    <a :href="'/blog/' + item.url" class="item-entry__thumb-link">
                                        <img src="http://laravelwordsmith.local/images/thumbs/single/standard/standard-1000.jpg" alt="">
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
                    </div>
                </ais-hits>
            </div>
        </div>
        <div class="row pagination-wrap">
            <div class="col-full">
                <ais-pagination>
                    <ul
                            slot-scope="{
      currentRefinement,
      nbPages,
      pages,
      isFirstPage,
      isLastPage,
      refine,
      createURL
    }"
                            class="pgn aos-init">
                        <li class="pgn__num">
                            <a :href="createURL(0)" @click.prevent="refine(0)">
                                ‹‹
                            </a>
                        </li>
                        <li class="pgn__num">
                            <a
                                    :href="createURL(currentRefinement - 1)"
                                    @click.prevent="refine(currentRefinement - 1)"
                            >
                                ‹
                            </a>
                        </li>
                        <li v-for="page in pages" :key="page" class="pgn__num">
                            <a
                                    :href="createURL(page)"
                                    :style="{ fontWeight: page === currentRefinement ? 'bold' : '' }"
                                    @click.prevent="refine(page)"
                            >
                                <span>{{ page + 1 }}</span>

                            </a>
                        </li>
                        <li class="pgn__num">
                            <a
                                    :href="createURL(currentRefinement + 1)"
                                    @click.prevent="refine(currentRefinement + 1)"
                            >
                                ›
                            </a>
                        </li>
                        <li class="pgn__num">
                            <a :href="createURL(nbPages)" @click.prevent="refine(nbPages)">
                                ››
                            </a>
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
                    "1XVMYPUNX4",
                    "9976ad8b5d6127b006ceeca74a97bf98"
                ),
            };
        },
    };
</script>
<style>
    .MyCustomHitsList {
        list-style: none;
    }
</style>
