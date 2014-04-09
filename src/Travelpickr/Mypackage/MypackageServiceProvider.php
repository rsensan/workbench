<?php namespace Travelpickr\Mypackage;

use Illuminate\Support\ServiceProvider;

class MypackageServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('travelpickr/mypackage');
		include __DIR__.'/../../../../../../app/routes.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['mypackage'] = $this->app->share(function($app)
		{
			return new Mypackage;
		});
		$this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('Mypackage', 'Travelpickr\Mypackage\Facades\Mypackage');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}