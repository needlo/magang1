<!DOCTYPE html>
<html dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Links Of CSS File -->
    <link rel="stylesheet" href="<?= base_url("assets/css/remixicon.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/apexcharts.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/simplebar.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/prism.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/jsvectormap.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/swiper-bundle.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/quill.snow.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url("assets/images/OtwLogo.png") ?>">

    <!-- Title -->
    <title>Masuk</title>

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

    <!-- Light/Dark Mode Button -->
    <button type="button"
        class="light-dark-toggle leading-none inline-block transition-all text-[#fe7a36] absolute top-[20px] md:top-[25px] ltr:right-[20px] rtl:left-[20px] ltr:md:right-[25px] rtl:md:left-[25px]"
        id="light-dark-toggle">

        <i class="material-symbols-outlined !text-[20px] md:!text-[22px]">
            light_mode
        </i>

    </button>
    <!-- End Light/Dark Mode Button -->

    <!-- Sign In -->
    <div class="bg-white dark:bg-[#0a0e19] py-[60px] md:py-[80px] lg:py-[135px]">

        <div class="mx-auto px-[12.5px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1255px]">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">

                <div
                    class="xl:ltr:-mr-[25px] xl:rtl:-ml-[25px] 2xl:ltr:-mr-[45px] 2xl:rtl:-ml-[45px] rounded-[25px] order-2 lg:order-1">

                    <img src="<?= base_url("assets/images/login-photo.webp") ?>" alt="sign-in-image"
                        class="rounded-[25px]">

                </div>

                <div class="xl:ltr:pl-[90px] xl:rtl:pr-[90px] 2xl:ltr:pl-[120px] 2xl:rtl:pr-[120px] order-1 lg:order-2">

                    <img src="<?= base_url("assets/images/otw.ico") ?>" class="h-[50px] w-[200]" alt="logo">

                    <div class="my-[17px] md:my-[25px]">

                        <h1 class="!font-semibold !text-[22px] md:!text-xl lg:!text-2xl !mb-[5px] md:!mb-[7px]">
                            Selamat Datang di CV. OTW Computer Gusaha!
                        </h1>

                        <p class="font-medium lg:text-md text-[#445164] dark:text-gray-400">
                            Masuk dengan akun google atau masukkan detail Anda
                        </p>

                    </div>

                    <!-- FORM LOGIN -->
                    <form action="<?= base_url('login/process') ?>" method="post" autocomplete="off">

                        <?= csrf_field(); ?>

                        <!-- FAKE AUTOFILL BLOCKER -->
                        <input type="text" style="display:none">
                        <input type="password" style="display:none">

                        <div class="flex items-center justify-between mb-[20px] md:mb-[23px] gap-[12px]">

                            <div class="grow">

                                <button type="button"
                                    class="block text-center w-full rounded-md transition-all py-[8px] md:py-[10.5px] px-[15px] md:px-[25px] text-black dark:text-white border border-[#D6DAE1] bg-white dark:bg-[#0a0e19] dark:border-[#172036] shadow-sm hover:border-primary-500">

                                    <img src="<?= base_url("assets/images/icons/google.svg") ?>" class="inline-block"
                                        alt="google">

                                </button>

                            </div>

                        </div>

                        <!-- EMAIL LOGIN -->
                        <div class="mb-[15px] relative">

                            <label class="mb-[10px] md:mb-[12px] text-black dark:text-white font-medium block">
                                Alamat Email
                            </label>

                            <input type="email" name="email" id="email" value="<?= old('email') ?>" autocomplete="off"
                                spellcheck="false"
                                class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                placeholder="Masukkan alamat email anda" required>

                        </div>

                        <!-- PASSWORD LOGIN -->
                        <div class="mb-[15px]">

                            <label class="mb-[10px] md:mb-[12px] text-black dark:text-white font-medium block">
                                Kata Sandi
                            </label>

                            <div class="relative block w-full">

                                <input type="password" name="password" id="password" value="<?= old('password') ?>"
                                    autocomplete="new-password" required
                                    class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                    placeholder="Masukkan kata sandi anda" required
                                    style="padding-right: 55px; box-shadow: none;">

                                <button type="button" id="togglePassword"
                                    class="absolute right-0 top-0 h-[55px] w-[55px] flex items-center justify-center text-[22px] text-gray-500 hover:text-primary-500 focus:outline-none cursor-pointer"
                                    style="background: transparent; border: none;">
                                    <i class="ri-eye-off-line" id="passwordIcon"></i>
                                </button>

                            </div>

                            <!-- Pesan Error -->
                            <p id="password-min-error" class="hidden text-danger-500 text-sm mt-[8px]">
                                Kata sandi minimal 6 karakter
                            </p>

                        </div>

                        <!-- FORGOT PASSWORD -->
                        <a href="<?= base_url('forgot-password') ?>"
                            class="inline-block text-primary-500 transition-all font-semibold hover:underline">

                            Lupa Kata Sandi?

                        </a>

                        <!-- BUTTON LOGIN -->
                        <button type="submit" id="login-btn" disabled
                            class="md:text-md block w-full text-center transition-all rounded-md font-medium mt-[20px] md:mt-[25px] py-[12px] px-[25px] text-white bg-primary-500 hover:bg-primary-400 opacity-50 cursor-not-allowed">

                            <span class="flex items-center justify-center gap-[5px]">

                                <i class="material-symbols-outlined">
                                    login
                                </i>

                                Masuk

                            </span>

                        </button>

                    </form>

                    <!-- REGISTER -->
                    <p class="mt-[15px] md:mt-[20px]">

                        Belum memiliki akun?

                        <a href="<?= base_url("register") ?>"
                            class="text-primary-500 transition-all font-semibold hover:underline">

                            Daftar

                        </a>

                    </p>

                </div>

            </div>

        </div>

    </div>
    <!-- End Sign In -->

    <!-- Links Of JS File -->
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

            // =========================
            // ELEMENT
            // =========================
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const passwordMinError = document.getElementById('password-min-error');
            const loginBtn = document.getElementById('login-btn');

            // =========================
            // TOGGLE PASSWORD
            // =========================
            if (document.getElementById('togglePassword')) {
                document.getElementById('togglePassword').addEventListener('click', function () {
                    const passwordIcon = document.getElementById('passwordIcon');

                    if (password.type === 'password') {
                        password.type = 'text';
                        passwordIcon.classList.remove('ri-eye-off-line');
                        passwordIcon.classList.add('ri-eye-line');
                    } else {
                        password.type = 'password';
                        passwordIcon.classList.remove('ri-eye-line');
                        passwordIcon.classList.add('ri-eye-off-line');
                    }
                });
            }

            // =========================
            // VALIDASI FORM & TOMBOL
            // =========================
            function validateForm() {
                // Peringatan minimal 6 karakter
                if (password && password.value !== '') {
                    if (password.value.length < 6) {
                        if (passwordMinError) passwordMinError.classList.remove('hidden');
                        password.classList.add('border-danger-500');
                    } else {
                        if (passwordMinError) passwordMinError.classList.add('hidden');
                        password.classList.remove('border-danger-500');
                    }
                } else {
                    if (passwordMinError) passwordMinError.classList.add('hidden');
                    if (password) password.classList.remove('border-danger-500');
                }

                // Tombol menyala jika ada salah satu yang diisi
                if (loginBtn) {
                    if ((email && email.value.trim() !== '') || (password && password.value !== '')) {
                        loginBtn.disabled = false;
                        loginBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                    } else {
                        loginBtn.disabled = true;
                        loginBtn.classList.add('opacity-50', 'cursor-not-allowed');
                    }
                }
            }

            if (email) email.addEventListener('input', validateForm);
            if (password) password.addEventListener('input', validateForm);

            // Jalankan sekali saat halaman dimuat agar tombol menyesuaikan inputan (jika ada nilai yang tertinggal)
            validateForm();

            // =========================
            // LOGIKA KLIK TOMBOL MASUK
            // =========================
            if (loginBtn) {
                loginBtn.addEventListener('click', function (e) {
                    const inputEmail = email ? email.value.trim() : '';
                    const inputPassword = password ? password.value : '';

                    // Jika klik tombol tapi masih ada kolom kosong, cegah form terkirim & munculkan warning kuning
                    if (inputEmail === '' || inputPassword === '') {
                        e.preventDefault();
                        showAlert('Email dan Kata Sandi harus diisi dengan lengkap!', 'warning');
                        return;
                    }

                    // JIKA SEMUA TERISI, BIARKAN FORM DIKIRIM (Tidak ada e.preventDefault)
                    // Form akan otomatis melakukan proses POST ke backend Anda.
                });
            }

        });
    </script>

</body>

</html>