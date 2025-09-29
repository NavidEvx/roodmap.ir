<script setup lang="ts">
import { useRoute, useRouter } from 'vue-router';
import { ref, computed } from 'vue';

const route = useRoute();
const router = useRouter();

// نام حوزه از URL
const name = route.params.name?.[0] as string || '';

// نمونه دیتای داینامیک برای حوزه‌ها
interface RoadmapDomain {
    name: string;
    description: string;
    roadmap: any[]; // بعداً آرایه roadmapItem
}

const domains: Record<string, RoadmapDomain> = {
    frontend: {
        name: 'Frontend',
        description: 'مسیر یادگیری توسعه فرانت‌اند شامل HTML، CSS، JavaScript و فریم‌ورک‌ها.',
        roadmap: [] // بعداً roadmap اصلی
    },
    backend: {
        name: 'Backend',
        description: 'مسیر یادگیری توسعه بک‌اند شامل Node.js، PHP، Python و دیتابیس‌ها.',
        roadmap: []
    },
    ai: {
        name: 'AI / Machine Learning',
        description: 'مسیر یادگیری هوش مصنوعی و یادگیری ماشین، شامل الگوریتم‌ها و مدل‌ها.',
        roadmap: []
    }
};

// اگر حوزه معتبر نبود → 404
const domain = computed(() => {
    if (!name || !domains[name]) {
        router.replace('/404'); // یا صفحه 404 خودت
        return null;
    }
    return domains[name];
});
</script>

<template>
    <div v-if="domain" class="flex flex-col items-center px-4 py-8 max-w-6xl mx-auto space-y-8">
        <!-- باکس حوزه -->
        <div
            class="max-w-3xl w-full flex flex-col items-center p-6 border bg-gray-100 dark:bg-gray-800 rounded-lg shadow-md">
            <div class="w-full flex items-center justify-between gap-4 mt-4 sm:mt-0">
                <NuxtLink
                    class="px-4 py-2 text-white rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 transition"
                    to="/">
                    ← همه رودمپ ها
                </NuxtLink>
                <button
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition"
                    @click="navigator.clipboard.writeText(window.location.href).then(() => alert('لینک کپی شد!'))">
                    اشتراک
                </button>
            </div>
            <div>
                <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-gray-100">{{ domain.name }}</h1>
                <p class="mt-2 text-gray-600 dark:text-gray-400">{{ domain.description }}</p>
            </div>

        </div>

        <!-- اینجا roadmap داینامیک نمایش داده می‌شود -->
        <div>
            <!-- فعلاً placeholder -->
            <p class="text-gray-700 dark:text-gray-300">نمایش roadmap برای {{ domain.name }} اینجا قرار می‌گیرد.</p>
        </div>
    </div>
</template>
