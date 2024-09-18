<!-- Assurez-vous d'inclure les bibliothèques Vue et VueRouter dans votre HTML -->
<script src="https://cdn.jsdelivr.net/npm/vue@3.2.45/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-router@4.2.0/dist/vue-router.global.js"></script>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.4/dist/tailwind.min.css" rel="stylesheet">

<div id="app">
    <nav>
        <!-- Menu de navigation -->
        <ul class="flex space-x-4 p-4 bg-gray-800 text-white">
            <li><router-link to="/" class="hover:underline">Home</router-link></li>
            <li><router-link to="/about" class="hover:underline">About</router-link></li>
            <li><router-link to="/services" class="hover:underline">Services</router-link></li>
            <li><router-link to="/contact" class="hover:underline">Contact</router-link></li>
            <li><router-link to="/blog" class="hover:underline">Blog</router-link></li>
        </ul>
    </nav>

    <router-view></router-view>
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
        template: `
            <div>
                <h1 class="text-3xl font-bold mb-6">Blog Page</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://via.placeholder.com/400x250.png?text=Article+1" alt="Article 1" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-bold mb-2">Article 1</h2>
                            <p class="text-gray-700 mb-4">This is a short excerpt from the first article. It provides a brief overview of the content and entices the reader to learn more.</p>
                            <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium">Lire la suite</a>
                        </div>
                    </div>
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://via.placeholder.com/400x250.png?text=Article+2" alt="Article 2" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-bold mb-2">Article 2</h2>
                            <p class="text-gray-700 mb-4">Discover the insights of the second article. It covers various interesting topics that you might find engaging and informative.</p>
                            <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium">Lire la suite</a>
                        </div>
                    </div>
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://via.placeholder.com/400x250.png?text=Article+3" alt="Article 3" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-bold mb-2">Article 3</h2>
                            <p class="text-gray-700 mb-4">The third article offers an in-depth look at various subjects. It's a great read for those looking to dive deeper into the topic.</p>
                            <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium">Lire la suite</a>
                        </div>
                    </div>
                </div>
            </div>
        `
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
