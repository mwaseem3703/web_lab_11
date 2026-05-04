@extends('layout')
@section('content')
<div class="container mx-auto px-6 py-20">
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-4xl font-bold text-slate-900 mb-4">Trusted by Industry Leaders</h2>
        <p class="text-slate-600 text-lg">We’ve partnered with over 250+ companies to deliver cutting-edge software solutions and digital transformations.</p>
    </div>

    <!-- Client Logo Grid -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-0.5 bg-slate-200 border border-slate-200 rounded-2xl overflow-hidden shadow-xl">
        @php
            $clients = [
                ['name' => 'Starlight Inc', 'industry' => 'FinTech'],
                ['name' => 'Quantum Systems', 'industry' => 'AI Research'],
                ['name' => 'EcoFlow', 'industry' => 'Sustainability'],
                ['name' => 'Velocity Media', 'industry' => 'Marketing'],
                ['name' => 'CloudScale', 'industry' => 'SaaS'],
                ['name' => 'Apex Logistics', 'industry' => 'Transport'],
                ['name' => 'Horizon Health', 'industry' => 'Medical Tech'],
                ['name' => 'Urban Forge', 'industry' => 'Architecture']
            ];
        @endphp

        @foreach($clients as $client)
        <div class="bg-white p-10 flex flex-col items-center justify-center group hover:bg-blue-50 transition-colors duration-300">
            <div class="text-xl font-bold text-slate-300 group-hover:text-blue-600 transition-colors mb-2 uppercase tracking-widest">
                {{ $client['name'] }}
            </div>
            <span class="text-xs font-semibold text-slate-400 opacity-0 group-hover:opacity-100 transition-opacity uppercase">
                {{ $client['industry'] }}
            </span>
        </div>
        @endforeach
    </div>

    <!-- Testimonial Highlight -->
    <div class="mt-20 bg-blue-600 rounded-3xl p-12 text-center text-white">
        <p class="text-2xl italic font-light mb-6">"Nexus Digital didn't just build our app; they redefined how we interact with our customers. Their engineering standards are world-class."</p>
        <h4 class="font-bold text-lg">— Sarah Jenkins, CTO of Starlight Inc</h4>
    </div>
</div>
@endsection