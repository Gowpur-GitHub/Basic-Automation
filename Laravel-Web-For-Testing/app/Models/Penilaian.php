<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['alternatif', 'user'];
    protected $casts = ['updated_at' => 'datetime'];

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'alternatif_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getFormattedUpdatedAt()
    {
        if ($this->updated_at === null) {
            return 'Data Kosong';
        }

        $updatedAt = $this->updated_at;

        if ($updatedAt->isToday()) {
            return 'Updated today at ' . $updatedAt->format('h:i A');
        } elseif ($updatedAt->isYesterday()) {
            return 'Updated yesterday at ' . $updatedAt->format('h:i A');
        } else {
            return 'Updated on ' . $updatedAt->format('F j, Y') . ' at ' . $updatedAt->format('h:i A');
        }
    }
}
