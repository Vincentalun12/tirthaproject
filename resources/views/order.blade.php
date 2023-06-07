<x-app-layout>
  <div class="px-6 py-1 md:px-24 pt-20">
     <div class="container mx-auto mt-10">
        <div class="flex flex-col lg:flex-row shadow-xl my-10 rounded-xl">
           <div class="w-full lg:w-3/4 bg-white px-10 py-10 rounded-tr-xl   rounded-bl-none sm:rounded-tl-xl sm:rounded-bl-xl">
              <div class="flex justify-between border-b pb-8">
                 <ol class="items-center w-full space-y-4 sm:flex sm:space-x-4 lg:space-x-8 sm:space-y-0">
                    <li class="flex items-center text-birubut space-x-2.5">
                       <span class="flex items-center justify-center w-8 h-8 border border-birubut rounded-full shrink-0">1</span>
                       <span>
                          <h3 class="font-sm leading-tight">Informasi Order</h3>
                       </span>
                    </li>
                    <li class="flex items-center text-gray-500 space-x-2.5">
                       <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0">2</span>
                       <span>
                          <h3 class="font-sm leading-tight">Informasi Pengiriman</h3>
                       </span>
                    </li>
                    <li class="flex items-center text-gray-500 space-x-2.5">
                       <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0">3</span>
                       <span>
                          <h3 class="font-sm leading-tight">Pembayaran</h3>
                       </span>
                    </li>
                    <li class="flex items-center text-gray-500 space-x-2.5">
                       <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0">4</span>
                       <span>
                          <h3 class="font-sm leading-tight">Rincian</h3>
                       </span>
                    </li>
                 </ol>
              </div>
              <div class="hidden sm:flex mt-10 mb-5 mx-8">
                 <h3 class="invisible sm:visible font-semibold text-gray-600 text-xs uppercase w-2/5 font-nunito">Nama cucian</h3>
                 <h3 class="sm:visible font-semibold  text-gray-600 text-xs uppercase w-1/5 text-center font-nunito">jumlah</h3>
                 <h3 class="sm:visible font-semibold  text-gray-600 text-xs uppercase w-1/5 text-center font-nunito">harga</h3>
                 <h3 class="sm:visible font-semibold  text-gray-600 text-xs uppercase w-1/5 text-center font-nunito">total</h3>
              </div>
              <div class="flex justify-around items-center hover:bg-gray-100 px-0 sm:px-10 py-3 border-b">
                 <div class="flex w-full sm:w-2/5">
                    <div class="w-20">
                       <img class="h-24" src="{{asset('image/celana.png')}}" alt="">
                    </div>
                    <div class="flex flex-col justify-around ml-4 flex-grow">
                       <span class="font-bold text-sm">Celana polos</span>
                       <button class="font-semibold border-2 rounded-lg w-10 hover:text-black text-gray-500 text-xs px-1.5 py-1.5">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                          </svg>
                       </button>
                    </div>
                 </div>
                 <div class="hidden sm:flex justify-center w-1/5">
                    <div class="flex items-center gap-1">
                       <input type="number" id="Quantity" value="1" class="h-10 w-16 rounded border-gray-200 text-center sm:text-sm focus:border-birubut"/>
                    </div>
                 </div>
                 <span class="hidden sm:inline text-center w-1/5 font-semibold text-sm">Rp 2.000</span>
                 <span class="text-center w-1/5 font-semibold text-sm">Rp 2.000
                 <span>
                    <div class="sm:hidden flex justify-araound w-1/5 mt-4">
                       <div class="flex items-center gap-1">
                          <span>
                          <input type="number" id="Quantity" value="1" class="h-10 w-14 rounded border-gray-200 text-center sm:text-sm focus:border-birubut"/>
                       </div>
                    </div>
                    </span>
                 </span>
              </div>
              <div class="flex justify-around items-center hover:bg-gray-100 px-0 sm:px-10 py-3 border-b">
                 <div class="flex w-full sm:w-2/5">
                    <div class="w-20">
                       <img class="h-24" src="{{asset('image/kaos.png')}}" alt="">
                    </div>
                    <div class="flex flex-col justify-around ml-4 flex-grow">
                       <span class="font-bold text-sm">Kaos polos</span>
                       <button class="font-semibold border-2 rounded-lg w-10 hover:text-black text-gray-500 text-xs px-1.5 py-1.5">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                          </svg>
                       </button>
                    </div>
                 </div>
                 <div class="hidden sm:flex justify-center w-1/5">
                    <div class="flex items-center gap-1">
                       <input type="number" id="Quantity" value="1" class="h-10 w-16 rounded border-gray-200 text-center sm:text-sm focus:border-birubut"/>
                    </div>
                 </div>
                 <span class="hidden sm:inline text-center w-1/5 font-semibold text-sm">Rp 2.000</span>
                 <span class="text-center w-1/5 font-semibold text-sm">
                    Rp 2.000
                    <span>
                       <div class="sm:hidden flex justify-araound w-1/5 mt-4">
                          <div class="flex items-center gap-1">
                             <input type="number" id="Quantity" value="1" class="h-10 w-14 rounded border-gray-200 text-center sm:text-sm focus:border-birubut"/>
                          </div>
                       </div>
                    </span>
                 </span>
              </div>
              <div class="flex justify-start items-center sm:px-10 py-3 pl-4">
                 <div class="flex w-full">
                    <div class="w-20">
                       <button class="border-2 text-center p-2 px-4 sm:p-4 sm:px-7 sm:mt-4 rounded-2xl font-black text-xl sm:text-3xl text-gray-500 hover:text-black">&plus;</button>  
                    </div>
                    <span class="sm:px-7 sm:p-1 sm:mt-8 mt-4 font-black font-poppins text-sm sm:text-2xl">Tambahkan barang</span>
                 </div>
              </div>
           </div>
           <div class="w-full lg:w-1/4 px-8 py-10 bg-neutral-100 rounded-bl-xl sm:rounded-bl-none  sm:rounded-tr-xl sm:rounded-br-xl"">
              <h1 class="font-semibold text-2xl border-b pb-8">Rincian pemesanan</h1>
              <div class="flex justify-between mt-8 mb-3">
                 <span class="font-semibold text-sm uppercase">Sub total</span>
                 <span class="font-semibold text-sm">Rp 4.000</span>
              </div>
              <div class="flex justify-between mt-8 mb-3">
                 <span class="font-semibold text-sm uppercase">PPN 10%</span>
                 <span class="font-semibold text-sm">Rp 400</span>
              </div>
              <div class="flex justify-between mt-8 mb-3">
                 <span class="font-semibold text-sm uppercase">Diskon</span>
                 <span class="font-semibold text-sm">Rp 0</span>
              </div>
              <div class="border-t mt-8">
                 <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                    <span>Total</span>
                    <span>Rp 4.400</span>
                 </div>
                 <button class="bg-birubut font-semibold hover:bg-black py-3 rounded-xl text-sm text-white uppercase w-full">                 
                 Selanjutnya 
                 </button>
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
