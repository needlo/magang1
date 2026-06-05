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
    <title>Menunggu Konfirmasi</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

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
    <?= $this->include('Layout/Header/intern-form-daftar') ?>
    <!-- End Header -->

    <!-- Main Content -->
    ```php
    <div class="main-content transition-all flex flex-col overflow-hidden min-h-screen !ml-0 !w-full pt-[90px] px-[20px] md:px-[25px]"
        id="main-content">

        <div id="step-3" class="max-w-2xl mx-auto transition-all duration-300 w-full mb-[25px]">

            <div class="trezo-card-content md:pb-[75px] text-center">

                <img src="<?= base_url('assets/images/form/hourglass.png') ?>"
                    style="width: 280px; max-width: 100%; height: auto;" class="inline-block" alt="waiting-image">

                <h4 class="!text-[19px] md:!text-[21px] mt-[25px] md:mt-[33px] !mb-[15px]">

                    Biodata dan dokumen anda sedang kami tinjau.

                </h4>

                <!-- STATUS -->
                <div class="mb-[18px]">

                    <span
                        class="inline-block bg-warning-100 text-warning-600 px-[18px] py-[8px] rounded-full font-semibold text-sm">

                        Status: Waiting

                    </span>

                </div>

                <p class="text-gray-500 dark:text-gray-400">

                    Silahkan menunggu konfirmasi dari kami.

                </p>

                <a href="<?= base_url('logout') ?>"
                    class="inline-block font-medium rounded-md md:text-md mt-[25px] py-[12px] px-[25px] text-white bg-danger-500 transition-all hover:bg-danger-400">

                    Logout

                </a>

            </div>

        </div>

        <div class="grow"></div>

    </div>


    <!-- Footer -->
    <footer class="bg-white dark:bg-[#0c1427] rounded-t-md px-[20px] md:px-[25px] py-[15px] md:py-[20px] text-center">
        <p>
            © 2026 <span class="text-purple-500 font-medium">Sistem Informasi Magang</span> | Hak Cipta Dilindungi
            oleh <a href="#" class="text-primary-500 transition-all hover:underline">CV OTW Computer Gusaha</a>
        </p>
    </footer>
    <!-- End Footer -->

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