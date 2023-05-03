<script setup>
import Sidebar from '../Components/Sidebar.vue'
import Navbar from '../Components/Navbar.vue'
import Footer from '../Components/Footer.vue'
</script>

<template>
    <n-space vertical>
        <n-layout>
            <n-layout has-sider>
                <!-- begin::sidebar -->
                <Sidebar />
                <!-- end::sidebar -->

                <!-- begin::content -->
                <n-layout-content class="h-screen">
                    <!-- begin::header -->
                    <Navbar :user="$page.props.auth.user" />
                    <!-- end::header -->


                    <div class="relative">
                        <div
                            class="bg-[url(@/Assets/Images/bg-light-dashbord.png)] bg-cover bg-center bg-fixed before:absolute before:inset-0 before:bg-white/90 z-0">
                            <div class="h-screen py-8 bg-blue-300/10 relative">
                                <main class="rounded-lg mx-12 p-2">
                                    <slot />
                                </main>
                            </div>
                        </div>
                    </div>


                    <!-- begin::footer -->
                    <Footer />
                    <!-- end::footer -->
                </n-layout-content>
                <!-- end::content -->
            </n-layout>
        </n-layout>
    </n-space>
</template>
