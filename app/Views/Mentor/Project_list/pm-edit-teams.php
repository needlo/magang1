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
                    Edit Project
                </h5>
                <ol class="breadcrumb mt-[12px] md:mt-0">
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        <a href="index.html" class="inline-block relative ltr:pl-[22px] rtl:pr-[22px] transition-all hover:text-primary-500">
                            <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-lg -mt-px text-primary-500 top-1/2 -translate-y-1/2">
                                home
                            </i>
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Project Management
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Edit Project
                    </li>
                </ol>
            </div>

            <!-- Edit Project -->
            <form>
                <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px] md:gap-[25px]">
                            <div class="sm:col-span-2">
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Nama Project
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="Task name">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Project ID
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="E.g. #854">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Pilih Mentor
                                </label>
                                <select class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                    <option selected>
                                        Select
                                    </option>
                                    <option value="1">
                                        Walter Frazier
                                    </option>
                                    <option value="2">
                                        Kimberly Anderson
                                    </option>
                                    <option value="3">
                                        Roscoe Guerrero
                                    </option>
                                    <option value="4">
                                        Robert Stewart
                                    </option>
                                    <option value="5">
                                        Dustin Fritch
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Tanggal Mulai
                                </label>
                                <input type="date" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Tanggal Selesai
                                </label>
                                <input type="date" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500">
                            </div>
                            <div class="sm:col-span-2">
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Deskripsi Project
                                </label>
                                <div id="richTextEditor" class="!h-[179px]"></div>
                            </div>
                        </div>
                        <div class="mt-[20px] md:mt-[25px]">
                            <button type="button" class="font-medium inline-block transition-all rounded-md md:text-md ltr:mr-[15px] rtl:ml-[15px] py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-danger-500 text-white hover:bg-danger-400">
                                <a href="pm-teams.html" >
                                    Batal
                                </a>
                            </button>
                            <button type="button" class="font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-primary-500 text-white hover:bg-primary-400">
                                <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
                                    <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2">
                                        add
                                    </i>
                                    Simpan
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

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