<template>
    <div class="bg-gradient-to-b from-gray-700 to-gray-900 mt-4"> <!-- Updated background with gradient -->
      <h1 class="text-center text-gray-100 text-3xl lg:text-3xl mb-1">PRODUCTS</h1>
      <div class="container mx-auto p-4 mb-1">
        <div
          class="card shadow-2xl hover:shadow-lg hover:transform hover:-translate-y-2 transition-all duration-300"
          onclick="this.querySelector('.card-inner').classList.toggle('is-flipped')"
        >
          <div class="card-inner">
            <div class="card-front bg-gray-200 flex items-center justify-center rounded-lg overflow-hidden">
              <img src="images/logo/Brooklynlogo.png" alt="Product Image" class="w-full h-full object-cover">
            </div>
            <div class="card-back bg-gray-300 flex items-center justify-center rounded-lg overflow-hidden">
              <p>Product Description Here...</p>
            </div>
          </div>
        </div>
  
        <!-- Repeat for other cards -->
        <div
          class="card shadow-2xl hover:shadow-lg hover:transform hover:-translate-y-2 transition-all duration-300"
          onclick="this.querySelector('.card-inner').classList.toggle('is-flipped')"
        >
          <div class="card-inner">
            <div class="card-front bg-gray-200 flex items-center justify-center rounded-lg overflow-hidden">
              <img src="images/logo/Brooklynlogo.png" alt="Product Image" class="w-full h-full object-cover">
            </div>
            <div class="card-back bg-gray-300 flex items-center justify-center rounded-lg overflow-hidden">
              <p>Product Description Here...</p>
            </div>
          </div>
        </div>
        <!-- Repeat more cards as needed -->
        <div
          class="card shadow-2xl hover:shadow-lg hover:transform hover:-translate-y-2 transition-all duration-300"
          onclick="this.querySelector('.card-inner').classList.toggle('is-flipped')"
        >
          <div class="card-inner">
            <div class="card-front bg-gray-200 flex items-center justify-center rounded-lg overflow-hidden">
              <img src="images/logo/Brooklynlogo.png" alt="Product Image" class="w-full h-full object-cover">
            </div>
            <div class="card-back bg-gray-300 flex items-center justify-center rounded-lg overflow-hidden">
              <p>Product Description Here...</p>
            </div>
          </div>
        </div>

        <div
          class="card shadow-2xl hover:shadow-lg hover:transform hover:-translate-y-2 transition-all duration-300"
          onclick="this.querySelector('.card-inner').classList.toggle('is-flipped')"
        >
          <div class="card-inner">
            <div class="card-front bg-gray-200 flex items-center justify-center rounded-lg overflow-hidden">
              <img src="images/logo/Brooklynlogo.png" alt="Product Image" class="w-full h-full object-cover">
            </div>
            <div class="card-back bg-gray-300 flex items-center justify-center rounded-lg overflow-hidden">
              <p>Product Description Here...</p>
            </div>
          </div>
        </div>

        <div
          class="card shadow-2xl hover:shadow-lg hover:transform hover:-translate-y-2 transition-all duration-300"
          onclick="this.querySelector('.card-inner').classList.toggle('is-flipped')"
        >
          <div class="card-inner">
            <div class="card-front bg-gray-200 flex items-center justify-center rounded-lg overflow-hidden">
              <img src="images/logo/Brooklynlogo.png" alt="Product Image" class="w-full h-full object-cover">
            </div>
            <div class="card-back bg-gray-300 flex items-center justify-center rounded-lg overflow-hidden">
              <p>Product Description Here...</p>
            </div>
          </div>
        </div>

        <div
          class="card shadow-2xl hover:shadow-lg hover:transform hover:-translate-y-2 transition-all duration-300"
          onclick="this.querySelector('.card-inner').classList.toggle('is-flipped')"
        >
          <div class="card-inner">
            <div class="card-front bg-gray-200 flex items-center justify-center rounded-lg overflow-hidden">
              <img src="images/logo/Brooklynlogo.png" alt="Product Image" class="w-full h-full object-cover">
            </div>
            <div class="card-back bg-gray-300 flex items-center justify-center rounded-lg overflow-hidden">
              <p>Product Description Here...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
<style>
    /* product-container */
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}

/* Add depth to the card */
.card {
  perspective: 1000px;
  margin: 10px;
  transition: transform 0.6s, box-shadow 0.3s;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); /* Initial depth effect */
  border-radius: 10px;
}

/* Hover effect to enhance depth */
.card:hover {
  transform: translateY(-10px); /* Lift on hover */
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3); /* Stronger shadow on hover */
}
/* Inner card flip effect */
.card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transform-style: preserve-3d;
  transition: transform 0.6s;
}
.card-inner.is-flipped {
  transform: rotateY(180deg);
}
.card-front, .card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  border-radius: 10px; /* Add subtle rounding to the edges */
  box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.5); /* Inner shadow for depth */
}
/* Gradient for the background to simulate depth */
.bg-gradient-to-b {
  background: linear-gradient(to bottom, #4a5568, #2d3748); /* From gray-700 to gray-900 */
}
.card-back {
  transform: rotateY(180deg);
  background: linear-gradient(to bottom, #e2e8f0, #cbd5e0); /* Light gradient on card back */
}
/* Media Queries */
@media (max-width: 768px) {
  .card {
    width: 100px;
    height: 150px;
  }
}

@media (min-width: 769px) {
  .card {
    width: 200px;
    height: 300px;
  }
}

</style>
