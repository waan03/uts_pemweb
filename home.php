<?php
include_once('./koneksi.php');
include_once('./function.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
  <meta
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
    name="viewport"
  />
  <title>Portofolio | M. Dzakwan R.</title>
  <meta property="og:title" content="Homepage | Atom Template" />
  <meta property="og:locale" content="en_US" />
  <link
    rel="canonical"
    href="//"
  />
  <meta
    property="og:url"
    content="//"
  />
  <meta
    name="description"
    content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
  />
  <link rel="icon" type="image/png" href="/assets/img/favicon.png" />

  <meta name="theme-color" content="#5540af" />

  <meta property="og:site_name" content="Atom Template" />

  <meta property="og:image" content="//assets/img/social.jpg" />

  <meta name="twitter:card" content="summary_large_image" />

  <meta name="twitter:site" content="@tailwindmade" />

  <link
    crossorigin="crossorigin"
    href="https://fonts.gstatic.com"
    rel="preconnect"
  />
  <link rel="stylesheet" href="path/to/tailwind.css">

  <link
    as="style"
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
    rel="preload"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
    rel="stylesheet"
  />
  <link
    href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
    rel="stylesheet"
  />
  <link
    crossorigin="anonymous"
    href="/assets/styles/main.min.css"
    media="screen"
    rel="stylesheet"
  />
  <script
    defer
    src="https://unpkg.com/@alpine-collective/toolkit@1.0.0/dist/cdn.min.js"
  ></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<!--TITLE -->
  <body
    :class="{ 'overflow-hidden max-h-screen': mobileMenu }"
    class="relative"
    x-data="{ mobileMenu: false }"
  >
    
    <div id="main" class="relative">
      <div
  x-data="{
    triggerNavItem(id) {
        $scroll(id)
    },
    triggerMobileNavItem(id) {
        mobileMenu = false;
        this.triggerNavItem(id)
    }
}"
>
<!--NAVBAR -->
<div class="h-screen">
<div class=" relative top-0 w-full shadow-xl  ">
  <div class="w-full top-0  sm:py-5 py-10  bg-primary bg-opacity-30">
  <div class="container flex items-center justify-between">
    <div>
      <a href="index.html">
        <img src="/assets/img/LOGO.png" class="w-24 lg:w-48" alt="logo image" />
      </a>
    </div>
    <div class="hidden lg:block">
      <ul class="flex items-center">
        
        <li class="group pl-6">
          <a href="about.html">
          <span
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >About</span
          ></a>
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        

        
        <li class="group pl-6">
          <a href="portofolio.html">
          <span
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Portfolio</span
          >
        </a>
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          <a href="blog.html">
          <span
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Blog</span
          >
        </a>
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          <a href="contact.html">
          <span
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Contact</span
          >
        </a>
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
      </ul>
    </div>
  </div>
</div>
</div>
<div>
<div
  class="relative bg-cover bg-center bg-no-repeat py-8 h-screen"
  style="background-image: url(assets\img\Program-Komputer.jpg)"
>
  <div
    class="absolute inset-0  bg-gradient-to-r from-hero-gradient-from to-hero-gradient-to bg-cover bg-center bg-no-repeat"
  ></div>

  <div
    class="container relative  pt-30 pb-12 sm:pt-56 sm:pb-48 lg:pt-64 lg:pb-48"
  >
    <div class="flex flex-col items-center justify-center lg:flex-row">
      <div class="rounded-full border-8 border-primary shadow-xl">
        <img
          src="/assets/img/jeki.jpg"
          class="h-48 rounded-full sm:h-56"
          alt="author"
        />
      </div>
      <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
        <h1
          class="text-center font-header font-semibold text-4xl text-white sm:text-left sm:text-5xl md:text-6xl"
        >
          Hi, I'm <?php echo namaDepan(1);?>  <?php echo namaBelakang(1);?> 
        </h1>
        <div
          class="flex flex-col justify-center pt-3 sm:flex-row sm:pt-5 lg:justify-start"
        >
          <div
            class="flex items-center justify-center pl-0 sm:justify-start md:pl-1"
          >
            <p class="font-body text-lg uppercase text-white">Social Media</p>
            <div class="hidden sm:block">
              <i class="bx bx-chevron-right text-3xl text-yellow"></i>
            </div>
          </div>
          <div
            class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0"
          >
            <a href="https://web.facebook.com/gathandzakwan.aufa">
              <i
                class="bx bxl-facebook-square text-2xl text-white hover:text-yellow"
              ></i>
            </a>
            <a href="https://twitter.com/jakwan_bagungg" class="pl-4">
              <i
                class="bx bxl-twitter text-2xl text-white hover:text-yellow"
              ></i>
            </a>
            <a href="https://www.linkedin.com/in/dzakwanrauhillah/" class="pl-4">
              <i
                class="bx bxl-linkedin text-2xl text-white hover:text-yellow"
              ></i>
            </a>
            <a href="https://www.instagram.com/mudzar_/" class="pl-4">
              <i
                class="bx bxl-instagram text-2xl text-white hover:text-yellow"
              ></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- MAIN -->

<!--FOOTER -->
      <div class="bg-primary">
  <div class="container relative  justify-between py-2 inset-x-0  bottom-0 ">
    <p class="text-center font-body text-white md:text-left">
      © Copyright 2022. All right reserved, ATOM.
    </p>
    <div class="items-center justify-center py-1 sm:justify-start sm:pt-0">
      <a href="/">
        <i
          class="bx bxl-facebook-square text-2xl text-white hover:text-yellow"
        ></i>
      </a>
      <a href="/" class="pl-4">
        <i class="bx bxl-twitter text-2xl text-white hover:text-yellow"></i>
      </a>
      <a href="/" class="pl-4">
        <i class="bx bxl-linkedin text-2xl text-white hover:text-yellow"></i>
      </a>
      <a href="/" class="pl-4">
        <i class="bx bxl-instagram text-2xl text-white hover:text-yellow"></i>
      </a>
    </div>
  </div>
</div>
</div>

    </div>
    <script src="/assets/js/main.js"></script>
  </body>
</html>
