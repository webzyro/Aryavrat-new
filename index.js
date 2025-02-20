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
});

// Show modal after 5 seconds
setTimeout(() => {
  showModal();
}, 5000);

function showModal() {
  document.getElementById("customModal").classList.add("show");
  document.body.style.overflow = "hidden"; // Prevent background scrolling
}

function hideModal() {
  document.getElementById("customModal").classList.remove("show");
  document.body.style.overflow = ""; // Restore scrolling
}

// Close modal when clicking outside
document.getElementById("customModal").addEventListener("click", function (e) {
  if (e.target === this) {
    hideModal();
  }
});

// Close modal with Escape key
document.addEventListener("keydown", function (e) {
  if (
    e.key === "Escape" &&
    document.getElementById("customModal").classList.contains("show")
  ) {
    hideModal();
  }
});

// Simple counter animation
const counters = document.querySelectorAll(".counter");
counters.forEach((counter) => {
  const target = parseInt(counter.innerText);
  let count = 0;
  const duration = 2000;
  const increment = target / (duration / 16);

  const updateCount = () => {
    count += increment;
    if (count < target) {
      counter.innerText =
        Math.ceil(count) + (counter.innerText.includes("%") ? "%" : "+");
      requestAnimationFrame(updateCount);
    } else {
      counter.innerText =
        target + (counter.innerText.includes("%") ? "%" : "+");
    }
  };

  updateCount();
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
