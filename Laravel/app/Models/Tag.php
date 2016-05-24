<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    
    public static function all_with_relations(){
    	$tags = Tag::all()->getDictionary();
    	
    	foreach($tags as $idx => $value){

    		$related_ids = ($value->related_ids ==='') ? array() : explode(',', $value->related_ids);
    		if(count($related_ids)>0){
    			$related = [];
    			foreach($related_ids as $id){
    				array_push($related,['id'=>$id, 'name'=>$tags[$id]->name]);
    			}
    			$tags[$idx]->attributes['related'] = $related;
    		}
    		
    	}
    	return $tags;
    }
}
