<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class=" bg-[url(@/Assets/Images/bg-larabot.jpg)] bg-cover bg-center">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-black/40">
            <div>
                <Link href="/">
                <ApplicationLogo class="w-32 h-32 fill-current text-gray-500" />
                </Link>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <slot />
            </div>
        </div>
    </div>
</template>
