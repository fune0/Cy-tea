@section('sub')
<div class="banner-area">
    <a href="{{URL::to('/about')}}">{{Form::image('images/aboutcyteabanner.png', 'サイティーとは', ['class' => 'banner'])}}</a>
</div>
<div class="banner-area">
        <a href="{{URL::to('/contact')}}">{{Form::image('images/contactusbanner.png', 'お問合わせ', ['class' => 'banner'])}}</a>
    </div>
<div class="banner-area">
    <a href="{{URL::to('/owner')}}">{{Form::image('images/rentalowner.png', 'お問合わせ', ['class' => 'banner'])}}</a>
</div>
@endsection