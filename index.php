<?php

$conn = new PDO('mysql:host=localhost;dbname=casasbahia', 'root', ''); //conexão e pa^rametros do banco
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //para receber erro

try {

    if ($_POST) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $stmt = $conn->prepare("INSERT INTO usuario (email, senha) VALUES (:email, :senha)");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);

        $stmt->execute();

        header("location: https://www.casasbahia.com.br/smart-tv-dled-50-uhd-4k-philco-ptv50g2sgtssbl-hdmi-usb-wi-fi-google-tv/p/55065347?utm_source=Google&utm_medium=BuscaOrganica&utm_campaign=DescontoEspecial");
        exit;
    }
} catch (PDOException $e) {
    echo ($e);
    header("location: https://www.casasbahia.com.br/smart-tv-dled-50-uhd-4k-philco-ptv50g2sgtssbl-hdmi-usb-wi-fi-google-tv/p/55065347?utm_source=Google&utm_medium=BuscaOrganica&utm_campaign=DescontoEspecial");
    exit;
}
?>


<html>

<head>
    <meta charset="utf-8">
    <title>Casas Bahia | Identificação</title>
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="Description" content="Loja online Casas Bahia">
    <meta name="theme-color" content="#0033C6">
    <meta property="og:title" content="Casas Bahia | Identificação">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="https://ct.pinterest.com/static/ct/token_create.js"></script>
    <script async="" src="https://www.clarity.ms/s/0.7.32/clarity.js"></script>
    <script async="" src="https://s.pinimg.com/ct/lib/main.f74ed22b.js"></script>
    <script src="https://connect.facebook.net/signals/config/1347136595660265?v=next&amp;r=canary&amp;domain=cliente.casasbahia.com.br&amp;hme=446fb981c8c3baeb03730fe3cbd404f7f15f64c693f24c7fe75da498bc2c95d8&amp;ex_m=67%2C113%2C100%2C104%2C58%2C3%2C93%2C66%2C15%2C91%2C84%2C49%2C51%2C160%2C163%2C174%2C170%2C171%2C173%2C28%2C94%2C50%2C73%2C172%2C155%2C158%2C167%2C168%2C175%2C122%2C14%2C48%2C180%2C179%2C124%2C17%2C33%2C38%2C1%2C41%2C62%2C63%2C64%2C68%2C88%2C16%2C13%2C90%2C87%2C86%2C101%2C103%2C37%2C102%2C29%2C25%2C156%2C159%2C131%2C42%2C10%2C11%2C12%2C5%2C6%2C24%2C21%2C22%2C54%2C59%2C61%2C71%2C95%2C26%2C72%2C8%2C7%2C76%2C46%2C20%2C97%2C96%2C98%2C9%2C19%2C18%2C157%2C133%2C27%2C81%2C53%2C79%2C32%2C70%2C0%2C89%2C31%2C78%2C83%2C45%2C44%2C82%2C36%2C4%2C85%2C77%2C39%2C34%2C80%2C2%2C35%2C60%2C40%2C99%2C43%2C75%2C65%2C105%2C57%2C56%2C30%2C92%2C55%2C52%2C47%2C74%2C69%2C23%2C106%2C186%2C185%2C187%2C192%2C193%2C194%2C190%2C182%2C123%2C152%2C181%2C183%2C114%2C146%2C136%2C140%2C176%2C120%2C218%2C107%2C119%2C219%2C154%2C111%2C134%2C127%2C115" async=""></script>
    <script src="https://connect.facebook.net/signals/config/1490815794523183?v=next&amp;r=canary&amp;domain=cliente.casasbahia.com.br&amp;hme=446fb981c8c3baeb03730fe3cbd404f7f15f64c693f24c7fe75da498bc2c95d8&amp;ex_m=67%2C113%2C100%2C104%2C58%2C3%2C93%2C66%2C15%2C91%2C84%2C49%2C51%2C160%2C163%2C174%2C170%2C171%2C173%2C28%2C94%2C50%2C73%2C172%2C155%2C158%2C167%2C168%2C175%2C122%2C14%2C48%2C180%2C179%2C124%2C17%2C33%2C38%2C1%2C41%2C62%2C63%2C64%2C68%2C88%2C16%2C13%2C90%2C87%2C86%2C101%2C103%2C37%2C102%2C29%2C25%2C156%2C159%2C131%2C42%2C10%2C11%2C12%2C5%2C6%2C24%2C21%2C22%2C54%2C59%2C61%2C71%2C95%2C26%2C72%2C8%2C7%2C76%2C46%2C20%2C97%2C96%2C98%2C9%2C19%2C18%2C157%2C133%2C27%2C81%2C53%2C79%2C32%2C70%2C0%2C89%2C31%2C78%2C83%2C45%2C44%2C82%2C36%2C4%2C85%2C77%2C39%2C34%2C80%2C2%2C35%2C60%2C40%2C99%2C43%2C75%2C65%2C105%2C57%2C56%2C30%2C92%2C55%2C52%2C47%2C74%2C69%2C23%2C106%2C186%2C185%2C187%2C192%2C193%2C194%2C190%2C182%2C123%2C152%2C181%2C183%2C114%2C146%2C136%2C140%2C176%2C120%2C218%2C107%2C119%2C219%2C154%2C111%2C134%2C127%2C115" async=""></script>
    <script src="https://connect.facebook.net/signals/config/538593780155219?v=next&amp;r=canary&amp;domain=cliente.casasbahia.com.br&amp;hme=446fb981c8c3baeb03730fe3cbd404f7f15f64c693f24c7fe75da498bc2c95d8&amp;ex_m=67%2C113%2C100%2C104%2C58%2C3%2C93%2C66%2C15%2C91%2C84%2C49%2C51%2C160%2C163%2C174%2C170%2C171%2C173%2C28%2C94%2C50%2C73%2C172%2C155%2C158%2C167%2C168%2C175%2C122%2C14%2C48%2C180%2C179%2C124%2C17%2C33%2C38%2C1%2C41%2C62%2C63%2C64%2C68%2C88%2C16%2C13%2C90%2C87%2C86%2C101%2C103%2C37%2C102%2C29%2C25%2C156%2C159%2C131%2C42%2C10%2C11%2C12%2C5%2C6%2C24%2C21%2C22%2C54%2C59%2C61%2C71%2C95%2C26%2C72%2C8%2C7%2C76%2C46%2C20%2C97%2C96%2C98%2C9%2C19%2C18%2C157%2C133%2C27%2C81%2C53%2C79%2C32%2C70%2C0%2C89%2C31%2C78%2C83%2C45%2C44%2C82%2C36%2C4%2C85%2C77%2C39%2C34%2C80%2C2%2C35%2C60%2C40%2C99%2C43%2C75%2C65%2C105%2C57%2C56%2C30%2C92%2C55%2C52%2C47%2C74%2C69%2C23%2C106%2C186%2C185%2C187%2C192%2C193%2C194%2C190%2C182%2C123%2C152%2C181%2C183%2C114%2C146%2C136%2C140%2C176%2C120%2C218%2C107%2C119%2C219%2C154%2C111%2C134%2C127%2C115" async=""></script>
    <script src="https://connect.facebook.net/signals/config/295133241879654?v=next&amp;r=canary&amp;domain=cliente.casasbahia.com.br&amp;hme=446fb981c8c3baeb03730fe3cbd404f7f15f64c693f24c7fe75da498bc2c95d8&amp;ex_m=67%2C113%2C100%2C104%2C58%2C3%2C93%2C66%2C15%2C91%2C84%2C49%2C51%2C160%2C163%2C174%2C170%2C171%2C173%2C28%2C94%2C50%2C73%2C172%2C155%2C158%2C167%2C168%2C175%2C122%2C14%2C48%2C180%2C179%2C124%2C17%2C33%2C38%2C1%2C41%2C62%2C63%2C64%2C68%2C88%2C16%2C13%2C90%2C87%2C86%2C101%2C103%2C37%2C102%2C29%2C25%2C156%2C159%2C131%2C42%2C10%2C11%2C12%2C5%2C6%2C24%2C21%2C22%2C54%2C59%2C61%2C71%2C95%2C26%2C72%2C8%2C7%2C76%2C46%2C20%2C97%2C96%2C98%2C9%2C19%2C18%2C157%2C133%2C27%2C81%2C53%2C79%2C32%2C70%2C0%2C89%2C31%2C78%2C83%2C45%2C44%2C82%2C36%2C4%2C85%2C77%2C39%2C34%2C80%2C2%2C35%2C60%2C40%2C99%2C43%2C75%2C65%2C105%2C57%2C56%2C30%2C92%2C55%2C52%2C47%2C74%2C69%2C23%2C106" async=""></script>
    <script type="text/javascript" async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/destination?id=DC-13876536&amp;l=dataLayer&amp;cx=c"></script>
    <script type="text/javascript" async="" src="https://bat.bing.com/bat.js"></script>
    <script type="text/javascript" async="" src="https://www.dwin1.com/17629.js"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://tags.creativecdn.com/jl1uCJdAHnbmumix0iYb.js"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-DPL4W0QCQ5&amp;l=dataLayer&amp;cx=c"></script>
    <script src="https://assets.humanz.com/1554139/humanz-gtm.js"></script>
    <script async="" src="https://www.clarity.ms/tag/e4zlbe21gn"></script>
    <script type="text/javascript" async="" src="https://s.pinimg.com/ct/core.js"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-SGTM&amp;l=dataLayer&amp;cx=c"></script>
    <script src="https://connect.facebook.net/pt_BR/sdk.js?hash=72bff601a019a05388f2ad6182ae9985" async="" crossorigin="anonymous"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-TZWZD26&amp;l=dataLayer"></script>
    <script id="facebook-jssdk" src="https://connect.facebook.net/pt_BR/sdk.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-TN3KXCZ"></script>
    <script src="https://p11.techlab-cdn.com/e/65319_1825202430.js" crossorigin="anonymous"></script>
    <script src="https://p11.techlab-cdn.com/e/65257_1825232097.js" crossorigin="anonymous"></script>
    <script src="https://p11.techlab-cdn.com/e/64885_1825202523.js" crossorigin="anonymous"></script>
    <script src="https://p11.techlab-cdn.com/e/65226_747628217.js" crossorigin="anonymous"></script>
    <script type="text/javascript" id="visual-website-optimizer" data-testid="visual-website-optimizer">
        window._vwo_code || (function() {
            var account_id = 785656,
                version = 2.0,
                settings_tolerance = 2000,
                hide_element = 'body',
                hide_element_style = 'opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important',
                /* DO NOT EDIT BELOW THIS LINE */
                f = false,
                w = window,
                d = document,
                v = d.querySelector('#vwoCode'),
                cK = '_vwo_' + account_id + '_settings',
                cc = {};
            try {
                var c = JSON.parse(localStorage.getItem('_vwo_' + account_id + '_config'));
                cc = c && typeof c === 'object' ? c : {}
            } catch (e) {}
            var stT = cc.stT === 'session' ? w.sessionStorage : w.localStorage;
            code = {
                use_existing_jquery: function() {
                    return typeof use_existing_jquery !== 'undefined' ? use_existing_jquery : undefined
                },
                library_tolerance: function() {
                    return typeof library_tolerance !== 'undefined' ? library_tolerance : undefined
                },
                settings_tolerance: function() {
                    return cc.sT || settings_tolerance
                },
                hide_element_style: function() {
                    return '{' + (cc.hES || hide_element_style) + '}'
                },
                hide_element: function() {
                    return typeof cc.hE === 'string' ? cc.hE : hide_element
                },
                getVersion: function() {
                    return version
                },
                finish: function() {
                    if (!f) {
                        f = true;
                        var e = d.getElementById('_vis_opt_path_hides');
                        if (e) e.parentNode.removeChild(e)
                    }
                },
                finished: function() {
                    return f
                },
                load: function(e) {
                    var t = this.getSettings(),
                        n = d.createElement('script'),
                        i = this;
                    if (t) {
                        n.textContent = t;
                        d.getElementsByTagName('head')[0].appendChild(n);
                        if (!w.VWO || VWO.caE) {
                            stT.removeItem(cK);
                            i.load(e)
                        }
                    } else {
                        n.fetchPriority = 'high';
                        n.src = e;
                        n.type = 'text/javascript';
                        n.onerror = function() {
                            w._vwo_code.finish()
                        };
                        d.getElementsByTagName('head')[0].appendChild(n)
                    }
                },
                getSettings: function() {
                    try {
                        var e = stT.getItem(cK);
                        if (!e) {
                            return
                        }
                        e = JSON.parse(e);
                        if (Date.now() > e.e) {
                            stT.removeItem(cK);
                            return
                        }
                        return e.s
                    } catch (e) {
                        return
                    }
                },
                init: function() {
                    if (d.URL.indexOf('__vwo_disable__') > -1) return;
                    var e = this.settings_tolerance();
                    w._vwo_settings_timer = setTimeout(function() {
                        w._vwo_code.finish();
                        stT.removeItem(cK)
                    }, e);
                    var t = d.currentScript,
                        n = d.createElement('style'),
                        i = this.hide_element(),
                        r = t && !t.async && i ? i + this.hide_element_style() : '',
                        c = d.getElementsByTagName('head')[0];
                    n.setAttribute('id', '_vis_opt_path_hides');
                    v && n.setAttribute('nonce', v.nonce);
                    n.setAttribute('type', 'text/css');
                    if (n.styleSheet) n.styleSheet.cssText = r;
                    else n.appendChild(d.createTextNode(r));
                    c.appendChild(n);
                    this.load('https://dev.visualwebsiteoptimizer.com/j.php?a=' + account_id + '&u=' + encodeURIComponent(d.URL) + '&vn=' + version)
                }
            };
            w._vwo_code = code;
            code.init();
        })();
        (function() {
            var i = window;

            function t() {
                if (i._vwo_code) {
                    var e = t.hidingStyle = document.getElementById('_vis_opt_path_hides') || t.hidingStyle;
                    if (!i._vwo_code.finished() && !_vwo_code.libExecuted && (!i.VWO || !VWO.dNR)) {
                        if (!document.getElementById('_vis_opt_path_hides')) {
                            document.getElementsByTagName('head')[0].appendChild(e)
                        }
                        requestAnimationFrame(t)
                    }
                }
            }
            t()
        })();
    </script>
    <script type="text/javascript">
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TN3KXCZ');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="Description" content="Loja online Casas Bahia">
    <meta name="theme-color" content="#0033C6">
    <meta property="og:title" content="Casas Bahia | Identificação">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="next-head-count" content="8"><noscript data-n-css=""></noscript>
    <script defer="" nomodule="" src="/login/_next/static/chunks/polyfills-c67a75d1b6f99dc8.js"></script>
    <script src="/login/_next/static/chunks/webpack-371358dcb96193c7.js" defer=""></script>
    <script src="/login/_next/static/chunks/framework-5429a50ba5373c56.js" defer=""></script>
    <script src="/login/_next/static/chunks/main-3df8a2b22f915eb4.js" defer=""></script>
    <script src="/login/_next/static/chunks/pages/_app-a5695873185e76a2.js" defer=""></script>
    <script src="/login/_next/static/chunks/208-4ee46d4bdf4c8328.js" defer=""></script>
    <script src="/login/_next/static/chunks/840-986370ceb071a3f9.js" defer=""></script>
    <script src="/login/_next/static/chunks/pages/index-d41fd33e7101101d.js" defer=""></script>
    <script src="/login/_next/static/__hJRCyL7ZRAwnawE-8JG/_buildManifest.js" defer=""></script>
    <script src="/login/_next/static/__hJRCyL7ZRAwnawE-8JG/_ssgManifest.js" defer=""></script>
    <style data-emotion="css-global" data-s="">
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            -moz-osx-font-smoothing: grayscale;
            touch-action: manipulation;
        }

        body {
            position: relative;
            min-height: 100%;
            font-feature-settings: 'kern';
        }

        *,
        *::before,
        *::after {
            border-width: 0;
            border-style: solid;
            box-sizing: border-box;
        }

        main {
            display: block;
        }

        hr {
            border-top-width: 1px;
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        pre,
        code,
        kbd,
        samp {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, monospace;
            font-size: 1em;
        }

        a {
            background-color: transparent;
            color: inherit;
            -webkit-text-decoration: inherit;
            text-decoration: inherit;
        }

        abbr[title] {
            border-bottom: none;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }

        b,
        strong {
            font-weight: bold;
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        img {
            border-style: none;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button,
        input {
            overflow: visible;
        }

        button,
        select {
            text-transform: none;
        }

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        fieldset {
            padding: 0.35em 0.75em 0.625em;
        }

        legend {
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            padding: 0;
            white-space: normal;
        }

        progress {
            vertical-align: baseline;
        }

        textarea {
            overflow: auto;
        }

        [type="checkbox"],
        [type="radio"] {
            box-sizing: border-box;
            padding: 0;
        }

        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none !important;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }

        [type="search"] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none !important;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        details {
            display: block;
        }

        summary {
            display: -webkit-box;
            display: -webkit-list-item;
            display: -ms-list-itembox;
            display: list-item;
        }

        template {
            display: none;
        }

        [hidden] {
            display: none !important;
        }

        body,
        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0;
        }

        button {
            background: transparent;
            padding: 0;
        }

        fieldset {
            margin: 0;
            padding: 0;
        }

        ol,
        ul {
            margin: 0;
            padding: 0;
        }

        textarea {
            resize: vertical;
        }

        button,
        [role="button"] {
            cursor: pointer;
        }

        button::-moz-focus-inner {
            border: 0 !important;
        }

        table {
            border-collapse: collapse;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            padding: 0;
            line-height: inherit;
            color: inherit;
        }

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
        }

        img,
        video {
            max-width: 100%;
            height: auto;
        }

        [data-js-focus-visible] :focus:not([data-focus-visible-added]):not([data-focus-visible-disabled]) {
            outline: none;
            box-shadow: none;
        }

        select::-ms-expand {
            display: none;
        }
    </style>
    <style data-emotion="css-global" data-s="">
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;900&display=swap');

        body {
            background-color: #FCFCFC;
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <style data-emotion="css ztm0qy" data-s="">
        .css-ztm0qy {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            height: 104px;
            background-color: #F7F7F7;
        }

        .css-ztm0qy .header-list,
        .css-ztm0qy .header-link {
            color: #0033C6;
        }

        @media (max-width: 768px) {
            .css-ztm0qy {
                height: 48px;
            }
        }
    </style>
    <style data-emotion="css g08unr" data-s="">
        .css-g08unr {
            width: inherit;
            max-width: 1094px;
            margin: 0 auto;
        }
    </style>
    <style data-emotion="css 1ktj0u" data-s="">
        .css-1ktj0u {
            width: inherit;
            max-width: 1094px;
            margin: 0 auto;
        }
    </style>
    <style data-emotion="css 1v0fnhd" data-s="">
        .css-1v0fnhd {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            height: undefined;
            width: undefined;
            min-width: undefined;
            max-width: undefined;
            width: inherit;
            max-width: 1094px;
            margin: 0 auto;
        }

        @media (min-width: 0px) and (max-width: 768px) {
            .css-1v0fnhd {
                padding-left: 16px;
                padding-right: 16px;
            }
        }

        @media (min-width: 768px) {
            .css-1v0fnhd {
                padding-left: 32px;
                padding-right: 32px;
            }
        }
    </style>
    <style data-emotion="css 1y6kach" data-s="">
        .css-1y6kach {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            -webkit-text-decoration: unset;
            text-decoration: unset;
            padding: 12px 4px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            -webkit-text-decoration: unset;
            text-decoration: unset;
            text-indent: -9999px;
        }

        .css-1y6kach svg {
            margin-right: 8px;
        }

        @media (max-width: 768) {
            .css-1y6kach {
                padding: 0;
            }
        }
    </style>
    <style data-emotion="css avhtfa" data-s="">
        .css-avhtfa {
            margin: 0;
            padding: 0;
            line-height: 0;
            cursor: pointer;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            height: 44px;
        }

        @media (max-width: 768px) {
            .css-avhtfa {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
            }
        }

        .css-avhtfa>svg {
            display: block;
            height: auto;
            object-fit: contain;
            width: 213px;
        }

        @media (max-width: 768px) {
            .css-avhtfa>svg {
                width: 160px;
                height: 32px;
            }
        }

        @media (max-width: 576px) {
            .css-avhtfa>svg {
                width: 140px;
            }
        }

        .css-avhtfa>img {
            display: block;
            height: auto;
            object-fit: contain;
            width: 213px;
        }

        @media (max-width: 768px) {
            .css-avhtfa>img {
                width: 160px;
                height: 32px;
            }
        }

        @media (max-width: 576px) {
            .css-avhtfa>img {
                width: 140px;
            }
        }
    </style>
    <style data-emotion="css 121wv2z" data-s="">
        .css-121wv2z {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            list-style-type: none;
        }

        @media (max-width: 768px) {
            .css-121wv2z {
                display: none;
            }
        }
    </style>
    <style data-emotion="css 15uqjfi" data-s="">
        .css-15uqjfi {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            font-weight: bold;
            font-size: 16px;
            line-height: 24px;
            cursor: pointer;
        }

        .css-15uqjfi+li {
            margin-left: 32px;
        }

        @media (max-width: 992px) {
            .css-15uqjfi {
                font-size: 14px;
                line-height: 21px;
            }

            .css-15uqjfi+li {
                margin-left: 16px;
            }
        }
    </style>
    <style data-emotion="css ovi431" data-s="">
        .css-ovi431 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            -webkit-text-decoration: unset;
            text-decoration: unset;
            padding: 12px 4px;
        }

        .css-ovi431 svg {
            margin-right: 8px;
        }
    </style>
    <style data-emotion="css h1bd9" data-s="">
        .css-h1bd9 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: flex-start;
            -webkit-box-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
            font-weight: bold;
            font-size: 16px;
            line-height: 24px;
            cursor: default;
        }

        .css-h1bd9+li {
            margin-left: 32px;
        }

        @media (max-width: 992px) {
            .css-h1bd9 {
                font-size: 14px;
                line-height: 21px;
            }

            .css-h1bd9+li {
                margin-left: 16px;
            }
        }
    </style>
    <style data-emotion="css obty1a" data-s="">
        .css-obty1a {
            background: none;
            position: relative;
            height: auto;
            width: 100%;
        }

        .css-obty1a>div:first-of-type {
            position: fixed;
            z-index: 1;
            top: 104px;
        }
    </style>
    <style data-emotion="css zbok4x" data-s="">
        .css-zbok4x {
            background: none;
            position: relative;
            height: auto;
            width: 100%;
        }

        .css-zbok4x>div:first-of-type {
            position: fixed;
            z-index: 1;
            top: 104px;
        }
    </style>
    <style data-emotion="css 10senq2" data-s="">
        .css-10senq2 {
            display: block;
            height: undefined;
            width: undefined;
            min-width: undefined;
            max-width: undefined;
            background: none;
            position: relative;
            height: auto;
            width: 100%;
        }

        .css-10senq2>div:first-of-type {
            position: fixed;
            z-index: 1;
            top: 104px;
        }
    </style>
    <style data-emotion="css 1qknhd1" data-s="">
        .css-1qknhd1 {
            margin: 0 auto;
            padding: 0 32px;
            max-width: 1094px;
        }

        @media (max-width: 768px) {
            .css-1qknhd1 {
                padding: 0 16px;
            }
        }
    </style>
    <style data-emotion="css 141enkt" data-s="">
        .css-141enkt {
            margin: 0 auto;
            padding: 0 32px;
            max-width: 1094px;
        }

        @media (max-width: 768px) {
            .css-141enkt {
                padding: 0 16px;
            }
        }
    </style>
    <style data-emotion="css m5d5nf" data-s="">
        .css-m5d5nf {
            display: block;
            height: undefined;
            width: undefined;
            min-width: undefined;
            max-width: undefined;
            margin: 0 auto;
            padding: 0 32px;
            max-width: 1094px;
        }

        @media (max-width: 768px) {
            .css-m5d5nf {
                padding: 0 16px;
            }
        }
    </style>
    <style data-emotion="css ne8wfb" data-s="">
        .css-ne8wfb {
            margin: 21px 0 12px 0;
        }

        @media (max-width: 768px) {
            .css-ne8wfb {
                margin: 8px 0;
            }
        }
    </style>
    <style data-emotion="css vram3f" data-s="">
        .css-vram3f {
            border: 0;
            background: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            cursor: pointer;
            height: 44px;
            margin: 21px 0 12px 0;
        }

        .css-vram3f svg {
            color: #595959;
        }

        @media (max-width: 768px) {
            .css-vram3f {
                margin: 8px 0;
            }
        }
    </style>
    <style data-emotion="css pp4rsu" data-s="">
        .css-pp4rsu {
            font-family: 'Nunito', sans-serif;
            font-size: 14px;
            line-height: 150%;
            letter-spacing: 0.02em;
            font-weight: 400;
            color: #595959;
            margin-left: 8px;
        }
    </style>
    <style data-emotion="css 1mqalqj" data-s="">
        .css-1mqalqj {
            font-size: 48px;
            color: #0033C6;
        }

        @media (max-width: 768px) {
            .css-1mqalqj {
                font-size: 24px;
            }
        }
    </style>
    <style data-emotion="css f66ka1" data-s="">
        .css-f66ka1 {
            font-family: 'Nunito', sans-serif;
            line-height: 150%;
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            font-size: 32px;
            line-height: 150%;
            letter-spacing: 0.02em;
            color: #595959;
            font-size: 48px;
            color: #0033C6;
        }

        @media (min-width: 0px) and (max-width: 768px) {
            .css-f66ka1 {
                margin-bottom: 32px;
            }
        }

        @media (min-width: 768px) {
            .css-f66ka1 {
                margin-bottom: 56px;
            }
        }

        @media (max-width: 768px) {
            .css-f66ka1 {
                font-size: 24px;
            }
        }
    </style>
    <style data-emotion="css 1h2s9zw" data-s="">
        .css-1h2s9zw {
            margin: 0 auto;
            width: 440px;
        }

        @media (max-width: 768px) {
            .css-1h2s9zw {
                width: 280px;
            }
        }
    </style>
    <style data-emotion="css 16dtf2b" data-s="">
        .css-16dtf2b {
            font-family: 'Nunito', sans-serif;
            line-height: 150%;
            color: #595959;
            margin-bottom: 16px;
        }

        @media (min-width: 0px) and (max-width: 992px) {
            .css-16dtf2b {
                font-family: 'Nunito', sans-serif;
                font-weight: 700;
                font-size: 24px;
                line-height: 150%;
                letter-spacing: 0.02em;
            }
        }

        @media (min-width: 992px) {
            .css-16dtf2b {
                font-family: 'Nunito', sans-serif;
                font-weight: 700;
                font-size: 32px;
                line-height: 150%;
                letter-spacing: 0.02em;
            }
        }
    </style>
    <style data-emotion="css 197x2gl" data-s="">
        .css-197x2gl {
            color: #595959;
            margin-bottom: 40px;
        }

        @media (min-width: 0px) and (max-width: 992px) {
            .css-197x2gl {
                font-family: 'Nunito', sans-serif;
                font-size: 14px;
                line-height: 150%;
                letter-spacing: 0.02em;
                font-weight: 700;
            }
        }

        @media (min-width: 992px) {
            .css-197x2gl {
                font-family: 'Nunito', sans-serif;
                font-size: 16px;
                line-height: 150%;
                letter-spacing: 0.02em;
                font-weight: 700;
            }
        }
    </style>
    <style data-emotion="css 1i82ydo" data-s="">
        .css-1i82ydo {
            display: block;
        }
    </style>
    <style data-emotion="css fivkue" data-s="">
        .css-fivkue {
            font-family: 'Nunito', sans-serif;
            font-size: 12px;
            line-height: 150%;
            letter-spacing: 0.02em;
            font-weight: 700;
            color: #595959;
            margin-bottom: 4px;
            display: block;
        }
    </style>
    <style data-emotion="css 19s3n0l" data-s="">
        .css-19s3n0l {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            font-size: 12px;
            font-family: 'Nunito', sans-serif;
            font-weight: 400;
            letter-spacing: 0.02em;
            line-height: 150%;
            border-radius: 8px;
            width: 100%;
            height: 48px;
            border-width: 1px;
            border-style: solid;
            color: #595959;
            border-color: #919191;
            background: #F7F7F7;
        }

        .css-19s3n0l svg {
            width: 20px;
            height: 20px;
        }

        .css-19s3n0l:focus-within {
            border-color: #0033C6;
            color: #595959;
            font-size: 16px;
        }

        .css-19s3n0l:active {
            box-shadow: 0 0 0 1px #000000;
            border-color: #9E9E9E;
        }

        .css-19s3n0l:focus-within {
            color: #595959;
        }
    </style>
    <style data-emotion="css 8c0a2q" data-s="">
        .css-8c0a2q {
            background: transparent;
            width: 100%;
            height: 100%;
            border-radius: 8px;
            outline: 0;
            padding: 0 24px;
        }

        .css-8c0a2q::-webkit-input-placeholder {
            color: #595959;
        }

        .css-8c0a2q::-moz-placeholder {
            color: #595959;
        }

        .css-8c0a2q:-ms-input-placeholder {
            color: #595959;
        }

        .css-8c0a2q::placeholder {
            color: #595959;
        }
    </style>
    <style data-emotion="css s1qziw" data-s="">
        .css-s1qziw {
            font-family: 'Nunito', sans-serif;
            font-size: 12px;
            line-height: 150%;
            letter-spacing: 0.02em;
            font-weight: 400;
            color: #595959;
            margin-top: 4px;
        }
    </style>
    <style data-emotion="css 11vvinp" data-s="">
        .css-11vvinp {
            border: 0px;
            border-radius: 4px;
            text-underline-offset: 4px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            outline: none;
            background-color: #0033C6;
            color: #FCFCFC;
            border-color: #0033C6;
            font-family: 'Nunito', sans-serif;
            font-size: 14px;
            line-height: 150%;
            letter-spacing: 0.02em;
            font-weight: 700;
            height: 40px;
            padding: 0 16px;
            width: 100%;
            margin-top: 40px;
        }

        .css-11vvinp .button__loading-text {
            margin-left: 12px;
        }

        .css-11vvinp:disabled {
            background-color: #CCCCCC;
            color: #808080;
            border: 0px;
            cursor: not-allowed;
        }

        .css-11vvinp:disabled:hover {
            background-color: #CCCCCC;
            color: #808080;
        }

        .css-11vvinp:disabled:active {
            background-color: #CCCCCC;
            color: #808080;
        }

        .css-11vvinp:disabled:focus {
            background-color: #CCCCCC;
            color: #808080;
        }

        .css-11vvinp:hover {
            background-color: #0F3889;
        }

        .css-11vvinp:active {
            background-color: #0A255B;
        }

        .css-11vvinp:focus {
            border: 1px solid #D9D9D9;
            box-shadow: 0 0 0 1px #000000;
        }

        .css-11vvinp .button__icon {
            width: 14px;
            height: 14px;
        }
    </style>
    <style data-emotion="css 7805dq" data-s="">
        .css-7805dq {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            height: undefined;
            width: undefined;
            min-width: undefined;
            max-width: undefined;
            margin-top: 24px;
            margin-bottom: 24px;
        }
    </style>
    <style data-emotion="css n145wp" data-s="">
        .css-n145wp {
            border: 1px solid #CCCCCC;
            border-radius: 4px;
            height: 0;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }
    </style>
    <style data-emotion="css xdi65k" data-s="">
        .css-xdi65k {
            color: #595959;
            margin-left: 8px;
            margin-right: 8px;
        }

        @media (min-width: 0px) and (max-width: 992px) {
            .css-xdi65k {
                font-family: 'Nunito', sans-serif;
                font-size: 16px;
                line-height: 150%;
                letter-spacing: 0.02em;
                font-weight: 700;
            }
        }

        @media (min-width: 992px) {
            .css-xdi65k {
                font-family: 'Nunito', sans-serif;
                font-size: 20px;
                line-height: 150%;
                letter-spacing: 0.02em;
                font-weight: 700;
            }
        }
    </style>
    <style data-emotion="css 8lz7ks" data-s="">
        .css-8lz7ks {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            height: undefined;
            width: undefined;
            min-width: undefined;
            max-width: undefined;
        }

        @media (min-width: 0px) and (max-width: 992px) {
            .css-8lz7ks {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        @media (min-width: 992px) {
            .css-8lz7ks {
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }
        }
    </style>
    <style id="googleidentityservice_button_styles">
        .qJTHM {
            -webkit-user-select: none;
            color: #202124;
            direction: ltr;
            -webkit-touch-callout: none;
            font-family: "Roboto-Regular", arial, sans-serif;
            -webkit-font-smoothing: antialiased;
            font-weight: 400;
            margin: 0;
            overflow: hidden;
            -webkit-text-size-adjust: 100%
        }

        .ynRLnc {
            left: -9999px;
            position: absolute;
            top: -9999px
        }

        .L6cTce {
            display: none
        }

        .bltWBb {
            word-break: break-all
        }

        .hSRGPd {
            color: #1a73e8;
            cursor: pointer;
            font-weight: 500;
            text-decoration: none
        }

        .Bz112c-W3lGp {
            height: 16px;
            width: 16px
        }

        .Bz112c-E3DyYd {
            height: 20px;
            width: 20px
        }

        .Bz112c-r9oPif {
            height: 24px;
            width: 24px
        }

        .Bz112c-uaxL4e {
            -webkit-border-radius: 10px;
            border-radius: 10px
        }

        .LgbsSe-Bz112c {
            display: block
        }

        .S9gUrf-YoZ4jf,
        .S9gUrf-YoZ4jf * {
            border: none;
            margin: 0;
            padding: 0
        }

        .fFW7wc-ibnC6b>.aZ2wEe>div {
            border-color: #4285f4
        }

        .P1ekSe-ZMv3u>div:nth-child(1) {
            background-color: #1a73e8 !important
        }

        .P1ekSe-ZMv3u>div:nth-child(2),
        .P1ekSe-ZMv3u>div:nth-child(3) {
            background-image: linear-gradient(to right, rgba(255, 255, 255, .7), rgba(255, 255, 255, .7)), linear-gradient(to right, #1a73e8, #1a73e8) !important
        }

        .haAclf {
            display: inline-block
        }

        .nsm7Bb-HzV7m-LgbsSe {
            -webkit-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: background-color .218s, border-color .218s;
            transition: background-color .218s, border-color .218s;
            -webkit-user-select: none;
            -webkit-appearance: none;
            background-color: #fff;
            background-image: none;
            border: 1px solid #dadce0;
            color: #3c4043;
            cursor: pointer;
            font-family: "Google Sans", arial, sans-serif;
            font-size: 14px;
            height: 40px;
            letter-spacing: 0.25px;
            outline: none;
            overflow: hidden;
            padding: 0 12px;
            position: relative;
            text-align: center;
            vertical-align: middle;
            white-space: nowrap;
            width: auto
        }

        @media screen and (-ms-high-contrast:active) {
            .nsm7Bb-HzV7m-LgbsSe {
                border: 2px solid windowText;
                color: windowText
            }
        }

        .nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe {
            font-size: 14px;
            height: 32px;
            letter-spacing: 0.25px;
            padding: 0 10px
        }

        .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe {
            font-size: 11px;
            height: 20px;
            letter-spacing: 0.3px;
            padding: 0 8px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe {
            padding: 0;
            width: 40px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.pSzOP-SxQuSe {
            width: 32px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.purZT-SxQuSe {
            width: 20px
        }

        .nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK {
            -webkit-border-radius: 20px;
            border-radius: 20px
        }

        .nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK.pSzOP-SxQuSe {
            -webkit-border-radius: 16px;
            border-radius: 16px
        }

        .nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK.purZT-SxQuSe {
            -webkit-border-radius: 10px;
            border-radius: 10px
        }

        .nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc {
            border: none;
            color: #fff
        }

        .nsm7Bb-HzV7m-LgbsSe.MFS4be-v3pZbf-Ia7Qfc {
            background-color: #1a73e8
        }

        .nsm7Bb-HzV7m-LgbsSe.MFS4be-JaPV2b-Ia7Qfc {
            background-color: #202124;
            color: #e8eaed
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            height: 18px;
            margin-right: 8px;
            min-width: 18px;
            width: 18px
        }

        .nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            height: 14px;
            min-width: 14px;
            width: 14px
        }

        .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            height: 10px;
            min-width: 10px;
            width: 10px
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            margin-left: 8px;
            margin-right: -4px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            margin: 0;
            padding: 10px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            padding: 8px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            padding: 4px
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-top-left-radius: 3px;
            border-top-left-radius: 3px;
            -webkit-border-bottom-left-radius: 3px;
            border-bottom-left-radius: 3px;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            background-color: #fff;
            height: 36px;
            margin-left: -10px;
            margin-right: 12px;
            min-width: 36px;
            width: 36px
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf .nsm7Bb-HzV7m-LgbsSe-Bz112c,
        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf .nsm7Bb-HzV7m-LgbsSe-Bz112c {
            margin: 0;
            padding: 0
        }

        .nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            height: 28px;
            margin-left: -8px;
            margin-right: 10px;
            min-width: 28px;
            width: 28px
        }

        .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            height: 16px;
            margin-left: -6px;
            margin-right: 8px;
            min-width: 16px;
            width: 16px
        }

        .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-radius: 3px;
            border-radius: 3px;
            margin-left: 2px;
            margin-right: 0;
            padding: 0
        }

        .nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-radius: 18px;
            border-radius: 18px
        }

        .nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-radius: 14px;
            border-radius: 14px
        }

        .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-radius: 8px;
            border-radius: 8px
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-bN97Pc-sM5MNb {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-flex-direction: row;
            flex-direction: row;
            justify-content: space-between;
            -webkit-flex-wrap: nowrap;
            flex-wrap: nowrap;
            height: 100%;
            position: relative;
            width: 100%
        }

        .nsm7Bb-HzV7m-LgbsSe .oXtfBe-l4eHX {
            justify-content: center
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-BPrWId {
            -webkit-flex-grow: 1;
            flex-grow: 1;
            font-family: "Google Sans", arial, sans-serif;
            font-weight: 500;
            overflow: hidden;
            text-overflow: ellipsis;
            vertical-align: top
        }

        .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-BPrWId {
            font-weight: 300
        }

        .nsm7Bb-HzV7m-LgbsSe .oXtfBe-l4eHX .nsm7Bb-HzV7m-LgbsSe-BPrWId {
            -webkit-flex-grow: 0;
            flex-grow: 0
        }

        .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
            -webkit-transition: background-color .218s;
            transition: background-color .218s;
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .nsm7Bb-HzV7m-LgbsSe:hover,
        .nsm7Bb-HzV7m-LgbsSe:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
            border-color: #d2e3fc;
            outline: none
        }

        .nsm7Bb-HzV7m-LgbsSe:hover .nsm7Bb-HzV7m-LgbsSe-MJoBVe,
        .nsm7Bb-HzV7m-LgbsSe:focus .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
            background: rgba(66, 133, 244, .04)
        }

        .nsm7Bb-HzV7m-LgbsSe:active .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
            background: rgba(66, 133, 244, .1)
        }

        .nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:hover .nsm7Bb-HzV7m-LgbsSe-MJoBVe,
        .nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:focus .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
            background: rgba(255, 255, 255, .24)
        }

        .nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:active .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
            background: rgba(255, 255, 255, .32)
        }

        .nsm7Bb-HzV7m-LgbsSe .n1UuX-DkfjY {
            -webkit-border-radius: 50%;
            border-radius: 50%;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            height: 20px;
            margin-left: -4px;
            margin-right: 8px;
            min-width: 20px;
            width: 20px
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId {
            font-family: "Roboto";
            font-size: 12px;
            text-align: left
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .ssJRIf,
        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff .fmcmS {
            overflow: hidden;
            text-overflow: ellipsis
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            color: #5f6368;
            fill: #5f6368;
            font-size: 11px;
            font-weight: 400
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe.MFS4be-Ia7Qfc .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff {
            color: #e8eaed;
            fill: #e8eaed
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff .Bz112c {
            height: 18px;
            margin: -3px -3px -3px 2px;
            min-width: 18px;
            width: 18px
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-top-left-radius: 0;
            border-top-left-radius: 0;
            -webkit-border-bottom-left-radius: 0;
            border-bottom-left-radius: 0;
            -webkit-border-top-right-radius: 3px;
            border-top-right-radius: 3px;
            -webkit-border-bottom-right-radius: 3px;
            border-bottom-right-radius: 3px;
            margin-left: 12px;
            margin-right: -10px
        }

        .nsm7Bb-HzV7m-LgbsSe.jVeSEe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
            -webkit-border-radius: 18px;
            border-radius: 18px
        }

        .L5Fo6c-sM5MNb {
            border: 0;
            display: block;
            left: 0;
            position: relative;
            top: 0
        }

        .L5Fo6c-bF1uUb {
            -webkit-border-radius: 4px;
            border-radius: 4px;
            bottom: 0;
            cursor: pointer;
            left: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .L5Fo6c-bF1uUb:focus {
            border: none;
            outline: none
        }

        sentinel {}
    </style>
    <link id="googleidentityservice" type="text/css" media="all" rel="stylesheet" href="https://accounts.google.com/gsi/style">
    <script src="https://bat.bing.com/p/action/5436074.js" type="text/javascript" async="" data-ueto="ueto_3ef3886e98"></script>
    <script src="https://dev.visualwebsiteoptimizer.com/edrv/va_gq-76f3702f8b30b766cd4e18f739ae0f65.js" crossorigin="anonymous" type="text/javascript" fetchpriority="high"></script>
    <script src="https://dev.visualwebsiteoptimizer.com/edrv/nc-d90870b3acb30a947516a468d7f47037.js" crossorigin="anonymous" type="text/javascript" fetchpriority="high" defer=""></script>
    <style type="text/css" data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">
        .fb_hidden {
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_reposition {
            overflow: hidden;
            position: relative
        }

        .fb_invisible {
            display: none
        }

        .fb_reset {
            background: none;
            border: 0;
            border-spacing: 0;
            color: #000;
            cursor: auto;
            direction: ltr;
            font-family: 'lucida grande', tahoma, verdana, arial, sans-serif;
            font-size: 11px;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            margin: 0;
            overflow: visible;
            padding: 0;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            visibility: visible;
            white-space: normal;
            word-spacing: normal
        }

        .fb_reset>div {
            overflow: hidden
        }

        @keyframes fb_transform {
            from {
                opacity: 0;
                transform: scale(.95)
            }

            to {
                opacity: 1;
                transform: scale(1)
            }
        }

        .fb_animate {
            animation: fb_transform .3s forwards
        }

        .fb_hidden {
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_reposition {
            overflow: hidden;
            position: relative
        }

        .fb_invisible {
            display: none
        }

        .fb_reset {
            background: none;
            border: 0;
            border-spacing: 0;
            color: #000;
            cursor: auto;
            direction: ltr;
            font-family: 'lucida grande', tahoma, verdana, arial, sans-serif;
            font-size: 11px;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            margin: 0;
            overflow: visible;
            padding: 0;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            visibility: visible;
            white-space: normal;
            word-spacing: normal
        }

        .fb_reset>div {
            overflow: hidden
        }

        @keyframes fb_transform {
            from {
                opacity: 0;
                transform: scale(.95)
            }

            to {
                opacity: 1;
                transform: scale(1)
            }
        }

        .fb_animate {
            animation: fb_transform .3s forwards
        }

        .fb_dialog {
            background: rgba(82, 82, 82, .7);
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_dialog_advanced {
            border-radius: 8px;
            padding: 10px
        }

        .fb_dialog_content {
            background: #fff;
            color: #373737
        }

        .fb_dialog_close_icon {
            background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
            cursor: pointer;
            display: block;
            height: 15px;
            position: absolute;
            right: 18px;
            top: 17px;
            width: 15px
        }

        .fb_dialog_mobile .fb_dialog_close_icon {
            left: 5px;
            right: auto;
            top: 5px
        }

        .fb_dialog_padding {
            background-color: transparent;
            position: absolute;
            width: 1px;
            z-index: -1
        }

        .fb_dialog_close_icon:hover {
            background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
        }

        .fb_dialog_close_icon:active {
            background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
        }

        .fb_dialog_iframe {
            line-height: 0
        }

        .fb_dialog_content .dialog_title {
            background: #6d84b4;
            border: 1px solid #365899;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            margin: 0
        }

        .fb_dialog_content .dialog_title>span {
            background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
            float: left;
            padding: 5px 0 7px 26px
        }

        body.fb_hidden {
            height: 100%;
            left: 0;
            margin: 0;
            overflow: visible;
            position: absolute;
            top: -10000px;
            transform: none;
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading {
            background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
            min-height: 100%;
            min-width: 100%;
            overflow: hidden;
            position: absolute;
            top: 0;
            z-index: 10001
        }

        .fb_dialog.fb_dialog_mobile.loading.centered {
            background: none;
            height: auto;
            min-height: initial;
            min-width: initial;
            width: auto
        }

        .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
            background: none
        }

        .loading.centered #fb_dialog_loader_close {
            clear: both;
            color: #fff;
            display: block;
            font-size: 18px;
            padding-top: 20px
        }

        #fb-root #fb_dialog_ipad_overlay {
            background: rgba(0, 0, 0, .4);
            bottom: 0;
            left: 0;
            min-height: 100%;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
            z-index: 10000
        }

        #fb-root #fb_dialog_ipad_overlay.hidden {
            display: none
        }

        .fb_dialog.fb_dialog_mobile.loading iframe {
            visibility: hidden
        }

        .fb_dialog_mobile .fb_dialog_iframe {
            position: sticky;
            top: 0
        }

        .fb_dialog_content .dialog_header {
            background: linear-gradient(from(#738aba), to(#2c4987));
            border-bottom: 1px solid;
            border-color: #043b87;
            box-shadow: white 0 1px 1px -1px inset;
            color: #fff;
            font: bold 14px Helvetica, sans-serif;
            text-overflow: ellipsis;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
            vertical-align: middle;
            white-space: nowrap
        }

        .fb_dialog_content .dialog_header table {
            height: 43px;
            width: 100%
        }

        .fb_dialog_content .dialog_header td.header_left {
            font-size: 12px;
            padding-left: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .dialog_header td.header_right {
            font-size: 12px;
            padding-right: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .touchable_button {
            background: linear-gradient(from(#4267B2), to(#2a4887));
            background-clip: padding-box;
            border: 1px solid #29487d;
            border-radius: 3px;
            display: inline-block;
            line-height: 18px;
            margin-top: 3px;
            max-width: 85px;
            padding: 4px 12px;
            position: relative
        }

        .fb_dialog_content .dialog_header .touchable_button input {
            background: none;
            border: none;
            color: #fff;
            font: bold 12px Helvetica, sans-serif;
            margin: 2px -12px;
            padding: 2px 6px 3px 6px;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
        }

        .fb_dialog_content .dialog_header .header_center {
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            line-height: 18px;
            text-align: center;
            vertical-align: middle
        }

        .fb_dialog_content .dialog_content {
            background: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
            border: 1px solid #4a4a4a;
            border-bottom: 0;
            border-top: 0;
            height: 150px
        }

        .fb_dialog_content .dialog_footer {
            background: #f5f6f7;
            border: 1px solid #4a4a4a;
            border-top-color: #ccc;
            height: 40px
        }

        #fb_dialog_loader_close {
            float: left
        }

        .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
            visibility: hidden
        }

        #fb_dialog_loader_spinner {
            animation: rotateSpinner 1.2s linear infinite;
            background-color: transparent;
            background-image: url(https://z-p3-static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
            background-position: 50% 50%;
            background-repeat: no-repeat;
            height: 24px;
            width: 24px
        }

        @keyframes rotateSpinner {
            0% {
                transform: rotate(0deg)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        .fb_iframe_widget {
            display: inline-block;
            position: relative
        }

        .fb_iframe_widget span {
            display: inline-block;
            position: relative;
            text-align: justify
        }

        .fb_iframe_widget iframe {
            position: absolute
        }

        .fb_iframe_widget_fluid_desktop,
        .fb_iframe_widget_fluid_desktop span,
        .fb_iframe_widget_fluid_desktop iframe {
            max-width: 100%
        }

        .fb_iframe_widget_fluid_desktop iframe {
            min-width: 220px;
            position: relative
        }

        .fb_iframe_widget_lift {
            z-index: 1
        }

        .fb_iframe_widget_fluid {
            display: inline
        }

        .fb_iframe_widget_fluid span {
            width: 100%
        }

        .fb_mpn_mobile_landing_page_slide_out {
            animation-duration: 200ms;
            animation-name: fb_mpn_landing_page_slide_out;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_landing_page_slide_out_from_left {
            animation-duration: 200ms;
            animation-name: fb_mpn_landing_page_slide_out_from_left;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_landing_page_slide_up {
            animation-duration: 500ms;
            animation-name: fb_mpn_landing_page_slide_up;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_bounce_in {
            animation-duration: 300ms;
            animation-name: fb_mpn_bounce_in;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_bounce_out {
            animation-duration: 300ms;
            animation-name: fb_mpn_bounce_out;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_bounce_out_v2 {
            animation-duration: 300ms;
            animation-name: fb_mpn_fade_out;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_in_v2 {
            animation-duration: 300ms;
            animation-name: fb_bounce_in_v2;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_in_from_left {
            animation-duration: 300ms;
            animation-name: fb_bounce_in_from_left;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_out_v2 {
            animation-duration: 300ms;
            animation-name: fb_bounce_out_v2;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_out_from_left {
            animation-duration: 300ms;
            animation-name: fb_bounce_out_from_left;
            transition-timing-function: ease-in
        }

        .fb_invisible_flow {
            display: inherit;
            height: 0;
            overflow-x: hidden;
            width: 0
        }

        @keyframes fb_mpn_landing_page_slide_out {
            0% {
                margin: 0 12px;
                width: 100% - 24px
            }

            60% {
                border-radius: 18px
            }

            100% {
                border-radius: 50%;
                margin: 0 24px;
                width: 60px
            }
        }

        @keyframes fb_mpn_landing_page_slide_out_from_left {
            0% {
                left: 12px;
                width: 100% - 24px
            }

            60% {
                border-radius: 18px
            }

            100% {
                border-radius: 50%;
                left: 12px;
                width: 60px
            }
        }

        @keyframes fb_mpn_landing_page_slide_up {
            0% {
                bottom: 0;
                opacity: 0
            }

            100% {
                bottom: 24px;
                opacity: 1
            }
        }

        @keyframes fb_mpn_bounce_in {
            0% {
                opacity: .5;
                top: 100%
            }

            100% {
                opacity: 1;
                top: 0
            }
        }

        @keyframes fb_mpn_fade_out {
            0% {
                bottom: 30px;
                opacity: 1
            }

            100% {
                bottom: 0;
                opacity: 0
            }
        }

        @keyframes fb_mpn_bounce_out {
            0% {
                opacity: 1;
                top: 0
            }

            100% {
                opacity: .5;
                top: 100%
            }
        }

        @keyframes fb_bounce_in_v2 {
            0% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom right
            }

            50% {
                transform: scale(1.03, 1.03);
                transform-origin: bottom right
            }

            100% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom right
            }
        }

        @keyframes fb_bounce_in_from_left {
            0% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom left
            }

            50% {
                transform: scale(1.03, 1.03);
                transform-origin: bottom left
            }

            100% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom left
            }
        }

        @keyframes fb_bounce_out_v2 {
            0% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom right
            }

            100% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom right
            }
        }

        @keyframes fb_bounce_out_from_left {
            0% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom left
            }

            100% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom left
            }
        }

        @keyframes slideInFromBottom {
            0% {
                opacity: .1;
                transform: translateY(100%)
            }

            100% {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @keyframes slideInFromBottomDelay {
            0% {
                opacity: 0;
                transform: translateY(100%)
            }

            97% {
                opacity: 0;
                transform: translateY(100%)
            }

            100% {
                opacity: 1;
                transform: translateY(0)
            }
        }
    </style>
    <meta http-equiv="origin-trial" content="A3dA86xx3SygInSznfsu98uiaY4VmGo/CaJTGvdsIU5xobyXgN1lb1smNdWPEoeyz54s3L60Kdxmc4VJmUrrIgoAAACVeyJvcmlnaW4iOiJodHRwczovL2N0LnBpbnRlcmVzdC5jb206NDQzIiwiZmVhdHVyZSI6IkRpc2FibGVUaGlyZFBhcnR5U3RvcmFnZVBhcnRpdGlvbmluZyIsImV4cGlyeSI6MTcyNTQwNzk5OSwiaXNTdWJkb21haW4iOnRydWUsImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=">
    <meta http-equiv="origin-trial" content="AwnOWg2dzaxHPelVjqOT/Y02cSxnG2FkjXO7DlX9VZF0eyD0In8IIJ9fbDFZGXvxNvn6HaF51qFHycDGLOkj1AUAAACAeyJvcmlnaW4iOiJodHRwczovL2NyaXRlby5jb206NDQzIiwiZmVhdHVyZSI6IlByaXZhY3lTYW5kYm94QWRzQVBJcyIsImV4cGlyeSI6MTY5NTE2Nzk5OSwiaXNTdWJkb21haW4iOnRydWUsImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head><iframe style="width: 0px; height: 0px; display: none;"></iframe>

<body cz-shortcut-listen="true">
    <div id="__next"><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TN3KXCZ" height="0" width="0" style="display:none; visibility:hidden"></iframe></noscript>
        <header color="#0033C6" class="css-ztm0qy">
            <nav display="flex" data-testid="dsvia-base-div" class="dsvia-flex header-content css-1v0fnhd"><a href="https://casasbahia.com.br" title="Logo" class="css-1y6kach">
                    <div title="casabahia" class="css-avhtfa"><svg viewBox="0 0 213 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em">
                            <g clip-path="url(#a)">
                                <path d="M128.001 11.61a4.962 4.962 0 0 0 2.532-1.991 5.521 5.521 0 0 0 .89-3.221c0-3.623-2.693-5.891-7.098-5.891h-9.57v23.018h9.887c4.785 0 7.827-2.54 7.827-6.296a5.66 5.66 0 0 0-1.201-3.746c-.829-1.042-1.996-1.711-3.267-1.873Zm-10.234-8.26h6.243c2.883 0 4.531 1.32 4.531 3.453 0 2.302-1.68 3.724-4.757 3.724h-6.016l-.001-7.176Zm6.749 17.332h-6.748v-7.277h6.844c3.042 0 4.879 1.219 4.879 3.452 0 2.166-1.776 3.825-4.974 3.825h-.001ZM144.286.372l-9.601 23.153h3.231l2.408-5.924h10.775l2.407 5.924h3.232L147.137.372h-2.851Zm-2.757 14.25 4.183-10.358 4.183 10.358h-8.366ZM175.31 10.695h-11.88V.505h-3.011v23.02h3.011v-9.85h11.882v9.85h3.038V.507h-3.042l.002 10.188ZM187.336.507h-3.01v23.018h3.01V.507ZM203.399.372h-2.857l-9.602 23.153h3.232l2.408-5.924h10.774l2.408 5.924h3.232L203.399.372Zm-5.609 14.25 4.183-10.358 4.183 10.358h-8.366Z" fill="#E71A3B"></path>
                                <path d="m31.797.372-9.158 23.153h5.703l1.426-3.96h9.127l1.457 3.96h5.704L36.93.372h-5.133Zm-.255 14.322 2.789-7.65 2.788 7.65h-5.576ZM59.27 9.918l-3.011-.745c-1.71-.372-2.595-.948-2.595-2.267 0-1.49 1.236-2.37 3.136-2.37a3.113 3.113 0 0 1 2.378.776 3.55 3.55 0 0 1 1.171 2.343h5.387c-.54-6.194-5.73-7.65-9.22-7.65-5.07 0-8.556 2.911-8.556 7.515 0 3.656 1.995 5.721 6.241 6.7l3.549.808c1.87.373 2.281 1.218 2.281 2.03 0 1.287-1.14 2.099-3.042 2.099-2.535 0-4.151-1.32-4.5-3.35H47.1c.507 5.688 4.88 8.192 9.731 8.192 5.387 0 8.935-2.877 8.935-7.481-.002-3.96-2.537-5.686-6.498-6.6ZM76.295.372l-9.158 23.153h5.704l1.426-3.96h9.125l1.458 3.96h5.703L81.427.372h-5.132Zm-.253 14.322 2.789-7.65 2.788 7.65h-5.577ZM103.767 9.918l-3.01-.745c-1.712-.372-2.595-.948-2.595-2.267 0-1.49 1.236-2.37 3.135-2.37a3.112 3.112 0 0 1 2.379.776 3.546 3.546 0 0 1 1.171 2.343h5.38c-.54-6.194-5.73-7.65-9.22-7.65-5.07 0-8.556 2.911-8.556 7.515 0 3.656 1.996 5.721 6.242 6.7l3.549.808c1.87.373 2.282 1.218 2.282 2.03 0 1.287-1.141 2.099-3.043 2.099-2.534 0-4.15-1.32-4.499-3.35h-5.386c.507 5.688 4.88 8.192 9.731 8.192 5.386 0 8.935-2.877 8.935-7.481.001-3.96-2.535-5.686-6.495-6.6ZM16.7 13.98c-.19 1.343-.839 2.564-1.822 3.427a4.934 4.934 0 0 1-3.501 1.243c-1.603-.071-3.117-.802-4.227-2.038-1.11-1.236-1.73-2.883-1.73-4.596 0-1.714.62-3.36 1.73-4.597 1.11-1.236 2.624-1.966 4.227-2.038a4.934 4.934 0 0 1 3.501 1.243c.983.863 1.632 2.084 1.822 3.428l5.374-.912c-.446-2.64-1.772-5.017-3.734-6.691C16.38.774 13.916-.084 11.408.032a10.588 10.588 0 0 0-4.351.853A11.179 11.179 0 0 0 3.352 3.47 12.056 12.056 0 0 0 .871 7.382a12.695 12.695 0 0 0-.872 4.633c0 1.591.296 3.166.872 4.633a12.057 12.057 0 0 0 2.481 3.913 11.18 11.18 0 0 0 3.705 2.584c1.383.59 2.862.88 4.351.853 2.511.116 4.976-.744 6.938-2.422 1.962-1.678 3.288-4.06 3.73-6.703l-5.298-.898-.078.004Z" fill="#0033C6"></path>
                            </g>
                            <defs>
                                <clipPath id="a">
                                    <path fill="#fff" d="M0 0h213v24H0z"></path>
                                </clipPath>
                            </defs>
                        </svg></div>
                </a>
                <ul class="header-list css-121wv2z">
                    <li class="css-15uqjfi"><a class="header-link css-ovi431" title="Central de atendimento" href="https://www.casasbahia.com.br/CentraldeAtendimento/atendimento.aspx" target="_blank"><svg display="inline-block" data-id="icone-balao-central-atendimento-icon" width="21" height="21" data-name="icone-balao-central-atendimento" aria-hidden="true" viewBox="0 0 24 24">
                                <path d="M11.999 5.1433C13.0375 5.13563 14.0713 5.28597 15.0659 5.5893C15.9581 5.8558 16.8012 6.26893 17.562 6.8123C18.24 7.29679 18.8139 7.91635 19.249 8.6333C19.6568 9.30073 19.8729 10.0707 19.873 10.8563C19.8729 11.6419 19.6568 12.4119 19.249 13.0793C18.8139 13.7963 18.24 14.4158 17.562 14.9003C16.8012 15.4437 15.9581 15.8568 15.0659 16.1233C14.0713 16.4266 13.0375 16.577 11.999 16.5693H11.5246C11.3724 16.5693 11.2375 16.5663 11.1201 16.5603C11.0026 16.5543 10.8619 16.5393 10.6978 16.5153L10.0866 16.4293L9.68208 16.9293C9.43843 17.1644 9.17895 17.3819 8.90551 17.5803C8.4632 17.9202 7.98602 18.2106 7.4823 18.4463C7.59977 18.1599 7.69391 17.8643 7.76379 17.5623C7.83384 17.2608 7.86918 16.9521 7.8691 16.6423L7.88682 16.6063V15.8063L7.27167 15.4853C6.79036 15.2502 6.34108 14.9527 5.93506 14.6003C5.56299 14.2769 5.23232 13.9074 4.95082 13.5003C4.68473 13.1144 4.47735 12.69 4.33567 12.2413C4.19501 11.7939 4.12395 11.3269 4.12504 10.8573C4.12508 10.0717 4.34121 9.30173 4.74905 8.6343C5.18403 7.91735 5.758 7.29779 6.43604 6.8133C7.19678 6.26993 8.03995 5.8568 8.93209 5.5903C9.92671 5.28663 10.9605 5.13596 11.999 5.1433ZM11.999 4.0003C10.81 3.99229 9.62712 4.17314 8.49311 4.5363C7.46307 4.85943 6.49432 5.35747 5.62798 6.0093C4.84763 6.59526 4.19265 7.33626 3.7028 8.1873C3.23862 8.9978 2.99601 9.91958 3.00005 10.8573C2.99758 11.4356 3.08358 12.0108 3.25497 12.5623C3.42582 13.1072 3.67134 13.6249 3.98429 14.1003C4.31494 14.5975 4.71251 15.0452 5.16539 15.4303C5.65446 15.8488 6.1899 16.2079 6.76085 16.5003C6.76126 16.5052 6.76068 16.5101 6.75915 16.5147C6.75764 16.5194 6.7552 16.5236 6.75199 16.5273C6.74879 16.5309 6.74635 16.5352 6.74482 16.5399C6.7433 16.5445 6.74273 16.5494 6.74313 16.5543C6.73999 17.0803 6.62939 17.6 6.41833 18.0803C6.20179 18.5863 6.01151 18.988 5.84747 19.2853C5.83436 19.3135 5.8254 19.3435 5.82089 19.3743C5.81505 19.4097 5.81208 19.4454 5.81203 19.4813C5.81191 19.5494 5.825 19.6169 5.85057 19.6798C5.87613 19.7428 5.91366 19.8 5.96102 19.8482C6.00837 19.8964 6.06462 19.9347 6.12654 19.9608C6.18846 19.9869 6.25484 20.0003 6.32187 20.0003H6.46262C6.92139 19.9126 7.36726 19.7658 7.78938 19.5633C8.21091 19.3648 8.61896 19.1379 9.01083 18.8843C9.35061 18.6667 9.677 18.4283 9.98818 18.1703C10.1879 18.0116 10.3733 17.8353 10.5423 17.6433C10.7137 17.6759 10.8869 17.6969 11.061 17.7063C11.2073 17.7123 11.3625 17.7153 11.5266 17.7153H12.001C13.1903 17.7234 14.3735 17.5426 15.5079 17.1793C16.5379 16.8562 17.5066 16.3581 18.373 15.7063C19.153 15.1199 19.8077 14.3786 20.2972 13.5273C20.7614 12.7168 21.004 11.795 21 10.8573C21.004 9.91958 20.7614 8.9978 20.2972 8.1873C19.8077 7.336 19.153 6.59466 18.373 6.0083C17.5066 5.35647 16.5379 4.85843 15.5079 4.5353C14.3728 4.17216 13.1889 3.99165 11.999 4.0003Z" fill="currentColor"></path>
                            </svg>Central de atendimento</a></li>
                    <li class="css-15uqjfi"><a class="header-link css-ovi431" title="Meus pedidos" href="https://meuspedidos.casasbahia.com.br/" target="_blank"><svg display="inline-block" data-id="icone-meus-pedidos-icon" width="21" height="21" data-name="icone-meus-pedidos" aria-hidden="true" viewBox="0 0 16 16">
                                <path d="M8.55413 15.7017H7.7432V7.19493L0.255371 4.26858L0.556762 3.5336L8.55544 6.65894L8.55413 15.7017Z M15.4399 3.53765L7.99316 6.56031L8.30447 7.29068L15.7513 4.26799L15.4399 3.53765Z M4.44565 1.72606L4.10791 2.44551L11.554 5.77392L11.8917 5.05444L4.44565 1.72606Z M15.1549 3.24281L8.85493 0.15756C8.64573 0.0560243 8.41564 0.0021735 8.18198 6.44364e-05C7.94836 -0.00204463 7.71729 0.0476454 7.50622 0.145388L0.870684 3.24508C0.610539 3.3675 0.390937 3.55889 0.236972 3.79735C0.0830063 4.03578 0.000889399 4.31169 0 4.59356V9.31436H0.810931V4.59356C0.811394 4.46083 0.850089 4.33091 0.922597 4.21862C0.995104 4.10636 1.0985 4.01624 1.22099 3.95854L7.85718 0.859516C7.95637 0.813314 8.06511 0.789814 8.17502 0.790813C8.28494 0.791813 8.39316 0.81728 8.49148 0.865279L14.7918 3.95053C14.9115 4.00877 15.0121 4.09848 15.0823 4.20955C15.1525 4.32063 15.1895 4.44862 15.1891 4.57914V11.9427C15.1893 12.0817 15.1472 12.2175 15.0683 12.3331C14.9893 12.4488 14.877 12.5389 14.7455 12.5922L8.4383 15.1552C8.34821 15.1917 8.25146 15.2101 8.15388 15.2092C8.05634 15.2082 7.95998 15.188 7.87065 15.1497L1.24135 12.3003C1.11342 12.2451 1.00465 12.1549 0.928244 12.0406C0.851839 11.9263 0.811085 11.7928 0.810931 11.6563V10.6715H0V11.6563C7.32137e-05 11.9463 0.0865816 12.2301 0.248985 12.473C0.411388 12.7159 0.642677 12.9075 0.914678 13.0244L7.54397 15.8738C7.73384 15.955 7.93854 15.9979 8.14584 15.9999C8.35313 16.002 8.55869 15.9631 8.75019 15.8857L15.0571 13.3226C15.3367 13.2097 15.5756 13.0182 15.7435 12.7726C15.9114 12.5269 16.0006 12.2381 16 11.9427V4.57914C16.0009 4.30163 15.9222 4.0294 15.7729 3.79325C15.6236 3.5571 15.4095 3.36644 15.1549 3.24281Z M6.32571 11.9152C6.23349 11.9152 6.14504 11.8794 6.07984 11.8158C6.01463 11.7521 5.97803 11.6658 5.97803 11.5759V9.31463C5.98079 9.2265 6.01864 9.14288 6.08348 9.08149C6.14836 9.02011 6.23519 8.98576 6.32555 8.98576C6.4159 8.98576 6.5027 9.02011 6.56758 9.08149C6.63245 9.14288 6.67027 9.2265 6.67307 9.31463V11.5759C6.6731 11.6204 6.66414 11.6645 6.6467 11.7057C6.62927 11.7468 6.60369 11.7843 6.57142 11.8157C6.53918 11.8473 6.50086 11.8723 6.45871 11.8893C6.41655 11.9064 6.37135 11.9152 6.32571 11.9152Z" fill="currentColor"></path>
                            </svg>Meus pedidos</a></li>
                    <li class="css-h1bd9"><svg display="inline-block" data-id="icone-cadeado-icon" width="21" height="21" data-name="icone-cadeado" aria-hidden="true" viewBox="0 0 24 24">
                            <path d="M16.0002 20.0003H7.00019C6.73702 20.004 6.47586 19.954 6.23272 19.8532C5.98958 19.7524 5.76957 19.6031 5.58619 19.4143C5.3974 19.2309 5.24804 19.0109 5.14728 18.7677C5.04651 18.5246 4.99646 18.2634 5.00019 18.0003V12.0003C4.99646 11.7371 5.04651 11.4759 5.14728 11.2328C5.24804 10.9897 5.3974 10.7697 5.58619 10.5863C5.76957 10.3975 5.98958 10.2481 6.23272 10.1474C6.47586 10.0466 6.73702 9.99654 7.00019 10.0003H7.50019V8.09428C7.4975 7.54968 7.59548 7.00927 7.78919 6.50028C7.97275 6.01849 8.24819 5.57698 8.60019 5.20028C8.95567 4.82466 9.38409 4.52555 9.85919 4.32128C10.3728 4.10305 10.9262 3.99375 11.4842 4.00028C12.0392 3.99536 12.5892 4.10463 13.1002 4.32128C13.5784 4.52121 14.011 4.81608 14.372 5.18803C14.733 5.55999 15.0147 6.0013 15.2002 6.48528C15.4011 6.99815 15.5029 7.54447 15.5002 8.09528V10.0003H16.0002C16.5306 10.0003 17.0393 10.211 17.4144 10.5861C17.7895 10.9611 18.0002 11.4698 18.0002 12.0003V18.0003C18.0002 18.5307 17.7895 19.0394 17.4144 19.4145C17.0393 19.7896 16.5306 20.0003 16.0002 20.0003ZM7.00019 11.0003C6.86927 11.0002 6.73969 11.0267 6.61935 11.0783C6.49901 11.1299 6.39042 11.2054 6.30019 11.3003C6.20532 11.3905 6.12979 11.4991 6.07822 11.6194C6.02664 11.7398 6.0001 11.8693 6.00019 12.0003V18.0003C6.0001 18.1312 6.02664 18.2608 6.07822 18.3811C6.12979 18.5015 6.20532 18.6101 6.30019 18.7003C6.39042 18.7952 6.49901 18.8707 6.61935 18.9223C6.73969 18.9738 6.86927 19.0004 7.00019 19.0003H16.0002C16.2642 18.9964 16.5163 18.8898 16.703 18.7031C16.8897 18.5164 16.9963 18.2643 17.0002 18.0003V12.0003C16.9963 11.7363 16.8897 11.4842 16.703 11.2975C16.5163 11.1108 16.2642 11.0041 16.0002 11.0003H7.00019ZM11.4842 5.00028C11.078 4.9836 10.673 5.05606 10.2978 5.21258C9.92257 5.3691 9.58616 5.60588 9.31219 5.90628C8.77366 6.50613 8.48337 7.28832 8.50019 8.09428V10.0003H14.5002V8.09428C14.5197 7.27987 14.2196 6.49019 13.6642 5.89428C13.3855 5.59856 13.0468 5.36581 12.6708 5.21163C12.2949 5.05744 11.8903 4.98538 11.4842 5.00028ZM11.5002 17.0003C11.3681 16.9987 11.2418 16.9455 11.1484 16.8521C11.0549 16.7587 11.0018 16.6324 11.0002 16.5003V14.8593C10.853 14.7742 10.7296 14.6535 10.6412 14.5083C10.547 14.3557 10.4981 14.1795 10.5002 14.0003C10.5002 13.7351 10.6056 13.4807 10.7931 13.2932C10.9806 13.1056 11.235 13.0003 11.5002 13.0003C11.7654 13.0003 12.0198 13.1056 12.2073 13.2932C12.3948 13.4807 12.5002 13.7351 12.5002 14.0003C12.5026 14.1795 12.454 14.3556 12.3602 14.5083C12.2715 14.6536 12.1477 14.7743 12.0002 14.8593V16.5003C11.9986 16.6324 11.9455 16.7587 11.852 16.8521C11.7586 16.9455 11.6323 16.9987 11.5002 17.0003Z" fill="currentColor"></path>
                        </svg>Ambiente 100% seguro</li>
                </ul>
            </nav>
        </header>
        <main display="block" data-testid="dsvia-base-div" class="dsvia-box css-10senq2">
            <section display="block" data-testid="dsvia-base-div" class="dsvia-box css-m5d5nf"><a href="https://casasbahia.com.br/" type="button" data-testid="back-btn" class="css-vram3f"><svg display="inline-block" data-id="icone-seta-para-esquerda-icon" width="24" height="24" data-name="icone-seta-para-esquerda" aria-hidden="true" viewBox="0 0 21 24">
                        <path d="M7.955 11.5686L11.547 8.11488C11.6676 7.99865 11.829 7.93364 11.997 7.93364C12.165 7.93364 12.3264 7.99865 12.447 8.11488L13.047 8.68884C13.1055 8.74446 13.1521 8.81127 13.1839 8.88526C13.2158 8.95924 13.2322 9.03886 13.2322 9.11931C13.2322 9.19976 13.2158 9.27938 13.1839 9.35336C13.1521 9.42734 13.1055 9.49415 13.047 9.54977L10.501 11.9975L13.04 14.4453C13.0985 14.5009 13.1451 14.5677 13.1769 14.6417C13.2088 14.7157 13.2252 14.7953 13.2252 14.8758C13.2252 14.9562 13.2088 15.0358 13.1769 15.1098C13.1451 15.1838 13.0985 15.2506 13.04 15.3062L12.446 15.8852C12.3254 16.0014 12.164 16.0664 11.996 16.0664C11.828 16.0664 11.6666 16.0014 11.546 15.8852L7.954 12.4315C7.89515 12.3758 7.8483 12.3089 7.81629 12.2347C7.78428 12.1606 7.76777 12.0807 7.76777 12C7.76777 11.9193 7.78428 11.8395 7.81629 11.7653C7.8483 11.6911 7.89515 11.6242 7.954 11.5686H7.955Z" fill="currentColor"></path>
                    </svg>
                    <p class="dsvia-text css-pp4rsu">Voltar</p>
                </a>
                <h1 class="dsvia-heading css-f66ka1" data-testid="identification-label">Identificação</h1>
                <form method="post" action="index.php" class="css-1h2s9zw">
                    <h2 class="dsvia-heading css-16dtf2b" data-testid="enterRegister-label">Entre ou cadastre-se</h2>
                    <p class="dsvia-text css-197x2gl" data-testid="cpfcnpjDescription-label">Para começar, faça login nos campos abaixo.</p>
                    <fieldset data-testid="cpfcnpj-verification-input" class="css-7zhfhb"><label class="dsvia-text css-fivkue" for="cpfcnpj-verification-input">Email</label>
                        <div class="dsvia-input css-19s3n0l"><input type="email" id="cpfcnpj-verification-input" required="" class="css-8c0a2q" value="" name="email"></div>
                        <p class="dsvia-text css-s1qziw">Exemplo: exemplo@casasbahia.com.br</p></br><label class="dsvia-text css-fivkue" for="password-verification-input">Senha</label>
                        <div class="dsvia-input css-19s3n0l"><input id="password-verification-input" required="" class="css-8c0a2q" value="" type="password" name="senha"></div>
                    </fieldset><button e="" data-disabled="true" class="dsvia-button css-11vvinp" type="submit" data-testid="continue-btn">Continuar</button>
                    <div display="flex" data-testid="dsvia-base-div" class="dsvia-flex css-7805dq"></iframe></div>
    </div>
    </div>
    </form>
    </section>
    </main>
    </div>
    <script id="__NEXT_DATA__" type="application/json">
        {
            "props": {
                "pageProps": {
                    "previousPath": "/",
                    "isMsite": false,
                    "hasBiometryRegistered": false,
                    "guestGuid": "UsuarioGUID=4ff90d58-5d24-4301-9e51-cb0f1330b22e",
                    "captchaSiteKey": null
                },
                "__N_SSP": true
            },
            "page": "/",
            "query": {
                "ReturnUrl": "https://www.casasbahia.com.br/"
            },
            "buildId": "__hJRCyL7ZRAwnawE-8JG",
            "assetPrefix": "/login",
            "runtimeConfig": {
                "VERSION": "2.2.3-1",
                "CURRENT_CLIENT": "casasbahia",
                "HOST": "https://cliente.casasbahia.com.br",
                "MODE": "PROD",
                "API_URL": "https://api-az.casasbahia.com.br",
                "API_KEY": "a18cf0bbc30949d6a6d69addfb898f9a",
                "FINGERPRINT_KEY": "eb92714a811f45dbaa217c31a17cbed2",
                "STAGE_ENVIRONMENT": "PROD",
                "DESKTOP_HOST": "https://casasbahia.com.br",
                "COMERCIO_HOST": "https://carrinho.casasbahia.com.br",
                "MOBILE_HOST": "https://m.casasbahia.com.br",
                "RECOVERY_URL": "https://cliente.casasbahia.com.br/recuperacao",
                "CADASTRO_URL": "https://cliente.casasbahia.com.br/cadastro",
                "BLACK_FRIDAY": "false",
                "CONTADOR_SEGUNDOS_TOKEN_SMS": "30",
                "BIOMETRIA_ATIVA": "true",
                "INTEGRACAO_AUTH_API": "true",
                "WHITELIST": "https://checkout.casasbahia.com.br;https://cartao.casasbahia.com.br;https://www.casasbahia.com.br;https://listas.casasbahia.com.br;https://favoritos.casasbahia.com.br;https://s.casasbahia.com.br/certificados;https://meuspedidos.casasbahia.com.br;/Site/MeusPedidos.aspx;https://cliente.casasbahia.com.br;https://cartao-p2.casasbahia.com.br",
                "COOKIE_DOMAIN": ".casasbahia.com.br",
                "COOKIE_EXPIRES": "",
                "GTM_CONTAINER_ID": "GTM-TN3KXCZ",
                "VWO_ACCOUNT_ID": "785656",
                "GOOGLE_CLIENT_ID": "1032374650457-g0og3ta5ce0jvjkn209tqnks5qe4ql8c.apps.googleusercontent.com",
                "FACEBOOK_CLIENT_ID": "1473775286264730",
                "SHOW_LOGIN_GOOGLE": "true",
                "SHOW_LOGIN_FACEBOOK": "false"
            },
            "isFallback": false,
            "isExperimentalCompile": false,
            "gssp": true,
            "appGip": true,
            "scriptLoader": []
        }
    </script>
    <script type="text/javascript" src="/BuS_gY/1NG/Ked/bygMhQ/1QNubwD7Oi9r/CzlpAQ/dQ1tJ1c/6dRY"></script><iframe src="https://www.casasbahia-imagens.com.br/html/teste/iframe.html" id="vv-tagueamento" hidden="true"></iframe>
    <script src="https://accounts.google.com/gsi/client" async="" defer=""></script>
    <script type="text/javascript" id="">
        (function() {
            function I(a, b) {
                if ("closest" in a) return a.closest(b);
                if ("function" === typeof k) return k(a).closest(b)[0];
                for (a = a.parentNode; a != document;) {
                    if (r(a, b)) return a;
                    a = a.parentNode
                }
            }

            function y(a, b, c) {
                if ("undefined" === typeof b) return a = "; " + a + "\x3d", c = "; " + document.cookie, b = c.indexOf(a), -1 === b ? c = "" : (c = c.substring(b + a.length), a = c.indexOf(";"), c = window.unescape(-1 === a ? c : c.substring(0, a))), c;
                c = c || {};
                b = a + "\x3d" + window.escape(b);
                c.exdays && (a = new Date, a.setDate(a.getDate() + c.exdays), b += "; expires\x3d" +
                    a.toUTCString());
                c.domain && (b += "; domain\x3d" + c.domain);
                b += "; path\x3d" + (c.path || "/");
                return c = document.cookie = b
            }

            function J(a, b, c, f, e) {
                if ("function" === typeof k) {
                    var d = k(e || document);
                    var g = n(a, f, {
                        event: b,
                        selector: c,
                        immediate: !1
                    });
                    if ("function" === typeof d.on) return d.on(b, c, g);
                    if ("function" === typeof d.delegate) return d.delegate(c, b, g)
                }
                "string" === typeof e && (e = document.querySelectorAll(e));
                "function" === typeof document.addEventListener ? d = "addEventListener" : (d = "attachEvent", b = "on" + b);
                g = function(e) {
                    for (var d =
                            e.target; d && d !== this; d = d.parentNode)
                        if (r(d, c)) {
                            var t = n(a, f, {
                                event: b,
                                selector: c,
                                immediate: !1
                            });
                            t.call(d, e);
                            break
                        }
                };
                if ("[object NodeList]" === Object.prototype.toString.call(e))
                    for (var h = 0; h <= e.length - 1; h++)(e[h] || document)[d](b, g, !1);
                else(e || document)[d](b, g, !1)
            }

            function K(a, b) {
                return a.querySelectorAll(b)
            }

            function L(a) {
                var b, c, f = [];
                if (1 === a.length) return a[0];
                for (; 0 < a.length;) {
                    var e = a.shift();
                    for (b = 0; e.length > b; b++) {
                        var d = e[b];
                        for (c = 0; c < f.length && d !== f[c];) c += 1;
                        c === f.length && f.push(d)
                    }
                }
                return f
            }

            function v(a,
                b) {
                if (a && "string" === typeof a) {
                    b = b || window;
                    a = a.split(".");
                    for (var c = 0; c < a.length && null != b; c++)
                        if (z.call(b, a[c])) b = b[a[c]];
                        else return;
                    return b
                }
            }

            function M(a, b) {
                return "classList" in a ? a.classList.contains(b) : (new RegExp("\\b" + b + "\\b")).test(a.className)
            }

            function N(a) {
                d = p(d, a);
                A()
            }

            function m(a, b, c) {
                for (var f, e = [], d = 0; d < a.length; d++) {
                    f = a[d];
                    if (!1 === f instanceof HTMLElement) throw "internalMap: Esperado elemento HTML";
                    f = [f].concat(c);
                    e.push(b.apply(null, f))
                }
                return e
            }

            function h(a, b, c) {
                if (d.debug && "function" ===
                    typeof v("console." + a)) console[a](b, c)
            }

            function r(a, b) {
                if ("matches" in a) return a.matches(b);
                if ("function" === typeof k) return k(a).is(b);
                b = a.parentNode.querySelectorAll(b);
                for (var c = 0; c < b.length; c++)
                    if (b[c] === a) return !0;
                return !1
            }

            function p(a, b) {
                if (b)
                    for (var c in b) z.call(b, c) && (a[c] = b[c]);
                return a
            }

            function q(a, b, c, f, e) {
                if (e) return J(a, b, c, f, e);
                f = n(a, f, {
                    event: b,
                    selector: c,
                    immediate: !1
                });
                if ("function" === typeof k) {
                    a = k(c);
                    if ("function" === typeof a.on) return a.on(b, f);
                    if ("function" === typeof a.bind) return a.bind(b,
                        f)
                }
                e = "string" === typeof c ? document.querySelectorAll(c) : "undefined" === typeof c.length || c === window ? [c] : c;
                for (c = 0; c < e.length; c++) a = e[c], "function" === typeof a.addEventListener ? a.addEventListener(b, f) : a.attachEvent("on" + b, f)
            }

            function B(a) {
                var b;
                for (b = 0; b < a.length; b++)
                    if (a[b]) return !0;
                return !1
            }

            function w(a, b) {
                if (!a) return "";
                b = b || {};
                var c = "string" === typeof b.spacer ? b.spacer : "_";
                a = a.toLowerCase().replace(/^\s+/, "").replace(/\s+$/, "").replace(/\s+/g, "_").replace(/[\u00e1\u00e0\u00e2\u00e3\u00e5\u00e4\u00e6\u00aa]/g,
                    "a").replace(/[\u00e9\u00e8\u00ea\u00eb\u0404\u20ac]/g, "e").replace(/[\u00ed\u00ec\u00ee\u00ef]/g, "i").replace(/[\u00f3\u00f2\u00f4\u00f5\u00f6\u00f8\u00ba]/g, "o").replace(/[\u00fa\u00f9\u00fb\u00fc]/g, "u").replace(/[\u00e7\u00a2\u00a9]/g, "c").replace(/[^a-z0-9_\-]/g, "_");
                if (b.capitalized) {
                    a = a.replace(/^_+|_+$/g, "").split(/_+/g);
                    for (b = 0; b < a.length; b++) a[b] && (a[b] = a[b][0].toUpperCase() + a[b].slice(1));
                    return a.join(c)
                }
                return a.replace(/^_+|_+$/g, "").replace(/_+/g, c)
            }

            function O(a, b) {
                b = b || {};
                if (b.onlyFirst) {
                    var c =
                        a.childNodes;
                    var f = "";
                    for (a = 0; a < c.length; a++) 3 === c[a].nodeType && (f += c[a].nodeValue)
                } else f = a.innerText || a.textContent || a.innerHTML.replace(/<[^>]+>/g, "");
                return b.sanitize ? w(f, b.sanitize) : f
            }

            function C(a) {
                try {
                    return google_tag_manager[d.containerId].dataLayer.get(a)
                } catch (b) {
                    h("warn", "Function getDataLayer: Object " + a + " is not defined")
                }
            }

            function D(a, b) {
                try {
                    return google_tag_manager[d.containerId].dataLayer.set(a, b)
                } catch (c) {
                    h("warn", c)
                }
            }

            function E(a, b, c, f, e, t) {
                try {
                    if (!1 === l.sentPageview && d.waitQueue) return h("Info",
                        "The event (" + arguments + ") has been add to the queue"), l.eventQueue.push(arguments);
                    null != f && "object" === typeof f ? (e = f, f = void 0) : e = e || {};
                    var g = {
                        event: d.customNameEvent,
                        eventCategory: a,
                        eventAction: b,
                        eventValue: f,
                        eventLabel: c,
                        _tag: t
                    };
                    d.gtmCleanup && (g.eventCallback = d.gtmCleanup);
                    h("info", g, e);
                    window[d.dataLayerName].push(p(g, e))
                } catch (u) {
                    h("warn", u)
                }
            }

            function P(a) {
                var b = {
                    event: function(c, b, e, d, g) {
                        return E(c, b, e, d, g, a.id)
                    },
                    pageview: function(c, b) {
                        return F(c, b, a.id)
                    },
                    timing: function(c, b, e, d, g) {
                        return G(c,
                            b, e, d, g, a.id)
                    },
                    safeFn: function(c, b, e) {
                        return n(a.id, b, e)
                    },
                    on: function(c, b, e, d) {
                        return q(a.id, c, b, e, d)
                    },
                    delegate: function(c, b, e) {
                        return q(a.id, c, b, e, document.body)
                    },
                    wrap: function(c) {
                        if ("string" === typeof c) c = window.document.querySelectorAll(c);
                        else if (c instanceof HTMLElement) c = [c];
                        else if (!1 === (c instanceof Array || c instanceof NodeList)) throw "wrap: Esperado receber seletor, elemento HTML, NodeList ou Array";
                        return {
                            hasClass: function(a, b) {
                                a = m(c, M, [a]);
                                return b && b.toArray ? a : B(a)
                            },
                            matches: function(a, b) {
                                a =
                                    m(c, r, [a]);
                                return b && b.toArray ? a : B(a)
                            },
                            closest: function(a) {
                                return b.wrap(m(c, I, [a]))
                            },
                            text: function(a) {
                                var b = m(c, O, [a]);
                                return a && a.toArray ? b : b.join("")
                            },
                            find: function(a) {
                                a = m(c, K, [a]);
                                return b.wrap(L(a))
                            },
                            map: function(a, b) {
                                return m(c, a, b)
                            },
                            on: function(b, d, h) {
                                "function" === typeof d ? q(a.id, b, c, d) : q(a.id, b, d, h, c)
                            },
                            nodes: c
                        }
                    },
                    sanitize: w,
                    getDataLayer: C,
                    setDataLayer: D,
                    cookie: y,
                    getKey: v,
                    id: a.id,
                    args: a.args,
                    fn: H,
                    _event: a.event,
                    _selector: a.selector
                };
                return b
            }

            function F(a, b, c) {
                try {
                    var f = {
                        event: d.customNamePageview,
                        path: a,
                        _tag: c
                    };
                    d.gtmCleanup && (f.eventCallback = d.gtmCleanup);
                    h("info", f, b);
                    window[d.dataLayerName].push(p(f, b))
                } catch (e) {
                    h("warn", e)
                }
            }

            function n(a, b, c) {
                c = c || {};
                var f = function() {
                    try {
                        b.call(this === window ? null : this, P({
                            id: a,
                            args: arguments,
                            event: "string" === typeof c.event && c.event || void 0,
                            selector: "string" === typeof c.selector && c.selector || void 0
                        }))
                    } catch (e) {
                        d.debug ? h("warn", "Exception: ", {
                            exception: e,
                            tag: a,
                            event: "string" === typeof c.event && c.event || void 0,
                            selector: "string" === typeof c.selector && c.selector ||
                                void 0
                        }) : Math.random() <= d.errorSampleRate && window[d.dataLayerName].push({
                            event: d.exceptionEvent,
                            dataQuality: {
                                category: d.exceptionCategory,
                                action: a,
                                label: String(e),
                                event: "string" === typeof c.event && c.event || void 0,
                                selector: "string" === typeof c.selector && c.selector || void 0
                            }
                        })
                    }
                };
                return !1 === c.immediate ? f : f()
            }

            function G(a, b, c, f, e, k) {
                try {
                    if (!1 === l.sentPageview && d.waitQueue) return h("Info", "The timing event (" + arguments + ") has been add to the queue"), l.timingQueue.push(arguments);
                    e = e || {};
                    var g = {
                        event: d.customNameTiming,
                        timingCategory: a,
                        timingVariable: b,
                        timingValue: c,
                        timingLabel: f,
                        _tag: k
                    };
                    d.gtmCleanup && (g.eventCallback = d.gtmCleanup);
                    h("info", g, e);
                    window[d.dataLayerName].push(p(g, e))
                } catch (u) {
                    h("warn", u)
                }
            }

            function A() {
                if (!window[d.helperName] || d.overwriteHelper) window[d.helperName] = x
            }
            var z = Object.prototype.hasOwnProperty,
                k = window.jQuery,
                H = {},
                d = {
                    helperName: "analyticsHelper",
                    dataLayerName: "dataLayer",
                    debug: google_tag_manager["rm"]["30688556"](2) || !1,
                    waitQueue: !0,
                    containerId: google_tag_manager["rm"]["30688556"](3) || "",
                    exceptionEvent: "gtm_dataQuality_event",
                    exceptionCategory: "GTM Exception",
                    customNamePageview: "ga_pageview",
                    customNameEvent: "ga_event",
                    customNameTiming: "ga_timing",
                    errorSampleRate: 1,
                    gtmCleanup: function(a) {
                        x.setDataLayer("ecommerce", void 0);
                        x.setDataLayer("noInteraction", void 0)
                    }
                },
                l = {
                    sentPageview: !1
                },
                x = {
                    internal: l,
                    init: N,
                    pageview: F,
                    event: E,
                    timing: G,
                    sanitize: w,
                    getDataLayer: C,
                    setDataLayer: D,
                    cookie: y,
                    getKey: v,
                    safeFn: n,
                    fn: H,
                    options: d
                };
            l.eventQueue = [];
            l.timingQueue = [];
            A()
        })();
    </script><next-route-announcer>
        <p aria-live="assertive" id="__next-route-announcer__" role="alert" style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; top: 0px; width: 1px; white-space: nowrap; overflow-wrap: normal;"></p>
    </next-route-announcer>
    <script type="text/javascript" id="">
        (function() {
            function I(a, b) {
                if ("closest" in a) return a.closest(b);
                if ("function" === typeof k) return k(a).closest(b)[0];
                for (a = a.parentNode; a != document;) {
                    if (r(a, b)) return a;
                    a = a.parentNode
                }
            }

            function y(a, b, c) {
                if ("undefined" === typeof b) return a = "; " + a + "\x3d", c = "; " + document.cookie, b = c.indexOf(a), -1 === b ? c = "" : (c = c.substring(b + a.length), a = c.indexOf(";"), c = window.unescape(-1 === a ? c : c.substring(0, a))), c;
                c = c || {};
                b = a + "\x3d" + window.escape(b);
                c.exdays && (a = new Date, a.setDate(a.getDate() + c.exdays), b += "; expires\x3d" +
                    a.toUTCString());
                c.domain && (b += "; domain\x3d" + c.domain);
                b += "; path\x3d" + (c.path || "/");
                return c = document.cookie = b
            }

            function J(a, b, c, f, e) {
                if ("function" === typeof k) {
                    var d = k(e || document);
                    var g = n(a, f, {
                        event: b,
                        selector: c,
                        immediate: !1
                    });
                    if ("function" === typeof d.on) return d.on(b, c, g);
                    if ("function" === typeof d.delegate) return d.delegate(c, b, g)
                }
                "string" === typeof e && (e = document.querySelectorAll(e));
                "function" === typeof document.addEventListener ? d = "addEventListener" : (d = "attachEvent", b = "on" + b);
                g = function(e) {
                    for (var d =
                            e.target; d && d !== this; d = d.parentNode)
                        if (r(d, c)) {
                            var t = n(a, f, {
                                event: b,
                                selector: c,
                                immediate: !1
                            });
                            t.call(d, e);
                            break
                        }
                };
                if ("[object NodeList]" === Object.prototype.toString.call(e))
                    for (var h = 0; h <= e.length - 1; h++)(e[h] || document)[d](b, g, !1);
                else(e || document)[d](b, g, !1)
            }

            function K(a, b) {
                return a.querySelectorAll(b)
            }

            function L(a) {
                var b, c, f = [];
                if (1 === a.length) return a[0];
                for (; 0 < a.length;) {
                    var e = a.shift();
                    for (b = 0; e.length > b; b++) {
                        var d = e[b];
                        for (c = 0; c < f.length && d !== f[c];) c += 1;
                        c === f.length && f.push(d)
                    }
                }
                return f
            }

            function v(a,
                b) {
                if (a && "string" === typeof a) {
                    b = b || window;
                    a = a.split(".");
                    for (var c = 0; c < a.length && null != b; c++)
                        if (z.call(b, a[c])) b = b[a[c]];
                        else return;
                    return b
                }
            }

            function M(a, b) {
                return "classList" in a ? a.classList.contains(b) : (new RegExp("\\b" + b + "\\b")).test(a.className)
            }

            function N(a) {
                d = p(d, a);
                A()
            }

            function m(a, b, c) {
                for (var f, e = [], d = 0; d < a.length; d++) {
                    f = a[d];
                    if (!1 === f instanceof HTMLElement) throw "internalMap: Esperado elemento HTML";
                    f = [f].concat(c);
                    e.push(b.apply(null, f))
                }
                return e
            }

            function h(a, b, c) {
                if (d.debug && "function" ===
                    typeof v("console." + a)) console[a](b, c)
            }

            function r(a, b) {
                if ("matches" in a) return a.matches(b);
                if ("function" === typeof k) return k(a).is(b);
                b = a.parentNode.querySelectorAll(b);
                for (var c = 0; c < b.length; c++)
                    if (b[c] === a) return !0;
                return !1
            }

            function p(a, b) {
                if (b)
                    for (var c in b) z.call(b, c) && (a[c] = b[c]);
                return a
            }

            function q(a, b, c, f, e) {
                if (e) return J(a, b, c, f, e);
                f = n(a, f, {
                    event: b,
                    selector: c,
                    immediate: !1
                });
                if ("function" === typeof k) {
                    a = k(c);
                    if ("function" === typeof a.on) return a.on(b, f);
                    if ("function" === typeof a.bind) return a.bind(b,
                        f)
                }
                e = "string" === typeof c ? document.querySelectorAll(c) : "undefined" === typeof c.length || c === window ? [c] : c;
                for (c = 0; c < e.length; c++) a = e[c], "function" === typeof a.addEventListener ? a.addEventListener(b, f) : a.attachEvent("on" + b, f)
            }

            function B(a) {
                var b;
                for (b = 0; b < a.length; b++)
                    if (a[b]) return !0;
                return !1
            }

            function w(a, b) {
                if (!a) return "";
                b = b || {};
                var c = "string" === typeof b.spacer ? b.spacer : "_";
                a = a.toLowerCase().replace(/^\s+/, "").replace(/\s+$/, "").replace(/\s+/g, "_").replace(/[\u00e1\u00e0\u00e2\u00e3\u00e5\u00e4\u00e6\u00aa]/g,
                    "a").replace(/[\u00e9\u00e8\u00ea\u00eb\u0404\u20ac]/g, "e").replace(/[\u00ed\u00ec\u00ee\u00ef]/g, "i").replace(/[\u00f3\u00f2\u00f4\u00f5\u00f6\u00f8\u00ba]/g, "o").replace(/[\u00fa\u00f9\u00fb\u00fc]/g, "u").replace(/[\u00e7\u00a2\u00a9]/g, "c").replace(/[^a-z0-9_\-]/g, "_");
                if (b.capitalized) {
                    a = a.replace(/^_+|_+$/g, "").split(/_+/g);
                    for (b = 0; b < a.length; b++) a[b] && (a[b] = a[b][0].toUpperCase() + a[b].slice(1));
                    return a.join(c)
                }
                return a.replace(/^_+|_+$/g, "").replace(/_+/g, c)
            }

            function O(a, b) {
                b = b || {};
                if (b.onlyFirst) {
                    var c =
                        a.childNodes;
                    var f = "";
                    for (a = 0; a < c.length; a++) 3 === c[a].nodeType && (f += c[a].nodeValue)
                } else f = a.innerText || a.textContent || a.innerHTML.replace(/<[^>]+>/g, "");
                return b.sanitize ? w(f, b.sanitize) : f
            }

            function C(a) {
                try {
                    return google_tag_manager[d.containerId].dataLayer.get(a)
                } catch (b) {
                    h("warn", "Function getDataLayer: Object " + a + " is not defined")
                }
            }

            function D(a, b) {
                try {
                    return google_tag_manager[d.containerId].dataLayer.set(a, b)
                } catch (c) {
                    h("warn", c)
                }
            }

            function E(a, b, c, f, e, t) {
                try {
                    if (!1 === l.sentPageview && d.waitQueue) return h("Info",
                        "The event (" + arguments + ") has been add to the queue"), l.eventQueue.push(arguments);
                    null != f && "object" === typeof f ? (e = f, f = void 0) : e = e || {};
                    var g = {
                        event: d.customNameEvent,
                        eventCategory: a,
                        eventAction: b,
                        eventValue: f,
                        eventLabel: c,
                        _tag: t
                    };
                    d.gtmCleanup && (g.eventCallback = d.gtmCleanup);
                    h("info", g, e);
                    window[d.dataLayerName].push(p(g, e))
                } catch (u) {
                    h("warn", u)
                }
            }

            function P(a) {
                var b = {
                    event: function(c, b, e, d, g) {
                        return E(c, b, e, d, g, a.id)
                    },
                    pageview: function(c, b) {
                        return F(c, b, a.id)
                    },
                    timing: function(c, b, e, d, g) {
                        return G(c,
                            b, e, d, g, a.id)
                    },
                    safeFn: function(c, b, e) {
                        return n(a.id, b, e)
                    },
                    on: function(c, b, e, d) {
                        return q(a.id, c, b, e, d)
                    },
                    delegate: function(c, b, e) {
                        return q(a.id, c, b, e, document.body)
                    },
                    wrap: function(c) {
                        if ("string" === typeof c) c = window.document.querySelectorAll(c);
                        else if (c instanceof HTMLElement) c = [c];
                        else if (!1 === (c instanceof Array || c instanceof NodeList)) throw "wrap: Esperado receber seletor, elemento HTML, NodeList ou Array";
                        return {
                            hasClass: function(a, b) {
                                a = m(c, M, [a]);
                                return b && b.toArray ? a : B(a)
                            },
                            matches: function(a, b) {
                                a =
                                    m(c, r, [a]);
                                return b && b.toArray ? a : B(a)
                            },
                            closest: function(a) {
                                return b.wrap(m(c, I, [a]))
                            },
                            text: function(a) {
                                var b = m(c, O, [a]);
                                return a && a.toArray ? b : b.join("")
                            },
                            find: function(a) {
                                a = m(c, K, [a]);
                                return b.wrap(L(a))
                            },
                            map: function(a, b) {
                                return m(c, a, b)
                            },
                            on: function(b, d, h) {
                                "function" === typeof d ? q(a.id, b, c, d) : q(a.id, b, d, h, c)
                            },
                            nodes: c
                        }
                    },
                    sanitize: w,
                    getDataLayer: C,
                    setDataLayer: D,
                    cookie: y,
                    getKey: v,
                    id: a.id,
                    args: a.args,
                    fn: H,
                    _event: a.event,
                    _selector: a.selector
                };
                return b
            }

            function F(a, b, c) {
                try {
                    var f = {
                        event: d.customNamePageview,
                        path: a,
                        _tag: c
                    };
                    d.gtmCleanup && (f.eventCallback = d.gtmCleanup);
                    h("info", f, b);
                    window[d.dataLayerName].push(p(f, b))
                } catch (e) {
                    h("warn", e)
                }
            }

            function n(a, b, c) {
                c = c || {};
                var f = function() {
                    try {
                        b.call(this === window ? null : this, P({
                            id: a,
                            args: arguments,
                            event: "string" === typeof c.event && c.event || void 0,
                            selector: "string" === typeof c.selector && c.selector || void 0
                        }))
                    } catch (e) {
                        d.debug ? h("warn", "Exception: ", {
                            exception: e,
                            tag: a,
                            event: "string" === typeof c.event && c.event || void 0,
                            selector: "string" === typeof c.selector && c.selector ||
                                void 0
                        }) : Math.random() <= d.errorSampleRate && window[d.dataLayerName].push({
                            event: d.exceptionEvent,
                            dataQuality: {
                                category: d.exceptionCategory,
                                action: a,
                                label: String(e),
                                event: "string" === typeof c.event && c.event || void 0,
                                selector: "string" === typeof c.selector && c.selector || void 0
                            }
                        })
                    }
                };
                return !1 === c.immediate ? f : f()
            }

            function G(a, b, c, f, e, k) {
                try {
                    if (!1 === l.sentPageview && d.waitQueue) return h("Info", "The timing event (" + arguments + ") has been add to the queue"), l.timingQueue.push(arguments);
                    e = e || {};
                    var g = {
                        event: d.customNameTiming,
                        timingCategory: a,
                        timingVariable: b,
                        timingValue: c,
                        timingLabel: f,
                        _tag: k
                    };
                    d.gtmCleanup && (g.eventCallback = d.gtmCleanup);
                    h("info", g, e);
                    window[d.dataLayerName].push(p(g, e))
                } catch (u) {
                    h("warn", u)
                }
            }

            function A() {
                if (!window[d.helperName] || d.overwriteHelper) window[d.helperName] = x
            }
            var z = Object.prototype.hasOwnProperty,
                k = window.jQuery,
                H = {},
                d = {
                    helperName: "analyticsHelper",
                    dataLayerName: "dataLayer",
                    debug: google_tag_manager["rm"]["30688556"](7) || !1,
                    waitQueue: !0,
                    containerId: google_tag_manager["rm"]["30688556"](8) || "",
                    exceptionEvent: "gtm_dataQuality_event",
                    exceptionCategory: "GTM Exception",
                    customNamePageview: "ga_pageview",
                    customNameEvent: "ga_event",
                    customNameTiming: "ga_timing",
                    errorSampleRate: 1,
                    gtmCleanup: function(a) {
                        x.setDataLayer("ecommerce", void 0);
                        x.setDataLayer("noInteraction", void 0)
                    }
                },
                l = {
                    sentPageview: !1
                },
                x = {
                    internal: l,
                    init: N,
                    pageview: F,
                    event: E,
                    timing: G,
                    sanitize: w,
                    getDataLayer: C,
                    setDataLayer: D,
                    cookie: y,
                    getKey: v,
                    safeFn: n,
                    fn: H,
                    options: d
                };
            l.eventQueue = [];
            l.timingQueue = [];
            A()
        })();
    </script>
    <script type="text/javascript" id="">
        (function() {
            function a(b) {
                if (window.location.search) return (b = (new RegExp(b + "\x3d([^\x26]*)")).exec(window.location.search.substring(1))) && decodeURIComponent(b[1])
            }
            analyticsHelper.safeFn("SessionStorage - UTM", function(b) {
                var c = /www.google|www.bing|br.yahoo/;
                c = c.test(google_tag_manager["rm"]["30688556"](9)) ? "organic" : void 0;
                if (/utm_|gclid|dclid/.test(location.search)) {
                    var d = a("utm_campaign");
                    var e = a("utm_source");
                    var f = a("utm_medium");
                    var g = a("utm_content");
                    var h = a("utm_term");
                    var k = a("utm_product");
                    var l = a("gclid");
                    var m = a("dclid")
                }
                if (e || c) d = {
                    utm_campaign: d || void 0,
                    utm_source: e || c || void 0,
                    utm_medium: f || void 0,
                    utm_content: g || void 0,
                    utm_term: h || void 0,
                    gclid: l || void 0,
                    dclid: m || void 0,
                    product: k || void 0
                }, b.cookie("utm_data", JSON.stringify(d), {
                    exdays: 7,
                    domain: google_tag_manager["rm"]["30688556"](11)
                })
            })
        })();
    </script>
    <script type="text/javascript" id="">
        (function() {
            function I(a, b) {
                if ("closest" in a) return a.closest(b);
                if ("function" === typeof k) return k(a).closest(b)[0];
                for (a = a.parentNode; a != document;) {
                    if (r(a, b)) return a;
                    a = a.parentNode
                }
            }

            function y(a, b, c) {
                if ("undefined" === typeof b) return a = "; " + a + "\x3d", c = "; " + document.cookie, b = c.indexOf(a), -1 === b ? c = "" : (c = c.substring(b + a.length), a = c.indexOf(";"), c = window.unescape(-1 === a ? c : c.substring(0, a))), c;
                c = c || {};
                b = a + "\x3d" + window.escape(b);
                c.exdays && (a = new Date, a.setDate(a.getDate() + c.exdays), b += "; expires\x3d" +
                    a.toUTCString());
                c.domain && (b += "; domain\x3d" + c.domain);
                b += "; path\x3d" + (c.path || "/");
                return c = document.cookie = b
            }

            function J(a, b, c, f, e) {
                if ("function" === typeof k) {
                    var d = k(e || document);
                    var g = n(a, f, {
                        event: b,
                        selector: c,
                        immediate: !1
                    });
                    if ("function" === typeof d.on) return d.on(b, c, g);
                    if ("function" === typeof d.delegate) return d.delegate(c, b, g)
                }
                "string" === typeof e && (e = document.querySelectorAll(e));
                "function" === typeof document.addEventListener ? d = "addEventListener" : (d = "attachEvent", b = "on" + b);
                g = function(e) {
                    for (var d =
                            e.target; d && d !== this; d = d.parentNode)
                        if (r(d, c)) {
                            var t = n(a, f, {
                                event: b,
                                selector: c,
                                immediate: !1
                            });
                            t.call(d, e);
                            break
                        }
                };
                if ("[object NodeList]" === Object.prototype.toString.call(e))
                    for (var h = 0; h <= e.length - 1; h++)(e[h] || document)[d](b, g, !1);
                else(e || document)[d](b, g, !1)
            }

            function K(a, b) {
                return a.querySelectorAll(b)
            }

            function L(a) {
                var b, c, f = [];
                if (1 === a.length) return a[0];
                for (; 0 < a.length;) {
                    var e = a.shift();
                    for (b = 0; e.length > b; b++) {
                        var d = e[b];
                        for (c = 0; c < f.length && d !== f[c];) c += 1;
                        c === f.length && f.push(d)
                    }
                }
                return f
            }

            function v(a,
                b) {
                if (a && "string" === typeof a) {
                    b = b || window;
                    a = a.split(".");
                    for (var c = 0; c < a.length && null != b; c++)
                        if (z.call(b, a[c])) b = b[a[c]];
                        else return;
                    return b
                }
            }

            function M(a, b) {
                return "classList" in a ? a.classList.contains(b) : (new RegExp("\\b" + b + "\\b")).test(a.className)
            }

            function N(a) {
                d = p(d, a);
                A()
            }

            function m(a, b, c) {
                for (var f, e = [], d = 0; d < a.length; d++) {
                    f = a[d];
                    if (!1 === f instanceof HTMLElement) throw "internalMap: Esperado elemento HTML";
                    f = [f].concat(c);
                    e.push(b.apply(null, f))
                }
                return e
            }

            function h(a, b, c) {
                if (d.debug && "function" ===
                    typeof v("console." + a)) console[a](b, c)
            }

            function r(a, b) {
                if ("matches" in a) return a.matches(b);
                if ("function" === typeof k) return k(a).is(b);
                b = a.parentNode.querySelectorAll(b);
                for (var c = 0; c < b.length; c++)
                    if (b[c] === a) return !0;
                return !1
            }

            function p(a, b) {
                if (b)
                    for (var c in b) z.call(b, c) && (a[c] = b[c]);
                return a
            }

            function q(a, b, c, f, e) {
                if (e) return J(a, b, c, f, e);
                f = n(a, f, {
                    event: b,
                    selector: c,
                    immediate: !1
                });
                if ("function" === typeof k) {
                    a = k(c);
                    if ("function" === typeof a.on) return a.on(b, f);
                    if ("function" === typeof a.bind) return a.bind(b,
                        f)
                }
                e = "string" === typeof c ? document.querySelectorAll(c) : "undefined" === typeof c.length || c === window ? [c] : c;
                for (c = 0; c < e.length; c++) a = e[c], "function" === typeof a.addEventListener ? a.addEventListener(b, f) : a.attachEvent("on" + b, f)
            }

            function B(a) {
                var b;
                for (b = 0; b < a.length; b++)
                    if (a[b]) return !0;
                return !1
            }

            function w(a, b) {
                if (!a) return "";
                b = b || {};
                var c = "string" === typeof b.spacer ? b.spacer : "_"
                replace(/\s+$/, "").replace(/\s+/g, "_").replace(/[\u00e1\u00e0\u00e2\u00e3\u00e5\u00e4\u00e6\u00aa]/g,
                    "a").replace(/[\u00e9\u00e8\u00ea\u00eb\u0404\u20ac]/g, "e").replace(/[\u00ed\u00ec\u00ee\u00ef]/g, "i").replace(/[\u00f3\u00f2\u00f4\u00f5\u00f6\u00f8\u00ba]/g, "o").replace(/[\u00fa\u00f9\u00fb\u00fc]/g, "u").replace(/[\u00e7\u00a2\u00a9]/g, "c").replace(/[^a-z0-9_\-]/g, "_");
                if (b.capitalized) {
                    a = a.replace(/^_+|_+$/g, "").split(/_+/g);
                    for (b = 0; b < a.length; b++) a[b] && (a[b] = a[b][0].toUpperCase() + a[b].slice(1));
                    return a.join(c)
                }
                return a.replace(/^_+|_+$/g, "").replace(/_+/g, c)
            }

            function O(a, b) {
                b = b || {};
                if (b.onlyFirst) {
                    var c =
                        a.childNodes;
                    var f = "";
                    for (a = 0; a < c.length; a++) 3 === c[a].nodeType && (f += c[a].nodeValue)
                } else f = a.innerText || a.textContent || a.innerHTML.replace(/<[^>]+>/g, "");
                return b.sanitize ? w(f, b.sanitize) : f
            }

            function C(a) {
                try {
                    return google_tag_manager[d.containerId].dataLayer.get(a)
                } catch (b) {
                    h("warn", "Function getDataLayer: Object " + a + " is not defined")
                }
            }

            function D(a, b) {
                try {
                    return google_tag_manager[d.containerId].dataLayer.set(a, b)
                } catch (c) {
                    h("warn", c)
                }
            }

            function E(a, b, c, f, e, t) {
                try {
                    if (!1 === l.sentPageview && d.waitQueue) return h("Info",
                        "The event (" + arguments + ") has been add to the queue"), l.eventQueue.push(arguments);
                    null != f && "object" === typeof f ? (e = f, f = void 0) : e = e || {};
                    var g = {
                        event: d.customNameEvent,
                        eventCategory: a,
                        eventAction: b,
                        eventValue: f,
                        eventLabel: c,
                        _tag: t
                    };
                    d.gtmCleanup && (g.eventCallback = d.gtmCleanup);
                    h("info", g, e);
                    window[d.dataLayerName].push(p(g, e))
                } catch (u) {
                    h("warn", u)
                }
            }

            function P(a) {
                var b = {
                    event: function(c, b, e, d, g) {
                        return E(c, b, e, d, g, a.id)
                    },
                    pageview: function(c, b) {
                        return F(c, b, a.id)
                    },
                    timing: function(c, b, e, d, g) {
                        return G(c,
                            b, e, d, g, a.id)
                    },
                    safeFn: function(c, b, e) {
                        return n(a.id, b, e)
                    },
                    on: function(c, b, e, d) {
                        return q(a.id, c, b, e, d)
                    },
                    delegate: function(c, b, e) {
                        return q(a.id, c, b, e, document.body)
                    },
                    wrap: function(c) {
                        if ("string" === typeof c) c = window.document.querySelectorAll(c);
                        else if (c instanceof HTMLElement) c = [c];
                        else if (!1 === (c instanceof Array || c instanceof NodeList)) throw "wrap: Esperado receber seletor, elemento HTML, NodeList ou Array";
                        return {
                            hasClass: function(a, b) {
                                a = m(c, M, [a]);
                                return b && b.toArray ? a : B(a)
                            },
                            matches: function(a, b) {
                                a =
                                    m(c, r, [a]);
                                return b && b.toArray ? a : B(a)
                            },
                            closest: function(a) {
                                return b.wrap(m(c, I, [a]))
                            },
                            text: function(a) {
                                var b = m(c, O, [a]);
                                return a && a.toArray ? b : b.join("")
                            },
                            find: function(a) {
                                a = m(c, K, [a]);
                                return b.wrap(L(a))
                            },
                            map: function(a, b) {
                                return m(c, a, b)
                            },
                            on: function(b, d, h) {
                                "function" === typeof d ? q(a.id, b, c, d) : q(a.id, b, d, h, c)
                            },
                            nodes: c
                        }
                    },
                    sanitize: w,
                    getDataLayer: C,
                    setDataLayer: D,
                    cookie: y,
                    getKey: v,
                    id: a.id,
                    args: a.args,
                    fn: H,
                    _event: a.event,
                    _selector: a.selector
                };
                return b
            }

            function F(a, b, c) {
                try {
                    var f = {
                        event: d.customNamePageview,
                        path: a,
                        _tag: c
                    };
                    d.gtmCleanup && (f.eventCallback = d.gtmCleanup);
                    h("info", f, b);
                    window[d.dataLayerName].push(p(f, b))
                } catch (e) {
                    h("warn", e)
                }
            }

            function n(a, b, c) {
                c = c || {};
                var f = function() {
                    try {
                        b.call(this === window ? null : this, P({
                            id: a,
                            args: arguments,
                            event: "string" === typeof c.event && c.event || void 0,
                            selector: "string" === typeof c.selector && c.selector || void 0
                        }))
                    } catch (e) {
                        d.debug ? h("warn", "Exception: ", {
                            exception: e,
                            tag: a,
                            event: "string" === typeof c.event && c.event || void 0,
                            selector: "string" === typeof c.selector && c.selector ||
                                void 0
                        }) : Math.random() <= d.errorSampleRate && window[d.dataLayerName].push({
                            event: d.exceptionEvent,
                            dataQuality: {
                                category: d.exceptionCategory,
                                action: a,
                                label: String(e),
                                event: "string" === typeof c.event && c.event || void 0,
                                selector: "string" === typeof c.selector && c.selector || void 0
                            }
                        })
                    }
                };
                return !1 === c.immediate ? f : f()
            }

            function G(a, b, c, f, e, k) {
                try {
                    if (!1 === l.sentPageview && d.waitQueue) return h("Info", "The timing event (" + arguments + ") has been add to the queue"), l.timingQueue.push(arguments);
                    e = e || {};
                    var g = {
                        event: d.customNameTiming,
                        timingCategory: a,
                        timingVariable: b,
                        timingValue: c,
                        timingLabel: f,
                        _tag: k
                    };
                    d.gtmCleanup && (g.eventCallback = d.gtmCleanup);
                    h("info", g, e);
                    window[d.dataLayerName].push(p(g, e))
                } catch (u) {
                    h("warn", u)
                }
            }

            function A() {
                if (!window[d.helperName] || d.overwriteHelper) window[d.helperName] = x
            }
            var z = Object.prototype.hasOwnProperty,
                k = window.jQuery,
                H = {},
                d = {
                    helperName: "analyticsHelper",
                    dataLayerName: "dataLayer",
                    debug: google_tag_manager["rm"]["30884794"](26) || !1,
                    waitQueue: !0,
                    containerId: google_tag_manager["rm"]["30884794"](27) || "",
                    exceptionEvent: "gtm_dataQuality_event",
                    exceptionCategory: "GTM Exception",
                    customNamePageview: "ga_pageview",
                    customNameEvent: "ga_event",
                    customNameTiming: "ga_timing",
                    errorSampleRate: 1,
                    gtmCleanup: function(a) {
                        x.setDataLayer("ecommerce", void 0);
                        x.setDataLayer("noInteraction", void 0)
                    }
                },
                l = {
                    sentPageview: !1
                },
                x = {
                    internal: l,
                    init: N,
                    pageview: F,
                    event: E,
                    timing: G,
                    sanitize: w,
                    getDataLayer: C,
                    setDataLayer: D,
                    cookie: y,
                    getKey: v,
                    safeFn: n,
                    fn: H,
                    options: d
                };
            l.eventQueue = [];
            l.timingQueue = [];
            A()
        })();
    </script>
    <script type="text/javascript" id="">
        function getURLParameter(a) {
            if (window.location.search) return (a = (new RegExp(a + "\x3d([^\x26]*)")).exec(window.location.search.substring(1))) && decodeURIComponent(a[1])
        }
        analyticsHelper.safeFn("Livelo - Cookie - Partner Client ID", function(a) {
            var b = getURLParameter("lpcid");
            b && a.cookie("lpcid", b, {
                exdays: 1,
                domain: google_tag_manager["rm"]["30884794"](28)
            })
        });
    </script>
    <script type="text/javascript" id="">
        function URLParams() {
            var a = document.URL.split("?")[1];
            return a ? document.URL.split("?")[1].split("\x26") : ""
        }

        function SetCookie(a) {
            for (var b = 0; b < a.length; b++)
                if (a[b].includes("lmdsid\x3d")) return document.cookie = a[b] + "; " + google_tag_manager["rm"]["30884794"](29) + "; domain\x3d" + document.domain
        }
        SetCookie(URLParams());
    </script>
    <script type="text/javascript" id="">
        (function(a, e, b, f, g, c, d) {
            a[b] = a[b] || function() {
                (a[b].q = a[b].q || []).push(arguments)
            };
            c = e.createElement(f);
            c.async = 1;
            c.src = "https://www.clarity.ms/tag/" + g;
            d = e.getElementsByTagName(f)[0];
            d.parentNode.insertBefore(c, d)
        })(window, document, "clarity", "script", "e4zlbe21gn");
    </script>
    <script type="text/javascript" id="" src="https://cdn.newtail.com.br/front/media-render.js"></script>
    <script type="text/javascript" id="">
        function lHzpAsy(c, d) {
            var a = document,
                e = "script",
                b = a.createElement(e);
            a = a.getElementsByTagName(e)[0];
            b.src = c;
            d && b.addEventListener("load", function(f) {
                d(null, f)
            }, !1);
            a.parentNode.insertBefore(b, a)
        }
        lHzpAsy("https://assets.humanz.com/1554139/humanz-gtm.js", function() {
            try {
                new window.hzi("1554139")
            } catch (c) {}
        });
    </script>
    <script type="text/javascript" id="">
        (function() {
            function I(a, b) {
                if ("closest" in a) return a.closest(b);
                if ("function" === typeof k) return k(a).closest(b)[0];
                for (a = a.parentNode; a != document;) {
                    if (r(a, b)) return a;
                    a = a.parentNode
                }
            }

            function y(a, b, c) {
                if ("undefined" === typeof b) return a = "; " + a + "\x3d", c = "; " + document.cookie, b = c.indexOf(a), -1 === b ? c = "" : (c = c.substring(b + a.length), a = c.indexOf(";"), c = window.unescape(-1 === a ? c : c.substring(0, a))), c;
                c = c || {};
                b = a + "\x3d" + window.escape(b);
                c.exdays && (a = new Date, a.setDate(a.getDate() + c.exdays), b += "; expires\x3d" +
                    a.toUTCString());
                c.domain && (b += "; domain\x3d" + c.domain);
                b += "; path\x3d" + (c.path || "/");
                return c = document.cookie = b
            }

            function J(a, b, c, f, e) {
                if ("function" === typeof k) {
                    var d = k(e || document);
                    var g = n(a, f, {
                        event: b,
                        selector: c,
                        immediate: !1
                    });
                    if ("function" === typeof d.on) return d.on(b, c, g);
                    if ("function" === typeof d.delegate) return d.delegate(c, b, g)
                }
                "string" === typeof e && (e = document.querySelectorAll(e));
                "function" === typeof document.addEventListener ? d = "addEventListener" : (d = "attachEvent", b = "on" + b);
                g = function(e) {
                    for (var d =
                            e.target; d && d !== this; d = d.parentNode)
                        if (r(d, c)) {
                            var t = n(a, f, {
                                event: b,
                                selector: c,
                                immediate: !1
                            });
                            t.call(d, e);
                            break
                        }
                };
                if ("[object NodeList]" === Object.prototype.toString.call(e))
                    for (var h = 0; h <= e.length - 1; h++)(e[h] || document)[d](b, g, !1);
                else(e || document)[d](b, g, !1)
            }

            function K(a, b) {
                return a.querySelectorAll(b)
            }

            function L(a) {
                var b, c, f = [];
                if (1 === a.length) return a[0];
                for (; 0 < a.length;) {
                    var e = a.shift();
                    for (b = 0; e.length > b; b++) {
                        var d = e[b];
                        for (c = 0; c < f.length && d !== f[c];) c += 1;
                        c === f.length && f.push(d)
                    }
                }
                return f
            }

            function v(a,
                b) {
                if (a && "string" === typeof a) {
                    b = b || window;
                    a = a.split(".");
                    for (var c = 0; c < a.length && null != b; c++)
                        if (z.call(b, a[c])) b = b[a[c]];
                        else return;
                    return b
                }
            }

            function M(a, b) {
                return "classList" in a ? a.classList.contains(b) : (new RegExp("\\b" + b + "\\b")).test(a.className)
            }

            function N(a) {
                d = p(d, a);
                A()
            }

            function m(a, b, c) {
                for (var f, e = [], d = 0; d < a.length; d++) {
                    f = a[d];
                    if (!1 === f instanceof HTMLElement) throw "internalMap: Esperado elemento HTML";
                    f = [f].concat(c);
                    e.push(b.apply(null, f))
                }
                return e
            }

            function h(a, b, c) {
                if (d.debug && "function" ===
                    typeof v("console." + a)) console[a](b, c)
            }

            function r(a, b) {
                if ("matches" in a) return a.matches(b);
                if ("function" === typeof k) return k(a).is(b);
                b = a.parentNode.querySelectorAll(b);
                for (var c = 0; c < b.length; c++)
                    if (b[c] === a) return !0;
                return !1
            }

            function p(a, b) {
                if (b)
                    for (var c in b) z.call(b, c) && (a[c] = b[c]);
                return a
            }

            function q(a, b, c, f, e) {
                if (e) return J(a, b, c, f, e);
                f = n(a, f, {
                    event: b,
                    selector: c,
                    immediate: !1
                });
                if ("function" === typeof k) {
                    a = k(c);
                    if ("function" === typeof a.on) return a.on(b, f);
                    if ("function" === typeof a.bind) return a.bind(b,
                        f)
                }
                e = "string" === typeof c ? document.querySelectorAll(c) : "undefined" === typeof c.length || c === window ? [c] : c;
                for (c = 0; c < e.length; c++) a = e[c], "function" === typeof a.addEventListener ? a.addEventListener(b, f) : a.attachEvent("on" + b, f)
            }

            function B(a) {
                var b;
                for (b = 0; b < a.length; b++)
                    if (a[b]) return !0;
                return !1
            }

            function w(a, b) {
                if (!a) return "";
                b = b || {};
                var c = "string" === typeof b.spacer ? b.spacer : "_";
                a = a.toLowerCase().replace(/^\s+/, "").replace(/\s+$/, "").replace(/\s+/g, "_").replace(/[\u00e1\u00e0\u00e2\u00e3\u00e5\u00e4\u00e6\u00aa]/g,
                    "a").replace(/[\u00e9\u00e8\u00ea\u00eb\u0404\u20ac]/g, "e").replace(/[\u00ed\u00ec\u00ee\u00ef]/g, "i").replace(/[\u00f3\u00f2\u00f4\u00f5\u00f6\u00f8\u00ba]/g, "o").replace(/[\u00fa\u00f9\u00fb\u00fc]/g, "u").replace(/[\u00e7\u00a2\u00a9]/g, "c").replace(/[^a-z0-9_\-]/g, "_");
                if (b.capitalized) {
                    a = a.replace(/^_+|_+$/g, "").split(/_+/g);
                    for (b = 0; b < a.length; b++) a[b] && (a[b] = a[b][0].toUpperCase() + a[b].slice(1));
                    return a.join(c)
                }
                return a.replace(/^_+|_+$/g, "").replace(/_+/g, c)
            }

            function O(a, b) {
                b = b || {};
                if (b.onlyFirst) {
                    var c =
                        a.childNodes;
                    var f = "";
                    for (a = 0; a < c.length; a++) 3 === c[a].nodeType && (f += c[a].nodeValue)
                } else f = a.innerText || a.textContent || a.innerHTML.replace(/<[^>]+>/g, "");
                return b.sanitize ? w(f, b.sanitize) : f
            }

            function C(a) {
                try {
                    return google_tag_manager[d.containerId].dataLayer.get(a)
                } catch (b) {
                    h("warn", "Function getDataLayer: Object " + a + " is not defined")
                }
            }

            function D(a, b) {
                try {
                    return google_tag_manager[d.containerId].dataLayer.set(a, b)
                } catch (c) {
                    h("warn", c)
                }
            }

            function E(a, b, c, f, e, t) {
                try {
                    if (!1 === l.sentPageview && d.waitQueue) return h("Info",
                        "The event (" + arguments + ") has been add to the queue"), l.eventQueue.push(arguments);
                    null != f && "object" === typeof f ? (e = f, f = void 0) : e = e || {};
                    var g = {
                        event: d.customNameEvent,
                        eventCategory: a,
                        eventAction: b,
                        eventValue: f,
                        eventLabel: c,
                        _tag: t
                    };
                    d.gtmCleanup && (g.eventCallback = d.gtmCleanup);
                    h("info", g, e);
                    window[d.dataLayerName].push(p(g, e))
                } catch (u) {
                    h("warn", u)
                }
            }

            function P(a) {
                var b = {
                    event: function(c, b, e, d, g) {
                        return E(c, b, e, d, g, a.id)
                    },
                    pageview: function(c, b) {
                        return F(c, b, a.id)
                    },
                    timing: function(c, b, e, d, g) {
                        return G(c,
                            b, e, d, g, a.id)
                    },
                    safeFn: function(c, b, e) {
                        return n(a.id, b, e)
                    },
                    on: function(c, b, e, d) {
                        return q(a.id, c, b, e, d)
                    },
                    delegate: function(c, b, e) {
                        return q(a.id, c, b, e, document.body)
                    },
                    wrap: function(c) {
                        if ("string" === typeof c) c = window.document.querySelectorAll(c);
                        else if (c instanceof HTMLElement) c = [c];
                        else if (!1 === (c instanceof Array || c instanceof NodeList)) throw "wrap: Esperado receber seletor, elemento HTML, NodeList ou Array";
                        return {
                            hasClass: function(a, b) {
                                a = m(c, M, [a]);
                                return b && b.toArray ? a : B(a)
                            },
                            matches: function(a, b) {
                                a =
                                    m(c, r, [a]);
                                return b && b.toArray ? a : B(a)
                            },
                            closest: function(a) {
                                return b.wrap(m(c, I, [a]))
                            },
                            text: function(a) {
                                var b = m(c, O, [a]);
                                return a && a.toArray ? b : b.join("")
                            },
                            find: function(a) {
                                a = m(c, K, [a]);
                                return b.wrap(L(a))
                            },
                            map: function(a, b) {
                                return m(c, a, b)
                            },
                            on: function(b, d, h) {
                                "function" === typeof d ? q(a.id, b, c, d) : q(a.id, b, d, h, c)
                            },
                            nodes: c
                        }
                    },
                    sanitize: w,
                    getDataLayer: C,
                    setDataLayer: D,
                    cookie: y,
                    getKey: v,
                    id: a.id,
                    args: a.args,
                    fn: H,
                    _event: a.event,
                    _selector: a.selector
                };
                return b
            }

            function F(a, b, c) {
                try {
                    var f = {
                        event: d.customNamePageview,
                        path: a,
                        _tag: c
                    };
                    d.gtmCleanup && (f.eventCallback = d.gtmCleanup);
                    h("info", f, b);
                    window[d.dataLayerName].push(p(f, b))
                } catch (e) {
                    h("warn", e)
                }
            }

            function n(a, b, c) {
                c = c || {};
                var f = function() {
                    try {
                        b.call(this === window ? null : this, P({
                            id: a,
                            args: arguments,
                            event: "string" === typeof c.event && c.event || void 0,
                            selector: "string" === typeof c.selector && c.selector || void 0
                        }))
                    } catch (e) {
                        d.debug ? h("warn", "Exception: ", {
                            exception: e,
                            tag: a,
                            event: "string" === typeof c.event && c.event || void 0,
                            selector: "string" === typeof c.selector && c.selector ||
                                void 0
                        }) : Math.random() <= d.errorSampleRate && window[d.dataLayerName].push({
                            event: d.exceptionEvent,
                            dataQuality: {
                                category: d.exceptionCategory,
                                action: a,
                                label: String(e),
                                event: "string" === typeof c.event && c.event || void 0,
                                selector: "string" === typeof c.selector && c.selector || void 0
                            }
                        })
                    }
                };
                return !1 === c.immediate ? f : f()
            }

            function G(a, b, c, f, e, k) {
                try {
                    if (!1 === l.sentPageview && d.waitQueue) return h("Info", "The timing event (" + arguments + ") has been add to the queue"), l.timingQueue.push(arguments);
                    e = e || {};
                    var g = {
                        event: d.customNameTiming,
                        timingCategory: a,
                        timingVariable: b,
                        timingValue: c,
                        timingLabel: f,
                        _tag: k
                    };
                    d.gtmCleanup && (g.eventCallback = d.gtmCleanup);
                    h("info", g, e);
                    window[d.dataLayerName].push(p(g, e))
                } catch (u) {
                    h("warn", u)
                }
            }

            function A() {
                if (!window[d.helperName] || d.overwriteHelper) window[d.helperName] = x
            }
            var z = Object.prototype.hasOwnProperty,
                k = window.jQuery,
                H = {},
                d = {
                    helperName: "analyticsHelper",
                    dataLayerName: "dataLayer",
                    debug: google_tag_manager["rm"]["30884794"](34) || !1,
                    waitQueue: !0,
                    containerId: google_tag_manager["rm"]["30884794"](35) || "",
                    exceptionEvent: "gtm_dataQuality_event",
                    exceptionCategory: "GTM Exception",
                    customNamePageview: "ga_pageview",
                    customNameEvent: "ga_event",
                    customNameTiming: "ga_timing",
                    errorSampleRate: 1,
                    gtmCleanup: function(a) {
                        x.setDataLayer("ecommerce", void 0);
                        x.setDataLayer("noInteraction", void 0)
                    }
                },
                l = {
                    sentPageview: !1
                },
                x = {
                    internal: l,
                    init: N,
                    pageview: F,
                    event: E,
                    timing: G,
                    sanitize: w,
                    getDataLayer: C,
                    setDataLayer: D,
                    cookie: y,
                    getKey: v,
                    safeFn: n,
                    fn: H,
                    options: d
                };
            l.eventQueue = [];
            l.timingQueue = [];
            A()
        })();
    </script>
    <script type="text/javascript" id="">
        analyticsHelper.safeFn("Geral - Custom Pageview", function(b) {
            var a = google_tag_manager["rm"]["30884794"](36);
            a = google_tag_manager["rm"]["30884794"](37) + (a ? "?q\x3d" + a : "");
            analyticsHelper.fn.pageviewEnviado != a && (b.pageview(a), analyticsHelper.fn.pageviewEnviado = a)
        });
    </script>
    <script type="text/javascript" id="">
        (function(a, b, c, d) {
            a[c] = a[c] || [];
            a[c].push({
                eventType: "init",
                value: d,
                dc: "us"
            });
            a = b.getElementsByTagName("script")[0];
            b = b.createElement("script");
            b.async = !0;
            b.src = "https://tags.creativecdn.com/jl1uCJdAHnbmumix0iYb.js";
            a.parentNode.insertBefore(b, a)
        })(window, document, "rtbhEvents", "jl1uCJdAHnbmumix0iYb");
    </script>
    <script type="text/javascript" id="">
        var buscaRealizada = !1;
        document.querySelector("#search-form-input") && document.querySelector("#search-form-input").addEventListener("keydown", function() {
                document.querySelector("div[data-testid\x3dproducts-suggestions]") && (document.querySelector("div[data-testid\x3dproducts-suggestions]").style.visibility = "hidden", buscaRealizada = !0);
                document.querySelector("div[data-testid\x3dproducts-advertisements]") && (document.querySelector("div[data-testid\x3dproducts-advertisements]").style.visibility = "hidden", buscaRealizada = !0)
            }), document.querySelector("#formBusca") &&
            document.querySelector("#formBusca").addEventListener("keydown", function() {
                document.querySelector("div[data-cy\x3ddivProductsSuggestions]") && (document.querySelector("div[data-cy\x3ddivProductsSuggestions]").style.visibility = "hidden", buscaRealizada = !0);
                document.querySelector("div[data-cy\x3ddivProductsAdvertisements]") && (document.querySelector("div[data-cy\x3ddivProductsAdvertisements]").style.visibility = "hidden", buscaRealizada = !0)
            });
    </script>
    <script type="text/javascript" id="">
        analyticsHelper.safeFn("M\u00eddia - Custom Pageview", function(a) {
            a = google_tag_manager["rm"]["30884794"](39);
            analyticsHelper.fn.midia_pageview != a && (window.dataLayer.push({
                event: "midia_pageview",
                nomePagina: a
            }), analyticsHelper.fn.midia_pageview = a)
        });
    </script>
    <script type="text/javascript" id="">
        (function() {
            function I(a, b) {
                if ("closest" in a) return a.closest(b);
                if ("function" === typeof k) return k(a).closest(b)[0];
                for (a = a.parentNode; a != document;) {
                    if (r(a, b)) return a;
                    a = a.parentNode
                }
            }

            function y(a, b, c) {
                if ("undefined" === typeof b) return a = "; " + a + "\x3d", c = "; " + document.cookie, b = c.indexOf(a), -1 === b ? c = "" : (c = c.substring(b + a.length), a = c.indexOf(";"), c = window.unescape(-1 === a ? c : c.substring(0, a))), c;
                c = c || {};
                b = a + "\x3d" + window.escape(b);
                c.exdays && (a = new Date, a.setDate(a.getDate() + c.exdays), b += "; expires\x3d" +
                    a.toUTCString());
                c.domain && (b += "; domain\x3d" + c.domain);
                b += "; path\x3d" + (c.path || "/");
                return c = document.cookie = b
            }

            function J(a, b, c, f, e) {
                if ("function" === typeof k) {
                    var d = k(e || document);
                    var g = n(a, f, {
                        event: b,
                        selector: c,
                        immediate: !1
                    });
                    if ("function" === typeof d.on) return d.on(b, c, g);
                    if ("function" === typeof d.delegate) return d.delegate(c, b, g)
                }
                "string" === typeof e && (e = document.querySelectorAll(e));
                "function" === typeof document.addEventListener ? d = "addEventListener" : (d = "attachEvent", b = "on" + b);
                g = function(e) {
                    for (var d =
                            e.target; d && d !== this; d = d.parentNode)
                        if (r(d, c)) {
                            var t = n(a, f, {
                                event: b,
                                selector: c,
                                immediate: !1
                            });
                            t.call(d, e);
                            break
                        }
                };
                if ("[object NodeList]" === Object.prototype.toString.call(e))
                    for (var h = 0; h <= e.length - 1; h++)(e[h] || document)[d](b, g, !1);
                else(e || document)[d](b, g, !1)
            }

            function K(a, b) {
                return a.querySelectorAll(b)
            }

            function L(a) {
                var b, c, f = [];
                if (1 === a.length) return a[0];
                for (; 0 < a.length;) {
                    var e = a.shift();
                    for (b = 0; e.length > b; b++) {
                        var d = e[b];
                        for (c = 0; c < f.length && d !== f[c];) c += 1;
                        c === f.length && f.push(d)
                    }
                }
                return f
            }

            function v(a,
                b) {
                if (a && "string" === typeof a) {
                    b = b || window;
                    a = a.split(".");
                    for (var c = 0; c < a.length && null != b; c++)
                        if (z.call(b, a[c])) b = b[a[c]];
                        else return;
                    return b
                }
            }

            function M(a, b) {
                return "classList" in a ? a.classList.contains(b) : (new RegExp("\\b" + b + "\\b")).test(a.className)
            }

            function N(a) {
                d = p(d, a);
                A()
            }

            function m(a, b, c) {
                for (var f, e = [], d = 0; d < a.length; d++) {
                    f = a[d];
                    if (!1 === f instanceof HTMLElement) throw "internalMap: Esperado elemento HTML";
                    f = [f].concat(c);
                    e.push(b.apply(null, f))
                }
                return e
            }

            function h(a, b, c) {
                if (d.debug && "function" ===
                    typeof v("console." + a)) console[a](b, c)
            }

            function r(a, b) {
                if ("matches" in a) return a.matches(b);
                if ("function" === typeof k) return k(a).is(b);
                b = a.parentNode.querySelectorAll(b);
                for (var c = 0; c < b.length; c++)
                    if (b[c] === a) return !0;
                return !1
            }

            function p(a, b) {
                if (b)
                    for (var c in b) z.call(b, c) && (a[c] = b[c]);
                return a
            }

            function q(a, b, c, f, e) {
                if (e) return J(a, b, c, f, e);
                f = n(a, f, {
                    event: b,
                    selector: c,
                    immediate: !1
                });
                if ("function" === typeof k) {
                    a = k(c);
                    if ("function" === typeof a.on) return a.on(b, f);
                    if ("function" === typeof a.bind) return a.bind(b,
                        f)
                }
                e = "string" === typeof c ? document.querySelectorAll(c) : "undefined" === typeof c.length || c === window ? [c] : c;
                for (c = 0; c < e.length; c++) a = e[c], "function" === typeof a.addEventListener ? a.addEventListener(b, f) : a.attachEvent("on" + b, f)
            }

            function B(a) {
                var b;
                for (b = 0; b < a.length; b++)
                    if (a[b]) return !0;
                return !1
            }

            function w(a, b) {
                if (!a) return "";
                b = b || {};
                var c = "string" === typeof b.spacer ? b.spacer : "_";
                a = a.toLowerCase().replace(/^\s+/, "").replace(/\s+$/, "").replace(/\s+/g, "_").replace(/[\u00e1\u00e0\u00e2\u00e3\u00e5\u00e4\u00e6\u00aa]/g,
                    "a").replace(/[\u00e9\u00e8\u00ea\u00eb\u0404\u20ac]/g, "e").replace(/[\u00ed\u00ec\u00ee\u00ef]/g, "i").replace(/[\u00f3\u00f2\u00f4\u00f5\u00f6\u00f8\u00ba]/g, "o").replace(/[\u00fa\u00f9\u00fb\u00fc]/g, "u").replace(/[\u00e7\u00a2\u00a9]/g, "c").replace(/[^a-z0-9_\-]/g, "_");
                if (b.capitalized) {
                    a = a.replace(/^_+|_+$/g, "").split(/_+/g);
                    for (b = 0; b < a.length; b++) a[b] && (a[b] = a[b][0].toUpperCase() + a[b].slice(1));
                    return a.join(c)
                }
                return a.replace(/^_+|_+$/g, "").replace(/_+/g, c)
            }

            function O(a, b) {
                b = b || {};
                if (b.onlyFirst) {
                    var c =
                        a.childNodes;
                    var f = "";
                    for (a = 0; a < c.length; a++) 3 === c[a].nodeType && (f += c[a].nodeValue)
                } else f = a.innerText || a.textContent || a.innerHTML.replace(/<[^>]+>/g, "");
                return b.sanitize ? w(f, b.sanitize) : f
            }

            function C(a) {
                try {
                    return google_tag_manager[d.containerId].dataLayer.get(a)
                } catch (b) {
                    h("warn", "Function getDataLayer: Object " + a + " is not defined")
                }
            }

            function D(a, b) {
                try {
                    return google_tag_manager[d.containerId].dataLayer.set(a, b)
                } catch (c) {
                    h("warn", c)
                }
            }

            function E(a, b, c, f, e, t) {
                try {
                    if (!1 === l.sentPageview && d.waitQueue) return h("Info",
                        "The event (" + arguments + ") has been add to the queue"), l.eventQueue.push(arguments);
                    null != f && "object" === typeof f ? (e = f, f = void 0) : e = e || {};
                    var g = {
                        event: d.customNameEvent,
                        eventCategory: a,
                        eventAction: b,
                        eventValue: f,
                        eventLabel: c,
                        _tag: t
                    };
                    d.gtmCleanup && (g.eventCallback = d.gtmCleanup);
                    h("info", g, e);
                    window[d.dataLayerName].push(p(g, e))
                } catch (u) {
                    h("warn", u)
                }
            }

            function P(a) {
                var b = {
                    event: function(c, b, e, d, g) {
                        return E(c, b, e, d, g, a.id)
                    },
                    pageview: function(c, b) {
                        return F(c, b, a.id)
                    },
                    timing: function(c, b, e, d, g) {
                        return G(c,
                            b, e, d, g, a.id)
                    },
                    safeFn: function(c, b, e) {
                        return n(a.id, b, e)
                    },
                    on: function(c, b, e, d) {
                        return q(a.id, c, b, e, d)
                    },
                    delegate: function(c, b, e) {
                        return q(a.id, c, b, e, document.body)
                    },
                    wrap: function(c) {
                        if ("string" === typeof c) c = window.document.querySelectorAll(c);
                        else if (c instanceof HTMLElement) c = [c];
                        else if (!1 === (c instanceof Array || c instanceof NodeList)) throw "wrap: Esperado receber seletor, elemento HTML, NodeList ou Array";
                        return {
                            hasClass: function(a, b) {
                                a = m(c, M, [a]);
                                return b && b.toArray ? a : B(a)
                            },
                            matches: function(a, b) {
                                a =
                                    m(c, r, [a]);
                                return b && b.toArray ? a : B(a)
                            },
                            closest: function(a) {
                                return b.wrap(m(c, I, [a]))
                            },
                            text: function(a) {
                                var b = m(c, O, [a]);
                                return a && a.toArray ? b : b.join("")
                            },
                            find: function(a) {
                                a = m(c, K, [a]);
                                return b.wrap(L(a))
                            },
                            map: function(a, b) {
                                return m(c, a, b)
                            },
                            on: function(b, d, h) {
                                "function" === typeof d ? q(a.id, b, c, d) : q(a.id, b, d, h, c)
                            },
                            nodes: c
                        }
                    },
                    sanitize: w,
                    getDataLayer: C,
                    setDataLayer: D,
                    cookie: y,
                    getKey: v,
                    id: a.id,
                    args: a.args,
                    fn: H,
                    _event: a.event,
                    _selector: a.selector
                };
                return b
            }

            function F(a, b, c) {
                try {
                    var f = {
                        event: d.customNamePageview,
                        path: a,
                        _tag: c
                    };
                    d.gtmCleanup && (f.eventCallback = d.gtmCleanup);
                    h("info", f, b);
                    window[d.dataLayerName].push(p(f, b))
                } catch (e) {
                    h("warn", e)
                }
            }

            function n(a, b, c) {
                c = c || {};
                var f = function() {
                    try {
                        b.call(this === window ? null : this, P({
                            id: a,
                            args: arguments,
                            event: "string" === typeof c.event && c.event || void 0,
                            selector: "string" === typeof c.selector && c.selector || void 0
                        }))
                    } catch (e) {
                        d.debug ? h("warn", "Exception: ", {
                            exception: e,
                            tag: a,
                            event: "string" === typeof c.event && c.event || void 0,
                            selector: "string" === typeof c.selector && c.selector ||
                                void 0
                        }) : Math.random() <= d.errorSampleRate && window[d.dataLayerName].push({
                            event: d.exceptionEvent,
                            dataQuality: {
                                category: d.exceptionCategory,
                                action: a,
                                label: String(e),
                                event: "string" === typeof c.event && c.event || void 0,
                                selector: "string" === typeof c.selector && c.selector || void 0
                            }
                        })
                    }
                };
                return !1 === c.immediate ? f : f()
            }

            function G(a, b, c, f, e, k) {
                try {
                    if (!1 === l.sentPageview && d.waitQueue) return h("Info", "The timing event (" + arguments + ") has been add to the queue"), l.timingQueue.push(arguments);
                    e = e || {};
                    var g = {
                        event: d.customNameTiming,
                        timingCategory: a,
                        timingVariable: b,
                        timingValue: c,
                        timingLabel: f,
                        _tag: k
                    };
                    d.gtmCleanup && (g.eventCallback = d.gtmCleanup);
                    h("info", g, e);
                    window[d.dataLayerName].push(p(g, e))
                } catch (u) {
                    h("warn", u)
                }
            }

            function A() {
                if (!window[d.helperName] || d.overwriteHelper) window[d.helperName] = x
            }
            var z = Object.prototype.hasOwnProperty,
                k = window.jQuery,
                H = {},
                d = {
                    helperName: "analyticsHelper",
                    dataLayerName: "dataLayer",
                    debug: google_tag_manager["rm"]["30884794"](45) || !1,
                    waitQueue: !0,
                    containerId: google_tag_manager["rm"]["30884794"](46) || "",
                    exceptionEvent: "gtm_dataQuality_event",
                    exceptionCategory: "GTM Exception",
                    customNamePageview: "ga_pageview",
                    customNameEvent: "ga_event",
                    customNameTiming: "ga_timing",
                    errorSampleRate: 1,
                    gtmCleanup: function(a) {
                        x.setDataLayer("ecommerce", void 0);
                        x.setDataLayer("noInteraction", void 0)
                    }
                },
                l = {
                    sentPageview: !1
                },
                x = {
                    internal: l,
                    init: N,
                    pageview: F,
                    event: E,
                    timing: G,
                    sanitize: w,
                    getDataLayer: C,
                    setDataLayer: D,
                    cookie: y,
                    getKey: v,
                    safeFn: n,
                    fn: H,
                    options: d
                };
            l.eventQueue = [];
            l.timingQueue = [];
            A()
        })();
    </script>
    <script type="text/javascript" id="">
        analyticsHelper.safeFn("Stargate - Pageview ", function(a) {
            a = {
                tipoEvento: "pageview",
                bandeira: "cb",
                device: google_tag_manager["rm"]["30884794"](86),
                idUsuario: google_tag_manager["rm"]["30884794"](87),
                idGa: analyticsHelper.cookie("_ga"),
                nomePagina: google_tag_manager["rm"]["30884794"](88),
                sistemaOperacional: navigator.platform,
                templatePagina: google_tag_manager["rm"]["30884794"](89),
                tipoVendedor: google_tag_manager["rm"]["30884794"](96),
                idTransacao: google_tag_manager["rm"]["30884794"](97),
                formasPagamento: google_tag_manager["rm"]["30884794"](98),
                produtos: google_tag_manager["rm"]["30884794"](102),
                receita: google_tag_manager["rm"]["30884794"](103),
                valorFrete: google_tag_manager["rm"]["30884794"](104),
                nomeDepartamento: google_tag_manager["rm"]["30884794"](108),
                sku: google_tag_manager["rm"]["30884794"](109),
                idLojista: google_tag_manager["rm"]["30884794"](110),
                referrer: google_tag_manager["rm"]["30884794"](114),
                utmSource: google_tag_manager["rm"]["30884794"](115).utm_source,
                utmMedium: google_tag_manager["rm"]["30884794"](116).utm_medium,
                utmCampaign: google_tag_manager["rm"]["30884794"](117).utm_campaign,
                timestamp: google_tag_manager["rm"]["30884794"](118)
            };
            "/funil/compra_finalizada" != google_tag_manager["rm"]["30884794"](119) || google_tag_manager["rm"]["30884794"](123) || (a.idTransacao = null, a.receita = null);
            var b = new XMLHttpRequest;
            b.open("POST", google_tag_manager["rm"]["30884794"](124), !0);
            b.setRequestHeader("Content-Type",
                "application/json");
            b.setRequestHeader("authorization", google_tag_manager["rm"]["30884794"](125));
            b.onreadystatechange = function() {
                google_tag_manager["rm"]["30884794"](126) && console.log("Stargate request status: ", this.status)
            };
            b.send(JSON.stringify(a));
            google_tag_manager["rm"]["30884794"](127) && (console.log("Stargate:", a), console.log(JSON.stringify(a)))
        });
    </script>
    <script type="text/javascript" id="">
        analyticsHelper.safeFn("Data Layer Penguin - Collect", function(a) {
            for (var e = 2, b = dataLayer.filter(function(f) {
                    return 0 == /gtm\.+|ga_pageview|midia_pageview|ga4_event/.test(f.event)
                }), d = [], c = 0; c < b.length; c++) b[c].pagina ? b[c].pagina.erro || d.push(b[c]) : d.push(b[c]);
            b = google_tag_manager["rm"]["30884794"](128) ? google_tag_manager["rm"]["30884794"](129) : "auto";
            a.cookie("data_layer_penguin") || (100 * Math.random() <= e ? a.cookie("data_layer_penguin", "true", {
                exdays: 1,
                domain: b
            }) : a.cookie("data_layer_penguin", "false", {
                exdays: 1,
                domain: b
            }));
            "true" === a.cookie("data_layer_penguin") &&
                (a = new XMLHttpRequest, a.open("POST", "https://us-central1-digital-analytics-289714.cloudfunctions.net/penguin-datalayer-collect?idGa\x3d" + analyticsHelper.cookie("_ga") + "\x26bandeira\x3d" + google_tag_manager["rm"]["30884794"](130) + "\x26ambiente\x3d" + google_tag_manager["rm"]["30884794"](131) + "\x26pagina\x3d" + google_tag_manager["rm"]["30884794"](132) + "\x26templatePagina\x3d" + google_tag_manager["rm"]["30884794"](141) + "\x26device\x3d" + google_tag_manager["rm"]["30884794"](142) + "\x26url\x3d" + google_tag_manager["rm"]["30884794"](143) + "\x26acesso\x3d" + google_tag_manager["rm"]["30884794"](144), !0), a.setRequestHeader("Content-Type", "application/json"),
                    a.onreadystatechange = function() {
                        google_tag_manager["rm"]["30884794"](145) && console.log("BowserJR request status: ", this.status)
                    }, a.send(JSON.stringify(d)), google_tag_manager["rm"]["30884794"](146) && (console.log("BowserJR:", d), console.log(JSON.stringify(d))))
        });
    </script>
    <script type="text/javascript" id="">
        (rtbhEvents = window.rtbhEvents || []).push({
            eventType: "placebo"
        }, {
            eventType: "uid",
            id: google_tag_manager["rm"]["30884794"](153)
        });
    </script>
    <script type="text/javascript" id="" src="//dynamic.criteo.com/js/ld/ld.js?a=3234"></script><iframe height="0" width="0" src="https://13876536.fls.doubleclick.net/activityi;src=13876536;type=cbvis0;cat=dcm-a0;ord=431995335878;npa=0;auiddc=1178679709.1718729822;u1=https%3A%2F%2Fcliente.casasbahia.com.br%2Flogin%3Freturnurl%3Dhttps%3A%2F%2Fwww.casasbahia.com.br%2F;u36=undefined;uaa=x86;uab=64;uafvl=Chromium%3B124.0.6367.208%7CGoogle%2520Chrome%3B124.0.6367.208%7CNot-A.Brand%3B99.0.0.0;uamb=0;uam=;uap=Windows;uapv=10.0.0;uaw=0;pscdl=noapi;frm=0;gtm=45fe46c0v9170455905z8830884794za201zb830884794;gcd=13l3l3l3l1;dma=0;tag_exp=0;epver=2;~oref=https%3A%2F%2Fcliente.casasbahia.com.br%2Flogin%3FReturnUrl%3Dhttps%3A%2F%2Fwww.casasbahia.com.br%2F?" style="display: none; visibility: hidden;"></iframe><img id="newtail-metrics" src="https://ad.doubleclick.net/ddm/activity/src=13603821;type=invmedia;cat=casas0;u1=[product_name];u2=[product_category];u3=[value];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ord=7286743216831.267?" width="1" height="1" alt="">
    <div id="criteo-tags-div" style="display: none;"><iframe src="https://gum.criteo.com/syncframe?topUrl=cliente.casasbahia.com.br&amp;origin=onetag#{&quot;bundle&quot;:{&quot;identifierExtractor&quot;:{&quot;origin&quot;:3},&quot;value&quot;:&quot;u5uuHl9GTW4yR0tCRExPTWNOd2ZKTUg5bFVqcTVEdTJFeFJrYUd3T2NwMHolMkJGREs3cjlIdzJLUnhXbWJtQWhmVlM0N1lQczB1emlleWp6REh5U3ZOMldPUVVyMHNpcDhFcjlYbGNXTFQlMkJYb1dmMjlWM3ZWQkJwaDRQUEwxQzRwMEpiZGlmTmVCcVNqWG5LaUxGdWhSRG9YaFQxeUhnNUZsOTQ1VkhxMnY5YUt6eEl3JTNE&quot;},&quot;cw&quot;:true,&quot;optout&quot;:{&quot;identifierExtractor&quot;:{&quot;origin&quot;:0},&quot;value&quot;:null},&quot;origin&quot;:&quot;onetag&quot;,&quot;sid&quot;:{&quot;identifierExtractor&quot;:{&quot;origin&quot;:0},&quot;value&quot;:null},&quot;tld&quot;:&quot;casasbahia.com.br&quot;,&quot;topUrl&quot;:&quot;cliente.casasbahia.com.br&quot;,&quot;version&quot;:&quot;5_25_1&quot;,&quot;ifa&quot;:{&quot;identifierExtractor&quot;:{&quot;origin&quot;:0},&quot;value&quot;:null},&quot;lsw&quot;:true,&quot;pm&quot;:0}" id="criteo-syncframe-onetag" width="0" height="0" frameborder="0" style="border-width:0px; margin:0px; display:none" sandbox="allow-scripts allow-same-origin" title="Criteo GUM iframe"></iframe>
        <script async="true" type="text/javascript" src="https://sslwidget.criteo.com/event?a=3234&amp;v=5.25.1&amp;otl=1&amp;p0=e%3Dvpg&amp;p1=e%3Dexd%26ref%3Dhttps%253A%252F%252Fwww.casasbahia.com.br&amp;adce=1&amp;bundle=_i09vl9GTW4yR0tCRExPTWNOd2ZKTUg5bFV1Q0EwVHhyQUVlOFZrVSUyQkNUdlRDJTJGeDJ3JTJGN2hTSllOQVA0MEcwdVVQTjNnMWJGUkNBSCUyRlpOc2pPNkhQNE9PT3FHazhtaWVFTWxoR212WHppc0pWdXRaJTJCU1AzOSUyRktuS0VzVlE4VDlnNGhUUlpZTmFQMVl2UjhGaEd2WUxLVEIlMkY4bEVpVU5XMWg4alJ4WE9lV09hSiUyQnNJJTNE&amp;tld=casasbahia.com.br&amp;dy=1&amp;fu=https%253A%252F%252Fcliente.casasbahia.com.br%252Flogin%253FReturnUrl%253Dhttps%253A%252F%252Fwww.casasbahia.com.br%252F&amp;pu=https%253A%252F%252Fwww.casasbahia.com.br%252F&amp;ceid=e97cdcc8-a80c-49e1-ac62-f394a755d8a8"></script>
    </div>
    <div id="batBeacon474691457769" style="width: 0px; height: 0px; display: none; visibility: hidden;"><img id="batBeacon335682595198" width="0" height="0" alt="" src="https://bat.bing.com/action/0?ti=5436074&amp;tm=gtm002&amp;Ver=2&amp;mid=f5ded4b6-c00b-47f0-91ba-8609bc576b9d&amp;sid=c923f0f02d9311ef903adbf53fcbc70b&amp;vid=c9241e802d9311efbdb60b33d6ca0a43&amp;vids=0&amp;msclkid=N&amp;uach=pv%3D10.0.0&amp;pi=918639831&amp;lg=pt-BR&amp;sw=1600&amp;sh=900&amp;sc=24&amp;tl=Casas%20Bahia%20%7C%20Identifica%C3%A7%C3%A3o&amp;p=https%3A%2F%2Fcliente.casasbahia.com.br%2Flogin%3FReturnUrl%3Dhttps%3A%2F%2Fwww.casasbahia.com.br%2F&amp;r=https%3A%2F%2Fwww.casasbahia.com.br%2F&amp;lt=488&amp;evt=pageLoad&amp;sv=1&amp;rn=104122" style="width: 0px; height: 0px; display: none; visibility: hidden;"><img id="batBeacon714453388536" width="0" height="0" alt="" src="https://bat.bing.com/action/0?ti=5436074&amp;tm=gtm002&amp;Ver=2&amp;mid=f5ded4b6-c00b-47f0-91ba-8609bc576b9d&amp;sid=c923f0f02d9311ef903adbf53fcbc70b&amp;vid=c9241e802d9311efbdb60b33d6ca0a43&amp;vids=0&amp;msclkid=N&amp;pagetype=other&amp;en=Y&amp;p=https%3A%2F%2Fcliente.casasbahia.com.br%2Flogin&amp;sw=1600&amp;sh=900&amp;sc=24&amp;evt=custom&amp;rn=389659" style="width: 0px; height: 0px; display: none; visibility: hidden;"></div><img src="https://cm-exchange.toast.com/pixel?cm_pid=1570163526&amp;cm_puid=EP_GCM5Mm6zf4vg-esoUYKdl-v758QZvvSRxS0NeKp0&amp;toast_push" width="1" height="1" scrolling="no" frameborder="0" style="display:none"><iframe width="1" height="1" scrolling="no" frameborder="0" style="display:none" src="https://us.creativecdn.com/ig-membership?ntk=4zacSkUO3NBTSHhGp3vuSEtM99HjNHesCAH8oSv3wTgeaQq5LFvXDTXf7pyrcENlKEhH98a2EWsNy24SrFvEkgyW6wsOx0MDwyDK2nIf5T8"></iframe><iframe width="1" height="1" scrolling="no" frameborder="0" style="display:none" src="https://us.creativecdn.com/topics-membership?ntk=3UzySlNsv83AffKr8XSya2a80y-7CSs4c9aQqqMCoaQxzWosgGuELaknVUY8O19DpXA2k5WKvbGaod8FQICQlWKAxU0TKeSl7aTQfJbM-sg"></iframe>
    <div id="fb-root" class=" fb_reset">
        <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
            <div></div>
        </div>
    </div>
    <script type="text/javascript" id="">
        window.uetq = window.uetq || [];
        window.uetq.push("event", "", {
            ecomm_prodid: google_tag_manager["rm"]["30884794"](169),
            ecomm_pagetype: google_tag_manager["rm"]["30884794"](170)
        });
    </script>
</body><iframe id="DWmoqn1B9CeACC5W" style="display: none;"></iframe>
<div style="display: none;"></div>

</html>