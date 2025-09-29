<script setup lang="ts">
import SectionHeader from '~/components/roadmaps/SectionHeader.vue';
</script>

<template>
    <div class="rtl min-h-screen text-gray-800 dark:text-gray-100">
        <!-- Hero Section -->
        <section class="text-center px-6 py-20 text-white">
            <h1 class="text-5xl sm:text-6xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 drop-shadow-lg">
                roodmap.ir
            </h1>
            <p class="text-lg sm:text-xl mb-8">نقشه راه یادگیری برنامه‌نویسی به صورت فارسی. مسیر خودت رو مرحله به مرحله
                دنبال کن!</p>
            <div class="flex justify-center gap-4">
                <a href="#top-stacks"
                   class="bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg hover:bg-gray-100 transition">شروع
                    مسیرها</a>
            </div>
        </section>

        <!-- Top Stacks Role -->
        <section id="top-domains" class="mt-12 mx-auto">
            <SectionHeader name="رودمپ بر اساس شاخه" />
            <div class="max-w-3xl mx-auto">
                <Roadmaps :type="1"/>
            </div>
        </section>

        <!-- Top Stacks By Skill -->
        <section id="top-skills" class="mt-12 mx-auto">
            <SectionHeader name="رودمپ بر اساس مهارت" />
            <div class="max-w-3xl mx-auto">
                <Roadmaps :type="2"/>
            </div>
        </section>


        <!-- Why Section -->
        <section class="px-6 py-16 mt-12">
            <h2 class="text-3xl sm:text-4xl font-bold text-center mb-12">چرا باید از roodmap.ir استفاده کنید؟</h2>
            <div class="max-w-4xl mx-auto text-center text-gray-700 dark:text-gray-300 space-y-6 text-base sm:text-lg">
                <p>تمام مسیرها و منابع فارسی و مرحله به مرحله هستند.</p>
                <p>می‌تونی سرعت و مسیر یادگیری خودت رو انتخاب کنی.</p>
                <p>تمرکز روی مهارت‌های عملی و پروژه محور.</p>
            </div>
        </section>
    </div>
</template>