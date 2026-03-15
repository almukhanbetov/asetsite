 @extends('layouts.app')
 @section('content')
     <!-- ═══════════════ SERVICES ═══════════════ -->
     <section id="services" class="py-24 relative">
         <div class="w-full px-6 sm:px-10 lg:px-16">
             <div class="reveal mb-16">
                 <p class="text-[#00e5ff] text-sm font-medium tracking-widest uppercase mb-3">Что мы делаем</p>
                 <h2 class="font-display text-4xl sm:text-5xl font-bold accent-line">Наши услуги</h2>
             </div>

             <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                 <!-- Card 1 -->
                 <div class="reveal service-card rounded-2xl p-7 glow-box cursor-default">
                     <div class="service-icon w-14 h-14 rounded-xl flex items-center justify-center mb-5">
                         <svg class="w-7 h-7 text-[#00e5ff]" fill="none" stroke="currentColor" stroke-width="1.8"
                             viewBox="0 0 24 24">
                             <path
                                 d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18" />
                         </svg>
                     </div>
                     <h3 class="font-display text-xl font-bold mb-3">Разработка микросхем</h3>
                     <p class="text-slate-400 text-sm leading-relaxed">Проектирование и производство печатных плат,
                         программирование микроконтроллеров, создание управляющих модулей под любые задачи.</p>
                     <div class="mt-5 flex flex-wrap gap-2">
                         <span class="px-2.5 py-1 rounded-md bg-[#00e5ff]/10 text-[#00e5ff] text-xs">Arduino</span>
                         <span class="px-2.5 py-1 rounded-md bg-[#00e5ff]/10 text-[#00e5ff] text-xs">ESP32</span>
                         <span class="px-2.5 py-1 rounded-md bg-[#00e5ff]/10 text-[#00e5ff] text-xs">STM32</span>
                         <span class="px-2.5 py-1 rounded-md bg-[#00e5ff]/10 text-[#00e5ff] text-xs">PCB Design</span>
                     </div>
                 </div>

                 <!-- Card 2 -->
                 <div class="reveal service-card rounded-2xl p-7 glow-box cursor-default">
                     <div class="service-icon w-14 h-14 rounded-xl flex items-center justify-center mb-5">
                         <svg class="w-7 h-7 text-[#ff6b35]" fill="none" stroke="currentColor" stroke-width="1.8"
                             viewBox="0 0 24 24">
                             <path d="M8 11V7a4 4 0 118 0v4m-4 8v-4M3 11h18v10a2 2 0 01-2 2H5a2 2 0 01-2-2V11z" />
                         </svg>
                     </div>
                     <h3 class="font-display text-xl font-bold mb-3">Шлагбаумы и СКУД</h3>
                     <p class="text-slate-400 text-sm leading-relaxed">Установка, настройка и ремонт шлагбаумов, ворот,
                         систем контроля доступа. Интеграция с мобильным приложением и удалённое управление.</p>
                     <div class="mt-5 flex flex-wrap gap-2">
                         <span class="px-2.5 py-1 rounded-md bg-[#ff6b35]/10 text-[#ff6b35] text-xs">Came</span>
                         <span class="px-2.5 py-1 rounded-md bg-[#ff6b35]/10 text-[#ff6b35] text-xs">FAAC</span>
                         <span class="px-2.5 py-1 rounded-md bg-[#ff6b35]/10 text-[#ff6b35] text-xs">BFT</span>
                         <span class="px-2.5 py-1 rounded-md bg-[#ff6b35]/10 text-[#ff6b35] text-xs">Кастомные</span>
                     </div>
                 </div>

                 <!-- Card 3 -->
                 <div class="reveal service-card rounded-2xl p-7 glow-box cursor-default">
                     <div class="service-icon w-14 h-14 rounded-xl flex items-center justify-center mb-5">
                         <svg class="w-7 h-7 text-[#00e5ff]" fill="none" stroke="currentColor" stroke-width="1.8"
                             viewBox="0 0 24 24">
                             <path
                                 d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                         </svg>
                     </div>
                     <h3 class="font-display text-xl font-bold mb-3">Автоматические мойки</h3>
                     <p class="text-slate-400 text-sm leading-relaxed">Обслуживание и ремонт автоматических моечных
                         комплексов. Замена плат управления, калибровка датчиков, настройка программ мойки.</p>
                     <div class="mt-5 flex flex-wrap gap-2">
                         <span class="px-2.5 py-1 rounded-md bg-[#00e5ff]/10 text-[#00e5ff] text-xs">Wortex</span>
                         <span class="px-2.5 py-1 rounded-md bg-[#00e5ff]/10 text-[#00e5ff] text-xs">Karcher</span>
                         <span class="px-2.5 py-1 rounded-md bg-[#00e5ff]/10 text-[#00e5ff] text-xs">WashTec</span>
                     </div>
                 </div>

                 <!-- Card 4 -->
                 <div class="reveal service-card rounded-2xl p-7 glow-box cursor-default">
                     <div class="service-icon w-14 h-14 rounded-xl flex items-center justify-center mb-5">
                         <svg class="w-7 h-7 text-[#ff6b35]" fill="none" stroke="currentColor" stroke-width="1.8"
                             viewBox="0 0 24 24">
                             <path d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                         </svg>
                     </div>
                     <h3 class="font-display text-xl font-bold mb-3">Мобильное управление</h3>
                     <p class="text-slate-400 text-sm leading-relaxed">Собственное Android-приложение для дистанционного
                         управления шлагбаумами и мойками через смартфон. Работает через Wi-Fi и GSM.</p>
                     <div class="mt-5 flex flex-wrap gap-2">
                         <span class="px-2.5 py-1 rounded-md bg-[#ff6b35]/10 text-[#ff6b35] text-xs">Android</span>
                         <span class="px-2.5 py-1 rounded-md bg-[#ff6b35]/10 text-[#ff6b35] text-xs">Wi-Fi</span>
                         <span class="px-2.5 py-1 rounded-md bg-[#ff6b35]/10 text-[#ff6b35] text-xs">GSM</span>
                     </div>
                 </div>

                 <!-- Card 5 -->
                 <div class="reveal service-card rounded-2xl p-7 glow-box cursor-default">
                     <div class="service-icon w-14 h-14 rounded-xl flex items-center justify-center mb-5">
                         <svg class="w-7 h-7 text-[#00e5ff]" fill="none" stroke="currentColor" stroke-width="1.8"
                             viewBox="0 0 24 24">
                             <path
                                 d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                             <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                         </svg>
                     </div>
                     <h3 class="font-display text-xl font-bold mb-3">Техобслуживание</h3>
                     <p class="text-slate-400 text-sm leading-relaxed">Плановое и экстренное обслуживание оборудования.
                         Диагностика неисправностей, замена компонентов, профилактика отказов.</p>
                     <div class="mt-5 flex flex-wrap gap-2">
                         <span class="px-2.5 py-1 rounded-md bg-[#00e5ff]/10 text-[#00e5ff] text-xs">Диагностика</span>
                         <span class="px-2.5 py-1 rounded-md bg-[#00e5ff]/10 text-[#00e5ff] text-xs">Ремонт</span>
                         <span class="px-2.5 py-1 rounded-md bg-[#00e5ff]/10 text-[#00e5ff] text-xs">Гарантия</span>
                     </div>
                 </div>

                 <!-- Card 6 -->
                 <div class="reveal service-card rounded-2xl p-7 glow-box cursor-default">
                     <div class="service-icon w-14 h-14 rounded-xl flex items-center justify-center mb-5">
                         <svg class="w-7 h-7 text-[#ff6b35]" fill="none" stroke="currentColor" stroke-width="1.8"
                             viewBox="0 0 24 24">
                             <path
                                 d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                         </svg>
                     </div>
                     <h3 class="font-display text-xl font-bold mb-3">Гарантия и поддержка</h3>
                     <p class="text-slate-400 text-sm leading-relaxed">Гарантия на все выполненные работы и установленное
                         оборудование. Оперативная техподдержка 24/7 по телефону и мессенджерам.</p>
                     <div class="mt-5 flex flex-wrap gap-2">
                         <span class="px-2.5 py-1 rounded-md bg-[#ff6b35]/10 text-[#ff6b35] text-xs">12 мес.</span>
                         <span class="px-2.5 py-1 rounded-md bg-[#ff6b35]/10 text-[#ff6b35] text-xs">24/7</span>
                         <span class="px-2.5 py-1 rounded-md bg-[#ff6b35]/10 text-[#ff6b35] text-xs">Выезд</span>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- ═══════════════ PROJECTS SLIDER ═══════════════ -->
     <section id="projects" class="py-24 bg-[#0a0f1a] relative overflow-hidden">
         <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#00e5ff]/30 to-transparent">
         </div>
         <div
             class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#ff6b35]/20 to-transparent">
         </div>

         <div class="w-full px-6 sm:px-10 lg:px-16">
             <div class="reveal flex items-end justify-between mb-12 flex-wrap gap-4">
                 <div>
                     <p class="text-[#00e5ff] text-sm font-medium tracking-widest uppercase mb-3">Портфолио</p>
                     <h2 class="font-display text-4xl sm:text-5xl font-bold accent-line">Наши проекты</h2>
                 </div>
                 <!-- Slider arrows -->
                 <div class="flex gap-3">
                     <button id="prev"
                         class="slide-btn w-11 h-11 rounded-xl border border-[rgba(0,229,255,0.2)] flex items-center justify-center text-slate-400 hover:text-[#080c14]">
                         <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                             <path d="M15 19l-7-7 7-7" />
                         </svg>
                     </button>
                     <button id="next"
                         class="slide-btn w-11 h-11 rounded-xl border border-[rgba(0,229,255,0.2)] flex items-center justify-center text-slate-400 hover:text-[#080c14]">
                         <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                             <path d="M9 5l7 7-7 7" />
                         </svg>
                     </button>
                 </div>
             </div>

             <!-- Slider container -->
             <div class="overflow-hidden rounded-2xl" id="slider-outer">
                 <div class="slider-track flex gap-6" id="slider-track">

                     <!-- Slide 1 -->
                     <div class="slide min-w-full sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] flex-shrink-0">
                         <div class="service-card rounded-2xl overflow-hidden group">
                             <div
                                 class="relative h-52 bg-gradient-to-br from-[#0d1a2e] to-[#111827] flex items-center justify-center overflow-hidden">
                                 <div class="absolute inset-0 bg-gradient-to-br from-[#00e5ff]/10 to-transparent"></div>
                                 <svg class="w-24 h-24 text-[#00e5ff]/30 group-hover:text-[#00e5ff]/50 transition-all duration-500 group-hover:scale-110"
                                     fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                     <path
                                         d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18" />
                                 </svg>
                                 <div
                                     class="absolute top-3 right-3 px-2 py-1 rounded-md bg-[#00e5ff]/20 text-[#00e5ff] text-xs font-medium">
                                     Микросхемы</div>
                             </div>
                             <div class="p-6">
                                 <h3 class="font-display text-lg font-bold mb-2">Контроллер управления воротами</h3>
                                 <p class="text-slate-400 text-sm leading-relaxed mb-4">Разработка платы на STM32 с
                                     поддержкой GSM/Wi-Fi для автоматизации въездных ворот жилого комплекса.</p>
                                 <div class="flex items-center justify-between">
                                     <div class="flex gap-2">
                                         <span
                                             class="px-2 py-1 rounded bg-[#00e5ff]/10 text-[#00e5ff] text-xs">STM32</span>
                                         <span class="px-2 py-1 rounded bg-[#00e5ff]/10 text-[#00e5ff] text-xs">GSM</span>
                                     </div>
                                     <a href="#app"
                                         class="apk-btn px-4 py-2 rounded-lg text-[#080c14] text-xs font-bold flex items-center gap-1.5">
                                         <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                             <path d="M12 16.5l-6-6h4V3h4v7.5h4l-6 6zM5 19h14v2H5v-2z" />
                                         </svg>
                                         Скачать APK
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <!-- Slide 2 -->
                     <div class="slide min-w-full sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] flex-shrink-0">
                         <div class="service-card rounded-2xl overflow-hidden group">
                             <div
                                 class="relative h-52 bg-gradient-to-br from-[#1a0d0d] to-[#111827] flex items-center justify-center overflow-hidden">
                                 <div class="absolute inset-0 bg-gradient-to-br from-[#ff6b35]/10 to-transparent"></div>
                                 <svg class="w-24 h-24 text-[#ff6b35]/30 group-hover:text-[#ff6b35]/50 transition-all duration-500 group-hover:scale-110"
                                     fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                     <path d="M8 11V7a4 4 0 118 0v4m-4 8v-4M3 11h18v10a2 2 0 01-2 2H5a2 2 0 01-2-2V11z" />
                                 </svg>
                                 <div
                                     class="absolute top-3 right-3 px-2 py-1 rounded-md bg-[#ff6b35]/20 text-[#ff6b35] text-xs font-medium">
                                     Шлагбаум</div>
                             </div>
                             <div class="p-6">
                                 <h3 class="font-display text-lg font-bold mb-2">Шлагбаум торгового центра</h3>
                                 <p class="text-slate-400 text-sm leading-relaxed mb-4">Установка и настройка 4
                                     шлагбаумов CAME с интеграцией в систему парковки и управлением через приложение.</p>
                                 <div class="flex items-center justify-between">
                                     <div class="flex gap-2">
                                         <span class="px-2 py-1 rounded bg-[#ff6b35]/10 text-[#ff6b35] text-xs">CAME</span>
                                         <span class="px-2 py-1 rounded bg-[#ff6b35]/10 text-[#ff6b35] text-xs">СКУД</span>
                                     </div>
                                     <a href="#app"
                                         class="apk-btn px-4 py-2 rounded-lg text-[#080c14] text-xs font-bold flex items-center gap-1.5">
                                         <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                             <path d="M12 16.5l-6-6h4V3h4v7.5h4l-6 6zM5 19h14v2H5v-2z" />
                                         </svg>
                                         Скачать APK
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <!-- Slide 3 -->
                     <div class="slide min-w-full sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] flex-shrink-0">
                         <div class="service-card rounded-2xl overflow-hidden group">
                             <div
                                 class="relative h-52 bg-gradient-to-br from-[#0d1a2e] to-[#111827] flex items-center justify-center overflow-hidden">
                                 <div class="absolute inset-0 bg-gradient-to-br from-[#00e5ff]/10 to-transparent"></div>
                                 <svg class="w-24 h-24 text-[#00e5ff]/30 group-hover:text-[#00e5ff]/50 transition-all duration-500 group-hover:scale-110"
                                     fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                     <path
                                         d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                 </svg>
                                 <div
                                     class="absolute top-3 right-3 px-2 py-1 rounded-md bg-[#00e5ff]/20 text-[#00e5ff] text-xs font-medium">
                                     Мойка</div>
                             </div>
                             <div class="p-6">
                                 <h3 class="font-display text-lg font-bold mb-2">Автомойка с бесконтактной оплатой</h3>
                                 <p class="text-slate-400 text-sm leading-relaxed mb-4">Модернизация мойки Karcher:
                                     замена платы управления, подключение терминала оплаты и мобильного приложения.</p>
                                 <div class="flex items-center justify-between">
                                     <div class="flex gap-2">
                                         <span
                                             class="px-2 py-1 rounded bg-[#00e5ff]/10 text-[#00e5ff] text-xs">Karcher</span>
                                         <span class="px-2 py-1 rounded bg-[#00e5ff]/10 text-[#00e5ff] text-xs">NFC</span>
                                     </div>
                                     <a href="#app"
                                         class="apk-btn px-4 py-2 rounded-lg text-[#080c14] text-xs font-bold flex items-center gap-1.5">
                                         <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                             <path d="M12 16.5l-6-6h4V3h4v7.5h4l-6 6zM5 19h14v2H5v-2z" />
                                         </svg>
                                         Скачать APK
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <!-- Slide 4 -->
                     <div class="slide min-w-full sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] flex-shrink-0">
                         <div class="service-card rounded-2xl overflow-hidden group">
                             <div
                                 class="relative h-52 bg-gradient-to-br from-[#1a0d1a] to-[#111827] flex items-center justify-center overflow-hidden">
                                 <div class="absolute inset-0 bg-gradient-to-br from-[#ff6b35]/8 to-transparent"></div>
                                 <svg class="w-24 h-24 text-[#ff6b35]/30 group-hover:text-[#ff6b35]/50 transition-all duration-500 group-hover:scale-110"
                                     fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                     <path
                                         d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                 </svg>
                                 <div
                                     class="absolute top-3 right-3 px-2 py-1 rounded-md bg-[#ff6b35]/20 text-[#ff6b35] text-xs font-medium">
                                     IoT</div>
                             </div>
                             <div class="p-6">
                                 <h3 class="font-display text-lg font-bold mb-2">Умный жилой комплекс</h3>
                                 <p class="text-slate-400 text-sm leading-relaxed mb-4">Единая система управления
                                     воротами, шлагбаумом и домофоном через мобильное приложение для 200+ квартир.</p>
                                 <div class="flex items-center justify-between">
                                     <div class="flex gap-2">
                                         <span
                                             class="px-2 py-1 rounded bg-[#ff6b35]/10 text-[#ff6b35] text-xs">ESP32</span>
                                         <span class="px-2 py-1 rounded bg-[#ff6b35]/10 text-[#ff6b35] text-xs">IoT</span>
                                     </div>
                                     <a href="#app"
                                         class="apk-btn px-4 py-2 rounded-lg text-[#080c14] text-xs font-bold flex items-center gap-1.5">
                                         <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                             <path d="M12 16.5l-6-6h4V3h4v7.5h4l-6 6zM5 19h14v2H5v-2z" />
                                         </svg>
                                         Скачать APK
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <!-- Slide 5 -->
                     <div class="slide min-w-full sm:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] flex-shrink-0">
                         <div class="service-card rounded-2xl overflow-hidden group">
                             <div
                                 class="relative h-52 bg-gradient-to-br from-[#0d1a2e] to-[#111827] flex items-center justify-center overflow-hidden">
                                 <div class="absolute inset-0 bg-gradient-to-br from-[#00e5ff]/10 to-transparent"></div>
                                 <svg class="w-24 h-24 text-[#00e5ff]/30 group-hover:text-[#00e5ff]/50 transition-all duration-500 group-hover:scale-110"
                                     fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                     <path
                                         d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                     <circle cx="12" cy="12" r="3" />
                                 </svg>
                                 <div
                                     class="absolute top-3 right-3 px-2 py-1 rounded-md bg-[#00e5ff]/20 text-[#00e5ff] text-xs font-medium">
                                     Промышленность</div>
                             </div>
                             <div class="p-6">
                                 <h3 class="font-display text-lg font-bold mb-2">Автоматизация производства</h3>
                                 <p class="text-slate-400 text-sm leading-relaxed mb-4">Разработка ПЛК-контроллера для
                                     управления конвейерной линией с мониторингом параметров в реальном времени.</p>
                                 <div class="flex items-center justify-between">
                                     <div class="flex gap-2">
                                         <span class="px-2 py-1 rounded bg-[#00e5ff]/10 text-[#00e5ff] text-xs">PLC</span>
                                         <span
                                             class="px-2 py-1 rounded bg-[#00e5ff]/10 text-[#00e5ff] text-xs">SCADA</span>
                                     </div>
                                     <a href="#app"
                                         class="apk-btn px-4 py-2 rounded-lg text-[#080c14] text-xs font-bold flex items-center gap-1.5">
                                         <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                             <path d="M12 16.5l-6-6h4V3h4v7.5h4l-6 6zM5 19h14v2H5v-2z" />
                                         </svg>
                                         Скачать APK
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>

             <!-- Dots -->
             <div class="flex justify-center gap-2 mt-8" id="dots"></div>
         </div>
     </section>

     <!-- ═══════════════ APP SECTION ═══════════════ -->
     <section id="app" class="py-24 relative">
         <div class="w-full px-6 sm:px-10 lg:px-16">
             <div
                 class="reveal rounded-3xl overflow-hidden border border-[rgba(0,229,255,0.15)] bg-gradient-to-br from-[#0d1420] via-[#111827] to-[#0a0f1a] p-8 sm:p-14">
                 <div class="grid lg:grid-cols-2 gap-12 items-center">
                     <div>
                         <p class="text-[#00e5ff] text-sm font-medium tracking-widest uppercase mb-4">Мобильное
                             приложение</p>
                         <h2 class="font-display text-4xl sm:text-5xl font-bold mb-6 leading-tight">
                             Управляйте<br />
                             <span class="text-[#00e5ff]">отовсюду</span>
                         </h2>
                         <p class="text-slate-400 leading-relaxed mb-8">
                             Наше Android-приложение позволяет открывать шлагбаум, управлять мойкой и следить за
                             состоянием всего оборудования прямо со смартфона — в любое время и из любой точки.
                         </p>

                         <ul class="space-y-3 mb-10">
                             <li class="flex items-center gap-3 text-sm text-slate-300">
                                 <div
                                     class="w-5 h-5 rounded-full bg-[#00e5ff]/20 flex items-center justify-center flex-shrink-0">
                                     <svg class="w-3 h-3 text-[#00e5ff]" fill="none" stroke="currentColor"
                                         stroke-width="3" viewBox="0 0 24 24">
                                         <path d="M5 13l4 4L19 7" />
                                     </svg>
                                 </div>
                                 Управление шлагбаумом в 1 касание
                             </li>
                             <li class="flex items-center gap-3 text-sm text-slate-300">
                                 <div
                                     class="w-5 h-5 rounded-full bg-[#00e5ff]/20 flex items-center justify-center flex-shrink-0">
                                     <svg class="w-3 h-3 text-[#00e5ff]" fill="none" stroke="currentColor"
                                         stroke-width="3" viewBox="0 0 24 24">
                                         <path d="M5 13l4 4L19 7" />
                                     </svg>
                                 </div>
                                 Мониторинг состояния мойки онлайн
                             </li>
                             <li class="flex items-center gap-3 text-sm text-slate-300">
                                 <div
                                     class="w-5 h-5 rounded-full bg-[#00e5ff]/20 flex items-center justify-center flex-shrink-0">
                                     <svg class="w-3 h-3 text-[#00e5ff]" fill="none" stroke="currentColor"
                                         stroke-width="3" viewBox="0 0 24 24">
                                         <path d="M5 13l4 4L19 7" />
                                     </svg>
                                 </div>
                                 Push-уведомления о событиях
                             </li>
                             <li class="flex items-center gap-3 text-sm text-slate-300">
                                 <div
                                     class="w-5 h-5 rounded-full bg-[#00e5ff]/20 flex items-center justify-center flex-shrink-0">
                                     <svg class="w-3 h-3 text-[#00e5ff]" fill="none" stroke="currentColor"
                                         stroke-width="3" viewBox="0 0 24 24">
                                         <path d="M5 13l4 4L19 7" />
                                     </svg>
                                 </div>
                                 История операций и журнал доступа
                             </li>
                             <li class="flex items-center gap-3 text-sm text-slate-300">
                                 <div
                                     class="w-5 h-5 rounded-full bg-[#00e5ff]/20 flex items-center justify-center flex-shrink-0">
                                     <svg class="w-3 h-3 text-[#00e5ff]" fill="none" stroke="currentColor"
                                         stroke-width="3" viewBox="0 0 24 24">
                                         <path d="M5 13l4 4L19 7" />
                                     </svg>
                                 </div>
                                 Работает через Wi-Fi и мобильный интернет
                             </li>
                         </ul>

                         <!-- Download buttons -->
                         <div class="flex flex-wrap gap-4">
                             <a href="/apismart24.apk"
                                 class="apk-btn flex items-center gap-3 px-6 py-3.5 rounded-xl text-[#080c14] font-semibold">
                                 <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                     <path
                                         d="M17.523 15.3414c-.5511 0-.9993-.4486-.9993-.9997s.4483-.9993.9993-.9993c.5511 0 .9993.4483.9993.9993s-.4483.9997-.9993.9997m-11.046 0c-.5511 0-.9993-.4486-.9993-.9997s.4482-.9993.9993-.9993c.5511 0 .9993.4483.9993.9993s-.4483.9997-.9993.9997M17.618 5.7539l1.036-1.796a.216.216 0 00-.0785-.2951.2155.2155 0 00-.2945.0785L17.234 5.568a6.527 6.527 0 00-2.6495-.5565c-.9512 0-1.852.2065-2.6495.5565L10.819 3.7413a.2155.2155 0 00-.2945-.0785.2166.2166 0 00-.0785.2951L11.482 5.754C9.3295 6.8401 7.8774 9.0315 7.8774 11.57h8.3452c0-2.5385-1.452-4.7299-3.6046-5.8161z" />
                                 </svg>
                                 <div class="text-left">
                                     <div class="text-[10px] font-normal opacity-80">Скачать для</div>
                                     <div class="text-sm font-bold">Android APK</div>
                                 </div>
                             </a>
                             <a href="/apismart24.apk"
                                 class="flex items-center gap-3 px-6 py-3.5 rounded-xl border border-[rgba(0,229,255,0.25)] text-slate-300 hover:border-[#00e5ff]/50 hover:text-white transition-all font-medium">
                                 <svg class="w-5 h-5 text-[#00e5ff]" fill="none" stroke="currentColor"
                                     stroke-width="2" viewBox="0 0 24 24">
                                     <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                 </svg>
                                 Инструкция
                             </a>
                         </div>

                         <p class="text-xs text-slate-500 mt-4">Версия 2.4.1 · Android 6.0+ · Размер 18 МБ</p>
                     </div>

                     <!-- Phone mockup -->
                     <div class="flex justify-center">
                         <div class="relative w-56 sm:w-64">
                             <!-- Phone frame -->
                             <div
                                 class="relative bg-[#0d1420] border-2 border-[#00e5ff]/20 rounded-[2.5rem] p-3 shadow-2xl shadow-[#00e5ff]/10">
                                 <!-- Notch -->
                                 <div
                                     class="absolute top-0 left-1/2 -translate-x-1/2 w-20 h-5 bg-[#0d1420] rounded-b-2xl z-10">
                                 </div>
                                 <!-- Screen -->
                                 <div class="bg-[#080c14] rounded-[2rem] overflow-hidden aspect-[9/19]">
                                     <div class="h-full flex flex-col">
                                         <!-- Status bar -->
                                         <div class="h-8 bg-[#111827] flex items-center justify-between px-4 mt-5">
                                             <span class="text-[10px] text-slate-400">9:41</span>
                                             <div class="flex gap-1">
                                                 <div class="w-4 h-2 border border-slate-500 rounded-sm">
                                                     <div class="w-3/4 h-full bg-[#00e5ff] rounded-sm"></div>
                                                 </div>
                                             </div>
                                         </div>
                                         <!-- App header -->
                                         <div class="bg-[#111827] px-4 py-3 border-b border-[rgba(0,229,255,0.1)]">
                                             <p class="text-[10px] text-[#00e5ff] font-medium">ElectroPro</p>
                                             <p class="text-[8px] text-slate-400">Панель управления</p>
                                         </div>
                                         <!-- App content -->
                                         <div class="flex-1 p-3 space-y-2 overflow-hidden">
                                             <!-- Device card -->
                                             <div class="bg-[#111827] rounded-xl p-3 border border-[rgba(0,229,255,0.1)]">
                                                 <div class="flex items-center justify-between mb-1.5">
                                                     <p class="text-[9px] font-semibold text-slate-200">Шлагбаум #1</p>
                                                     <span
                                                         class="text-[8px] text-green-400 bg-green-400/10 px-1.5 py-0.5 rounded-full">●
                                                         Онлайн</span>
                                                 </div>
                                                 <button
                                                     class="w-full py-1.5 rounded-lg bg-[#00e5ff] text-[#080c14] text-[9px] font-bold">ОТКРЫТЬ</button>
                                             </div>
                                             <div class="bg-[#111827] rounded-xl p-3 border border-[rgba(255,107,53,0.1)]">
                                                 <div class="flex items-center justify-between mb-1.5">
                                                     <p class="text-[9px] font-semibold text-slate-200">Мойка #1</p>
                                                     <span
                                                         class="text-[8px] text-[#ff6b35] bg-[#ff6b35]/10 px-1.5 py-0.5 rounded-full">●
                                                         Работает</span>
                                                 </div>
                                                 <div class="flex gap-1">
                                                     <button
                                                         class="flex-1 py-1.5 rounded-lg bg-[#ff6b35]/20 text-[#ff6b35] text-[8px] font-bold">СТОП</button>
                                                     <button
                                                         class="flex-1 py-1.5 rounded-lg bg-[#ff6b35] text-[#080c14] text-[8px] font-bold">СТАРТ</button>
                                                 </div>
                                             </div>
                                             <div class="bg-[#111827] rounded-xl p-3 border border-[rgba(0,229,255,0.08)]">
                                                 <p class="text-[9px] font-semibold text-slate-200 mb-1.5">Последние
                                                     события</p>
                                                 <div class="space-y-1">
                                                     <div class="flex gap-2 items-center">
                                                         <div class="w-1 h-1 rounded-full bg-[#00e5ff]"></div>
                                                         <p class="text-[8px] text-slate-400">Открытие · 14:23</p>
                                                     </div>
                                                     <div class="flex gap-2 items-center">
                                                         <div class="w-1 h-1 rounded-full bg-[#ff6b35]"></div>
                                                         <p class="text-[8px] text-slate-400">Мойка старт · 14:18</p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- Glow under phone -->
                             <div
                                 class="absolute -bottom-8 left-1/2 -translate-x-1/2 w-32 h-8 bg-[#00e5ff]/20 blur-2xl rounded-full">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- ═══════════════ STATS ═══════════════ -->
     <section class="py-16 bg-[#0a0f1a]">
         <div class="w-full px-6 sm:px-10 lg:px-16">
             <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">
                 <div class="reveal stat-card rounded-2xl p-6 text-center">
                     <div class="font-display text-4xl font-extrabold text-[#00e5ff] mb-1">200+</div>
                     <div class="text-slate-400 text-sm">Выполненных проектов</div>
                 </div>
                 <div class="reveal stat-card rounded-2xl p-6 text-center">
                     <div class="font-display text-4xl font-extrabold text-[#ff6b35] mb-1">5 лет</div>
                     <div class="text-slate-400 text-sm">На рынке</div>
                 </div>
                 <div class="reveal stat-card rounded-2xl p-6 text-center">
                     <div class="font-display text-4xl font-extrabold text-[#00e5ff] mb-1">98%</div>
                     <div class="text-slate-400 text-sm">Довольных клиентов</div>
                 </div>
                 <div class="reveal stat-card rounded-2xl p-6 text-center">
                     <div class="font-display text-4xl font-extrabold text-[#ff6b35] mb-1">24/7</div>
                     <div class="text-slate-400 text-sm">Поддержка</div>
                 </div>
             </div>
         </div>
     </section>

     <!-- ═══════════════ ABOUT ═══════════════ -->
     <section id="about" class="py-24">
         <div class="w-full px-6 sm:px-10 lg:px-16">
             <div class="grid lg:grid-cols-2 gap-16 items-center">
                 <div class="reveal">
                     <p class="text-[#00e5ff] text-sm font-medium tracking-widest uppercase mb-3">О компании</p>
                     <h2 class="font-display text-4xl sm:text-5xl font-bold mb-6 accent-line">Кто мы такие</h2>
                     <p class="text-slate-400 leading-relaxed mb-5">
                         Команда инженеров-электронщиков с опытом более 5 лет. Специализируемся на разработке кастомных
                         микросхем и автоматизации промышленных и коммерческих объектов.
                     </p>
                     <p class="text-slate-400 leading-relaxed mb-8">
                         Наш подход: сначала разбираемся в задаче, затем предлагаем оптимальное решение. Мы не продаём
                         коробочные продукты — каждый проект уникален.
                     </p>
                     <div class="space-y-4">
                         <div class="flex gap-4 items-start">
                             <div
                                 class="w-10 h-10 rounded-xl bg-[#00e5ff]/10 border border-[#00e5ff]/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                 <svg class="w-5 h-5 text-[#00e5ff]" fill="none" stroke="currentColor"
                                     stroke-width="2" viewBox="0 0 24 24">
                                     <path
                                         d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                     <circle cx="12" cy="11" r="3" />
                                 </svg>
                             </div>
                             <div>
                                 <div class="font-semibold text-slate-200 text-sm">Локальная команда</div>
                                 <div class="text-slate-500 text-sm">Работаем и выезжаем по всему городу</div>
                             </div>
                         </div>
                         <div class="flex gap-4 items-start">
                             <div
                                 class="w-10 h-10 rounded-xl bg-[#ff6b35]/10 border border-[#ff6b35]/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                 <svg class="w-5 h-5 text-[#ff6b35]" fill="none" stroke="currentColor"
                                     stroke-width="2" viewBox="0 0 24 24">
                                     <path d="M13 10V3L4 14h7v7l9-11h-7z" />
                                 </svg>
                             </div>
                             <div>
                                 <div class="font-semibold text-slate-200 text-sm">Быстрый отклик</div>
                                 <div class="text-slate-500 text-sm">Выезд на объект в течение 2–4 часов</div>
                             </div>
                         </div>
                         <div class="flex gap-4 items-start">
                             <div
                                 class="w-10 h-10 rounded-xl bg-[#00e5ff]/10 border border-[#00e5ff]/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                 <svg class="w-5 h-5 text-[#00e5ff]" fill="none" stroke="currentColor"
                                     stroke-width="2" viewBox="0 0 24 24">
                                     <path
                                         d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                 </svg>
                             </div>
                             <div>
                                 <div class="font-semibold text-slate-200 text-sm">Документированная гарантия</div>
                                 <div class="text-slate-500 text-sm">Договор + гарантийный талон на все работы</div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- Tech stack -->
                 <div class="reveal">
                     <div class="grid grid-cols-3 gap-4">
                         <!-- {['Arduino','ESP32','STM32','MQTT','Wi-Fi','GSM','PCB','Android','Docker'].map((t,i) => ``)} -->
                         <div class="service-card rounded-xl p-4 text-center group hover:border-[#00e5ff]/50">
                             <div class="text-2xl mb-1">⚡</div>
                             <div class="text-xs text-slate-400 font-medium">Arduino</div>
                         </div>
                         <div class="service-card rounded-xl p-4 text-center group hover:border-[#ff6b35]/50">
                             <div class="text-2xl mb-1">📡</div>
                             <div class="text-xs text-slate-400 font-medium">ESP32</div>
                         </div>
                         <div class="service-card rounded-xl p-4 text-center group hover:border-[#00e5ff]/50">
                             <div class="text-2xl mb-1">🔲</div>
                             <div class="text-xs text-slate-400 font-medium">STM32</div>
                         </div>
                         <div class="service-card rounded-xl p-4 text-center group hover:border-[#00e5ff]/50">
                             <div class="text-2xl mb-1">📶</div>
                             <div class="text-xs text-slate-400 font-medium">Wi-Fi</div>
                         </div>
                         <div class="service-card rounded-xl p-4 text-center group hover:border-[#ff6b35]/50">
                             <div class="text-2xl mb-1">📱</div>
                             <div class="text-xs text-slate-400 font-medium">GSM/4G</div>
                         </div>
                         <div class="service-card rounded-xl p-4 text-center group hover:border-[#00e5ff]/50">
                             <div class="text-2xl mb-1">🔧</div>
                             <div class="text-xs text-slate-400 font-medium">PCB Design</div>
                         </div>
                         <div class="service-card rounded-xl p-4 text-center group hover:border-[#ff6b35]/50">
                             <div class="text-2xl mb-1">🤖</div>
                             <div class="text-xs text-slate-400 font-medium">Android</div>
                         </div>
                         <div class="service-card rounded-xl p-4 text-center group hover:border-[#00e5ff]/50">
                             <div class="text-2xl mb-1">🔗</div>
                             <div class="text-xs text-slate-400 font-medium">MQTT</div>
                         </div>
                         <div class="service-card rounded-xl p-4 text-center group hover:border-[#ff6b35]/50">
                             <div class="text-2xl mb-1">☁️</div>
                             <div class="text-xs text-slate-400 font-medium">Cloud</div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- ═══════════════ CONTACT ═══════════════ -->
     <section id="contact" class="py-24 bg-[#0a0f1a] relative">
         <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#00e5ff]/30 to-transparent">
         </div>
         <div class="w-full px-6 sm:px-10 lg:px-16">
             <div class="reveal text-center mb-14">
                 <p class="text-[#00e5ff] text-sm font-medium tracking-widest uppercase mb-3">Контакты</p>
                 <h2 class="font-display text-4xl sm:text-5xl font-bold mb-4">Обсудим ваш проект</h2>
                 <p class="text-slate-400">Оставьте заявку — ответим в течение 30 минут</p>
             </div>

             <div class="reveal grid sm:grid-cols-2 gap-5 mb-10">
                 <a href="tel:+77001234567" class="service-card rounded-2xl p-6 glow-box flex items-center gap-4 group">
                     <div
                         class="w-12 h-12 rounded-xl bg-[#00e5ff]/10 border border-[#00e5ff]/20 flex items-center justify-center flex-shrink-0 group-hover:bg-[#00e5ff]/20 transition-colors">
                         <svg class="w-6 h-6 text-[#00e5ff]" fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                             <path
                                 d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                         </svg>
                     </div>
                     <div>
                         <div class="text-xs text-slate-500 mb-0.5">Позвонить</div>
                         <div class="font-semibold text-slate-200">+7 700 123-45-67</div>
                     </div>
                 </a>
                 <a href="https://wa.me/77001234567"
                     class="service-card rounded-2xl p-6 glow-box flex items-center gap-4 group">
                     <div
                         class="w-12 h-12 rounded-xl bg-[#25D366]/10 border border-[#25D366]/20 flex items-center justify-center flex-shrink-0 group-hover:bg-[#25D366]/20 transition-colors">
                         <svg class="w-6 h-6 text-[#25D366]" fill="currentColor" viewBox="0 0 24 24">
                             <path
                                 d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                         </svg>
                     </div>
                     <div>
                         <div class="text-xs text-slate-500 mb-0.5">WhatsApp</div>
                         <div class="font-semibold text-slate-200">Написать сейчас</div>
                     </div>
                 </a>
             </div>

             <!-- Form -->
             <div class="reveal service-card rounded-2xl p-8 glow-box">
                 <h3 class="font-display text-xl font-bold mb-6">Оставить заявку</h3>
                 <div class="grid sm:grid-cols-2 gap-4 mb-4">
                     <div>
                         <label class="block text-xs text-slate-500 mb-1.5">Ваше имя</label>
                         <input type="text" placeholder="Алибек" class="w-full px-4 py-3 rounded-xl text-sm" />
                     </div>
                     <div>
                         <label class="block text-xs text-slate-500 mb-1.5">Телефон</label>
                         <input type="tel" placeholder="+7 777 000-00-00"
                             class="w-full px-4 py-3 rounded-xl text-sm" />
                     </div>
                 </div>
                 <div class="mb-4">
                     <label class="block text-xs text-slate-500 mb-1.5">Тип услуги</label>
                     <select
                         class="w-full px-4 py-3 rounded-xl text-sm bg-[rgba(255,255,255,0.04)] border border-[rgba(0,229,255,0.15)] text-slate-300">
                         <option>Микросхемы / Разработка платы</option>
                         <option>Шлагбаум — установка</option>
                         <option>Шлагбаум — ремонт/обслуживание</option>
                         <option>Автомойка — установка</option>
                         <option>Автомойка — ремонт/обслуживание</option>
                         <option>Другое</option>
                     </select>
                 </div>
                 <div class="mb-6">
                     <label class="block text-xs text-slate-500 mb-1.5">Описание задачи</label>
                     <textarea rows="4" placeholder="Опишите вашу задачу или вопрос..."
                         class="w-full px-4 py-3 rounded-xl text-sm resize-none"></textarea>
                 </div>
                 <button class="apk-btn w-full py-4 rounded-xl text-[#080c14] font-bold text-sm">
                     Отправить заявку →
                 </button>
             </div>
         </div>
     </section>
 @endsection
