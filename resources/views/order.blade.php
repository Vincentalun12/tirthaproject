<x-app-layout>
   <div class="px-6 py-1 md:px-24 pt-20">
      <div class="container mx-auto mt-10">
         <div class="flex flex-col lg:flex-row shadow-xl my-10 rounded-xl">
            <div class="w-full lg:w-3/4 bg-white px-10 py-10 rounded-tr-xl   rounded-bl-none sm:rounded-tl-xl sm:rounded-bl-xl">
               <div class="flex justify-between border-b pb-8">
                  <x-order.steps></x-order.steps>
               </div>
               <x-order.list></x-order.list>
               <x-order.items>
                  <x-slot name="image1">{{asset('image/celana.png')}}</x-slot>
                  <x-slot name="namabarang">Celana Polos</x-slot>
                  <x-slot name="harga">Rp 2.000</x-slot>
                  <x-slot name="total">Rp 2.000</x-slot>
               </x-order.items>
               <x-order.items>
                  <x-slot name="image1">{{asset('image/kaos.png')}}</x-slot>
                  <x-slot name="namabarang">Baju Polos</x-slot>
                  <x-slot name="harga">Rp 2.000</x-slot>
                  <x-slot name="total">Rp 2.000</x-slot>
               </x-order.items>
               
               <div class="flex justify-start items-center sm:px-10 py-3 pl-4">
                  <div class="flex w-full">
                     <div class="w-20">
                        <button class="border-2 text-center p-2 px-4 sm:p-4 sm:px-7 sm:mt-4 rounded-2xl font-black text-xl sm:text-3xl text-gray-500 hover:text-black">&plus;</button>  
                     </div>
                     <span class="sm:px-7 sm:p-1 sm:mt-8 mt-4 font-black font-poppins text-sm sm:text-2xl">Tambahkan barang</span>
                  </div>
               </div>
            </div>
            <x-order.bill>
               <x-slot name="subtotal">Rp 4.000</x-slot>
               <x-slot name="pajak">Rp 4.00</x-slot>
               <x-slot name="diskon">Rp 0</x-slot>
               <x-slot name="alltotal">Rp 4.400</x-slot>
            </x-order.bill>
            </div>
         </div>
      </div>
   </div>
   </div>
   <x-footer>
      Website By Aseprite
   </x-footer>
</x-app-layout>