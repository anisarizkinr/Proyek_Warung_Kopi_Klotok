@extends('layouts.master')

@section('content')
      <!-- <section> begin ============================-->
      <section class="pb-5 pt-8">

        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card card-span mb-3 shadow-lg">
                <div class="card-body py-0">
                  <div class="row justify-content-center">
                    <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0" src="assets/img/gallery/kopi1.jpg" alt="..." /></div>
                    <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                      <h1 class="card-title mt-xl-5 mb-4">Nikmati Menu Andalan<span class="text-primary"> Dengan Kopi Klotok </span></h1>
                      <p class="fs-1">Nikmati Makanan dan Minumanmu dengan Suasana Pedesaan yang Asri</p>
                      <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6" href="#!">ORDER NOW<i class="fas fa-chevron-right ms-2"></i></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
        </section>
      <!-- <section> close ============================-->

<!-- <section> begin ============================-->
<section class="py-8 overflow-hidden">

<div class="container">
  <div class="row flex-center mb-6">
    <div class="col-lg-7">
      <h5 class="fw-bold fs-3 fs-lg-5 lh-sm text-center text-lg-start">Search by Food</h5>
    </div>
    <div class="col-lg-4 text-lg-end text-center"><a class="btn btn-lg text-800 me-2" href="#" role="button">VIEW ALL <i class="fas fa-chevron-right ms-2"></i></a></div>
    <div class="col-lg-auto position-relative">
      <button class="carousel-control-prev s-icon-prev carousel-icon" type="button" data-bs-target="#carouselSearchByFood" data-bs-slide="prev"><span class="carousel-control-prev-icon hover-top-shadow" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
      <button class="carousel-control-next s-icon-next carousel-icon" type="button" data-bs-target="#carouselSearchByFood" data-bs-slide="next"><span class="carousel-control-next-icon hover-top-shadow" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
    </div>
  </div>
  <div class="row flex-center">
    <div class="col-12">
      <div class="carousel slide" id="carouselSearchByFood" data-bs-touch="false" data-bs-interval="false">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="row h-100 align-items-center">
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/kopi1.jpg" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Kopi Klotok</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/pisang_goreng.jpg" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Pisang Goreng</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/ayam_bakar_pedas.jpg" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Ayam Bakar Pedas</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/nasi_sayur_lodeh.jpg" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Nasi Sayur Lodeh</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/telur_dadar.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Telur Dadar</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/ayam_bakar.jpg" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Ayam Bakar</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <div class="row h-100 align-items-center">
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/search-pizza.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">pizza</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/burger.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Burger</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/noodles.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Noodles</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/sub-sandwich.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Sub-sandwiches</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/chowmein.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Chowmein</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/steak.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Steak</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <div class="row h-100 align-items-center">
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/search-pizza.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">pizza</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/burger.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Burger</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/noodles.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Noodles</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/sub-sandwich.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Sub-sandwiches</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/chowmein.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Chowmein</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/steak.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Steak</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row h-100 align-items-center">
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/search-pizza.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">pizza</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/burger.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Burger</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/noodles.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Noodles</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/sub-sandwich.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Sub-sandwiches</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/chowmein.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Chowmein</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="assets/img/gallery/steak.png" alt="..." />
                  <div class="card-body ps-0">
                    <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Steak</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- end of .container-->

</section>
<!-- <section> close ============================-->

<!-- ========== DAFTAR MENU ================= -->
<section id="testimonial">
<div class="container">
  <div class="row h-100">
    <div class="col-lg-7 mx-auto text-center mb-6">
      <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Featured Restaurants</h5>
    </div>
  </div>
  <div class="row gx-2">
    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
      <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/food-world.png" alt="..." />
        <div class="card-img-overlay ps-0"><span class="badge bg-danger p-2 ms-3"><i class="fas fa-tag me-2 fs-0"></i><span class="fs-0">20% off</span></span><span class="badge bg-primary ms-2 me-1 p-2"><i class="fas fa-clock me-1 fs-0"></i><span class="fs-0">Fast</span></span></div>
        <div class="card-body ps-0">
          <div class="d-flex align-items-center mb-3"><img class="img-fluid" src="assets/img/gallery/food-world-logo.png" alt="" />
            <div class="flex-1 ms-3">
              <h5 class="mb-0 fw-bold text-1000">Food world</h5><span class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span class="mb-0 text-primary">46</span>
            </div>
          </div><span class="badge bg-soft-danger p-2"><span class="fw-bold fs-1 text-danger">Opens Tomorrow</span></span>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
      <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/pizza-hub.png" alt="..." />
        <div class="card-img-overlay ps-0"><span class="badge bg-danger p-2 ms-3"><i class="fas fa-tag me-2 fs-0"></i><span class="fs-0">10% off</span></span><span class="badge bg-primary ms-2 me-1 p-2"><i class="fas fa-clock me-1 fs-0"></i><span class="fs-0">Fast</span></span></div>
        <div class="card-body ps-0">
          <div class="d-flex align-items-center mb-3"><img class="img-fluid" src="assets/img/gallery/pizzahub-logo.png" alt="" />
            <div class="flex-1 ms-3">
              <h5 class="mb-0 fw-bold text-1000">Pizza hub</h5><span class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span class="mb-0 text-primary">40</span>
            </div>
          </div><span class="badge bg-soft-danger p-2"><span class="fw-bold fs-1 text-danger">Opens Tomorrow</span></span>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
      <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/donuts-hut.png" alt="..." />
        <div class="card-img-overlay ps-0"><span class="badge bg-danger p-2 ms-3"><i class="fas fa-tag me-2 fs-0"></i><span class="fs-0">15% off</span></span><span class="badge bg-primary ms-2 me-1 p-2"><i class="fas fa-clock me-1 fs-0"></i><span class="fs-0">Fast</span></span></div>
        <div class="card-body ps-0">
          <div class="d-flex align-items-center mb-3"><img class="img-fluid" src="assets/img/gallery/donuts-hut-logo.png" alt="" />
            <div class="flex-1 ms-3">
              <h5 class="mb-0 fw-bold text-1000">Donuts hut</h5><span class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span class="mb-0 text-primary">20</span>
            </div>
          </div><span class="badge bg-soft-success p-2"><span class="fw-bold fs-1 text-success">Open Now</span></span>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
      <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/donuthut.png" alt="..." />
        <div class="card-img-overlay ps-0"><span class="badge bg-danger p-2 ms-3"><i class="fas fa-tag me-2 fs-0"></i><span class="fs-0">15% off</span></span><span class="badge bg-primary ms-2 me-1 p-2"><i class="fas fa-clock me-1 fs-0"></i><span class="fs-0">Fast</span></span></div>
        <div class="card-body ps-0">
          <div class="d-flex align-items-center mb-3"><img class="img-fluid" src="assets/img/gallery/donut-hut-logo.png" alt="" />
            <div class="flex-1 ms-3">
              <h5 class="mb-0 fw-bold text-1000">Donuts hut</h5><span class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span class="mb-0 text-primary">50</span>
            </div>
          </div><span class="badge bg-soft-success p-2"><span class="fw-bold fs-1 text-success">Open Now</span></span>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
      <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/ruby-tuesday.png" alt="..." />
        <div class="card-img-overlay ps-0"><span class="badge bg-danger p-2 ms-3"><i class="fas fa-tag me-2 fs-0"></i><span class="fs-0">10% off</span></span><span class="badge bg-primary ms-2 me-1 p-2"><i class="fas fa-clock me-1 fs-0"></i><span class="fs-0">Fast</span></span></div>
        <div class="card-body ps-0">
          <div class="d-flex align-items-center mb-3"><img class="img-fluid" src="assets/img/gallery/ruby-tuesday-logo.png" alt="" />
            <div class="flex-1 ms-3">
              <h5 class="mb-0 fw-bold text-1000">Ruby tuesday</h5><span class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span class="mb-0 text-primary">50</span>
            </div>
          </div><span class="badge bg-soft-success p-2"><span class="fw-bold fs-1 text-success">Open Now</span></span>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
      <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/kuakata.png" alt="..." />
        <div class="card-img-overlay ps-0"><span class="badge bg-danger p-2 ms-3"><i class="fas fa-tag me-2 fs-0"></i><span class="fs-0">10% off</span></span><span class="badge bg-primary ms-2 me-1 p-2"><i class="fas fa-clock me-1 fs-0"></i><span class="fs-0">Fast</span></span></div>
        <div class="card-body ps-0">
          <div class="d-flex align-items-center mb-3"><img class="img-fluid" src="assets/img/gallery/kuakata-logo.png" alt="" />
            <div class="flex-1 ms-3">
              <h5 class="mb-0 fw-bold text-1000">Kuakata Fried Chicken</h5><span class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span class="mb-0 text-primary">50</span>
            </div>
          </div><span class="badge bg-soft-success p-2"><span class="fw-bold fs-1 text-success">Open Now</span></span>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
      <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/red-square.png" alt="..." />
        <div class="card-img-overlay ps-0"><span class="badge bg-danger p-2 ms-3"><i class="fas fa-tag me-2 fs-0"></i><span class="fs-0">10% off</span></span><span class="badge bg-primary ms-2 me-1 p-2"><i class="fas fa-clock me-1 fs-0"></i><span class="fs-0">Fast</span></span></div>
        <div class="card-body ps-0">
          <div class="d-flex align-items-center mb-3"><img class="img-fluid" src="assets/img/gallery/red-square-logo.png" alt="" />
            <div class="flex-1 ms-3">
              <h5 class="mb-0 fw-bold text-1000">Kuakata Fried Chicken</h5><span class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span class="mb-0 text-primary">50</span>
            </div>
          </div><span class="badge bg-soft-success p-2"><span class="fw-bold fs-1 text-success">Open Now</span></span>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3 h-100 mb-5">
      <div class="card card-span h-100 text-white rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/taco-bell.png" alt="..." />
        <div class="card-img-overlay ps-0"><span class="badge bg-danger p-2 ms-3"><i class="fas fa-tag me-2 fs-0"></i><span class="fs-0">10% off</span></span><span class="badge bg-primary ms-2 me-1 p-2"><i class="fas fa-clock me-1 fs-0"></i><span class="fs-0">Fast</span></span></div>
        <div class="card-body ps-0">
          <div class="d-flex align-items-center mb-3"><img class="img-fluid" src="assets/img/gallery/taco-bell-logo.png" alt="" />
            <div class="flex-1 ms-3">
              <h5 class="mb-0 fw-bold text-1000">Taco bell</h5><span class="text-primary fs--1 me-1"><i class="fas fa-star"></i></span><span class="mb-0 text-primary">50</span>
            </div>
          </div><span class="badge bg-soft-success p-2"><span class="fw-bold fs-1 text-success">Open Now</span></span>
        </div>
      </div>
    </div>
    <div class="col-12 d-flex justify-content-center mt-5"> <a class="btn btn-lg btn-primary" href="#!">View All <i class="fas fa-chevron-right ms-2"> </i></a></div>
  </div>
</div>
</section>


<!-- ============================================-->
@endsection