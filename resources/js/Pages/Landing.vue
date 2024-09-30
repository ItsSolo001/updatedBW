<template>
    <div class="nav-logo max-w-xs flex items-center">
    </div>
    <main>
      <div ref="banner" class="banner">
        <a class="logo flex items-center">
        <img class="glow w-100 h-auto" src="images/logo/WeblogoW.png" alt="Logo" />
        </a>
        <div>
          <h1 class="left">BROOKLYN WAREHOUSE INC.</h1>
          <h1 class="right">Where BIG visions come to life</h1>
        </div>
        <h4>“Get in touch with the thrift clothing scene.”</h4>
        <button class="button" @click="joinNow">Join now &#8599;</button>
        <canvas ref="dotsCanvas" id="dotsCanvas"></canvas>
      </div>
    </main>
  </template>
  
  <script>
  export default {
    name: 'BannerComponent',
    data() {
      return {
        dots: [],
        arrayColors: ['#B2BEB5', '#A0EDE6', '#7F1734', '#640D1B', '#310A1C'],
        ctx: null,
      };
    },
    mounted() {
      this.$nextTick(() => {
        if (window.innerWidth > 768) { // Only initialize dots if screen is larger than 768px
          this.initializeCanvas();
          this.drawDots();
          window.addEventListener('resize', this.onResize);
          this.$refs.banner.addEventListener('mousemove', this.onMouseMove);
          this.$refs.banner.addEventListener('mouseout', this.onMouseOut);
        }
      });
    },
    beforeDestroy() {
      window.removeEventListener('resize', this.onResize);
      if (this.$refs.banner) {
        this.$refs.banner.removeEventListener('mousemove', this.onMouseMove);
        this.$refs.banner.removeEventListener('mouseout', this.onMouseOut);
      }
    },
    methods: {
      initializeCanvas() {
        const canvas = this.$refs.dotsCanvas;
        if (!canvas || window.innerWidth <= 768) return; // Skip if screen is small
  
        canvas.width = canvas.offsetWidth;
        canvas.height = canvas.offsetHeight;
        this.ctx = canvas.getContext('2d');
  
        for (let index = 0; index < 50; index++) {
          this.dots.push({
            x: Math.floor(Math.random() * canvas.width),
            y: Math.floor(Math.random() * canvas.height),
            size: Math.random() * 3 + 5,
            color: this.arrayColors[Math.floor(Math.random() * 5)],
          });
        }
      },
      drawDots() {
        if (!this.ctx) return;
  
        const canvas = this.$refs.dotsCanvas;
        this.ctx.clearRect(0, 0, canvas.width, canvas.height);
  
        const textRect = this.$refs.banner.querySelector('h1').getBoundingClientRect();
  
        this.dots.forEach((dot) => {
          if (
            dot.x < textRect.left ||
            dot.x > textRect.right ||
            dot.y < textRect.top ||
            dot.y > textRect.bottom
          ) {
            this.ctx.fillStyle = dot.color;
            this.ctx.beginPath();
            this.ctx.arc(dot.x, dot.y, dot.size, 0, Math.PI * 2);
            this.ctx.fill();
          }
        });
      },
      joinNow() {
        window.location.href = 'Welcome';
      },
      onResize() {
        const canvas = this.$refs.dotsCanvas;
        if (!canvas || window.innerWidth <= 768) return; // Skip if screen is small
  
        this.ctx.clearRect(0, 0, canvas.width, canvas.height);
        canvas.width = this.$refs.banner.offsetWidth;
        canvas.height = this.$refs.banner.offsetHeight;
  
        this.dots = [];
        for (let index = 0; index < 50; index++) {
          this.dots.push({
            x: Math.floor(Math.random() * canvas.width),
            y: Math.floor(Math.random() * canvas.height),
            size: Math.random() * 3 + 5,
            color: this.arrayColors[Math.floor(Math.random() * 5)],
          });
        }
        this.drawDots();
      },
      onMouseMove(event) {
        const canvas = this.$refs.dotsCanvas;
        if (!canvas) return;
  
        this.ctx.clearRect(0, 0, canvas.width, canvas.height);
        this.drawDots();
  
        const mouse = {
          x: event.pageX - this.$refs.banner.getBoundingClientRect().left,
          y: event.pageY - this.$refs.banner.getBoundingClientRect().top,
        };
  
        this.dots.forEach((dot) => {
          let distance = Math.sqrt((mouse.x - dot.x) ** 2 + (mouse.y - dot.y) ** 2);
          if (distance < 150) {
            this.ctx.strokeStyle = dot.color;
            this.ctx.lineWidth = 0.5;
            this.ctx.beginPath();
            this.ctx.moveTo(dot.x, dot.y);
            this.ctx.lineTo(mouse.x, mouse.y);
            this.ctx.stroke();
          }
        });
      },
      onMouseOut() {
        const canvas = this.$refs.dotsCanvas;
        if (!canvas) return;
  
        this.ctx.clearRect(0, 0, canvas.width, canvas.height);
        this.drawDots();
      },
    },
  };
  </script>
  
    
    <style scoped>
    ::-webkit-scrollbar {
      width: 0;
    }
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      list-style: none;
    }
    .glow {
      filter: drop-shadow(0 0 2px #ec9ad6) 
              drop-shadow(0 0 6px #ec9ad6)
              drop-shadow(0 0 10px #ec9ad6);
    }
    main .banner {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 20px;
      text-align: center;
      margin-top: -70px;
      position: relative;
      overflow: hidden;
    }
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-weight: 500;
      user-select: none;
    }
    .banner button {
      all: unset;
      border: 1px solid #afaeae55;
      padding: 10px 20px;
      border-radius: 20px;
      background-image: linear-gradient(to bottom, #eee1, transparent, #eee1);
      cursor: pointer;
      transition: 0.5s;
    }
    .banner button:hover {
      background-color: #929292;
      color: #040018;
      box-shadow: 0 0 50px #b1b1b1;
      .banner #dotsCanvas {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      pointer-events: none;
    }
  
    /* Hide the canvas on small screens */
    @media (max-width: 768px) {
      .banner #dotsCanvas {
        display: none;
      }
    }
    }
    h1 {
      --to: left;
      font-size: 3.5em;
      font-weight: bold;
      background-image: linear-gradient(
        to var(--to),
        #cccccc,
        #888888,
        #555555
      );
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-transform: uppercase;
      line-height: 1em;
      user-select: none;
    }
    h1.right {
      --to: right;
      font-size: 2em;
    }
    .banner #dotsCanvas {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      pointer-events: none;
    }
    </style>
    <style>
    body {
      color: #eee;
      font-family: Poppins;
      margin: 0;
      background: #0d0f13; /* Fallback color */
      background-image: 
        repeating-linear-gradient(
          to right, #2a4435 0 1px, transparent 2px 200px
        ),
        repeating-linear-gradient(
          to bottom, #2a4244 0 1px, transparent 2px 200px
        ),
        radial-gradient(
          at 50% 50%, #382a44, #1b2c34
        );
    }
    </style>