<button {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center block py-2 bg-red-700 
border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-red-500
focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-grey-500 focus:ring-offset-2 
 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
