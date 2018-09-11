<?php

namespace App\Models;

use App\Models\BaseModel;

class gallery extends BaseModel
{
    public $imageFileName='gallery';
    protected $table = 'gallery';
    protected $fillable = ['title_tr', 'title_en','title_sq', 'main_image','main_image_downloadable', 'created_by', 'updated_by','position'];
     public static $rules = array(
    );
    public static $updaterules = array(
    );
    

    public static $fields = array('title_tr', 'title_en','title_sq' );
    public static $imageFields = array(
        ["name" => "main_image", "width" => 350, "height" => 250, 'crop' => true, 'naming' => 'title_tr', 'diff' => 'thumb'], //1.6
        ["name" => "main_image_downloadable", "width" => 1800, "height" => 1200, 'crop' => true, 'naming' => 'title_tr', 'diff' => '']
    );
    public static $imageFieldNames = array(
        "main_image",
        "main_image_downloadable"
    );
    public static $docFields = array(
    );
    public static $booleanFields = array(
        
    );
    public static $dateFields = array(
        
    );
    public static $urlFields = array(
        
    );

    public static function boot(){
        parent::boot();
        static::creating(function($model)
        {
           
            if($model->title_en == null){
                $model->title_en = $model->title_tr;
            }

            if($model->title_sq == null){
                $model->title_sq = $model->title_tr;
            }

           
            
        });
    }

    /**
     * An article may have many images.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    
}