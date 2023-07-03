<x-app-layout>
    <x-slot name="title">
        Profil
    </x-slot>

    <x-slot name="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Profil</a>
            </li>
        </ol>
    </x-slot>



    <section class="grid grid-cols-1 gap-6 lg:grid-cols-4">
        <section class="col-span-1 flex h-min w-full flex-col gap-6 lg:sticky lg:top-20">
            <div class="card">
                <div class="card-body flex flex-col items-center">
                    <div class="relative my-2 h-24 w-24 rounded-full">
                        <img src="{{ auth()->user()->getAvatarUrl() }}" alt="avatar-img" id="user-image"
                            class="h-full w-full rounded-full" />
                        <label for="upload-avatar"
                            class="absolute bottom-0 right-0 flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-slate-50 p-2 dark:bg-slate-900">
                            <span class="text-slate-600 dark:text-slate-300">
                                <i class="w-full" data-feather="camera"></i>
                            </span>
                            <input type="file" accept="image/jpeg, image/png, image/jpg" class="hidden"
                                id="upload-avatar" />
                        </label>
                    </div>
                    <h2 class="text-[16px] font-medium text-slate-700 dark:text-slate-200">{{ $user->name }}</h2>
                    <p class="text-sm font-normal tracking-tight text-slate-400">{{ $user->email }}</p>
                    {{-- <div class="badge badge-soft-success my-3 inline-block px-4">Active</div> --}}
                </div>
            </div>
        </section>
        <section class="col-span-1 flex w-full flex-1 flex-col gap-6 lg:col-span-3 lg:w-auto">
            <div class="card">
                <div class="card-body space-y-2">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="card">
                <div class="card-body space-y-2">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            {{-- <div class="card">
                <div class="card-body space-y-2">
                    @include('profile.partials.delete-user-form')
                </div>
            </div> --}}
        </section>
    </section>
</x-app-layout>
