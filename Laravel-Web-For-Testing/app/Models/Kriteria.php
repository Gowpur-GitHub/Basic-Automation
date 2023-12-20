<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Kriteria extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['user'];
    protected $casts = ['updated_at' => 'datetime'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'kodeKriteria'
            ]
        ];
    }

    public function getFormattedUpdatedAt()
    {
        if ($this->updated_at === null) {
            return 'Data Belum Diupdate';
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
