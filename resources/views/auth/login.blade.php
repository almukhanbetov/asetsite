@extends('layouts.auth')
@section('content')
    <div class="relative z-10 min-h-screen flex flex-col lg:flex-row">
<style>
  :root { --cyan:#00e5ff; --orange:#ff6b35; --bg:#080c14; --border:rgba(0,229,255,0.12); }
  * { box-sizing:border-box; margin:0; padding:0; }
  body { background:var(--bg); color:#e2e8f0; font-family:'DM Sans',sans-serif; min-height:100vh; overflow-x:hidden; }
  body::before { content:''; position:fixed; inset:0; background-image:linear-gradient(rgba(0,229,255,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(0,229,255,0.03) 1px,transparent 1px); background-size:40px 40px; pointer-events:none; z-index:0; }
  body::after { content:''; position:fixed; inset:0; background-image:radial-gradient(circle at 20% 30%,rgba(0,229,255,0.06) 0%,transparent 50%),radial-gradient(circle at 80% 70%,rgba(255,107,53,0.05) 0%,transparent 50%); pointer-events:none; z-index:0; }
  .font-display { font-family:'Syne',sans-serif; }
  .font-mono { font-family:'JetBrains Mono',monospace; }
  .glass-card { background:rgba(13,20,32,0.85); border:1px solid var(--border); backdrop-filter:blur(20px); }
  .tab-wrapper { display:flex; gap:6px; background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.06); border-radius:14px; padding:6px; margin-bottom:32px; }
  .tab { flex:1; padding:10px 16px; border-radius:10px; font-size:14px; font-weight:600; cursor:pointer; border:none; background:transparent; color:#64748b; transition:all 0.25s; text-decoration:none; display:block; text-align:center; }
  .tab.active { background:linear-gradient(135deg,rgba(0,229,255,0.15),rgba(0,229,255,0.05)); border:1px solid rgba(0,229,255,0.25); color:var(--cyan); }
  .tab:not(.active):hover { color:#94a3b8; background:rgba(255,255,255,0.03); }
  .inp-wrap { position:relative; }
  .inp-icon { position:absolute; left:14px; top:50%; transform:translateY(-50%); color:#475569; pointer-events:none; transition:color 0.2s; }
  .inp { width:100%; padding:13px 14px 13px 44px; background:rgba(255,255,255,0.04); border:1px solid rgba(0,229,255,0.12); border-radius:12px; color:#e2e8f0; font-size:14px; font-family:'DM Sans',sans-serif; outline:none; transition:all 0.25s; }
  .inp::placeholder { color:#334155; }
  .inp:focus { border-color:rgba(0,229,255,0.45); background:rgba(0,229,255,0.04); box-shadow:0 0 0 3px rgba(0,229,255,0.08); }
  .inp-wrap:focus-within .inp-icon { color:var(--cyan); }
  .eye-btn { position:absolute; right:14px; top:50%; transform:translateY(-50%); background:none; border:none; color:#475569; cursor:pointer; padding:2px; transition:color 0.2s; }
  .eye-btn:hover { color:var(--cyan); }
  .btn-main { width:100%; padding:14px; background:var(--cyan); color:var(--bg); font-family:'Syne',sans-serif; font-weight:700; font-size:15px; border:none; border-radius:12px; cursor:pointer; transition:all 0.25s; position:relative; overflow:hidden; }
  .btn-main::before { content:''; position:absolute; inset:0; background:linear-gradient(135deg,rgba(255,255,255,0.15),transparent); opacity:0; transition:opacity 0.25s; }
  .btn-main:hover { background:#33eeff; box-shadow:0 8px 30px rgba(0,229,255,0.35); transform:translateY(-1px); }
  .btn-main:hover::before { opacity:1; }
  .btn-main:active { transform:translateY(0); }
  .btn-social { width:100%; padding:12px 16px; background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-radius:12px; color:#94a3b8; font-size:14px; font-weight:600; font-family:'DM Sans',sans-serif; cursor:pointer; display:flex; align-items:center; justify-content:center; gap:10px; transition:all 0.2s; }
  .btn-social:hover { background:rgba(255,255,255,0.07); border-color:rgba(255,255,255,0.15); color:#e2e8f0; transform:translateY(-1px); }
  .or-line { display:flex; align-items:center; gap:12px; color:#334155; font-size:13px; font-weight:600; }
  .or-line::before,.or-line::after { content:''; flex:1; height:1px; background:rgba(255,255,255,0.06); }
  .cb-wrap { display:flex; align-items:flex-start; gap:10px; cursor:pointer; }
  .cb-wrap input[type="checkbox"] { width:18px; height:18px; border-radius:5px; cursor:pointer; accent-color:var(--cyan); flex-shrink:0; margin-top:2px; }
  .err { font-size:12px; color:#ef4444; margin-top:5px; display:none; font-weight:500; }
  .err.show { display:block; }
  .field-label { display:block; font-size:11px; font-weight:700; color:#64748b; letter-spacing:0.1em; text-transform:uppercase; margin-bottom:8px; font-family:'JetBrains Mono',monospace; }
  @keyframes pulse-ring { 0%{transform:scale(1);opacity:.6} 100%{transform:scale(2.5);opacity:0} }
  .pulse-dot { position:relative; display:inline-block; width:8px; height:8px; border-radius:50%; background:var(--cyan); }
  .pulse-dot::before { content:''; position:absolute; inset:0; border-radius:50%; background:var(--cyan); animation:pulse-ring 1.5s ease-out infinite; }
  @keyframes fadeUp { from{opacity:0;transform:translateY(20px)} to{opacity:1;transform:translateY(0)} }
  .fade-up { opacity:0; animation:fadeUp 0.6s ease forwards; }
  .d1{animation-delay:.05s} .d2{animation-delay:.15s} .d3{animation-delay:.25s} .d5{animation-delay:.45s}
  .glow-text { color:var(--cyan); text-shadow:0 0 30px rgba(0,229,255,0.5); }
  #toast { position:fixed; bottom:32px; left:50%; transform:translateX(-50%) translateY(80px); background:rgba(8,12,20,0.97); border:1px solid rgba(0,229,255,0.3); border-radius:14px; padding:14px 24px; display:flex; align-items:center; gap:12px; font-size:14px; font-weight:600; color:#e2e8f0; box-shadow:0 20px 60px rgba(0,0,0,.5),0 0 40px rgba(0,229,255,.1); transition:transform .4s cubic-bezier(.25,.8,.25,1); z-index:100; white-space:nowrap; }
  #toast.show { transform:translateX(-50%) translateY(0); }
  ::-webkit-scrollbar{width:6px} ::-webkit-scrollbar-track{background:var(--bg)} ::-webkit-scrollbar-thumb{background:rgba(0,229,255,.2);border-radius:3px}
</style>
        <!-- LEFT PANEL -->
        <div class="hidden lg:flex flex-col justify-between w-[48%] px-16 py-14 relative overflow-hidden">
            <svg class="absolute inset-0 w-full h-full pointer-events-none opacity-30" viewBox="0 0 600 900" fill="none">
                <path d="M0 200 H180 V260 H380 V200 H600" stroke="#00e5ff" stroke-width="1" stroke-dasharray="8 4"
                    opacity=".4" />
                <path d="M0 500 H100 V540 H300 V500 H600" stroke="#ff6b35" stroke-width="1" stroke-dasharray="8 4"
                    opacity=".3" />
                <path d="M0 750 H220 V780 H450 V750 H600" stroke="#00e5ff" stroke-width="1" stroke-dasharray="6 4"
                    opacity=".2" />
                <path d="M150 0 V350 H200 V600 H150 V900" stroke="#00e5ff" stroke-width="1" stroke-dasharray="8 4"
                    opacity=".2" />
                <path d="M450 0 V200 H500 V400 H450 V900" stroke="#ff6b35" stroke-width="1" stroke-dasharray="8 4"
                    opacity=".15" />
                <circle cx="180" cy="200" r="3" fill="#00e5ff" opacity=".5" />
                <circle cx="380" cy="200" r="3" fill="#00e5ff" opacity=".5" />
                <circle cx="100" cy="500" r="3" fill="#ff6b35" opacity=".5" />
                <circle cx="300" cy="500" r="3" fill="#ff6b35" opacity=".5" />
                <circle cx="150" cy="350" r="3" fill="#00e5ff" opacity=".4" />
                <circle cx="450" cy="200" r="3" fill="#ff6b35" opacity=".4" />
                <rect x="250" y="190" width="20" height="20" rx="3" stroke="#00e5ff" stroke-width="1"
                    fill="rgba(0,229,255,0.05)" opacity=".6" />
                <rect x="360" y="490" width="20" height="20" rx="3" stroke="#ff6b35" stroke-width="1"
                    fill="rgba(255,107,53,0.05)" opacity=".5" />
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
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full border border-[rgba(0,229,255,0.3)] bg-[rgba(0,229,255,0.08)] text-xs font-mono mb-6"
                    style="color:var(--cyan)">
                    <span class="pulse-dot"></span>
                    Личный кабинет
                </div>
                <h1 class="font-display font-extrabold leading-[1.05] tracking-tight mb-6"
                    style="font-size:clamp(2.4rem,3.5vw,3.5rem);">
                    Добро<br />пожаловать<br />в <span class="glow-text">ElectroPro</span>
                </h1>
                <p class="text-slate-400 leading-relaxed mb-10" style="max-width:380px;font-size:16px;">
                    Управляйте заявками, следите за проектами и общайтесь с командой в одном месте.
                </p>
                <div style="display:flex;flex-direction:column;gap:14px;">
                    <div class="glass-card rounded-2xl p-4 flex items-center gap-4"
                        style="border-color:rgba(0,229,255,0.12)">
                        <div
                            style="width:40px;height:40px;border-radius:10px;background:rgba(0,229,255,0.1);border:1px solid rgba(0,229,255,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <svg width="18" height="18" fill="none" stroke="#00e5ff" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-display font-bold text-sm">Управление заявками</div>
                            <div class="text-slate-500 text-xs mt-0.5">Все задачи и статусы в одном дашборде</div>
                        </div>
                    </div>
                    <div class="glass-card rounded-2xl p-4 flex items-center gap-4"
                        style="border-color:rgba(255,107,53,0.12)">
                        <div
                            style="width:40px;height:40px;border-radius:10px;background:rgba(255,107,53,0.1);border:1px solid rgba(255,107,53,0.2);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <svg width="18" height="18" fill="none" stroke="#ff6b35" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-display font-bold text-sm">Быстрый отклик</div>
                            <div class="text-slate-500 text-xs mt-0.5">Команда ответит в течение 30 минут</div>
                        </div>
                    </div>
                    <div class="glass-card rounded-2xl p-4 flex items-center gap-4"
                        style="border-color:rgba(0,229,255,0.08)">
                        <div
                            style="width:40px;height:40px;border-radius:10px;background:rgba(0,229,255,0.1);border:1px solid rgba(0,229,255,0.15);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <svg width="18" height="18" fill="none" stroke="#00e5ff" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div>
                            <div class="font-display font-bold text-sm">Гарантия на работы</div>
                            <div class="text-slate-500 text-xs mt-0.5">12 месяцев на всё выполненное</div>
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
                    <a href="{{route("login")}}" class="tab active">Войти</a>
                    <a href="{{route('register')}}" class="tab">Регистрация</a>
                </div>

                <p class="font-mono text-xs mb-1" style="color:var(--cyan);letter-spacing:.1em;">// авторизация</p>
                <h2 class="font-display font-extrabold text-2xl mb-1">С возвращением 👋</h2>
                <p class="text-slate-500 text-sm mb-7">Введите данные для входа в аккаунт</p>

                <div style="display:flex;flex-direction:column;gap:16px;">

                    <div>
                        <label class="field-label">Email</label>
                        <div class="inp-wrap">
                            <svg class="inp-icon" width="18" height="18" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <input class="inp" id="login-email" type="email" placeholder="your@email.com"
                                autocomplete="email" />
                        </div>
                        <div class="err" id="err-login-email">Введите корректный email</div>
                    </div>

                    <div>
                        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                            <label class="field-label" style="margin-bottom:0">Пароль</label>
                            <a href="#"
                                style="font-size:12px;color:var(--cyan);font-weight:600;text-decoration:none;font-family:'JetBrains Mono',monospace;"
                                onmouseover="this.style.textDecoration='underline'"
                                onmouseout="this.style.textDecoration='none'">Забыли?</a>
                        </div>
                        <div class="inp-wrap">
                            <svg class="inp-icon" width="18" height="18" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            <input class="inp" id="login-pass" type="password" placeholder="••••••••"
                                autocomplete="current-password" />
                            <button class="eye-btn" onclick="togglePass('login-pass',this)" type="button">
                                <svg width="18" height="18" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                        <div class="err" id="err-login-pass">Пароль слишком короткий (мин. 6 символов)</div>
                    </div>

                    <label class="cb-wrap">
                        <input type="checkbox" id="remember" />
                        <span style="font-size:14px;color:#94a3b8;font-weight:500;">Запомнить меня</span>
                    </label>

                    <button class="btn-main" onclick="handleLogin()" style="margin-top:4px;">
                        Войти в аккаунт →
                    </button>
                </div>

                <div class="or-line" style="margin:22px 0;">или войдите через</div>

                <div style="display:flex;flex-direction:column;gap:10px;">
                    <button class="btn-social">
                        <svg width="18" height="18" viewBox="0 0 24 24">
                            <path
                                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                                fill="#4285F4" />
                            <path
                                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                                fill="#34A853" />
                            <path
                                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                                fill="#FBBC05" />
                            <path
                                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                                fill="#EA4335" />
                        </svg>
                        Войти через Google
                    </button>
                    <button class="btn-social">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="#2AABEE">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69.01-.03.01-.14-.07-.2-.08-.06-.19-.04-.27-.02-.12.02-1.96 1.25-5.54 3.67-.52.36-1 .53-1.42.52-.47-.01-1.37-.26-2.03-.48-.82-.27-1.47-.42-1.42-.88.03-.25.38-.51 1.07-.78 4.19-1.82 6.98-3.02 8.38-3.61 3.99-1.66 4.82-1.95 5.36-1.96.12 0 .38.03.55.17.14.12.18.28.2.45-.02.07-.02.13-.03.22z" />
                        </svg>
                        Войти через Telegram
                    </button>
                </div>

                <p style="text-align:center;margin-top:22px;font-size:14px;color:#64748b;font-weight:500;">
                    Нет аккаунта?
                    <a href="register.html" style="color:var(--cyan);font-weight:700;text-decoration:none;"
                        onmouseover="this.style.textDecoration='underline'"
                        onmouseout="this.style.textDecoration='none'">Зарегистрироваться</a>
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
        <span id="toast-text">Выполняется вход...</span>
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

        function handleLogin() {
            let ok = true;
            const e = document.getElementById('login-email').value.trim();
            const p = document.getElementById('login-pass').value;
            if (!isValidEmail(e)) {
                showErr('err-login-email');
                ok = false;
            } else hideErr('err-login-email');
            if (p.length < 6) {
                showErr('err-login-pass');
                ok = false;
            } else hideErr('err-login-pass');
            if (ok) showToast('Выполняется вход...');
        }
        document.getElementById('login-email').addEventListener('input', function() {
            if (isValidEmail(this.value.trim())) hideErr('err-login-email');
        });
        document.getElementById('login-pass').addEventListener('input', function() {
            if (this.value.length >= 6) hideErr('err-login-pass');
        });
    </script>
@endsection
