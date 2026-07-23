<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protocolo Natural — Conteúdo Educativo</title>

    <!-- Vercel Analytics -->
    <script>
        window.va = window.va || function () { (window.va.q = window.va.q || []).push(arguments); };
    </script>
    <script defer src="/_vercel/insights/script.js"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;500;700;800&display=swap" rel="stylesheet">

    <!-- Preloads & DNS Prefetching for VTurb Player performance -->
    <link rel="preload" href="https://scripts.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/players/69923cd09256726183cee2e3/v4/player.js" as="script">
    <link rel="preload" href="https://scripts.converteai.net/lib/js/smartplayer-wc/v4/smartplayer.js" as="script">
    <link rel="preload" href="https://cdn.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/69923c67725525410351094a/main.m3u8" as="fetch">
    <link rel="dns-prefetch" href="https://cdn.converteai.net">
    <link rel="dns-prefetch" href="https://scripts.converteai.net">
    <link rel="dns-prefetch" href="https://images.converteai.net">
    <link rel="dns-prefetch" href="https://api.vturb.com.br">

    <style>
        :root {
            --primary: #1b4332;
            --primary-light: #2d6a4f;
            --accent: #40916c;
            --accent-light: #d8f3dc;
            --bg-light: #f7faf9;
            --card-bg: #ffffff;
            --text-dark: #081c15;
            --text-body: #2d3748;
            --text-muted: #718096;
            --border: #e2e8f0;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-body);
            background-color: var(--bg-light);
            line-height: 1.6;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(64, 145, 108, 0.04) 0%, transparent 40%),
                radial-gradient(circle at 90% 80%, rgba(82, 183, 136, 0.04) 0%, transparent 40%);
            background-attachment: fixed;
        }

        /* Announcement Bar */
        .announcement-bar {
            background-color: var(--primary);
            color: var(--accent-light);
            text-align: center;
            padding: 8px 16px;
            font-size: 0.85rem;
            font-weight: 500;
            letter-spacing: 0.5px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Header */
        .site-header {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 15px 20px;
        }

        .header-container {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.25rem;
            font-weight: 500;
            color: var(--text-dark);
        }

        .logo strong {
            font-weight: 800;
            color: var(--accent);
        }

        .logo-icon {
            font-size: 1.4rem;
        }

        .header-badge {
            background-color: var(--accent-light);
            color: var(--primary);
            font-size: 0.75rem;
            font-weight: 700;
            padding: 5px 12px;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Hero */
        .hero-section {
            padding: 50px 20px 30px;
            text-align: center;
        }

        .hero-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .badge-educational {
            display: inline-block;
            background: linear-gradient(135deg, var(--accent-light) 0%, rgba(216, 243, 220, 0.5) 100%);
            border: 1px solid var(--accent);
            color: var(--primary-light);
            font-size: 0.8rem;
            font-weight: 700;
            padding: 6px 16px;
            border-radius: 50px;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 10px rgba(64, 145, 108, 0.05);
        }

        .hero-section h1 {
            font-size: 2.2rem;
            color: var(--text-dark);
            margin-bottom: 15px;
            font-weight: 800;
            line-height: 1.25;
            letter-spacing: -0.5px;
        }

        .hero-subtitle {
            font-size: 1.1rem;
            color: var(--text-muted);
            max-width: 650px;
            margin: 0 auto;
            font-weight: 400;
        }

        /* Main Content & Video Container */
        .main-content {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px 60px;
        }

        .video-section {
            margin-bottom: 50px;
        }

        .video-container {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 12px;
            box-shadow: 0 20px 40px rgba(8, 28, 21, 0.06);
            border: 1px solid rgba(64, 145, 108, 0.1);
            position: relative;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .video-wrapper {
            position: relative;
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
            background-color: #000;
        }

        .video-note {
            text-align: center;
            font-size: 0.85rem;
            color: var(--text-muted);
            font-style: italic;
        }

        /* Takeaways Section */
        .takeaways-section {
            background-color: var(--card-bg);
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(8, 28, 21, 0.03);
            border: 1px solid var(--border);
            margin-bottom: 50px;
        }

        .takeaways-section h2 {
            font-size: 1.5rem;
            text-align: center;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 10px;
        }

        .takeaways-section h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background-color: var(--accent);
            border-radius: 2px;
        }

        .takeaways-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 25px;
        }

        .takeaway-card {
            padding: 20px;
            border-radius: 12px;
            background-color: var(--bg-light);
            border: 1px solid transparent;
            transition: var(--transition);
        }

        .takeaway-card:hover {
            transform: translateY(-4px);
            border-color: rgba(64, 145, 108, 0.2);
            box-shadow: 0 8px 20px rgba(64, 145, 108, 0.05);
        }

        .takeaway-icon {
            font-size: 2rem;
            margin-bottom: 15px;
            display: inline-block;
        }

        .takeaway-card h3 {
            font-size: 1.1rem;
            color: var(--text-dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .takeaway-card p {
            font-size: 0.9rem;
            color: var(--text-muted);
            line-height: 1.5;
        }

        /* FAQ Accordion Section */
        .faq-section {
            background-color: var(--card-bg);
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(8, 28, 21, 0.03);
            border: 1px solid var(--border);
        }

        .faq-section h2 {
            font-size: 1.5rem;
            text-align: center;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 10px;
        }

        .faq-section h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background-color: var(--accent);
            border-radius: 2px;
        }

        .faq-accordion {
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 700px;
            margin: 0 auto;
        }

        .faq-item {
            border: 1px solid var(--border);
            border-radius: 10px;
            overflow: hidden;
            transition: var(--transition);
            background-color: var(--bg-light);
        }

        .faq-item[open] {
            border-color: rgba(64, 145, 108, 0.3);
            background-color: #fff;
            box-shadow: 0 4px 15px rgba(64, 145, 108, 0.03);
        }

        .faq-question {
            padding: 18px 20px;
            font-weight: 600;
            font-size: 1rem;
            color: var(--text-dark);
            cursor: pointer;
            list-style: none;
            position: relative;
            outline: none;
            user-select: none;
            transition: var(--transition);
        }

        .faq-question::-webkit-details-marker {
            display: none;
        }

        .faq-question::after {
            content: '+';
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.4rem;
            color: var(--accent);
            font-weight: 400;
            transition: var(--transition);
        }

        .faq-item[open] .faq-question::after {
            content: '−';
            transform: translateY(-50%) rotate(180deg);
        }

        .faq-answer {
            padding: 0 20px 20px;
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.6;
            border-top: 1px solid transparent;
        }

        .faq-item[open] .faq-answer {
            border-top: 1px solid var(--border);
        }

        /* Footer & Disclaimers */
        footer {
            background-color: #0d1e18;
            color: #a3b899;
            padding: 50px 20px;
            font-size: 0.75rem;
            line-height: 1.6;
            border-top: 1px solid rgba(64, 145, 108, 0.1);
        }

        .footer-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .copyright-text {
            color: #ffffff;
            font-weight: 700;
            font-size: 0.85rem;
            margin-bottom: 20px;
            font-family: 'Montserrat', sans-serif;
        }

        .disclaimer-block p {
            margin-bottom: 15px;
            text-align: justify;
        }

        .disclaimer-block p:last-child {
            margin-bottom: 0;
        }

        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 1.75rem;
            }

            .takeaways-section, .faq-section {
                padding: 25px 20px;
            }

            .main-content {
                padding: 0 15px 40px;
            }
        }
    </style>
</head>

<body>

    <!-- Announcement Bar -->
    <div class="announcement-bar">
        Página Educativa — Conteúdo estritamente informativo sem fins comerciais
    </div>

    <!-- Header -->
    <header class="site-header">
        <div class="header-container">
            <a href="#" class="logo">
                <span class="logo-icon">🍃</span>
                <span>Protocolo<strong>Natural</strong></span>
            </a>
            <div class="header-badge">Espaço Informativo</div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-container">
            <div class="badge-educational">Estudo de Bem-Estar</div>
            <h1>A Ciência da Rotina Natural e o Seu Impacto na Saúde</h1>
            <p class="hero-subtitle">Uma perspetiva prática e científica sobre o uso de soluções biológicas simples e minerais essenciais no dia a dia.</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-content">
        
        <!-- Video Player Section -->
        <div class="video-section">
            <div class="video-container">
                <div class="video-wrapper">
                    <!-- VTurb Smartplayer original -->
                    <vturb-smartplayer id="vid-69923cd09256726183cee2e3" style="display: block; margin: 0 auto; width: 100%; "></vturb-smartplayer>
                    <script type="text/javascript"> 
                        var s = document.createElement("script"); 
                        s.src = "https://scripts.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/players/69923cd09256726183cee2e3/v4/player.js";
                        s.async = !0;
                        document.head.appendChild(s); 
                    </script>
                    <script>
                        !function (i, n) { i._plt = i._plt || (n && n.timeOrigin ? n.timeOrigin + n.now() : Date.now()) }(window, performance);
                    </script>
                </div>
            </div>
            <p class="video-note">ℹ️ O vídeo acima tem fins exclusivamente demonstrativos, científicos e educativos.</p>
        </div>

        <!-- Educational Takeaways Section -->
        <section class="takeaways-section">
            <h2>Pilares da Aprendizagem</h2>
            <div class="takeaways-grid">
                <div class="takeaway-card">
                    <div class="takeaway-icon">🔬</div>
                    <h3>Estudo Biológico</h3>
                    <p>Análise de compostos elementares alcalinos e a sua correlação com a melhoria do bem-estar geral e imunidade.</p>
                </div>
                <div class="takeaway-card">
                    <div class="takeaway-icon">🌱</div>
                    <h3>Alternativas Orgânicas</h3>
                    <p>Como substituir compostos sintéticos e conservantes por soluções naturais ricas em minerais essenciais.</p>
                </div>
                <div class="takeaway-card">
                    <div class="takeaway-icon">🧘</div>
                    <h3>Equilíbrio Integrativo</h3>
                    <p>Adoção de pequenos hábitos diários que apoiam o funcionamento saudável e a regeneração natural do corpo.</p>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section">
            <h2>Perguntas Frequentes</h2>
            <div class="faq-accordion">
                <details class="faq-item" open>
                    <summary class="faq-question">Qual é o objetivo deste portal?</summary>
                    <div class="faq-answer">
                        <p>Este espaço foi concebido exclusivamente para disseminar conhecimentos sobre práticas de saúde natural, baseando-se em hábitos tradicionais e dados informativos.</p>
                    </div>
                </details>
                <details class="faq-item">
                    <summary class="faq-question">Este site vende algum produto ou suplemento?</summary>
                    <div class="faq-answer">
                        <p>Não. Este site não realiza vendas de produtos, livros digitais, subscrições ou quaisquer outros bens de cariz comercial. É um canal de conteúdo estritamente educativo e informativo.</p>
                    </div>
                </details>
                <details class="faq-item">
                    <summary class="faq-question">A informação apresentada substitui aconselhamento médico?</summary>
                    <div class="faq-answer">
                        <p>De forma alguma. Nenhuma informação contida neste sítio deve ser interpretada como diagnóstico, tratamento ou recomendação médica. Consulte sempre um médico ou profissional de saúde qualificado antes de realizar qualquer alteração na sua dieta ou rotina.</p>
                    </div>
                </details>
            </div>
        </section>

    </main>

    <!-- Footer & Disclaimers in Portuguese of Portugal -->
    <footer>
        <div class="footer-container">
            <p class="copyright-text">Copyright 2026 ® Todos os direitos reservados.</p>
            
            <div class="disclaimer-block">
                <p>Este sítio web é uma página publicitária e educativa destinada exclusivamente à divulalterações na sua rotina.</p>
                gação de informação. Os resultados podem variar de pessoa para pessoa.</p>
                
                <p>Nenhuma informação apresentada neste sítio deve ser interpretada como diagnóstico, tratamento ou recomendação médica. Consulte sempre um profissional de saúde qualificado antes de realizar 
                <p>Este sítio não faz parte do sítio web do Facebook™, Instagram™ nem da Meta Platforms, Inc. Além disso, este sítio NÃO é apoiado, administrado nem patrocinado pelo Facebook™, Instagram™ ou Meta™ de nenhuma forma.</p>
                
                <p>Facebook™ e Instagram™ são marcas registadas da Meta Platforms, Inc.</p>
                
                <p>Os testemunhos e exemplos apresentados representam experiências individuais e não garantem resultados específicos.</p>
                
                <p>O conteúdo deste sítio é fornecido unicamente com fins informativos e educativos.</p>
            </div>
        </div>
    </footer>

</body>

</html>