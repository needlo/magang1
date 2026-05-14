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
		<link rel="icon" type="image/png" href="<?= base_url('assets/images/OtwLogo.png') ?>">

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
        <?= $this->include('Layout/header') ?>
        <!-- End Header -->

        <!-- Main Content -->
        <div class="main-content transition-all flex flex-col overflow-hidden min-h-screen" id="main-content">

            <!-- Breadcrumb -->
            <div class="mb-[25px] md:flex items-center justify-between">
                <h5 class="!mb-0">
                    
                </h5>
                <ol class="breadcrumb mt-[12px] md:mt-0">
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        <a href="project-management-index.html" class="inline-block relative ltr:pl-[22px] rtl:pr-[22px] transition-all hover:text-primary-500">
                            <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-lg -mt-px text-primary-500 top-1/2 -translate-y-1/2">
                                home
                            </i>
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Penilaian
                    </li>
                </ol>
            </div>

            <!-- Kelompok Penilaian -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-[25px] mb-[25px]">              
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[25px] rounded-md">
                    <div class="flex items-center justify-between mb-[20px]">
                        <div>
                            <h4 class="text-[18px] font-semibold text-black dark:text-white">
                                Project Management System
                            </h4>

                            <span class="text-gray-500">
                                Mentor : Budi Santoso
                            </span>
                        </div>

                        <span class="bg-success-100 text-success-600 px-[12px] py-[4px] rounded-full text-xs font-medium">
                            Active
                        </span>
                    </div>

                    <div class="grid grid-cols-3 gap-[15px] mb-[20px]">

                        <div class="bg-primary-50 dark:bg-[#15203c] rounded-md p-[15px]">
                            <span class="block text-gray-500 text-sm">
                                Intern
                            </span>

                            <h5 class="text-[20px] font-semibold mt-[5px]">
                                12
                            </h5>
                        </div>

                        <div class="bg-primary-50 dark:bg-[#15203c] rounded-md p-[15px]">
                            <span class="block text-gray-500 text-sm">
                                Tugas
                            </span>

                            <h5 class="text-[20px] font-semibold mt-[5px]">
                                24
                            </h5>
                        </div>

                        <div class="bg-primary-50 dark:bg-[#15203c] rounded-md p-[15px]">
                            <span class="block text-gray-500 text-sm">
                                Progress
                            </span>

                            <h5 class="text-[20px] font-semibold mt-[5px]">
                                85%
                            </h5>
                        </div>

                    </div>

                    <div class="mb-[20px]">
                        <div class="flex justify-between mb-[8px]">
                            <span class="text-sm">Progress</span>
                            <span class="text-sm font-medium">85%</span>
                        </div>

                        <div class="w-full h-[6px] bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-primary-500 rounded-full" style="width:85%"></div>
                        </div>
                    </div>

                    <a href="<?= base_url('pm-users.html') ?>"
                    class="block text-center bg-primary-500 hover:bg-primary-400 transition-all text-white rounded-md py-[10px] font-medium">

                        Lihat Penilaian

                    </a>

                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[25px] rounded-md">
                    <div class="flex items-center justify-between mb-[20px]">
                        <div>
                            <h4 class="text-[18px] font-semibold text-black dark:text-white">
                                Project Management System
                            </h4>

                            <span class="text-gray-500">
                                Mentor : Budi Santoso
                            </span>
                        </div>

                        <span class="bg-success-100 text-success-600 px-[12px] py-[4px] rounded-full text-xs font-medium">
                            Active
                        </span>
                    </div>

                    <div class="grid grid-cols-3 gap-[15px] mb-[20px]">

                        <div class="bg-primary-50 dark:bg-[#15203c] rounded-md p-[15px]">
                            <span class="block text-gray-500 text-sm">
                                Intern
                            </span>

                            <h5 class="text-[20px] font-semibold mt-[5px]">
                                12
                            </h5>
                        </div>

                        <div class="bg-primary-50 dark:bg-[#15203c] rounded-md p-[15px]">
                            <span class="block text-gray-500 text-sm">
                                Tugas
                            </span>

                            <h5 class="text-[20px] font-semibold mt-[5px]">
                                24
                            </h5>
                        </div>

                        <div class="bg-primary-50 dark:bg-[#15203c] rounded-md p-[15px]">
                            <span class="block text-gray-500 text-sm">
                                Progress
                            </span>

                            <h5 class="text-[20px] font-semibold mt-[5px]">
                                85%
                            </h5>
                        </div>

                    </div>

                    <div class="mb-[20px]">
                        <div class="flex justify-between mb-[8px]">
                            <span class="text-sm">Progress</span>
                            <span class="text-sm font-medium">85%</span>
                        </div>

                        <div class="w-full h-[6px] bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-primary-500 rounded-full" style="width:85%"></div>
                        </div>
                    </div>

                    <a href="penilaian-detail.html"
                    class="block text-center bg-primary-500 hover:bg-primary-400 transition-all text-white rounded-md py-[10px] font-medium">

                        Lihat Penilaian

                    </a>

                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[25px] rounded-md">
                    <div class="flex items-center justify-between mb-[20px]">
                        <div>
                            <h4 class="text-[18px] font-semibold text-black dark:text-white">
                                Project Management System
                            </h4>

                            <span class="text-gray-500">
                                Mentor : Budi Santoso
                            </span>
                        </div>

                        <span class="bg-success-100 text-success-600 px-[12px] py-[4px] rounded-full text-xs font-medium">
                            Active
                        </span>
                    </div>

                    <div class="grid grid-cols-3 gap-[15px] mb-[20px]">

                        <div class="bg-primary-50 dark:bg-[#15203c] rounded-md p-[15px]">
                            <span class="block text-gray-500 text-sm">
                                Intern
                            </span>

                            <h5 class="text-[20px] font-semibold mt-[5px]">
                                12
                            </h5>
                        </div>

                        <div class="bg-primary-50 dark:bg-[#15203c] rounded-md p-[15px]">
                            <span class="block text-gray-500 text-sm">
                                Tugas
                            </span>

                            <h5 class="text-[20px] font-semibold mt-[5px]">
                                24
                            </h5>
                        </div>

                        <div class="bg-primary-50 dark:bg-[#15203c] rounded-md p-[15px]">
                            <span class="block text-gray-500 text-sm">
                                Progress
                            </span>

                            <h5 class="text-[20px] font-semibold mt-[5px]">
                                85%
                            </h5>
                        </div>

                    </div>

                    <div class="mb-[20px]">
                        <div class="flex justify-between mb-[8px]">
                            <span class="text-sm">Progress</span>
                            <span class="text-sm font-medium">85%</span>
                        </div>

                        <div class="w-full h-[6px] bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-primary-500 rounded-full" style="width:85%"></div>
                        </div>
                    </div>

                    <a href="penilaian-detail.html"
                    class="block text-center bg-primary-500 hover:bg-primary-400 transition-all text-white rounded-md py-[10px] font-medium">

                        Lihat Penilaian

                    </a>

                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[25px] rounded-md">
                    <div class="flex items-center justify-between mb-[20px]">
                        <div>
                            <h4 class="text-[18px] font-semibold text-black dark:text-white">
                                Project Management System
                            </h4>

                            <span class="text-gray-500">
                                Mentor : Budi Santoso
                            </span>
                        </div>

                        <span class="bg-success-100 text-success-600 px-[12px] py-[4px] rounded-full text-xs font-medium">
                            Active
                        </span>
                    </div>

                    <div class="grid grid-cols-3 gap-[15px] mb-[20px]">

                        <div class="bg-primary-50 dark:bg-[#15203c] rounded-md p-[15px]">
                            <span class="block text-gray-500 text-sm">
                                Intern
                            </span>

                            <h5 class="text-[20px] font-semibold mt-[5px]">
                                12
                            </h5>
                        </div>

                        <div class="bg-primary-50 dark:bg-[#15203c] rounded-md p-[15px]">
                            <span class="block text-gray-500 text-sm">
                                Tugas
                            </span>

                            <h5 class="text-[20px] font-semibold mt-[5px]">
                                24
                            </h5>
                        </div>

                        <div class="bg-primary-50 dark:bg-[#15203c] rounded-md p-[15px]">
                            <span class="block text-gray-500 text-sm">
                                Progress
                            </span>

                            <h5 class="text-[20px] font-semibold mt-[5px]">
                                85%
                            </h5>
                        </div>

                    </div>

                    <div class="mb-[20px]">
                        <div class="flex justify-between mb-[8px]">
                            <span class="text-sm">Progress</span>
                            <span class="text-sm font-medium">85%</span>
                        </div>

                        <div class="w-full h-[6px] bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-primary-500 rounded-full" style="width:85%"></div>
                        </div>
                    </div>

                    <a href="penilaian-detail.html"
                    class="block text-center bg-primary-500 hover:bg-primary-400 transition-all text-white rounded-md py-[10px] font-medium">

                        Lihat Penilaian

                    </a>

                </div>
            </div>

            <!-- Pagination -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content">
                    <div class="sm:flex sm:items-center justify-between">
                        <p class="!mb-0">
                            Showing 8 of 36 results
                        </p>
                        <ol class="mt-[10px] sm:mt-0">
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-teams.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    <span class="opacity-0">
                                        0
                                    </span>
                                    <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                        chevron_left
                                    </i>
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-teams.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white">
                                    1
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-teams.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    2
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-teams.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    3
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-teams.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    4
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-teams.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
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

            <div class="grow"></div>

            <!-- Footer -->
            <footer class="bg-white dark:bg-[#0c1427] rounded-t-md px-[20px] md:px-[25px] py-[15px] md:py-[20px] text-center">
                <p>
                    © <span class="text-purple-500">Trezo</span> is Proudly Owned by <a href="https://envytheme.com/" target="_blank" class="text-primary-500 transition-all hover:underline">EnvyTheme</a>
                </p>
            </footer>
            
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