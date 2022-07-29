<!DOCTYPE html>
<html lang="en">
<head>
    <?php _widget('head2');?>
</head>

<body>
   
    <div class="">
      <header>
      <?php _widget('header_mainmenu2');?>

        
      </header>
      <!-- header -->
      <div class="bg-section-wrepper">
        <div class="container">
          <div class="br-section-inner">
            <div class="left-img">
              <img src="./templates/bootstrap4/assets2/Images/gezinswoning-zomer-links.svg" alt="" />
            </div>
            <div class="bg-text">
              <p>Living where seasons still exist</p>
            </div>
            <div class="right-img">
              <!-- <img src="./templates/bootstrap4/assets2/Images/gezinswoning-zomer-rechts.svg" alt="" /> -->
              <img src="./templates/bootstrap4/assets2/Images/boerderij-zomer-rechts.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
      <!-- bg-section-wrepper -->
      <div class="container">
        <div class="tab-struc-wrepper">
          <ul
            class="nav nav-pills mb-3 nav-pills-main"
            id="pills-tab"
            role="tablist"
          >
            <li class="nav-item" role="presentation">
              <button
                class="nav-link active"
                id="pills-home-tab"
                data-bs-toggle="pill"
                data-bs-target="#tab1"
                type="button"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
              >
                For Sale
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-profile-tab"
                data-bs-toggle="pill"
                data-bs-target="#tab2"
                type="button"
                role="tab"
                aria-controls="pills-profile"
                aria-selected="false"
              >
                For Rent
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#tab3"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                Newly Bulit
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#tab4"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                Recreation
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#tab5"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                Europe
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#tab6"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                For Business
              </button>
            </li>
          </ul>
          <!-- for rispo -->
          <ul
            class="nav nav-pills mb-3 nav-pills-rispo"
            id="pills-tab"
            role="tablist"
          >
            <li class="nav-item" role="presentation">
              <button
                class="nav-link active"
                id="pills-home-tab"
                data-bs-toggle="pill"
                data-bs-target="#tab1"
                type="button"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
              >
                For Sale
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-profile-tab"
                data-bs-toggle="pill"
                data-bs-target="#tab2"
                type="button"
                role="tab"
                aria-controls="pills-profile"
                aria-selected="false"
              >
                For Rent
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#tab3"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                Newly Bulit
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#tab4"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                Recreation
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#tab5"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                Europe
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                data-bs-target="#tab6"
                type="button"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
              >
                For Business
              </button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div
              class="tab-pane fade show active"
              id="tab1"
              role="tabpanel"
              aria-labelledby="pills-home-tab"
            >
              <div class="search-wrepper">
                <div class="">
                  <div class="d-flex">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="City, neighborhood, address, etc."
                      aria-label="Text input with dropdown button"
                    />
                    <select
                      class="dropdown-btn br2 form-select form-select-sm"
                      aria-label=".form-select-sm example"
                    >
                      <option selected>+ 0 km</option>
                      <option value="1">+ 10 km</option>
                      <option value="2">+ 50 km</option>
                      <option value="3">+ 100 km</option>
                    </select>
                  </div>
                </div>
                <!-- col -->
                <div class="budget-wrepper">
                  <div class="">
                    <div class="d-flex">
                      <div class="">
                        <span class="input-group-text">From</span>
                      </div>
                      <div class="w-100">
                        <select
                          class="dropdown-btn form-select form-select-sm"
                          aria-label=".form-select-sm example"
                        >
                          <option selected>$0</option>
                          <option value="1">$10</option>
                          <option value="2">$50</option>
                          <option value="3">$100</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="">
                    <div class="d-flex">
                      <div class="">
                        <span class="input-group-text">To</span>
                      </div>
                      <div class="w-100">
                        <select
                          class="dropdown-btn form-select form-select-sm"
                          aria-label=".form-select-sm example"
                        >
                          <option>$0</option>
                          <option value="1">$10</option>
                          <option value="2">$50</option>
                          <option value="3">$100</option>
                          <option value="4" selected>No Limit</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                </div>
                <div class="d-flex">
                  <a href="#" class="btn-1"> Search </a>
                </div>
              </div>
            </div>
            <!-- tab -->
            <div
              class="tab-pane fade"
              id="tab2"
              role="tabpanel"
              aria-labelledby="pills-profile-tab"
            >
              <div class="search-wrepper">
                <div class="">
                  <div class="d-flex">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="City, neighborhood, address, etc."
                      aria-label="Text input with dropdown button"
                    />
                    <select
                      class="dropdown-btn br2 form-select form-select-sm"
                      aria-label=".form-select-sm example"
                    >
                      <option selected>+ 0 km</option>
                      <option value="1">+ 10 km</option>
                      <option value="2">+ 50 km</option>
                      <option value="3">+ 100 km</option>
                    </select>
                  </div>
                </div>
                <!-- col -->
                <div class="budget-wrepper">
                  <div class="">
                    <div class="d-flex">
                      <div class="">
                        <span class="input-group-text">From</span>
                      </div>
                      <div class="w-100">
                        <select
                          class="dropdown-btn form-select form-select-sm"
                          aria-label=".form-select-sm example"
                        >
                          <option selected>$0</option>
                          <option value="1">$10</option>
                          <option value="2">$50</option>
                          <option value="3">$100</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="">
                    <div class="d-flex">
                      <div class="">
                        <span class="input-group-text">To</span>
                      </div>
                      <div class="w-100">
                        <select
                          class="dropdown-btn form-select form-select-sm"
                          aria-label=".form-select-sm example"
                        >
                          <option>$0</option>
                          <option value="1">$10</option>
                          <option value="2">$50</option>
                          <option value="3">$100</option>
                          <option value="4" selected>No Limit</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                </div>
                <div class="d-flex">
                  <a href="#" class="btn-1"> Search </a>
                </div>
              </div>
            </div>
            <!-- tab -->
            <div
              class="tab-pane fade"
              id="tab3"
              role="tabpanel"
              aria-labelledby="pills-contact-tab"
            >
              <div class="search-wrepper">
                <div class="">
                  <div class="d-flex">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="City, neighborhood, address, etc."
                      aria-label="Text input with dropdown button"
                    />
                    <select
                      class="dropdown-btn br2 form-select form-select-sm"
                      aria-label=".form-select-sm example"
                    >
                      <option selected>+ 0 km</option>
                      <option value="1">+ 10 km</option>
                      <option value="2">+ 50 km</option>
                      <option value="3">+ 100 km</option>
                    </select>
                  </div>
                </div>
                <!-- col -->
                <div class="budget-wrepper">
                  <div class="">
                    <div class="d-flex">
                      <div class="">
                        <span class="input-group-text">From</span>
                      </div>
                      <div class="w-100">
                        <select
                          class="dropdown-btn form-select form-select-sm"
                          aria-label=".form-select-sm example"
                        >
                          <option selected>$0</option>
                          <option value="1">$10</option>
                          <option value="2">$50</option>
                          <option value="3">$100</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="">
                    <div class="d-flex">
                      <div class="">
                        <span class="input-group-text">To</span>
                      </div>
                      <div class="w-100">
                        <select
                          class="dropdown-btn form-select form-select-sm"
                          aria-label=".form-select-sm example"
                        >
                          <option>$0</option>
                          <option value="1">$10</option>
                          <option value="2">$50</option>
                          <option value="3">$100</option>
                          <option value="4" selected>No Limit</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                </div>
                <div class="d-flex">
                  <a href="#" class="btn-1"> Search </a>
                </div>
              </div>
            </div>
            <!-- tab -->
            <div
              class="tab-pane fade"
              id="tab4"
              role="tabpanel"
              aria-labelledby="pills-contact-tab"
            >
              <div class="search-wrepper">
                <div class="">
                  <div class="d-flex">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="City, neighborhood, address, etc."
                      aria-label="Text input with dropdown button"
                    />
                    <select
                      class="dropdown-btn br2 form-select form-select-sm"
                      aria-label=".form-select-sm example"
                    >
                      <option selected>+ 0 km</option>
                      <option value="1">+ 10 km</option>
                      <option value="2">+ 50 km</option>
                      <option value="3">+ 100 km</option>
                    </select>
                  </div>
                </div>
                <!-- col -->
                <div class="budget-wrepper">
                  <div class="">
                    <div class="d-flex">
                      <div class="">
                        <span class="input-group-text">From</span>
                      </div>
                      <div class="w-100">
                        <select
                          class="dropdown-btn form-select form-select-sm"
                          aria-label=".form-select-sm example"
                        >
                          <option selected>$0</option>
                          <option value="1">$10</option>
                          <option value="2">$50</option>
                          <option value="3">$100</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="">
                    <div class="d-flex">
                      <div class="">
                        <span class="input-group-text">To</span>
                      </div>
                      <div class="w-100">
                        <select
                          class="dropdown-btn form-select form-select-sm"
                          aria-label=".form-select-sm example"
                        >
                          <option>$0</option>
                          <option value="1">$10</option>
                          <option value="2">$50</option>
                          <option value="3">$100</option>
                          <option value="4" selected>No Limit</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                </div>
                <div class="d-flex">
                  <a href="#" class="btn-1"> Search </a>
                </div>
              </div>
            </div>
            <!-- tab -->
            <div
              class="tab-pane fade"
              id="tab5"
              role="tabpanel"
              aria-labelledby="pills-contact-tab"
            >
              <div class="search-wrepper">
                <div class="">
                  <div class="d-flex">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="City, neighborhood, address, etc."
                      aria-label="Text input with dropdown button"
                    />
                    <select
                      class="dropdown-btn br2 form-select form-select-sm"
                      aria-label=".form-select-sm example"
                    >
                      <option selected>+ 0 km</option>
                      <option value="1">+ 10 km</option>
                      <option value="2">+ 50 km</option>
                      <option value="3">+ 100 km</option>
                    </select>
                  </div>
                </div>
                <!-- col -->
                <div class="budget-wrepper">
                  <div class="">
                    <div class="d-flex">
                      <div class="">
                        <span class="input-group-text">From</span>
                      </div>
                      <div class="w-100">
                        <select
                          class="dropdown-btn form-select form-select-sm"
                          aria-label=".form-select-sm example"
                        >
                          <option selected>$0</option>
                          <option value="1">$10</option>
                          <option value="2">$50</option>
                          <option value="3">$100</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="">
                    <div class="d-flex">
                      <div class="">
                        <span class="input-group-text">To</span>
                      </div>
                      <div class="w-100">
                        <select
                          class="dropdown-btn form-select form-select-sm"
                          aria-label=".form-select-sm example"
                        >
                          <option>$0</option>
                          <option value="1">$10</option>
                          <option value="2">$50</option>
                          <option value="3">$100</option>
                          <option value="4" selected>No Limit</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                </div>
                <div class="d-flex">
                  <a href="#" class="btn-1"> Search </a>
                </div>
              </div>
            </div>
            <!-- tab -->
            <div
              class="tab-pane fade"
              id="tab6"
              role="tabpanel"
              aria-labelledby="pills-contact-tab"
            >
              <div class="search-wrepper">
                <div class="">
                  <div class="d-flex">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="City, neighborhood, address, etc."
                      aria-label="Text input with dropdown button"
                    />
                    <select
                      class="dropdown-btn br2 form-select form-select-sm"
                      aria-label=".form-select-sm example"
                    >
                      <option selected>+ 0 km</option>
                      <option value="1">+ 10 km</option>
                      <option value="2">+ 50 km</option>
                      <option value="3">+ 100 km</option>
                    </select>
                  </div>
                </div>
                <!-- col -->
                <div class="budget-wrepper">
                  <div class="">
                    <div class="d-flex">
                      <div class="">
                        <span class="input-group-text">From</span>
                      </div>
                      <div class="w-100">
                        <select
                          class="dropdown-btn form-select form-select-sm"
                          aria-label=".form-select-sm example"
                        >
                          <option selected>$0</option>
                          <option value="1">$10</option>
                          <option value="2">$50</option>
                          <option value="3">$100</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="">
                    <div class="d-flex">
                      <div class="">
                        <span class="input-group-text">To</span>
                      </div>
                      <div class="w-100">
                        <select
                          class="dropdown-btn form-select form-select-sm"
                          aria-label=".form-select-sm example"
                        >
                          <option>$0</option>
                          <option value="1">$10</option>
                          <option value="2">$50</option>
                          <option value="3">$100</option>
                          <option value="4" selected>No Limit</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- col -->
                </div>
                <div class="d-flex">
                  <a href="#" class="btn-1"> Search </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- tab-struc-wrepper -->
      <div class="container">
        <div class="feachers-card-wrepper">
          <div class="card">
            <h5>Find an NVM agent</h5>
            <img src="./templates/bootstrap4/assets2/Images/Icon/icon-3.svg" alt="" />
          </div>
          <div class="card">
            <h5>Search on the map</h5>
            <img src="./templates/bootstrap4/assets2/Images/Icon/icon-2.svg" alt="" />
          </div>
          <div class="card">
            <h5>Waardecheck</h5>
            <img src="./templates/bootstrap4/assets2/Images/Icon/icon-1.svg" alt="" />
          </div>
        </div>
      </div>
      <!-- feachers-card-wrepper -->
      <div class="container">
        <div class="google-ads-wrepper">
          <span>Google Ads will be here</span>
        </div>
      </div>
      <!-- google-ads-wrepper -->
      <div class="properties-list">
        <div class="container">
          <div class="heading-wrepper">
            <h2>Featured residential properties</h2>
          </div>
          <!-- heading -->
          <?php _widget('center_featuredproperties2');?>
         
          
        </div>
      </div>
      <!-- properties-list -->
      <div class="container">
        <div class="template-wrepper">
          <div class="banner-1">
            <img
              src="https://assets.fstatic.nl/master_3930/assets/components/logo/fundainbusiness-logo.svg"
              alt=""
            />
            <p>Find your retail, office, logistic or industrial property</p>
            <a href="#" class="btn btn-outline-light"> Search in properties </a>
          </div>
          <div class="banner-2">
            <img src="./templates/bootstrap4/assets2/Images/Icon/funda-listing-sign.svg" alt="" />
            <p>Are you planning to sell your house?</p>
            <a href="#" class="btn btn-outline-primary"> Selling your house </a>
          </div>
        </div>
      </div>
      <!-- template-wrepper -->
      <footer>
        <div class="upper-footer">
          <div class="container">
            <div class="">
              <p>Tools</p>
              <ul>
                <li>
                  <a href="#">List your house on funda</a>
                </li>
                <!-- li -->
                <li>
                  <a href="#">Find an NVM agent</a>
                </li>
                <!-- li -->
                <li>
                  <a href="#">Browse</a>
                </li>
                <!-- li -->
                <li>
                  <a href="#">What's the value of my house</a>
                </li>
                <!-- li -->
              </ul>
            </div>
            <!-- col-1 -->
            <div class="">
              <p>Information</p>
              <ul>
                <li><a href="#"> Frequently asked questions </a></li>
                <!-- li -->
                <li><a href="#">Funda Index</a></li>
                <!-- li -->
                <li><a href="#">Buy your first house</a></li>
                <!-- li -->
                <li><a href="#">Sell your house</a></li>
                <!-- li -->
                <li><a href="#">How do I search on funda?</a></li>
                <!-- li -->
              </ul>
            </div>
            <!-- col-2 -->
            <div class="">
              <p>Real estate agent</p>
              <ul>
                <li>
                  <a href="#">Funda desk</a>
                </li>
                <!-- li -->
                <li>
                  <a href="#">Tips, trends & news</a>
                </li>
                <!-- li -->
                <li>
                  <a href="#">Leads</a>
                </li>
                <!-- li -->
                <li>
                  <a href="#">Products</a>
                </li>
                <!-- li -->
                <li>
                  <a href="#">Events & meetups </a>
                </li>
                <!-- li -->
              </ul>
            </div>
            <!-- col-3 -->
            <div class="">
              <p>About us</p>
              <ul>
                <li><a href="#">About funda</a></li>
                <!-- li -->
                <li><a href="#">Contact</a></li>
                <!-- li -->
                <li><a href="#">Working at funda</a></li>
                <!-- li -->
                <li><a href="#">Advertising</a></li>
                <!-- li -->
              </ul>
            </div>
            <!-- col-4 -->
          </div>
        </div>
        <!-- upper-footer -->
        <div class="lower-footer">
          <div class="container">
            <div class="sos-icon-wrepper">
              <div class="icon">
                <i class="fa-brands fa-facebook-f"></i>
              </div>
              <!-- icon -->
              <div class="icon">
                <i class="fa-brands fa-twitter"></i>
              </div>
              <!-- icon -->
              <div class="icon"><i class="fa-brands fa-instagram"></i></div>
              <!-- icon -->
              <div class="icon"><i class="fa-brands fa-youtube"></i></div>
              <!-- icon -->
              <div class="icon"><i class="fa-brands fa-linkedin-in"></i></div>
              <!-- icon -->
            </div>
            <!-- sos-icon-wrepper -->
            <div class="copy-write"><p>© 2001-2022 funda</p></div>
            <!-- copy-write -->
            <div class="policy-links">
              <ul>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Cookies</a></li>
                <li><a href="#">Terms of use</a></li>
              </ul>
            </div>
            <!-- policy-links -->
            <div class="language-wrepper">
              <span>Language</span>
              <select
                class="dropdown-btn br2 form-select form-select-sm"
                aria-label=".form-select-sm example"
              >
                <option selected>English</option>
                <option value="1">Nederlands</option>
              </select>
            </div>
            <!-- language-wrepper -->
          </div>
        </div>
      </footer>
    </div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      referrerpolicy="no-referrer"
    ></script>
    <script
      type="text/javascript"
      src="./templates/bootstrap4/assets2/slick-1.8.1/slick/slick.min.js"
    ></script>
    <!-- main js -->
    <script src="./templates/bootstrap4/assets2/js/main.js"></script>
  </body>
</html>