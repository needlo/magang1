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
            
            <div class="grid grid-cols-1 2xl:grid-cols-2 gap-[25px] mb-[25px]">

                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Management Anggota
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
                                                person
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block">
                                                Total pendaftar
                                            </span>
                                            <h5 class="!mb-0 !text-[20px] mt-[2px]">
                                                123
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="mt-[15px] sm:mt-[25px] flex items-center justify-between">
                                        <span class="block text-sm">
                                            Pendaftar bulan ini
                                        </span>
                                        <span class="inline-block text-sm text-success-700 py-[1px] px-[8.3px] border border-success-300 bg-success-100 dark:bg-dark dark:border-dark rounded-xl">
                                            +10%
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="bg-purple-50 dark:bg-[#15203c] rounded-md py-[22px] px-[20px]">
                                    <div class="flex items-center">
                                        <div class="text-purple-500 leading-none ltr:mr-[10px] rtl:ml-[10px]">
                                            <i class="material-symbols-outlined !text-5xl">
                                                group
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block">
                                                Anggota
                                            </span>
                                            <h5 class="!mb-0 !text-[20px] mt-[2px]">
                                                225
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="mt-[14px] flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="assets/images/users/user15.jpg" class="rounded-full inline-block w-[34px] h-[34px] ltr:-mr-[14px] rtl:-ml-[14px] border border-white dark:border-dark" alt="user-image">
                                            <img src="assets/images/users/user14.jpg" class="rounded-full inline-block w-[34px] h-[34px] ltr:-mr-[14px] rtl:-ml-[14px] border border-white dark:border-dark" alt="user-image">
                                            <img src="assets/images/users/user13.jpg" class="rounded-full inline-block w-[34px] h-[34px] ltr:-mr-[14px] rtl:-ml-[14px] border border-white dark:border-dark" alt="user-image">
                                            <img src="assets/images/users/user12.jpg" class="rounded-full inline-block w-[34px] h-[34px] ltr:-mr-[14px] rtl:-ml-[14px] border border-white dark:border-dark" alt="user-image">
                                            <span class="w-[34px] h-[34px] rounded-full border border-white dark:border-dark bg-primary-500 text-white font-medium flex items-center justify-center text-xs">
                                                +55
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- Team Members -->
<div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
        <div class="trezo-card-title">
            <h5 class="!mb-0">
                Anggota
            </h5>
        </div>
    </div>

    <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
        <div class="table-responsive overflow-x-auto without-border">
            <table class="w-full">
                <thead class="text-black dark:text-white">
                    <tr>
                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                            Nama
                        </th>

                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                            Email
                        </th>

                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                            User
                        </th>
                    </tr>
                </thead>

                <tbody class="text-black dark:text-white">

                    <!-- Data 1 -->
                    <tr>
                        <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                            <div class="flex items-center">
                                <div class="rounded-full w-[44px]">
                                    <img src="assets/images/users/user6.jpg"
                                        class="inline-block rounded-full"
                                        alt="user-image">
                                </div>

                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                    <span class="font-medium inline-block">
                                        Alex Davis
                                    </span>
                                </div>
                            </div>
                        </td>

                        <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                            alex@gmail.com
                        </td>

                        <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                            Mentor
                        </td>
                    </tr>

                    <!-- Data 2 -->
                    <tr>
                        <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                            <div class="flex items-center">
                                <div class="rounded-full w-[44px]">
                                    <img src="assets/images/users/user7.jpg"
                                        class="inline-block rounded-full"
                                        alt="user-image">
                                </div>

                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                    <span class="font-medium inline-block">
                                        Laura Martinez
                                    </span>
                                </div>
                            </div>
                        </td>

                        <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                            laura@gmail.com
                        </td>

                        <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                            Mentor
                        </td>
                    </tr>

                    <!-- Data 3 -->
                    <tr>
                        <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                            <div class="flex items-center">
                                <div class="rounded-full w-[44px]">
                                    <img src="assets/images/users/user8.jpg"
                                        class="inline-block rounded-full"
                                        alt="user-image">
                                </div>

                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                    <span class="font-medium inline-block">
                                        Mark Thompson
                                    </span>
                                </div>
                            </div>
                        </td>

                        <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                            mark@gmail.com
                        </td>

                        <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                            Mentor
                        </td>
                    </tr>

                    <!-- Data 4 -->
                    <tr>
                        <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                            <div class="flex items-center">
                                <div class="rounded-full w-[44px]">
                                    <img src="assets/images/users/user9.jpg"
                                        class="inline-block rounded-full"
                                        alt="user-image">
                                </div>

                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                    <span class="font-medium inline-block">
                                        Rachel White
                                    </span>
                                </div>
                            </div>
                        </td>

                        <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                            rachel@gmail.com
                        </td>

                        <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                            Mentor
                        </td>
                    </tr>

                    <!-- Data 5 -->
                    <tr>
                        <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                            <div class="flex items-center">
                                <div class="rounded-full w-[44px]">
                                    <img src="assets/images/users/user10.jpg"
                                        class="inline-block rounded-full"
                                        alt="user-image">
                                </div>

                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                    <span class="font-medium inline-block">
                                        Kevin Lee
                                    </span>
                                </div>
                            </div>
                        </td>

                        <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                            kevin@gmail.com
                        </td>

                        <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                            HR/admin
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
                <!-- Working Schedule -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Jadwal
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content relative">
                        <div id="workingScheduleCalendar">
                            <div class="header flex items-center justify-between mb-[20px]">
                                <button id="prevBtn" class="transition-all text-black bg-gray-100 dark:text-white dark:bg-[#172036] flex items-center justify-center rounded-full w-[30px] h-[30px] hover:bg-primary-500 hover:text-white">
                                    <i class="material-symbols-outlined">
                                        chevron_left
                                    </i>
                                </button>
                                <span id="monthYear" class="block font-medium text-black dark:text-white"></span>
                                <button id="nextBtn" class="transition-all text-black bg-gray-100 dark:text-white dark:bg-[#172036] flex items-center justify-center rounded-full w-[30px] h-[30px] hover:bg-primary-500 hover:text-white">
                                    <i class="material-symbols-outlined">
                                        chevron_right
                                    </i>
                                </button>
                            </div>
                            <div class="calendar grid grid-cols-7 text-center">
                                <!-- Days of the week -->
                                <div class="days">Sun</div>
                                <div class="days">Mon</div>
                                <div class="days">Tue</div>
                                <div class="days">Wed</div>
                                <div class="days">Thu</div>
                                <div class="days">Fri</div>
                                <div class="days">Sat</div>
                                <!-- Dates will be injected here by JavaScript -->
                            </div>
                        </div>
                        <div class="mt-[19px] relative" id="upcomingEventsSlides">
                            <span class="block mb-[14px] font-medium">
                                jadwal mendatang:
                            </span>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="relative ltr:pl-[14px] rtl:pr-[14px]">
                                            <div class="absolute ltr:left-0 rtl:right-0 top-[4px] w-[7px] h-[7px] rounded-sm bg-primary-500"></div>
                                            <h6 class="!text-sm !mb-[5px] !font-semibold">
                                                interview pendaftar baru
                                            </h6>
                                            <span class="text-xs">
                                                <span class="text-primary-500">
                                                    15 juni 2026
                                                </span>
                                                - 12.00 PM - 6.00 PM
                                            </span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="relative ltr:pl-[14px] rtl:pr-[14px]">
                                            <div class="absolute ltr:left-0 rtl:right-0 top-[4px] w-[7px] h-[7px] rounded-sm bg-primary-500"></div>
                                            <h6 class="!text-sm !mb-[5px] !font-semibold">
                                                presentasi project
                                            </h6>
                                            <span class="text-xs">
                                                <span class="text-primary-500">
                                                    20 juni 2026
                                                </span>
                                                - 12.00 PM - 6.00 PM 
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">
        <!-- End Main Content -->

        <!-- Add New Popup -->
        <div class="add-new-popup z-[999] fixed transition-all inset-0 overflow-x-hidden overflow-y-auto lg:py-[20px]" id="add-new-popup">
            <div class="popup-dialog flex transition-all max-w-[550px] min-h-full items-center mx-auto">
                <div class="trezo-card w-full bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header bg-gray-50 dark:bg-[#15203c] mb-[20px] md:mb-[25px] flex items-center justify-between -mx-[20px] md:-mx-[25px] -mt-[20px] md:-mt-[25px] p-[20px] md:p-[25px] rounded-t-md">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Add New Task
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <button type="button" class="text-[23px] transition-all leading-none text-black dark:text-white hover:text-primary-500" id="add-new-popup-toggle">
                                <i class="ri-close-fill"></i>
                            </button>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <form>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px] md:gap-[25px]">
                                <div class="sm:col-span-2">
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">
                                        Task Title
                                    </label>
                                    <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="Task title">
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">
                                        Assigned To
                                    </label>
                                    <select class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[14px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                        <option>
                                            Select
                                        </option>
                                        <option>
                                            Shawn Kennedy
                                        </option>
                                        <option>
                                            Roberto Cruz
                                        </option>
                                        <option>
                                            Juli Johnson
                                        </option>
                                        <option>
                                            Catalina Engles
                                        </option>
                                        <option>
                                            Louis Nagle
                                        </option>
                                        <option>
                                            Michael Marquez
                                        </option>
                                    </select>
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">
                                        Due Date
                                    </label>
                                    <input type="date" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500">
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">
                                        Priority
                                    </label>
                                    <select class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[14px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                        <option>
                                            Select
                                        </option>
                                        <option>
                                            High
                                        </option>
                                        <option>
                                            Medium
                                        </option>
                                        <option>
                                            Low
                                        </option>
                                    </select>
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">
                                        Status
                                    </label>
                                    <select class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[14px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                        <option>
                                            Select
                                        </option>
                                        <option>
                                            In Progress
                                        </option>
                                        <option>
                                            Pending
                                        </option>
                                        <option>
                                            Completed
                                        </option>
                                        <option>
                                            Not Started
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-[20px] md:mt-[25px] ltr:text-right rtl:text-left">
                                <button type="button" class="rounded-md inline-block transition-all font-medium ltr:mr-[15px] rtl:ml-[15px] px-[26.5px] py-[12px] bg-danger-500 text-white hover:bg-danger-400" id="add-new-popup-toggle">
                                    Cancel
                                </button>
                                <button type="button" class="inline-block bg-primary-500 text-white py-[12px] px-[26.5px] transition-all rounded-md hover:bg-primary-400">
                                    <span class="inline-block relative ltr:pl-[25px] rtl:pr-[25px]">
                                        <i class="material-symbols-outlined !text-[20px] absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            add
                                        </i>
                                        Create
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
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