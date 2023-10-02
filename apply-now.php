<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apply Now - Sublime Energy Services</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="./css/bootstrap.css" />
  </head>
  <body>
    <nav
      class="navbar navbar-expand-xl navbar-light bg-white position-sticky top-0"
    >
      <div class="container">
        <a class="navbar-brand" href="./index.php">
          <img src="./images/sublime-logo.svg" height="70" alt="" />
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
                <a class="dropdown-item" href="#">History</a>
                <a class="dropdown-item" href="#">What is Eco 4?</a>
                <a class="dropdown-item" href="#">How do I qualify?</a>
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
                      <a href="" class="submenu-item"
                        >Central Heating Installation</a
                      >
                      <a href="" class="submenu-item">Combination Boiler</a>
                    </div>
                  </li>
                  <li class="has-submenu">
                    <a class="dropdown-item" href="#">Replacement</a>
                    <div class="submenu">
                      <a href="" class="submenu-item"
                        >Back Boiler Replacement</a
                      >
                      <a href="" class="submenu-item"
                        >G Rated Electric Storage Heater Replacement</a
                      >
                      <a href="" class="submenu-item"
                        >Inefficient Boiler Replacement</a
                      >
                    </div>
                  </li>
                  <li class="has-submenu">
                    <a class="dropdown-item" href="#">Renewables</a>
                    <div class="submenu">
                      <a href="" class="submenu-item">Air Source Heat Pumps</a>
                      <a href="" class="submenu-item"
                        >Ground Source Heat Pumps</a
                      >
                      <a href="" class="submenu-item">Solar PV</a>
                    </div>
                  </li>
                </ul>
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
                About Us
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="./about-us.php"
                  >About Sublime</a
                >
                <a class="dropdown-item" href="#">Blogs</a>
                <a class="dropdown-item" href="#">Why choose us?</a>
              </div>
            </li>
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

    <section class="banner apply-now">
      <h1 class="text-center">Apply Now</h1>
    </section>

    <section class="banner-2 pt-6 pb-5">
      <div class="container">
        <!-- <div class="text-center">
          <h2 class="text-primary mb-8">Enter Your Postal Code</h2>
          <div class="row">
            <div class="col-md-6 mx-auto">
              <form action="" class="mb-4">
                <div class="form-group mb-0">
                  <div class="input-group mb-0">
                    <input
                      type="text"
                      class="form-control bg-white shadow-sm"
                      placeholder="ENTER POSTCODE"
                    />
                    <button class="btn btn-primary shadow-sm">CHECK</button>
                  </div>
                  <div class="invalid-feedback">Address is not available</div>
                </div>
              </form>
            </div>
          </div>
        </div> -->
        <!-- <hr /> -->
        <div class="row">
          <div class="col-md-8 mx-auto">
            <form id="formstart">
              <div id="chose-measures">
                <h4>1. What measures we can help you with?</h4>
                <p>Multiple options can be selected</p>
                <div class="row gy-3 measures">
                  <div class="col-md-6">
                    <input type="checkbox" value="First Time Central Heating" class="measures1" name="measures" id="0" />
                    <label for="0">First Time Central Heating</label>
                  </div>
                  <div class="col-md-6">
                    <input type="checkbox" value="Electric Storage Heaters" class="measures1" name="measures" id="1" />
                    <label for="1">Electric Storage Heaters</label>
                  </div>
                  <div class="col-md-6">
                    <input type="checkbox" value="Cavity Wall Insulation" class="measures1" name="measures" id="2" />
                    <label for="2">Cavity Wall Insulation</label>
                  </div>
                  <div class="col-md-6">
                    <input type="checkbox" value="Loft Insulation" class="measures1" name="measures" id="3" />
                    <label for="3">Loft Insulation</label>
                  </div>
                  <div class="col-md-6">
                    <input type="checkbox" value="Room in Roof Insulation" class="measures1" name="measures" id="4" />
                    <label for="4">Room in Roof Insulation</label>
                  </div>
                  <div class="col-md-6">
                    <input type="checkbox" value="Solid Wall Insulation" class="measures1" name="measures" id="5" />
                    <label for="5">Solid Wall Insulation</label>
                  </div>
                  <div class="col-md-6">
                    <input type="checkbox" value="Replacement Boiler" class="measures1" name="measures" id="6" />
                    <label for="6">Replacement Boiler</label>
                  </div>
                  <div class="col-md-6">
                    <input type="checkbox" value="Heat Pump" class="measures1" name="measures" id="7" />
                    <label for="7">Heat Pump</label>
                  </div>
                  <div class="col-md-6">
                    <input type="checkbox" value="Solar PV" class="measures1" name="measures" id="8" />
                    <label for="8">Solar PV</label>
                  </div>
                  <div class="col-md-6">
                    <input type="checkbox" value="Other" class="measures1" name="measures" id="9" />
                    <label for="9">Other</label>
                  </div>
                  <div class="col-12">
                    <div class="d-flex gap-2 justify-content-end">
                      <button
                        type="button"
                        class="btn btn-primary"
                        id="move-property"
                      >
                        Continue
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div id="chose-property" class="d-none">
                <h4>Other Information</h4>
                <div class="row gy-6">
                  <div class="col-md-6">
                    <label for="" class="form-label"
                      >How are you related to property?</label
                    >
                    <select name="" id="dropdowna" class="form-select">
                      <option value="" disabled selected>Select</option>
                      <option value="Home Owner">Home Owner</option>
                      <option value="Private Tenant">Private Tenant</option>
                      <option value="Living with Landlord">Living with Landlord</option>
                      <option value="Housing Association Tenant">Housing Association Tenant</option>
                      <option value="Council Property">Council Property</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="" class="form-label"
                      >How do you currently heat your home?</label
                    >
                    <select name="" id="howheat" class="form-select">
                      <option value="No central heating/ no radiators" selected>
                        No central heating/ no radiators
                      </option>
                      <option value="Combi Boiler Older than 15 Years">Combi Boiler Older than 15 Years</option>
                      <option value="System Boiler">System Boiler</option>
                      <option value="Back Boiler">Back Boiler</option>
                      <option value="Range (AGA/Stanly)">Range (AGA/Stanly)</option>
                      <option value="Electric Storage Heaters">Electric Storage Heaters</option>
                      <option value="Electric Boiler">Electric Boiler</option>
                      <option value="Other/Unsure">Other/Unsure</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <label for="" class="form-label"
                      >Are you or any of your household members claiming any
                      benefits?</label
                    >
                    <div class="row g-4 measures">
                      <div class="col-md-6">
                        <input type="checkbox" value="Universal Credits" name="benefits" id="benefit-1" />
                        <label for="benefit-1">Universal Credits</label>
                      </div>
                      <div class="col-md-6">
                        <input type="checkbox" value="Tax Credits" name="benefits" id="benefit-2" />
                        <label for="benefit-2">Tax Credits</label>
                      </div>
                      <div class="col-md-6">
                        <input type="checkbox" value="Pension Credits" name="benefits" id="benefit-3" />
                        <label for="benefit-3">Pension Credits</label>
                      </div>
                      <div class="col-md-6">
                        <input type="checkbox" value="ESA" name="benefits" id="benefit-4" />
                        <label for="benefit-4">ESA</label>
                      </div>
                      <div class="col-md-6">
                        <input type="checkbox" value="Income Support" name="benefits" id="benefit-5" />
                        <label for="benefit-5">Income Support</label>
                      </div>
                      <div class="col-md-6">
                        <input type="checkbox" value="JSA" name="benefits" id="benefit-6" />
                        <label for="benefit-6">JSA</label>
                      </div>
                      <div class="col-md-6">
                        <input type="checkbox" value="Housing Benefit" name="benefits" id="benefit-7" />
                        <label for="benefit-7">Housing Benefit</label>
                      </div>
                      <div class="col-md-6">
                        <input type="checkbox" value="Child Benefit" name="benefits" id="benefit-8" />
                        <label for="benefit-8">Child Benefit</label>
                      </div>
                      <div class="col-md-6">
                        <input type="checkbox" value="Not sure/ Others" name="benefits" id="benefit-9" />
                        <label for="benefit-9">Not sure/ Others</label>
                      </div>
                      <div class="col-md-6">
                        <input
                          type="checkbox"
                          name="benefits"
                          id="benefit-10"
                          value="No benefits"
                        />
                        <label for="benefit-10">No benefits</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="" class="form-label"
                      >Is your combined household income is below $31k
                      annually?</label
                    >
                    <select name="" id="incomeanual" class="form-select">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      <option value="Not Sure">Not sure</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <div class="d-flex gap-2 justify-content-end">
                      <button
                        type="button"
                        class="btn btn-outline-primary"
                        id="move-measures"
                      >
                        Previous
                      </button>
                      <button
                        type="button"
                        class="btn btn-primary"
                        id="move-personal-info"
                      >
                        Continue
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div id="chose-personal-info" class="d-none">
                <h4>Personal Information</h4>
                <div class="row gy-6">
                  <div class="col-12">
                    <label for="" class="form-label">Full Name</label>
                    <input type="text" id="fullname" class="form-control" />
                  </div>
                  <div class="col-12">
                    <label for="" class="form-label">Phone</label>
                    <input type="tel" id="phone" class="form-control" required />
                  </div>
                  <div class="col-12">
                    <label for="" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" required />
                  </div>
                  <div class="col-12">
                    <div class="d-flex gap-2 justify-content-end">
                      <button
                        type="button"
                        class="btn btn-outline-primary"
                        id="move-back-property"
                      >
                        Previous
                      </button>
                      <button class="btn btn-primary" type="submit" id="move-personal-info">
                        Submit All
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <div class="col-12 text-center">
      <div class="progress mb-5 col-3 mx-auto">
        <div class="progress-bar" role="progressbar" id="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100">0%</div>
      </div>
    </div>

  
    <section class="copyright">
      © Copyright 2023, All Rights Reserved | Sublime Energy Services
    </section>
    <div id="div1" class="d-none"></div>
    <div class="loading" id="loader1" style="visibility: hidden;">Loading&#8230;</div>
    <script src="./js/jquery-3.7.0.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
    <script>
      $("#move-property").click(function () {
        $("#chose-measures").toggleClass("d-none", "d-block", 300);
        $("#chose-property").toggleClass("d-none", "d-block", 300);
        document.getElementById("progressbar").style.width = "33%";
        document.getElementById("progressbar").innerText = "33%";
      });
      $("#move-measures").click(function () {
        $("#chose-measures").toggleClass("d-none", "d-block", 300);
        $("#chose-property").toggleClass("d-none", "d-block", 300);
        document.getElementById("progressbar").style.width = "0%";
        document.getElementById("progressbar").innerText = "0%";
        
      });
      $("#move-personal-info").click(function () {
        $("#chose-personal-info").toggleClass("d-none", "d-block", 300);
        $("#chose-property").toggleClass("d-none", "d-block", 300);
        document.getElementById("progressbar").style.width = "66%";
        document.getElementById("progressbar").innerText = "66%";
      });
      $("#move-back-property").click(function () {
        $("#chose-personal-info").toggleClass("d-none", "d-block", 300);
        $("#chose-property").toggleClass("d-none", "d-block", 300);
        document.getElementById("progressbar").style.width = "33%";
        document.getElementById("progressbar").innerText = "33%";
      });
    </script>
    <script>
      $("#formstart").submit(function (event){
        document.getElementById("loader1").style.visibility = "visible";
        var request;
        event.preventDefault();
        var measures = [];
        var markedCheckbox = document.getElementsByName('measures');  
  for (var checkbox of markedCheckbox) {  
    if (checkbox.checked){
      measures.push(checkbox.value);
    }
  }
  
  var dropdowna = document.getElementById("dropdowna").value;
  var howheat = document.getElementById("howheat").value;
  var benefits1 = [];
  var benefits = document.getElementsByName('benefits');  
  for (var aas of benefits) {  
    if (aas.checked){
      benefits1.push(aas.value);
    }
  }
  var incomeanual = document.getElementById("incomeanual").value;
  var fullname = document.getElementById("fullname").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
var data = JSON.stringify({
      measures:measures,
      dropdowna:dropdowna,
      howheat:howheat,
      benefits1:benefits1,
      incomeanual:incomeanual,
      fullname:fullname,
      email:email,
      phone:phone,
});
  $.ajax({
    type: "post",
    url: `./controller.php`,
    // timeout: 0,
    data: {data:data},
    success: function (response) {
      console.log(response)
      document.getElementById("div1").innerHTML = response;
      Swal.fire({
        icon: "success",
        title: "Successful!",
        text: "Submitted Successfully",
        allowOutsideClick: false,
      });
      $("button.swal2-confirm").click(function () {
        window.location.reload();
      });
      document.getElementById("loader1").style.visibility = "hidden";
    },
    error: function (response) {
      console.log(response);

      // if (response.responseJSON.message == "Already Ordered") {
        Swal.fire({
          icon: "error",
          title: "Failed!",
          text: "Internal Server Error",
          allowOutsideClick: false,
        });
        $("button.swal2-confirm").click(function () {
          window.location.reload();
        });
      // }
    },
  });
  // console.log(phone)
  // console.log(email)
  // console.log(fullname)
  // console.log(incomeanual)
  // console.log(benefits1)
  // console.log(howheat)
  // console.log(dropdowna)
  // console.log(measures)
        // var xas = $('.measures1:checked').val();
        // console.log($('.measures1:checked').val());
      })
    </script>
  </body>
</html>
