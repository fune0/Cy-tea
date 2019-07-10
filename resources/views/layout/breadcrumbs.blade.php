@if (count($breadcrumbs))
    <ul class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && !$loop->last)
                <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
            @endif
        @endforeach
    </ul>
@endif

<style>
.breadcrumb {
  padding-left: 10px;
  margin-left: 0;
}

.breadcrumb li{
  display: inline;/*横に並ぶように*/
  list-style: none;
  font-weight: bold;/*太字*/
}

.breadcrumb li:after {/* >を表示*/
  content: '>';
  padding: 0 3px;
  color: #555;
}

.breadcrumb li:last-child:after {
  content: '';
}

.breadcrumb li a {
  text-decoration: none;
  color: gray;
}

.breadcrumb li a:hover {
  text-decoration: underline;
}
</style>