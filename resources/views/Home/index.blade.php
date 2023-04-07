@extends('layout.client')

@section('content')


    <div class="header-image-wrapper">
        <div class="bg" style="background-image: url('assets/images/others/about.jpg');"></div>
        <div class="mask"></div>
        <div class="header-image-content offset-bottom">
            <h1 class="title">Trang chủ</h1>
            <p class="desc">We help you for find your house key</p>
        </div>
    </div>
    <div class="px-3">
        <div class="theme-container">
            <div class="mdc-card main-content-header">
                <form action="javascript:void(0);" id="filters" class="search-wrapper">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 p-2">
                            <div class="mdc-select mdc-select--outlined">
                                <div class="mdc-select__anchor">
                                    <i class="mdc-select__dropdown-icon"></i>
                                    <div class="mdc-select__selected-text"></div>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Property Type</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                    <ul class="mdc-list">
                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                        <li class="mdc-list-item" data-value="1">Office</li>
                                        <li class="mdc-list-item" data-value="2">House</li>
                                        <li class="mdc-list-item" data-value="3">Apartment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 p-2">
                            <div class="mdc-select mdc-select--outlined">
                                <div class="mdc-select__anchor">
                                    <i class="mdc-select__dropdown-icon"></i>
                                    <div class="mdc-select__selected-text"></div>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Property Status</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                    <ul class="mdc-list">
                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                        <li class="mdc-list-item" data-value="1">For Sale</li>
                                        <li class="mdc-list-item" data-value="2">For Rent</li>
                                        <li class="mdc-list-item" data-value="3">Open House</li>
                                        <li class="mdc-list-item" data-value="4">No Fees</li>
                                        <li class="mdc-list-item" data-value="5">Hot Offer</li>
                                        <li class="mdc-list-item" data-value="6">Sold</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-6 col-md-2 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Price From</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 p-2 to">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Price To</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-none" id="more-filters">
                        <div class="col-xs-12 col-sm-6 col-md-4 p-2">
                            <div class="mdc-select mdc-select--outlined">
                                <div class="mdc-select__anchor">
                                    <i class="mdc-select__dropdown-icon"></i>
                                    <div class="mdc-select__selected-text"></div>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">City</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                    <ul class="mdc-list">
                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                        <li class="mdc-list-item" data-value="1">New York</li>
                                        <li class="mdc-list-item" data-value="2">Chicago</li>
                                        <li class="mdc-list-item" data-value="3">Los Angeles</li>
                                        <li class="mdc-list-item" data-value="4">Seattle</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Zip Code</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 p-2">
                            <div class="mdc-select mdc-select--outlined">
                                <div class="mdc-select__anchor">
                                    <i class="mdc-select__dropdown-icon"></i>
                                    <div class="mdc-select__selected-text"></div>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Neighborhood</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                    <ul class="mdc-list">
                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                        <li class="mdc-list-item" data-value="1">Astoria</li>
                                        <li class="mdc-list-item" data-value="2">Midtown</li>
                                        <li class="mdc-list-item" data-value="3">Chinatown</li>
                                        <li class="mdc-list-item" data-value="4">Austin</li>
                                        <li class="mdc-list-item" data-value="5">Englewood</li>
                                        <li class="mdc-list-item" data-value="6">Riverdale</li>
                                        <li class="mdc-list-item" data-value="7">Hollywood</li>
                                        <li class="mdc-list-item" data-value="8">Sherman Oaks</li>
                                        <li class="mdc-list-item" data-value="9">Highland Park</li>
                                        <li class="mdc-list-item" data-value="10">Belltown</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 p-2">
                            <div class="mdc-select mdc-select--outlined">
                                <div class="mdc-select__anchor">
                                    <i class="mdc-select__dropdown-icon"></i>
                                    <div class="mdc-select__selected-text"></div>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Street</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                    <ul class="mdc-list">
                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                        <li class="mdc-list-item" data-value="1">Astoria Street #1</li>
                                        <li class="mdc-list-item" data-value="2">Astoria Street #2</li>
                                        <li class="mdc-list-item" data-value="3">Midtown Street #1</li>
                                        <li class="mdc-list-item" data-value="4">Midtown Street #2</li>
                                        <li class="mdc-list-item" data-value="5">Chinatown Street #1</li>
                                        <li class="mdc-list-item" data-value="6">Chinatown Street #2</li>
                                        <li class="mdc-list-item" data-value="7">Austin Street #1</li>
                                        <li class="mdc-list-item" data-value="8">Austin Street #2</li>
                                        <li class="mdc-list-item" data-value="9">Englewood Street #1</li>
                                        <li class="mdc-list-item" data-value="10">Englewood Street #2</li>
                                        <li class="mdc-list-item" data-value="11">Riverdale Street #1</li>
                                        <li class="mdc-list-item" data-value="12">Riverdale Street #2</li>
                                        <li class="mdc-list-item" data-value="13">Hollywood Street #1</li>
                                        <li class="mdc-list-item" data-value="14">Hollywood Street #2</li>
                                        <li class="mdc-list-item" data-value="15">Sherman Oaks Street #1</li>
                                        <li class="mdc-list-item" data-value="16">Sherman Oaks Street #2</li>
                                        <li class="mdc-list-item" data-value="17">Highland Park Street #1</li>
                                        <li class="mdc-list-item" data-value="18">Highland Park Street #2</li>
                                        <li class="mdc-list-item" data-value="19">Belltown Street #1</li>
                                        <li class="mdc-list-item" data-value="20">Belltown Street #2</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 p-2">
                            <div class="mdc-select mdc-select--outlined">
                                <div class="mdc-select__anchor">
                                    <i class="mdc-select__dropdown-icon"></i>
                                    <div class="mdc-select__selected-text"></div>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Bedrooms From</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                    <ul class="mdc-list">
                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                        <li class="mdc-list-item" data-value="1">1</li>
                                        <li class="mdc-list-item" data-value="2">2</li>
                                        <li class="mdc-list-item" data-value="3">3</li>
                                        <li class="mdc-list-item" data-value="4">4</li>
                                        <li class="mdc-list-item" data-value="5">5</li>
                                        <li class="mdc-list-item" data-value="6">6</li>
                                        <li class="mdc-list-item" data-value="7">7</li>
                                        <li class="mdc-list-item" data-value="8">8</li>
                                        <li class="mdc-list-item" data-value="9">9</li>
                                        <li class="mdc-list-item" data-value="10">10</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 p-2 to">
                            <div class="mdc-select mdc-select--outlined">
                                <div class="mdc-select__anchor">
                                    <i class="mdc-select__dropdown-icon"></i>
                                    <div class="mdc-select__selected-text"></div>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Bedrooms To</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                    <ul class="mdc-list">
                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                        <li class="mdc-list-item" data-value="1">1</li>
                                        <li class="mdc-list-item" data-value="2">2</li>
                                        <li class="mdc-list-item" data-value="3">3</li>
                                        <li class="mdc-list-item" data-value="4">4</li>
                                        <li class="mdc-list-item" data-value="5">5</li>
                                        <li class="mdc-list-item" data-value="6">6</li>
                                        <li class="mdc-list-item" data-value="7">7</li>
                                        <li class="mdc-list-item" data-value="8">8</li>
                                        <li class="mdc-list-item" data-value="9">9</li>
                                        <li class="mdc-list-item" data-value="10">10</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 p-2">
                            <div class="mdc-select mdc-select--outlined">
                                <div class="mdc-select__anchor">
                                    <i class="mdc-select__dropdown-icon"></i>
                                    <div class="mdc-select__selected-text"></div>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Bathrooms From</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                    <ul class="mdc-list">
                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                        <li class="mdc-list-item" data-value="1">1</li>
                                        <li class="mdc-list-item" data-value="2">2</li>
                                        <li class="mdc-list-item" data-value="3">3</li>
                                        <li class="mdc-list-item" data-value="4">4</li>
                                        <li class="mdc-list-item" data-value="5">5</li>
                                        <li class="mdc-list-item" data-value="6">6</li>
                                        <li class="mdc-list-item" data-value="7">7</li>
                                        <li class="mdc-list-item" data-value="8">8</li>
                                        <li class="mdc-list-item" data-value="9">9</li>
                                        <li class="mdc-list-item" data-value="10">10</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 p-2 to">
                            <div class="mdc-select mdc-select--outlined">
                                <div class="mdc-select__anchor">
                                    <i class="mdc-select__dropdown-icon"></i>
                                    <div class="mdc-select__selected-text"></div>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Bathrooms To</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                    <ul class="mdc-list">
                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                        <li class="mdc-list-item" data-value="1">1</li>
                                        <li class="mdc-list-item" data-value="2">2</li>
                                        <li class="mdc-list-item" data-value="3">3</li>
                                        <li class="mdc-list-item" data-value="4">4</li>
                                        <li class="mdc-list-item" data-value="5">5</li>
                                        <li class="mdc-list-item" data-value="6">6</li>
                                        <li class="mdc-list-item" data-value="7">7</li>
                                        <li class="mdc-list-item" data-value="8">8</li>
                                        <li class="mdc-list-item" data-value="9">9</li>
                                        <li class="mdc-list-item" data-value="10">10</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 p-2">
                            <div class="mdc-select mdc-select--outlined">
                                <div class="mdc-select__anchor">
                                    <i class="mdc-select__dropdown-icon"></i>
                                    <div class="mdc-select__selected-text"></div>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Garages From</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                    <ul class="mdc-list">
                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                        <li class="mdc-list-item" data-value="1">1</li>
                                        <li class="mdc-list-item" data-value="2">2</li>
                                        <li class="mdc-list-item" data-value="3">3</li>
                                        <li class="mdc-list-item" data-value="4">4</li>
                                        <li class="mdc-list-item" data-value="5">5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 p-2 to">
                            <div class="mdc-select mdc-select--outlined">
                                <div class="mdc-select__anchor">
                                    <i class="mdc-select__dropdown-icon"></i>
                                    <div class="mdc-select__selected-text"></div>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Garages To</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                    <ul class="mdc-list">
                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                        <li class="mdc-list-item" data-value="1">1</li>
                                        <li class="mdc-list-item" data-value="2">2</li>
                                        <li class="mdc-list-item" data-value="3">3</li>
                                        <li class="mdc-list-item" data-value="4">4</li>
                                        <li class="mdc-list-item" data-value="5">5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Area From</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 p-2 to">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Area To</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Year Built From</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 p-2 to">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Year Built To</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 mb-2 p-0">
                            <p class="uppercase m-2 fw-500">Features</p>
                            <div class="features">
                                <div class="mdc-form-field">
                                    <div class="mdc-checkbox">
                                        <input type="checkbox" class="mdc-checkbox__native-control"
                                            id="air-conditioning" />
                                        <div class="mdc-checkbox__background">
                                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path" fill="none"
                                                    d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                            </svg>
                                            <div class="mdc-checkbox__mixedmark"></div>
                                        </div>
                                        <div class="mdc-checkbox__ripple"></div>
                                    </div>
                                    <label for="air-conditioning">Air Conditioning</label>
                                </div>
                                <div class="mdc-form-field">
                                    <div class="mdc-checkbox">
                                        <input type="checkbox" class="mdc-checkbox__native-control" id="barbeque" />
                                        <div class="mdc-checkbox__background">
                                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path" fill="none"
                                                    d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                            </svg>
                                            <div class="mdc-checkbox__mixedmark"></div>
                                        </div>
                                        <div class="mdc-checkbox__ripple"></div>
                                    </div>
                                    <label for="barbeque">Barbeque</label>
                                </div>
                                <div class="mdc-form-field">
                                    <div class="mdc-checkbox">
                                        <input type="checkbox" class="mdc-checkbox__native-control" id="dryer" />
                                        <div class="mdc-checkbox__background">
                                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path" fill="none"
                                                    d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                            </svg>
                                            <div class="mdc-checkbox__mixedmark"></div>
                                        </div>
                                        <div class="mdc-checkbox__ripple"></div>
                                    </div>
                                    <label for="dryer">Dryer</label>
                                </div>
                                <div class="mdc-form-field">
                                    <div class="mdc-checkbox">
                                        <input type="checkbox" class="mdc-checkbox__native-control" id="microwave" />
                                        <div class="mdc-checkbox__background">
                                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path" fill="none"
                                                    d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                            </svg>
                                            <div class="mdc-checkbox__mixedmark"></div>
                                        </div>
                                        <div class="mdc-checkbox__ripple"></div>
                                    </div>
                                    <label for="microwave">Microwave</label>
                                </div>
                                <div class="mdc-form-field">
                                    <div class="mdc-checkbox">
                                        <input type="checkbox" class="mdc-checkbox__native-control" id="refrigerator" />
                                        <div class="mdc-checkbox__background">
                                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path" fill="none"
                                                    d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                            </svg>
                                            <div class="mdc-checkbox__mixedmark"></div>
                                        </div>
                                        <div class="mdc-checkbox__ripple"></div>
                                    </div>
                                    <label for="refrigerator">Refrigerator</label>
                                </div>
                                <div class="mdc-form-field">
                                    <div class="mdc-checkbox">
                                        <input type="checkbox" class="mdc-checkbox__native-control" id="tv-cable" />
                                        <div class="mdc-checkbox__background">
                                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path" fill="none"
                                                    d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                            </svg>
                                            <div class="mdc-checkbox__mixedmark"></div>
                                        </div>
                                        <div class="mdc-checkbox__ripple"></div>
                                    </div>
                                    <label for="tv-cable">TV Cable</label>
                                </div>
                                <div class="mdc-form-field">
                                    <div class="mdc-checkbox">
                                        <input type="checkbox" class="mdc-checkbox__native-control" id="sauna" />
                                        <div class="mdc-checkbox__background">
                                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path" fill="none"
                                                    d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                            </svg>
                                            <div class="mdc-checkbox__mixedmark"></div>
                                        </div>
                                        <div class="mdc-checkbox__ripple"></div>
                                    </div>
                                    <label for="sauna">Sauna</label>
                                </div>
                                <div class="mdc-form-field">
                                    <div class="mdc-checkbox">
                                        <input type="checkbox" class="mdc-checkbox__native-control" id="wi-fi" />
                                        <div class="mdc-checkbox__background">
                                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path" fill="none"
                                                    d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                            </svg>
                                            <div class="mdc-checkbox__mixedmark"></div>
                                        </div>
                                        <div class="mdc-checkbox__ripple"></div>
                                    </div>
                                    <label for="wi-fi">WiFi</label>
                                </div>
                                <div class="mdc-form-field">
                                    <div class="mdc-checkbox">
                                        <input type="checkbox" class="mdc-checkbox__native-control" id="fireplace" />
                                        <div class="mdc-checkbox__background">
                                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path" fill="none"
                                                    d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                            </svg>
                                            <div class="mdc-checkbox__mixedmark"></div>
                                        </div>
                                        <div class="mdc-checkbox__ripple"></div>
                                    </div>
                                    <label for="fireplace">Fireplace</label>
                                </div>
                                <div class="mdc-form-field">
                                    <div class="mdc-checkbox">
                                        <input type="checkbox" class="mdc-checkbox__native-control" id="gym" />
                                        <div class="mdc-checkbox__background">
                                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path" fill="none"
                                                    d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                            </svg>
                                            <div class="mdc-checkbox__mixedmark"></div>
                                        </div>
                                        <div class="mdc-checkbox__ripple"></div>
                                    </div>
                                    <label for="gym">Gym</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row center-xs middle-xs p-2">
                        <button class="mdc-button mdc-button--raised bg-warn" type="button" id="clear-filter">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">Clear</span>
                        </button>
                        <button class="mdc-button mdc-button--raised mx-2" type="button" id="show-more-filters">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">Advanced</span>
                        </button>
                        <button class="mdc-button mdc-button--raised mx-2 d-none" type="button" id="hide-more-filters">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label">Hide</span>
                        </button>
                        <button class="mdc-button mdc-button--raised" type="submit">
                            <span class="mdc-button__ripple"></span>
                            <i class="material-icons mdc-button__icon">search</i>
                            <span class="mdc-button__label">Search</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="properties-wrapper row">
                <div class="row start-xs middle-xs py-2 w-100">
                    <div class="mdc-chip-set">
                        <div class="mdc-chip bg-warn">
                            <div class="mdc-chip__ripple"></div>
                            <span>
                                <span role="button" tabindex="0" class="mdc-chip__text uppercase">32 found</span>
                            </span>
                        </div>
                        <div class="mdc-chip">
                            <div class="mdc-chip__ripple"></div>
                            <span>
                                <span role="button" tabindex="0" class="mdc-chip__text">House</span>
                            </span>
                            <span>
                                <i class="material-icons mdc-chip__icon mdc-chip__icon--trailing" tabindex="-1"
                                    role="button">cancel</i>
                            </span>
                        </div>
                        <div class="mdc-chip">
                            <div class="mdc-chip__ripple"></div>
                            <span>
                                <span role="button" tabindex="0" class="mdc-chip__text">For sale</span>
                            </span>
                            <span>
                                <i class="material-icons mdc-chip__icon mdc-chip__icon--trailing" tabindex="-1"
                                    role="button">cancel</i>
                            </span>
                        </div>
                        <div class="mdc-chip">
                            <div class="mdc-chip__ripple"></div>
                            <span>
                                <span role="button" tabindex="0" class="mdc-chip__text">Price > 150000</span>
                            </span>
                            <span>
                                <i class="material-icons mdc-chip__icon mdc-chip__icon--trailing" tabindex="-1"
                                    role="button">cancel</i>
                            </span>
                        </div>
                        <div class="mdc-chip">
                            <div class="mdc-chip__ripple"></div>
                            <span>
                                <span role="button" tabindex="0" class="mdc-chip__text">Price &lt; 450000</span>
                            </span>
                            <span>
                                <i class="material-icons mdc-chip__icon mdc-chip__icon--trailing" tabindex="-1"
                                    role="button">cancel</i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row p-2 w-100">
                    
                        <div class="row">
                          
                        </div>
            
                </div>
                @foreach ($listProduct as $item)
                    <div class="row item col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                        <div class="mdc-card property-item grid-item column-4 full-width-page">
                            <div class="thumbnail-section">
                                <div class="row property-status">
                                    <span class="green">For Sale</span>
                                </div>
                               <img src="{{$item->img}}" alt="" style="max-width: 100%; margin-bottom: 10px;" >
                                
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
                                        <div class="features mt-3">
                                            <p><span>Số phòng ngủ</span><span>{{ $item->bedroom }}</span></p>
                                            <p><span>Diện tích</span><span>{{ $item->acreage }}</span></p>
                                        </div>
                                    </div>
                                    <div class="grow"></div>
                                    <div class="actions row between-xs middle-xs">
                                        {{-- <p class="row date mb-0">
                                            <i class="material-icons text-muted">date_range</i>
                                            <span class="mx-2">12 August, 2012</span>
                                        </p> --}}
                                        <a href="home/product-detail/{{ $item->id }}" class="mdc-button mdc-button--outlined">
                                            <span class="mdc-button__ripple"></span>
                                            <span  class="mdc-button__label">Chi tiết</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr>
            </div>
            <div class="" >
                {{ $listProduct->links() }}
            </div>
        </div>
    </div>


@endsection
