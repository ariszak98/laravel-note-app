@props(['user' => null, 'title' => null, 'heading' => null])


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f2f2f7] text-gray-900">

<!-- Header Component -->
<x-header />

<!-- Main Body -->
<main class="w-[95vw] mx-auto px-4 py-4">
    <div class="bg-white rounded-2xl shadow-sm w-full p-4 min-h-[85vh]">
        {{ $slot }}
    </div>
</main>

</body>
</html>
