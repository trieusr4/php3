@extends('layout.client')
@section('content')
    <style>
        #social-links ul {
            padding-left: 0;
        }

        #social-links ul li {
            display: inline-block;
        }

        #social-links ul li a {
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 1px;
            font-size: 25px;
        }

        #social-links .fa-facebook {
            color: #0d6efd;
        }

        #social-links .fa-twitter {
            color: deepskyblue;
        }

        #social-links .fa-linkedin {
            color: #0e76a8;
        }

        #social-links .fa-whatsapp {
            color: #25D366
        }

        #social-links .fa-reddit {
            color: #FF4500;
            ;
        }

        #social-links .fa-telegram {
            color: #0088cc;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <main>
        <div class="header-image-wrapper">
            <div class="bg" style="background-image: url('assets/images/others/contact.html');"></div>
            <div class="mask"></div>
            <div class="header-image-content">
                <h1 class="title">Chi tiết {{ $product->title }} </h1>
                <p class="desc"></p>
            </div>
        </div>
        <div class="px-3">
            <div class="theme-container">
                <div class="mdc-card mt-5 p-5">
                    <div class="row agent-wrapper">
                        <div class="col-xs-12 col-sm-6 col-md-4 p-3">
                            <img src="{{ $product->img }}" style="max-width: 100%; height:50%; margin-bottom: 10px;"
                                class="img-responsive" />
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 p-3">
                            <h2 class="fw-600">Tên dự án:{{ $product->name }}</h2>
                            <div class="row start-xs middle-xs ratings" title="15">
                                <i class="material-icons mat-icon-sm">star</i>
                                <i class="material-icons mat-icon-sm">star</i>
                                <i class="material-icons mat-icon-sm">star</i>
                                <i class="material-icons mat-icon-sm">star</i>
                                <i class="material-icons mat-icon-sm">star_border</i>
                            </div>
                            <h2 class="fw-600">{{ $product->price }}.000.000 VND</h2>
                            <p class="mt-3 text-muted ">Mô tả:{{ $product->description }}</p>
                            <p class="mt-3 text-muted fw-500">Diện tích: {{ $product->acreage }}</p>
                            <p class="row middle-xs"><i class="material-icons primary-color"
                                    title="Organization">business</i><span class="mx-2 text-muted fw-500">Số phòng ngủ:
                                    {{ $product->bedroom }}</span></p>
                            <p class="row middle-xs"><i class="material-icons primary-color"></i><span
                                    class="mx-2 text-muted fw-500">Trạng thái: {{ $product->status }}</span></p>
                            <p class="row middle-xs"><i class="material-icons primary-color">call</i><span
                                    class="mx-2 text-muted fw-500">0961080094</span></p>
                            <div class="social-btn-sp">
                                {!! $shareButtons1 !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 p-3">
                            <form action="javascript:void(0);" class="contact-form">
                                <h3 class="uppercase">Contact Me</h3>
                                <div class="mdc-text-field mdc-text-field--outlined w-100 mt-3">
                                    <input id="name" class="mdc-text-field__input">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="name" class="mdc-floating-label">Name</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-text-field mdc-text-field--outlined w-100 mt-3">
                                    <input id="email" class="mdc-text-field__input">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="email" class="mdc-floating-label">Email</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-text-field mdc-text-field--outlined w-100 mt-3">
                                    <input id="phone" class="mdc-text-field__input">
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="phone" class="mdc-floating-label">Phone</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea w-100 mt-3">
                                    <textarea id="message" class="mdc-text-field__input" rows="5"></textarea>
                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="message" class="mdc-floating-label">Message</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="w-100 text-center mt-4">
                                    <button type="submit" class="mdc-button mdc-button--raised bg-accent">
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">Send Email</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @foreach ($product->comments as $comment)
            <div class="display-comment" @if ($comment->parent_id != null) style="margin-left:40px;" @endif>
                <strong>{{ $comment->user->name }}</strong>
                <p>{{ $comment->content }}</p>
                <a href="" id="reply"></a>
                <form method="post" action="/comments/replies">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="content" class="form-control" />
                        <input type="hidden" name="product_id" value="{{ $product->id }}" />
                        <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-warning" value="Reply" />
                    </div>
                </form>
            </div>
        @endforeach
        <h4>Để lại bình luận</h4>
        <form method="post" action="/comments/store">
            @csrf
            <div class="form-group">
                <textarea class="form-control" name="content"></textarea>
                <input type="hidden" name="product_id" value="{{ $product->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Bình luận" />
            </div>
        </form>

    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/share.js') }}"></script>
@endsection
