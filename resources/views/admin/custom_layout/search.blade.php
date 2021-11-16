<div class="col-lg-8 col-md-8 hidden-sm hidden-xs">
    <div class="header-search-bar layout-01" style="height: 46px;">
        <form class="form-search" name="form_search_product" method="post">
            @csrf
            <input
                type="text"
                name="search_product"
                class="input-text input_search_auto_complete cus_main_border"
                value="" placeholder="Tìm sản phẩm mong muốn..."
                autocomplete="off">
            <button type="button" class="btn-submit submit_form"><i class="biolife-icon icon-search"></i></button>
        </form>
    </div>
</div>
