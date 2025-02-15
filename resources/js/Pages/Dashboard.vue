<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Parallax from 'vue-parallax-js'; 
</script>
<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div>
            <Parallax :speed="0.5">
                <img src="{{ asset('img/download.jpg') }}" alt="Imagem com parallax" />
            </Parallax>
            
            <div class="content">
                <p>Texto ou outros elementos abaixo do parallax.</p>
            </div>
        </div>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
.content {
    padding: 20px;
    background-color: #f0f0f0;
}
</style>
