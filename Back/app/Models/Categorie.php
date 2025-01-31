<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\Article;

class Categorie extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "libelle", "numArticles"
    ];

    public function articles()
    {
        return $this->hasMany(Article::class, 'categorie_id');
    }


}
