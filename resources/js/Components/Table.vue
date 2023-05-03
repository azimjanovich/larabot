<script setup>
defineProps({
    data: Object,
    columns: Array,
    paginationPage: Function
})
</script>

<template>
    <n-data-table :bordered="true" :single-line="false" :columns="columns" :data="data.data" />

    <n-pagination class="mt-3" :page-count="data.last_page" v-model:page="data.current_page"
        @update:page="paginationPage" />
</template>