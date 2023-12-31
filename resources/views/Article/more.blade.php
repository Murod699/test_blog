@extends('layouts.app')
@section('content')
 <!-- bradcam_area_start  -->
 <div class="bradcam_area breadcam_bg bradcam_overlay">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>blog detials</h3>
                    <p><a href="{{route('index')}}">Blog /</a> detials</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->

    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 posts-list  justify-content-center">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ $article->image }}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>{{ $article->title }}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><i class="fa fa-heart"></i></li>
                                <li><i class="fa fa-eye"></i><span id="postView">{{ $article->views }}</span> </li>

                            </ul>
                            <ul class="blog-info-link mt-3 mb-4">
                                @foreach ($article->tags as $tag)
                                    <li><a href="" class="btn btn-outline-primary btn-sm">{{ $tag->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <p class="excert">
                                {{ $article->content }}
                            </p>
                        </div>
                    </div>

                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form class="form-contact comment_form" action="#" id="commentForm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                            placeholder="Write Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="website" id="website" type="text"
                                            placeholder="Website">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        function increasePostView() {

            const postId = "{{ $article->slug }}"; /*URL dan olingan post idsi */
            const url = "{{ route('views.increment') }}";
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    postId: postId,
                    _token: "{{ csrf_token() }}",
                },
                dataType: "json",
                success: function(data) {
                    /* HTML ingda postView dagan ID li element bo'lishi garak i bekenddan qaytarganda obyektda number dagan maydoninda bo'lishi garak(xohlasang o'zinga o'ngayli atib yuvar, lekin keyin pastdagi qisminda do'g'irlab qo'yishing garak maydonini odini)*/
                    $("#postView").html(data.view);
                }
            });
        }

        document.addEventListener("DOMContentLoaded", () => {
            setTimeout(() => {
                increasePostView();
            }, 5000);
        });
    </script>
@endpush
