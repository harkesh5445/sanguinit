 <?php
if (!empty($_POST)) {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    
    $body = "Name: $name<br>
             Email: $email<br>
             Phone: $phone<br>
             Company: $company<br>";
    
    $to = "info@sanguineit.com";
    $subject = "SanguineDev let us help";
    $txt = $body;
    $headers = "From:  info@sanguineit.com" . "\r\n" .
               "Content-type: text/html;charset=UTF-8" . "\r\n";
    
    mail($to, $subject, $txt, $headers);
    header("Location: http://sanguineit.com/landing/thankyou.php");
    exit(); 
    
}
?>


    
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="pingback" href="https://www.thecreativeworks.com.au/xmlrpc.php">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- Bootstrap 4.5.2 CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- Slick 1.8.1 jQuery plugin CSS (Sliders) -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <!-- Fancybox 3 jQuery plugin CSS (Open images and video in popup) -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
        <!-- AOS 2.3.4 jQuery plugin CSS (Animations) -->
        <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <!-- Startup CSS (Styles for all blocks) - Remove ".min" if you would edit a css code -->
        <link href="https://www.thecreativeworks.com.au/wp-content/themes/tcw/dist/css/landing.css" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <link rel="pingback" href="https://www.thecreativeworks.com.au/xmlrpc.php">
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-574G8D3');</script>
        <!-- End Google Tag Manager -->
        <script type="text/javascript">
            var _ss = _ss || [];
            _ss.push(['_setDomain', 'https://koi-3QN85GG8KQ.marketingautomation.services/net']);
            _ss.push(['_setAccount', 'KOI-3SPENBPVHE']);
            _ss.push(['_trackPageView']);
            (function() {
                var ss = document.createElement('script');
                ss.type = 'text/javascript'; ss.async = true;


                ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QN85GG8KQ.marketingautomation.services/client/ss.js?ver=1.1.1';
                var scr = document.getElementsByTagName('script')[0];
                scr.parentNode.insertBefore(ss, scr);
            })();
        </script>

	<!-- This site is optimized with the Yoast SEO plugin v22.2 - https://yoast.com/wordpress/plugins/seo/ -->
	<link rel="canonical" href="https://www.thecreativeworks.com.au/campaigns/website-development/" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://www.thecreativeworks.com.au/campaigns/website-development/","url":"https://www.thecreativeworks.com.au/campaigns/website-development/","name":"Website Development - The Creative Works","isPartOf":{"@id":"https://www.thecreativeworks.com.au/#website"},"primaryImageOfPage":{"@id":"https://www.thecreativeworks.com.au/campaigns/website-development/#primaryimage"},"image":{"@id":"https://www.thecreativeworks.com.au/campaigns/website-development/#primaryimage"},"thumbnailUrl":"https://www.thecreativeworks.com.au/wp-content/uploads/2023/04/av.svg","datePublished":"2023-06-21T01:09:58+00:00","dateModified":"2023-07-16T23:37:57+00:00","description":"Boost your online presense with a cutting-edge website. Engage users, increase conversions, and improve search engine visibility.","breadcrumb":{"@id":"https://www.thecreativeworks.com.au/campaigns/website-development/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://www.thecreativeworks.com.au/campaigns/website-development/"]}]},{"@type":"ImageObject","inLanguage":"en-US","@id":"https://www.thecreativeworks.com.au/campaigns/website-development/#primaryimage","url":"https://www.thecreativeworks.com.au/wp-content/uploads/2023/04/av.svg","contentUrl":"https://www.thecreativeworks.com.au/wp-content/uploads/2023/04/av.svg","width":115,"height":68,"caption":"av"},{"@type":"BreadcrumbList","@id":"https://www.thecreativeworks.com.au/campaigns/website-development/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.thecreativeworks.com.au/"},{"@type":"ListItem","position":2,"name":"Website Development"}]},{"@type":"WebSite","@id":"https://www.thecreativeworks.com.au/#website","url":"https://www.thecreativeworks.com.au/","name":"The Creative Works","description":"","publisher":{"@id":"https://www.thecreativeworks.com.au/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.thecreativeworks.com.au/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"Organization","@id":"https://www.thecreativeworks.com.au/#organization","name":"The Creative Works","url":"https://www.thecreativeworks.com.au/","logo":{"@type":"ImageObject","inLanguage":"en-US","@id":"https://www.thecreativeworks.com.au/#/schema/logo/image/","url":"https://www.thecreativeworks.com.au/wp-content/uploads/2022/08/logo.svg","contentUrl":"https://www.thecreativeworks.com.au/wp-content/uploads/2022/08/logo.svg","width":300,"height":20,"caption":"The Creative Works"},"image":{"@id":"https://www.thecreativeworks.com.au/#/schema/logo/image/"}}]}</script>
	<!-- / Yoast SEO plugin. -->


<link rel='dns-prefetch' href='//www.thecreativeworks.com.au' />
<link rel="alternate" type="application/rss+xml" title="The Creative Works &raquo; Feed" href="https://www.thecreativeworks.com.au/feed/" />
<link rel="alternate" type="application/rss+xml" title="The Creative Works &raquo; Comments Feed" href="https://www.thecreativeworks.com.au/comments/feed/" />
<script type="text/javascript">
/* <![CDATA[ */
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/www.thecreativeworks.com.au\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.3"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff","\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
/* ]]> */
</script>
<style id='wp-emoji-styles-inline-css' type='text/css'>

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
<link rel='stylesheet' id='wp-block-library-css' href='https://www.thecreativeworks.com.au/wp-includes/css/dist/block-library/style.min.css?ver=6.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='eedee-gutenslider-init-css' href='https://www.thecreativeworks.com.au/wp-content/plugins/gutenslider/build/gutenslider-init.css?ver=1709855568' type='text/css' media='all' />
<link rel='stylesheet' id='block-bbc5c4e1e54fa0179cee3386ebfb98c1-css' href='https://www.thecreativeworks.com.au/wp-content/themes/tcw/dist/css/landing.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='ultimate_blocks-cgb-style-css-css' href='https://www.thecreativeworks.com.au/wp-content/plugins/ultimate-blocks/dist/blocks.style.build.css?ver=65eb175c4bc49' type='text/css' media='all' />
<link rel='stylesheet' id='coblocks-frontend-css' href='https://www.thecreativeworks.com.au/wp-content/plugins/coblocks/dist/style-coblocks-1.css?ver=3.1.6' type='text/css' media='all' />
<link rel='stylesheet' id='coblocks-extensions-css' href='https://www.thecreativeworks.com.au/wp-content/plugins/coblocks/dist/style-coblocks-extensions.css?ver=3.1.6' type='text/css' media='all' />
<link rel='stylesheet' id='coblocks-animation-css' href='https://www.thecreativeworks.com.au/wp-content/plugins/coblocks/dist/style-coblocks-animation.css?ver=d9b2b27566e6a2a85d1b' type='text/css' media='all' />
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='ub-extension-style-css-css' href='https://www.thecreativeworks.com.au/wp-content/plugins/ultimate-blocks/src/extensions/style.css?ver=6.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css' href='https://www.thecreativeworks.com.au/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.9' type='text/css' media='all' />
<link rel='stylesheet' id='wpcf7-redirect-script-frontend-css' href='https://www.thecreativeworks.com.au/wp-content/plugins/wpcf7-redirect/build/css/wpcf7-redirect-frontend.min.css?ver=1.1' type='text/css' media='all' />
<link rel='stylesheet' id='wp-components-css' href='https://www.thecreativeworks.com.au/wp-includes/css/dist/components/style.min.css?ver=6.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='godaddy-styles-css' href='https://www.thecreativeworks.com.au/wp-content/plugins/coblocks/includes/Dependencies/GoDaddy/Styles/build/latest.css?ver=2.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='kadence-blocks-tabs-css' href='https://www.thecreativeworks.com.au/wp-content/plugins/kadence-blocks/dist/style-blocks-tabs.css?ver=3.2.26' type='text/css' media='all' />
<link rel='stylesheet' id='kadence-blocks-spacer-css' href='https://www.thecreativeworks.com.au/wp-content/plugins/kadence-blocks/dist/style-blocks-spacer.css?ver=3.2.26' type='text/css' media='all' />
<link rel='stylesheet' id='kadence-blocks-accordion-css' href='https://www.thecreativeworks.com.au/wp-content/plugins/kadence-blocks/dist/style-blocks-accordion.css?ver=3.2.26' type='text/css' media='all' />
<style id='kadence-blocks-global-variables-inline-css' type='text/css'>
:root {--global-kb-font-size-sm:clamp(0.8rem, 0.73rem + 0.217vw, 0.9rem);--global-kb-font-size-md:clamp(1.1rem, 0.995rem + 0.326vw, 1.25rem);--global-kb-font-size-lg:clamp(1.75rem, 1.576rem + 0.543vw, 2rem);--global-kb-font-size-xl:clamp(2.25rem, 1.728rem + 1.63vw, 3rem);--global-kb-font-size-xxl:clamp(2.5rem, 1.456rem + 3.26vw, 4rem);--global-kb-font-size-xxxl:clamp(2.75rem, 0.489rem + 7.065vw, 6rem);}:root {--global-palette1: #3182CE;--global-palette2: #2B6CB0;--global-palette3: #1A202C;--global-palette4: #2D3748;--global-palette5: #4A5568;--global-palette6: #718096;--global-palette7: #EDF2F7;--global-palette8: #F7FAFC;--global-palette9: #ffffff;}
</style>
<style id='kadence_blocks_css-inline-css' type='text/css'>
.kt-tabs-id_44d7d6-5d > .kt-tabs-content-wrap > .wp-block-kadence-tab{border-top:3px solid #0a6689;border-right:0px solid #0a6689;border-bottom:0px solid #0a6689;border-left:0px solid #0a6689;background:var(u002du002dglobal-palette9, #ffffff);}.wp-block-kadence-tabs .kt-tabs-id_44d7d6-5d > .kt-tabs-title-list li{margin-top:0px;margin-right:8px;margin-bottom:0px;margin-left:0px;}.wp-block-kadence-tabs .kt-tabs-id_44d7d6-5d > .kt-tabs-title-list li:last-child{margin-right:0px;}.wp-block-kadence-tabs .kt-tabs-id_44d7d6-5d > .kt-tabs-title-list li .kt-tab-title, .wp-block-kadence-tabs .kt-tabs-id_44d7d6-5d > .kt-tabs-content-wrap > .kt-tabs-accordion-title .kt-tab-title{font-size:1.1em;line-height:1.4em;border-top-width:2px;border-right-width:2px;border-bottom-width:2px;border-left-width:2px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-right-radius:20px;border-bottom-left-radius:20px;padding-top:8px;padding-right:20px;padding-bottom:8px;padding-left:20px;border-color:var(u002du002dglobal-palette7, #eeeeee);color:#000000;}.wp-block-kadence-tabs .kt-tabs-id_44d7d6-5d > .kt-tabs-content-wrap > .kt-tabs-accordion-title .kt-tab-title{margin-top:0px;margin-right:8px;margin-bottom:0px;margin-left:0px;}.wp-block-kadence-tabs .kt-tabs-id_44d7d6-5d > .kt-tabs-title-list li .kt-tab-title:hover, .wp-block-kadence-tabs .kt-tabs-id_44d7d6-5d > .kt-tabs-content-wrap > .kt-tabs-accordion-title .kt-tab-title:hover{border-color:var(u002du002dglobal-palette7, #eeeeee);color:var(u002du002dglobal-palette3, #1A202C);background:var(u002du002dglobal-palette8, #F7FAFC);}.wp-block-kadence-tabs .kt-tabs-id_44d7d6-5d > .kt-tabs-title-list li.kt-tab-title-active .kt-tab-title, .wp-block-kadence-tabs .kt-tabs-id_44d7d6-5d > .kt-tabs-content-wrap > .kt-tabs-accordion-title.kt-tab-title-active .kt-tab-title{border-color:#0693e3;color:#000000;background:rgba(142,209,252,0.15);}@media all and (max-width: 1024px){.kt-tabs-id_44d7d6-5d > .kt-tabs-content-wrap > .wp-block-kadence-tab{border-top:3px solid #0a6689;border-right:0px solid #0a6689;border-bottom:0px solid #0a6689;border-left:0px solid #0a6689;}}@media all and (max-width: 767px){.kt-tabs-id_44d7d6-5d > .kt-tabs-content-wrap > .wp-block-kadence-tab{border-top:3px solid #0a6689;border-right:0px solid #0a6689;border-bottom:0px solid #0a6689;border-left:0px solid #0a6689;}}.wp-block-kadence-spacer.kt-block-spacer-_0c3d96-e7 .kt-block-spacer{height:80px;}.wp-block-kadence-spacer.kt-block-spacer-_0c3d96-e7 .kt-divider{border-top-color:#ffffff;width:80%;}.kt-accordion-id_ad03c3-3f .kt-accordion-panel-inner{border-top:0px solid transparent;border-right:1px solid transparent;border-bottom:1px solid transparent;border-left:1px solid transparent;background:#ffffff;}.kt-accordion-id_ad03c3-3f .wp-block-kadence-pane .kt-accordion-header-wrap .kt-blocks-accordion-header{border-top:1px solid #eeeeee;border-right:1px solid #eeeeee;border-bottom:1px solid #eeeeee;border-left:2px solid #eeeeee;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-right-radius:0px;border-bottom-left-radius:0px;background:#ffffff;color:#444444;padding-top:14px;padding-right:16px;padding-bottom:14px;padding-left:16px;}.kt-accordion-wrap.kt-accordion-id_ad03c3-3f > .kt-accordion-inner-wrap > .kt-accordion-pane > .kt-accordion-header-wrap{margin-top:10px;}.single-content .wp-block-kadence-pane>h2:first-child,
			.single-content .wp-block-kadence-pane>h3:first-child,
			.single-content .wp-block-kadence-pane>h4:first-child,
			.single-content .wp-block-kadence-pane>h5:first-child,
			.single-content .wp-block-kadence-pane>h6:first-child{margin-top:10px;}.kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basiccircle ):not( .kt-accodion-icon-style-xclosecircle ):not( .kt-accodion-icon-style-arrowcircle ) .kt-blocks-accordion-icon-trigger:after, .kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basiccircle ):not( .kt-accodion-icon-style-xclosecircle ):not( .kt-accodion-icon-style-arrowcircle ) .kt-blocks-accordion-icon-trigger:before{background:#444444;}.kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basic ):not( .kt-accodion-icon-style-xclose ):not( .kt-accodion-icon-style-arrow ) .kt-blocks-accordion-icon-trigger{background:#444444;}.kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basic ):not( .kt-accodion-icon-style-xclose ):not( .kt-accodion-icon-style-arrow ) .kt-blocks-accordion-icon-trigger:after, .kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basic ):not( .kt-accodion-icon-style-xclose ):not( .kt-accodion-icon-style-arrow ) .kt-blocks-accordion-icon-trigger:before{background:#ffffff;}.kt-accordion-id_ad03c3-3f .kt-accordion-header-wrap .kt-blocks-accordion-header:hover, body:not(.hide-focus-outline) .kt-accordion-id_ad03c3-3f .kt-accordion-header-wrap .kt-blocks-accordion-header:focus{color:#444444;background:#ffffff;border-top-color:#d4d4d4;border-top-style:solid;border-right-color:#d4d4d4;border-right-style:solid;border-bottom-color:#d4d4d4;border-bottom-style:solid;border-left-color:#d4d4d4;border-left-style:solid;}.kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basiccircle ):not( .kt-accodion-icon-style-xclosecircle ):not( .kt-accodion-icon-style-arrowcircle ) .kt-blocks-accordion-header:hover .kt-blocks-accordion-icon-trigger:after, .kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basiccircle ):not( .kt-accodion-icon-style-xclosecircle ):not( .kt-accodion-icon-style-arrowcircle ) .kt-blocks-accordion-header:hover .kt-blocks-accordion-icon-trigger:before, body:not(.hide-focus-outline) .kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basiccircle ):not( .kt-accodion-icon-style-xclosecircle ):not( .kt-accodion-icon-style-arrowcircle ) .kt-blocks-accordion-header:focus .kt-blocks-accordion-icon-trigger:after, body:not(.hide-focus-outline) .kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basiccircle ):not( .kt-accodion-icon-style-xclosecircle ):not( .kt-accodion-icon-style-arrowcircle ) .kt-blocks-accordion-header:focus .kt-blocks-accordion-icon-trigger:before{background:#444444;}.kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basic ):not( .kt-accodion-icon-style-xclose ):not( .kt-accodion-icon-style-arrow ) .kt-blocks-accordion-header:hover .kt-blocks-accordion-icon-trigger, body:not(.hide-focus-outline) .kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basic ):not( .kt-accodion-icon-style-xclose ):not( .kt-accodion-icon-style-arrow ) .kt-blocks-accordion-header:focus .kt-blocks-accordion-icon-trigger{background:#444444;}.kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basic ):not( .kt-accodion-icon-style-xclose ):not( .kt-accodion-icon-style-arrow ) .kt-blocks-accordion-header:hover .kt-blocks-accordion-icon-trigger:after, .kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basic ):not( .kt-accodion-icon-style-xclose ):not( .kt-accodion-icon-style-arrow ) .kt-blocks-accordion-header:hover .kt-blocks-accordion-icon-trigger:before, body:not(.hide-focus-outline) .kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basic ):not( .kt-accodion-icon-style-xclose ):not( .kt-accodion-icon-style-arrow ) .kt-blocks-accordion-header:focus .kt-blocks-accordion-icon-trigger:after, body:not(.hide-focus-outline) .kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basic ):not( .kt-accodion-icon-style-xclose ):not( .kt-accodion-icon-style-arrow ) .kt-blocks-accordion-header:focus .kt-blocks-accordion-icon-trigger:before{background:#ffffff;}.kt-accordion-id_ad03c3-3f .kt-accordion-header-wrap .kt-blocks-accordion-header.kt-accordion-panel-active{color:#444444;background:#ffffff;border-top-color:#eeeeee;border-top-style:solid;border-right-color:#eeeeee;border-right-style:solid;border-bottom-color:#eeeeee;border-bottom-style:solid;border-left-color:#0e9cd1;border-left-style:solid;}.kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basiccircle ):not( .kt-accodion-icon-style-xclosecircle ):not( .kt-accodion-icon-style-arrowcircle ) .kt-blocks-accordion-header.kt-accordion-panel-active .kt-blocks-accordion-icon-trigger:after, .kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basiccircle ):not( .kt-accodion-icon-style-xclosecircle ):not( .kt-accodion-icon-style-arrowcircle ) .kt-blocks-accordion-header.kt-accordion-panel-active .kt-blocks-accordion-icon-trigger:before{background:#444444;}.kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basic ):not( .kt-accodion-icon-style-xclose ):not( .kt-accodion-icon-style-arrow ) .kt-blocks-accordion-header.kt-accordion-panel-active .kt-blocks-accordion-icon-trigger{background:#444444;}.kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basic ):not( .kt-accodion-icon-style-xclose ):not( .kt-accodion-icon-style-arrow ) .kt-blocks-accordion-header.kt-accordion-panel-active .kt-blocks-accordion-icon-trigger:after, .kt-accordion-id_ad03c3-3f:not( .kt-accodion-icon-style-basic ):not( .kt-accodion-icon-style-xclose ):not( .kt-accodion-icon-style-arrow ) .kt-blocks-accordion-header.kt-accordion-panel-active .kt-blocks-accordion-icon-trigger:before{background:#ffffff;}@media all and (max-width: 1024px){.kt-accordion-id_ad03c3-3f .kt-accordion-panel-inner{border-top:0px solid transparent;border-right:1px solid transparent;border-bottom:1px solid transparent;border-left:1px solid transparent;}}@media all and (max-width: 1024px){.kt-accordion-id_ad03c3-3f .wp-block-kadence-pane .kt-accordion-header-wrap .kt-blocks-accordion-header{border-top:1px solid #eeeeee;border-right:1px solid #eeeeee;border-bottom:1px solid #eeeeee;border-left:2px solid #eeeeee;}}@media all and (max-width: 1024px){.kt-accordion-id_ad03c3-3f .kt-accordion-header-wrap .kt-blocks-accordion-header:hover, body:not(.hide-focus-outline) .kt-accordion-id_ad03c3-3f .kt-accordion-header-wrap .kt-blocks-accordion-header:focus{border-top-color:#d4d4d4;border-top-style:solid;border-right-color:#d4d4d4;border-right-style:solid;border-bottom-color:#d4d4d4;border-bottom-style:solid;border-left-color:#d4d4d4;border-left-style:solid;}}@media all and (max-width: 1024px){.kt-accordion-id_ad03c3-3f .kt-accordion-header-wrap .kt-blocks-accordion-header.kt-accordion-panel-active{border-top-color:#eeeeee;border-top-style:solid;border-right-color:#eeeeee;border-right-style:solid;border-bottom-color:#eeeeee;border-bottom-style:solid;border-left-color:#0e9cd1;border-left-style:solid;}}@media all and (max-width: 767px){.kt-accordion-id_ad03c3-3f .kt-accordion-panel-inner{border-top:0px solid transparent;border-right:1px solid transparent;border-bottom:1px solid transparent;border-left:1px solid transparent;}.kt-accordion-id_ad03c3-3f .wp-block-kadence-pane .kt-accordion-header-wrap .kt-blocks-accordion-header{border-top:1px solid #eeeeee;border-right:1px solid #eeeeee;border-bottom:1px solid #eeeeee;border-left:2px solid #eeeeee;}.kt-accordion-id_ad03c3-3f .kt-accordion-header-wrap .kt-blocks-accordion-header:hover, body:not(.hide-focus-outline) .kt-accordion-id_ad03c3-3f .kt-accordion-header-wrap .kt-blocks-accordion-header:focus{border-top-color:#d4d4d4;border-top-style:solid;border-right-color:#d4d4d4;border-right-style:solid;border-bottom-color:#d4d4d4;border-bottom-style:solid;border-left-color:#d4d4d4;border-left-style:solid;}.kt-accordion-id_ad03c3-3f .kt-accordion-header-wrap .kt-blocks-accordion-header.kt-accordion-panel-active{border-top-color:#eeeeee;border-top-style:solid;border-right-color:#eeeeee;border-right-style:solid;border-bottom-color:#eeeeee;border-bottom-style:solid;border-left-color:#0e9cd1;border-left-style:solid;}}
</style>
<script type="text/javascript" src="https://www.thecreativeworks.com.au/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="https://www.thecreativeworks.com.au/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<link rel="https://api.w.org/" href="https://www.thecreativeworks.com.au/wp-json/" /><link rel="alternate" type="application/json" href="https://www.thecreativeworks.com.au/wp-json/wp/v2/tcwlanding/2628" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.thecreativeworks.com.au/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.4.3" />
<link rel='shortlink' href='https://www.thecreativeworks.com.au/?p=2628' />
<link rel="alternate" type="application/json+oembed" href="https://www.thecreativeworks.com.au/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.thecreativeworks.com.au%2Fcampaigns%2Fwebsite-development%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://www.thecreativeworks.com.au/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.thecreativeworks.com.au%2Fcampaigns%2Fwebsite-development%2F&#038;format=xml" />

	<style>#ub-content-toggle-34ede2aa-2072-4899-9fa5-8363621b8e1e{ }#ub-content-toggle-34ede2aa-2072-4899-9fa5-8363621b8e1e .wp-block-ub-content-toggle-accordion{ border-color: #f1f1f1; } #ub-content-toggle-34ede2aa-2072-4899-9fa5-8363621b8e1e .wp-block-ub-content-toggle-accordion-title-wrap{ background-color: #f1f1f1; } #ub-content-toggle-34ede2aa-2072-4899-9fa5-8363621b8e1e .wp-block-ub-content-toggle-accordion-title{ color: #000000; } #ub-content-toggle-34ede2aa-2072-4899-9fa5-8363621b8e1e .wp-block-ub-content-toggle-accordion-toggle-wrap{ color: #000000; } .ub-content-toggle-title-34ede2aa-2072-4899-9fa5-8363621b8e1e > a{ color: inherit; }</style>

	
		<style type="text/css" id="wp-custom-css">
        [data-aos=fade-down] {
transform: none !important;
}
.wp-block-column.is-layout-flow.wp-block-column-is-layout-flow {
width: 50%;
}
h2.small.pb-3.aos-init.aos-animate {
color: black;
}
h2.mb-30.small.text-adaptive.aos-init.aos-animate {
color: #ffffff;
}
h2.small.aos-init.aos-animate {
color: #ffffff;
}
form.wpcf7-form.init h2 {
color: black !important;
font-size: 42px !important;
font-weight: 700 !important;
}
			.wpcf7 form.sent .wpcf7-response-output {
    border-color: transparent;
    padding: 0;
    margin: 0;
    color: #ffffff;
}

.wp-block-tcw-industry-experience img {
    max-width: 100%;
    height: 200px;
    object-fit: contain;
    display: flex;
    align-items: center;
    justify-content: center;
}

.actions-wrapper p{
	margin-bottom: 0;
	display: flex;
	align-items: center;
}
.single-tcwlanding .input {
    border-radius: 0;
    margin-top: 5px;
}

.page-template-default .mw-70 {
    max-width: 100% !important;
}

.social-proof-heading .logos__wrapper img {
    margin: 0px;
	max-width: 100%;
}
.social-proof-heading .logos__wrapper{
	justify-content: space-between;
}

.feature_5 .block {
    border: none !important;
}

@media only screen and (max-width: 991px) {
	.menu{
		    align-items: center;
    justify-content: center;
    display: flex;
    flex-wrap: wrap;
		margin-top: 30px;
	}
	.wp-block-kadence-tabs .kt-tabs-id_44d7d6-5d > .kt-tabs-title-list li {
margin: 10px !important;
}
	
	footer.menu{
		align-items: flex-start !important;
		justify-content: flex-start !important;
		margin-bottom: 20px !important;
	}

}

@media only screen and (max-width: 600px) {
		section.pt-100, section.pt-85, section.pt-120, section.pb-60, section.pb-90, section.pb-100, section.pb-55, section.pt-105, section.pt-70, section.pb-60{
		padding-top: 30px !important;
			padding-bottom: 30px !important;
	}
	.menu.mb-10, .menu.mt-10{
		margin: 15px 0 !important;
	}
	.wp-block-tcw-tcw-testimonials .mb-10{
		margin-bottom: 20px;
	}
}

.actions-wrapper{
	width: 100%;
}

.wpcf7-spinner{
	display: none;
}

.landing-btn{
	width: 100%;
	border-radius: 0 !important;
	border-color: #000000;
	background-color: #000000 !important;
}

.wpcf7-form h2{
	font-size: 30px;
}

.btn{
	height: 100%;
}

.grecaptcha-badge{
	display: none !important;
}

		</style>
		    </head>     


    <body class="tcwlanding-template-default single single-tcwlanding postid-2628 wp-custom-logo">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-574G8D3"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
        
        <!-- Navigation 2 -->
        <nav class="pt-30 pb-30 lh-40 navigation_2 bg-dark">
            <div class="container px-xl-0">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-2 col-lg-3 text-center text-lg-left"><a class="mr-20 link img_link w-350" href="#"> <img alt="Logo" class="img-fluid" data-aos="fade-down" data-aos-delay="0" src="https://sanguinedev.store/images/logo/logo.png"> </a>
                    </div>
                                                    <div class="menu text-md-right" data-aos="fade-down" data-aos-delay="500" id="menu-landing">
                                                    <a class="link mx-15 color-white menu-item menu-item-type-custom menu-item-object-custom menu-item-2518" id="menu-item-2518"  href="http://sanguineit.com/">HOME</a>
                                                    <a class="link mx-15 color-white menu-item menu-item-type-custom menu-item-object-custom menu-item-2518" id="menu-item-2518"  href="#services">SERVICES</a>
<a class="link mx-15 color-white menu-item menu-item-type-custom menu-item-object-custom menu-item-2519" id="menu-item-2519"  href="#our-work">OUR WORK</a>
<a class="link mx-15 color-white menu-item menu-item-type-custom menu-item-object-custom menu-item-2520" id="menu-item-2520"  href="#testimonials">TESTIMONIALS</a>
<a class="link mx-15 color-white menu-item menu-item-type-custom menu-item-object-custom menu-item-2521" id="menu-item-2521"  href="#faqs">FAQ</a>
<a class="link mx-15 color-white menu-item menu-item-type-custom menu-item-object-custom menu-item-2522" id="menu-item-2522"  href="#contact">CONTACT</a>
</div>                                            </div>
                </div>
            </div>
        </nav>
        <main>
            
<section class="wp-block-tcw-landing-hero pt-100 pb-100 form_4 bg-action-1 color-filter-dark-1" style="background-image:url(https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/website-development-hero.jpg)"> <div class="container px-xl-0"> <div class="row align-items-center"> <div class="col-xl-1"> </div> <div class="col-xl-4 col-lg-5 col-md-8 color-white"> <h2 class="mb-30 small text-adaptive" data-aos="fade-down" data-aos-delay="0">HIGH PERFORMING WEBSITES THAT CONVERT &#038; CAPTIVATE</h2> <div class="text-adaptive f-18" data-aos="fade-down" data-aos-delay="250">We specialise in delivering websites that generate more leads and drive business growth</div> </div> <div class="col-lg-1"> </div> <div class="mt-50 mt-lg-0 col-xl-5 col-lg-6 col-md-8"> <div class="bg-light px-50 pt-55 pb-55 radius10">
<div class="wp-block-contact-form-7-contact-form-selector">
<div class="wpcf7 no-js" id="wpcf7-f2516-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="index.php" data-toggle="validator" enctype="multipart/form-data" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init" id="contact-form">
    <div style="display: none;">
        <input type="hidden" name="_wpcf7" value="2516" />
        <input type="hidden" name="_wpcf7_version" value="5.9" />
        <input type="hidden" name="_wpcf7_locale" value="en_US" />
        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2516-o1" />
        <input type="hidden" name="_wpcf7_container_post" value="0" />
        <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
        <input type="hidden" name="_wpcf7_recaptcha_response" value="" />
    </div>
    <div class="row" data-pg-collapsed>
        <div class="col-sm-12">
            <h2 class="mb-30 small text-adaptive aos-init aos-animate" data-aos="fade-down" data-aos-delay="0">Let us help you</h2>
        </div>
    </div>
    <div class="row" data-pg-collapsed>
        <div class="col-sm-12">
            <p>Full Name<br />
                <span class="wpcf7-form-control-wrap" data-name="fullname"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input w-full border-gray focus-action-1 color-heading placeholder-heading" aria-required="true" aria-invalid="false" placeholder="Full name" value="" type="text" name="fullname" /></span>
            </p>
        </div>
    </div>
    <div class="row" data-pg-collapsed>
        <div class="col-sm-6">
            <p>Phone<br />
                <span class="wpcf7-form-control-wrap" data-name="phone"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input w-full border-gray focus-action-1 color-heading placeholder-heading" aria-required="true" aria-invalid="false" placeholder="Phone" value="" type="text" name="phone" /></span>
            </p>
        </div>
        <div class="col-sm-6">
            <p>Company<br />
                <span class="wpcf7-form-control-wrap" data-name="company"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input w-full border-gray focus-action-1 color-heading placeholder-heading" aria-required="true" aria-invalid="false" placeholder="Company" value="" type="text" name="company" /></span>
            </p>
        </div>
    </div>
    <div class="row" data-pg-collapsed>
        <div class="col-sm-12">
            <p>Email<br />
                <span class="wpcf7-form-control-wrap" data-name="email"><input size="40" class="wpcf7-form-control wpcf7-email wpcf7-text wpcf7-validates-as-email input w-full border-gray focus-action-1 color-heading placeholder-heading" aria-invalid="false" placeholder="name@email.com" value="" type="email" name="email" /></span>
            </p>
        </div>
    </div>
    <p class="chk">
        <input class="wpcf7-form-control wpcf7-checkbox" type="checkbox" id="myCheckbox" name="myCheckbox">
        <label for="myCheckbox">I accept to receive SMS notifications from Sanguine Developers</label>
        <span class="chkbosrequr" style="display: none; color:red;">Please fill this</span>
    </p>
    <div class="row justify-content-between align-items-center">
        <div class="col-sm-12 actions-wrapper">
            <p><input class="octhnkmsg wpcf7-form-control wpcf7-submit has-spinner btn landing-btn mt-20 mt-sm-0 action-1 w-full" type="submit" value="Get started" id="submitBtn" /></p>
        </div>
    </div>
        <span class="apav" style="display: none; color:red;">Thanks for your message. We will get back to you soon!!."</span>

   
    <script>
      document.getElementById("contact-form").addEventListener("submit", function(event) {
        var checkbox = document.getElementById("myCheckbox");
        var checkboxRequr = document.querySelector('.chkbosrequr');
        var apavs =  document.querySelector('.apav');
        
        if (!checkbox.checked) {
            event.preventDefault();
            checkboxRequr.style.display = 'block'; 

        } else {
            checkboxRequr.style.display = 'none'; 
            
            window.location.href = 'http://sanguineit.com/landing/thankyou.php';

        }
    });

    </script>
</form>

</div>
</div>
</div> </div> </div> </div> </section>



<section class="wp-block-tcw-social-proof social-proof-heading"> <div class="container px-xl-0"> <div class="row"> <div class="col-md-12"> <div class="social-proof__wrapper"> <div class="social-proof-heading__content"> <div class="social-proof-heading__content__title"> <h3 class="text-left">Who we&#8217;ve partnered with</h3> </div> <div class="social-proof-heading__logos"> <div class="logos__wrapper">
<img decoding="async" width="115" height="68" alt="av" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/04/av.svg" class="wp-block-tcw-logo wp-image-2524"/>



<img decoding="async" width="115" height="68" alt="media" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/04/media.svg" class="wp-block-tcw-logo wp-image-2525"/>



<img decoding="async" width="141" height="68" alt="ss" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/04/ss.svg" class="wp-block-tcw-logo wp-image-2530"/>



<img decoding="async" width="108" height="68" alt="reis" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/04/reis.svg" class="wp-block-tcw-logo wp-image-2529"/>



<img decoding="async" width="115" height="68" alt="ssrv" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/04/ssrv.svg" class="wp-block-tcw-logo wp-image-2528"/>



<img decoding="async" width="67" height="68" alt="vision" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/04/vision.svg" class="wp-block-tcw-logo wp-image-2527"/>



<img decoding="async" width="59" height="68" alt="ywca" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/04/ywca.svg" class="wp-block-tcw-logo wp-image-2526"/>



<img decoding="async" width="65" height="68" alt="epa" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/04/epa.svg" class="wp-block-tcw-logo wp-image-2523"/>
</div> </div> </div> </div> </div> </div> </div> </section>



<section class="wp-block-tcw-featured pt-105 pb-55 text-center featured"> <div class="container px-xl-0"> <div class="row justify-content-center"> <div class="col-lg-10"> <h2 class="text-center f-40 pb-3">HOW WE CAN HELP YOU</h2> </div> </div> <div class="row justify-content-center"> <div class="col-lg-10">
<p>With over 35 years of industry experience, our full-stack agency brings together a talented team of UX specialists, digital designers, product managers, strategists, producers and expert developers. Whether you&#8217;re looking to enhance your existing website, start afresh, build a new online presence, or fortify your website&#8217;s security, we have the expertise to make it happen.</p>
</div> </div>  </div> </section>



<section class="wp-block-tcw-industry-experience pt-105 pb-55 text-center feature_5 bg-action-3"> <div class="container px-xl-0"> <div class="row justify-content-center"> <div class="col-xl-8 col-lg-10 pb-0"> <h2 class="small pb-3" data-aos="fade-down" data-aos-delay="0">WHATEVER YOUR PROBLEM, WE HAVE THE SOLUTION</h2> <div class="color-heading text-adaptive f-18 medium pb-5">Tired of outdated designs, slow loading times or limited functionality? We&#8217;re here to remove those frustrations and increase your online success.</div> </div> </div> <div class="row justify-content-center">
<div class="wp-block-tcw-benefit mb-50 col-xl-4 col-lg-5 col-md-6 col-sm-10 holder" data-aos="fade-down" data-aos-delay="500"> <img decoding="async" width="123" height="124" alt="" class="noradius noradius_bottom radius10 w-full wp-image-2662" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/user-experience-icon.svg"/> <div class="pt-40 pb-45 radius10 block visibile radius14"> <div class="mb-20 title f-24 bold text-left">Enhance the<br>user-experience</div> <div class="color-heading text-adaptive text-left medium">By focusing on user-centric design, we ensure visitors have a smooth and rewarding interaction with your website, leading to higher engagement and conversions.</div> </div> </div>



<div class="wp-block-tcw-benefit mb-50 col-xl-4 col-lg-5 col-md-6 col-sm-10 holder" data-aos="fade-down" data-aos-delay="500"> <img decoding="async" width="123" height="123" alt="seo icon 2" class="noradius noradius_bottom radius10 w-full wp-image-2663" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/seo-icon-2.svg"/> <div class="pt-40 pb-45 radius10 block visibile radius14"> <div class="mb-20 title f-24 bold text-left">Improve search engine visibility</div> <div class="color-heading text-adaptive text-left medium">Our processes are designed with SEO in mind. By optimising your site&#8217;s structure, you’ll rank higher &#8211; attracting more organic traffic and increasing your online presence.</div> </div> </div>



<div class="wp-block-tcw-benefit mb-50 col-xl-4 col-lg-5 col-md-6 col-sm-10 holder" data-aos="fade-down" data-aos-delay="500"> <img decoding="async" width="103" height="123" alt="security icon" class="noradius noradius_bottom radius10 w-full wp-image-2661" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/security-icon.svg"/> <div class="pt-40 pb-45 radius10 block visibile radius14"> <div class="mb-20 title f-24 bold text-left">Enhance your website’s security</div> <div class="color-heading text-adaptive text-left medium">From secure hosting to robust encryption protocols, we prioritise the safeguard of your website and customer data, giving you and your visitors peace of mind.</div> </div> </div>
</div> </div> </section>



<div id="services"></div>



<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>



<section class="wp-block-tcw-section-with-container block-with-container px-50"> <div class="container"> <div class="content-wrapper">
<div class="wp-block-columns is-layout-flex wp-container-core-columns-layout-1 wp-block-columns-is-layout-flex">
<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
<h2 class="wp-block-heading">SOME OF THE SERVICES WE OFFER</h2>
</div>



<div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"><div class="wp-block-ub-content-toggle" id="ub-content-toggle-34ede2aa-2072-4899-9fa5-8363621b8e1e" data-showonlyone="true" data-mobilecollapse="false" data-desktopcollapse="true">
<div class="wp-block-ub-content-toggle-accordion" id="ub-content-toggle-panel-block-">
                <div class="wp-block-ub-content-toggle-accordion-title-wrap"" aria-controls="ub-content-toggle-panel-0-34ede2aa-2072-4899-9fa5-8363621b8e1e" tabindex="0">
                    <p class="wp-block-ub-content-toggle-accordion-title ub-content-toggle-title-34ede2aa-2072-4899-9fa5-8363621b8e1e">Website Development</p><div class="wp-block-ub-content-toggle-accordion-toggle-wrap right"><span class="wp-block-ub-content-toggle-accordion-state-indicator wp-block-ub-chevron-down"></span>
                    </div></div><div role="region" aria-expanded="false" class="wp-block-ub-content-toggle-accordion-content-wrap ub-hide" id="ub-content-toggle-panel-0-34ede2aa-2072-4899-9fa5-8363621b8e1e">

<p>The Creative Works has a highly experienced technical team of UX specialists, digital designers, product managers, strategists, as well as front and back end developers. Delivering highly engaging, best in class, well performing and high converting websites are what we specialise in and deliver regularly for our clients.</p>

</div></div>

<div class="wp-block-ub-content-toggle-accordion" id="ub-content-toggle-panel-block-">
                <div class="wp-block-ub-content-toggle-accordion-title-wrap"" aria-controls="ub-content-toggle-panel-1-34ede2aa-2072-4899-9fa5-8363621b8e1e" tabindex="0">
                    <p class="wp-block-ub-content-toggle-accordion-title ub-content-toggle-title-34ede2aa-2072-4899-9fa5-8363621b8e1e">Content Management Systems</p><div class="wp-block-ub-content-toggle-accordion-toggle-wrap right"><span class="wp-block-ub-content-toggle-accordion-state-indicator wp-block-ub-chevron-down"></span>
                    </div></div><div role="region" aria-expanded="false" class="wp-block-ub-content-toggle-accordion-content-wrap ub-hide" id="ub-content-toggle-panel-1-34ede2aa-2072-4899-9fa5-8363621b8e1e">

<p>We choose the best CMS for your needs. Our in-house developers are experts in Drupal and WordPress but are skilled at setting up Squarespace, Wix or other providers if that is preferred.</p>

</div></div>

<div class="wp-block-ub-content-toggle-accordion" id="ub-content-toggle-panel-block-">
                <div class="wp-block-ub-content-toggle-accordion-title-wrap"" aria-controls="ub-content-toggle-panel-2-34ede2aa-2072-4899-9fa5-8363621b8e1e" tabindex="0">
                    <p class="wp-block-ub-content-toggle-accordion-title ub-content-toggle-title-34ede2aa-2072-4899-9fa5-8363621b8e1e">Custom Product Builds</p><div class="wp-block-ub-content-toggle-accordion-toggle-wrap right"><span class="wp-block-ub-content-toggle-accordion-state-indicator wp-block-ub-chevron-down"></span>
                    </div></div><div role="region" aria-expanded="false" class="wp-block-ub-content-toggle-accordion-content-wrap ub-hide" id="ub-content-toggle-panel-2-34ede2aa-2072-4899-9fa5-8363621b8e1e">

<p>Our Custom Product Development service helps you define, build, and deploy your app precisely as you envisioned it.</p>

</div></div>

<div class="wp-block-ub-content-toggle-accordion" id="ub-content-toggle-panel-block-">
                <div class="wp-block-ub-content-toggle-accordion-title-wrap"" aria-controls="ub-content-toggle-panel-3-34ede2aa-2072-4899-9fa5-8363621b8e1e" tabindex="0">
                    <p class="wp-block-ub-content-toggle-accordion-title ub-content-toggle-title-34ede2aa-2072-4899-9fa5-8363621b8e1e">eCommerce Platforms</p><div class="wp-block-ub-content-toggle-accordion-toggle-wrap right"><span class="wp-block-ub-content-toggle-accordion-state-indicator wp-block-ub-chevron-down"></span>
                    </div></div><div role="region" aria-expanded="false" class="wp-block-ub-content-toggle-accordion-content-wrap ub-hide" id="ub-content-toggle-panel-3-34ede2aa-2072-4899-9fa5-8363621b8e1e">

<p>Everything you need to start selling online.</p>

</div></div>

<div class="wp-block-ub-content-toggle-accordion" id="ub-content-toggle-panel-block-">
                <div class="wp-block-ub-content-toggle-accordion-title-wrap"" aria-controls="ub-content-toggle-panel-4-34ede2aa-2072-4899-9fa5-8363621b8e1e" tabindex="0">
                    <p class="wp-block-ub-content-toggle-accordion-title ub-content-toggle-title-34ede2aa-2072-4899-9fa5-8363621b8e1e">UX Improvements</p><div class="wp-block-ub-content-toggle-accordion-toggle-wrap right"><span class="wp-block-ub-content-toggle-accordion-state-indicator wp-block-ub-chevron-down"></span>
                    </div></div><div role="region" aria-expanded="false" class="wp-block-ub-content-toggle-accordion-content-wrap ub-hide" id="ub-content-toggle-panel-4-34ede2aa-2072-4899-9fa5-8363621b8e1e">

<p>User Experience Design is essential to creating products that provide meaningful and relevant experiences to users. Our team applies their design and strategy skills with your industry insight, to create simple and memorable experiences for your users, members, and customers.</p>

</div></div>

<div class="wp-block-ub-content-toggle-accordion" id="ub-content-toggle-panel-block-">
                <div class="wp-block-ub-content-toggle-accordion-title-wrap"" aria-controls="ub-content-toggle-panel-5-34ede2aa-2072-4899-9fa5-8363621b8e1e" tabindex="0">
                    <p class="wp-block-ub-content-toggle-accordion-title ub-content-toggle-title-34ede2aa-2072-4899-9fa5-8363621b8e1e">App Development</p><div class="wp-block-ub-content-toggle-accordion-toggle-wrap right"><span class="wp-block-ub-content-toggle-accordion-state-indicator wp-block-ub-chevron-down"></span>
                    </div></div><div role="region" aria-expanded="false" class="wp-block-ub-content-toggle-accordion-content-wrap ub-hide" id="ub-content-toggle-panel-5-34ede2aa-2072-4899-9fa5-8363621b8e1e">

<p>We can design and implement native, web, or hybrid software for IOS and Android devices. Every app starts with a strategy and comes with design, development, and the offer of ongoing maintenance to make sure it’s always up-to-date.</p>

</div></div>

<div class="wp-block-ub-content-toggle-accordion" id="ub-content-toggle-panel-block-">
                <div class="wp-block-ub-content-toggle-accordion-title-wrap"" aria-controls="ub-content-toggle-panel-6-34ede2aa-2072-4899-9fa5-8363621b8e1e" tabindex="0">
                    <p class="wp-block-ub-content-toggle-accordion-title ub-content-toggle-title-34ede2aa-2072-4899-9fa5-8363621b8e1e">Platforms &amp; Integrations</p><div class="wp-block-ub-content-toggle-accordion-toggle-wrap right"><span class="wp-block-ub-content-toggle-accordion-state-indicator wp-block-ub-chevron-down"></span>
                    </div></div><div role="region" aria-expanded="false" class="wp-block-ub-content-toggle-accordion-content-wrap ub-hide" id="ub-content-toggle-panel-6-34ede2aa-2072-4899-9fa5-8363621b8e1e">

<p>We can integrate and unite all the technical capabilities, operations, systems, and applications of your business and turn them into one coherent system.</p>

</div></div>
</div></div>
</div>
</div> </div> </section>



<div id="our-work"></div>



<section class="wp-block-tcw-featured pt-105 pb-55 text-center featured"> <div class="container px-xl-0"> <div class="row justify-content-center"> <div class="col-lg-10"> <h2 class="text-center f-40 pb-3">CHECK OUT SOME RECENT SUCCESSES</h2> </div> </div> <div class="row justify-content-center"> <div class="col-lg-10">
<div class="wp-block-kadence-tabs alignnone"><div class="kt-tabs-wrap kt-tabs-id_44d7d6-5d kt-tabs-has-7-tabs kt-active-tab-1 kt-tabs-layout-tabs kt-tabs-tablet-layout-inherit kt-tabs-mobile-layout-inherit kt-tab-alignment-center "><ul class="kt-tabs-title-list"><li id="tab-bluehub" class="kt-title-item kt-title-item-1 kt-tabs-svg-show-always kt-tabs-icon-side-right kt-tab-title-active"><a href="#tab-bluehub" data-tab="1" class="kt-tab-title kt-tab-title-1 "><span class="kt-title-text">BLUE HUB</span></a></li><li id="tab-stayingahead" class="kt-title-item kt-title-item-2 kt-tabs-svg-show-always kt-tabs-icon-side-right kt-tab-title-inactive"><a href="#tab-stayingahead" data-tab="2" class="kt-tab-title kt-tab-title-2 "><span class="kt-title-text">STAYING AHEAD</span></a></li><li id="tab-byda" class="kt-title-item kt-title-item-3 kt-tabs-svg-show-always kt-tabs-icon-side-right kt-tab-title-inactive"><a href="#tab-byda" data-tab="3" class="kt-tab-title kt-tab-title-3 "><span class="kt-title-text">BYDA</span></a></li><li id="tab-buildingfutures" class="kt-title-item kt-title-item-4 kt-tabs-svg-show-always kt-tabs-icon-side-right kt-tab-title-inactive"><a href="#tab-buildingfutures" data-tab="4" class="kt-tab-title kt-tab-title-4 "><span class="kt-title-text">BUILDING FUTURES</span></a></li><li id="tab-ambulancevic" class="kt-title-item kt-title-item-5 kt-tabs-svg-show-always kt-tabs-icon-side-right kt-tab-title-inactive"><a href="#tab-ambulancevic" data-tab="5" class="kt-tab-title kt-tab-title-5 "><span class="kt-title-text">AMBULANCE VIC</span></a></li><li id="tab-amou" class="kt-title-item kt-title-item-6 kt-tabs-svg-show-always kt-tabs-icon-side-right kt-tab-title-inactive"><a href="#tab-amou" data-tab="6" class="kt-tab-title kt-tab-title-6 "><span class="kt-title-text">AMOU</span></a></li><li id="tab-firstsuper" class="kt-title-item kt-title-item-7 kt-tabs-svg-show-always kt-tabs-icon-side-right kt-tab-title-inactive"><a href="#tab-firstsuper" data-tab="7" class="kt-tab-title kt-tab-title-7 "><span class="kt-title-text">FIRST SUPER</span></a></li></ul><div class="kt-tabs-content-wrap">
<div class="wp-block-kadence-tab kt-tab-inner-content kt-inner-tab-1 kt-inner-tab_6c048f-fd"><div class="kt-tab-inner-content-inner">
<figure class="wp-block-image size-full"><img fetchpriority="high" decoding="async" width="908" height="489" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-bluehub-1.jpg" alt="web bluehub 1" class="wp-image-2656" srcset="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-bluehub-1.jpg 908w, https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-bluehub-1-300x162.jpg 300w, https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-bluehub-1-768x414.jpg 768w" sizes="(max-width: 908px) 100vw, 908px" /><figcaption class="wp-element-caption"><a href="https://www.bluehub.org.au/">bluehub.org.au</a></figcaption></figure>
</div></div>



<div class="wp-block-kadence-tab kt-tab-inner-content kt-inner-tab-2 kt-inner-tab_53c27d-97"><div class="kt-tab-inner-content-inner">
<figure class="wp-block-image size-full"><img decoding="async" width="908" height="489" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-stayingahead.jpg" alt="web stayingahead" class="wp-image-2631" srcset="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-stayingahead.jpg 908w, https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-stayingahead-300x162.jpg 300w, https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-stayingahead-768x414.jpg 768w" sizes="(max-width: 908px) 100vw, 908px" /><figcaption class="wp-element-caption"><a href="https://stayingahead.org.au" target="_blank" rel="noreferrer noopener">stayingahead.org.au</a></figcaption></figure>
</div></div>



<div class="wp-block-kadence-tab kt-tab-inner-content kt-inner-tab-3 kt-inner-tab_4eda72-80"><div class="kt-tab-inner-content-inner">
<figure class="wp-block-image size-full"><img decoding="async" width="908" height="489" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-byda.jpg" alt="web byda" class="wp-image-2632" srcset="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-byda.jpg 908w, https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-byda-300x162.jpg 300w, https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-byda-768x414.jpg 768w" sizes="(max-width: 908px) 100vw, 908px" /><figcaption class="wp-element-caption"><a href="https://www.byda.com.au" target="_blank" rel="noreferrer noopener">byda.com.au</a></figcaption></figure>
</div></div>



<div class="wp-block-kadence-tab kt-tab-inner-content kt-inner-tab-4 kt-inner-tab_8d52a0-ca"><div class="kt-tab-inner-content-inner">
<figure class="wp-block-image size-full"><img decoding="async" width="908" height="489" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-buildingfutures.jpg" alt="web buildingfutures" class="wp-image-2633" srcset="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-buildingfutures.jpg 908w, https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-buildingfutures-300x162.jpg 300w, https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-buildingfutures-768x414.jpg 768w" sizes="(max-width: 908px) 100vw, 908px" /><figcaption class="wp-element-caption"><a href="https://womeninconstruction.com.au/">womeninconstruction.com.au</a></figcaption></figure>
</div></div>



<div class="wp-block-kadence-tab kt-tab-inner-content kt-inner-tab-5 kt-inner-tab_e4ae10-64"><div class="kt-tab-inner-content-inner">
<figure class="wp-block-image size-full"><img decoding="async" width="908" height="489" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-ambulancevic.jpg" alt="web ambulancevic" class="wp-image-2629" srcset="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-ambulancevic.jpg 908w, https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-ambulancevic-300x162.jpg 300w, https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-ambulancevic-768x414.jpg 768w" sizes="(max-width: 908px) 100vw, 908px" /><figcaption class="wp-element-caption"><a href="https://www.ambulance.vic.gov.au/">ambulance.vic.gov.au</a></figcaption></figure>
</div></div>



<div class="wp-block-kadence-tab kt-tab-inner-content kt-inner-tab-6 kt-inner-tab_f12f3e-af"><div class="kt-tab-inner-content-inner">
<figure class="wp-block-image size-full"><img decoding="async" width="908" height="489" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-amou.jpg" alt="web amou" class="wp-image-2657" srcset="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-amou.jpg 908w, https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-amou-300x162.jpg 300w, https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-amou-768x414.jpg 768w" sizes="(max-width: 908px) 100vw, 908px" /><figcaption class="wp-element-caption"><a href="https://www.amou.com.au/" target="_blank" rel="noreferrer noopener">amou.com.au</a></figcaption></figure>
</div></div>



<div class="wp-block-kadence-tab kt-tab-inner-content kt-inner-tab-7 kt-inner-tab_e279dd-14"><div class="kt-tab-inner-content-inner">
<figure class="wp-block-image size-full"><img decoding="async" width="908" height="489" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-firstsuper.jpg" alt="web firstsuper" class="wp-image-2658" srcset="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-firstsuper.jpg 908w, https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-firstsuper-300x162.jpg 300w, https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/web-firstsuper-768x414.jpg 768w" sizes="(max-width: 908px) 100vw, 908px" /><figcaption class="wp-element-caption"><a href="https://www.firstsuper.com.au/">firstsuper.com.au</a></figcaption></figure>
</div></div>
</div></div></div>
</div> </div>  </div> </section>



<div class="wp-block-kadence-spacer aligncenter kt-block-spacer-_0c3d96-e7"><div class="kt-block-spacer kt-block-spacer-halign-center"><hr class="kt-divider"/></div></div>



<section class="wp-block-tcw-section-with-container block-with-container px-50"> <div class="container"> <div class="content-wrapper">
<h2 class="wp-block-heading">WHY CHOOSE US?</h2>



<p></p>



<ul>
<li>We use the latest technologies and best practices to deliver websites that make an impact</li>



<li>Our digital designers and developers work seamlessly together to ensure optimal delivery</li>



<li>We’re platform-agnostic&nbsp;</li>



<li>We ensure your website is adaptable, scalable, and future-proof</li>



<li>Our solutions are tailored to deliver measurable results</li>
</ul>



<p></p>
</div> </div> </section>



<div id="testimonials"></div>



<section class="wp-block-tcw-tcw-testimonials pt-120 pb-60 color-white testimonial_5 bg-light"> <div class="container px-xl-0"> <div class="row justify-content-center justify-content-lg-start text-center text-lg-left"> <div class="col-xl-1"> </div> <div class="col-lg-1 mb-10" data-aos="fade-down" data-aos-delay="0"> <img decoding="async" width="467" height="372" alt="AEU logo" class="img-fluid noradius radius_full wp-image-2703" src="images/logo/logo.png" srcset="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/AEU-logo.png 467w, https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/AEU-logo-300x239.png 300w" sizes="(max-width: 467px) 100vw, 467px" /> </div> <div class="mb-50 col-xl-4 col-lg-5 col-md-8 col-sm-10" data-aos="fade-down" data-aos-delay="0"> <div class="text-adaptive color-main f-18">“Creative Works were great to deal with – helping with creative around a range of digital platforms and online advertising. They were professional and patient in understanding our internal processes and limitations while attempting to push us outside our usual comfort zone.” </div> <div class="mt-15 f-14 text-uppercase op-3 color-main bold">TONY MILNEU, AEU</div> </div> <div class="col-lg-1 mb-10" data-aos="fade-down" data-aos-delay="250"> <img decoding="async" width="178" height="89" alt="TWUSUPER logo" class="img-fluid noradius radius_full wp-image-2720" src="https://www.thecreativeworks.com.au/wp-content/uploads/2023/06/TWUSUPER-logo.png"/> </div> <div class="mb-50 col-xl-4 col-lg-5 col-md-8 col-sm-10" data-aos="fade-down" data-aos-delay="250"> <div class="text-adaptive f-18 color-main">“As a client of The Creative Works, I am really thrilled with the strategic and creative work they bring to every project. Recently they completed a few digital projects, and their work is cohesive, powerful and is resonating with our audience.”</div> <div class="mt-15 f-14 text-uppercase op-3 bold sp-10 color-main">TONY BUCKLEY, TWUSUPER</div> </div> <div class="col-xl-1"> </div> </div> </div> </section>



<div id="faqs"></div>



<section class="wp-block-tcw-faq pt-85 pb-90 bg-light content_33"> <div class="container px-xl-0"> <div class="row justify-content-center"> <div class="col-xl-10"> <h2 class="small text-center pb-3" data-aos="fade-down" data-aos-delay="0"> FAQs </h2> <div class="table-responsive-shadow content">
<div class="wp-block-kadence-accordion alignnone"><div class="kt-accordion-wrap kt-accordion-id_ad03c3-3f kt-accordion-has-6-panes kt-active-pane-0 kt-accordion-block kt-pane-header-alignment-left kt-accodion-icon-style-arrow kt-accodion-icon-side-right" style="max-width:none"><div class="kt-accordion-inner-wrap" data-allow-multiple-open="false" data-start-open="0">
<div class="wp-block-kadence-pane kt-accordion-pane kt-accordion-pane-1 kt-pane_7b9626-35"><div class="kt-accordion-header-wrap"><button class="kt-blocks-accordion-header kt-acccordion-button-label-show"><span class="kt-blocks-accordion-title-wrap"><span class="kt-blocks-accordion-title"><strong>How long does it take to develop a website?</strong></span></span><span class="kt-blocks-accordion-icon-trigger"></span></button></div><div class="kt-accordion-panel kt-accordion-panel-hidden"><div class="kt-accordion-panel-inner">
<p>The timeline for website development can vary depending on the complexity and scope of the project. After discussing your requirements, we will provide you with a tailored timeline outlining each phase of the development process.</p>
</div></div></div>



<div class="wp-block-kadence-pane kt-accordion-pane kt-accordion-pane-2 kt-pane_d763f0-27"><div class="kt-accordion-header-wrap"><button class="kt-blocks-accordion-header kt-acccordion-button-label-show"><span class="kt-blocks-accordion-title-wrap"><span class="kt-blocks-accordion-title"><strong>Can you redesign and improve my existing website?</strong></span></span><span class="kt-blocks-accordion-icon-trigger"></span></button></div><div class="kt-accordion-panel kt-accordion-panel-hidden"><div class="kt-accordion-panel-inner">
<p>Absolutely! We specialise in enhancing existing websites. Our team will assess your current website, identify areas for improvement, and work closely with you to implement a redesign that aligns with your goals and improves the user experience.</p>
</div></div></div>



<div class="wp-block-kadence-pane kt-accordion-pane kt-accordion-pane-3 kt-pane_7e7146-3a"><div class="kt-accordion-header-wrap"><button class="kt-blocks-accordion-header kt-acccordion-button-label-show"><span class="kt-blocks-accordion-title-wrap"><span class="kt-blocks-accordion-title"><strong>Will my website be mobile-friendly and responsive?</strong></span></span><span class="kt-blocks-accordion-icon-trigger"></span></button></div><div class="kt-accordion-panel kt-accordion-panel-hidden"><div class="kt-accordion-panel-inner">
<p>Yes! We prioritise responsive design, ensuring that your website looks and functions seamlessly across various devices and screen sizes. This approach guarantees an optimal user experience and helps you reach a wider audience.</p>
</div></div></div>



<div class="wp-block-kadence-pane kt-accordion-pane kt-accordion-pane-4 kt-pane_7d0cc3-d3"><div class="kt-accordion-header-wrap"><button class="kt-blocks-accordion-header kt-acccordion-button-label-show"><span class="kt-blocks-accordion-title-wrap"><span class="kt-blocks-accordion-title"><strong>Can you integrate third-party tools or platforms into my website?</strong></span></span><span class="kt-blocks-accordion-icon-trigger"></span></button></div><div class="kt-accordion-panel kt-accordion-panel-hidden"><div class="kt-accordion-panel-inner">
<p>Certainly! We have expertise in integrating various third-party tools, such as payment gateways, customer relationship management (CRM) systems, and email marketing platforms. We ensure smooth integration to enhance the functionality and capabilities of your website.</p>
</div></div></div>



<div class="wp-block-kadence-pane kt-accordion-pane kt-accordion-pane-5 kt-pane_4e10ff-ec"><div class="kt-accordion-header-wrap"><button class="kt-blocks-accordion-header kt-acccordion-button-label-show"><span class="kt-blocks-accordion-title-wrap"><span class="kt-blocks-accordion-title"><strong>Do you provide website maintenance and support after the launch?</strong></span></span><span class="kt-blocks-accordion-icon-trigger"></span></button></div><div class="kt-accordion-panel kt-accordion-panel-hidden"><div class="kt-accordion-panel-inner">
<p>Yes, we offer ongoing website maintenance and support services. We understand the importance of keeping your website updated, secure, and performing optimally. Our team is here to provide technical assistance, regular updates, and proactive monitoring to ensure your website remains in top shape.</p>
</div></div></div>



<div class="wp-block-kadence-pane kt-accordion-pane kt-accordion-pane-6 kt-pane_c69db2-2b"><div class="kt-accordion-header-wrap"><button class="kt-blocks-accordion-header kt-acccordion-button-label-show"><span class="kt-blocks-accordion-title-wrap"><span class="kt-blocks-accordion-title"><strong>Will my website be optimised for search engines?</strong></span></span><span class="kt-blocks-accordion-icon-trigger"></span></button></div><div class="kt-accordion-panel kt-accordion-panel-hidden"><div class="kt-accordion-panel-inner">
<p>Absolutely! We implement industry-standard SEO practices during the website development process. This includes optimising meta tags, using relevant keywords, and ensuring proper site structure to improve search engine visibility and increase organic traffic to your website.</p>
</div></div></div>
</div></div></div>
</div> </div> </div> </div> </section>



<div id="contact"></div>



<section class="wp-block-tcw-get-touch pt-100 pb-100 bg-dark contact_4 color-filter-dark-7"> <div class="container px-xl-0"> <div class="row justify-content-center justify-content-lg-between align-items-center"> <div class="col-xl-1"> </div> <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 color-white"> <h2 class="small" data-aos="fade-down" data-aos-delay="0">TIME TO SUPERCHARGE YOUR WEBSITE?</h2> <div class="pt-10 pb-20 f-22 text-adaptive" data-aos="fade-down" data-aos-delay="250"> </div> <div data-aos="fade-down" data-aos-delay="500"> <a class="link color-white d-flex align-items-baseline" href="tel:+(469) 444 0067|"> <i class="fas fa-phone fa-flip-horizontal w-30 flex-shrink-0 f-14 text-right"> </i> <div class="text-adaptive"> (469) 444 0067| </div> </a> <a class="link color-white d-flex align-items-baseline" href="mailto:Info@SanguineIT.com"> <i class="fas fa-envelope w-30 flex-shrink-0"> </i> <div class="text-adaptive"> Info@SanguineIT.com </div> </a> </div> </div> <div class="col-xl-5 col-lg-6 col-md-8 mt-50 mt-lg-0 bg-light px-50 pt-55 pb-55 radius10" data-aos="fade-down" data-aos-delay="750">
<div class="wp-block-contact-form-7-contact-form-selector">
<div class="wpcf7 no-js" id="wpcf7-f2516-o2" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="index.php" data-toggle="validator" enctype="multipart/form-data" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init" id="contact-form">
    <div style="display: none;">
        <input type="hidden" name="_wpcf7" value="2516" />
        <input type="hidden" name="_wpcf7_version" value="5.9" />
        <input type="hidden" name="_wpcf7_locale" value="en_US" />
        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2516-o1" />
        <input type="hidden" name="_wpcf7_container_post" value="0" />
        <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
        <input type="hidden" name="_wpcf7_recaptcha_response" value="" />
    </div>
    <div class="row" data-pg-collapsed>
        <div class="col-sm-12">
            <h2 class="mb-30 small text-adaptive aos-init aos-animate" data-aos="fade-down" data-aos-delay="0">Let us help you</h2>
        </div>
    </div>
    <div class="row" data-pg-collapsed>
        <div class="col-sm-12">
            <p>Full Name<br />
                <span class="wpcf7-form-control-wrap" data-name="fullname"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input w-full border-gray focus-action-1 color-heading placeholder-heading" aria-required="true" aria-invalid="false" placeholder="Full name" value="" type="text" name="fullname" /></span>
            </p>
        </div>
    </div>
    <div class="row" data-pg-collapsed>
        <div class="col-sm-6">
            <p>Phone<br />
                <span class="wpcf7-form-control-wrap" data-name="phone"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input w-full border-gray focus-action-1 color-heading placeholder-heading" aria-required="true" aria-invalid="false" placeholder="Phone" value="" type="text" name="phone" /></span>
            </p>
        </div>
        <div class="col-sm-6">
            <p>Company<br />
                <span class="wpcf7-form-control-wrap" data-name="company"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input w-full border-gray focus-action-1 color-heading placeholder-heading" aria-required="true" aria-invalid="false" placeholder="Company" value="" type="text" name="company" /></span>
            </p>
        </div>
    </div>
    <div class="row" data-pg-collapsed>
        <div class="col-sm-12">
            <p>Email<br />
                <span class="wpcf7-form-control-wrap" data-name="email"><input size="40" class="wpcf7-form-control wpcf7-email wpcf7-text wpcf7-validates-as-email input w-full border-gray focus-action-1 color-heading placeholder-heading" aria-invalid="false" placeholder="name@email.com" value="" type="email" name="email" /></span>
            </p>
        </div>
    </div>
    <p class="chk">
        <input class="wpcf7-form-control wpcf7-checkbox" type="checkbox" id="myCheckbox" name="myCheckbox">
        <label for="myCheckbox">I accept to receive SMS notifications from Sanguine Developers</label>
        <span class="chkbosrequr" style="display: none; color:red;">Please fill this</span>
    </p>
    <div class="row justify-content-between align-items-center">
        <div class="col-sm-12 actions-wrapper">
            <p><input class="octhnkmsg wpcf7-form-control wpcf7-submit has-spinner btn landing-btn mt-20 mt-sm-0 action-1 w-full" type="submit" value="Get started" id="submitBtn" /></p>
        </div>
    </div>
        <span class="apav" style="display: none; color:red;">Thanks for your message. We will get back to you soon!!."</span>

   
    <script>
      document.getElementById("contact-form").addEventListener("submit", function(event) {
        var checkbox = document.getElementById("myCheckbox");
        var checkboxRequr = document.querySelector('.chkbosrequr');
        var apavs =  document.querySelector('.apav');
        
        if (!checkbox.checked) {
            event.preventDefault();
            checkboxRequr.style.display = 'block'; 

        } else {
            checkboxRequr.style.display = 'none'; 
            apavs.style.display = 'block'; 
        }
    });

    </script>
</form>
</div>
</div>
</div> <div class="col-xl-1"> </div> </div> </div> </section>
<footer class="pt-70 pb-60 bg-light footer_4">
            <div class="container px-xl-0">
                <div class="row align-items-center">
                    <div class="col-xl-2 order-0"><a class="link img_link" href="#"> <img alt="TCW Logo" src="https://sanguinedev.store/images/logo/logo_black.png"> </a>
                    </div>
                    
                                            <div class="menu col-xl-7 links mb-10 mt-10 my-xl-0 order-1 order-xl-0 text-xl-right aos-init aos-animate" data-aos="fade-down" data-aos-delay="500" id="menu-landing-1"><a class="link color-main mr-30 menu-item menu-item-type-custom menu-item-object-custom menu-item-2518" id="menu-item-2-2518" href="#services">SERVICES</a>
<a class="link color-main mr-30 menu-item menu-item-type-custom menu-item-object-custom menu-item-2519" id="menu-item-2-2519" href="#our-work">OUR WORK</a>
<a class="link color-main mr-30 menu-item menu-item-type-custom menu-item-object-custom menu-item-2520" id="menu-item-2-2520" href="#testimonials">TESTIMONIALS</a>
<a class="link color-main mr-30 menu-item menu-item-type-custom menu-item-object-custom menu-item-2521" id="menu-item-2-2521" href="#faqs">FAQ</a>
<a class="link color-main mr-30 menu-item menu-item-type-custom menu-item-object-custom menu-item-2522" id="menu-item-2-2522" href="#contact">CONTACT</a>
</div>                                    </div>
            </div>
        </footer>



<style>
html {
  scroll-behavior: smooth;
}
</style>
        </main>
        <!-- Form 4 -->
        <!-- Content 30 -->
        <!-- Feature 5 -->
        <!-- Ecommerce 22 -->
        <!-- Blog 34 -->
        <!-- Application 16 -->
        <!-- Application 21 -->
        <!-- Ecommerce 16 -->
        <!-- Blog 10 -->
        <!-- Content 18 -->
        <!-- Blog 3 -->
        <!-- Feature 37 -->
        <!-- Testimonial 5 -->
        <!-- Contact 4 -->
        <!-- Content 33 -->
        <!-- Footer 4 -->

<!-- Bootstrap 4.5.2 JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<!-- Fancybox 3 jQuery plugin JS (Open images and video in popup) -->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<!--
	Google maps JS API
	Don't forget to replace the key "AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U" to your own!
	Learn how to get a key: https://help.designmodo.com/article/startup-google-maps-api/
-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U"></script>
<!-- Slick 1.8.1 jQuery plugin JS (Sliders) -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- AOS 2.3.4 jQuery plugin JS (Animations) -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<!-- Maskedinput jQuery plugin JS (Masks for input fields) -->
<script src="https://www.thecreativeworks.com.au/wp-content/themes/tcw/dist/js/jquery.maskedinput.min.js"></script>
<!-- Startup JS (Custom js for all blocks) -->
<script src="https://www.thecreativeworks.com.au/wp-content/themes/tcw/dist/js/landing.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-81004120-1', 'auto');
    ga('send', 'pageview');

</script>

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 874998117;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/874998117/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1832076280383788'); // Insert your pixel ID here.
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=1832076280383788&ev=PageView&noscript=1"
    /></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<style id='core-block-supports-inline-css' type='text/css'>
.wp-container-core-columns-layout-1.wp-container-core-columns-layout-1{flex-wrap:nowrap;}
</style>
<script type="text/javascript" src="https://www.thecreativeworks.com.au/wp-content/plugins/ultimate-blocks/src/blocks/content-toggle/front.build.js?ver=3.1.4" id="ultimate_blocks-content-toggle-front-script-js"></script>
<script type="text/javascript" src="https://www.thecreativeworks.com.au/wp-content/plugins/coblocks/dist/js/coblocks-animation.js?ver=3.1.6" id="coblocks-animation-js"></script>
<script type="text/javascript" src="https://www.thecreativeworks.com.au/wp-content/plugins/coblocks/dist/js/vendors/tiny-swiper.js?ver=3.1.6" id="coblocks-tiny-swiper-js"></script>
<script type="text/javascript" id="coblocks-tinyswiper-initializer-js-extra">
/* <![CDATA[ */
var coblocksTinyswiper = {"carouselPrevButtonAriaLabel":"Previous","carouselNextButtonAriaLabel":"Next","sliderImageAriaLabel":"Image"};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.thecreativeworks.com.au/wp-content/plugins/coblocks/dist/js/coblocks-tinyswiper-initializer.js?ver=3.1.6" id="coblocks-tinyswiper-initializer-js"></script>
<script type="text/javascript" src="https://www.thecreativeworks.com.au/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.9" id="swv-js"></script>
<script type="text/javascript" id="contact-form-7-js-extra">
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/www.thecreativeworks.com.au\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.thecreativeworks.com.au/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.9" id="contact-form-7-js"></script>
<script type="text/javascript" id="wpcf7-redirect-script-js-extra">
/* <![CDATA[ */
var wpcf7r = {"ajax_url":"https:\/\/www.thecreativeworks.com.au\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.thecreativeworks.com.au/wp-content/plugins/wpcf7-redirect/build/js/wpcf7r-fe.js?ver=1.1" id="wpcf7-redirect-script-js"></script>
<script type="text/javascript" src="https://www.thecreativeworks.com.au/wp-content/plugins/kadence-blocks/includes/assets/js/kt-tabs.min.js?ver=3.2.26" id="kadence-blocks-tabs-js"></script>
<script type="text/javascript" src="https://www.thecreativeworks.com.au/wp-content/plugins/kadence-blocks/includes/assets/js/kt-accordion.min.js?ver=3.2.26" id="kadence-blocks-accordion-js"></script>
<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=6Lc4m3sUAAAAABt9LRYh_qR-LneQnYmLqPtJTd2u&amp;ver=3.0" id="google-recaptcha-js"></script>
<script type="text/javascript" src="https://www.thecreativeworks.com.au/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
<script type="text/javascript" src="https://www.thecreativeworks.com.au/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.14.0" id="regenerator-runtime-js"></script>
<script type="text/javascript" src="https://www.thecreativeworks.com.au/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script type="text/javascript" id="wpcf7-recaptcha-js-extra">
/* <![CDATA[ */
var wpcf7_recaptcha = {"sitekey":"6Lc4m3sUAAAAABt9LRYh_qR-LneQnYmLqPtJTd2u","actions":{"homepage":"homepage","contactform":"contactform"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.thecreativeworks.com.au/wp-content/plugins/contact-form-7/modules/recaptcha/index.js?ver=5.9" id="wpcf7-recaptcha-js"></script>
<script>
    (function (w, d, s, o, f, js, fjs) {
        w["botsonic_widget"] = o;
        w[o] =
            w[o] ||
            function () {
                (w[o].q = w[o].q || []).push(arguments);
            };
        (js = d.createElement(s)), (fjs = d.getElementsByTagName(s)[0]);
        js.id = o;
        js.src = f;
        js.async = 1;
        fjs.parentNode.insertBefore(js, fjs);
    })(window, document, "script", "Botsonic", "https://d1m9uqhmlogh4h.cloudfront.net/CDN/botsonic.min.js");
    Botsonic("init", {
        serviceBaseUrl: "https://api.writesonic.com",
        token: "601a947a-3b21-4759-9f78-b38e95b2e622",
    });
</script>
    </body>
    <style type="text/css" id="wp-custom-css">
			.wpcf7 form.sent .wpcf7-response-output {
    border-color: transparent;
    padding: 0;
    margin: 0;
    color: #ffffff;
}

.wp-block-tcw-industry-experience img {
    max-width: 100%;
    height: 200px;
    object-fit: contain;
    display: flex;
    align-items: center;
    justify-content: center;
}

.actions-wrapper p{
	margin-bottom: 0;
	display: flex;
	align-items: center;
}
.single-tcwlanding .input {
    border-radius: 0;
    margin-top: 5px;
}

.page-template-default .mw-70 {
    max-width: 100% !important;
}

.social-proof-heading .logos__wrapper img {
    margin: 0px;
	max-width: 100%;
}
.social-proof-heading .logos__wrapper{
	justify-content: space-between;
}

.feature_5 .block {
    border: none !important;
}

@media only screen and (max-width: 991px) {
	.menu{
		    align-items: center;
    justify-content: center;
    display: flex;
    flex-wrap: wrap;
		margin-top: 30px;
	}
	.wp-block-kadence-tabs .kt-tabs-id_44d7d6-5d > .kt-tabs-title-list li {
margin: 10px !important;
}
	
	footer.menu{
		align-items: flex-start !important;
		justify-content: flex-start !important;
		margin-bottom: 20px !important;
	}

}

@media only screen and (max-width: 600px) {
		section.pt-100, section.pt-85, section.pt-120, section.pb-60, section.pb-90, section.pb-100, section.pb-55, section.pt-105, section.pt-70, section.pb-60{
		padding-top: 30px !important;
			padding-bottom: 30px !important;
	}
	.menu.mb-10, .menu.mt-10{
		margin: 15px 0 !important;
	}
	.wp-block-tcw-tcw-testimonials .mb-10{
		margin-bottom: 20px;
	}
}

.actions-wrapper{
	width: 100%;
}

.wpcf7-spinner{
	display: none;
}

.landing-btn{
	width: 100%;
	border-radius: 0 !important;
	border-color: #000000;
	background-color: #000000 !important;
}

.wpcf7-form h2{
	font-size: 30px;
}

.btn{
	height: 100%;
}

.grecaptcha-badge{
	display: none !important;
}
.wpcf7-response-output {
    display: none;
}
.thnk-messages {
    margin-top: 30px;
}
p.chk label {
    margin-block: 0px;
    margin-left: 23px;
}

input#myCheckbox {
    position: absolute;
    margin-top: 10px;
}
		</style>
<script>
/*
$(document).ready(function() {
    $('.octhnkmsg').click(function(e) {
     
        
        // Show the thank you message
        $('.thnk-messages').html('<span>Thanks for your message. We will get back to you soon!</span>');
    });
});*/
</script>
