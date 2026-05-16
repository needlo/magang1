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


    <!-- Users List -->
    <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
        <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
            <div class="trezo-card-title">
                <form class="relative sm:w-[265px]">
                    <label class="leading-none absolute ltr:left-[13px] rtl:right-[13px] text-black dark:text-white mt-px top-1/2 -translate-y-1/2">
                        <i class="material-symbols-outlined !text-[20px]">
                            search
                        </i>
                    </label>
                    <input type="text" placeholder="Search user here....." class="bg-gray-50 border border-gray-50 h-[36px] text-xs rounded-md w-full block text-black pt-[11px] pb-[12px] ltr:pl-[38px] rtl:pr-[38px] ltr:pr-[13px] ltr:md:pr-[16px] rtl:pl-[13px] rtl:md:pl-[16px] placeholder:text-gray-500 outline-0 dark:bg-[#15203c] dark:text-white dark:border-[#15203c] dark:placeholder:text-gray-400">
                </form>
            </div>
        </div>
        <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
            <div class="table-responsive overflow-x-auto">
                <table class="w-full">
                    <thead class="text-black dark:text-white">
                        <tr>
                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                ID
                            </th>
                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                Nama
                            </th>
                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                Email
                            </th>
                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                User
                            </th>
                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                No Telp
                            </th>
                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                Status
                            </th>
                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-black dark:text-white">
                        <tr>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                #JAN-158
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <div class="flex items-center">
                                    <div class="rounded-md w-[40px] rounded-full">
                                        <img src="assets/images/users/user6.jpg" class="inline-block rounded-full" alt="product-image">
                                    </div>
                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                        <span class="block font-medium">
                                            Wiliam
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                Wiliam@trezo.com
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <span class="inline-block px-[8px] py-[2px] bg-blue-100 text-blue-800 text-xs rounded-full font-medium">
                                    Internship
                                </span>
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                +62 878-5674-3211
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <span class="px-[8px] py-[3px] inline-block bg-warning-50 dark:bg-[#15203c] text-warning-700 rounded-sm font-medium text-xs">
                                    Menunggu
                                </span>
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <div class="flex items-center gap-[9px]">
<a href=<?= base_url("anggota-magang/edit") ?>
   class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip"
   data-text="Edit">
    <i class="material-symbols-outlined !text-md">
        edit
    </i>
</a>
<a href=<?= base_url("anggota-magang/view") ?>
   class="text-danger-500 leading-none custom-tooltip"
   data-text="View">

    <i class="material-symbols-outlined !text-md">
        visibility
    </i>
</a>
                                    <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                        <i class="material-symbols-outlined !text-md">
                                            delete
                                        </i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                #JAN-325
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <div class="flex items-center">
                                    <div class="rounded-md w-[40px] rounded-full">
                                        <img src="assets/images/users/user7.jpg" class="inline-block rounded-full" alt="product-image">
                                    </div>
                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                        <span class="block font-medium">
                                            Carolyn doze
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                doze@trezo.com
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <span class="inline-block px-[8px] py-[2px] bg-green-100 text-green-800 text-xs rounded-full font-medium">
                                    Internship
                                </span>
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                +1 555-455-9966
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <span class="px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                    Aktif
                                </span>
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <div class="flex items-center gap-[9px]">
                                    <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                        <i class="material-symbols-outlined !text-md">
                                            edit
                                        </i>
                                    </button>
                                    <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="View">  
                                        <i class="material-symbols-outlined !text-md">
                                            visibility
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
                        <!-- Tambahkan baris lainnya dengan pola yang sama -->
                        <!-- Saya hanya menampilkan 3 baris pertama untuk contoh, tambahkan sisanya dengan pola yang sama -->
                    </tbody>
                </table>
            </div>
            <div class="px-[20px] md:px-[25px] pt-[12px] md:pt-[14px] sm:flex sm:items-center justify-between">
                <p class="!mb-0 text-sm">
                    Showing 10 of 36 results
                </p>
                <ol class="mt-[10px] sm:mt-0">
                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                        <a href="users-list.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                            <span class="opacity-0">
                                0
                            </span>
                            <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                chevron_left
                            </i>
                        </a>
                    </li>
                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                        <a href="users-list.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white">
                            1
                        </a>
                    </li>
                                                <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="users-list.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    2
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="users-list.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    3
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="users-list.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    4
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="users-list.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
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