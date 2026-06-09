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
    <title>Dashboard Intern</title>

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

        <div class="grid grid-cols-1 2xl:grid-cols-2 gap-[25px] mb-[25px]">

            <div class="trezo-card p-[20px] md:p-[25px] rounded-md"
                style="background: linear-gradient(81deg, #605DFF 3.39%, #9747FF 93.3%);">
                <div class="trezo-card-content relative sm:ltr:pr-[250px] sm:rtl:pl-[250px]">
                    <div class="md:py-[25px]">
                        <h5 class="!mb-[5px] md:!mb-px !font-semibold !text-white">
                            Selamat Datang, <span class="text-orange-100">Rafif!</span>
                        </h5>
                        <p class="text-white">
                            Semoga bahagia selalu dan jangan lupa sholat!
                        </p>
                        <div class="md:mt-[35px] md:flex items-center">
                            <div
                                class="mt-[20px] md:mt-0 flex items-center md:ltr:mr-[35px] md:rtl:ml-[35px] ltr:last:mr-0 rtl:last:ml-0">
                                <div
                                    class="w-[42px] h-[42px] ltr:mr-[12px] rtl:ml-[12px] bg-success-100 text-success-600 rounded-md flex items-center justify-center">
                                    <i class="material-symbols-outlined">
                                        work_outline
                                    </i>
                                </div>
                                <div>
                                    <span class="block font-semibold text-white text-md">
                                        Posisi
                                    </span>
                                    <span class="block text-gray-200">
                                        Front-End Intern
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="sm:absolute sm:top-1/2 sm:-translate-y-1/2 sm:ltr:-right-[15px] sm:rtl:-left-[15px] sm:-mt-[8px] sm:max-w-[285px]">
                        <img src="assets\images\online-learning.gif" alt="online-learning-image">
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-[25px]">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <span class="block">
                            Total Penugasan
                        </span>
                        <h5 class="!text-[20px] mt-[3px] !mb-0">
                            12
                        </h5>
                        <div
                            class="flex items-center justify-center mx-auto text-secondary-500 bg-secondary-100 dark:bg-[#15203c] w-[77px] h-[77px] my-[15px] rounded-full">
                            <i class="material-symbols-outlined !text-[32px]">
                                assignment
                            </i>
                        </div>
                    </div>
                </div>

                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <span class="block">
                            Tugas Selesai
                        </span>
                        <h5 class="!text-[20px] mt-[3px] !mb-0">
                            8
                        </h5>
                        <div
                            class="flex items-center justify-center mx-auto text-purple-500 bg-purple-100 dark:bg-[#15203c] w-[77px] h-[77px] my-[15px] rounded-full">
                            <i class="material-symbols-outlined !text-[32px]">
                                task_alt
                            </i>
                        </div>
                    </div>
                </div>

                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <span class="block">
                            Sisa Magang
                        </span>
                        <h5 class="!text-[20px] mt-[3px] !mb-0">
                            24 Hari
                        </h5>
                        <div
                            class="flex items-center justify-center mx-auto text-orange-500 bg-orange-100 dark:bg-[#15203c] w-[77px] h-[77px] my-[15px] rounded-full">
                            <i class="material-symbols-outlined !text-[32px]">
                                hourglass_bottom
                            </i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-[25px] mb-[25px]">

            <div class="lg:col-span-3">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md h-full">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Deadline Terdekat
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <a href="to-do-list.html" class="text-primary-500 hover:underline">Lihat Semua Tugas</a>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="table-responsive overflow-x-auto">
                            <table
                                class="w-full border border-gray-100 dark:border-[#172036] rounded-md overflow-hidden">
                                <thead class="text-black dark:text-white">
                                    <tr>
                                        <th
                                            class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                            Tugas</th>
                                        <th
                                            class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                            Deadline</th>
                                        <th
                                            class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody class="text-black dark:text-white">
                                    <tr>
                                        <td
                                            class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                            <a href="detail-tugas.html"
                                                class="inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500">Membuat
                                                UI Design Login</a>
                                        </td>
                                        <td
                                            class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                            <span class="text-gray-500 dark:text-gray-400">05 Mei 2026</span>
                                        </td>
                                        <td
                                            class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                            <span
                                                class="inline-block px-[10px] py-[4px] bg-orange-100 text-orange-600 dark:bg-orange-500/20 dark:text-orange-400 rounded-md text-xs font-medium">Belum
                                                Selesai</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                            <a href="detail-tugas.html"
                                                class="inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500">Merancang
                                                Frontend</a>
                                        </td>
                                        <td
                                            class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                            <span class="text-gray-500 dark:text-gray-400">10 Mei 2026</span>
                                        </td>
                                        <td
                                            class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                            <span
                                                class="inline-block px-[10px] py-[4px] bg-orange-100 text-orange-600 dark:bg-orange-500/20 dark:text-orange-400 rounded-md text-xs font-medium">Belum
                                                Selesai</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                            <a href="detail-tugas.html"
                                                class="inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500">Merancang
                                                Backend</a>
                                        </td>
                                        <td
                                            class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                            <span class="text-gray-500 dark:text-gray-400">12 Mei 2026</span>
                                        </td>
                                        <td
                                            class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                            <span
                                                class="inline-block px-[10px] py-[4px] bg-orange-100 text-orange-600 dark:bg-orange-500/20 dark:text-orange-400 rounded-md text-xs font-medium">Belum
                                                Selesai</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md h-full">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Papan Pengumuman
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="table-responsive overflow-x-auto">
                            <table class="w-full">
                                <tbody class="text-black dark:text-white">
                                    <tr>
                                        <td
                                            class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                            <div class="flex items-center">
                                                <div
                                                    class="rounded-full w-[45px] h-[45px] border-[2px] border-white dark:border-dark shrink-0">
                                                    <img alt="user-image" src="assets/images/users/user6.jpg"
                                                        class="rounded-full">
                                                </div>
                                                <div class="ltr:ml-[10px] rtl:mr-[10px] whitespace-normal">
                                                    <span class="block font-medium">
                                                        Budi Santoso (Mentor)
                                                    </span>
                                                    <span
                                                        class="block mt-[5px] text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                                        Jangan lupa besok kita meeting jam 10 pagi.
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                            <div class="flex items-center">
                                                <div
                                                    class="rounded-full w-[45px] h-[45px] border-[2px] border-white dark:border-dark shrink-0">
                                                    <img alt="user-image" src="assets/images/users/user20.jpg"
                                                        class="rounded-full">
                                                </div>
                                                <div class="ltr:ml-[10px] rtl:mr-[10px] whitespace-normal">
                                                    <span class="block font-medium">
                                                        HRD
                                                    </span>
                                                    <span
                                                        class="block mt-[5px] text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                                        Harap lengkapi nomor rekening di halaman profil.
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-[25px] mb-[25px]">

            <div class="lg:col-span-3">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md h-full">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Progress Penugasan
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <a href="pm-teams.html" class="text-primary-500 hover:underline">Lihat Semua Penugasan</a>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="table-responsive overflow-x-auto">
                            <table
                                class="w-full border border-gray-100 dark:border-[#172036] rounded-md overflow-hidden">
                                <thead class="text-black dark:text-white">
                                    <tr>
                                        <th
                                            class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                            Modul / Materi</th>
                                        <th
                                            class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                            Progress Pencapaian</th>
                                    </tr>
                                </thead>
                                <tbody class="text-black dark:text-white">
                                    <tr>
                                        <td
                                            class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] border-b border-gray-100 dark:border-[#172036] font-medium">
                                            UI/UX Fundamental</td>
                                        <td
                                            class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] border-b border-gray-100 dark:border-[#172036]">
                                            <div
                                                class="flex w-full h-[4px] overflow-hidden rounded-md bg-success-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-success-500 rounded-md"
                                                    style="width: 100%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] border-b border-gray-100 dark:border-[#172036] font-medium">
                                            Slicing HTML & CSS</td>
                                        <td
                                            class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] border-b border-gray-100 dark:border-[#172036]">
                                            <div
                                                class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md"
                                                    style="width: 65%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] border-b border-gray-100 dark:border-[#172036] font-medium">
                                            JavaScript DOM</td>
                                        <td
                                            class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] border-b border-gray-100 dark:border-[#172036]">
                                            <div
                                                class="flex w-full h-[4px] overflow-hidden rounded-md bg-gray-100 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-gray-300 rounded-md"
                                                    style="width: 0%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2">
                <div
                    class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md h-full flex flex-col justify-center border border-gray-100 dark:border-[#172036]">
                    <div class="trezo-card-content text-center">
                        <span class="block text-gray-500 font-medium mb-[5px]">
                            Sertifikat Kelulusan
                        </span>
                        <h5 class="!text-[22px] mt-[3px] !mb-0 text-black dark:text-white font-bold">
                            Tersedia
                        </h5>

                        <div
                            class="flex items-center justify-center mx-auto text-success-500 bg-success-50 dark:bg-[#15203c] w-[80px] h-[80px] my-[20px] rounded-full border border-success-200 dark:border-success-800">
                            <i class="material-symbols-outlined !text-[32px]">
                                workspace_premium
                            </i>
                        </div>

                        <div class="flex items-center justify-center text-sm mt-[10px] mb-[20px]">
                            <span class="block text-gray-500 px-[20px]">
                                Sertifikat magang Anda sudah diterbitkan dan siap dilihat.
                            </span>
                        </div>

                        <a href="sertifikat.html"
                            class="inline-block font-medium transition-all rounded-md py-[10px] px-[20px] bg-primary-500 text-white hover:bg-primary-600 shadow-sm">
                            Lihat Sertifikat
                        </a>
                    </div>
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