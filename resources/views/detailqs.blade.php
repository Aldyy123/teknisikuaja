@extends('layouts.main')

@section('container')
    <div class="mx-auto my-3 w-11/12 block">
        <div class="flex flex-col">
            <div class="py-2">
                <h1 class="text-2xl font-bold">{{ $question->title }}</h1>
                <h4>{{ \Carbon\Carbon::parse($question->created_at)->format('H:m D, d M Y') }}</h4>
            </div>
            <div class="flex gap-2 mt-3 items-center">
                <img class="h-24 w-24 rounded-full" src="{{ $question->biodata->img_url }}"
                    alt="{{ $question->biodata->username }}">
                <div class="mx-5">
                    <p class="text-xl font-mono font-bold">{{ $question->user->name }}</p>
                    <p class="text-sm font-semibold font-mono">{{ $question->username }}</p>
                </div>
            </div>
        </div>
        <hr class="my-3 border-orange-700">
        <div class="my-2">
            <h3 class="font-bold text-lg">Penjelasan : </h3>
            <p class="text-justify text-sm">{{ $question->description }}</p>
        </div>
        <hr class="my-5 border-red-400">
        <div id="disqus_thread"></div>
    </div>
@endsection
