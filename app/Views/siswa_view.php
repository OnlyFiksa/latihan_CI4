<?= $this->extend('layout/template'); ?>

<?= $this->section('konten_utama'); ?>

    <div class="max-w-6xl mx-auto p-10">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 border-l-4 border-blue-500 pl-4">
            <?= $judul; ?>
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <?php foreach ($para_siswa as $mhs) : ?>
                <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-200">
                    <div class="bg-blue-50 p-6 flex flex-col items-center">
                        <img 
                            src="https://ui-avatars.com/api/?name=<?= urlencode($mhs['nama']); ?>&background=random&size=128" 
                            alt="<?= $mhs['nama']; ?>"
                            class="w-24 h-24 rounded-full border-4 border-white shadow-sm mb-3"
                        >
                        <h3 class="text-xl font-bold text-gray-800 text-center"><?= $mhs['nama']; ?></h3>
                        <span class="text-sm text-blue-600 font-medium bg-blue-100 px-3 py-1 rounded-full mt-1">
                            Mahasiswa Aktif
                        </span>
                    </div>

                    <div class="p-6">
                        <div class="flex items-center gap-3 text-gray-600 mb-3">
                            <span class="material-symbols-outlined text-gray-400">badge</span>
                            <div>
                                <p class="text-xs text-gray-400 uppercase">NIM</p>
                                <p class="font-semibold"><?= $mhs['nim']; ?></p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 text-gray-600">
                            <span class="material-symbols-outlined text-gray-400">school</span>
                            <div>
                                <p class="text-xs text-gray-400 uppercase">Jurusan</p>
                                <p class="font-semibold"><?= $mhs['jurusan']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

<?= $this->endSection(); ?>