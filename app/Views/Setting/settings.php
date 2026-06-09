<!DOCTYPE html>
<html dir="ltr">
<?php
$segment1 = service('uri')->getSegment(1);
$segment2 = service('uri')->getSegment(2);
?>

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
    <title>Pengaturan Akun</title>

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

        <!-- Breadcrumb -->
        <div class="mb-[25px] md:flex items-center justify-between">
            <h5 class="!mb-0 text-xl font-semibold">
                Pengaturan Akun
            </h5>
        </div>
        <ul class="mb-[10px]">
            <li class="inline-block mb-[15px]">
                <a href="<?= base_url('setting') ?>"
                    class="inline-block border border-primary-500 rounded-md px-[15px] py-[8.5px] transition-all <?= ($segment1 == 'setting') ? 'bg-primary-500 text-white' : 'text-primary-500 hover:bg-primary-500 hover:text-white' ?>">
                    Pengaturan Akun
                </a>
            </li>
            <li class="inline-block mb-[15px]">
                <a href="<?= base_url('change-password') ?>"
                    class="inline-block border border-primary-500 rounded-md px-[15px] py-[8.5px] transition-all <?= ($segment1 == 'change-password') ? 'bg-primary-500 text-white' : 'text-primary-500 hover:bg-primary-500 hover:text-white' ?>">
                    Ubah Kata Sandi
                </a>
            </li>
        </ul>

        <!-- Main Content -->

        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px] shadow-sm">
            <div class="trezo-card-content">
                <form action="<?= base_url('setting/update_profile') ?>" method="POST" enctype="multipart/form-data">
                    <div
                        class="flex flex-col md:flex-row items-center gap-[25px] mb-[35px] pb-[30px] border-b border-gray-100 dark:border-[#172036]">
                        <div class="relative group">
                            <div
                                class="w-[120px] h-[120px] rounded-full overflow-hidden border-4 border-gray-50 dark:border-[#15203c] shadow-sm">
                                <img src="<?= !empty($user['photo']) ? base_url('uploads/profiles/' . $user['photo']) : base_url('assets/images/profil-kosong.png') ?>"
                                    id="profilePreview" alt="user"
                                    class="w-full h-full object-cover rounded-full block">
                            </div>
                            <label
                                class="absolute bottom-[5px] right-[5px] w-[35px] h-[35px] bg-primary-500 text-white rounded-full flex items-center justify-center cursor-pointer shadow-lg hover:bg-primary-600 transition-all">
                                <i class="ri-camera-switch-line text-lg"></i>
                                <input type="file" name="photo" class="hidden" accept="image/*"
                                    onchange="document.getElementById('profilePreview').src = window.URL.createObjectURL(this.files[0])">
                            </label>
                        </div>
                        <div class="text-center md:text-left">
                            <h4 class="text-lg font-bold text-black dark:text-white mb-[5px]">Foto Profil Anda</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-[10px]">Unggah foto formal untuk
                                profil Anda.</p>
                            <div class="flex gap-[10px] justify-center md:justify-start">
                                <span
                                    class="text-[11px] px-[10px] py-[3px] bg-gray-100 dark:bg-[#15203c] rounded text-gray-600 dark:text-gray-300">PNG,
                                    JPG</span>
                                <span
                                    class="text-[11px] px-[10px] py-[3px] bg-gray-100 dark:bg-[#15203c] rounded text-gray-600 dark:text-gray-300">Maks.
                                    2MB</span>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-[20px] sm:gap-[25px]">
                        <div>
                            <label class="mb-[10px] text-black dark:text-white font-medium block">Nama Lengkap</label>
                            <input type="text" name="name" value="<?= esc($user['name'] ?? '') ?>" required
                                class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all focus:border-primary-500">
                        </div>
                        <div>
                            <label class="mb-[10px] text-black dark:text-white font-medium block">Alamat Email</label>
                            <input type="email" name="email" value="<?= esc($user['email'] ?? '') ?>" required
                                class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all focus:border-primary-500">
                        </div>

                        <div>
                            <label class="mb-[10px] text-black dark:text-white font-medium block">Jenis Kelamin</label>
                            <select name="jenis_kelamin"
                                class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                <option disabled <?= empty($intern['jenis_kelamin']) ? 'selected' : '' ?>>Pilih jenis
                                    kelamin...</option>
                                <option value="laki-laki" <?= (($intern['jenis_kelamin'] ?? '') == 'laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
                                <option value="perempuan" <?= (($intern['jenis_kelamin'] ?? '') == 'perempuan') ? 'selected' : '' ?>>Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="mb-[10px] text-black dark:text-white font-medium block">Domisili</label>
                            <input type="text" name="domisili" value="<?= esc($intern['domisili'] ?? '') ?>"
                                class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all focus:border-primary-500">
                        </div>
                        <div>
                            <label class="mb-[10px] text-black dark:text-white font-medium block">Nomor HP /
                                WhatsApp</label>
                            <input type="tel" name="no_hp" value="<?= esc($intern['no_hp'] ?? '') ?>"
                                class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all focus:border-primary-500">
                        </div>
                        <div>
                            <label class="mb-[10px] text-black dark:text-white font-medium block">Link LinkedIn
                                (Opsional)</label>
                            <input type="url" name="linkedin" value="<?= esc($intern['linkedin'] ?? '') ?>"
                                class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all focus:border-primary-500">
                        </div>
                        <div class="md:col-span-2">
                            <label class="mb-[10px] text-black dark:text-white font-medium block">Link GitHub
                                (Opsional)</label>
                            <input type="url" name="github" value="<?= esc($intern['github'] ?? '') ?>"
                                class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all focus:border-primary-500">
                        </div>

                        <?php if ($user['role'] == 'intern'): ?>
                            <div
                                class="md:col-span-2 border-t border-dashed border-gray-200 dark:border-[#172036] my-[10px]">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">Institusi /
                                    Kampus</label>
                                <input type="text" name="institusi" value="<?= esc($intern['institusi'] ?? '') ?>"
                                    class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all focus:border-primary-500">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">Jurusan</label>
                                <input type="text" name="jurusan" value="<?= esc($intern['jurusan'] ?? '') ?>"
                                    class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all focus:border-primary-500">
                            </div>
                            <div class="md:col-span-2">
                                <label class="mb-[10px] text-black dark:text-white font-medium block">Hal yang Anda
                                    Minati</label>
                                <input type="text" name="minat_posisi" value="<?= esc($intern['minat_posisi'] ?? '') ?>"
                                    class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all focus:border-primary-500">
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-[15px] md:col-span-2">
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">Mulai
                                        Magang</label>
                                    <input type="date" name="tanggal_mulai"
                                        value="<?= esc($intern['tanggal_mulai'] ?? '') ?>"
                                        class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500 text-gray-500">
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">Berakhir
                                        Magang</label>
                                    <input type="date" name="tanggal_selesai"
                                        value="<?= esc($intern['tanggal_selesai'] ?? '') ?>"
                                        class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500 text-gray-500">
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div
                        class="mt-[35px] pt-[25px] border-t border-gray-100 dark:border-[#172036] flex items-center justify-end gap-[15px]">
                        <a href="<?= base_url('profile') ?>"
                            class="font-medium inline-block transition-all rounded-md py-[10px] px-[25px] border border-gray-200 dark:border-[#172036] bg-white dark:bg-transparent text-black dark:text-white hover:bg-gray-50 dark:hover:bg-[#15203c]">
                            Batal
                        </a>
                        <button type="submit"
                            class="font-medium inline-block transition-all rounded-md py-[10px] px-[25px] bg-primary-500 text-white hover:bg-primary-400">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // =========================
            // ALERT CUSTOM (Dibuat Global)
            // =========================
            const showAlert = (msg, type = 'success') => {
                const colors = {
                    success: 'text-success-500 bg-success-50 border-success-200',
                    danger: 'text-danger-500 bg-danger-50 border-danger-200',
                    warning: 'text-orange-500 bg-orange-50 border-orange-200'
                };

                let id = 'alert-' + Date.now();
                document.body.insertAdjacentHTML('beforeend', `
                <div id="${id}"
                    style="position:fixed;top:75px;right:25px;z-index:9999;width:350px;max-width:90vw;transition:0.5s"
                    class="py-[15px] px-[20px] border ${colors[type]} dark:bg-[#15203c] rounded-md flex justify-between shadow-xl font-medium">
                    
                    <span>${msg}</span>
                    
                    <button onclick="this.parentNode.remove()" class="text-[20px] ml-3">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
            `);

                setTimeout(() => {
                    let e = document.getElementById(id);
                    if (e) {
                        e.style.opacity = 0;
                        setTimeout(() => e.remove(), 500);
                    }
                }, 3000);
            };

        // =========================
        // TANGKAP PESAN DARI CONTROLLER (PHP)
        // =========================
        <?php if (session()->getFlashdata('success')): ?>
                    showAlert('<?= addslashes(session()->getFlashdata('success')) ?>', 'success');
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
                    showAlert('<?= addslashes(session()->getFlashdata('error')) ?>', 'danger');
        <?php endif; ?>

        <?php if (session()->getFlashdata('warning')): ?>
                    showAlert('<?= addslashes(session()->getFlashdata('warning')) ?>', 'warning');
        <?php endif; ?>

    });
    </script>

</body>

</html>