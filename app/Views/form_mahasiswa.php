<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Form Biodata Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;700;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: { "primary": "#137fec", "background-light": "#f6f7f8", "background-dark": "#101922" },
                    fontFamily: { "display": ["Lexend", "sans-serif"] },
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen flex flex-col transition-colors duration-200">

<main class="flex-1 flex justify-center py-8 px-4 md:px-10">
    <div class="w-full max-w-[960px] flex flex-col gap-6">
        
        <div class="flex flex-col gap-2">
            <h1 class="text-slate-900 dark:text-white text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">Form Biodata Mahasiswa</h1>
            <p class="text-slate-500 dark:text-slate-400 text-base font-normal leading-normal">Silakan lengkapi data diri Anda di bawah ini.</p>
        </div>

        <div class="bg-white dark:bg-slate-900 rounded-xl shadow border border-slate-100 dark:border-slate-800 overflow-hidden">
            
            <form action="/mahasiswa/proses" method="post" class="p-6 md:p-8 flex flex-col gap-6">
                
                <?= csrf_field() ?>

                <div class="flex items-center gap-2 pb-2 border-b border-slate-100 dark:border-slate-800">
                    <span class="material-symbols-outlined text-primary">person_edit</span>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Informasi Pribadi</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <label class="flex flex-col gap-2">
                        <p class="text-slate-700 dark:text-slate-300 text-base font-medium">Nama Lengkap</p>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                                <span class="material-symbols-outlined text-[20px]">badge</span>
                            </div>
                            <input name="nama" type="text" required class="form-input flex w-full rounded-lg border border-slate-200 bg-slate-50 h-14 pl-10 pr-4 focus:border-primary focus:ring-primary transition-all" placeholder="Contoh: Taufik Darmawan" />
                        </div>
                    </label>

                    <label class="flex flex-col gap-2">
                        <p class="text-slate-700 dark:text-slate-300 text-base font-medium">NIM</p>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                                <span class="material-symbols-outlined text-[20px]">pin</span>
                            </div>
                            <input name="nim" type="number" required class="form-input flex w-full rounded-lg border border-slate-200 bg-slate-50 h-14 pl-10 pr-4 focus:border-primary focus:ring-primary transition-all" placeholder="Contoh: 12345678" />
                        </div>
                    </label>
                </div>

                <label class="flex flex-col gap-2">
                    <p class="text-slate-700 dark:text-slate-300 text-base font-medium">Jurusan</p>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                            <span class="material-symbols-outlined text-[20px]">school</span>
                        </div>
                        <select name="jurusan" required class="form-select flex w-full rounded-lg border border-slate-200 bg-slate-50 h-14 pl-10 pr-10 focus:border-primary focus:ring-primary transition-all cursor-pointer">
                            <option value="" disabled selected>Pilih Jurusan...</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                            <option value="Manajemen">Manajemen</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Hukum">Hukum</option>
                        </select>
                    </div>
                </label>

                <hr class="border-slate-100 dark:border-slate-800 mt-2"/>

                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    <p class="text-sm text-slate-400">Pastikan data yang Anda masukkan sudah benar.</p>
                    <button type="submit" class="w-full md:w-auto cursor-pointer flex items-center justify-center gap-2 rounded-lg bg-primary hover:bg-blue-600 text-white h-12 px-8 text-base font-bold shadow-lg shadow-primary/20 transition-all">
                        <span>Simpan Data</span>
                        <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                    </button>
                </div>
            </form>
            </div>
    </div>
</main>
</body>
</html>