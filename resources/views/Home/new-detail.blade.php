@extends('layout.client')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
                        <div class="row start-xs middle-xs">
                            <div class="row start-xs middle-xs"> 
                                <a href="https://www.facebook.com/" target="blank" class="social-icon" title="facebook">
                                    <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                      <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z" />
                                    </svg>
                                </a> 
                                <a href="https://twitter.com/" target="blank" class="social-icon" title="twitter">
                                    <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                        <path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33Z" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/" target="blank" class="social-icon" title="linkedin"> 
                                    <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                      <path d="M19,3A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19M18.5,18.5V13.2A3.26,3.26 0 0,0 15.24,9.94C14.39,9.94 13.4,10.46 12.92,11.24V10.13H10.13V18.5H12.92V13.57C12.92,12.8 13.54,12.17 14.31,12.17A1.4,1.4 0 0,1 15.71,13.57V18.5H18.5M6.88,8.56A1.68,1.68 0 0,0 8.56,6.88C8.56,5.95 7.81,5.19 6.88,5.19A1.69,1.69 0 0,0 5.19,6.88C5.19,7.81 5.95,8.56 6.88,8.56M8.27,18.5V10.13H5.5V18.5H8.27Z" />
                                    </svg>
                                </a>
                                <a href="https://instagram.com/" target="blank" class="social-icon" title="instagram"> 
                                    <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                        <path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
                                    </svg>
                                </a> 
                                <a href="http://www.agent.com/" target="blank" class="social-icon" title="website"> 
                                    <svg class="material-icons text-muted" viewBox="0 0 24 24">
                                        <path d="M10.59,13.41C11,13.8 11,14.44 10.59,14.83C10.2,15.22 9.56,15.22 9.17,14.83C7.22,12.88 7.22,9.71 9.17,7.76V7.76L12.71,4.22C14.66,2.27 17.83,2.27 19.78,4.22C21.73,6.17 21.73,9.34 19.78,11.29L18.29,12.78C18.3,11.96 18.17,11.14 17.89,10.36L18.36,9.88C19.54,8.71 19.54,6.81 18.36,5.64C17.19,4.46 15.29,4.46 14.12,5.64L10.59,9.17C9.41,10.34 9.41,12.24 10.59,13.41M13.41,9.17C13.8,8.78 14.44,8.78 14.83,9.17C16.78,11.12 16.78,14.29 14.83,16.24V16.24L11.29,19.78C9.34,21.73 6.17,21.73 4.22,19.78C2.27,17.83 2.27,14.66 4.22,12.71L5.71,11.22C5.7,12.04 5.83,12.86 6.11,13.65L5.64,14.12C4.46,15.29 4.46,17.19 5.64,18.36C6.81,19.54 8.71,19.54 9.88,18.36L13.41,14.83C14.59,13.66 14.59,11.76 13.41,10.59C13,10.2 13,9.56 13.41,9.17Z" />
                                    </svg>
                                </a> 
                            </div> 
                        </div>                                     
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
@endsection
        