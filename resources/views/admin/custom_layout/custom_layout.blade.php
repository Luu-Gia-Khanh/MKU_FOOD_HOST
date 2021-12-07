<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm Layout</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/upload/logo_mku_shortcut_icon.svg') }}" />
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
    {{-- css admin --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('public/back_end/vendors/styles/core.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/back_end/vendors/styles/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/back_end/vendors/styles/style.css') }}">

    {{-- css font end --}}
    <link rel="stylesheet" href="{{ asset('public/font_end/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/font_end/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/font_end/custom_ui/css/custom_header.css') }}">
    <link rel="stylesheet" href="{{ asset('public/font_end/assets/css/main-color03-green.css') }}">
    {{-- sweetaler --}}
    <link rel="stylesheet" href="{{ asset('public/font_end/custom/sweet.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/back_end/src/plugins/jquery-asColorPicker/dist/css/asColorPicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/back_end/custom_layout/custom_layout.css') }}">
</head>
<body>
    <div class="content">
        {{-- CONTENT HEADER --}}
        <form action="{{ URL::to('admin/process_custom_layout') }}" id="form_change_layout" method="post" enctype="multipart/form-data">
            @csrf
            <header
                id="header" class="header-area style-01 layout-03"
                style="border-bottom: 1px solid rgba(0, 0, 0, 0.09);">
                {{-- HEADER TOP --}}
                @include('admin.custom_layout.header_top')
                {{-- HEADER MIDDLE --}}
                <div class="header-middle biolife-sticky-object cus_top_bg">
                    <div class="container">
                        <div class="row">
                            {{-- LOGO --}}
                            <div class="col-lg-2 col-md-2 col-md-6 col-xs-6">
                                <label for="file_upload" data-toggle="tooltip" title="click để thay đổi logo!">
                                    <img
                                        src="{{ asset('public/upload/logo_mku_8.svg') }}"
                                        alt="biolife logo" style="height: 46px;"
                                        id="image_upload"
                                        >
                                </label>
                            </div>
                            @include('admin.custom_layout.search')
                            <div class="col-lg-2 col-md-2 col-md-6 col-xs-6">
                                <div class="biolife-cart-info">
                                    {{-- wish list --}}
                                    <div class="minicart-block">
                                        <div class="minicart-contain">
                                            <a href="javascript:void(0)" class="link-to" data-toggle="tooltip" title="Hooray!">
                                                <span class="icon-qty-combine">
                                                    <i class="icon-heart-bold biolife-icon"></i>
                                                    <span class="qty total_quantity_wishlist cus_main_bg cus_main_text">
                                                        0
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    {{-- cart --}}
                                    <div class="minicart-block">
                                        <div class="minicart-contain">
                                            <a href="javascript:void(0)" class="link-to">
                                                <span class="icon-qty-combine">
                                                    <i class="icon-cart-mini biolife-icon"></i>
                                                    <span class="qty total_quantity_cart cus_main_bg cus_main_text">
                                                        0
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- nav top --}}
                        <div class="row">
                            @include('admin.custom_layout.nav_top')
                        </div>
                    </div>
                </div>
            </header>
            {{-- END HEADER --}}
            {{-- BODY --}}
            <div class="content_body">
                <input type="file" name="logo" onchange="return uploadhinh()" id="file_upload" style="opacity: 0;">
                @include('admin.custom_layout.body')
            </div>
            {{-- FOOTER --}}
            <div class="content_footer_custome_layout" style="padding-bottom: 90px">
                @include('admin.custom_layout.footer')
            </div>
            {{-- ENDFOOTER --}}
        </form>
    </div>
    <div class="content_confirm_change">
        <div class="content_btn_change">
            <a href="{{ URL::to('admin/all_layout') }}" class="btn btn-secondary">Hủy</a>
            <button
                class="btn btn-success"
                data-toggle="modal" data-target="#modal_confirm_add_layout"
            >Thêm</button>
        </div>
    </div>
    <!-- The Modal confirm change layout -->
    <div class="modal" id="modal_confirm_add_layout">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Thông Báo</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Bạn muốn thêm giao diện ?
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn_change_layout">Đồng Ý</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                </div>

            </div>
        </div>
    </div>
    {{-- SCRIPT --}}
	<script src="{{ asset('public/back_end/vendors/scripts/core.js') }}"></script>
	<script src="{{ asset('public/back_end/vendors/scripts/script.min.js') }}"></script>
	<script src="{{ asset('public/back_end/vendors/scripts/process.js') }}"></script>
	<script src="{{ asset('public/back_end/vendors/scripts/layout-settings.js') }}"></script>
	<script src="{{ asset('public/back_end/src/plugins/jquery-asColor/dist/jquery-asColor.js') }}"></script>
	<script src="{{ asset('public/back_end/src/plugins/jquery-asGradient/dist/jquery-asGradient.js') }}"></script>
	<script src="{{ asset('public/back_end/src/plugins/jquery-asColorPicker/jquery-asColorPicker.js') }}"></script>
	<script src="{{ asset('public/back_end/vendors/scripts/colorpicker.js') }}"></script>
    <script src="{{ asset('public/back_end/src/scripts/upload_image.js') }}"></script>
    {{-- sweetaler --}}
    <script src="{{ asset('public/font_end/custom/sweet.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="{{ asset('public/back_end/custom_layout/custom_layout.js') }}"></script>
</body>
</html>
