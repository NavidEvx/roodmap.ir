<script setup lang="ts">
const route = useRoute();
const router = useRouter();
const name = route.params.name?.[0] as string || '';

interface RoadmapDomain {
    name: string;
    description: string;
    roadmap: any[];
}

const domains: Record<string, RoadmapDomain> = {
    frontend: {
        name: 'Frontend',
        description: 'مسیر یادگیری توسعه فرانت‌اند شامل HTML، CSS، JavaScript و فریم‌ورک‌ها.',
        roadmap: []
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

const domain = computed(() => {
    if (!name || !domains[name]) {
        router.replace('/404');
        return null;
    }
    return domains[name];
});
</script>

<template>
    <div v-if="domain" class="flex flex-col items-center px-4 py-8 mx-auto space-y-8">
        <div
            class="max-w-6xl w-full flex flex-col items-center p-6 border bg-gray-100 dark:bg-gray-800 rounded-lg shadow-md">
            <div class="w-full flex items-center justify-between gap-4 my-4 sm:mt-0">
                <NuxtLink
                    class="flex items-center gap-x-2 px-4 py-2 text-white bg-gray-700 rounded-lg hover:bg-gray-500 transition"
                    to="/">
                    <Icon name="tabler:arrow-right"/>
                    <span>تمامی رودمپ‌ها</span>
                </NuxtLink>
                <button
                    class="px-4 py-2 bg-yellow-500 rounded-lg hover:bg-yellow-700 transition"
                    @click="navigator.clipboard.writeText(window.location.href).then(() => alert('لینک کپی شد!'))">
                    اشتراک
                </button>
            </div>
            <div class="text-center">
                <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-gray-100">{{ domain.name }}</h1>
                <p class="mt-2 text-gray-600 dark:text-gray-400">{{ domain.description }}</p>
            </div>
        </div>
        
        
        <div class="relative w-full flex flex-col items-center gap-12">
            
            <div ref="box1" class="max-w-6xl w-full flex flex-col items-center p-6 border bg-gray-100 dark:bg-gray-800 rounded-lg shadow-md">
                <div class="w-full flex items-center justify-between gap-4 my-4 sm:mt-0">
                    <div class="flex items-center gap-x-3 font-bold text-white text-xl">
                        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black border-2 border-black">
                            0
                        </div>
                        <h1>قدم صفر - یادگیری مقدمات</h1>
                    </div>
                </div>
                <div class="w-full flex flex-auto gap-3">
                    <div v-for="i in 3" :key="i" class="flex items-center justify-center gap-x-3 p-2 text-blue-800 dark:text-blue-200 rounded-lg border-2 border-gray-500 hover:scale-105 transition-transform">
                        <img src="/images/languages/golang.png" width="32" alt=""/>
                        <span>Golang</span>
                    </div>
                </div>
            </div>
            
            <div ref="box1" class="max-w-6xl w-full flex flex-col items-center p-6 border bg-gray-100 dark:bg-gray-800 rounded-lg shadow-md">
                <div class="w-full flex items-center justify-between gap-4 my-4 sm:mt-0">
                    <div class="flex items-center gap-x-3 font-bold text-white text-xl">
                        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black border-2 border-black">
                            1
                        </div>
                        <h1>قدم اول - انتخاب زبان برنامه نویسی</h1>
                    </div>
                </div>
                <div class="w-full grid grid-cols-3 gap-3">
                    <div v-for="i in 3" :key="i" class="flex items-center justify-center p-4 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-lg shadow hover:scale-105 transition-transform">
                        Go
                    </div>
                </div>
            </div>
            
            <div ref="box2" class="max-w-6xl w-full flex flex-col items-center p-6 border bg-gray-100 dark:bg-gray-800 rounded-lg shadow-md">
                <div class="w-full flex items-center justify-between gap-4 my-4 sm:mt-0">
                    <div class="flex items-center gap-x-3 font-bold text-white text-xl">
                        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black border-2 border-black">
                            2
                        </div>
                        <h1>قدم دوم - ابزار ها</h1>
                    </div>
                </div>
                <div class="w-full grid grid-cols-3 gap-3">
                    <div v-for="i in 3" :key="i" class="flex items-center justify-center p-4 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-lg shadow hover:scale-105 transition-transform">
                        Go0
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>