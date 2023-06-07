<div class="flex justify-around items-center hover:bg-gray-100 px-0 sm:px-10 py-3 border-b">
    <div class="flex w-full sm:w-2/5">
       <div class="w-20">
          <img class="h-24" src="{{$image1}}" alt="">
       </div>
       <div class="flex flex-col justify-around ml-4 flex-grow">
          <span class="font-bold text-sm">{{$namabarang}}</span>
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
    <span class="hidden sm:inline text-center w-1/5 font-semibold text-sm">{{$harga}}</span>
    <span class="text-center w-1/5 font-semibold text-sm">{{$total}}
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