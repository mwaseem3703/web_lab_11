@extends('layout')
@section('content')
    <!-- Hero Section -->
    <header class="relative py-20 px-6 text-center bg-gradient-to-b from-blue-50 to-white">
        <h1 class="text-5xl md:text-7xl font-extrabold text-slate-900 mb-6 tracking-tight">
            Design the Future <br><span class="text-blue-600">With Nexus Digital</span>
        </h1>
        <p class="text-lg text-slate-600 max-w-2xl mx-auto mb-10">
            We build high-performance web applications and digital experiences that help brands scale globally.
        </p>
        <div class="flex justify-center gap-4">
            <a href="/products" class="bg-slate-900 text-white px-8 py-3 rounded-lg font-semibold hover:bg-slate-800 shadow-lg transition">View Products</a>
            <a href="/profile" class="bg-white border border-slate-200 px-8 py-3 rounded-lg font-semibold hover:bg-slate-50 transition">Our Story</a>
        </div>
    </header>

    <!-- Stats Section -->
    <section class="container mx-auto px-6 py-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <h3 class="text-4xl font-bold text-blue-600">99%</h3>
                <p class="text-slate-500 font-medium">Uptime</p>
            </div>
            <div>
                <h3 class="text-4xl font-bold text-blue-600">250+</h3>
                <p class="text-slate-500 font-medium">Global Clients</p>
            </div>
            <div>
                <h3 class="text-4xl font-bold text-blue-600">12M</h3>
                <p class="text-slate-500 font-medium">Users Reached</p>
            </div>
            <div>
                <h3 class="text-4xl font-bold text-blue-600">24/7</h3>
                <p class="text-slate-500 font-medium">Support</p>
            </div>
        </div>
    </section>
@endsection