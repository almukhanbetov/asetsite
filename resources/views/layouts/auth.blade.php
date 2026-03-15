<!DOCTYPE html>
<html lang="ru" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ElectroPro — Микросхемы, Шлагбаумы, Мойки</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="grid-bg circuit-overlay">

    <!-- ═══════════════ NAVBAR ═══════════════ -->
    {{-- @include('includes.nav') --}}

    {{-- <!-- ═══════════════ HERO ═══════════════ -->
    @include('includes.hero') --}}

    @yield('content')


    <!-- ═══════════════ FOOTER ═══════════════ -->
    @include('includes.footer')

    <script src="assets/js/main.js"></script>
</body>

</html>
