window.Vue = require('vue');

Vue.use(require('vue-resource'));

Vue.component('InfiniteLoading', require('vue-infinite-loading'));

const app = new Vue({
    el: '#app',
});
