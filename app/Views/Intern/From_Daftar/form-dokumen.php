<!DOCTYPE html>
<html dir="ltr">

<head>
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
    <title>Upload Dokumen</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <style>
        /* Menimpa margin bawaan Trezo untuk semua ukuran layar */
        .header-area,
        .main-content {
            margin-left: 0 !important;
            left: 0 !important;
            width: 100% !important;
            max-width: 100% !important;
        }

        /* Menyesuaikan padding kiri-kanan agar rapi seperti aslinya */
        @media (min-width: 768px) {

            .header-area,
            .main-content {
                padding-left: 25px !important;
                padding-right: 25px !important;
            }
        }
    </style>
</head>

<body class="bg-[#f5f6fa] dark:bg-[#15203c]">

    <!-- Header -->
    <?= $this->include('Layout/Header') ?>
    <!-- End Header -->

    <!-- Main Content -->
    <div class="main-content transition-all flex flex-col overflow-hidden min-h-screen !ml-0 !w-full pt-[90px] px-[20px] md:px-[25px]"
        id="main-content">

        <form id="dokumen-form" action="form-konfirmasi.html" method="GET">

            <div id="step-2" class="max-w-3xl mx-auto transition-all duration-300 w-full">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px] shadow-sm">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px]">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0 text-lg">Tahap 2: Upload Dokumen</h5>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-[15px]">

                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[10px] md:p-[15px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">Upload CV (pdf)</h5>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div id="fileUploader1">
                                    <div
                                        class="relative flex items-center justify-center overflow-hidden rounded-md py-[65px] px-[20px] border border-gray-200 dark:border-[#172036]">
                                        <div class="flex items-center justify-center pointer-events-none">
                                            <div
                                                class="w-[35px] h-[35px] border border-gray-100 dark:border-[#15203c] flex items-center justify-center rounded-md text-primary-500 text-lg ltr:mr-[12px] rtl:ml-[12px]">
                                                <i class="ri-upload-2-line"></i>
                                            </div>
                                            <p class="!leading-[1.5] file-name-display text-center">
                                                <strong class="text-black dark:text-white">Click to upload</strong><br>
                                                your file here
                                            </p>
                                        </div>
                                        <input type="file" id="fileInput1" accept=".pdf"
                                            class="absolute top-0 left-0 right-0 bottom-0 rounded-md z-[1] opacity-0 cursor-pointer">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[10px] md:p-[15px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">Upload Proposal Magang (pdf)</h5>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div id="fileUploader2">
                                    <div
                                        class="relative flex items-center justify-center overflow-hidden rounded-md py-[65px] px-[20px] border border-gray-200 dark:border-[#172036]">
                                        <div class="flex items-center justify-center pointer-events-none">
                                            <div
                                                class="w-[35px] h-[35px] border border-gray-100 dark:border-[#15203c] flex items-center justify-center rounded-md text-primary-500 text-lg ltr:mr-[12px] rtl:ml-[12px]">
                                                <i class="ri-upload-2-line"></i>
                                            </div>
                                            <p class="!leading-[1.5] file-name-display text-center">
                                                <strong class="text-black dark:text-white">Click to upload</strong><br>
                                                your file here
                                            </p>
                                        </div>
                                        <input type="file" id="fileInput2" accept=".pdf"
                                            class="absolute top-0 left-0 right-0 bottom-0 rounded-md z-[1] opacity-0 cursor-pointer">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[10px] md:p-[15px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">Upload Surat Pengantar (pdf)</h5>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div id="fileUploader3">
                                    <div
                                        class="relative flex items-center justify-center overflow-hidden rounded-md py-[65px] px-[20px] border border-gray-200 dark:border-[#172036]">
                                        <div class="flex items-center justify-center pointer-events-none">
                                            <div
                                                class="w-[35px] h-[35px] border border-gray-100 dark:border-[#15203c] flex items-center justify-center rounded-md text-primary-500 text-lg ltr:mr-[12px] rtl:ml-[12px]">
                                                <i class="ri-upload-2-line"></i>
                                            </div>
                                            <p class="!leading-[1.5] file-name-display text-center">
                                                <strong class="text-black dark:text-white">Click to upload</strong><br>
                                                your file here
                                            </p>
                                        </div>
                                        <input type="file" id="fileInput3" accept=".pdf"
                                            class="absolute top-0 left-0 right-0 bottom-0 rounded-md z-[1] opacity-0 cursor-pointer">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="flex items-center justify-between mb-[25px]">
                    <button type="button" onclick="window.location.href='<?= base_url('pendaftaran') ?>'" class="font-medium inline-block transition-all rounded-md md:text-md ltr:mr-[15px] rtl:ml-[15px] py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-danger-500 text-white hover:bg-danger-400">
                        Batal
                    </button>
                    <button type="button" onclick="window.location.href='<?= base_url('pendaftaran/waiting') ?>'" class="font-medium inline-block transition-all rounded-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-primary-500 text-white hover:bg-primary-400 shadow-sm">
                        <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
                            <i
                                class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2">send</i>
                            Kirim Pendaftaran
                        </span>
                    </button>
                </div>
            </div>

        </form>

        <div class="grow"></div>

        <!-- Footer -->
        <footer
            class="bg-white dark:bg-[#0c1427] rounded-t-md px-[20px] md:px-[25px] py-[15px] md:py-[20px] text-center">
            <p>
                © 2026 <span class="text-purple-500 font-medium">Sistem Informasi Magang</span> | Hak Cipta Dilindungi
                oleh <a href="#" class="text-primary-500 transition-all hover:underline">CV OTW Computer Gusaha</a>
            </p>
        </footer>
        <!-- End Footer -->

        <!-- Modal Term & Condition -->
        <div id="privacyModal"
            style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 9999; background-color: rgba(0,0,0,0.6);"
            class="hidden flex items-center justify-center transition-all backdrop-blur-sm px-[20px]">

            <div style="width: 100%; max-width: 750px;"
                class="trezo-card bg-white dark:bg-[#0c1427] rounded-md shadow-2xl flex flex-col max-h-[90vh]">

                <div
                    class="trezo-card-header p-[20px] md:p-[25px] border-b border-gray-100 dark:border-[#172036] flex justify-between items-center">
                    <h5 class="!mb-0 text-lg font-bold flex items-center gap-[10px]">
                        <i class="material-symbols-outlined text-primary-500">policy</i>
                        Syarat & Ketentuan Magang
                    </h5>
                    <button type="button" onclick="hidePrivacyModal()"
                        class="text-gray-400 hover:text-danger-500 transition-all leading-none">
                        <i class="material-symbols-outlined !text-[24px]">close</i>
                    </button>
                </div>

                <div class="trezo-card-content p-[20px] md:p-[25px] overflow-y-auto">

                    <div style="height: 280px; padding: 25px;"
                        class="bg-gray-50 dark:bg-[#15203c] rounded-md mb-[25px] text-sm text-gray-700 dark:text-gray-300 overflow-y-auto border border-gray-100 dark:border-[#172036]">
                        <p style="margin-bottom: 15px;" class="font-bold text-black dark:text-white text-base">Kebijakan
                            CV OTW Computer Gusaha</p>
                        <p style="margin-bottom: 20px; line-height: 1.6;">Selamat datang di portal pendaftaran magang CV
                            OTW Computer Gusaha. Sebelum Anda mengirimkan pendaftaran, harap membaca dengan saksama
                            poin-poin berikut:</p>

                        <ol style="list-style-type: decimal; padding-left: 25px; margin-bottom: 20px;">
                            <li style="margin-bottom: 15px; line-height: 1.6; padding-left: 5px;"><strong>Penggunaan
                                    Data:</strong> Seluruh data, informasi pribadi, dan dokumen akademik yang dikirimkan
                                akan dijaga kerahasiaannya dan digunakan semata-mata untuk keperluan seleksi serta
                                administrasi.</li>
                            <li style="margin-bottom: 15px; line-height: 1.6; padding-left: 5px;"><strong>Kerahasiaan
                                    (NDA):</strong> Peserta magang dilarang keras menyebarluaskan kode sumber (source
                                code), desain, data internal perusahaan, maupun rahasia dagang kepada pihak luar baik
                                selama maupun setelah masa magang berakhir.</li>
                            <li style="margin-bottom: 15px; line-height: 1.6; padding-left: 5px;"><strong>Hak Kekayaan
                                    Intelektual:</strong> Seluruh hasil karya, proyek, atau produk yang dikembangkan
                                selama masa magang adalah milik sepenuhnya CV OTW Computer Gusaha.</li>
                            <li style="margin-bottom: 15px; line-height: 1.6; padding-left: 5px;">
                                <strong>Sanksi:</strong> Perusahaan berhak menolak, membatalkan status magang, atau
                                mengambil langkah hukum apabila ditemukan pemalsuan dokumen atau pelanggaran kode etik
                                secara sengaja.
                            </li>
                        </ol>
                        <p class="italic text-xs text-gray-500">Diperbarui: Mei 2026</p>
                    </div>

                    <div style="display: flex; flex-direction: column; gap: 15px;">
                        <label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"
                            class="group">
                            <input type="checkbox" id="agree-data" onchange="checkAgreements()"
                                style="margin-top: 3px; width: 18px; height: 18px; flex-shrink: 0;"
                                class="accent-primary-500 cursor-pointer">
                            <span style="line-height: 1.6;"
                                class="text-sm text-gray-700 dark:text-gray-300 group-hover:text-black dark:group-hover:text-white transition-all">
                                Saya menyatakan bahwa seluruh biodata dan dokumen yang saya unggah adalah <strong>benar,
                                    asli, dan dapat dipertanggungjawabkan</strong>.
                            </span>
                        </label>
                        <label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"
                            class="group">
                            <input type="checkbox" id="agree-policy" onchange="checkAgreements()"
                                style="margin-top: 3px; width: 18px; height: 18px; flex-shrink: 0;"
                                class="accent-primary-500 cursor-pointer">
                            <span style="line-height: 1.6;"
                                class="text-sm text-gray-700 dark:text-gray-300 group-hover:text-black dark:group-hover:text-white transition-all">
                                Saya telah membaca, memahami, dan <strong>menyetujui seluruh Kebijakan Privasi serta
                                    Syarat & Ketentuan</strong> dari CV OTW Computer Gusaha.
                            </span>
                        </label>
                    </div>

                </div>

                <div
                    class="trezo-card-footer p-[20px] md:p-[25px] border-t border-gray-100 dark:border-[#172036] flex justify-end gap-[15px] bg-gray-50 dark:bg-[#0a101f] rounded-b-md">
                    <button type="button" onclick="hidePrivacyModal()"
                        class="font-medium rounded-md py-[10px] px-[20px] bg-white border border-gray-200 text-gray-700 hover:bg-gray-100 dark:bg-[#0c1427] dark:border-[#172036] dark:text-gray-300 dark:hover:bg-[#15203c] transition-all">
                        Kembali Mengedit
                    </button>
                    <button type="button" id="btn-submit-final" onclick="submitFinalForm()" disabled
                        class="font-medium rounded-md py-[10px] px-[20px] bg-primary-500 text-white opacity-50 cursor-not-allowed transition-all flex items-center gap-[8px]">
                        <i class="material-symbols-outlined !text-[18px]">verified</i>
                        Setuju & Kirim Pendaftaran
                    </button>
                </div>

            </div>
        </div>
        <!-- End Modal Term & Condition -->

    </div>
    <!-- End Main Content -->

    <!-- Script untuk mengelola Modal dan validasi checkbox -->
    <script>
        document.querySelectorAll('input[type="file"]').forEach(input => {
            input.addEventListener('change', function () {
                // Cari tag <p> terdekat yang punya class file-name-display
                const display = this.parentElement.querySelector('.file-name-display');

                if (this.files.length > 0) {
                    // Jika file dipilih, ganti teksnya jadi nama file
                    display.innerHTML = `<strong class="text-primary-500 truncate block max-w-[200px]">${this.files[0].name}</strong> <span class="text-success-500 text-sm">File Siap</span>`;
                } else {
                    // Jika batal memilih, kembalikan teks aslinya
                    display.innerHTML = `<strong class="text-black dark:text-white">Click to upload</strong><br> your file here`;
                }
            });
        });

        const showAlert = (msg, type = 'success') => {
            const c = {
                success: 'text-success-500 bg-success-50 border-success-200 hover:text-success-700',
                danger: 'text-danger-500 bg-danger-50 border-danger-200 hover:text-danger-700',
                warning: 'text-orange-500 bg-orange-50 border-orange-200 hover:text-orange-700'
            }[type];

            let id = 'a' + Date.now();
            document.body.insertAdjacentHTML('beforeend', `<div id="${id}" style="position:fixed;top:75px;right:25px;z-index:9999;width:350px;max-width:90vw;transition:0.5s" class="py-[15px] px-[20px] ${c} dark:bg-[#15203c] rounded-md flex justify-between shadow-xl font-medium"><span>${msg}</span><button onclick="this.parentNode.remove()" class="text-[20px] ml-3"><i class="ri-close-line"></i></button></div>`);

            setTimeout(() => { let e = document.getElementById(id); e && (e.style.opacity = 0, setTimeout(() => e.remove(), 500)) }, 3000);
        };
        // 1. Tampilkan Modal (Cek file dengan 1 baris logika)
        const showPrivacyModal = () => {
            const files = [...document.querySelectorAll('#dokumen-form input[type="file"]')];
            if (!files.every(f => f.value)) return showAlert("Harap unggah seluruh dokumen yang diwajibkan terlebih dahulu!", "danger");
            document.getElementById('privacyModal').classList.remove('hidden');
        };

        // Menampilkan alert setiap kali user berhasil memilih file
        document.querySelectorAll('input[type="file"]').forEach(input => {
            input.addEventListener('change', (e) => {
                if (e.target.files.length > 0) showAlert("Dokumen berhasil diunggah!", "success");
            });
        });

        // 2. Sembunyikan Modal (One-liner)
        const hidePrivacyModal = () => document.getElementById('privacyModal').classList.add('hidden');

        // 3. Validasi Checkbox (Menggunakan toggle class agar bebas dari if-else)
        const checkAgreements = () => {
            const isValid = document.getElementById('agree-data').checked && document.getElementById('agree-policy').checked;
            const btn = document.getElementById('btn-submit-final');

            btn.disabled = !isValid;
            ['opacity-50', 'cursor-not-allowed'].forEach(c => btn.classList.toggle(c, !isValid));
            ['hover:bg-primary-600', 'shadow-md'].forEach(c => btn.classList.toggle(c, isValid));
        };

        // 4. Submit Form Asli
        const submitFinalForm = () => {
            const btn = document.getElementById('btn-submit-final');
            btn.innerHTML = `<i class="ri-loader-4-line animate-spin text-[18px]"></i> Mengirim...`;
            btn.disabled = true;
            setTimeout(() => document.getElementById('dokumen-form').submit(), 500);


        };

    </script>
    <!-- End Script -->

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