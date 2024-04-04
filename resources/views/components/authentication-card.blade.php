<div class="min-h-screen flex flex-col items-center m-10 rounded-3xl bg-gray-100" >
    <div class="w-full sm:max-w-md mt-6 px-6 py-4">
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
