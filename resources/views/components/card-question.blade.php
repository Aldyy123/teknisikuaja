<a href="{{ route('detailqs', $id) }}" class="my-2 block box-border">
    <div class="rounded-md bg-slate-400 box-content p-2 hover:bg-transparent hover:border hover:border-gray-400">
        <div class="flex gap-4 items-center px-3">
            <img class="rounded-full w-16 h-16" src="{{ $profile }}" alt="{{$username}}">
            <div class="flex flex-col">
                <h3 class="font-sans font-bold text-xl">{{ $username }}</h3>
                <p class="font-thin text-sm">2 jam kemudian</p>
            </div>
        </div>
        <div class="text-justify p-3 text-lg">
            <p>{{ $title }}</p>
        </div>
        <div class="px-3 text-sm">
            <p class="font-bold opacity-[0.5]">{{ $count }} Pembahasan</p>
        </div>
        <div class="flex gap-1 px-3 py-1 flex-wrap">
            <p class="ring-1 bg-red-300 p-1 rounded-lg text-xs">#Komputer</p>
            <p class="ring-1 bg-red-300 p-1 rounded-lg text-xs">#tv</p>
        </div>
    </div>
</a>