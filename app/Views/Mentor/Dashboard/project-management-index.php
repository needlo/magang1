<!DOCTYPE html>
<html dir="ltr">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Links Of CSS File -->
        <link rel="stylesheet" href="<?= base_url('assets/css/remixicon.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/apexcharts.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/simplebar.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/prism.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/jsvectormap.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/swiper-bundle.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/quill.snow.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

        <!-- Favicon -->
		<link rel="icon" type="image/png" href=<?= base_url("assets/images/OtwLogo.png") ?>>

        <!-- Title -->
        <title>Mentor-Magang-Dashboard</title>

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
            
            <div class="grid grid-cols-[repeat(auto-fit,minmax(250px,1fr))]">

                <!-- Projects Overview -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Dashboard Mentor
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-[25px]">
                            <div>
                                <div class="bg-primary-50 dark:bg-[#15203c] rounded-md py-[22px] px-[20px]">
                                    <div class="flex items-center">
                                        <div class="text-primary-500 leading-none ltr:mr-[10px] rtl:ml-[10px]">
                                            <i class="material-symbols-outlined !text-5xl">
                                                person_outline
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block">
                                                Total Intern
                                            </span>
                                            <h5 class="!mb-0 !text-[20px] mt-[2px]">
                                                8
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="mt-[15px] sm:mt-[25px] flex items-center justify-between">
                                        <span class="block text-sm">
                                            Projects this month
                                        </span>
                                        <span class="inline-block text-sm text-success-700 py-[1px] px-[8.3px] border border-success-300 bg-success-100 dark:bg-dark dark:border-dark rounded-xl">
                                            +10%
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="bg-orange-50 dark:bg-[#15203c] rounded-md py-[22px] px-[20px]">
                                    <div class="flex items-center">
                                        <div class="text-orange-500 leading-none ltr:mr-[10px] rtl:ml-[10px]">
                                            <i class="material-symbols-outlined !text-5xl">
                                                groups
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block">
                                                Total Tim
                                            </span>
                                            <h5 class="!mb-0 !text-[20px] mt-[2px]">
                                                5
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="mt-[15px] sm:mt-[25px] flex items-center justify-between">
                                        <span class="block text-sm">
                                            Projects this month
                                        </span>
                                        <span class="inline-block text-sm text-success-700 py-[1px] px-[8.3px] border border-success-300 bg-success-100 dark:bg-dark dark:border-dark rounded-xl">
                                            +5.75%
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="bg-success-50 dark:bg-[#15203c] rounded-md py-[22px] px-[20px]">
                                    <div class="flex items-center">
                                        <div class="text-success-500 leading-none ltr:mr-[10px] rtl:ml-[10px]">
                                            <i class="material-symbols-outlined !text-5xl">
                                                task
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block">
                                                Tugas Aktif
                                            </span>
                                            <h5 class="!mb-0 !text-[20px] mt-[2px]">
                                                135
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="mt-[15px] sm:mt-[25px] flex items-center justify-between">
                                        <span class="block text-sm">
                                            Projects this month
                                        </span>
                                        <span class="inline-block text-sm text-danger-700 py-[1px] px-[8.3px] border border-danger-300 bg-danger-100 dark:bg-dark dark:border-dark rounded-xl">
                                            -15%
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="bg-purple-50 dark:bg-[#15203c] rounded-md py-[22px] px-[20px]">
                                    <div class="flex items-center">
                                        <div class="text-purple-500 leading-none ltr:mr-[10px] rtl:ml-[10px]">
                                            <i class="material-symbols-outlined !text-5xl">
                                                assignment_turned_in
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block">
                                                Laporan Masuk
                                            </span>
                                            <h5 class="!mb-0 !text-[20px] mt-[2px]">
                                                65
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="mt-[15px] sm:mt-[25px] flex items-center justify-between">
                                        <span class="block text-sm">
                                            Projects this month
                                        </span>
                                        <span class="inline-block text-sm text-success-700 py-[1px] px-[8.3px] border border-success-300 bg-success-100 dark:bg-dark dark:border-dark rounded-xl">
                                            +15%
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-[25px] mb-[25px]">
                <div class="lg:col-span-3">

                    <!-- Projects Progress -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Grafik Progress
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                        <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                            6 Bulan Terakhir
                                            <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
                                        </span>
                                    </button>
                                    <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Hari Ini
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Minggu Ini
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Bulan Ini
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Tahun Ini
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="-mt-[8px] -mb-[20px] ltr:-ml-[13px] rtl:-mr-[13px]">
                                <div id="pmProjectsProgressChart"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="lg:col-span-2">

                    <!-- My Tasks -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
    
                        <!-- Header -->
                        <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                            <h5 class="!mb-0">Aktivitas Terbaru</h5>

                            <select class="bg-transparent border border-gray-200 dark:border-[#172036] text-sm px-2 py-1 rounded-md">
                                <option>Hari Ini</option>
                                <option>Minggu Ini</option>
                                <option>Bulan Ini</option>
                            </select>
                        </div>

                        <!-- Content -->
                        <div class="trezo-card-content space-y-[20px]">

                            <!-- Item 1 -->
                            <div class="flex items-start gap-[12px]">
                                <img src="assets/images/users/user15.jpg" class="w-[40px] h-[40px] rounded-full" />
                                <div>
                                    <p class="text-sm">
                                        <span class="font-medium">Lisa Putri</span> mengumpulkan laporan mingguan
                                        
                                    </p>
                                    <span class="text-xs text-gray-400">1 jam yang lalu</span>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="flex items-start gap-[12px]">
                                <img src="assets/images/users/user5.jpg" class="w-[40px] h-[40px] rounded-full" />
                                <div>
                                    <p class="text-sm">
                                        <span class="font-medium">Budi Santoso</span> menyelesaikan tugas <span class="text-primary-500">UI Design</span>
                                    </p>
                                    <span class="text-xs text-gray-400">3 jam yang lalu</span>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="flex items-start gap-[12px]">
                                <img src="assets/images/users/user1.jpg" class="w-[40px] h-[40px] rounded-full" />
                                <div>
                                    <p class="text-sm">
                                        <span class="font-medium">Maya Rahmawati</span> meminta revisi tugas
                                    </p>
                                    <span class="text-xs text-gray-400">5 jam yang lalu</span>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="flex items-start gap-[12px]">
                                <img src="assets/images/users/user11.jpg" class="w-[40px] h-[40px] rounded-full" />
                                <div>
                                    <p class="text-sm">
                                        <span class="font-medium">Tim A</span> hampir mencapai deadline project
                                    </p>
                                    <span class="text-xs text-red-400">Deadline besok</span>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="flex items-start gap-[12px]">
                                <img src="assets/images/users/user10.jpg" class="w-[40px] h-[40px] rounded-full" />
                                <div>
                                    <p class="text-sm">
                                        <span class="font-medium">Rizki Pratama</span> mendapatkan penilaian dari mentor
                                    </p>
                                    <span class="text-xs text-gray-400">1 hari yang lalu</span>
                                </div>
                            </div>

                        </div>

                        <!-- Footer -->
                        <div class="mt-[20px] text-center">
                            <button class="text-primary-500 text-sm hover:underline">
                                Lihat Semua Aktivitas
                            </button>
                        </div>

                    </div>

                </div>
            </div>

            <!-- All Projects -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">
                            Daftar Intern
                        </h5>
                    </div>
                </div>
                <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                    <div class="table-responsive overflow-x-auto">
                        <table class="w-full">
                            <thead class="text-black dark:text-white">
                                <tr>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Nama
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Tim
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Progress
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Status
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="assets/images/users/user17.jpg" />
                                            </div>
                                        </div>
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Lisa Putri
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <a href="project-overview.html" class="inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500">
                                            Project CyberSphere
                                        </a>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                            Project Selesai
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Selesai Mangang
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="assets/images/users/user7.jpg" />
                                            </div>
                                        </div>
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Iwan Setiawan
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <a href="project-overview.html" class="inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500">
                                            Digital Oasis Initiative
                                        </a>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs">
                                            Project masih berjalan
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Masih Magang
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="assets/images/users/user19.jpg" />
                                            </div>
                                        </div>
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Aryok Pratama
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <a href="project-overview.html" class="inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500">
                                            CloudScape Evolution
                                        </a>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs">
                                            Project di cancel
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Keluar Dari Magang
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="assets/images/users/user13.jpg" />
                                            </div>
                                        </div>
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Furina Sari
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <a href="project-overview.html" class="inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500">
                                            Data Dynamo Drive
                                        </a>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                            Project Selesai
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Selesai Magang
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="assets/images/users/user15.jpg" />
                                            </div>
                                        </div>
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Bowok Sawit
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <a href="project-overview.html" class="inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500">
                                            QuantumLeap Quest
                                        </a>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                            Project Selesai
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Selesai Magang
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="px-[20px] md:px-[25px] pt-[12px] md:pt-[14px] sm:flex sm:items-center justify-between">
                        <p class="!mb-0 text-sm">
                            Showing 5 of 36 results
                        </p>
                        <ol class="mt-[10px] sm:mt-0">
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    <span class="opacity-0">
                                        0
                                    </span>
                                    <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                        chevron_left
                                    </i>
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white">
                                    1
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    2
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    3
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    4
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    <span class="opacity-0">
                                        0
                                    </span>
                                    <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                        chevron_right
                                    </i>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="bg-white dark:bg-[#0c1427] rounded-t-md px-[20px] md:px-[25px] py-[15px] md:py-[20px] text-center">
                <p>
                    © <span class="text-purple-500">Trezo</span> is Proudly Owned by <a href="https://envytheme.com/" target="_blank" class="text-primary-500 transition-all hover:underline">EnvyTheme</a>
                </p>
            </footer>
            
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