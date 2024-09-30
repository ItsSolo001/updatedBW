<template>
    <AuthenticatedLayout>
        <Head title="Dashboard" />
        <div class="py-6 sm:py-12 bg-gray-900">
            <div class="max-w-full mx-4 sm:mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded">
                    <div class="p-4 sm:p-6 bg-gray-800 border-b border-gray-900 rounded">
                        <h1 class="text-xl sm:text-2xl font-bold text-white">Dashboard</h1>
                        <div class="mt-4 sm:mt-6">
                            <h2 class="text-lg sm:text-xl font-semibold text-white">Stores</h2>

                                
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import { Head, usePage } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

const { props } = usePage();
const stores = props.stores;
</script>

<style scoped>
.grid > * {
    transition: transform 0.3s ease-in-out;
}

.grid > *:hover {
    transform: translateY(-3px);
}
</style>
