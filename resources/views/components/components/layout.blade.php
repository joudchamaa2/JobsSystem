<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<x-components.navbar/>
<body class="bg-gray-950 min-h-screen">

    <div class="min-h-screen flex items-center justify-center px-4">
        {{ $slot }}
    </div>
<x-components.footer/>
</body>
</html>






