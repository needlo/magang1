<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= base_url("assets/css/remixicon.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/apexcharts.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/simplebar.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/prism.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/jsvectormap.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/swiper-bundle.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/quill.snow.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>">

    <link rel="icon" type="image/png" href="<?= base_url("assets/images/OtwLogo.png") ?>">

    <title>Penugasan Intern</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>

    <?= $this->include('Layout/Sidebar'); ?>
    <?= $this->include('Layout/Header') ?>

    <div class="main-content flex flex-col transition-all relative ltr:ml-[260px] rtl:mr-[260px] pt-[75px] md:pt-[85px] lg:pt-[95px] px-[20px] md:px-[25px] lg:px-[30px] min-h-screen"
        id="main-content">

        <div class="flex items-center justify-between mb-[20px] md:mb-[25px] shrink-0">
            <div>
                <h3 class="text-[18px] md:text-[20px] font-semibold text-black dark:text-white mb-[5px]">
                    Penugasan Intern
                </h3>
                <p class="text-gray-500 dark:text-gray-400 text-[14px]">
                    Daftar kelas penugasan yang tersedia. Gabung dan kerjakan bersama tim Anda.
                </p>
            </div>

            <div class="flex items-center gap-[15px]">
                <div class="relative">
                    <i class="ri-search-line absolute left-[12px] top-[10px] text-gray-400"></i>
                    <input type="text" placeholder="Cari proyek..."
                        class="bg-white dark:bg-[#0c1427] border border-gray-100 dark:border-[#172036] text-black dark:text-white text-[14px] rounded-md pl-[35px] pr-[15px] py-[8px] outline-none transition-all hover:border-primary-500 focus:border-primary-500 w-[200px] md:w-[250px]">
                </div>

                <select
                    class="bg-white dark:bg-[#0c1427] border border-gray-100 dark:border-[#172036] text-black dark:text-white text-[14px] rounded-md px-[15px] py-[8px] outline-none transition-all hover:border-primary-500 cursor-pointer">
                    <option value="all">Semua Kelas</option>
                    <option value="joined">Kelas Saya</option>
                    <option value="available">Tersedia</option>
                </select>
            </div>
        </div>

        <div class="grow">

            <?php if (empty($projects)): ?>
                <div
                    class="flex flex-col items-center justify-center py-[80px] px-[20px] text-center bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036] shadow-sm">
                    <div
                        class="w-[120px] h-[120px] flex items-center justify-center bg-gray-50 dark:bg-[#172036] rounded-full mb-6">
                        <i class="material-symbols-outlined text-[60px] text-gray-300 dark:text-gray-600">folder_off</i>
                    </div>
                    <h5 class="text-[20px] font-bold text-gray-800 dark:text-gray-100 mb-3">Belum Ada Proyek Tersedia</h5>
                    <p class="text-gray-500 text-[14px] max-w-[400px] leading-relaxed">
                        Saat ini tidak ada kelas atau proyek yang tersedia. Silakan hubungi mentor atau periksa kembali
                        nanti.
                    </p>
                </div>
            <?php else: ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
                    <?php
                    $badgeColors = [
                        'bg-purple-100',
                        'bg-secondary-100',
                        'bg-success-100',
                        'bg-orange-100',
                        'bg-primary-100',
                        'bg-danger-100'
                    ];
                    ?>

                    <?php foreach ($projects as $proj): ?>

                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">

                            <div class="trezo-card-content">

                                <!-- Mentor -->
                                <div class="flex items-center justify-between">

                                    <div class="flex items-center">

                                        <div
                                            class="w-[65px] h-[65px] rounded-full border-[2px] border-gray-100 dark:border-[#172036] bg-primary-100 flex items-center justify-center">

                                            <i class="ri-user-star-line text-[30px] text-primary-500"></i>

                                        </div>

                                        <div class="ltr:ml-[12px] rtl:mr-[12px]">

                                            <span class="text-md inline-block mb-px font-medium text-black dark:text-white">
                                                <?= esc($proj['mentor_name']) ?>
                                            </span>

                                            <span class="block">
                                                Mentor
                                            </span>

                                        </div>

                                    </div>

                                    <span
                                        class="inline-block rounded-full px-[15px] py-[4px] bg-success-100 text-success-600 font-medium">

                                        <?= strtoupper($proj['status']) ?>

                                    </span>

                                </div>

                                <!-- Nama Project -->
                                <div class="text-center mt-[15px]">

                                    <span class="inline-block font-medium rounded-full px-[15px] py-[4.5px] mb-[15px]
                <?= $badgeColors[$proj['id'] % count($badgeColors)] ?>">

                                        <?= esc($proj['title']) ?>

                                    </span>

                                    <span class="block mb-[8px]">
                                        Team Members
                                    </span>

                                    <div class="flex justify-center">

                                        <div
                                            class="rounded-full w-[40px] h-[40px] bg-primary-500 text-white flex items-center justify-center font-semibold text-[13px]">

                                            <?= $proj['current_member_count'] ?>/<?= $proj['max_member'] ?>

                                        </div>

                                    </div>

                                </div>

                                <!-- Progress -->
                                <div class="mt-[18px] mb-[20px] md:mb-[25px] lg:mb-[30px]">

                                    <div class="flex items-center justify-between">

                                        <span class="block font-medium mb-[8px]">
                                            Progress
                                        </span>

                                        <span class="block font-medium mb-[8px]">
                                            0%
                                        </span>

                                    </div>

                                    <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">

                                        <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md"
                                            style="width:0%;"></div>

                                    </div>

                                </div>

                                <!-- Button -->
                                <?php if (in_array($proj['id'], $joined_ids)): ?>

                                    <a href="<?= base_url('penugasan/todo/' . $proj['id']) ?>"
                                        class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">

                                        Lihat Kelas

                                    </a>

                                <?php elseif ($proj['current_member_count'] < $proj['max_member']): ?>

                                    <a href="<?= base_url('penugasan/join_project/' . $proj['id']) ?>"
                                        class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">

                                        Gabung Kelas

                                    </a>

                                <?php else: ?>

                                    <button disabled
                                        class="block w-full rounded-md text-center font-medium border border-gray-300 py-[8.5px] px-[15px] text-gray-400">

                                        Kuota Penuh

                                    </button>

                                <?php endif; ?>

                            </div>

                        </div>

                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <footer
            class="bg-white dark:bg-[#0c1427] rounded-t-md px-[20px] md:px-[25px] py-[15px] md:py-[20px] text-center shrink-0 mt-[25px]">
            <p>© 2026 <span class="text-purple-500 font-medium">Sistem Informasi Magang</span> | Hak Cipta Dilindungi
                oleh <a href="#" class="text-primary-500 transition-all hover:underline">CV OTW Computer Gusaha</a></p>
        </footer>

    </div>

    <script src="<?= base_url("assets/js/apexcharts.min.js") ?>"></script>
    <script src="<?= base_url("assets/js/fslightbox.js") ?>"></script>
    <script src="<?= base_url("assets/js/simplebar.min.js") ?>"></script>
    <script src="<?= base_url("assets/js/prism.js") ?>"></script>
    <script src="<?= base_url("assets/js/clipboard.min.js") ?>"></script>
    <script src="<?= base_url("assets/js/swiper-bundle.min.js") ?>"></script>
    <script src="<?= base_url("assets/js/fullcalendar.min.js") ?>"></script>
    <script src="<?= base_url("assets/js/jsvectormap.min.js") ?>"></script>
    <script src="<?= base_url("assets/js/world-merc.js") ?>"></script>
    <script src="<?= base_url("assets/js/quill.min.js") ?>"></script>
    <script src="<?= base_url("assets/js/custom.js") ?>"></script>
</body>

</html>