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
    <title>Ubah Kata Sandi</title>

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
            <h5 class="!mb-0">
                Ubah Kata Sandi
            </h5>
        </div>
        <ul class="mb-[10px]">
            <li class="inline-block mb-[15px]">
                <a href="<?= base_url('setting') ?>"
                    class="inline-block border border-primary-500 rounded-md px-[15px] py-[8.5px] transition-all <?= ($segment1 == 'setting' && !$segment2) ? 'bg-primary-500 text-white' : 'text-primary-500 hover:bg-primary-500 hover:text-white' ?>">
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
        <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
            <div class="trezo-card-content">
                <form action="<?= base_url('change-password') ?>" method="POST">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px] md:gap-[25px]">

                        <div id="passwordHideShow">
                            <label class="mb-[10px] text-black dark:text-white font-medium block">Password Lama</label>
                            <div class="relative">
                                <input type="password" name="old_password" required minlength="6"
                                    class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                    id="password" placeholder="Ketik password lama">
                                <button
                                    class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-1/2 -translate-y-1/2 transition-all hover:text-primary-500"
                                    id="toggleButton" type="button">
                                    <i class="ri-eye-off-line"></i>
                                </button>
                            </div>
                            <p id="err-length-old" class="text-danger-500 text-sm mt-[8px] font-medium hidden">
                                <i class="ri-error-warning-line align-middle"></i> Kata sandi lama minimal 6 karakter!
                            </p>
                        </div>

                        <div id="passwordHideShow2">
                            <label class="mb-[10px] text-black dark:text-white font-medium block">Password Baru</label>
                            <div class="relative">
                                <input type="password" name="new_password" required minlength="6"
                                    class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                    id="password2" placeholder="Ketik password baru">
                                <button
                                    class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-1/2 -translate-y-1/2 transition-all hover:text-primary-500"
                                    id="toggleButton2" type="button">
                                    <i class="ri-eye-off-line"></i>
                                </button>
                            </div>
                            <p id="err-length-new" class="text-danger-500 text-sm mt-[8px] font-medium hidden">
                                <i class="ri-error-warning-line align-middle"></i> Kata sandi baru minimal 6 karakter!
                            </p>
                            <p id="err-new-password" class="text-danger-500 text-sm mt-[8px] font-medium hidden">
                                <i class="ri-error-warning-line align-middle"></i> Kata sandi baru tidak boleh sama
                                dengan kata sandi lama!
                            </p>
                        </div>

                        <div class="sm:col-span-2" id="passwordHideShow3">
                            <label class="mb-[10px] text-black dark:text-white font-medium block">Konfirmasi Password
                                Baru</label>
                            <div class="relative">
                                <input type="password" name="confirm_password" required minlength="6"
                                    class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                    id="password3" placeholder="Ulangi password baru">
                                <button
                                    class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-1/2 -translate-y-1/2 transition-all hover:text-primary-500"
                                    id="toggleButton3" type="button">
                                    <i class="ri-eye-off-line"></i>
                                </button>
                            </div>
                            <p id="err-length-confirm" class="text-danger-500 text-sm mt-[8px] font-medium hidden">
                                <i class="ri-error-warning-line align-middle"></i> Konfirmasi kata sandi minimal 6
                                karakter!
                            </p>
                            <p id="err-confirm-password" class="text-danger-500 text-sm mt-[8px] font-medium hidden">
                                <i class="ri-error-warning-line align-middle"></i> Konfirmasi kata sandi harus sama
                                persis dengan kata sandi baru!
                            </p>
                        </div>
                    </div>

                    <div class="mt-[20px] md:mt-[25px]">
                        <button type="submit" id="btn-submit-password"
                            class="font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-primary-500 text-white hover:bg-primary-400 opacity-50 cursor-not-allowed"
                            disabled>
                            <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
                                <i
                                    class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2">check</i>
                                Ganti Password
                            </span>
                        </button>
                        <a href="<?= base_url('forgot-password') ?>"
                            class="inline-block text-danger-500 ltr:ml-[23px] rtl:mr-[23px]">
                            Lupa Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="grow"></div>

        <!-- Footer -->
        <footer
            class="bg-white dark:bg-[#0c1427] rounded-t-md px-[20px] md:px-[25px] py-[15px] md:py-[20px] text-center">
            <p>
                © <span class="text-purple-500">Trezo</span> is Proudly Owned by <a href="https://envytheme.com/"
                    target="_blank" class="text-primary-500 transition-all hover:underline">EnvyTheme</a>
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

            // ============================
            // ALERT CUSTOM (Dibuat Global)
            // ============================
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

        // ===================================
        // TANGKAP PESAN DARI CONTROLLER (PHP)
        // ===================================
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

        // ============================
        // Validasi Password
        // ============================
        // Elemen Input
        const oldPw = document.getElementById('password');
        const newPw = document.getElementById('password2');
        const confirmPw = document.getElementById('password3');

        // Elemen Teks Peringatan Panjang Karakter
        const errLengthOld = document.getElementById('err-length-old');
        const errLengthNew = document.getElementById('err-length-new');
        const errLengthConfirm = document.getElementById('err-length-confirm');

        // Elemen Teks Peringatan Kecocokan
        const errNew = document.getElementById('err-new-password');
        const errConfirm = document.getElementById('err-confirm-password');

        // Elemen Tombol
        const btnSubmit = document.getElementById('btn-submit-password');

        function validatePasswords() {
            let isValid = true;

            // --- CEK MINIMAL 6 KARAKTER ---

            // Password Lama
            if (oldPw.value.length > 0 && oldPw.value.length < 6) {
                errLengthOld.classList.remove('hidden');
                isValid = false;
            } else {
                errLengthOld.classList.add('hidden');
            }

            // Password Baru
            if (newPw.value.length > 0 && newPw.value.length < 6) {
                errLengthNew.classList.remove('hidden');
                isValid = false;
            } else {
                errLengthNew.classList.add('hidden');
            }

            // Konfirmasi Password
            if (confirmPw.value.length > 0 && confirmPw.value.length < 6) {
                errLengthConfirm.classList.remove('hidden');
                isValid = false;
            } else {
                errLengthConfirm.classList.add('hidden');
            }

            // --- CEK KECOCOKAN KATA SANDI ---

            // Password Baru tidak boleh sama dengan Password Lama
            if (newPw.value.length > 0 && newPw.value === oldPw.value) {
                errNew.classList.remove('hidden');
                isValid = false;
            } else {
                errNew.classList.add('hidden');
            }

            // Konfirmasi Password harus sama dengan Password Baru
            if (confirmPw.value.length > 0 && confirmPw.value !== newPw.value) {
                errConfirm.classList.remove('hidden');
                isValid = false;
            } else {
                errConfirm.classList.add('hidden');
            }

            // Pastikan SEMUA field sudah terisi minimal 6 karakter sebelum tombol bisa hidup
            if (oldPw.value.length < 6 || newPw.value.length < 6 || confirmPw.value.length < 6) {
                isValid = false;
            }

            // --- KONTROL TAMPILAN TOMBOL SUBMIT ---
            if (!isValid) {
                btnSubmit.disabled = true;
                btnSubmit.classList.add('opacity-50', 'cursor-not-allowed');
                btnSubmit.classList.remove('hover:bg-primary-400');
            } else {
                btnSubmit.disabled = false;
                btnSubmit.classList.remove('opacity-50', 'cursor-not-allowed');
                btnSubmit.classList.add('hover:bg-primary-400');
            }
        }

        // Jalankan fungsi setiap kali user mengetik
        oldPw.addEventListener('input', validatePasswords);
        newPw.addEventListener('input', validatePasswords);
        confirmPw.addEventListener('input', validatePasswords);

    </script>

</body>

</html>