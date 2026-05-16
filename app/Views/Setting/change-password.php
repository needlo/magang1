<!DOCTYPE html>
<html dir="ltr">
    <?php
    $segment1 = service('uri')->getSegment(1);
    $segment2 = service('uri')->getSegment(2);
    ?>
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Links Of CSS File -->
        <link rel="stylesheet" href=<?=base_url("assets/css/remixicon.css")?>>
        <link rel="stylesheet" href=<?=base_url("assets/css/apexcharts.css")?>>
        <link rel="stylesheet" href=<?=base_url("assets/css/simplebar.css")?>>
        <link rel="stylesheet" href=<?=base_url("assets/css/prism.css")?>>
        <link rel="stylesheet" href=<?=base_url("assets/css/jsvectormap.min.css")?>>
        <link rel="stylesheet" href=<?=base_url("assets/css/swiper-bundle.min.css")?>>
        <link rel="stylesheet" href=<?=base_url("assets/css/quill.snow.css")?>>
        <link rel="stylesheet" href=<?=base_url("assets/css/style.css")?>>

        <!-- Favicon -->
		<link rel="icon" type="image/png" href=<?= base_url("assets/images/OtwLogo.png") ?>>

        <!-- Title -->
        <title>Ubah Kata Sandi</title>

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

            <!-- Breadcrumb -->
            <div class="mb-[25px] md:flex items-center justify-between">
                <h5 class="!mb-0">
                    Ubah Kata Sandi
                </h5>
            </div>
            <ul class="mb-[10px]">
                <li class="inline-block mb-[15px]">
                    <a href="<?= base_url('setting') ?>"
                        class="inline-block border border-primary-500 rounded-md px-[15px] py-[8.5px] transition-all <?= ($segment1 == 'setting' && !$segment2) ? 'bg-primary-500 text-white' : 'text-primary-500 hover:bg-primary-500 hover:text-white'?>">
                        Account Settings
                    </a>
                </li>
                <li class="inline-block mb-[15px]">
                    <a href="<?= base_url('setting/ganti-password') ?>" class="inline-block border border-primary-500 rounded-md px-[15px] py-[8.5px] transition-all <?= ($segment2 == 'ganti-password') ? 'bg-primary-500 text-white' : 'text-primary-500 hover:bg-primary-500 hover:text-white' ?>">
                        Change Password
                    </a>
                </li>
            </ul>
            <!-- Settings -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content">
                    <form>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px] md:gap-[25px]">
                            <div class="relative" id="passwordHideShow">
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Password Lama
                                </label>
                                <input type="password" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" id="password" placeholder="Ketik password">
                                <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] bottom-[13px] transition-all hover:text-primary-500" id="toggleButton" type="button">
                                    <i class="ri-eye-off-line"></i>
                                </button>
                            </div>
                            <div class="relative" id="passwordHideShow2">
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Password Baru
                                </label>
                                <input type="password" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" id="password2" placeholder="Ketik password">
                                <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] bottom-[13px] transition-all hover:text-primary-500" id="toggleButton2" type="button">
                                    <i class="ri-eye-off-line"></i>
                                </button>
                            </div>
                            <div class="sm:col-span-2 relative" id="passwordHideShow3">
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Konfirmasi Password
                                </label>
                                <input type="password" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" id="password3" placeholder="Ketik password">
                                <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] bottom-[13px] transition-all hover:text-primary-500" id="toggleButton3" type="button">
                                    <i class="ri-eye-off-line"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mt-[20px] md:mt-[25px]">
                            <button type="button" class="font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-primary-500 text-white hover:bg-primary-400">
                                <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
                                    <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Ganti Password
                                </span>
                            </button>
                            <a href="forgot-password.html" class="inline-block text-danger-500 ltr:ml-[23px] rtl:mr-[23px]">
                                Lupa Password?
                            </a>
                        </div>
                    </form>
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