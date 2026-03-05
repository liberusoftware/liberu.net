@extends('layouts.guest')

@section('content')
<div class="w-full">
    {{-- Hero Section --}}
    <section class="relative overflow-hidden py-20 sm:py-28 px-4 sm:px-6 lg:px-8">
        <div class="absolute inset-0 bg-gradient-to-br from-neutral-900 via-neutral-800 to-neutral-900 opacity-80 pointer-events-none"></div>
        <div class="relative max-w-5xl mx-auto text-center">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('build/images/logo.png') }}" alt="Liberu Software" class="h-16 sm:h-20 drop-shadow-lg" />
            </div>
            <h1 class="text-4xl sm:text-6xl md:text-7xl font-extrabold tracking-tight mb-4">
                <span class="text-[#f5c518] drop-shadow-lg">Liberu</span>
                <span class="text-white"> Software</span>
            </h1>
            <p class="text-xl sm:text-2xl text-neutral-300 font-light mb-6">
                Enterprise-grade Laravel applications, open source &amp; ready to deploy
            </p>
            <p class="text-neutral-400 max-w-2xl mx-auto mb-8 text-base sm:text-lg">
                We build modern, scalable Laravel-based platforms covering accounting, CRM, e-commerce, genealogy, and more—all under a unified, open-source ecosystem.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="https://github.com/liberusoftware" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 bg-[#f5c518] hover:bg-yellow-400 text-neutral-900 font-semibold px-6 py-3 rounded-lg transition-colors shadow-lg">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                    </svg>
                    View on GitHub
                </a>
                <a href="https://liberu.co.uk" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 border border-neutral-500 hover:border-neutral-300 text-neutral-300 hover:text-white font-semibold px-6 py-3 rounded-lg transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9 9 0 100-18 9 9 0 000 18zM3.6 9h16.8M3.6 15h16.8M12 3c2.5 3 2.5 15 0 18" />
                    </svg>
                    liberu.co.uk
                </a>
            </div>
        </div>
    </section>

    {{-- Projects Grid --}}
    <section class="py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <h2 class="text-2xl sm:text-3xl font-bold text-white text-center mb-2">Our Projects</h2>
        <p class="text-neutral-400 text-center mb-12">Open-source Laravel platforms for every business need</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Accounting --}}
            <div class="group bg-neutral-800 hover:bg-neutral-700 border border-neutral-700 hover:border-[#f5c518]/50 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-[#f5c518]/5">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-2xl">📊</span>
                    <h3 class="text-lg font-bold text-white">Accounting</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4">Full-featured financial management for modern businesses.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Invoicing, expenses &amp; payments tracking</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Chart of accounts management</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Multi-currency &amp; tax management</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Financial reports &amp; dashboards</li>
                </ul>
                <a href="https://github.com/liberu-accounting/accounting-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-sm text-neutral-400 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- Automation --}}
            <div class="group bg-neutral-800 hover:bg-neutral-700 border border-neutral-700 hover:border-[#f5c518]/50 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-[#f5c518]/5">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-2xl">⚙️</span>
                    <h3 class="text-lg font-bold text-white">Automation</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4">Streamline business processes with powerful workflow automation.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Visual workflow &amp; process builder</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Event-driven triggers &amp; actions</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Task scheduling &amp; automation</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>API integrations &amp; webhooks</li>
                </ul>
                <a href="https://github.com/liberu-automation/automation-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-sm text-neutral-400 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- Billing --}}
            <div class="group bg-neutral-800 hover:bg-neutral-700 border border-neutral-700 hover:border-[#f5c518]/50 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-[#f5c518]/5">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-2xl">💳</span>
                    <h3 class="text-lg font-bold text-white">Billing</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4">Subscription and recurring billing management platform.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Subscription &amp; recurring billing</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Multiple payment gateway support</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Automated invoice generation</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Dunning &amp; failed payment handling</li>
                </ul>
                <a href="https://github.com/liberu-billing/billing-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-sm text-neutral-400 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- Boilerplate --}}
            <div class="group bg-neutral-800 hover:bg-neutral-700 border border-neutral-700 hover:border-[#f5c518]/50 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-[#f5c518]/5">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-2xl">🚀</span>
                    <h3 class="text-lg font-bold text-white">Boilerplate</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4">Production-ready Laravel starter kit to accelerate development.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Authentication &amp; role-based access</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Filament admin panel included</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Multi-tenancy support built-in</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Modern Tailwind CSS frontend</li>
                </ul>
                <a href="https://github.com/liberusoftware/boilerplate" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-sm text-neutral-400 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- Browser Game --}}
            <div class="group bg-neutral-800 hover:bg-neutral-700 border border-neutral-700 hover:border-[#f5c518]/50 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-[#f5c518]/5">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-2xl">🎮</span>
                    <h3 class="text-lg font-bold text-white">Browser Game</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4">Real-time multiplayer browser game engine and platform.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Real-time multiplayer gameplay</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Player profiles &amp; leaderboards</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>In-game economy &amp; marketplace</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Achievement &amp; reward system</li>
                </ul>
                <a href="https://github.com/liberu-browser-game/browser-game-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-sm text-neutral-400 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- CMS --}}
            <div class="group bg-neutral-800 hover:bg-neutral-700 border border-neutral-700 hover:border-[#f5c518]/50 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-[#f5c518]/5">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-2xl">📝</span>
                    <h3 class="text-lg font-bold text-white">CMS</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4">Flexible content management system for any type of website.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Custom content types &amp; fields</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Media library &amp; asset management</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>SEO tools &amp; optimization</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Multi-language content support</li>
                </ul>
                <a href="https://github.com/liberu-cms/cms-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-sm text-neutral-400 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- Control Panel --}}
            <div class="group bg-neutral-800 hover:bg-neutral-700 border border-neutral-700 hover:border-[#f5c518]/50 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-[#f5c518]/5">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-2xl">🖥️</span>
                    <h3 class="text-lg font-bold text-white">Control Panel</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4">Server and application management control panel.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Server &amp; application management</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>One-click deployments</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Domain &amp; SSL certificate management</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Real-time resource monitoring</li>
                </ul>
                <a href="https://github.com/liberu-control-panel/control-panel-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-sm text-neutral-400 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- CRM --}}
            <div class="group bg-neutral-800 hover:bg-neutral-700 border border-neutral-700 hover:border-[#f5c518]/50 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-[#f5c518]/5">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-2xl">🤝</span>
                    <h3 class="text-lg font-bold text-white">CRM</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4">Customer relationship management for growing teams.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Contact &amp; lead management</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Visual sales pipeline tracking</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Email &amp; activity logging</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Reports &amp; performance analytics</li>
                </ul>
                <a href="https://github.com/liberu-crm/crm-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-sm text-neutral-400 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- E-commerce --}}
            <div class="group bg-neutral-800 hover:bg-neutral-700 border border-neutral-700 hover:border-[#f5c518]/50 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-[#f5c518]/5">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-2xl">🛒</span>
                    <h3 class="text-lg font-bold text-white">E-commerce</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4">Full-featured online store and e-commerce platform.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Product catalog &amp; inventory management</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Multiple payment gateway support</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Order &amp; shipping management</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Discount &amp; coupon system</li>
                </ul>
                <a href="https://github.com/liberu-ecommerce/ecommerce-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-sm text-neutral-400 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- Genealogy --}}
            <div class="group bg-neutral-800 hover:bg-neutral-700 border border-neutral-700 hover:border-[#f5c518]/50 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-[#f5c518]/5">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-2xl">🌳</span>
                    <h3 class="text-lg font-bold text-white">Genealogy</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4">Family tree and genealogy research platform.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Interactive family tree builder</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>DNA data integration</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Photo &amp; document archives</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>GEDCOM import &amp; export</li>
                </ul>
                <a href="https://github.com/liberu-genealogy/genealogy-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-sm text-neutral-400 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- Maintenance --}}
            <div class="group bg-neutral-800 hover:bg-neutral-700 border border-neutral-700 hover:border-[#f5c518]/50 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-[#f5c518]/5">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-2xl">🔧</span>
                    <h3 class="text-lg font-bold text-white">Maintenance</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4">Maintenance management system for assets and equipment.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Work order management</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Preventive maintenance scheduling</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Asset &amp; equipment tracking</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Mobile-friendly field access</li>
                </ul>
                <a href="https://github.com/liberu-maintenance/maintenance-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-sm text-neutral-400 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- Real Estate --}}
            <div class="group bg-neutral-800 hover:bg-neutral-700 border border-neutral-700 hover:border-[#f5c518]/50 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-[#f5c518]/5">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-2xl">🏠</span>
                    <h3 class="text-lg font-bold text-white">Real Estate</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4">Complete real estate management and listing platform.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Property listing &amp; management</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Lead &amp; client tracking</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Appointment &amp; viewing scheduling</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Market analytics &amp; reporting</li>
                </ul>
                <a href="https://github.com/liberu-real-estate/real-estate-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-sm text-neutral-400 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

            {{-- Social Network --}}
            <div class="group bg-neutral-800 hover:bg-neutral-700 border border-neutral-700 hover:border-[#f5c518]/50 rounded-xl p-6 flex flex-col transition-all duration-200 hover:shadow-xl hover:shadow-[#f5c518]/5">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-2xl">🌐</span>
                    <h3 class="text-lg font-bold text-white">Social Network</h3>
                </div>
                <p class="text-neutral-400 text-sm mb-4">Build your own social networking platform with ease.</p>
                <ul class="text-neutral-300 text-sm space-y-1.5 mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>User profiles &amp; connections</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>News feed &amp; social posts</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Groups &amp; community features</li>
                    <li class="flex items-start gap-2"><span class="text-[#f5c518] mt-0.5">✦</span>Real-time messaging &amp; notifications</li>
                </ul>
                <a href="https://github.com/liberu-social-network/social-network-laravel" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 text-sm text-neutral-400 hover:text-[#f5c518] transition-colors font-medium">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    View on GitHub
                </a>
            </div>

        </div>
    </section>

    {{-- Open Source Banner --}}
    <section class="py-12 px-4 sm:px-6 lg:px-8 border-t border-neutral-800">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-xl sm:text-2xl font-bold text-white mb-3">Open Source &amp; Community Driven</h2>
            <p class="text-neutral-400 mb-6">All our projects are freely available on GitHub. Contributions, issues, and feedback are always welcome.</p>
            <a href="https://github.com/liberusoftware" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center gap-2 bg-neutral-700 hover:bg-neutral-600 text-white font-medium px-6 py-3 rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                </svg>
                github.com/liberusoftware
            </a>
        </div>
    </section>
</div>
@endsection

