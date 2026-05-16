<!DOCTYPE html>
<html dir="ltr">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Links Of CSS File -->
        <link rel="stylesheet" href=<?= base_url("assets/css/remixicon.css") ?>>
        <link rel="stylesheet" href=<?= base_url("assets/css/apexcharts.css") ?>>
        <link rel="stylesheet" href=<?= base_url("assets/css/simplebar.css") ?>>
        <link rel="stylesheet" href=<?= base_url("assets/css/prism.css") ?>>
        <link rel="stylesheet" href=<?= base_url("assets/css/jsvectormap.min.css") ?>>
        <link rel="stylesheet" href=<?= base_url("assets/css/swiper-bundle.min.css") ?>>
        <link rel="stylesheet" href=<?= base_url("assets/css/quill.snow.css") ?>>
        <link rel="stylesheet" href=<?= base_url("assets/css/style.css") ?>>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href=<?= base_url("assets/images/OtwLogo.png") ?>>

        <!-- Title -->
        <title>Trezo - Tailwind CSS Admin Dashboard Template</title>

        <!-- Font Family -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

        <!-- Material Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    </head>
    <body>

        <!-- Sidebar -->
        <?= $this->include('Layout/Sidebar') ?>
        <!-- End Sidebar -->


        <!-- Header -->
        <?= $this->include('Layout/Header') ?>
        <!-- End Header -->

<!-- Main Content -->
<div class="main-content transition-all flex flex-col overflow-hidden min-h-screen" id="main-content">


    <!-- Pendaftar Details -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
        <div class="lg:col-span-1">
            <!-- Profil Pendaftar -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px]">
                <div class="trezo-card-content">
                    <div class="flex items-center gap-[20px] mb-[20px] md:mb-[25px]">
                        <img src="assets/images/patient.jpg" alt="patient-image" class="rounded-full w-[100px]">
                         <!-- Data di bawah gambar -->
    <div>
        <h4 class="!text-[20px] !mb-[6px]">
            Ahmad Rizki
        </h4>

        <span class="block text-gray-600 dark:text-gray-400">
            ID Pendaftar:
            <span class="text-black dark:text-white font-medium">
                #MAG-001
            </span>
        </span>

        <span class="inline-block px-[10px] py-[4px] bg-success-50 dark:bg-[#15203c] text-success-600 rounded-full font-medium text-xs mt-3">
            Diterima
        </span>
    </div>
                    </div>
                    <h3 class="!text-lg !mb-[15px]">
                        Informasi Pribadi
                    </h3>
                    <ul>
                        <li class="mb-[12px] last:mb-0">
                            Sekolah: <span class="text-black dark:text-white">SMK Negeri 1 Jakarta</span>
                        </li>
                        <li class="mb-[12px] last:mb-0">
                            Jurusan: <span class="text-black dark:text-white">Rekayasa Perangkat Lunak</span>
                        </li>
                        <li class="mb-[12px] last:mb-0">
                            Tanggal Daftar: <span class="text-black dark:text-white">15 Januari 2025</span>
                        </li>
                        <li class="mb-[12px] last:mb-0">
                            Periode Magang: <span class="text-black dark:text-white">Februari - April 2025</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Email -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px]">
                <div class="trezo-card-content flex items-center gap-[15px]">
                    <div class="w-[40px] h-[40px] bg-primary-50 dark:bg-[#15203c] rounded-lg flex items-center justify-center">
                        <i class="material-symbols-outlined text-primary-500 !text-lg">email</i>
                    </div>
                    <div>
                        <span class="block text-sm text-gray-600 dark:text-gray-400">
                            Email
                        </span>
                        <h5 class="!mb-0 !font-semibold !text-md mt-[4px] text-black dark:text-white">
                            ahmad.rizki@email.com
                        </h5>
                    </div>
                </div>
            </div>

            <!-- Telepon -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px]">
                <div class="trezo-card-content flex items-center gap-[15px]">
                    <div class="w-[40px] h-[40px] bg-success-50 dark:bg-[#15203c] rounded-lg flex items-center justify-center">
                        <i class="material-symbols-outlined text-success-600 !text-lg">phone</i>
                    </div>
                    <div>
                        <span class="block text-sm text-gray-600 dark:text-gray-400">
                            No. Telepon
                        </span>
                        <h5 class="block !mb-0 !font-semibold !text-md mt-[4px] text-black dark:text-white">
                            0812-3456-7890
                        </h5>
                    </div>
                </div>
            </div>

            <!-- Alamat -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content flex items-center gap-[15px]">
                    <div class="w-[40px] h-[40px] bg-warning-50 dark:bg-[#15203c] rounded-lg flex items-center justify-center">
                        <i class="material-symbols-outlined text-warning-600 !text-lg">location_on</i>
                    </div>
                    <div>
                        <span class="block text-sm text-gray-600 dark:text-gray-400">
                            Alamat
                        </span>
                        <h5 class="!mb-0 !font-semibold !text-md mt-[4px] text-black dark:text-white">
                            Jl. Merdeka No. 10, Jakarta Pusat
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-2">
            <!-- Dokumen & Keterangan -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px]">
                <div class="trezo-card-content">
                    <h3 class="!text-lg !mb-[15px] mt-[20px] md:mt-[25px] first:mt-0">
                        Dokumen Lampiran
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div class="border border-dashed border-gray-300 dark:border-gray-600 rounded-lg p-6 text-center hover:border-primary-300 transition-all">
                            <i class="material-symbols-outlined text-4xl text-gray-400 mb-3 block">description</i>
                            <a href="#" class="font-medium text-primary-500 hover:underline block mb-1">CV.pdf</a>
                            <span class="text-xs text-gray-500">1.2 MB</span>
                        </div>
                        <div class="border border-dashed border-gray-300 dark:border-gray-600 rounded-lg p-6 text-center hover:border-primary-300 transition-all">
                            <i class="material-symbols-outlined text-4xl text-gray-400 mb-3 block">description</i>
                            <a href="#" class="font-medium text-primary-500 hover:underline block mb-1">Transkrip Nilai.pdf</a>
                            <span class="text-xs text-gray-500">850 KB</span>
                        </div>
                        <div class="border border-dashed border-gray-300 dark:border-gray-600 rounded-lg p-6 text-center hover:border-primary-300 transition-all">
                            <i class="material-symbols-outlined text-4xl text-gray-400 mb-3 block">description</i>
                            <a href="#" class="font-medium text-primary-500 hover:underline block mb-1">Surat Lamaran.pdf</a>
                            <span class="text-xs text-gray-500">1.2 MB</span>
                        </div>
                    </div>

                    <h3 class="!text-lg !mb-[15px] mt-[20px] md:mt-[25px] first:mt-0">
                        Keterangan Tambahan
                    </h3>
                    <p class="mb-6">
                        Minat di bidang pengembangan web dan mobile application. Memiliki pengalaman mengikuti lomba programming tingkat kabupaten dan memenangkan juara 2. Aktif di ekskul informatika sekolah dan sering membantu teman dalam mengerjakan tugas pemrograman.
                    </p>

                    <h3 class="!text-lg !mb-[15px]">
                        Skills & Pengalaman
                    </h3>
                    <ul class="mt-[20px]">
                        <li class="ltr:pl-[20px] rtl:pr-[20px] mb-[15px] last:mb-0 relative">
                            <span class="absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 w-[8px] h-[8px] bg-primary-500 rounded-full"></span>
                            HTML, CSS, JavaScript (Menengah)
                        </li>
                        <li class="ltr:pl-[20px] rtl:pr-[20px] mb-[15px] last:mb-0 relative">
                            <span class="absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 w-[8px] h-[8px] bg-primary-500 rounded-full"></span>
                            PHP & MySQL (Dasar)
                        </li>
                        <li class="ltr:pl-[20px] rtl:pr-[20px] mb-[15px] last:mb-0 relative">
                            <span class="absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 w-[8px] h-[8px] bg-primary-500 rounded-full"></span>
                            Pengalaman membuat website sekolah sederhana
                        </li>
                        <li class="ltr:pl-[20px] rtl:pr-[20px] mb-[15px] last:mb-0 relative">
                            <span class="absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 w-[8px] h-[8px] bg-primary-500 rounded-full"></span>
                            Familiar dengan Git & GitHub
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Catatan Reviewer & Action Buttons -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content">
                    <h3 class="!text-lg !mb-[15px] mt-[20px] md:mt-[25px] first:mt-0">
                        Catatan Reviewer
                    </h3>
                    <div class="bg-gray-50 dark:bg-[#15203c] p-4 rounded-md mb-6">
                        <div class="flex items-center gap-3 mb-2">
                            <div>
                                <div class="font-medium text-black dark:text-white">HR</div>
                                <div class="text-xs text-gray-500">20 Januari 2025, 14:30</div>
                            </div>
                        </div>
                        <p class="text-sm text-gray-700 dark:text-gray-300">
                            Calon magang yang sangat potensial. CV dan transkrip nilai sangat baik. Disetujui untuk magang di divisi Frontend Development.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grow"></div>

</div>
<!-- End Main Content -->   
        
        <!-- Links Of JS File -->
        <script src=<?= base_url("assets/js/apexcharts.min.js") ?>></script>
        <script src=<?= base_url("assets/js/fslightbox.js") ?>></script>
        <script src=<?= base_url("assets/js/simplebar.min.js") ?>></script>
        <script src=<?= base_url("assets/js/prism.js") ?>></script>
        <script src=<?= base_url("assets/js/clipboard.min.js") ?>></script>
        <script src=<?= base_url("assets/js/swiper-bundle.min.js") ?>></script>
        <script src=<?= base_url("assets/js/fullcalendar.min.js") ?>></script>
        <script src=<?= base_url("assets/js/jsvectormap.min.js") ?>></script>
        <script src=<?= base_url("assets/js/world-merc.js") ?>></script>
        <script src=<?= base_url("assets/js/quill.min.js") ?>></script>
        <script src=<?= base_url("assets/js/custom.js") ?>></script>
    </body>
</html>