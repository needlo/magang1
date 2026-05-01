<!-- Sidebar -->
        <div class="sidebar-area bg-white dark:bg-[#0c1427] fixed overflow-hidden z-[7] top-0 h-screen transition-all rounded-r-md" id="sidebar-area">
            <div class="logo bg-white dark:bg-[#0c1427] border-b border-gray-100 dark:border-[#172036] px-[25px] pt-[19px] pb-[15px] absolute z-[2] right-0 top-0 left-0">
                <a href="index.html" class="transition-none relative flex items-center">
                    <img src="assets/images/otw.ico" class="h-[50px] w-[200]" alt="logo">
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
                        Main
                    </span>
                    <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                        <button class="accordion-button toggle open active flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[28px] rtl:pr-[14px] rtl:pl-[28px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c]" type="button">
                            <i class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                                dashboard
                            </i>
                            <span class="title leading-none">
                                Dashboard
                            </span>
                        </button>
                        <div class="accordion-collapse" style="display: block;">
                            <div class="pt-[4px]">
                                <ul class="sidebar-sub-menu" id="dashboardItemsList">
                                    <li class="sidemenu-item mb-[4px] last:mb-0">
                                        <a href="project-management-index.html" class="sidemenu-link rounded-md flex items-center relative transition-all font-medium text-gray-500 dark:text-gray-400 py-[9px] ltr:pl-[38px] ltr:pr-[30px] rtl:pr-[38px] rtl:pl-[30px] hover:text-primary-500 hover:bg-primary-50 w-full text-left dark:hover:bg-[#15203c]">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li class="sidemenu-item mb-[4px] last:mb-0">
                                        <a href="pm-teams.html" class="sidemenu-link rounded-md flex items-center relative transition-all font-medium text-gray-500 dark:text-gray-400 py-[9px] ltr:pl-[38px] ltr:pr-[30px] rtl:pr-[38px] rtl:pl-[30px] hover:text-primary-500 hover:bg-primary-50 w-full text-left dark:hover:bg-[#15203c]">
                                            Project List
                                        </a>
                                    </li>
                                    <li class="sidemenu-item mb-[4px] last:mb-0">
                                        <a href="pm-users.html" class="sidemenu-link active rounded-md flex items-center relative transition-all font-medium text-gray-500 dark:text-gray-400 py-[9px] ltr:pl-[38px] ltr:pr-[30px] rtl:pr-[38px] rtl:pl-[30px] hover:text-primary-500 hover:bg-primary-50 w-full text-left dark:hover:bg-[#15203c]">
                                            Penilaian
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <span class="block relative font-medium uppercase text-gray-400 mb-[10px] text-xs [&:not(:first-child)]:mt-[22px]">
                        Others
                    </span>
                    <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                        <a href="my-profile.html" class="accordion-button flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[28px] rtl:pr-[14px] rtl:pl-[28px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c]">
                            <i class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                                account_circle
                            </i>
                            <span class="title leading-none">
                                My Profile
                            </span>
                        </a>
                    </div>
                    <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                        <button class="accordion-button toggle flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[28px] rtl:pr-[14px] rtl:pl-[28px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c]" type="button">
                            <i class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                                settings
                            </i>
                            <span class="title leading-none">
                                Settings
                            </span>
                        </button>
                        <div class="accordion-collapse hidden">
                            <div class="pt-[4px]">
                                <ul class="sidebar-sub-menu">
                                    <li class="sidemenu-item mb-[4px] last:mb-0">
                                        <a href="settings.html" class="sidemenu-link rounded-md flex items-center relative transition-all font-medium text-gray-500 dark:text-gray-400 py-[9px] ltr:pl-[38px] ltr:pr-[30px] rtl:pr-[38px] rtl:pl-[30px] hover:text-primary-500 hover:bg-primary-50 w-full text-left dark:hover:bg-[#15203c]">
                                            Account Settings
                                        </a>
                                    </li>
                                    <li class="sidemenu-item mb-[4px] last:mb-0">
                                        <a href="change-password.html" class="sidemenu-link rounded-md flex items-center relative transition-all font-medium text-gray-500 dark:text-gray-400 py-[9px] ltr:pl-[38px] ltr:pr-[30px] rtl:pr-[38px] rtl:pl-[30px] hover:text-primary-500 hover:bg-primary-50 w-full text-left dark:hover:bg-[#15203c]">
                                            Change Password
                                        </a>
                                    </li>
                                    <li class="sidemenu-item mb-[4px] last:mb-0">
                                        <a href="connections.html" class="sidemenu-link rounded-md flex items-center relative transition-all font-medium text-gray-500 dark:text-gray-400 py-[9px] ltr:pl-[38px] ltr:pr-[30px] rtl:pr-[38px] rtl:pl-[30px] hover:text-primary-500 hover:bg-primary-50 w-full text-left dark:hover:bg-[#15203c]">
                                            Connections
                                        </a>
                                    </li>
                                    <li class="sidemenu-item mb-[4px] last:mb-0">
                                        <a href="privacy-policy.html" class="sidemenu-link rounded-md flex items-center relative transition-all font-medium text-gray-500 dark:text-gray-400 py-[9px] ltr:pl-[38px] ltr:pr-[30px] rtl:pr-[38px] rtl:pl-[30px] hover:text-primary-500 hover:bg-primary-50 w-full text-left dark:hover:bg-[#15203c]">
                                            Privacy Policy
                                        </a>
                                    </li>
                                    <li class="sidemenu-item mb-[4px] last:mb-0">
                                        <a href="terms-conditions.html" class="sidemenu-link rounded-md flex items-center relative transition-all font-medium text-gray-500 dark:text-gray-400 py-[9px] ltr:pl-[38px] ltr:pr-[30px] rtl:pr-[38px] rtl:pl-[30px] hover:text-primary-500 hover:bg-primary-50 w-full text-left dark:hover:bg-[#15203c]">
                                            Terms & Conditions
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                        <a href="sign-in.html" class="accordion-button flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[28px] rtl:pr-[14px] rtl:pl-[28px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c]">
                            <i class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                                logout
                            </i>
                            <span class="title leading-none">
                                Logout
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
<!-- end Sidebard -->