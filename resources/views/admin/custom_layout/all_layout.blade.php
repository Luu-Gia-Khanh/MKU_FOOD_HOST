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
                                <li class="breadcrumb-item"><a href="{{ URL::to('admin/') }}">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Danh sách giao diện</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                    </div>
                </div>
        </div>
        {{-- Message  --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('success') }}
            </div>
        @endif

        <!-- Simple Datatable start -->
        <div class="card-box mb-30 content_filter_admin">
            <div class="pd-20">
                <h4 class="text-blue h4">Danh Sách Giao Diện</h4>
            </div>
            <div class="pb-20">

                    <div class="row">
                        <div class="col-12">
                            <table class="data-table table table-hover multiple-select-row nowrap no-footer dtr-inline sortable"
                                id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1">STT</th>
                                        <th class="text-center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1" data-defaultsign="AZ">Màu Chính</th>
                                        <th class="text-center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1">Màu Đầu Trang</th>
                                        <th class="text-center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1">Màu Cuối Trang</th>
                                        <th class="text-center" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                            colspan="1">Trạng Thái</th>
                                        @hasrole('admin')
                                            <th class="datatable-nosort sorting_disabled" rowspan="1" colspan="1"
                                            aria-label="Action" data-defaultsort="disabled">Thao Tác</th>
                                        @endhasrole
                                    </tr>
                                </thead>
                                <tbody class="content_find_admin">
                                    @php
                                        $stt = 0;
                                    @endphp
                                    @foreach ($all_layout as $layout)
                                        @php
                                            $stt++;
                                        @endphp
                                        <tr role="row">
                                            <td>{{ $stt }}</td>
                                            <td>
                                                <div class="content_color_admin text-center" style="background: {{ $layout->main_background }};">
                                                    {{ $layout->main_background }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="content_color_admin text-center" style="background: {{ $layout->top_background }};">
                                                    {{ $layout->top_background }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="content_color_admin text-center" style="background: {{ $layout->footer_background }};">
                                                    {{ $layout->footer_background }}
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                @if ($layout->status == 1)
                                                    <span class="badge badge-success">Đang Sử Dụng</span>
                                                @else
                                                    <span class="badge badge-secondary">Tắt</span>
                                                @endif

                                            </td>
                                            @hasrole('admin')
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                            href="#" role="button" data-toggle="dropdown">
                                                            <i class="dw dw-more"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                            <a class="dropdown-item" href="{{ URL::to('admin/saw_layout/'.$layout->layout_id) }}">
                                                                <i class="dw dw-eye"></i>Xem
                                                            </a>
                                                            @if ($layout->status != 1)
                                                                <button class="dropdown-item btn_set_layout"
                                                                    data-id="{{ $layout->layout_id }}"
                                                                    data-toggle="modal" data-target="#modal_set_layout">
                                                                    <i class="dw dw-push-pin-1"></i>
                                                                    Sử Dụng Giao Diện
                                                                </button>
                                                            @endif
                                                            <a class="dropdown-item"
                                                                href="{{ URL::to('admin/update_layout/'.$layout->layout_id) }}">
                                                                <i class="dw dw-edit2"></i>Chỉnh Sửa
                                                            </a>
                                                            @if ($layout->layout_id != 1 && $layout->status != 1)
                                                                <button class="dropdown-item btn_soft_delete_layout"
                                                                    data-id="{{ $layout->layout_id }}" data-toggle="modal"
                                                                    data-target="#Modal_soft_delete_layout"><i
                                                                        class="dw dw-delete-3"></i>Xóa
                                                                </button>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                            @endhasrole
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            @hasrole(['admin'])
                            <a href="{{ URL::to('admin/view_recycle_layout') }}" class="btn color-btn-them ml-10"
                                style="color: white"><i class="dw dw-delete-3"></i> Thùng Rác</a>
                            @endhasrole
                        </div>
                    </div>
            </div>
        </div>
        @include('admin.custom_layout.modal_cus_layout')
    @endsection
