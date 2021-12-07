@extends('admin.layout_admin')
@section('container')
    <style>
        .content_color_admin{
            height: 50px;
            width: 100%;
            line-height: 50px;
        }
    </style>
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ URL::to('admin/dashboard') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ URL::to('admin/all_layout') }}">Danh sách giao diện</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thùng rác</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                </div>
            </div>
        </div>
        {{-- Message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('success') }}
            </div>
        @endif
        <!-- Simple Datatable start -->
        <div class="pd-20 card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">Thùng Rác</h4>
            </div>
            @if(count($all_recycle_layout)>0)
                <div class="pb-20">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer ">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">STT</th>
                                            <th class="text-center">Màu Chính</th>
                                            <th class="text-center">Màu Đầu Trang</th>
                                            <th class="text-center">Màu Cuối Trang</th>
                                            <th class="text-center">Thao Tác</th>
                                        </tr>
                                    </thead>
                                    <tbody class="content_find_admin">
                                        @php
                                            $stt = 0;
                                        @endphp
                                        @foreach ($all_recycle_layout as $layout)
                                            @php
                                                $stt++;
                                            @endphp
                                            <tr role="row">
                                                <td class="text-center">{{ $stt }}</td>
                                                <td class="text-center">
                                                    <div class="content_color_admin text-center" style="background: {{ $layout->main_background }};">
                                                        {{ $layout->main_background }}
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="content_color_admin text-center" style="background: {{ $layout->top_background }};">
                                                        {{ $layout->top_background }}
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="content_color_admin text-center" style="background: {{ $layout->footer_background }};">
                                                        {{ $layout->footer_background }}
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ URL::to('admin/re_delete_layout/'.$layout->layout_id) }}" class="btn color-btn-them">Khôi Phục</a>
                                                    <button class="btn btn-danger btn_delete_forever_layout" data-id="{{ $layout->layout_id }}" data-toggle="modal" data-target="#delete_forever_layout"> Xóa Vĩnh Viễn</button>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="center">Thùng Rác Rổng</div>
            @endif
        </div>
        <!-- The Modal -->
        <div class="modal fade" id="delete_forever_layout">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title center">Thông Báo</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        Bạn có chắc chắn muốn xóa vĩnh viễn giao diện này ?
                        <form action="{{ URL::to('admin/delete_forever_layout') }}" method="post" id="form_delete_forever_layout">
                            @csrf
                            <input type="hidden" value="" name="layout_id" class="layout_id_delete_forever">
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn_confirm_delete_forever_layout">Đồng Ý</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('public/back_end/custom_layout/modal_cus_layout.js') }}"></script>
    @endsection
