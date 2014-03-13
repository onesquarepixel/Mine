<?php namespace Onesquarepixel\Mine;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class MineInitCommand extends Command {

  /**
   * The console command name.
   *
   * @var string
   */
  protected $name = 'mine:init';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Add an Admin Panel to your application.';

  /**
   * Create a new command instance.
   *
   * @return void
   */
  public function __construct()
  {
    parent::__construct();
    $this->mine = new Mine;
  }

  /**
   * Execute the console command.
   *
   * @return mixed
   */
  public function fire()
  {
    // $this->call('php artisan confide:controller');
    // $this->call('php artisan confide:routes');
    // $this->line(Mine::greeting());

    $this->mine->adminPages();

    $this->line('Admin Pages created');

    // File::append(app_path() . '/routes.php', 'ere');
  }

  /**
   * Get the console command arguments.
   *
   * @return array
   */
  protected function getArguments()
  {
    return array();
  }

  /**
   * Get the console command options.
   *
   * @return array
   */
  protected function getOptions()
  {
    return array(
      // array('age', 'a', InputOption::VALUE_OPTIONAL, 'An example option.', null),
    );
  }

}
