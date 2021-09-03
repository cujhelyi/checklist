<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];
    //this is the input box branch

    public function page(){
        return $this->belongsTo(Page::class);
    }

}
