    @php
        $layout = App\Http\Controllers\CustomLayoutController::ShowCusLayOut_FontEnd();
        $cus_main_bg = $layout->main_background. '!important';
        $cus_main_text = $layout->main_color_text. '!important';
        $cus_main_border = '1px solid '.$layout->main_background. '!important';
        $cus_top_bg = $layout->top_background. '!important';
        $cus_top_text = $layout->top_color_text. '!important';
        $cus_footer_bg = $layout->footer_background. '!important';
        $cus_footer_text = $layout->footer_color_text. '!important';
    @endphp
    <style>
        .cus_main_bg{
            background: {{ $cus_main_bg }}
        }
        .cus_main_border{
            border: {{ $cus_main_border }}
        }
        .cus_main_text{
            color: {{ $cus_main_text }}
        }
        .cus_main_color{
            color: {{ $cus_main_bg }}
        }
        .border_top_3{
            border-top: 3px solid {{ $cus_main_bg }}
        }
        .border_left_1{
            border-left: 1px solid {{ $cus_main_bg }}
        }
        .border_bottom_4{
            border-bottom: 4px solid {{ $cus_main_bg }}
        }
        #loadMore{
            color: {{ $cus_main_bg}}
        }
        #loadLess{
            color: {{ $cus_main_bg}}
        }
        .container-checkbox input:checked ~ .checkmark{
            background: {{ $cus_main_bg }}
        }
        .user-module-item--active .user-module-item--link{
            color: {{ $cus_main_bg }}
        }
        .content__user-heading{
            border-color: {{ $cus_main_bg }}
        }
        .content__user-address-heading{
            border-color: {{ $cus_main_bg }}
        }
        .tabs__radio:checked + .tabs__label {
            color: {{ $cus_main_bg }};
            border-bottom: 2px solid {{ $cus_main_bg }};
        }
        .heading-item-status {
            color: {{ $cus_main_bg }};
        }
        .content-item-total{
            color: {{ $cus_main_bg }}
        }
        .item-btn-footer-primary{
            background: {{ $cus_main_bg }};
            color: {{ $cus_main_text }}
        }
        .content__voucher-heading{
            border-color: {{ $cus_main_bg }}
        }
        .progressbar li.active{
            color: {{ $cus_main_bg }}
        }
        .progressbar li.active:before{
            border-color: {{ $cus_main_bg }}
        }
        ul.timeline > li.timeline-active:before{
            background: {{ $cus_main_bg }}
        }
        .user-module-item--active .user-module-item--link::before{
            border-color: transparent transparent transparent {{ $cus_main_bg }};
        }
        .user-module-item--link:hover{
            color: {{ $cus_main_bg }};
        }
        /* top */
        .cus_top_bg{
            background: {{ $cus_top_bg }}
        }
        .cus_top_text{
            color: {{ $cus_top_text }}
        }
        /* footer */
        .cus_footer_bg{
            background: {{ $cus_footer_bg }}
        }
        .cus_footer_text{
            color: {{ $cus_footer_text }}
        }
        /* system */
        body.top-refine-opened .top-functions-area .flt-item.group-on-mobile
        .wrap-selectors, .newsletter-block_popup-layout .form-content
        .dismiss-newsletter:hover::before, .mobile-search .mobile-search-content,
        .biolife-cart-info .minicart-block .cart-inner {
            border-top-color: {{ $cus_main_bg }};
        }
        .hover-main-color:hover, .contain-product__right-info-layout2.cate .cat-info
        .cat-item:hover, .service-inner .srv-name:hover, .cmt-item a:hover, .btn-scroll-top:hover,
        .search-widget button[type=submit]:hover, .biolife-quickview-inner .product-attribute
        .title a:hover, .biolife-quickview-block .quickview-container .btn-close-quickview:hover,
        .biolife-quickview-inner .quickview-nav .slick-arrow:hover::before,
        .biolife-quickview-inner .product-atts-item .meta-list li a:hover,
        .main-slide.nav-change.type02.hover-main-color .slick-arrow:hover,
        .biolife-carousel.nav-top-right.nav-main-color .slick-arrow:hover,
        .biolife-title-box.link-all .blog-link:hover, .biolife-title-box.style-02 .subtitle,
        .biolife-banner__style-04 .text2 span, .main-slide.nav-change .slick-arrow,
        .biolife-banner__promotion3 .text-content .first-line, .newsletter-block_popup-layout
        .form-content .dismiss-newsletter:hover, .biolife-banner__grid:hover .cat-name,
        .minicart-block.layout-02 .icon-contain .biolife-icon, .header-area.layout-01 .header-top
        .top-bar .horizontal-menu a:hover, .tab-head__default .tab-element .tab-link:hover,
        .tab-head__default .tab-element.active .tab-link, .biolife-tweet-item .tw-content
        .message .link-bold:not(:hover), .header-area .biolife-cart-info .login-item
        .login-link:hover, .header-area.layout-02 .header-top .top-bar .horizontal-menu a:hover,
        .header-area.layout-02 .header-top .top-bar .social-list li a:hover,
        .style-bottom-info.layout-03 .post-meta__item a:hover, .style-bottom-info.layout-03
        .group-buttons .btn.readmore, .style-bottom-info.layout-02 .group-buttons .btn.readmore,
        .style-bottom-info.layout-02 .post-meta__item-social-box li a:hover,
        .style-bottom-info.layout-02 .post-meta__item-social-box:hover .tbn,
        .style-bottom-info.layout-02 .post-meta__item.author:hover, .style-bottom-info.layout-02
        .post-meta__item.btn:hover>.biolife-icon,
        .tab-head__icon-top-layout:not(.background-tab-include) .active a,
        .tab-head__icon-top-layout:not(.background-tab-include) .tab-element a:hover,
        .contain-product .product-thumb .lookup:hover, .service-inner .biolife-icon,
        .biolife-service__type01 .txt-show-02, .post-item .post-content .post-name a:hover,
        .wgt-post-item .detail .post-name a:hover, .post-comments .wrap-post-comment .cmt-fooot
        .btn:hover, .post-comments .form-row.last-btns .btn:not(.btn-sumit):hover,
        .single-post-contain .post-foot .auth-info .avata:hover, .wgt-twitter-item .detail
        .viewall a:hover, .wgt-twitter-item .detail .tweet-count .btn:hover, .wgt-twitter-item
        .detail .tweet-content a, .wgt-twitter-item .detail .account-info .ath-name:hover,
        .wgt-twitter-item .detail .account-info .ath-taglink:hover, .welcome-us-block .qt-text,
        .signin-container .form-row .link-to-help, .login-on-checkout .msg a, .order-summary
        .title-block a:hover, .order-summary .subtotal-line a, .order-summary .cart-list
        .cart-item .info a:hover, .checkout-progress-wrap .checkout-act .box-content
        .txt-desc a:hover, .shopping-cart-container table td.product-thumbnail .prd-name:hover,
        .biolife-panigations-block.version-2 .result-count a:hover, .review-tab #comments
        .comment-review-form .actions li a:hover, .sumary-product .action-form
        .social-media ul li a:hover, .sumary-product .action-form .buttons .pull-row .btn:hover,
        .sumary-product .shipping-info p, .pr-detail-layout .info .buttons .wishlist-btn:hover,
        .pr-detail-layout .info .buttons .compare-btn:hover, .biolife-carousel.nav-center-02
        .slick-arrow, .top-functions-area .viewmode-selector a.active, .top-functions-area
        .viewmode-selector a:hover,
        .contain-product .slide-down-box .buttons .btn:not(.add-to-cart-btn):hover,
        .sidebar .widget .wgt-title::after, .sidebar
        .wgt-content .color-list li.selected, .sidebar .wgt-content .color-list li a:hover,
        .sidebar .wgt-content .check-list li.selected a::after, .sidebar .wgt-content
        .check-list li.selected, .sidebar .wgt-content .check-list li a::after, .sidebar
        .wgt-content .check-list li a:hover, .sidebar .wgt-content .cat-list li a:hover,
        .biolife-nav ul li a:hover, .biolife-social ul li a:hover,
        .wrap-custom-menu.vertical-menu-2 li a:hover, .block-posts .menu-title, .biolife-brand
        .menu-title, .wrap-custom-menu .menu-title, .biolife-products-block .menu-title,
        .header-area .live-info .telephone i, .contain-product .info .product-title a:hover,
        .header-search-bar.layout-01 .btn-submit:hover, .biolife-carousel.nav-center-bold
        .slick-arrow:hover, .biolife-carousel.nav-center .slick-arrow:hover,
        .vertical-category-block .wrap-menu ul.sub-menu li:hover>a, .vertical-category-block
        .wrap-menu .menu>li:hover>a, .vertical-category-block .wrap-menu .menu li:hover>a:after,
        .block-posts .block-post-item .post-name a:hover, .header-area .primary-menu>ul>li.has-child
        .sub-menu a:hover, .wrap-custom-menu ul.menu>li a:hover, .minicart-item .left-info
        .product-name:hover, .header-area .primary-menu>ul>li.has-child:hover>a::after,
        .header-area .primary-menu>ul>li:hover>a, .nice-select .option:hover, .nice-select
        .option.focus, .content-404 .heading, .slider-opt03__layout01 .buttons .btn.btn-bold:not(:hover),
        .slider-opt03__layout01 .buttons .btn-thin:not(:hover), .nice-select .option.selected.focus,
        .name_product_mini:hover {
            color: {{ $cus_main_bg }};
        }

        .biolife-carousel.nav-center-03 .slick-arrow:hover,
        .biolife-carousel.nav-top-right .slick-arrow:hover {
            color: {{ $cus_main_bg }};
        }

        .btn.btn-thin:hover, .testml-elem-2 .avata, .biolife-service__type02,
        .contain-product__deal-layout, .minicart-block.layout-02 .icon-contain
        .span-index, .biolife-carousel.dots_ring_style .slick-dots li button,
        .post-item .post-content .btn.readmore:hover, .slider-opt03__layout02
        .buttons .btn-thin, .single-post-contain .post-foot .socials-connection
        .social-list li a:hover, .biolife-quickview-block .quickview-nav li.slick-current img,
        .sumary-product .media .slider-nav li.slick-current img,
        .slider-opt04__layout01.light-version .buttons .btn-thin:not(:hover),
        .biolife-title-box.link-all .blog-link:hover::after, .biolife-cat-box-item:hover .cat-info,
        .biolife-panigations-block ul li a:hover, .biolife-panigations-block ul li .current-page,
        .sidebar .wgt-content .color-list li.selected a .hex-code, .sidebar .wgt-content .color-list li a:hover .hex-code,
        .sidebar .wgt-content .check-list li.selected a::before, .slider-opt03__layout01 .buttons .btn-thin:not(:hover),
        .sidebar .wgt-content .check-list li a:hover::before {
            border-color: {{ $cus_main_bg }};
        }

        .service-inner.color-reverse .number{
            background: {{ $cus_main_bg }};
        }
    </style>
