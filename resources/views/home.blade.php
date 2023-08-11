@extends('layouts/app')
@section('content')

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>blog</h3>
                        <p><a href="{{route('index')}}">Blog /</a> Home</p>
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
                @foreach ($articles as $article)


                    <div class="col-md-4 py-2 shadow">
                        <div class="card  p-2">
                            <img src="{{$article->image}}" class="card-img-top" alt="rasm yuklanmadi">
                            <hr>
                            <div class="card-body">

                                <h5 class="card-title"><a href="{{route('more', $article->slug )}}">{{$article->title}}</a></h5>
                                <p>{{Str::limit($article->content, 100)}}</p>
                                <ul class="blog-info-link">
                                    <li><small class="text-muted">{{$article->created_at}}</small></li>
                                    <li><i class="fa fa-eye"> {{$article->views}}</i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection

