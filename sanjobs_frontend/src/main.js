import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from "vue-router";
import IndexPage from "@/views/IndexPage";
import LoginPage from "@/views/LoginPage";
import RegisterPage from "@/views/RegisterPage";
import JobsPage from "@/views/JobsPage";

const routes = [
    { path: '/', component: IndexPage },
    { path: '/login', component: LoginPage },
    { path: '/register', component: RegisterPage },
    { path: '/jobs', component: JobsPage },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount('#app')
