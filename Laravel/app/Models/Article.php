<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
	public static function all_with_category(){
		
		$articles = Article::leftJoin('categories', 'articles.category_id', '=', 'categories.id')
		->select(
			 'articles.id'
			,'articles.title'
			,'articles.body'
			,'categories.name as category_name' 
			,'categories.description as category_description'
			,'articles.created_at'
			,'articles.updated_at'
			)
		->get();

		return $articles;
	}

    public function category()
    {
    	return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
}
