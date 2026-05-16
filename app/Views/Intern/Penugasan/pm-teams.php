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
    <title>Penugasan Intern</title>

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
    <div class="main-content flex flex-col transition-all relative ltr:ml-[260px] rtl:mr-[260px] pt-[75px] md:pt-[85px] lg:pt-[95px] px-[20px] md:px-[25px] lg:px-[30px] min-h-screen"
        id="main-content">

        <div class="flex items-center justify-between mb-[20px] md:mb-[25px]">
            <div>
                <h3 class="text-[18px] md:text-[20px] font-semibold text-black dark:text-white mb-[5px]">
                    Penugasan Intern
                </h3>
                <p class="text-gray-500 dark:text-gray-400 text-[14px]">
                    Daftar kelas penugasan yang tersedia. Gabung dan kerjakan bersama tim Anda.
                </p>
            </div>
            <div class="flex items-center gap-[10px]">
                <select
                    class="bg-white dark:bg-[#0c1427] border border-gray-100 dark:border-[#172036] text-black dark:text-white text-[14px] rounded-md px-[15px] py-[8px] outline-none transition-all hover:border-primary-500 cursor-pointer">
                    <option value="all">Semua Kelas</option>
                    <option value="joined">Kelas Saya (Sudah Gabung)</option>
                    <option value="available">Tersedia (Belum Gabung)</option>
                    <option value="active">Sedang Berjalan</option>
                    <option value="completed">Selesai</option>
                </select>
            </div>
        </div>

        <!-- Kelas -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-[25px] mb-[25px]">

            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="assets/images/users/user11.jpg" alt="user-image"
                                class="w-[65px] h-[65px] rounded-full border-[2px] border-gray-100 dark:border-[#172036]">
                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                <span class="text-md inline-block mb-px font-medium text-black dark:text-white">
                                    Ava Turner
                                </span>
                                <span class="block">
                                    Team Leader
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-[15px]">
                        <span
                            class="inline-block font-medium bg-purple-100 dark:bg-[#15203c] text-black dark:text-white rounded-full px-[15px] py-[4.5px] mb-[15px]">
                            Project Management
                        </span>
                        <span class="block mb-[8px]">
                            Team Members
                        </span>
                        <div class="flex items-center justify-center">
                            <img src="assets/images/users/user15.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            <img src="assets/images/users/user16.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            <img src="assets/images/users/user17.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            <div
                                class="rounded-full w-[40px] h-[40px] font-medium text-xs border-[2px] border-gray-100 dark:border-[#172036] bg-primary-500 text-white flex items-center justify-center -mx-[6px]">
                                +4
                            </div>
                        </div>
                    </div>
                    <div class="mt-[18px] mb-[20px] md:mb-[25px] lg:mb-[30px]">
                        <div class="flex items-center justify-between">
                            <span class="block font-medium mb-[8px]">
                                Progress
                            </span>
                            <span class="block font-medium mb-[8px]">
                                85%
                            </span>
                        </div>
                        <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                            <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md"
                                style="width: 85%;"></div>
                        </div>
                    </div>
                    <a href=<?= base_url("penugasan/view") ?> class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                        Lihat Kelas
                    </a>
                </div>

            </div>
            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="assets/images/users/user12.jpg" alt="user-image"
                                class="w-[65px] h-[65px] rounded-full border-[2px] border-gray-100 dark:border-[#172036]">
                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                <span class="text-md inline-block mb-px font-medium text-black dark:text-white">
                                    Ethan Parker
                                </span>
                                <span class="block">
                                    Team Leader
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="text-center mt-[15px]">
                        <span
                            class="inline-block font-medium bg-secondary-100 dark:bg-[#15203c] text-black dark:text-white rounded-full px-[15px] py-[4.5px] mb-[15px]">
                            eCommerce Theme
                        </span>
                        <span class="block mb-[8px]">
                            Team Members
                        </span>
                        <div class="flex items-center justify-center">
                            <img src="assets/images/users/user6.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            <img src="assets/images/users/user7.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            <img src="assets/images/users/user8.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                        </div>
                    </div>
                    <div class="mt-[18px] mb-[20px] md:mb-[25px] lg:mb-[30px]">
                        <div class="flex items-center justify-between">
                            <span class="block font-medium mb-[8px]">
                                Progress
                            </span>
                            <span class="block font-medium mb-[8px]">
                                45%
                            </span>
                        </div>
                        <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                            <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md"
                                style="width: 45%;"></div>
                        </div>
                    </div>
                    <a href=<?= base_url("to-do-list") ?> class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                        Lihat Kelas
                    </a>
                </div>
            </div>

            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="assets/images/users/user13.jpg" alt="user-image"
                                class="w-[65px] h-[65px] rounded-full border-[2px] border-gray-100 dark:border-[#172036]">
                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                <span class="text-md inline-block mb-px font-medium text-black dark:text-white">
                                    Isabella Lee
                                </span>
                                <span class="block">
                                    Team Leader
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-[15px]">
                        <span
                            class="inline-block font-medium bg-success-100 dark:bg-[#15203c] text-black dark:text-white rounded-full px-[15px] py-[4.5px] mb-[15px]">
                            Shopify Theme Dev
                        </span>
                        <span class="block mb-[8px]">
                            Team Members
                        </span>
                        <div class="flex items-center justify-center">
                            <img src="assets/images/users/user10.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            <img src="assets/images/users/user11.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                        </div>
                    </div>
                    <div class="mt-[18px] mb-[20px] md:mb-[25px] lg:mb-[30px]">
                        <div class="flex items-center justify-between">
                            <span class="block font-medium mb-[8px]">
                                Progress
                            </span>
                            <span class="block font-medium mb-[8px]">
                                70%
                            </span>
                        </div>
                        <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                            <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md"
                                style="width: 70%;"></div>
                        </div>
                    </div>
                    <a href="to-do-list.html"
                        class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                        Lihat Kelas
                    </a>
                </div>

            </div>
            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="assets/images/users/user14.jpg" alt="user-image"
                                class="w-[65px] h-[65px] rounded-full border-[2px] border-gray-100 dark:border-[#172036]">
                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                <span class="text-md inline-block mb-px font-medium text-black dark:text-white">
                                    Thompson Torres
                                </span>
                                <span class="block">
                                    Team Leader
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-[15px]">
                        <span
                            class="inline-block font-medium bg-orange-100 dark:bg-[#15203c] text-black dark:text-white rounded-full px-[15px] py-[4.5px] mb-[15px]">
                            Oito - HTML
                        </span>
                        <span class="block mb-[8px]">
                            Team Members
                        </span>
                        <div class="flex items-center justify-center">
                            <img src="assets/images/users/user30.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            <img src="assets/images/users/user29.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            <img src="assets/images/users/user28.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                        </div>
                    </div>
                    <div class="mt-[18px] mb-[20px] md:mb-[25px] lg:mb-[30px]">
                        <div class="flex items-center justify-between">
                            <span class="block font-medium mb-[8px]">
                                Progress
                            </span>
                            <span class="block font-medium mb-[8px]">
                                90%
                            </span>
                        </div>
                        <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                            <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md"
                                style="width: 90%;"></div>
                        </div>
                    </div>
                    <a href="to-do-list.html"
                        class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                        Lihat Kelas
                    </a>
                </div>
            </div>

            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="assets/images/users/user15.jpg" alt="user-image"
                                class="w-[65px] h-[65px] rounded-full border-[2px] border-gray-100 dark:border-[#172036]">
                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                <span class="text-md inline-block mb-px font-medium text-black dark:text-white">
                                    Lucas Lyon
                                </span>
                                <span class="block">
                                    Team Leader
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-[15px]">
                        <span
                            class="inline-block font-medium bg-primary-100 dark:bg-[#15203c] text-black dark:text-white rounded-full px-[15px] py-[4.5px] mb-[15px]">
                            Tanus - Template
                        </span>
                        <span class="block mb-[8px]">
                            Team Members
                        </span>
                        <div class="flex items-center justify-center">
                            <img src="assets/images/users/user25.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            <img src="assets/images/users/user26.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            <img src="assets/images/users/user27.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                        </div>
                    </div>
                    <div class="mt-[18px] mb-[20px] md:mb-[25px] lg:mb-[30px]">
                        <div class="flex items-center justify-between">
                            <span class="block font-medium mb-[8px]">
                                Progress
                            </span>
                            <span class="block font-medium mb-[8px]">
                                75%
                            </span>
                        </div>
                        <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                            <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md"
                                style="width: 75%;"></div>
                        </div>
                    </div>
                    <a href="to-do-list.html"
                        class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                        Lihat Kelas
                    </a>
                </div>
            </div>

            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="assets/images/users/user16.jpg" alt="user-image"
                                class="w-[65px] h-[65px] rounded-full border-[2px] border-gray-100 dark:border-[#172036]">
                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                <span class="text-md inline-block mb-px font-medium text-black dark:text-white">
                                    Morgan Sturges
                                </span>
                                <span class="block">
                                    Team Leader
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-[15px]">
                        <span
                            class="inline-block font-medium bg-danger-100 dark:bg-[#15203c] text-black dark:text-white rounded-full px-[15px] py-[4.5px] mb-[15px]">
                            Delft - TypeScript
                        </span>
                        <span class="block mb-[8px]">
                            Team Members
                        </span>
                        <div class="flex items-center justify-center">
                            <img src="assets/images/users/user24.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                        </div>
                    </div>
                    <div class="mt-[18px] mb-[20px] md:mb-[25px] lg:mb-[30px]">
                        <div class="flex items-center justify-between">
                            <span class="block font-medium mb-[8px]">
                                Progress
                            </span>
                            <span class="block font-medium mb-[8px]">
                                65%
                            </span>
                        </div>
                        <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                            <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md"
                                style="width: 65%;"></div>
                        </div>
                    </div>
                    <a href="to-do-list.html"
                        class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                        Lihat Kelas
                    </a>
                </div>
            </div>

            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="assets/images/users/user17.jpg" alt="user-image"
                                class="w-[65px] h-[65px] rounded-full border-[2px] border-gray-100 dark:border-[#172036]">
                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                <span class="text-md inline-block mb-px font-medium text-black dark:text-white">
                                    Sophia McNeel
                                </span>
                                <span class="block">
                                    Team Leader
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-[15px]">
                        <span
                            class="inline-block font-medium bg-primary-100 dark:bg-[#15203c] text-black dark:text-white rounded-full px-[15px] py-[4.5px] mb-[15px]">
                            Trezo - Angular
                        </span>
                        <span class="block mb-[8px]">
                            Team Members
                        </span>
                        <div class="flex items-center justify-center">
                            <img src="assets/images/users/user21.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            <img src="assets/images/users/user22.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            <img src="assets/images/users/user23.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                        </div>
                    </div>
                    <div class="mt-[18px] mb-[20px] md:mb-[25px] lg:mb-[30px]">
                        <div class="flex items-center justify-between">
                            <span class="block font-medium mb-[8px]">
                                Progress
                            </span>
                            <span class="block font-medium mb-[8px]">
                                90%
                            </span>
                        </div>
                        <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                            <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md"
                                style="width: 90%;"></div>
                        </div>
                    </div>
                    <a href="to-do-list.html"
                        class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                        Lihat Kelas
                    </a>
                </div>
            </div>

            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="assets/images/users/user18.jpg" alt="user-image"
                                class="w-[65px] h-[65px] rounded-full border-[2px] border-gray-100 dark:border-[#172036]">
                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                <span class="text-md inline-block mb-px font-medium text-black dark:text-white">
                                    Rodriguez Meade
                                </span>
                                <span class="block">
                                    Team Leader
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-[15px]">
                        <span
                            class="inline-block font-medium bg-purple-100 dark:bg-[#15203c] text-black dark:text-white rounded-full px-[15px] py-[4.5px] mb-[15px]">
                            eLearniv - React
                        </span>
                        <span class="block mb-[8px]">
                            Team Members
                        </span>
                        <div class="flex items-center justify-center">
                            <img src="assets/images/users/user19.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            <img src="assets/images/users/user20.jpg" alt="user-image"
                                class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                        </div>
                    </div>
                    <div class="mt-[18px] mb-[20px] md:mb-[25px] lg:mb-[30px]">
                        <div class="flex items-center justify-between">
                            <span class="block font-medium mb-[8px]">
                                Progress
                            </span>
                            <span class="block font-medium mb-[8px]">
                                80%
                            </span>
                        </div>
                        <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                            <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md"
                                style="width: 80%;"></div>
                        </div>
                    </div>
                    <a href="to-do-list.html"
                        class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                        Lihat Kelas
                    </a>
                </div>
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
                            <a href="pm-teams.html"
                                class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                <span class="opacity-0">
                                    0
                                </span>
                                <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                    chevron_left
                                </i>
                            </a>
                        </li>
                        <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                            <a href="pm-teams.html"
                                class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white">
                                1
                            </a>
                        </li>
                        <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                            <a href="pm-teams.html"
                                class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                2
                            </a>
                        </li>
                        <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                            <a href="pm-teams.html"
                                class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                3
                            </a>
                        </li>
                        <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                            <a href="pm-teams.html"
                                class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                4
                            </a>
                        </li>
                        <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                            <a href="pm-teams.html"
                                class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
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