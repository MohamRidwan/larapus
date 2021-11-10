<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    // protected $fillable = ['title','author_id','amount','cover'];
    protected $visible = ['title','author_id','amount','cover'];
    public $timestamps = true;

    // membuat relasi one to many
    public function author()
    {
        // data model 'Book' bisa dimiliki oleh Model "Author"
        // melalui fk "author_id"
        return $this->belongsTo('App\Model\Author','author_id');
    }
}
