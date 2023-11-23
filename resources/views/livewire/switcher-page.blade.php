@extends('layouts.switcher-app')

@section('styles')

@endsection

@section('content')

    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <h4 class="page-title">Pages</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Switcher-1</li>
            </ol>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center">
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-info btn-icon me-2 btn-b"><i
                            class="mdi mdi-filter-variant"></i></button>
            </div>
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-danger btn-icon me-2"><i
                            class="mdi mdi-star"></i></button>
            </div>
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-warning  btn-icon me-2"><i
                            class="mdi mdi-refresh"></i></button>
            </div>
            <div class="mb-xl-0">
                <div class="btn-group dropdown">
                    <button type="button" class="btn btn-primary">14 Aug 2019</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                            id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuDate">
                        <a class="dropdown-item" href="javascript:void(0);">2015</a>
                        <a class="dropdown-item" href="javascript:void(0);">2016</a>
                        <a class="dropdown-item" href="javascript:void(0);">2017</a>
                        <a class="dropdown-item" href="javascript:void(0);">2018</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMB -->

    <!-- ROW -->
    <div class="container p-0 p-sm-5">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 ">
                <!-- Switcher -->
                <div class="switcher-wrapper">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="form_holder sidebar-right1">
                                <div class="row">
                                    <div class="predefined_styles text-start">
                                        <div class="swichermainleft">
                                            <h5 class="py-3 bd-y mb-0">LTR AND RTL VERSIONS</h5>
                                            <div class="skin-body p-2 m-0">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">LTR</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch25"
                                                                                            id="myonoffswitch54"
                                                                                            class="onoffswitch2-checkbox"
                                                                                            checked>
                                                            <label for="myonoffswitch54"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">RTL</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch25"
                                                                                            id="myonoffswitch55"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch55"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft">
                                            <h5 class="py-3 bd-y mb-0">Navigation Style</h5>
                                            <div class="skin-body  p-2 m-0">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Vertical Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch15"
                                                                                            id="myonoffswitch34"
                                                                                            class="onoffswitch2-checkbox"
                                                                                            checked>
                                                            <label for="myonoffswitch34"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Horizantal Click Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch15"
                                                                                            id="myonoffswitch35"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch35"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Horizantal Hover Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch15"
                                                                                            id="myonoffswitch111"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch111"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft">
                                            <h5 class="py-3 bd-y mb-0">Theme Style</h5>
                                            <div class="skin-body p-2 m-0">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Light Theme</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch1"
                                                                                            id="myonoffswitch1"
                                                                                            class="onoffswitch2-checkbox"
                                                                                            checked>
                                                            <label for="myonoffswitch1"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Dark Theme</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch1"
                                                                                            id="myonoffswitch2"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch2"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft">
                                            <h5 class="py-3 bd-y mb-0">Theme Color</h5>
                                            <div class="skin-body p-2 m-0">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Primary Color</span>
                                                        <div class="">
                                                            <input class=" input-color-picker color-primary-light"
                                                                   value="#0162e8" id="colorID" type="color"
                                                                   data-id="bg-color" data-id1="bg-hover"
                                                                   data-id2="bg-border" name="lightPrimary">
                                                        </div>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Background Color</span>
                                                        <div class="">
                                                            <input class="input-bg-picker background-primary-light"
                                                                   value="#141b2d" id="bgID"
                                                                   type="color" data-id3="body" data-id4="theme"
                                                                   name="BackgroundPrimary">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft horizontal-styles">
                                            <h5 class="py-3 bd-y mb-0">Horizontal layout Styles</h5>
                                            <div class="skin-body p-2 m-0">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Default Horizontal</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch7"
                                                                                            id="myonoffswitch31"
                                                                                            class="onoffswitch2-checkbox"
                                                                                            checked>
                                                            <label for="myonoffswitch31"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Horizontal Centerlogo</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch7"
                                                                                            id="myonoffswitch36"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch36"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft leftmenu-styles">
                                            <h5 class="py-3 bd-y mb-0">Menu Styles</h5>
                                            <div class="skin-body p-2 m-0">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Light Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch2"
                                                                                            id="myonoffswitch3"
                                                                                            class="onoffswitch2-checkbox"
                                                                                            checked>
                                                            <label for="myonoffswitch3"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Color Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch2"
                                                                                            id="myonoffswitch4"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch4"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Dark Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch2"
                                                                                            id="myonoffswitch5"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch5"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Gradient Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch2"
                                                                                            id="myonoffswitch25"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch25"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft header-styles">
                                            <h5 class="py-3 bd-y mb-0">Header Styles</h5>
                                            <div class="skin-body p-2 m-0">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Light Header</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch3"
                                                                                            id="myonoffswitch6"
                                                                                            class="onoffswitch2-checkbox"
                                                                                            checked>
                                                            <label for="myonoffswitch6"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Color Header</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch3"
                                                                                            id="myonoffswitch7"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch7"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Dark Header</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch3"
                                                                                            id="myonoffswitch8"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch8"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Gradient Header</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch3"
                                                                                            id="myonoffswitch26"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch26"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft">
                                            <h5 class="py-3 bd-y mb-0">Skin Modes</h5>
                                            <div class="switch_section">
                                                <div class="switch-toggle d-flex">
                                                    <span class="me-auto">Default Body</span>
                                                    <div class="onoffswitch2"><input type="radio"
                                                                                     name="onoffswitchBody"
                                                                                     id="myonoffswitch07"
                                                                                     class="onoffswitch2-checkbox"
                                                                                     checked="">
                                                        <label for="myonoffswitch07"
                                                               class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                                <div class="switch-toggle d-flex">
                                                    <span class="me-auto">Body Style1</span>
                                                    <div class="onoffswitch2"><input type="radio"
                                                                                     name="onoffswitchBody"
                                                                                     id="myonoffswitch06"
                                                                                     class="onoffswitch2-checkbox">
                                                        <label for="myonoffswitch06"
                                                               class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft vertical-images">
                                            <h5 class="py-3 bd-y mb-0">Leftmenu Bg-Image</h5>
                                            <div class="skin-body p-2 m-0 light-pattern">
                                                <button type="button" id="leftmenuimage1"
                                                        class="bg1 wscolorcode1 blackborder"></button>
                                                <button type="button" id="leftmenuimage2"
                                                        class="bg2 wscolorcode1 blackborder"></button>
                                                <button type="button" id="leftmenuimage3"
                                                        class="bg3 wscolorcode1 blackborder"></button>
                                                <button type="button" id="leftmenuimage4"
                                                        class="bg4 wscolorcode1 blackborder"></button>
                                                <button type="button" id="leftmenuimage5"
                                                        class="bg5 wscolorcode1 blackborder"></button>
                                            </div>
                                        </div>
                                        <div class="swichermainleft">
                                            <h5 class="py-3 bd-y mb-0">Layout Width Styles</h5>
                                            <div class="skin-body p-2 m-0">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Full Width</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch4"
                                                                                            id="myonoffswitch9"
                                                                                            class="onoffswitch2-checkbox"
                                                                                            checked>
                                                            <label for="myonoffswitch9"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Boxed</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch4"
                                                                                            id="myonoffswitch10"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch10"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft">
                                            <h5 class="py-3 bd-y mb-0">Layout Positions</h5>
                                            <div class="skin-body p-2 m-0">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Fixed</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch5"
                                                                                            id="myonoffswitch11"
                                                                                            class="onoffswitch2-checkbox"
                                                                                            checked>
                                                            <label for="myonoffswitch11"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Scrollable</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch5"
                                                                                            id="myonoffswitch12"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch12"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft vertical-switcher">
                                            <h5 class="py-3 bd-y mb-0">Sidemenu layout Styles</h5>
                                            <div class="skin-body p-2 m-0">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Default Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch6"
                                                                                            id="myonoffswitch13"
                                                                                            class="onoffswitch2-checkbox default-menu"
                                                                                            checked>
                                                            <label for="myonoffswitch13"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Closed Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch6"
                                                                                            id="myonoffswitch30"
                                                                                            class="onoffswitch2-checkbox default-menu">
                                                            <label for="myonoffswitch30"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Icon with Text</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch6"
                                                                                            id="myonoffswitch14"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch14"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Icon Overlay</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch6"
                                                                                            id="myonoffswitch15"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch15"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Hover Submenu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch6"
                                                                                            id="myonoffswitch32"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch32"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Hover Submenu style 1</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch6"
                                                                                            id="myonoffswitch33"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="myonoffswitch33"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Double Menu</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch6"
                                                                                            id="switchbtn-doublemenu"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="switchbtn-doublemenu"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Double Menu with Tabs</span>
                                                        <p class="onoffswitch2 my-0"><input type="radio"
                                                                                            name="onoffswitch6"
                                                                                            id="switchbtn-doublemenutabs"
                                                                                            class="onoffswitch2-checkbox">
                                                            <label for="switchbtn-doublemenutabs"
                                                                   class="onoffswitch2-label"></label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft">
                                            <h5 class="py-3 bd-y mb-0">Reset All Styles</h5>
                                            <div class="skin-body p-2 m-0">
                                                <div class="switch_section my-4">
                                                    <button id="resetAll" class="btn btn-danger btn-block"
                                                            type="button">Reset All
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Switcher -->
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12"></div>
        </div>
    </div>
    <!-- END ROW -->

@endsection

@section('scripts')

@endsection
