<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

	function testSeries(){
		return $this->belongsTo('App\TestSeries', 'seriesID','id');
	}

    function createFromArray($arr){
    	foreach ($arr as $key => $value) {
            if($key!='_token'){
                $this->$key=$value;
            }
    	}
    	return $this;
    }
}
