<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('/assets/images/logos/pepe.png')}}" />
  <link rel="stylesheet" href="{{asset('/assets/css/styles.min.css')}}" />
   <link rel="stylesheet" href="{{asset('/assets/css/all.css')}}">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!--  App Topstrip -->
    <div class="app-topstrip bg-dark py-6 px-3 w-100 d-lg-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center justify-content-center gap-5 mb-2 mb-lg-0">
          <a class="d-flex justify-content-center" href="https://www.wrappixel.com/" target="_blank">
            <img src="{{asset('/assets/images/logos/logo-wrappixel.svg')}}" alt="" width="150">
          </a>

          <div class="d-none d-xl-flex align-items-center gap-3">
            <a href="https://support.wrappixel.com/"
              class="btn btn-outline-primary d-flex align-items-center gap-1 border-0 text-white px-6">
              <i class="ti ti-lifebuoy fs-5"></i>
              Support
            </a>
            <a href="https://www.wrappixel.com/"
              class="btn btn-outline-primary d-flex align-items-center gap-1 border-0 text-white px-6">
              <i class="ti ti-gift fs-5"></i>
              Templates
            </a>
            <a href="https://www.wrappixel.com/hire-us/"
              class="btn btn-outline-primary d-flex align-items-center gap-1 border-0 text-white px-6">
              <i class="ti ti-briefcase fs-5"></i>
              Hire Us
            </a>
          </div>
        </div>

      <div class="d-lg-flex align-items-center gap-2">
        <h3 class="text-white mb-2 mb-lg-0 fs-5 text-center">WELCOME</h3>
        <div class="d-flex align-items-center justify-content-center gap-2">
          <div class="dropdown d-flex">
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop4">
              <div class="message-body">
                
                

                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="{{asset('/assets/images/logos/logo.svg')}}" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Home</span>
            </li>

            

            <!-- ---------------------------------- -->
            <!-- Dashboard -->
            <!-- ---------------------------------- -->
           
            
            

            
            
            

            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="#" aria-expanded="false">
                <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="/pelanggan" aria-expanded="false">
                <iconify-icon icon="solar:accessibility-line-duotone" class=""></iconify-icon>
                <span class="hide-menu">Pelanggan</span>
              </a>
            </li>


             <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="#" aria-expanded="false">
                <iconify-icon icon="solar:cart-3-line-duotone"></iconify-icon>
                <span class="hide-menu">Produk</span>
              </a>
            </li>


             <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="#" aria-expanded="false">
                <iconify-icon icon="solar:document-text-line-duotone" class=""></iconify-icon>
                <span class="hide-menu">Pesanan</span>
              </a>
            </li>


             <li class="sidebar-item">
              <a class="sidebar-link primary-hover-bg" href="#" aria-expanded="false">
                <iconify-icon icon="solar:dollar-line-duotone" class=""></iconify-icon>
                <span class="hide-menu">Pembayaran</span>
              </a>
            </li>

            
                
            
            
          
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      
      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <!--  Header Start -->
          <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
              <ul class="navbar-nav">
                <li class="nav-item d-block d-xl-none">
                  <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link " href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <iconify-icon icon="solar:bell-linear" class="fs-6"></iconify-icon>
                    <div class="notification bg-primary rounded-circle"></div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop1">
                    <div class="message-body">
                      <a href="javascript:void(0)" class="dropdown-item">
                        Item 1
                      </a>
                      <a href="javascript:void(0)" class="dropdown-item">
                        Item 2
                      </a>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                  {{-- <a href="https://www.wrappixel.com/templates/spike-bootstrap-admin-dashboard/?ref=376" target="_blank"
                    class="btn btn-primary">Hi Admin!</a> --}}
                  <li class="nav-item dropdown">
                    <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <img src="{{asset('/assets/images/profile/user1.jpg')}}" alt="" width="35" height="35"
                        class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="message-body">
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                          <i class="ti ti-user fs-6"></i>
                          <p class="mb-0 fs-3">My Profile</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                          <i class="ti ti-mail fs-6"></i>
                          <p class="mb-0 fs-3">My Account</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                          <i class="ti ti-list-check fs-6"></i>
                          <p class="mb-0 fs-3">My Task</p>
                        </a>

                         <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf

                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
          </header>
          <!--  Header End -->
              <section>
                @yield('content')
              </section>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/assets/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('/assets/js/app.min.js')}}"></script>
  <script src="{{asset('/assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('/assets/js/all.js')}}"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  {{-- <script src="{{ asset('/dist/js/demo.js')}}"></script> --}}
</body>

</html>