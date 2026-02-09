<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Data Berhasil Disimpan</title>
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
    <div class="w-full max-w-[600px] flex flex-col gap-6">
        
        <div class="bg-white dark:bg-slate-900 rounded-xl shadow-lg border border-slate-100 dark:border-slate-800 overflow-hidden text-center p-8">
            
            <div class="mb-6 flex justify-center">
                <div class="size-16 bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                    <span class="material-symbols-outlined text-4xl">check_circle</span>
                </div>
            </div>

            <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Data Berhasil Diterima!</h2>
            <p class="text-slate-500 mb-8">Berikut adalah data yang baru saja Anda input.</p>

            <div class="bg-slate-50 dark:bg-slate-800 rounded-lg p-6 text-left space-y-4 border border-slate-200">
                
                <div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Nama Lengkap</p>
                    <p class="text-lg font-medium text-slate-900 dark:text-white"><?= $nama ?></p>
                </div>

                <div class="border-t border-slate-200 dark:border-slate-700 pt-4">
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">NIM</p>
                    <p class="text-lg font-medium text-slate-900 dark:text-white"><?= $nim ?></p>
                </div>

                <div class="border-t border-slate-200 dark:border-slate-700 pt-4">
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Jurusan</p>
                    <p class="text-lg font-medium text-slate-900 dark:text-white"><?= $jurusan ?></p>
                </div>

            </div>

            <div class="mt-8">
                <a href="/mahasiswa/form" class="inline-flex items-center justify-center gap-2 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-700 h-12 px-8 text-base font-bold transition-all w-full">
                    <span class="material-symbols-outlined">arrow_back</span>
                    <span>Kembali ke Form</span>
                </a>
            </div>

        </div>
    </div>
</main>

</body>
</html>