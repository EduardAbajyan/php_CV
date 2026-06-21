<div id="listings" style="position: absolute; bottom: 60px; right: 20px; z-index: 10;">
    <div style="
        display: flex; 
        gap: 20px; 
        align-items: center; 
        padding: 15px 20px;
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.8), rgba(30, 30, 30, 0.9));
        backdrop-filter: blur(10px);
        border-radius: 50px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 8px 32px hsla(0, 0%, 0%, 0.40);
        transition: all 0.3s ease;
    " onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 40px rgba(0, 0, 0, 0.6)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 32px rgba(0, 0, 0, 0.4)';">

        <!-- Mouse Scroll Icon -->
        <div style="position: relative; filter: drop-shadow(0 2px 8px rgba(255, 255, 255, 0.3));">
            <svg width="72" height="108" viewBox="0 0 72 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="mouseGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" style="stop-color:#60a5fa;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#3b82f6;stop-opacity:1" />
                    </linearGradient>
                </defs>
                <rect x="5" y="5" width="62" height="98" rx="30" stroke="url(#mouseGradient)" stroke-width="2.5" />
                <!-- Scroll wheel with realistic motion -->
                <ellipse cx="36" cy="16" rx="6" ry="9" fill="url(#mouseGradient)">
                    <animate attributeName="cy" values="16;40;16" dur="2s" repeatCount="indefinite" />
                </ellipse>
                <path d="M35.9 10 L35.9 10 36.1 40" stroke="url(#mouseGradient)" stroke-width="2" stroke-linecap="round">
                    <animate attributeName="opacity" values="1;0.5;1" dur="2s" repeatCount="indefinite" />

                </path>
            </svg>
        </div>

        <!-- Divider -->
        <div style="width: 1px; height: 30px; background: linear-gradient(to bottom, transparent, rgba(255,255,255,0.2), transparent);"></div>


        <div style="position:relative; filter: drop-shadow(0 2px 8px rgba(168, 85, 247, 0.4));">
            <svg width="108" height="108" viewBox="0 0 108 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="swipeGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#a855f7;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:1" />
                    </linearGradient>
                </defs>
                <path d="M42 14C42 14 46 10 54 10C62 10 66 14 66 14" stroke="url(#swipeGradient)" stroke-width="2.5" stroke-linecap="round" opacity="0.4">
                    <animate attributeName="opacity" values="0.4;1;0.4" dur="0.5s" repeatCount="indefinite" />
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 0 6; 0 0" dur="1s" repeatCount="indefinite" />
                </path>
                <path d="M42 22C42 22 46 18 54 18C62 18 66 22 66 22" stroke="url(#swipeGradient)" stroke-width="2.5" stroke-linecap="round">
                    <animate attributeName="opacity" values="1;0.4;1" dur="0.5s" repeatCount="indefinite" />
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 0 6; 0 0" dur="1s" repeatCount="indefinite" />
                </path>
                <path d="M14 43C14 43 10 47 10 55C10 63 14 67 14 67" stroke="url(#swipeGradient)" stroke-width="2.5" stroke-linecap="round" opacity="0.4">
                    <animate attributeName="opacity" values="0.4;1;0.4" dur="0.5s" repeatCount="indefinite" />
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 6 0; 0 0" dur="1s" repeatCount="indefinite" />
                </path>
                <path d="M22 43C22 43 18 47 18 55C18 63 22 67 22 67" stroke="url(#swipeGradient)" stroke-width="2.5" stroke-linecap="round">
                    <animate attributeName="opacity" values="1;0.4;1" dur="0.5s" repeatCount="indefinite" />
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 6 0; 0 0" dur="1s" repeatCount="indefinite" />
                </path>
                <path d="M87 42C87 42 91 46 91 54C91 62 87 66 87 66" stroke="url(#swipeGradient)" stroke-width="2.5" stroke-linecap="round" opacity="0.4">
                    <animate attributeName="opacity" values="1;0.4;1" dur="0.5s" repeatCount="indefinite" />
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; -6 0; 0 0" dur="1s" repeatCount="indefinite" />
                </path>
                <path d="M95 42C95 42 99 46 99 54C99 62 95 66 95 66" stroke="url(#swipeGradient)" stroke-width="2.5" stroke-linecap="round">
                    <animate attributeName="opacity" values="0.4;1;0.4" dur="0.5s" repeatCount="indefinite" />
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; -6 0; 0 0" dur="1s" repeatCount="indefinite" />
                </path>
                <path d="M42 87C42 87 46 91 54 91C62 91 66 87 66 87" stroke="url(#swipeGradient)" stroke-width="2.5" stroke-linecap="round" opacity="0.4">
                    <animate attributeName="opacity" values="1;0.4;1" dur="0.5s" repeatCount="indefinite" />
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 0 -6; 0 0" dur="1s" repeatCount="indefinite" />
                </path>
                <path d="M42 95C42 95 46 99 54 99C62 99 66 95 66 95" stroke="url(#swipeGradient)" stroke-width="2.5" stroke-linecap="round">
                    <animate attributeName="opacity" values="0.4;1;0.4" dur="0.5s" repeatCount="indefinite" />
                    <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 0 -6; 0 0" dur="1s" repeatCount="indefinite" />
                </path>
            </svg>
        </div>

        <!-- Divider -->
        <div style="width: 1px; height: 30px; background: linear-gradient(to bottom, transparent, rgba(255,255,255,0.2), transparent);"></div>

        <!-- Arrow Keys Icon -->
        <div style="position: relative; filter: drop-shadow(0 2px 8px rgba(59, 130, 246, 0.4));">
            <svg width="134" height="108" viewBox="0 0 108 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="wasdGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#2563eb;stop-opacity:1" />
                    </linearGradient>
                </defs>
                <g>
                    <rect x="44" y="2" width="34" height="34" rx="2" stroke="url(#wasdGradient)" stroke-width="1">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 0 6; 0 0" dur="1.5s" repeatCount="indefinite" />
                    </rect>
                    <path d="M59.5 33L59.5 33 59.7 5" stroke="url(#wasdGradient)" stroke-width="2" stroke-linecap="round">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 0 6; 0 0" dur="1.5s" repeatCount="indefinite" />
                    </path>
                    <path d="M51.5 14L51.5 14 59.6 5" stroke="url(#wasdGradient)" stroke-width="2" stroke-linecap="round">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 0 6; 0 0" dur="1.5s" repeatCount="indefinite" />
                    </path>
                    <path d="M67.5 14L67.5 14 59.6 5" stroke="url(#wasdGradient)" stroke-width="2" stroke-linecap="round">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 0 6; 0 0" dur="1.5s" repeatCount="indefinite" />
                    </path>

                    <rect x="2" y="38" width="34" height="34" rx="2" stroke="url(#wasdGradient)" stroke-width="1">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 6 -6; 0 0" dur="1.5s" repeatCount="indefinite" />
                    </rect>
                    <path d="M33 53.5L33 53.5 5 53.7" stroke="url(#wasdGradient)" stroke-width="2" stroke-linecap="round">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 6 -6; 0 0" dur="1.5s" repeatCount="indefinite" />
                    </path>
                    <path d="M14 45.5L14 45.5 5 53.6" stroke="url(#wasdGradient)" stroke-width="2" stroke-linecap="round">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 6 -6; 0 0" dur="1.5s" repeatCount="indefinite" />
                    </path>
                    <path d="M14 61.5L14 61.5 5 53.6" stroke="url(#wasdGradient)" stroke-width="2" stroke-linecap="round">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 6 -6; 0 0" dur="1.5s" repeatCount="indefinite" />
                    </path>

                    <rect x="44" y="50" width="34" height="34" rx="2" stroke="url(#wasdGradient)" stroke-width="1">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 0 -6; 0 0" dur="1.5s" repeatCount="indefinite" />
                    </rect>
                    <path d="M59.5 52L59.5 52 59.7 81" stroke="url(#wasdGradient)" stroke-width="2" stroke-linecap="round">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 0 -6; 0 0" dur="1.5s" repeatCount="indefinite" />
                    </path>
                    <path d="M51.5 71L51.5 71 59.6 81" stroke="url(#wasdGradient)" stroke-width="2" stroke-linecap="round">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 0 -6; 0 0" dur="1.5s" repeatCount="indefinite" />
                    </path>
                    <path d="M67.5 71L67.5 71 59.6 81" stroke="url(#wasdGradient)" stroke-width="2" stroke-linecap="round">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; 0 -6; 0 0" dur="1.5s" repeatCount="indefinite" />
                    </path>

                    <rect x="86" y="38" width="34" height="34" rx="2" stroke="url(#wasdGradient)" stroke-width="1">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; -6 -6; 0 0" dur="1.5s" repeatCount="indefinite" />
                    </rect>
                    <path d="M88 53.5L88 53.5 116 53.7" stroke="url(#wasdGradient)" stroke-width="2" stroke-linecap="round">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; -6 -6; 0 0" dur="1.5s" repeatCount="indefinite" />
                    </path>
                    <path d="M107 45.5L107 45.5 116 53.6" stroke="url(#wasdGradient)" stroke-width="2" stroke-linecap="round">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; -6 -6; 0 0" dur="1.5s" repeatCount="indefinite" />
                    </path>
                    <path d="M107 61.5L107 61.5 116 53.6" stroke="url(#wasdGradient)" stroke-width="2" stroke-linecap="round">
                        <animateTransform attributeName="transform" attributeType="XML" type="translate" values="0 0; -6 -6; 0 0" dur="1.5s" repeatCount="indefinite" />
                    </path>
                </g>
            </svg>
        </div>
    </div>
</div>