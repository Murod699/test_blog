@extends('layouts/app')
@section('content')
    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>blog </h3>
                        <p><a href="{{route('index')}}">Blog /</a> articles</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->


    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach ($posts as $article)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ $article->image }}" alt="">
                                    <a href="#" class="blog_item_date">
                                        {{-- <h3>{{ $article->created_at->format('d') }}</h3> --}}
                                        <p>{{ $article->created_at->format('H:i d/m/Y') }}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <ul class="blog-info-link">
                                        <li><i class="fa fa-eye"></i>{{ $article->views }}</li>
                                        @foreach ($article->tags as $tag)
                                        <li><a href="#" class="btn btn-outline-primary btn-sm">{{ $tag->name }}</a></li>
                                        @endforeach
                                    </ul>
                                    <a class="d-inline-block" href="{{ route('more', $article->slug)}}">
                                        <h2>{{ $article->title }}</h2>
                                    </a>
                                    <p>{{ Str::limit($article->content, 100) }}</p>

                                </div>
                            </article>
                        @endforeach

                        <nav class="blog-pagination justify-content-center d-flex">
                            {{ $posts->links('pagination::bootstrap-4') }}
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                @foreach ($tags as $tag)
                                    <li>
                                        <a href="#">{{ $tag->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection
