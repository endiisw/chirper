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

    <div class="grid grid-cols-1 gap-6 lg:grid-cols-1">
        <section class="flex flex-col gap-8 lg:col-span-2">
            <!-- General  -->
            <div class="rounded-primary bg-white p-6 shadow-sm dark:bg-slate-800">
                <h5 class="m-0 p-0 text-xl font-semibold text-slate-700 dark:text-slate-200">General</h5>
                <p class="mb-4 p-0 text-sm font-normal text-slate-400">
                    Customize the basic information of your product
                </p>
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
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
                    </div>
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                        <div class="py-2">
                            <x-input-label for="password" value="Password" class="label-required" />
                            <x-text-input id="password" name="password" type="password" class="mt-1"
                                placeholder="Password" />
                            <x-input-error :messages="$errors->userAdd->get('password')" class="mt-1" />
                        </div>
                        <div class="py-2">
                            <x-input-label for="password_confirmation" value="Konfirmasi Password"
                                class="label-required" />
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                                class="mt-1" placeholder="Konfirmasi Password" />
                            <x-input-error :messages="$errors->userAdd->get('password_confirmation')" class="mt-1" />
                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-4 mt-4">
                        <button type="cancel"
                            class="btn border border-slate-300 text-slate-500 dark:border-slate-700 dark:text-slate-300">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </section>
    </div>

</x-app-layout>
