@section('header')
<header class="header">
    <div class="subTitle">
        <h2>都心の駐輪場検索サイト【サイティー】</h2>
        <h3><a href="{{URL::to('/parkings/chiyoda')}}">千代田区</a></h3>
        <h3><a href="{{URL::to('/parkings/chuo')}}">中央区</a></h3>
        <h3><a href="{{URL::to('/parkings/minato')}}">港区</a></h3>
        <h3><a href="{{URL::to('/parkings/shinjuku')}}">新宿区</a></h3>
        <h3><a href="{{URL::to('/parkings/shibuya')}}">渋谷区</a></h3>
        <h3><a href="{{URL::to('/parkings/shinagawa')}}">品川区</a></h3>
    </div>
    <div class="mainTitle">
        <a href="{{URL::to('/')}}"><h1>Cy-tea</h1></a>
        <h2>〜愛車をとめて、ほっとひと息〜</h2>
    </div>
</header>
@endsection