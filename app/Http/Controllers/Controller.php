<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Teepluss\Theme\Facades\Theme;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;
	
	protected $theme;
	
	protected $model;
	
	public function SetupTheme($theme='default',$layout='default')
	{
		$this->theme=Theme::uses($theme)->layout($layout);
	}
}
