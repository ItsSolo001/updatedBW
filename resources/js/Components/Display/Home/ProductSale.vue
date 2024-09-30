<template>
  <div>
    <div class="container mx-auto p-1 relative"> <!-- Added relative positioning -->
      <div class="flex flex-col md:flex-row justify-between gap-2 mt-4">
        <!-- Container 1 -->
        <div class="w-full md:w-1/2 bg-gray-700 p-6 rounded-lg relative">
          <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl md:text-2xl text-white font-playfair">Product</h2>
            <a href="#" class="text-xs md:text-sm text-gray-400 font-playfair">See More</a>
          </div>

          <!-- Slider for Container 1 -->
          <div class="relative">
            <!-- Left Button (Adjusted left position and added z-index) -->
            <button
              @click="prevCard(0)"
              class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-500 p-2 text-white rounded-full hover:bg-gray-400 transition-colors duration-300 z-10"
            >
              &lt;
            </button>

            <div class="flex gap-4 overflow-hidden">
              <!-- Display two cards at a time for Container 1 -->
              <div
                v-for="(product, index) in productsContainer1.slice(currentIndexContainer1, currentIndexContainer1 + 2)"
                :key="index"
                class="bg-gray-600 p-4 rounded-lg w-full transition-transform duration-300 transform hover:scale-105"
              >
                <img :src="product.image" alt="product" class="w-full h-auto mb-4 rounded-lg" />
                <div class="text-left">
                  <h3 class="text-base md:text-lg text-white mb-2 font-playfair">Name: {{ product.name }}</h3>
                  <p class="text-xs md:text-sm text-gray-300 mb-1">Description: {{ product.description }}</p>
                  <div class="text-sm font-bold text-white mb-1">₱rice: {{ product.price }}</div>
                  <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-3 rounded transition-colors duration-300">Buy Now</button>
                </div>
              </div>
            </div>

            <!-- Right Button -->
            <button
              @click="nextCard(0)"
              class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-500 p-2 text-white rounded-full hover:bg-gray-400 transition-colors duration-300 z-10"
            >
              &gt;
            </button>
          </div>
        </div>

        <!-- Container 2 -->
        <div class="w-full md:w-1/2 bg-gray-700 p-6 rounded-lg relative mt-4 md:mt-0">
          <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl md:text-2xl text-white font-playfair">Product</h2>
            <a href="#" class="text-xs md:text-sm text-gray-400 font-playfair">See More</a>
          </div>

          <!-- Slider for Container 2 -->
          <div class="relative">
            <!-- Left Button (Adjusted left position and added z-index) -->
            <button
              @click="prevCard(1)"
              class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-500 p-2 text-white rounded-full hover:bg-gray-400 transition-colors duration-300 z-10"
            >
              &lt;
            </button>

            <div class="flex gap-4 overflow-hidden">
              <!-- Display two cards at a time for Container 2 -->
              <div
                v-for="(product, index) in productsContainer2.slice(currentIndexContainer2, currentIndexContainer2 + 2)"
                :key="index"
                class="bg-gray-600 p-4 rounded-lg w-full transition-transform duration-300 transform hover:scale-105"
              >
                <img :src="product.image" alt="product" class="w-full h-auto mb-4 rounded-lg" />
                <div class="text-left">
                  <h3 class="text-base md:text-lg text-white mb-2 font-playfair">Name: {{ product.name }}</h3>
                  <p class="text-xs md:text-sm text-gray-300 mb-1">Description: {{ product.description }}</p>
                  <div class="text-sm font-bold text-white mb-1">₱rice: {{ product.price }}</div>          
                  <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded transition-colors duration-300">Buy Now</button>
                </div>
              </div>
            </div>

            <!-- Right Button -->
            <button
              @click="nextCard(1)"
              class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-500 p-2 text-white rounded-full hover:bg-gray-400 transition-colors duration-300 z-10"
            >
              &gt;
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
      currentIndexContainer1: 0,
      currentIndexContainer2: 0,
      productsContainer1: [
        { image: '/images/slider/slider2_1.png', name: 'Product 1', description: 'Description 1', price: '100' },
        { image: '/images/slider/slider2_1.png', name: 'Product 2', description: 'Description 2', price: '200' },
        { image: '/images/slider/slider2_2.png', name: 'Product 3', description: 'Description 3', price: '300' },
        { image: '/images/slider/slider2_2.png', name: 'Product 4', description: 'Description 4', price: '400' },
        { image: '/images/slider/slider2_3.png', name: 'Product 5', description: 'Description 5', price: '500' },
        { image: '/images/slider/slider2_3.png', name: 'Product 6', description: 'Description 6', price: '600' },
        { image: '/images/slider/slider2_4.png', name: 'Product 7', description: 'Description 7', price: '700' },
        { image: '/images/slider/slider2_4.png', name: 'Product 8', description: 'Description 8', price: '800' },
        { image: '/images/slider/slider2_5.png', name: 'Product 9', description: 'Description 9', price: '900' },
        { image: '/images/slider/slider2_5.png', name: 'Product 10', description: 'Description 10', price: '1000' },
      ],
      productsContainer2: [
        { image: '/images/slider/slider2_1.png', name: 'Product 11', description: 'Description 11', price: '1100' },
        { image: '/images/slider/slider2_1.png', name: 'Product 12', description: 'Description 12', price: '1200' },
        { image: '/images/slider/slider2_2.png', name: 'Product 13', description: 'Description 13', price: '1300' },
        { image: '/images/slider/slider2_2.png', name: 'Product 14', description: 'Description 14', price: '1400' },
        { image: '/images/slider/slider2_3.png', name: 'Product 15', description: 'Description 15', price: '1500' },
        { image: '/images/slider/slider2_3.png', name: 'Product 16', description: 'Description 16', price: '1600' },
        { image: '/images/slider/slider2_4.png', name: 'Product 17', description: 'Description 17', price: '1700' },
        { image: '/images/slider/slider2_4.png', name: 'Product 18', description: 'Description 18', price: '1800' },
        { image: '/images/slider/slider2_5.png', name: 'Product 19', description: 'Description 19', price: '1900' },
        { image: '/images/slider/slider2_5.png', name: 'Product 20', description: 'Description 20', price: '2000' },
      ],
    };
  },
  methods: {
    prevCard(containerIndex) {
      if (containerIndex === 0) {
        this.currentIndexContainer1 =
          this.currentIndexContainer1 === 0
            ? this.productsContainer1.length - 2
            : this.currentIndexContainer1 - 2;
      } else {
        this.currentIndexContainer2 =
          this.currentIndexContainer2 === 0
            ? this.productsContainer2.length - 2
            : this.currentIndexContainer2 - 2;
      }
    },
    nextCard(containerIndex) {
      if (containerIndex === 0) {
        this.currentIndexContainer1 =
          this.currentIndexContainer1 >= this.productsContainer1.length - 2
            ? 0
            : this.currentIndexContainer1 + 2;
      } else {
        this.currentIndexContainer2 =
          this.currentIndexContainer2 >= this.productsContainer2.length - 2
            ? 0
            : this.currentIndexContainer2 + 2;
      }
    },
  },
};
</script>

<style scoped>
.container {
  padding-left: 10px;
}
.font-playfair {
    font-family: 'Playfair Display', serif;
}

</style>
