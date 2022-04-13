@if(session('success'))
<div x-data="{ open:true }" x-show="open" x-init="setTimeout(()=>open=false,3000)">
    <div class="fixed top-0 right-0 z-20 flex justify-between w-full max-w-sm px-6 py-5 mx-6 my-8 bg-white border shadow-lg rounded-xl">
        <div class="flex items-center ">
            <svg class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="ml-2 font-semibold text-gray-500 text-md">
                {{session('success')}}
            </span>
        </div>
        <button @click=" open=false " class="text-gray-400 hover:text-gray-500">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>

@elseif(session('error'))
<div x-data="{ open:true }" x-show="open" x-init="setTimeout(()=>open=false,3000)">
    <div class="fixed top-0 right-0 z-20 flex justify-between w-full max-w-sm px-6 py-5 mx-6 my-8 bg-white border shadow-lg rounded-xl">
        <div class="flex items-center ">
            <svg class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="ml-2 font-semibold text-gray-500 text-md">
                {{session('error')}}
            </span>
        </div>
        <button @click=" open=false " class="text-gray-400 hover:text-gray-500">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
@endif
