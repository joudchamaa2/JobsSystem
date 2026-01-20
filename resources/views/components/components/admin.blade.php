<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-950 text-gray-200">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <x-components.sidebar/>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        {{ $slot }}
    </main>

</div>

</body>
</html>
