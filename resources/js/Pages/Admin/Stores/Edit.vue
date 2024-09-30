<!-- <script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";

// Props from the parent component, which contains the store data
const props = defineProps({
    store: {
        type: Object,
        required: true
    },
});

// Form setup for editing a store
const form = useForm({
    name: props.store.name,
    image_url: props.store.image_url,
    description: props.store.description,
    price: props.store.price,
    status: props.store.status // current status
});
</script>

<template>
    <Head title="Edit store" />

    <AdminLayout>
        <div class="max-w-7xl mx-auto py-4">
            <div class="flex justify-between">
                <Link :href="route('stores.index')" class="px-3 py-2 text-white font-semibold bg-indigo-500 hover:bg-indigo-700 rounded">Back</Link>
            </div>           
            <div class="mt-6 max-w-2xl mx-auto bg-slate-800 shadow-lg rounded-lg p-6">
                <h1 class="text-2xl font-semibold text-center text-gray-400">Edit Store</h1>
                <form @submit.prevent="form.put(route('stores.update', props.store.id))">
                    <!-- Product Name -->
                    <div class="mt-4">
                        <InputLabel for="name" value="Product Name" />
                        <TextInput
                            id="name"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.name"
                            autofocus
                            autocomplete="name"
                        />
                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>

                    <!-- Image URL -->
                    <div class="mt-4">
                        <InputLabel for="image_url" value="Image URL" />
                        <TextInput
                            id="image_url"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.image_url"
                            autocomplete="image_url"
                        />
                        <InputError class="mt-2" :message="form.errors.image_url" />
                    </div>

                    <!-- Description -->
                    <div class="mt-4">
                        <InputLabel for="description" value="Description" />
                        <TextInput
                            id="description"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.description"
                            autocomplete="description"
                        />
                        <InputError class="mt-2" :message="form.errors.description" />
                    </div>

                    <!-- Price -->
                    <div class="mt-4">
                        <InputLabel for="price" value="Price" />
                        <TextInput
                            id="price"
                            type="number"
                            class="mt-1 block w-full"
                            v-model="form.price"
                            autocomplete="price"
                        />
                        <InputError class="mt-2" :message="form.errors.price" />
                    </div>

                    <!-- Status -->
                    <div class="mt-4">
                        <InputLabel for="status" value="Status" />
                        <select
                            id="status"
                            v-model="form.status"
                            class="mt-1 block w-full bg-gray-700 border border-gray-300 text-white rounded"
                        >
                            <option value="available">Available</option>
                            <option value="sold">Sold</option>
                        </select>
                        <InputError class="mt-2" :message="form.errors.status" />
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center mt-4">
                        <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Update Store
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AdminLayout>
</template> -->
