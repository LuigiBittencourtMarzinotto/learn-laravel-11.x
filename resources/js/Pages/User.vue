<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Parallax from 'vue-parallax-js';
const props = defineProps({
    users: Array,
    pathImg: String,
    pathAddUser: String,
    errors: Array,
});
</script>
<template>

    <Head title="User" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                User
            </h2>
        </template>

        <!-- <div>
            <Parallax :speed="0.5">
                <img :src="pathImg" alt="Imagem com parallax" />

            </Parallax>
            <div class="content">
                <p>Texto ou outros elementos abaixo do parallax.</p>
            </div>
        </div> -->
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <!-- Exibindo os usuários passados pelo Laravel -->
                        <div class="flex flex-wrap">
                            <div class="w-full sm:w-1/2">
                                <h3 class="text-lg font-semibold">Users List</h3>
                            </div>
                            <a :href="pathAddUser"
                                class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                                Adicionar Usuário
                        </a>
                        </div>
                        <div v-if="props.errors.length > 0" class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                            <ul>
                                <li v-for="(error, index) in props.errors" :key="index">
                                    {{ error }}
                                </li>
                            </ul>
                        </div>

                        <ul>
                            <li v-for="user in props.users" :key="user.id">{{ user.name }}</li>
                        </ul>
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