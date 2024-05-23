<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Arcane WAF System</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}"/>

        <!-- ==== WOW JS ==== -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script>
            new WOW().init();
        </script>

        @vite(['resources/css/app.css', 'resources/js/landing/app.js'])
    </head>

    <body>
        <!-- ====== Navbar Section Start -->
        <div class="ud-header absolute left-0 top-0 z-40 flex w-full items-center bg-transparent">
            <div class="container">
                <div class="relative -mx-4 flex items-center justify-between">
                    <div class="w-20 max-w-full px-4">
                        <a href="#" class="navbar-logo flex w-full py-5 items-center">
                            <img src="{{ asset('images/logo/logo-white.svg') }}" alt="logo" class="header-logo w-full"/>
                            <span id="brand-name" class="text-2xl font-medium ms-2">ARCANE</span>
                        </a>
                    </div>
                    <div class="flex w-full items-center justify-between px-4">
                        <div>
                            <button id="navbarToggler" class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                                <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"> </span>
                                <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                                <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                            </button>
                            <nav
                                    id="navbarCollapse"
                                    class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark-2 lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:px-4 lg:py-0 lg:shadow-none dark:lg:bg-transparent xl:px-6"
                            >
                                <ul class="block lg:flex 2xl:ml-20">
                                    <li class="group relative">
                                        <a
                                                href="#home"
                                                class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70"
                                        >
                                            Home
                                        </a>
                                    </li>
                                    <li class="group relative">
                                        <a
                                                href="#about"
                                                class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10"
                                        >
                                            About
                                        </a>
                                    </li>
                                    <li class="group relative">
                                        <a
                                                href="#pricing"
                                                class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10"
                                        >
                                            Pricing
                                        </a>
                                    </li>
                                    <li class="group relative">
                                        <a
                                                href="#team"
                                                class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10"
                                        >
                                            Team
                                        </a>
                                    </li>
                                    <li class="group relative">
                                        <a
                                                href="#contact"
                                                class="ud-menu-scroll mx-8 flex py-2 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10"
                                        >
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="flex items-center justify-end pr-16 lg:pr-0">
                            <label for="themeSwitcher" class="inline-flex cursor-pointer items-center" aria-label="themeSwitcher" name="themeSwitcher">
                                <input type="checkbox" name="themeSwitcher" id="themeSwitcher" class="sr-only"/>
                                <span class="block text-white dark:hidden">
                                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M13.3125 1.50001C12.675 1.31251 12.0375 1.16251 11.3625 1.05001C10.875 0.975006 10.35 1.23751 10.1625 1.68751C9.93751 2.13751 10.05 2.70001 10.425 3.00001C13.0875 5.47501 14.0625 9.11251 12.975 12.525C11.775 16.3125 8.25001 18.975 4.16251 19.0875C3.63751 19.0875 3.22501 19.425 3.07501 19.9125C2.92501 20.4 3.15001 20.925 3.56251 21.1875C4.50001 21.75 5.43751 22.2 6.37501 22.5C7.46251 22.8375 8.58751 22.9875 9.71251 22.9875C11.625 22.9875 13.5 22.5 15.1875 21.5625C17.85 20.1 19.725 17.7375 20.55 14.8875C22.1625 9.26251 18.975 3.37501 13.3125 1.50001ZM18.9375 14.4C18.2625 16.8375 16.6125 18.825 14.4 20.0625C12.075 21.3375 9.41251 21.6 6.90001 20.85C6.63751 20.775 6.33751 20.6625 6.07501 20.55C10.05 19.7625 13.35 16.9125 14.5875 13.0125C15.675 9.56251 15 5.92501 12.7875 3.07501C17.5875 4.68751 20.2875 9.67501 18.9375 14.4Z"
                                        />
                                    </svg>
                                </span>
                                <span class="hidden text-white dark:block">
                                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2172_3070)">
                                            <path
                                                    d="M12 6.89999C9.18752 6.89999 6.90002 9.18749 6.90002 12C6.90002 14.8125 9.18752 17.1 12 17.1C14.8125 17.1 17.1 14.8125 17.1 12C17.1 9.18749 14.8125 6.89999 12 6.89999ZM12 15.4125C10.125 15.4125 8.58752 13.875 8.58752 12C8.58752 10.125 10.125 8.58749 12 8.58749C13.875 8.58749 15.4125 10.125 15.4125 12C15.4125 13.875 13.875 15.4125 12 15.4125Z"
                                            />
                                            <path
                                                    d="M12 4.2375C12.45 4.2375 12.8625 3.8625 12.8625 3.375V1.5C12.8625 1.05 12.4875 0.637497 12 0.637497C11.55 0.637497 11.1375 1.0125 11.1375 1.5V3.4125C11.175 3.8625 11.55 4.2375 12 4.2375Z"
                                            />
                                            <path
                                                    d="M12 19.7625C11.55 19.7625 11.1375 20.1375 11.1375 20.625V22.5C11.1375 22.95 11.5125 23.3625 12 23.3625C12.45 23.3625 12.8625 22.9875 12.8625 22.5V20.5875C12.8625 20.1375 12.45 19.7625 12 19.7625Z"
                                            />
                                            <path
                                                    d="M18.1125 6.74999C18.3375 6.74999 18.5625 6.67499 18.7125 6.48749L19.9125 5.28749C20.25 4.94999 20.25 4.42499 19.9125 4.08749C19.575 3.74999 19.05 3.74999 18.7125 4.08749L17.5125 5.28749C17.175 5.62499 17.175 6.14999 17.5125 6.48749C17.6625 6.67499 17.8875 6.74999 18.1125 6.74999Z"
                                            />
                                            <path
                                                    d="M5.32501 17.5125L4.12501 18.675C3.78751 19.0125 3.78751 19.5375 4.12501 19.875C4.27501 20.025 4.50001 20.1375 4.72501 20.1375C4.95001 20.1375 5.17501 20.0625 5.32501 19.875L6.52501 18.675C6.86251 18.3375 6.86251 17.8125 6.52501 17.475C6.18751 17.175 5.62501 17.175 5.32501 17.5125Z"
                                            />
                                            <path
                                                    d="M22.5 11.175H20.5875C20.1375 11.175 19.725 11.55 19.725 12.0375C19.725 12.4875 20.1 12.9 20.5875 12.9H22.5C22.95 12.9 23.3625 12.525 23.3625 12.0375C23.3625 11.55 22.95 11.175 22.5 11.175Z"
                                            />
                                            <path
                                                    d="M4.23751 12C4.23751 11.55 3.86251 11.1375 3.37501 11.1375H1.50001C1.05001 11.1375 0.637512 11.5125 0.637512 12C0.637512 12.45 1.01251 12.8625 1.50001 12.8625H3.41251C3.86251 12.8625 4.23751 12.45 4.23751 12Z"
                                            />
                                            <path
                                                    d="M18.675 17.5125C18.3375 17.175 17.8125 17.175 17.475 17.5125C17.1375 17.85 17.1375 18.375 17.475 18.7125L18.675 19.9125C18.825 20.0625 19.05 20.175 19.275 20.175C19.5 20.175 19.725 20.1 19.875 19.9125C20.2125 19.575 20.2125 19.05 19.875 18.7125L18.675 17.5125Z"
                                            />
                                            <path
                                                    d="M5.32501 4.125C4.98751 3.7875 4.46251 3.7875 4.12501 4.125C3.78751 4.4625 3.78751 4.9875 4.12501 5.325L5.32501 6.525C5.47501 6.675 5.70001 6.7875 5.92501 6.7875C6.15001 6.7875 6.37501 6.7125 6.52501 6.525C6.86251 6.1875 6.86251 5.6625 6.52501 5.325L5.32501 4.125Z"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2172_3070">
                                                <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                            </label>
                            <div class="hidden sm:flex">
                                <a href="{{ route('filament.app.auth.login') }}" class="loginBtn px-[22px] py-2 text-base font-medium text-white hover:opacity-70">
                                    Sign In
                                </a>
                                <a href="{{ route('filament.app.auth.register') }}" class="signUpBtn rounded-md bg-white bg-opacity-20 px-6 py-2 text-base font-medium text-white duration-300 ease-in-out hover:bg-opacity-100 hover:text-dark">
                                    Sign Up
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== Navbar Section End -->

        <!-- ====== Hero Section Start -->
        <div id="home" class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]">
            <div class="container">
                <div class="-mx-4 flex flex-wrap items-center">
                    <div class="w-full px-4">
                        <div class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center" data-wow-delay=".2s">
                            <h1 class="mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]">
                                WAF Solution for scalable Web Applications
                            </h1>
                            <p class="mx-auto mb-9 max-w-[600px] text-base font-medium text-white sm:text-lg sm:leading-[1.44]">
                                Multitask-ed, compiled and easy to integrate WAF and AI Vulnerability Scanner all in one interface
                            </p>
                            <ul class="mb-10 flex flex-wrap items-center justify-center gap-5">
                                <li>
                                    <a
                                            href="#"
                                            class="inline-flex items-center justify-center rounded-md bg-white px-7 py-[14px] text-center text-base font-medium text-dark shadow-1 transition duration-300 ease-in-out hover:bg-gray-2 hover:text-body-color"
                                    >
                                        Download Now
                                    </a>
                                </li>
                                <li>
                                    <a
                                            href="https://github.com/Mrf0o/"
                                            target="_blank"
                                            class="flex items-center gap-4 rounded-md bg-white/[0.12] px-6 py-[14px] text-base font-medium text-white transition duration-300 ease-in-out hover:bg-white hover:text-dark"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"/>
                                        </svg>

                                        Read The Docs
                                    </a>
                                </li>
                            </ul>
                            <div>
                                <p class="mb-4 text-center text-base font-medium text-white">
                                    Built with latest technology
                                </p>
                                <div class="wow fadeInUp flex items-center justify-center gap-4 text-center" data-wow-delay=".3s">

                                    <a href="https://github.com/Mrf0o/" class="text-white/60 duration-300 ease-in-out hover:text-white" target="_blank">
                                        <svg class="fill-current" width="41" height="26" viewBox="0 0 41 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask id="mask0_2005_10783" style="mask-type: luminance;" maskUnits="userSpaceOnUse" x="0" y="0" width="41" height="26">
                                                <path d="M0.521393 0.949463H40.5214V25.0135H0.521393V0.949463Z"/>
                                            </mask>
                                            <g mask="url(#mask0_2005_10783)">
                                                <path
                                                        d="M20.5214 0.980713C15.1882 0.980713 11.8546 3.64743 10.5214 8.98071C12.5214 6.31399 14.8546 5.31399 17.5214 5.98071C19.043 6.36103 20.1302 7.46495 21.3342 8.68667C23.295 10.6771 25.5642 12.9807 30.5214 12.9807C35.8546 12.9807 39.1882 10.314 40.5214 4.98071C38.5214 7.64743 36.1882 8.64743 33.5214 7.98071C31.9998 7.60039 30.9126 6.49651 29.7086 5.27479C27.7478 3.28431 25.4786 0.980713 20.5214 0.980713ZM10.5214 12.9807C5.18819 12.9807 1.85459 15.6474 0.521393 20.9807C2.52139 18.314 4.85459 17.314 7.52139 17.9807C9.04299 18.361 10.1302 19.465 11.3342 20.6867C13.295 22.6771 15.5642 24.9807 20.5214 24.9807C25.8546 24.9807 29.1882 22.314 30.5214 16.9807C28.5214 19.6474 26.1882 20.6474 23.5214 19.9807C21.9998 19.6004 20.9126 18.4965 19.7086 17.2748C17.7478 15.2843 15.4786 12.9807 10.5214 12.9807Z"
                                                />
                                            </g>
                                        </svg>
                                    </a>

                                    <a href="https://github.com/Mrf0o/" class="text-white/60 duration-300 ease-in-out hover:text-white" target="_blank">
                                        <svg class="mt-0.5 fill-current" width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.078 12A5.928 5.928 0 0 1 12 6.078a5.946 5.946 0 0 1 5.129 2.959l-1.499.867 5.027-2.902a1.579 1.579 0 0 0-.543-.575l-7.345-4.24c-.424-.245-1.116-.245-1.539 0l-7.345 4.24c-.422.244-.768.844-.768 1.333v8.48c0 .245.086.517.226.758l3.529-2.038A5.883 5.883 0 0 1 6.078 12z"/>
                                            <path d="M14.564 10.519A2.971 2.971 0 0 0 12 9.039a2.964 2.964 0 0 0-2.564 4.441L12 12l2.564-1.481z"/>
                                            <path d="m20.657 7.002-5.046 2.913-1.046.605-.001-.001L12 12l-2.563 1.48A2.964 2.964 0 0 0 12 14.961a2.97 2.97 0 0 0 2.565-1.481l2.563 1.483a5.944 5.944 0 0 1-5.129 2.959 5.926 5.926 0 0 1-5.128-2.962l-3.529 2.038c.14.242.332.453.543.575l7.345 4.24c.423.245 1.115.245 1.539 0l7.345-4.24c.211-.122.403-.333.543-.575.14-.241.226-.513.226-.758V7.76c0-.245-.086-.517-.226-.758zm-2.735 5.327h-.658v.658h-.657v-.658h-.658v-.658h.658v-.658h.657v.658h.658v.658zm2.468 0h-.658v.658h-.658v-.658h-.657v-.658h.657v-.658h.658v.658h.658v.658z"/>
                                        </svg>
                                    </a>

                                    <a href="https://github.com/Mrf0o/" class="text-white/60 duration-300 ease-in-out hover:text-white" target="_blank">
                                        <svg width="36" height="36" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.10395 3.39722L6.57057 8.33045L3.92564 9.2121L2.59746 3.89939L4.10395 3.39722Z" fill="currentColor"/>
                                            <path d="M9.27727 11.5078L7.98064 8.91452L11.1378 7.86212L12.3027 9.69254L9.27727 11.5078Z" fill="currentColor"/>
                                            <path d="M12.1839 6.45935L11.5623 6.66653L11.0444 5.85257L11.6207 5.70848L12.1839 6.45935Z" fill="currentColor"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 2.5C0 1.11929 1.11929 0 2.5 0H12.5C13.8807 0 15 1.11929 15 2.5V12.5C15 13.8807 13.8807 15 12.5 15H2.5C1.11929 15 0 13.8807 0 12.5V2.5ZM4.80445 2.56215C4.69317 2.33959 4.43518 2.23272 4.19912 2.31141L1.84198 3.09712C1.59412 3.17974 1.45165 3.43927 1.51502 3.69273L3.08645 9.97845C3.12023 10.1136 3.20883 10.2285 3.33091 10.2955C3.453 10.3625 3.59751 10.3756 3.72963 10.3315L7.02232 9.23396L8.62431 12.4379C8.68659 12.5625 8.79801 12.6554 8.93173 12.6944C9.06544 12.7333 9.20934 12.7147 9.32877 12.6431L13.2573 10.2859C13.373 10.2165 13.4557 10.1033 13.4867 9.97206C13.5177 9.84078 13.4943 9.70254 13.4219 9.58874L12.1157 7.53616L13.1582 7.18866C13.3107 7.13784 13.4294 7.01682 13.4773 6.86341C13.5253 6.71 13.4965 6.5429 13.4001 6.41432L12.2215 4.84289C12.1008 4.68196 11.8954 4.60903 11.7003 4.65782L10.1288 5.05068C9.9729 5.08966 9.84522 5.20122 9.78567 5.3505C9.72613 5.49979 9.74197 5.6686 9.82826 5.80419L10.5845 6.99249L7.52888 8.01101L4.80445 2.56215Z" fill="currentColor"/>
                                        </svg>
                                    </a>

                                    <a href="https://github.com/Mrf0o/" class="text-white/60 duration-300 ease-in-out hover:text-white" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="none" height="40" viewBox="0 0 128 128">
                                            <path fill="currentColor" fill-rule="evenodd" d="M98.444 35.562 126 62.997 98.444 90.432 70.889 62.997z" clip-rule="evenodd"/>
                                            <path fill="currentColor" fill-rule="evenodd" d="m29.556 35.562 57.126 56.876H31.571L2 62.997z" clip-rule="evenodd"/>
                                        </svg>

                                    </a>
                                    <a href="https://github.com/Mrf0o/" class="text-white/60 duration-300 ease-in-out hover:text-white" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" fill="none" height="45" viewBox="0 0 128 128">
                                            <path d="M24.5 50.5c-1.5 0-2.5 1.2-2.5 2.7v14.1l-15.9-16c-.8-.8-2.2-1-3.2-.6S1 52.1 1 53.2v20.7c0 1.5 1.5 2.7 3 2.7s3-1.2 3-2.7V59.8l16.1 16c.5.5 1.2.8 1.9.8.3 0 .4-.1.7-.2 1-.4 1.3-1.4 1.3-2.5V53.3c0-1.5-1-2.8-2.5-2.8zm19.7 11.8c-1.4 0-2.7 1.4-2.7 2.8s1.3 2.8 2.7 2.8l6.6.4-1.5 3.7h-8.5l-4.2-7.9 4.3-8.1H50l2.1 4h5.5L54 52.1l-.8-1.1H37.6l-.7 1.2L31 62.5l-.7 1.3.7 1.3 5.8 10.3.8 1.6h15.1l.7-1.7 4.3-9 1.9-4.3h-4.4l-11 .3zM65 50.5c-1.4 0-3 1.3-3 2.7V60h6v-6.7c0-1.5-1.6-2.8-3-2.8zm30.4.3c-1-.4-2.4-.2-3.1.6L76 67.4V53.3c0-1.5-1-2.7-2.5-2.7S71 51.8 71 53.3V74c0 1.1.7 2.1 1.7 2.5.3.1.7.2 1 .2.7 0 1.6-.3 2.1-.8l16.2-16V74c0 1.5 1 2.7 2.5 2.7S97 75.5 97 74V53.3c0-1.1-.6-2.1-1.6-2.5zm21.8 12.8l8.4-8.4c1.1-1.1 1.1-2.8 0-3.8-1.1-1.1-2.8-1.1-3.8 0l-8.4 8.4-8.4-8.4c-1.1-1.1-2.8-1.1-3.8 0-1.1 1.1-1.1 2.8 0 3.8l8.4 8.4-8.4 8.4c-1.1 1.1-1.1 2.8 0 3.8.5.5 1.2.8 1.9.8s1.4-.3 1.9-.8l8.4-8.4 8.4 8.4c.5.5 1.2.8 1.9.8s1.4-.3 1.9-.8c1.1-1.1 1.1-2.8 0-3.8l-8.4-8.4zM62 73.9c0 1.4 1.5 2.7 3 2.7 1.4 0 3-1.3 3-2.7V62h-6v11.9z" fill="currentColor"/>
                                        </svg>

                                    </a>
                                    <a href="https://github.com/Mrf0o/" class="text-white/60 duration-300 ease-in-out hover:text-white" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="none" height="40" viewBox="0 0 128 128">
                                            <path fill="currentColor" d="M86.522.606c-2.007 1.185-5.348 4.54-9.318 9.407l3.652 6.903c2.57-3.666 5.177-6.977 7.807-9.8l.304-.325-.304.326c-.852.933-3.437 3.955-7.333 9.94 3.755-.185 9.518-.956 14.222-1.756 1.407-7.844-1.37-11.429-1.37-11.429S90.654-1.83 86.521.606Z"/>
                                            <path fill="currentColor" d="M74.234 58.596c-.467.081-.94.17-1.437.252 0 0-.007 0-.007.007l.74-.111c.23-.052.467-.096.704-.148Z"/>
                                            <path fill="currentColor" d="M74.234 58.596c-.467.081-.94.17-1.437.252 0 0-.007 0-.007.007l.74-.111c.23-.052.467-.096.704-.148Z" opacity=".35"/>
                                            <path fill="currentColor" d="M75.456 52.559s0 .007 0 0c-.007 0-.007 0-.007.007.074-.007.155-.022.23-.037.31-.044.614-.096.91-.17-.37.067-.74.133-1.133.2Z"/>
                                            <path fill="currentColor" d="M75.456 52.559s0 .007 0 0c-.007 0-.007 0-.007.007.074-.007.155-.022.23-.037.31-.044.614-.096.91-.17-.37.067-.74.133-1.133.2Z" opacity=".35"/>
                                            <path fill="currentColor" d="M70.071 34.76a219.903 219.903 0 0 1 3.37-6.081 171.901 171.901 0 0 1 3.585-5.97c.067-.112.148-.23.215-.341a144.48 144.48 0 0 1 3.607-5.444l-3.651-6.904a71.1 71.1 0 0 0-.83 1.03 156.993 156.993 0 0 0-3.274 4.23 201.146 201.146 0 0 0-3.889 5.392 233.315 233.315 0 0 0-3.703 5.48 214.99 214.99 0 0 0-3.163 4.978c-.037.06-.074.126-.11.193l4.762 9.407a213.91 213.91 0 0 1 3.081-5.97Z"/>
                                            <path fill="currentColor" d="M48.383 87.735a421.232 421.232 0 0 0-1.896 5.296c-.008.022-.015.052-.03.074-.089.252-.185.511-.266.763-.43 1.215-.8 2.311-1.652 4.793 1.4.637 2.526 2.325 3.592 4.236a7.624 7.624 0 0 0-2.489-5.273c6.911.31 12.867-1.437 15.948-6.489.274-.452.526-.919.755-1.43-1.4 1.778-3.14 2.526-6.407 2.348-.007 0-.014.008-.022.008.008 0 .015-.008.022-.008 4.815-2.155 7.222-4.222 9.363-7.644.504-.814 1-1.696 1.504-2.681-4.208 4.318-9.074 5.548-14.207 4.615l-3.852.422c-.126.326-.237.644-.363.97Z"/>
                                            <path fill="currentColor" d="M50.183 79.12c.83-2.147 1.689-4.325 2.563-6.517a441.794 441.794 0 0 1 2.593-6.341 748.43 748.43 0 0 1 2.71-6.392c.934-2.17 1.897-4.333 2.882-6.489a352.9 352.9 0 0 1 2.948-6.34c.355-.756.726-1.511 1.089-2.26.63-1.296 1.266-2.585 1.91-3.859.038-.066.067-.14.104-.207l-4.762-9.407a6.52 6.52 0 0 1-.237.378 219.844 219.844 0 0 0-3.296 5.555 208.386 208.386 0 0 0-3.223 5.837 248.13 248.13 0 0 0-2.6 5.044c-.17.34-.333.689-.503 1.03a143.907 143.907 0 0 0-2.822 6.185 115.935 115.935 0 0 0-2.54 6.429c-.49 1.34-.927 2.63-1.334 3.874-.333 1.059-.645 2.126-.956 3.185a99.189 99.189 0 0 0-1.83 7.451l4.786 9.444c.63-1.688 1.281-3.407 1.948-5.14.2-.496.378-.985.57-1.46Z"/>
                                            <path fill="currentColor" d="M42.828 76.595c-.6 3.022-1.03 6.03-1.245 9.022l-.022.31c-1.496-2.392-5.488-4.725-5.481-4.703 2.867 4.148 5.037 8.267 5.355 12.31-1.533.312-3.63-.14-6.051-1.029 2.526 2.326 4.422 2.963 5.17 3.14-2.326.149-4.74 1.742-7.178 3.579 3.563-1.452 6.445-2.03 8.504-1.563-3.274 9.258-6.548 19.48-9.83 30.339 1.008-.296 1.608-.978 1.941-1.889.585-1.963 4.46-14.866 10.54-31.806.178-.481.349-.97.526-1.452.045-.14.097-.274.149-.4.637-1.777 1.31-3.592 1.992-5.444.156-.422.311-.844.474-1.266 0-.008.008-.015.008-.023l-4.793-9.444a6.652 6.652 0 0 1-.06.319Z"/>
                                            <path fill="currentColor" d="M67.723 41.5c-.14.282-.274.563-.415.845-.414.851-.83 1.718-1.259 2.607-.46.963-.918 1.94-1.385 2.948-.237.504-.474 1.015-.711 1.533a414.713 414.713 0 0 0-2.163 4.8 388.508 388.508 0 0 0-2.748 6.326c-.881 2.088-1.793 4.244-2.696 6.48-.867 2.12-1.74 4.312-2.63 6.563a411.904 411.904 0 0 0-2.392 6.208c-.037.096-.074.207-.111.303-.8 2.111-1.608 4.282-2.415 6.504-.015.051-.037.096-.052.155l3.852-.422c-.074-.015-.156-.022-.23-.037 4.6-.57 10.726-4.015 14.674-8.259 1.822-1.955 3.474-4.266 5-6.97 1.133-2.007 2.207-4.244 3.229-6.71a98.187 98.187 0 0 0 2.563-7.023c-1.06.556-2.267.97-3.6 1.252-.237.052-.474.096-.718.14-.245.045-.49.082-.741.112 0 0 .007 0 .007-.007 4.296-1.652 7-4.837 8.963-8.74-1.126.77-2.963 1.777-5.163 2.258a16.586 16.586 0 0 1-1.14.208h.014c1.496-.622 2.748-1.326 3.837-2.148.237-.178.467-.356.674-.548.333-.29.645-.593.956-.904.192-.207.377-.415.563-.63.43-.51.83-1.059 1.2-1.651.11-.186.23-.363.333-.556.148-.274.281-.548.415-.807a43.48 43.48 0 0 0 1.459-3.222c.192-.474.355-.904.503-1.319.06-.163.111-.318.163-.474.156-.452.274-.852.37-1.207.149-.534.238-.956.282-1.26-.148.112-.31.23-.504.341-1.296.778-3.518 1.474-5.31 1.808l3.533-.386-3.533.386c-.023.007-.052.007-.082.014-.185.03-.355.06-.54.082l.088-.045-12.095 1.326a.37.37 0 0 1-.045.126Z"/>
                                            <path fill="currentColor" d="M81.337 17.057a182.438 182.438 0 0 0-3.518 5.651 247.572 247.572 0 0 0-3.674 6.4 280.913 280.913 0 0 0-3.289 6.155 332.218 332.218 0 0 0-3.074 6.111l12.096-1.326c3.526-1.622 5.096-3.081 6.622-5.207.4-.585.815-1.192 1.215-1.83a74.934 74.934 0 0 0 3.548-6.2c1.051-2.05 1.977-4.08 2.688-5.917a30.467 30.467 0 0 0 1.067-3.2c.222-.837.393-1.637.526-2.4-4.689.807-10.459 1.578-14.207 1.763Z"/>
                                            <path fill="currentColor" d="M73.516 58.729c-.245.044-.49.081-.741.111.252-.022.503-.067.74-.111Z"/>
                                            <path fill="currentColor" d="M73.516 58.729c-.245.044-.49.081-.741.111.252-.022.503-.067.74-.111Z" opacity=".35"/>
                                            <path fill="currentColor" d="M73.516 58.729c-.245.044-.49.081-.741.111.252-.022.503-.067.74-.111Z"/>
                                            <path fill="currentColor" d="M75.449 52.566c.074-.007.155-.022.23-.037-.075.008-.149.03-.23.037Z"/>
                                            <path fill="currentColor" d="M75.449 52.566c.074-.007.155-.022.23-.037-.075.008-.149.03-.23.037Z" opacity=".35"/>
                                            <path fill="currentColor" d="M75.449 52.566c.074-.007.155-.022.23-.037-.075.008-.149.03-.23.037Z"/>
                                            <path fill="currentColor" d="M75.449 52.566c.007 0 .007-.007 0 0 .007-.007.007 0 0 0Z"/>
                                            <path fill="currentColor" d="M75.449 52.566c.007 0 .007-.007 0 0 .007-.007.007 0 0 0Z" opacity=".35"/>
                                            <path fill="currentColor" d="M75.449 52.566c.007 0 .007-.007 0 0 .007-.007.007 0 0 0Z"/>
                                        </svg>


                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-4">
                        <div class="wow fadeInUp relative z-10 mx-auto max-w-[845px]" data-wow-delay=".25s">
                            <div class="mt-16">
                                <img src="images/dashboard.png" alt="hero" class="mx-auto max-w-full rounded-t-xl rounded-tr-xl"/>
                            </div>
                            <div class="absolute -left-9 bottom-0 z-[-1]">
                                <svg width="134" height="106" viewBox="0 0 134 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)" fill="white"/>
                                    <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)" fill="white"/>
                                    <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)" fill="white"/>
                                    <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)" fill="white"/>
                                    <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)" fill="white"/>
                                    <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)" fill="white"/>
                                    <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)" fill="white"/>
                                    <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)" fill="white"/>
                                    <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)" fill="white"/>
                                    <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)" fill="white"/>
                                    <circle cx="1.66667" cy="89.3333" r="1.66667" transform="rotate(-90 1.66667 89.3333)" fill="white"/>
                                    <circle cx="16.3333" cy="89.3333" r="1.66667" transform="rotate(-90 16.3333 89.3333)" fill="white"/>
                                    <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)" fill="white"/>
                                    <circle cx="45.6667" cy="89.3333" r="1.66667" transform="rotate(-90 45.6667 89.3333)" fill="white"/>
                                    <circle cx="60.3333" cy="89.3338" r="1.66667" transform="rotate(-90 60.3333 89.3338)" fill="white"/>
                                    <circle cx="88.6667" cy="89.3338" r="1.66667" transform="rotate(-90 88.6667 89.3338)" fill="white"/>
                                    <circle cx="117.667" cy="89.3338" r="1.66667" transform="rotate(-90 117.667 89.3338)" fill="white"/>
                                    <circle cx="74.6667" cy="89.3338" r="1.66667" transform="rotate(-90 74.6667 89.3338)" fill="white"/>
                                    <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)" fill="white"/>
                                    <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)" fill="white"/>
                                    <circle cx="1.66667" cy="74.6673" r="1.66667" transform="rotate(-90 1.66667 74.6673)" fill="white"/>
                                    <circle cx="1.66667" cy="31.0003" r="1.66667" transform="rotate(-90 1.66667 31.0003)" fill="white"/>
                                    <circle cx="16.3333" cy="74.6668" r="1.66667" transform="rotate(-90 16.3333 74.6668)" fill="white"/>
                                    <circle cx="16.3333" cy="31.0003" r="1.66667" transform="rotate(-90 16.3333 31.0003)" fill="white"/>
                                    <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)" fill="white"/>
                                    <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)" fill="white"/>
                                    <circle cx="45.6667" cy="74.6668" r="1.66667" transform="rotate(-90 45.6667 74.6668)" fill="white"/>
                                    <circle cx="45.6667" cy="31.0003" r="1.66667" transform="rotate(-90 45.6667 31.0003)" fill="white"/>
                                    <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)" fill="white"/>
                                    <circle cx="60.3333" cy="31.0001" r="1.66667" transform="rotate(-90 60.3333 31.0001)" fill="white"/>
                                    <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)" fill="white"/>
                                    <circle cx="88.6667" cy="31.0001" r="1.66667" transform="rotate(-90 88.6667 31.0001)" fill="white"/>
                                    <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)" fill="white"/>
                                    <circle cx="117.667" cy="31.0001" r="1.66667" transform="rotate(-90 117.667 31.0001)" fill="white"/>
                                    <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)" fill="white"/>
                                    <circle cx="74.6667" cy="31.0001" r="1.66667" transform="rotate(-90 74.6667 31.0001)" fill="white"/>
                                    <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)" fill="white"/>
                                    <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)" fill="white"/>
                                    <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)" fill="white"/>
                                    <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)" fill="white"/>
                                    <circle cx="1.66667" cy="60.0003" r="1.66667" transform="rotate(-90 1.66667 60.0003)" fill="white"/>
                                    <circle cx="1.66667" cy="16.3336" r="1.66667" transform="rotate(-90 1.66667 16.3336)" fill="white"/>
                                    <circle cx="16.3333" cy="60.0003" r="1.66667" transform="rotate(-90 16.3333 60.0003)" fill="white"/>
                                    <circle cx="16.3333" cy="16.3336" r="1.66667" transform="rotate(-90 16.3333 16.3336)" fill="white"/>
                                    <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)" fill="white"/>
                                    <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)" fill="white"/>
                                    <circle cx="45.6667" cy="60.0003" r="1.66667" transform="rotate(-90 45.6667 60.0003)" fill="white"/>
                                    <circle cx="45.6667" cy="16.3336" r="1.66667" transform="rotate(-90 45.6667 16.3336)" fill="white"/>
                                    <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)" fill="white"/>
                                    <circle cx="60.3333" cy="16.3336" r="1.66667" transform="rotate(-90 60.3333 16.3336)" fill="white"/>
                                    <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)" fill="white"/>
                                    <circle cx="88.6667" cy="16.3336" r="1.66667" transform="rotate(-90 88.6667 16.3336)" fill="white"/>
                                    <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)" fill="white"/>
                                    <circle cx="117.667" cy="16.3336" r="1.66667" transform="rotate(-90 117.667 16.3336)" fill="white"/>
                                    <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)" fill="white"/>
                                    <circle cx="74.6667" cy="16.3336" r="1.66667" transform="rotate(-90 74.6667 16.3336)" fill="white"/>
                                    <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)" fill="white"/>
                                    <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)" fill="white"/>
                                    <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)" fill="white"/>
                                    <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)" fill="white"/>
                                    <circle cx="1.66667" cy="45.3336" r="1.66667" transform="rotate(-90 1.66667 45.3336)" fill="white"/>
                                    <circle cx="1.66667" cy="1.66683" r="1.66667" transform="rotate(-90 1.66667 1.66683)" fill="white"/>
                                    <circle cx="16.3333" cy="45.3336" r="1.66667" transform="rotate(-90 16.3333 45.3336)" fill="white"/>
                                    <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(-90 16.3333 1.66683)" fill="white"/>
                                    <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)" fill="white"/>
                                    <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)" fill="white"/>
                                    <circle cx="45.6667" cy="45.3336" r="1.66667" transform="rotate(-90 45.6667 45.3336)" fill="white"/>
                                    <circle cx="45.6667" cy="1.66683" r="1.66667" transform="rotate(-90 45.6667 1.66683)" fill="white"/>
                                    <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)" fill="white"/>
                                    <circle cx="60.3333" cy="1.66707" r="1.66667" transform="rotate(-90 60.3333 1.66707)" fill="white"/>
                                    <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)" fill="white"/>
                                    <circle cx="88.6667" cy="1.66707" r="1.66667" transform="rotate(-90 88.6667 1.66707)" fill="white"/>
                                    <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)" fill="white"/>
                                    <circle cx="117.667" cy="1.66707" r="1.66667" transform="rotate(-90 117.667 1.66707)" fill="white"/>
                                    <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)" fill="white"/>
                                    <circle cx="74.6667" cy="1.66707" r="1.66667" transform="rotate(-90 74.6667 1.66707)" fill="white"/>
                                    <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)" fill="white"/>
                                    <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)" fill="white"/>
                                    <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)" fill="white"/>
                                    <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)" fill="white"/>
                                </svg>
                            </div>
                            <div class="absolute -right-6 -top-6 z-[-1]">
                                <svg width="134" height="106" viewBox="0 0 134 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)" fill="white"/>
                                    <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)" fill="white"/>
                                    <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)" fill="white"/>
                                    <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)" fill="white"/>
                                    <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)" fill="white"/>
                                    <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)" fill="white"/>
                                    <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)" fill="white"/>
                                    <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)" fill="white"/>
                                    <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)" fill="white"/>
                                    <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)" fill="white"/>
                                    <circle cx="1.66667" cy="89.3333" r="1.66667" transform="rotate(-90 1.66667 89.3333)" fill="white"/>
                                    <circle cx="16.3333" cy="89.3333" r="1.66667" transform="rotate(-90 16.3333 89.3333)" fill="white"/>
                                    <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)" fill="white"/>
                                    <circle cx="45.6667" cy="89.3333" r="1.66667" transform="rotate(-90 45.6667 89.3333)" fill="white"/>
                                    <circle cx="60.3333" cy="89.3338" r="1.66667" transform="rotate(-90 60.3333 89.3338)" fill="white"/>
                                    <circle cx="88.6667" cy="89.3338" r="1.66667" transform="rotate(-90 88.6667 89.3338)" fill="white"/>
                                    <circle cx="117.667" cy="89.3338" r="1.66667" transform="rotate(-90 117.667 89.3338)" fill="white"/>
                                    <circle cx="74.6667" cy="89.3338" r="1.66667" transform="rotate(-90 74.6667 89.3338)" fill="white"/>
                                    <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)" fill="white"/>
                                    <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)" fill="white"/>
                                    <circle cx="1.66667" cy="74.6673" r="1.66667" transform="rotate(-90 1.66667 74.6673)" fill="white"/>
                                    <circle cx="1.66667" cy="31.0003" r="1.66667" transform="rotate(-90 1.66667 31.0003)" fill="white"/>
                                    <circle cx="16.3333" cy="74.6668" r="1.66667" transform="rotate(-90 16.3333 74.6668)" fill="white"/>
                                    <circle cx="16.3333" cy="31.0003" r="1.66667" transform="rotate(-90 16.3333 31.0003)" fill="white"/>
                                    <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)" fill="white"/>
                                    <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)" fill="white"/>
                                    <circle cx="45.6667" cy="74.6668" r="1.66667" transform="rotate(-90 45.6667 74.6668)" fill="white"/>
                                    <circle cx="45.6667" cy="31.0003" r="1.66667" transform="rotate(-90 45.6667 31.0003)" fill="white"/>
                                    <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)" fill="white"/>
                                    <circle cx="60.3333" cy="31.0001" r="1.66667" transform="rotate(-90 60.3333 31.0001)" fill="white"/>
                                    <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)" fill="white"/>
                                    <circle cx="88.6667" cy="31.0001" r="1.66667" transform="rotate(-90 88.6667 31.0001)" fill="white"/>
                                    <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)" fill="white"/>
                                    <circle cx="117.667" cy="31.0001" r="1.66667" transform="rotate(-90 117.667 31.0001)" fill="white"/>
                                    <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)" fill="white"/>
                                    <circle cx="74.6667" cy="31.0001" r="1.66667" transform="rotate(-90 74.6667 31.0001)" fill="white"/>
                                    <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)" fill="white"/>
                                    <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)" fill="white"/>
                                    <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)" fill="white"/>
                                    <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)" fill="white"/>
                                    <circle cx="1.66667" cy="60.0003" r="1.66667" transform="rotate(-90 1.66667 60.0003)" fill="white"/>
                                    <circle cx="1.66667" cy="16.3336" r="1.66667" transform="rotate(-90 1.66667 16.3336)" fill="white"/>
                                    <circle cx="16.3333" cy="60.0003" r="1.66667" transform="rotate(-90 16.3333 60.0003)" fill="white"/>
                                    <circle cx="16.3333" cy="16.3336" r="1.66667" transform="rotate(-90 16.3333 16.3336)" fill="white"/>
                                    <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)" fill="white"/>
                                    <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)" fill="white"/>
                                    <circle cx="45.6667" cy="60.0003" r="1.66667" transform="rotate(-90 45.6667 60.0003)" fill="white"/>
                                    <circle cx="45.6667" cy="16.3336" r="1.66667" transform="rotate(-90 45.6667 16.3336)" fill="white"/>
                                    <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)" fill="white"/>
                                    <circle cx="60.3333" cy="16.3336" r="1.66667" transform="rotate(-90 60.3333 16.3336)" fill="white"/>
                                    <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)" fill="white"/>
                                    <circle cx="88.6667" cy="16.3336" r="1.66667" transform="rotate(-90 88.6667 16.3336)" fill="white"/>
                                    <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)" fill="white"/>
                                    <circle cx="117.667" cy="16.3336" r="1.66667" transform="rotate(-90 117.667 16.3336)" fill="white"/>
                                    <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)" fill="white"/>
                                    <circle cx="74.6667" cy="16.3336" r="1.66667" transform="rotate(-90 74.6667 16.3336)" fill="white"/>
                                    <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)" fill="white"/>
                                    <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)" fill="white"/>
                                    <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)" fill="white"/>
                                    <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)" fill="white"/>
                                    <circle cx="1.66667" cy="45.3336" r="1.66667" transform="rotate(-90 1.66667 45.3336)" fill="white"/>
                                    <circle cx="1.66667" cy="1.66683" r="1.66667" transform="rotate(-90 1.66667 1.66683)" fill="white"/>
                                    <circle cx="16.3333" cy="45.3336" r="1.66667" transform="rotate(-90 16.3333 45.3336)" fill="white"/>
                                    <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(-90 16.3333 1.66683)" fill="white"/>
                                    <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)" fill="white"/>
                                    <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)" fill="white"/>
                                    <circle cx="45.6667" cy="45.3336" r="1.66667" transform="rotate(-90 45.6667 45.3336)" fill="white"/>
                                    <circle cx="45.6667" cy="1.66683" r="1.66667" transform="rotate(-90 45.6667 1.66683)" fill="white"/>
                                    <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)" fill="white"/>
                                    <circle cx="60.3333" cy="1.66707" r="1.66667" transform="rotate(-90 60.3333 1.66707)" fill="white"/>
                                    <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)" fill="white"/>
                                    <circle cx="88.6667" cy="1.66707" r="1.66667" transform="rotate(-90 88.6667 1.66707)" fill="white"/>
                                    <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)" fill="white"/>
                                    <circle cx="117.667" cy="1.66707" r="1.66667" transform="rotate(-90 117.667 1.66707)" fill="white"/>
                                    <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)" fill="white"/>
                                    <circle cx="74.6667" cy="1.66707" r="1.66667" transform="rotate(-90 74.6667 1.66707)" fill="white"/>
                                    <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)" fill="white"/>
                                    <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)" fill="white"/>
                                    <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)" fill="white"/>
                                    <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)" fill="white"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== Hero Section End -->

        <!-- ====== Features Section Start -->
        <section class="pb-8 pt-20 dark:bg-dark lg:pb-[70px] lg:pt-[120px]">
            <div class="container">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-12 max-w-[485px] text-center lg:mb-[70px]">
                            <span class="mb-2 block text-lg font-semibold text-primary">
                                Features
                            </span>
                            <h2 class="mb-3 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
                                Main Features Of Arcane
                            </h2>
                            <p class="text-base text-body-color dark:text-dark-6">
                                Arcane integrates with your webserver and your backend server to deliver maximum security and threat intelligence
                            </p>
                        </div>
                    </div>
                </div>
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                        <div class="wow fadeInUp group mb-12" data-wow-delay=".1s">
                            <div class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                                <span class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                                <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M30.5801 8.30514H27.9926C28.6113 7.85514 29.1176 7.34889 29.3426 6.73014C29.6801 5.88639 29.6801 4.48014 27.9363 2.84889C26.0801 1.04889 24.3926 1.04889 23.3238 1.33014C20.9051 1.94889 19.2738 4.76139 18.3738 6.78639C17.4738 4.76139 15.8426 2.00514 13.4238 1.33014C12.3551 1.04889 10.6676 1.10514 8.81133 2.84889C7.06758 4.53639 7.12383 5.88639 7.40508 6.73014C7.63008 7.34889 8.13633 7.85514 8.75508 8.30514H5.71758C4.08633 8.30514 2.73633 9.65514 2.73633 11.2864V14.9989C2.73633 16.5739 4.03008 17.8676 5.60508 17.9239V31.6489C5.60508 33.5614 7.18008 35.1926 9.14883 35.1926H27.5426C29.4551 35.1926 31.0863 33.6176 31.0863 31.6489V17.8676C32.4926 17.6426 33.5613 16.4051 33.5613 14.9426V11.2301C33.5613 9.59889 32.2113 8.30514 30.5801 8.30514ZM23.9426 3.69264C23.9988 3.69264 24.1676 3.63639 24.3363 3.63639C24.7301 3.63639 25.3488 3.80514 26.1926 4.59264C26.8676 5.21139 27.0363 5.66139 26.9801 5.77389C26.6988 6.56139 23.8863 7.40514 20.6801 7.74264C21.4676 5.99889 22.6488 4.03014 23.9426 3.69264ZM10.4988 4.64889C11.3426 3.86139 11.9613 3.69264 12.3551 3.69264C12.5238 3.69264 12.6363 3.74889 12.7488 3.74889C14.0426 4.08639 15.2801 5.99889 16.0676 7.79889C12.8613 7.46139 10.0488 6.61764 9.76758 5.83014C9.71133 5.66139 9.88008 5.26764 10.4988 4.64889ZM5.26758 14.9426V11.2301C5.26758 11.0051 5.43633 10.7801 5.71758 10.7801H30.5801C30.8051 10.7801 31.0301 10.9489 31.0301 11.2301V14.9426C31.0301 15.1676 30.8613 15.3926 30.5801 15.3926H5.71758C5.49258 15.3926 5.26758 15.2239 5.26758 14.9426ZM27.5426 32.6614H9.14883C8.58633 32.6614 8.13633 32.2114 8.13633 31.6489V17.9239H28.4988V31.6489C28.5551 32.2114 28.1051 32.6614 27.5426 32.6614Z"
                                            fill="white"
                                    />
                                </svg>
                            </div>
                            <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                                Made to be Fast
                            </h4>
                            <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                                Arcane made to be fast at processing requests using the c++ programming language
                            </p>
                            <a href="javascript:void(0)" class="text-base font-medium text-dark hover:text-primary dark:text-white dark:hover:text-primary">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                        <div class="wow fadeInUp group mb-12" data-wow-delay=".15s">
                            <div class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                                <span class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M30.5998 1.01245H5.39981C2.98105 1.01245 0.956055 2.9812 0.956055 5.4562V30.6562C0.956055 33.075 2.9248 35.0437 5.39981 35.0437H30.5998C33.0186 35.0437 34.9873 33.075 34.9873 30.6562V5.39995C34.9873 2.9812 33.0186 1.01245 30.5998 1.01245ZM5.39981 3.48745H30.5998C31.6123 3.48745 32.4561 4.3312 32.4561 5.39995V11.1937H3.4873V5.39995C3.4873 4.38745 4.38731 3.48745 5.39981 3.48745ZM3.4873 30.6V13.725H23.0623V32.5125H5.39981C4.38731 32.5125 3.4873 31.6125 3.4873 30.6ZM30.5998 32.5125H25.5373V13.725H32.4561V30.6C32.5123 31.6125 31.6123 32.5125 30.5998 32.5125Z"
                                            fill="white"
                                    />
                                </svg>
                            </div>
                            <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                                AI Document Root Scanner
                            </h4>
                            <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                                Leveraging the GPT-4 AI, Arcane scans your entire document root with a single click
                            </p>
                            <a href="javascript:void(0)" class="text-base font-medium text-dark hover:text-primary dark:text-white dark:hover:text-primary">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                        <div class="wow fadeInUp group mb-12" data-wow-delay=".2s">
                            <div class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                                <span class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                                <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M33.5613 21.4677L31.3675 20.1177C30.805 19.7239 30.0175 19.9489 29.6238 20.5114C29.23 21.1302 29.455 21.8614 30.0175 22.2552L31.48 23.2114L18.1488 31.5927L4.76127 23.2114L6.22377 22.2552C6.84252 21.8614 7.01127 21.0739 6.61752 20.5114C6.22377 19.8927 5.43627 19.7239 4.87377 20.1177L2.68002 21.4677C2.11752 21.8614 1.72377 22.4802 1.72377 23.1552C1.72377 23.8302 2.06127 24.5052 2.68002 24.8427L17.08 33.8989C17.4175 34.1239 17.755 34.1802 18.1488 34.1802C18.5425 34.1802 18.88 34.0677 19.2175 33.8989L33.5613 24.8989C34.1238 24.5052 34.5175 23.8864 34.5175 23.2114C34.5175 22.5364 34.18 21.8614 33.5613 21.4677Z"
                                            fill="white"
                                    />
                                    <path
                                            d="M20.1175 20.4552L18.1488 21.6364L16.18 20.3989C15.5613 20.0052 14.83 20.2302 14.4363 20.7927C14.0425 21.4114 14.2675 22.1427 14.83 22.5364L17.4738 24.1677C17.6988 24.2802 17.9238 24.3364 18.1488 24.3364C18.3738 24.3364 18.5988 24.2802 18.8238 24.1677L21.4675 22.5364C22.0863 22.1427 22.255 21.3552 21.8613 20.7927C21.4675 20.2302 20.68 20.0614 20.1175 20.4552Z"
                                            fill="white"
                                    />
                                    <path
                                            d="M7.74252 18.0927L11.455 20.4552C11.68 20.5677 11.905 20.6239 12.13 20.6239C12.5238 20.6239 12.9738 20.3989 13.1988 20.0052C13.5925 19.3864 13.3675 18.6552 12.805 18.2614L9.09252 15.8989C8.47377 15.5052 7.74252 15.7302 7.34877 16.2927C6.95502 16.9677 7.12377 17.7552 7.74252 18.0927Z"
                                            fill="white"
                                    />
                                    <path
                                            d="M5.04252 16.1802C5.43627 16.1802 5.88627 15.9552 6.11127 15.5614C6.50502 14.9427 6.28002 14.2114 5.71752 13.8177L4.81752 13.2552L5.71752 12.6927C6.33627 12.2989 6.50502 11.5114 6.11127 10.9489C5.71752 10.3302 4.93002 10.1614 4.36752 10.5552L1.72377 12.1864C1.33002 12.4114 1.10502 12.8052 1.10502 13.2552C1.10502 13.7052 1.33002 14.0989 1.72377 14.3239L4.36752 15.9552C4.53627 16.1239 4.76127 16.1802 5.04252 16.1802Z"
                                            fill="white"
                                    />
                                    <path
                                            d="M8.41752 10.7239C8.64252 10.7239 8.86752 10.6677 9.09252 10.5552L12.805 8.1927C13.4238 7.79895 13.5925 7.01145 13.1988 6.44895C12.805 5.8302 12.0175 5.66145 11.455 6.0552L7.74252 8.4177C7.12377 8.81145 6.95502 9.59895 7.34877 10.1614C7.57377 10.4989 7.96752 10.7239 8.41752 10.7239Z"
                                            fill="white"
                                    />
                                    <path
                                            d="M16.18 6.05522L18.1488 4.81772L20.1175 6.05522C20.3425 6.16772 20.5675 6.22397 20.7925 6.22397C21.1863 6.22397 21.6363 5.99897 21.8613 5.60522C22.255 4.98647 22.03 4.25522 21.4675 3.86147L18.8238 2.23022C18.43 1.94897 17.8675 1.94897 17.4738 2.23022L14.83 3.86147C14.2113 4.25522 14.0425 5.04272 14.4363 5.60522C14.83 6.16772 15.6175 6.44897 16.18 6.05522Z"
                                            fill="white"
                                    />
                                    <path
                                            d="M23.4925 8.19267L27.205 10.5552C27.43 10.6677 27.655 10.7239 27.88 10.7239C28.2738 10.7239 28.7238 10.4989 28.9488 10.1052C29.3425 9.48642 29.1175 8.75517 28.555 8.36142L24.8425 5.99892C24.28 5.60517 23.4925 5.83017 23.0988 6.39267C22.705 7.01142 22.8738 7.79892 23.4925 8.19267Z"
                                            fill="white"
                                    />
                                    <path
                                            d="M34.5738 12.1864L31.93 10.5552C31.3675 10.1614 30.58 10.3864 30.1863 10.9489C29.7925 11.5677 30.0175 12.2989 30.58 12.6927L31.48 13.2552L30.58 13.8177C29.9613 14.2114 29.7925 14.9989 30.1863 15.5614C30.4113 15.9552 30.8613 16.1802 31.255 16.1802C31.48 16.1802 31.705 16.1239 31.93 16.0114L34.5738 14.3802C34.9675 14.1552 35.1925 13.7614 35.1925 13.3114C35.1925 12.8614 34.9675 12.4114 34.5738 12.1864Z"
                                            fill="white"
                                    />
                                    <path
                                            d="M24.1675 20.624C24.3925 20.624 24.6175 20.5677 24.8425 20.4552L28.555 18.0927C29.1738 17.699 29.3425 16.9115 28.9488 16.349C28.555 15.7302 27.7675 15.5615 27.205 15.9552L23.4925 18.3177C22.8738 18.7115 22.705 19.499 23.0988 20.0615C23.3238 20.4552 23.7175 20.624 24.1675 20.624Z"
                                            fill="white"
                                    />
                                </svg>
                            </div>
                            <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                                Multi-user functionality
                            </h4>
                            <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                                Assign different vulnerabilities to different users to be fixed in an organized way
                            </p>
                            <a href="javascript:void(0)" class="text-base font-medium text-dark hover:text-primary dark:text-white dark:hover:text-primary">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                        <div class="wow fadeInUp group mb-12" data-wow-delay=".25s">
                            <div class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                                <span class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                                <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M12.355 2.0614H5.21129C3.29879 2.0614 1.72379 3.6364 1.72379 5.5489V12.6927C1.72379 14.6052 3.29879 16.1802 5.21129 16.1802H12.355C14.2675 16.1802 15.8425 14.6052 15.8425 12.6927V5.60515C15.8988 3.6364 14.3238 2.0614 12.355 2.0614ZM13.3675 12.7489C13.3675 13.3114 12.9175 13.7614 12.355 13.7614H5.21129C4.64879 13.7614 4.19879 13.3114 4.19879 12.7489V5.60515C4.19879 5.04265 4.64879 4.59265 5.21129 4.59265H12.355C12.9175 4.59265 13.3675 5.04265 13.3675 5.60515V12.7489Z"
                                            fill="white"
                                    />
                                    <path
                                            d="M31.0863 2.0614H23.9425C22.03 2.0614 20.455 3.6364 20.455 5.5489V12.6927C20.455 14.6052 22.03 16.1802 23.9425 16.1802H31.0863C32.9988 16.1802 34.5738 14.6052 34.5738 12.6927V5.60515C34.5738 3.6364 32.9988 2.0614 31.0863 2.0614ZM32.0988 12.7489C32.0988 13.3114 31.6488 13.7614 31.0863 13.7614H23.9425C23.38 13.7614 22.93 13.3114 22.93 12.7489V5.60515C22.93 5.04265 23.38 4.59265 23.9425 4.59265H31.0863C31.6488 4.59265 32.0988 5.04265 32.0988 5.60515V12.7489Z"
                                            fill="white"
                                    />
                                    <path
                                            d="M12.355 20.0051H5.21129C3.29879 20.0051 1.72379 21.5801 1.72379 23.4926V30.6364C1.72379 32.5489 3.29879 34.1239 5.21129 34.1239H12.355C14.2675 34.1239 15.8425 32.5489 15.8425 30.6364V23.5489C15.8988 21.5801 14.3238 20.0051 12.355 20.0051ZM13.3675 30.6926C13.3675 31.2551 12.9175 31.7051 12.355 31.7051H5.21129C4.64879 31.7051 4.19879 31.2551 4.19879 30.6926V23.5489C4.19879 22.9864 4.64879 22.5364 5.21129 22.5364H12.355C12.9175 22.5364 13.3675 22.9864 13.3675 23.5489V30.6926Z"
                                            fill="white"
                                    />
                                    <path
                                            d="M31.0863 20.0051H23.9425C22.03 20.0051 20.455 21.5801 20.455 23.4926V30.6364C20.455 32.5489 22.03 34.1239 23.9425 34.1239H31.0863C32.9988 34.1239 34.5738 32.5489 34.5738 30.6364V23.5489C34.5738 21.5801 32.9988 20.0051 31.0863 20.0051ZM32.0988 30.6926C32.0988 31.2551 31.6488 31.7051 31.0863 31.7051H23.9425C23.38 31.7051 22.93 31.2551 22.93 30.6926V23.5489C22.93 22.9864 23.38 22.5364 23.9425 22.5364H31.0863C31.6488 22.5364 32.0988 22.9864 32.0988 23.5489V30.6926Z"
                                            fill="white"
                                    />
                                </svg>
                            </div>
                            <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                                Custom Rules
                            </h4>
                            <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                                Arcane let's you built your own set of rules to expand our already built rules in the downloadable agent
                            </p>
                            <a href="javascript:void(0)" class="text-base font-medium text-dark hover:text-primary dark:text-white dark:hover:text-primary">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Features Section End -->

        <!-- ====== About Section Start -->
        <section id="about" class="bg-gray-1 pb-8 pt-20 dark:bg-dark-2 lg:pb-[70px] lg:pt-[120px]">
            <div class="container">
                <div class="wow fadeInUp" data-wow-delay=".2s">
                    <div class="-mx-4 flex flex-wrap items-center">
                        <div class="w-full px-4 lg:w-1/2">
                            <div class="mb-12 max-w-[540px] lg:mb-0">
                                <h2 class="mb-5 text-3xl font-bold leading-tight text-dark dark:text-white sm:text-[40px] sm:leading-[1.2]">
                                    Brilliant Toolkit to Protect Nextgen Website.
                                </h2>
                                <p class="mb-10 text-base leading-relaxed text-body-color dark:text-dark-6">
                                    Discover the essence of safeguarding intricate business applications through enlightening discussions led by subject-matter experts. Dive into interactive sessions aimed at maximizing security.
                                    <br>
                                    <br>
                                    Experience the power of Arcane's seamless integration with your webserver and backend, ensuring unparalleled security and comprehensive threat intelligence for your online presence.
                                </p>

                                <a
                                        href="javascript:void(0)"
                                        class="inline-flex items-center justify-center rounded-md border border-primary bg-primary px-7 py-3 text-center text-base font-medium text-white hover:border-primary-600 hover:bg-primary-600"
                                >
                                    Know More
                                </a>
                            </div>
                        </div>

                        <div class="w-full px-4 lg:w-1/2">
                            <div class="-mx-2 flex flex-wrap sm:-mx-4 lg:-mx-2 xl:-mx-4">
                                <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                                    <div class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]">
                                        <img src="./images/about/about-image-01.jpg" alt="about image" class="h-full w-full object-cover object-center"/>
                                    </div>
                                </div>

                                <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                                    <div class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]">
                                        <img src="./images/about/about-image-02.jpg" alt="about image" class="h-full w-full object-cover object-center"/>
                                    </div>

                                    <div class="relative z-10 mb-4 flex items-center justify-center overflow-hidden bg-primary px-6 py-12 sm:mb-8 sm:h-[160px] sm:p-5 lg:mb-4 xl:mb-8">
                                        <div>
                                            <span class="block text-5xl font-extrabold text-white">
                                                09
                                            </span>
                                            <span class="block text-base font-semibold text-white">
                                                We have
                                            </span>
                                            <span class="block text-base font-medium text-white text-opacity-70">
                                                Years of experience
                                            </span>
                                        </div>
                                        <div>
                                            <span class="absolute left-0 top-0 -z-10">
                                                <svg width="106" height="144" viewBox="0 0 106 144" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.1" x="-67" y="47.127" width="113.378" height="131.304" transform="rotate(-42.8643 -67 47.127)" fill="url(#paint0_linear_1416_214)"/>
                                                    <defs>
                                                        <linearGradient id="paint0_linear_1416_214" x1="-10.3111" y1="47.127" x2="-10.3111" y2="178.431" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="white"/>
                                                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="absolute right-0 top-0 -z-10">
                                                <svg width="130" height="97" viewBox="0 0 130 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.1" x="0.86792" y="-6.67725" width="155.563" height="140.614" transform="rotate(-42.8643 0.86792 -6.67725)" fill="url(#paint0_linear_1416_215)"/>
                                                    <defs>
                                                        <linearGradient id="paint0_linear_1416_215" x1="78.6495" y1="-6.67725" x2="78.6495" y2="133.937" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="white"/>
                                                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="absolute bottom-0 right-0 -z-10">
                                                <svg width="175" height="104" viewBox="0 0 175 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.1" x="175.011" y="108.611" width="101.246" height="148.179" transform="rotate(137.136 175.011 108.611)" fill="url(#paint0_linear_1416_216)"/>
                                                    <defs>
                                                        <linearGradient id="paint0_linear_1416_216" x1="225.634" y1="108.611" x2="225.634" y2="256.79" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="white"/>
                                                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== About Section End -->

        <!-- ====== CTA Section Start -->
        <section class="relative z-10 overflow-hidden bg-primary py-20 lg:py-[115px]">
            <div class="container mx-auto">
                <div class="relative overflow-hidden">
                    <div class="-mx-4 flex flex-wrap items-stretch">
                        <div class="w-full px-4">
                            <div class="mx-auto max-w-[570px] text-center">
                                <h2 class="mb-2.5 text-3xl font-bold text-white md:text-[38px] md:leading-[1.44]">
                                    <span>What Are You Looking For?</span>
                                    <span class="text-3xl font-normal md:text-[40px]">
                                        Get Started Now
                                    </span>
                                </h2>
                                <p class="mx-auto mb-6 max-w-[515px] text-base leading-[1.5] text-white">
                                    Unlock unparalleled online security with Arcane..
                                </p>
                                <a href="javascript:void(0)" class="inline-block rounded-md border border-transparent bg-gray-300/30 px-7 py-3 text-base font-medium text-white transition hover:bg-[#0BB489]">
                                    Start using Play
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <span class="absolute left-0 top-0">
                    <svg width="495" height="470" viewBox="0 0 495 470" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="55" cy="442" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50"/>
                        <circle cx="446" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20"/>
                        <path d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z" stroke="white" stroke-opacity="0.08" stroke-width="12"/>
                    </svg>
                </span>
                <span class="absolute bottom-0 right-0">
                    <svg width="493" height="470" viewBox="0 0 493 470" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="462" cy="5" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50"/>
                        <circle cx="49" cy="470" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20"/>
                        <path d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z" stroke="white" stroke-opacity="0.06" stroke-width="13"/>
                    </svg>
                </span>
            </div>
        </section>
        <!-- ====== CTA Section End -->

        <!-- ====== Pricing Section Start -->
        <section id="pricing" class="relative z-20 overflow-hidden bg-white pb-12 pt-20 dark:bg-dark lg:pb-[90px] lg:pt-[120px]">
            <div class="container mx-auto">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                            <span class="mb-2 block text-lg font-semibold text-primary">
                                Pricing Table
                            </span>
                            <h2 class="mb-3 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
                                Awesome Pricing Plan
                            </h2>
                            <p class="text-base text-body-color dark:text-dark-6">
                                There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="-mx-4 flex flex-wrap justify-center">
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="relative z-10 mb-10 overflow-hidden rounded-xl bg-white px-8 py-10 shadow-pricing dark:bg-dark-2 sm:p-12 lg:px-6 lg:py-10 xl:p-14">
                            <span class="mb-5 block text-xl font-medium text-dark dark:text-white">
                                Starter
                            </span>
                            <h2 class="mb-11 text-4xl font-semibold text-dark dark:text-white xl:text-[42px] xl:leading-[1.21]">
                                <span class="text-xl font-medium">$</span>
                                <span class="-ml-1 -tracking-[2px]">25.00</span>
                                <span class="text-base font-normal text-body-color dark:text-dark-6">
                                    Per Month
                                </span>
                            </h2>
                            <div class="mb-[50px]">
                                <h5 class="mb-5 text-lg font-medium text-dark dark:text-white">
                                    Features
                                </h5>
                                <div class="flex flex-col gap-[14px]">
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        Up to 1 User
                                    </p>
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        All UI components
                                    </p>
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        Lifetime access
                                    </p>
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        Free updates
                                    </p>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="inline-block rounded-md bg-primary px-7 py-3 text-center text-base font-medium text-white transition hover:bg-primary-600">
                                Purchase Now
                            </a>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="relative z-10 mb-10 overflow-hidden rounded-xl bg-white px-8 py-10 shadow-pricing dark:bg-dark-2 sm:p-12 lg:px-6 lg:py-10 xl:p-14">
                            <p class="absolute right-[-50px] top-[60px] inline-block -rotate-90 rounded-bl-md rounded-tl-md bg-primary px-5 py-2 text-base font-medium text-white">
                                Recommended
                            </p>
                            <span class="mb-5 block text-xl font-medium text-dark dark:text-white">
                                Basic
                            </span>
                            <h2 class="mb-11 text-4xl font-semibold text-dark dark:text-white xl:text-[42px] xl:leading-[1.21]">
                                <span class="text-xl font-medium">$</span>
                                <span class="-ml-1 -tracking-[2px]">59.00</span>
                                <span class="text-base font-normal text-body-color dark:text-dark-6">
                                    Per Month
                                </span>
                            </h2>
                            <div class="mb-[50px]">
                                <h5 class="mb-5 text-lg font-medium text-dark dark:text-white">
                                    Features
                                </h5>
                                <div class="flex flex-col gap-[14px]">
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        Up to 1 User
                                    </p>
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        All UI components
                                    </p>
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        Lifetime access
                                    </p>
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        Free updates
                                    </p>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="inline-block rounded-md bg-primary px-7 py-3 text-center text-base font-medium text-white transition hover:bg-primary-600">
                                Purchase Now
                            </a>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="relative z-10 mb-10 overflow-hidden rounded-xl bg-white px-8 py-10 shadow-pricing dark:bg-dark-2 sm:p-12 lg:px-6 lg:py-10 xl:p-14">
                            <span class="mb-5 block text-xl font-medium text-dark dark:text-white">
                                Premium
                            </span>
                            <h2 class="mb-11 text-4xl font-semibold text-dark dark:text-white xl:text-[42px] xl:leading-[1.21]">
                                <span class="text-xl font-medium">$</span>
                                <span class="-ml-1 -tracking-[2px]">99.00</span>
                                <span class="text-base font-normal text-body-color dark:text-dark-6">
                                    Per Month
                                </span>
                            </h2>
                            <div class="mb-[50px]">
                                <h5 class="mb-5 text-lg font-medium text-dark dark:text-white">
                                    Features
                                </h5>
                                <div class="flex flex-col gap-[14px]">
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        Up to 1 User
                                    </p>
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        All UI components
                                    </p>
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        Lifetime access
                                    </p>
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        Free updates
                                    </p>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="inline-block rounded-md bg-primary px-7 py-3 text-center text-base font-medium text-white transition hover:bg-primary-600">
                                Purchase Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Pricing Section End -->

        <!-- ====== Testimonial Section Start -->
        <section id="testimonials" class="overflow-hidden bg-gray-1 py-20 dark:bg-dark-2 md:py-[120px]">
            <div class="container mx-auto">
                <div class="-mx-4 flex flex-wrap justify-center">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                            <span class="mb-2 block text-lg font-semibold text-primary">
                                Testimonials
                            </span>
                            <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                                What our Clients Say
                            </h2>
                            <p class="text-base text-body-color dark:text-dark-6">
                                There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="-m-5">
                    <div class="swiper testimonial-carousel common-carousel p-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                    <div class="mb-[18px] flex items-center gap-[2px]">
                                        <img src="./images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="./images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="./images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="./images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="./images/testimonials/icon-star.svg" alt="star icon"/>
                                    </div>

                                    <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                        “Our members are so impressed. It's intuitive. It's clean. It's distraction free. If you're building a community.’’
                                    </p>

                                    <a href="#" class="flex items-center gap-4">
                                        <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                            <img src="./images/testimonials/author-01.jpg" alt="author" class="h-[50px] w-[50px] overflow-hidden rounded-full"/>
                                        </div>

                                        <div>
                                            <h3 class="text-sm font-semibold text-dark dark:text-white">
                                                Sabo Masties
                                            </h3>
                                            <p class="text-xs text-body-secondary">Founder @ Rolex</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                    <div class="mb-[18px] flex items-center gap-[2px]">
                                        <img src="./images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="./images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="./images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="./images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="./images/testimonials/icon-star.svg" alt="star icon"/>
                                    </div>

                                    <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                        “Our members are so impressed. It's intuitive. It's clean. It's distraction free. If you're building a community.’’
                                    </p>

                                    <a href="#" class="flex items-center gap-4">
                                        <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                            <img src="./images/testimonials/author-02.jpg" alt="author" class="h-[50px] w-[50px] overflow-hidden rounded-full"/>
                                        </div>

                                        <div>
                                            <h3 class="text-sm font-semibold text-dark dark:text-white">
                                                Musharof Chowdhury
                                            </h3>
                                            <p class="text-xs text-body-secondary">
                                                Founder @ Ayro UI
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                    <div class="mb-[18px] flex items-center gap-[2px]">
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                    </div>

                                    <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                        “Our members are so impressed. It's intuitive. It's clean. It's distraction free. If you're building a community.’’
                                    </p>

                                    <a href="#" class="flex items-center gap-4">
                                        <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                            <img src="images/testimonials/author-03.jpg" alt="author" class="h-[50px] w-[50px] overflow-hidden rounded-full"/>
                                        </div>

                                        <div>
                                            <h3 class="text-sm font-semibold text-dark dark:text-white">
                                                William Smith
                                            </h3>
                                            <p class="text-xs text-body-secondary">
                                                Founder @ Trorex
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                    <div class="mb-[18px] flex items-center gap-[2px]">
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                    </div>

                                    <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                        “Our members are so impressed. It's intuitive. It's clean. It's distraction free. If you're building a community.’’
                                    </p>

                                    <a href="#" class="flex items-center gap-4">
                                        <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                            <img src="images/testimonials/author-01.jpg" alt="author" class="h-[50px] w-[50px] overflow-hidden rounded-full"/>
                                        </div>

                                        <div>
                                            <h3 class="text-sm font-semibold text-dark dark:text-white">
                                                Sabo Masties
                                            </h3>
                                            <p class="text-xs text-body-secondary">Founder @ Rolex</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                    <div class="mb-[18px] flex items-center gap-[2px]">
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                    </div>

                                    <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                        “Our members are so impressed. It's intuitive. It's clean. It's distraction free. If you're building a community.’’
                                    </p>

                                    <a href="#" class="flex items-center gap-4">
                                        <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                            <img src="images/testimonials/author-02.jpg" alt="author" class="h-[50px] w-[50px] overflow-hidden rounded-full"/>
                                        </div>

                                        <div>
                                            <h3 class="text-sm font-semibold text-dark dark:text-white">
                                                Musharof Chowdhury
                                            </h3>
                                            <p class="text-xs text-body-secondary">
                                                Founder @ Ayro UI
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                    <div class="mb-[18px] flex items-center gap-[2px]">
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="./images/testimonials/icon-star.svg" alt="star icon"/>
                                        <img src="./images/testimonials/icon-star.svg" alt="star icon"/>
                                    </div>

                                    <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                        “Our members are so impressed. It's intuitive. It's clean. It's distraction free. If you're building a community.’’
                                    </p>

                                    <a href="#" class="flex items-center gap-4">
                                        <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                            <img src="./images/testimonials/author-03.jpg" alt="author" class="h-[50px] w-[50px] overflow-hidden rounded-full"/>
                                        </div>

                                        <div>
                                            <h3 class="text-sm font-semibold text-dark dark:text-white">
                                                William Smith
                                            </h3>
                                            <p class="text-xs text-body-secondary">
                                                Founder @ Trorex
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-[60px] flex items-center justify-center gap-1">
                            <div class="swiper-button-prev">
                                <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M19.25 10.2437H4.57187L10.4156 4.29687C10.725 3.9875 10.725 3.50625 10.4156 3.19687C10.1062 2.8875 9.625 2.8875 9.31562 3.19687L2.2 10.4156C1.89062 10.725 1.89062 11.2063 2.2 11.5156L9.31562 18.7344C9.45312 18.8719 9.65937 18.975 9.86562 18.975C10.0719 18.975 10.2437 18.9062 10.4156 18.7687C10.725 18.4594 10.725 17.9781 10.4156 17.6688L4.60625 11.7906H19.25C19.6625 11.7906 20.0063 11.4469 20.0063 11.0344C20.0063 10.5875 19.6625 10.2437 19.25 10.2437Z"
                                    />
                                </svg>
                            </div>

                            <div class="swiper-button-next">
                                <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M19.8 10.45L12.6844 3.2313C12.375 2.92192 11.8938 2.92192 11.5844 3.2313C11.275 3.54067 11.275 4.02192 11.5844 4.3313L17.3594 10.2094H2.75C2.3375 10.2094 1.99375 10.5532 1.99375 10.9657C1.99375 11.3782 2.3375 11.7563 2.75 11.7563H17.4281L11.5844 17.7032C11.275 18.0126 11.275 18.4938 11.5844 18.8032C11.7219 18.9407 11.9281 19.0094 12.1344 19.0094C12.3406 19.0094 12.5469 18.9407 12.6844 18.7688L19.8 11.55C20.1094 11.2407 20.1094 10.7594 19.8 10.45Z"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Testimonial Section End -->

        <!-- ====== FAQ Section Start -->
        <section class="relative z-20 overflow-hidden bg-white pb-8 pt-20 dark:bg-dark lg:pb-[50px] lg:pt-[120px]">
            <div class="container mx-auto">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-[60px] max-w-[520px] text-center">
                            <span class="mb-2 block text-lg font-semibold text-primary">
                                FAQ
                            </span>
                            <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                                Any Questions? Look Here
                            </h2>
                            <p class="mx-auto max-w-[485px] text-base text-body-color dark:text-dark-6">
                                There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4 lg:w-1/2">
                        <div class="mb-12 flex lg:mb-[70px]">
                            <div class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                                <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                    <path
                                            d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"
                                    />
                                    <path
                                            d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"
                                    />
                                    <path
                                            d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h3 class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                    Is TailGrids Well-documented?
                                </h3>
                                <p class="text-base text-body-color dark:text-dark-6">
                                    It takes 2-3 weeks to get your first blog post ready. That includes the in-depth research & creation of your monthly content ui/ux strategy that we do writing your first blog post.
                                </p>
                            </div>
                        </div>
                        <div class="mb-12 flex lg:mb-[70px]">
                            <div class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                                <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                    <path
                                            d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"
                                    />
                                    <path
                                            d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"
                                    />
                                    <path
                                            d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h3 class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                    Is TailGrids Well-documented?
                                </h3>
                                <p class="text-base text-body-color dark:text-dark-6">
                                    It takes 2-3 weeks to get your first blog post ready. That includes the in-depth research & creation of your monthly content ui/ux strategy that we do writing your first blog post.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2">
                        <div class="mb-12 flex lg:mb-[70px]">
                            <div class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                                <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                    <path
                                            d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"
                                    />
                                    <path
                                            d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"
                                    />
                                    <path
                                            d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h3 class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                    Is TailGrids Well-documented?
                                </h3>
                                <p class="text-base text-body-color dark:text-dark-6">
                                    It takes 2-3 weeks to get your first blog post ready. That includes the in-depth research & creation of your monthly content ui/ux strategy that we do writing your first blog post.
                                </p>
                            </div>
                        </div>
                        <div class="mb-12 flex lg:mb-[70px]">
                            <div class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                                <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                    <path
                                            d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"
                                    />
                                    <path
                                            d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"
                                    />
                                    <path
                                            d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h3 class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                    Is TailGrids Well-documented?
                                </h3>
                                <p class="text-base text-body-color dark:text-dark-6">
                                    It takes 2-3 weeks to get your first blog post ready. That includes the in-depth research & creation of your monthly content ui/ux strategy that we do writing your first blog post.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <span class="absolute left-4 top-4 -z-[1]">
                    <svg width="48" height="134" viewBox="0 0 48 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)" fill="#13C296"/>
                        <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)" fill="#13C296"/>
                        <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)" fill="#13C296"/>
                        <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)" fill="#13C296"/>
                        <circle cx="45.6673" cy="73.3335" r="1.66667" transform="rotate(180 45.6673 73.3335)" fill="#13C296"/>
                        <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)" fill="#13C296"/>
                        <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)" fill="#13C296"/>
                        <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)" fill="#13C296"/>
                        <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)" fill="#13C296"/>
                        <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)" fill="#13C296"/>
                        <circle cx="31.0013" cy="132" r="1.66667" transform="rotate(180 31.0013 132)" fill="#13C296"/>
                        <circle cx="31.0013" cy="117.333" r="1.66667" transform="rotate(180 31.0013 117.333)" fill="#13C296"/>
                        <circle cx="31.0013" cy="102.667" r="1.66667" transform="rotate(180 31.0013 102.667)" fill="#13C296"/>
                        <circle cx="31.0013" cy="88.0001" r="1.66667" transform="rotate(180 31.0013 88.0001)" fill="#13C296"/>
                        <circle cx="31.0013" cy="73.3335" r="1.66667" transform="rotate(180 31.0013 73.3335)" fill="#13C296"/>
                        <circle cx="31.0013" cy="45.0001" r="1.66667" transform="rotate(180 31.0013 45.0001)" fill="#13C296"/>
                        <circle cx="31.0013" cy="16.0001" r="1.66667" transform="rotate(180 31.0013 16.0001)" fill="#13C296"/>
                        <circle cx="31.0013" cy="59.0001" r="1.66667" transform="rotate(180 31.0013 59.0001)" fill="#13C296"/>
                        <circle cx="31.0013" cy="30.6668" r="1.66667" transform="rotate(180 31.0013 30.6668)" fill="#13C296"/>
                        <circle cx="31.0013" cy="1.66683" r="1.66667" transform="rotate(180 31.0013 1.66683)" fill="#13C296"/>
                        <circle cx="16.3333" cy="132" r="1.66667" transform="rotate(180 16.3333 132)" fill="#13C296"/>
                        <circle cx="16.3333" cy="117.333" r="1.66667" transform="rotate(180 16.3333 117.333)" fill="#13C296"/>
                        <circle cx="16.3333" cy="102.667" r="1.66667" transform="rotate(180 16.3333 102.667)" fill="#13C296"/>
                        <circle cx="16.3333" cy="88.0001" r="1.66667" transform="rotate(180 16.3333 88.0001)" fill="#13C296"/>
                        <circle cx="16.3333" cy="73.3335" r="1.66667" transform="rotate(180 16.3333 73.3335)" fill="#13C296"/>
                        <circle cx="16.3333" cy="45.0001" r="1.66667" transform="rotate(180 16.3333 45.0001)" fill="#13C296"/>
                        <circle cx="16.3333" cy="16.0001" r="1.66667" transform="rotate(180 16.3333 16.0001)" fill="#13C296"/>
                        <circle cx="16.3333" cy="59.0001" r="1.66667" transform="rotate(180 16.3333 59.0001)" fill="#13C296"/>
                        <circle cx="16.3333" cy="30.6668" r="1.66667" transform="rotate(180 16.3333 30.6668)" fill="#13C296"/>
                        <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(180 16.3333 1.66683)" fill="#13C296"/>
                        <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)" fill="#13C296"/>
                        <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)" fill="#13C296"/>
                        <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)" fill="#13C296"/>
                        <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)" fill="#13C296"/>
                        <circle cx="1.66732" cy="73.3335" r="1.66667" transform="rotate(180 1.66732 73.3335)" fill="#13C296"/>
                        <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)" fill="#13C296"/>
                        <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)" fill="#13C296"/>
                        <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)" fill="#13C296"/>
                        <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)" fill="#13C296"/>
                        <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)" fill="#13C296"/>
                    </svg>
                </span>
                <span class="absolute bottom-4 right-4 -z-[1]">
                    <svg width="48" height="134" viewBox="0 0 48 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)" fill="#3758F9"/>
                        <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)" fill="#3758F9"/>
                        <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)" fill="#3758F9"/>
                        <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)" fill="#3758F9"/>
                        <circle cx="45.6673" cy="73.3333" r="1.66667" transform="rotate(180 45.6673 73.3333)" fill="#3758F9"/>
                        <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)" fill="#3758F9"/>
                        <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)" fill="#3758F9"/>
                        <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)" fill="#3758F9"/>
                        <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)" fill="#3758F9"/>
                        <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)" fill="#3758F9"/>
                        <circle cx="31.0006" cy="132" r="1.66667" transform="rotate(180 31.0006 132)" fill="#3758F9"/>
                        <circle cx="31.0006" cy="117.333" r="1.66667" transform="rotate(180 31.0006 117.333)" fill="#3758F9"/>
                        <circle cx="31.0006" cy="102.667" r="1.66667" transform="rotate(180 31.0006 102.667)" fill="#3758F9"/>
                        <circle cx="31.0006" cy="88.0001" r="1.66667" transform="rotate(180 31.0006 88.0001)" fill="#3758F9"/>
                        <circle cx="31.0008" cy="73.3333" r="1.66667" transform="rotate(180 31.0008 73.3333)" fill="#3758F9"/>
                        <circle cx="31.0008" cy="45.0001" r="1.66667" transform="rotate(180 31.0008 45.0001)" fill="#3758F9"/>
                        <circle cx="31.0008" cy="16.0001" r="1.66667" transform="rotate(180 31.0008 16.0001)" fill="#3758F9"/>
                        <circle cx="31.0008" cy="59.0001" r="1.66667" transform="rotate(180 31.0008 59.0001)" fill="#3758F9"/>
                        <circle cx="31.0008" cy="30.6668" r="1.66667" transform="rotate(180 31.0008 30.6668)" fill="#3758F9"/>
                        <circle cx="31.0008" cy="1.66683" r="1.66667" transform="rotate(180 31.0008 1.66683)" fill="#3758F9"/>
                        <circle cx="16.3341" cy="132" r="1.66667" transform="rotate(180 16.3341 132)" fill="#3758F9"/>
                        <circle cx="16.3341" cy="117.333" r="1.66667" transform="rotate(180 16.3341 117.333)" fill="#3758F9"/>
                        <circle cx="16.3341" cy="102.667" r="1.66667" transform="rotate(180 16.3341 102.667)" fill="#3758F9"/>
                        <circle cx="16.3341" cy="88.0001" r="1.66667" transform="rotate(180 16.3341 88.0001)" fill="#3758F9"/>
                        <circle cx="16.3338" cy="73.3333" r="1.66667" transform="rotate(180 16.3338 73.3333)" fill="#3758F9"/>
                        <circle cx="16.3338" cy="45.0001" r="1.66667" transform="rotate(180 16.3338 45.0001)" fill="#3758F9"/>
                        <circle cx="16.3338" cy="16.0001" r="1.66667" transform="rotate(180 16.3338 16.0001)" fill="#3758F9"/>
                        <circle cx="16.3338" cy="59.0001" r="1.66667" transform="rotate(180 16.3338 59.0001)" fill="#3758F9"/>
                        <circle cx="16.3338" cy="30.6668" r="1.66667" transform="rotate(180 16.3338 30.6668)" fill="#3758F9"/>
                        <circle cx="16.3338" cy="1.66683" r="1.66667" transform="rotate(180 16.3338 1.66683)" fill="#3758F9"/>
                        <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)" fill="#3758F9"/>
                        <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)" fill="#3758F9"/>
                        <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)" fill="#3758F9"/>
                        <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)" fill="#3758F9"/>
                        <circle cx="1.66732" cy="73.3333" r="1.66667" transform="rotate(180 1.66732 73.3333)" fill="#3758F9"/>
                        <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)" fill="#3758F9"/>
                        <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)" fill="#3758F9"/>
                        <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)" fill="#3758F9"/>
                        <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)" fill="#3758F9"/>
                        <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)" fill="#3758F9"/>
                    </svg>
                </span>
            </div>
        </section>
        <!-- ====== FAQ Section End -->

        <!-- ====== Team Section Start -->
        <section id="team" class="overflow-hidden bg-gray-1 pb-12 pt-20 dark:bg-dark-2 lg:pb-[90px] lg:pt-[120px]">
            <div class="container mx-auto">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                            <span class="mb-2 block text-lg font-semibold text-primary">
                                Our Team Members
                            </span>
                            <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                                Our Creative Team
                            </h2>
                            <p class="text-base text-body-color dark:text-dark-6">
                                There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="-mx-4 flex flex-wrap justify-center">
                    <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                        <div class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                            <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                <img src="./images/team/team-01.png" alt="team image" class="h-[120px] w-[120px] rounded-full"/>
                                <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>
                                <span class="absolute right-0 top-0 -z-10 opacity-0 transition-all group-hover:opacity-100">
                                    <svg width="55" height="53" viewBox="0 0 55 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M12.5118 3.1009C13.3681 3.1009 14.0622 2.40674 14.0622 1.55045C14.0622 0.69416 13.3681 0 12.5118 0C11.6555 0 10.9613 0.69416 10.9613 1.55045C10.9613 2.40674 11.6555 3.1009 12.5118 3.1009Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M22.5038 3.1009C23.3601 3.1009 24.0543 2.40674 24.0543 1.55045C24.0543 0.69416 23.3601 0 22.5038 0C21.6475 0 20.9534 0.69416 20.9534 1.55045C20.9534 2.40674 21.6475 3.1009 22.5038 3.1009Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.4958 3.1009C33.3521 3.1009 34.0463 2.40674 34.0463 1.55045C34.0463 0.69416 33.3521 0 32.4958 0C31.6395 0 30.9454 0.69416 30.9454 1.55045C30.9454 2.40674 31.6395 3.1009 32.4958 3.1009Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.4875 3.1009C43.3438 3.1009 44.038 2.40674 44.038 1.55045C44.038 0.69416 43.3438 0 42.4875 0C41.6312 0 40.9371 0.69416 40.9371 1.55045C40.9371 2.40674 41.6312 3.1009 42.4875 3.1009Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M52.4795 3.1009C53.3358 3.1009 54.03 2.40674 54.03 1.55045C54.03 0.69416 53.3358 0 52.4795 0C51.6233 0 50.9291 0.69416 50.9291 1.55045C50.9291 2.40674 51.6233 3.1009 52.4795 3.1009Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M2.52045 13.0804C3.37674 13.0804 4.0709 12.3862 4.0709 11.5299C4.0709 10.6737 3.37674 9.97949 2.52045 9.97949C1.66416 9.97949 0.970001 10.6737 0.970001 11.5299C0.970001 12.3862 1.66416 13.0804 2.52045 13.0804Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M12.5118 13.0804C13.3681 13.0804 14.0622 12.3862 14.0622 11.5299C14.0622 10.6737 13.3681 9.97949 12.5118 9.97949C11.6555 9.97949 10.9613 10.6737 10.9613 11.5299C10.9613 12.3862 11.6555 13.0804 12.5118 13.0804Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M22.5038 13.0804C23.3601 13.0804 24.0543 12.3862 24.0543 11.5299C24.0543 10.6737 23.3601 9.97949 22.5038 9.97949C21.6475 9.97949 20.9534 10.6737 20.9534 11.5299C20.9534 12.3862 21.6475 13.0804 22.5038 13.0804Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.4958 13.0804C33.3521 13.0804 34.0463 12.3862 34.0463 11.5299C34.0463 10.6737 33.3521 9.97949 32.4958 9.97949C31.6395 9.97949 30.9454 10.6737 30.9454 11.5299C30.9454 12.3862 31.6395 13.0804 32.4958 13.0804Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.4875 13.0804C43.3438 13.0804 44.038 12.3862 44.038 11.5299C44.038 10.6737 43.3438 9.97949 42.4875 9.97949C41.6312 9.97949 40.9371 10.6737 40.9371 11.5299C40.9371 12.3862 41.6312 13.0804 42.4875 13.0804Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M52.4795 13.0804C53.3358 13.0804 54.03 12.3862 54.03 11.5299C54.03 10.6737 53.3358 9.97949 52.4795 9.97949C51.6233 9.97949 50.9291 10.6737 50.9291 11.5299C50.9291 12.3862 51.6233 13.0804 52.4795 13.0804Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M2.52045 23.0604C3.37674 23.0604 4.0709 22.3662 4.0709 21.5099C4.0709 20.6536 3.37674 19.9595 2.52045 19.9595C1.66416 19.9595 0.970001 20.6536 0.970001 21.5099C0.970001 22.3662 1.66416 23.0604 2.52045 23.0604Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M12.5118 23.0604C13.3681 23.0604 14.0622 22.3662 14.0622 21.5099C14.0622 20.6536 13.3681 19.9595 12.5118 19.9595C11.6555 19.9595 10.9613 20.6536 10.9613 21.5099C10.9613 22.3662 11.6555 23.0604 12.5118 23.0604Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M22.5038 23.0604C23.3601 23.0604 24.0543 22.3662 24.0543 21.5099C24.0543 20.6536 23.3601 19.9595 22.5038 19.9595C21.6475 19.9595 20.9534 20.6536 20.9534 21.5099C20.9534 22.3662 21.6475 23.0604 22.5038 23.0604Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.4958 23.0604C33.3521 23.0604 34.0463 22.3662 34.0463 21.5099C34.0463 20.6536 33.3521 19.9595 32.4958 19.9595C31.6395 19.9595 30.9454 20.6536 30.9454 21.5099C30.9454 22.3662 31.6395 23.0604 32.4958 23.0604Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.4875 23.0604C43.3438 23.0604 44.038 22.3662 44.038 21.5099C44.038 20.6536 43.3438 19.9595 42.4875 19.9595C41.6312 19.9595 40.9371 20.6536 40.9371 21.5099C40.9371 22.3662 41.6312 23.0604 42.4875 23.0604Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M52.4795 23.0604C53.3358 23.0604 54.03 22.3662 54.03 21.5099C54.03 20.6536 53.3358 19.9595 52.4795 19.9595C51.6233 19.9595 50.9291 20.6536 50.9291 21.5099C50.9291 22.3662 51.6233 23.0604 52.4795 23.0604Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M2.52045 33.0404C3.37674 33.0404 4.0709 32.3462 4.0709 31.4899C4.0709 30.6336 3.37674 29.9395 2.52045 29.9395C1.66416 29.9395 0.970001 30.6336 0.970001 31.4899C0.970001 32.3462 1.66416 33.0404 2.52045 33.0404Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M12.5118 33.0404C13.3681 33.0404 14.0622 32.3462 14.0622 31.4899C14.0622 30.6336 13.3681 29.9395 12.5118 29.9395C11.6555 29.9395 10.9613 30.6336 10.9613 31.4899C10.9613 32.3462 11.6555 33.0404 12.5118 33.0404Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M22.5038 33.0404C23.3601 33.0404 24.0543 32.3462 24.0543 31.4899C24.0543 30.6336 23.3601 29.9395 22.5038 29.9395C21.6475 29.9395 20.9534 30.6336 20.9534 31.4899C20.9534 32.3462 21.6475 33.0404 22.5038 33.0404Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.4958 33.0404C33.3521 33.0404 34.0463 32.3462 34.0463 31.4899C34.0463 30.6336 33.3521 29.9395 32.4958 29.9395C31.6395 29.9395 30.9454 30.6336 30.9454 31.4899C30.9454 32.3462 31.6395 33.0404 32.4958 33.0404Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.4875 33.0404C43.3438 33.0404 44.038 32.3462 44.038 31.4899C44.038 30.6336 43.3438 29.9395 42.4875 29.9395C41.6312 29.9395 40.9371 30.6336 40.9371 31.4899C40.9371 32.3462 41.6312 33.0404 42.4875 33.0404Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M52.4795 33.0404C53.3358 33.0404 54.03 32.3462 54.03 31.4899C54.03 30.6336 53.3358 29.9395 52.4795 29.9395C51.6233 29.9395 50.9291 30.6336 50.9291 31.4899C50.9291 32.3462 51.6233 33.0404 52.4795 33.0404Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M2.52045 43.0203C3.37674 43.0203 4.0709 42.3262 4.0709 41.4699C4.0709 40.6136 3.37674 39.9194 2.52045 39.9194C1.66416 39.9194 0.970001 40.6136 0.970001 41.4699C0.970001 42.3262 1.66416 43.0203 2.52045 43.0203Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M12.5118 43.0203C13.3681 43.0203 14.0622 42.3262 14.0622 41.4699C14.0622 40.6136 13.3681 39.9194 12.5118 39.9194C11.6555 39.9194 10.9613 40.6136 10.9613 41.4699C10.9613 42.3262 11.6555 43.0203 12.5118 43.0203Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M22.5038 43.0203C23.3601 43.0203 24.0543 42.3262 24.0543 41.4699C24.0543 40.6136 23.3601 39.9194 22.5038 39.9194C21.6475 39.9194 20.9534 40.6136 20.9534 41.4699C20.9534 42.3262 21.6475 43.0203 22.5038 43.0203Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.4958 43.0203C33.3521 43.0203 34.0463 42.3262 34.0463 41.4699C34.0463 40.6136 33.3521 39.9194 32.4958 39.9194C31.6395 39.9194 30.9454 40.6136 30.9454 41.4699C30.9454 42.3262 31.6395 43.0203 32.4958 43.0203Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.4875 43.0203C43.3438 43.0203 44.038 42.3262 44.038 41.4699C44.038 40.6136 43.3438 39.9194 42.4875 39.9194C41.6312 39.9194 40.9371 40.6136 40.9371 41.4699C40.9371 42.3262 41.6312 43.0203 42.4875 43.0203Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M52.4795 43.0203C53.3358 43.0203 54.03 42.3262 54.03 41.4699C54.03 40.6136 53.3358 39.9194 52.4795 39.9194C51.6233 39.9194 50.9291 40.6136 50.9291 41.4699C50.9291 42.3262 51.6233 43.0203 52.4795 43.0203Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M2.52045 53.0001C3.37674 53.0001 4.0709 52.3059 4.0709 51.4496C4.0709 50.5933 3.37674 49.8992 2.52045 49.8992C1.66416 49.8992 0.970001 50.5933 0.970001 51.4496C0.970001 52.3059 1.66416 53.0001 2.52045 53.0001Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M12.5118 53.0001C13.3681 53.0001 14.0622 52.3059 14.0622 51.4496C14.0622 50.5933 13.3681 49.8992 12.5118 49.8992C11.6555 49.8992 10.9613 50.5933 10.9613 51.4496C10.9613 52.3059 11.6555 53.0001 12.5118 53.0001Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M22.5038 53.0001C23.3601 53.0001 24.0543 52.3059 24.0543 51.4496C24.0543 50.5933 23.3601 49.8992 22.5038 49.8992C21.6475 49.8992 20.9534 50.5933 20.9534 51.4496C20.9534 52.3059 21.6475 53.0001 22.5038 53.0001Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.4958 53.0001C33.3521 53.0001 34.0463 52.3059 34.0463 51.4496C34.0463 50.5933 33.3521 49.8992 32.4958 49.8992C31.6395 49.8992 30.9454 50.5933 30.9454 51.4496C30.9454 52.3059 31.6395 53.0001 32.4958 53.0001Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.4875 53.0001C43.3438 53.0001 44.038 52.3059 44.038 51.4496C44.038 50.5933 43.3438 49.8992 42.4875 49.8992C41.6312 49.8992 40.9371 50.5933 40.9371 51.4496C40.9371 52.3059 41.6312 53.0001 42.4875 53.0001Z"
                                                fill="#3758F9"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M52.4795 53.0001C53.3358 53.0001 54.03 52.3059 54.03 51.4496C54.03 50.5933 53.3358 49.8992 52.4795 49.8992C51.6233 49.8992 50.9291 50.5933 50.9291 51.4496C50.9291 52.3059 51.6233 53.0001 52.4795 53.0001Z"
                                                fill="#3758F9"
                                        />
                                    </svg>
                                </span>
                            </div>
                            <div class="text-center">
                                <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                    Melissa Tatcher
                                </h4>
                                <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                                    Marketing Expert
                                </p>
                                <div class="flex items-center justify-center gap-5">
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                    d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                                                    fill=""
                                            />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                    d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                                                    fill=""
                                            />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                    d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                                    fill=""
                                            />
                                            <path
                                                    d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                                    fill=""
                                            />
                                            <path
                                                    d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                                    fill=""
                                            />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                        <div class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                            <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                <img src="https://cdn.tailgrids.com/1.0/images/team/image-07/image-02.png" alt="team image" class="h-[120px] w-[120px] rounded-full"/>
                                <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>
                                <span class="absolute right-0 top-0 -z-10 opacity-0 transition-all group-hover:opacity-100">
                                    <svg width="45" height="53" viewBox="0 0 45 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                                                fill="#3056D3"
                                        />
                                    </svg>
                                </span>
                            </div>
                            <div class="text-center">
                                <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                    Stuard Ferrel
                                </h4>
                                <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                                    Digital Marketer
                                </p>
                                <div class="flex items-center justify-center gap-5">
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                    d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                                                    fill=""
                                            />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                    d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                                                    fill=""
                                            />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                    d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                                    fill=""
                                            />
                                            <path
                                                    d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                                    fill=""
                                            />
                                            <path
                                                    d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                                    fill=""
                                            />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                        <div class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                            <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                <img src="https://cdn.tailgrids.com/1.0/images/team/image-07/image-03.png" alt="team image" class="h-[120px] w-[120px] rounded-full"/>
                                <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>
                                <span class="absolute right-0 top-0 -z-10 opacity-0 transition-all group-hover:opacity-100">
                                    <svg width="45" height="53" viewBox="0 0 45 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                                                fill="#3056D3"
                                        />
                                    </svg>
                                </span>
                            </div>
                            <div class="text-center">
                                <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                    Eva Hudson
                                </h4>
                                <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                                    Creative Designer
                                </p>
                                <div class="flex items-center justify-center gap-5">
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                    d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                                                    fill=""
                                            />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                    d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                                                    fill=""
                                            />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                    d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                                    fill=""
                                            />
                                            <path
                                                    d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                                    fill=""
                                            />
                                            <path
                                                    d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                                    fill=""
                                            />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                        <div class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                            <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                <img src="https://cdn.tailgrids.com/1.0/images/team/image-07/image-04.png" alt="team image" class="h-[120px] w-[120px] rounded-full"/>
                                <span class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>
                                <span class="absolute right-0 top-0 -z-10 opacity-0 transition-all group-hover:opacity-100">
                                    <svg width="45" height="53" viewBox="0 0 45 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                                                fill="#3056D3"
                                        />
                                        <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                                                fill="#3056D3"
                                        />
                                    </svg>
                                </span>
                            </div>
                            <div class="text-center">
                                <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                    Jackie Sanders
                                </h4>
                                <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                                    SEO Expert
                                </p>
                                <div class="flex items-center justify-center gap-5">
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                    d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                                                    fill=""
                                            />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                    d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                                                    fill=""
                                            />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                    d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                                    fill=""
                                            />
                                            <path
                                                    d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                                    fill=""
                                            />
                                            <path
                                                    d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                                    fill=""
                                            />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Team Section End -->

        <!-- ====== Blog Section Start -->
        <section class="bg-white pb-10 pt-20 dark:bg-dark lg:pb-20 lg:pt-[120px]">
            <div class="container mx-auto">
                <div class="-mx-4 flex flex-wrap justify-center">
                    <div class="w-full px-4">
                        <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                            <span class="mb-2 block text-lg font-semibold text-primary">
                                Our Blogs
                            </span>
                            <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
                                Our Recent News
                            </h2>
                            <p class="text-base text-body-color dark:text-dark-6">
                                There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="wow fadeInUp group mb-10" data-wow-delay=".1s">
                            <div class="mb-8 overflow-hidden rounded-[5px]">
                                <a href="blog-details.html" class="block">
                                    <img src="./images/blog/blog-01.jpg" alt="image" class="w-full transition group-hover:rotate-6 group-hover:scale-125"/>
                                </a>
                            </div>
                            <div>
                                <span class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white">
                                    Dec 22, 2023
                                </span>
                                <h3>
                                    <a href="javascript:void(0)" class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                        Meet AutoManage, the best AI management tools
                                    </a>
                                </h3>
                                <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="wow fadeInUp group mb-10" data-wow-delay=".15s">
                            <div class="mb-8 overflow-hidden rounded-[5px]">
                                <a href="blog-details.html" class="block">
                                    <img src="./images/blog/blog-02.jpg" alt="image" class="w-full transition group-hover:rotate-6 group-hover:scale-125"/>
                                </a>
                            </div>
                            <div>
                                <span class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white">
                                    Mar 15, 2023
                                </span>
                                <h3>
                                    <a href="javascript:void(0)" class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                        How to earn more money as a wellness coach
                                    </a>
                                </h3>
                                <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="wow fadeInUp group mb-10" data-wow-delay=".2s">
                            <div class="mb-8 overflow-hidden rounded-[5px]">
                                <a href="blog-details.html" class="block">
                                    <img src="./images/blog/blog-03.jpg" alt="image" class="w-full transition group-hover:rotate-6 group-hover:scale-125"/>
                                </a>
                            </div>
                            <div>
                                <span class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white">
                                    Jan 05, 2023
                                </span>
                                <h3>
                                    <a href="javascript:void(0)" class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                        The no-fuss guide to upselling and cross selling
                                    </a>
                                </h3>
                                <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Blog Section End -->

        <!-- ====== Contact Start ====== -->
        <section id="contact" class="relative py-20 md:py-[120px]">
            <div class="absolute left-0 top-0 -z-[1] h-full w-full dark:bg-dark"></div>
            <div class="absolute left-0 top-0 -z-[1] h-1/2 w-full bg-[#E9F9FF] dark:bg-dark-700 lg:h-[45%] xl:h-1/2"></div>
            <div class="container px-4">
                <div class="-mx-4 flex flex-wrap items-center">
                    <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
                        <div class="ud-contact-content-wrapper">
                            <div class="ud-contact-title mb-12 lg:mb-[150px]">
                                <span class="mb-6 block text-base font-medium text-dark dark:text-white">
                                    CONTACT US
                                </span>
                                <h2 class="max-w-[260px] text-[35px] font-semibold leading-[1.14] text-dark dark:text-white">
                                    Let's talk about your problem.
                                </h2>
                            </div>
                            <div class="mb-12 flex flex-wrap justify-between lg:mb-0">
                                <div class="mb-8 flex w-[330px] max-w-full">
                                    <div class="mr-6 text-[32px] text-primary">
                                        <svg width="29" height="35" viewBox="0 0 29 35" class="fill-current">
                                            <path
                                                    d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z"
                                            />
                                            <path
                                                    d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z"
                                            />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="mb-[18px] text-lg font-semibold text-dark dark:text-white">
                                            Our Location
                                        </h5>
                                        <p class="text-base text-body-color dark:text-dark-6">
                                            401 Broadway, 24th Floor, Orchard Cloud View, London
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-8 flex w-[330px] max-w-full">
                                    <div class="mr-6 text-[32px] text-primary">
                                        <svg width="34" height="25" viewBox="0 0 34 25" class="fill-current">
                                            <path
                                                    d="M30.5156 0.960938H3.17188C1.42188 0.960938 0 2.38281 0 4.13281V20.9219C0 22.6719 1.42188 24.0938 3.17188 24.0938H30.5156C32.2656 24.0938 33.6875 22.6719 33.6875 20.9219V4.13281C33.6875 2.38281 32.2656 0.960938 30.5156 0.960938ZM30.5156 2.875C30.7891 2.875 31.0078 2.92969 31.2266 3.09375L17.6094 11.3516C17.1172 11.625 16.5703 11.625 16.0781 11.3516L2.46094 3.09375C2.67969 2.98438 2.89844 2.875 3.17188 2.875H30.5156ZM30.5156 22.125H3.17188C2.51562 22.125 1.91406 21.5781 1.91406 20.8672V5.00781L15.0391 12.9922C15.5859 13.3203 16.1875 13.4844 16.7891 13.4844C17.3906 13.4844 17.9922 13.3203 18.5391 12.9922L31.6641 5.00781V20.8672C31.7734 21.5781 31.1719 22.125 30.5156 22.125Z"
                                            />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="mb-[18px] text-lg font-semibold text-dark dark:text-white">
                                            How Can We Help?
                                        </h5>
                                        <p class="text-base text-body-color dark:text-dark-6">
                                            email1@email.com
                                        </p>
                                        <p class="mt-1 text-base text-body-color dark:text-dark-6">
                                            email2@email.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
                        <div
                                class="wow fadeInUp rounded-lg bg-white px-8 py-10 shadow-testimonial dark:bg-dark-2 dark:shadow-none sm:px-10 sm:py-12 md:p-[60px] lg:p-10 lg:px-10 lg:py-12 2xl:p-[60px]"
                                data-wow-delay=".2s
              "
                        >
                            <h3 class="mb-8 text-2xl font-semibold text-dark dark:text-white md:text-[28px] md:leading-[1.42]">
                                Send us a Message
                            </h3>
                            <form>
                                <div class="mb-[22px]">
                                    <label for="fullName" class="mb-4 block text-sm text-body-color dark:text-dark-6">Full Name*</label>
                                    <input
                                            type="text"
                                            name="fullName"
                                            placeholder="Adam Gelius"
                                            class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6"
                                    />
                                </div>
                                <div class="mb-[22px]">
                                    <label for="email" class="mb-4 block text-sm text-body-color dark:text-dark-6">Email*</label>
                                    <input
                                            type="email"
                                            name="email"
                                            placeholder="example@yourmail.com"
                                            class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6"
                                    />
                                </div>
                                <div class="mb-[22px]">
                                    <label for="phone" class="mb-4 block text-sm text-body-color dark:text-dark-6">Phone*</label>
                                    <input
                                            type="text"
                                            name="phone"
                                            placeholder="+885 1254 5211 552"
                                            class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6"
                                    />
                                </div>
                                <div class="mb-[30px]">
                                    <label for="message" class="mb-4 block text-sm text-body-color dark:text-dark-6">Message*</label>
                                    <textarea
                                            name="message"
                                            rows="1"
                                            placeholder="type your message here"
                                            class="w-full resize-none border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6"
                                    ></textarea>
                                </div>
                                <div class="mb-0">
                                    <button type="submit" class="inline-flex items-center justify-center rounded-md bg-primary px-10 py-3 text-base font-medium text-white transition duration-300 ease-in-out hover:bg-primary-600">
                                        Send
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Contact End ====== -->

        <!-- ====== Brands Section Start -->
        <section class="pb-20 dark:bg-dark">
            <div class="container px-4">
                <div class="-mx-4 flex flex-wrap items-center justify-center gap-8 xl:gap-11">
                    <a href="https://graygrids.com/">
                        <img src="./images/brands/graygrids.svg" alt="graygrids" class="dark:hidden"/>
                        <img src="./images/brands/graygrids-white.svg" alt="graygrids" class="hidden dark:block"/>
                    </a>
                    <a href="https://lineicons.com/">
                        <img src="./images/brands/lineicons.svg" alt="lineicons" class="dark:hidden"/>
                        <img src="./images/brands/lineicons-white.svg" alt="graygrids" class="hidden dark:block"/>
                    </a>
                    <a href="https://uideck.com/">
                        <img src="./images/brands/uideck.svg" alt="uideck" class="dark:hidden"/>
                        <img src="./images/brands/uideck-white.svg" alt="graygrids" class="hidden dark:block"/>
                    </a>
                    <a href="https://ayroui.com/">
                        <img src="./images/brands/ayroui.svg" alt="ayroui" class="dark:hidden"/>
                        <img src="./images/brands/ayroui-white.svg" alt="graygrids" class="hidden dark:block"/>
                    </a>
                    <a href="https://tailgrids.com/">
                        <img src="./images/brands/tailgrids.svg" alt="tailgrids" class="dark:hidden"/>
                        <img src="./images/brands/tailgrids-white.svg" alt="graygrids" class="hidden dark:block"/>
                    </a>
                </div>
            </div>
        </section>
        <!-- ====== Brands Section End -->

        <!-- ====== Footer Section Start -->
        <footer class="wow fadeInUp relative z-10 bg-[#090E34] pt-20 lg:pt-[100px]" data-wow-delay=".15s">
            <div class="container">
                <div class="-mx-4 flex flex-wrap">
                    <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-4/12 xl:w-3/12">
                        <div class="mb-10 w-full">
                            <a href="javascript:void(0)" class="mb-6 inline-block max-w-[160px]">
                                <img src="images/logo/logo-white.svg" alt="logo" class="max-w-full"/>
                            </a>
                            <p class="mb-8 max-w-[270px] text-base text-white">
                                We create digital experiences for brands and companies by using technology.
                            </p>
                            <div class="-mx-3 flex items-center">
                                <a href="javascript:void(0)" class="px-3 text-white hover:text-white">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                                d="M16.294 8.86875H14.369H13.6815V8.18125V6.05V5.3625H14.369H15.8128C16.1909 5.3625 16.5003 5.0875 16.5003 4.675V1.03125C16.5003 0.653125 16.2253 0.34375 15.8128 0.34375H13.3034C10.5878 0.34375 8.69714 2.26875 8.69714 5.12187V8.1125V8.8H8.00964H5.67214C5.19089 8.8 4.74402 9.17812 4.74402 9.72812V12.2031C4.74402 12.6844 5.12214 13.1313 5.67214 13.1313H7.94089H8.62839V13.8188V20.7281C8.62839 21.2094 9.00652 21.6562 9.55652 21.6562H12.7878C12.994 21.6562 13.1659 21.5531 13.3034 21.4156C13.4409 21.2781 13.544 21.0375 13.544 20.8312V13.8531V13.1656H14.2659H15.8128C16.2596 13.1656 16.6034 12.8906 16.6721 12.4781V12.4438V12.4094L17.1534 10.0375C17.1878 9.79688 17.1534 9.52187 16.9471 9.24687C16.8784 9.075 16.569 8.90312 16.294 8.86875Z"
                                        />
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="px-3 text-white hover:text-white">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                                d="M20.1236 5.91236C20.2461 5.76952 20.0863 5.58286 19.905 5.64972C19.5004 5.79896 19.1306 5.8974 18.5837 5.95817C19.2564 5.58362 19.5693 5.04828 19.8237 4.39259C19.885 4.23443 19.7 4.09092 19.5406 4.16647C18.8931 4.47345 18.1945 4.70121 17.4599 4.83578C16.7338 4.11617 15.6988 3.6665 14.5539 3.6665C12.3554 3.6665 10.5725 5.32454 10.5725 7.36908C10.5725 7.65933 10.6081 7.94206 10.6752 8.21276C7.51486 8.06551 4.6968 6.71359 2.73896 4.64056C2.60477 4.49848 2.36128 4.51734 2.27772 4.69063C2.05482 5.15296 1.93056 5.66584 1.93056 6.20582C1.93056 7.49014 2.6332 8.62331 3.70132 9.28732C3.22241 9.27293 2.76441 9.17961 2.34234 9.02125C2.13684 8.94416 1.90127 9.07964 1.92888 9.28686C2.14084 10.8781 3.42915 12.1909 5.09205 12.5011C4.75811 12.586 4.40639 12.6311 4.04253 12.6311C3.95431 12.6311 3.86685 12.6284 3.78019 12.6231C3.55967 12.6094 3.38044 12.8067 3.47499 12.9954C4.09879 14.2404 5.44575 15.1096 7.0132 15.1367C5.65077 16.13 3.93418 16.7218 2.06882 16.7218C1.83882 16.7218 1.74015 17.0175 1.9442 17.1178C3.52016 17.8924 5.31487 18.3332 7.22182 18.3332C14.545 18.3332 18.549 12.6914 18.549 7.79843C18.549 7.63827 18.545 7.47811 18.5377 7.31945C19.1321 6.92012 19.6664 6.44528 20.1236 5.91236Z"
                                        />
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="px-3 text-white hover:text-white">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                                d="M11.0297 14.4305C12.9241 14.4305 14.4598 12.8948 14.4598 11.0004C14.4598 9.10602 12.9241 7.57031 11.0297 7.57031C9.13529 7.57031 7.59958 9.10602 7.59958 11.0004C7.59958 12.8948 9.13529 14.4305 11.0297 14.4305Z"
                                        />
                                        <path
                                                d="M14.7554 1.8335H7.24463C4.25807 1.8335 1.83334 4.25823 1.83334 7.24479V14.6964C1.83334 17.7421 4.25807 20.1668 7.24463 20.1668H14.6962C17.7419 20.1668 20.1667 17.7421 20.1667 14.7555V7.24479C20.1667 4.25823 17.7419 1.8335 14.7554 1.8335ZM11.0296 15.4948C8.51614 15.4948 6.53496 13.4545 6.53496 11.0002C6.53496 8.54586 8.54571 6.50554 11.0296 6.50554C13.4839 6.50554 15.4946 8.54586 15.4946 11.0002C15.4946 13.4545 13.5134 15.4948 11.0296 15.4948ZM17.2393 6.91952C16.9436 7.24479 16.5 7.42221 15.9973 7.42221C15.5538 7.42221 15.1102 7.24479 14.7554 6.91952C14.4301 6.59425 14.2527 6.18027 14.2527 5.67758C14.2527 5.17489 14.4301 4.79049 14.7554 4.43565C15.0807 4.08081 15.4946 3.90339 15.9973 3.90339C16.4409 3.90339 16.914 4.08081 17.2393 4.40608C17.535 4.79049 17.7419 5.23403 17.7419 5.70715C17.7124 6.18027 17.535 6.59425 17.2393 6.91952Z"
                                        />
                                        <path
                                                d="M16.0276 4.96777C15.6432 4.96777 15.318 5.29304 15.318 5.67745C15.318 6.06186 15.6432 6.38713 16.0276 6.38713C16.412 6.38713 16.7373 6.06186 16.7373 5.67745C16.7373 5.29304 16.4416 4.96777 16.0276 4.96777Z"
                                        />
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="px-3 text-white hover:text-white">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                                d="M18.8065 1.8335H3.16399C2.42474 1.8335 1.83334 2.42489 1.83334 3.16414V18.8362C1.83334 19.5459 2.42474 20.1668 3.16399 20.1668H18.7473C19.4866 20.1668 20.078 19.5754 20.078 18.8362V3.13457C20.1371 2.42489 19.5457 1.8335 18.8065 1.8335ZM7.24464 17.4168H4.55379V8.69371H7.24464V17.4168ZM5.88443 7.48135C4.99733 7.48135 4.31721 6.77167 4.31721 5.91414C4.31721 5.05661 5.0269 4.34694 5.88443 4.34694C6.74196 4.34694 7.45163 5.05661 7.45163 5.91414C7.45163 6.77167 6.8011 7.48135 5.88443 7.48135ZM17.4463 17.4168H14.7554V13.1883C14.7554 12.183 14.7258 10.8523 13.336 10.8523C11.9167 10.8523 11.7097 11.976 11.7097 13.0996V17.4168H9.01884V8.69371H11.6506V9.90608H11.6801C12.0645 9.1964 12.9221 8.48672 14.2527 8.48672C17.0027 8.48672 17.5054 10.2609 17.5054 12.6856V17.4168H17.4463Z"
                                        />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-2/12 xl:w-2/12">
                        <div class="mb-10 w-full">
                            <h4 class="mb-9 text-lg font-semibold text-white">About Us</h4>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="mb-3 inline-block text-base text-white hover:text-primary">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mb-3 inline-block text-base text-white hover:text-primary">
                                        Features
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mb-3 inline-block text-base text-white hover:text-primary">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mb-3 inline-block text-base text-white hover:text-primary">
                                        Testimonial
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-3/12 xl:w-2/12">
                        <div class="mb-10 w-full">
                            <h4 class="mb-9 text-lg font-semibold text-white">Features</h4>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="mb-3 inline-block text-base text-white hover:text-primary">
                                        How it works
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mb-3 inline-block text-base text-white hover:text-primary">
                                        Privacy policy
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mb-3 inline-block text-base text-white hover:text-primary">
                                        Terms of Service
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mb-3 inline-block text-base text-white hover:text-primary">
                                        Refund policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-3/12 xl:w-2/12">
                        <div class="mb-10 w-full">
                            <h4 class="mb-9 text-lg font-semibold text-white">
                                Our Products
                            </h4>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="mb-3 inline-block text-base text-white hover:text-primary">
                                        LineIcons
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mb-3 inline-block text-base text-white hover:text-primary">
                                        Ecommerce HTML
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mb-3 inline-block text-base text-white hover:text-primary">
                                        TailAdmin
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="mb-3 inline-block text-base text-white hover:text-primary">
                                        PlainAdmin
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-2/3 lg:w-6/12 xl:w-3/12">
                        <div class="mb-10 w-full">
                            <h4 class="mb-9 text-lg font-semibold text-white">Latest blog</h4>
                            <div class="flex flex-col gap-8">
                                <a href="blog-details.html" class="group flex items-center gap-[22px]">
                                    <div class="overflow-hidden rounded">
                                        <img src="./images/blog/blog-footer-01.jpg" alt="blog"/>
                                    </div>
                                    <span class="max-w-[180px] text-base text-white group-hover:text-white">
                                        I think really important to design with...
                                    </span>
                                </a>
                                <a href="blog-details.html" class="group flex items-center gap-[22px]">
                                    <div class="overflow-hidden rounded">
                                        <img src="./images/blog/blog-footer-02.jpg" alt="blog"/>
                                    </div>
                                    <span class="max-w-[180px] text-base text-white group-hover:text-white">
                                        Recognizing the need is the primary...
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 border-t border-[#8890A4] border-opacity-40 py-8 lg:mt-[60px]">
                <div class="container">
                    <div class="-mx-4 flex flex-wrap">
                        <div class="w-full px-4 md:w-2/3 lg:w-1/2">
                            <div class="my-1">
                                <div class="-mx-3 flex items-center justify-center md:justify-start">
                                    <a href="javascript:void(0)" class="px-3 text-base text-white hover:text-white hover:underline">
                                        Privacy policy
                                    </a>
                                    <a href="javascript:void(0)" class="px-3 text-base text-white hover:text-white hover:underline">
                                        Legal notice
                                    </a>
                                    <a href="javascript:void(0)" class="px-3 text-base text-white hover:text-white hover:underline">
                                        Terms of service
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4 md:w-1/3 lg:w-1/2">
                            <div class="my-1 flex justify-center md:justify-end">
                                <p class="text-base text-white">
                                    Designed and Developed by
                                    <a href="https://tailgrids.com" rel="nofollow noopner" target="_blank" class="text-gray-1 hover:underline">
                                        TailGrids and UIdeck
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <span class="absolute left-0 top-0 z-[-1]">
                    <img src="images/footer/shape-1.svg" alt=""/>
                </span>

                <span class="absolute bottom-0 right-0 z-[-1]">
                    <img src="images/footer/shape-3.svg" alt=""/>
                </span>

                <span class="absolute right-0 top-0 z-[-1]">
                    <svg width="102" height="102" viewBox="0 0 102 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M1.8667 33.1956C2.89765 33.1956 3.7334 34.0318 3.7334 35.0633C3.7334 36.0947 2.89765 36.9309 1.8667 36.9309C0.835744 36.9309 4.50645e-08 36.0947 0 35.0633C-4.50645e-08 34.0318 0.835744 33.1956 1.8667 33.1956Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M18.2939 33.1956C19.3249 33.1956 20.1606 34.0318 20.1606 35.0633C20.1606 36.0947 19.3249 36.9309 18.2939 36.9309C17.263 36.9309 16.4272 36.0947 16.4272 35.0633C16.4272 34.0318 17.263 33.1956 18.2939 33.1956Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M34.7209 33.195C35.7519 33.195 36.5876 34.0311 36.5876 35.0626C36.5876 36.0941 35.7519 36.9303 34.7209 36.9303C33.69 36.9303 32.8542 36.0941 32.8542 35.0626C32.8542 34.0311 33.69 33.195 34.7209 33.195Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M50.9341 33.195C51.965 33.195 52.8008 34.0311 52.8008 35.0626C52.8008 36.0941 51.965 36.9303 50.9341 36.9303C49.9031 36.9303 49.0674 36.0941 49.0674 35.0626C49.0674 34.0311 49.9031 33.195 50.9341 33.195Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M1.8667 16.7605C2.89765 16.7605 3.7334 17.5966 3.7334 18.6281C3.7334 19.6596 2.89765 20.4957 1.8667 20.4957C0.835744 20.4957 4.50645e-08 19.6596 0 18.6281C-4.50645e-08 17.5966 0.835744 16.7605 1.8667 16.7605Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M18.2939 16.7605C19.3249 16.7605 20.1606 17.5966 20.1606 18.6281C20.1606 19.6596 19.3249 20.4957 18.2939 20.4957C17.263 20.4957 16.4272 19.6596 16.4272 18.6281C16.4272 17.5966 17.263 16.7605 18.2939 16.7605Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M34.7209 16.7605C35.7519 16.7605 36.5876 17.5966 36.5876 18.6281C36.5876 19.6596 35.7519 20.4957 34.7209 20.4957C33.69 20.4957 32.8542 19.6596 32.8542 18.6281C32.8542 17.5966 33.69 16.7605 34.7209 16.7605Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M50.9341 16.7605C51.965 16.7605 52.8008 17.5966 52.8008 18.6281C52.8008 19.6596 51.965 20.4957 50.9341 20.4957C49.9031 20.4957 49.0674 19.6596 49.0674 18.6281C49.0674 17.5966 49.9031 16.7605 50.9341 16.7605Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M1.8667 0.324951C2.89765 0.324951 3.7334 1.16115 3.7334 2.19261C3.7334 3.22408 2.89765 4.06024 1.8667 4.06024C0.835744 4.06024 4.50645e-08 3.22408 0 2.19261C-4.50645e-08 1.16115 0.835744 0.324951 1.8667 0.324951Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M18.2939 0.324951C19.3249 0.324951 20.1606 1.16115 20.1606 2.19261C20.1606 3.22408 19.3249 4.06024 18.2939 4.06024C17.263 4.06024 16.4272 3.22408 16.4272 2.19261C16.4272 1.16115 17.263 0.324951 18.2939 0.324951Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M34.7209 0.325302C35.7519 0.325302 36.5876 1.16147 36.5876 2.19293C36.5876 3.2244 35.7519 4.06056 34.7209 4.06056C33.69 4.06056 32.8542 3.2244 32.8542 2.19293C32.8542 1.16147 33.69 0.325302 34.7209 0.325302Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M50.9341 0.325302C51.965 0.325302 52.8008 1.16147 52.8008 2.19293C52.8008 3.2244 51.965 4.06056 50.9341 4.06056C49.9031 4.06056 49.0674 3.2244 49.0674 2.19293C49.0674 1.16147 49.9031 0.325302 50.9341 0.325302Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M66.9037 33.1956C67.9346 33.1956 68.7704 34.0318 68.7704 35.0633C68.7704 36.0947 67.9346 36.9309 66.9037 36.9309C65.8727 36.9309 65.037 36.0947 65.037 35.0633C65.037 34.0318 65.8727 33.1956 66.9037 33.1956Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M83.3307 33.1956C84.3616 33.1956 85.1974 34.0318 85.1974 35.0633C85.1974 36.0947 84.3616 36.9309 83.3307 36.9309C82.2997 36.9309 81.464 36.0947 81.464 35.0633C81.464 34.0318 82.2997 33.1956 83.3307 33.1956Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M99.7576 33.1956C100.789 33.1956 101.624 34.0318 101.624 35.0633C101.624 36.0947 100.789 36.9309 99.7576 36.9309C98.7266 36.9309 97.8909 36.0947 97.8909 35.0633C97.8909 34.0318 98.7266 33.1956 99.7576 33.1956Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M66.9037 16.7605C67.9346 16.7605 68.7704 17.5966 68.7704 18.6281C68.7704 19.6596 67.9346 20.4957 66.9037 20.4957C65.8727 20.4957 65.037 19.6596 65.037 18.6281C65.037 17.5966 65.8727 16.7605 66.9037 16.7605Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M83.3307 16.7605C84.3616 16.7605 85.1974 17.5966 85.1974 18.6281C85.1974 19.6596 84.3616 20.4957 83.3307 20.4957C82.2997 20.4957 81.464 19.6596 81.464 18.6281C81.464 17.5966 82.2997 16.7605 83.3307 16.7605Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M99.7576 16.7605C100.789 16.7605 101.624 17.5966 101.624 18.6281C101.624 19.6596 100.789 20.4957 99.7576 20.4957C98.7266 20.4957 97.8909 19.6596 97.8909 18.6281C97.8909 17.5966 98.7266 16.7605 99.7576 16.7605Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M66.9037 0.324966C67.9346 0.324966 68.7704 1.16115 68.7704 2.19261C68.7704 3.22408 67.9346 4.06024 66.9037 4.06024C65.8727 4.06024 65.037 3.22408 65.037 2.19261C65.037 1.16115 65.8727 0.324966 66.9037 0.324966Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M83.3307 0.324951C84.3616 0.324951 85.1974 1.16115 85.1974 2.19261C85.1974 3.22408 84.3616 4.06024 83.3307 4.06024C82.2997 4.06024 81.464 3.22408 81.464 2.19261C81.464 1.16115 82.2997 0.324951 83.3307 0.324951Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M99.7576 0.324951C100.789 0.324951 101.624 1.16115 101.624 2.19261C101.624 3.22408 100.789 4.06024 99.7576 4.06024C98.7266 4.06024 97.8909 3.22408 97.8909 2.19261C97.8909 1.16115 98.7266 0.324951 99.7576 0.324951Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M1.8667 82.2029C2.89765 82.2029 3.7334 83.039 3.7334 84.0705C3.7334 85.102 2.89765 85.9382 1.8667 85.9382C0.835744 85.9382 4.50645e-08 85.102 0 84.0705C-4.50645e-08 83.039 0.835744 82.2029 1.8667 82.2029Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M18.2939 82.2029C19.3249 82.2029 20.1606 83.039 20.1606 84.0705C20.1606 85.102 19.3249 85.9382 18.2939 85.9382C17.263 85.9382 16.4272 85.102 16.4272 84.0705C16.4272 83.039 17.263 82.2029 18.2939 82.2029Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M34.7209 82.2026C35.7519 82.2026 36.5876 83.0387 36.5876 84.0702C36.5876 85.1017 35.7519 85.9378 34.7209 85.9378C33.69 85.9378 32.8542 85.1017 32.8542 84.0702C32.8542 83.0387 33.69 82.2026 34.7209 82.2026Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M50.9341 82.2026C51.965 82.2026 52.8008 83.0387 52.8008 84.0702C52.8008 85.1017 51.965 85.9378 50.9341 85.9378C49.9031 85.9378 49.0674 85.1017 49.0674 84.0702C49.0674 83.0387 49.9031 82.2026 50.9341 82.2026Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M1.8667 65.7677C2.89765 65.7677 3.7334 66.6039 3.7334 67.6353C3.7334 68.6668 2.89765 69.503 1.8667 69.503C0.835744 69.503 4.50645e-08 68.6668 0 67.6353C-4.50645e-08 66.6039 0.835744 65.7677 1.8667 65.7677Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M18.2939 65.7677C19.3249 65.7677 20.1606 66.6039 20.1606 67.6353C20.1606 68.6668 19.3249 69.503 18.2939 69.503C17.263 69.503 16.4272 68.6668 16.4272 67.6353C16.4272 66.6039 17.263 65.7677 18.2939 65.7677Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M34.7209 65.7674C35.7519 65.7674 36.5876 66.6036 36.5876 67.635C36.5876 68.6665 35.7519 69.5027 34.7209 69.5027C33.69 69.5027 32.8542 68.6665 32.8542 67.635C32.8542 66.6036 33.69 65.7674 34.7209 65.7674Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M50.9341 65.7674C51.965 65.7674 52.8008 66.6036 52.8008 67.635C52.8008 68.6665 51.965 69.5027 50.9341 69.5027C49.9031 69.5027 49.0674 68.6665 49.0674 67.635C49.0674 66.6036 49.9031 65.7674 50.9341 65.7674Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M1.8667 98.2644C2.89765 98.2644 3.7334 99.1005 3.7334 100.132C3.7334 101.163 2.89765 102 1.8667 102C0.835744 102 4.50645e-08 101.163 0 100.132C-4.50645e-08 99.1005 0.835744 98.2644 1.8667 98.2644Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M1.8667 49.3322C2.89765 49.3322 3.7334 50.1684 3.7334 51.1998C3.7334 52.2313 2.89765 53.0675 1.8667 53.0675C0.835744 53.0675 4.50645e-08 52.2313 0 51.1998C-4.50645e-08 50.1684 0.835744 49.3322 1.8667 49.3322Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M18.2939 98.2644C19.3249 98.2644 20.1606 99.1005 20.1606 100.132C20.1606 101.163 19.3249 102 18.2939 102C17.263 102 16.4272 101.163 16.4272 100.132C16.4272 99.1005 17.263 98.2644 18.2939 98.2644Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M18.2939 49.3322C19.3249 49.3322 20.1606 50.1684 20.1606 51.1998C20.1606 52.2313 19.3249 53.0675 18.2939 53.0675C17.263 53.0675 16.4272 52.2313 16.4272 51.1998C16.4272 50.1684 17.263 49.3322 18.2939 49.3322Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M34.7209 98.2647C35.7519 98.2647 36.5876 99.1008 36.5876 100.132C36.5876 101.164 35.7519 102 34.7209 102C33.69 102 32.8542 101.164 32.8542 100.132C32.8542 99.1008 33.69 98.2647 34.7209 98.2647Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M50.9341 98.2647C51.965 98.2647 52.8008 99.1008 52.8008 100.132C52.8008 101.164 51.965 102 50.9341 102C49.9031 102 49.0674 101.164 49.0674 100.132C49.0674 99.1008 49.9031 98.2647 50.9341 98.2647Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M34.7209 49.3326C35.7519 49.3326 36.5876 50.1687 36.5876 51.2002C36.5876 52.2317 35.7519 53.0678 34.7209 53.0678C33.69 53.0678 32.8542 52.2317 32.8542 51.2002C32.8542 50.1687 33.69 49.3326 34.7209 49.3326Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M50.9341 49.3326C51.965 49.3326 52.8008 50.1687 52.8008 51.2002C52.8008 52.2317 51.965 53.0678 50.9341 53.0678C49.9031 53.0678 49.0674 52.2317 49.0674 51.2002C49.0674 50.1687 49.9031 49.3326 50.9341 49.3326Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M66.9037 82.2029C67.9346 82.2029 68.7704 83.0391 68.7704 84.0705C68.7704 85.102 67.9346 85.9382 66.9037 85.9382C65.8727 85.9382 65.037 85.102 65.037 84.0705C65.037 83.0391 65.8727 82.2029 66.9037 82.2029Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M83.3307 82.2029C84.3616 82.2029 85.1974 83.0391 85.1974 84.0705C85.1974 85.102 84.3616 85.9382 83.3307 85.9382C82.2997 85.9382 81.464 85.102 81.464 84.0705C81.464 83.0391 82.2997 82.2029 83.3307 82.2029Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M99.7576 82.2029C100.789 82.2029 101.624 83.039 101.624 84.0705C101.624 85.102 100.789 85.9382 99.7576 85.9382C98.7266 85.9382 97.8909 85.102 97.8909 84.0705C97.8909 83.039 98.7266 82.2029 99.7576 82.2029Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M66.9037 65.7674C67.9346 65.7674 68.7704 66.6036 68.7704 67.635C68.7704 68.6665 67.9346 69.5027 66.9037 69.5027C65.8727 69.5027 65.037 68.6665 65.037 67.635C65.037 66.6036 65.8727 65.7674 66.9037 65.7674Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M83.3307 65.7677C84.3616 65.7677 85.1974 66.6039 85.1974 67.6353C85.1974 68.6668 84.3616 69.503 83.3307 69.503C82.2997 69.503 81.464 68.6668 81.464 67.6353C81.464 66.6039 82.2997 65.7677 83.3307 65.7677Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M99.7576 65.7677C100.789 65.7677 101.624 66.6039 101.624 67.6353C101.624 68.6668 100.789 69.503 99.7576 69.503C98.7266 69.503 97.8909 68.6668 97.8909 67.6353C97.8909 66.6039 98.7266 65.7677 99.7576 65.7677Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M66.9037 98.2644C67.9346 98.2644 68.7704 99.1005 68.7704 100.132C68.7704 101.163 67.9346 102 66.9037 102C65.8727 102 65.037 101.163 65.037 100.132C65.037 99.1005 65.8727 98.2644 66.9037 98.2644Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M66.9037 49.3322C67.9346 49.3322 68.7704 50.1684 68.7704 51.1998C68.7704 52.2313 67.9346 53.0675 66.9037 53.0675C65.8727 53.0675 65.037 52.2313 65.037 51.1998C65.037 50.1684 65.8727 49.3322 66.9037 49.3322Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M83.3307 98.2644C84.3616 98.2644 85.1974 99.1005 85.1974 100.132C85.1974 101.163 84.3616 102 83.3307 102C82.2997 102 81.464 101.163 81.464 100.132C81.464 99.1005 82.2997 98.2644 83.3307 98.2644Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M83.3307 49.3322C84.3616 49.3322 85.1974 50.1684 85.1974 51.1998C85.1974 52.2313 84.3616 53.0675 83.3307 53.0675C82.2997 53.0675 81.464 52.2313 81.464 51.1998C81.464 50.1684 82.2997 49.3322 83.3307 49.3322Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M99.7576 98.2644C100.789 98.2644 101.624 99.1005 101.624 100.132C101.624 101.163 100.789 102 99.7576 102C98.7266 102 97.8909 101.163 97.8909 100.132C97.8909 99.1005 98.7266 98.2644 99.7576 98.2644Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                        <path
                                d="M99.7576 49.3322C100.789 49.3322 101.624 50.1684 101.624 51.1998C101.624 52.2313 100.789 53.0675 99.7576 53.0675C98.7266 53.0675 97.8909 52.2313 97.8909 51.1998C97.8909 50.1684 98.7266 49.3322 99.7576 49.3322Z"
                                fill="white"
                                fill-opacity="0.08"
                        ></path>
                    </svg>
                </span>
            </div>
        </footer>
        <!-- ====== Footer Section End -->

        <!-- ====== Back To Top Start -->
        <a href="javascript:void(0)" class="back-to-top fixed bottom-8 left-auto right-8 z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md transition duration-300 ease-in-out hover:bg-dark">
            <span class="mt-[6px] h-3 w-3 rotate-45 border-l border-t border-white"></span>
        </a>
        <!-- ====== Back To Top End -->

        <!-- ====== All Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            // ==== for menu scroll
            const pageLink = document.querySelectorAll(".ud-menu-scroll");

            pageLink.forEach((elem) => {
                elem.addEventListener("click", (e) => {
                    e.preventDefault();
                    document.querySelector(elem.getAttribute("href")).scrollIntoView({
                        behavior: "smooth",
                        offsetTop: 1 - 60,
                    });
                });
            });

            // section menu active
            function onScroll(event) {
                const sections = document.querySelectorAll(".ud-menu-scroll");
                const scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

                for (let i = 0; i < sections.length; i++) {
                    const currLink = sections[i];
                    const val = currLink.getAttribute("href");
                    const refElement = document.querySelector(val);
                    const scrollTopMinus = scrollPos + 73;
                    if (refElement && refElement.offsetTop <= scrollTopMinus && refElement.offsetTop + refElement.offsetHeight > scrollTopMinus) {
                        document.querySelector(".ud-menu-scroll").classList.remove("active");
                        currLink.classList.add("active");
                    } else {
                        currLink.classList.remove("active");
                    }
                }
            }

            window.document.addEventListener("scroll", onScroll);

            // Testimonial
            const testimonialSwiper = new Swiper(".testimonial-carousel", {
                slidesPerView: 1,
                spaceBetween: 30,

                // Navigation arrows
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1280: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                },
            });
        </script>
    </body>
</html>
