<?php namespace Onesquarepixel\Mine;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class MineResetCommand extends Command {

  /**
   * The console command name.
   *
   * @var string
   */
  protected $name = 'mine:reset';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Remove all mine contents.';

  /**
   * Create a new command instance.
   *
   * @return void
   */
  public function __construct()
  {
    parent::__construct();
    $this->mine = new Mine(new MineRepository, new Helper);
  }

  /**
   * Execute the console command.
   *
   * @return mixed
   */
  public function fire()
  {

    $this->mine->reset();
    $this->line('All Mine files deleted.');

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
