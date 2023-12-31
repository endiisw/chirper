<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./images/logo-small.svg" type="image/svg+xml" />
    <title>{{ config('app.name') }}</title>
    <meta name="description"
        content="Admin Toolkit is a modern admin dashboard template based on Tailwindcss. It comes with a variety of useful ui components and pre-built pages" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    @vite('resources/scss/app.scss')
    <script>
        if (
            localStorage.getItem('theme') === 'dark' ||
            (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>

<body>
    <div id="app" class="flex min-h-screen w-full items-center justify-center">
        <!-- Main Content Starts -->
        <main class="container flex-grow p-4 sm:p-6">
            <div class="card mx-auto w-full max-w-md">
                <div class="card-body px-10 py-12">
                    <div class="flex flex-col items-center justify-center mb-4">
                        {{-- <img src="./images/logo-small.svg" alt="logo" class="h-[50px]" /> --}}
                        <x-application-logo class="h-[50px] fill-current text-gray-500" />
                        <h5 class="mt-4">{{ config('app.name') }}</h5>
                        <p class="text-sm text-slate-500 dark:text-slate-400">{{ config('app.tagline') }}</p>
                    </div>

                    {{ $slot }}
                </div>
            </div>
        </main>
        <!-- Main Content Ends -->
    </div>
    @vite('resources/js/app.js')
</body>

</html>
