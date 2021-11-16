<div class="container">
    <div class="pl-30">
        <h3 class="text-blue h3 title_option pt-20">Tùy Chỉnh Màu Giao Diện</h3>
    </div>
    <div class="pd-20">
        <form action="{{ URL::to('admin/') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-20">
                    <div class="card-box height-100-p pd-20 min-height-200px">
                        <div class="form-group">
                            <label>
                                Màu Chính
                            </label>
                            <input type="text"
                                class="gradient-colorpicker form-control"
                                value="#7faf51"
                                style="padding-left: 50px;"
                                id="main_background"
                                />
                            <input type="hidden" id="main_background_old" value="">
                        </div>
                        <div class="form-group">
                            <label>
                                Màu Chử
                            </label>
                            <input type="text"
                                class="gradient-colorpicker form-control"
                                value="#ffffff"
                                style="padding-left: 50px;"
                                id="main_color"
                                />
                            <input type="hidden" id="main_color_old" value="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-20">
                    <div class="card-box height-100-p pd-20 min-height-200px">
                        <div class="form-group">
                            <label>
                                Màu Nền Đầu Trang
                            </label>
                            <input type="text"
                                class="gradient-colorpicker form-control"
                                value="#ffffff"
                                style="padding-left: 50px;"
                                id="top_background"
                                />
                            <input type="hidden" id="top_background_old" value="">
                        </div>
                        <div class="form-group">
                            <label>
                                Màu Chữ Chuyển Hướng Đầu Trang
                            </label>
                            <input type="text"
                                class="gradient-colorpicker form-control"
                                value="#222222"
                                style="padding-left: 50px;"
                                id="top_color"
                                />
                                <input type="hidden" id="top_color_old" value="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-20">
                    <div class="card-box height-100-p pd-20 min-height-200px">
                        <div class="form-group">
                            <label>
                                Màu Nền Cuối Trang
                            </label>
                            <input type="text"
                                class="gradient-colorpicker form-control"
                                value="#fffff"
                                style="padding-left: 50px;"
                                id="footer_background"
                                />
                                <input type="hidden" id="footer_background_old" value="">
                        </div>
                        <div class="form-group">
                            <label>
                                Màu Chữ Cuối Trang
                            </label>
                            <input type="text"
                                class="gradient-colorpicker form-control"
                                value="#222222"
                                style="padding-left: 50px;"
                                id="footer_color"
                                />
                                <input type="hidden" id="footer_color_old" value="">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
