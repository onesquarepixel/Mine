<?php namespace Onesquarepixel\Mine;

use Illuminate\Support\ServiceProvider;

use Onesquarepixel\Mine\Helper;
use Onesquarepixel\Mine\MineRepository;

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
	    return new Mine();
	  });

	  $this->app['command.mine.init'] = $this->app->share(function($app)
		{
	    return new MineInitCommand;
		});

		$this->app['command.mine.reset'] = $this->app->share(function($app)
		{
	    return new MineResetCommand;
		});

		$this->commands(array(
			'command.mine.init',
			'command.mine.reset'
		));
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
