<script setup lang="ts">
interface Item {
    name: string;
    link: string;
}

interface Props {
    type: number;
}

const props = defineProps<Props>();

// داده‌ها
const skills: Item[] = [
    { name: 'React', link: 'react' },
    { name: 'Vue', link: 'vue' },
    { name: 'Laravel', link: 'laravel' },
    { name: 'SQL', link: 'sql' },
    { name: 'Node.js', link: 'nodejs' }
];

const domains: Item[] = [
    { name: 'Frontend', link: 'frontend' },
    { name: 'Backend', link: 'backend' },
    { name: 'AI', link: 'ai' },
    { name: 'Mobile', link: 'mobile' },
    { name: 'DevOps', link: 'devops' }
];

const items = computed(() => props.type === 2 ? skills : domains);
</script>

<template>
    <div class="grid grid-cols-3 justify-center gap-2 text-center">
        <NuxtLink
            v-for="item in items"
            :key="item.name"
            :to="'/roadmap/' + item.link"
            class="w-full py-3 bg-gray-800/30 border border-gray-700 text-white rounded-lg hover:border-gray-500 transform transition">
            {{ item.name }}
        </NuxtLink>
    </div>
</template>
