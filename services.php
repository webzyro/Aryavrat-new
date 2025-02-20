<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aryavrat Energy | Services Page</title>
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
          <span class="display-6 text-light fw-bold">Service</span>
        </div>
      </div>
    </div>

    <!-- Services Section -->
    <section class="py-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-6">
            <img
              src="assets/Images/rootop-solar.png"
              alt="rooftop-solar"
              class="img-fluid rounded shadow-lg"
            />
          </div>
          <div class="col-md-6">
            <div class="d-flex flex-column gap-3">
              <h2 class="h2 fw-bold">Rooftop Solar Power Plant</h2>
              <p class="fw-semibold text-secondary">
                As energy costs continue to rise, rooftop solar installations
                have become an excellent solution for homeowners and businesses
                looking to reduce electricity bills and contribute to a greener
                future. By harnessing the power of the sun, solar panels convert
                sunlight into electricity, providing a sustainable and
                cost-effective alternative to conventional power sources.
              </p>
              <a
                href="tel:+91-7633940407"
                class="btn btn-orange d-block mt-md-4 w-100 w-md-50"
                >Free Consultancy</a
              >
            </div>
          </div>
        </div>
        <div class="row my-3">
          <div class="col-12 col-md-10">
            <h3 class="h3 fw-bold">
              🔹 Benefits of Rooftop Solar Installations
            </h3>
            <ul>
              <li class="list-group-item fw-bold">
                ✅ Significant Cost Savings
              </li>
              <ul>
                <li class="fw-semibold text-secondary">
                  Solar panels drastically cut electricity costs, allowing you
                  to save money over time.
                </li>
                <li class="fw-semibold text-secondary">
                  With net metering, you can even sell excess power back to the
                  grid, further reducing expenses.
                </li>
              </ul>
            </ul>
            <ul>
              <li class="list-group-item fw-bold">✅ Energy Independence</li>
              <ul>
                <li class="fw-semibold text-secondary">
                  You reduce reliance on traditional power grids, ensuring
                  protection from power outages and fluctuating electricity
                  prices.
                </li>
                <li class="fw-semibold text-secondary">
                  Solar batteries can store extra energy for nighttime or cloudy
                  days, providing uninterrupted power.
                </li>
              </ul>
            </ul>
            <ul>
              <li class="list-group-item fw-bold">
                ✅ Eco-Friendly & Sustainable
              </li>
              <ul>
                <li class="fw-semibold text-secondary">
                  Solar power is 100% renewable and does not emit harmful
                  greenhouse gases.
                </li>
                <li class="fw-semibold text-secondary">
                  Installing solar panels contributes to a cleaner environment
                  and helps combat climate change.
                </li>
              </ul>
            </ul>
            <ul>
              <li class="list-group-item fw-bold">
                ✅ Government Incentives & Subsidies
              </li>
              <ul>
                <li class="fw-semibold text-secondary">
                  Many governments offer subsidies, tax benefits, and incentives
                  to encourage solar adoption.
                </li>
                <li class="fw-semibold text-secondary">
                  Programs like the PM Surya Ghar Yojana in India make solar
                  installations more affordable.
                </li>
              </ul>
            </ul>
          </div>
        </div>
        <div class="row my-3">
          <div class="col-12 col-md-10">
            <h3 class="h3 fw-bold">
              🔹 How to Ensure an Efficient Solar Installation?
            </h3>
            <ul>
              <li class="list-group-item fw-bold">
                ✅ Choose High-Efficiency Solar Panels
              </li>
              <ul>
                <li class="fw-semibold text-secondary">
                  Opt for monocrystalline panels for the best performance and
                  longer lifespan.
                </li>
                <li class="fw-semibold text-secondary">
                  Look for panels with high energy conversion rates (above 18%).
                </li>
              </ul>
            </ul>
            <ul>
              <li class="list-group-item fw-bold">
                ✅ Optimize Panel Placement
              </li>
              <ul>
                <li class="fw-semibold text-secondary">
                  Install panels at the right tilt and direction to receive
                  maximum sunlight exposure.
                </li>
                <li class="fw-semibold text-secondary">
                  Keep them free from shade caused by trees, buildings, or other
                  obstructions.
                </li>
              </ul>
            </ul>
            <ul>
              <li class="list-group-item fw-bold">
                ✅ Use Advanced Solar Inverters
              </li>
              <ul>
                <li class="fw-semibold text-secondary">
                  A high-quality MPPT (Maximum Power Point Tracking) inverter
                  ensures efficient energy conversion.
                </li>
                <li class="fw-semibold text-secondary">
                  Smart inverters help monitor and optimize power usage.
                </li>
              </ul>
            </ul>
            <ul>
              <li class="list-group-item fw-bold">
                ✅ Maintain & Clean Panels Regularly
              </li>
              <ul>
                <li class="fw-semibold text-secondary">
                  Dust, dirt, and debris can reduce efficiency, so regular
                  cleaning is essential.
                </li>
                <li class="fw-semibold text-secondary">
                  Routine maintenance ensures long-term durability and
                  performance.
                </li>
              </ul>
            </ul>
          </div>
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
