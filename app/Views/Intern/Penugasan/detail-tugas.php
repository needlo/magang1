<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= base_url('assets/css/remixicon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/apexcharts.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/simplebar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/prism.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jsvectormap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/swiper-bundle.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/quill.snow.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/OtwLogo.png') ?>">
    <title>Detail Tugas - Sistem Magang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>

    <?= $this->include('Layout/Sidebar') ?>
    <?= $this->include('Layout/Header') ?>

    <div class="main-content transition-all flex flex-col overflow-hidden min-h-screen" id="main-content">
        <div class="mb-[25px] md:flex items-center justify-between">
            <div class="flex items-center gap-3">
                <h5 class="!mb-0 text-xl font-bold">Detail Tugas</h5>
            </div>
        </div>

        <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md shadow-sm">

            <div
                class="trezo-card border border-gray-100 dark:border-[#172036] bg-gray-50/50 dark:bg-[#15203c]/30 p-[20px] md:p-[25px] rounded-md mb-[25px]">
                <div class="trezo-card-header mb-[15px] flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0 text-xl font-bold text-black dark:text-white">
                            <?= esc($task['title']) ?>
                        </h5>
                    </div>
                </div>
                <div
                    class="flex items-center gap-6 text-sm text-gray-500 dark:text-gray-400 border-b border-gray-100 dark:border-[#172036] pb-[20px]">
                    <span class="block flex items-center gap-1">
                        <i class="ri-calendar-line text-primary-500"></i>
                        Mulai: <strong
                            class="text-black dark:text-white font-medium"><?= date('d M Y', strtotime($task['start_date'])) ?></strong>
                    </span>
                    <span class="block flex items-center gap-1">
                        <i class="ri-timer-line text-danger-500"></i>
                        Tenggat: <strong
                            class="text-danger-500 font-medium"><?= date('d M Y', strtotime($task['deadline'])) ?></strong>
                    </span>
                </div>

                <div class="trezo-card-content mt-[20px]">
                    <span class="block text-black dark:text-white mb-[10px] font-bold text-base">Deskripsi Tugas</span>
                    <div class="text-gray-600 dark:text-gray-300 !leading-[1.7] text-sm">
                        <?= nl2br(esc($task['description'])) ?>
                    </div>
                </div>
            </div>

            <table
                style="width:100%; border-collapse:collapse; font-family:'Inter','Segoe UI',sans-serif; font-size:13px; background:#fff; border-radius:16px; overflow:hidden; border:1px solid #f0f0f0; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);"
                class="dark:bg-[#0c1427] dark:border-[#172036]">

                <tr style="border-bottom:1px solid #f0f0f0;" class="dark:border-[#172036]">
                    <td colspan="2" style="padding:20px 20px 16px;">
                        <div style="display:flex; align-items:center; gap:10px;">
                            <div style="width:36px; height:36px; border-radius:10px; background:#f4f1ff; display:flex; align-items:center; justify-content:center;"
                                class="dark:bg-[#15203c]">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <rect x="2" y="1" width="9" height="12" rx="1.5" fill="#7F77DD" />
                                    <path d="M9 1v3h3" stroke="#7F77DD" stroke-width="1.2" />
                                    <path d="M4 6h6M4 8h6M4 10h4" stroke="#fff" stroke-width="1" />
                                </svg>
                            </div>
                            <div>
                                <div style="font-size:15px; font-weight:600; letter-spacing:-0.2px;"
                                    class="text-[#1a1a2e] dark:text-white">Panel Tugas</div>
                                <div style="font-size:12px; color:#9b9b9b; margin-top:1px;">Mentor:
                                    <?= esc($task['mentor_name'] ?? 'Mentor') ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr class="bg-[#fafafa] dark:bg-[#15203c]/50">
                    <td colspan="2" style="padding:14px 20px 6px;">
                        <span
                            style="font-size:10px; font-weight:700; color:#b0b0b0; letter-spacing:0.08em; text-transform:uppercase;">Informasi
                            Tugas</span>
                    </td>
                </tr>

                <tr style="border-bottom:1px solid #f5f5f5;" class="dark:border-[#172036]">
                    <td style="padding:10px 20px; color:#9b9b9b; font-size:12px; width:45%;">File lampiran mentor</td>
                    <td style="padding:10px 20px; text-align:right;">
                        <?php if (!empty($task['file'])): ?>
                            <a href="<?= base_url('uploads/tasks/' . $task['file']) ?>" download
                                style="text-decoration:none; display:inline-flex; align-items:center; gap:5px; background:#f4f1ff; border-radius:8px; padding:4px 10px; font-size:12px; color:#534AB7; font-weight:600; transition:all 0.2s;"
                                class="dark:bg-[#15203c] dark:text-primary-400 hover:opacity-80">
                                <svg width="12" height="12" viewBox="0 0 16 16" fill="none">
                                    <rect x="2" y="1" width="9" height="12" rx="1.5" stroke="currentColor"
                                        stroke-width="1.2" />
                                    <path d="M9 1v3h3" stroke="currentColor" stroke-width="1.2" />
                                    <path d="M4 6h6M4 8h4" stroke="currentColor" stroke-width="1" />
                                </svg>
                                Download Lampiran
                            </a>
                        <?php else: ?>
                            <span class="text-gray-400 italic text-xs">Tidak ada lampiran</span>
                        <?php endif; ?>
                    </td>
                </tr>

                <tr style="border-bottom:1px solid #f5f5f5;"
                    class="bg-[#fafafa] dark:bg-[#15203c]/50 dark:border-[#172036]">
                    <td style="padding:10px 20px; color:#9b9b9b; font-size:12px;">Waktu tersisa</td>
                    <td style="padding:10px 20px; text-align:right;">
                        <span
                            style="display:inline-flex; align-items:center; gap:4px; font-weight:700; color:#e63946; font-size:13px;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <?= $waktuTersisa ?>
                        </span>
                    </td>
                </tr>

                <tr class="bg-[#fafafa] dark:bg-[#15203c]/50">
                    <td colspan="2" style="padding:14px 20px 6px;">
                        <span
                            style="font-size:10px; font-weight:700; color:#b0b0b0; letter-spacing:0.08em; text-transform:uppercase;">Status
                            & Penilaian</span>
                    </td>
                </tr>

                <tr style="border-bottom:1px solid #f5f5f5;" class="dark:border-[#172036]">
                    <td style="padding:10px 20px; color:#9b9b9b; font-size:12px;">Status pengumpulan</td>
                    <td style="padding:10px 20px; text-align:right;">
                        <?php if ($submission): ?>
                            <span
                                style="display:inline-flex; align-items:center; gap:5px; background:#e6faf0; border-radius:99px; padding:4px 12px; font-size:11px; font-weight:700; color:#0F6E56; letter-spacing:0.02em;"
                                class="dark:bg-success-500/20 dark:text-success-400">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <circle cx="5" cy="5" r="4.5" fill="currentColor" />
                                    <path d="M3 5l1.5 1.5L7 3.5" stroke="#fff" stroke-width="1.2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                Terkumpul
                            </span>
                        <?php else: ?>
                            <span
                                style="display:inline-flex; align-items:center; gap:5px; background:#f1f3f5; border-radius:99px; padding:4px 12px; font-size:11px; font-weight:700; color:#495057; letter-spacing:0.02em;"
                                class="dark:bg-gray-800 dark:text-gray-400">
                                Belum Dikumpulkan
                            </span>
                        <?php endif; ?>
                    </td>
                </tr>

                <tr style="border-bottom:1px solid #f5f5f5;"
                    class="bg-[#fafafa] dark:bg-[#15203c]/50 dark:border-[#172036]">
                    <td style="padding:10px 20px; color:#9b9b9b; font-size:12px;">Status review (Penilaian)</td>
                    <td style="padding:10px 20px; text-align:right;">
                        <?php if ($submission): ?>
                            <?php
                            $statusColor = $submission['status'] == 'selesai' ? 'text-success-500' : ($submission['status'] == 'revisi' ? 'text-orange-500' : 'text-info-500');
                            $statusText = $submission['status'] == 'pending' ? 'Menunggu Review' : ucfirst($submission['status']);
                            ?>
                            <span class="font-weight:600; font-size:12px; <?= $statusColor ?> font-bold">
                                <?= $statusText ?>
                            </span>
                        <?php else: ?>
                            <span style="font-weight:600; color:#9b9b9b; font-size:12px; font-style:italic;">Belum
                                dinilai</span>
                        <?php endif; ?>
                    </td>
                </tr>

                <?php if ($submission): ?>
                    <tr class="bg-[#fafafa] dark:bg-[#15203c]/50">
                        <td colspan="2" style="padding:14px 20px 6px;">
                            <span
                                style="font-size:10px; font-weight:700; color:#b0b0b0; letter-spacing:0.08em; text-transform:uppercase;">Detail
                                Pengumpulan Anda</span>
                        </td>
                    </tr>
                    <tr style="border-bottom:1px solid #f5f5f5;" class="dark:border-[#172036]">
                        <td style="padding:10px 20px; color:#9b9b9b; font-size:12px;">File jawaban</td>
                        <td style="padding:10px 20px; text-align:right;">
                            <div style="display:inline-flex; align-items:center; gap:8px; background:#f8f9fa; border:1px solid #e9ecef; border-radius:8px; padding:4px 6px 4px 10px;"
                                class="dark:bg-[#0c1427] dark:border-[#172036]">

                                <span
                                    style="font-size:12px; font-weight:600; max-width:150px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"
                                    class="text-[#1a1a2e] dark:text-gray-300"
                                    title="<?= esc($submission['original_name'] ?? $submission['file']) ?>">
                                    <?= esc($submission['original_name'] ?? $submission['file']) ?>
                                </span>

                                <a href="<?= base_url('uploads/submissions/' . $submission['file']) ?>" target="_blank"
                                    style="display:flex; align-items:center; gap:3px; background:#185FA5; color:#fff; text-decoration:none; padding:4px 8px; border-radius:5px; font-size:11px; font-weight:600;"
                                    class="hover:opacity-90">
                                    Buka
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                        <polyline points="15 3 21 3 21 9"></polyline>
                                        <line x1="10" y1="14" x2="21" y2="3"></line>
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>

                <tr>
                    <td colspan="2" style="padding:20px; background:#fff;" class="dark:bg-[#0c1427]">
                        <div style="display:flex; flex-direction:column; gap:10px;">
                            <?php if (!$submission): ?>
                                <button type="button"
                                    onclick="document.getElementById('modal-upload').classList.remove('hidden')"
                                    style="width:100%; padding:10px; border-radius:8px; border:none; background:#534AB7; color:#fff; font-size:13px; font-weight:600; cursor:pointer; display:flex; justify-content:center; align-items:center; gap:6px;"
                                    class="hover:bg-primary-600 transition-all">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="17 8 12 3 7 8"></polyline>
                                        <line x1="12" y1="3" x2="12" y2="15"></line>
                                    </svg>
                                    Kumpulkan Tugas
                                </button>
                            <?php else: ?>
                                <div style="display:flex; gap:10px; width:100%;">
                                    <button type="button"
                                        onclick="document.getElementById('modal-edit').classList.remove('hidden')"
                                        style="flex:1; padding:10px; border-radius:8px; border:1px solid #e0e0e0; background:#fff; font-size:13px; font-weight:600; cursor:pointer; display:flex; justify-content:center; align-items:center; gap:6px;"
                                        class="text-[#1a1a2e] dark:bg-[#15203c] dark:border-[#172036] dark:text-white hover:bg-gray-50 dark:hover:bg-[#172036] transition-all">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                        </svg>
                                        Edit Pengumpulan
                                    </button>

                                    <button type="button"
                                        onclick="document.getElementById('modal-delete-confirm').classList.remove('hidden')"
                                        style="flex:1; padding:10px; border-radius:8px; border:none; background:#ffe5e5; color:#d90429; font-size:13px; font-weight:600; cursor:pointer; display:flex; justify-content:center; align-items:center; gap:6px;"
                                        class="dark:bg-danger-500/20 hover:opacity-80 transition-all">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                        </svg>
                                        Hapus
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
            </table>

            <div
                class="mt-[25px] border border-gray-100 dark:border-[#172036] bg-gray-50/50 dark:bg-[#15203c]/30 rounded-md overflow-hidden flex flex-col h-[400px]">
                <div class="p-[15px] border-b border-gray-100 dark:border-[#172036] bg-white dark:bg-[#0c1427]">
                    <h5 class="font-bold text-black dark:text-white flex items-center gap-2 m-0 text-[15px]">
                        <i class="ri-chat-3-line text-primary-500"></i> Ruang Diskusi
                    </h5>
                </div>

                <div class="p-[20px] grow overflow-y-auto flex flex-col gap-[15px]">
                    <?php if (empty($comments)): ?>
                        <p class="text-center text-gray-400 text-sm mt-8">Belum ada diskusi. Kirim pesan untuk bertanya.</p>
                    <?php else: ?>
                        <?php foreach ($comments as $c): ?>
                            <?php $is_me = ($c['user_id'] == session()->get('id')); ?>
                            <div class="flex gap-3 max-w-[85%] <?= $is_me ? 'self-end flex-row-reverse' : '' ?>">
                                <div
                                    class="w-[35px] h-[35px] shrink-0 rounded-full flex items-center justify-center font-bold <?= $is_me ? 'bg-primary-100 text-primary-600' : 'bg-gray-200 text-gray-700' ?>">
                                    <?= strtoupper(substr($c['sender_name'], 0, 1)) ?>
                                </div>
                                <div class="<?= $is_me ? 'text-right' : '' ?>">
                                    <div
                                        class="p-[12px] text-sm inline-block shadow-sm <?= $is_me ? 'bg-primary-500 text-white rounded-tl-xl rounded-b-xl text-left' : 'bg-white border border-gray-100 rounded-tr-xl rounded-b-xl text-gray-700' ?>">
                                        <?= esc($c['comment']) ?>
                                    </div>
                                    <span class="block mt-1 text-[10px] text-gray-400 <?= $is_me ? 'mr-1' : 'ml-1' ?>">
                                        <?= date('d M, H:i', strtotime($c['created_at'])) ?>
                                    </span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <div class="p-[15px] bg-white dark:bg-[#0c1427] border-t border-gray-100 dark:border-[#172036]">
                    <form action="<?= base_url('penugasan/chat') ?>" method="POST" class="flex gap-[10px]">
                        <input type="hidden" name="task_id" value="<?= $task['id'] ?>">
                        <input type="text" name="comment" required placeholder="Tulis pertanyaan atau laporan..."
                            class="grow border border-gray-200 dark:border-[#172036] bg-gray-50 dark:bg-[#15203c] text-black dark:text-white rounded-md px-[15px] py-[10px] outline-none focus:border-primary-500 transition-all text-[14px]">
                        <button type="submit"
                            class="bg-primary-500 hover:bg-primary-600 text-white px-[20px] rounded-md transition-all font-medium">
                            Kirim
                        </button>
                    </form>
                </div>
            </div>

        </div>

        <div class="grow"></div>

        <footer
            class="bg-white dark:bg-[#0c1427] rounded-t-md px-[20px] md:px-[25px] py-[15px] md:py-[20px] text-center">
            <p>
                © 2026 <span class="text-purple-500 font-medium">Sistem Informasi Magang</span> | Hak Cipta Dilindungi
            </p>
        </footer>
    </div>

    <!-- Modal Upload Tugas -->
    <div id="modal-upload"
        class="fixed inset-0 z-[999] hidden flex items-center justify-center bg-black/50 transition-all backdrop-blur-sm">
        <div class="bg-white dark:bg-[#0c1427] w-full overflow-y-auto flex flex-col rounded-md p-[25px] shadow-lg relative mx-[20px]"
            style="max-width: 800px; height: 550px;">

            <div class="flex justify-between items-center p-[20px] border-b border-gray-100 dark:border-[#172036]">
                <h5 class="text-lg font-bold text-black dark:text-white mb-0">Pengumpulan Tugas</h5>
                <button type="button" onclick="document.getElementById('modal-upload').classList.add('hidden')"
                    class="text-gray-400 hover:text-danger-500 transition-all">
                    <i class="ri-close-line text-[24px]"></i>
                </button>
            </div>

            <form action="<?= base_url('penugasan/submit_tugas') ?>" method="POST" enctype="multipart/form-data">
                <div class="p-[20px]">
                    <input type="hidden" name="task_id" value="<?= $task['id'] ?>">

                    <div
                        class="border-2 border-dashed border-gray-200 dark:border-[#172036] rounded-xl p-[30px] text-center mb-[20px] bg-gray-50 dark:bg-[#15203c]/50 relative hover:border-primary-500 transition-all cursor-pointer group">
                        <input type="file" name="file_tugas" id="file_tugas_upload" required accept=".pdf,.zip"
                            class="opacity-0 absolute inset-0 w-full h-full cursor-pointer z-10"
                            onchange="document.getElementById('filename_upload').innerText = this.files[0].name; document.getElementById('filename_upload').classList.add('text-primary-500');">

                        <i
                            class="ri-upload-cloud-2-line text-[40px] text-primary-500 mb-[10px] block group-hover:-translate-y-1 transition-transform"></i>
                        <h5 class="text-[15px] font-semibold text-black dark:text-white mb-[5px]" id="filename_upload">
                            Choose file or drag & drop it here</h5>
                        <p class="text-[13px] text-gray-500 dark:text-gray-400">PDF or ZIP formats, up to 10MB.</p>
                    </div>

                    <label class="block text-sm font-medium text-black dark:text-white mb-[10px]">Catatan /
                        Keterangan</label>
                    <textarea name="comment"
                        class="w-full border border-gray-200 dark:border-[#172036] rounded-md p-[15px] text-sm bg-transparent text-black dark:text-white outline-none focus:border-primary-500 transition-all resize-none h-[120px]"
                        placeholder="Deskripsikan hasil atau kendala tugas kamu..."></textarea>
                </div>

                <div class="p-[20px] border-t border-gray-100 dark:border-[#172036] flex justify-end gap-[10px]">
                    <button type="button" onclick="document.getElementById('modal-upload').classList.add('hidden')"
                        class="px-[20px] py-[10px] bg-gray-100 dark:bg-[#15203c] text-gray-700 dark:text-gray-300 font-medium rounded-md transition-all hover:bg-gray-200 dark:hover:bg-[#172036]">Batal</button>
                    <button type="submit"
                        class="px-[20px] py-[10px] bg-primary-500 text-white font-medium rounded-md transition-all hover:bg-primary-600 flex items-center gap-[5px]">
                        <i class="ri-add-line text-[18px]"></i> Simpan Tugas
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Edit Tugas -->
    <div id="modal-edit"
        class="fixed inset-0 z-[999] hidden flex items-center justify-center bg-black/50 transition-all backdrop-blur-sm">
        <div class="bg-white dark:bg-[#0c1427] w-full overflow-y-auto flex flex-col rounded-md p-[25px] shadow-lg relative mx-[20px]"
            style="max-width: 800px; height: 580px;">

            <div class="flex justify-between items-center p-[20px] border-b border-gray-100 dark:border-[#172036]">
                <h5 class="text-lg font-bold text-black dark:text-white mb-0">Edit Pengumpulan Tugas</h5>
                <button type="button" onclick="document.getElementById('modal-edit').classList.add('hidden')"
                    class="text-gray-400 hover:text-danger-500 transition-all">
                    <i class="ri-close-line text-[24px]"></i>
                </button>
            </div>

            <form action="<?= base_url('penugasan/edit_tugas') ?>" method="POST" enctype="multipart/form-data">
                <div class="p-[20px]">
                    <input type="hidden" name="task_id" value="<?= $task['id'] ?>">

                    <div
                        class="border-2 border-dashed border-gray-200 dark:border-[#172036] rounded-xl p-[30px] text-center mb-[20px] bg-gray-50 dark:bg-[#15203c]/50 relative hover:border-primary-500 transition-all cursor-pointer group">
                        <input type="file" name="file_tugas" id="file_tugas_edit" required accept=".pdf,.zip"
                            class="opacity-0 absolute inset-0 w-full h-full cursor-pointer z-10"
                            onchange="document.getElementById('filename_edit').innerText = this.files[0].name; document.getElementById('filename_edit').classList.add('text-primary-500');">

                        <i
                            class="ri-upload-cloud-2-line text-[40px] text-primary-500 mb-[10px] block group-hover:-translate-y-1 transition-transform"></i>
                        <h5 class="text-[15px] font-semibold text-black dark:text-white mb-[5px]" id="filename_edit">
                            Choose file or drag & drop it here</h5>
                        <p class="text-[13px] text-gray-500 dark:text-gray-400">PDF or ZIP formats, up to 10MB.</p>

                        <span class="text-[12px] text-danger-500 mt-2 block relative z-20 font-medium">*Pilih file baru
                            untuk menimpa file lama.</span>
                    </div>

                    <label class="block text-sm font-medium text-black dark:text-white mb-[10px]">Catatan /
                        Keterangan</label>
                    <textarea name="comment"
                        class="w-full border border-gray-200 dark:border-[#172036] rounded-md p-[15px] text-sm bg-transparent text-black dark:text-white outline-none focus:border-primary-500 transition-all resize-none h-[120px]"
                        placeholder="Deskripsikan hasil atau kendala tugas kamu..."><?= $submission ? esc($submission['comment']) : '' ?></textarea>
                </div>

                <div class="p-[20px] border-t border-gray-100 dark:border-[#172036] flex justify-end gap-[10px]">
                    <button type="button" onclick="document.getElementById('modal-edit').classList.add('hidden')"
                        class="px-[20px] py-[10px] bg-gray-100 dark:bg-[#15203c] text-gray-700 dark:text-gray-300 font-medium rounded-md transition-all hover:bg-gray-200 dark:hover:bg-[#172036]">Batal</button>
                    <button type="submit"
                        class="px-[20px] py-[10px] bg-primary-500 text-white font-medium rounded-md transition-all hover:bg-primary-600 flex items-center gap-[5px]">
                        <i class="ri-add-line text-[18px]"></i> Update Tugas
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal konifrmasi hapus -->
    <div id="modal-delete-confirm"
        class="fixed inset-0 z-[999] hidden flex items-center justify-center bg-black/50 transition-all backdrop-blur-sm px-4">

        <div class="bg-white dark:bg-[#0c1427] w-full overflow-y-auto flex flex-col items-center justify-center rounded-md p-[25px] shadow-lg relative mx-[20px]"
            style="max-width:500px; height: 250px;">

            <div class="flex flex-col items-center max-w-[420px] w-full text-center">

                <div
                    class="w-[70px] h-[70px] flex items-center justify-center bg-danger-50 dark:bg-danger-500/10 rounded-full mb-6">
                    <i class="ri-error-warning-line text-[25px] text-danger-500"></i>
                </div>

                <h4 class="text-[12px] font-bold text-black dark:text-white mb-3">Konfirmasi Hapus</h4>

                <p class="text-[11px] text-gray-500 dark:text-gray-400 leading-relaxed mb-8">
                    Apakah Anda yakin ingin menghapus file jawaban tugas ini? Tindakan ini bersifat permanen dan file
                    Anda di server akan langsung terhapus secara menyeluruh.
                </p>

                <div class="w-full flex justify-center m-0 p-0" style="gap: 20px;">

                    <button type="button"
                        onclick="document.getElementById('modal-delete-confirm').classList.add('hidden')"
                        class="bg-gray-100 dark:bg-[#15203c] text-gray-700 dark:text-gray-300 font-semibold rounded-md transition-all hover:bg-gray-200 dark:hover:bg-[#172036] text-[14px] flex items-center justify-center"
                        style="width: 130px; height: 42px;"> Batal
                    </button>

                    <form action="<?= base_url('penugasan/hapus_tugas') ?>" method="POST" class="m-0 p-0">
                        <input type="hidden" name="task_id" value="<?= $task['id'] ?>">

                        <button type="submit"
                            class="bg-danger-500 text-white font-semibold rounded-md transition-all hover:bg-danger-600 text-[14px] flex items-center justify-center"
                            style="width: 130px; height: 42px;"> Ya, hapus
                        </button>
                    </form>

                </div>

            </div>

        </div>
    </div>

    <script src="<?= base_url('assets/js/simplebar.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // FUNGSI ALERT CUSTOM
            const showAlert = (msg, type = 'success') => {
                const colors = {
                    success: 'text-success-500 bg-success-50 border-success-200',
                    danger: 'text-danger-500 bg-danger-50 border-danger-200',
                    warning: 'text-orange-500 bg-orange-50 border-orange-200'
                };
                let id = 'alert-' + Date.now();
                document.body.insertAdjacentHTML('beforeend', `
                <div id="${id}" style="position:fixed;top:75px;right:25px;z-index:9999;width:350px;max-width:90vw;transition:0.5s" class="py-[15px] px-[20px] border ${colors[type]} dark:bg-[#15203c] rounded-md flex justify-between shadow-xl font-medium">
                    <span>${msg}</span>
                    <button onclick="this.parentNode.remove()" class="text-[20px] ml-3"><i class="ri-close-line"></i></button>
                </div>`);
                setTimeout(() => {
                    let e = document.getElementById(id);
                    if (e) { e.style.opacity = 0; setTimeout(() => e.remove(), 500); }
                }, 3000);
            };

            // TANGKAP PESAN FLASH DARI CONTROLLER
            <?php if (session()->getFlashdata('success')): ?> showAlert('<?= addslashes(session()->getFlashdata('success')) ?>', 'success'); <?php endif; ?>
            <?php if (session()->getFlashdata('error')): ?> showAlert('<?= addslashes(session()->getFlashdata('error')) ?>', 'danger'); <?php endif; ?>
            <?php if (session()->getFlashdata('warning')): ?> showAlert('<?= addslashes(session()->getFlashdata('warning')) ?>', 'warning'); <?php endif; ?>
        });
    </script>
</body>

</html>