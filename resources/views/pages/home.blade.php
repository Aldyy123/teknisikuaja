<x-app-layout>
    <x-container>
        <div class="flex justify-between">
            <div class="items-start flex flex-col justify-center">
                <h2>Konsultasikan kerusakan komputer kamu sekarang.</h2>
                <x-nav-link :href="route('home')">
                    Cek Kerusakan
                </x-nav-link>
            </div>
            <div class="w-6/11 bg-black">
                <img src="https://iridescent-nougat-2d2ca9.netlify.app/static/media/image.d6c62689ed6d746f1292.webp"
                    class="w-4/6" alt="">
            </div>
        </div>
    </x-container>
    <x-container class="text-center bg-slate-500 w-full">
        <h2>Tentang TeknisiKuAja</h2>
        <p>Layanan konsultasi komputer online yang tersebar di indonesia, dan bisa menerima pelayanan offline sesuai
            dengan lokasi wilayah pelanggan serta memberikan solusi seputar perbaikan masalah hardware maupun software.
            Teknisikuaja juga dapat menerima kerja sama mitra dengan toko layanan komputer agar bisa di cari oleh banyak
            pengguna dan melihat rating tokonya.</p>
    </x-container>
    <x-container>
        <h3>Promblem Komputer Terkini</h3>
        <div class="flex">
            @foreach ($blogs as $item)
                <x-card-blog
                    :image="$item->image">
                    <h3 class="text-red-400">{{ $item->title }}</h3>
                    <p>{{ $item->description }}</p>
                </x-card-blog>
            @endforeach
        </div>
    </x-container>
</x-app-layout>
