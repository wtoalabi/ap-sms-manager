<?php
	/**
	 * Created by Alabi Olawale
	 * Date: 08/07/2020
	 */
	
	namespace AppsBay\Controllers\Dashboard;
	
	use AppsBay\Controllers\Controller;
	use AppsBay\Models\Contacts\Contact;
	use AppsBay\Models\Contacts\ContactResource;
	use AppsBay\Models\Contacts\ContactsCollection;
	use AppsBay\Models\Groups\Group;
	use Illuminate\Database\Capsule\Manager as Capsule;
	use League\Fractal\Manager;
	use League\Fractal\Resource\Collection;
	use Spatie\Fractalistic\Fractal;
	
	
	class DashboardControllers {
		public function index($request) {
			$result = (new Contact())->filterQuery($request);
			return new ContactsCollection($result);
		}
		
		public function store() {
			var_dump( "storing!" );
		}
		
		public function update() {
			var_dump( "updating..." );
		}
		
		public function delete() {
			var_dump( "deleting..." );
		}
	}
