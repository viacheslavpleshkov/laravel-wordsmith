//jQuery
window.$ = window.jQuery = require('jquery');
/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */
import Echo from 'laravel-echo'

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    encrypted: true
});

window.Vue = require('vue');
import InstantSearch from 'vue-instantsearch';

Vue.use(InstantSearch);

Vue.component('search-component', require('./components/SearchComponent').default);

const app = new Vue({
    el: '#app'
});