<x-app-layout>
    <div class="px-6 py-1 md:px-14 pt-24">
        <div class="container mx-auto mt-10">
            <div class="flex flex-col md:flex-row shadow-md my-10">
              <div class="w-full md:w-3/4 bg-white px-10 py-10">
                <div class="flex justify-between border-b pb-8">
                  <h1 class="font-semibold text-2xl">Shopping Cart</h1>
                  <h2 class="font-semibold text-2xl">3 Items</h2>
                </div>
                <div class="flex mt-10 mb-5">
                  <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
                  <h3 class="font-semibold  text-gray-600 text-xs uppercase w-1/5 text-center">Quantity</h3>
                  <h3 class="font-semibold  text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
                  <h3 class="font-semibold  text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
                </div>
                <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                  <div class="flex w-2/5"> <!-- product -->
                    <div class="w-20">
                      <img class="h-24" src="https://drive.google.com/uc?id=18KkAVkGFvaGNqPy2DIvTqmUH_nk39o3z" alt="">
                    </div>
                    <div class="flex flex-col justify-between ml-4 flex-grow">
                      <span class="font-bold text-sm">Iphone 6S</span>
                      <span class="text-red-500 text-xs">Apple</span>
                      <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remove</a>
                    </div>
                  </div>
                  <div class="flex justify-center w-1/5">
                    <div class="flex items-center gap-1">
                        <button type="button" class="w-10 h-10 leading-10 text-gray-600 transition hover:opacity-75">&minus;</button>
                    
                        <input
                          type="number" id="Quantity" value="1" class="h-10 w-16 rounded border-gray-200 text-center sm:text-sm"/>
                    
                        <button type="button" class="w-10 h-10 leading-10 text-gray-600 transition hover:opacity-75">+</button>
                      </div>
                    </div>
                  <span class="text-center w-1/5 font-semibold text-sm">$400.00</span>
                  <span class="text-center w-1/5 font-semibold text-sm">$400.00</span>
                </div>
              </div>
              
              <div id="summary" class="w-full md:w-1/4 px-8 py-10">
                <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
                <div class="flex justify-between mt-10 mb-5">
                  <span class="font-semibold text-sm uppercase">Items 3</span>
                  <span class="font-semibold text-sm">590$</span>
                </div>
                <div>
                  <label class="font-medium inline-block mb-3 text-sm uppercase">Shipping</label>
                  <select class="block p-2 text-gray-600 w-full text-sm">
                    <option>Standard shipping - $10.00</option>
                  </select>
                </div>
                <div class="py-10">
                  <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Promo Code</label>
                  <input type="text" id="promo" placeholder="Enter your code" class="p-2 text-sm w-full">
                </div>
                <button class="bg-red-500 hover:bg-red-600 px-5 py-2 text-sm text-white uppercase">Apply</button>
                <div class="border-t mt-8">
                  <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                    <span>Total cost</span>
                    <span>$600</span>
                  </div>
                  <button class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Checkout</button>
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
