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
    <title>Daftar</title>

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

    <!-- Sign Up -->
    <div class="bg-white dark:bg-[#0a0e19] py-[60px] md:py-[80px] lg:py-[120px] xl:py-[135px]">

        <div class="mx-auto px-[12.5px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1255px]">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">

                <!-- IMAGE -->
                <div
                    class="xl:ltr:-mr-[25px] xl:rtl:-ml-[25px] 2xl:ltr:-mr-[45px] 2xl:rtl:-ml-[45px] rounded-[25px] order-2 lg:order-1">

                    <img src="<?= base_url("assets/images/login-photo.webp") ?>" alt="sign-up-image"
                        class="rounded-[25px]">

                </div>

                <!-- FORM -->
                <div class="xl:ltr:pl-[90px] xl:rtl:pr-[90px] 2xl:ltr:pl-[120px] 2xl:rtl:pr-[120px] order-1 lg:order-2">

                    <img src="<?= base_url("assets/images/otw.ico") ?>" class="h-[50px] w-[200px]" alt="logo">

                    <div class="my-[17px] md:my-[25px]">

                        <h1 class="!font-semibold !text-[22px] md:!text-xl lg:!text-2xl !mb-[5px] md:!mb-[7px]">
                            Selamat Datang di CV. OTW Computer Gusaha!
                        </h1>

                        <p class="font-medium lg:text-md text-[#445164] dark:text-gray-400">
                            Buat akun baru dengan email google anda!
                        </p>

                    </div>

                    <!-- ERROR MESSAGE -->
                    <?php if (session()->getFlashdata('error')): ?>

                        <div class="bg-red-100 text-red-600 p-3 rounded-md mb-4">
                            <?= session()->getFlashdata('error'); ?>
                        </div>

                    <?php endif; ?>

                    <!-- FORM REGISTER -->
                    <form action="<?= base_url('register/process') ?>" method="post" autocomplete="off">

                        <?= csrf_field(); ?>

                        <!-- FAKE AUTOFILL BLOCKER -->
                        <input type="text" style="display:none">
                        <input type="password" style="display:none">

                        <!-- GOOGLE BUTTON -->
                        <div class="flex items-center justify-between mb-[20px] md:mb-[23px] gap-[12px]">

                            <div class="grow">

                                <button type="button"
                                    class="block text-center w-full rounded-md transition-all py-[8px] md:py-[10.5px] px-[15px] md:px-[25px] text-black dark:text-white border border-[#D6DAE1] bg-white dark:bg-[#0a0e19] dark:border-[#172036] shadow-sm hover:border-primary-500">

                                    <img src="<?= base_url("assets/images/icons/google.svg") ?>" class="inline-block"
                                        alt="google">

                                </button>

                            </div>

                        </div>

                        <!-- NAMA -->
                        <div class="mb-[15px] relative">

                            <label class="mb-[10px] md:mb-[12px] text-black dark:text-white font-medium block">
                                Nama Lengkap
                            </label>

                            <input type="text" name="name" autocomplete="off" value=""
                                class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                placeholder="Masukkan nama lengkap anda" required>

                        </div>

                        <!-- EMAIL -->
                        <div class="mb-[15px] relative">

                            <label class="mb-[10px] md:mb-[12px] text-black dark:text-white font-medium block">
                                Alamat Email
                            </label>

                            <input type="email" name="email" autocomplete="off" value=""
                                class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                placeholder="Masukkan alamat email anda" required>

                        </div>

                        <!-- PASSWORD -->
                        <div class="mb-[15px]">

                            <label class="mb-[10px] md:mb-[12px] text-black dark:text-white font-medium block">
                                Kata Sandi
                            </label>

                            <div class="relative block w-full">

                                <input type="password" name="password" id="password" autocomplete="new-password"
                                    value="" placeholder="Masukkan kata sandi anda" required
                                    class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                    style="padding-right: 55px; box-shadow: none;">

                                <button type="button" id="togglePassword"
                                    class="absolute right-0 top-0 h-[55px] w-[55px] flex items-center justify-center text-[22px] text-gray-500 hover:text-primary-500 focus:outline-none cursor-pointer"
                                    style="background: transparent; border: none;">
                                    <i class="ri-eye-off-line" id="passwordIcon"></i>
                                </button>

                            </div>

                            <p id="password-min-error" class="hidden text-danger-500 text-sm mt-[8px]">
                                Kata sandi minimal 6 karakter
                            </p>

                        </div>

                        <!-- KONFIRMASI PASSWORD -->
                        <div class="mb-[15px]">

                            <label class="mb-[10px] md:mb-[12px] text-black dark:text-white font-medium block">
                                Konfirmasi Kata Sandi
                            </label>

                            <div class="relative block w-full">

                                <input type="password" name="confirm_password" id="confirm_password"
                                    autocomplete="new-password" value="" placeholder="Konfirmasi kata sandi anda"
                                    required
                                    class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                    style="padding-right: 55px; box-shadow: none;">

                                <button type="button" id="toggleConfirmPassword"
                                    class="absolute right-0 top-0 h-[55px] w-[55px] flex items-center justify-center text-[22px] text-gray-500 hover:text-primary-500 focus:outline-none cursor-pointer"
                                    style="background: transparent; border: none;">
                                    <i class="ri-eye-off-line" id="confirmPasswordIcon"></i>
                                </button>

                            </div>

                            <p id="password-error" class="hidden text-danger-500 text-sm mt-[8px]">
                                Kata sandi tidak cocok
                            </p>

                        </div>

                        <!-- BUTTON REGISTER -->
                        <button type="submit" id="register-btn"
                            class="md:text-md block w-full text-center transition-all rounded-md font-medium my-[20px] md:my-[25px] py-[12px] px-[25px] text-white bg-primary-500 hover:bg-primary-400">

                            <span class="flex items-center justify-center gap-[5px]">

                                <i class="material-symbols-outlined">
                                    person_4
                                </i>

                                Daftar

                            </span>

                        </button>

                    </form>

                    <!-- TERMS -->
                    <p class="!leading-[1.6]">

                        Dengan mengonfirmasi email Anda, Anda setuju dengan

                        <a href="#"
                            class="font-medium text-black dark:text-white transition-all hover:text-primary-500">

                            Syarat Layanan

                        </a>

                        dan bahwa Anda telah membaca dan memahami

                        <a href="#"
                            class="font-medium text-black dark:text-white transition-all hover:text-primary-500">

                            Kebijakan Privasi

                        </a>

                        kami

                    </p>

                    <!-- LOGIN -->
                    <p class="!leading-[1.6]">

                        Sudah memiliki akun?

                        <a href="<?= base_url("login") ?>"
                            class="text-primary-500 transition-all font-semibold hover:underline">

                            Masuk

                        </a>

                    </p>

                </div>

            </div>

        </div>

    </div>
    <!-- End Sign Up -->

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
            // ELEMENT
            // =========================
            const password = document.getElementById('password');

            const confirmPassword = document.getElementById('confirm_password');

            const registerBtn = document.getElementById('register-btn');

            const passwordMinError = document.getElementById('password-min-error');

            const passwordMatchError = document.getElementById('password-error');

            // =========================
            // TOGGLE PASSWORD
            // =========================
            document.getElementById('togglePassword')
                .addEventListener('click', function () {

                    const passwordIcon =
                        document.getElementById('passwordIcon');

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

            // =========================
            // TOGGLE CONFIRM PASSWORD
            // =========================
            document.getElementById('toggleConfirmPassword')
                .addEventListener('click', function () {

                    const confirmPasswordIcon =
                        document.getElementById('confirmPasswordIcon');

                    if (confirmPassword.type === 'password') {

                        confirmPassword.type = 'text';

                        confirmPasswordIcon.classList.remove('ri-eye-off-line');

                        confirmPasswordIcon.classList.add('ri-eye-line');

                    } else {

                        confirmPassword.type = 'password';

                        confirmPasswordIcon.classList.remove('ri-eye-line');

                        confirmPasswordIcon.classList.add('ri-eye-off-line');

                    }

                });

            // =========================
            // VALIDASI FORM
            // =========================
            function validateForm() {

                let valid = true;

                // =========================
                // PASSWORD MINIMAL 6
                // =========================
                if (password.value !== '' && password.value.length < 6) {

                    passwordMinError.classList.remove('hidden');

                    password.classList.add('border-danger-500');

                    valid = false;

                } else {

                    passwordMinError.classList.add('hidden');

                    password.classList.remove('border-danger-500');

                }

                // =========================
                // PASSWORD TIDAK COCOK
                // =========================
                if (
                    confirmPassword.value !== '' &&
                    password.value !== confirmPassword.value
                ) {

                    passwordMatchError.classList.remove('hidden');

                    confirmPassword.classList.add('border-danger-500');

                    valid = false;

                } else {

                    passwordMatchError.classList.add('hidden');

                    confirmPassword.classList.remove('border-danger-500');

                }

                // =========================
                // BUTTON
                // =========================
                if (valid) {

                    registerBtn.disabled = false;

                    registerBtn.classList.remove(
                        'opacity-50',
                        'cursor-not-allowed'
                    );

                } else {

                    registerBtn.disabled = true;

                    registerBtn.classList.add(
                        'opacity-50',
                        'cursor-not-allowed'
                    );

                }

            }

            // =========================
            // EVENT LISTENER
            // =========================
            password.addEventListener('input', validateForm);

            confirmPassword.addEventListener('input', validateForm);

        });
    </script>

</body>

</html>