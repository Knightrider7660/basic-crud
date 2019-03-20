<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookDetails extends Model
{
    protected $table = 'book_details';
    protected $primaryKey = 'bookID';
    protected $fillable = ['title', 'author', 'publisher', 'publish_date', 'available_address', 'price', 'categoryID', 'userID'];

    public function category(){
        return $this->belongsTo('App\Category','categoryID');
    }
}
