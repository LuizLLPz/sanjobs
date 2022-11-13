import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from "vue-router";
import IndexPage from "@/views/IndexPage";
import RegisterPage from "@/views/RegisterPage";
import JobsPage from "@/views/JobsPage";
import UserPage from "@/views/UserPage";

const routes = [
    { path: '/', component: IndexPage },
    { path: '/register', component: RegisterPage },
    { path: '/jobs', component: JobsPage },
    { path: '/user', component: UserPage },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount('#app')
