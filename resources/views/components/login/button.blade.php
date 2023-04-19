<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full px-4 py-2.5 bg-birubut hover:bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-birubut focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
