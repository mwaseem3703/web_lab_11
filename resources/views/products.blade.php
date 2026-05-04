@extends('layout')
@section('content')
<div class="container mx-auto px-6 py-16">
    <div class="mb-12 text-center">
        <h2 class="text-3xl font-bold text-slate-900">Enterprise Solutions</h2>
        <p class="text-slate-500">Tools designed to empower your development workflow.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="group bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition duration-300">
            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-6 font-bold">01</div>
            <h3 class="text-xl font-bold mb-3 group-hover:text-blue-600 transition">Nexus Analytics</h3>
            <p class="text-slate-600 text-sm leading-relaxed mb-6">
                Real-time tracking for your web applications with deep-dive user behavior insights.
            </p>
            <span class="text-blue-600 font-semibold text-sm cursor-pointer underline-offset-4 hover:underline">Learn More →</span>
        </div>

        <!-- Card 2 -->
        <div class="group bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition duration-300">
            <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center mb-6 font-bold">02</div>
            <h3 class="text-xl font-bold mb-3 group-hover:text-indigo-600 transition">SecureVault</h3>
            <p class="text-slate-600 text-sm leading-relaxed mb-6">
                End-to-end encrypted storage solution for enterprise sensitive data and credentials.
            </p>
            <span class="text-indigo-600 font-semibold text-sm cursor-pointer underline-offset-4 hover:underline">Learn More →</span>
        </div>

        <!-- Card 3 -->
        <div class="group bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition duration-300">
            <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mb-6 font-bold">03</div>
            <h3 class="text-xl font-bold mb-3 group-hover:text-purple-600 transition">API Bridge</h3>
            <p class="text-slate-600 text-sm leading-relaxed mb-6">
                Seamlessly connect third-party services with our low-latency integration middleware.
            </p>
            <span class="text-purple-600 font-semibold text-sm cursor-pointer underline-offset-4 hover:underline">Learn More →</span>
        </div>
    </div>
</div>
@endsection