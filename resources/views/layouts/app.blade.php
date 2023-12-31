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
    <style>
        .notify {
            z-index: 9999;
        }
    </style>
    @notifyCss
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
    <div id="app">
        @include('notify::components.notify')
        <!-- Sidebar Starts -->
        @include('layouts._sidebar')
        <!-- Sidebar Ends -->

        <!-- Wrapper Starts -->
        <div class="wrapper">
            <!-- Header Starts -->
            @include('layouts._header')
            <!-- Header Ends -->

            <!-- Page Content Starts -->
            <div class="content">
                <!-- Main Content Starts -->
                <main class="container flex-grow p-4 sm:p-6">
                    <!-- Page Title Starts -->
                    <x-page-title :title="$title ?? ''" :breadcrumb="$breadcrumb ?? ''" />
                    <!-- Page Title Ends -->

                    <div class="space-y-6">
                        {{ $slot }}
                    </div>
                </main>
                <!-- Main Content Ends -->

                <!-- Footer Starts -->
                @include('layouts._footer')
                <!-- Footer Ends -->
            </div>
            <!-- Page Content Ends -->
        </div>
        <!-- Wrapper Ends -->
    </div>
    @notifyJs
    @vite('resources/js/app.js')
    <x-scripts :js="$js ?? ''" />
</body>

</html>
