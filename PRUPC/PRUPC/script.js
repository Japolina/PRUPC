const carousel = document.querySelector(".carousel-produtos");

const dragging = (e) => {
    carousel.scrollLeft = e.pageX;
}

carousel.addEventListener("mousemove", dragging)