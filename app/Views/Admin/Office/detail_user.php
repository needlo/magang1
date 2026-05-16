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
        <title>Profil Saya</title>

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

            <div class="mb-[25px] md:flex items-center justify-between">
                <h5 class="!mb-0 text-xl font-semibold">Profil Saya</h5>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                
                <div class="lg:col-span-1">
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[25px] rounded-md text-center">
                        <div class="relative inline-block mb-[20px]">
                            <img src="assets/images/users/user6.jpg" alt="Profile" class="w-[120px] h-[120px] rounded-full border-4 border-primary-50 dark:border-[#15203c] object-cover">
                            <span class="absolute bottom-[5px] right-[5px] w-[18px] h-[18px] bg-success-500 border-2 border-white dark:border-[#0c1427] rounded-full"></span>
                        </div>
                        <h4 class="text-xl font-bold mb-[5px] text-black dark:text-white">Marcia Baker</h4>
                        <p class="text-primary-500 font-medium mb-[20px]">Admin</p>
                        
                        <div class="border-t border-gray-100 dark:border-[#172036] pt-[20px]">
                            <h6 class="text-sm font-semibold mb-[15px] text-left uppercase tracking-wider text-gray-500">Portfolio & Social</h6>
                            <div class="flex flex-col gap-[12px]">
    <a href="https://www.linkedin.com/feed/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-[10px] p-[10px] rounded-md border border-gray-100 dark:border-[#172036] hover:bg-primary-50 dark:hover:bg-[#15203c] transition-all">
        <i class="ri-linkedin-box-fill text-xl text-[#0077b5]"></i>
        <span class="text-sm font-medium">LinkedIn Profile</span>
    </a>

    <a href="https://github.com/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-[10px] p-[10px] rounded-md border border-gray-100 dark:border-[#172036] hover:bg-primary-50 dark:hover:bg-[#15203c] transition-all">
        <i class="ri-github-fill text-xl text-black dark:text-white"></i>
        <span class="text-sm font-medium">GitHub Repository</span>
    </a>

    <a href="https://www.youtube.com/@Rafif_Dary" target="_blank" rel="noopener noreferrer" class="flex items-center gap-[10px] p-[10px] rounded-md border border-gray-100 dark:border-[#172036] hover:bg-primary-50 dark:hover:bg-[#15203c] transition-all">
        <i class="ri-youtube-fill text-xl text-red-500"></i>
        <span class="text-sm font-medium">Channel Youtube</span>
    </a>
</div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2">
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[25px] rounded-md h-full">
                        <div class="trezo-card-header mb-[25px] border-b border-gray-100 dark:border-[#172036] pb-[15px]">
                            <h5 class="text-lg font-bold">Informasi Detail</h5>
                        </div>
                        
                        <div class="trezo-card-content">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-[25px]">
                                <div>
                                    <span class="block text-gray-500 text-xs uppercase mb-[5px]">Jenis Kelamin</span>
                                    <p class="font-medium text-black dark:text-white">Laki-laki</p>
                                </div>
                                <div>
                                    <span class="block text-gray-500 text-xs uppercase mb-[5px]">Email Address</span>
                                    <p class="font-medium text-black dark:text-white">marcia@trezo.com</p>
                                </div>
                                <div>
                                    <span class="block text-gray-500 text-xs uppercase mb-[5px]">Nomor HP</span>
                                    <p class="font-medium text-black dark:text-white">+1 555-445-4455</p>
                                </div>
                                <div>
                                    <span class="block text-gray-500 text-xs uppercase mb-[5px]">Domisili</span>
                                    <p class="font-medium text-black dark:text-white">Surabaya, Jawa Timur</p>
                                </div>
                                <div>
                                    <span class="block text-gray-500 text-xs uppercase mb-[5px]">Tanggal Lahir</span>
                                    <p class="font-medium text-black dark:text-white">04/10/2002</p>
                                </div>
                                <div class="md:col-span-2 border-t border-dashed border-gray-200 dark:border-[#172036] my-[10px]"></div>
<h3 class="!text-lg !mb-[20px] mt-[20px] md:mt-[25px] first:mt-0">
    Keterangan Tambahan
</h3>
<p class="mb-6 text-gray-600 dark:text-gray-400 leading-[1.8]">
    Memiliki minat dan kemampuan di bidang pengembangan website dan aplikasi mobile. 
    Aktif mempelajari teknologi pemrograman modern serta memiliki pengalaman mengikuti 
    lomba programming tingkat kabupaten dan berhasil meraih juara 2.
</p>

                        </div>
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