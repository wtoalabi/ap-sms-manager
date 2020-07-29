<?php
	
	namespace AppsBay\Models\Settings;
	use AppsBay\Models\Base\BaseModel;
	
	class Setting extends BaseModel {
		protected $fillable = ['settings'];
		protected $casts = [
			'settings'=>'json'
		];
	}
