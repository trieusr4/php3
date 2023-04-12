@extends('layout.client')
@section('content')
<style>
  #social-links ul{
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
  #social-links .fa-facebook{
        color: #0d6efd;
  }
  #social-links .fa-twitter{
        color: deepskyblue;
  }
  #social-links .fa-linkedin{
        color: #0e76a8;
  }
  #social-links .fa-whatsapp{
       color: #25D366
  }
  #social-links .fa-reddit{
       color: #FF4500;;
  }
  #social-links .fa-telegram{
       color: #0088cc;
  }
  </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
     <main>
    <div class="header-image-wrapper">
        <div class="bg" style="background-image: url('assets/images/others/contact.html');"></div>
        <div class="mask"></div>            
        <div class="header-image-content">
            <h1 class="title">Chi tiết {{$product->title}} </h1>
            <p class="desc"></p> 
        </div>
    </div>  
    <div class="px-3">  
        <div class="theme-container">  
            <div class="mdc-card mt-5 p-5"> 
                <div class="row agent-wrapper">
                    <div class="col-xs-12 col-sm-6 col-md-4 p-3">
                        <img 
                        src="{{$product->img}}"
                        style="max-width: 100%; height:50%; margin-bottom: 10px;" class="img-responsive"/>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 p-3">
                        <h2 class="fw-600">Tên dự án:{{$product->name}}</h2>
                        <div class="row start-xs middle-xs ratings" title="15">      
                            <i class="material-icons mat-icon-sm">star</i>
                            <i class="material-icons mat-icon-sm">star</i>
                            <i class="material-icons mat-icon-sm">star</i>
                            <i class="material-icons mat-icon-sm">star</i>
                            <i class="material-icons mat-icon-sm">star_border</i>
                        </div>  
                        <h2 class="fw-600">{{$product->price}}.000.000 VND</h2>
                        <p class="mt-3 text-muted ">Mô tả:{{$product->description}}</p>    
                        <p class="mt-3 text-muted fw-500">Diện tích: {{$product->acreage}}</p> 
                        <p class="row middle-xs"><i class="material-icons primary-color" title="Organization">business</i><span class="mx-2 text-muted fw-500">Số phòng ngủ: {{$product->bedroom}}</span></p>
                        <p class="row middle-xs"><i class="material-icons primary-color"></i><span class="mx-2 text-muted fw-500">Trạng thái: {{$product->status}}</span></p>
                        <p class="row middle-xs"><i class="material-icons primary-color">call</i><span class="mx-2 text-muted fw-500">0961080094</span></p>
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
   
    <section style="background-color: #eee;">
        <div class="container my-5 py-5">
          <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-8">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-start align-items-center">
                    <img class="rounded-circle shadow-1-strong me-3"
                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="60"
                      height="60" />
                    <div>
                      <h6 class="fw-bold text-primary mb-1">Lily Coleman</h6>
                      <p class="text-muted small mb-0">
                        Shared publicly - Jan 2020
                      </p>
                    </div>
                  </div>
      
                  <p class="mt-3 mb-4 pb-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
                  </p>
      
                  <div class="small d-flex justify-content-start">
                    <a href="#!" class="d-flex align-items-center me-3">
                      <i class="fa fa-thumbs-up me-2"></i>
                      <p class="mb-0">Like</p>
                    </a>
                    <a href="#!" class="d-flex align-items-center me-3">
                      <i class="fa fa-comment-dots me-2"></i>
                      <p class="mb-0 ">Comment</p>
                    </a>
                    <a href="#!" class="d-flex align-items-center me-3">
                      <i class="fa fa-share me-2"></i>
                      <p class="mb-0">Share</p>
                    </a>
                  </div>
                </div>
                <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                  <div class="d-flex flex-start w-100">
                    <img class="rounded-circle shadow-1-strong me-3"
                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="40"
                      height="40" />
                    <div class="form-outline w-100">
                      <textarea class="form-control" id="textAreaExample" rows="4"
                        style="background: #fff;"></textarea>
                      <label class="form-label" for="textAreaExample">Message</label>
                    </div>
                  </div>
                  <div class="float-end mt-2 pt-1">
                    <button type="button" class="btn btn-primary btn-sm">Post comment</button>
                    <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('js/share.js') }}"></script>
@endsection
        