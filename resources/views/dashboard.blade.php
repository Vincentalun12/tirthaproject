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
        <div class="grid grid-rows-1 grid-flow-col gap-1 max-w-7xl mx-auto p-1">
            <div class="col-span-1 row-span-1 border rounded-full bg-slate-300 p-3">
                <button class="bg-birubut text-white font-bold py-2 px-7 rounded-full">
                    Info
                  </button>
            </div>
        </div>
        <div class="grid grid-rows-3 md:grid-rows-4 grid-flow-col gap-2 max-w-7xl mx-auto p-1">
            <div class="md:col-span-2 md:row-span-4 border-4 rounded-3xl bg-slate-100 border-birubut p-7 flex flex-col justify-center items-center">
                <h1 class="text-5xl font-poppins text-center font-black">Butuh Bantuan</h1>
                <p class="text-center px-10 py-4">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
                    <button class="bg-birubut text-white font-bold py-2 px-24 rounded-full">
                        Chat
                      </button>
            </div>
            <div class="md:col-span-2 md:row-span-2 border-4 rounded-3xl bg-slate-100 border-birubut p-7 bg-[url('/public/image/cart1.png')]">
                <h1 class="text-5xl font-poppins text-left font-black">Order</h1>
                <p class="text-left ">Lakukan pemesanan sekarang juga.</p>
                    <button class="bg-birubut text-white font-bold py-2 px-12 mt-3 rounded-full">
                        Order
                      </button>
            </div>
            <div class="md:col-span-2 md:row-span-2 col-span-1 border-4 rounded-3xl bg-slate-100 border-birubut p-7">
                <h1 class="text-5xl font-poppins text-left font-black">Tracking</h1>
                <p class="text-left ">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
                    <button class="bg-birubut text-white font-bold py-2 px-10 mt-3 rounded-full">
                        Tracking
                      </button>
            </div>
        </div>
    </div>
    <footer class="p-5 bg-birutext shadow py-4 md:px-16 md:py-5">
        <div class="text-center">
          <p class="inline-block text-white font-poppins md:text-[16px] text-[10px]">© 2023<span class="block relative bottom-0">Website By Aseprite</span></p>
        </div>
      </footer>
</x-app-layout>
