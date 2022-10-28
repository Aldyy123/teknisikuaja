<a href="{{ route('detailqs', $id) }}" class="block box-border m-3">
    <div
        class="rounded-md border-gray-200 shadow bg-white-500 box-content p-2 hover:bg-transparent text-gray-800 hover:text-black transition-all hover:border hover:border-gray-400">
        <div class="flex gap-4 items-center px-3 border-gray-400">
            <img class="rounded-full w-16 h-16" src="{{ $profile }}"
                alt="{{ $username }}">
            <div class="flex flex-col">
                <h3 class="font-nunito font-bold text-xl">{{ $username }}</h3>
                <p class="font-sans text-sm">2 jam kemudian</p>
            </div>
        </div>
        <div class="text-justify p-3 text-lg">
            <p class="font-nunito font-normal">{{ $title }}</p>
        </div>
        <div class="px-3 text-sm">
        </div>
        {{-- <div class="flex gap-1 px-3 py-1 text-black flex-wrap">
            <p class="ring-0 bg-red-200 p-2 rounded-sm text-xs">Televisi</p>
        </div> --}}
    </div>
</a>
