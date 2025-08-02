@extends('font.layout.app')
@section('title',$data->meta_title ?? 'About Us')
@section('meta_description', $data->meta_description ?? 'About Us of our website')
@section('meta_keywords', $data->meta_keywords ?? 'about, us, website')

@section('content')
<!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{ $data->title ?? '' }}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="http://127.0.0.1:8000">Home</a></li>
                    <li class="page-item">{{ $data->title ?? '' }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- about us area start here  -->
   <div class="row">
                @foreach ($categories as $category)
                <div class="col-lg-4 col-md-6">
                    <a class="single-categorie" href="/product/category/{{ $category->id }}">
                        <div class="categorie-wrap">
                            <div class="categorie-icon">
                                {{-- <i class="icon flaticon-blazer"></i> --}}
                                <img src="{{ asset('fontend/assets/images/'.$category->icon) }}" alt="">
                            </div>
                            <div class="categorie-info">
                                <h3 class="categorie-name">
                                    {{ $category->en_category_name }}</h3>
                                <h4 class="categorie-subtitle">
                                    {{ $category->en_short_info }}</h4>
                            </div>
                        </div>
                        <i class="arrow flaticon-right-arrow"></i>
                    </a>
                </div>
                @endforeach
                {{-- <div class="categories-btn text-center">
                        <a href="/about-us" class="primary-btn">All categories</a>
                </div> --}}

            </div>
    <!-- about us area end here  -->
@endsection
