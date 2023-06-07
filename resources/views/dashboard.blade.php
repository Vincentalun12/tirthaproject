<x-app-layout>
  <div class="px-6 py-1 md:px-14 pt-24">
     <div class="container mx-auto max-w-7xl">
        <div class="grid grid-cols-1">
           <x-info>
            info
            </x-info>
        </div>
     </div>
  </div>
  <div class="px-6 py-8 md:px-14">
     <div class="container mx-auto max-w-7xl">
        <div class="grid lg:grid-cols-2 gap-12">
           <div>
              <div class="">
                 <x-slider>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                       <img src="{{asset('image/banner1.png')}}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                       <img src="{{asset('image/banner2.png')}}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                       <img src="{{asset('image/banner3.png')}}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    </div>
              </div>
              <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
              <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
              <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
              <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
              </div>
              </x-slider>          
           </div>

           <div>
              <div class="border-4 rounded-3xl bg-slate-100 border-birubut p-7 lg:bg-[url('/public/image/cart1.png')]">
                 <h1 class="text-5xl font-poppins text-left font-black">Order</h1>
                 <p class="text-left font-poppins pt-3 sm:pr-32">Order jasa laundry dari kami untuk memudahkan pekerjaan anda</p>
                 <a href="{{ route('order') }}">
                 <button class="text-white bg-birubut hover:bg-black focus:ring-4  focus:ring-slate-100 font-bold py-2 px-12 mt-3 rounded-full">
                 Order
                 </button>
                 </a>
              </div>
              <div class="border-4 rounded-3xl bg-slate-100 border-birubut p-7 my-8 md:my-10 lg:bg-[url('/public/image/delivery1.png')]">
                 <h1 class="text-5xl font-poppins text-left font-black">Tracking</h1>
                 <p class="text-left font-poppins pt-3 sm:pr-48">Lacak pesanan anda disini dengan mudah dan nyaman.
                 </p>
                 <a href="{{ route('tracking') }}">
                 <button class="text-white bg-birubut hover:bg-black focus:ring-4  focus:ring-slate-100 font-bold py-2 px-12 mt-3 rounded-full">
                 Tracking
                 </button>
                 </a>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
  <x-footer>
    Website By Aseprite
  </x-footer>
</x-app-layout>