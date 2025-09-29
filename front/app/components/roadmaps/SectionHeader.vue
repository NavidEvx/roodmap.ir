<script setup lang="ts">
interface Props {
    name: string
}
const props = defineProps<Props>()
</script>

<template>
    <div class="flex items-center justify-center my-8">
        <div class="flex-grow border-t border-gray-700"></div>
        <h2 class="py-1 px-4 rounded-lg bg-gray-800/50 border border-gray-700 text-lg sm:text-xl text-center text-gray-900 dark:text-gray-400">
            {{ name }}
        </h2>
        <div class="flex-grow border-t border-gray-700"></div>
    </div>
</template>