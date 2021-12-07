$('.btn_set_layout').click(function(){
    layout_id = $(this).attr('data-id');
    $('.val_id_to_set_layout').val(layout_id);
});
$('#btn_confirm_set_layout').click(function(){
    $('form#form_set_layout').submit();
})

// soft delete
$('.btn_soft_delete_layout').click(function(){
    layout_id = $(this).attr('data-id');
    $('.val_id_to_soft_delete_layout').val(layout_id);
});
$('#btn_confirm_soft_detele_layout').click(function(){
    $('form#form_soft_delete_layout').submit();
})

// delete forever
$('.btn_delete_forever_layout').click(function(){
    layout_id = $(this).attr('data-id');
    $('.layout_id_delete_forever').val(layout_id);
});
$('.btn_confirm_delete_forever_layout').click(function(){
    $('form#form_delete_forever_layout').submit();
})
