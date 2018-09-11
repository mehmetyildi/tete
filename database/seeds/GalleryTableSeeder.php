<?php

use Illuminate\Database\Seeder;

use App\Models\Gallery;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          for($i=1;$i<120;$i++){
        	$gallery=new Gallery();
        	$gallery->title_tr="image".$i;
        	$gallery->main_image_downloadable='/storage/img/pages/gallery/'.$i.'.jpg';
        	$gallery->main_image='/storage/img/pages/gallery/thumb/'.$i.'.jpg';
        	$gallery->updated_by=1;
        	$gallery->created_by=1;
            $gallery->publish=1;
            $gallery->position=$i;
        	$gallery->save();
        }
    }
}
