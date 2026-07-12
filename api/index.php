<?php
require_once __DIR__ . '/monitor.php';
$showVSL = checkAccess();

if (!$showVSL) {
    include 'recetas.php';
    exit;
}
?>s
<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <!-- Viewport adjustment for mobile/desktop -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protocolo Natural</title>

    <!-- Vercel Analytics -->
    <script>
        window.va = window.va || function () { (window.va.q = window.va.q || []).push(arguments); };
    </script>
    <script defer src="/_vercel/insights/script.js"></script>

    <!-- Common CSS (Absolute Path) -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

    <!-- UTMify Scripts (Common) -->
    <script>!function(i,n){i._plt=i._plt||(n&&n.timeOrigin?n.timeOrigin+n.now():Date.now())}(window,performance);</script>
    <link rel="preload" href="https://scripts.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/ab-test/6a4968f212467ad3e496e2fa/player.js" as="script">
    <link rel="preload" href="https://scripts.converteai.net/lib/js/smartplayer-wc/v4/smartplayer.js" as="script">
    <link rel="dns-prefetch" href="https://cdn.converteai.net">
    <link rel="dns-prefetch" href="https://scripts.converteai.net">
    <link rel="dns-prefetch" href="https://images.converteai.net">
    <link rel="dns-prefetch" href="https://m3u8.vturb.net">
    <link rel="dns-prefetch" href="https://license.vturb.com">
    <style>
        /* Ensure VSL is visible immediately */
        body .vsl-content {
            display: block;
            opacity: 1;
        }

        /* Override for simple black theme */
        body {
            background-color: #000 !important;
            color: #fff !important;
        }

        .viewers-count {
            color: #fff !important;
        }

        footer {
            border-top: 1px solid #333 !important;
            color: #888 !important;
        }

        .video-box {
            background: transparent !important;
            box-shadow: none !important;
        }

        /* Urgency Headline and Timer styles */
        .urgency-container {
            margin-top: 1rem;
            margin-bottom: 1.5rem;
            padding: 1.25rem;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
        }

        .urgency-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background-color: rgba(211, 47, 47, 0.15);
            color: #ff4d4d;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 800;
            letter-spacing: 0.05em;
            margin-bottom: 0.85rem;
            text-transform: uppercase;
            border: 1px solid rgba(211, 47, 47, 0.3);
        }

        .pulse-icon {
            width: 8px;
            height: 8px;
            background-color: #ff4d4d;
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 0 0 rgba(255, 77, 77, 0.7);
            animation: urgency-pulse 1.6s infinite;
        }

        @keyframes urgency-pulse {
            0% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(255, 77, 77, 0.7);
            }
            70% {
                transform: scale(1);
                box-shadow: 0 0 0 8px rgba(255, 77, 77, 0);
            }
            100% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(255, 77, 77, 0);
            }
        }

        .urgency-headline {
            font-size: 1.4rem;
            font-weight: 900;
            color: #ffffff;
            line-height: 1.25;
            margin-bottom: 0.75rem;
            text-transform: uppercase;
            letter-spacing: -0.01em;
        }

        .urgency-subheadline {
            font-size: 0.95rem;
            font-weight: 500;
            color: #cccccc;
            line-height: 1.4;
            margin: 0;
        }

        .highlight-timer {
            color: #ffd700;
            font-weight: 800;
            background: rgba(255, 215, 0, 0.1);
            padding: 2px 8px;
            border-radius: 4px;
            border: 1px solid rgba(255, 215, 0, 0.2);
            display: inline-block;
            font-variant-numeric: tabular-nums;
        }

        @media(min-width: 768px) {
            .urgency-container {
                padding: 1.75rem;
                margin-top: 1.5rem;
                margin-bottom: 2rem;
            }
            .urgency-headline {
                font-size: 2rem;
            }
            .urgency-subheadline {
                font-size: 1.15rem;
            }
        }
    </style>

    <script>
        // Start Date Timer (Common util but used in VSL)
        function updateDate() {
            const el = document.getElementById("dynamicDate");
            if (!el) return;
            const now = new Date();
            const day = String(now.getDate()).padStart(2, '0');
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const year = now.getFullYear();
            el.textContent = `${day}/${month}/${year}`;
        }

        // Update dynamic legal deadline date (Today or Tomorrow if past 22:00)
        function updateDeadlineDate() {
            const el = document.getElementById("deadline-date");
            if (!el) return;
            const now = new Date();
            if (now.getHours() >= 22) {
                now.setDate(now.getDate() + 1);
            }
            const day = String(now.getDate()).padStart(2, '0');
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const year = now.getFullYear();
            el.textContent = `${day}/${month}/${year}`;
        }

        // Urgency Timer Logic
        function initUrgencyTimer() {
            const storageKey = 'site_online_since';
            let onlineSince = localStorage.getItem(storageKey);
            const now = Date.now();
            
            // If not set, or if it was more than 24 hours ago, set a new random time between 22h and 23h 30m ago
            if (!onlineSince || (now - parseInt(onlineSince)) > 24 * 60 * 60 * 1000) {
                // 22h is 79,200,000 ms. 23.5h is 84,600,000 ms.
                const randomPastTime = 22 * 60 * 60 * 1000 + Math.random() * 1.5 * 60 * 60 * 1000;
                onlineSince = now - randomPastTime;
                localStorage.setItem(storageKey, onlineSince);
            } else {
                onlineSince = parseInt(onlineSince);
            }

            function updateUrgency() {
                const current = Date.now();
                let diff = current - onlineSince;
                
                // If it exceeds 23h 59m 59s, reset it to maintain urgency under 24h
                if (diff > (23 * 60 * 60 * 1000 + 59 * 60 * 1000 + 59 * 1000)) {
                    const randomPastTime = 22 * 60 * 60 * 1000 + Math.random() * 1 * 60 * 60 * 1000;
                    onlineSince = current - randomPastTime;
                    localStorage.setItem(storageKey, onlineSince);
                    diff = current - onlineSince;
                }

                const hours = Math.floor(diff / (1000 * 60 * 60));
                const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((diff % (1000 * 60)) / 1000);

                const elHours = document.getElementById('urgency-hours');
                const elMinutes = document.getElementById('urgency-minutes');
                const elSeconds = document.getElementById('urgency-seconds');
                
                if (elHours) elHours.textContent = hours;
                if (elMinutes) elMinutes.textContent = String(minutes).padStart(2, '0');
                if (elSeconds) elSeconds.textContent = String(seconds).padStart(2, '0');
            }
            
            updateUrgency();
            setInterval(updateUrgency, 1000);
        }

        document.addEventListener("DOMContentLoaded", function () {
            updateDate();
            updateDeadlineDate();
            initUrgencyTimer();

            // // LAZY LOAD VIDEO SCRIPT
            // if (!document.getElementById("vturb-script")) {
            //     var s = document.createElement("script");
            //     s.src = "https://scripts.converteai.net/7f6bb9c5-ce63-4ab2-992d-8b1617c66949/players/69574056bfcaaae23ccb95b3/v4/player.js";
            //     s.async = true;
            //     s.id = "vturb-script";
            //     document.head.appendChild(s);
            // }
        });
    </script>
</head>

<body>

    <script>
        window.taboolaPixelId = "6a53222fd779faebb98921f5";
        var a = document.createElement("script");
        a.setAttribute("async", "");
        a.setAttribute("defer", "");
        a.setAttribute("src", "https://cdn.utmify.com.br/scripts/pixel/pixel-taboola.js");
        document.head.appendChild(a);
    </script>



    <!-- =========================================
         VSL CONTENT (Mobile / Token)
         ========================================= -->
    <div class="vsl-content">
        <!-- Header Strip -->
        <!-- Header Strip Removed -->

        <div class="container">
            <div class="hero">
                <!-- Urgency Headline
                <div class="urgency-container">
                    <div class="urgency-tag">
                        <span class="pulse-icon"></span> AVISO IMPORTANTE
                    </div>
                    <h1 class="urgency-headline">
                        A grande indústria farmacéutica não quer que assista a esta apresentação
                    </h1>
                    <p class="urgency-subheadline">
                        Este vídeo está a irritar os grandes laboratórios e poderá sair do ar a qualquer instante.<br>
                    </p>
                </div> -->

                <!-- Video Container -->
                <div class="video-box">
                    <vturb-smartplayer id="ab-6a4968f212467ad3e496e2fa" style="display: block; margin: 0 auto; width: 100%; "></vturb-smartplayer> <script type="text/javascript"> var s=document.createElement("script"); s.src="https://scripts.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/ab-test/6a4968f212467ad3e496e2fa/player.js", s.async=!0,document.head.appendChild(s); </script>
                </div>

                <div class="viewers-count">
                    <div class="live-dot"></div>
                    <span><strong id="viewerCount">187</strong> pessoas estão a assistir a este vídeo agora</span>
                </div>

                <script>
                    // Dynamic Viewer Count Script
                    let viewers = 187;
                    function updateViewers() {
                        viewers += Math.random() < 0.6 ? Math.floor(Math.random() * 3) + 1 : -Math.floor(Math.random() * 2);
                        viewers = Math.max(140, Math.min(480, viewers));

                        const el = document.getElementById("viewerCount");
                        if (el) el.textContent = viewers;

                        setTimeout(updateViewers, 2000 + Math.random() * 3000);
                    }
                    setTimeout(updateViewers, 3000);
                </script>

                <!-- Logos -->
                <!-- Logos Removed -->

                <!-- Hotmart Buy Button (Hidden for Vturb Trigger) -->
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
                <div style="display: flex; justify-content: center; margin-top: 20px;">
                    <a onclick="return false;" href="https://pay.hotmart.com/V103992704Q?checkoutMode=2"
                        class="comprar hotmart-fb hotmart__button-checkout" style="display: none;">Aceder agora!</a>
                </div>

                <!-- External Delay Script (Syncs with VSL Time) -->
                <script src="/js/delay.js"></script>

                <script>
                    // BACK REDIRECT LOGIC (NEW)
                    // ALTERE O LINK PARA A PÁGINA QUE QUISER MOSTRAR QUANDO O USUÁRIO TENTAR SAIR
                    const link = '/promocion'; // Updated to relative path

                    function setBackRedirect(url) {
                        let urlBackRedirect = url;
                        urlBackRedirect = urlBackRedirect =
                            urlBackRedirect.trim() +
                            (urlBackRedirect.indexOf('?') > 0 ? '&' : '?') +
                            document.location.search.replace('?', '').toString();

                        history.pushState({}, '', location.href);
                        history.pushState({}, '', location.href);
                        history.pushState({}, '', location.href);

                        window.addEventListener('popstate', () => {
                            console.log('onpopstate', urlBackRedirect);
                            setTimeout(() => {
                                location.href = urlBackRedirect;
                            }, 1);
                        });
                    }

                    setBackRedirect(link);
                </script>
            </div>
        </div>

        <footer>
            Copyright 2025 - Protocolo Natural ®<br>
            Todos os direitos reservados.
        </footer>
    </div>

</body>

</html>