<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="data:;" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&family=Cagliostro&family=Wendy+One&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo asset('css/styles.css') ?>">
    <title>Calories App - Track Your Nutrition</title>
    <style>
        .app-intro {
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--beige) 0%, var(--white) 100%);
            padding: 2rem;
            min-height: auto;
        }

        .app-intro-content {
            width: 100%;
            max-width: 900px;
            text-align: center;
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .app-intro h1 {
            font-family: "Bonheur Royale", cursive;
            font-size: 4rem;
            color: var(--brown-dark);
            margin: 0 0 1rem 0;
            font-weight: 400;
        }

        .app-intro .subtitle {
            font-family: "Wendy One", sans-serif;
            font-size: 1.5rem;
            color: var(--brown-medium);
            margin-bottom: 2rem;
            font-weight: 400;
            font-variant: small-caps;
        }

        .app-intro .description {
            font-family: "Cagliostro", sans-serif;
            font-size: 1.1rem;
            color: var(--brown-dark);
            line-height: 1.8;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .tech-stack {
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: var(--white);
            border-left: 4px solid var(--brown-dark);
            border-radius: 5px;
        }

        .tech-stack h3 {
            font-family: "Wendy One", sans-serif;
            color: var(--brown-dark);
            margin: 0 0 1rem 0;
            font-size: 1.2rem;
            font-weight: 400;
            font-variant: small-caps;
        }

        .tech-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            justify-content: center;
        }

        .badge {
            display: inline-block;
            padding: 0.5rem 1rem;
            background: var(--beige);
            color: var(--brown-dark);
            border: 1px solid var(--brown-dark);
            border-radius: 20px;
            font-family: "Cagliostro", sans-serif;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .demo-credentials {
            padding: 1.5rem;
            background: rgba(139, 90, 60, 0.05);
            border: 1px dashed var(--brown-dark);
            border-radius: 8px;
            margin: 2rem 0;
            text-align: left;
            display: inline-block;
            min-width: 300px;
        }

        .demo-credentials h4 {
            font-family: "Cagliostro", sans-serif;
            color: var(--brown-dark);
            margin: 0 0 0.8rem 0;
            font-weight: 600;
        }

        .demo-credentials p {
            font-family: "Cagliostro", sans-serif;
            color: var(--brown-dark);
            margin: 0.3rem 0;
            font-size: 0.95rem;
        }

        .features {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .feature {
            flex: 1;
            min-width: 200px;
            padding: 1.5rem;
            background: var(--white);
            border: 1px solid var(--brown-dark);
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(63, 34, 21, 0.1);
            transition: all 0.3s ease;
        }

        .feature:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(63, 34, 21, 0.2);
            border-color: var(--brown-medium);
        }

        .feature h3 {
            font-family: "Emilys Candy", serif;
            font-size: 1.3rem;
            color: var(--brown-dark);
            margin: 0 0 0.5rem 0;
        }

        .feature p {
            font-family: "Cagliostro", sans-serif;
            font-size: 0.95rem;
            color: var(--brown-dark);
            margin: 0;
            opacity: 0.8;
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 3rem;
            background: var(--brown-dark);
            color: var(--beige);
            text-decoration: none;
            border-radius: 30px;
            font-family: "Cagliostro", sans-serif;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid var(--brown-dark);
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(63, 34, 21, 0.2);
        }

        .cta-button:hover {
            background: var(--beige);
            color: var(--brown-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(63, 34, 21, 0.3);
        }

        .cta-button:active {
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .app-intro {
                padding: 1.5rem 1rem;
            }

            .app-intro h1 {
                font-size: 2.5rem;
                margin-bottom: 0.5rem;
            }

            .app-intro .subtitle {
                font-size: 1.1rem;
                margin-bottom: 1.5rem;
            }

            .app-intro .description {
                font-size: 0.95rem;
                margin-bottom: 1.5rem;
            }

            .tech-stack {
                margin-bottom: 1.5rem;
                padding: 1rem;
            }

            .tech-stack h3 {
                font-size: 1rem;
                margin-bottom: 0.8rem;
            }

            .badge {
                padding: 0.4rem 0.8rem;
                font-size: 0.8rem;
            }

            .tech-badges {
                gap: 0.5rem;
            }

            .features {
                flex-direction: column;
                gap: 1rem;
                margin-bottom: 1.5rem;
            }

            .feature {
                min-width: auto;
                margin: 0;
                padding: 1rem;
            }

            .feature h3 {
                font-size: 1.1rem;
                margin-bottom: 0.4rem;
            }

            .feature p {
                font-size: 0.85rem;
            }

            .demo-credentials {
                min-width: auto;
                width: 100%;
                padding: 1rem;
                margin: 1.5rem 0;
            }

            .demo-credentials h4 {
                font-size: 0.95rem;
                margin-bottom: 0.6rem;
            }

            .demo-credentials p {
                font-size: 0.85rem;
                margin: 0.25rem 0;
            }

            .cta-button {
                padding: 0.8rem 2rem;
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .app-intro {
                padding: 1rem 0.8rem;
            }

            .app-intro h1 {
                font-size: 1.8rem;
                margin-bottom: 0.3rem;
            }

            .app-intro .subtitle {
                font-size: 0.95rem;
                margin-bottom: 0.8rem;
            }

            .app-intro .description {
                font-size: 0.85rem;
                line-height: 1.6;
                margin-bottom: 0.8rem;
            }

            .tech-stack {
                margin-bottom: 0.8rem;
                padding: 0.8rem;
            }

            .tech-stack h3 {
                font-size: 0.9rem;
                margin-bottom: 0.6rem;
            }

            .badge {
                padding: 0.3rem 0.6rem;
                font-size: 0.7rem;
            }

            .tech-badges {
                gap: 0.4rem;
            }

            .features {
                gap: 0.8rem;
                margin-bottom: 0.8rem;
            }

            .feature {
                padding: 0.8rem;
            }

            .feature h3 {
                font-size: 0.95rem;
                margin-bottom: 0.3rem;
            }

            .feature p {
                font-size: 0.75rem;
            }

            .demo-credentials {
                padding: 0.8rem;
                margin: 0.8rem 0;
            }

            .demo-credentials h4 {
                font-size: 0.85rem;
                margin-bottom: 0.4rem;
            }

            .demo-credentials p {
                font-size: 0.75rem;
                margin: 0.2rem 0;
            }

            .cta-button {
                padding: 0.7rem 1.5rem;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <div class="app-intro">
        <div class="app-intro-content">
            <h1>Calories Tracker App</h1>
            <div class="subtitle">Full-Stack Web Application</div>

            <p class="description">
                A complete nutrition tracking web application that I developed with a custom authentication system. Users can register, login securely, and track their daily meals with real-time caloric calculations and nutritional breakdowns.
            </p>

            <div class="tech-stack">
                <h3>Tech Stack</h3>
                <div class="tech-badges">
                    <span class="badge">React</span>
                    <span class="badge">Next.js</span>
                    <span class="badge">Node.js</span>
                    <span class="badge">Authentication</span>
                    <span class="badge">Database</span>
                </div>
            </div>

            <div class="features">
                <div class="feature">
                    <h3>🔐 Secure Login System</h3>
                    <p>Custom-built authentication with secure password handling and user session management.</p>
                </div>
                <div class="feature">
                    <h3>📊 Meal Tracking</h3>
                    <p>Log meals with automatic caloric calculations and detailed nutritional breakdowns.</p>
                </div>
                <div class="feature">
                    <h3>📈 Analytics Dashboard</h3>
                    <p>View trends, charts, and insights into your eating patterns and progress.</p>
                </div>
            </div>

            <div class="demo-credentials">
                <h4>Demo Credentials</h4>
                <p><strong>Email:</strong> demo@example.com</p>
                <p><strong>Password:</strong> demo123</p>
            </div>

            <a href="https://calories-app.eduardabajyan.com" target="_blank" class="cta-button">
                View Live Demo →
            </a>
        </div>
    </div>

    <script type="module" src="<?php echo asset('js/pageListings.js') ?>"></script>
    <script type="module" src="<?php echo asset('js/pageListingsNoScrolling.js'); ?>"></script>
</body>

</html>