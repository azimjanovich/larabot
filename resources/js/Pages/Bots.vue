<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Tabele from '@/Components/Table.vue'
import { Head } from '@inertiajs/vue3'

const props = defineProps({
    bots: { data: [] }
})
</script>

<template>
    <Head title="Bots" />

    <AuthenticatedLayout>
        <div class="bg-white rounded-md shadow-sm p-8">
            <Tabele :data="bots" />
        </div>
    </AuthenticatedLayout>
</template>
