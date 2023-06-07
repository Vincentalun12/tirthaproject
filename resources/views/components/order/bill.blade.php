<div class="w-full lg:w-1/4 px-8 py-10 bg-neutral-100 rounded-bl-xl sm:rounded-bl-none  sm:rounded-tr-xl sm:rounded-br-xl"">
    <h1 class="font-semibold text-2xl border-b pb-8">Rincian pemesanan</h1>
    <div class="flex justify-between mt-8 mb-3">
       <span class="font-semibold text-sm uppercase">Sub total</span>
       <span class="font-semibold text-sm">{{$subtotal}}</span>
    </div>
    <div class="flex justify-between mt-8 mb-3">
       <span class="font-semibold text-sm uppercase">PPN 10%</span>
       <span class="font-semibold text-sm">{{$pajak}}</span>
    </div>
    <div class="flex justify-between mt-8 mb-3">
       <span class="font-semibold text-sm uppercase">Diskon</span>
       <span class="font-semibold text-sm">{{$diskon}}</span>
    </div>
    <div class="border-t mt-8">
       <div class="flex font-semibold justify-between py-6 text-sm uppercase">
          <span>Total</span>
          <span>{{$alltotal}}</span>
       </div>
       <button class="bg-birubut font-semibold hover:bg-black py-3 rounded-xl text-sm text-white uppercase w-full">                 
       Selanjutnya 
       </button>
    </div>