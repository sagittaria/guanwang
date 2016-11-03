<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	# 获取本文所属的分档
	public function catalog()
	{
		return $this->belongsTo(Catalog::class);
	}
}
