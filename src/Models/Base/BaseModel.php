<?php
	
	namespace AppsBay\Models\Base;
	use AppsBay\Models\Base\CustomQuery;
	use Illuminate\Database\Eloquent\Model;
	
	/**
	 * Created by Alabi Olawale
	 * Date: 12/07/2020
	 */
	
	class BaseModel extends Model{
		use CustomQuery;
	}
