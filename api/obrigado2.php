<?php
// Proteção de token e sanitização para evitar XSS

// Captura os dados passados pelo link do e-mail do n8n
$nome     = isset($_GET['nome']) ? $_GET['nome'] : '';
$email    = isset($_GET['email']) ? $_GET['email'] : '';
$telefone = isset($_GET['telefone']) ? $_GET['telefone'] : '';

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protocolo Natural</title>

    <script>
        window.va = window.va || function () { (window.va.q = window.va.q || []).push(arguments); };
    </script>
    <script defer src="/_vercel/insights/script.js"></script>

    <link rel="stylesheet" href="/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

    <script src="https://cdn.utmify.com.br/scripts/utms/latest.js" data-utmify-prevent-subids async defer></script>
    <script>!function (i, n) { i._plt = i._plt || (n && n.timeOrigin ? n.timeOrigin + n.now() : Date.now()) }(window, performance);</script>
    <link rel="preload" href="https://scripts.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/players/698aabbc08ae119f5e0219dd/v4/player.js" as="script">
    <link rel="preload" href="https://scripts.converteai.net/lib/js/smartplayer-wc/v4/smartplayer.js" as="script">
    <link rel="preload" href="https://cdn.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/698aab7d2d330b14411673fb/main.m3u8" as="fetch">
    <link rel="dns-prefetch" href="https://cdn.converteai.net">
    <link rel="dns-prefetch" href="https://scripts.converteai.net">
    <link rel="dns-prefetch" href="https://images.converteai.net">
    <link rel="dns-prefetch" href="https://api.vturb.com.br">

    <style>
        body .vsl-content {
            display: block;
            opacity: 1;
        }

        body {
            background-color: #fff !important;
            color: #000 !important;
        }

        footer {
            border-top: 1px solid #ccc !important;
            color: #333 !important;
            padding: 20px 0;
            text-align: center;
        }

        .video-box {
            background: transparent !important;
            box-shadow: none !important;
            margin-bottom: 20px;
        }
        
        /* Estilização moderna e ultra-limpa do botão Call To Action */
        .cta-container {
            text-align: center;
            margin: 35px auto;
            padding: 0 15px;
        }

        .custom-cta-button {
            display: inline-block;
            background: linear-gradient(180deg, #85d036 0%, #5ca11a 100%) !important;
            color: #ffffff !important;
            font-family: 'Inter', sans-serif;
            font-weight: 800;
            font-size: 22px;
            text-decoration: none !important;
            text-align: center;
            padding: 18px 40px;
            border-radius: 8px;
            border: none !important;
            box-shadow: 0 4px 15px rgba(92, 161, 26, 0.4);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: transform 0.2s, box-shadow 0.2s;
            width: 100%;
            max-width: 380px;
            box-sizing: border-box;
        }

        .custom-cta-button:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 20px rgba(92, 161, 26, 0.6);
            background: linear-gradient(180deg, #92e03c 0%, #63ad1c 100%) !important;
        }

        .custom-cta-button:active {
            transform: scale(0.98);
        }
         .no-thanks {
            color: #999;
            text-decoration: underline;
            font-size: 0.9rem;
        }
    </style>

    <script>
        function updateDate() {
            const el = document.getElementById("dynamicDate");
            if (!el) return;
            const now = new Date();
            const day = String(now.getDate()).padStart(2, '0');
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const year = now.getFullYear();
            el.textContent = `${day}/${month}/${year}`;
        }

        document.addEventListener("DOMContentLoaded", function () {
            updateDate();
        });
    </script>
</head>

<body>

       <!-- Pixel -->
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

    <div class="vsl-content">

        <div class="container">
            <div class="hero">
                <div class="video-box">
                    <vturb-smartplayer id="vid-698aabbc08ae119f5e0219dd"
                        style="display: block; margin: 0 auto; width: 100%; max-width: 400px;"></vturb-smartplayer>
                    <script type="text/javascript"> 
                        var s = document.createElement("script"); 
                        s.src = "https://scripts.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/players/698aabbc08ae119f5e0219dd/v4/player.js", s.async = !0, document.head.appendChild(s); 
                    </script>
                </div>

                <div class="cta-container visible" style="display: none">
                    <a href="https://pay.hotmart.com/D104367972M?name=<?php echo urlencode($nome); ?>&email=<?php echo urlencode($email); ?>&phonenumber=<?php echo urlencode($telefone); ?>" class="custom-cta-button">
                        QUERO ESTA OPORTUNIADE
                    </a>
                    <a href="/oferta" style="margin-top: 10px" class="no-thanks">
                       não quero esta oportunidade
                    </a>
                </div>

                <script src="/js/delay.js"></script>

                <script>
                    // BACK REDIRECT LOGIC
                    const link = '/oferta';

                    function setBackRedirect(url) {
                        let urlBackRedirect = url;
                        urlBackRedirect = urlBackRedirect.trim() +
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
            Copyrights 2026 - Protocolo Natural ®<br>
            Todos os direitos reservados.
        </footer>
    </div>

</body>
</html>