<?php 

namespace Nocarefree\PageManager\Policies;

use Illuminate\Support\Facades\Route;
use Models\User;

class RoutePolicy{

	function __construct(){
		$this->currentRoute = Route::current();
	}

	function access(User $user, String $code){
		return $code;
	}

/*	function getUserRoutes(){
		return $user->routes;
	}*/
}