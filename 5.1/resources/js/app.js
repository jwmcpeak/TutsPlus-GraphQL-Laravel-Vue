import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './components/App.vue';
import routes from './routes';

import './queries';



require('./bootstrap');

Vue.use(VueRouter);

const router = new VueRouter({routes});


new Vue({
    router,
    render: h=> h(App)
}).$mount('#app');
