<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Category extends Model implements SluggableInterface {

    use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'titulo',
        'save_to' => 'slug',
        'on_update' => true,
    );

    public function products()
    {
        return $this->hasMany('App\Product');
    }

}
