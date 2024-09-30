<template>
    <!-- component -->
    <div class="flex justify-center items-center mt-4">
      <div class="container mx-auto px-4">
        <!-- Responsive Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
          <!-- Loop through the cards array -->
          <div
            v-for="(card, index) in cards"
            :key="index"
            class="relative flex flex-col text-gray-200 bg-slate-600 shadow-md bg-clip-border rounded-xl w-full"
          >
            <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white bg-clip-border rounded-xl h-96">
              <img
                :src="card.image"
                alt="card-image"
                class="object-cover w-full h-full"
              />
            </div>
            <div class="p-6">
              <div class="flex items-center justify-between mb-2">
                <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                  {{ card.title }}
                </p>
                <p class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-100">
                  ${{ card.price.toFixed(2) }}
                </p>
              </div>
              <p class="block font-sans text-sm antialiased font-normal leading-normal text-gray-300 opacity-75">
                {{ card.description }}
              </p>
            </div>
            <div class="p-6 pt-0">
              <button
                class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-gray-900/10 hover:shadow-gray-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-blue-gray-900/10 text-blue-gray-900 shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"
                type="button"
              >
                Add to Cart
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        cards: [
          {
            image: 'images/logo/Brooklynlogo.png',
            title: 'Apple AirPods',
            description: 'With plenty of talk and listen time, voice-activated Siri access, and an available wireless charging case.',
            price: 95.00,
          },
          {
            image: 'images/logo/Brooklynlogo.png',
            title: 'Sony Headphones',
            description: 'Noise-cancelling wireless headphones with long battery life and a comfortable fit.',
            price: 150.00,
          },
          {
            image: 'images/logo/Brooklynlogo.png',
            title: 'JBL Speaker',
            description: 'Portable Bluetooth speaker with powerful sound and up to 12 hours of playtime.',
            price: 120.00,
          },
          {
            image: 'images/logo/Brooklynlogo.png',
            title: 'Fitbit Watch',
            description: 'Fitness tracker with heart rate monitoring, sleep tracking, and GPS capabilities.',
            price: 99.99,
          },
          {
            image: 'images/logo/Brooklynlogo.png',
            title: 'Samsung Galaxy Buds',
            description: 'True wireless earbuds with immersive sound and long-lasting battery.',
            price: 130.00,
          },
        ],
      };
    },
  };
  </script>
  
  <style scoped>
  /* Add any additional styles here */
  </style>
  