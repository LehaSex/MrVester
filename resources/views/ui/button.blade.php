<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#e6b333] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#e8ba47] active:bg-[#b88f28] focus:outline-none focus:border-[#b88f28] focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
