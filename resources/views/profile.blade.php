@extends('layout')
@section('content')
<div class="container mx-auto px-6 py-12">
    <!-- Profile Header -->
    <div class="relative bg-gradient-to-r from-blue-700 to-indigo-800 rounded-3xl p-8 md:p-16 overflow-hidden shadow-2xl mb-12">
        <div class="relative z-10 flex flex-col md:flex-row items-center gap-8">
            <!-- Profile Image Placeholder -->
            <div class="w-32 h-32 md:w-48 md:h-48 rounded-2xl bg-white/20 backdrop-blur-md border-2 border-white/30 flex items-center justify-center text-white text-5xl font-bold shadow-inner">
                MW
            </div>
            <div class="text-center md:text-left">
                <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-2 tracking-tight">M. Waseem</h2>
                <p class="text-blue-100 text-lg md:text-xl font-medium">Lead Software Engineer & Full-Stack Architect</p>
                <div class="mt-4 flex flex-wrap justify-center md:justify-start gap-3">
                    <span class="bg-white/10 text-white text-xs px-3 py-1 rounded-full border border-white/20 uppercase tracking-widest">Laravel</span>
                    <span class="bg-white/10 text-white text-xs px-3 py-1 rounded-full border border-white/20 uppercase tracking-widest">React.js</span>
                    <span class="bg-white/10 text-white text-xs px-3 py-1 rounded-full border border-white/20 uppercase tracking-widest">Next.js</span>
                </div>
            </div>
        </div>
        
        <!-- Abstract Background Shape -->
        <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        <!-- Biography Section -->
        <div class="lg:col-span-2 space-y-8">
            <section>
                <h3 class="text-2xl font-bold text-slate-900 mb-4 border-l-4 border-blue-600 pl-4">Our Vision</h3>
                <p class="text-slate-600 leading-relaxed text-lg">
                    I am a dedicated Software Engineer specializing in building scalable web applications and high-performance digital tools. With a deep focus on **Modern JavaScript Frameworks** and **Laravel Ecosystems**, I bridge the gap between complex backend logic and intuitive user experiences.
                </p>
            </section>

            <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-6 bg-white rounded-2xl border border-slate-100 shadow-sm">
                    <h4 class="font-bold text-blue-600 mb-2">Web Development</h4>
                    <p class="text-sm text-slate-500">Crafting responsive, high-speed landing pages and SaaS platforms using Tailwind CSS and Next.js.</p>
                </div>
                <div class="p-6 bg-white rounded-2xl border border-slate-100 shadow-sm">
                    <h4 class="font-bold text-indigo-600 mb-2">Systems Programming</h4>
                    <p class="text-sm text-slate-500">Expertise in low-level systems, multi-threading, and process management for optimized performance.</p>
                </div>
            </section>
        </div>

        <!-- Sidebar Info -->
        <div class="space-y-6">
            <div class="bg-slate-900 rounded-2xl p-6 text-white shadow-xl">
                <h4 class="text-xl font-bold mb-6 italic">"Pushing the boundaries of what's possible with code."</h4>
                <div class="space-y-4">
                    <div class="flex justify-between text-sm">
                        <span class="text-slate-400">Experience</span>
                        <span class="font-semibold">5+ Years</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-slate-400">Location</span>
                        <span class="font-semibold">Vehari, Pakistan</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-slate-400">Availability</span>
                        <span class="text-green-400 font-semibold">Available for Projects</span>
                    </div>
                </div>
                <button class="w-full mt-8 bg-blue-600 py-3 rounded-xl font-bold hover:bg-blue-500 transition">
                    Download CV
                </button>
            </div>
        </div>
    </div>
</div>
@endsection