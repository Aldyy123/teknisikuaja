<section id="masalah">
    <!-- Judul -->
    <div class="text-center">
        <h2 class="text-4xl font-bold mt-5">Daftar Masalah Terbaru</h2>
    </div>

    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            {{-- Masalah 1 --}}
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                <article class="overflow-hidden rounded-lg shadow-lg">
                    <a href="">
                        <img alt="Placeholder" class="block h-auto w-full"
                            src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80">
                    </a>
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg font-bold">
                            Mengatasi laptop gagal booting
                        </h1>
                        <p class="text-grey-darker text-sm">
                            20-09-2022
                        </p>
                    </header>
                    <p class="pl-2 md:p-4">
                        Gagal booting ialah suatu kondisi di mana ketika laptop atau komputer dinyalakan, namun sistem
                        tidak bisa masuk ke dalam bootscreen atau OS Windows. Biasanya kondisi gagal booting ini
                        ditandai dengan booloader yang hanya stuck pada logo saja dan tidak bisa masuk ke Windows.
                    </p>
                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <a class="flex items-center text-red-600 no-underline hover:underline"
                            href="{{ route('detail-post', 1) }}">
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
            {{-- Masalah 2 --}}
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                <article class="overflow-hidden rounded-lg shadow-lg">
                    <a href="">
                        <img alt="Placeholder" class="block w-full h-[350px]"
                            src="https://images.unsplash.com/photo-1594434885674-0a15708152bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80">
                    </a>
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg font-bold">
                            TV Digital tidak ada sinyal
                        </h1>
                        <p class="text-grey-darker text-sm">
                            20-09-2022
                        </p>
                    </header>
                    <p class="pl-2 md:p-4">
                        TV digital yang hilang sinyal pasti membuat pengalaman menonton kamu berkurang dan merasa
                        terganggu. Pasalnya, sinyal TV digital yang hilang membuat membuat kamu tidak bisa merasakan
                        tontonan gambar yang jernih pada layar televisi.
                    </p>
                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <a class="flex items-center text-red-600 no-underline hover:underline" href="">
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
            {{-- Masalah 3 --}}
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                <article class="overflow-hidden rounded-lg shadow-lg">
                    <a href="">
                        <img alt="Placeholder" class="block h-auto w-full"
                            src="{{ asset('images/kulkas-tidak-dingin.jpg') }}">
                    </a>
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg font-bold">
                            Kulkas tidak dingin
                        </h1>
                        <p class="text-grey-darker text-sm">
                            20-09-2022
                        </p>
                    </header>
                    <p class="pl-2 md:p-4">
                        Kulkas tidak dingin bukan selalu berarti ada masalah pada komponen elektronik tersebut. Bisa
                        jadi, kita justru melakukan pengaturan yang salah pada kulkas.
                    </p>
                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <a class="flex items-center text-red-600 no-underline hover:underline" href="">
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
        </div>
    </div>
</section>
