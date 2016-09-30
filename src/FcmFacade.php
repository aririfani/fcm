<?php

namespace Aririfani\Fcm;

use Illuminate\Support\Facades\Facade;

class FcmFacade extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'fcm';
	}
}