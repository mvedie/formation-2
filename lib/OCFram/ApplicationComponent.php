<?php
/**
 * Created by PhpStorm.
 * User: cmoulia
 * Date: 27/02/2017
 * Time: 17:02
 */

namespace OCFram;


abstract class ApplicationComponent {
	protected $app;
	
	public function __construct( Application $app ) {
		$this->app = $app;
	}
	
	/**
	 * @return Application
	 */
	public function getApp() {
		return $this->app;
	}
}