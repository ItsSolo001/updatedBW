<template>
    <AuthenticatedLayout>
        <Head title="Dashboard" />
        <div class="py-6 sm:py-12 bg-gray-900">
            <div class="max-w-full mx-4 sm:mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-700 overflow-hidden shadow-sm sm:rounded">
                    <div class="p-4 sm:p-6 bg-gray-800 border-b border-gray-900 rounded">

                        <div class="mt-4 sm:mt-6">
                            <div class="px-4 xl:px-0 py-10">
                                <div class="flex flex-col lg:flex-row lg:justify-between items-center">
                                    <h1 class="text-3xl ml-2 lg:ml-0 lg:text-4xl font-bold text-gray-200 tracking-normal lg:w-11/12">Stores</h1>
                                    
                                    <div class="lg:w-2/5 flex mt-10 lg:mt-0 lg:justify-end">
                                        <div class="pt-2 relative text-gray-600">
                                            <input class="focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 bg-gray-700 h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Search" />
                                            <button type="submit" class="focus:ring-2 focus:ring-offset-2 text-gray-600 focus:text-indigo-700 focus:rounded-full focus:bg-gray-100 focus:ring-indigo-700 bg-gray-700 focus:outline-none absolute right-0 top-0 mt-5 mr-4">
                                                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966" width="512px" height="512px">
                                                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17s-17-7.626-17-17S14.61,6,23.984,6z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 pb-6 gap-8 mt-8">
                                    <div role="cell" class="bg-gray-100">
                                        <div class="bg-gray-700 p-5 rounded-md relative h-full w-full">
                                            <span><img class="bg-gray-200 p-2 mb-5 rounded-full" src="https://i.ibb.co/27R6nk5/home-1.png" alt="home-1" /></span>
                                            <h1 class="pb-4 text-2xl font-semibold text-gray-200">Store Name</h1>
                                            <div class="my-5 flex justify-center">
                                                <img class="w-30 h-50 hover:shadow-[0_0_15px_5px_rgba(255,255,255,0.5)] transition-all duration-300" src="images/slider/slider2_1.png" alt="Logo">
                                            </div>

                                            <a class="hover:text-indigo-500 hover:underline absolute bottom-5 text-sm text-indigo-400 font-bold cursor-pointer flex items-center" href="javascript:void(0)">
                                                <p>Show more</p>
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#818CF8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <line x1="5" y1="12" x2="19" y2="12" />
                                                        <line x1="15" y1="16" x2="19" y2="12" />
                                                        <line x1="15" y1="8" x2="19" y2="12" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div role="cell" class="bg-gray-100">
                                        <div class="bg-gray-700 p-5 rounded-md relative h-full w-full">
                                            <span><img class="bg-gray-200 p-2 mb-5 rounded-full" src="https://i.ibb.co/27R6nk5/home-1.png" alt="pricetags-1" /></span>
                                            <h1 class="pb-4 text-2xl font-semibold text-gray-200">Store Name</h1>
                                            <div class="my-5 flex justify-center">
                                                <img class="w-30 h-50 hover:shadow-[0_0_15px_5px_rgba(255,255,255,0.5)] transition-all duration-300" src="images/slider/slider2_2.png" alt="Logo">
                                            </div>

                                            <a class="hover:text-indigo-500 hover:underline absolute bottom-5 text-sm text-indigo-400 font-bold cursor-pointer flex items-center" href="javascript:void(0)">
                                                <p>Show more</p>
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#818CF8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <line x1="5" y1="12" x2="19" y2="12" />
                                                        <line x1="15" y1="16" x2="19" y2="12" />
                                                        <line x1="15" y1="8" x2="19" y2="12" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div role="cell" class="bg-gray-100">
                                        <div class="bg-gray-700 p-5 rounded-md relative h-full w-full">
                                            <span><img class="bg-gray-200 p-2 mb-5 rounded-full" src="https://i.ibb.co/27R6nk5/home-1.png" alt="home-1" /></span>
                                            <h1 class="pb-4 text-2xl font-semibold text-gray-200">Store Name</h1>
                                            <div class="my-5 flex justify-center">
                                                <img class="w-30 h-50 hover:shadow-[0_0_15px_5px_rgba(255,255,255,0.5)] transition-all duration-300" src="images/slider/slider2_3.png" alt="Logo">
                                            </div>

                                            <a class="hover:text-indigo-500 hover:underline absolute bottom-5 text-sm text-indigo-400 font-bold cursor-pointer flex items-center" href="javascript:void(0)">
                                                <p>Show more</p>
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#818CF8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <line x1="5" y1="12" x2="19" y2="12" />
                                                        <line x1="15" y1="16" x2="19" y2="12" />
                                                        <line x1="15" y1="8" x2="19" y2="12" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div role="cell" class="bg-gray-100">
                                        <div class="bg-gray-700 p-5 rounded-md relative h-full w-full">
                                            <span><img class="bg-gray-200 p-2 mb-5 rounded-full" src="https://i.ibb.co/27R6nk5/home-1.png" alt="home-1" /></span>
                                            <h1 class="pb-4 text-2xl font-semibold text-gray-200">Store Name</h1>
                                            <div class="my-5 flex justify-center">
                                                <img class="w-30 h-50 hover:shadow-[0_0_15px_5px_rgba(255,255,255,0.5)] transition-all duration-300" src="images/slider/slider2_4.png" alt="Logo">
                                            </div>

                                            <a class="hover:text-indigo-500 hover:underline absolute bottom-5 text-sm text-indigo-400 font-bold cursor-pointer flex items-center" href="javascript:void(0)">
                                                <p>Show more</p>
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#818CF8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <line x1="5" y1="12" x2="19" y2="12" />
                                                        <line x1="15" y1="16" x2="19" y2="12" />
                                                        <line x1="15" y1="8" x2="19" y2="12" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div role="cell" class="bg-gray-100">
                                        <div class="bg-gray-700 p-5 rounded-md relative h-full w-full">
                                            <span><img class="bg-gray-200 p-2 mb-5 rounded-full" src="https://i.ibb.co/27R6nk5/home-1.png" alt="home-1" /></span>
                                            <h1 class="pb-4 text-2xl font-semibold text-gray-200">Store Name</h1>
                                            <div class="my-5 flex justify-center">
                                                <img class="w-30 h-50 hover:shadow-[0_0_15px_5px_rgba(255,255,255,0.5)] transition-all duration-300" src="images/slider/slider2_5.png" alt="Logo">
                                            </div>

                                            <a class="hover:text-indigo-500 hover:underline absolute bottom-5 text-sm text-indigo-400 font-bold cursor-pointer flex items-center" href="javascript:void(0)">
                                                <p>Show more</p>
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#818CF8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <line x1="5" y1="12" x2="19" y2="12" />
                                                        <line x1="15" y1="16" x2="19" y2="12" />
                                                        <line x1="15" y1="8" x2="19" y2="12" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div role="cell" class="bg-gray-100">
                                        <div class="bg-gray-700 p-5 rounded-md relative h-full w-full">
                                            <span><img class="bg-gray-200 p-2 mb-5 rounded-full" src="https://i.ibb.co/27R6nk5/home-1.png" alt="home-1" /></span>
                                            <h1 class="pb-4 text-2xl font-semibold text-gray-200">Store Name</h1>
                                            <div class="my-5 flex justify-center">
                                                <img class="w-30 h-50 hover:shadow-[0_0_15px_5px_rgba(255,255,255,0.5)] transition-all duration-300" src="images/slider/slider2_6.png" alt="Logo">
                                            </div>

                                            <a class="hover:text-indigo-500 hover:underline absolute bottom-5 text-sm text-indigo-400 font-bold cursor-pointer flex items-center" href="javascript:void(0)">
                                                <p>Show more</p>
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#818CF8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <line x1="5" y1="12" x2="19" y2="12" />
                                                        <line x1="15" y1="16" x2="19" y2="12" />
                                                        <line x1="15" y1="8" x2="19" y2="12" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div role="cell" class="bg-gray-100">
                                        <div class="bg-gray-700 p-5 rounded-md relative h-full w-full">
                                            <span><img class="bg-gray-200 p-2 mb-5 rounded-full" src="https://i.ibb.co/27R6nk5/home-1.png" alt="home-1" /></span>
                                            <h1 class="pb-4 text-2xl font-semibold text-gray-200">Store Name</h1>
                                            <div class="my-5 flex justify-center">
                                                <img class="w-30 h-50 hover:shadow-[0_0_15px_5px_rgba(255,255,255,0.5)] transition-all duration-300" src="images/slider/slider2_7.png" alt="Logo">
                                            </div>

                                            <a class="hover:text-indigo-500 hover:underline absolute bottom-5 text-sm text-indigo-400 font-bold cursor-pointer flex items-center" href="javascript:void(0)">
                                                <p>Show more</p>
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#818CF8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <line x1="5" y1="12" x2="19" y2="12" />
                                                        <line x1="15" y1="16" x2="19" y2="12" />
                                                        <line x1="15" y1="8" x2="19" y2="12" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div role="cell" class="bg-gray-100">
                                        <div class="bg-gray-700 p-5 rounded-md relative h-full w-full">
                                            <span><img class="bg-gray-200 p-2 mb-5 rounded-full" src="https://i.ibb.co/27R6nk5/home-1.png" alt="home-1" /></span>
                                            <h1 class="pb-4 text-2xl font-semibold text-gray-200">Store Name</h1>
                                            <div class="my-5 flex justify-center">
                                                <img class="w-30 h-50 hover:shadow-[0_0_15px_5px_rgba(255,255,255,0.5)] transition-all duration-300" src="images/slider/slider2_8.png" alt="Logo">
                                            </div>

                                            <a class="hover:text-indigo-500 hover:underline absolute bottom-5 text-sm text-indigo-400 font-bold cursor-pointer flex items-center" href="javascript:void(0)">
                                                <p>Show more</p>
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#818CF8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <line x1="5" y1="12" x2="19" y2="12" />
                                                        <line x1="15" y1="16" x2="19" y2="12" />
                                                        <line x1="15" y1="8" x2="19" y2="12" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div role="cell" class="bg-gray-100">
                                        <div class="bg-gray-700 p-5 rounded-md relative h-full w-full">
                                            <span><img class="bg-gray-200 p-2 mb-5 rounded-full" src="https://i.ibb.co/27R6nk5/home-1.png" alt="home-1" /></span>
                                            <h1 class="pb-4 text-2xl font-semibold text-gray-200">Store Name</h1>
                                            <div class="my-5 flex justify-center">
                                                <img class="w-30 h-50 hover:shadow-[0_0_15px_5px_rgba(255,255,255,0.5)] transition-all duration-300" src="images/slider/slider2_9.png" alt="Logo">
                                            </div>

                                            <a class="hover:text-indigo-500 hover:underline absolute bottom-5 text-sm text-indigo-400 font-bold cursor-pointer flex items-center" href="javascript:void(0)">
                                                <p>Show more</p>
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#818CF8" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <line x1="5" y1="12" x2="19" y2="12" />
                                                        <line x1="15" y1="16" x2="19" y2="12" />
                                                        <line x1="15" y1="8" x2="19" y2="12" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
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

</script>

<style scoped>
.grid > * {
    transition: transform 0.3s ease-in-out;
}

.grid > *:hover {
    transform: translateY(-3px);
}
</style>
