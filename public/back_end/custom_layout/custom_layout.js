
// btn change layout
$('.btn_change_layout').click(function(){
    // console.log($('#main_background').val())
    $('form#form_change_layout').submit();
});
// change mail top header
$('.mail_top_header').dblclick(function(){
   $('.mail_top_header').addClass('dis-none');
   $('.change_mail_top_header').removeClass('dis-none');
   $('.input_change_mail_header').focus();
});
$('.input_change_mail_header').blur(function(){
    val_input = $('.input_change_mail_header').val();
    if(val_input == ""){
        $('.input_change_mail_header').focus();
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Bạn chưa nhập nội dung cần thay đổi',
            showConfirmButton: false,
            timer: 1000
            });
    }else{
        $('.mail_top_header').text(val_input);
        $('.mail_header_top_hidden').val(val_input);

        $('.mail_top_header').removeClass('dis-none');
        $('.change_mail_top_header').addClass('dis-none');

        $('.content_confirm_change').removeClass('dis-none');
    }
});
// change phone top header
$('.phone_top_header').dblclick(function(){
   $('.phone_top_header').addClass('dis-none');
   $('.change_phone_top_header').removeClass('dis-none');
   $('.input_change_phone_header').focus();
});
$('.input_change_phone_header').blur(function(){
    val_input = $('.input_change_phone_header').val();
    if(val_input == ""){
        $('.input_change_phone_header').focus();
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Bạn chưa nhập nội dung cần thay đổi',
            showConfirmButton: false,
            timer: 1000
            });
    }else{
        $('.phone_top_header').text(val_input);
        $('.phone_header_top_hidden').val(val_input);

        $('.phone_top_header').removeClass('dis-none');
        $('.change_phone_top_header').addClass('dis-none');

        $('.content_confirm_change').removeClass('dis-none');
    }
});
// change address footer

// change color
setInterval(() => {
    // old val
    var main_background_old = $('#main_background_old').val();
    var main_color_old = $('#main_color_old').val();
    var top_background_old = $('#top_background_old').val();
    var top_color_old = $('#top_color_old').val();
    var footer_background_old = $('#footer_background_old').val();
    var footer_color_old = $('#footer_color_old').val();
    // current val
    var main_background = $('#main_background').val();
    var main_color = $('#main_color').val();
    var top_background = $('#top_background').val();
    var top_color = $('#top_color').val();
    var footer_background = $('#footer_background').val();
    var footer_color = $('#footer_color').val();

    if(main_background !== main_background_old){
        $('.cus_main_bg').css('background', main_background);
        $('.cus_main_color').css('color', main_background);
        $('.cus_main_border').css('border', '1px solid '+main_background);
        $('#main_background_old').val(main_background);
    }
    if(main_color !== main_color_old){
        $('.cus_main_text').css('color', main_color);
        $('#main_color_old').val(main_color);
    }
    if(top_background !== top_background_old){
        $('.cus_top_bg').css('background', top_background);
        $('#top_background_old').val(top_background);
    }
    if(top_color !== top_color_old){
        $('.cus_top_text').css('color', top_color);
        $('#top_color_old').val(top_color);
    }
    if(footer_background !== footer_background_old){
        $('.cus_footer_bg').css('background', footer_background);
        $('#footer_background_old').val(footer_background);
    }
    if(footer_color !== footer_color_old){
        $('.cus_footer_text').css('color', footer_color);
        $('#footer_color_old').val(footer_color);
    }
}, 1000);


