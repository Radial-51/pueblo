<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="profile" href="https://gmpg.org/xfn/11"/>
        <title>Acerca De &#8211;Nosotros</title>
        <meta name='robots' content='noindex, nofollow'/>
        <link rel='dns-prefetch' href='//s0.wp.com'/>
        <link rel='dns-prefetch' href='//wordpress.com'/>
        <link rel="alternate" type="application/rss+xml" title="Site Title &raquo; Feed" href="{{ route('welcome') }}"/>
        <link rel="alternate" type="application/rss+xml" title="Site Title &raquo; Comments Feed" href="{{ route('welcome') }}"/>
        <link rel="stylesheet" href="public/css/styles.css">
        
        <script type="text/javascript">
            /* <![CDATA[ */
            function addLoadEvent(func) {
                var oldonload = window.onload;
                if (typeof window.onload != 'function') {
                    window.onload = func;
                } else {
                    window.onload = function() {
                        oldonload();
                        func();
                    }
                }
            }
            /* ]]> */
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            window._wpemojiSettings = {
                "baseUrl": "https:\/\/s0.wp.com\/wp-content\/mu-plugins\/wpcom-smileys\/twemoji\/2\/72x72\/",
                "ext": ".png",
                "svgUrl": "https:\/\/s0.wp.com\/wp-content\/mu-plugins\/wpcom-smileys\/twemoji\/2\/svg\/",
                "svgExt": ".svg",
                "source": {
                    "concatemoji": "https:\/\/s0.wp.com\/wp-includes\/js\/wp-emoji-release.min.js?m=1710334132i&ver=6.6-alpha-58167"
                }
            };
            /*! This file is auto-generated */
            !function(i, n) {
                var o, s, e;
                function c(e) {
                    try {
                        var t = {
                            supportTests: e,
                            timestamp: (new Date).valueOf()
                        };
                        sessionStorage.setItem(o, JSON.stringify(t))
                    } catch (e) {}
                }
                function p(e, t, n) {
                    e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(t, 0, 0);
                    var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)
                      , r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(n, 0, 0),
                    new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                    return t.every(function(e, t) {
                        return e === r[t]
                    })
                }
                function u(e, t, n) {
                    switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                    }
                    return !1
                }
                function f(e, t, n) {
                    var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300,150) : i.createElement("canvas")
                      , a = r.getContext("2d", {
                        willReadFrequently: !0
                    })
                      , o = (a.textBaseline = "top",
                    a.font = "600 32px Arial",
                    {});
                    return e.forEach(function(e) {
                        o[e] = t(a, e, n)
                    }),
                    o
                }
                function t(e) {
                    var t = i.createElement("script");
                    t.src = e,
                    t.defer = !0,
                    i.head.appendChild(t)
                }
                "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports",
                s = ["flag", "emoji"],
                n.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                },
                e = new Promise(function(e) {
                    i.addEventListener("DOMContentLoaded", e, {
                        once: !0
                    })
                }
                ),
                new Promise(function(t) {
                    var n = function() {
                        try {
                            var e = JSON.parse(sessionStorage.getItem(o));
                            if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests)
                                return e.supportTests
                        } catch (e) {}
                        return null
                    }();
                    if (!n) {
                        if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob)
                            try {
                                var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));"
                                  , r = new Blob([e],{
                                    type: "text/javascript"
                                })
                                  , a = new Worker(URL.createObjectURL(r),{
                                    name: "wpTestEmojiSupports"
                                });
                                return void (a.onmessage = function(e) {
                                    c(n = e.data),
                                    a.terminate(),
                                    t(n)
                                }
                                )
                            } catch (e) {}
                        c(n = f(s, u, p))
                    }
                    t(n)
                }
                ).then(function(e) {
                    for (var t in e)
                        n.supports[t] = e[t],
                        n.supports.everything = n.supports.everything && n.supports[t],
                        "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                    n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag,
                    n.DOMReady = !1,
                    n.readyCallback = function() {
                        n.DOMReady = !0
                    }
                }).then(function() {
                    return e
                }).then(function() {
                    var e;
                    n.supports.everything || (n.readyCallback(),
                    (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji),
                    t(e.wpemoji)))
                }))
            }((window,
            document), window._wpemojiSettings);
            /* ]]> */
        </script>
        <link crossorigin='anonymous' rel='stylesheet' id='all-css-0-1' href='https://s0.wp.com/wp-includes/css/dashicons.min.css?m=1617198107i&cssminify=yes' type='text/css' media='all'/>
        <link crossorigin='anonymous' rel='stylesheet' id='screen-css-1-1' href='https://s0.wp.com/wp-content/blog-plugins/launch-banner/style.css?m=1706521933i&cssminify=yes' type='text/css' media='screen'/>
        <style id='wp-emoji-styles-inline-css'>
            img.wp-smiley, img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
                        <style>
                            * {
                                margin: 0;
                                padding: 0;
                                border: 0;
                                box-sizing: border-box;
                            }
                        
                            .btn-wsp {
                                position: fixed;
                                width: 55px;
                                height: 55px;
                                line-height: 55px;
                                bottom: 30px;
                                right: 30px; 
                                background: #25d366;
                                color: #FFF;
                                border-radius: 50px;
                                text-align: center;
                                font-size: 35px;
                                box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.3);
                                z-index: 100;
                                transition: all 300ms ease;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                text-decoration: none; 
                            }
                        
                            .btn-wsp i {
                                margin-left: 5px; 
                            }
                        
                            .btn-wsp:hover {
                                background: #20ba5a;
                            }
                        
                            @media only screen and (min-width: 320px) and (max-width: 768px) {
                                .btn-wsp {
                                    width: 63px;
                                    height: 63px;
                                    line-height: 66px; 
                                    right: 20px; 
                                    
                                }
                            }
                        </style>
                        </head>
                        <body>
                        
                            <a href="https://wa.me/7224958550?text=Hola%20quisiera%20más%20información" class="btn-wsp" target="_blank">
                                <img src="https://cdn-icons-png.flaticon.com/128/15707/15707820.png" alt="WhatsApp icon">
                            </a>
                            
                            
                            
                            
                        
                       
                        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
                        
                        </body>
        <link crossorigin='anonymous' rel='stylesheet' id='all-css-4-1' href='https://s0.wp.com/_static/??-eJylzEEOQDAQQNEL0VGNYCHOojWpMko6LXF7jStY/vzkwX2W5vARfYSTknWewaacGoPNJyBcshNKVKCToxk0HWYryekwhQc4PoTCMBfwD4oL7h807oNsZaO6uq/69QUlZjhb&cssminify=yes' type='text/css' media='all'/>
        <style id='wp-block-library-inline-css'>
            .has-text-align-justify {
                text-align: justify;
            }

            .wp-block-cover__image-background.has-parallax {
                background-size: cover;
            }
        </style>
        <link crossorigin='anonymous' rel='stylesheet' id='all-css-6-1' href='https://s0.wp.com/_static/??-eJzTLy/QzcxLzilNSS3WzyrWz01NyUxMzUnNTc0rQeEU5CRWphbp5qSmJyZX6uVm5uklFxfr6OPTDpRD5sM02efaGpoZmFkYGRuZGmQBAHPvL0Y=&cssminify=yes' type='text/css' media='all'/>
        <style id='jetpack-sharing-buttons-style-inline-css'>
            .jetpack-sharing-buttons__services-list {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                gap: 0;
                list-style-type: none;
                margin: 5px;
                padding: 0
            }

            .jetpack-sharing-buttons__services-list.has-small-icon-size {
                font-size: 12px
            }

            .jetpack-sharing-buttons__services-list.has-normal-icon-size {
                font-size: 16px
            }

            .jetpack-sharing-buttons__services-list.has-large-icon-size {
                font-size: 24px
            }

            .jetpack-sharing-buttons__services-list.has-huge-icon-size {
                font-size: 36px
            }

            @media print {
                .jetpack-sharing-buttons__services-list {
                    display: none!important
                }
            }

            .editor-styles-wrapper .wp-block-jetpack-sharing-buttons {
                gap: 0;
                padding-inline-start:0}

            ul.jetpack-sharing-buttons__services-list.has-background {
                padding: 1.25em 2.375em
            }
        </style>
        <link crossorigin='anonymous' rel='stylesheet' id='all-css-8-1' href='https://s0.wp.com/_static/??-eJyVzDEOgCAMQNELiQU1Jg7Gs2AlDYpAaInx9ro5O/7hfbiywhTFRYEcKvnIQPXN1RVSa0h4MOxOssVDBXunKoqK34DlDq5F5gb+LIoVH4k/vpyzGYe+03oyw/4AcmU1KQ==&cssminify=yes' type='text/css' media='all'/>
        <style id='classic-theme-styles-inline-css'>
            /*! This file is auto-generated */
            .wp-block-button__link {
                color: #fff;
                background-color: #32373c;
                border-radius: 9999px;
                box-shadow: none;
                text-decoration: none;
                padding: calc(.667em + 2px) calc(1.333em + 2px);
                font-size: 1.125em
            }

            .wp-block-file__button {
                background: #32373c;
                color: #fff;
                text-decoration: none
            }
        </style>
        <link crossorigin='anonymous' rel='stylesheet' id='all-css-10-1' href='https://s0.wp.com/_static/??-eJx9jUsKwzAMRC9UVYT+VqVnsR2RqkS2sGxy/agNZFWyGfSZN4OLQiq5UW4oHXTuE2fDMApniKHioqkI7Ps5mZ2QMZfGztk+bI//aalU8rtoaF+H0MiBZhK3HWFbdYxayQxchbtAezv4q3vJc3gMt8v17vJZAQ+SSpE=&cssminify=yes' type='text/css' media='all'/>
        <style id='wpcom-admin-bar-inline-css'>
            @media screen {
                html {
                    margin-top: 32px !important;
                }
            }

            @media screen and ( max-width: 782px ) {
                html {
                    margin-top: 46px !important;
                }
            }

            @media print {
                #wpadminbar {
                    display: none;
                }
            }

            .admin-bar {
                position: inherit !important;
                top: auto !important;
            }

            .admin-bar .goog-te-banner-frame {
                top: 32px !important
            }

            @media screen and (max-width: 782px) {
                .admin-bar .goog-te-banner-frame {
                    top: 46px !important;
                }
            }

            @media screen and (max-width: 480px) {
                .admin-bar .goog-te-banner-frame {
                    position: absolute;
                }
            }
        </style>
        <style id='global-styles-inline-css'>
            :root {
                --wp--preset--color--black: #000000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #ffffff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--color--primary: #CAAB57;
                --wp--preset--color--secondary: #EE4266;
                --wp--preset--color--background: #060f29;
                --wp--preset--color--foreground: #F2F2F2;
                --wp--preset--color--foreground-light: #FFFFFF;
                --wp--preset--color--foreground-dark: #8F8F8F;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
                --wp--preset--font-size--normal: 18px;
                --wp--preset--font-size--huge: 35.15px;
                --wp--preset--font-family--albert-sans: 'Albert Sans', sans-serif;
                --wp--preset--font-family--alegreya: Alegreya, serif;
                --wp--preset--font-family--arvo: Arvo, serif;
                --wp--preset--font-family--bodoni-moda: 'Bodoni Moda', serif;
                --wp--preset--font-family--bricolage-grotesque: 'Bricolage Grotesque', sans-serif;
                --wp--preset--font-family--cabin: Cabin, sans-serif;
                --wp--preset--font-family--chivo: Chivo, sans-serif;
                --wp--preset--font-family--commissioner: Commissioner, sans-serif;
                --wp--preset--font-family--cormorant: Cormorant, serif;
                --wp--preset--font-family--courier-prime: 'Courier Prime', monospace;
                --wp--preset--font-family--crimson-pro: 'Crimson Pro', serif;
                --wp--preset--font-family--dm-mono: 'DM Mono', monospace;
                --wp--preset--font-family--dm-sans: 'DM Sans', sans-serif;
                --wp--preset--font-family--dm-serif-display: 'DM Serif Display', serif;
                --wp--preset--font-family--domine: Domine, serif;
                --wp--preset--font-family--eb-garamond: 'EB Garamond', serif;
                --wp--preset--font-family--epilogue: Epilogue, sans-serif;
                --wp--preset--font-family--fahkwang: Fahkwang, sans-serif;
                --wp--preset--font-family--figtree: Figtree, sans-serif;
                --wp--preset--font-family--fira-sans: 'Fira Sans', sans-serif;
                --wp--preset--font-family--fjalla-one: 'Fjalla One', sans-serif;
                --wp--preset--font-family--fraunces: Fraunces, serif;
                --wp--preset--font-family--gabarito: Gabarito, system-ui;
                --wp--preset--font-family--ibm-plex-mono: 'IBM Plex Mono', monospace;
                --wp--preset--font-family--ibm-plex-sans: 'IBM Plex Sans', sans-serif;
                --wp--preset--font-family--ibarra-real-nova: 'Ibarra Real Nova', serif;
                --wp--preset--font-family--instrument-serif: 'Instrument Serif', serif;
                --wp--preset--font-family--inter: Inter, sans-serif;
                --wp--preset--font-family--josefin-sans: 'Josefin Sans', sans-serif;
                --wp--preset--font-family--jost: Jost, sans-serif;
                --wp--preset--font-family--libre-baskerville: 'Libre Baskerville', serif;
                --wp--preset--font-family--libre-franklin: 'Libre Franklin', sans-serif;
                --wp--preset--font-family--literata: Literata, serif;
                --wp--preset--font-family--lora: Lora, serif;
                --wp--preset--font-family--merriweather: Merriweather, serif;
                --wp--preset--font-family--montserrat: Montserrat, sans-serif;
                --wp--preset--font-family--newsreader: Newsreader, serif;
                --wp--preset--font-family--noto-sans-mono: 'Noto Sans Mono', sans-serif;
                --wp--preset--font-family--nunito: Nunito, sans-serif;
                --wp--preset--font-family--open-sans: 'Open Sans', sans-serif;
                --wp--preset--font-family--overpass: Overpass, sans-serif;
                --wp--preset--font-family--pt-serif: 'PT Serif', serif;
                --wp--preset--font-family--petrona: Petrona, serif;
                --wp--preset--font-family--piazzolla: Piazzolla, serif;
                --wp--preset--font-family--playfair-display: 'Playfair Display', serif;
                --wp--preset--font-family--plus-jakarta-sans: 'Plus Jakarta Sans', sans-serif;
                --wp--preset--font-family--poppins: Poppins, sans-serif;
                --wp--preset--font-family--raleway: Raleway, sans-serif;
                --wp--preset--font-family--roboto: Roboto, sans-serif;
                --wp--preset--font-family--roboto-slab: 'Roboto Slab', serif;
                --wp--preset--font-family--rubik: Rubik, sans-serif;
                --wp--preset--font-family--rufina: Rufina, serif;
                --wp--preset--font-family--sora: Sora, sans-serif;
                --wp--preset--font-family--source-sans-3: 'Source Sans 3', sans-serif;
                --wp--preset--font-family--source-serif-4: 'Source Serif 4', serif;
                --wp--preset--font-family--space-mono: 'Space Mono', monospace;
                --wp--preset--font-family--syne: Syne, sans-serif;
                --wp--preset--font-family--texturina: Texturina, serif;
                --wp--preset--font-family--urbanist: Urbanist, sans-serif;
                --wp--preset--font-family--work-sans: 'Work Sans', sans-serif;
                --wp--preset--spacing--20: 0.44rem;
                --wp--preset--spacing--30: 0.67rem;
                --wp--preset--spacing--40: 1rem;
                --wp--preset--spacing--50: 1.5rem;
                --wp--preset--spacing--60: 2.25rem;
                --wp--preset--spacing--70: 3.38rem;
                --wp--preset--spacing--80: 5.06rem;
                --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
                --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
                --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
            }

            :where(.is-layout-flow) > :first-child {
                margin-block-start: 0;}

            :where(.is-layout-flow) > :last-child {
                margin-block-end: 0;}

            :where(.is-layout-flow) > * {
                margin-block-start: 24px;margin-block-end: 0;}

            :where(.is-layout-constrained) > :first-child {
                margin-block-start: 0;}

            :where(.is-layout-constrained) > :last-child {
                margin-block-end: 0;}

            :where(.is-layout-constrained) > * {
                margin-block-start: 24px;margin-block-end: 0;}

            :where(.is-layout-flex) {
                gap: 24px;
            }

            :where(.is-layout-grid) {
                gap: 24px;
            }

            body .is-layout-flex {
                display: flex;
            }

            .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }

            .is-layout-flex > :is(*, div) {
                margin: 0;
            }

            body .is-layout-grid {
                display: grid;
            }

            .is-layout-grid > :is(*, div) {
                margin: 0;
            }

            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-primary-color {
                color: var(--wp--preset--color--primary) !important;
            }

            .has-secondary-color {
                color: var(--wp--preset--color--secondary) !important;
            }

            .has-background-color {
                color: var(--wp--preset--color--background) !important;
            }

            .has-foreground-color {
                color: var(--wp--preset--color--foreground) !important;
            }

            .has-foreground-light-color {
                color: var(--wp--preset--color--foreground-light) !important;
            }

            .has-foreground-dark-color {
                color: var(--wp--preset--color--foreground-dark) !important;
            }

            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-primary-background-color {
                background-color: var(--wp--preset--color--primary) !important;
            }

            .has-secondary-background-color {
                background-color: var(--wp--preset--color--secondary) !important;
            }

            .has-background-background-color {
                background-color: var(--wp--preset--color--background) !important;
            }

            .has-foreground-background-color {
                background-color: var(--wp--preset--color--foreground) !important;
            }

            .has-foreground-light-background-color {
                background-color: var(--wp--preset--color--foreground-light) !important;
            }

            .has-foreground-dark-background-color {
                background-color: var(--wp--preset--color--foreground-dark) !important;
            }

            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }

            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }

            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }

            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }

            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }

            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }

            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important;
            }

            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }

            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }

            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }

            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }

            .has-primary-border-color {
                border-color: var(--wp--preset--color--primary) !important;
            }

            .has-secondary-border-color {
                border-color: var(--wp--preset--color--secondary) !important;
            }

            .has-background-border-color {
                border-color: var(--wp--preset--color--background) !important;
            }

            .has-foreground-border-color {
                border-color: var(--wp--preset--color--foreground) !important;
            }

            .has-foreground-light-border-color {
                border-color: var(--wp--preset--color--foreground-light) !important;
            }

            .has-foreground-dark-border-color {
                border-color: var(--wp--preset--color--foreground-dark) !important;
            }

            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }

            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }

            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }

            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }

            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
            }

            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important;
            }

            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important;
            }

            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important;
            }

            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }

            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important;
            }

            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }

            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }

            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }

            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }

            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }

            .has-normal-font-size {
                font-size: var(--wp--preset--font-size--normal) !important;
            }

            .has-huge-font-size {
                font-size: var(--wp--preset--font-size--huge) !important;
            }

            .has-albert-sans-font-family {
                font-family: var(--wp--preset--font-family--albert-sans) !important;
            }

            .has-alegreya-font-family {
                font-family: var(--wp--preset--font-family--alegreya) !important;
            }

            .has-arvo-font-family {
                font-family: var(--wp--preset--font-family--arvo) !important;
            }

            .has-bodoni-moda-font-family {
                font-family: var(--wp--preset--font-family--bodoni-moda) !important;
            }

            .has-bricolage-grotesque-font-family {
                font-family: var(--wp--preset--font-family--bricolage-grotesque) !important;
            }

            .has-cabin-font-family {
                font-family: var(--wp--preset--font-family--cabin) !important;
            }

            .has-chivo-font-family {
                font-family: var(--wp--preset--font-family--chivo) !important;
            }

            .has-commissioner-font-family {
                font-family: var(--wp--preset--font-family--commissioner) !important;
            }

            .has-cormorant-font-family {
                font-family: var(--wp--preset--font-family--cormorant) !important;
            }

            .has-courier-prime-font-family {
                font-family: var(--wp--preset--font-family--courier-prime) !important;
            }

            .has-crimson-pro-font-family {
                font-family: var(--wp--preset--font-family--crimson-pro) !important;
            }

            .has-dm-mono-font-family {
                font-family: var(--wp--preset--font-family--dm-mono) !important;
            }

            .has-dm-sans-font-family {
                font-family: var(--wp--preset--font-family--dm-sans) !important;
            }

            .has-dm-serif-display-font-family {
                font-family: var(--wp--preset--font-family--dm-serif-display) !important;
            }

            .has-domine-font-family {
                font-family: var(--wp--preset--font-family--domine) !important;
            }

            .has-eb-garamond-font-family {
                font-family: var(--wp--preset--font-family--eb-garamond) !important;
            }

            .has-epilogue-font-family {
                font-family: var(--wp--preset--font-family--epilogue) !important;
            }

            .has-fahkwang-font-family {
                font-family: var(--wp--preset--font-family--fahkwang) !important;
            }

            .has-figtree-font-family {
                font-family: var(--wp--preset--font-family--figtree) !important;
            }

            .has-fira-sans-font-family {
                font-family: var(--wp--preset--font-family--fira-sans) !important;
            }

            .has-fjalla-one-font-family {
                font-family: var(--wp--preset--font-family--fjalla-one) !important;
            }

            .has-fraunces-font-family {
                font-family: var(--wp--preset--font-family--fraunces) !important;
            }

            .has-gabarito-font-family {
                font-family: var(--wp--preset--font-family--gabarito) !important;
            }

            .has-ibm-plex-mono-font-family {
                font-family: var(--wp--preset--font-family--ibm-plex-mono) !important;
            }

            .has-ibm-plex-sans-font-family {
                font-family: var(--wp--preset--font-family--ibm-plex-sans) !important;
            }

            .has-ibarra-real-nova-font-family {
                font-family: var(--wp--preset--font-family--ibarra-real-nova) !important;
            }

            .has-instrument-serif-font-family {
                font-family: var(--wp--preset--font-family--instrument-serif) !important;
            }

            .has-inter-font-family {
                font-family: var(--wp--preset--font-family--inter) !important;
            }

            .has-josefin-sans-font-family {
                font-family: var(--wp--preset--font-family--josefin-sans) !important;
            }

            .has-jost-font-family {
                font-family: var(--wp--preset--font-family--jost) !important;
            }

            .has-libre-baskerville-font-family {
                font-family: var(--wp--preset--font-family--libre-baskerville) !important;
            }

            .has-libre-franklin-font-family {
                font-family: var(--wp--preset--font-family--libre-franklin) !important;
            }

            .has-literata-font-family {
                font-family: var(--wp--preset--font-family--literata) !important;
            }

            .has-lora-font-family {
                font-family: var(--wp--preset--font-family--lora) !important;
            }

            .has-merriweather-font-family {
                font-family: var(--wp--preset--font-family--merriweather) !important;
            }

            .has-montserrat-font-family {
                font-family: var(--wp--preset--font-family--montserrat) !important;
            }

            .has-newsreader-font-family {
                font-family: var(--wp--preset--font-family--newsreader) !important;
            }

            .has-noto-sans-mono-font-family {
                font-family: var(--wp--preset--font-family--noto-sans-mono) !important;
            }

            .has-nunito-font-family {
                font-family: var(--wp--preset--font-family--nunito) !important;
            }

            .has-open-sans-font-family {
                font-family: var(--wp--preset--font-family--open-sans) !important;
            }

            .has-overpass-font-family {
                font-family: var(--wp--preset--font-family--overpass) !important;
            }

            .has-pt-serif-font-family {
                font-family: var(--wp--preset--font-family--pt-serif) !important;
            }

            .has-petrona-font-family {
                font-family: var(--wp--preset--font-family--petrona) !important;
            }

            .has-piazzolla-font-family {
                font-family: var(--wp--preset--font-family--piazzolla) !important;
            }

            .has-playfair-display-font-family {
                font-family: var(--wp--preset--font-family--playfair-display) !important;
            }

            .has-plus-jakarta-sans-font-family {
                font-family: var(--wp--preset--font-family--plus-jakarta-sans) !important;
            }

            .has-poppins-font-family {
                font-family: var(--wp--preset--font-family--poppins) !important;
            }

            .has-raleway-font-family {
                font-family: var(--wp--preset--font-family--raleway) !important;
            }

            .has-roboto-font-family {
                font-family: var(--wp--preset--font-family--roboto) !important;
            }

            .has-roboto-slab-font-family {
                font-family: var(--wp--preset--font-family--roboto-slab) !important;
            }

            .has-rubik-font-family {
                font-family: var(--wp--preset--font-family--rubik) !important;
            }

            .has-rufina-font-family {
                font-family: var(--wp--preset--font-family--rufina) !important;
            }

            .has-sora-font-family {
                font-family: var(--wp--preset--font-family--sora) !important;
            }

            .has-source-sans-3-font-family {
                font-family: var(--wp--preset--font-family--source-sans-3) !important;
            }

            .has-source-serif-4-font-family {
                font-family: var(--wp--preset--font-family--source-serif-4) !important;
            }

            .has-space-mono-font-family {
                font-family: var(--wp--preset--font-family--space-mono) !important;
            }

            .has-syne-font-family {
                font-family: var(--wp--preset--font-family--syne) !important;
            }

            .has-texturina-font-family {
                font-family: var(--wp--preset--font-family--texturina) !important;
            }

            .has-urbanist-font-family {
                font-family: var(--wp--preset--font-family--urbanist) !important;
            }

            .has-work-sans-font-family {
                font-family: var(--wp--preset--font-family--work-sans) !important;
            }

            :where(.wp-block-pullquote) {
                font-size: 1.5em;
                line-height: 1.6;
            }
        </style>
        <link crossorigin='anonymous' rel='stylesheet' id='all-css-12-1' href='https://s0.wp.com/wp-content/mu-plugins/comment-likes/css/comment-likes.css?m=1407378799i&cssminify=yes' type='text/css' media='all'/>
        <link crossorigin='anonymous' rel='stylesheet' id='print-css-13-1' href='https://s0.wp.com/wp-content/themes/pub/varia/print.css?m=1571655471i&cssminify=yes' type='text/css' media='print'/>
        <link crossorigin='anonymous' rel='stylesheet' id='all-css-14-1' href='https://s0.wp.com/_static/??-eJyFj+EKwjAMhF/IGlaU/RKfpauxRtq0pNmGb2+HMAbK/JcL311yMBfjMyuygj4wYYUyDiA0EQfNDFVfEY++1gP8Ricn5IDYf1AzF5/TlyGNpsQxEFcImE3M3im1+K0w9+hI9qyctV11t0RsBidmsnu04BBzaGOARm3kXp1/zTf56x+QXFWU5aM8oQjdWti6WyKu6dL1ne3OJ2v75xv+tYt+&cssminify=yes' type='text/css' media='all'/>
        <style id='jetpack-global-styles-frontend-style-inline-css'>
            :root {
                --font-headings: unset;
                --font-base: unset;
                --font-headings-default: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
                --font-base-default: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
            }
            body {
                background: linear-gradient(to right, rgb(133, 204, 54), rgb(130, 99, 140)); 
               color: rgb(0, 0, 0); 
          }

        </style>
        <link crossorigin='anonymous' rel='stylesheet' id='all-css-16-1' href='https://s0.wp.com/wp-content/themes/h4/global.css?m=1420737423i&cssminify=yes' type='text/css' media='all'/>
        <script type="text/javascript" id="notes-common-lite-js-extra">
            /* <![CDATA[ */
            var wpNotesArgs = {
                "cacheBuster": "d491bd00d6b",
                "iframeUrl": "https:\/\/widgets.wp.com\/notifications\/",
                "iframeAppend": "2",
                "iframeScroll": "no",
                "wide": "1"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" id="media-video-jwt-bridge-js-extra">
            /* <![CDATA[ */
            var videopressAjax = {
                "ajaxUrl": "https:\/\/radial51.wordpress.com\/wp-admin\/admin-ajax.php",
                "bridgeUrl": "\/wp-content\/mu-plugins\/jetpack-plugin\/moon\/jetpack_vendor\/automattic\/jetpack-videopress\/build\/lib\/token-bridge.js",
                "post_id": "2"
            };
            /* ]]> */
        </script>
        
        <script crossorigin='anonymous' type='text/javascript' src='https://s0.wp.com/_static/??-eJyFjsEOwjAMQ3+IEm1IIA6IT0HdGqZ0bVK16YC/p4eBBAe4WIr9LAduyYzCiqzgC0QZKKCpBbOdmmeIr7L1ZQOfXA5qUpb74zuL1aRQJ+ICLIqrtjhGYRNIcRuJ/7asa5QZbDZL/wP2qMmO83q374Vf3mVBdpLBVpVoVWl80ws5lJSxFBgqBQeBBlCZsS1mchO2xXM8dYdu3x13fd/5J8ClbV0='></script>
        <script type="text/javascript" id="rlt-proxy-js-after">
            /* <![CDATA[ */
            window.addEventListener('DOMContentLoaded', function() {
                rltInitialize({
                    "token": "rlt-MnxTZi9BUU9FRzI5dzdGbnFtbHNydC90b1J0cFJhdk9NM2xkVHdDZHgzTlkwdUR0Um9TYUlUY0ZWcDR1UXR6dXh2LzlxQW50UFFIODdqeWtPQVp2N3JNeDJkbDRhKzBNZHZaUFVIRFNialp4THorclZCWmpueS9RZGp0cmU0Y3N2SjZ3eTFJR3ZtdWZBa2k0TFNaaGtKd0FlNUswaVljVU1iS3gvampvdVM2QTQxclpiZzBzUmlPazhNOVV0RFdpNEV5LzdDdHBqNDBJU1g0eHQ0RVovS2d6QmRWbFQ0OStSNFk4QUIrY3loaGYyUVFCZ2FhQ3lOa25YQ0tSVlJWLy9HRDVMd1RidWlsOWt6NGVVZGY3bVpwTENCNjRHa1k2Q3hORm1rNC9LeDE5ST18ZGVjOWUxODgxNDRmMjhmY2E1NzNjMmJkY2UyMDQ1Y2VlZThlNzYxZDBlYzQwZTlkfGQxODcwOWM4ZmQ0ZjdkNzY4Y2IzMWNkY2JlN2I1MDFmYjk0YjRiZDE3MjVkOWVlNGU2Nzc2NWRlNDdjYzc1MWU4NWZlM2YzZmQ0YmYyNGQzNWY1NWM2YTkwMzNlZmM1YjQxZDAzNjE3ODkxNzAzZGMwM2U2MThjZTMxMjFkYzFj",
                    "iframeOrigins": ["https:\/\/widgets.wp.com"]
                });
            });
            /* ]]> */
        </script>
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://radial51.wordpress.com/xmlrpc.php?rsd"/>
        <meta name="generator" content="WordPress.com"/>
        <link rel="canonical" href="{{ route('welcome') }}"/>
        <link rel='shortlink' href='https://wp.me/PfMGVu-2'/>
        <!-- Jetpack Open Graph Tags -->
        <meta property="og:type" content="article"/>
        <meta property="og:title" content="About"/>
        <meta property="og:url" content="{{ route('welcome') }}"/>
        <meta property="og:description" content="Visitors will want to know who is on the other side of the page. Use this space to write about yourself, your site, your business, or anything you want. Use the testimonials below to quote others, …"/>
        <meta property="article:published_time" content="2024-05-18T21:54:49+00:00"/>
        <meta property="article:modified_time" content="2024-05-18T21:54:49+00:00"/>
        <meta property="og:site_name" content="Site Title"/>
        <meta property="og:image" content="https://s0.wp.com/i/blank.jpg"/>
        <meta property="og:image:alt" content=""/>
        <meta property="og:locale" content="en_US"/>
        <meta property="fb:app_id" content="249643311490"/>
        <meta property="article:publisher" content="https://www.facebook.com/WordPresscom"/>
        <meta name="twitter:text:title" content="About"/>
        <meta name="twitter:card" content="summary"/>
        <!-- End Jetpack Open Graph Tags -->
        <link rel="shortcut icon" type="image/x-icon" href= "{{('img/brand/Spa-1.jpg')}}"sizes="16x16 24x24 32x32 48x48"/>
        <link rel="icon" type="image/x-icon" href= "{{('img/brand/Spa-1.jpg')}}" sizes="16x16 24x24 32x32 48x48"/>
        <link rel="apple-touch-icon" href= "{{('img/brand/Spa-1.jpg')}}"/> 
        <link rel="search" type="application/opensearchdescription+xml" href="{{ route('welcome') }}" title="Merrash"/>
        <link rel="search" type="application/opensearchdescription+xml" href="https://s1.wp.com/opensearch.xml" title="WordPress.com"/>
        <meta name="application-name" content="Site Title"/>
        <meta name="msapplication-window" content="width=device-width;height=device-height"/>
        <meta name="msapplication-tooltip" content="Author posts, manage comments, and manage Site Title."/>
        <meta name="description" content="Visitors will want to know who is on the other side of the page. Use this space to write about yourself, your site, your business, or anything you want. Use the testimonials below to quote others, talking about the same thing – in their own words. This is sample content, included with the template to&hellip;"/>
    </head>
    <body class="page-template-default page page-id-2 logged-in admin-bar no-customize-support wp-embed-responsive customizer-styles-applied singular image-filters-enabled hide-homepage-title mobile-nav-side jetpack-reblog-enabled has-launch-banner" style="margin-top: -40px;">
        <script type="text/javascript">
            /* <![CDATA[ */
            (function() {
                function init() {
                    document.addEventListener('load', function() {
                        // hack to hide the gravatar hovercard
                        document.querySelectorAll('#wpadminbar img.grav-hashed').forEach(function(el) {
                            el.classList.remove('grav-hashed');
                        });
                    })

                    // debug bar extra
                    window.clickDebugLink = function(parentId, obj) {
                        if (!window.jQuery) {
                            return;
                        }
                        var $ = window.jQuery;

                        $('#' + parentId).children('div').hide();

                        document.getElementById(obj.href.substr(obj.href.indexOf('#') + 1)).style.display = 'block';
                        $(obj.href.substr(obj.href.indexOf('#'))).show()

                        $(obj).parent().addClass('current').siblings('li').removeClass('current');

                        return false;
                    }
                    ;
                }

                if (document.readyState !== 'loading') {
                    init();
                } else {
                    document.addEventListener('DOMContentLoaded', init);
                }
            }
            )();
            /* ]]> */
        </script>
        <div class="wpcom-bubble action-bubble">
            <div class="bubble-txt"></div>
        </div>
        <script type="text/javascript">
            function hideBubble() {
                var bubble = document.querySelector('div.wpcom-bubble');
                if (!bubble) {
                    return;
                }
                bubble.parentElement.removeChild(bubble);

                bubble = document.createElement('div');
                bubble.classList.add('wpcom-bubble');
                bubble.classList.add('action-bubble');
                bubble.innerHTML = '<div class="bubble-txt"></div>';
                document.body.appendChild(bubble);
            }
        </script>
        <script type="text/javascript">
            (function() {
                'use strict';

                var isShowing = false;

                document.querySelectorAll('#wp-admin-bar-jumptotop-button-menu a').forEach(function(el) {
                    el.addEventListener('click', function(e) {
                        e.preventDefault();
                        if (window.CSS && window.CSS.supports && window.CSS.supports('scroll-behavior', 'smooth')) {
                            window.scroll({
                                top: 0,
                                left: 0,
                                behavior: 'smooth'
                            });
                        } else {
                            window.scroll(0, 0);
                        }
                    });
                });

                function hideShowButton() {
                    var jumpToTop = document.querySelector('#jumptotop');
                    if (isShowing) {
                        jumpToTop.style.transform = 'translateY( 0 )';
                    } else {
                        jumpToTop.style.transform = 'translateY( -50px )';
                    }
                }

                function hideShowTbJumpToTop() {
                    var total_width = 0;
                    // Calculate total width taken by items minus our button to see if it'll
                    // overlap with other toolbar menus.
                    document.querySelectorAll('#wp-admin-bar-root-default > li').forEach(function(el) {
                        if (el.getAttribute('id') !== 'wp-admin-bar-jumptotop-button-menu') {
                            total_width += el.offsetWidth;
                        }
                    });
                    var menu = document.querySelector('#wp-admin-bar-jumptotop-button-menu');
                    if (!menu) {
                        return;
                    }

                    if (menu.offsetLeft - total_width < 10) {
                        isShowing = false;
                    } else if (window.scrollY >= 350 && !isShowing) {
                        if (menu.offsetLeft - total_width < 10) {
                            return;
                        }
                        isShowing = true;
                    } else if (window.scrollY < 1 && isShowing) {
                        isShowing = false;
                    }
                    hideShowButton();
                }

                // handle on page load if auto scrolling to a position
                hideShowTbJumpToTop();

                // Bind to scroll event
                var jumpToTopTimer = null;
                window.addEventListener('scroll', function() {
                    clearTimeout(jumpToTopTimer);
                    jumpToTopTimer = setTimeout(hideShowTbJumpToTop, 150);
                }, {
                    passive: true
                });
            }
            )();
        </script>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    <header id="masthead" class="site-header responsive-max-width has-title-and-tagline has-menu" role="banner">
        <div class="site-branding">
            <p class="site-title">
                <a href="{{ route('welcome') }}" rel="home" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 30px; color: #121212;">
                    <img src="img/brand/FONDO-1.png" alt="Merrash Logo" style="vertical-align: middle; margin-right: 10px; width: 50px;" /> Merrash
                </a>
            </p>
        </div>   
                <!-- .site-branding -->
                <nav id="site-navigation" class="main-navigation" aria-label="Main Navigation">
                    <input type="checkbox" role="button" aria-haspopup="true" id="toggle" class="hide-visually">
                    <label for="toggle" id="toggle-menu" class="button">
                        Menu			<span class="dropdown-icon open">+</span>
                        <span class="dropdown-icon close">&times;</span>
                        <span class="hide-visually expanded-text">expanded</span>
                        <span class="hide-visually collapsed-text">collapsed</span>
                    </label>
                    <div class="main-menu-container">
                        <ul id="menu-primary-menu" class="main-menu" aria-label="submenu">
                        
                            <li class="mx-6">
                                <a class="site-name"
                                   href="{{ route('welcome') }}"
                                   class="font-semibold py-3 px-4 rounded-md text-black transition-colors duration-300"
                                   style="--link-color: #000; --link-hover-color: #85CC36; color: #000;"
                                   onmouseover="this.style.color=getComputedStyle(this).getPropertyValue('--link-hover-color');"
                                   onmouseout="if (!this.classList.contains('selected')) { this.style.color=getComputedStyle(this).getPropertyValue('--link-color'); }"
                                   onclick="this.style.color=getComputedStyle(this).getPropertyValue('--link-hover-color'); this.classList.add('selected');">
                                   Inicio
                                </a>
                            </li>
                            
                            <li id="menu-item-17" class="mx-6">
                                <a href="{{ route('services.available') }}"
                                   class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md text-black transition-colors duration-300"
                                   style="--link-color: #000; --link-hover-color: #85CC36; color: #000;"
                                   onmouseover="this.style.color=getComputedStyle(this).getPropertyValue('--link-hover-color');"
                                   onmouseout="this.style.color=getComputedStyle(this).getPropertyValue('--link-color');">
                                   Servicios
                                </a>
                            </li>
                            
                            
                            <li id="menu-item-20" class="mx-6">
                                <a href="{{ route('contacto') }}"
                                   class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md text-black transition-colors duration-300"
                                   style="--link-color: #000; --link-hover-color: #85CC36; color: #000;"
                                   onmouseover="this.style.color=getComputedStyle(this).getPropertyValue('--link-hover-color');"
                                   onmouseout="this.style.color=getComputedStyle(this).getPropertyValue('--link-color');">
                                   Testimonios
                                </a>
                            </li>
                            
                        
                            <li id="menu-item-19" class="mx-6">
                                <a href="{{ route('contacto') }}"
                                   class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md text-black transition-colors duration-300"
                                    style="--link-color: #000; --link-hover-color: #85CC36; color: #000;"
                                   onmouseover="this.style.color=getComputedStyle(this).getPropertyValue('--link-hover-color');"
                                   onmouseout="this.style.color=getComputedStyle(this).getPropertyValue('--link-color');">
                                   Contacto
                                </a>
                            </li>
                            
                            <li class="menu-item-20">
                                <a href="{{ route('login.index') }}"
                                   class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md text-black transition-colors duration-300"
                                   s style="--link-color: #000; --link-hover-color: #85CC36; color: #000;"
                                   onmouseover="this.style.color=getComputedStyle(this).getPropertyValue('--link-hover-color');"
                                   onmouseout="this.style.color=getComputedStyle(this).getPropertyValue('--link-color');">
                                   Iniciar Sesión
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- #site-navigation -->
            </header>
            <!-- #masthead -->
            <div id="content" class="site-content">
                <section id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <article id="post-2" class="post-2 page type-page status-publish hentry entry">
                            <header class="entry-header responsive-max-width">
                                <h1 class="entry-title"></h1>
                            </header>
                            <div class="entry-content">
                                <div style="display: flex; align-items: center;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 50px; height: 50px; margin-right: 10px;">
                                        <!-- El contenido del SVG aquí -->
                                        <path d="M448 256A192 192 0 1 0 64 256a192 192 0 1 0 384 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 80a80 80 0 1 0 0-160 80 80 0 1 0 0 160zm0-224a144 144 0 1 1 0 288 144 144 0 1 1 0-288zM224 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/>
                                    </svg>
                                    <h1 style="margin-bottom: 0;">Mision</h1>
                                </div>
                                <p style="text-align:left">Nuestra empresa tiene el compromiso de ayudar a la autosanación a través del conocimiento y la autoconciencia;
                                    brindando salud, bienestar y satisfacción personal a nuestros pacientes mediante los servicios 
                                    que ofrecemos como: medicina alternativa, spa integral de belleza y nutrición
                                </p>
                                <hr class="wp-block-separator is-style-wide"/>
                                <div style="display: flex; align-items: center; margin-bottom: 20px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width: 50pxpx; height: 50px; margin-right: 10px;">
                                      <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/>
                                    </svg>
                                    <h1 style="margin-bottom: 0;">Visión</h1>
                                  </div>
                                  <p style="text-align:left">Consolidarnos como el mejor servicio que se puede ofrecer a aquellas personas que buscan su bienestar, 
                                    aspiramos a formar parte del cambio personal de manera integral con dedicación y constancia para lograr una armonización de la mente,
                                    el cuerpo y el espíritu.
                                  </p>        
                                <div style="height:32px" aria-hidden="true" class="wp-block-spacer desktop-only"></div>
                                <hr class="wp-block-separator is-style-wide"/>
                                <center>
                                    <h3 class="has-text-align-center wp-block-heading" style="display: flex; align-items: center; justify-content: center;">
                                        Valores
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 24px; height: 24px; margin-left: 8px;"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                                    </h3>
                                </center>
                                <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                                    <blockquote class="wp-block-quote is-layout-flow wp-block-quote-is-layout-flow">
                                        <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
                                            <img src="https://cdn-icons-png.flaticon.com/128/5805/5805761.png" alt="Imagen" style="width: 30px; height: 30px; margin-right: 10px;">
                                            <h1 style="margin: 0;">Honestidad</h1>
                                        </div>
                                        <p>
                                            Como valor más importante en la empresa ya que establece las bases para crear una cultura de trabajo idónea que genere comportamiento de confianza en los pacientes.
                                        </p>
                                    </blockquote>
                                </div>
                                
                                <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="margin-bottom: 40px;">
                                    <blockquote class="wp-block-quote is-layout-flow wp-block-quote-is-layout-flow" style="padding: 1px;">
                                        <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                                            <img src="https://cdn-icons-png.flaticon.com/128/796/796503.png" alt="Imagen" style="width: 30px; height: 30px; margin-right: 10px;">
                                            <h1 style="margin: 0; line-height: 30px;">Transparencia</h1>
                                        </div>
                                        <p>Implica compartir información relacionada con productos y servicios así como procesos internos, precios y verdad absoluta.</p>
                                        <cite></cite>
                                    </blockquote>
                                </div>
                                
                                <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="margin-bottom: 40px;">
                                    <blockquote class="wp-block-quote is-layout-flow wp-block-quote-is-layout-flow" style="padding: 10px;">
                                        <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                                            <img src="https://cdn-icons-png.flaticon.com/128/4264/4264425.png" alt="Imagen" style="width: 30px; height: 30px; margin-right: 10px;">
                                            <h1 style="margin: 0; line-height: 30px;">Pasión</h1>
                                        </div>
                                        <p>Equipo multidisciplinario apasionado por lo que hace y responde a la constancia y excelencia de su preparación.</p>
                                        <cite></cite>
                                    </blockquote>
                                </div>
                                
                                </div>
            <!-- #content -->
            <footer id="colophon" class="site-footer responsive-max-width">
                <nav class="social-navigation" role="navigation" aria-label="Social Links Menu">
                    <div class="menu-social-menu-container">
                        <ul id="menu-social-menu" class="social-links-menu">
                            <li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20">
                                <a href="https://www.facebook.com/MerrashSpayMedicinaAlternativa" 
                                style="--link-color: #000; --link-hover-color: #85CC36; color: #000;"
                                onmouseover="this.style.color = this.style.getPropertyValue('--link-hover-color');"
                                onmouseout="this.style.color = this.style.getPropertyValue('--link-color');">
                                    <span class="screen-reader-text">Facebook</span>
                                    <svg class="svg-icon" width="26" height="26" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path d="M20.007,3H3.993C3.445,3,3,3.445,3,3.993v16.013C3,20.555,3.445,21,3.993,21h8.621v-6.971h-2.346v-2.717h2.346V9.31 c0-2.325,1.42-3.591,3.494-3.591c0.993,0,1.847,0.074,2.096,0.107v2.43l-1.438,0.001c-1.128,0-1.346,0.536-1.346,1.323v1.734h2.69 l-0.35,2.717h-2.34V21h4.587C20.555,21,21,20.555,21,20.007V3.993C21,3.445,20.555,3,20.007,3z"></path>
                                    </svg>
                                </a>
                            </li>

                            <li id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21">
                                <a href="https://www.youtube.com"
                                style="--link-color: #000; --link-hover-color: #85CC36; color: #000;"
                                onmouseover="this.style.color = this.style.getPropertyValue('--link-hover-color');"
                                onmouseout="this.style.color = this.style.getPropertyValue('--link-color');">
                                    <span class="screen-reader-text">YouTube</span>
                                    <svg class="svg-icon" width="26" height="26" aria-hidden="true" role="img" focusable="false" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/>
                                    </svg>
                                </a>
                            </li>
                            
                            <li id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21">
                                <a href="https://www.tiktok.com"
                                   style="--link-color: #000; --link-hover-color: #85CC36; color: #000;"
                                   onmouseover="this.style.color = this.style.getPropertyValue('--link-hover-color');"
                                   onmouseout="this.style.color = this.style.getPropertyValue('--link-color');">
                                    <svg class="svg-icon" width="26" height="26" aria-hidden="true" role="img" focusable="false" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/>
                                    </svg>
                                </a>
                            </li>
                            
                            
                            
                            <li id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22">
                                <a href="https://www.instagram.com/merrashyspaintegraldebelleza/" 
                                style="--link-color: #000; --link-hover-color: #85CC36; color: #000;"
                                onmouseover="this.style.color = this.style.getPropertyValue('--link-hover-color');"
                                onmouseout="this.style.color = this.style.getPropertyValue('--link-color');">
                                    <span class="screen-reader-text">Instagram</span>
                                    <svg class="svg-icon" width="26" height="26" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>

                    </div>
                </nav>
                <!-- .social-navigation -->
                <div class="site-info">
                    <a class="site-name" href="{{ route('welcome') }}" rel="home" style="color: #121212;">Copyright ©</a>
                    <span class="comma">,</span>
                    <a class="site-name" href="{{ route('welcome') }}" rel="nofollow" style="color: #121212;">Merrash 2024</a>
                </div>
                <!-- .site-info -->
            </footer>
            <!-- #colophon -->
        </div>
        <!-- #page -->
        <!--  -->
        <script type="text/javascript" src="//0.gravatar.com/js/hovercards/hovercards.min.js?ver=2024214d47d929f88574eb4a47e5b1778b683b87e7f6078bb6a33f34c1178752e83406" id="grofiles-cards-js"></script>
        <script type="text/javascript" id="wpgroho-js-extra">
            /* <![CDATA[ */
            var WPGroHo = {
                "my_hash": "9a241bc0233eebc99fd5294c0f4e0c70"
            };
            /* ]]> */
        </script>
        <script crossorigin='anonymous' type='text/javascript' src='https://s0.wp.com/wp-content/mu-plugins/gravatar-hovercards/wpgroho.js?m=1610363240i'></script>
        <script>
            // Initialize and attach hovercards to all gravatars
            (function() {
                function init() {
                    if (typeof Gravatar === 'undefined') {
                        return;
                    }

                    if (typeof Gravatar.init !== 'function') {
                        return;
                    }

                    Gravatar.profile_cb = function(hash, id) {
                        WPGroHo.syncProfileData(hash, id);
                    }
                    ;

                    Gravatar.my_hash = WPGroHo.my_hash;
                    Gravatar.init('body', '#wp-admin-bar-my-account', {
                        i18n: {
                            'Edit your profile': 'Edit your profile',
                            'View profile': 'View profile',
                            'Sorry, we are unable to load this Gravatar profile.': 'Sorry, we are unable to load this Gravatar profile.',
                            'Sorry, we are unable to load this Gravatar profile. Please check your internet connection.': 'Sorry, we are unable to load this Gravatar profile. Please check your internet connection.',
                        },
                    });
                }

                if (document.readyState !== 'loading') {
                    init();
                } else {
                    document.addEventListener('DOMContentLoaded', init);
                }
            }
            )();
        </script>
        <div style="display:none">
            <div class="grofile-hash-map-9a241bc0233eebc99fd5294c0f4e0c70"></div>
        </div>
        
        
        <style id='core-block-supports-inline-css'>
            .wp-container-core-columns-is-layout-1 {
                flex-wrap: nowrap;
            }
        </style>
        <script type="text/javascript" id="comment-like-js-extra">
            /* <![CDATA[ */
            var comment_like_text = {
                "loading": "Loading...",
                "swipeUrl": "https:\/\/s0.wp.com\/wp-content\/mu-plugins\/comment-likes\/js\/lib\/swipe.js?ver=20131008"
            };
            /* ]]> */
        </script>

        <script crossorigin='anonymous' type='text/javascript' src='https://s0.wp.com/_static/??-eJx1j9EOwiAMRX9IRmaC+mL8lo6RrQwKKTDj38s0mTr1rWnPaW/lNQok7UpvkrRJjmE2jJQNZWFT45Eam3ZyQ0FfB6IDfgd0eGiyc2EQ0ZUBKUkHhfRYUSLDMmnGmLeCLyu+Lq5zHbx4HfrvVM4vcR1Oz3Qfja2YR+MrFksnZ2CERYiMHvgmCGYcIGP4+ulnRA8pG66VyAx6Wk5d/Lk9tkqdDnul7B0fBYEh'></script>
        <script>
            /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function() {
                var t, e = location.hash.substring(1);
                /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1),
                t.focus())
            }, !1);
        </script>
        <script type="text/javascript">
            (function() {
                var wpcom_reblog = {
                    source: 'toolbar',

                    toggle_reblog_box_flair: function(obj_id, post_id) {

                        // Go to site selector. This will redirect to their blog if they only have one.
                        const postEndpoint = `https://wordpress.com/post`;

                        // Ideally we would use the permalink here, but fortunately this will be replaced with the 
                        // post permalink in the editor.
                        const originalURL = `${document.location.href}?page_id=${post_id}`;

                        const url = postEndpoint + '?url=' + encodeURIComponent(originalURL) + '&is_post_share=true' + '&v=5';

                        const redirect = function() {
                            if (!window.open(url, '_blank')) {
                                location.href = url;
                            }
                        };

                        if (/Firefox/.test(navigator.userAgent)) {
                            setTimeout(redirect, 0);
                        } else {
                            redirect();
                        }
                    },
                };

                window.wpcom_reblog = wpcom_reblog;
            }
            )();
        </script>
        <script type="text/javascript">
            // <![CDATA[
            (function() {
                try {
                    if (window.external && 'msIsSiteMode'in window.external) {
                        if (window.external.msIsSiteMode()) {
                            var jl = document.createElement('script');
                            jl.type = 'text/javascript';
                            jl.async = true;
                            jl.src = '/wp-content/plugins/ie-sitemode/custom-jumplist.php';
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(jl, s);
                        }
                    }
                } catch (e) {}
            }
            )();
            // ]]>
        </script>
        <script src="//stats.wp.com/w.js?67" defer></script>
        <script type="text/javascript">
            _tkq = window._tkq || [];
            _stq = window._stq || [];
            _tkq.push(['identifyUser', 250953880, 'aldairm0308']);
            _tkq.push(['storeContext', {
                'blog_id': '233249796',
                'blog_tz': '-6',
                'user_lang': 'en',
                'blog_lang': 'en'
            }]);
            _stq.push(['view', {
                'blog': '233249796',
                'v': 'wpcom',
                'tz': '-6',
                'user': '1',
                'user_id': '250953880',
                'post': '2',
                'subd': 'radial51'
            }]);
            _stq.push(['extra', {
                'crypt': 'UE40eW5QN0p8M2Y/RE1mN3FZZmo1ciV5XXJsZ24wUjJacUxGNiVZTFVrRGNHdkxHbS8sQzF1dHQ9MGZsMmlHcy9iRTBzK0o1TnVxfD91Nkk3YWVtbmc0Qnp2K35KcXY0aiVsc0JBUU40TUpvSHRwT3k/Q0s/eGlyVExEMmRScl03empOUk09SlQlQWQuUmUmfDNiOG1fLTl3OERpNWt3bCYsZ0dCaDdRaVNuVzNYcnlyQlh3ZGpPTl8wdG5OT11RWmpXTXhFdTRIMmJuSjEwbWJoekw9eHdPS0liOSZQSWdCcHBiM1BJR0Z+THBhNGl0UzE5VFo1fEVI'
            }]);
        </script>
        <noscript>
            <img src="https://pixel.wp.com/b.gif?v=noscript" style="height:1px;width:1px;overflow:hidden;position:absolute;bottom:1px;" alt=""/>
        </noscript>
        <script>
            if ('object' === typeof wpcom_mobile_user_agent_info) {

                wpcom_mobile_user_agent_info.init();
                var mobileStatsQueryString = "";

                if (false !== wpcom_mobile_user_agent_info.matchedPlatformName)
                    mobileStatsQueryString += "&x_" + 'mobile_platforms' + '=' + wpcom_mobile_user_agent_info.matchedPlatformName;

                if (false !== wpcom_mobile_user_agent_info.matchedUserAgentName)
                    mobileStatsQueryString += "&x_" + 'mobile_devices' + '=' + wpcom_mobile_user_agent_info.matchedUserAgentName;

                if (wpcom_mobile_user_agent_info.isIPad())
                    mobileStatsQueryString += "&x_" + 'ipad_views' + '=' + 'views';

                if ("" != mobileStatsQueryString) {
                    new Image().src = document.location.protocol + '//pixel.wp.com/g.gif?v=wpcom-no-pv' + mobileStatsQueryString + '&baba=' + Math.random();
                }

            }
        </script>
    </body>
</html>
