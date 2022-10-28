<div class="mx-5 my-5">
    <h2 class="font-nunito text-center text-4xl font-semibold">Tanya Teknisi</h2>
    <form action='' method="POST">
        <div class="mb-6">
            <label for="tanya" class="block mb-2 text-sm font-medium text-gray-400 dark:text-gray-400">Judul
                Pertanyaan</label>
            <input type="tanya" id="tanya"
                class="bg-gray-50 border @error('title') border-red-600 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Bagaimana Cara Mengatasi ..." required="">
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <label for="message" class="block mb-2 text-sm font-medium text-gray-400 dark:text-gray-400">Deskripsi
            Pertanyaan</label>
        <textarea id="message" rows="4"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Jelaskan masalah yang kamu hadapi disini.."></textarea>
        <button type="submit"
            class="mt-5 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Submit</button>
    </form>
</div>
