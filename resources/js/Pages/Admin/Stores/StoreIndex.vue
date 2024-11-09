<script setup>
import { ref } from "vue";
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head, Link, useForm } from '@inertiajs/vue3';
import { usePermission } from "@/composables/permissions";
import Table from "@/Components/Table.vue";
import TableRow from "@/Components/TableRow.vue";
import TableHeaderCell from "@/Components/TableHeaderCell.vue";
import TableDataCell from "@/Components/TableDataCell.vue";
import Modal from "@/Components/Modal.vue";
import DangerButton from "@/Components/DangerButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

defineProps(['products']);
const form = useForm({
  deleteProductId: null,
});
const showConfirmDeleteModal = ref(false);
const { hasPermission } = usePermission(); // Destructure to use hasPermission function

const confirmDeleteProduct = (id) => {
  if (hasPermission("admin")) {  // Check for permission
    showConfirmDeleteModal.value = true;
    form.deleteProductId = id;  // Store the product ID to be deleted
  }
};

const closeModal = () => {
  showConfirmDeleteModal.value = false;
};

const deleteProduct = () => {
  form.delete(route('stores.destroy', form.deleteProductId), {
    onSuccess: () => closeModal(),
  });
};
</script>

<template>
    <Head title="Stores Index" />

    <AdminLayout>
        <div class="max-w-7xl mx-auto py-4">
            <div class="flex justify-between">
                <h1 class="text-1xl font-bold text-center bg-clip-text text-transparent bg-gradient-to-r from-gray-500 via-gray-600 to-gray-700 py-1">
                    Store Products
                </h1>
                <!-- Create Button: Only show if the user has permission -->
                <template v-if="hasPermission('create store')">
                    <Link :href="route('stores.create')" class="px-3 py-2 text-white font-semibold bg-indigo-500 hover:bg-indigo-700 rounded">New Product</Link>
                </template>
            </div>

            <div class="mt-6">
                <Table>
                    <template #header>
                        <TableRow>
                            <TableHeaderCell>Product ID</TableHeaderCell>
                            <TableHeaderCell>Product Name</TableHeaderCell>
                            <TableHeaderCell>Product Image</TableHeaderCell>
                            <TableHeaderCell>Product Description</TableHeaderCell>
                            <TableHeaderCell>Product Price</TableHeaderCell>
                            <TableHeaderCell>Status</TableHeaderCell>
                            <TableHeaderCell>Action</TableHeaderCell>
                        </TableRow>
                    </template>
                    <template #default>
                        <TableRow v-for="product in products" :key="product.id" class="border-b">
                            <TableDataCell> {{ product.id }} </TableDataCell>
                            <TableDataCell> {{ product.name }} </TableDataCell>
                            <TableDataCell>
                                <img :src="product.image_url" alt="Product Image" class="w-12 h-12 object-cover">
                            </TableDataCell>
                            <TableDataCell> {{ product.description }} </TableDataCell>
                            <TableDataCell> ${{ product.price }} </TableDataCell>
                            <TableDataCell>
                                <span v-if="product.status === 'available'" class="text-green-600">Available</span>
                                <span v-else class="text-red-600">Sold</span>
                            </TableDataCell>
                            <TableDataCell class="space-x-4">
                                <template v-if="hasPermission('update store')">
                                    <Link :href="route('stores.edit', product.id)" class="text-green-600 hover:text-green-500">Edit</Link>
                                </template>
                                <template v-if="hasPermission('delete store')">
                                    <button @click="confirmDeleteProduct(product.id)" class="text-red-400 hover:text-red-600">Delete</button>
                                </template>  
                                <Modal :show="showConfirmDeleteModal" @close="closeModal">
                                    <div class="p-6">
                                        <h2 class="text-lg font-semibold text-slate-400">Are you sure you want to delete this product?</h2>
                                        <div class="mt-6 flex space-x-4">
                                            <DangerButton @click="deleteProduct">Delete</DangerButton>
                                            <SecondaryButton @click="closeModal">Cancel</SecondaryButton>
                                        </div>
                                    </div>
                                </Modal>
                            </TableDataCell>
                        </TableRow>
                    </template>
                </Table>
            </div>
        </div>
    </AdminLayout>
</template>
