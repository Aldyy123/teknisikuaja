@extends('layouts.main')

{{-- Questions Page --}}
@section('container')
    <div class="mx-auto my-3 w-11/12 flex md:justify-evenly flex-col-reverse md:flex-row">
        <div class="md:w-7/12 w-full mx-1">
            @forelse ($questions as $question)
                <x-card-question :id="$question->id" :title="$question['title']" :profile="$question->biodata->img_url" :username="$question->username" />
            @empty
                <h2>Tidak ada Data</h2>
            @endforelse
        </div>

        {{-- Right Sidebar --}}
        <div class="md:w-4/12 w-full mx-2">

            {{-- Action BUttons --}}
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <button type="button"
                    class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-funnel" viewBox="0 0 16 16">
                        <path
                            d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z" />
                    </svg>
                    <span class="ml-3">Filter</span>
                </button>
                <button type="button"
                    class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                    <span class="ml-3">Cari Artikel</span>
                </button>
                <button type="button"
                    class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                        <path
                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                    </svg>
                    <span class="ml-3">Cari Teknisi</span>
                </button>
            </div>

            {{-- Article Category --}}

            <div class="mt-5">
                <span class="font-bold mb-5"> Kategori Artikel : </span>
                <ul
                    class="w-48 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white mt-2">
                    <li class="py-2 px-4  w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                        Smartphone</li>
                    <li class="py-2 px-4 bg-red-200 w-full border-b border-gray-200 dark:border-gray-600">Televisi</li>
                    <li class="py-2 px-4 w-full border-b border-gray-200 dark:border-gray-600">Komputer</li>
                    <li class="py-2 px-4 w-full rounded-b-lg">Air Condition</li>
                </ul>

            </div>


        </div>
    </div>
    <div class="mx-auto my-3 w-11/12 flex md:justify-evenly md:items-center justify-center">
        {{ $questions->links() }}
    </div>
@endsection
{{-- End Questions Page --}}
