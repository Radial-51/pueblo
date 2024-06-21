<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="profile" href="https://gmpg.org/xfn/11"/>
        <title>Merrash</title>
        <meta name='robots' content='noindex, nofollow'/>
        <link rel='dns-prefetch' href='//s0.wp.com'/>
        <link rel='dns-prefetch' href='//wordpress.com'/>
        <link rel="alternate" type="application/rss+xml" title="Merrash &raquo; Feed" href="https://merrash-prubeas-production.up.railway.app/"/>
        <link rel="alternate" type="application/rss+xml" title="Merrash &raquo; Comments Feed" href="https://merrash-prubeas-production.up.railway.app/"/>
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
                    "concatemoji": "https:\/\/s0.wp.com\/wp-includes\/js\/wp-emoji-release.min.js?m=1710334132i&ver=6.6-alpha-58146"
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
                --wp--preset--color--luminous-vivid-amber: #fc0000;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;

                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--color--primary:  #85CC36;                ;
                --wp--preset--color--secondary: #EE4266;
            
                --wp--preset--color--background: #00d9ff;
                --wp--preset--color--foreground: #f2f2f2;
                --wp--preset--color--foreground-light: #82638c;
                --wp--preset--color--foreground-dark: #8F8F8F;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgb(47, 0, 255) 0%,rgba(255,105,0,1) 100%);
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
                    /* Añadir el color de fondo */
        body {
            background-color: #fbfbfb; /* Cambia esto al color que desees */
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
                "ajaxUrl": "https://merrash-prubeas-production.up.railway.app/",
                "bridgeUrl": "\/wp-content\/mu-plugins\/jetpack-plugin\/sun\/jetpack_vendor\/automattic\/jetpack-videopress\/build\/lib\/token-bridge.js",
                "post_id": "23"
            };
            /* ]]> */
        </script>
        
        <script crossorigin='anonymous' type='text/javascript' src='https://s0.wp.com/_static/??-eJyFjcEOwjAMQ3+IEg1pMA6IT0HdGqZsbVK16YC/p4eBBAe4WLL9LMMtmkFYkRWmDEF68mhKxmTHmhniq2ynvIFPLnk1Mcn98d2FYqIvI3EGFsVVax2CsPGkuA3Ef1fWVcr0Npll9wOeUKMd5tVDLvyKLguykwS2qASrSsMbXsihxIQ5Q1/IO/DUg8qM9TCRG7EensOpOTRt13bHfTs9AVG4bRA='></script>
        <script type="text/javascript" id="rlt-proxy-js-after">
            /* <![CDATA[ */
            window.addEventListener('DOMContentLoaded', function() {
                rltInitialize({
                    "token": "rlt-Mnx5RXF1aUNrUkNLOEY3UWUzS3lYRitoSE1KSGpzNTlzYWlQeFdTcGQxdURuclltYXY1MzJ3MnV6NWxSUzRtVnJxemdMc21FSU9MYnNNd0FCT0F2ajFoUUwwY0tHcEUyaXUrWktRYi9DK2d6U3grZ2tSZ2hkeWM5SXFFSWMrcUlheWhqNEFhbXpxZk9tQkhFZ094bjh2azVTUXV2UjJaQ2h1YXlHTDJMbm1RVitmdEUxdnJ2VkxoZm93OWRVYnZWV21FMXN0dG9HUzU1US85NDErMTBXck0xYk1kMUNGVGdYTDA4dVhKREVLbkVSTjNSdTlhbW5yK2Z1OEY0R1MvSUxUbGhWNGkrZy9RTFdjYjF3OW45T2EzWWJCbkVJdEtVbkVlb2dya2RLVTh1Yz18NTRkMzFiMzYyZDIwYmNhZTQyOWJiZGY5NjVmYjJjYzZkNTk5ZDExMWIzNjc3MjcxfDQ5ZWViODE4YTVjMGVmZmIxODI2MzgwYjZlZmMxMWZhZTY4NTNlYTAzOGI1NTJlZGE2YTg4NDJjNzY4YzY5NTFkZjU1MjY0MWMzMjFhNGRkMDY1ZTM3OTk0OTNlMjE4OTA3YjQwMjA4NzgxMjEzYmVlZmZhOGNhN2ZhYTUxNzBh",
                    "iframeOrigins": ["https:\/\/widgets.wp.com"]
                });
            });
            /* ]]> */
        </script>
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://merrash-prubeas-production.up.railway.app/"/>
        <meta name="generator" content="WordPress.com"/>
        <link rel="canonical" href="https://merrash-prubeas-production.up.railway.app/"/>
        <link rel='shortlink' href='https://wp.me/PfMGVu-n'/>
        <!-- Jetpack Open Graph Tags -->
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Merrash"/>
        <meta property="og:url" content="https://merrash-prubeas-production.up.railway.app/"/>
        <meta property="og:site_name" content="Merrash"/>
        <meta property="og:image" content="https://rivingtondemo.files.wordpress.com/2019/08/alberto-castillo-q-mx4mskk9zeo-unsplash-5.jpg"/>
        <meta property="og:image:alt" content=""/>
        <meta property="og:locale" content="en_US"/>
        <meta property="fb:app_id" content="249643311490"/>
        <meta property="article:publisher" content="https://www.facebook.com/WordPresscom"/>
        <meta name="twitter:text:title" content="Home"/>
        <meta name="twitter:image" content="https://rivingtondemo.files.wordpress.com/2019/08/alberto-castillo-q-mx4mskk9zeo-unsplash-5.jpg?w=144"/>
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:description" content="Visit the post for more."/>
        <!-- End Jetpack Open Graph Tags -->
        <link rel="shortcut icon" type="image/x-icon" href= "{{('img/brand/Spa-1.jpg')}}"sizes="16x16 24x24 32x32 48x48"/>
        <link rel="icon" type="image/x-icon" href= "{{('img/brand/Spa-1.jpg')}}" sizes="16x16 24x24 32x32 48x48"/>
        <link rel="apple-touch-icon" href= "{{('img/brand/Spa-1.jpg')}}"/> 
        <link rel="search" type="application/opensearchdescription+xml" href="https://merrash-prubeas-production.up.railway.app/" title="Merrash"/>
        <link rel="search" type="application/opensearchdescription+xml" href="https://s1.wp.com/opensearch.xml" title="WordPress.com"/>
        <meta name="application-name" content="Site Title"/>
        <meta name="msapplication-window" content="width=device-width;height=device-height"/>
        <meta name="msapplication-tooltip" content="Author posts, manage comments, and manage Site Title."/>
        <meta name="description" content="Award-Winning Modern Mediterranean Style House 123 Any Street, HJ 12345 $700,000 Built Year 2017 Bedrooms 5 Bathrooms 3 Stories 2 Sq. ft. 3250 Built for the future. This 5 bedroom, 3 bathroom home has an estimated 4,000 total square feet with nearly 3 acres &amp; its own access to the Haywards River. Extensive upgrades and&hellip;"/>
    </head>
    <body class="home page-template-default page page-id-23 logged-in admin-bar no-customize-support wp-embed-responsive customizer-styles-applied singular image-filters-enabled hide-homepage-title mobile-nav-side jetpack-reblog-enabled has-launch-banner" style="margin-top: -40px">
        
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
                    Menu <span class="dropdown-icon open"></span>
                    <span class="dropdown-icon close">&times;</span>
                    <span class="hide-visually expanded-text">expanded</span>
                    <span class="hide-visually collapsed-text">collapsed</span>
                </label>
                <div class="main-menu-container">
                    <ul id="menu-primary-menu" class="main-menu" aria-label="submenu">
                        
                        <li id="menu-item-16" class="mx-6">
                            <a href="{{ route('about') }}"
                               class="font-semibold py-3 px-4 rounded-md text-black transition-colors duration-300"
                               style="--link-color: #000; --link-hover-color: #85CC36; color: #000;"
                               onmouseover="this.style.color=getComputedStyle(this).getPropertyValue('--link-hover-color');"
                               onmouseout="if (!this.classList.contains('selected')) { this.style.color=getComputedStyle(this).getPropertyValue('--link-color'); }"
                               onclick="this.style.color=getComputedStyle(this).getPropertyValue('--link-hover-color'); this.classList.add('selected');">
                               Acerca De Nosotros
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
                        <article id="post-23" class="post-23 page type-page status-publish hentry entry">
                            <div style="display: flex; justify-content: center; margin-top: 13px;">
                                <h5 style="display: flex; align-items: center; align-self: center; font-size: 25px; font-weight: bold; color: #121212;">Nuestros Servicios</h5>
                            </div>                            
                            <header class="entry-header responsive-max-width">
                                <h1 class="entry-title">Home</h1>
                            </header>
                            <div class="entry-content">
                                <div class="wp-block-columns alignfull is-layout-flex wp-container-core-columns-is-layout-1 wp-block-columns-is-layout-flex">
                                    
                                    <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:66.66%; height: auto; padding-top: 5px;">
                                        <div class="wp-block-jetpack-slideshow aligncenter" data-effect="slide">
                                            <style>
                                                .swiper-container { width: 100%; height: 100%; }
                                                .swiper-slide { text-align: center; display: flex; justify-content: center; align-items: center; margin: 10px; }
                                                .swiper-pagination { position: absolute; text-align: center; transition: 300ms opacity; transform: translate3d(0, 0, 0); z-index: 10; width: 100%; bottom: 10px; }
                                                .swiper-pagination-bullet { width: 8px; height: 8px; display: inline-block; border-radius: 100%; background: #000; opacity: 0.2; cursor: pointer; margin: 0 4px; }
                                                .swiper-pagination-bullet-active { opacity: 1; background: #007aff; }
                                                .swiper-button-next, .swiper-button-prev { position: absolute; top: 50%; width: 27px; height: 44px; margin-top: -22px; z-index: 10; cursor: pointer; display: block; background-size: 27px 44px; background-position: center; background-repeat: no-repeat; }
                                                .swiper-button-prev, .swiper-container-rtl .swiper-button-next { left: 10px; right: auto; background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMCAyMCI+PHBhdGggZD0iTTYuMTcuNzNMNS4zIDBsLTIuOCwyLjhsMS4yLDEuMkg5LjVsMi44LTIuOEw5LjYtMS4ybC0zLDNMMi44LDE2TDEuNywxMy43TDYuMTcuNzNMMi44LDExTDQuNSwxMkw2LjUsOUw0LjUsNkwyLjgsNkwzLjYsNC41TDYuMTcuNzNMMjguMywxMy4zbDMuMi0zLDFsLTIuOCwwWiIgZmlsbD0iI0U5RjFGMSIvPjwvc3ZnPg==); }
                                                .swiper-button-next, .swiper-container-rtl .swiper-button-prev { right: 10px; left: auto; background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMCAyMCI+PHBhdGggZD0iTTQuODMuNzNsLS44LS44TDMuNywwTDAsMy43TDEuMiw1bDEuMjQ5LDEuMjQ5TDAuMiwxMC41bC0uNi43aC0uMkw1LDIwdjAsMEw4LjQsMTNINlYxNmgtLjdMMi43LDguNEgxMi43TDEuMSwyLjRoLS4xTDAsMCwzLjcsMy43TDAuNiwxLjI0TDAsMy41bC4xLC41bC45LDhMNi40LDlsLS41LDRMMTYuNCwxLjBMMi4yLDE1LjJsMi4yLDEuMi4xLDBMMi44LDEwLDUuOCw5LjFMMy41LDdMMi42LDZMNC42LDJMNiwxLjcuMzcsMC4lNDUuOTYsMi4zLDcsMFoiIGZpbGw9IiNFOUZGRiIvPjwvc3ZnPg==); }
                                            </style>
                                            <div class="wp-block-jetpack-slideshow_container swiper-container">
                                                <ul class="wp-block-jetpack-slideshow_swiper-wrapper swiper-wrapper">
                                                    @foreach ($services as $service)
                                                    <li class="wp-block-jetpack-slideshow_slide swiper-slide">
                                                        <a href="{{ route('service.detail', ['id' => $service->id]) }}">
                                                            <img alt="{{ $service->name }}" class="wp-block-jetpack-slideshow_image" src="{{ $service->photo }}"/>
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                    <li class="wp-block-jetpack-slideshow_slide swiper-slide">
                                                        <a href="{{ route('community.available') }}">
                                                            <img alt="Community Service" src="https://merrash-prubeas-production.up.railway.app/images/9.jpg">
                                                        </a>
                                                    </li>
                                                    <li class="wp-block-jetpack-slideshow_slide swiper-slide">
                                                        <a href="{{ route('offer') }}">
                                                            <img alt="Special Offer" src="https://merrash-prubeas-production.up.railway.app/images/10.jpg">
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div style="display: flex; justify-content: center; color:rgba(76, 107, 192, 0.7);">
                                                    <a class="wp-block-jetpack-slideshow_button-prev swiper-button-prev swiper-button-white" role="button"></a>
                                                    <a class="wp-block-jetpack-slideshow_button-next swiper-button-next swiper-button-white" role="button"></a>
                                                    <a aria-label="Pause Slideshow" class="wp-block-jetpack-slideshow_button-pause" role="button"></a>
                                                    <div class="wp-block-jetpack-slideshow_pagination swiper-pagination swiper-pagination-white" style="margin: 10px auto; min-width: auto; max-width: 200px; display: flex; align-items: center;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                var swiper = new Swiper('.swiper-container', {
                                                    loop: true,
                                                    autoplay: {
                                                        delay: 3000,
                                                        disableOnInteraction: false,
                                                    },
                                                    pagination: {
                                                        el: '.swiper-pagination',
                                                        clickable: true,
                                                        renderBullet: function (index, className) {
                                                            if (index < {{ count($services) + 2 }}) { // Añadir 2 por las imágenes fijas
                                                                return '<span class="' + className + '"></span>';
                                                            }
                                                            return ''; // Oculta los bullets extras
                                                        },
                                                    },
                                                    navigation: {
                                                        nextEl: '.swiper-button-next',
                                                        prevEl: '.swiper-button-prev',
                                                    },
                                                });
                                            });
                                        </script>
                                    </div>
                                    
                                    


                                    <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow hide-on-mobile" style="flex-basis:33.33%;">
                                        <style>
                                            @media only screen and (max-width: 767px) {
                                                .hide-on-mobile {
                                                    display: none;
                                                }
                                            }
                                        </style>
                                        <div data-carousel-extra='{"blog_id":233249796,"permalink":"https://merrash-prubeas-production.up.railway.app/"}' class="wp-block-jetpack-tiled-gallery aligncenter is-style-square">
                                            <div class="tiled-gallery__gallery">
                                                <div class="tiled-gallery__row columns-3">
                                                    <div class="tiled-gallery__col">
                                                        <a href="{{ route('service.detail', ['id' => 1]) }}">
                                                            <figure class="tiled-gallery__item">
                                                                <img src="https://merrash-proyecto-production.up.railway.app/images/Acupuntura.jpg"
                                                                    alt="Acupuntura"
                                                                    srcset="https://merrash-proyecto-production.up.railway.app/images/Acupuntura.jpg?resize=600,600 600w,
                                                                            https://merrash-proyecto-production.up.railway.app/images/Acupuntura.jpg?resize=900,900 900w,
                                                                            https://merrash-proyecto-production.up.railway.app/images/Acupuntura.jpg?resize=1200,1200 1200w,
                                                                            https://merrash-proyecto-production.up.railway.app/images/Acupuntura.jpg?resize=1500,1500 1500w,
                                                                            https://merrash-proyecto-production.up.railway.app/images/Acupuntura.jpg?resize=1800,1800 1800w,
                                                                            https://merrash-proyecto-production.up.railway.app/images/Acupuntura.jpg?resize=2000,2000 2000w"
                                                                    data-height="2000"
                                                                    data-id="1"
                                                                    data-link="{{ route('service.detail', ['id' => 1]) }}"
                                                                    data-url="https://merrash-proyecto-production.up.railway.app/images/Acupuntura.jpg"
                                                                    data-width="3000"
                                                                    src="https://merrash-proyecto-production.up.railway.app/images/Acupuntura.jpg?resize=2000,2000"
                                                                    style="pointer-events: none;" />
                                                            </figure>
                                                        </a>
                                                        
                                                        
                                                    </div>
                                                    <div class="tiled-gallery__col">
                                                        <figure class="tiled-gallery__item">
                                                            <img srcset="https://rivingtondemo.files.wordpress.com/2019/08/naomi-hebert-mp0bgas_d1c-unsplash-5.jpg?resize=600,600&#038;strip=info 600w,https://rivingtondemo.files.wordpress.com/2019/08/naomi-hebert-mp0bgas_d1c-unsplash-5.jpg?resize=900,900&#038;strip=info 900w,https://rivingtondemo.files.wordpress.com/2019/08/naomi-hebert-mp0bgas_d1c-unsplash-5.jpg?resize=1200,1200&#038;strip=info 1200w,https://rivingtondemo.files.wordpress.com/2019/08/naomi-hebert-mp0bgas_d1c-unsplash-5.jpg?resize=1500,1500&#038;strip=info 1500w,https://rivingtondemo.files.wordpress.com/2019/08/naomi-hebert-mp0bgas_d1c-unsplash-5.jpg?resize=1800,1800&#038;strip=info 1800w,https://rivingtondemo.files.wordpress.com/2019/08/naomi-hebert-mp0bgas_d1c-unsplash-5.jpg?resize=1993,1993&#038;strip=info 1993w" alt="" data-height="1993" data-id="62" data-link="https://rivingtondemo.wordpress.com/naomi-hebert-mp0bgas_d1c-unsplash/" data-url="https://rivingtondemo.files.wordpress.com/2019/08/naomi-hebert-mp0bgas_d1c-unsplash-5.jpg" data-width="3000" src="https://rivingtondemo.files.wordpress.com/2019/08/naomi-hebert-mp0bgas_d1c-unsplash-5.jpg?resize=1993%2C1993"/>
                                                        </figure>
                                                    </div>
                                                    <div class="tiled-gallery__col">
                                                        <figure class="tiled-gallery__item">
                                                            <img srcset="https://rivingtondemo.files.wordpress.com/2019/08/sidekix-media-f1rd2hsoknk-unsplash-5.jpg?resize=600,600&#038;strip=info 600w,https://rivingtondemo.files.wordpress.com/2019/08/sidekix-media-f1rd2hsoknk-unsplash-5.jpg?resize=900,900&#038;strip=info 900w,https://rivingtondemo.files.wordpress.com/2019/08/sidekix-media-f1rd2hsoknk-unsplash-5.jpg?resize=1200,1200&#038;strip=info 1200w,https://rivingtondemo.files.wordpress.com/2019/08/sidekix-media-f1rd2hsoknk-unsplash-5.jpg?resize=1500,1500&#038;strip=info 1500w,https://rivingtondemo.files.wordpress.com/2019/08/sidekix-media-f1rd2hsoknk-unsplash-5.jpg?resize=1800,1800&#038;strip=info 1800w,https://rivingtondemo.files.wordpress.com/2019/08/sidekix-media-f1rd2hsoknk-unsplash-5.jpg?resize=2000,2000&#038;strip=info 2000w" alt="" data-height="2000" data-id="64" data-link="https://rivingtondemo.wordpress.com/sidekix-media-f1rd2hsoknk-unsplash/" data-url="https://rivingtondemo.files.wordpress.com/2019/08/sidekix-media-f1rd2hsoknk-unsplash-5.jpg" data-width="3000" src="https://rivingtondemo.files.wordpress.com/2019/08/sidekix-media-f1rd2hsoknk-unsplash-5.jpg?resize=2000%2C2000"/>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="tiled-gallery__row columns-3">
                                                    <div class="tiled-gallery__col">
                                                        <figure class="tiled-gallery__item">
                                                            <img srcset="https://rivingtondemo.files.wordpress.com/2019/08/deborah-floden-hcvvx5xz0he-unsplash-5.jpg?resize=600,600&#038;strip=info 600w,https://rivingtondemo.files.wordpress.com/2019/08/deborah-floden-hcvvx5xz0he-unsplash-5.jpg?resize=900,900&#038;strip=info 900w,https://rivingtondemo.files.wordpress.com/2019/08/deborah-floden-hcvvx5xz0he-unsplash-5.jpg?resize=1200,1200&#038;strip=info 1200w,https://rivingtondemo.files.wordpress.com/2019/08/deborah-floden-hcvvx5xz0he-unsplash-5.jpg?resize=1500,1500&#038;strip=info 1500w,https://rivingtondemo.files.wordpress.com/2019/08/deborah-floden-hcvvx5xz0he-unsplash-5.jpg?resize=1800,1800&#038;strip=info 1800w,https://rivingtondemo.files.wordpress.com/2019/08/deborah-floden-hcvvx5xz0he-unsplash-5.jpg?resize=2000,2000&#038;strip=info 2000w" alt="" data-height="2000" data-id="58" data-link="https://rivingtondemo.wordpress.com/deborah-floden-hcvvx5xz0he-unsplash/" data-url="https://rivingtondemo.files.wordpress.com/2019/08/deborah-floden-hcvvx5xz0he-unsplash-5.jpg" data-width="3000" src="https://rivingtondemo.files.wordpress.com/2019/08/deborah-floden-hcvvx5xz0he-unsplash-5.jpg?resize=2000%2C2000"/>
                                                        </figure>
                                                    </div>
                                                    <div class="tiled-gallery__col">
                                                        <figure class="tiled-gallery__item">
                                                            <img srcset="https://rivingtondemo.files.wordpress.com/2019/08/alberto-castillo-q-mx4mskk9zeo-unsplash-5.jpg?resize=600,600&#038;strip=info 600w,https://rivingtondemo.files.wordpress.com/2019/08/alberto-castillo-q-mx4mskk9zeo-unsplash-5.jpg?resize=900,900&#038;strip=info 900w,https://rivingtondemo.files.wordpress.com/2019/08/alberto-castillo-q-mx4mskk9zeo-unsplash-5.jpg?resize=1200,1200&#038;strip=info 1200w,https://rivingtondemo.files.wordpress.com/2019/08/alberto-castillo-q-mx4mskk9zeo-unsplash-5.jpg?resize=1500,1500&#038;strip=info 1500w,https://rivingtondemo.files.wordpress.com/2019/08/alberto-castillo-q-mx4mskk9zeo-unsplash-5.jpg?resize=1800,1800&#038;strip=info 1800w,https://rivingtondemo.files.wordpress.com/2019/08/alberto-castillo-q-mx4mskk9zeo-unsplash-5.jpg?resize=2000,2000&#038;strip=info 2000w" alt="" data-height="2000" data-id="57" data-link="https://rivingtondemo.wordpress.com/alberto-castillo-q-mx4mskk9zeo-unsplash/" data-url="https://rivingtondemo.files.wordpress.com/2019/08/alberto-castillo-q-mx4mskk9zeo-unsplash-5.jpg" data-width="3000" src="https://rivingtondemo.files.wordpress.com/2019/08/alberto-castillo-q-mx4mskk9zeo-unsplash-5.jpg?resize=2000%2C2000"/>
                                                        </figure>
                                                    </div>
                                                    <div class="tiled-gallery__col">
                                                        <figure class="tiled-gallery__item">
                                                            <img srcset="https://rivingtondemo.files.wordpress.com/2019/08/ialicante-mediterranean-homes-fqqiavjejto-unsplash-5.jpg?resize=600,600&#038;strip=info 600w,https://rivingtondemo.files.wordpress.com/2019/08/ialicante-mediterranean-homes-fqqiavjejto-unsplash-5.jpg?resize=900,900&#038;strip=info 900w,https://rivingtondemo.files.wordpress.com/2019/08/ialicante-mediterranean-homes-fqqiavjejto-unsplash-5.jpg?resize=1200,1200&#038;strip=info 1200w,https://rivingtondemo.files.wordpress.com/2019/08/ialicante-mediterranean-homes-fqqiavjejto-unsplash-5.jpg?resize=1500,1500&#038;strip=info 1500w,https://rivingtondemo.files.wordpress.com/2019/08/ialicante-mediterranean-homes-fqqiavjejto-unsplash-5.jpg?resize=1800,1800&#038;strip=info 1800w,https://rivingtondemo.files.wordpress.com/2019/08/ialicante-mediterranean-homes-fqqiavjejto-unsplash-5.jpg?resize=2000,2000&#038;strip=info 2000w" alt="" data-height="2000" data-id="60" data-link="https://rivingtondemo.wordpress.com/ialicante-mediterranean-homes-fqqiavjejto-unsplash/" data-url="https://rivingtondemo.files.wordpress.com/2019/08/ialicante-mediterranean-homes-fqqiavjejto-unsplash-5.jpg" data-width="3000" src="https://rivingtondemo.files.wordpress.com/2019/08/ialicante-mediterranean-homes-fqqiavjejto-unsplash-5.jpg?resize=2000%2C2000"/>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="tiled-gallery__row columns-3">
                                                    <div class="tiled-gallery__col">
                                                        <figure class="tiled-gallery__item">
                                                            <img srcset="https://rivingtondemo.files.wordpress.com/2019/08/ialicante-mediterranean-homes-2d4laqalbda-unsplash-5.jpg?resize=600,600&#038;strip=info 600w,https://rivingtondemo.files.wordpress.com/2019/08/ialicante-mediterranean-homes-2d4laqalbda-unsplash-5.jpg?resize=900,900&#038;strip=info 900w,https://rivingtondemo.files.wordpress.com/2019/08/ialicante-mediterranean-homes-2d4laqalbda-unsplash-5.jpg?resize=1200,1200&#038;strip=info 1200w,https://rivingtondemo.files.wordpress.com/2019/08/ialicante-mediterranean-homes-2d4laqalbda-unsplash-5.jpg?resize=1500,1500&#038;strip=info 1500w,https://rivingtondemo.files.wordpress.com/2019/08/ialicante-mediterranean-homes-2d4laqalbda-unsplash-5.jpg?resize=1800,1800&#038;strip=info 1800w,https://rivingtondemo.files.wordpress.com/2019/08/ialicante-mediterranean-homes-2d4laqalbda-unsplash-5.jpg?resize=2000,2000&#038;strip=info 2000w" alt="" data-height="2000" data-id="59" data-link="https://rivingtondemo.wordpress.com/ialicante-mediterranean-homes-2d4laqalbda-unsplash/" data-url="https://rivingtondemo.files.wordpress.com/2019/08/ialicante-mediterranean-homes-2d4laqalbda-unsplash-5.jpg" data-width="3000" src="https://rivingtondemo.files.wordpress.com/2019/08/ialicante-mediterranean-homes-2d4laqalbda-unsplash-5.jpg?resize=2000%2C2000"/>
                                                        </figure>
                                                    </div>
                                                    <div class="tiled-gallery__col">
                                                        <figure class="tiled-gallery__item">
                                                            <img srcset="https://rivingtondemo.files.wordpress.com/2019/08/nastuh-abootalebi-rspmla5rita-unsplash-5.jpg?resize=600,600&#038;strip=info 600w,https://rivingtondemo.files.wordpress.com/2019/08/nastuh-abootalebi-rspmla5rita-unsplash-5.jpg?resize=900,900&#038;strip=info 900w,https://rivingtondemo.files.wordpress.com/2019/08/nastuh-abootalebi-rspmla5rita-unsplash-5.jpg?resize=1200,1200&#038;strip=info 1200w,https://rivingtondemo.files.wordpress.com/2019/08/nastuh-abootalebi-rspmla5rita-unsplash-5.jpg?resize=1500,1500&#038;strip=info 1500w,https://rivingtondemo.files.wordpress.com/2019/08/nastuh-abootalebi-rspmla5rita-unsplash-5.jpg?resize=1800,1800&#038;strip=info 1800w,https://rivingtondemo.files.wordpress.com/2019/08/nastuh-abootalebi-rspmla5rita-unsplash-5.jpg?resize=2000,2000&#038;strip=info 2000w" alt="" data-height="2000" data-id="63" data-link="https://rivingtondemo.wordpress.com/nastuh-abootalebi-rspmla5rita-unsplash/" data-url="https://rivingtondemo.files.wordpress.com/2019/08/nastuh-abootalebi-rspmla5rita-unsplash-5.jpg" data-width="3000" src="https://rivingtondemo.files.wordpress.com/2019/08/nastuh-abootalebi-rspmla5rita-unsplash-5.jpg?resize=2000%2C2000"/>
                                                        </figure>
                                                    </div>
                                                    <div class="tiled-gallery__col">
                                                        <figure class="tiled-gallery__item">
                                                            <img srcset="https://rivingtondemo.files.wordpress.com/2019/08/steven-ungermann-d-zkucfjbww-unsplash-5.jpg?resize=600,600&#038;strip=info 600w,https://rivingtondemo.files.wordpress.com/2019/08/steven-ungermann-d-zkucfjbww-unsplash-5.jpg?resize=900,900&#038;strip=info 900w,https://rivingtondemo.files.wordpress.com/2019/08/steven-ungermann-d-zkucfjbww-unsplash-5.jpg?resize=1200,1200&#038;strip=info 1200w,https://rivingtondemo.files.wordpress.com/2019/08/steven-ungermann-d-zkucfjbww-unsplash-5.jpg?resize=1500,1500&#038;strip=info 1500w,https://rivingtondemo.files.wordpress.com/2019/08/steven-ungermann-d-zkucfjbww-unsplash-5.jpg?resize=1800,1800&#038;strip=info 1800w,https://rivingtondemo.files.wordpress.com/2019/08/steven-ungermann-d-zkucfjbww-unsplash-5.jpg?resize=1993,1993&#038;strip=info 1993w" alt="" data-height="1993" data-id="65" data-link="https://rivingtondemo.wordpress.com/steven-ungermann-d-zkucfjbww-unsplash/" data-url="https://rivingtondemo.files.wordpress.com/2019/08/steven-ungermann-d-zkucfjbww-unsplash-5.jpg" data-width="3000" src="https://rivingtondemo.files.wordpress.com/2019/08/steven-ungermann-d-zkucfjbww-unsplash-5.jpg?resize=1993%2C1993"/>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wp-block-columns alignwide is-layout-flex wp-container-core-columns-is-layout-2 wp-block-columns-is-layout-flex">
                                    <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:66.66%">
                                        <h1 class="margin-bottom-half wp-block-heading"  style ="color: #121212;">Consultorio de Medicina Alternativa y Spa Integral</h1>
                                        <p class="margin-top-half" style= "color: #121212;">Av. Estado de México 433, Santiaguito, 52140 Metepec, Méx.</p>
                                    </div>
                                    <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:33.33%">
                                        <p class="has-text-align-right has-huge-font-size">
                                           
                                        </p>
                                    </div>
                                </div>
                                <div class="wp-block-group alignfull has-foreground-light-background-color has-background">
                                    <div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
                                        <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
                                        <div class="wp-block-columns alignwide is-layout-flex wp-container-core-columns-is-layout-4 wp-block-columns-is-layout-flex">
                                            <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:33.33%">
                                                <h2 class="wp-block-heading">¡Bienvenidos a Merrash!</h2>
                                            </div>
                                            <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:66.66%">
                                                <p>Nuestros expertos en medicina alternativa comprenden las necesidades únicas de cada individuo, 
                                                    ofreciendo una gama de terapias holísticas diseñadas para restaurar el equilibrio y fomentar la curación natural.
                                                     Desde la acupuntura hasta la medicina herbal, nuestro enfoque personalizado promueve la vitalidad y el bienestar en todos los niveles.  </p>
                                                <p>Sumérgete en un oasis de tranquilidad mientras nuestros expertos te guían en un viaje de rejuvenecimiento y renovación en nuestro Spa Integral. 
                                                    Desde masajes terapéuticos hasta tratamientos faciales rejuvenecedores, 
                                                    cada servicio está diseñado para nutrir tu bienestar interior y realzar tu belleza.</p>
                                                <p>En Merrash, nuestra pasión es brindarte un espacio para reconectar contig@ mism@ y encontrar equilibrio en cuerpo, mente y espíritu. </p>
                                            </div>
                                        </div>
                                        <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
                                    </div>
                                </div>
                                <div class="wp-block-cover alignfull has-background-dim-50 has-primary-background-color has-background-dim" style="background-image:url('img/brand/10.jpg');background-position:50% 50%;background-size: cover;background-color:rgba(133, 204, 54, 0.7);">
                                    <div class="wp-block-cover__inner-container is-layout-flow wp-block-cover-is-layout-flow">
                                        <div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
                                        <h2 class="has-text-align-center wp-block-heading">En Merrash contamos con las mejores instalaciones para ti.</h2>
                                        <div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
                                    </div>
                                </div>                                    
                                <div class="wp-block-group alignfull has-background-background-color has-background">
                                    <div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
                                        <div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
                                        <div class="wp-block-columns alignwide is-layout-flex wp-container-core-columns-is-layout-5 wp-block-columns-is-layout-flex">
                                            <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                                                <figure class="wp-block-image size-large">
                                                    <img src="https://rivingtondemo.files.wordpress.com/2019/08/confidence-elegant-fashionable-2505053.jpg?w=683" alt="" class="wp-image-143"/>
                                                </figure>
                                            </div>
                                            <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                                                <h3 class="wp-block-heading">About Agent.</h3>
                                                <p>Juan Pérez is a Certified Residential Specialist with over 12 years of experience of helping local clients sell homes. He achieved success due to his commitment to providing beautiful homes in Sussex. </p>
                                            </div>
                                            <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                                                <h3 class="has-text-align-left wp-block-heading">Schedule a Private Showing.</h3>
                                                <p class="margin-bottom-none">
                                                    <strong>Rivington Real Estate Team</strong>
                                                    :
                                                </p>
                                                <div itemprop="location" itemscope itemtype="http://schema.org/Organization" class="wp-block-jetpack-contact-info margin-top-none">
                                                    <div class="wp-block-jetpack-email">
                                                        <a itemprop="email" href="mailto:myemail@example.com">myemail@example.com</a>
                                                    </div>
                                                    <div class="wp-block-jetpack-phone">
                                                        <span itemprop="telephone">
                                                            <a href="tel:123456789">(123)-456-789</a>
                                                        </span>
                                                    </div>
                                                    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="wp-block-jetpack-address">
                                                        <div itemprop="streetAddress" class="jetpack-address__address jetpack-address__address1">1 Example Street, </div>
                                                        <div>
                                                            <span itemprop="addressRegion" class="jetpack-address__region">Anytown,</span>
                                                            <span itemprop="postalCode" class="jetpack-address__postal">10100</span>
                                                        </div>
                                                        <div itemprop="addressCountry" class="jetpack-address__country">USA</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- .entry-footer -->
                        </article>
                        <!-- #post-23 -->
                    </main>
                    <!-- #main -->
                </section>
                <!-- #primary -->
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
                    <a href="https://wordpress.com/?ref=footer_website" rel="nofollow" style="color: #121212;">Merrash 2024</a>
                </div>
                <!-- .site-info -->
            </footer>
            <!-- #colophon -->
        </div>
        <!-- #page -->
        <!--  -->
        <script type="text/javascript" src="//0.gravatar.com/js/hovercards/hovercards.min.js?ver=2024204d47d929f88574eb4a47e5b1778b683b87e7f6078bb6a33f34c1178752e83406" id="grofiles-cards-js"></script>
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
        
        <div id="jp-carousel-loading-overlay">
            <div id="jp-carousel-loading-wrapper">
                <span id="jp-carousel-library-loading">&nbsp;</span>
            </div>
        </div>
        <div class="jp-carousel-overlay" style="display: none;">
            <div class="jp-carousel-container">
                <!-- The Carousel Swiper -->
                <div class="jp-carousel-wrap swiper-container jp-carousel-swiper-container jp-carousel-transitions" itemscope itemtype="https://schema.org/ImageGallery">
                    <div class="jp-carousel swiper-wrapper"></div>
                    <div class="jp-swiper-button-prev swiper-button-prev">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="maskPrev" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6" width="9" height="12">
                                <path d="M16.2072 16.59L11.6496 12L16.2072 7.41L14.8041 6L8.8335 12L14.8041 18L16.2072 16.59Z" fill="white"/>
                            </mask>
                            <g mask="url(#maskPrev)">
                                <rect x="0.579102" width="23.8823" height="24" fill="#FFFFFF"/>
                            </g>
                        </svg>
                    </div>
                    <div class="jp-swiper-button-next swiper-button-next">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="maskNext" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6" width="8" height="12">
                                <path d="M8.59814 16.59L13.1557 12L8.59814 7.41L10.0012 6L15.9718 12L10.0012 18L8.59814 16.59Z" fill="white"/>
                            </mask>
                            <g mask="url(#maskNext)">
                                <rect x="0.34375" width="23.8822" height="24" fill="#FFFFFF"/>
                            </g>
                        </svg>
                    </div>
                </div>
                <!-- The main close buton -->
                <div class="jp-carousel-close-hint">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="maskClose" mask-type="alpha" maskUnits="userSpaceOnUse" x="5" y="5" width="15" height="14">
                            <path d="M19.3166 6.41L17.9135 5L12.3509 10.59L6.78834 5L5.38525 6.41L10.9478 12L5.38525 17.59L6.78834 19L12.3509 13.41L17.9135 19L19.3166 17.59L13.754 12L19.3166 6.41Z" fill="white"/>
                        </mask>
                        <g mask="url(#maskClose)">
                            <rect x="0.409668" width="23.8823" height="24" fill="#FFFFFF"/>
                        </g>
                    </svg>
                </div>
                <!-- Image info, comments and meta -->
                <div class="jp-carousel-info">
                    <div class="jp-carousel-info-footer">
                        <div class="jp-carousel-pagination-container">
                            <div class="jp-swiper-pagination swiper-pagination"></div>
                            <div class="jp-carousel-pagination"></div>
                        </div>
                        <div class="jp-carousel-photo-title-container">
                            <h2 class="jp-carousel-photo-caption"></h2>
                        </div>
                        <div class="jp-carousel-photo-icons-container">
                            <a href="#" class="jp-carousel-icon-btn jp-carousel-icon-info" aria-label="Toggle photo metadata visibility">
                                <span class="jp-carousel-icon">
                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="maskInfo" mask-type="alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="21" height="20">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7537 2C7.26076 2 2.80273 6.48 2.80273 12C2.80273 17.52 7.26076 22 12.7537 22C18.2466 22 22.7046 17.52 22.7046 12C22.7046 6.48 18.2466 2 12.7537 2ZM11.7586 7V9H13.7488V7H11.7586ZM11.7586 11V17H13.7488V11H11.7586ZM4.79292 12C4.79292 16.41 8.36531 20 12.7537 20C17.142 20 20.7144 16.41 20.7144 12C20.7144 7.59 17.142 4 12.7537 4C8.36531 4 4.79292 7.59 4.79292 12Z" fill="white"/>
                                        </mask>
                                        <g mask="url(#maskInfo)">
                                            <rect x="0.8125" width="23.8823" height="24" fill="#FFFFFF"/>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                            <a href="#" class="jp-carousel-icon-btn jp-carousel-icon-comments" aria-label="Toggle photo comments visibility">
                                <span class="jp-carousel-icon">
                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="maskComments" mask-type="alpha" maskUnits="userSpaceOnUse" x="2" y="2" width="21" height="20">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.3271 2H20.2486C21.3432 2 22.2388 2.9 22.2388 4V16C22.2388 17.1 21.3432 18 20.2486 18H6.31729L2.33691 22V4C2.33691 2.9 3.2325 2 4.3271 2ZM6.31729 16H20.2486V4H4.3271V18L6.31729 16Z" fill="white"/>
                                        </mask>
                                        <g mask="url(#maskComments)">
                                            <rect x="0.34668" width="23.8823" height="24" fill="#FFFFFF"/>
                                        </g>
                                    </svg>
                                    <span class="jp-carousel-has-comments-indicator" aria-label="This image has comments."></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="jp-carousel-info-extra">
                        <div class="jp-carousel-info-content-wrapper">
                            <div class="jp-carousel-photo-title-container">
                                <h2 class="jp-carousel-photo-title"></h2>
                            </div>
                            <div class="jp-carousel-comments-wrapper">
                                <div id="jp-carousel-comments-loading">
                                    <span>Loading Comments...</span>
                                </div>
                                <div class="jp-carousel-comments"></div>
                                <div id="jp-carousel-comment-form-container">
                                    <span id="jp-carousel-comment-form-spinner">&nbsp;</span>
                                    <div id="jp-carousel-comment-post-results"></div>
                                    <form id="jp-carousel-comment-form">
                                        <label for="jp-carousel-comment-form-comment-field" class="screen-reader-text">Write a Comment...</label>
                                        <textarea name="comment" class="jp-carousel-comment-form-field jp-carousel-comment-form-textarea" id="jp-carousel-comment-form-comment-field" placeholder="Write a Comment..."></textarea>
                                        <div id="jp-carousel-comment-form-submit-and-info-wrapper">
                                            <div id="jp-carousel-comment-form-commenting-as">
                                                <p id="jp-carousel-commenting-as">Commenting as Aldair Morales</p>
                                            </div>
                                            <input type="submit" name="submit" class="jp-carousel-comment-form-button" id="jp-carousel-comment-form-button-submit" value="Post Comment"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="jp-carousel-image-meta">
                                <div class="jp-carousel-title-and-caption">
                                    <div class="jp-carousel-photo-info">
                                        <h3 class="jp-carousel-caption" itemprop="caption description"></h3>
                                    </div>
                                    <div class="jp-carousel-photo-description"></div>
                                </div>
                                <ul class="jp-carousel-image-exif" style="display: none;"></ul>
                                <a class="jp-carousel-image-download" href="#" target="_blank" style="display: none;">
                                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="3" width="19" height="18">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84615 5V19H19.7775V12H21.7677V19C21.7677 20.1 20.8721 21 19.7775 21H5.84615C4.74159 21 3.85596 20.1 3.85596 19V5C3.85596 3.9 4.74159 3 5.84615 3H12.8118V5H5.84615ZM14.802 5V3H21.7677V10H19.7775V6.41L9.99569 16.24L8.59261 14.83L18.3744 5H14.802Z" fill="white"/>
                                        </mask>
                                        <g mask="url(#mask0)">
                                            <rect x="0.870605" width="23.8823" height="24" fill="#FFFFFF"/>
                                        </g>
                                    </svg>
                                    <span class="jp-carousel-download-text"></span>
                                </a>
                                <div class="jp-carousel-image-map" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style id='jetpack-block-slideshow-inline-css'>
            .wp-block-jetpack-slideshow {
                margin-bottom: 1.5em;
                position: relative
            }

            .wp-block-jetpack-slideshow [tabindex="-1"]:focus {
                outline: 0
            }

            .wp-block-jetpack-slideshow.wp-amp-block>.wp-block-jetpack-slideshow_container {
                opacity: 1
            }

            .wp-block-jetpack-slideshow.wp-amp-block.wp-block-jetpack-slideshow__autoplay .wp-block-jetpack-slideshow_button-play,.wp-block-jetpack-slideshow.wp-amp-block.wp-block-jetpack-slideshow__autoplay.wp-block-jetpack-slideshow__autoplay-playing .wp-block-jetpack-slideshow_button-pause {
                display: block
            }

            .wp-block-jetpack-slideshow.wp-amp-block.wp-block-jetpack-slideshow__autoplay.wp-block-jetpack-slideshow__autoplay-playing .wp-block-jetpack-slideshow_button-play {
                display: none
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_container {
                opacity: 0;
                overflow: hidden;
                width: 100%
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_container.wp-swiper-initialized {
                opacity: 1
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_container.swiper-container {
                display: block
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_container .wp-block-jetpack-slideshow_slide,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_container .wp-block-jetpack-slideshow_swiper-wrapper {
                line-height: normal;
                margin: 0;
                padding: 0
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_container ul.wp-block-jetpack-slideshow_swiper-wrapper {
                display: flex
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_slide {
                display: flex;
                height: 100%;
                width: 100%
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_slide figure {
                align-items: center;
                display: flex;
                height: 100%;
                justify-content: center;
                margin: 0;
                position: relative;
                width: 100%
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_slide figure .wp-block-jetpack-slideshow_image {
                pointer-events: none;
                -webkit-user-select: none;
                user-select: none
            }

            .wp-block-jetpack-slideshow.alignfull .wp-block-jetpack-slideshow_image,.wp-block-jetpack-slideshow.alignwide .wp-block-jetpack-slideshow_image {
                max-width: unset;
                object-fit: cover;
                width: 100vw
            }

            .wp-block-jetpack-slideshow .swiper-container-fade .wp-block-jetpack-slideshow_slide:not(.swiper-slide-active) {
                opacity: 0!important
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_image {
                display: block;
                height: auto;
                max-height: 100%;
                max-width: 100%;
                object-fit: contain;
                width: auto
            }

            .wp-block-jetpack-slideshow .amp-carousel-button,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-next,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-pause,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-play,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-prev {
                background-color: #ffffff;
                background-position: 50%;
                background-repeat: no-repeat;
                background-size: contain;
                border: 0;
                border-radius: 4px;
                box-shadow: none;
                height: 30px;
                margin: -14px 0 0;
                opacity: .5;
                padding: 0;
                transition: opacity .5s ease-out;
                width: 28px
            }

            .wp-block-jetpack-slideshow .amp-carousel-button:focus,.wp-block-jetpack-slideshow .amp-carousel-button:hover,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-next:focus,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-next:hover,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-pause:focus,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-pause:hover,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-play:focus,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-play:hover,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-prev:focus,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-prev:hover {
                background-color: #fff;
                opacity: 1
            }

            .wp-block-jetpack-slideshow .amp-carousel-button:focus,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-next:focus,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-pause:focus,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-play:focus,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-prev:focus {
                outline: thin dotted #fff;
                outline-offset: -4px
            }

            .wp-block-jetpack-slideshow .amp-carousel-button {
                margin: 0
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-next,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-prev {
                display: none
            }

            .wp-block-jetpack-slideshow .swiper-button-next:after,.wp-block-jetpack-slideshow .swiper-button-prev:after,.wp-block-jetpack-slideshow .swiper-container-rtl .swiper-button-next:after,.wp-block-jetpack-slideshow .swiper-container-rtl .swiper-button-prev:after {
                content: ""
            }

            .wp-block-jetpack-slideshow .amp-carousel-button-next,.wp-block-jetpack-slideshow .swiper-button-next.swiper-button-white,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-next,.wp-block-jetpack-slideshow.swiper-container-rtl .swiper-button-prev.swiper-button-white,.wp-block-jetpack-slideshow.swiper-container-rtl .wp-block-jetpack-slideshow_button-prev {
                background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNSIgaGVpZ2h0PSIyNCIgZmlsbD0ibm9uZSI+PG1hc2sgaWQ9ImEiIHdpZHRoPSI4IiBoZWlnaHQ9IjEyIiB4PSI4IiB5PSI2IiBtYXNrLXR5cGU9ImFscGhhIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNOC41OTggMTYuNTkgMTMuMTU2IDEyIDguNTk4IDcuNDEgMTAuMDAxIDZsNS45NyA2LTUuOTcgNnoiLz48L21hc2s+PGcgbWFzaz0idXJsKCNhKSI+PHBhdGggZmlsbD0iIzAwMCIgZD0iTS4zNDQgMGgyMy44ODJ2MjRILjM0NHoiLz48L2c+PC9zdmc+)
            }

            .wp-block-jetpack-slideshow .amp-carousel-button-prev,.wp-block-jetpack-slideshow .swiper-button-prev.swiper-button-white,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-prev,.wp-block-jetpack-slideshow.swiper-container-rtl .swiper-button-next.swiper-button-white,.wp-block-jetpack-slideshow.swiper-container-rtl .wp-block-jetpack-slideshow_button-next {
                background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNSIgaGVpZ2h0PSIyNCIgZmlsbD0ibm9uZSI+PG1hc2sgaWQ9ImEiIHdpZHRoPSI5IiBoZWlnaHQ9IjEyIiB4PSI4IiB5PSI2IiBtYXNrLXR5cGU9ImFscGhhIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTYuMjA3IDE2LjU5IDExLjY1IDEybDQuNTU3LTQuNTlMMTQuODA0IDZsLTUuOTcgNiA1Ljk3IDZ6Ii8+PC9tYXNrPjxnIG1hc2s9InVybCgjYSkiPjxwYXRoIGZpbGw9IiMwMDAiIGQ9Ik0uNTc5IDBoMjMuODgydjI0SC41Nzl6Ii8+PC9nPjwvc3ZnPg==)
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-pause,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-play {
                background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24'%3E%3Cpath d='M6 19h4V5H6zm8-14v14h4V5z'/%3E%3Cpath fill='none' d='M0 0h24v24H0z'/%3E%3C/svg%3E");
                display: none;
                inset-inline-end: 10px;
                margin-top: 0;
                position: absolute;
                top: 10px;
                z-index: 1
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_autoplay-paused .wp-block-jetpack-slideshow_button-pause,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-play {
                background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24'%3E%3Cpath d='M8 5v14l11-7z'/%3E%3Cpath fill='none' d='M0 0h24v24H0z'/%3E%3C/svg%3E")
            }

            .wp-block-jetpack-slideshow[data-autoplay=true] .wp-block-jetpack-slideshow_button-pause {
                display: block
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_caption.gallery-caption {
                background-color: #00000080;
                bottom: 0;
                box-sizing: border-box;
                color: #fff;
                cursor: text;
                left: 0;
                margin: 0!important;
                max-height: 100%;
                opacity: 1;
                padding: .75em;
                position: absolute;
                right: 0;
                text-align: initial;
                z-index: 1
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_caption.gallery-caption a {
                color: inherit
            }

            .wp-block-jetpack-slideshow[data-autoplay=true] .wp-block-jetpack-slideshow_caption.gallery-caption {
                max-height: calc(100% - 68px)
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_pagination.swiper-pagination-bullets,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_pagination.swiper-pagination-custom {
                bottom: 0;
                display: flex;
                gap: 8px;
                justify-content: flex-start;
                line-height: 24px;
                padding: 10px 0 2px;
                position: relative
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_pagination.swiper-pagination-bullets .swiper-pagination-bullet,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_pagination.swiper-pagination-custom .swiper-pagination-bullet {
                background: currentColor;
                color: currentColor;
                height: 8px;
                opacity: .5;
                transform: scale(.75);
                transition: opacity .25s,transform .25s;
                vertical-align: top;
                width: 8px
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_pagination.swiper-pagination-bullets .swiper-pagination-bullet:focus,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_pagination.swiper-pagination-bullets .swiper-pagination-bullet:hover,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_pagination.swiper-pagination-custom .swiper-pagination-bullet:focus,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_pagination.swiper-pagination-custom .swiper-pagination-bullet:hover {
                opacity: 1
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_pagination.swiper-pagination-bullets .swiper-pagination-bullet:focus,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_pagination.swiper-pagination-custom .swiper-pagination-bullet:focus {
                outline: thin dotted;
                outline-offset: 0
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_pagination.swiper-pagination-bullets .swiper-pagination-bullet-active,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_pagination.swiper-pagination-bullets .swiper-pagination-bullet[selected],.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_pagination.swiper-pagination-custom .swiper-pagination-bullet-active,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_pagination.swiper-pagination-custom .swiper-pagination-bullet[selected] {
                background-color: currentColor;
                opacity: 1;
                transform: scale(1)
            }

            .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_pagination.swiper-pagination-bullets .swiper-pagination-simple,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_pagination.swiper-pagination-custom .swiper-pagination-simple {
                font-size: 14px;
                line-height: 16px;
                text-align: start;
                width: 100%
            }

            .wp-block-jetpack-slideshow_pagination.amp-pagination {
                text-align: center
            }

            .wp-block-jetpack-slideshow_pagination.amp-pagination .swiper-pagination-bullet {
                border: 0;
                border-radius: 100%;
                display: inline-block;
                margin: 0 4px;
                padding: 0
            }

            @media(min-width: 600px) {
                .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-next,.wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_button-prev {
                    display:block
                }
            }

            .is-email .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_container {
                height: auto;
                opacity: 1;
                overflow: visible;
                width: auto
            }

            .is-email .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_container ul.wp-block-jetpack-slideshow_swiper-wrapper,.is-email .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_slide figure {
                display: block;
                margin-bottom: 12px
            }

            .is-email .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_container ul.wp-block-jetpack-slideshow_swiper-wrapper,.is-email .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_slide {
                list-style: none;
                margin-left: auto;
                margin-right: auto
            }

            .is-email .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_slide {
                display: inline-block;
                height: auto;
                margin-left: 2%!important;
                margin-right: 2%!important;
                vertical-align: top;
                width: 42%
            }

            .is-email .wp-block-jetpack-slideshow .wp-block-jetpack-slideshow_caption.gallery-caption {
                background-color: #0000;
                bottom: auto;
                color: inherit;
                inset-inline-end: auto;
                padding-top: 0;
                position: relative
            }
        </style>
        <link crossorigin='anonymous' rel='stylesheet' id='all-css-2-2' href='https://s0.wp.com/_static/??-eJylzN0KwjAMhuEbssb5tyPxUqRLw+iWpqVpLN69CO5c8PB7+XigF4dZGkmDZK6wzVEUFmrF4/rdoCbwiIIwccZVoUWm4GbPTPUFz0h9j6o7+BlLORiTAvqaTYlBeyxU3WQSmP7Fts8WPt493YZxuBzH6+F0Xt6hm1y4&cssminify=yes' type='text/css' media='all'/>
        <style id='core-block-supports-inline-css'>
            .wp-container-core-columns-is-layout-1 {
                flex-wrap: nowrap;
            }

            .wp-container-core-columns-is-layout-2 {
                flex-wrap: nowrap;
            }

            .wp-container-core-columns-is-layout-3 {
                flex-wrap: nowrap;
            }

            .wp-container-core-columns-is-layout-4 {
                flex-wrap: nowrap;
            }

            .wp-container-core-columns-is-layout-5 {
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
        <script type="text/javascript" id="launch-banner-script-js-before">
            /* <![CDATA[ */
            const launchBarUserData = {
                "blogId": 233249796
            }
            /* ]]> */
        </script>
        <script type="text/javascript" id="jetpack-blocks-assets-base-url-js-before">
            /* <![CDATA[ */
            var Jetpack_Block_Assets_Base_Url = "https://s0.wp.com/wp-content/mu-plugins/jetpack-plugin/sun/_inc/blocks/";
            /* ]]> */
        </script>
        <script crossorigin='anonymous' type='text/javascript' src='https://s0.wp.com/_static/??-eJyNkNFOwzAMRX8ILxpSgRfEt7ipad0lTuQ4nfb3pIBGKZvEW2SfE1/bnTOw+FAHKm4ubkoLKYuRGMzlEFkOc3lwOwqH1oAedQv49Km5PqQRcqgjS3EBq/ipoSKkrnjlbHsh1it+/bj1fYrwM+i+07i4xg18+kr3q7AXbaLYsFx7t6AyrkJWjqgXEFx4ROP0Z6ebESMWI20vMEV/KrcuNXAxt5AMaV0JcgqXdw6hMaR277xbSWmkxqIlBa1iHOk/2mbWN/4WX4/Px657eXrsuvkDL5a7lw=='></script>
        <script type="text/javascript" crossorigin='anonymous' crossorigin='anonymous' src="https://s0.wp.com/wp-content/plugins/gutenberg-core/v18.3.0/build/dom-ready/index.min.js?m=1715382909i&amp;ver=222ad38e3e5e302c8bbf" id="wp-dom-ready-js"></script>
        <script type="text/javascript" id="wp-dom-ready-js-after">
            /* <![CDATA[ */
            wp.galleryBlockV2Enabled = true
            /* ]]> */
        </script>
        <script type="text/javascript" crossorigin='anonymous' crossorigin='anonymous' src="https://s0.wp.com/wp-content/plugins/gutenberg-core/v18.3.0/build/escape-html/index.min.js?m=1715382909i&amp;ver=fbad781820bda8333f76" id="wp-escape-html-js"></script>
        <script type="text/javascript" crossorigin='anonymous' crossorigin='anonymous' src="https://s0.wp.com/wp-content/plugins/gutenberg-core/v18.3.0/build/hooks/index.min.js?m=1715382909i&amp;ver=3aee234ea7807d8d70bc" id="wp-hooks-js"></script>
        <script type="text/javascript" crossorigin='anonymous' crossorigin='anonymous' src="https://s0.wp.com/wp-content/plugins/gutenberg-core/v18.3.0/build/i18n/index.min.js?m=1715382909i&amp;ver=5baa98e4345eccc97e24" id="wp-i18n-js"></script>
        <script type="text/javascript" id="wp-i18n-js-after">
            /* <![CDATA[ */
            wp.i18n.setLocaleData({
                'text direction\u0004ltr': ['ltr']
            });
            /* ]]> */
        </script>
        <script type="text/javascript" id="jetpack-carousel-js-extra">
            /* <![CDATA[ */
            var jetpackSwiperLibraryPath = {
                "url": "https:\/\/s0.wp.com\/wp-content\/mu-plugins\/jetpack-plugin\/sun\/_inc\/build\/carousel\/swiper-bundle.min.js"
            };
            var jetpackCarouselStrings = {
                "widths": [370, 700, 1000, 1200, 1400, 2000],
                "is_logged_in": "1",
                "lang": "en",
                "ajaxurl": "https://merrash-prubeas-production.up.railway.app/",
                "nonce": "7245bd72e2",
                "display_exif": "1",
                "display_comments": "1",
                "single_image_gallery": "1",
                "single_image_gallery_media_file": "",
                "background_color": "black",
                "comment": "Comment",
                "post_comment": "Post Comment",
                "write_comment": "Write a Comment...",
                "loading_comments": "Loading Comments...",
                "download_original": "View full size <span class=\"photo-size\">{0}<span class=\"photo-size-times\">\u00d7<\/span>{1}<\/span>",
                "no_comment_text": "Please be sure to submit some text with your comment.",
                "no_comment_email": "Please provide an email address to comment.",
                "no_comment_author": "Please provide your name to comment.",
                "comment_post_error": "Sorry, but there was an error posting your comment. Please try again later.",
                "comment_approved": "Your comment was approved.",
                "comment_unapproved": "Your comment is in moderation.",
                "camera": "Camera",
                "aperture": "Aperture",
                "shutter_speed": "Shutter Speed",
                "focal_length": "Focal Length",
                "copyright": "Copyright",
                "comment_registration": "0",
                "require_name_email": "1",
                "login_url": "https://merrash-prubeas-production.up.railway.app/login",
                "blog_id": "233249796",
                "meta_data": ["camera", "aperture", "shutter_speed", "focal_length", "copyright"],
                "stats_query_args": "https://merrash-prubeas-production.up.railway.app/",
                "is_public": "0"
            };
            /* ]]> */
        </script>
        <script crossorigin='anonymous' type='text/javascript' src='https://s0.wp.com/_static/??-eJydjDEOwjAMRS9EaiqEWgbEUVBIrOLUcaI6IeL2MFAGBoaO7+v9By0bl6SgFIjVZK4TiULAkq2bPwxaBa4kDm6c3KygTB71nho8CFsXdAebOoUYvZksMy7Pza1K7MHZJVVF/mrr0EWSP9VVMy27FH/w/bvEcz/0x3E4HcZ9eAFeUXGC'></script>
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
                'post': '23',
                'subd': 'radial51'
            }]);
            _stq.push(['extra', {
                'crypt': 'UE40eW5QN0p8M2Y/RE1mN3FZZmo1ciV5XXJsZ24wUjJacUxGNiVZTFVrRGNHdkxHbS8sQzF1dHQ9MGZsMmlHcy9iRTBzK0o1TnVxfD91Nkk3YWVtbmc0Qnp2K35KcXY0aiVsc0JBUU40TUpvSHRwT3k/Q0s/eGlyVExEMmRScl03empOUk09SlQlQWQuUmUmNmVCSltfLTl3OERpNWt3bCYsZ0dCaDdRaVNuVzNYcnlyQlh3ZGpPTl8wdG5OT11RWmpXTXhFdTRIMmJuSjEwbWJoekw9eHdPS0liOSZQSWdCcHBiM1BJR0Z+THBhNGl0U1BfR0xZdS5x'
            }]);
        </script>
        <noscript>
            <img src="https://pixel.wp.com/b.gif?v=noscript" style="height:1px;width:1px;overflow:hidden;position:absolute;bottom:1px;" alt=""/>
        </noscript>
        <script defer id="bilmur" data-customproperties="{&quot;logged_in&quot;:&quot;1&quot;,&quot;wptheme&quot;:&quot;pub\/rivington&quot;,&quot;wptheme_is_block&quot;:&quot;0&quot;}" data-provider="wordpress.com" data-service="simple" src="/wp-content/js/bilmur.min.js?i=11&m=202420"></script>
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
