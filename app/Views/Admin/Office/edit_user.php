<!DOCTYPE html>
<html dir="ltr">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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


            <!-- Settings -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content">
                    <ul class="mb-[10px]">
                        <li class="inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0">
                            <a href="edit_user.html" class="block rounded-md font-medium py-[8.5px] px-[15px] text-primary-500 border border-primary-500 transition-all bg-primary-500 text-white">
                                Edit data
                            </a>
                        </li>
                        <li class="inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0">
                            <a href="akses.html" class="block rounded-md font-medium py-[8.5px] px-[15px] text-primary-500 border border-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                                Akses
                            </a>
                        </li>
                    </ul>
                    <form>
                        <h5 class="!text-lg !mb-[6px]">
                            Profile
                        </h5>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px] md:gap-[25px]">
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Nama depan
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="Olivia">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Nama belakang
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="John">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Email
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="olivia@trezo.com">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Nomor HP
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="+1 444 555 6699">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Alamat
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="84 S. Arrowhead Court Branford">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Tanggal Lahir
                                </label>
                                <input type="date" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="1987-01-08">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Jenis Kelamin
                                </label>
                                <select class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500 text-black dark:text-white">
                                    <option>
                                        Select
                                    </option>
                                    <option value="1" selected>
                                        Laki-laki
                                    </option>
                                    <option value="2">
                                        Perempuan
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    User
                                </label>
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
                                    <option value="3">
                                        Internship
                                    </option>
                                </select>
                            </div>
                        <div class="mt-[20px] md:mt-[25px]">
                            <button type="button" class="font-medium inline-block transition-all rounded-md md:text-md ltr:mr-[15px] rtl:ml-[15px] py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-danger-500 text-white hover:bg-danger-400">
                                Batal
                            </button>
                            <button type="button" class="font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-primary-500 text-white hover:bg-primary-400">
                                <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
                                    <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Perbarui
                                </span>
                            </button>
                        </div>
                    </form>
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