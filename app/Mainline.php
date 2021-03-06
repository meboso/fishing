<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//論理削除の実装
use Illuminate\Database\Eloquent\SoftDeletes;

class Mainline extends Model


{
    protected $table = 'main_lines';
    use SoftDeletes;
    protected $fillable = [
        'main_line_name',
         ];
    public function getByLimit(int $limit_count = 5)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
}
    public function getPaginateByLimit(int $limit_count = 5)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
    public function posts()   
{
    return $this->hasMany('App\Post');  
}
}