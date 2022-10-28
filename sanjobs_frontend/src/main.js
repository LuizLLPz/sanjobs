import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from "vue-router";
import IndexPage from "@/views/IndexPage";
import RegisterPage from "@/views/RegisterPage";

const routes = [
    { path: '/', component: IndexPage },
    { path: '/register', component: RegisterPage },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount('#app')
