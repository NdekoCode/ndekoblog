<!-- Navbar -->
<nav class="duration-250 ease-soft-in relative mx-6 flex flex-wrap items-center justify-between rounded-2xl px-0 py-2 shadow-none transition-all lg:flex-nowrap lg:justify-start"
    navbar-main navbar-scroll="true">
    <div class="flex-wrap-inherit mx-auto flex w-full items-center justify-between px-4 py-1">
        <nav>
            <!-- breadcrumb -->
            <ol class="mr-12 flex flex-wrap rounded-lg bg-transparent pt-1 sm:mr-16">
                <li class="text-size-sm leading-normal">
                    <a class="text-slate-700 opacity-50" href="javascript:;">Pages</a>
                </li>
                <li class="text-size-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                    aria-current="page">Dashboard</li>
            </ol>
            <h6 class="mb-0 font-bold capitalize">Dashboard</h6>
        </nav>

        <div class="mt-2 flex grow items-center sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">
                <form method="GET"
                    class="ease-soft relative flex w-full flex-wrap items-center rounded-lg border border-solid border-gray-300 bg-white text-gray-700 transition-all">
                    <button
                        class="text-size-sm ease-soft leading-5.6 border-r-solid -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border-r border-transparent border-r-gray-300 bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                        <i class="fas fa-search"></i>
                    </button>
                    <input type="text"
                        class="pl-8.75 text-size-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative block min-w-0 flex-auto border-none bg-white bg-clip-padding py-2 pr-3 text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-lime-300 focus:outline-none focus:transition-shadow"
                        placeholder="Type here..." />
                </form>
            </div>
            <ul class="md-max:w-full mb-0 flex list-none flex-row justify-end pl-0">
                <!-- online builder btn  -->
                <!-- <li class="flex items-center">
                <a class="leading-pro ease-soft-in text-size-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft mb-0 mr-4 inline-block cursor-pointer rounded-lg border border-solid border-fuchsia-500 bg-transparent px-8 py-2 text-center align-middle font-bold uppercase text-fuchsia-500 shadow-none transition-all hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
              </li> -->
                <li class="flex items-center">
                    <a href="./pages/sign-in.html"
                        class="ease-nav-brand text-size-sm block px-0 py-2 font-semibold text-slate-500 transition-all">
                        <i class="fa fa-user sm:mr-1"></i>
                        <span class="hidden sm:inline">Sign In</span>
                    </a>
                </li>
                <li class="flex items-center pl-4 xl:hidden">
                    <a href="javascript:;" class="ease-nav-brand text-size-sm block p-0 text-slate-500 transition-all"
                        sidenav-trigger>
                        <div class="w-4.5 overflow-hidden">
                            <i
                                class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                            <i
                                class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                            <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                        </div>
                    </a>
                </li>
                <li class="flex items-center px-4">
                    <a href="javascript:;" class="text-size-sm ease-nav-brand p-0 text-slate-500 transition-all">
                        <i fixed-plugin-button-nav class="fa fa-cog cursor-pointer"></i>
                        <!-- fixed-plugin-button-nav  -->
                    </a>
                </li>

                <!-- notifications -->

                <li class="relative flex items-center pr-2">
                    <p class="transform-dropdown-show hidden"></p>
                    <a href="javascript:;" class="text-size-sm ease-nav-brand block p-0 text-slate-500 transition-all"
                        dropdown-trigger aria-expanded="false">
                        <i class="fa fa-bell cursor-pointer"></i>
                    </a>

                    <ul dropdown-menu
                        class="text-size-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                        <!-- add show class on dropdown open js -->
                        <li class="relative mb-2">
                            <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors"
                                href="javascript:;">
                                <div class="flex py-1">
                                    <div class="my-auto">
                                        <img src="./assets/img/team-2.jpg"
                                            class="text-size-sm mr-4 inline-flex h-9 w-9 max-w-none items-center justify-center rounded-xl text-white" />
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <h6 class="text-size-sm mb-1 font-normal leading-normal"><span
                                                class="font-semibold">New message</span> from Laur</h6>
                                        <p class="text-size-xs mb-0 leading-tight text-slate-400">
                                            <i class="fa fa-clock mr-1"></i>
                                            13 minutes ago
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="relative mb-2">
                            <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700"
                                href="javascript:;">
                                <div class="flex py-1">
                                    <div class="my-auto">
                                        <img src="./assets/img/small-logos/logo-spotify.svg"
                                            class="text-size-sm bg-gradient-dark-gray mr-4 inline-flex h-9 w-9 max-w-none items-center justify-center rounded-xl text-white" />
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <h6 class="text-size-sm mb-1 font-normal leading-normal"><span
                                                class="font-semibold">New album</span> by Travis Scott</h6>
                                        <p class="text-size-xs mb-0 leading-tight text-slate-400">
                                            <i class="fa fa-clock mr-1"></i>
                                            1 day
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="relative">
                            <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700"
                                href="javascript:;">
                                <div class="flex py-1">
                                    <div
                                        class="ease-nav-brand text-size-sm bg-gradient-slate my-auto mr-4 inline-flex h-9 w-9 items-center justify-center rounded-xl text-white transition-all duration-200">
                                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>credit-card</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(453.000000, 454.000000)">
                                                            <path class="color-background"
                                                                d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                opacity="0.593633743"></path>
                                                            <path class="color-background"
                                                                d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <h6 class="text-size-sm mb-1 font-normal leading-normal">Payment successfully
                                            completed</h6>
                                        <p class="text-size-xs mb-0 leading-tight text-slate-400">
                                            <i class="fa fa-clock mr-1"></i>
                                            2 days
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- end Navbar -->
