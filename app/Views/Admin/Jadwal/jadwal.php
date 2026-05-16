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
        <title>Trezo - Tailwind CSS Admin Dashboard Template</title>

        <!-- Font Family -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

        <!-- Material Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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

    <!-- Schedules Header -->
    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px]">
        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
            <div class="trezo-card-title">
                <h5 class="!mb-0">Daftar Jadwal Interview</h5>
            </div>
            <div class="flex items-center gap-[15px]">
                <div class="text-sm text-gray-600 dark:text-gray-400">
                    Total <span class="font-medium text-primary-500" id="total-schedules">0</span> jadwal
                </div>
                <button type="button" class="inline-flex items-center gap-[8px] bg-primary-500 text-white py-[10px] px-[16px] rounded-md hover:bg-primary-400 transition-all text-sm font-medium" id="create-schedule-toggle">
                    <i class="material-symbols-outlined !text-[18px]">add</i>
                    Buat Jadwal Baru
                </button>
            </div>
        </div>
        
        <!-- Schedules Table -->
        <div class="trezo-card-content relative overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-100 dark:border-[#172036]">
                        <th class="text-left py-[15px] font-medium text-black dark:text-white w-[50px]">No</th>
                        <th class="text-left py-[15px] font-medium text-black dark:text-white">Nama Acara</th>
                        <th class="text-left py-[15px] font-medium text-black dark:text-white w-[150px]">Tanggal & Jam</th>
                        <th class="text-left py-[15px] font-medium text-black dark:text-white w-[100px]">Tipe</th>
                        <th class="text-left py-[15px] font-medium text-black dark:text-white w-[80px]">Peserta</th>
                        <th class="text-left py-[15px] font-medium text-black dark:text-white w-[200px]">Aksi</th>
                    </tr>
                </thead>
                <tbody id="schedules-tbody">
                    <!-- Data akan di-generate oleh JS -->
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="grow"></div>
</div>

<!-- Schedule Form Modal (Buat/Edit) -->
<div class="schedule-form-modal z-[9999] fixed transition-all inset-0 overflow-x-hidden overflow-y-auto lg:py-[20px] hidden" id="schedule-form-modal">
    <div class="popup-overlay absolute inset-0 bg-black/50" id="form-overlay"></div>
    <div class="popup-dialog flex transition-all max-w-[900px] min-h-full items-center mx-auto relative z-[1]">
        <div class="trezo-card w-full bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
            <div class="trezo-card-header bg-gray-50 dark:bg-[#15203c] mb-[20px] md:mb-[25px] flex items-center justify-between -mx-[20px] md:-mx-[25px] -mt-[20px] md:-mt-[25px] p-[20px] md:p-[25px] rounded-t-md">
                <div class="trezo-card-title">
                    <h5 class="!mb-0" id="form-title">Buat Jadwal Interview</h5>
                </div>
                <button type="button" class="text-[23px] transition-all leading-none text-black dark:text-white hover:text-primary-500" id="form-close">
                    <i class="ri-close-fill"></i>
                </button>
            </div>
            
            <!-- Edit Mode Header - Invited Participants Summary -->
            <div id="edit-mode-header" class="mb-[25px] hidden">
                <div class="flex items-center justify-between mb-[15px]">
                    <button type="button" class="inline-flex items-center gap-[8px] bg-success-500 text-white py-[10px] px-[16px] rounded-md hover:bg-success-400 transition-all text-sm font-medium" id="invite-from-edit">
                        <i class="material-symbols-outlined !text-[18px]">send</i>
                        Undang Peserta Baru
                    </button>
                    <div class="text-sm text-gray-600 dark:text-gray-400">
                        <span id="edit-participants-count" class="font-medium text-primary-500">0</span> peserta terdaftar
                    </div>
                </div>
                
                <!-- Invited Participants Table (Status: Diproses/Diterima, Send Email & Delete) -->
                <div class="overflow-x-auto bg-gray-50 dark:bg-[#15203c] rounded-md p-[15px] border border-gray-200 dark:border-[#172036]">
                    <div class="flex items-center gap-[10px] mb-[12px]">
                        <h6 class="text-sm font-semibold text-black dark:text-white !mb-0">Peserta yang sudah diundang:</h6>
                    </div>
                    <div class="overflow-x-auto max-h-[120px]">
                        <table class="w-full text-xs">
                            <thead>
                                <tr class="border-b border-gray-200 dark:border-[#172036]">
                                    <th class="text-left py-[6px] font-medium text-gray-700 dark:text-gray-300 w-[30px]">No</th>
                                    <th class="text-left py-[6px] font-medium text-gray-700 dark:text-gray-300">Nama</th>
                                    <th class="text-left py-[6px] font-medium text-gray-700 dark:text-gray-300 w-[80px]">Status</th>
                                    <th class="text-left py-[6px] font-medium text-gray-700 dark:text-gray-300 w-[120px]">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="edit-participants-list">
                                <!-- Data akan diisi oleh JS -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Schedule Form -->
            <div class="trezo-card-content">
                <form id="schedule-form" class="mb-[30px]">
                    <input type="hidden" name="id" id="schedule-id">
                    <div class="mb-[20px]">
                        <label class="mb-[10px] text-black dark:text-white font-medium block">Nama Acara *</label>
                        <input type="text" name="title" required class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="Masukkan nama acara">
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px] md:gap-[25px] mb-[20px]">
                        <div>
                            <label class="mb-[10px] text-black dark:text-white font-medium block">Tanggal *</label>
                            <input type="date" name="date" required class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all focus:border-primary-500">
                        </div>
                        <div>
                            <label class="mb-[10px] text-black dark:text-white font-medium block">Jam *</label>
                            <input type="time" name="time" required class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all focus:border-primary-500">
                        </div>
                    </div>
                    <div class="mb-[20px]">
                        <label class="mb-[10px] text-black dark:text-white font-medium block">Tipe Interview *</label>
                        <div class="flex gap-[15px]">
                            <label class="flex items-center">
                                <input type="radio" name="type" value="online" class="mr-[8px] w-[18px] h-[18px]" required>
                                <span class="text-black dark:text-white">Online</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="type" value="offline" class="mr-[8px] w-[18px] h-[18px]" required>
                                <span class="text-black dark:text-white">Offline</span>
                            </label>
                        </div>
                    </div>
                    
                    <div id="online-field" class="mb-[20px] hidden">
                        <label class="mb-[10px] text-black dark:text-white font-medium block">Aplikasi Online *</label>
                        <select name="app" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all focus:border-primary-500">
                            <option value="">Pilih Aplikasi</option>
                            <option value="zoom">Zoom</option>
                            <option value="google-meet">Google Meet</option>
                            <option value="microsoft-teams">Microsoft Teams</option>
                            <option value="other">Lainnya</option>
                        </select>
    <input 
        type="text"
        name="app_detail"
        placeholder="Deskripsi...."
        class="mt-[10px] h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all focus:border-primary-500"
    >
                    </div>
                    <div id="offline-field" class="mb-[20px] hidden">
                        <label class="mb-[10px] text-black dark:text-white font-medium block">Lokasi *</label>
                        <input type="text" name="location" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="Meeting Room A, Lt. 3">
                    </div>

                    <div class="mt-[25px] flex justify-end gap-[15px]">
                        <button type="button" class="rounded-md px-[26.5px] py-[12px] bg-gray-500 text-white hover:bg-gray-400 transition-all" id="form-cancel">Batal</button>
                        <button type="submit" class="inline-block bg-primary-500 text-white py-[12px] px-[26.5px] transition-all rounded-md hover:bg-primary-400">
                            <span class="inline-block relative ltr:pl-[25px] rtl:pr-[25px]">
                                <i class="material-symbols-outlined !text-[20px] absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">save</i>
                                <span id="form-submit-text">Simpan Jadwal</span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Invite Participants Modal (Peserta yang akan diundang - DIPROSES/DITERIMA) -->
<div class="invite-modal z-[9999] fixed transition-all inset-0 overflow-x-hidden overflow-y-auto lg:py-[20px] hidden" id="invite-modal">
    <div class="popup-overlay absolute inset-0 bg-black/50" id="invite-overlay"></div>
    <div class="popup-dialog flex transition-all max-w-[900px] min-h-full items-center mx-auto relative z-[1]">
        <div class="trezo-card w-full bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
            <div class="trezo-card-header bg-gray-50 dark:bg-[#15203c] mb-[20px] md:mb-[25px] flex items-center justify-between -mx-[20px] md:-mx-[25px] -mt-[20px] md:-mt-[25px] p-[20px] md:p-[25px] rounded-t-md">
                <div class="trezo-card-title">
                    <h5 class="!mb-0" id="invite-title">Undang Peserta Baru</h5>
                </div>
                <button type="button" class="text-[23px] transition-all leading-none text-black dark:text-white hover:text-primary-500" id="invite-close">
                    <i class="ri-close-fill"></i>
                </button>
            </div>
            <div class="trezo-card-content">
                <!-- Search & Filter -->
                <div class="mb-[25px] flex flex-col sm:flex-row gap-[15px] items-start justify-start">
                    <div class="flex-1">
                        <input type="text" id="search-participants" placeholder="Cari nama peserta..." class="h-[44px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] w-full outline-0 transition-all focus:border-primary-500">
                    </div>
                </div>

                <!-- Available Participants Table (Checkbox + Status) -->
                <div class="mb-[25px]">
                    <h6 class="text-sm font-semibold text-black dark:text-white mb-[12px]">Pilih peserta untuk diundang:</h6>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b border-gray-100 dark:border-[#172036]">
                                    <th class="text-left py-[12px] font-medium text-black dark:text-white w-[40px]">
                                        <input type="checkbox" id="select-all-participants" class="w-[16px] h-[16px]">
                                    </th>
                                    <th class="text-left py-[12px] font-medium text-black dark:text-white">Nama</th>
                                    <th class="text-left py-[12px] font-medium text-black dark:text-white">Email</th>
                                    <th class="text-left py-[12px] font-medium text-black dark:text-white">No. HP</th>
                                    <th class="text-left py-[12px] font-medium text-black dark:text-white w-[100px]">Status</th>
                                </tr>
                            </thead>
                            <tbody id="available-participants-tbody">
                                <!-- Data akan diisi oleh JS -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex justify-between items-center pt-[20px] border-t border-gray-200 dark:border-[#172036]">
                    <div class="text-sm text-gray-600 dark:text-gray-400">
                        <span id="selected-count">0</span> peserta dipilih
                    </div>
                    <div class="flex gap-[15px]">
                        <button type="button" class="rounded-md px-[26.5px] py-[12px] bg-success-500 text-white hover:bg-success-400 transition-all" id="invite-selected">
                            <span class="inline-block relative ltr:pl-[25px]">
                                <i class="material-symbols-outlined !text-[20px] absolute ltr:left-0 top-1/2 -translate-y-1/2">send</i>
                                Undang Terpilih
                            </span>
                        </button>
                        <button type="button" class="rounded-md px-[26.5px] py-[12px] bg-gray-500 text-white hover:bg-gray-400 transition-all" id="invite-cancel">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Success Notification -->
<div id="success-notification" class="fixed top-[20px] right-[20px] z-[10000] hidden p-[16px] bg-green-500 text-white rounded-lg shadow-xl transform translate-x-full transition-all">
    <div class="flex items-center">
        <i class="material-symbols-outlined !text-[20px] mr-[12px]">check_circle</i>
        <div>
            <div class="font-semibold" id="success-message"></div>
            <div class="text-sm opacity-90 mt-[2px]">Berhasil diproses</div>
        </div>
        <button class="ml-auto text-white hover:text-white/80" id="close-success">
            <i class="material-symbols-outlined !text-[20px]">close</i>
        </button>
    </div>
</div>

<script>
class ScheduleManager {
    constructor() {
        this.schedules = {
            1: { 
                id: 1, title: 'Interview Frontend Developer', date: '2025-01-15', time: '10:00', type: 'online', app: 'zoom', participants: 5 
            },
            2: { 
                id: 2, title: 'Interview Backend Developer', date: '2025-01-16', time: '14:00', type: 'offline', location: 'Meeting Room A, Lt. 3', participants: 3 
            }
        };
        this.nextId = 3;
        
        // Peserta yang sudah diundang (dengan status)
        this.participantsData = {
            1: [
                { id: 1, name: 'John Doe', email: 'john@example.com', phone: '08123456789', status: 'diterima' },
                { id: 2, name: 'Jane Smith', email: 'jane@example.com', phone: '08123456790', status: 'diproses' },
                { id: 3, name: 'Bob Johnson', email: 'bob@example.com', phone: '08123456791', status: 'diterima' },
                { id: 4, name: 'Alice Brown', email: 'alice@example.com', phone: '08123456792', status: 'diproses' },
                { id: 5, name: 'Charlie Wilson', email: 'charlie@example.com', phone: '08123456793', status: 'diterima' }
            ],
            2: [
                { id: 6, name: 'David Lee', email: 'david@example.com', phone: '08123456794', status: 'diproses' },
                { id: 7, name: 'Eva Davis', email: 'eva@example.com', phone: '08123456795', status: 'diterima' },
                { id: 8, name: 'Frank Miller', email: 'frank@example.com', phone: '08123456796', status: 'diproses' }
            ]
        };
        
        // Peserta yang akan diundang (pool peserta baru dengan status)
        this.allParticipants = [
            { id: 9, name: 'Mike Johnson', email: 'mike@example.com', phone: '08123456797', status: 'diproses' },
            { id: 10, name: 'Sarah Connor', email: 'sarah@example.com', phone: '08123456798', status: 'diterima' },
            { id: 11, name: 'Tom Hardy', email: 'tom@example.com', phone: '08123456799', status: 'diproses' },
            { id: 12, name: 'Lisa Wong', email: 'lisa@example.com', phone: '08123456800', status: 'diterima' },
            { id: 13, name: 'Peter Parker', email: 'peter@example.com', phone: '08123456801', status: 'diproses' }
        ];
        
        this.currentScheduleId = null;
        this.init();
    }

    init() {
        this.bindEvents();
        this.renderSchedules();
    }

    bindEvents() {
        // Create schedule
        document.getElementById('create-schedule-toggle').addEventListener('click', () => this.openForm(null));

        // Form events
        document.getElementById('form-close').addEventListener('click', () => this.closeForm());
        document.getElementById('form-cancel').addEventListener('click', () => this.closeForm());
        document.getElementById('form-overlay').addEventListener('click', () => this.closeForm());
        
        document.querySelectorAll('#schedule-form [name="type"]').forEach(radio => {
            radio.addEventListener('change', (e) => this.toggleFields(e.target.value));
        });
        document.getElementById('schedule-form').addEventListener('submit', (e) => this.handleFormSubmit(e));

        // Invite events
        document.getElementById('invite-from-edit').addEventListener('click', () => this.openInvite(this.currentScheduleId));
        document.getElementById('invite-close').addEventListener('click', () => this.closeInvite());
        document.getElementById('invite-cancel').addEventListener('click', () => this.closeInvite());
        document.getElementById('invite-overlay').addEventListener('click', () => this.closeInvite());
        document.getElementById('invite-selected').addEventListener('click', () => this.inviteSelected());

        // Search
        document.getElementById('search-participants').addEventListener('input', (e) => this.filterAvailableParticipants(e.target.value));
        document.getElementById('select-all-participants').addEventListener('change', (e) => this.toggleSelectAll(e.target.checked));

        // Success notification
        document.getElementById('close-success').addEventListener('click', () => this.hideSuccess());
    }

    renderSchedules() {
        const tbody = document.getElementById('schedules-tbody');
        tbody.innerHTML = '';
        document.getElementById('total-schedules').textContent = Object.keys(this.schedules).length;

        Object.values(this.schedules).forEach((schedule, index) => {
            const row = this.createScheduleRow(schedule, index + 1);
            tbody.appendChild(row);
        });

        this.bindTableButtons();
    }

    bindTableButtons() {
        document.querySelectorAll('.edit-schedule-btn').forEach(btn => {
            btn.addEventListener('click', (e) => this.openForm(e.currentTarget.dataset.scheduleId));
        });
        document.querySelectorAll('.invite-btn').forEach(btn => {
            btn.addEventListener('click', (e) => this.openInvite(e.currentTarget.dataset.scheduleId));
        });
        document.querySelectorAll('.delete-schedule-btn').forEach(btn => {
            btn.addEventListener('click', (e) => this.deleteSchedule(e.currentTarget.dataset.scheduleId));
        });
    }

    createScheduleRow(schedule, index) {
        const tr = document.createElement('tr');
        tr.className = 'border-b border-gray-100 dark:border-[#172036] hover:bg-gray-50 dark:hover:bg-[#15203c]';
        tr.innerHTML = `
            <td class="py-[15px] font-medium text-sm">${index}</td>
            <td class="py-[15px] font-medium text-black dark:text-white">${schedule.title}</td>
            <td class="py-[15px] text-sm text-black dark:text-white">${this.formatDateTime(schedule.date, schedule.time)}</td>
            <td class="py-[15px]">
                <span class="px-[8px] py-[3px] text-xs font-medium rounded-full 
                    ${schedule.type === 'online' ? 'bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-200' : 'bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-200'}">
                    ${schedule.type.toUpperCase()}
                </span>
            </td>
            <td class="py-[15px]">
                <span class="text-sm font-semibold text-primary-500">${schedule.participants}</span>
            </td>
            <td class="py-[15px]">
                <div class="flex items-center gap-[8px]">
                    <button class="invite-btn p-[6px] text-success-500 hover:text-success-600 rounded-full hover:bg-success-50 transition-all" data-schedule-id="${schedule.id}" title="Undang Peserta">
                        <i class="material-symbols-outlined !text-[18px]">send</i>
                    </button>
                    <button class="edit-schedule-btn p-[6px] text-primary-500 hover:text-primary-600 rounded-full hover:bg-primary-50 transition-all" data-schedule-id="${schedule.id}" title="Edit">
                        <i class="material-symbols-outlined !text-[18px]">edit</i>
                    </button>
                    <button class="delete-schedule-btn p-[6px] text-danger-500 hover:text-danger-600 rounded-full hover:bg-danger-50 transition-all" data-schedule-id="${schedule.id}" title="Hapus">
                        <i class="material-symbols-outlined !text-[18px]">delete</i>
                    </button>
                </div>
            </td>
        `;
        return tr;
    }

    // FORM METHODS
    openForm(scheduleId) {
        const form = document.getElementById('schedule-form');
        const modal = document.getElementById('schedule-form-modal');
        const isEdit = scheduleId !== null;
        
        this.currentScheduleId = scheduleId;
        form.reset();
        document.getElementById('schedule-id').value = scheduleId || '';
        document.getElementById('form-title').textContent = isEdit ? 'Edit Jadwal Interview' : 'Buat Jadwal Interview';
        document.getElementById('form-submit-text').textContent = isEdit ? 'Update Jadwal' : 'Simpan Jadwal';
        document.getElementById('edit-mode-header').classList.toggle('hidden', !isEdit);

        if (isEdit) {
            const schedule = this.schedules[scheduleId];
            Object.keys(schedule).forEach(key => {
                const input = form.querySelector(`[name="${key}"]`);
                if (input) input.value = schedule[key] || '';
            });
            const typeRadio = form.querySelector(`[name="type"][value="${schedule.type}"]`);
            if (typeRadio) typeRadio.checked = true;
            this.toggleFields(schedule.type);
            this.renderEditParticipants(scheduleId);
        }

        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    closeForm() {
        document.getElementById('schedule-form-modal').classList.add('hidden');
        document.body.style.overflow = '';
    }

    toggleFields(type) {
        document.getElementById('online-field').classList.toggle('hidden', type !== 'online');
        document.getElementById('offline-field').classList.toggle('hidden', type !== 'offline');
    }

    renderEditParticipants(scheduleId) {
        const participants = this.participantsData[scheduleId] || [];
        const tbody = document.getElementById('edit-participants-list');
        document.getElementById('edit-participants-count').textContent = participants.length;
        
        tbody.innerHTML = participants.map((p, index) => {
            const statusBadge = p.status === 'diterima' 
                ? 'bg-success-100 text-success-700 dark:bg-success-900 dark:text-success-200'
                : 'bg-warning-100 text-warning-700 dark:bg-warning-900 dark:text-warning-200';
            const statusText = p.status === 'diterima' ? 'Diterima' : 'Diproses';
            
            return `
                <tr class="border-b border-gray-200/50 dark:border-[#172036]/50 hover:bg-gray-100 dark:hover:bg-[#15203c]/50">
                    <td class="py-[8px] text-xs font-medium">${index + 1}</td>
                    <td class="py-[8px] text-xs font-medium text-black dark:text-white">${p.name}</td>
                    <td class="py-[8px]">
                        <span class="px-[6px] py-[2px] text-[10px] font-medium rounded-full ${statusBadge}">
                            ${statusText}
                        </span>
                    </td>
                    <td class="py-[8px]">
                        <div class="flex items-center gap-[4px]">
                            <button class="p-[4px] text-success-500 hover:text-success-600 rounded hover:bg-success-100 transition-all" onclick="scheduleManager.sendEmail(${p.id}, '${p.name}')" title="Kirim Email">
                                <i class="material-symbols-outlined !text-[14px]">send</i>
                            </button>
                            <button class="p-[4px] text-danger-500 hover:text-danger-600 rounded hover:bg-danger-100 transition-all" onclick="scheduleManager.removeParticipant(${scheduleId}, ${p.id})" title="Hapus">
                                <i class="material-symbols-outlined !text-[14px]">delete</i>
                            </button>
                        </div>
                    </td>
                </tr>
            `;
        }).join('');
    }

    handleFormSubmit(e) {
        e.preventDefault();
        const formData = new FormData(e.target);
        const data = Object.fromEntries(formData);
        data.id = parseInt(data.id) || this.nextId++;
        data.participants = data.id && this.schedules[data.id] ? this.schedules[data.id].participants : 0;

        this.schedules[data.id] = data;
        this.renderSchedules();
        this.closeForm();
        this.showSuccess(data.id ? 'Jadwal berhasil diupdate!' : 'Jadwal baru berhasil dibuat!');
    }

    // INVITE METHODS
    openInvite(scheduleId) {
        this.currentScheduleId = scheduleId;
        const schedule = this.schedules[scheduleId];
        document.getElementById('invite-title').textContent = `Undang Peserta Baru - ${schedule.title}`;
        document.getElementById('invite-modal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        this.renderAvailableParticipants();
    }

    closeInvite() {
        document.getElementById('invite-modal').classList.add('hidden');
        document.body.style.overflow = '';
    }

    renderAvailableParticipants(search = '') {
        const invitedIds = (this.participantsData[this.currentScheduleId] || []).map(p => p.id);
        let available = [...this.allParticipants];
        
        // Filter peserta yang belum diundang + search
        available = available.filter(p => !invitedIds.includes(p.id));
        if (search) {
            available = available.filter(p => 
                p.name.toLowerCase().includes(search.toLowerCase()) ||
                p.email.toLowerCase().includes(search.toLowerCase())
            );
        }

        const tbody = document.getElementById('available-participants-tbody');
        tbody.innerHTML = available.map(p => {
            const statusBadge = p.status === 'diterima' 
                ? 'bg-success-100 text-success-700 dark:bg-success-900 dark:text-success-200'
                : 'bg-warning-100 text-warning-700 dark:bg-warning-900 dark:text-warning-200';
            const statusText = p.status === 'diterima' ? 'Diterima' : 'Diproses';
            
            return `
                <tr class="border-b border-gray-100 dark:border-[#172036] hover:bg-gray-50 dark:hover:bg-[#15203c]">
                    <td class="py-[12px]"><input type="checkbox" value="${p.id}" class="participant-checkbox w-[16px] h-[16px]"></td>
                    <td class="py-[12px] font-medium text-black dark:text-white">${p.name}</td>
                    <td class="py-[12px] text-sm text-gray-600 dark:text-gray-400">${p.email}</td>
                    <td class="py-[12px] text-sm">${p.phone}</td>
                    <td class="py-[12px]">
                        <span class="px-[6px] py-[2px] text-xs font-medium rounded-full ${statusBadge}">
                            ${statusText}
                        </span>
                    </td>
                </tr>
            `;
        }).join('');

        this.updateSelectedCount();
        this.bindParticipantCheckboxes();
    }

    filterAvailableParticipants(search) {
        this.renderAvailableParticipants(search);
    }

    bindParticipantCheckboxes() {
        document.querySelectorAll('.participant-checkbox').forEach(cb => {
            cb.addEventListener('change', () => this.updateSelectedCount());
        });
    }

    toggleSelectAll(checked) {
        document.querySelectorAll('.participant-checkbox').forEach(cb => cb.checked = checked);
        this.updateSelectedCount();
    }

    updateSelectedCount() {
        const selected = document.querySelectorAll('.participant-checkbox:checked').length;
        document.getElementById('selected-count').textContent = selected;
    }

    inviteSelected() {
        const selectedCheckboxes = document.querySelectorAll('.participant-checkbox:checked');
        const selectedIds = Array.from(selectedCheckboxes).map(cb => parseInt(cb.value));
        
        if (selectedIds.length === 0) {
            alert('Pilih minimal 1 peserta!');
            return;
        }

        if (!this.participantsData[this.currentScheduleId]) {
            this.participantsData[this.currentScheduleId] = [];
        }

        selectedIds.forEach(id => {
            const participant = this.allParticipants.find(p => p.id === id);
            if (participant) {
                this.participantsData[this.currentScheduleId].push(participant);
            }
        });

        this.schedules[this.currentScheduleId].participants = this.participantsData[this.currentScheduleId].length;
        this.renderSchedules();
        this.renderAvailableParticipants();
        this.showSuccess(`${selectedIds.length} peserta berhasil diundang!`);
    }

    sendEmail(participantId, name) {
        this.showSuccess(`Email undangan berhasil dikirim ke ${name}!`);
    }

    removeParticipant(scheduleId, participantId) {
        if (confirm('Yakin ingin menghapus peserta ini?')) {
            this.participantsData[scheduleId] = this.participantsData[scheduleId].filter(p => p.id !== participantId);
            this.schedules[scheduleId].participants = this.participantsData[scheduleId].length;
            this.renderSchedules();
            if (this.currentScheduleId === scheduleId) {
                this.renderEditParticipants(scheduleId);
            }
            this.showSuccess('Peserta berhasil dihapus!');
        }
    }

    deleteSchedule(scheduleId) {
        if (confirm('Yakin ingin menghapus jadwal ini dan semua peserta?')) {
            delete this.schedules[scheduleId];
            delete this.participantsData[scheduleId];
            this.renderSchedules();
            this.showSuccess('Jadwal berhasil dihapus!');
        }
    }

    // UTILITIES
    formatDateTime(date, time) {
        return `${new Date(date).toLocaleDateString('id-ID', { day: 'numeric', month: 'short', year: 'numeric' })} ${time}`;
    }

    showSuccess(message) {
        document.getElementById('success-message').textContent = message;
        const notification = document.getElementById('success-notification');
        notification.classList.remove('hidden', 'translate-x-full');
        notification.classList.add('translate-x-0');
        setTimeout(() => {
            notification.classList.remove('translate-x-0');
            setTimeout(() => notification.classList.add('translate-x-full', 'hidden'), 300);
        }, 3000);
    }

    hideSuccess() {
        const notification = document.getElementById('success-notification');
        notification.classList.add('translate-x-full', 'hidden');
    }
}

document.addEventListener('DOMContentLoaded', () => {
    window.scheduleManager = new ScheduleManager();
});
</script>


        
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