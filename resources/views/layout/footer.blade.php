@section('footer')
<footer class="footer">
    <div class="subTitle">
        <h2>都心の駐輪場検索サイト【サイティー】</h2>
        <h3><a href="{{URL::to('/parkings/chiyoda')}}">千代田区</a></h3>
        <h3><a href="{{URL::to('/parkings/chuo')}}">中央区</a></h3>
        <h3><a href="{{URL::to('/parkings/minato')}}">港区</a></h3>
        <h3><a href="{{URL::to('/parkings/shinjuku')}}">新宿区</a></h3>
        <h3><a href="{{URL::to('/parkings/shibuya')}}">渋谷区</a></h3>
        <h3><a href="{{URL::to('/parkings/shinagawa')}}">品川区</a></h3>
    </div>
    <div class="subContents">
        <h2>愛車をとめて、ほっとひと息</h2>
        <h3><a href="{{URL::to('/about')}}">サイティーとは</a></h3>
        <h3><a href="{{URL::to('/contact')}}">お問合わせ</a></h3>
        <h3><a href="{{URL::to('/company')}}">運営会社</a></h3>
    </div>
    <div class="copyright">
        <p>Fune0 © 2019 Cy-tea. All Right Reserved.<p>
    </div>
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
@yield('pageJs')
@endsection