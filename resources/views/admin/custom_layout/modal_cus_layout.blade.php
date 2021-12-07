<input type="hidden" name="_token" value="{{ csrf_token() }}" />
{{-- modal filter comment fol product --}}
<div class="modal fade" id="modal_set_layout">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h4">Thông Báo</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ URL::to('admin/set_layout') }}" method="post" id="form_set_layout">
                    @csrf
                    <div class="">
                        Bạn muốn sử dụng giao diện này ?
                        <input type="hidden" name="layout_id" class="val_id_to_set_layout">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                <button type="button" class="btn btn-success" id="btn_confirm_set_layout">Đồng Ý</button>
            </div>
        </div>
    </div>
</div>

{{-- modal soft delete layout --}}
<div class="modal fade" id="Modal_soft_delete_layout">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h4">Thông Báo</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ URL::to('admin/soft_delete_layout') }}" method="post" id="form_soft_delete_layout">
                    @csrf
                    <div class="">
                        Bạn muốn xóa giao diện này ?
                        <input type="hidden" name="layout_id" class="val_id_to_soft_delete_layout">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                <button type="button" class="btn btn-success" id="btn_confirm_soft_detele_layout">Đồng Ý</button>
            </div>
        </div>
    </div>
</div>
