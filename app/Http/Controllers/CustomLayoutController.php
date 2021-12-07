<?php

namespace App\Http\Controllers;

use App\CustomLayout;
use Illuminate\Http\Request;

class CustomLayoutController extends Controller
{
    public static function fnColorLayout($layout_id){
        $layout = CustomLayout::find($layout_id);
        return $layout;
    }
    public static function ShowCusLayOut_FontEnd(){
        $layout = CustomLayout::where('status', 1)->first();
        return $layout;
    }

    public function show_layout_custom(){
        return view('admin.custom_layout.custom_layout');
    }
    public function all_layout(){
        $all_layout = CustomLayout::all();
        return view('admin.custom_layout.all_layout',['all_layout'=>$all_layout]);
    }
    public function saw_layout($layout_id){
        return view('admin.custom_layout.saw_layout',['layout_id'=>$layout_id]);
    }
    public function add_layout(){
        return view('admin.custom_layout.custom_layout');
    }
    public function process_custom_layout(Request $request){
        $mail = $request->mail_header_top_hidden;
        $phone = $request->phone_header_top_hidden;
        $main_background = $request->main_background_old;
        $main_color = $request->main_color_old;
        $top_background = $request->top_background_old;
        $top_color = $request->top_color_old;
        $footer_background = $request->footer_background_old;
        $footer_color = $request->footer_color_old;
        $get_image = $request->file('logo');

        $new_layout = new CustomLayout();
        $new_layout->main_background = $main_background;
        $new_layout->main_color_text = $main_color;
        $new_layout->top_background = $top_background;
        $new_layout->top_color_text = $top_color;
        $new_layout->footer_background = $footer_background;
        $new_layout->footer_color_text = $footer_color;
        $new_layout->text_mail = $mail;
        $new_layout->text_phone = $phone;

        if(isset($get_image)){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload',$new_image);
            $new_layout->logo = $new_image;
        }
        else{
            $new_layout->logo = ('logo_mku_8.svg');
        }

        $new_layout->save();

        $request->session()->flash('success', 'Thêm giao diện thành công');
        return redirect('admin/all_layout');
    }
    public function set_layout(Request $request){
        $layout_id = $request->layout_id;

        $set_default_status = CustomLayout::where('status', 1)->first();
        $set_default_status->status = 0;
        $set_default_status->save();

        $set_status = CustomLayout::find($layout_id);
        $set_status->status = 1;
        $set_status->save();
        $request->session()->flash('success', 'Thiết lập giao diện thành công');
        return redirect()->back();
    }
    public function update_layout(Request $request, $layout_id){

        return view('admin.custom_layout.view_update_layout',['layout_id'=>$layout_id]);
    }
    public function process_update_layout(Request $request, $layout_id){
        $mail = $request->mail_header_top_hidden;
        $phone = $request->phone_header_top_hidden;
        $main_background = $request->main_background_old;
        $main_color = $request->main_color_old;
        $top_background = $request->top_background_old;
        $top_color = $request->top_color_old;
        $footer_background = $request->footer_background_old;
        $footer_color = $request->footer_color_old;
        $get_image = $request->file('logo');

        $update_layout = CustomLayout::find($layout_id);
        $update_layout->main_background = $main_background;
        $update_layout->main_color_text = $main_color;
        $update_layout->top_background = $top_background;
        $update_layout->top_color_text = $top_color;
        $update_layout->footer_background = $footer_background;
        $update_layout->footer_color_text = $footer_color;
        $update_layout->text_mail = $mail;
        $update_layout->text_phone = $phone;

        if(isset($get_image)){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload',$new_image);
            $new_layout->logo = $new_image;
        }
        $update_layout->save();

        $request->session()->flash('success', 'Cập nhật giao diện thành công');
        return redirect('admin/all_layout');
    }
    public function soft_delete_layout(Request $request){
        $layout_id = $request->layout_id;
        $delete_layout = CustomLayout::find($layout_id)->delete();
        $request->session()->flash('success', 'Xóa thành công');
        return redirect()->back();
    }
    public function view_recycle_layout(){
        $all_recycle_layout = CustomLayout::onlyTrashed()->get();
        return view('admin.custom_layout.view_recycle_layout',['all_recycle_layout'=>$all_recycle_layout]);
    }
    public function re_delete_layout($layout_id, Request $request){
        $restore = CustomLayout::withTrashed()->where('layout_id', $layout_id)->restore();
        $request->session()->flash('success', 'Khôi phục giao diện thành công');
        return redirect()->back();
    }
    public function delete_forever_layout(Request $request){
        $layout_id = $request->layout_id;
        $delete_forever = CustomLayout::withTrashed()->where('layout_id', $layout_id)->forceDelete();
        $request->session()->flash('success', 'Xóa vĩnh viễn giao diện thành công');
        return redirect()->back();
    }
}
