<!DOCTYPE html>
<html dir="ltr">

    <head>
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
        <title>Form Pendaftaran Peserta Magang</title>

        <title>Informasi Pribadi & Akademik</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

        <style>
            /* Menimpa margin bawaan Trezo untuk semua ukuran layar */
            .header-area,
            .main-content {
                margin-left: 0 !important;
                left: 0 !important;
                width: 100% !important;
                max-width: 100% !important;
            }

            /* Menyesuaikan padding kiri-kanan agar rapi seperti aslinya */
            @media (min-width: 768px) {

                .header-area,
                .main-content {
                    padding-left: 25px !important;
                    padding-right: 25px !important;
                }
            }
        </style>
    </head>

    <body class="bg-[#f5f6fa] dark:bg-[#15203c]">
        
        <!-- Header -->
        <?= $this->include('Layout/Header') ?>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content transition-all flex flex-col overflow-hidden min-h-screen !ml-0 !w-full pt-[90px] px-[20px] md:px-[25px]" id="main-content">
            <form id="magang-form" action="form-dokumen.html" method="GET">
                <div id="step-1" class="max-w-4xl mx-auto transition-all duration-300 w-full">
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px] shadow-sm">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px]">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 text-lg">Tahap 1: Informasi Pribadi & Akademik</h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px] sm:gap-[25px]">
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">Nama
                                        Lengkap</label>
                                    <input type="text"
                                        class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                        placeholder="E.g. Rafif Dary Asmara">
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">Jenis
                                        Kelamin</label>
                                    <select
                                        class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                        <option selected disabled>Pilih jenis kelamin...</option>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">Alamat
                                        Email</label>
                                    <input type="email"
                                        class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                        placeholder="E.g. email@kampus.ac.id">
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">Domisili</label>
                                    <input type="text"
                                        class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                        placeholder="E.g. Surabaya, Jawa Timur">
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">Nomor HP /
                                        WhatsApp</label>
                                    <input type="tel"
                                        class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                        placeholder="E.g. 081234567890">
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">Institusi /
                                        Kampus</label>
                                    <input type="text"
                                        class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                        placeholder="E.g. Universitas 17 Agustus 1945">
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">Jurusan</label>
                                    <input type="text"
                                        class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                        placeholder="E.g. Teknik Informatika">
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">Hal yang Anda
                                        Minati</label>
                                    <input type="text"
                                        class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                        placeholder="E.g. Frontend Development">
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">Link LinkedIn
                                        (Opsional)</label>
                                    <input type="url"
                                        class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                        placeholder="E.g. https://linkedin.com/in/username">
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">Link GitHub
                                        (Opsional)</label>
                                    <input type="url"
                                        class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                        placeholder="E.g. https://github.com/username">
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-[15px]">
                                    <div>
                                        <label class="mb-[10px] text-black dark:text-white font-medium block">Tanggal Mulai
                                            Magang</label>
                                        <input type="date"
                                            class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500 text-gray-500 dark:text-gray-400">
                                    </div>
                                    <div>
                                        <label class="mb-[10px] text-black dark:text-white font-medium block">Tanggal
                                            Berakhir Magang</label>
                                        <input type="date"
                                            class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500 text-gray-500 dark:text-gray-400">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end mb-[25px]">
                        <button type="button"
                            class="font-medium inline-block transition-all rounded-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-danger-500 text-white hover:bg-danger-400 ltr:mr-[15px] rtl:ml-[15px] shadow-sm">
                            Batal
                        </button>
                        <button type="button" onclick="window.location.href='<?= base_url('pendaftaran/upload-file') ?>'" class="font-medium inline-block transition-all rounded-md md:text-md ltr:mr-[15px] rtl:ml-[15px] py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-primary-500 text-white hover:bg-primary-400">
                            Selanjutnya
                        </button>
                    </div>
                </div>

            </form>

            <div class="grow"></div>

            <!-- Footer -->
            <footer
                class="bg-white dark:bg-[#0c1427] rounded-t-md px-[20px] md:px-[25px] py-[15px] md:py-[20px] text-center">
                <p>
                    © 2026 <span class="text-purple-500 font-medium">Sistem Informasi Magang</span> | Hak Cipta Dilindungi
                    oleh <a href="#" class="text-primary-500 transition-all hover:underline">CV OTW Computer Gusaha</a>
                </p>
            </footer>
            <!-- End Footer -->

        </div>
        <!-- End Main Content -->

        <!-- Links Of JS File -->
        <script src="<?= base_url('assets/js/apexcharts.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/fslightbox.js'); ?>"></script>
        <script src="<?= base_url('assets/js/simplebar.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/prism.js'); ?>"></script>
        <script src="<?= base_url('assets/js/clipboard.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/swiper-bundle.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/fullcalendar.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/jsvectormap.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/world-merc.js'); ?>"></script>
        <script src="<?= base_url('assets/js/quill.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/custom.js'); ?>"></script>
        
    </body>
</html>