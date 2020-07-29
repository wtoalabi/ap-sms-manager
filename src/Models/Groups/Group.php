<?php
	
	namespace AppsBay\Models\Groups;
	use AppsBay\Models\Base\BaseModel;
	use AppsBay\Models\Contacts\Contact;
	use Illuminate\Database\Eloquent\Model;
	/**
	 * Created by Alabi Olawale
	 * Date: 11/07/2020
	 */
	
	class Group extends BaseModel {
		protected $fillable = ['name'];
		protected $withCount =['contacts'];
		public function contacts(  ) {
			return $this->hasMany(Contact::class);
		}
	}
