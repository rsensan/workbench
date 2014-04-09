<?php namespace Rsensan\Workbench;

use Illuminate\Support\ServiceProvider;

class WorkbenchServiceProvider extends ServiceProvider {

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
		$this->package('rsensan/workbench');
		include __DIR__.'/../../../../../../app/routes.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['workbench'] = $this->app->share(function($app)
		{
			return new Workbench;
		});
		$this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('Workbench', 'Rsensan\Workbench\Facades\Workbench');
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