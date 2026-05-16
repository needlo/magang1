<!DOCTYPE html>
<html dir="ltr">

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
    <title>Daftar Tugas Magang</title>

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
    <?php echo $this->include('Layout/Sidebar'); ?>
    <!-- End Sidebar -->

    <!-- Header -->
    <?= $this->include('Layout/Header') ?>
    <!-- End Header -->

    <!-- Main Content -->
    <div class="main-content transition-all flex flex-col overflow-hidden min-h-screen" id="main-content">

        <div class="mb-[25px] md:flex items-center justify-between">
            <h5 class="!mb-0 text-xl font-bold">
                Daftar Tugas Magang
            </h5>
        </div>

        <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md shadow-sm">
            <div class="trezo-card-content">
                <div class="table-responsive overflow-x-auto">
                    <table class="w-full">
                        <thead class="text-black dark:text-white">
                            <tr>
                                <th
                                    class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-l-md last:rounded-r-md">
                                    Nomor</th>
                                <th
                                    class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-l-md last:rounded-r-md">
                                    Nama Tugas</th>
                                <th
                                    class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap">
                                    Tanggal Penugasan</th>
                                <th
                                    class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap">
                                    Tenggat Waktu</th>
                                <th
                                    class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap">
                                    Status</th>
                                <th
                                    class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-l-md last:rounded-r-md">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-black dark:text-white">
                            <tr id="task-row-1" data-id="1">
                                <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">1</td>
                                <td
                                    class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] font-medium">
                                    <a href="assets/file/tugas-ui-design.pdf" download="Tugas_Mentor_UI_Design.pdf"
                                        class="text-black dark:text-white hover:text-primary-500 active:text-primary-600 hover:underline flex items-center gap-[8px] transition-all duration-300 group"
                                        title="Klik untuk mendownload tugas dari mentor">
                                        Membuat UI Design Login
                                        <i
                                            class="material-symbols-outlined !text-[18px] text-primary-500 opacity-0 group-hover:opacity-100 transition-opacity">download</i>
                                    </a>
                                </td>
                                <td
                                    class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] text-gray-500">
                                    01 Mei 2026
                                </td>
                                <td
                                    class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] text-gray-500">
                                    05 Mei 2026
                                </td>
                                <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                    <span id="status-badge-1"
                                        class="inline-block px-[10px] py-[4px] bg-orange-100 text-orange-600 dark:bg-orange-500/20 dark:text-orange-400 rounded-md text-xs font-medium transition-all">
                                        Belum Selesai
                                    </span>
                                </td>
                                <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                    <div class="flex items-center gap-[15px]">
                                        <button type="button" onclick="openUploadModal(1)"
                                            class="text-primary-500 hover:text-primary-400 transition-all"
                                            title="Upload Tugas">
                                            <i class="material-symbols-outlined !text-[22px]">upload_file</i>
                                        </button>
                                        <button type="button" id="btn-detail-1" onclick="openDetailModal(1)"
                                            class="text-info-500 hover:text-info-400 transition-all hidden"
                                            title="Detail Tugas">
                                            <i class="material-symbols-outlined !text-[22px]">visibility</i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr id="task-row-2" data-id="2">
                                <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">2</td>
                                <td
                                    class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] font-medium">
                                    <a href="assets/file/tugas-ui-design.pdf" download="Tugas_Mentor_UI_Design.pdf"
                                        class="text-black dark:text-white hover:text-primary-500 active:text-primary-600 hover:underline flex items-center gap-[8px] transition-all duration-300 group"
                                        title="Klik untuk mendownload tugas dari mentor">
                                        Merancang Frontend
                                        <i
                                            class="material-symbols-outlined !text-[18px] text-primary-500 opacity-0 group-hover:opacity-100 transition-opacity">download</i>
                                    </a>
                                </td>
                                <td
                                    class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] text-gray-500">
                                    03 Mei 2026
                                </td>
                                <td
                                    class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] text-gray-500">
                                    10 Mei 2026
                                </td>
                                <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                    <span id="status-badge-2"
                                        class="inline-block px-[10px] py-[4px] bg-orange-100 text-orange-600 dark:bg-orange-500/20 dark:text-orange-400 rounded-md text-xs font-medium transition-all">
                                        Belum Selesai
                                    </span>
                                </td>
                                <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                    <div class="flex items-center gap-[15px]">
                                        <button type="button" onclick="openUploadModal(2)"
                                            class="text-primary-500 hover:text-primary-400 transition-all"
                                            title="Upload Tugas">
                                            <i class="material-symbols-outlined !text-[22px]">upload_file</i>
                                        </button>
                                        <button type="button" id="btn-detail-2" onclick="openDetailModal(2)"
                                            class="text-info-500 hover:text-info-400 transition-all hidden"
                                            title="Detail Tugas">
                                            <i class="material-symbols-outlined !text-[22px]">visibility</i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr id="task-row-3" data-id="3">
                                <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">3</td>
                                <td
                                    class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] font-medium">
                                    <a href="assets/file/tugas-ui-design.pdf" download="Tugas_Mentor_UI_Design.pdf"
                                        class="text-black dark:text-white hover:text-primary-500 active:text-primary-600 hover:underline flex items-center gap-[8px] transition-all duration-300 group"
                                        title="Klik untuk mendownload tugas dari mentor">
                                        Merancang Backend
                                        <i
                                            class="material-symbols-outlined !text-[18px] text-primary-500 opacity-0 group-hover:opacity-100 transition-opacity">download</i>
                                    </a>
                                </td>
                                <td
                                    class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] text-gray-500">
                                    05 Mei 2026
                                </td>
                                <td
                                    class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] text-gray-500">
                                    12 Mei 2026
                                </td>
                                <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                    <span id="status-badge-3"
                                        class="inline-block px-[10px] py-[4px] bg-orange-100 text-orange-600 dark:bg-orange-500/20 dark:text-orange-400 rounded-md text-xs font-medium transition-all">
                                        Belum Selesai
                                    </span>
                                </td>
                                <td class="px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036]">
                                    <div class="flex items-center gap-[15px]">
                                        <button type="button" onclick="openUploadModal(3)"
                                            class="text-primary-500 hover:text-primary-400 transition-all"
                                            title="Upload Tugas">
                                            <i class="material-symbols-outlined !text-[22px]">upload_file</i>
                                        </button>
                                        <button type="button" id="btn-detail-3" onclick="openDetailModal(3)"
                                            class="text-info-500 hover:text-info-400 transition-all hidden"
                                            title="Detail Tugas">
                                            <i class="material-symbols-outlined !text-[22px]">visibility</i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="grow"></div>
        <!--End Main Content-->

        <!-- Footer -->
        <footer
            class="bg-white dark:bg-[#0c1427] rounded-t-md px-[20px] md:px-[25px] py-[15px] md:py-[20px] text-center">
            <p>
                © 2026 <span class="text-purple-500 font-medium">Sistem Informasi Magang</span> | Hak Cipta Dilindungi
                oleh <a href="#" class="text-primary-500 transition-all hover:underline">CV OTW Computer Gusaha</a>
            </p>
        </footer>
        <!-- End Footer -->

        <!-- Pop Up-->
        <div id="uploadModal"
            class="fixed inset-0 z-[999] hidden flex items-center justify-center bg-black/50 backdrop-blur-sm transition-all">
            <div class="bg-white dark:bg-[#0c1427] w-full overflow-y-auto flex flex-col rounded-md p-[25px] shadow-lg relative mx-[20px]"
                style="max-width: 700px; height: 370px;">
                <h4
                    class="text-lg font-bold mb-[20px] text-black dark:text-white border-b border-gray-100 dark:border-[#172036] pb-[10px]">
                    Upload Tugas</h4>

                <input type="hidden" id="upload-task-id">

                <div class="mb-[20px]">
                    <label class="mb-[10px] text-black dark:text-white font-medium block">Pengumpulan</label>
                    <label
                        class="cursor-pointer flex items-center justify-center w-full py-[15px] px-[15px] rounded-md border-2 border-dashed border-primary-300 dark:border-primary-700 bg-primary-50 dark:bg-[#15203c] text-primary-500 hover:bg-primary-500 hover:text-white dark:hover:bg-primary-500 dark:hover:text-white hover:border-primary-500 transition-all duration-300 group">
                        <i
                            class="material-symbols-outlined mr-[8px] text-[24px] transition-transform duration-300 group-hover:-translate-y-1">cloud_upload</i>
                        <span id="file-name-display" class="font-medium text-sm truncate">Pilih file untuk
                            diupload...</span>
                        <input type="file" id="upload-file" class="hidden" required
                            onchange="document.getElementById('file-name-display').textContent = this.files[0] ? this.files[0].name : 'Pilih file untuk diupload...'">
                    </label>
                </div>

                <div class="mb-[25px]">
                    <label class="mb-[10px] text-black dark:text-white font-medium block">Save as</label>
                    <input type="text" id="upload-filename"
                        class="h-[50px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[15px] block w-full outline-0 transition-all placeholder:text-gray-500 focus:border-primary-500"
                        placeholder="Ketik nama file untuk disimpan (Cth: Tugas1_Budi)">
                </div>

                <div class="flex justify-end gap-[15px]">
                    <button type="button" onclick="closeModal('uploadModal')"
                        class="px-[20px] py-[10px] rounded-md bg-gray-200 text-black hover:bg-gray-300 dark:bg-[#15203c] dark:text-white transition-all font-medium">Batal</button>
                    <button type="button" onclick="submitUpload()"
                        class="px-[20px] py-[10px] rounded-md bg-primary-500 text-white hover:bg-primary-400 transition-all font-medium flex items-center">
                        <i class="material-symbols-outlined !text-[18px] mr-[5px]">send</i> Submit
                    </button>
                </div>
            </div>
        </div>

        <div id="detailModal"
            class="fixed inset-0 z-[999] hidden flex items-center justify-center bg-black/50 backdrop-blur-sm transition-all">
            <div class="bg-white dark:bg-[#0c1427] w-full overflow-y-auto flex flex-col rounded-md p-[25px] shadow-lg relative mx-[20px]"
                style="max-width: 700px; height: 470px;">
                <h4
                    class="text-lg font-bold mb-[20px] text-black dark:text-white border-b border-gray-100 dark:border-[#172036] pb-[10px]">
                    Detail & Edit Tugas</h4>

                <input type="hidden" id="detail-task-id">

                <div class="mb-[20px]">
                    <label class="mb-[10px] text-black dark:text-white font-medium block">File Saat Ini</label>
                    <div
                        class="p-[15px] border border-gray-200 dark:border-[#172036] rounded-md bg-gray-50 dark:bg-[#15203c] flex items-center justify-between">
                        <span id="current-filename" class="text-primary-500 font-medium break-all">Nama_File.pdf</span>
                        <a id="current-file-link" href="#" target="_blank"
                            class="text-info-500 hover:text-info-400 flex items-center gap-[5px] transition-all"
                            title="Buka/Download File">
                            <span class="text-sm font-medium">Buka</span>
                            <i class="material-symbols-outlined !text-[20px]">open_in_new</i>
                        </a>
                    </div>
                </div>

                <div class="mb-[20px]">
                    <label class="mb-[10px] text-black dark:text-white font-medium block">Edit File</label>
                    <label
                        class="cursor-pointer flex items-center justify-center w-full py-[12px] px-[15px] rounded-md border border-primary-200 dark:border-primary-800 bg-primary-50/50 dark:bg-[#15203c]/50 text-primary-500 hover:bg-primary-500 hover:text-white dark:hover:bg-primary-500 dark:hover:text-white hover:border-primary-500 transition-all duration-300 group shadow-sm">
                        <i
                            class="material-symbols-outlined mr-[8px] text-[22px] group-hover:scale-110 transition-transform duration-300">find_replace</i>
                        <span id="edit-filename-display" class="font-medium text-sm truncate">Klik untuk pilih file
                            pengganti...</span>
                        <input type="file" id="edit-file" class="hidden"
                            onchange="document.getElementById('edit-filename-display').textContent = this.files[0] ? this.files[0].name : 'Klik untuk pilih file pengganti...'">
                    </label>
                </div>

                <div class="mb-[25px]">
                    <label class="mb-[10px] text-black dark:text-white font-medium block">Ubah Nama File</label>
                    <input type="text" id="edit-filename"
                        class="h-[50px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[15px] block w-full outline-0 transition-all placeholder:text-gray-500 focus:border-primary-500">
                </div>

                <div class="flex justify-between items-center">
                    <button type="button" onclick="deleteTask()"
                        class="px-[15px] py-[10px] rounded-md bg-danger-500 text-white hover:bg-danger-400 transition-all flex items-center gap-[5px] font-medium">
                        <i class="material-symbols-outlined !text-[18px]">delete</i> Hapus
                    </button>
                    <div class="flex gap-[10px]">
                        <button type="button" onclick="closeModal('detailModal')"
                            class="px-[15px] py-[10px] rounded-md bg-gray-200 text-black hover:bg-gray-300 dark:bg-[#15203c] dark:text-white transition-all font-medium">Batal</button>
                        <button type="button" onclick="updateTask()"
                            class="px-[15px] py-[10px] rounded-md bg-primary-500 text-white hover:bg-primary-400 transition-all font-medium">Update</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Pop Up -->

        <!-- Script -->
        <script>
            // Penyimpanan sementara untuk simulasi data file intern
            const taskDatabase = {};

            // Fungsi Dasar Modal
            function openModal(modalId) { document.getElementById(modalId).classList.remove('hidden'); }
            function closeModal(modalId) { document.getElementById(modalId).classList.add('hidden'); }

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

            const showConfirm = (msg, onConfirm) => {
                let id = 'c-' + Date.now();

                document.body.insertAdjacentHTML('beforeend', `<div id="${id}" class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/50 backdrop-blur-sm px-4"><div style="width:100%; max-width:400px;" class="bg-white dark:bg-[#0c1427] p-[25px] rounded-md shadow-xl text-center border border-gray-100 dark:border-[#172036]"><i class="ri-error-warning-line text-danger-500 text-[50px] leading-none"></i><h5 class="text-lg font-bold my-[10px] text-black dark:text-white">Konfirmasi Hapus</h5><p class="text-gray-500 dark:text-gray-400 mb-[20px] text-sm">${msg}</p><div style="display:flex; justify-content:center; gap:12px;"><button onclick="document.getElementById('${id}').remove()" class="px-[15px] py-[8px] bg-gray-100 text-gray-700 dark:bg-[#15203c] dark:text-gray-300 rounded-md hover:bg-gray-200 transition-all font-medium">Batal</button><button id="yes-${id}" class="px-[15px] py-[8px] bg-danger-500 text-white rounded-md hover:bg-danger-600 transition-all font-medium">Ya, Hapus!</button></div></div></div>`);

                document.getElementById(`yes-${id}`).onclick = () => (document.getElementById(id).remove(), onConfirm());
            };

            // ======= ALUR 1: UPLOAD TUGAS =======
            function openUploadModal(taskId) {
                document.getElementById('upload-task-id').value = taskId;
                document.getElementById('upload-file').value = ""; // Reset input file 
                document.getElementById('upload-filename').value = ""; // Reset text input

                // Reset tulisan di tombol custom upload
                const fileNameDisplay = document.getElementById('file-name-display');
                if (fileNameDisplay) fileNameDisplay.textContent = "Pilih file untuk diupload...";

                openModal('uploadModal');
            }

            function submitUpload() {
                const taskId = document.getElementById('upload-task-id').value;
                const fileInput = document.getElementById('upload-file');
                const fileNameInput = document.getElementById('upload-filename').value;

                if (!fileInput.files[0] || !fileNameInput) {
                    showAlert("Harap pilih file dari lokal dan ketik nama 'Save as' sebelum submit!", "danger");
                    return;
                }

                // Simpan data beserta objek file aslinya agar bisa dibuka nanti
                taskDatabase[taskId] = {
                    fileName: fileNameInput,
                    fileObject: fileInput.files[0]
                };

                // Ubah Status ke Selesai (Hijau/Success)
                const badge = document.getElementById(`status-badge-${taskId}`);
                if (badge) {
                    badge.textContent = "Selesai";
                    badge.classList.remove('bg-orange-100', 'text-orange-600', 'dark:bg-orange-500/20', 'dark:text-orange-400');
                    badge.classList.add('bg-success-100', 'text-success-600', 'dark:bg-success-500/20', 'dark:text-success-400');
                }

                // Sembunyikan tombol Upload, Munculkan tombol Detail
                const btnUpload = document.getElementById(`btn-upload-${taskId}`);
                const btnDetail = document.getElementById(`btn-detail-${taskId}`);
                if (btnUpload) btnUpload.classList.add('hidden');
                if (btnDetail) btnDetail.classList.remove('hidden');

                closeModal('uploadModal');
                showAlert("Tugas berhasil dikirim!", "success");
            }

            // ======= ALUR 2: DETAIL, EDIT & HAPUS =======
            function openDetailModal(taskId) {
                document.getElementById('detail-task-id').value = taskId;

                // Muat Data Lama
                const data = taskDatabase[taskId];
                if (!data) return;

                document.getElementById('current-filename').textContent = data.fileName;
                document.getElementById('edit-filename').value = data.fileName;
                document.getElementById('edit-file').value = ""; // Reset input file edit

                // Reset tulisan di tombol custom edit
                const editNameDisplay = document.getElementById('edit-filename-display');
                if (editNameDisplay) editNameDisplay.textContent = "Klik untuk pilih file pengganti...";

                // Logika Buka File (Membuat URL sementara dari file yang diupload)
                const fileLink = document.getElementById('current-file-link');
                if (fileLink) {
                    if (data.fileObject) {
                        const objectURL = URL.createObjectURL(data.fileObject);
                        fileLink.href = objectURL;
                    } else {
                        fileLink.href = "#";
                    }
                }

                openModal('detailModal');
            }

            function updateTask() {
                const taskId = document.getElementById('detail-task-id').value;
                const newFileName = document.getElementById('edit-filename').value;
                const newFileInput = document.getElementById('edit-file');

                if (!newFileName) {
                    showAlert("Nama file tidak boleh kosong!", "danger");
                    return;
                }

                // Update Data Nama File
                taskDatabase[taskId].fileName = newFileName;

                // Jika user memilih file baru untuk mengganti file lama
                if (newFileInput && newFileInput.files[0]) {
                    taskDatabase[taskId].fileObject = newFileInput.files[0];
                }

                showAlert("Tugas berhasil diperbarui!", "success");
                closeModal('detailModal');
            }

            function deleteTask() {
                // Panggil custom confirm, logika hapus dimasukkan ke dalam kurung kurawal
                showConfirm("Yakin ingin menghapus tugas ini? Status akan kembali menjadi 'Belum Selesai'.", () => {

                    const taskId = document.getElementById('detail-task-id').value;

                    // Hapus data dari penyimpanan
                    delete taskDatabase[taskId];

                    // Panggil custom alert sukses kita!
                    showAlert("Tugas berhasil dihapus!", "success");

                    // Kembalikan Status ke Belum Selesai (Orange)
                    const badge = document.getElementById(`status-badge-${taskId}`);
                    if (badge) {
                        badge.textContent = "Belum Selesai";
                        badge.classList.remove('bg-success-100', 'text-success-600', 'dark:bg-success-500/20', 'dark:text-success-400');
                        badge.classList.add('bg-orange-100', 'text-orange-600', 'dark:bg-orange-500/20', 'dark:text-orange-400');
                    }

                    // Munculkan kembali tombol Upload, Sembunyikan tombol Detail
                    const btnUpload = document.getElementById(`btn-upload-${taskId}`);
                    const btnDetail = document.getElementById(`btn-detail-${taskId}`);
                    if (btnUpload) btnUpload.classList.remove('hidden');
                    if (btnDetail) btnDetail.classList.add('hidden');

                    closeModal('detailModal');
                });
            }
        </script>
        <!--End Script-->
    </div>

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