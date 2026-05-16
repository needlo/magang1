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
    
    <!-- Pendaftaran Magang IT -->
    <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
        <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
            <div class="trezo-card-title">
                <form class="relative sm:w-[265px]">
                    <label class="leading-none absolute ltr:left-[13px] rtl:right-[13px] text-black dark:text-white mt-px top-1/2 -translate-y-1/2">
                        <i class="material-symbols-outlined !text-[20px]">
                            search
                        </i>
                    </label>
                    <input type="text" placeholder="Cari pendaftar magang..." class="bg-gray-50 border border-gray-50 h-[36px] text-xs rounded-md w-full block text-black pt-[11px] pb-[12px] ltr:pl-[38px] rtl:pr-[38px] ltr:pr-[13px] ltr:md:pr-[16px] rtl:pl-[13px] rtl:md:pl-[16px] placeholder:text-gray-500 outline-0 dark:bg-[#15203c] dark:text-white dark:border-[#15203c] dark:placeholder:text-gray-400">
                </form>
            </div>
            <div class="trezo-card-subtitle mt-[15px] sm:mt-0">
                <button type="button" class="inline-block transition-all rounded-md font-medium px-[13px] py-[6px] text-primary-500 border border-primary-500 hover:bg-primary-500 hover:text-white" id="add-new-popup-toggle">
                    <span class="inline-block relative ltr:pl-[22px] rtl:pr-[22px]">
                        <i class="material-symbols-outlined !text-[22px] absolute ltr:-left-[4px] rtl:-right-[4px] top-1/2 -translate-y-1/2">
                            add
                        </i>
                        Tambah Pendaftar
                    </span>
                </button>
            </div>
        </div>
        <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
            <div class="table-responsive overflow-x-auto">
                <table class="w-full without-border">
                    <thead class="text-black dark:text-white">
                        <tr>
                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                            </th>
                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                Nama
                            </th>
                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                Email
                            </th>
                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                Status
                            </th>
                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-black dark:text-white">
                        <!-- Data Ahmad Rizki -->
                        <tr>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <div class="form-check relative top-[2px]">
                                    <input type="checkbox" class="cursor-pointer">
                                </div>
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <span class="font-medium">Ahmad Rizki</span>
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                ahmad.rizki@email.com
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <span class="px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                    Diterima
                                </span>
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <div class="flex items-center gap-[9px]">
                            <a href=<?= base_url("data-pendaftar/view") ?> 
                            class="text-info-500 leading-none custom-tooltip inline-flex items-center justify-center" 
                            data-text="Detail">
                                
                                <i class="material-symbols-outlined !text-md">visibility</i>
                            </a>
                            <a href=<?= base_url("data-pendaftar/edit") ?> 
                            class="text-gray-500 leading-none custom-tooltip inline-flex items-center justify-center" 
                            data-text="Edit">
                                
                                <i class="material-symbols-outlined !text-md">edit</i>
                            </a>
                                    <button type="button" class="text-danger-500 leading-none custom-tooltip" data-text="Hapus">
                                        <i class="material-symbols-outlined !text-md">delete</i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Data Siti Nurhaliza -->
                        <tr>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <div class="form-check relative top-[2px]">
                                    <input type="checkbox" class="cursor-pointer">
                                </div>
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <span class="font-medium">Siti Nurhaliza</span>
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                sitinur@email.com
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <span class="px-[8px] py-[3px] inline-block bg-warning-50 dark:bg-[#15203c] text-warning-700 rounded-sm font-medium text-xs">
                                    Menunggu
                                </span>
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <div class="flex items-center gap-[9px]">
                                    <button type="button" class="text-info-500 leading-none custom-tooltip" data-text="Detail" onclick="showDetail('Siti Nurhaliza', 'SMA Negeri 5 Bandung', 'Jl. Asia Afrika No. 25, Bandung', 'sitinur@email.com', '0857-1234-5678', 'CV.pdf', 'Menunggu')">
                                        <i class="material-symbols-outlined !text-md">visibility</i>
                                    </button>
                                    <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" data-text="Edit">
                                        <i class="material-symbols-outlined !text-md">edit</i>
                                    </button>
                                    <button type="button" class="text-danger-500 leading-none custom-tooltip" data-text="Hapus">
                                        <i class="material-symbols-outlined !text-md">delete</i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Data lainnya dengan pola yang sama... -->
                        <tr>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <div class="form-check relative top-[2px]">
                                    <input type="checkbox" class="cursor-pointer">
                                </div>
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <span class="font-medium">Budi Santoso</span>
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                budi.santoso@gmail.com
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                    Diproses
                                </span>
                            </td>
                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                <div class="flex items-center gap-[9px]">
                                    <button type="button" class="text-info-500 leading-none custom-tooltip" data-text="Detail" onclick="showDetail('Budi Santoso', 'SMK Telkom Malang', 'Jl. Soekarno Hatta No. 99, Malang', 'budi.santoso@gmail.com', '0813-9876-5432', 'CV.pdf, Portofolio.pdf', 'Diproses')">
                                        <i class="material-symbols-outlined !text-md">visibility</i>
                                    </button>
                                    <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" data-text="Edit">
                                        <i class="material-symbols-outlined !text-md">edit</i>
                                    </button>
                                    <button type="button" class="text-danger-500 leading-none custom-tooltip" data-text="Hapus">
                                        <i class="material-symbols-outlined !text-md">delete</i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Detail Pendaftar -->
    <div id="detailModal" class="fixed inset-0 bg-black bg-opacity-50 z-[9999] hidden flex items-center justify-center p-4">
        <div class="bg-white dark:bg-[#0c1427] rounded-lg w-full max-w-2xl max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-gray-200 dark:border-[#172036]">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold text-black dark:text-white">Detail Pendaftar</h3>
                    <button onclick="closeDetail()" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                        <i class="material-symbols-outlined !text-2xl">close</i>
                    </button>
                </div>
            </div>
            <div class="p-6" id="detailContent">
                <!-- Konten detail akan diisi oleh JavaScript -->
            </div>
        </div>
    </div>
    
    <div class="grow"></div>
    
</div>

<script>
function showDetail(nama, sekolah, alamat, email, telp, dokumen, status) {
    const detailContent = `
        <div class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nama Lengkap</label>
                    <p class="font-semibold text-black dark:text-white">${nama}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Sekolah</label>
                    <p class="text-black dark:text-white">${sekolah}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                    <p class="text-black dark:text-white">${email}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">No. Telepon</label>
                    <p class="text-black dark:text-white">${telp}</p>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Alamat</label>
                    <p class="text-black dark:text-white">${alamat}</p>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Dokumen</label>
                    <p class="text-primary-500 hover:underline text-sm">${dokumen}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Status</label>
                    <span class="px-3 py-1 inline-block rounded-full font-medium text-xs ${getStatusClass(status)}">
                        ${status}
                    </span>
                </div>
            </div>
        </div>
    `;
    
    document.getElementById('detailContent').innerHTML = detailContent;
    document.getElementById('detailModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeDetail() {
    document.getElementById('detailModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function getStatusClass(status) {
    switch(status) {
        case 'Diterima': return 'bg-success-50 dark:bg-[#15203c] text-success-600';
        case 'Menunggu': return 'bg-warning-50 dark:bg-[#15203c] text-warning-700';
        case 'Diproses': return 'bg-primary-50 dark:bg-[#15203c] text-primary-500';
        case 'Ditolak': return 'bg-danger-50 dark:bg-[#15203c] text-danger-500';
        default: return 'bg-gray-50 dark:bg-[#15203c] text-gray-600';
    }
}

// Tutup modal saat klik background
document.getElementById('detailModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeDetail();
    }
});

// Tutup modal dengan ESC
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeDetail();
    }
});
</script>

<!-- Add New Popup -->
<div class="add-new-popup z-[999] fixed transition-all inset-0 overflow-x-hidden overflow-y-auto lg:py-[20px]" id="add-new-popup">
    <div class="popup-dialog flex transition-all max-w-[550px] min-h-full items-center mx-auto">
        <div class="trezo-card w-full bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
            <div class="trezo-card-header bg-gray-50 dark:bg-[#15203c] mb-[20px] md:mb-[25px] flex items-center justify-between -mx-[20px] md:-mx-[25px] -mt-[20px] md:-mt-[25px] p-[20px] md:p-[25px] rounded-t-md">
                <div class="trezo-card-title">
                    <h5 class="!mb-0">
                        Tambah Pendaftar Magang IT
                    </h5>
                </div>
                <div class="trezo-card-subtitle">
                    <button type="button" class="text-[23px] transition-all leading-none text-black dark:text-white hover:text-primary-500" id="add-new-popup-toggle">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
            </div>
            <div class="trezo-card-content">
                <form>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px] md:gap-[25px]">
                        <div class="sm:col-span-2">
                            <label class="mb-[10px] text-black dark:text-white font-medium block">
                                Nama Lengkap
                            </label>
                            <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="Masukkan nama lengkap">
                        </div>
                        <div>
                            <label class="mb-[10px] text-black dark:text-white font-medium block">
                                Nama Sekolah
                            </label>
                            <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="Nama sekolah">
                        </div>
                        <div>
                            <label class="mb-[10px] text-black dark:text-white font-medium block">
                                Alamat Sekolah
                            </label>
                            <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="Alamat lengkap sekolah">
                        </div>
                        <div>
                            <label class="mb-[10px] text-black dark:text-white font-medium block">
                                Email
                            </label>
                            <input type="email" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="example@email.com">
                        </div>
                        <div>
                            <label class="mb-[10px] text-black dark:text-white font-medium block">
                                No. Telepon
                            </label>
                            <input type="tel" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="081234567890">
                        </div>
                        <div class="sm:col-span-2">
                            <label class="mb-[10px] text-black dark:text-white font-medium block">
                                Dokumen (CV, Transkrip, dll)
                            </label>
                            <input type="file" multiple class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-primary-50 file:text-primary-500 hover:file:bg-primary-100">
                        </div>
                        <div class="sm:col-span-2">
                            <label class="mb-[10px] text-black dark:text-white font-medium block">
                                Status Awal
                            </label>
                            <select class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[14px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                <option>Pilih Status</option>
                                <option>Menunggu</option>
                                <option>Diproses</option>
                                <option>Diterima</option>
                                <option>Ditolak</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-[20px] md:mt-[25px] ltr:text-right rtl:text-left">
                        <button type="button" class="rounded-md inline-block transition-all font-medium ltr:mr-[15px] rtl:ml-[15px] px-[26.5px] py-[12px] bg-danger-500 text-white hover:bg-danger-400" id="add-new-popup-toggle">
                            Batal
                        </button>
                        <button type="submit" class="inline-block bg-primary-500 text-white py-[12px] px-[26.5px] transition-all rounded-md hover:bg-primary-400">
                            <span class="inline-block relative ltr:pl-[25px] rtl:pr-[25px]">
                                <i class="material-symbols-outlined !text-[20px] absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    add
                                </i>
                                Tambah Pendaftar
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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