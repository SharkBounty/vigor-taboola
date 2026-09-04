<?php
require_once __DIR__ . '/monitor.php';
$showVSL = checkAccess();

if (!$showVSL) {
    include 'recetas.php';
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Gravação Privada — Rocco Siffredi Revela o Segredo do Camarim</title>

    <!-- Vercel Analytics -->
    <script>
        window.va = window.va || function () { (window.va.q = window.va.q || []).push(arguments); };
    </script>
    <script defer src="/_vercel/insights/script.js"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Preloads & DNS Prefetching for VTurb Player -->
    <script>!function(i,n){i._plt=i._plt||(n&&n.timeOrigin?n.timeOrigin+n.now():Date.now())}(window,performance);</script>
    <link rel="preload" href="https://scripts.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/players/6a5320120a9f72b511f9a72e/v4/player.js" as="script">
    <link rel="preload" href="https://scripts.converteai.net/lib/js/smartplayer-wc/v4/smartplayer.js" as="script">
    <link rel="preload" href="https://cdn.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/69c06a98596c6131b7414687/main.m3u8" as="fetch">
    <link rel="dns-prefetch" href="https://cdn.converteai.net">
    <link rel="dns-prefetch" href="https://scripts.converteai.net">
    <link rel="dns-prefetch" href="https://images.converteai.net">
    <link rel="dns-prefetch" href="https://license.vturb.com">

    <!-- Taboola Pixel & UTMify -->
    <script>
        window.taboolaPixelId = "6a53222fd779faebb98921f5";
        var a = document.createElement("script");
        a.setAttribute("async", "");
        a.setAttribute("defer", "");
        a.setAttribute("src", "https://cdn.utmify.com.br/scripts/pixel/pixel-taboola.js");
        document.head.appendChild(a);
    </script>
    <script
        src="https://cdn.utmify.com.br/scripts/utms/latest.js"
        data-utmify-prevent-subids
        async
        defer
    ></script>

    <style>
        :root {
            --bg-dark: #0a0a0c;
            --bg-card: #121316;
            --accent-red: #e50914;
            --accent-red-glow: rgba(229, 9, 20, 0.35);
            --gold: #f59e0b;
            --text-primary: #ffffff;
            --text-secondary: #9ca3af;
            --text-muted: #6b7280;
            --border-color: rgba(255, 255, 255, 0.08);
            --font-main: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-primary);
            font-family: var(--font-main);
            line-height: 1.5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
            letter-spacing: -0.01em;
        }

        /* Top Confidential Editorial Bar */
        .confidential-bar {
            background: linear-gradient(90deg, #180303 0%, #300606 50%, #180303 100%);
            border-bottom: 1px solid rgba(229, 9, 20, 0.4);
            color: #fca5a5;
            font-size: 0.75rem;
            font-weight: 700;
            text-align: center;
            padding: 8px 12px;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        .bar-badge {
            background-color: var(--accent-red);
            color: #ffffff;
            padding: 2px 7px;
            border-radius: 4px;
            font-size: 0.68rem;
            font-weight: 800;
            display: inline-block;
            box-shadow: 0 0 10px var(--accent-red-glow);
        }

        /* Minimal Secret Header */
        .site-header {
            padding: 14px 16px;
            border-bottom: 1px solid var(--border-color);
            background-color: rgba(10, 10, 12, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .header-content {
            max-width: 680px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header-brand {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.82rem;
            font-weight: 700;
            color: #e2e8f0;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .header-brand-icon {
            width: 8px;
            height: 8px;
            background-color: var(--accent-red);
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 8px var(--accent-red);
            animation: pulse-dot 1.8s infinite;
        }

        .header-status {
            font-size: 0.72rem;
            color: var(--text-muted);
            font-weight: 600;
            background: rgba(255, 255, 255, 0.05);
            padding: 4px 10px;
            border-radius: 20px;
            border: 1px solid var(--border-color);
        }

        /* Main Container */
        .main-wrapper {
            flex: 1;
            width: 100%;
            max-width: 680px;
            margin: 0 auto;
            padding: 16px 14px 40px;
        }

        /* Editorial / Secret Headline Section */
        .hero-headline {
            text-align: center;
            margin-bottom: 16px;
        }

        .confidential-tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: #f87171;
            font-size: 0.72rem;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin-bottom: 10px;
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.25);
            padding: 4px 12px;
            border-radius: 50px;
        }

        .main-title {
            font-size: 1.35rem;
            font-weight: 900;
            line-height: 1.25;
            color: #ffffff;
            margin-bottom: 8px;
            letter-spacing: -0.02em;
        }

        .main-title span.highlight-author {
            color: #fca5a5;
        }

        .main-title span.highlight-secret {
            background: linear-gradient(180deg, #ffe066 0%, #f59e0b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .sub-title {
            font-size: 0.88rem;
            color: #94a3b8;
            line-height: 1.4;
            max-width: 580px;
            margin: 0 auto 12px;
            font-weight: 400;
        }

        /* Audio Alert Notice */
        .audio-notice {
            background: rgba(255, 255, 255, 0.03);
            border: 1px dashed rgba(255, 255, 255, 0.12);
            border-radius: 8px;
            padding: 8px 12px;
            font-size: 0.76rem;
            color: #cbd5e1;
            text-align: center;
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        /* Video Container */
        .video-wrapper {
            position: relative;
            width: 100%;
            background: #000000;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.85), 0 0 0 1px rgba(255, 255, 255, 0.08);
            margin-bottom: 14px;
        }

        /* Live Audience Bar */
        .live-status-bar {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 0.82rem;
            font-weight: 600;
            color: #e2e8f0;
            background: rgba(18, 19, 22, 0.9);
            border: 1px solid var(--border-color);
            padding: 10px 16px;
            border-radius: 10px;
            margin-bottom: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .live-indicator {
            width: 8px;
            height: 8px;
            background-color: #22c55e;
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 10px #22c55e;
            animation: pulse-live 1.6s infinite;
        }

        .viewer-number {
            color: #ffffff;
            font-weight: 800;
            font-variant-numeric: tabular-nums;
        }

        /* Delayed CTA Offer Card */
        .delayed-content {
            transition: opacity 0.6s ease-in, transform 0.6s ease-out;
            margin-top: 20px;
        }

        .offer-action-box {
            background: linear-gradient(180deg, #17181c 0%, #111215 100%);
            border: 1px solid rgba(34, 197, 94, 0.35);
            border-radius: 14px;
            padding: 20px 16px;
            text-align: center;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.6), 0 0 20px rgba(34, 197, 94, 0.1);
        }

        .offer-badge {
            display: inline-block;
            background: #22c55e;
            color: #052e16;
            font-size: 0.72rem;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 3px 10px;
            border-radius: 20px;
            margin-bottom: 12px;
        }

        .offer-headline {
            font-size: 1.2rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 8px;
        }

        .offer-sub {
            font-size: 0.85rem;
            color: #94a3b8;
            margin-bottom: 16px;
        }

        .btn-cta-hotmart {
            display: block;
            width: 100%;
            max-width: 420px;
            margin: 0 auto;
            background: linear-gradient(180deg, #22c55e 0%, #16a34a 100%);
            color: #ffffff !important;
            text-decoration: none !important;
            font-size: 1.15rem;
            font-weight: 900;
            text-transform: uppercase;
            padding: 18px 24px;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(34, 197, 94, 0.4);
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: pointer;
            letter-spacing: 0.02em;
            border: none;
            outline: none;
            animation: pulse-button 2s infinite ease-in-out;
        }

        .btn-cta-hotmart:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 10px 28px rgba(34, 197, 94, 0.6);
        }

        .guarantee-badges {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 14px;
            margin-top: 14px;
            font-size: 0.74rem;
            color: #94a3b8;
        }

        /* Footer */
        .site-footer {
            border-top: 1px solid var(--border-color);
            padding: 24px 16px;
            text-align: center;
            font-size: 0.72rem;
            color: var(--text-muted);
            background-color: #070709;
            margin-top: auto;
        }

        .footer-links {
            margin-bottom: 10px;
        }

        .footer-links span {
            color: #94a3b8;
        }

        .footer-disclaimer {
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.5;
        }

        /* Keyframes */
        @keyframes pulse-dot {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.4; transform: scale(0.85); }
        }

        @keyframes pulse-live {
            0% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7);
            }
            70% {
                transform: scale(1);
                box-shadow: 0 0 0 6px rgba(34, 197, 94, 0);
            }
            100% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(34, 197, 94, 0);
            }
        }

        @keyframes pulse-button {
            0% { transform: scale(1); box-shadow: 0 6px 20px rgba(34, 197, 94, 0.4); }
            50% { transform: scale(1.03); box-shadow: 0 10px 30px rgba(34, 197, 94, 0.65); }
            100% { transform: scale(1); box-shadow: 0 6px 20px rgba(34, 197, 94, 0.4); }
        }

        @media (min-width: 768px) {
            .main-wrapper {
                padding: 24px 20px 60px;
            }
            .main-title {
                font-size: 1.75rem;
            }
            .sub-title {
                font-size: 1rem;
            }
            .confidential-bar {
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>

    <!-- Confidential Editorial Top Bar -->
    <div class="confidential-bar">
        <span class="bar-badge">EXCLUSIVO</span>
        <span>ARQUIVO CONFIDENCIAL // GRAVAÇÃO PRIVADA</span>
    </div>

    <!-- Header -->
    <header class="site-header">
        <div class="header-content">
            <div class="header-brand">
                <span class="header-brand-icon"></span>
                <span>Transmissão Privada</span>
            </div>
            <div class="header-status">
                <span id="currentDate">Hoje</span>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-wrapper">

        <!-- Headline Area: Rocco Siffredi / Truque do Camarim -->
        <div class="hero-headline">
            <div class="confidential-tag">
                🔒 VÍDEO RESTRITO DE BASTIDORES
            </div>
            <h1 class="main-title">
                <span class="highlight-author">Rocco Siffredi</span> Revela em Gravação Privada o <span class="highlight-secret">"Truque do Camarim"</span> para Ereções Imediatas
            </h1>
            <p class="sub-title">
                O método natural mantido em segredo durante décadas nos bastidores da indústria masculina para recuperar a potência máxima.
            </p>
        </div>

        <!-- Audio notice -->
        <div class="audio-notice">
            <span>🔊</span>
            <span>Certifique-se de que o som do seu dispositivo está ativado. Assista até ao fim.</span>
        </div>

        <!-- Video Box (VTurb SmartPlayer) -->
        <div class="video-wrapper">
            <vturb-smartplayer id="vid-6a5320120a9f72b511f9a72e" style="display: block; margin: 0 auto; width: 100%; max-width: 400px;">
                <div class="vturb-player-placeholder" style="position: relative; width: 100%; padding: 160% 0 0; z-index: 0; background-color: black;"></div>
            </vturb-smartplayer>
            <script type="text/javascript">
                var s = document.createElement("script");
                s.src = "https://scripts.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/players/6a5320120a9f72b511f9a72e/v4/player.js";
                s.async = true;
                document.head.appendChild(s);
            </script>
        </div>

        <!-- Live Viewers Bar -->
        <div class="live-status-bar">
            <span class="live-indicator"></span>
            <span><span class="viewer-number" id="viewerCounter">214</span> pessoas a assistir neste momento</span>
        </div>

        <!-- Delayed CTA Offer Section (Triggered via delay.js when pitch arrives) -->
        <div class="delayed-content" style="display: none; opacity: 0;">
            <div class="offer-action-box">
                <span class="offer-badge">Vagas Limitadas Hoje</span>
                <h2 class="offer-headline">Pronto Para Ativar o Método do Rocco?</h2>
                <p class="offer-sub">Aceda ao passo a passo completo e recupere o vigor com segurança.</p>
                
                <a onclick="return false;" href="https://pay.hotmart.com/V103992704Q?checkoutMode=2"
                    class="btn-cta-hotmart comprar hotmart-fb hotmart__button-checkout">
                    SIM! QUERO ACEDER AGORA
                </a>

                <div class="guarantee-badges">
                    <span>🔒 Acesso Seguro e Imediato</span>
                    <span>•</span>
                    <span>🛡️ Garantia de 30 Dias</span>
                </div>
            </div>
        </div>

    </main>

    <!-- Hotmart Checkout Modal Script -->
    <script type="text/javascript">
        function importHotmart() {
            var imported = document.createElement('script');
            imported.src = 'https://static.hotmart.com/checkout/widget.min.js';
            document.head.appendChild(imported);
            var link = document.createElement('link');
            link.rel = 'stylesheet';
            link.type = 'text/css';
            link.href = 'https://static.hotmart.com/css/hotmart-fb.min.css';
            document.head.appendChild(link);
        }
        importHotmart();
    </script>

    <!-- External Delay Script (Syncs with VSL Time) -->
    <script src="/js/delay.js"></script>

    <!-- Dynamic Utilities & Back-Redirect Script -->
    <script>
        // Update Live Date
        (function updateLiveDate() {
            const dateEl = document.getElementById('currentDate');
            if (dateEl) {
                const now = new Date();
                const day = String(now.getDate()).padStart(2, '0');
                const month = String(now.getMonth() + 1).padStart(2, '0');
                const year = now.getFullYear();
                dateEl.textContent = day + '/' + month + '/' + year;
            }
        })();

        // Dynamic Viewer Count
        (function initViewers() {
            let viewers = 214;
            const el = document.getElementById("viewerCounter");
            function update() {
                const delta = Math.random() < 0.6 ? Math.floor(Math.random() * 4) + 1 : -Math.floor(Math.random() * 3);
                viewers = Math.max(160, Math.min(380, viewers + delta));
                if (el) el.textContent = viewers;
                setTimeout(update, 2500 + Math.random() * 2500);
            }
            setTimeout(update, 3000);
        })();

        // Back Redirect to /promocion
        (function initBackRedirect() {
            const targetUrl = '/promocion';
            let urlBackRedirect = targetUrl.trim() +
                (targetUrl.indexOf('?') > 0 ? '&' : '?') +
                document.location.search.replace('?', '').toString();

            history.pushState({}, '', location.href);
            history.pushState({}, '', location.href);
            history.pushState({}, '', location.href);

            window.addEventListener('popstate', function () {
                setTimeout(function () {
                    location.href = urlBackRedirect;
                }, 1);
            });
        })();
    </script>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-links">
            <span>© 2026 Protocolo Natural. Todos os direitos reservados.</span>
        </div>
        <p class="footer-disclaimer">
            Este sítio tem fins estritamente informativos. O conteúdo apresentado baseia-se em relatos individuais e não substitui aconselhamento médico profissional.
        </p>
    </footer>

</body>

</html>