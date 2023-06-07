<x-app-layout>
  <div class="px-6 py-1 md:px-24 pt-20">
     <div class="container mx-auto mt-10">
        <div class="flex flex-col lg:flex-row shadow-xl my-10">
           <div class="w-full bg-white px-10 py-10">
              <div class="flex justify-center border-b pb-8">
                 <span class="text-lg font-poppins font-bold">Riwayat Pelacakan</span>
              </div>
              <x-tracking.berhasil>
                 <x-slot name="no_pelacakan">1274 1212</x-slot>
                 <x-slot name="tanggal">4/3/2023</x-slot>
              </x-tracking.berhasil>
              <x-tracking.proses>
                 <x-slot name="no_pelacakan">1274 1212</x-slot>
                 <x-slot name="tanggal">4/3/2023</x-slot>
              </x-tracking.proses>
              <x-tracking.batal>
                 <x-slot name="no_pelacakan">1274 1212</x-slot>
                 <x-slot name="tanggal">4/3/2023</x-slot>
              </x-tracking.batal>
              <a href="" class="flex justify-center pt-4">
              <span class="text-sm font-poppins font-semi text-gray-400 hover:text-black">Load more</span>
              </a>
           </div>
        </div>
     </div>
  </div>
  </div>
  <x-footer>
     Website By Aseprite
  </x-footer>
</x-app-layout>