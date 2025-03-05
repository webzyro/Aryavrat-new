$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 50,
    autoplay: true,
    autoplayTimeout: 2500,
    autoplayHoverPause: true,
    dots: true,
    navText: ["<span>&lt;</span>", "<span>&gt;</span>"],
    responsive: {
      0: {
        items: 2,
        margin: 10,
      },
      640: {
        items: 2,
        margin: 10,
      },
      768: {
        items: 3,
        margin: 20,
      },
      1024: {
        items: 4,
        margin: 40,
      },
      1280: {
        items: 4,
        margin: 50,
      },
    },
  });
  // Initialize Client Carousel
  $(".client-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 2,
      },
      768: {
        items: 3,
      },
      992: {
        items: 4,
      },
    },
  });
});

// Show modal after page load
document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    const appointmentModal = new bootstrap.Modal(
      document.getElementById("appointmentModal")
    );
    appointmentModal.show();
  }, 5000); // Shows after 2 seconds
});

const counters = document.querySelectorAll(".counter");
const speed = 200;

const startCounters = () => {
  counters.forEach((counter) => {
    const target = +counter.getAttribute("data-target");
    let count = 0;

    const updateCount = () => {
      const increment = target / speed;

      if (count < target) {
        count += Math.ceil(increment);
        counter.innerText = count;
        setTimeout(updateCount, 1);
      } else {
        counter.innerText = target;
      }
    };

    updateCount();
  });
};

// Start counter animation when section is in view
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        startCounters();
      }
    });
  },
  { threshold: 0.5 }
);

observer.observe(document.querySelector("#stats-section"));

// Show modal after page load
document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    const appointmentModal = new bootstrap.Modal(
      document.getElementById("appointmentModal")
    );
    appointmentModal.show();
  }, 5000); // Shows after 2 seconds
});

// Gallery data
const galleryImages = [
  { id: 1, img: "./assets/Images/gallery1.jpg" },
  { id: 2, img: "./assets/Images/gallery2.jpg" },
  { id: 3, img: "./assets/Images/gallery3.jpg" },
  { id: 4, img: "./assets/Images/gallery4.jpg" },
  { id: 5, img: "./assets/Images/gallery5.jpg" },
  { id: 6, img: "./assets/Images/gallery6.jpg" },
  // Add more images as needed
];

// Function to create gallery items
function createGalleryItem(image) {
  return `
            <div class="col-12 col-md-6 col-lg-4">
                <div class="position-relative gallery-item">
                    <div class="skeleton-loader"></div>
                    <img src="${image.img}" 
                         class="img-fluid rounded gallery-img" 
                         alt="Gallery Image ${image.id}"
                         data-bs-toggle="modal"
                         data-bs-target="#imageModal"
                         onload="this.previousElementSibling.style.display='none'">
                </div>
            </div>
        `;
}

// Populate galleries
document.getElementById("bredaGallery").innerHTML = galleryImages
  .map((img) => createGalleryItem(img))
  .join("");
document.getElementById("privateGallery").innerHTML = galleryImages
  .map((img) => createGalleryItem(img))
  .join("");

// Update modal image
document.querySelectorAll(".gallery-img").forEach((img) => {
  img.addEventListener("click", function () {
    document.getElementById("modalImage").src = this.src;
  });
});
