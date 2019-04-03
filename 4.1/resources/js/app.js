import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './components/App.vue';



require('./bootstrap');

Vue.use(VueRouter);

const router = new VueRouter();


new Vue({
    router,
    render: h=> h(App)
}).$mount('#app');
