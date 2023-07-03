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

                <x-primary-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'add-user')">
                    <i data-feather="plus" height="1rem" width="1rem"></i>
                    <span class="hidden sm:inline-block">Add User</span>
                </x-primary-button>
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
                                    {{-- <div class="avatar avatar-circle">
                                                <img src="./images/avatar1.png" class="avatar-img" alt="avatar-img" />
                                            </div> --}}
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
                                {{-- <x-danger-button class="btn-sm" x-data="{{ $item->id }}"
                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
                                    <i data-feather="trash" height="1rem" width="1rem"></i>
                                </x-danger-button> --}}
                                {{-- <x-confirm-delete :action="route('users.destroy', $item->id)" /> --}}


                                {{-- <form method="POST" action="{{ route('users.destroy', $item) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-danger">
                                        <i data-feather="trash" height="1rem" width="1rem"></i>
                                    </button>
                                </form> --}}
                                <form method="POST" action="{{ route('users.destroy', $item) }}">
                                    @csrf
                                    @method('delete')
                                    <x-dropdown-link :href="route('users.destroy', $item)"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </form>
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
    <x-modal name="add-user" :show="$errors->userAdd->isNotEmpty()" focusable>
        <div class="modal-header">
            <div class="flex items-center justify-between">
                <h6>Basic Modal</h6>
                <button type="button"
                    class="btn btn-plain-secondary dark:text-slate-300 dark:hover:bg-slate-700 dark:focus:bg-slate-700"
                    x-on:click="$dispatch('close')">
                    <i data-feather="x" width="1.5rem" height="1.5rem"></i>
                </button>
            </div>
        </div>
        <form method="post" action="{{ route('users.store') }}">
            @csrf
            <div class="modal-body">
                <div class="py-2">
                    <x-input-label for="name" value="Nama Lengkap" class="label-required" />
                    <x-text-input id="name" name="name" type="text" class="mt-1"
                        placeholder="Nama Lengkap" />
                    <x-input-error :messages="$errors->userAdd->get('name')" class="mt-1" />
                </div>
                <div class="py-2">
                    <x-input-label for="email" value="Email" class="label-required" />
                    <x-text-input id="email" name="email" type="email" class="mt-1"
                        placeholder="Email" />
                    <x-input-error :messages="$errors->userAdd->get('email')" class="mt-1" />
                </div>
                <div class="py-2">
                    <x-input-label for="password" value="Password" class="label-required" />
                    <x-text-input id="password" name="password" type="password" class="mt-1"
                        placeholder="Password" />
                    <x-input-error :messages="$errors->userAdd->get('password')" class="mt-1" />
                </div>
            </div>
            <div class="modal-footer mt-2">
                <div class="flex items-center justify-end gap-4">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('Cancel') }}
                    </x-secondary-button>

                    <x-primary-button class="ml-3">
                        Save
                    </x-primary-button>
                </div>
            </div>
        </form>
    </x-modal>
    {{-- <x-modal name="confirm-user-deletion" :show="" focusable>
        <form method="post" action="{{ route('users.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal> --}}
</x-app-layout>
