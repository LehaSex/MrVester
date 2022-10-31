<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#1a1f25]">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-1 py-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-md overflow-hidden sm:rounded-lg">
        
    <div class="flex flex-col h-full w-full items-center justify-center bg-gray-800 back sm:rounded-lg py-3">
      {{ $slot }}
    </div>
    
    </div>
    <div class="absolute inset-x-0 bottom-0">
    <marquee bgcolor="bg-violet-700" behavior="alternate" direction="right" scrollamount="7">
    @for ($i = 0; $i < 20; $i++)
      <i class="alien-monster h-6 w-6"></i>
    @endfor
    </marquee>
    </div>

</div>

