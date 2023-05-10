<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')
  </head>
  <body class="bg-gradient-to-r from-white via-slate-100 to-white">
    <!--Navigation bar-->
    <header name="#navbarr" id="#navbarr" class="bg-white md:bg-transparent fixed w-full h-16 shadow-md md:shadow-none transition duration-300 z-50 md:h-20">
      <nav class="fixed w-full z-50 md:px-16 py-4 mx-0 md:mx-auto">
        <div class="flex flex-wrap md:container items-center justify-between md:mx-auto">
          <a href="#" class="flex items-center">
          <img src="{{asset('image/logos.png')}}" class="z-10 h-7 ml-auto md:ml-auto sm:h-9 xl:mx-10 px-10 md:px-0"/>
          </a>
          <div class="flex md:order-2">
            <button id="hamburger" data-collapse-toggle="navbar-sticky" type="button" class="z-10 inline-flex items-center p-2 mx-10 md:mx-0 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-black" aria-controls="navbar-sticky" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer md:hidden block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
          <div id="navlinks" class="bg-white md:bg-transparent items-center justify-between hidden w-full md:flex md:w-auto md:order-2 xl:mx-5">
            <ul class="flex flex-col p-3 mt-4 mr-6  md:flex-row md:space-x-8 md:mt-0 md:text-base md:font-medium md:border-0 bg-white md:bg-transparent">
              <li>
                <a id="Home" href="#" class="block py-2 pl-3 pr-4 text-birubut md:bg-transparent md:p-0 font-quicksand font-bold" aria-current="page">Home</a>
              </li>
              <li>
                <a id="Harga" href="#harga" class="block py-2 pl-3 pr-4 text-black hover:bg-gray-100 md:hover:bg-transparent md:hover:text-birubut md:p-0 font-quicksand font-bold">Harga</a>
              </li>
              <li>
                <a id="Fitur" href="#fitur" class="block py-2 pl-3 pr-4 text-black hover:bg-gray-100 md:hover:bg-transparent md:hover:text-birubut md:p-0 font-quicksand font-bold">Fitur</a>
              </li>
            </ul>
            <a href="{{ route('login') }}">
            <button id="Order" type="button" class="w-11/12 text-white bg-birubut hover:bg-black focus:ring-4  focus:ring-white font-medium rounded-2xl md:rounded-full text-sm px-2 py-2.5 text-center mr-5 md:mr-20 my-2 md:my-0 mx-5 md:mx-0">Order</button>
            </a>
          </div>
        </div>
      </nav>
    </header>
    <!--Halaman 1-->
    <div class="px-6 py-24 md:py-36 md:px-14 text-center lg:text-left bg-gradient-to-r from-slate-100 via-birumud to-birumud">
      <div class="container mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <div data-aos="fade-right" data-aos-delay="250">
            <div class="mt-12 lg:mb-16 mx-0 xl:mx-10">
              <h1 class="text-5xl md:text-6xl xl:text-7xl tracking-tight mb-6 font-poppins font-semibold">
                Mencuci<br/>
                <span class="text-birutext">Tanpa Bekerja<span class="text-black">.</span></span>
              </h1>
              <!--Versi Desktop-->
              <p class="text-lg md:text-xl text-black hidden sm:inline font-nunito font-light">
                Mencuci pakaian tidak pernah semudah ini. Kini,<br/> 
                Laundry Aseprite menghadirkan pengalaman<br/>
                mencuci dengan harga yang sangat ramah.<br/>
              </p>
              <!--Versi mobile-->
              <p class="text-lg md:text-xl text-black inline sm:hidden font-nunito font-light">
                Mencuci pakaian tidak pernah semudah ini. Kini, 
                Laundry Aseprite menghadirkan pengalaman
                mencuci dengan harga yang sangat ramah.  
              </p>
              <p class="text-xl md:text-lg text-black pt-2 font-poppins font-semibold">
                Mulai 6000 / Kg
              </p>
              <button class="bg-transparent hover:bg-white text-birutext rounded-full border-2 border-birubut py-2 px-16 mt-5 font-quicksand font-bold">Banding Harga</button>
            </div>
          </div>
          <div data-aos="zoom-in" data-aos-delay="250">
            <div class="max-w-2xl mx-auto overflow-hidden md:max-w-2xl md:mt-10">
              <img src="{{asset('image/mesincuci.png')}}" class="h-full w-full object-cover md:h-full md:w-full drop-shadow-md md:drop-shadow-xl mx-auto md:mx-auto" draggable="false" alt="Mesin cuci">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Halaman 2-->
    <div class="px-6 py-12 md:px-14 lg:text-left" id="harga">
      <div class="container mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <div data-aos="fade-up" data-aos-delay="200">
            <div class="mt-12 lg:mb-0 mx-0 xl:mx-10 xl:mt-10 xl:mb-10 border-2 border-birubut rounded-3xl py-5 px-14 md:py-0 md:px-16 md:pt-10 md:pb-0">
              <p class="font-bold font-quicksand text-2xl">Berat Pakaian<span class="text-lg"> (Kg)</span></p>
              <input id="range1" type="range" class="slider w-full h-1 mb-6 bg-birutext rounded-lg appearance-none cursor-pointer md:bg-birutext" min="1" max="40" step="1" value="10" oninput="out(this.value)">
              <p class="text-right relative bottom-4 font-nunito font-light text-lg">40</span>
              <p class="relative bottom-11 font-nunito font-light text-lg">1</p>
              <p class="font-bold font-quicksand text-2xl">Estimasi selesai<span class="text-lg"> (Hari)</span></p>
              <input id="range2" type="range" class="slider w-full h-1 mb-6 bg-birutext rounded-lg appearance-none cursor-pointer md:bg-birutext" min="1" max="4" step="1" value="3"  oninput="out2(this.value)">
              <p class="text-right relative bottom-4 font-nunito font-light text-lg">4</span>
              <p class="relative bottom-11 font-nunito font-light text-lg">1</p>
              <output class="font-quicksand font-bold text-4xl text-birutext" for="range1" id="volume">10</output>
              <br>
              <output class="font-quicksand font-bold text-4xl text-birutext" for="range2" id="volume2">3</output>
              <p class="relative bottom-[77px] text-3xl left-12 font-quicksand font-bold">Kilogram</p>
              <p class="relative bottom-[72px] text-3xl left-12 font-quicksand font-bold">Hari</p>
              <p class="text-left md:text-right relative bottom-[70px] md:bottom-[120px] text-[38px] font-poppins text-birutext" id="Total">Rp 80.000</p>
              <p class="relative bottom-16 font-quicksand font-light">*) Tidak termasuk non-pakaian & tambahan lainnya.</p>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-delay="200">
            <div class="mt-0 lg:mb-0 mx-0 xl:mx-20 text-center lg:text-left">
              <h1 class="text-5xl md:text-6xl xl:text-7xl tracking-tight mb-6 font-poppins font-normal text-birutext">Lebih Irit</h1>
              <p class="text-sm md:text-lg text-black sm:inline font-nunito font-light">
                Dibandingkan dengan laundry lain, Laundry Tirtha mempertimbangkan beberapa faktor seperti jangkauan, kecepatan pelayanan, kualitas, dan juga harga yang sesuai dengan anggaran. Namun, harga yang lebih tinggi tidak selalu menjamin kualitas pelayanan yang lebih baik, dan disini kami memberikan pelayanan prima dengan harga yang sangat transparan dan ramah di kantong anda. Namun, Harga laundry satuan bisa bervariasi tergantung pada jenis pakaian.
              </p>
              <br>
              <a href="{{ route('login') }}">
              <button class="bg-birubut hover:bg-black text-white rounded-full py-2 px-7 mt-5 font-quicksand font-bold text-xl">Order Sekarang</button> 
              </a>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-delay="200">
            <div class="mt-0 lg:mb-0 mx-0 xl:mx-20 text-center lg:text-right xl:order-1 order-2">
              <h1 class="text-5xl md:text-6xl xl:text-7xl tracking-tight mb-6 font-poppins font-normal text-birutext">Membership</h1>
              <p class="text-sm md:text-lg text-black sm:inline font-nunito font-light">
                Mulai dengan harga yang terjangkau, anda dapat merasakan benefit yang berbeda dari customer biasanya. Ini juga termasuk request panggilan pick-up tanpa batas, potongan harga, dan juga voucher yang kamu dapat bagikan kepada kerabat anda. Selain itu, anda juga mendapatkan orderan prioritas dan juga dukungan pelanggan yang lebih diproritaskan.
                Syarat dan ketentuan berlaku.
              </p>
              <br>
              <a href="{{ route('login') }}">
              <button class="bg-birubut hover:bg-black text-white rounded-full py-2 px-16 mt-5 font-quicksand font-bold text-xl">Gabung</button> 
              </a>
            </div>
          </div>
          <div class="max-w-2xl mx-auto overflow-hidden md:max-w-2xl md:mt-10 xl:order-2 order-1">
            <div data-aos="fade-up" data-aos-delay="200">
              <img src="{{asset('image/omganteng.png')}}" class="h-full w-full object-cover md:h-full md:w-full drop-shadow-md md:drop-shadow-xl mx-auto md:mx-auto" draggable="false" alt="Mesin cuci">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Halaman 3-->
    <div class="px-6 py-12 md:px-14 lg:text-left"  id="fitur">
      <div class="container mx-auto">
        <div class="grid lg:grid-cols-3 lg:grid-rows-1 gap-12 items-center">
          <div class="lg:col-span-3" data-aos="zoom-in">
            <h1 class="text-center font-poppins text-birutext text-5xl md:text-6xl">Keunggulan</h1>
            <br>
            <p class="text-center mx-0 md:mx-12">Kami dapat membuktikan bahwa laundry kami unggul dari laundry yang lain. Memberikan anda pengalaman imersif dengan kualitas laundry yang anda belum pernah rasakan sebelumnya!</p>
          </div>
          <div class="mt-12 lg:mb-0 mx-12 md:mx-1 xl:mx-12 md:mt-10 xl:mb-10 border-2 border-birutext rounded-3xl py-5 px-7 md:py-0 md:px-8 md:pt-10 pb-16 md:pb-20 xl:pb-32" data-aos="fade-up" data-aos-delay="200">
            <img src="{{asset('image/mobil.png')}}" class="mx-auto mb-3" draggable="false">
            <p class="font-bold font-quicksand text-2xl text-center text-birutext">Pengiriman Cepat</p>
            <br>
            <p class="text-center mx-2">Pengiriman yang cepat dan tidak akan melorot sesuai hari dan waktu yang telah ditetapkan. Tidak akan lebih 24 jam.</p>
          </div>
          <div class="mt-12 lg:mb-0 mx-12 md:mx-1 xl:mx-12 md:mt-10 xl:mb-10 border-2 border-birutext rounded-3xl py-5 px-7 md:py-0 md:px-8 md:pt-10 pb-16 md:pb-20 xl:pb-32" data-aos="fade-up" data-aos-delay="400">
            <img src="{{asset('image/mesinvek.png')}}" class="mx-auto mb-3" draggable="false">
            <p class="font-bold font-quicksand text-2xl text-center text-birutext">Pengerjaan Instan</p>
            <br>
            <p class="text-center mx-2">Pesanan anda masuk, langsung kami kerjakan.* Kami tidak akan menunda pesanan anda hingga lewat dari 24 jam.</p>
          </div>
          <div class="mt-12 lg:mb-0 mx-12 md:mx-1 xl:mx-12 md:mt-10 xl:mb-10 border-2 border-birutext rounded-3xl py-5 px-7 md:py-0 md:px-8 md:pt-10 pb-16 md:pb-20 xl:pb-32" data-aos="fade-up" data-aos-delay="600">
            <img src="{{asset('image/uang.png')}}" class="mx-auto mb-3" draggable="false">
            <p class="font-bold font-quicksand text-2xl text-center text-birutext">Harga Kompetitif</p>
            <br>
            <p class="text-center mx-2">Harga yang sangat terjangkau dan bersahabat dibandingkan dengan laundry tempat lain dengan teknologi kekinian dan modern.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!--Footer-->
    <footer class="p-5 bg-birutext shadow py-4 md:px-16 md:py-5">
      <div class="flex flex-wrap container items-center justify-between mx-auto">
      <a href="#" class="flex items-center">
      <img src="{{asset('image/logos2.png')}}" class="h-7 sm:h-9 relative bottom-1 mx-0 md:mx-10"/>  
      </a>
      <div class="relative md:right-9 text-right">
        <p class="inline-block text-white font-poppins md:text-[16px] text-[10px]">© 2023<span class="block relative bottom-0">Website By Aseprite</span></p>
        <a href="#"><img src="{{asset('image/facebook.png')}}"class="h-7 sm:h-9 inline relative left-1 bottom-2.5 md:bottom-3"/></a>
        <a href="#"><img src="{{asset('image/instagram.png')}}" class="h-7 sm:h-9 inline relative left-2 bottom-2.5 md:bottom-3"/></a> 
      </div>
    </footer>
    <script type="text/javascript" src="{{asset('js/index.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true,
      });
    </script>
  </body>
</html>