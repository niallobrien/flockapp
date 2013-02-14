<?php namespace Meido\Form;

use Illuminate\Support\ServiceProvider;
use Meido\Form\Form;

class FormServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['form'] = $this->app->share(function($app)
		{
			return new Form($app->url);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('form');
	}

}