<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@100;200;300;400;500;600;&display=swap"
        rel="stylesheet">
    <title>Pixel Position</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white">
<div class="px-10 ">
    <nav class="flex justify-between items-center py-4 border-b-2 border-white/10 mb-10">
        <div>
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Pixel Position Logo" class="h-10 w-auto">
            </a>
        </div>
        <div class="space-x-6 font-semibold">
            <a href="#">Jobs</a>
            <a href="#">Careers</a>
            <a href="#">Companies</a>
            <a href="#">Salaries</a>
        </div>
        <div><a href="#">Post a Job</a></div>
    </nav>
    <main class="max-w-[986px] mx-auto ">
        {{ $slot }}
    </main>
</div>
</body>
</html>
