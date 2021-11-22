window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');

import App from './components/App';

const app = new Vue({
    el: '#app',
    render: h => h(App)
});