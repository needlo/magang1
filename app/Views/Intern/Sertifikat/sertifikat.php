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
    <title>Sertifikat Intern</title>

    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- Material Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>

    <!-- Sidebar -->
    <?php echo $this->include('Layout/Sidebar'); ?>
    <!-- End Sidebar -->

    <!-- Header -->
    <?= $this->include('Layout/Header') ?>
    <!-- End Header -->

    <!-- Main Content -->
    <div class="main-content transition-all flex flex-col overflow-hidden min-h-screen" id="main-content">

        <div class="mb-[25px] md:flex items-center justify-between">
            <h5 class="!mb-0 text-xl font-bold">
                Sertifikat Intern
            </h5>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]">

            <div
                class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md border border-gray-100 dark:border-[#172036]">
                <div class="trezo-card-content text-center flex flex-col justify-center items-center h-full">

                    <div
                        class="w-[80px] h-[80px] rounded-full bg-success-50 dark:bg-[#15203c] flex items-center justify-center mx-auto mb-[20px] border border-success-200 dark:border-success-800">
                        <i class="material-symbols-outlined text-[40px] text-success-500">workspace_premium</i>
                    </div>

                    <span
                        class="inline-block py-[5px] px-[15px] bg-success-100 text-success-600 dark:bg-success-500/20 dark:text-success-400 rounded-full text-sm font-medium mb-[15px]">
                        Status: Magang Selesai
                    </span>

                    <h5 class="text-xl font-bold text-black dark:text-white mb-[10px]">
                        Sertifikat Telah Terbit!
                    </h5>
                    <p class="text-gray-500 dark:text-gray-400 leading-relaxed mb-[30px]">
                        Selamat! Anda telah menyelesaikan program magang dengan baik. Sertifikat resmi Anda kini sudah
                        tersedia dan dapat diunduh.
                    </p>

                    <a href="#"
                        class="font-medium inline-flex items-center justify-center gap-[8px] transition-all rounded-md py-[10px] px-[25px] bg-primary-500 text-white hover:bg-primary-600 shadow-sm mt-auto w-full sm:w-auto">
                        <span class="leading-none">Download Sertifikat (PDF)</span>
                    </a>
                </div>
            </div>

            <div
                class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md border border-gray-100 dark:border-[#172036]">
                <div class="trezo-card-content text-center flex flex-col justify-center items-center h-full">

                    <div
                        class="w-[80px] h-[80px] rounded-full bg-orange-50 dark:bg-[#15203c] flex items-center justify-center mx-auto mb-[20px] border border-orange-200 dark:border-orange-800">
                        <i class="material-symbols-outlined text-[40px] text-orange-500">hourglass_empty</i>
                    </div>

                    <span
                        class="inline-block py-[5px] px-[15px] bg-orange-100 text-orange-600 dark:bg-orange-500/20 dark:text-orange-400 rounded-full text-sm font-medium mb-[15px]">
                        Status: Sedang Berjalan
                    </span>

                    <h5 class="text-xl font-bold text-black dark:text-white mb-[10px]">
                        Sertifikat Belum Tersedia
                    </h5>
                    <p class="text-gray-500 dark:text-gray-400 leading-relaxed mb-[30px]">
                        Program magang Anda saat ini masih berlangsung. Sertifikat baru dapat diterbitkan dan diunduh
                        setelah seluruh program magang dinyatakan selesai.
                    </p>

                    <button type="button" disabled
                        class="font-medium inline-flex items-center justify-center gap-[8px] transition-all rounded-md py-[10px] px-[25px] bg-gray-100 text-gray-400 dark:bg-[#15203c] dark:text-gray-600 cursor-not-allowed mt-auto w-full sm:w-auto">
                        <span class="leading-none">Download Terkunci</span>
                    </button>
                </div>
            </div>

        </div>

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
    <script src="assets/js/apexcharts.min.js"></script>
    <script src="assets/js/fslightbox.js"></script>
    <script src="assets/js/simplebar.min.js"></script>
    <script src="assets/js/prism.js"></script>
    <script src="assets/js/clipboard.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/fullcalendar.min.js"></script>
    <script src="assets/js/jsvectormap.min.js"></script>
    <script src="assets/js/world-merc.js"></script>
    <script src="assets/js/quill.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>