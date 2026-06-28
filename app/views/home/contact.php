<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="<?php echo base_url('asset/js/color-mode.js') ?>"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&family=Cagliostro&family=Wendy+One&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?= asset('css/pages/shared.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/pages/page7.css') ?>">
    <?php render_page_metadata([
        'title' => 'Contact Eduard Abajyan',
        'description' => 'Get in touch with Eduard Abajyan for freelance, collaboration, or full-stack web development opportunities.',
        'path' => 'page7',
    ]); ?>
</head>

<body>

    <div class="contact-container">
        <div class="contact-hero">
            <h1 class="contact-title">Let's Work Together</h1>
            <p class="contact-subtitle">Have a project in mind? I'd love to hear from you!</p>
        </div>

        <div class="contact-content">
            <!-- Contact Information Cards -->
            <div class="contact-info-section">
                <div class="info-card contrasting" id="email-card">
                    <div class="info-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <div class="info-content">
                        <h3>Email</h3>
                        <p id="email-text">edwardabajyan@gmail.com</p>
                        <button class="copy-btn">
                            Copy
                        </button>
                    </div>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <div class="info-content">
                        <h3>Location</h3>
                        <p>Gyumri, Armenia</p>
                        <p class="timezone">Timezone: GMT+4</p>
                    </div>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <div class="info-content">
                        <h3>Response Time</h3>
                        <p>Usually within 24 hours</p>
                        <div class="availability-badge">
                            <span class="status-dot"></span>
                            Available for projects
                        </div>
                    </div>
                </div>

                <div class="info-card social-card">
                    <div class="info-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 2H7C4.79 2 3 3.79 3 6v12c0 2.21 1.79 4 4 4h10c2.21 0 4-1.79 4-4V6c0-2.21-1.79-4-4-4z"></path>
                            <circle cx="12" cy="12" r="4"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <div class="info-content">
                        <h3>Social Links</h3>
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/eduardabajyan/" target="_blank" class="social-link" title="LinkedIn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="https://github.com/EduardAbajyan" target="_blank" class="social-link" title="GitHub">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/eduardabajyan/" target="_blank" class="social-link" title="Instagram">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-section">
                <h2 class="form-title">Send Me a Message</h2>

                <?php if (isset($_SESSION['flash'])): ?>
                    <div class="alert alert-<?= htmlspecialchars($_SESSION['flash']['type']) ?>">
                        <?= htmlspecialchars($_SESSION['flash']['message']) ?>
                    </div>
                    <?php unset($_SESSION['flash']); ?>
                <?php endif; ?>

                <form action="<?= url('contact.submit') ?>" method="POST" class="contact-form" id="contactForm">
                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label for="name">Your Name *</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            required
                            placeholder="John Doe"
                            value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                        <span class="error-message" id="name-error"></span>
                    </div>

                    <div class="form-group">
                        <label for="email">Your Email *</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            required
                            placeholder="john@example.com"
                            value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                        <span class="error-message" id="email-error"></span>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            required
                            placeholder="Project Inquiry"
                            value="<?= htmlspecialchars($_POST['subject'] ?? '') ?>">
                        <span class="error-message" id="subject-error"></span>
                    </div>

                    <div class="form-group">
                        <label for="message">Your Message *</label>
                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            required
                            placeholder="Tell me about your project..."><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                        <span class="error-message" id="message-error"></span>
                        <span class="char-count">0 / 1000</span>
                    </div>

                    <button type="submit" class="submit-btn" id="submitBtn">
                        <span class="btn-text">Send Message</span>
                        <span class="btn-loader" style="display: none;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10" opacity="0.25"></circle>
                                <path d="M12 2a10 10 0 0 1 10 10" opacity="0.75"></path>
                            </svg>
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script type="module" src="<?php echo asset('js/contact.js') ?>"></script>
    <script type="module" src="<?php echo asset('js/pageListings.js') ?>"></script>
    <script type="module" src="<?php echo asset('js/pageListingsNoScrolling.js'); ?>"></script>
</body>

</html>