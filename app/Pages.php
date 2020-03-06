<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
class Pages extends Model
{
    protected $fillable= ['przedmiot',
        'poziom',
        'lokalizacja',
        'tel',
        'Imie',
        'title',
        'content',
        'id_us'
    ];
}
