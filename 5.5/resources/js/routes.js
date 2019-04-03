import Dashboard from './components/views/Dashboard.vue';
import Project from './components/views/Project.vue';
import Login from './components/views/Login.vue';



export default [
    { path: '/', component: Dashboard },
    { path: '/project/:id', component: Project },
    { path: '/login', component: Login, meta: { requiresAuth: false } }


];