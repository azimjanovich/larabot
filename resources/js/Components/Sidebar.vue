<script setup>

import { HomeOutline, ShieldOutline, LogoReddit, PeopleOutline, PeopleCircleOutline, ChatbubblesOutline } from "@vicons/ionicons5"

const menuOptions = [
    {
        label: () => h(Link, { href: route('dashboard') }, { default: () => "Home" }),
        key: "dashboard",
        icon: renderIcon(HomeOutline)
    },
    {
        label: "Admin",
        key: "pinball-1973",
        icon: renderIcon(ShieldOutline),
        children: [
            {
                label: () => h(Link, { href: route('admin.bots') }, { default: () => "Bots" }),
                key: "admin.bots",
                icon: renderIcon(LogoReddit),
            },
            {
                label: () => h(Link, { href: route('dashboard') }, { default: () => "Users" }),
                key: "dashboard",
                icon: renderIcon(PeopleOutline)
            },
        ]
    },
    {
        label: () => h(Link, { href: route('dashboard') }, { default: () => "Bot Users" }),
        key: "dashboard",
        icon: renderIcon(PeopleCircleOutline)
    },
    {
        label: () => h(Link, { href: route('dashboard') }, { default: () => "Chats" }),
        key: "dashboard",
        icon: renderIcon(ChatbubblesOutline)
    }
];

const details = reactive({
    collapse: JSON.parse(localStorage.getItem('collapse'))
})

const collapse = (isCollapse) => {
    localStorage.setItem('collapse', isCollapse)
    details.collapse = isCollapse
}
</script>
<template>
    <n-layout-sider @update:collapsed="collapse" :collapsed="details.collapse" :inverted="false" bordered show-trigger
        collapse-mode="width" :collapsed-width="64" :width="230" :native-scrollbar="false" class="h-screen shadow-sm">
        <a href="#" target="_blank" class="w-full flex items-center my-2 justify-center px-5">
            <img src="../Assets/Images/logo-larabot-short.png" :class="details.collapse ? 'w-11' : 'w-1/2 pt-3'">
        </a>
        <n-menu :collapsed-width="64" :collapsed-icon-size="22" :default-value="route().current()" :options="menuOptions"
            class="text-sm font-medium mt-2" />
    </n-layout-sider>
</template>