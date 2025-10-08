// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
    compatibilityDate: '2025-07-15',
    devtools: { enabled: true },
    ssr: false,
    modules: ['@nuxtjs/tailwindcss', '@nuxt/icon'],
    css: [
        './app/assets/main.css'
    ],
    runtimeConfig: {
        apiSecret: '123',
        public: {
            origin: 'http://localhost:3000',
            apiBase: 'http://localhost:8000'
        }
    },
    app: {
        head: {
            htmlAttrs: {
                lang: 'fa',
                dir: 'rtl'
            }
        }
    }
});