<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // public static function boot() {
    //     parent::boot();
    //     self::deleting(function($post) { // before delete() method call this
    //          $post->getCategory()->each(function($comment) {
    //             $comment->delete(); // <-- direct deletion
    //          });
    //          // do the rest of the cleanup...
    //     });
    // }


}
