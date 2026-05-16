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
        <title>Daftar</title>

        <!-- Font Family -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

        <!-- Material Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    </head>
    <body>

        <!-- Light/Dark Mode Button -->
        <button type="button" class="light-dark-toggle leading-none inline-block transition-all text-[#fe7a36] absolute top-[20px] md:top-[25px] ltr:right-[20px] rtl:left-[20px] ltr:md:right-[25px] rtl:md:left-[25px]" id="light-dark-toggle">
            <i class="material-symbols-outlined !text-[20px] md:!text-[22px]">
                light_mode
            </i>
        </button>
        <!-- End Light/Dark Mode Button -->

        <!-- Sign Up -->
        <div class="bg-white dark:bg-[#0a0e19] py-[60px] md:py-[80px] lg:py-[120px] xl:py-[135px]">
            <div class="mx-auto px-[12.5px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1255px]">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">
                    <div class="xl:ltr:-mr-[25px] xl:rtl:-ml-[25px] 2xl:ltr:-mr-[45px] 2xl:rtl:-ml-[45px] rounded-[25px] order-2 lg:order-1">
                        <img src=<?= base_url("assets/images/login-photo.webp") ?> alt="sign-up-image" class="rounded-[25px]">
                    </div>
                    <div class="xl:ltr:pl-[90px] xl:rtl:pr-[90px] 2xl:ltr:pl-[120px] 2xl:rtl:pr-[120px] order-1 lg:order-2">
                        <img src=<?= base_url("assets/images/otw.ico") ?> class="h-[50px] w-[200px]" alt="logo">

                        <div class="my-[17px] md:my-[25px]">
                            <h1 class="!font-semibold !text-[22px] md:!text-xl lg:!text-2xl !mb-[5px] md:!mb-[7px]">
                                Selamat Datang di CV. OTW Computer Gusaha!
                            </h1>
                            <p class="font-medium lg:text-md text-[#445164] dark:text-gray-400">
                                Buat akun baru dengan email google anda!
                            </p>
                        </div>
                        <div class="flex items-center justify-between mb-[20px] md:mb-[23px] gap-[12px]">
                            <div class="grow">
                                <button type="button" class="block text-center w-full rounded-md transition-all py-[8px] md:py-[10.5px] px-[15px] md:px-[25px] text-black dark:text-white border border-[#D6DAE1] bg-white dark:bg-[#0a0e19] dark:border-[#172036] shadow-sm hover:border-primary-500">
                                    <img src=<?= base_url("assets/images/icons/google.svg") ?> class="inline-block" alt="google">
                                </button>
                            </div>
                        </div>
                        <div class="mb-[15px] relative">
                            <label class="mb-[10px] md:mb-[12px] text-black dark:text-white font-medium block">
                                Nama Lengkap
                            </label>
                            <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="Masukkan nama lengkap anda">
                        </div>
                        <div class="mb-[15px] relative">
                            <label class="mb-[10px] md:mb-[12px] text-black dark:text-white font-medium block">
                                Alamat Email
                            </label>
                            <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="Masukkan alamat email anda">
                        </div>
                        <div class="mb-[15px] relative" id="passwordHideShow">
                            <label class="mb-[10px] md:mb-[12px] text-black dark:text-white font-medium block">
                                Kata Sandi
                            </label>
                            <input type="password" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" id="password" placeholder="Masukkan kata sandi anda">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] bottom-[12px] transition-all hover:text-primary-500" id="toggleButton" type="button">
                                <i class="ri-eye-off-line"></i>
                            </button>
                        </div>
                        <button type="submit" class="md:text-md block w-full text-center transition-all rounded-md font-medium my-[20px] md:my-[25px] py-[12px] px-[25px] text-white bg-primary-500 hover:bg-primary-400">
                            <a href=<?= base_url("login") ?>>
                            <span class="flex items-center justify-center gap-[5px]">     
                                <i class="material-symbols-outlined">
                                    person_4
                                </i>
                                Daftar
                                
                            </span>
                            </a>
                        </button>
                        <p class="!leading-[1.6]">
                            Dengan mengonfirmasi email Anda, Anda setuju dengan <a href="#" class="font-medium text-black dark:text-white transition-all hover:text-primary-500">Syarat Layanan</a>  dan bahwa Anda telah membaca dan memahami <a href="#" class="font-medium text-black dark:text-white transition-all hover:text-primary-500">Kebijakan Privasi</a> kami
                        </p>
                        <p class="!leading-[1.6]">
                            Sudah memiliki akun? <a href=<?= base_url("login") ?> class="text-primary-500 transition-all font-semibold hover:underline">Masuk</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sign Up -->
        
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