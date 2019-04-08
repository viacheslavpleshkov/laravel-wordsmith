window.Vue = require('vue');
import InstantSearch from 'vue-instantsearch';

Vue.use(InstantSearch);

Vue.component('search-component', require('./components/SearchComponent').default);

const app = new Vue({
    el: '#app'
});