@extends('layouts.main')

{{-- Questions Page --}}
@section('container')
    <div class="mx-auto my-3 w-11/12 flex md:justify-evenly flex-col-reverse md:flex-row">
        <div class="md:w-7/12 w-full mx-1">
            @forelse ($questions as $question)
                <x-card-question :count='2' :id="$question->id" :title="$question['title']" :profile="$question->biodata->img_url"
                    :username="$question->username" />
            @empty
                <h2>Tidak ada Data</h2>
            @endforelse
        </div>
        <div class="md:w-4/12 w-full mx-1">
            <div class="rounded-md p-3">
                <div>
                    <h2 class="font-mono font-bold text-gray-400">Cari kendala...</h2>
                    <input type="text" class="rounded-md" placeholder="Search...">
                </div>
            </div>
            <div class="flex justify-evenly">
                <a href=""
                    class="mr-2 w-5/12 text-center hover:bg-red-800 rounded-md py-1 px-3 bg-red-600 text-white">Tanya</a>
                <a href=""
                    class="mr-2 w-5/12 rounded-md text-center py-1 text-white bg-red-600 hover:bg-red-800">Cari Teknisi</a>
            </div>
        </div>
    </div>
    <div class="mx-auto my-3 w-11/12 flex md:justify-evenly md:items-center justify-center">
        {{-- <div class="flex gap-2">
                <a href="">First</a>
                <a href="">Previous</a>
            </div>
            <div class="list-none flex gap-1">
                <li><a href="" class="hover:border hover:border-red-400 rounded-xl h-8 w-8 text-center align-middle inline-block">1</a></li>
                <li><a href="" class="border border-red-400 rounded-xl h-8 w-8 text-center align-middle inline-block">2</a></li>
                <li class="rounded-xl h-8 w-8 text-center align-middle inline-block">...</li>
                <li><a href="" class="rounded-xl h-8 w-8 text-center align-middle inline-block">4</a></li>
                <li class="rounded-xl h-8 w-8 text-center align-middle inline-block">...</li>
                <li><a class="rounded-xl h-8 w-8 text-center align-middle inline-block" href="">6</a></li>
                <li><a class="rounded-xl h-8 w-8 text-center align-middle inline-block" href="">7</a></li>
            </div>
            <div class="flex gap-2">
                <a href="">Next</a>
                <a href="">Last</a>
            </div> --}}
        {{ $questions->links() }}
    </div>
@endsection
{{-- End Questions Page --}}
