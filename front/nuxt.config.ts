// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
    compatibilityDate: '2025-07-15',
    devtools: { enabled: true },
    modules: ['@nuxtjs/tailwindcss', '@nuxt/icon'],
    css: [
        './app/assets/main.css'
    ],
    app: {
        head: {
            htmlAttrs: {
                lang: 'fa',
                dir: 'rtl'
            }
        }
    }
});