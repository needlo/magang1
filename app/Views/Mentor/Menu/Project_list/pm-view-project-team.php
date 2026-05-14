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
		<link rel="icon" type="image/png" href="assets/images/OtwLogo.png">

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
                    Detail Tugas
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
                        Apps
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        To Do List
                    </li>
                </ol>
            </div>
            
            
            <!-- To Do List -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
                        <div class="trezo-card-subtitle mt-[15px] sm:mt-0">
                            <a href=<?= base_url("project-list/task")?> class="inline-block transition-all rounded-md font-medium px-[13px] py-[6px] text-primary-500 border border-primary-500 hover:bg-primary-500 hover:text-white">
                                 <span class="inline-block relative ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="material-symbols-outlined !text-[22px] absolute ltr:-left-[4px] rtl:-right-[4px] top-1/2 -translate-y-1/2">
                                        arrow_back_ios
                                    </i>
                                   Kembali
                                </span>
                            </a>
                        </div>
                </div>
                <!-- Project Details -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Shopify Theme Development
                                </h5>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                                <span class="block">
                                    Project Started: 01 Mar 2025
                                </span>
                                <span class="block">
                                    Project Deadline: 25 Jun 2025
                                </span>
                            </div>
                        <div class="trezo-card-content">
                            <span class="block text-black dark:text-white mb-[8px] mt-[20px] font-bold">
                                Project Details
                            </span>
                            <p class="!leading-[1.7]">
                                Vestibulum euismod nisi vitae orci placerat, vitae vehicula eros dictum. Phasellus ut pharetra felis. Nulla facilisi. Nullam congue semper nunc, at sodales magna laoreet id. Nullam et lacus vitae ligula pretium suscipit. Fusce nec viverra enim. Sed feugiat gravida nibh sit amet suscipit. Integer tempor sapien eget metus lacinia, nec finibus lacus tincidunt. Sed sodales tellus nec metus aliquam, nec dignissim arcu lobortis.
                            </p>
                            <ul class="list-disc ltr:pl-[22px] rtl:pr-[22px]">
                                <li class="!leading-[1.7] mb-[4px] last:mb-0">
                                    Outline the boundaries and deliverables of the project.
                                </li>
                                <li class="!leading-[1.7] mb-[4px] last:mb-0">
                                    List team members, their roles, and responsibilities.
                                </li>
                                <li class="!leading-[1.7] mb-[4px] last:mb-0">
                                    Specify the technology stack and tools to be used for development.
                                </li>
                                <li class="!leading-[1.7] mb-[4px] last:mb-0">
                                    Break down the project into manageable phases or sprints.
                                </li>
                                <li class="!leading-[1.7] mb-[4px] last:mb-0">
                                    Outline the design phase, including wireframing, prototyping
                                </li>
                                <li class="!leading-[1.7] mb-[4px] last:mb-0">
                                    Outline the boundaries and deliverables of the project.
                                </li>
                                <li class="!leading-[1.7] mb-[4px] last:mb-0">
                                    Specify the technology stack and tools to be used for development.
                                </li>
                            </ul>
                        </div>
                    </div>
                
                <table style="width:100%; border-collapse:collapse; font-family:'Inter','Segoe UI',sans-serif; font-size:13px; background:#fff; border-radius:16px; overflow:hidden; border:1px solid #f0f0f0;">

                    <!-- Header -->
                    <tr style="background:#fff; border-bottom:1px solid #f0f0f0;">
                        <td colspan="2" style="padding:20px 20px 16px;">
                        <div style="display:flex; align-items:center; gap:10px;">
                            <div style="width:36px; height:36px; border-radius:10px; background:#f4f1ff; display:flex; align-items:center; justify-content:center;">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <rect x="2" y="1" width="9" height="12" rx="1.5" fill="#7F77DD"/>
                                <path d="M9 1v3h3" stroke="#7F77DD" stroke-width="1.2"/>
                                <path d="M4 6h6M4 8h6M4 10h4" stroke="#fff" stroke-width="1"/>
                            </svg>
                            </div>
                            <div>
                            <div style="font-size:15px; font-weight:600; color:#1a1a2e; letter-spacing:-0.2px;">Analisis Kompetitor</div>
                            <div style="font-size:12px; color:#9b9b9b; margin-top:1px;">Mentor Budi Santoso</div>
                            </div>
                        </div>
                        </td>
                    </tr>

                    <!-- Section label: Informasi Tugas -->
                    <tr>
                        <td colspan="2" style="padding:14px 20px 6px; background:#fafafa;">
                        <span style="font-size:10px; font-weight:600; color:#b0b0b0; letter-spacing:0.08em; text-transform:uppercase;">Informasi Tugas</span>
                        </td>
                    </tr>

                    <tr style="border-bottom:1px solid #f5f5f5;">
                        <td style="padding:10px 20px; color:#9b9b9b; font-size:12px; width:45%;">File dari mentor</td>
                        <td style="padding:10px 20px; text-align:right;">
                        <span style="display:inline-flex; align-items:center; gap:5px; background:#f4f1ff; border-radius:8px; padding:4px 10px; font-size:12px; color:#534AB7; font-weight:500;">
                            <svg width="12" height="12" viewBox="0 0 16 16" fill="none"><rect x="2" y="1" width="9" height="12" rx="1.5" stroke="#534AB7" stroke-width="1.2"/><path d="M9 1v3h3" stroke="#534AB7" stroke-width="1.2"/><path d="M4 6h6M4 8h4" stroke="#534AB7" stroke-width="1"/></svg>
                            brief_kompetitor.pdf
                        </span>
                        </td>
                    </tr>

                    <tr style="border-bottom:1px solid #f5f5f5; background:#fafafa;">
                        <td style="padding:10px 20px; color:#9b9b9b; font-size:12px;">Deadline</td>
                        <td style="padding:10px 20px; text-align:right; font-weight:500; color:#1a1a2e; font-size:13px;">
                        05 Mei 2025
                        <span style="font-size:11px; color:#9b9b9b; font-weight:400; margin-left:4px;">23:59 WIB</span>
                        </td>
                    </tr>

                    <!-- Section label: Pengumpulan Intern -->
                    <tr>
                        <td colspan="2" style="padding:14px 20px 6px; background:#fafafa;">
                        <span style="font-size:10px; font-weight:600; color:#b0b0b0; letter-spacing:0.08em; text-transform:uppercase;">Pengumpulan Intern</span>
                        </td>
                    </tr>

                    <tr style="border-bottom:1px solid #f5f5f5;">
                        <td style="padding:10px 20px; color:#9b9b9b; font-size:12px;">Nama intern</td>
                        <td style="padding:10px 20px; text-align:right;">
                        <div style="display:inline-flex; align-items:center; gap:7px;">
                            <div style="width:24px; height:24px; border-radius:50%; background:#e6f1fb; display:flex; align-items:center; justify-content:center; font-size:10px; font-weight:600; color:#185FA5;">RA</div>
                            <span style="font-weight:500; color:#1a1a2e;">Rizky Aditya</span>
                        </div>
                        </td>
                    </tr>

                    <tr style="border-bottom:1px solid #f5f5f5; background:#fafafa;">
                        <td style="padding:10px 20px; color:#9b9b9b; font-size:12px;">Dikumpulkan</td>
                        <td style="padding:10px 20px; text-align:right; font-weight:500; color:#1a1a2e; font-size:13px;">
                        04 Mei 2025
                        <span style="font-size:11px; color:#9b9b9b; font-weight:400; margin-left:4px;">20:33 WIB</span>
                        </td>
                    </tr>

                    <tr style="border-bottom:1px solid #f5f5f5;">
                        <td style="padding:10px 20px; color:#9b9b9b; font-size:12px;">File pengumpulan</td>
                        <td style="padding:10px 20px; text-align:right;">
                        <span style="display:inline-flex; align-items:center; gap:5px; background:#e6f1fb; border-radius:8px; padding:4px 10px; font-size:12px; color:#185FA5; font-weight:500;">
                            <svg width="12" height="12" viewBox="0 0 16 16" fill="none"><rect x="2" y="1" width="9" height="12" rx="1.5" stroke="#185FA5" stroke-width="1.2"/><path d="M9 1v3h3" stroke="#185FA5" stroke-width="1.2"/></svg>
                            analisis_rizky.pptx
                        </span>
                        </td>
                    </tr>

                    <tr style="background:#fafafa;">
                        <td style="padding:10px 20px; color:#9b9b9b; font-size:12px;">Status</td>
                        <td style="padding:10px 20px; text-align:right;">
                        <span style="display:inline-flex; align-items:center; gap:5px; background:#e6faf0; border-radius:99px; padding:4px 12px; font-size:11px; font-weight:600; color:#0F6E56; letter-spacing:0.02em;">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"><circle cx="5" cy="5" r="4.5" fill="#1D9E75"/><path d="M3 5l1.5 1.5L7 3.5" stroke="#fff" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            Tepat waktu
                        </span>
                        </td>
                    </tr>

                </table>
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