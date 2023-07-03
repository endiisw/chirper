<x-app-layout>
    <x-slot name="title">
        Data Pengguna
    </x-slot>

    <x-slot name="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Pengaturan</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Pengguna</a>
            </li>
        </ol>
    </x-slot>

    <div class="flex flex-col gap-4">
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <div>
                    <div class="flex items-center gap-2 text-base font-medium">
                        <i width="1em" height="1em" data-feather="check-circle"></i>
                        <span>Sukses</span>
                    </div>
                    <div class="mt-3 font-normal">
                        <p>
                            {!! session('success') !!}
                        </p>
                    </div>
                </div>
                <button class="alert-dismiss" type="button">
                    <i width="16" height="16" data-feather="x"></i>
                </button>
            </div>
        @endif
    </div>

    <div class="space-y-4">
        <!-- User Header Starts -->
        <div class="flex flex-col items-center justify-between gap-y-4 md:flex-row md:gap-y-0">
            <!-- User Search Starts -->
            <form
                class="group flex h-10 w-full items-center rounded-primary border border-transparent bg-white shadow-sm focus-within:border-primary-500 focus-within:ring-1 focus-within:ring-inset focus-within:ring-primary-500 dark:border-transparent dark:bg-slate-800 dark:focus-within:border-primary-500 md:w-72">
                <div class="flex h-full items-center px-2">
                    <i class="h-4 text-slate-400 group-focus-within:text-primary-500" data-feather="search"></i>
                </div>
                <input
                    class="h-full w-full border-transparent bg-transparent px-0 text-sm placeholder-slate-400 placeholder:text-sm focus:border-transparent focus:outline-none focus:ring-0"
                    type="text" placeholder="Cari..." />
            </form>
            <!-- User Search Ends -->

            <!-- User Action Starts -->
            <div class="flex w-full items-center justify-between gap-x-4 md:w-auto">
                <div class="flex items-center gap-x-4">
                    <div class="dropdown" data-placement="bottom-end">
                        <div class="dropdown-toggle">
                            <button type="button" class="btn bg-white font-medium shadow-sm dark:bg-slate-800">
                                <i class="w-4" data-feather="filter"></i>
                                <span class="hidden sm:inline-block">Filter</span>
                                <i class="w-4" data-feather="chevron-down"></i>
                            </button>
                        </div>
                        <div class="dropdown-content w-72 !overflow-visible">
                            <ul class="dropdown-list space-y-4 p-4">
                                <li class="dropdown-list-item">
                                    <h2 class="my-1 text-sm font-medium">Occupation</h2>
                                    <select class="tom-select w-full" autocomplete="off">
                                        <option value="">Select a Occupation</option>
                                        <option value="1">Frontend Developer</option>
                                        <option value="2">Full Stack Developer</option>
                                        <option value="3">Web Developer</option>
                                    </select>
                                </li>

                                <li class="dropdown-list-item">
                                    <h2 class="my-1 text-sm font-medium">Status</h2>
                                    <select class="select">
                                        <option value="">Select to Status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                        <option value="2">Prospect</option>
                                        <option value="2">Suspended</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button class="btn bg-white font-medium shadow-sm dark:bg-slate-800">
                        <i class="h-4" data-feather="upload"></i>
                        <span class="hidden sm:inline-block">Export</span>
                    </button>
                </div>

                <a href="{{ route('users.create') }}" class="btn btn-primary">
                    <i data-feather="plus" height="1rem" width="1rem"></i>
                    <span class="hidden sm:inline-block">Add User</span>
                </a>
            </div>
            <!-- User Action Ends -->
        </div>
        <!-- User Header Ends -->
        <div class="table-responsive whitespace-nowrap rounded-primary">
            <table class="table">
                <thead>
                    <tr>
                        <th class="w-[5%]">
                            <input class="checkbox" type="checkbox" data-check-all
                                data-check-all-target=".user-checkbox" />
                        </th>
                        <th>Nama</th>
                        <th>Hak Akses</th>
                        <th>Verifikasi?</th>
                        <th>Tgl. Dibuat</th>
                        <th>Tgl. Diubah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $item)
                        <tr>
                            <td>
                                <input class="checkbox user-checkbox" type="checkbox" />
                            </td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <div>
                                        <p class="whitespace-nowrap font-medium">{{ $item->name }}</p>
                                        <p class="text-xs text-slate-400">{{ $item->email }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="whitespace-nowrap">
                                <div class="badge badge-info">todo:hak-akses</div>
                            </td>
                            <td class="whitespace-nowrap">
                                @if ($item->email_verified_at == null)
                                    <div class="badge badge-danger">Belum</div>
                                @else
                                    <div class="badge badge-success">Ya</div>
                                @endif
                            </td>
                            <td class="whitespace-nowrap">{{ $item->created_at->diffForHumans() }}</td>
                            <td class="whitespace-nowrap">{{ $item->updated_at->diffForHumans() }}</td>
                            <td>
                                [todo:action]
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-danger font-semibold">Tidak ada data.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
