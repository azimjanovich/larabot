<script setup>
const props = defineProps({
    user: Object,
    title: String
})

</script>
<template>
    <n-layout-header bordered class="h-14 items-center flex justify-between px-4">
        <p class="text-lg font-bold">{{ user.name }}</p>
        <div class="items-center justify-center flex">
            Test
        </div>
    </n-layout-header>
</template>