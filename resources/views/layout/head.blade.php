@section('head')
<meta charset="UTF-8">
<title>@yield('title')｜自転車を駐めて紅茶を楽しもう</title>
<meta name="description" itemprop="description" content="@yield('description')">
<meta name="keywords" itemprop="keywords" content="@yield('keywords')">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="/css/normalize.css">
<link rel="stylesheet" href="/css/layout.css">
@yield('pageCss')
@endsection