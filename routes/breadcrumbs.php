<?php

use App\Post;

// Cy-tea
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Cy-tea', url('/'));
});

// Cy-tea > $Wardの駐輪場一覧
Breadcrumbs::register('ward', function ($breadcrumbs, $ward) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push($ward.'の駐輪場一覧', url($ward));
});

// Cy-tea > $wardの駐輪場一覧 > $parking->lotname
Breadcrumbs::register('showParking', function ($breadcrumbs, $ward, $parking) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push($ward.'の駐輪場一覧', url('parkings/'.$parking->ward));
    $breadcrumbs->push($parking->lotname, url('parkings/'.$parking->ward.$parking->id));
});