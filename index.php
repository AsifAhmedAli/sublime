<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sublime Energy Services</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png" />
    <link rel="stylesheet" href="./css/bootstrap.css" />

    <link
      rel="preload"
      fetchpriority="high"
      as="image"
      href="./images/home-banner-1.webp"
      type="image/webp"
    />
    <link
      rel="preload"
      fetchpriority="high"
      as="image"
      href="./images/banner-2.webp"
      type="image/webp"
    />
    <link
      rel="preload"
      fetchpriority="high"
      as="image"
      href="./images/home-banner-3.webp"
      type="image/webp"
    />

    <link rel="stylesheet" href="./slick/slick.css" />
    <link rel="stylesheet" href="./slick/slick-theme.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-SCWJE42270"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-SCWJE42270");
    </script>
  </head>
  <body>
    <nav
      class="navbar navbar-expand-xl navbar-light bg-white position-sticky top-0"
    >
      <div class="container">
        <a class="navbar-brand" href="./index.php">
          <img
            src="./images/sublime-logo.svg"
            height="50"
            width="201.9"
            alt=""
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse pt-md-0 pt-4"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav gap-4 align-items-center ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Funding
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="./about-us.php">About Us</a>
                <a class="dropdown-item" href="./echo-4.php">What is Eco 4?</a>
                <a class="dropdown-item" href="./how-qualify.php">How do I qualify?</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Heating Products & Solutions
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <ul class="list-unstyled">
                  <li class="has-submenu">
                    <a class="dropdown-item" href="#"
                      >Insallation & Upgradation</a
                    >
                    <div class="submenu">
                      <a href="./service-page-1.php" class="submenu-item"
                        >Central Heating Installation</a
                      >
                      <a href="./service-page-1.php" class="submenu-item">Combination Boiler</a>
                    </div>
                  </li>
                  <li class="has-submenu">
                    <a class="dropdown-item" href="#">Replacement</a>
                    <div class="submenu">
                      <a href="./service-page-1.php" class="submenu-item"
                        >Back Boiler Replacement</a
                      >
                      <a href="./service-page-1.php" class="submenu-item"
                        >G Rated Electric Storage Heater Replacement</a
                      >
                      <a href="./service-page-1.php" class="submenu-item"
                        >Inefficient Boiler Replacement</a
                      >
                    </div>
                  </li>
                  <li class="has-submenu">
                    <a class="dropdown-item" href="#">Renewables</a>
                    <div class="submenu">
                      <a href="./service-page-1.php" class="submenu-item">Air Source Heat Pumps</a>
                      <a href="./service-page-1.php" class="submenu-item"
                        >Ground Source Heat Pumps</a
                      >
                      <a href="./service-page-1.php" class="submenu-item">Solar PV</a>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <!-- <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                About Us
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="./about-us.php"
                  >About Sublime</a
                >
                <a class="dropdown-item" href="#">Blogs</a>
                <a class="dropdown-item" href="#">Why choose us?</a>
              </div>
            </li> -->
            <li class="nav-item">
              <a
                class="btn btn-primary d-md-inline-block d-block"
                href="./apply-now.php"
                >Check Eligibility</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="hero">
      <div class="banners">
        <div class="home-banner banner-1">
          <div class="container h-100">
            <div
              class="row h-100 gy-4 justify-content-between align-items-center"
            >
              <div
                class="col-lg-7 ms-auto text-end"
                data-aos="fade-down"
                data-aos-duration="1000"
              >
                <h1>
                  Sublime Home <br />
                  Upgrades & Installation
                </h1>
                <p class="punch">
                  We're experts at securing energy saving funding and installing
                  energy efficient improvements into homes
                </p>
                <a href="./apply-now.php" class="btn btn-outline-primary"
                  >Check Eligibility</a
                >
              </div>
              <!-- <div class="col-lg-4">
                <img
                  src="./images/banner-1.jpg"
                  class="w-100"
                  height="auto"
                  alt=""
                />
              </div> -->
            </div>
          </div>
        </div>
        <div class="home-banner banner-2">
          <div class="container h-100">
            <div
              class="row h-100 gy-4 justify-content-between align-items-center"
            >
              <div class="col-lg-7">
                <h1>
                  Sublime Home <br />
                  Installation
                </h1>
                <p class="punch">
                  We're experts at securing energy saving funding and installing
                  energy efficient improvements into homes and businesses
                </p>
                <a href="./index.php#millions" class="btn btn-outline-primary"
                  >Learn More</a
                >
              </div>
              <!-- <div class="col-lg-5">
                <img
                  src="./images/banner-2.png"
                  class="w-100"
                  height="auto"
                  style="max-height: 400px; object-fit: contain"
                  alt=""
                />
              </div> -->
            </div>
          </div>
        </div>
       <div class="home-banner banner-3">
          <div class="container h-100">
            <div
              class="row h-100 gy-4 justify-content-between align-items-center"
            >
              <div class="col-lg-7">
                <h1>
                  Funded Energy <br />
                  Saving Specialists
                </h1>
                <p class="punch">
                  We're experts at securing energy saving funding and installing
                  energy efficient improvements into homes
                </p>
                <a href="./index.php#millions" class="btn btn-outline-primary"
                  >Learn More</a
                >
              </div>
            </div>
          </div>
        </div> 
      </div>
    </section>

    <div class="form-toggle-container">
      <section class="toggle-form">
        <button
          class="btn icon-btn btn-light rounded-pill"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseExample"
          aria-expanded="false"
          aria-controls="collapseExample"
        >
          <i class="bi bi-arrow-down"></i>
        </button>
      </section>
      <div class="collapse" id="collapseExample">
        <section id="millions" class="millions">
          <div class="container">
            <div class="row align-items-center g-lg-6 g-4">
              <div class="col-md-8 mx-auto">
                <h2 class="text-white text-center">
                  Millions of homes are qualified under Eco and local Authority
                  schemes
                </h2>
                <p class="text text-center text-white">
                  Check what measures your property could be eligible for, takes
                  less than 60 seconds.
                </p>
              </div>
              <div class="col-md-6 mx-auto">
                <form action="" class="mb-4">
                  <div class="form-group mb-0">
                    <div class="input-group mb-0">
                      <input
                        type="text"
                        class="form-control bg-white shadow-sm"
                        placeholder="ENTER POSTCODE"
                        required
                      />
                      <button class="btn btn-primary shadow-sm">CHECK</button>
                    </div>
                    <div class="invalid-feedback">Address is not available</div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <section class="services" id="services">
      <div class="container">
        <h3 class="text-center">Our Services</h3>
        <p class="text text-center pb-12">
          With our whole home approach to energy saving Sublime Enerygy Services
          can help heat your home for less and keep it warmer for longer with
          our ECO 4 funding available on a range of services that include the
          following:
        </p>
        <div class="row gx-lg-6 gy-12 g-4">
          <div
            class="col-lg-4 col-md-6 col-12"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <div class="box">
              <img src="./images/service-1.webp" alt="" />
              <h4 class="service fw-semibold">Free Air Source Heat Pump</h4>
              <p class="description mb-0">
                Install renewable Energy with an Air Source Heat Pump.
              </p>
              <a href="">Learn More</a>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 col-12"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <div class="box">
              <img src="./images/service-2.webp" alt="" />
              <h4 class="service fw-semibold">Free Solar Pannels</h4>
              <p class="description mb-0">
                Installing solar panels can contribute upto 40% of your energy
                consumption.
              </p>
              <a href="">Learn More</a>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 col-12"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <div class="box">
              <img src="./images/service-3.webp" alt="" />
              <h4 class="service fw-semibold">Free Boiler Upgradation</h4>
              <p class="description mb-0">
                improve efficiency by replacing old inefficient with A rated
                Combi boiler with 10 year warranty.
              </p>
              <a href="">Learn More</a>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 col-12"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <div class="box">
              <img src="./images/service-41.webp" alt="" />
              <h4 class="service fw-semibold">Free central heating</h4>
              <p class="description mb-0">
                Shifting from old heating ways to latest Central heating system
                will lead to Wrarm, elevated and green future.
              </p>
              <a href="">Learn More</a>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 col-12"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <div class="box">
              <img src="./images/service-5.webp" alt="" />
              <h4 class="service fw-semibold">Free whole house insulation</h4>
              <p class="description mb-0">
                Sublime Whole House Insulation not only cuts energy bills but
                also reduces your carbon footprint while soundproofing your home
              </p>
              <a href="">Learn More</a>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 col-12"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <div class="box">
              <img src="./images/service-4.webp" alt="" />
              <h4 class="service fw-semibold">Free smart heating controls</h4>
              <p class="description mb-0">
                Access the latest technology to control, track and mange your
                home energy through smart comtrols.
              </p>
              <a href="">Learn More</a>
            </div>
          </div>
          <div class="col-12 text-center">
            <a href="./apply-now.php" class="btn btn-primary"
              >Apply for Funding</a
            >
          </div>
        </div>
      </div>
    </section>

    <section class="why-us" id="why-us">
      <div class="container">
        <div class="box">
          <div class="row align-items-center gy-6">
            <div class="col-lg-5">
              <img src="./images/why-choose.webp" class="w-100 h-auto" alt="" />
            </div>
            <div
              class="col-lg-7 text-center"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              <h3>
                Why Choose Sublime <br />
                Energy Services
              </h3>
              <p class="text">
                Sublime Energy Services has years of experience in assisting
                individuals, landlords, and families on their journey towards
                energy-efficient homes. Our dedicated team collaborates with the
                Government of the United Kingdom to enhance the use of efficient
                energy.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="funding" id="funding">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="text-center">
              <h3>The Funding Process...</h3>
              <p class="text">
                It couldn't be easier to get started and apply for ECO 4 funding
                with our easy 3 step process! We deal with your application from
                start to finish, providing the funding and completing the
                installation via our in-house team.
              </p>
            </div>
          </div>
        </div>
        <div class="row gy-12 pt-12">
          <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
            <div class="text-center">
              <h4 class="heading">Step 1</h4>
              <img src="./images/funding-1.svg" alt="" />
              <h4 class="heading">Check Your Eligibility</h4>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
            <div class="text-center">
              <h4 class="heading">Step 2</h4>
              <img src="./images/funding-2.svg" alt="" />
              <h4 class="heading">Book Your Survey</h4>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
            <div class="text-center">
              <h4 class="heading">Step 3</h4>
              <img src="./images/funding-3.svg" alt="" />
              <h4 class="heading">Get the Work Done</h4>
            </div>
          </div>
          <div class="col-12 text-center">
            <a href="./apply-now.php" class="btn bg-white text-primary"
              >Apply for Funding</a
            >
          </div>
        </div>
      </div>
    </section>

    <section class="eligibility" id="eligibility">
      <div class="container">
        <div class="row">
          <div class="col-12 mx-auto">
            <div class="text-center">
              <h3>Eligibility</h3>
              <p class="text">
                More people fall in to the Eligibility Criteria for free boiler
                and insulation grants. Some of the criteria include:
              </p>
            </div>
          </div>
        </div>
        <div class="row gy-6 pt-12">
          <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
            <div class="text-center">
              <img
                src="./images/eligibility-1.svg"
                data-bs-toggle="modal"
                data-bs-target="#dwpBenefit"
                alt=""
              />
              <h4 class="heading">DWP Approved Benefits</h4>
              <p class="text">
                If you have a total combined household income of £31,000 or
                less.
              </p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
            <div class="text-center">
              <img
                src="./images/eligibility-2.svg"
                data-bs-toggle="modal"
                data-bs-target="#childBenefit"
                alt=""
              />
              <h4 class="heading">Child Benefits</h4>
              <p class="text">
                If you have a total combined household income of £31,000 or
                less.
              </p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
            <div class="text-center">
              <img
                src="./images/eligibility-3.svg"
                data-bs-toggle="modal"
                data-bs-target="#flexBenefit"
                alt=""
              />
              <h4 class="heading">LA Flex Scheme</h4>
              <p class="text">
                If you have a total combined household income of £31,000 or
                less.
              </p>
            </div>
          </div>
          <div class="col-12 text-center">
            <a href="./apply-now.php" class="btn btn-primary"
              >Apply for Funding</a
            >
          </div>
        </div>
      </div>
    </section>

    <section class="faq" id="faq" data-aos="fade-up" data-aos-duration="1000">
      <div class="container">
        <h3 class="text-center text-primary mb-12">Your Questions Answered</h3>
        <div class="accordion mb-4" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              >
                What Energy Saving Measures Could I Get?
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse show"
              aria-labelledby="headingOne"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                Most people know the scheme as a free boiler replacement scheme
                however under ECO 4 the following energy-saving measures are
                available
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              >
                Where does the money come from?
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                Funding for your Home Energy Improvements is paid for by the
                Leading Energy Companies such as British Gas, SSE, Scottish
                Power, N-Power and so on. They have a quota to fill for
                improving the energy performance of UK Homes and can face large
                fines if they miss their targets. The aim is to reduce how much
                fuel UK households use on average. To improve this they aim to
                make generating heat cheaper (with new boilers), and maintaining
                heat easier (with insulation).
                <br />
                The money for these improvements comes from the profits of
                companies everyone is contributing to monthly, in our energy
                bills. It doesn't come from the Government the same way that
                things like Universal Credit does.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              >
                How do I apply?
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                You can apply for ECO 4 Funding by applying online. Our team
                will then contact you to take you through the process and advise
                which measures you qualify for. Apply Now.
              </div>
            </div>
          </div>
        </div>
        <div class="row gy-6">
          <!-- <div class="col-md-6">
            <h4 class="fw-semibold mb-8">
              What Energy Saving Measures Could I Get?
            </h4>
            <p class="text">
              Most people know the scheme as a free boiler replacement scheme
              however under ECO 4 the following energy-saving measures are
              available
            </p>
            <ul class="list-unstyled ps-2">
              <li>
                <p class="text mb-0">Air Source Heat Pumps</p>
              </li>
              <li>
                <p class="text mb-0">First Time Central Heating</p>
              </li>
              <li>
                <p class="text mb-0">Solar PV</p>
              </li>
              <li>
                <p class="text mb-0">Electric Storage Heaters</p>
              </li>
              <li>
                <p class="text mb-0">Cavity Wall Insulation</p>
              </li>
              <li>
                <p class="text mb-0">External Wall Insulation</p>
              </li>
              <li>
                <p class="text mb-0">Room in Roof Insulation</p>
              </li>
              <li>
                <p class="text mb-0">Loft Insulation</p>
              </li>
              <li>
                <p class="text mb-0">Under Floor Insulation</p>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <h4 class="fw-semibold mb-8">Where does the money come from?</h4>
            <p class="text">
              Funding for your Home Energy Improvements is paid for by the
              Leading Energy Companies such as British Gas, SSE, Scottish Power,
              N-Power and so on. They have a quota to fill for improving the
              energy performance of UK Homes and can face large fines if they
              miss their targets. The aim is to reduce how much fuel UK
              households use on average. To improve this they aim to make
              generating heat cheaper (with new boilers), and maintaining heat
              easier (with insulation).
              <br />
              The money for these improvements comes from the profits of
              companies everyone is contributing to monthly, in our energy
              bills. It doesn't come from the Government the same way that
              things like Universal Credit does.
            </p>
          </div>
          <div class="col-12 text-center">
            <h4 class="fw-semibold mb-8">How do I apply?</h4>
            <p class="text">
              You can apply for ECO 4 Funding by applying online. Our team will
              then contact you to take you through the process and advise which
              measures you qualify for. Apply Now.
            </p>
          </div> -->
          <div class="col-12 text-center">
            <a href="" class="btn btn-primary">Ask a Question?</a>
          </div>
        </div>
      </div>
    </section>

    <section class="brands" id="brands" data-aos="fade-up" data-aos-duration="1000">
      <div class="container">
        <h2 class="text-center text-primary mb-12">Trusted Brands</h2>
        <div class="trusted-brands">
          <div>
            <img src="./images/brand-1.webp" alt="" />
          </div>
          <div>
            <img src="./images/brand-2.webp" alt="" />
          </div>
          <div>
            <img src="./images/brand-3.png" alt="" />
          </div>
          <div>
            <img src="./images/brand-4-1.webp" alt="" />
          </div>
          <div>
            <img src="./images/brand-4.webp" alt="" />
          </div>
          <div>
            <img src="./images/brand-5.webp" alt="" />
          </div>
          <div>
            <img src="./images/brand-6.webp" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section class="contact" id="contact">
      <div class="container">
        <div class="row gy-8">
          <div class="col-lg-10 mx-auto text-center">
            <h2 class="text-primary mb-8">Sublime Energy Services</h2>
            <p class="text">
              has years of experience helping individuals, landlords, and
              families in their journey to Energy Efficient homes. Our dedicated
              team is working alongside the Gov. of United Kingdom for improving
              efficient energy use.
            </p>
          </div>
          <div class="col-12">
            <div class="background">
              <div class="row align-items-center g-lg-6 g-4">
                <div class="col-md-6 text-center" data-aos="fade-up" data-aos-duration="1000">
                  <img src="./images/mark-map.webp" class="contact-image" width="336px" height="500px" alt="" />
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
                  <ul class="ps-0 list-unstyled d-flex flex-column gap-md-12 gap-3">
                    <li>
                      <div class="fs-6 d-flex gap-2">
                        <i class="bi bi-telephone-fill text-primary"></i>
                        <a href="tel:01924 80621">01924 80621</a>
                        
                      </div>
                    </li>
                    <li>
                      <div class="fs-6 d-flex gap-2">
                        <i class="bi bi-envelope-at-fill text-primary"></i>
                        <a href="mailto:info@sublimeenergyservices.co.uk">info@sublimeenergyservices.co.uk</a>
                        
                      </div>
                    </li>
                    <li>
                      <div class="fs-6 d-flex gap-2">
                        <i class="bi bi-geo-alt-fill text-primary"></i>
                        Nano park, 6 Flanshaw Way, Kelley way, Wakefield WF2
                        9FW, United Kingdom
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="copyright">
      © Copyright 2023, All Rights Reserved | Sublime Energy Services
      <div class="d-flex text-center mt-3">
          <div class="col-6 pe-2 text-end">
              <a style="color:white;" href="privacy-policy.html">Privacy Policy</a>
          </div>
          <div class="col-6 ps-2 text-start">
              <a style="color:white;" href="./disclaimer.html">Disclaimer</a>
          </div>
      </div>
    </section>

    <!-- Modal -->
    <div
      class="modal fade"
      id="dwpBenefit"
      tabindex="-1"
      aria-labelledby="dwpBenefitLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="dwpBenefitLabel">DWP Benefits</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            If you have a total combined household income of £31,000 or less.
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              OK.
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="childBenefit"
      tabindex="-1"
      aria-labelledby="childBenefitLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="childBenefitLabel">Child Benefits</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            If you have a total combined household income of £31,000 or less.
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              OK.
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="flexBenefit"
      tabindex="-1"
      aria-labelledby="flexBenefitLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="flexBenefitLabel">LA Flex Scheme</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            If you have a total combined household income of £31,000 or less.
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              OK.
            </button>
          </div>
        </div>
      </div>
    </div>

    <script src="./js/jquery-3.7.0.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="./slick/slick.js"></script>

    <script>
      $(".banners").slick({
        autoplay: false,
        autoplaySpeed: 4000,
        arrows: true,
        dots: true,
        adaptiveHeight: true,
      });

      $(".trusted-brands").slick({
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        dots: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              infinite: true,
              dots: true,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
