<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aryavrat Energy | About Page</title>
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
    <?php include header.php; ?>

    <!-- Navbar -->
    <?php include navbar.php; ?>

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

    <!-- About Section -->
    <section class="py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-2 mb-3">
              <hr class="border-success border-2 w-25" />
              <span class="text-success fw-semibold">Flexible Solutions</span>
            </div>
            <h2 class="display-5 fw-bold text-gray-800 mb-4">
              Transform your daily life with adaptable energy services
            </h2>
            <p class="text-secondary mb-4">
              Aryavrat Energy, part of Aryavrat Construction & Developers,
              offers innovative solar energy solutions. With 200+ projects
              completed, it promotes eco-friendly living, reduces electricity
              costs, and helps clients avail subsidies under the PM Surya Ghar
              Yojana, ensuring sustainable energy for India
            </p>
            <div class="d-flex flex-column gap-2 mb-3">
              <div class="d-flex align-items-center gap-2">
                <i class="fa-regular fa-circle-right fs-2 text-secondary"></i>
                <p class="text-secondary">
                  We specializes in sustainable solar energy solutions for
                  eco-friendly living.
                </p>
              </div>
              <div class="d-flex align-items-center gap-2">
                <i class="fa-regular fa-circle-right fs-2 text-secondary"></i>
                <p class="text-secondary">
                  We partner with trusted brands like Adani, Waaree, and Vikram
                  Solar for reliability.
                </p>
              </div>
            </div>
            <a href="about.html" class="btn btn-orange">
              Know More <i class="fas fa-arrow-right ms-2"></i>
            </a>
          </div>
          <div class="col-md-6">
            <img
              src="./assets/Images/two-men.png"
              alt="Solar Wind Energy"
              class="img-fluid rounded"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 text-white" id="stats-section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-4 mb-4 mb-md-0">
            <h3 class="display-3 fw-bold counter">80%</h3>
            <p class="h4">Save Electricity By</p>
          </div>
          <div class="col-md-4 mb-4 mb-md-0">
            <h3 class="display-3 fw-bold counter">200+</h3>
            <p class="h4">Successfully Installed</p>
          </div>
          <div class="col-md-4">
            <h3 class="display-3 fw-bold counter">1100</h3>
            <p class="h4">Total Satisfied Customer</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Values & Approach -->
    <section class="py-5">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-md-6">
            <img
              src="./assets/Images/value1.png"
              alt="Solar Wind Energy"
              class="img-fluid rounded"
            />
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-2 mb-2">
              <hr class="border-success border-2 w-25" />
              <span class="text-success fw-bold">Our Values</span>
            </div>
            <h5 class="h5 fw-bold text-gray-800 mb-2 text-secondary">
              At Aryavrat Energy, our core values drive our mission to create a
              sustainable, eco-friendly future through innovative solar
              solutions.
            </h5>
            <div class="d-flex align-items-center gap-3 mb-2">
              <span class="fs-3 fw-bold p-0">Guiding Values</span>
              <i class="fa-solid fa-turn-down fs-3 fw-bold"></i>
            </div>
            <div class="d-flex flex-column gap-2">
              <p class="fs-5">
                <strong>Sustainability Focus:</strong> Promoting renewable
                energy for a greener tomorrow.
              </p>
              <p class="fs-5">
                <strong>Customer Satisfaction:</strong> Delivering tailored
                solutions with top-notch service.
              </p>
              <p class="fs-5">
                <strong>Innovation:</strong> Embracing cutting-edge technology
                for optimal performance.
              </p>
              <p class="fs-5">
                <strong>Integrity:</strong>Ensuring transparency and trust in
                every project.
              </p>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-6 order-2 order-md-1">
            <div class="d-flex align-items-center gap-2 mb-2">
              <hr class="border-success border-2 w-25" />
              <span class="text-success fw-bold">Our Approach</span>
            </div>
            <h5 class="h5 fw-bold text-gray-800 mb-2 text-secondary">
              At Aryavrat Energy, we follow a systematic and customer-centric
              approach to deliver efficient and sustainable solar energy
              solutions.
            </h5>
            <div class="d-flex align-items-center gap-3 mb-2">
              <span class="fs-3 fw-bold p-0">Our Methodology</span>
              <i class="fa-solid fa-turn-down fs-3 fw-bold"></i>
            </div>
            <div class="d-flex flex-column gap-2">
              <p class="fs-5">
                <strong>Consultation:</strong> Understanding energy needs with
                tailored recommendations.
              </p>
              <p class="fs-5">
                <strong>Customized:</strong> Crafting optimized solutions for
                maximum efficiency.
              </p>
              <p class="fs-5">
                <strong>Expert Installation:</strong> Ensuring seamless and
                reliable system setups.
              </p>
              <p class="fs-5">
                <strong>Ongoing:</strong> Providing maintenance for consistent
                solar performance.
              </p>
            </div>
          </div>
          <div class="col-md-6 order-1 order-md-2">
            <img
              src="./assets/Images/value2.png"
              alt="Solar Wind Energy"
              class="img-fluid rounded"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-5">
      <div class="container">
        <div class="mb-5">
          <h2 class="display-5 fw-bold border-bottom border-success w-25 pb-2">
            Our Mission
          </h2>
          <div class="d-flex align-items-start gap-3 mt-3">
            <i class="fas fa-chevron-right fs-2 d-none d-md-block"></i>
            <p class="text-secondary fs-5">
              Our mission is to provide the highest quality cost effective solar
              energy power products and services to customers that are
              interested in reducing energy costs and carbon footprint. This
              will give our customers and our communities clean, abundance, low
              - cost renewable energy and will allow us to provide financial
              security for all shareholders while giving back to the community.
            </p>
          </div>
        </div>
        <div class="">
          <h2
            class="display-5 fw-bold border-bottom border-success w-25 align-self-end pb-2"
          >
            Our Vision
          </h2>
          <div class="d-flex align-items-start gap-3 mt-3">
            <i class="fas fa-chevron-right fs-2 d-none d-md-block"></i>
            <p class="text-secondary fs-5">
              To provide the most compelling value in the solar energy industry.
              Value, as defined by our customers, means designing and installing
              the highest quality solar energy systems, on time with high
              customer satisfaction, at low cost.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section class="py-5 bg-light">
      <div class="container">
        <h2 class="display-5 text-center fw-bold mb-3">Meet The Team</h2>
        <p class="text-center text-secondary fs-5 mb-5">
          Our solar project developers are committed to offering leading-edge
          services and solutions for renewable energy.
        </p>
        <div class="row g-4">
          <!-- Team Member Card -->
          <div class="col-md-4">
            <div class="card text-center h-100 p-2" id="team-card">
              <img
                src="./assets/Images/team1.png"
                class="card-img-top"
                alt="Team Member"
              />
              <div class="card-body">
                <h3 class="card-title fs-3 fw-bold">John Doe</h3>
                <p class="card-text text-secondary fw-semibold">
                  (Solar Expert)
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center h-100 p-2" id="team-card">
              <img
                src="./assets/Images/team2.jpeg"
                class="card-img-top"
                alt="Team Member"
              />
              <div class="card-body">
                <h3 class="card-title fs-3 fw-bold">John Doe</h3>
                <p class="card-text text-secondary fw-semibold">
                  (Solar Expert)
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center h-100 p-2" id="team-card">
              <img
                src="./assets/Images/team3.jpeg"
                class="card-img-top"
                alt="Team Member"
              />
              <div class="card-body">
                <h3 class="card-title fs-3 fw-bold">John Doe</h3>
                <p class="card-text text-secondary fw-semibold">
                  (Solar Expert)
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-4">
          <a href="contact.html" class="btn btn-orange">
            Know More <i class="fas fa-arrow-right ms-2 text-light"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php include footer.php; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      
    <script src="/index.js"></script>
    
  </body>
</html>
