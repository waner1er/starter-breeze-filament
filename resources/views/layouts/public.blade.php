<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="keywords" content="{{ $metaKeyWords ?? ''}}"/>
    <meta name="description" content="{{ $metaDescription ?? '' }}"/>
    <meta name="subject" content="your website's subject">
    <meta name="copyright"content="company name">
    <meta name="language" content="ES">
    <meta name="robots" content="index,follow" />
    <meta name="revised" content="Sunday, July 18th, 2010, 5:15 pm" />
    <meta name="abstract" content="">
    <meta name="topic" content="">
    <meta name="summary" content="">
    <meta name="Classification" content="Business">
    <meta name="author" content="name, email@hotmail.com">
    <meta name="designer" content="">
    <meta name="copyright" content="">
    <meta name="reply-to" content="email@hotmail.com">
    <meta name="owner" content="">
    <meta name="url" content="http://www.websiteaddrress.com">
    <meta name="identifier-URL" content="http://www.websiteaddress.com">
    <meta name="directory" content="submission">
    <meta name="category" content="">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="shortcut icon" href="https://picsum.photos/50" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/assets/public/scss/guest.scss', 'resources/assets/public/js/guest.js'])
</head>
<body class="">
<div class="">
    <x-public.public-navbar/>
    <div class="container">
        {{ $slot }}
    </div>
</div>
</body>
</html>
