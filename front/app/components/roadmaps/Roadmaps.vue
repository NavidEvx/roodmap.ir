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
    { name: 'React', link: '#React' },
    { name: 'Vue', link: '#Vue' },
    { name: 'Laravel', link: '#Laravel' },
    { name: 'SQL', link: '#SQL' },
    { name: 'Node.js', link: '#NodeJs' }
];

const domains: Item[] = [
    { name: 'Frontend', link: '#Frontend' },
    { name: 'Backend', link: '#Backend' },
    { name: 'AI', link: '#AI' },
    { name: 'Mobile', link: '#Mobile' },
    { name: 'DevOps', link: '#DevOps' }
];

const items = computed(() => props.type === 2 ? skills : domains);
</script>

<template>
    <div class="grid grid-cols-3 justify-center gap-2 text-center">
        <NuxtLink
            v-for="item in items"
            :key="item.name"
            :to="item.link"
            class="w-full py-3 bg-gray-800/30 border border-gray-700 text-white rounded-lg hover:border-gray-500 transform transition">
            {{ item.name }}
        </NuxtLink>
    </div>
</template>
