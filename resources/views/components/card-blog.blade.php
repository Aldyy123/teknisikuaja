@props(['image'])

<div class="w-[10rem] flex flex-col bg-slate-600">
    <div class="w-full">
        <img {{ $attributes->merge(['src' => $image])}} class="w-6/11" alt="">
    </div>
    <div>
        {{ $slot}}
    </div>
</div>