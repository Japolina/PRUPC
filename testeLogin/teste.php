<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Slider</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    #slider-container {
      width: 80%;
      margin: auto;
      overflow: hidden;
    }

    #slider-wrapper {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .slide {
      min-width: 100%;
      box-sizing: border-box;
    }

    .slide img {
      width: 100%;
      height: auto;
    }

    #prev, #next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      margin-top: -25px;
      padding: 16px;
      color: white;
      font-weight: bold;
      font-size: 20px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    #next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    #prev:hover, #next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }
  </style>
</head>
<body>

<div id="slider-container">
  <div id="slider-wrapper">
    <div class="slide"><img src="../img/prod1Mini.jpg" alt="Product 1"></div>
    <div class="slide"><img src="../img/prod1Mini.jpg" alt="Product 1"></div>
    <div class="slide"><img src="../img/prod1Mini.jpg" alt="Product 1"></div>
    <div class="slide"><img src="../img/prod1Mini.jpg" alt="Product 1"></div>
    <div class="slide"><img src="../img/prod1Mini.jpg" alt="Product 1"></div>
     
    <!-- Add more slides as needed -->
  </div>
</div>

<button id="prev" onclick="prevSlide()">❮</button>
<button id="next" onclick="nextSlide()">❯</button>

<script>
  let currentIndex = 0;

  function showSlide(index) {
    const slider = document.getElementById('slider-wrapper');
    const slideWidth = document.querySelector('.slide').offsetWidth;

    if (index >= 0 && index < slider.children.length) {
      currentIndex = index;
      slider.style.transform = `translateX(${-currentIndex * slideWidth}px)`;
    }
  }

  function prevSlide() {
    showSlide(currentIndex - 1);
  }

  function nextSlide() {
    showSlide(currentIndex + 1);
  }
</script>

</body>
</html>
