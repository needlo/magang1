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
    <title>Profil Saya</title>

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
    <?= $this->include('Layout/Sidebar') ?>
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
                        <img src="<?= !empty($user['photo']) ? base_url('uploads/profiles/' . $user['photo']) : base_url('assets/images/profil-kosong.png') ?>"
                            alt="Profile"
                            class="w-[120px] h-[120px] rounded-full border-4 border-primary-50 dark:border-[#15203c] object-cover">
                        <span
                            class="absolute bottom-[5px] right-[5px] w-[18px] h-[18px] bg-success-500 border-2 border-white dark:border-[#0c1427] rounded-full"></span>
                    </div>

                    <h4 class="text-xl font-bold mb-[5px] text-black dark:text-white">
                        <?= esc($user['name'] ?? 'User') ?>
                    </h4>
                    <p class="text-primary-500 font-medium mb-[20px] capitalize">
                        <?= $user['role'] == 'intern' ? esc($intern['minat_posisi'] ?? 'Peserta Magang') : esc($user['role']) ?>
                    </p>

                    <?php if (!empty($intern['linkedin']) || !empty($intern['github'])): ?>
                        <div class="border-t border-gray-100 dark:border-[#172036] pt-[20px]">
                            <h6 class="text-sm font-semibold mb-[15px] text-left uppercase tracking-wider text-gray-500">
                                Portfolio & Social</h6>
                            <div class="flex flex-col gap-[12px]">
                                <?php if (!empty($intern['linkedin'])): ?>
                                    <a href="<?= esc($intern['linkedin']) ?>" target="_blank"
                                        class="flex items-center gap-[10px] p-[10px] rounded-md border border-gray-100 dark:border-[#172036] hover:bg-primary-50 dark:hover:bg-[#15203c] transition-all">
                                        <i class="ri-linkedin-box-fill text-xl text-[#0077b5]"></i>
                                        <span
                                            class="text-sm font-medium overflow-hidden whitespace-nowrap text-ellipsis">LinkedIn
                                            Profile</span>
                                    </a>
                                <?php endif; ?>

                                <?php if (!empty($intern['github'])): ?>
                                    <a href="<?= esc($intern['github']) ?>" target="_blank"
                                        class="flex items-center gap-[10px] p-[10px] rounded-md border border-gray-100 dark:border-[#172036] hover:bg-primary-50 dark:hover:bg-[#15203c] transition-all">
                                        <i class="ri-github-fill text-xl text-black dark:text-white"></i>
                                        <span class="text-sm font-medium overflow-hidden whitespace-nowrap text-ellipsis">GitHub
                                            Repository</span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="lg:col-span-2">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[25px] rounded-md h-full">
                    <div
                        class="trezo-card-header mb-[25px] border-b border-gray-100 dark:border-[#172036] pb-[15px] flex justify-between items-center">
                        <h5 class="text-lg font-bold">Informasi Detail</h5>
                        <a href="<?= base_url('setting') ?>" class="text-sm text-primary-500 hover:underline"><i
                                class="ri-edit-box-line"></i> Edit Profil</a>
                    </div>

                    <div class="trezo-card-content">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-[25px]">

                            <div>
                                <span class="block text-gray-500 text-xs uppercase mb-[5px]">Alamat Email</span>
                                <p class="font-medium text-black dark:text-white"><?= esc($user['email']) ?></p>
                            </div>
                            <div>
                                <span class="block text-gray-500 text-xs uppercase mb-[5px]">Role Akun</span>
                                <p class="font-medium text-black dark:text-white capitalize"><?= esc($user['role']) ?>
                                </p>
                            </div>
                            <div>
                                <span class="block text-gray-500 text-xs uppercase mb-[5px]">Gender</span>
                                <p class="font-medium text-black dark:text-white capitalize">
                                    <?= esc($intern['jenis_kelamin'] ?? '-') ?></p>
                            </div>
                            <div>
                                <span class="block text-gray-500 text-xs uppercase mb-[5px]">Nomor HP</span>
                                <p class="font-medium text-black dark:text-white"><?= esc($intern['no_hp'] ?? '-') ?>
                                </p>
                            </div>
                            <div class="md:col-span-2">
                                <span class="block text-gray-500 text-xs uppercase mb-[5px]">Domisili</span>
                                <p class="font-medium text-black dark:text-white"><?= esc($intern['domisili'] ?? '-') ?>
                                </p>
                            </div>

                            <?php if ($user['role'] == 'intern'): ?>
                                <div
                                    class="md:col-span-2 border-t border-dashed border-gray-200 dark:border-[#172036] my-[10px]">
                                </div>
                                <div>
                                    <span class="block text-gray-500 text-xs uppercase mb-[5px]">Institusi / Kampus</span>
                                    <p class="font-medium text-black dark:text-white">
                                        <?= esc($intern['institusi'] ?? '-') ?></p>
                                </div>
                                <div>
                                    <span class="block text-gray-500 text-xs uppercase mb-[5px]">Jurusan</span>
                                    <p class="font-medium text-black dark:text-white"><?= esc($intern['jurusan'] ?? '-') ?>
                                    </p>
                                </div>
                                <div
                                    class="md:col-span-2 border-t border-dashed border-gray-200 dark:border-[#172036] my-[10px]">
                                </div>
                                <div>
                                    <span class="block text-gray-500 text-xs uppercase mb-[5px]">Posisi Magang</span>
                                    <span
                                        class="inline-block px-[10px] py-[3px] bg-primary-100 text-primary-600 dark:bg-primary-900/30 dark:text-primary-400 rounded-full text-xs font-bold">
                                        <?= esc($intern['minat_posisi'] ?? 'Belum Ditentukan') ?>
                                    </span>
                                </div>
                                <div>
                                    <span class="block text-gray-500 text-xs uppercase mb-[5px]">Masa Periode Magang</span>
                                    <div class="flex items-center gap-[8px] text-black dark:text-white">
                                        <i class="ri-calendar-todo-line text-primary-500"></i>
                                        <p class="font-medium">
                                            <?= !empty($intern['tanggal_mulai']) ? date('d M Y', strtotime($intern['tanggal_mulai'])) : '...' ?>
                                            s/d
                                            <?= !empty($intern['tanggal_selesai']) ? date('d M Y', strtotime($intern['tanggal_selesai'])) : '...' ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grow"></div>

        <footer
            class="bg-white dark:bg-[#0c1427] rounded-t-md px-[20px] md:px-[25px] py-[15px] md:py-[20px] text-center">
            <p>
                © 2026 <span class="text-purple-500 font-medium">Sistem Informasi Magang</span> | Hak Cipta Dilindungi
                oleh <a href="#" class="text-primary-500 transition-all hover:underline">CV OTW Computer Gusaha</a>
            </p>
        </footer>
    </div>

    <!-- End Main Content -->

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