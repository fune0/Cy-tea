@section('head')
<meta charset="UTF-8">
<title>@yield('title')｜自転車を駐めて紅茶を楽しもう</title>
<meta name="description" itemprop="description" content="@yield('description')">
<meta name="keywords" itemprop="keywords" content="@yield('keywords')">
<link rel="stylesheet" href="/css/normalize.css">
<link rel="stylesheet" href="/css/layout.css">
<script src="{{ assets('js/app.js') }}"></script>
@yield('pageCss')
@endsection