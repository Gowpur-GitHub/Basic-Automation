<?php

namespace App\Observers;

use App\Models\User;
use App\Models\Kriteria;
use App\Models\SubKriteria;
use App\Models\SubKriteria1;
use App\Models\SubKriteria2;
use App\Models\SubKriteria3;
use App\Models\SubKriteria4;
use App\Models\SubKriteria5;
/*use App\Models\SubKriteria6;*/
use Illuminate\Support\Str;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        $dataKriteria = [
            [
                'kodeKriteria' => 'C1',
                'namaKriteria' => 'Harga',
                'bobot' => '4',
                'jenis' => 'cost'
            ],
            [
                'kodeKriteria' => 'C2',
                'namaKriteria' => 'Ukuran Layar',
                'bobot' => '3',
                'jenis' => 'benefit'
            ],
            [
                'kodeKriteria' => 'C3',
                'namaKriteria' => 'Resolusi Layar',
                'bobot' => '5',
                'jenis' => 'benefit'
            ],
            [
                'kodeKriteria' => 'C4',
                'namaKriteria' => 'Teknologi Panel',
                'bobot' => '5',
                'jenis' => 'benefit'
            ],
            [
                'kodeKriteria' => 'C5',
                'namaKriteria' => 'Refresh Rate',
                'bobot' => '3',
                'jenis' => 'benefit'
            ],
            [
                'kodeKriteria' => 'C6',
                'namaKriteria' => 'Response Time',
                'bobot' => '3',
                'jenis' => 'benefit'
            ]
            /*[
                'kodeKriteria' => 'C7',
                'namaKriteria' => 'Color Gamut',
                'bobot' => '4',
                'jenis' => 'benefit'
            ]*/
        ];

        Kriteria::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataKriteria));

        $dataSubKriteria = [
            [
                'harga' => 'Rp 1.5 juta - Rp 3 juta',
                'nHarga' => '1'
            ],
            [
                'harga' => 'Rp 3 juta - Rp 6 juta',
                'nHarga' => '2'
            ],
            [
                'harga' => 'Rp 6 juta - Rp 9 juta',
                'nHarga' => '3'
            ],
            [
                'harga' => 'Rp 9 juta - Rp 12 juta',
                'nHarga' => '4'
            ],
            [
                'harga' => 'Rp 12 juta - Rp 15 juta',
                'nHarga' => '5'
            ]
        ];

        SubKriteria::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria));

        $dataSubKriteria1 = [
            [
                'ukuranLayar' => '18.5 inch - 24.6 inch',
                'nUkuranLayar' => '1'
            ],
            [
                'ukuranLayar' => '25 inch - 30.7 inch',
                'nUkuranLayar' => '2'
            ],
            [
                'ukuranLayar' => '31 inch - 36.8 inch',
                'nUkuranLayar' => '3'
            ],
            [
                'ukuranLayar' => '37 inch - 42.9 inch',
                'nUkuranLayar' => '4'
            ],
            [
                'ukuranLayar' => '43 inch - 49 inch',
                'nUkuranLayar' => '5'
            ]
        ];

        SubKriteria1::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria1));

        $dataSubKriteria2 = [
            [
                'resolusiLayar' => '720p/768p (HD)',
                'nResolusiLayar' => '1'
            ],
            [
                'resolusiLayar' => '900p (HD+)',
                'nResolusiLayar' => '2'
            ],
            [
                'resolusiLayar' => '1080p (FHD)',
                'nResolusiLayar' => '3'
            ],
            [
                'resolusiLayar' => '1440p (QHD/WQHD/2K)',
                'nResolusiLayar' => '4'
            ],
            [
                'resolusiLayar' => '2160p (Ultra HD/4K)',
                'nResolusiLayar' => '5'
            ]
        ];

        SubKriteria2::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria2));

        $dataSubKriteria3 = [
            [
                'teknologiPanel' => 'TN (Twisted Nematic)',
                'nTeknologiPanel' => '1'
            ],
            [
                'teknologiPanel' => 'PLS (Plane to Line Switching)',
                'nTeknologiPanel' => '2'
            ],
            [
                'teknologiPanel' => 'VA (Vertical Alignment)',
                'nTeknologiPanel' => '3'
            ],
            [
                'teknologiPanel' => 'SVA (Super Vertical Alignment)',
                'nTeknologiPanel' => '4'
            ],
            [
                'teknologiPanel' => 'IPS (In Plane Switching)',
                'nTeknologiPanel' => '5'
            ]
        ];

        SubKriteria3::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria3));

        $dataSubKriteria4 = [
            [
                'refreshRate' => '60 Hz - 75 Hz',
                'nRefreshRate' => '1'
            ],
            [
                'refreshRate' => '144 Hz - 165 Hz',
                'nRefreshRate' => '2'
            ],
            [
                'refreshRate' => '166 Hz - 240 Hz',
                'nRefreshRate' => '3'
            ],
            [
                'refreshRate' => '241 Hz - 300 Hz',
                'nRefreshRate' => '4'
            ],
            [
                'refreshRate' => '301 Hz - 360 Hz',
                'nRefreshRate' => '5'
            ]
        ];

        SubKriteria4::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria4));

        $dataSubKriteria5 = [
            [
                'responseTime' => '6 ms - 5 ms',
                'nResponseTime' => '1'
            ],
            [
                'responseTime' => '4 ms - 3 ms',
                'nResponseTime' => '2'
            ],
            [
                'responseTime' => '2 ms',
                'nResponseTime' => '3'
            ],
            [
                'responseTime' => '1 ms',
                'nResponseTime' => '4'
            ],
            [
                'responseTime' => '0.5 ms',
                'nResponseTime' => '5'
            ]
        ];

        SubKriteria5::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria5));

        /*$dataSubKriteria6 = [
            [
                'colorGamut' => 'NTSC 72%',
                'nColorGamut' => '1'
            ],
            [
                'colorGamut' => 'sRGB 90% - 100%',
                'nColorGamut' => '2'
            ],
            [
                'colorGamut' => 'AdobeRGB 90% - 100%',
                'nColorGamut' => '3'
            ],
            [
                'colorGamut' => 'DCI-P3 90% - 100%',
                'nColorGamut' => '4'
            ],
            [
                'colorGamut' => 'Rec. 2020',
                'nColorGamut' => '5'
            ]
        ];

        SubKriteria6::insert(array_map(function ($item) use ($user) {
            return array_merge($item, [
                'user_id' => $user->id,
                'slug' => Str::random(8)
            ]);
        }, $dataSubKriteria6));*/
    }
}
