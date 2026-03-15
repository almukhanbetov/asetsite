<nav class="fixed top-0 left-0 right-0 z-50 bg-[#080c14]/80 border-b border-[rgba(0,229,255,0.1)]">
    <div class="w-full px-6 sm:px-10 lg:px-16 h-16 flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <div class="relative w-8 h-8">
                <div class="absolute inset-0 bg-[#00e5ff]/20 rounded-lg rotate-45"></div>
                <svg class="relative z-10 w-8 h-8" viewBox="0 0 32 32" fill="none">
                    <rect x="6" y="6" width="8" height="8" rx="1" fill="#00e5ff" opacity=".9" />
                    <rect x="18" y="6" width="8" height="8" rx="1" fill="#ff6b35" opacity=".9" />
                    <rect x="6" y="18" width="8" height="8" rx="1" fill="#ff6b35" opacity=".9" />
                    <rect x="18" y="18" width="8" height="8" rx="1" fill="#00e5ff" opacity=".9" />
                    <line x1="10" y1="14" x2="10" y2="18" stroke="#00e5ff"
                        stroke-width="1.5" />
                    <line x1="22" y1="14" x2="22" y2="18" stroke="#ff6b35"
                        stroke-width="1.5" />
                    <line x1="14" y1="10" x2="18" y2="10" stroke="#00e5ff"
                        stroke-width="1.5" />
                    <line x1="14" y1="22" x2="18" y2="22" stroke="#ff6b35"
                        stroke-width="1.5" />
                </svg>
            </div>
            <span class="font-display font-bold text-xl tracking-tight">
                Electro<span class="text-[#00e5ff]">Pro</span>
            </span>
        </a>

        <!-- Desktop nav -->
        <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-400">
            <a href="#" class="hover:text-[#00e5ff] transition-colors">Главная</a>
            <a href="#" class="hover:text-[#00e5ff] transition-colors">Услуги</a>
            <a href="#" class="hover:text-[#00e5ff] transition-colors">Проекты</a>
            <a href="#" class="hover:text-[#00e5ff] transition-colors">О нас</a>
            <a href="#" class="hover:text-[#00e5ff] transition-colors">Контакты</a>
            <a href="{{ route('login') }}" class="hover:text-[#00e5ff] transition-colors">Войти</a>
            <a href="{{ route('register') }}" class="hover:text-[#00e5ff] transition-colors">Регистрация</a>
            <a href="contact.html"
                class="px-4 py-2 rounded-lg border border-[#00e5ff]/40 text-[#00e5ff] hover:bg-[#00e5ff]/10 transition-all">
                Связаться
            </a>
        </div>

        <!-- Mobile burger -->
        <button id="burger" class="md:hidden w-9 h-9 flex flex-col justify-center items-center gap-1.5">
            <span class="w-6 h-0.5 bg-slate-300 transition-all" id="b1"></span>
            <span class="w-6 h-0.5 bg-slate-300 transition-all" id="b2"></span>
            <span class="w-6 h-0.5 bg-slate-300 transition-all" id="b3"></span>
        </button>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-[rgba(0,229,255,0.1)] bg-[#080c14]/95">
        <div class="px-4 py-4 flex flex-col gap-4 text-sm font-medium text-slate-400">
            <a href="index.html" class="hover:text-[#00e5ff] transition-colors" onclick="closeMenu()">Главная</a>
            <a href="services.html" class="hover:text-[#00e5ff] transition-colors" onclick="closeMenu()">Услуги</a>
            <a href="project.html" class="hover:text-[#00e5ff] transition-colors" onclick="closeMenu()">Проекты</a>
            <a href="about.html" class="hover:text-[#00e5ff] transition-colors" onclick="closeMenu()">О нас</a>
            <a href="contact.html" class="hover:text-[#00e5ff] transition-colors" onclick="closeMenu()">Контакты</a>
            {{-- <a href="contact.html" class="text-[#00e5ff]" onclick="closeMenu()">Связаться</a> --}}
        </div>
    </div>
</nav>
