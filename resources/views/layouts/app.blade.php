<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue.js-Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@3.2.47/dist/vue.global.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-router@4.2.1/dist/vue-router.global.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div id="app">
        <nav class="bg-white shadow-md">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="flex-1 flex items-center justify-between sm:items-stretch sm:justify-start">
                        <div class="flex-shrink-0 text-2xl font-bold text-gray-800">Vue.js-Laravel</div>
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="isMobileMenuOpen = !isMobileMenuOpen" class="bg-gray-800 p-2 rounded-md text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="hidden sm:flex sm:ml-6">
                            <div class="flex space-x-4">
                                <router-link to="/" class="text-gray-600 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Home</router-link>
                                <router-link to="/about" class="text-gray-600 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">About</router-link>
                                <router-link to="/services" class="text-gray-600 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Services</router-link>
                                <router-link to="/contact" class="text-gray-600 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Contact</router-link>
                                <router-link to="/blog" class="text-gray-600 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Blog</router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="isMobileMenuOpen" class="sm:hidden">
                <div class="space-y-1 px-2 pt-2 pb-3">
                    <router-link to="/" class="block text-gray-600 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">Home</router-link>
                    <router-link to="/about" class="block text-gray-600 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">About</router-link>
                    <router-link to="/services" class="block text-gray-600 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">Services</router-link>
                    <router-link to="/contact" class="block text-gray-600 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">Contact</router-link>
                    <router-link to="/blog" class="block text-gray-600 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">Blog</router-link>
                </div>
            </div>
        </nav>
        <main class="container mx-auto mt-4 p-4 bg-white shadow-md rounded">
            <router-view></router-view>
        </main>
    </div>
    <script type="module">
        const { createApp } = Vue;
        const { createRouter, createWebHistory } = VueRouter;

        // Définir les composants
        const Home = {
            template: `<div><h1 class="text-3xl font-bold">Home Page</h1><p class="mt-2 text-gray-700">Welcome to the home page!</p></div>`
        };
        const About = {
            template: `<div><h1 class="text-3xl font-bold">About Page</h1><p class="mt-2 text-gray-700">This is the about page!</p></div>`
        };
        const Services = {
            template: `<div><h1 class="text-3xl font-bold">Services Page</h1><p class="mt-2 text-gray-700">Explore our services here.</p></div>`
        };
        const Contact = {
            template: `<div><h1 class="text-3xl font-bold">Contact Page</h1><p class="mt-2 text-gray-700">Get in touch with us through this page.</p></div>`
        };
        const Blog = {
            template: `<div><h1 class="text-3xl font-bold">Blog Page</h1><p class="mt-2 text-gray-700">Read our latest blog posts here.</p></div>`
        };

        // Configurer les routes
        const routes = [
            { path: '/', component: Home },
            { path: '/about', component: About },
            { path: '/services', component: Services },
            { path: '/contact', component: Contact },
            { path: '/blog', component: Blog }
        ];

        const router = createRouter({
            history: createWebHistory(),
            routes
        });

        // Créer l'application Vue
        createApp({
            data() {
                return {
                    isMobileMenuOpen: false
                };
            }
        })
        .use(router)
        .mount('#app');
    </script>
</body>
</html>
