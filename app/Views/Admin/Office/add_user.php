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
    <?php echo $this->include('Layout/Sidebar'); ?>
    <!-- End Sidebar -->

        <!-- Header -->
        <?= $this->include('Layout/Header') ?>
        <!-- End Header -->


        <!-- Main Content -->
        <div class="main-content transition-all flex flex-col overflow-hidden min-h-screen" id="main-content">

            <!-- Add User -->
            <form>
                <div class="grid grid-cols-1 xl:grid-cols-5 2xl:grid-cols-3 gap-[25px] mb-[25px]">
                    <div class="xl:col-span-3 2xl:col-span-2">
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px] sm:gap-[25px]">
                                    <div>
                                        <label class="mb-[10px] text-black dark:text-white font-medium block">
                                            ID
                                        </label>
                                        <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="E.g. #JAN-123">
                                    </div>
                                    <div>
                                        <label class="mb-[10px] text-black dark:text-white font-medium block">
                                            Nama
                                        </label>
                                        <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="E.g. Olivia John">
                                    </div>
                                    <div>
                                        <label class="mb-[10px] text-black dark:text-white font-medium block">
                                            Email
                                        </label>
                                        <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="E.g. olivia@trezo.com">
                                    </div>
                                    <div>
                                        <label class="mb-[10px] text-black dark:text-white font-medium block">
                                            Nomor HP
                                        </label>
                                        <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="E.g. +1 555-445-4455">
                                    </div>
                                    <select class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500 text-black dark:text-white">
                                    <option>
                                        Select
                                    </option>
                                    <option value="1" selected>
                                        HR/Admin
                                    </option>
                                    <option value="2">
                                        Mentor
                                    </option>
                                </select>
                                    <div class="sm:col-span-2">
                                        <label class="mb-[10px] text-black dark:text-white font-medium block">
                                            Tambahkan informasi
                                        </label>
                                        <textarea class="h-[140px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] p-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="E.g. It makes me feel..."></textarea>
                                    </div>
                                    <div>
                                        <label class="mb-[10px] text-black dark:text-white font-medium block">
                                            Facebook
                                        </label>
                                        <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="E.g. https://www.facebook.com/">
                                    </div>
                                    <div>
                                        <label class="mb-[10px] text-black dark:text-white font-medium block">
                                            X
                                        </label>
                                        <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="E.g. https://x.com/">
                                    </div>
                                    <div>
                                        <label class="mb-[10px] text-black dark:text-white font-medium block">
                                            Linkedin
                                        </label>
                                        <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="E.g. https://www.linkedin.com/">
                                    </div>
                                    <div>
                                        <label class="mb-[10px] text-black dark:text-white font-medium block">
                                            GitHub
                                        </label>
                                        <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="E.g. https://github.com/">
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label class="mb-[10px] text-black dark:text-white font-medium block">
                                            Foto Profil
                                        </label>
                                        <div id="fileUploader">
                                            <div class="relative flex items-center justify-center overflow-hidden rounded-md py-[88px] px-[20px] border border-gray-200 dark:border-[#172036]">
                                                <div class="flex items-center justify-center">
                                                    <div class="w-[35px] h-[35px] border border-gray-100 dark:border-[#15203c] flex items-center justify-center rounded-md text-primary-500 text-lg ltr:mr-[12px] rtl:ml-[12px]">
                                                        <i class="ri-upload-2-line"></i>
                                                    </div>
                                                    <p class="!leading-[1.5]">
                                                        <strong class="text-black dark:text-white">Click to upload</strong><br> you file here
                                                    </p>
                                                </div>
                                                <input type="file" id="fileInput" class="absolute top-0 left-0 right-0 bottom-0 rounded-md z-[1] opacity-0 cursor-pointer">
                                            </div>
                                            <ul id="fileList"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trezo-card mb-[25px]">
                    <div class="trezo-card-content">
                        <button type="button" onclick="window.location.href='<?= base_url('anggota-office') ?>'" class="font-medium inline-block transition-all rounded-md md:text-md ltr:mr-[15px] rtl:ml-[15px] py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-danger-500 text-white hover:bg-danger-400">
                            Batal
                        </button>
                        <button type="button" class="font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-primary-500 text-white hover:bg-primary-400">
                            <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
                                <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2">
                                    add
                                </i>
                                tambah
                            </span>
                        </button>
                    </div>
                </div>
            </form>

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