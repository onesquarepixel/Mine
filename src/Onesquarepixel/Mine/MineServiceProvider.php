<?php namespace Onesquarepixel\Mine;

use Illuminate\Support\ServiceProvider;

class MineServiceProvider extends ServiceProvider {

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
		$this->package('onesquarepixel/mine');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['mine'] = $this->app->share(function($app)
	  {
	    return new Mine;
	  });

	  $this->app['command.mine'] = $this->app->share(function($app)
		{
	    return new MineInitCommand;
		});

		$this->commands('command.mine');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('mine');
	}

}
