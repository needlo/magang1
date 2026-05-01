        <!-- Header -->
       <div class="header-area bg-white dark:bg-[#0c1427] py-[13px] px-[20px] md:px-[25px] fixed top-0 z-[6] rounded-b-md transition-all" id="header-area">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex items-center justify-center md:justify-normal">
                    <div class="relative leading-none top-px ltr:mr-[13px] ltr:md:mr-[18px] ltr:lg:mr-[23px] rtl:ml-[13px] rtl:md:ml-[18px] rtl:lg:ml-[23px]">
                        <button type="button" class="hide-sidebar-toggle transition-all inline-block hover:text-primary-500" id="hide-sidebar-toggle">
                            <i class="material-symbols-outlined !text-[20px]">
                                menu
                            </i>
                        </button>
                    </div>
                </div>
                <ul class="flex items-center justify-center md:justify-normal mt-[13px] md:mt-0">
                    <li class="relative mx-[8px] md:mx-[10px] lg:mx-[12px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                        <button type="button" class="light-dark-toggle leading-none inline-block transition-all relative top-[2px] text-[#fe7a36]" id="light-dark-toggle">
                            <i class="material-symbols-outlined !text-[20px] md:!text-[22px]">
                                light_mode
                            </i>
                        </button>
                    </li>
                    <li class="relative mx-[8px] md:mx-[10px] lg:mx-[12px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                        <button type="button" class="leading-none inline-block transition-all relative top-[2px] hover:text-primary-500" id="fullscreenBtn">
                            <i class="material-symbols-outlined !text-[22px] md:!text-[24px]" id="fullscreenIcon">
                                fullscreen
                            </i>
                        </button>
                    </li>
                    <li class="relative profile-menu mx-[8px] md:mx-[10px] lg:mx-[12px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                        <button type="button" class="flex items-center -mx-[5px] relative ltr:pr-[14px] rtl:pl-[14px] text-black dark:text-white" id="dropdownToggleBtn">
                            <img src="assets/images/admin.png" class="w-[35px] h-[35px] md:w-[42px] md:h-[42px] rounded-full ltr:md:mr-[2px] ltr:lg:mr-[8px] rtl:md:ml-[2px] rtl:lg:ml-[8px] border-[2px] border-primary-200 inline-block" alt="admin-image">
                            <span class="block font-semibold text-[0] lg:text-base">
                                Olivia
                            </span>
                            <i class="ri-arrow-down-s-line text-[15px] absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2 mt-px"></i>
                        </button>
                        <div class="profile-menu-dropdown bg-white dark:bg-[#0c1427] transition-all shadow-3xl dark:shadow-none py-[22px] absolute mt-[13px] md:mt-[14px] w-[195px] z-[1] top-full ltr:right-0 rtl:left-0 rounded-md">
                            <div class="flex items-center border-b border-gray-100 dark:border-[#172036] pb-[12px] mx-[20px] mb-[10px]">
                                <img src="assets/images/admin.png" class="rounded-full w-[31px] h-[31px] ltr:mr-[9px] rtl:ml-[9px] border-2 border-primary-200 inline-block" alt="admin-image">
                                <div>
                                    <span class="block text-black dark:text-white font-medium">
                                        Olivia John
                                    </span>
                                    <span class="block text-xs">
                                        Marketing Manager
                                    </span>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <a href="my-profile.html" class="block relative py-[7px] ltr:pl-[50px] ltr:pr-[20px] rtl:pr-[50px] rtl:pl-[20px] text-black dark:text-white transition-all hover:text-primary-500">
                                        <i class="material-symbols-outlined top-1/2 -translate-y-1/2 !text-[22px] absolute ltr:left-[20px] rtl:right-[20px]">
                                            account_circle
                                        </i>
                                        My Profile
                                    </a>
                                </li>
                            </ul>
                            <div class="border-t border-gray-100 dark:border-[#172036] mx-[20px] my-[9px]"></div>
                            <ul>
                                <li>
                                    <a href="settings.html" class="block relative py-[7px] ltr:pl-[50px] ltr:pr-[20px] rtl:pr-[50px] rtl:pl-[20px] text-black dark:text-white transition-all hover:text-primary-500">
                                        <i class="material-symbols-outlined top-1/2 -translate-y-1/2 !text-[22px] absolute ltr:left-[20px] rtl:right-[20px]">
                                            settings
                                        </i>
                                        Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="logout.html" class="block relative py-[7px] ltr:pl-[50px] ltr:pr-[20px] rtl:pr-[50px] rtl:pl-[20px] text-black dark:text-white transition-all hover:text-primary-500">
                                        <i class="material-symbols-outlined top-1/2 -translate-y-1/2 !text-[22px] absolute ltr:left-[20px] rtl:right-[20px]">
                                            logout
                                        </i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="relative settings-menu mx-[8px] md:mx-[10px] lg:mx-[12px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                        <button type="button" class="leading-none inline-block transition-all relative top-[2px] hover:text-primary-500" id="dropdownToggleBtn">
                            <i class="material-symbols-outlined !text-[22px] md:!text-[24px]">
                                settings
                            </i>
                        </button>
                        <div class="settings-menu-dropdown bg-white dark:bg-[#0c1427] transition-all shadow-3xl dark:shadow-none p-[20px] absolute mt-[17px] md:mt-[20px] w-[195px] z-[1] top-full ltr:right-0 rtl:left-0 rounded-md">
                            <button type="button" class="rtl-mode-toggle flex items-center text-black dark:text-white font-medium" id="rtl-mode-toggle">
                                RTL Mode:
                                <span class="inline-block relative rounded-full w-[35px] h-[20px] bg-gray-50 dark:bg-[#0a0e19] ltr:ml-[10px] rtl:mr-[10px]">
                                    <span class="inline-block transition-all absolute h-[12px] w-[12px] bg-black dark:bg-white rounded-full top-1/2 -translate-y-1/2"></span>
                                </span>
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Header -->