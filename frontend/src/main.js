import { createApp } from 'vue';
import { createRouter, createWebHashHistory } from 'vue-router';
import App from './App.vue';
import './style.css';

const Home = () => import('./Pages/Home.vue')
const Blog = () => import('./Pages/Blog.vue')

const routes = [
    { path: '/', component: Home, name: 'home' },
    { path: '/blog', component: Blog, name: 'blog' },
]

const router = createRouter({
    history: createWebHashHistory(),
    routes,
})

const app = createApp(App)
app.use(router)

app.mount('#app')
