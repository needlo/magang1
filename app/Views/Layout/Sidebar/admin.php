<?php
$currentPage = uri_string();
?>

<div class="sidebar-area bg-white dark:bg-[#0c1427] fixed overflow-hidden z-[7] top-0 h-screen transition-all rounded-r-md" id="sidebar-area">
        <div class="logo bg-white dark:bg-[#0c1427] border-b border-gray-100 dark:border-[#172036] px-[25px] pt-[19px] pb-[15px] absolute z-[2] right-0 top-0 left-0">
            <a href=<?= base_url("dashboard-admin") ?> class="transition-none relative flex items-center">
                <img src=<?=base_url("assets/images/otw.ico")?> class="h-[50px] w-[200]" alt="logo">
            </a>
            <button type="button" class="burger-menu inline-block absolute z-[3] top-[24px] ltr:right-[25px] rtl:left-[25px] transition-all hover:text-primary-500" id="hide-sidebar-toggle2">
                <i class="material-symbols-outlined">
                    close
                </i>
            </button>
        </div>
        <div class="pt-[89px] px-[25px] pb-[20px] h-screen" data-simplebar>
            <div class="accordion">
                <span class="block relative font-medium uppercase text-gray-400 mb-[10px] text-xs">
                    Utama
                </span>
                <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                    <a href=<?= base_url("dashboard-admin") ?> class="accordion-button <?= ($currentPage == 'dashboard-admin') ? 'active' : '' ?> flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[28px] rtl:pr-[14px] rtl:pl-[28px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c]">
                        <i class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                            dashboard
                        </i>
                        <span class="title leading-none">
                            Dashboard
                        </span>
                    </a>
                </div>
                <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                    <a href=<?= base_url("anggota-office") ?> class="accordion-button <?= ($currentPage == 'anggota-office') ? 'active' : '' ?> flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[28px] rtl:pr-[14px] rtl:pl-[28px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c]">
                        <i class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                            groups
                        </i>
                        <span class="title leading-none">
                            Anggota Office
                        </span>
                    </a>
                </div>
                <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                    <a href=<?= base_url("anggota-magang") ?> class="accordion-button <?= ($currentPage == 'anggota-magang') ? 'active' : '' ?> flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[28px] rtl:pr-[14px] rtl:pl-[28px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c]">
                        <i class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                            groups
                        </i>
                        <span class="title leading-none">
                            Anggota Magang
                        </span>
                    </a>
                </div>
                <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                    <a href=<?= base_url("jadwal-interview") ?> class="accordion-button <?= ($currentPage == 'jadwal-interview') ? 'active' : '' ?> flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[28px] rtl:pr-[14px] rtl:pl-[28px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c]">
                        <i class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                            calendar_month
                        </i>
                        <span class="title leading-none">
                            Jadwal Interview
                        </span>
                    </a>
                </div>
                <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                    <a href=<?= base_url("data-pendaftar") ?> class="accordion-button <?= ($currentPage == 'data-pendaftar') ? 'active' : '' ?> flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[28px] rtl:pr-[14px] rtl:pl-[28px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c]">
                        <i class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                            Article_person
                        </i>
                        <span class="title leading-none">
                            Data Pendaftaran
                        </span>
                    </a>
                </div>
                <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                    <a href=<?= base_url("") ?> class="accordion-button <?= ($currentPage == 'sertifikat-intern') ? 'active' : '' ?> flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[28px] rtl:pr-[14px] rtl:pl-[28px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c]">
                        <i class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                            lists
                        </i>
                        <span class="title leading-none">
                            Export Data
                        </span>
                    </a>
                </div>
                
                <span class="block relative font-medium uppercase text-gray-400 mb-[10px] text-xs [&:not(:first-child)]:mt-[22px]">
                    Lainnya
                </span>
                <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                    <a href=<?= base_url("my-profile") ?> class="accordion-button <?= ($currentPage == 'my-profile') ? 'active' : '' ?> flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[28px] rtl:pr-[14px] rtl:pl-[28px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c]">
                        <i
                            class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                            account_circle
                        </i>
                        <span class="title leading-none">
                            Profil Saya
                        </span>
                    </a>
                </div>
                <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                    <a href=<?= base_url("setting") ?> class="accordion-button <?= ($currentPage == 'setting') ? 'active' : '' ?> flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[28px] rtl:pr-[14px] rtl:pl-[28px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c]">
                        <i class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                            settings
                        </i>
                        <span class="title leading-none">
                            Pengaturan
                        </span>
                    </a>
                </div>
                <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                    <a href=<?= base_url("login")?> class="accordion-button flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[28px] rtl:pr-[14px] rtl:pl-[28px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c]">
                        <i class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                            logout
                        </i>
                        <span class="title leading-none">
                            Keluar
                        </span>
                    </a>
                </div>
            </div>
        </div>
</div>