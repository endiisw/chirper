<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>

    <x-slot name="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
        </ol>
    </x-slot>

    <!-- Overview Section Start -->
    <section class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-4">
        <!-- Product Views  -->
        <div class="card">
            <div class="card-body flex items-center gap-4">
                <div
                    class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-primary-500 bg-opacity-20 text-primary-500">
                    <i data-feather="box" class="text-3xl"></i>
                </div>
                <div class="flex flex-1 flex-col gap-1">
                    <p class="text-sm tracking-wide text-slate-500">Product Views</p>
                    <div class="flex flex-wrap items-baseline justify-between gap-2">
                        <h4>$24,92</h4>
                        <span class="flex items-center text-xs font-medium text-success-500"><i class="h-3 w-3"
                                stroke-width="3px" data-feather="arrow-up-right"></i>2.2%</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Sold  -->
        <div class="card">
            <div class="card-body flex items-center gap-4">
                <div
                    class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-success-500 bg-opacity-20 text-success-500">
                    <i class="bx bx-dollar-circle text-3xl"></i>
                </div>
                <div class="flex flex-1 flex-col gap-1">
                    <p class="text-sm tracking-wide text-slate-500">Product Sold</p>
                    <div class="flex flex-wrap items-baseline justify-between gap-2">
                        <h4>8,430</h4>
                        <span class="flex items-center text-xs font-medium text-danger-500">
                            <i class="h-3 w-3" stroke-width="3px" data-feather="arrow-down-left"></i> 0.5%</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Likes  -->
        <div class="card">
            <div class="card-body flex items-center gap-4">
                <div
                    class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-warning-500 bg-opacity-20 text-warning-500">
                    <i class="ti ti-thumb-up text-3xl"></i>
                </div>
                <div class="flex flex-1 flex-col gap-1">
                    <p class="text-sm tracking-wide text-slate-500">Total Likes</p>
                    <div class="flex flex-wrap items-baseline justify-between gap-2">
                        <h4>46,256</h4>
                        <span class="flex items-center text-xs font-medium text-success-500">
                            <i class="h-3 w-3" stroke-width="3px" data-feather="arrow-up-right"></i> 1.2%</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Conversation Rate  -->
        <div class="card">
            <div class="card-body flex items-center gap-4">
                <div
                    class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-info-500 bg-opacity-20 text-info-500">
                    <i class="ti ti-message-2-cog text-3xl"></i>
                </div>
                <div class="flex flex-1 flex-col gap-1">
                    <p class="text-sm tracking-wide text-slate-500">Conversation</p>
                    <div class="flex flex-wrap items-baseline justify-between gap-2">
                        <h4>$200,56</h4>
                        <span class="flex items-center text-xs font-medium text-success-500">
                            <i class="h-3 w-3" stroke-width="3px" data-feather="arrow-up-right"></i> 3.2%</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Overview Section End -->

    <section class="grid grid-cols-1">
        <div class="card">
            <div class="card-body space-y-2">
                <!-- Header  -->
                <div class="flex w-full justify-between">
                    <h6>Top Sellers</h6>
                    <div class="dropdown" data-placement="bottom-end">
                        <div class="dropdown-toggle">
                            <i class="ti ti-dots-vertical text-lg text-slate-500"></i>
                        </div>
                        <div class="dropdown-content w-[160px]">
                            <ul class="dropdown-list">
                                <li class="dropdown-list-item">
                                    <a href="javascript:void(0)" class="dropdown-link gap-2"> Action </a>
                                </li>
                                <li class="dropdown-list-item">
                                    <a href="javascript:void(0)" class="dropdown-link gap-2"> Another Action </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Seller Table  -->
                <div class="table-responsive">
                    <table class="table min-w-[43rem]">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Product</th>
                                <th>Country</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Revenue</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <div class="avatar avatar-circle">
                                            <img src="./images/avatar1.png" class="avatar-img" alt="avatar-img" />
                                        </div>
                                        <div>
                                            <p class="whitespace-nowrap font-medium">Wade Warren</p>
                                            <p class="text-xs text-slate-400">Apple Store Online</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap">07 August</td>
                                <td class="whitespace-nowrap">T-shirt</td>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <span class="fi fi-ae h-5 w-8"></span>
                                        <p class="whitespace-nowrap uppercase">UAE</p>
                                    </div>
                                </td>
                                <td>2865</td>
                                <td>$5.08,876</td>
                                <td>$27,187</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <div class="avatar avatar-circle">
                                            <img src="./images/avatar2.png" class="avatar-img" alt="avatar-img" />
                                        </div>
                                        <div>
                                            <p class="whitespace-nowrap font-medium">Afrad Bhuyian</p>
                                            <p class="text-xs text-slate-400">Acme Corporation</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap">25 Mar</td>
                                <td class="whitespace-nowrap">Earings</td>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <span class="fi fi-us h-5 w-8"></span>
                                        <p class="whitespace-nowrap uppercase">USA</p>
                                    </div>
                                </td>
                                <td>36654</td>
                                <td>$3.06,867</td>
                                <td>$23,89</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <div class="avatar avatar-circle">
                                            <img src="./images/avatar3.png" class="avatar-img" alt="avatar-img" />
                                        </div>
                                        <div>
                                            <p class="whitespace-nowrap font-medium">Robert Fox</p>
                                            <p class="text-xs text-slate-400">Omega Solutions</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap">14 February</td>
                                <td>1 phone</td>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <span class="fi fi-gb h-5 w-8"></span>
                                        <p class="whitespace-nowrap uppercase">UK</p>
                                    </div>
                                </td>
                                <td>4253</td>
                                <td>$1.06,657</td>
                                <td>$56,99</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <div class="avatar avatar-circle">
                                            <img src="./images/avatar4.png" class="avatar-img" alt="avatar-img" />
                                        </div>
                                        <div>
                                            <p class="whitespace-nowrap font-medium">John William</p>
                                            <p class="text-xs text-slate-400">Phoenix Electronics</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap">17 January</td>
                                <td>Watches</td>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <span class="fi fi-de h-5 w-8"></span>
                                        <p class="whitespace-nowrap uppercase">GER</p>
                                    </div>
                                </td>
                                <td>3532</td>
                                <td>$3.54,450</td>
                                <td>$7,67,657</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <div class="avatar avatar-circle">
                                            <img src="./images/avatar5.png" class="avatar-img" alt="avatar-img" />
                                        </div>
                                        <div>
                                            <p class="whitespace-nowrap font-medium">Ahmed Imtiaz</p>
                                            <p class="text-xs text-slate-400">Thunderbolt Inc</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap">11 November</td>
                                <td class="whitespace-nowrap">Shoes</td>
                                <td>
                                    <div class="flex items-center gap-2">
                                        <span class="fi fi-br h-5 w-8"></span>
                                        <p class="whitespace-nowrap uppercase">BRA</p>
                                    </div>
                                </td>
                                <td>9076</td>
                                <td>$9.54,450</td>
                                <td>$78,01</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
