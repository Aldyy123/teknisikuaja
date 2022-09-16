<!-- Artikel Masalah -->
    <section id="masalah">
        <!-- Judul -->
        <div class="text-center pt-10" style="padding-top: 70px !important;">
            <h2 class="text-3xl font-bold ">Masalah Terbaru</h2>
        </div>

        <div class="container my-12 mx-auto px-4 md:px-12">
            <div class="flex flex-wrap -mx-1 lg:-mx-4">
                @foreach ($blogs as $blog)
                    <!-- Masalah 1 -->
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                        <article class="overflow-hidden rounded-lg shadow-lg">
                            <a href="<?= $blog->slug ?>">
                                <img alt="Placeholder" class="block h-auto w-full" src="<?= $blog->image ?>">
                            </a>
                            <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                <h1 class="text-lg font-bold">
                                    {{ $blog->title }}
                                </h1>
                                <p class="text-grey-darker text-sm">
                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}
                                </p>
                            </header>
                            <p class="pl-2 md:p-4">
                                @if ($blog->description >= 108)
                                    {{ \Illuminate\Support\Str::limit($blog->description, 108, $end='...') }}
                                @else
                                    {{ $blog->description }}
                                @endif
                            </p>
                            <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                <a class="flex items-center text-red-600 no-underline hover:underline"
                                    href="<?= $blog->slug ?>">
                                    <p class="text-sm">
                                        Baca Selengkapnya
                                    </p>
                                </a>
                                <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                    <span class="hidden">Like</span>
                                    <i class="fa fa-heart"></i>
                                </a>
                            </footer>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>