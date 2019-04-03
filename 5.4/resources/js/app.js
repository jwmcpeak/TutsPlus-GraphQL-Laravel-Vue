import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './components/App.vue';
import routes from './routes';

import './queries';



require('./bootstrap');

Vue.use(VueRouter);

const router = new VueRouter({routes});

router.beforeEach((to, from, next) => {
    if (to.matched.some(m => m.meta.requiresAuth === false)) {
        next();
        return;
    }

    Vue.prototype.$query('check').then(res => {
        next();
    }).catch(err => {
        router.push('/login');
    });
})


new Vue({
    router,
    render: h=> h(App)
}).$mount('#app');
