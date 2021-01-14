<!doctype html>
<html>
<head>
    <title>{{ $title }}</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-900 text-white text-lg font-sans">

<div class="bg-grey-dark text-xs py-1">
    <p class="text-center ">Stay Updated about what we are doing to help you though the Covid Pandemic -></p>
</div>
<ul>
    @foreach (tag('nav:main') as $navItem)
        <a href="{{ $navItem['url'] }}" {{ $navItem['is_current'] ? 'active' : '' }}>
            {{ $navItem['title'] }}
        </a>
    @endforeach
</ul>

<div class="container max-w-lg mx-auto py-8">
    @yield('content')
</div>
</body>
</html>
