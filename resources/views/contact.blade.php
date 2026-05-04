@extends('layout')
@section('content')
<div class="container mx-auto px-6 py-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
        
        <!-- Left Side: Form -->
        <div class="bg-white p-8 md:p-12 rounded-3xl shadow-2xl border border-slate-100">
            <h2 class="text-3xl font-bold text-slate-900 mb-2">Let’s Start a Project</h2>
            <p class="text-slate-500 mb-8">Fill out the form and our team will get back to you within 24 hours.</p>
            
            <form action="#" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Full Name</label>
                        <input type="text" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="John Doe">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                        <input type="email" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="john@example.com">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Subject</label>
                    <select class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition">
                        <option>Web Development</option>
                        <option>Mobile App</option>
                        <option>UI/UX Design</option>
                        <option>Consultation</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Message</label>
                    <textarea rows="5" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition" placeholder="Tell us about your project..."></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white font-bold py-4 rounded-xl hover:bg-blue-700 shadow-lg shadow-blue-200 transition-all transform hover:-translate-y-1">
                    Send Inquiry
                </button>
            </form>
        </div>

        <!-- Right Side: Info Cards -->
        <div class="flex flex-col justify-center">
            <div class="space-y-8">
                <!-- Card 1 -->
                <div class="flex items-start gap-6 p-6 rounded-2xl bg-blue-50 border border-blue-100">
                    <div class="bg-blue-600 p-3 rounded-lg text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900">Email us</h4>
                        <p class="text-slate-600">hello@nexusdigital.com</p>
                        <p class="text-slate-600">support@nexusdigital.com</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex items-start gap-6 p-6 rounded-2xl bg-indigo-50 border border-indigo-100">
                    <div class="bg-indigo-600 p-3 rounded-lg text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900">Our Office</h4>
                        <p class="text-slate-600">123 Innovation Drive</p>
                        <p class="text-slate-600">Silicon Valley, CA 94025</p>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="pt-8 flex gap-4">
                    <div class="w-10 h-10 bg-slate-200 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition cursor-pointer">In</div>
                    <div class="w-10 h-10 bg-slate-200 rounded-full flex items-center justify-center hover:bg-sky-500 hover:text-white transition cursor-pointer">X</div>
                    <div class="w-10 h-10 bg-slate-200 rounded-full flex items-center justify-center hover:bg-pink-600 hover:text-white transition cursor-pointer">Ig</div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection