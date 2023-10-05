<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use SoftDeletes;
    public $directory = '/images/';
    protected $date = ['deleted-at'];

    protected $fillable = ['title','content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function photos()
    {
        return $this->morphMany(Photo::class,'imageable');
    }
    public function tags()
    {
        return $this->morphToMany(Tag::class,'taggable');
    }
    //َAccessor
    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }
   // Mutator
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = Strtoupper($value);
    }

    public function getPathAttribute($value)
    {
     return $this->directory . $value;
    }
}
