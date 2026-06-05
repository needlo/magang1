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

    <title>Verifikasi OTP</title>

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
        <i class="material-symbols-outlined !text-[20px] md:!text-[22px]">light_mode</i>
    </button>

    <div class="bg-white dark:bg-[#0a0e19] py-[60px] md:py-[80px] lg:py-[120px] xl:py-[135px] min-h-screen">
        <div class="mx-auto px-[12.5px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1255px]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center">

                <div
                    class="xl:ltr:-mr-[25px] xl:rtl:-ml-[25px] 2xl:ltr:-mr-[45px] 2xl:rtl:-ml-[45px] rounded-[25px] order-2 lg:order-1">
                    <img src="<?= base_url("assets/images/login-photo.webp") ?>" alt="sign-up-image"
                        class="rounded-[25px]">
                </div>

                <div class="xl:ltr:pl-[90px] xl:rtl:pr-[90px] 2xl:ltr:pl-[120px] 2xl:rtl:pr-[120px] order-1 lg:order-2">
                    <img src="<?= base_url("assets/images/otw.ico") ?>" class="h-[50px] w-[200px]" alt="logo">

                    <?php if (session()->getFlashdata('verified')): ?>
                        <div class="my-[17px] md:my-[25px] text-center">
                            <div class="flex items-center justify-center gap-2 mb-[5px] md:mb-[7px]">
                                <h1 class="!font-semibold !text-[22px] md:!text-xl lg:!text-2xl !mb-0">
                                    Verifikasi Berhasil!
                                </h1>
                                <i class="ri-checkbox-circle-fill text-success-500 text-3xl leading-none"></i>
                            </div>

                            <p class="font-medium lg:text-md text-[#445164] dark:text-gray-400 mb-6">
                                Alamat email Anda telah berhasil diverifikasi. Akun Anda kini sudah aktif.
                            </p>

                            <a href="<?= base_url("login") ?>" class="md:text-md block w-full text-center transition-all rounded-md font-medium py-[12px]
                            px-[25px] text-white bg-primary-500 hover:bg-primary-400">
                                Lanjut ke Halaman Login
                            </a>
                        </div>
                    <?php else: ?>
                        <div class="my-[17px] md:my-[25px]">
                            <h1 class="!font-semibold !text-[22px] md:!text-xl lg:!text-2xl !mb-[5px] md:!mb-[7px]">
                                Verifikasi Email Anda
                            </h1>
                            <p class="font-medium lg:text-md text-[#445164] dark:text-gray-400">
                                Masukkan 6 digit kode OTP yang telah dikirimkan ke email Anda.
                            </p>
                        </div>

                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="bg-red-100 text-red-600 p-3 rounded-md mb-4">
                                <?= session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>

                        <?php if (session()->getFlashdata('success')): ?>
                            <div class="bg-green-100 text-green-700 p-3 rounded-md mb-4">
                                <?= session()->getFlashdata('success'); ?>
                            </div>
                        <?php endif; ?>

                        <form action="<?= base_url('verify-otp/process') ?>" method="post" autocomplete="off">
                            <?= csrf_field(); ?>

                            <div class="mb-[15px] relative">
                                <label class="mb-[10px] md:mb-[12px] text-black dark:text-white font-medium block">
                                    Kode OTP (6 Digit)
                                </label>
                                <input type="text" name="otp_code" maxlength="6" autocomplete="off"
                                    class="h-[65px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all focus:border-primary-500 text-center text-3xl tracking-[0.5em] font-bold"
                                    placeholder="------" required>
                            </div>

                            <button type="submit"
                                class="md:text-md block w-full text-center transition-all rounded-md font-medium my-[20px] py-[12px] px-[25px] text-white bg-primary-500 hover:bg-primary-400">
                                Verifikasi
                            </button>
                        </form>

                        <p class="!leading-[1.6] text-center mt-4 text-[#445164] dark:text-gray-400">
                            Belum menerima kode?
                            <button type="button" id="btn-resend"
                                class="text-primary-500 font-semibold cursor-not-allowed opacity-50 transition-all"
                                disabled>
                                Kirim Ulang (<span id="timer">60</span>s)
                            </button>
                        </p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url("assets/js/custom.js") ?>"></script>

    <?php if (!session()->get('verification_success')): // Pastikan session ini menyesuaikan dengan kondisi sebelumnya ?>
        <script>
            document.addEventListener('DOMContentLoaded', function () {

                // =========================
                // 1. ALERT CUSTOM (Global)
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

                // Jadikan global
                window.showAlert = showAlert;

                // Tangkap pesan dari controller saat load pertama kali
                    <?php if (session()->getFlashdata('error')): ?>
                    showAlert('<?= addslashes(session()->getFlashdata('error')) ?>', 'danger');
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('success')): ?>
                    showAlert('<?= addslashes(session()->getFlashdata('success')) ?>', 'success');
                    <?php endif; ?>

                // =========================
                // 2. LOGIKA TIMER & AJAX RESEND
                // =========================
                let timeLeft = 60;
                const btnResend = document.getElementById('btn-resend');
                let countdown; // Deklarasikan di luar agar bisa di-reset kapan saja

                // Fungsi untuk menjalankan timer
                function startTimer() {
                    countdown = setInterval(() => {
                        let currentTimerSpan = document.getElementById('timer'); // Ambil elemen span terbaru
                        if (timeLeft <= 0) {
                            clearInterval(countdown);
                            btnResend.innerHTML = "Kirim Ulang Sekarang";
                            btnResend.disabled = false;
                            btnResend.classList.remove('cursor-not-allowed', 'opacity-50');
                            btnResend.classList.add('hover:underline');
                        } else {
                            if (currentTimerSpan) currentTimerSpan.innerHTML = timeLeft;
                            timeLeft -= 1;
                        }
                    }, 1000);
                }

                // Jalankan timer saat halaman pertama kali diload
                startTimer();

                // Logika Klik Resend
                btnResend.addEventListener('click', function () {
                    this.disabled = true;
                    this.innerHTML = "Mengirim...";
                    this.classList.add('cursor-not-allowed', 'opacity-50');
                    this.classList.remove('hover:underline');

                    // Proses Fetch AJAX
                    fetch("<?= base_url('verify-otp/resend') ?>", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: '<?= csrf_token() ?>=<?= csrf_hash() ?>' // CSRF Token
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status) {
                                // Tampilkan alert custom sukses
                                showAlert(data.message, 'success');

                                // Reset waktu TANPA reload halaman
                                timeLeft = 60;
                                btnResend.innerHTML = `Kirim Ulang (<span id="timer">60</span>s)`;

                                // Hentikan timer lama dan jalankan yang baru
                                clearInterval(countdown);
                                startTimer();
                            } else {
                                // Tampilkan alert custom gagal
                                showAlert(data.message, 'danger');

                                // Kembalikan tombol ke state aktif
                                this.innerHTML = "Kirim Ulang Sekarang";
                                this.disabled = false;
                                this.classList.remove('cursor-not-allowed', 'opacity-50');
                            }
                        }).catch(err => {
                            showAlert('Terjadi kesalahan koneksi server.', 'danger');
                            this.innerHTML = "Kirim Ulang Sekarang";
                            this.disabled = false;
                            this.classList.remove('cursor-not-allowed', 'opacity-50');
                        });
                });
            });
        </script>
    <?php endif; ?>
</body>

</html>