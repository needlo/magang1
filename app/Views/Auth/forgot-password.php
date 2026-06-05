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

    <title>Lupa Kata Sandi</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>

    <button type="button"
        class="light-dark-toggle leading-none inline-block transition-all text-[#fe7a36] absolute top-[20px] md:top-[25px] ltr:right-[20px] rtl:left-[20px] ltr:md:right-[25px] rtl:md:left-[25px]"
        id="light-dark-toggle">
        <i class="material-symbols-outlined !text-[20px] md:!text-[22px]">
            light_mode
        </i>
    </button>
    <div
        class="bg-white dark:bg-[#0a0e19] py-[60px] md:py-[80px] lg:py-[120px] xl:py-[135px] min-h-screen flex items-center">

        <div class="mx-auto px-[12.5px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1255px] w-full">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">

                <div
                    class="xl:ltr:-mr-[25px] xl:rtl:-ml-[25px] 2xl:ltr:-mr-[45px] 2xl:rtl:-ml-[45px] rounded-[25px] order-2 lg:order-1">
                    <img src="<?= base_url("assets/images/login-photo.webp") ?>" alt="forgot-password-image"
                        class="rounded-[25px]">
                </div>

                <div class="xl:ltr:pl-[90px] xl:rtl:pr-[90px] 2xl:ltr:pl-[120px] 2xl:rtl:pr-[120px] order-1 lg:order-2">

                    <img src="<?= base_url("assets/images/otw.ico") ?>" class="h-[50px] w-[200px]" alt="logo">

                    <div class="my-[17px] md:my-[25px]">
                        <h1 class="!font-semibold !text-[22px] md:!text-xl lg:!text-2xl !mb-[5px] md:!mb-[7px]">
                            Lupa Kata Sandi?
                        </h1>
                        <p class="font-medium lg:text-md text-[#445164] dark:text-gray-400">
                            Masukkan alamat email Anda yang terdaftar. Kami akan mengirimkan tautan untuk mengatur ulang
                            kata sandi Anda.
                        </p>
                    </div>

                    <form action="<?= base_url('forgot-password/process') ?>" method="post" autocomplete="off">
                        <?= csrf_field(); ?>

                        <div class="mb-[15px] relative">
                            <label class="mb-[10px] md:mb-[12px] text-black dark:text-white font-medium block">
                                Alamat Email
                            </label>
                            <input type="email" name="email" autocomplete="off" value=""
                                class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                                placeholder="Masukkan alamat email Anda" required>
                        </div>

                        <button type="submit"
                            class="md:text-md block w-full text-center transition-all rounded-md font-medium my-[20px] md:my-[25px] py-[12px] px-[25px] text-white bg-primary-500 hover:bg-primary-400">
                            <span class="flex items-center justify-center gap-[5px]">
                                <i class="material-symbols-outlined">
                                    lock_reset
                                </i>
                                Kirim Tautan Reset
                            </span>
                        </button>
                    </form>

                    <p class="!leading-[1.6]">
                        Ingat kata sandi Anda?
                        <a href="<?= base_url("login") ?>"
                            class="text-primary-500 transition-all font-semibold hover:underline">
                            Masuk
                        </a>
                    </p>

                </div>
            </div>
        </div>
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