<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus Digital | Innovations</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900">
    <!-- Modern Navbar -->
    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold bg-linear-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                NEXUS.
            </div>
            <div class="hidden md:flex space-x-2 font-medium text-slate-600">
                <a href="/" class="bg-blue-600 text-white px-5 py-2 rounded-full hover:bg-blue-700 transition">Home</a>
                <a href="/profile" class="bg-blue-600 text-white px-5 py-2 rounded-full hover:bg-blue-700 transition">Profile</a>
                <a href="/clients" class="bg-blue-600 text-white px-5 py-2 rounded-full hover:bg-blue-700 transition">Clients</a>
                <a href="/products" class="bg-blue-600 text-white px-5 py-2 rounded-full hover:bg-blue-700 transition">Products</a>
                <a href="/contact" class="bg-blue-600 text-white px-5 py-2 rounded-full hover:bg-blue-700 transition">Contact</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-slate-900 text-slate-400 py-12 mt-20">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2026 Nexus Digital Systems. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>