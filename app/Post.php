<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
            'body',
        ];
    
    protected $guarded = ['id'];
    
    public static $rules = [
            'body' => 'required|max:500',
            'image' => 'image|file',
        ];
   
   public function getPaginateByLimit(int $limit_count = 5)
   {
   // updated_atで降順に並べたあと、limitで件数制限をかける
   return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
   }
}
