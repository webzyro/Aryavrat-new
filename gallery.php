<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aryavrat Energy | Gallery Page</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/style.css" />
  </head>
  <body>
    <!-- Header -->
    <?php include header.php ?>

    <!-- Navbar -->
    <?php include navbar.php ?>

    <!-- Custom Modal -->
    <?php include modal.php; ?>

    <!-- Breadcrumb -->
    <div class="container-fluid" id="breadcrumb">
      <div
        class="container h-75 d-flex flex-column gap-4 p-4 align-items-center justify-content-center"
      >
        <h3 class="text-light">About Us</h3>
        <div class="d-flex align-items-center gap-3">
          <a href="/" class="display-6 text-light fw-bold">HOME</a>
          <i class="fa-solid fa-angles-right fw-bold text-light fs-2"></i>
          <span class="display-6 text-light fw-bold">About</span>
        </div>
      </div>
    </div>

    <!-- Gallery Section -->
    <div class="container py-5">
      <!-- BREDA Section -->
      <div class="mb-5">
        <h2 class="display-6 text-center fw-bold mb-4">
          Bihar Renewable Energy Development Agency
        </h2>
        <div class="row g-4" id="bredaGallery">
          <!-- Gallery items will be dynamically added here -->
        </div>
      </div>

      <!-- Private Projects Section -->
      <div>
        <h2 class="display-6 text-center fw-bold mb-4">Private Projects</h2>
        <div class="row g-4" id="privateGallery">
          <!-- Gallery items will be dynamically added here -->
        </div>
      </div>
    </div>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
            ></button>
          </div>
          <div class="modal-body">
            <img src="" id="modalImage" class="img-fluid" alt="Gallery Image" />
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php include footer.php; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="/index.js"></script>
  </body>
</html>
