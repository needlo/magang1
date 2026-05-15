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
                    Sertifikat
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
                        Sertifikat
                    </li>
                </ol>
            </div>

            <!-- Users -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content mb-[25px]">
                    <div class="table-responsive overflow-x-auto">
                        <div class="flex justify-between items-center mb-[15px]">
                            <h3 class="text-lg font-semibold text-black dark:text-white">
                                Template Sertifikat
                            </h3>
                            <a href="<?= base_url('project-list/create') ?>" 
                            class="inline-flex items-center gap-2 px-[16px] py-[8px] rounded-md bg-primary-500 text-white hover:bg-primary-400 shadow-sm transition">
                                
                                <i class="material-symbols-outlined !text-[20px]">
                                    upload
                                </i>

                                Upload Sertifikat
                            </a>
                        </div>
                        <table class="w-full">
                            <thead class="text-black dark:text-white">
                                <tr>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        Template Sertifikat
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        Preview
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        Format
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Template Sertifikat 1
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="w-[60px] h-[40px] overflow-hidden rounded-md border border-gray-200">
                                            <img src="assets/images/users/sertifikat.png" 
                                                class="w-full h-full object-cover" 
                                                alt="preview">
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    PNG
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Beri Nilai">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Beri Nilai">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Hapus">
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
                    <div class="px-[20px] py-[12px] md:py-[14px] rounded-b-md border-l border-r border-b border-gray-100 dark:border-[#172036] sm:flex sm:items-center justify-between">
                        <p class="!mb-0 text-sm">
                            Showing 1 of 36 results
                        </p>
                        <ol class="mt-[10px] sm:mt-0">
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-users.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    <span class="opacity-0">
                                        0
                                    </span>
                                    <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                        chevron_left
                                    </i>
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-users.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white">
                                    1
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-users.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    2
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-users.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    3
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-users.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    4
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-users.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
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

                <!-- Table sertifikat -->
                <div class="flex justify-between items-center mb-[15px]">
                    <h3 class="text-lg font-semibold text-black dark:text-white">
                        Daftar Inter
                    </h3>
                </div>
                <div class="trezo-card-content mb-[25px]">
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
                    <div class="table-responsive overflow-x-auto">
                        <table class="w-full">
                            <thead class="text-black dark:text-white">
                                <tr>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        Nama
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        Tim
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        Sertifikat
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px] rounded-full">
                                                <img src="assets/images/users/user6.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Sarah Johnson
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Hotel Management System, <br> Python Upgrade
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <i class="material-symbols-outlined !text-md">
                                                    file_present
                                        </i>
                                            file.pdf
                                    </td>
                                    
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Generate Sertifikat">
                                                <a href=<?= base_url("sertifikat/generate") ?>>
                                                    <i class="material-symbols-outlined !text-md">
                                                      upload  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="edit sertifikat">
                                                <a href="pm-user-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      edit  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Hapus">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px] rounded-full">
                                                <img src="assets/images/users/user7.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Carolyn Barnes
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Web Development
                                    </td>
                                     <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        No file
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Generate Sertifikat">
                                                <a href="pm-sertifikat-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      upload  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="edit sertifikat">
                                                <a href="pm-user-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      edit  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Hapus">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px] rounded-full">
                                                <img src="assets/images/users/user8.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Donna Miller
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Networking
                                    </td>
                                     <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <i class="material-symbols-outlined !text-md">
                                                        file_present
                                            </i>
                                                file.pdf
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Generate Sertifikat">
                                                <a href="pm-sertifikat-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      upload  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="edit sertifikat">
                                                <a href="pm-user-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      edit  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Hapus">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px] rounded-full">
                                                <img src="assets/images/users/user9.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Barbara Cross
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        UI/UX Design
                                    </td>
                                     <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <i class="material-symbols-outlined !text-md">
                                                        file_present
                                            </i>
                                                file.pdf
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Generate Sertifikat">
                                                <a href="pm-sertifikat-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      upload  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="edit sertifikat">
                                                <a href="pm-user-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      edit  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Hapus">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px] rounded-full">
                                                <img src="assets/images/users/user10.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Rebecca Block
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        QA Tester
                                    </td>
                                     <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <i class="material-symbols-outlined !text-md">
                                                        file_present
                                            </i>
                                                file.pdf
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Generate Sertifikat">
                                                <a href="pm-sertifikat-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      upload  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="edit sertifikat">
                                                <a href="pm-user-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      edit  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Hapus">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px] rounded-full">
                                                <img src="assets/images/users/user11.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Ramiro McCarty
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Frontend Developer
                                    </td>
                                     <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        No file
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Generate Sertifikat">
                                                <a href="pm-sertifikat-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      upload  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="edit sertifikat">
                                                <a href="pm-user-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      edit  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Hapus">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px] rounded-full">
                                                <img src="assets/images/users/user12.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Robert Fairweather
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        UI / UX Desainger
                                    </td>
                                     <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <i class="material-symbols-outlined !text-md">
                                                        file_present
                                            </i>
                                                file.pdf
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Generate Sertifikat">
                                                <a href="pm-sertifikat-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      upload  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="edit sertifikat">
                                                <a href="pm-user-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      edit  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Hapus">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px] rounded-full">
                                                <img src="assets/images/users/user13.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Marcelino Haddock
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Frontend Developer
                                    </td>
                                     <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <i class="material-symbols-outlined !text-md">
                                                        file_present
                                            </i>
                                                file.pdf
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Generate Sertifikat">
                                                <a href="pm-sertifikat-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      upload  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="edit sertifikat">
                                                <a href="pm-user-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      edit  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Hapus">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px] rounded-full">
                                                <img src="assets/images/users/user14.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Thomas Wilson
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Backend Developer
                                    </td>
                                     <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <i class="material-symbols-outlined !text-md">
                                                        file_present
                                            </i>
                                                file.pdf
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Generate Sertifikat">
                                                <a href="pm-sertifikat-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      upload  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="edit sertifikat">
                                                <a href="pm-user-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      edit  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Hapus">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px] rounded-full">
                                                <img src="assets/images/users/user15.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Nathaniel Hulsey
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Sistem Informasi
                                    </td>
                                     <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <i class="material-symbols-outlined !text-md">
                                                        file_present
                                            </i>
                                                file.pdf
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Generate Sertifikat">
                                                <a href="pm-sertifikat-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      upload  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="edit sertifikat">
                                                <a href="pm-user-edit.html">
                                                    <i class="material-symbols-outlined !text-md">
                                                      edit  
                                                    </i>
                                                </a>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Hapus">
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
                    <div class="px-[20px] py-[12px] md:py-[14px] rounded-b-md border-l border-r border-b border-gray-100 dark:border-[#172036] sm:flex sm:items-center justify-between">
                        <p class="!mb-0 text-sm">
                            Showing 10 of 36 results
                        </p>
                        <ol class="mt-[10px] sm:mt-0">
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-users.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    <span class="opacity-0">
                                        0
                                    </span>
                                    <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                        chevron_left
                                    </i>
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-users.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white">
                                    1
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-users.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    2
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-users.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    3
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-users.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    4
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="pm-users.html" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
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

        <!-- Add New Popup -->
        <div class="add-new-popup z-[999] fixed transition-all inset-0 overflow-x-hidden overflow-y-auto lg:py-[20px]" id="add-new-popup">
            <div class="popup-dialog flex transition-all max-w-[550px] min-h-full items-center mx-auto">
                <div class="trezo-card w-full bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header bg-gray-50 dark:bg-[#15203c] mb-[20px] md:mb-[25px] flex items-center justify-between -mx-[20px] md:-mx-[25px] -mt-[20px] md:-mt-[25px] p-[20px] md:p-[25px] rounded-t-md">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Add New User
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
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">
                                        Name
                                    </label>
                                    <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="E.g. Olivia">
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">
                                        Email
                                    </label>
                                    <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="E.g. olivia@trezo.com">
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">
                                        Role
                                    </label>
                                    <select class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[14px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                        <option selected>
                                            Select
                                        </option>
                                        <option value="1">
                                            Project Manager
                                        </option>
                                        <option value="2">
                                            Developer
                                        </option>
                                        <option value="3">
                                            Business Analyst
                                        </option>
                                        <option value="4">
                                            UI/UX Designer
                                        </option>
                                        <option value="5">
                                            QA Tester
                                        </option>
                                        <option value="6">
                                            Admin
                                        </option>
                                        <option value="7">
                                            Editor
                                        </option>
                                        <option value="8">
                                            Plugin Developer
                                        </option>
                                    </select>
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">
                                        Project Access
                                    </label>
                                    <select class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[14px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                        <option selected>
                                            Select
                                        </option>
                                        <option value="1">
                                            Hotel Management
                                        </option>
                                        <option value="2">
                                            Python Upgrade
                                        </option>
                                        <option value="3">
                                            Project Monitoring
                                        </option>
                                        <option value="4">
                                            Project Alpho
                                        </option>
                                        <option value="5">
                                            Aegis Service
                                        </option>
                                        <option value="6">
                                            Beja Banking Finance
                                        </option>
                                        <option value="7">
                                            Aoriv AI Design
                                        </option>
                                        <option value="8">
                                            Vaxo App Design
                                        </option>
                                        <option value="9">
                                            Product Development
                                        </option>
                                        <option value="10">
                                            Trezo Dashboard
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