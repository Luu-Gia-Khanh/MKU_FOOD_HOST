<div class="content-header-top">
    <div class="header-top bg-main hidden-xs cus_main_bg">
        <div class="container">
            <div class="top-bar left">
                <ul class="horizontal-menu">
                    <li>
                        <a class="cus_main_text">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span class="mail_top_header" data-toggle="tooltip" title="Double click để thay đổi thông tin!">
                                @if (isset($layout->text_mail))
                                    {{ $layout->text_mail }}
                                @else
                                    mkufood@mku.edu.vn
                                @endif
                            </span>
                            <span class="change_mail_top_header dis-none">
                                <input type="text" class="input_change_mail_header" value="" style="color: black" placeholder="Nhập email cần thay đổi...">
                            </span>
                            <input
                                type="hidden" class="mail_header_top_hidden" name="mail_header_top_hidden"
                                value="
                                    @if (isset($layout->text_mail))
                                        {{ $layout->text_mail }}
                                    @else
                                        mkufood@mku.edu.vn
                                    @endif
                                ">
                        </a>
                    </li>
                    <li>
                        <a class="cus_main_text">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                                Liên hệ hotline:
                                <span class="phone_top_header" data-toggle="tooltip" title="Double click để thay đổi thông tin!">
                                    @if (isset($layout->text_phone))
                                        {{ $layout->text_phone }}
                                    @else
                                        0270 3831 155
                                    @endif
                                </span>
                                <span class="change_phone_top_header dis-none">
                                    <input type="text" class="input_change_phone_header" style="color: black" placeholder="Nhập email cần thay đổi...">
                                </span>
                                <input
                                    type="hidden" class="phone_header_top_hidden"
                                    name="phone_header_top_hidden"
                                    value="
                                    @if (isset($layout->text_phone))
                                        {{ $layout->text_phone }}
                                    @else
                                        0270 3831 155
                                    @endif
                                    "
                                >
                        </a>
                    </li>
                </ul>
            </div>
            <div class="top-bar right" style="display: flex;">
                <ul class="social-list" style=" align-items: center; display: flex;">
                    <li><a href="#"><i class="fa fa-twitter cus_main_text" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook cus_main_text" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest cus_main_text" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

