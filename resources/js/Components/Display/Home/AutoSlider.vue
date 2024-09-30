<template>

<div>
            <main>  
        
                <!-- Brand Slider -->
        
                <div class="slider brand-slider" style="
                    --width: 100px;
                    --height: 50px;
                    --quantity: 10;
                ">   

                    <div class="list brand-list">
                    <!-- Add brand items here -->
                        <div class="item" style="--position: 1"><img src="images/slider/slider1_1.png" alt=""></div>
                        <div class="item" style="--position: 2"><img src="images/slider/slider1_2.png" alt=""></div>
                        <div class="item" style="--position: 3"><img src="images/slider/slider1_3.png" alt=""></div>
                        <div class="item" style="--position: 4"><img src="images/slider/slider1_4.png" alt=""></div>
                        <div class="item" style="--position: 5"><img src="images/slider/slider1_5.png" alt=""></div>
                        <div class="item" style="--position: 6"><img src="images/slider/slider1_6.png" alt=""></div>
                        <div class="item" style="--position: 7"><img src="images/slider/slider1_7.png" alt=""></div>
                        <div class="item" style="--position: 8"><img src="images/slider/slider1_8.png" alt=""></div>
                        <div class="item" style="--position: 9"><img src="images/slider/slider1_9.png" alt=""></div>
                        <div class="item" style="--position:10"><img src="images/slider/slider1_10.png"alt=""></div>
                        </div>
                </div>
        
                    <!-- Product Slider -->
                    <div class="slider product-slider" reverse="true" style="
                        --width: 100px;
                        --height: 100px;
                        --quantity: 9;
                    ">
            
                    <div class="list product-list">
                        <!-- Add product items here -->
                        <div class="item" style="--position: 1"><img src="images/slider/slider2_1.png" alt=""></div>
                        <div class="item" style="--position: 2"><img src="images/slider/slider2_2.png" alt=""></div>
                        <div class="item" style="--position: 3"><img src="images/slider/slider2_3.png" alt=""></div>
                        <div class="item" style="--position: 4"><img src="images/slider/slider2_4.png" alt=""></div>
                        <div class="item" style="--position: 5"><img src="images/slider/slider2_5.png" alt=""></div>
                        <div class="item" style="--position: 6"><img src="images/slider/slider2_6.png" alt=""></div>
                        <div class="item" style="--position: 7"><img src="images/slider/slider2_7.png" alt=""></div>
                        <div class="item" style="--position: 8"><img src="images/slider/slider2_8.png" alt=""></div>
                        <div class="item" style="--position: 9"><img src="images/slider/slider2_9.png" alt=""></div>
                        </div>
                    </div>
            </main>
      </div>

</template>
<style scoped>

                    /* AUTO SLIDER */
                main{
                    width: min(1200px, 90vw);
                    margin: auto;
                }
                .slider{
                    width: 100%;
                    height: var(--height);
                    overflow: hidden;
                    mask-image: linear-gradient(
                        to right,
                        transparent,
                        #000 10% 90%,
                        transparent
                    );
                }
            /* Brand Slider Styles */
                .brand-slider {
                    max-width: var(--brand-width);
                    margin: 0 auto; /* Centers the slider */
                }

                .brand-slider .list{
                    display: flex;
                    width: 100%;
                    min-width: calc(var(--width) * var(--quantity));
                    position: relative;
                    margin-top: 10px;
                }
                .brand-slider .list .item{
                    width: var(--width);
                    height: var(--height);
                    position: absolute;
                    left: 100%;
                    animation: autoRun 30s linear infinite;
                    transition: filter 0.5s;
                    animation-delay: calc( (30s / var(--quantity)) * (var(--position) - 9) )!important;
                }

            /* Product Slider Styles */

                .product-slider .list{
                    display: flex;
                    width: 100%;
                    min-width: calc(var(--width) * var(--quantity));
                    position: relative;
                }
                .product-slider .list .item{
                    width: var(--width);
                    height: var(--height);
                    position: absolute;
                    left: 100%;
                    animation: autoRun 45s linear infinite;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
                    transition: box-shadow 0.3s ease-in-out;
                    transition: filter 0.5s;
                    animation-delay: calc( (40s / var(--quantity)) * (var(--position) - 9) )!important;
                    margin-right: var(--gap);
                }
                
                /* Shared Item Styles */
                .slider .list .item img{
                    width: 100%;
                    filter: 0 8px 16px 0 rgba(0, 0, 0, 0.5);
                }
                @keyframes autoRun{
                    from{
                        left: 100%;
                    }to{
                        left: calc(var(--width) * -1);
                    }
                }
                .slider:hover .item{
                    animation-play-state: paused!important;
                    filter: grayscale(10);
                    
                }
                .slider .item:hover{
                    filter: grayscale(0);
                    transform: scale(1.1);
                }
                .slider[reverse="true"] .item{
                    animation: reversePlay 10s linear infinite;
                }
                @keyframes reversePlay{
                    from{
                        left: calc(var(--width) * -1);
                    }to{
                        left: 100%;
                    }
                }

            /* product-container */
                .container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-wrap: wrap;
                }

                .card {
                    perspective: 1000px;
                    transition: transform 0.6s;
                    margin: 10px;
                }

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
                }

                .card-back {
                    transform: rotateY(180deg);
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