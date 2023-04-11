@extends('layout.client')

@section('content')
    <div class="header-image-wrapper">
        <div class="bg" style="background-image: url('assets/images/others/about.jpg');"></div>
        <div class="mask"></div>
        <div class="header-image-content offset-bottom">
            <h1 class="title">Tin Tức</h1>
            <p class="desc">We help you for find your house key</p>
        </div>
    </div>
    <div class="px-3">
        <div class="theme-container">
            <div class="mdc-card main-content-header">
                <form action="" id="filters" class="search-wrapper">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input  value="{{ request()->key }}" name="key" class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Tìm kiếm</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row center-xs middle-xs p-2">
                        <button class="mdc-button mdc-button--raised" type="submit">
                            <span class="mdc-button__ripple"></span>
                            <i class="material-icons mdc-button__icon">search</i>
                            <span class="mdc-button__label">Search</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="properties-wrapper row">
               
                @foreach ($listNew as $item)
                    <div class="row item col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                        <div class="mdc-card property-item grid-item column-4 full-width-page">
                            <div class="thumbnail-section">
                                <div class="row property-status">
                                    <span class="green">For Sale</span>
                                </div>
                                <img src="{{ $item->img }}" alt="" style="max-width: 100%; margin-bottom: 10px;">

                            </div>
                            <div class="property-content-wrapper">

                                <div class="property-content">
                                    <div class="content">
                                        <h1 class="title"><a href="#">{{ $item->title }}</a></h1>

                                        <div class="row between-xs middle-xs">
                                            <h3 class="primary-color price">
                                                <span>{{ $item->price }} tỉ</span>
                                            </h3>

                                        </div>
                                        <div class="d-none d-md-flex d-lg-flex d-xl-flex">
                                            <div class="description mt-3">
                                                <p>{{ $item->description }}</p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="grow"></div>
                                    <div class="actions row between-xs middle-xs">
                                        {{-- <p class="row date mb-0">
                                            <i class="material-icons text-muted">date_range</i>
                                            <span class="mx-2">12 August, 2012</span>
                                        </p> --}}
                                        <a href="home/product-detail/{{ $item->id }}"
                                            class="mdc-button mdc-button--outlined">
                                            <span class="mdc-button__ripple"></span>
                                            <span class="mdc-button__label">Chi tiết</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr>
            </div>
            {{ $listNew->appends(request()->all())->links() }}
        </div>
    </div>
@endsection
