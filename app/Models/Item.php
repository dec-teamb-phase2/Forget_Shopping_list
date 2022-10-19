<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use Prunable;
    use SoftDeletes;
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public static function getAllOrderByUpdated_at()
    {
        return self::orderBy('updated_at', 'desc')->get();
    }
    // public function softdeletes()
    // {
    //     // $result = Item::find($id)->delete();
    //     // return redirect()->route('item.index');
    //     return static::where('updated_at', '<=', now()->subSeconds(10));
    //     //10秒前のデータを削除
    // }
}
