<x-app-layout>
    <!--<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>-->
    <div class="py-10 pt-24">
        <div class="grid grid-rows-1 gap-1 max-w-7xl mx-auto p-1">
          <div class="col-span-1 row-span-1 border rounded-full bg-slate-300 p-3">
            <button class="text-white bg-birubut hover:bg-black focus:ring-4  focus:ring-slate-100 font-bold py-2 px-7 rounded-full">
            Info
            </button>
          </div>
        </div>
        <div class="px-6 py-8 md:px-14">
          <div class="container mx-auto max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-12">
              <div>
                <div class="">
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <div class="relative overflow-hidden rounded-lg h-[300px] md:h-[485px]">
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{asset('image/hanyacoba.png')}}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{asset('image/hanyacoba.png')}}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{asset('image/hanyacoba.png')}}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            </div>
                        </div>
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full bg-black hover:bg-birubut" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full bg-black hover:bg-birubut" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full bg-black hover:bg-birubut" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        </div>
                    </div> 
                </div>
              </div>
              <div>
                <div class="border-4 rounded-3xl bg-slate-100 border-birubut p-7 lg:bg-[url('/public/image/cart1.png')]">
                  <h1 class="text-5xl font-poppins text-left font-black">Order</h1>
                  <p class="text-left font-poppins pt-3 sm:pr-32">Order jasa laundry dari kami untuk memudahkan pekerjaan anda</p>
                  <button class="text-white bg-birubut hover:bg-black focus:ring-4  focus:ring-slate-100 font-bold py-2 px-12 mt-3 rounded-full">
                  Order
                  </button>
                </div>
                <div class="border-4 rounded-3xl bg-slate-100 border-birubut p-7 my-8 md:my-10 lg:bg-[url('/public/image/delivery1.png')]">
                  <h1 class="text-5xl font-poppins text-left font-black">Tracking</h1>
                  <p class="text-left font-poppins pt-3 sm:pr-48">Lacak pesanan anda disini dengan mudah dan nyaman.
                  </p>
                  <button class="text-white bg-birubut hover:bg-black focus:ring-4  focus:ring-slate-100 font-bold py-2 px-10 mt-3 rounded-full">
                  Tracking
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
        <footer class="p-5 bg-birutext shadow py-4 md:px-16 md:py-5">
            <div class="text-center">
              <p class="inline-block text-white font-poppins md:text-[16px] text-[10px]">© 2023<span class="block relative bottom-0">Website By Aseprite</span></p>
            </div>
          </footer>
</x-app-layout>
