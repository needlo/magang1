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

    <title>Daftar Tugas Magang</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>

    <?php echo $this->include('Layout/Sidebar'); ?>
    <?= $this->include('Layout/Header') ?>
    <div class="main-content transition-all flex flex-col overflow-hidden min-h-screen" id="main-content">

        <div class="mb-[25px] md:flex items-center justify-between">
            <h5 class="!mb-0 text-xl font-bold">Daftar Tugas Magang</h5>
        </div>

        <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md shadow-sm">
            <div class="trezo-card-content">
                <div class="table-responsive overflow-x-auto">
                    <table class="w-full">
                        <thead class="text-black dark:text-white">
                            <tr>
                                <th
                                    class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-l-md last:rounded-r-md">
                                    No.</th>
                                <th
                                    class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap">
                                    Informasi Tugas</th>
                                <th
                                    class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap">
                                    Timeline</th>
                                <th
                                    class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap">
                                    Status Pengumpulan</th>
                                <th
                                    class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap">
                                    Status Review</th>
                            </tr>
                        </thead>

                        <tbody class="text-black dark:text-white">
                            <?php $no = 1;
                            foreach ($tasks as $t): ?>
                                <tr class="hover:bg-gray-50 dark:hover:bg-[#15203c] transition-all">
                                    <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                        <?= $no++ ?></td>

                                    <td
                                        class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] font-medium">
                                        <a href="<?= base_url('penugasan/detail/' . $t['id']) ?>"
                                            class="font-bold mb-1 hover:text-primary-500 hover:underline cursor-pointer block text-base">
                                            <?= esc($t['title']) ?>
                                        </a>
                                    </td>

                                    <td
                                        class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] text-gray-500 text-sm">
                                        <p>Mulai: <span
                                                class="font-medium text-success-500"><?= date('d M Y', strtotime($t['start_date'])) ?></span>
                                        </p>
                                        <p>Tenggat: <span
                                                class="text-danger-500 font-medium"><?= date('d M Y', strtotime($t['deadline'])) ?></span>
                                        </p>
                                    </td>

                                    <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                        <?php if ($t['submission_status']): ?>
                                            <span
                                                class="inline-block px-[10px] py-[4px] bg-success-100 text-success-600 rounded-md text-xs font-medium">
                                                Sudah Dikumpulkan
                                            </span>
                                        <?php else: ?>
                                            <span
                                                class="inline-block px-[10px] py-[4px] bg-gray-100 text-gray-600 rounded-md text-xs font-medium">
                                                Belum Dikumpulkan
                                            </span>
                                        <?php endif; ?>
                                    </td>

                                    <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                        <?php
                                        if ($t['submission_status'] == 'selesai') {
                                            echo '<span class="text-success-500 text-sm font-bold">Selesai</span>';
                                        } elseif ($t['submission_status'] == 'revisi') {
                                            echo '<span class="text-orange-500 text-sm font-bold">Perlu Revisi</span>';
                                        } elseif ($t['submission_status'] == 'pending') {
                                            echo '<span class="text-info-500 text-sm font-bold">Menunggu Review</span>';
                                        } else {
                                            echo '<span class="text-gray-400 text-sm italic">-</span>';
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="grow"></div>
        <footer
            class="bg-white dark:bg-[#0c1427] rounded-t-md px-[20px] md:px-[25px] py-[15px] md:py-[20px] text-center mt-auto">
            <p>
                © 2026 <span class="text-purple-500 font-medium">Sistem Informasi Magang</span> | Hak Cipta Dilindungi
                oleh <a href="#" class="text-primary-500 transition-all hover:underline">CV OTW Computer Gusaha</a>
            </p>
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