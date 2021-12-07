<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomLayout extends Model
{
    use SoftDeletes;
    protected $table = 'layout';
    public $timestamps = false;
    protected $dates = ['deleted_at'];
    protected $primaryKey = 'layout_id';
    protected $fillable = [
    	'logo','main_background','main_color_text',
        'top_background','top_color_text','footer_background','footer_color_text',
        'text_mail', 'text_phone', 'status','deleted_at'
    ];
}
