<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//論理削除の実装
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'fish',
        'rod_id',
        'reel_id',
        'mainline_id',
        'lure_id',
        'image'
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
    public function rod()
{
    return $this->belongsTo('App\Rod');
}
    public function reel()
{
    return $this->belongsTo('App\Reel');
}
    public function mainline()
{
    return $this->belongsTo('App\Mainline');
}
    public function lure()
{
    return $this->belongsTo('App\Lure');
}
}