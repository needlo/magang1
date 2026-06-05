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
    <?= $this->include('Layout/Header/intern-form-daftar') ?>
    <!-- End Header -->

    <!-- Main Content -->
    <div class="main-content transition-all flex flex-col overflow-hidden min-h-screen !ml-0 !w-full pt-[90px] px-[20px] md:px-[25px]"
        id="main-content">


        <form id="dokumen-form" action="<?= base_url('pendaftaran/process-dokumen') ?>" method="POST"
            enctype="multipart/form-data">


            <?= csrf_field(); ?>

            <div id="step-2" class="max-w-3xl mx-auto transition-all duration-300 w-full">

                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px] shadow-sm">

                    <div class="trezo-card-header mb-[20px] md:mb-[25px]">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0 text-lg">
                                Tahap 2: Upload Dokumen
                            </h5>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-[15px]">

                        <!-- CV -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[10px] md:p-[15px] rounded-md">

                            <div class="trezo-card-header mb-[18px] flex items-center justify-between">

                                <div class="trezo-card-title">
                                    <h5 class="!mb-0 text-[15px] font-semibold">
                                        Upload CV (PDF Max 10MB)
                                    </h5>
                                </div>

                            </div>

                            <div class="trezo-card-content">

                                <!-- BOX -->
                                <div class="upload-box relative flex items-center justify-center overflow-hidden rounded-xl py-[60px] px-[20px]
                                border border-gray-200 dark:border-[#172036]
                                hover:border-primary-400
                                transition-all duration-300
                                bg-gray-50/40 dark:bg-[#0a1020]" data-input="cv_file">

                                    <!-- CONTENT -->
                                    <div class="flex flex-col items-center justify-center relative z-[20]">

                                        <!-- ICON -->
                                        <div class="w-[48px] h-[48px]
                                        border border-gray-200 dark:border-[#1e293b]
                                        bg-white dark:bg-[#111827]
                                        flex items-center justify-center
                                        rounded-xl
                                        text-primary-500 text-[22px]
                                        shadow-sm
                                        mb-5">

                                            <i class="ri-upload-2-line"></i>

                                        </div>

                                        <!-- TEXT -->
                                        <div class="text-center file-name-display">

                                            <?php if (!empty($pendaftaran['cv_original_name'])): ?>

                                                <!-- FILE NAME -->
                                                <strong
                                                    class="text-primary-500 break-all block text-[15px] font-semibold leading-[1.6] mb-2">
                                                    <?= $pendaftaran['cv_original_name']; ?>
                                                </strong>

                                                <!-- STATUS -->
                                                <span class="text-success-500 block text-sm mb-4 font-medium">

                                                    File sudah tersimpan

                                                </span>

                                                <!-- ACTION -->
                                                <div class="flex items-center justify-center gap-5">

                                                    <!-- VIEW -->
                                                    <a href="<?= base_url('uploads/cv/' . $pendaftaran['cv_file']); ?>"
                                                        target="_blank"
                                                        class="btn-view-file text-primary-500 hover:text-primary-700 text-[22px] transition-all duration-200 hover:scale-110">

                                                        <i class="ri-eye-line"></i>

                                                    </a>

                                                    <!-- DELETE -->
                                                    <button type="button"
                                                        class="btn-delete-file text-danger-500 hover:text-danger-700 text-[22px] transition-all duration-200 hover:scale-110"
                                                        data-field="cv_file">
                                                        <i class="ri-delete-bin-6-line"></i>
                                                    </button>

                                                </div>

                                            <?php else: ?>

                                                <strong
                                                    class="text-black dark:text-white block text-[15px] font-semibold mb-2">

                                                    Click to upload

                                                </strong>

                                                <span class="text-gray-500 text-sm leading-[1.5]">

                                                    your file here

                                                </span>

                                            <?php endif; ?>

                                        </div>

                                    </div>

                                </div>

                                <!-- INPUT FILE -->
                                <input type="file" name="cv_file" id="cv_file" accept=".pdf,application/pdf"
                                    class="autosave-file hidden">

                            </div>

                        </div>

                        <!-- Proposal -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[10px] md:p-[15px] rounded-md">

                            <div class="trezo-card-header mb-[18px] flex items-center justify-between">

                                <div class="trezo-card-title">
                                    <h5 class="!mb-0 text-[15px] font-semibold">
                                        Upload Proposal (PDF Max 10MB)
                                    </h5>
                                </div>

                            </div>

                            <div class="trezo-card-content">

                                <!-- BOX -->
                                <div class="upload-box relative flex items-center justify-center overflow-hidden rounded-xl py-[60px] px-[20px]
                                border border-gray-200 dark:border-[#172036]
                                hover:border-primary-400
                                transition-all duration-300
                                bg-gray-50/40 dark:bg-[#0a1020]" data-input="proposal_file">

                                    <!-- CONTENT -->
                                    <div class="flex flex-col items-center justify-center relative z-[20]">

                                        <!-- ICON -->
                                        <div class="w-[48px] h-[48px]
                                        border border-gray-200 dark:border-[#1e293b]
                                        bg-white dark:bg-[#111827]
                                        flex items-center justify-center
                                        rounded-xl
                                        text-primary-500 text-[22px]
                                        shadow-sm
                                        mb-5">

                                            <i class="ri-upload-2-line"></i>

                                        </div>

                                        <!-- TEXT -->
                                        <div class="text-center file-name-display">

                                            <?php if (!empty($pendaftaran['proposal_original_name'])): ?>

                                                <!-- FILE NAME -->
                                                <strong
                                                    class="text-primary-500 break-all block text-[15px] font-semibold leading-[1.6] mb-2">
                                                    <?= $pendaftaran['proposal_original_name']; ?>
                                                </strong>

                                                <!-- STATUS -->
                                                <span class="text-success-500 block text-sm mb-4 font-medium">

                                                    File sudah tersimpan

                                                </span>

                                                <!-- ACTION -->
                                                <div class="flex items-center justify-center gap-5">

                                                    <!-- VIEW -->
                                                    <a href="<?= base_url('uploads/proposal/' . $pendaftaran['proposal_file']); ?>"
                                                        target="_blank"
                                                        class="btn-view-file text-primary-500 hover:text-primary-700 text-[22px] transition-all duration-200 hover:scale-110">

                                                        <i class="ri-eye-line"></i>

                                                    </a>

                                                    <!-- DELETE -->
                                                    <button type="button"
                                                        class="btn-delete-file text-danger-500 hover:text-danger-700 text-[22px] transition-all duration-200 hover:scale-110"
                                                        data-field="proposal_file">
                                                        <i class="ri-delete-bin-6-line"></i>
                                                    </button>

                                                </div>

                                            <?php else: ?>

                                                <strong
                                                    class="text-black dark:text-white block text-[15px] font-semibold mb-2">

                                                    Click to upload

                                                </strong>

                                                <span class="text-gray-500 text-sm leading-[1.5]">

                                                    your file here

                                                </span>

                                            <?php endif; ?>

                                        </div>

                                    </div>

                                </div>

                                <!-- INPUT FILE -->
                                <input type="file" name="proposal_file" id="proposal_file" accept=".pdf,application/pdf"
                                    class="autosave-file hidden">

                            </div>

                        </div>

                        <!-- Surat Pengantar -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[10px] md:p-[15px] rounded-md">

                            <div class="trezo-card-header mb-[18px] flex items-center justify-between">

                                <div class="trezo-card-title">
                                    <h5 class="!mb-0 text-[15px] font-semibold">
                                        Upload Surat Pengantar (PDF Max 10MB)
                                    </h5>
                                </div>

                            </div>

                            <div class="trezo-card-content">

                                <!-- BOX -->
                                <div class="upload-box relative flex items-center justify-center overflow-hidden rounded-xl py-[60px] px-[20px]
                                border border-gray-200 dark:border-[#172036]
                                hover:border-primary-400
                                transition-all duration-300
                                bg-gray-50/40 dark:bg-[#0a1020]" data-input="surat_pengantar_file">

                                    <!-- CONTENT -->
                                    <div class="flex flex-col items-center justify-center relative z-[20]">

                                        <!-- ICON -->
                                        <div class="w-[48px] h-[48px]
                                        border border-gray-200 dark:border-[#1e293b]
                                        bg-white dark:bg-[#111827]
                                        flex items-center justify-center
                                        rounded-xl
                                        text-primary-500 text-[22px]
                                        shadow-sm
                                        mb-5">

                                            <i class="ri-upload-2-line"></i>

                                        </div>

                                        <!-- TEXT -->
                                        <div class="text-center file-name-display">

                                            <?php if (!empty($pendaftaran['surat_original_name'])): ?>

                                                <!-- FILE NAME -->
                                                <strong
                                                    class="text-primary-500 break-all block text-[15px] font-semibold leading-[1.6] mb-2">
                                                    <?= $pendaftaran['surat_original_name']; ?>
                                                </strong>

                                                <!-- STATUS -->
                                                <span class="text-success-500 block text-sm mb-4 font-medium">

                                                    File sudah tersimpan

                                                </span>

                                                <!-- ACTION -->
                                                <div class="flex items-center justify-center gap-5">

                                                    <!-- VIEW -->
                                                    <a href="<?= base_url('uploads/surat_pengantar/' . $pendaftaran['surat_pengantar_file']); ?>"
                                                        target="_blank"
                                                        class="btn-view-file text-primary-500 hover:text-primary-700 text-[22px] transition-all duration-200 hover:scale-110">

                                                        <i class="ri-eye-line"></i>

                                                    </a>

                                                    <!-- DELETE -->
                                                    <button type="button"
                                                        class="btn-delete-file text-danger-500 hover:text-danger-700 text-[22px] transition-all duration-200 hover:scale-110"
                                                        data-field="surat_pengantar_file">
                                                        <i class="ri-delete-bin-6-line"></i>
                                                    </button>

                                                </div>

                                            <?php else: ?>

                                                <strong
                                                    class="text-black dark:text-white block text-[15px] font-semibold mb-2">

                                                    Click to upload

                                                </strong>

                                                <span class="text-gray-500 text-sm leading-[1.5]">

                                                    your file here

                                                </span>

                                            <?php endif; ?>

                                        </div>

                                    </div>

                                </div>

                                <!-- INPUT FILE -->
                                <input type="file" name="surat_pengantar_file" id="surat_pengantar_file"
                                    accept=".pdf,application/pdf" class="autosave-file hidden">

                            </div>

                        </div>

                    </div>

                </div>

                <!-- BUTTON -->
                <div class="flex items-center justify-between mb-[25px]">

                    <a href="<?= base_url('pendaftaran') ?>"
                        class="font-medium inline-block transition-all rounded-md md:text-md ltr:mr-[15px] rtl:ml-[15px] py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-danger-500 text-white hover:bg-danger-400">

                        Kembali

                    </a>

                    <button type="button" onclick="showPrivacyModal()"
                        class="font-medium inline-block transition-all rounded-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-primary-500 text-white hover:bg-primary-400 shadow-sm">

                        <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">

                            <i
                                class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2">
                                send
                            </i>

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
            class="hidden items-center justify-center transition-all backdrop-blur-sm px-[20px]">

            <!-- MODAL BOX -->
            <div style="width: 100%; max-width: 780px; margin: 40px auto;"
                class="trezo-card bg-white dark:bg-[#0c1427] rounded-xl shadow-2xl flex flex-col overflow-hidden">

                <!-- HEADER -->
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

                <!-- CONTENT -->
                <div class="trezo-card-content p-[20px] md:p-[25px]">

                    <div
                        class="bg-gray-50 dark:bg-[#15203c] rounded-md mb-[25px] text-sm text-gray-700 dark:text-gray-300 border border-gray-100 dark:border-[#172036] overflow-hidden">

                        <div style="height: 340px; overflow-y: auto; padding: 30px;">

                            <p style="margin-bottom: 15px;" class="font-bold text-black dark:text-white text-base">

                                Kebijakan CV OTW Computer Gusaha

                            </p>

                            <p style="margin-bottom: 20px; line-height: 1.8;">

                                Selamat datang di portal pendaftaran magang CV OTW Computer Gusaha.
                                Sebelum Anda mengirimkan pendaftaran, harap membaca dengan saksama
                                poin-poin berikut:

                            </p>

                            <ol style="list-style-type: decimal; padding-left: 25px; margin-bottom: 20px;">

                                <li style="margin-bottom: 20px; line-height: 1.8; padding-left: 5px;">

                                    <strong>Penggunaan Data:</strong>
                                    Seluruh data, informasi pribadi, dan dokumen akademik yang dikirimkan
                                    akan dijaga kerahasiaannya dan digunakan semata-mata untuk
                                    keperluan seleksi serta administrasi.

                                </li>

                                <li style="margin-bottom: 20px; line-height: 1.8; padding-left: 5px;">

                                    <strong>Kerahasiaan (NDA):</strong>
                                    Peserta magang dilarang keras menyebarluaskan kode sumber
                                    (source code), desain, data internal perusahaan,
                                    maupun rahasia dagang kepada pihak luar baik selama
                                    maupun setelah masa magang berakhir.

                                </li>

                                <li style="margin-bottom: 20px; line-height: 1.8; padding-left: 5px;">

                                    <strong>Hak Kekayaan Intelektual:</strong>
                                    Seluruh hasil karya, proyek, atau produk yang dikembangkan
                                    selama masa magang adalah milik sepenuhnya
                                    CV OTW Computer Gusaha.

                                </li>

                                <li style="margin-bottom: 20px; line-height: 1.8; padding-left: 5px;">

                                    <strong>Sanksi:</strong>
                                    Perusahaan berhak menolak, membatalkan status magang,
                                    atau mengambil langkah hukum apabila ditemukan
                                    pemalsuan dokumen atau pelanggaran kode etik secara sengaja.

                                </li>

                            </ol>

                            <p class="italic text-xs text-gray-500">

                                Diperbarui: Mei 2026

                            </p>

                        </div>

                    </div>

                    <!-- CHECKBOX -->
                    <div style="display: flex; flex-direction: column; gap: 15px;">

                        <label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"
                            class="group">

                            <input type="checkbox" id="agree-data" onchange="checkAgreements()"
                                style="margin-top: 3px; width: 18px; height: 18px; flex-shrink: 0;"
                                class="accent-primary-500 cursor-pointer">

                            <span style="line-height: 1.6;" class="text-sm text-gray-700 dark:text-gray-300">

                                Saya menyatakan bahwa seluruh biodata dan dokumen yang saya unggah adalah
                                <strong>benar, asli, dan dapat dipertanggungjawabkan</strong>.

                            </span>

                        </label>

                        <label style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer;"
                            class="group">

                            <input type="checkbox" id="agree-policy" onchange="checkAgreements()"
                                style="margin-top: 3px; width: 18px; height: 18px; flex-shrink: 0;"
                                class="accent-primary-500 cursor-pointer">

                            <span style="line-height: 1.6;" class="text-sm text-gray-700 dark:text-gray-300">

                                Saya telah membaca, memahami, dan
                                <strong>menyetujui seluruh Kebijakan Privasi serta Syarat & Ketentuan</strong>
                                dari CV OTW Computer Gusaha.

                            </span>

                        </label>

                    </div>

                </div>

                <!-- FOOTER -->
                <div
                    class="trezo-card-footer p-[20px] md:p-[25px] border-t border-gray-100 dark:border-[#172036] flex justify-end gap-[15px] bg-gray-50 dark:bg-[#0a101f] rounded-b-md">

                    <button type="button" onclick="hidePrivacyModal()"
                        class="font-medium rounded-md py-[10px] px-[20px] bg-white border border-gray-200 text-gray-700 hover:bg-gray-100 transition-all">

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
        <!-- End Modal -->

    </div>
    <!-- End Main Content -->

    <!-- Script untuk mengelola Modal dan validasi checkbox -->
    <script>

        // ===============================
        // ALERT CUSTOM
        // ===============================
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


        // ===============================
        // AUTOSAVE FILE REALTIME
        // ===============================
        document.querySelectorAll('.autosave-file').forEach(input => {

            input.addEventListener('change', function () {

                const file = this.files[0];

                const display = this.parentElement.querySelector('.file-name-display');

                // ===============================
                // FILE KOSONG
                // ===============================
                if (!file) {
                    return;
                }

                // ===============================
                // VALIDASI PDF
                // ===============================
                if (!file.name.toLowerCase().endsWith('.pdf')) {

                    showAlert(
                        "File harus PDF!",
                        "danger"
                    );

                    this.value = '';

                    return;
                }

                // ===============================
                // VALIDASI MAX 10MB
                // ===============================
                if (file.size > 10 * 1024 * 1024) {

                    showAlert(
                        "Ukuran maksimal 10MB!",
                        "danger"
                    );

                    this.value = '';

                    return;
                }

                // ===============================
                // LOADING
                // ===============================
                display.innerHTML = `

                <strong class="text-primary-500 break-all">
                    ${file.name}
                </strong>

                <br>

                <span class="text-warning-500">
                    Mengupload file...
                </span>

            `;

                // ===============================
                // AJAX
                // ===============================
                const formData = new FormData();

                formData.append(
                    'field',
                    this.name
                );

                formData.append(
                    'file',
                    file
                );

                fetch(
                    "<?= base_url('pendaftaran/autosave-file') ?>",
                    {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    }
                )

                    .then(response => response.json())

                    .then(result => {

                        console.log(result);

                        // ===============================
                        // SUCCESS
                        // ===============================
                        if (result.status === true) {

                            display.innerHTML = `

    <!-- FILE NAME -->
    <strong class="
        text-primary-500
        break-all
        block
        text-[15px]
        font-semibold
        leading-[1.6]
        mb-2
    ">
        ${result.original_name}
    </strong>

    <!-- STATUS -->
    <span class="
    text-success-500
    block
    text-sm
    mb-4
    font-medium
    ">
    File sudah tersimpan
    </span>

    <!-- ACTION -->
    <div class="flex items-center justify-center gap-5">

        <!-- VIEW -->
        <a href="${result.file_url}"
            target="_blank"
            class="
                btn-view-file
                text-primary-500
                hover:text-primary-700
                text-[22px]
                transition-all
                duration-200
                hover:scale-110
            ">

            <i class="ri-eye-line"></i>

        </a>

        <!-- DELETE -->
        <button type="button"
            class="
                btn-delete-file
                text-danger-500
                hover:text-danger-700
                text-[22px]
                transition-all
                duration-200
                hover:scale-110
            "
            data-field="${result.field}">

            <i class="ri-delete-bin-6-line"></i>

        </button>

    </div>

`;
                            showAlert(
                                "Dokumen berhasil disimpan otomatis!",
                                "success"
                            );

                        } else {

                            display.innerHTML = `

                        <strong class="text-black dark:text-white">
                            Click to upload
                        </strong>

                        <br>

                        your file here

                    `;

                            showAlert(
                                result.message || "Upload gagal!",
                                "danger"
                            );
                        }

                    })

                    .catch(error => {

                        console.log(error);

                        display.innerHTML = `

                    <strong class="text-black dark:text-white">
                        Click to upload
                    </strong>

                    <br>

                    your file here

                `;

                        showAlert(
                            "Terjadi kesalahan upload!",
                            "danger"
                        );

                    });

            });

        });

        // ===============================
        // DELETE FILE
        // ===============================
        document.addEventListener('click', function (e) {

            const btn = e.target.closest('.btn-delete-file');

            if (btn) {

                e.preventDefault();

                e.stopPropagation();

                const field = btn.dataset.field;

                const container = btn.closest('.file-name-display');

                fetch(
                    "<?= base_url('pendaftaran/delete-file') ?>",
                    {
                        method: 'POST',

                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'X-Requested-With': 'XMLHttpRequest'
                        },

                        body: new URLSearchParams({
                            field: field
                        })
                    }
                )

                    .then(response => response.json())

                    .then(result => {

                        console.log(result);

                        if (result.status) {

                            container.innerHTML = `

                    <strong class="text-black dark:text-white">
                        Click to upload
                    </strong>

                    <br>

                    your file here

                `;

                            showAlert(
                                "File berhasil dihapus!",
                                "success"
                            );

                        } else {

                            showAlert(
                                result.message || "Gagal menghapus file!",
                                "danger"
                            );
                        }

                    })

                    .catch(error => {

                        console.log(error);

                        showAlert(
                            "Terjadi kesalahan!",
                            "danger"
                        );

                    });

            }

        });

        // ===============================
        // CLICK BOX = OPEN FILE
        // ===============================
        document.querySelectorAll('.upload-box').forEach(box => {

            box.addEventListener('click', function (e) {

                // kalau klik tombol lihat / hapus
                if (
                    e.target.closest('.btn-delete-file') ||
                    e.target.closest('.btn-view-file')
                ) {
                    return;
                }

                const inputId = this.dataset.input;

                document.getElementById(inputId).click();

            });

        });

        // ===============================
        // MODAL PRIVACY & POLICY
        // ===============================
        function showPrivacyModal() {
            const modal = document.getElementById('privacyModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function hidePrivacyModal() {
            const modal = document.getElementById('privacyModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // ===============================
        // VALIDASI CHECKBOX
        // ===============================
        function checkAgreements() {
            const checkData = document.getElementById('agree-data').checked;
            const checkPolicy = document.getElementById('agree-policy').checked;
            const btnSubmit = document.getElementById('btn-submit-final');

            // Jika kedua checkbox dicentang, aktifkan tombol
            if (checkData && checkPolicy) {
                btnSubmit.disabled = false;
                btnSubmit.classList.remove('opacity-50', 'cursor-not-allowed');
            } else {
                // Jika salah satu atau keduanya belum dicentang, matikan tombol
                btnSubmit.disabled = true;
                btnSubmit.classList.add('opacity-50', 'cursor-not-allowed');
            }
        }

        // ===============================
        // FINAL SUBMIT (KIRIM PENDAFTARAN)
        // ===============================
        function submitFinalForm() {
            // Ubah teks tombol menjadi loading untuk UX yang baik
            const btnSubmit = document.getElementById('btn-submit-final');
            const originalText = btnSubmit.innerHTML;
            btnSubmit.innerHTML = 'Mengirim...';
            btnSubmit.disabled = true;

            fetch("<?= base_url('pendaftaran/final-submit') ?>", {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === true) {
                    // Jika sukses mengubah final_submitted di database, arahkan ke waiting
                    window.location.href = "<?= base_url('pendaftaran/waiting') ?>";
                } else {
                    showAlert('Gagal mengirim pendaftaran', 'danger');
                    btnSubmit.innerHTML = originalText;
                    btnSubmit.disabled = false;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showAlert('Terjadi kesalahan pada server', 'danger');
                btnSubmit.innerHTML = originalText;
                btnSubmit.disabled = false;
            });
        }
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