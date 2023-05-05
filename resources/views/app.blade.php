<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google Tag Manager -->
    <script>
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
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-526RBXB');
    </script>
    <!-- End Google Tag Manager -->


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>{{ config('app.name', 'Bidders Portal') }}</title>

    <link rel="icon" type="image/png" href="../img/favicon.png" />


    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    
    @routes

    <!-- <script src="//www.sejda.com/js/sejda-js-api.min.js"></script> -->

    <!-- Google tag (gtag.js) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-HVZJ5KQXEK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HVZJ5KQXEK');
    </script> -->

    

    {!! \App\Meta::render() !!}
</head>

<body class="font-sans antialiased">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-526RBXB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    @inertia

    <script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "12d0fb8c1fb34a6b9ef7fac09b4a54f9"}'></script><!-- End Cloudflare Web Analytics -->

</body>

</html>