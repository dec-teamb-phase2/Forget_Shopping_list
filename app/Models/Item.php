<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;

class Item extends Model
{
    use HasFactory;
    use Prunable;
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
      ];

    public static function getAllOrderByUpdated_at()
    {
        return self::orderBy('updated_at', 'desc')->get();
    }
    public function prunable()
    {
        return static::where('created_at', '<=', now()->subSeconds(10));
        //10秒前のデータを削除
    }
}
