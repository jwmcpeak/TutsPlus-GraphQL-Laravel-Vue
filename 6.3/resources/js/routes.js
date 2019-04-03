import Dashboard from './components/views/Dashboard.vue';
import Project from './components/views/Project.vue';
import Login from './components/views/Login.vue';
import Register from './components/views/Register.vue';
import CreateProject from './components/views/CreateProject.vue';







export default [
    { path: '/', component: Dashboard },
    { path: '/project/:id', component: Project },
    { path: '/create', component: CreateProject },

    { path: '/login', component: Login, meta: { requiresAuth: false } },
    { path: '/register', component: Register, meta: { requiresAuth: false } },


];