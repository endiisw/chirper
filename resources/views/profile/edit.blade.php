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

    <section class="grid grid-cols-1">
        <div class="card">
            <div class="card-body space-y-2">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>
    </section>

    <section class="grid grid-cols-1">
        <div class="card">
            <div class="card-body space-y-2">
                @include('profile.partials.update-password-form')
            </div>
        </div>
    </section>

    <section class="grid grid-cols-1">
        <div class="card">
            <div class="card-body space-y-2">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </section>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
