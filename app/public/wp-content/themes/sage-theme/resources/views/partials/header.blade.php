<!-- <header id="header" class="module header w-full top-0 left-0 fixed z-200 down_lg:overflow-hidden">
    <div class="container">
        <nav class="row navbar items-center">
            <div
                class="col w-full down_lg:flex down_lg:flex-wrap lg:w-1/5 header-mobile relative justify-between items-center">
                <div class="lg:w-full relative">
                    <a id="header-logo" class="navbar-brand header-logo py-5 inline-block align-middle"
                        href="{!! App::getLogo()['href'] !!}">
                        <img src="{!! App::getLogo()['url'] !!}" alt="{!! App::getLogo()['alt'] !!}" class="w-full">
                    </a>
                </div>
                <div class="block lg:hidden">
                    <button class="navbar-toggler hamburger-menu p-4 mt-0 cursor-pointer" type="button"
                        data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="icon-bar block bg-white relative ml-auto w-16 h-2"></span>
                        <span class="icon-bar block bg-white relative ml-auto w-16 h-2 mt-3"></span>
                        <span class="icon-bar block bg-white relative ml-auto w-16 h-2 mt-3"></span>
                        <span class="sr-only">Open Menu</span>
                    </button>
                </div>
            </div> -->

<!-- <div class="col w-full lg:w-4/5 navbar-collapse main-menu flex flex-col justify-between" id="main-menu"
                data-module="menu">
                {{-- <ul
                    class="main-menu-ul navbar-nav list-none flex mb-0 p-0 text-white flex-col text-inherit
        lg:flex-row lg:justify-end">
                    <li class="menu-item mb-0 ">
                        <a class="block py-9 lg:p-9 no-underline" href="#">Workshops</a>
                    </li>
                    <li class="menu-item mb-0">
                        <a class="block py-9 lg:p-9 no-underline" href="#">erp-selection</a>
                    </li>
                    <li class="menu-item mb-0">
                        <a class="block py-9 lg:p-9 no-underline" href="#">Erp lanning</a>
                    </li>
                    <li class="active menu-item mb-0">
                        <a class="block py-9 lg:p-9 no-underline" href="#">Program Mangement</a>
                    </li>
                    <li class="menu-item mb-0">
                        <a class="block py-9 lg:p-9 no-underline" href="#">Training</a>
                    </li>
                </ul> --}}
                {!! App::getMainNav() !!}
            </div>
        </nav>
    </div>
</header> -->


<header id="header" class="module header w-full top-0 left-0 fixed z-200 down_lg:overflow-hidden" data-module="header">
    <nav class=" navbar w-full mx-[auto] justify-around items-center row border-b-1">
<header id="header" class="module header w-full top-0 left-0 fixed z-200 border-b-1 down_lg:overflow-hidden" data-module="header">
    <nav class="navbar w-full mx-[auto] justify-around items-center row bg-sky">
        <div>
            <div class="relative">
                <a id="header-logo" class="navbar-brand header-logo py-5 inline-block align-middle"
                    href="https://www.fruturaproduce.com">
                    <img src="{!! App::getLogo()['url'] !!}" alt="{!! App::getLogo()['url'] !!}" class="w-full">
                    <img src="{!! App::getLogo()['url'] !!}" alt="{!! App::getLogo()['url'] !!}" class="w-[226px] h-[38px]">
                    <!-- <img src="https://www.fruturaproduce.com/wp-content/uploads/2021/05/logo-white.svg" alt="Frutura"
                        class="transform-center-middle absolute z-0 down_lg:max-w-112 down_lg:left-32 hidden-print"> -->
                </a>
            </div>
            <div class="col-lg-4 block lg:hidden">
                <button class="navbar-toggler hamburger-menu pt-3 pb-4 px-7 mt-0 cursor-pointer" type="button"
                    data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar block bg-white relative ml-auto w-16 h-1-5 transition-bg duration-300"></span>
                    <span
                        class="icon-bar block bg-white relative ml-auto w-16 h-1-5 transition-bg duration-300 mt-3"></span>
                    <span
                        class="icon-bar block bg-white relative ml-auto w-16 h-1-5 transition-bg duration-300 mt-3"></span>
                    <span class="icomoon icon-close-menu d-none"></span>
                    <span class="sr-only">Menu</span>
                </button>
            </div>
        </div>
        <div class="flex flex-col justify-between" id="main-menu" data-module="menu">
            <ul
                class="main-menu-ul navbar-nav list-none flex mb-0 text-white flex-col text-inherit items-center py-22 down_sm_h:pt-10 px-0 lg:py-0 lg:flex-row lg:justify-end lg:pr-13 xl:pr-20">
                <li class="menu-item mb-0 uppercase font-bold tracking-1-2 relative w-full lg:w-auto">
                    <a href=""
                        class="inline-block py-11 px-9 md:px-6 lg:px-9 text-center w-full text-white font-semibold no-underline">About
                    </a>
                </li>
                <li class="menu-item mb-0 uppercase font-bold tracking-1-2 relative w-full lg:w-auto">
                    <a href=""
                        class="inline-block py-11 px-9 md:px-6 lg:px-9 text-center w-full text-white font-semibold no-underline">Leadership</a>
                </li>
                <li class="menu-item mb-0 uppercase font-bold tracking-1-2 relative w-full lg:w-auto">
                    <a href=""
                        class="inline-block py-11 px-9 md:px-6 lg:px-9 text-center w-full text-white font-semibold no-underline">Careers</a>
                </li>
                <li class="menu-item mb-0 uppercase font-bold tracking-1-2 relative w-full lg:w-auto">
                    <a href=""
                        class="inline-block py-11 px-9 md:px-6 lg:px-9 text-center w-full text-white font-semibold no-underline">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>