@extends('layouts.master')

@section('content')
<section class="py-5 overflow-hidden bg-primary" id="home">
        <div class="container">
          <div class="row flex-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-circle" href="#!"><img class=" img-fluid rounded-3" src="assets/img/gallery/kopi-header.jpg" alt="kopi-header" /></a></div>
            <div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
              <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light">Sampun Ngopi?</h1>
              <h1 class="text-800 mb-5 fs-4">Tempat Makan di Yogyakarta <br class="d-none d-xxl-block" />Dengan Suasana Pedesaan</h1>
              <!-- <div class="card w-xxl-75">
                <div class="card-body"> -->
                  <!-- <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active mb-3" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-motorcycle me-2"></i>Delivery</button>
                      <button class="nav-link mb-3" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fas fa-shopping-bag me-2"></i>Pickup</button>
                    </div> -->
                  <!-- </nav>
                  <div class="tab-content mt-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <form class="row gx-2 gy-2 align-items-center">
                        <div class="col">
                          <div class="input-group-icon"><i class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                            <label class="visually-hidden" for="inputDelivery">Address</label>
                            <input class="form-control input-box form-foodwagon-control" id="inputDelivery" type="text" placeholder="Enter Your Address" />
                          </div>
                        </div> -->
                        <!-- <div class="d-grid gap-3 col-sm-auto">
                          <button class="btn btn-danger" type="submit">Find Food</button>
                        </div>
                      </form>
                    </div> -->
                    <!-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <form class="row gx-4 gy-2 align-items-center">
                        <div class="col">
                          <div class="input-group-icon"><i class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                            <label class="visually-hidden" for="inputPickup">Address</label>
                            <input class="form-control input-box form-foodwagon-control" id="inputPickup" type="text" placeholder="Enter Your Address" />
                          </div>
                        </div>
                        <div class="d-grid gap-3 col-sm-auto">
                          <button class="btn btn-danger" type="submit">Find Food</button>
                        </div> -->
                      <!-- </form> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

       <!-- <section> begin ============================-->
       <section class="py-0">

<div class="container">
  <div class="row h-100 gx-2 mt-7">
    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
      <div class="card card-span h-100">
        <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="assets/img/gallery/pisang_goreng.jpg" alt="pisang_goreng" />
          <div class="card-actions">
            <div class="badge badge-foodwagon bg-primary p-4">
              <div class="d-flex flex-between-center">
                <div class="text-white fs-7">5</div>
                <div class="d-block text-white fs-2">% <br />
                  <div class="fw-normal fs-1 mt-2">Off</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body px-0">
          <h5 class="fw-bold text-1000 text-truncate">Pisang Goreng</h5><span class="badge bg-soft-danger py-2 px-3"><span class="fs-1 text-danger">6 Hari Tersisa</span></span>
        </div><a class="stretched-link" href="#"></a>
      </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
      <div class="card card-span h-100">
        <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="assets/img/gallery/ayam_bakar_pedas.jpg" alt="ayam_bakar"/>
          <div class="card-actions">
            <div class="badge badge-foodwagon bg-primary p-4">
              <div class="d-flex flex-between-center">
                <div class="text-white fs-7">10</div>
                <div class="d-block text-white fs-2">% <br />
                  <div class="fw-normal fs-1 mt-2">Off</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body px-0">
          <h5 class="fw-bold text-1000 text-truncate">Ayam Bakar</h5><span class="badge bg-soft-danger py-2 px-3"><span class="fs-1 text-danger">6 Hari Tersisa</span></span>
        </div><a class="stretched-link" href="#"></a>
      </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
      <div class="card card-span h-100">
        <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="assets/img/gallery/kopi1.jpg" alt="kopi1" />
          <div class="card-actions">
            <div class="badge badge-foodwagon bg-primary p-4">
              <div class="d-flex flex-between-center">
                <div class="text-white fs-7">2</div>
                <div class="d-block text-white fs-2">% <br />
                  <div class="fw-normal fs-1 mt-2">Off</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body px-0">
          <h5 class="fw-bold text-1000 text-truncate">Kopi Klotok</h5><span class="badge bg-soft-danger py-2 px-3"><span class="fs-1 text-danger">6 Hari Tersisa</span></span>
        </div><a class="stretched-link" href="#"></a>
      </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0 h-100 pb-4">
      <div class="card card-span h-100">
        <div class="position-relative"> <img class="img-fluid rounded-3 w-100" src="assets/img/gallery/telur_dadar.png" alt="telur_dadar" />
          <div class="card-actions">
            <div class="badge badge-foodwagon bg-primary p-4">
              <div class="d-flex flex-between-center">
                <div class="text-white fs-7">2</div>
                <div class="d-block text-white fs-2">% <br />
                  <div class="fw-normal fs-1 mt-2">Off</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body px-0">
          <h5 class="fw-bold text-1000 text-truncate">Nasi Telur Dadar</h5><span class="badge bg-soft-danger py-2 px-3"><span class="fs-1 text-danger">6 Hari Tersisa</span></span>
        </div><a class="stretched-link" href="#"></a>
      </div>
    </div>
  </div>
</div><!-- end of .container-->

</section>
<!-- <section> close ============================-->

 <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 bg-primary-gradient">

        <div class="container">
          <div class="row justify-content-center g-0">
            <div class="col-xl-9">
              <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
                <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-4">Bagaimana Cara Melakukan Order</h5>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/order.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Pilih Order Menu</h5>
                    <p class="mb-md-0">Pilih Menu Makanan dan Minuman Yang akan Kalian Pesan</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/location.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Pilih Tempat</h5>
                    <p class="mb-md-0">Pilih Tempat duduk yang Akan Kalian Gunakan</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/pay.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Pembayaran</h5>
                    <p class="mb-md-0">Lakukan Order dan Lakukan Pembayaran Langsung ke Kasir</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-6">
                  <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/meals.png" height="112" alt="..." />
                    <h5 class="mt-4 fw-bold">Nikmati Pesanan </h5>
                    <p class="mb-md-0">Nikmati Makanan dan Minuman Kamu dengan View Pedesaan</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

       <!-- <section> begin ============================-->
        <section class="py-4 overflow-hidden">
      <div class="container">
        <div class="row h-100">
          <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Menu Favorit</h5>
          </div>
    <div class="col-12">
      <div class="carousel slide" id="carouselPopularItems" data-bs-touch="false" data-bs-interval="false">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="row gx-3 h-100 align-items-center">
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/kopi1.jpg" alt="kopi1" />
                  <div class="card-body ps-0">
                    <h5 class="fw-bold text-1000 text-truncate mb-1">Kopi Klotok</h5>
                    <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Warung Kopi Klotok</span></div><span class="text-1000 fw-bold">Rp 5.000</span>
                  </div>
                </div>
                <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="{{url('menu')}}" role="button">Order now</a></div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/pisang_goreng.jpg" alt="pisang_goreng" />
                  <div class="card-body ps-0">
                    <h5 class="fw-bold text-1000 text-truncate mb-1">Pisang Goreng</h5>
                    <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Warung Kopi Klotok</span></div><span class="text-1000 fw-bold">Rp 6.500</span>
                  </div>
                </div>
                <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="{{url('menu')}}" role="button">Order now</a></div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/telur_dadar.png" alt="telur_dadar" />
                  <div class="card-body ps-0">
                    <h5 class="fw-bold text-1000 text-truncate mb-1">Nasi Telur dadar</h5>
                    <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Warung Kopi Klotok</span></div><span class="text-1000 fw-bold">Rp 9.000</span>
                  </div>
                </div>
                <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="{{url('menu')}}" role="button">Order now</a></div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/ayam_bakar_pedas.jpg" alt="ayam_bakar_pedas" />
                  <div class="card-body ps-0">
                    <h5 class="fw-bold text-1000 text-truncate mb-1">Ayam Bakar Pedas</h5>
                    <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Warung Kopi Klotok</span></div><span class="text-1000 fw-bold">Rp 15.000</span>
                  </div>
                </div>
                <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="{{url('menu')}}" role="button">Order now</a></div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="assets/img/gallery/nasi_sayur_lodeh.jpg" alt="nasi_sayur_lodeh" />
                  <div class="card-body ps-0">
                    <h5 class="fw-bold text-1000 text-truncate mb-1">Nasi Sayur Lodeh</h5>
                    <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Warung Kopi Klotok</span></div><span class="text-1000 fw-bold">Rp 10.000</span>
                  </div>
                </div>
                <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="{{url('menu')}}" role="button">Order now</a></div>
              </div>
            </div>
          </div>
          </section>
      <!-- <section> close ============================-->

      <!-- ============================================-->
      <!-- ============= SECTION BEGIN =================-->
      <section>
        <div class="bg-holder" style="background-image:url(assets/img/gallery/cta-one-bg.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xxl-10">
              <div class="card card-span shadow-warning" style="border-radius: 35px;">
                <div class="card-body py-5">
                  <div class="row justify-content-evenly">
                    <div class="col-md-3">
                      <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between"><img src="assets/img/icons/discounts.png" width="100" alt="..." />
                        <div class="d-flex d-lg-block d-xl-flex flex-center">
                          <h2 class="fw-bolder text-1000 mb-0 text-gradient">Diskon<br class="d-none d-md-block" />Harian </h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 hr-vertical">
                      <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between"><img src="assets/img/icons/live-tracking.png" width="100" alt="..." />
                        <div class="d-flex d-lg-block d-xl-flex flex-center">
                          <h2 class="fw-bolder text-1000 mb-0 text-gradient">Reservasi Tempat</h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 hr-vertical">
                      <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between"><img src="assets/img/icons/quick-delivery.png" width="100" alt="..." />
                        <div class="d-flex d-lg-block d-xl-flex flex-center">
                          <h2 class="fw-bolder text-1000 mb-0 text-gradient">Nikmati Orderan </h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row flex-center mt-md-8">
            <div class="col-lg-5 d-none d-lg-block" style="margin-bottom: -122px;"> <img class="w-100" src="assets/img/gallery/phone-cta-one.png" alt="..." /></div>
            <div class="col-lg-5 mt-7 mt-md-0">
              <h1 class="text-primary">Coming Soon App in Mobile</h1>
              <p>Jangan lewatkan !!! <br class="d-none d-xl-block" />Segera akan hadir App Warung Kopi Klotok Mobile</p><a class="pe-2" href="https://www.apple.com/app-store/" target="_blank"><img src="assets/img/gallery/app-store.svg" width="160" alt="" /></a><a href="https://play.google.com/store/apps" target="_blank"><img src="assets/img/gallery/google-play.svg" width="160" alt="" /></a>
            </div>
          </div>
        </div>
      </section>
      

<!-- ============== SECTION END =================-->

<!-- <section> begin ============================-->
<section class="pb-5 pt-8">

<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card card-span mb-3 shadow-lg">
        <div class="card-body py-0">
          <div class="row justify-content-center">
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- end of .container-->
</section>
<!-- <section> close ============================-->

      
      <!-- ============= SECTION BEGIN =================-->
      <section class="py-0">
        <div class="bg-holder" style="background-image:url(assets/img/gallery/bg_bawah.jpg);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-xxl-9 py-7 text-center">
              <h1 class="fw-bold mb-4 text-white fs-6">Siap Order  <br /> dengan Harga Terbaik? </h1><a class="btn btn-danger" href="{{url('menu')}}"> ORDER NOW<i class="fas fa-chevron-right ms-2"></i></a>
            </div>
          </div>
        </div>
      </section>
      <!-- ============== SECTION END =================-->

@endsection