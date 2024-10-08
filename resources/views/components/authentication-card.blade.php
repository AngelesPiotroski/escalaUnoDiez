<div class="flex flex-col items-center min-h-screen pt-6 sm:justify-center sm:pt-0 ">
    <div class="rounded-lg ">
        {{ $logo }}
    </div>

    <div class="w-full px-6 py-4 overflow-hidden shadow-md sm:max-w-md sm:rounded-lg card-not-shadow">
        {{ $slot }}
    </div>
</div>
