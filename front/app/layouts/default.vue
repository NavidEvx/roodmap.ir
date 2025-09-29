<template>
    <div class="flex flex-col min-h-screen">
        <!-- Header -->
        <Header />

        <!-- Content -->
        <main class="flex-grow">
            <slot />
        </main>

        <!-- Footer -->
        <Footer />
    </div>
</template>

<script setup>
import Header from '~/components/layouts/Header.vue';
import Footer from '~/components/layouts/Footer.vue';
</script>
