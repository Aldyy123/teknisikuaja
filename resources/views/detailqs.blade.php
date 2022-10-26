@extends('layouts.main')

@section('container')
    <div class="mx-auto my-3 w-11/12 block">
        <div class="flex flex-col">
            <div class="py-2">
                <h1 class="text-2xl font-bold">{{ $question->title }}</h1>
                <h4>{{ \Carbon\Carbon::parse($question->created_at)->format('H:m D, d M Y') }}</h4>
            </div>
            <p>
                Author : {{ $question->user->name }}
            </p>
        </div>
        <hr class="my-3 border-orange-700">
        <div class="my-2">
            <h3 class="font-bold text-lg">Detail Pertanyaan : </h3>
            <p class="text-justify bg-gray-200 p-3 rounded text-md font-nunito font-normal mt-1 mb-2">
                {{ $question->description }}
            </p>
        </div>
        <div id="disqus_thread"></div>
    </div>
@endsection
