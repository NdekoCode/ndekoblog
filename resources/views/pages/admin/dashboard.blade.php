@extends('layouts.app_admin')
@section('content')
    <!-- row 1 -->
    <div class="-mx-3 flex flex-wrap">
        <!-- card1 -->
        <div class="mb-6 w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl bg-white bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="-mx-3 flex flex-row">
                        <div class="w-2/3 max-w-full flex-none px-3">
                            <div>
                                <p class="text-size-sm mb-0 font-sans font-semibold leading-normal">Today's
                                    Money</p>
                                <h5 class="mb-0 font-bold">
                                    $53,000
                                    <span class="text-size-sm font-weight-bolder leading-normal text-lime-500">+55%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="basis-1/3 px-3 text-right">
                            <div class="bg-gradient-lime inline-block h-12 w-12 rounded-lg text-center">
                                <i class="ni ni-money-coins text-size-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card2 -->
        <div class="mb-6 w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl bg-white bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="-mx-3 flex flex-row">
                        <div class="w-2/3 max-w-full flex-none px-3">
                            <div>
                                <p class="text-size-sm mb-0 font-sans font-semibold leading-normal">Today's
                                    Users</p>
                                <h5 class="mb-0 font-bold">
                                    2,300
                                    <span class="text-size-sm font-weight-bolder leading-normal text-lime-500">+3%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="basis-1/3 px-3 text-right">
                            <div class="bg-gradient-lime inline-block h-12 w-12 rounded-lg text-center">
                                <i class="ni ni-world text-size-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card3 -->
        <div class="mb-6 w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl bg-white bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="-mx-3 flex flex-row">
                        <div class="w-2/3 max-w-full flex-none px-3">
                            <div>
                                <p class="text-size-sm mb-0 font-sans font-semibold leading-normal">New Clients
                                </p>
                                <h5 class="mb-0 font-bold">
                                    +3,462
                                    <span class="text-size-sm font-weight-bolder leading-normal text-red-600">-2%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="basis-1/3 px-3 text-right">
                            <div class="bg-gradient-lime inline-block h-12 w-12 rounded-lg text-center">
                                <i class="ni ni-paper-diploma text-size-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card4 -->
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl bg-white bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="-mx-3 flex flex-row">
                        <div class="w-2/3 max-w-full flex-none px-3">
                            <div>
                                <p class="text-size-sm mb-0 font-sans font-semibold leading-normal">Sales</p>
                                <h5 class="mb-0 font-bold">
                                    $103,430
                                    <span class="text-size-sm font-weight-bolder leading-normal text-lime-500">+5%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="basis-1/3 px-3 text-right">
                            <div class="bg-gradient-lime inline-block h-12 w-12 rounded-lg text-center">
                                <i class="ni ni-cart text-size-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cards row 3 -->

    <div class="-mx-3 mt-6 flex flex-wrap">
        <div class="mt-0 mb-6 w-full max-w-full px-3 lg:mb-0 lg:w-5/12 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="bg-gradient-dark-gray mb-4 rounded-xl py-4 pr-1">
                        <div>
                            <canvas id="chart-bars" height="170"></canvas>
                        </div>
                    </div>
                    <h6 class="mt-6 mb-0 ml-2">Active Users</h6>
                    <p class="text-size-sm ml-2 leading-normal">(<span class="font-bold">+23%</span>) than last
                        week</p>
                    <div class="mx-auto w-full max-w-screen-2xl rounded-xl px-6">
                        <div class="-mx-3 mt-0 flex flex-wrap">
                            <div class="mt-0 w-1/4 max-w-full flex-none py-4 pl-0 pr-3">
                                <div class="mb-2 flex">
                                    <div
                                        class="shadow-soft-2xl bg-gradient-lime mr-2 flex h-5 w-5 items-center justify-center rounded bg-center fill-current text-center text-neutral-900">
                                        <svg width="10px" height="10px" viewBox="0 0 40 44" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>document</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(154.000000, 300.000000)">
                                                            <path class="color-background"
                                                                d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                opacity="0.603585379"></path>
                                                            <path class="color-background"
                                                                d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <p class="text-size-xs mt-1 mb-0 font-semibold leading-tight">Users</p>
                                </div>
                                <h4 class="font-bold">36K</h4>
                                <div class="text-size-xs h-0.75 flex w-3/4 overflow-visible rounded-lg bg-gray-200">
                                    <div class="duration-600 ease-soft -mt-0.38 -ml-px flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded-lg bg-slate-700 text-center text-white transition-all"
                                        role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-0 w-1/4 max-w-full flex-none py-4 pl-0 pr-3">
                                <div class="mb-2 flex">
                                    <div
                                        class="shadow-soft-2xl bg-gradient-cyan mr-2 flex h-5 w-5 items-center justify-center rounded bg-center fill-current text-center text-neutral-900">
                                        <svg width="10px" height="10px" viewBox="0 0 40 40" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>spaceship</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(4.000000, 301.000000)">
                                                            <path class="color-background"
                                                                d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z">
                                                            </path>
                                                            <path class="color-background"
                                                                d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z">
                                                            </path>
                                                            <path class="color-background"
                                                                d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"
                                                                opacity="0.598539807"></path>
                                                            <path class="color-background"
                                                                d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"
                                                                opacity="0.598539807"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <p class="text-size-xs mt-1 mb-0 font-semibold leading-tight">Clicks</p>
                                </div>
                                <h4 class="font-bold">2m</h4>
                                <div class="text-size-xs h-0.75 flex w-3/4 overflow-visible rounded-lg bg-gray-200">
                                    <div class="duration-600 ease-soft -mt-0.38 w-9/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded-lg bg-slate-700 text-center text-white transition-all"
                                        role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-0 w-1/4 max-w-full flex-none py-4 pl-0 pr-3">
                                <div class="mb-2 flex">
                                    <div
                                        class="shadow-soft-2xl bg-gradient-orange mr-2 flex h-5 w-5 items-center justify-center rounded bg-center fill-current text-center text-neutral-900">
                                        <svg width="10px" height="10px" viewBox="0 0 43 36" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                                    <p class="text-size-xs mt-1 mb-0 font-semibold leading-tight">Sales</p>
                                </div>
                                <h4 class="font-bold">435$</h4>
                                <div class="text-size-xs h-0.75 flex w-3/4 overflow-visible rounded-lg bg-gray-200">
                                    <div class="duration-600 ease-soft -mt-0.38 w-3/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded-lg bg-slate-700 text-center text-white transition-all"
                                        role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-0 w-1/4 max-w-full flex-none py-4 pl-0 pr-3">
                                <div class="mb-2 flex">
                                    <div
                                        class="shadow-soft-2xl bg-gradient-red mr-2 flex h-5 w-5 items-center justify-center rounded bg-center fill-current text-center text-neutral-900">
                                        <svg width="10px" height="10px" viewBox="0 0 40 40" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>settings</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(304.000000, 151.000000)">
                                                            <polygon class="color-background" opacity="0.596981957"
                                                                points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                            </polygon>
                                                            <path class="color-background"
                                                                d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                                                opacity="0.596981957"></path>
                                                            <path class="color-background"
                                                                d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <p class="text-size-xs mt-1 mb-0 font-semibold leading-tight">Items</p>
                                </div>
                                <h4 class="font-bold">43</h4>
                                <div class="text-size-xs h-0.75 flex w-3/4 overflow-visible rounded-lg bg-gray-200">
                                    <div class="duration-600 ease-soft -mt-0.38 -ml-px flex h-1.5 w-1/2 flex-col justify-center overflow-hidden whitespace-nowrap rounded-lg bg-slate-700 text-center text-white transition-all"
                                        role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-0 w-full max-w-full px-3 lg:w-7/12 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                    <h6>Sales overview</h6>
                    <p class="text-size-sm leading-normal">
                        <i class="fa fa-arrow-up text-lime-500"></i>
                        <span class="font-semibold">4% more</span> in 2021
                    </p>
                </div>
                <div class="flex-auto p-4">
                    <div>
                        <canvas id="chart-line" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cards row 4 -->

    <div class="my-6 -mx-3 flex flex-wrap">
        <!-- card 1 -->

        <div class="mt-0 mb-6 w-full max-w-full px-3 md:mb-0 md:w-1/2 md:flex-none lg:w-2/3 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                    <div class="-mx-3 mt-0 flex flex-wrap">
                        <div class="mt-0 w-7/12 max-w-full flex-none px-3 lg:w-1/2 lg:flex-none">
                            <h6>Projects</h6>
                            <p class="text-size-sm mb-0 leading-normal">
                                <i class="fa fa-check text-cyan-500"></i>
                                <span class="ml-1 font-semibold">30 done</span>
                                this month
                            </p>
                        </div>
                        <div class="my-auto w-5/12 max-w-full flex-none px-3 text-right lg:w-1/2 lg:flex-none">
                            <div class="relative pr-6 lg:float-right">
                                <a dropdown-trigger class="cursor-pointer" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v text-slate-400"></i>
                                </a>
                                <p class="transform-dropdown-show hidden"></p>

                                <ul dropdown-menu
                                    class="z-100 text-size-sm transform-dropdown shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 -ml-34 before:text-5.5 pointer-events-none absolute top-0 m-0 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8']">
                                    <li class="relative">
                                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                            href="javascript:;">Action</a>
                                    </li>
                                    <li class="relative">
                                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                            href="javascript:;">Another action</a>
                                    </li>
                                    <li class="relative">
                                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                            href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-auto p-6 px-0 pb-2">
                    <div class="overflow-x-auto">
                        <table class="mb-0 w-full items-center border-gray-200 align-top text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="letter border-b-solid text-size-xxs whitespace-nowrap border-b border-b-gray-200 bg-transparent px-6 py-3 text-left align-middle font-bold uppercase tracking-normal text-slate-400 opacity-70">
                                        Companies</th>
                                    <th
                                        class="letter border-b-solid text-size-xxs whitespace-nowrap border-b border-b-gray-200 bg-transparent px-6 py-3 pl-2 text-left align-middle font-bold uppercase tracking-normal text-slate-400 opacity-70">
                                        Members</th>
                                    <th
                                        class="letter border-b-solid text-size-xxs whitespace-nowrap border-b border-b-gray-200 bg-transparent px-6 py-3 text-center align-middle font-bold uppercase tracking-normal text-slate-400 opacity-70">
                                        Budget</th>
                                    <th
                                        class="letter border-b-solid text-size-xxs whitespace-nowrap border-b border-b-gray-200 bg-transparent px-6 py-3 text-center align-middle font-bold uppercase tracking-normal text-slate-400 opacity-70">
                                        Completion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="whitespace-nowrap border-b bg-transparent p-2 align-middle">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img src="{{ url('/img/small-logos/logo-xd.svg') }}"
                                                    class="ease-soft-in-out text-size-sm mr-4 inline-flex h-9 w-9 items-center justify-center rounded-xl text-white transition-all duration-200"
                                                    alt="xd" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="text-size-sm mb-0 leading-normal">Soft UI XD Version
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap border-b bg-transparent p-2 align-middle">
                                        <div class="avatar-group mt-2">
                                            <a href="javascript:;"
                                                class="ease-soft-in-out text-size-xs relative z-20 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-solid border-white text-white transition-all duration-200 hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="{{ url('/img/team-1.jpg') }}" class="w-full rounded-full"
                                                    alt="team1" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="text-size-sm hidden rounded-lg bg-black px-2 py-1 text-white"
                                                role="tooltip">
                                                Ryan Tompson
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="ease-soft-in-out text-size-xs relative z-20 -ml-4 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-solid border-white text-white transition-all duration-200 hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="{{ url('/img/team-2.jpg') }}" class="w-full rounded-full"
                                                    alt="team2" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="text-size-sm hidden rounded-lg bg-black px-2 py-1 text-white"
                                                role="tooltip">
                                                Romina Hadid
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="ease-soft-in-out text-size-xs relative z-20 -ml-4 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-solid border-white text-white transition-all duration-200 hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="{{ url('/img/team-3.jpg') }}" class="w-full rounded-full"
                                                    alt="team3" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="text-size-sm hidden rounded-lg bg-black px-2 py-1 text-white"
                                                role="tooltip">
                                                Alexander Smith
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="ease-soft-in-out text-size-xs relative z-20 -ml-4 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-solid border-white text-white transition-all duration-200 hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="{{ url('/img/team-4.jpg') }}" class="w-full rounded-full"
                                                    alt="team4" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="text-size-sm hidden rounded-lg bg-black px-2 py-1 text-white"
                                                role="tooltip">
                                                Jessica Doe
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="text-size-sm whitespace-nowrap border-b bg-transparent p-2 text-center align-middle leading-normal">
                                        <span class="text-size-xs font-semibold leading-tight"> $14,000 </span>
                                    </td>
                                    <td class="whitespace-nowrap border-b bg-transparent p-2 align-middle">
                                        <div class="mx-auto w-3/4">
                                            <div>
                                                <div>
                                                    <span class="text-size-xs font-semibold leading-tight">60%</span>
                                                </div>
                                            </div>
                                            <div
                                                class="text-size-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                <div class="duration-600 ease-soft bg-gradient-cyan -mt-0.38 -ml-px flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                    role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap border-b bg-transparent p-2 align-middle">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img src="{{ url('/img/small-logos/logo-atlassian.svg') }}"
                                                    class="ease-soft-in-out text-size-sm mr-4 inline-flex h-9 w-9 items-center justify-center rounded-xl text-white transition-all duration-200"
                                                    alt="atlassian" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="text-size-sm mb-0 leading-normal">Add Progress Track
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap border-b bg-transparent p-2 align-middle">
                                        <div class="avatar-group mt-2">
                                            <a href="javascript:;"
                                                class="ease-soft-in-out text-size-xs relative z-20 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-solid border-white text-white transition-all duration-200 hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="{{ url('/img/team-2.jpg') }}" class="w-full rounded-full"
                                                    alt="team5" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="text-size-sm hidden rounded-lg bg-black px-2 py-1 text-white"
                                                role="tooltip">
                                                Romina Hadid
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="ease-soft-in-out text-size-xs relative z-20 -ml-4 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-solid border-white text-white transition-all duration-200 hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="{{ url('/img/team-4.jpg') }}" class="w-full rounded-full"
                                                    alt="team6" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="text-size-sm hidden rounded-lg bg-black px-2 py-1 text-white"
                                                role="tooltip">
                                                Jessica Doe
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="text-size-sm whitespace-nowrap border-b bg-transparent p-2 text-center align-middle leading-normal">
                                        <span class="text-size-xs font-semibold leading-tight"> $3,000 </span>
                                    </td>
                                    <td class="whitespace-nowrap border-b bg-transparent p-2 align-middle">
                                        <div class="mx-auto w-3/4">
                                            <div>
                                                <div>
                                                    <span class="text-size-xs font-semibold leading-tight">10%</span>
                                                </div>
                                            </div>
                                            <div
                                                class="text-size-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                <div class="duration-600 ease-soft bg-gradient-cyan -mt-0.38 w-1/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                    role="progressbar" aria-valuenow="10" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap border-b bg-transparent p-2 align-middle">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img src="{{ url('/img/small-logos/logo-slack.svg') }}"
                                                    class="ease-soft-in-out text-size-sm mr-4 inline-flex h-9 w-9 items-center justify-center rounded-xl text-white transition-all duration-200"
                                                    alt="team7" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="text-size-sm mb-0 leading-normal">Fix Platform
                                                    Errors
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap border-b bg-transparent p-2 align-middle">
                                        <div class="avatar-group mt-2">
                                            <a href="javascript:;"
                                                class="ease-soft-in-out text-size-xs relative z-20 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-solid border-white text-white transition-all duration-200 hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="{{ url('/img/team-3.jpg') }}" class="w-full rounded-full"
                                                    alt="team8" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="text-size-sm hidden rounded-lg bg-black px-2 py-1 text-white"
                                                role="tooltip">
                                                Romina Hadid
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="ease-soft-in-out text-size-xs relative z-20 -ml-4 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-solid border-white text-white transition-all duration-200 hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="{{ url('/img/team-1.jpg') }}" class="w-full rounded-full"
                                                    alt="team9" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="text-size-sm hidden rounded-lg bg-black px-2 py-1 text-white"
                                                role="tooltip">
                                                Jessica Doe
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="text-size-sm whitespace-nowrap border-b bg-transparent p-2 text-center align-middle leading-normal">
                                        <span class="text-size-xs font-semibold leading-tight"> Not set </span>
                                    </td>
                                    <td class="whitespace-nowrap border-b bg-transparent p-2 align-middle">
                                        <div class="mx-auto w-3/4">
                                            <div>
                                                <div>
                                                    <span class="text-size-xs font-semibold leading-tight">100%</span>
                                                </div>
                                            </div>
                                            <div
                                                class="text-size-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                <div class="duration-600 ease-soft bg-gradient-lime -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                    role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap border-b bg-transparent p-2 align-middle">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img src="{{ url('/img/small-logos/logo-spotify.svg') }}"
                                                    class="ease-soft-in-out text-size-sm mr-4 inline-flex h-9 w-9 items-center justify-center rounded-xl text-white transition-all duration-200"
                                                    alt="spotify" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="text-size-sm mb-0 leading-normal">Launch our Mobile
                                                    App</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap border-b bg-transparent p-2 align-middle">
                                        <div class="avatar-group mt-2">
                                            <a href="javascript:;"
                                                class="ease-soft-in-out text-size-xs relative z-20 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-solid border-white text-white transition-all duration-200 hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="{{ url('/img/team-4.jpg') }}" class="w-full rounded-full"
                                                    alt="user1" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="text-size-sm hidden rounded-lg bg-black px-2 py-1 text-white"
                                                role="tooltip">
                                                Ryan Tompson
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="ease-soft-in-out text-size-xs relative z-20 -ml-4 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-solid border-white text-white transition-all duration-200 hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="{{ url('/img/team-3.jpg') }}" class="w-full rounded-full"
                                                    alt="user2" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="text-size-sm hidden rounded-lg bg-black px-2 py-1 text-white"
                                                role="tooltip">
                                                Romina Hadid
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="ease-soft-in-out text-size-xs relative z-20 -ml-4 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-solid border-white text-white transition-all duration-200 hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="{{ url('/img/team-4.jpg') }}" class="w-full rounded-full"
                                                    alt="user3" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="text-size-sm hidden rounded-lg bg-black px-2 py-1 text-white"
                                                role="tooltip">
                                                Alexander Smith
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="ease-soft-in-out text-size-xs relative z-20 -ml-4 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-solid border-white text-white transition-all duration-200 hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="{{ url('/img/team-1.jpg') }}" class="w-full rounded-full"
                                                    alt="user4" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="text-size-sm hidden rounded-lg bg-black px-2 py-1 text-white"
                                                role="tooltip">
                                                Jessica Doe
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="text-size-sm whitespace-nowrap border-b bg-transparent p-2 text-center align-middle leading-normal">
                                        <span class="text-size-xs font-semibold leading-tight"> $20,500 </span>
                                    </td>
                                    <td class="whitespace-nowrap border-b bg-transparent p-2 align-middle">
                                        <div class="mx-auto w-3/4">
                                            <div>
                                                <div>
                                                    <span class="text-size-xs font-semibold leading-tight">100%</span>
                                                </div>
                                            </div>
                                            <div
                                                class="text-size-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                <div class="duration-600 ease-soft bg-gradient-lime -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                    role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap border-b bg-transparent p-2 align-middle">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img src="{{ url('/img/small-logos/logo-jira.svg') }}"
                                                    class="ease-soft-in-out text-size-sm mr-4 inline-flex h-9 w-9 items-center justify-center rounded-xl text-white transition-all duration-200"
                                                    alt="jira" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="text-size-sm mb-0 leading-normal">Add the New
                                                    Pricing
                                                    Page</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap border-b bg-transparent p-2 align-middle">
                                        <div class="avatar-group mt-2">
                                            <a href="javascript:;"
                                                class="ease-soft-in-out text-size-xs relative z-20 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-solid border-white text-white transition-all duration-200 hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="{{ url('/img/team-4.jpg') }}" class="w-full rounded-full"
                                                    alt="user5" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="text-size-sm hidden rounded-lg bg-black px-2 py-1 text-white"
                                                role="tooltip">
                                                Ryan Tompson
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="text-size-sm whitespace-nowrap border-b bg-transparent p-2 text-center align-middle leading-normal">
                                        <span class="text-size-xs font-semibold leading-tight"> $500 </span>
                                    </td>
                                    <td class="whitespace-nowrap border-b bg-transparent p-2 align-middle">
                                        <div class="mx-auto w-3/4">
                                            <div>
                                                <div>
                                                    <span class="text-size-xs font-semibold leading-tight">25%</span>
                                                </div>
                                            </div>
                                            <div
                                                class="text-size-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                <div class="duration-600 ease-soft bg-gradient-cyan -mt-0.38 -ml-px flex h-1.5 w-1/4 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                    role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="25"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap border-0 bg-transparent p-2 align-middle">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img src="{{ url('/img/small-logos/logo-invision.svg') }}"
                                                    class="ease-soft-in-out text-size-sm mr-4 inline-flex h-9 w-9 items-center justify-center rounded-xl text-white transition-all duration-200"
                                                    alt="invision" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="text-size-sm mb-0 leading-normal">Redesign New
                                                    Online
                                                    Shop</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap border-0 bg-transparent p-2 align-middle">
                                        <div class="avatar-group mt-2">
                                            <a href="javascript:;"
                                                class="ease-soft-in-out text-size-xs relative z-20 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-solid border-white text-white transition-all duration-200 hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="{{ url('/img/team-1.jpg') }}" class="w-full rounded-full"
                                                    alt="user6" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="text-size-sm hidden rounded-lg bg-black px-2 py-1 text-white"
                                                role="tooltip">
                                                Ryan Tompson
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="ease-soft-in-out text-size-xs relative z-20 -ml-4 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-solid border-white text-white transition-all duration-200 hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="{{ url('/img/team-4.jpg') }}" class="w-full rounded-full"
                                                    alt="user7" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="text-size-sm hidden rounded-lg bg-black px-2 py-1 text-white"
                                                role="tooltip">
                                                Jessica Doe
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="text-size-sm whitespace-nowrap border-0 bg-transparent p-2 text-center align-middle leading-normal">
                                        <span class="text-size-xs font-semibold leading-tight"> $2,000 </span>
                                    </td>
                                    <td class="whitespace-nowrap border-0 bg-transparent p-2 align-middle">
                                        <div class="mx-auto w-3/4">
                                            <div>
                                                <div>
                                                    <span class="text-size-xs font-semibold leading-tight">40%</span>
                                                </div>
                                            </div>
                                            <div
                                                class="text-size-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                <div class="duration-600 ease-soft bg-gradient-cyan -mt-0.38 -ml-px flex h-1.5 w-2/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                    role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                    aria-valuemax="40"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- card 2 -->

        <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none lg:w-1/3 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                    <h6>Orders overview</h6>
                    <p class="text-size-sm leading-normal">
                        <i class="fa fa-arrow-up text-lime-500"></i>
                        <span class="font-semibold">24%</span> this month
                    </p>
                </div>
                <div class="flex-auto p-4">
                    <div
                        class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                        <div class="relative mb-4 mt-0 after:clear-both after:table after:content-['']">
                            <span
                                class="w-6.5 h-6.5 text-size-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                <i
                                    class="ni ni-bell-55 leading-pro bg-gradient-lime relative z-10 bg-clip-text fill-transparent text-transparent"></i>
                            </span>
                            <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                <h6 class="text-size-sm mb-0 font-semibold leading-normal text-slate-700">
                                    $2400,
                                    Design changes</h6>
                                <p class="text-size-xs mt-1 mb-0 font-semibold leading-tight text-slate-400">22
                                    DEC 7:20 PM</p>
                            </div>
                        </div>
                        <div class="relative mb-4 after:clear-both after:table after:content-['']">
                            <span
                                class="w-6.5 h-6.5 text-size-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                <i
                                    class="ni ni-html5 leading-pro bg-gradient-red relative z-10 bg-clip-text fill-transparent text-transparent"></i>
                            </span>
                            <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                <h6 class="text-size-sm mb-0 font-semibold leading-normal text-slate-700">New
                                    order #1832412</h6>
                                <p class="text-size-xs mt-1 mb-0 font-semibold leading-tight text-slate-400">21
                                    DEC 11 PM</p>
                            </div>
                        </div>
                        <div class="relative mb-4 after:clear-both after:table after:content-['']">
                            <span
                                class="w-6.5 h-6.5 text-size-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                <i
                                    class="ni ni-cart leading-pro bg-gradient-cyan relative z-10 bg-clip-text fill-transparent text-transparent"></i>
                            </span>
                            <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                <h6 class="text-size-sm mb-0 font-semibold leading-normal text-slate-700">
                                    Server
                                    payments for April</h6>
                                <p class="text-size-xs mt-1 mb-0 font-semibold leading-tight text-slate-400">21
                                    DEC 9:34 PM</p>
                            </div>
                        </div>
                        <div class="relative mb-4 after:clear-both after:table after:content-['']">
                            <span
                                class="w-6.5 h-6.5 text-size-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                <i
                                    class="ni ni-credit-card leading-pro bg-gradient-orange relative z-10 bg-clip-text fill-transparent text-transparent"></i>
                            </span>
                            <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                <h6 class="text-size-sm mb-0 font-semibold leading-normal text-slate-700">New
                                    card added for order #4395133</h6>
                                <p class="text-size-xs mt-1 mb-0 font-semibold leading-tight text-slate-400">20
                                    DEC 2:20 AM</p>
                            </div>
                        </div>
                        <div class="relative mb-4 after:clear-both after:table after:content-['']">
                            <span
                                class="w-6.5 h-6.5 text-size-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                <i
                                    class="ni ni-key-25 leading-pro bg-gradient-lime relative z-10 bg-clip-text fill-transparent text-transparent"></i>
                            </span>
                            <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                <h6 class="text-size-sm mb-0 font-semibold leading-normal text-slate-700">
                                    Unlock
                                    packages for development</h6>
                                <p class="text-size-xs mt-1 mb-0 font-semibold leading-tight text-slate-400">18
                                    DEC 4:54 AM</p>
                            </div>
                        </div>
                        <div class="relative mb-0 after:clear-both after:table after:content-['']">
                            <span
                                class="w-6.5 h-6.5 text-size-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                                <i
                                    class="ni ni-money-coins leading-pro bg-gradient-dark-gray relative z-10 bg-clip-text fill-transparent text-transparent"></i>
                            </span>
                            <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                                <h6 class="text-size-sm mb-0 font-semibold leading-normal text-slate-700">New
                                    order #9583120</h6>
                                <p class="text-size-xs mt-1 mb-0 font-semibold leading-tight text-slate-400">17
                                    DEC</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
