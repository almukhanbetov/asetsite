@extends('layouts.auth')
@section('content')
    <style>
        :root {
            --cyan: #00e5ff;
            --orange: #ff6b35;
            --bg: #080c14;
            --border: rgba(0, 229, 255, 0.12);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: var(--bg);
            color: #e2e8f0;
            font-family: 'DM Sans', sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: linear-gradient(rgba(0, 229, 255, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(0, 229, 255, 0.03) 1px, transparent 1px);
            background-size: 40px 40px;
            pointer-events: none;
            z-index: 0;
        }

        body::after {
            content: '';
            position: fixed;
            inset: 0;
            background-image: radial-gradient(circle at 80% 20%, rgba(255, 107, 53, 0.06) 0%, transparent 50%), radial-gradient(circle at 20% 80%, rgba(0, 229, 255, 0.05) 0%, transparent 50%);
            pointer-events: none;
            z-index: 0;
        }

        .font-display {
            font-family: 'Syne', sans-serif;
        }

        .font-mono {
            font-family: 'JetBrains Mono', monospace;
        }

        .glass-card {
            background: rgba(13, 20, 32, 0.85);
            border: 1px solid var(--border);
            backdrop-filter: blur(20px);
        }

        .tab-wrapper {
            display: flex;
            gap: 6px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 14px;
            padding: 6px;
            margin-bottom: 32px;
        }

        .tab {
            flex: 1;
            padding: 10px 16px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            background: transparent;
            color: #64748b;
            transition: all 0.25s;
            text-decoration: none;
            display: block;
            text-align: center;
        }

        .tab.active {
            background: linear-gradient(135deg, rgba(0, 229, 255, 0.15), rgba(0, 229, 255, 0.05));
            border: 1px solid rgba(0, 229, 255, 0.25);
            color: var(--cyan);
        }

        .tab:not(.active):hover {
            color: #94a3b8;
            background: rgba(255, 255, 255, 0.03);
        }

        .inp-wrap {
            position: relative;
        }

        .inp-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #475569;
            pointer-events: none;
            transition: color 0.2s;
        }

        .inp {
            width: 100%;
            padding: 13px 14px 13px 44px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(0, 229, 255, 0.12);
            border-radius: 12px;
            color: #e2e8f0;
            font-size: 14px;
            font-family: 'DM Sans', sans-serif;
            outline: none;
            transition: all 0.25s;
        }

        .inp::placeholder {
            color: #334155;
        }

        .inp:focus {
            border-color: rgba(0, 229, 255, 0.45);
            background: rgba(0, 229, 255, 0.04);
            box-shadow: 0 0 0 3px rgba(0, 229, 255, 0.08);
        }

        .inp-wrap:focus-within .inp-icon {
            color: var(--cyan);
        }

        .eye-btn {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #475569;
            cursor: pointer;
            padding: 2px;
            transition: color 0.2s;
        }

        .eye-btn:hover {
            color: var(--cyan);
        }

        .btn-main {
            width: 100%;
            padding: 14px;
            background: var(--cyan);
            color: var(--bg);
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: 15px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.25s;
            position: relative;
            overflow: hidden;
        }

        .btn-main::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.15), transparent);
            opacity: 0;
            transition: opacity 0.25s;
        }

        .btn-main:hover {
            background: #33eeff;
            box-shadow: 0 8px 30px rgba(0, 229, 255, 0.35);
            transform: translateY(-1px);
        }

        .btn-main:hover::before {
            opacity: 1;
        }

        .btn-main:active {
            transform: translateY(0);
        }

        .cb-wrap {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            cursor: pointer;
        }

        .cb-wrap input[type="checkbox"] {
            width: 18px;
            height: 18px;
            border-radius: 5px;
            cursor: pointer;
            accent-color: var(--cyan);
            flex-shrink: 0;
            margin-top: 2px;
        }

        .err {
            font-size: 12px;
            color: #ef4444;
            margin-top: 5px;
            display: none;
            font-weight: 500;
        }

        .err.show {
            display: block;
        }

        .field-label {
            display: block;
            font-size: 11px;
            font-weight: 700;
            color: #64748b;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            margin-bottom: 8px;
            font-family: 'JetBrains Mono', monospace;
        }

        .pbar {
            flex: 1;
            height: 3px;
            border-radius: 3px;
            background: rgba(255, 255, 255, 0.07);
            transition: background .3s;
        }

        @keyframes pulse-ring {
            0% {
                transform: scale(1);
                opacity: .6
            }

            100% {
                transform: scale(2.5);
                opacity: 0
            }
        }

        .pulse-dot {
            position: relative;
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--orange);
        }

        .pulse-dot::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 50%;
            background: var(--orange);
            animation: pulse-ring 1.5s ease-out infinite;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        .fade-up {
            opacity: 0;
            animation: fadeUp 0.6s ease forwards;
        }

        .d1 {
            animation-delay: .05s
        }

        .d2 {
            animation-delay: .15s
        }

        .d3 {
            animation-delay: .25s
        }

        .d5 {
            animation-delay: .45s
        }

        .glow-orange {
            color: var(--orange);
            text-shadow: 0 0 30px rgba(255, 107, 53, 0.5);
        }

        #toast {
            position: fixed;
            bottom: 32px;
            left: 50%;
            transform: translateX(-50%) translateY(80px);
            background: rgba(8, 12, 20, 0.97);
            border: 1px solid rgba(0, 229, 255, 0.3);
            border-radius: 14px;
            padding: 14px 24px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            font-weight: 600;
            color: #e2e8f0;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .5), 0 0 40px rgba(0, 229, 255, .1);
            transition: transform .4s cubic-bezier(.25, .8, .25, 1);
            z-index: 100;
            white-space: nowrap;
        }

        #toast.show {
            transform: translateX(-50%) translateY(0);
        }

        ::-webkit-scrollbar {
            width: 6px
        }

        ::-webkit-scrollbar-track {
            background: var(--bg)
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(0, 229, 255, .2);
            border-radius: 3px
        }
    </style>
    <div class="relative z-10 min-h-screen flex flex-col lg:flex-row">

        <!-- LEFT PANEL -->
        <div class="hidden lg:flex flex-col justify-between w-[48%] px-16 py-14 relative overflow-hidden">
            <svg class="absolute inset-0 w-full h-full pointer-events-none opacity-30" viewBox="0 0 600 900" fill="none">
                <path d="M0 300 H200 V240 H420 V300 H600" stroke="#ff6b35" stroke-width="1" stroke-dasharray="8 4"
                    opacity=".4" />
                <path d="M0 600 H120 V560 H320 V600 H600" stroke="#00e5ff" stroke-width="1" stroke-dasharray="8 4"
                    opacity=".3" />
                <path d="M0 150 H180 V180 H380 V150 H600" stroke="#ff6b35" stroke-width="1" stroke-dasharray="6 4"
                    opacity=".2" />
                <path d="M200 0 V280 H250 V500 H200 V900" stroke="#ff6b35" stroke-width="1" stroke-dasharray="8 4"
                    opacity=".2" />
                <path d="M480 0 V300 H430 V520 H480 V900" stroke="#00e5ff" stroke-width="1" stroke-dasharray="8 4"
                    opacity=".15" />
                <circle cx="200" cy="300" r="3" fill="#ff6b35" opacity=".5" />
                <circle cx="420" cy="300" r="3" fill="#ff6b35" opacity=".5" />
                <circle cx="120" cy="600" r="3" fill="#00e5ff" opacity=".5" />
                <circle cx="320" cy="600" r="3" fill="#00e5ff" opacity=".5" />
                <circle cx="200" cy="280" r="3" fill="#ff6b35" opacity=".4" />
                <circle cx="480" cy="300" r="3" fill="#00e5ff" opacity=".4" />
                <rect x="280" y="290" width="20" height="20" rx="3" stroke="#ff6b35" stroke-width="1"
                    fill="rgba(255,107,53,0.05)" opacity=".6" />
                <rect x="380" y="590" width="20" height="20" rx="3" stroke="#00e5ff" stroke-width="1"
                    fill="rgba(0,229,255,0.05)" opacity=".5" />
            </svg>

            <a href="index.html" class="flex items-center gap-3 fade-up d1 relative z-10">
                <div class="relative w-9 h-9">
                    <div class="absolute inset-0 bg-[#00e5ff]/20 rounded-lg rotate-45"></div>
                    <svg class="relative z-10 w-9 h-9" viewBox="0 0 32 32" fill="none">
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
                <span class="font-display font-bold text-xl tracking-tight">Electro<span
                        style="color:var(--cyan)">Pro</span></span>
            </a>

            <div class="fade-up d2 relative z-10">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-[rgba(255,107,53,0.3)] bg-[rgba(255,107,53,0.08)] text-xs font-mono mb-6"
                    style="color:var(--orange)">
                    <span class="pulse-dot"></span>
                    Новый аккаунт
                </div>
                <h1 class="font-display font-extrabold leading-[1.05] tracking-tight mb-6"
                    style="font-size:clamp(2.4rem,3.5vw,3.5rem);">
                    Присоединяйтесь<br />к <span class="glow-orange">ElectroPro</span>
                </h1>
                <p class="text-slate-400 leading-relaxed mb-10" style="max-width:380px;font-size:16px;">
                    Создайте аккаунт и получите доступ к личному кабинету, заявкам и поддержке 24/7.
                </p>

                <div style="display:flex;flex-direction:column;gap:14px;">
                    <div class="glass-card rounded-2xl p-4 flex items-center gap-4"
                        style="border-color:rgba(255,107,53,0.12)">
                        <div
                            style="width:40px;height:40px;border-radius:10px;background:rgba(255,107,53,0.1);border:1px solid rgba(255,107,53,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <svg width="18" height="18" fill="none" stroke="#ff6b35" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-display font-bold text-sm">Безопасный доступ</div>
                            <div class="text-slate-500 text-xs mt-0.5">Все данные защищены и зашифрованы</div>
                        </div>
                    </div>
                    <div class="glass-card rounded-2xl p-4 flex items-center gap-4"
                        style="border-color:rgba(0,229,255,0.12)">
                        <div
                            style="width:40px;height:40px;border-radius:10px;background:rgba(0,229,255,0.1);border:1px solid rgba(0,229,255,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <svg width="18" height="18" fill="none" stroke="#00e5ff" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-display font-bold text-sm">История заявок</div>
                            <div class="text-slate-500 text-xs mt-0.5">Следите за статусом всех обращений</div>
                        </div>
                    </div>
                    <div class="glass-card rounded-2xl p-4 flex items-center gap-4"
                        style="border-color:rgba(255,107,53,0.08)">
                        <div
                            style="width:40px;height:40px;border-radius:10px;background:rgba(255,107,53,0.1);border:1px solid rgba(255,107,53,0.15);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <svg width="18" height="18" fill="none" stroke="#ff6b35" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-display font-bold text-sm">Управление с телефона</div>
                            <div class="text-slate-500 text-xs mt-0.5">Шлагбаумы и мойки прямо со смартфона</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fade-up d3 flex items-center gap-2 relative z-10">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-green-400"></span>
                </span>
                <span class="text-slate-500 text-xs font-mono">Работаем 24/7 · г. Алматы · +7 700 123-45-67</span>
            </div>
        </div>

        <!-- RIGHT PANEL -->
        <div class="flex-1 flex flex-col items-center justify-center px-6 py-14 lg:py-10 relative z-10">

            <a href="index.html" class="lg:hidden flex items-center gap-3 mb-10 fade-up d1">
                <div class="relative w-8 h-8">
                    <div class="absolute inset-0 bg-[#00e5ff]/20 rounded-lg rotate-45"></div>
                    <svg class="relative z-10 w-8 h-8" viewBox="0 0 32 32" fill="none">
                        <rect x="6" y="6" width="8" height="8" rx="1" fill="#00e5ff" opacity=".9" />
                        <rect x="18" y="6" width="8" height="8" rx="1" fill="#ff6b35"
                            opacity=".9" />
                        <rect x="6" y="18" width="8" height="8" rx="1" fill="#ff6b35"
                            opacity=".9" />
                        <rect x="18" y="18" width="8" height="8" rx="1" fill="#00e5ff"
                            opacity=".9" />
                    </svg>
                </div>
                <span class="font-display font-bold text-xl">Electro<span style="color:var(--cyan)">Pro</span></span>
            </a>

            <div class="glass-card rounded-3xl p-8 sm:p-10 w-full max-w-md fade-up d2">

                <div class="tab-wrapper">
                    <a href="{{ route('login') }}" class="tab">Войти</a>
                    <a href="{{ route('register') }}" class="tab active">Регистрация</a>
                </div>

                <p class="font-mono text-xs mb-1" style="color:var(--orange);letter-spacing:.1em;">// новый аккаунт</p>
                <h2 class="font-display font-extrabold text-2xl mb-1">Создать аккаунт</h2>
                <p class="text-slate-500 text-sm mb-7">Заполните данные для регистрации</p>

                <div style="display:flex;flex-direction:column;gap:16px;">

                    <!-- Name -->
                    <div>
                        <label class="field-label">Имя</label>
                        <div class="inp-wrap">
                            <svg class="inp-icon" width="18" height="18" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <input class="inp" id="reg-name" type="text" placeholder="Ваше имя"
                                autocomplete="name" />
                        </div>
                        <div class="err" id="err-reg-name">Введите ваше имя</div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="field-label">Email</label>
                        <div class="inp-wrap">
                            <svg class="inp-icon" width="18" height="18" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <input class="inp" id="reg-email" type="email" placeholder="your@email.com"
                                autocomplete="email" />
                        </div>
                        <div class="err" id="err-reg-email">Введите корректный email</div>
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="field-label">Телефон</label>
                        <div class="inp-wrap">
                            <svg class="inp-icon" width="18" height="18" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <input class="inp" id="reg-phone" type="tel" placeholder="+7 700 000-00-00"
                                autocomplete="tel" />
                        </div>
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="field-label">Пароль</label>
                        <div class="inp-wrap">
                            <svg class="inp-icon" width="18" height="18" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            <input class="inp" id="reg-pass" type="password" placeholder="Минимум 8 символов"
                                oninput="checkStrength(this.value)" autocomplete="new-password" />
                            <button class="eye-btn" onclick="togglePass('reg-pass',this)" type="button">
                                <svg width="18" height="18" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                        <div style="display:flex;gap:4px;margin-top:8px;">
                            <div class="pbar" id="sb1"></div>
                            <div class="pbar" id="sb2"></div>
                            <div class="pbar" id="sb3"></div>
                            <div class="pbar" id="sb4"></div>
                        </div>
                        <div id="strength-label"
                            style="font-size:12px;color:#64748b;margin-top:4px;font-weight:600;font-family:'JetBrains Mono',monospace;">
                        </div>
                        <div class="err" id="err-reg-pass">Пароль должен быть не менее 8 символов</div>
                    </div>

                    <!-- Terms -->
                    <label class="cb-wrap">
                        <input type="checkbox" id="terms" />
                        <span style="font-size:13px;color:#94a3b8;font-weight:500;line-height:1.5;">
                            Принимаю <a href="#" style="color:var(--cyan);font-weight:700;">условия
                                использования</a> и <a href="#" style="color:var(--cyan);font-weight:700;">политику
                                конфиденциальности</a>
                        </span>
                    </label>
                    <div class="err" id="err-terms">Примите условия использования</div>

                    <button class="btn-main" onclick="handleRegister()" style="margin-top:4px;">
                        Создать аккаунт →
                    </button>
                </div>

                <p style="text-align:center;margin-top:22px;font-size:14px;color:#64748b;font-weight:500;">
                    Уже есть аккаунт?
                    <a href="login.html" style="color:var(--cyan);font-weight:700;text-decoration:none;"
                        onmouseover="this.style.textDecoration='underline'"
                        onmouseout="this.style.textDecoration='none'">Войти</a>
                </p>
            </div>

            <a href="index.html" class="fade-up d5"
                style="display:inline-flex;align-items:center;gap:8px;margin-top:20px;color:#4a5568;font-size:13px;font-weight:600;text-decoration:none;transition:color .2s;font-family:'JetBrains Mono',monospace;"
                onmouseover="this.style.color='#00e5ff'" onmouseout="this.style.color='#4a5568'">
                <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5"
                    viewBox="0 0 24 24">
                    <path d="M19 12H5m0 0l7 7m-7-7l7-7" />
                </svg>
                Вернуться на главную
            </a>
        </div>
    </div>

    <div id="toast">
        <svg width="18" height="18" fill="none" stroke="#00e5ff" stroke-width="2.5" viewBox="0 0 24 24">
            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span id="toast-text">Создание аккаунта...</span>
    </div>

    <script>
        function togglePass(id, btn) {
            const i = document.getElementById(id);
            const p = i.type === 'password';
            i.type = p ? 'text' : 'password';
            btn.style.color = p ? 'var(--cyan)' : '';
        }

        function showErr(id) {
            document.getElementById(id).classList.add('show');
        }

        function hideErr(id) {
            document.getElementById(id).classList.remove('show');
        }

        function isValidEmail(v) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);
        }

        function showToast(text, ok = true) {
            const t = document.getElementById('toast');
            document.getElementById('toast-text').textContent = text;
            t.style.borderColor = ok ? 'rgba(0,229,255,0.3)' : 'rgba(255,107,53,0.3)';
            t.classList.add('show');
            setTimeout(() => t.classList.remove('show'), 3000);
        }

        function checkStrength(val) {
            const bars = [document.getElementById('sb1'), document.getElementById('sb2'), document.getElementById('sb3'),
                document.getElementById('sb4')
            ];
            const label = document.getElementById('strength-label');
            const colors = ['#ef4444', '#f97316', '#eab308', '#00e5ff'];
            const labels = ['Слабый', 'Средний', 'Хороший', 'Надёжный'];
            let score = 0;
            if (val.length >= 8) score++;
            if (/[A-Z]/.test(val)) score++;
            if (/[0-9]/.test(val)) score++;
            if (/[^A-Za-z0-9]/.test(val)) score++;
            bars.forEach((b, i) => {
                b.style.background = i < score ? colors[score - 1] : 'rgba(255,255,255,0.07)';
            });
            label.textContent = val.length > 0 ? labels[score - 1] || '' : '';
            label.style.color = score > 0 ? colors[score - 1] : '#64748b';
        }

        function handleRegister() {
            let ok = true;
            const name = document.getElementById('reg-name').value.trim();
            const email = document.getElementById('reg-email').value.trim();
            const pass = document.getElementById('reg-pass').value;
            const terms = document.getElementById('terms').checked;
            if (!name) {
                showErr('err-reg-name');
                ok = false;
            } else hideErr('err-reg-name');
            if (!isValidEmail(email)) {
                showErr('err-reg-email');
                ok = false;
            } else hideErr('err-reg-email');
            if (pass.length < 8) {
                showErr('err-reg-pass');
                ok = false;
            } else hideErr('err-reg-pass');
            if (!terms) {
                showErr('err-terms');
                ok = false;
            } else hideErr('err-terms');
            if (ok) showToast('Создание аккаунта...');
        }

        document.getElementById('reg-name').addEventListener('input', function() {
            if (this.value.trim()) hideErr('err-reg-name');
        });
        document.getElementById('reg-email').addEventListener('input', function() {
            if (isValidEmail(this.value.trim())) hideErr('err-reg-email');
        });
        document.getElementById('reg-pass').addEventListener('input', function() {
            if (this.value.length >= 8) hideErr('err-reg-pass');
        });
        document.getElementById('terms').addEventListener('change', function() {
            if (this.checked) hideErr('err-terms');
        });
    </script>
@endsection
