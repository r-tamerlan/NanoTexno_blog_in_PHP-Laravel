<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';


    public function category()
    {
        return $this->hasOne(Categories::class, 'id', 'post_category_id');
    }

    public function postInfo()
    {
        return $this->hasOne(Postinfo::class, 'id', 'post_info_id');
    }


}
