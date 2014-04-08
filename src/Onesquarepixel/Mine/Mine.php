<?php namespace Onesquarepixel\Mine;

require_once 'Helper.php';
require_once 'MineRepository.php';
require_once 'AdminRepository.php';

class Mine {

  public function __construct()
  {
    $this->repo = new MineRepository;
    $this->helper = new Helper;
    $this->admin_repo = new AdminRepository;
  }

  public function adminPages()
  {
    $this->repo->addAdminRouteGroup();
    $this->repo->addAdminViewsFolder();
    $this->repo->makeAdminLoginPage();
    $this->repo->copyCss();
    $this->repo->copyJs();
  }

  public function adminController()
  {
    // $this->admin_repo->
  }

  public function reset()
  {
    $this->helper->rmdir_recursive(app_path() . '/views/admin');
    $this->helper->rmdir_recursive(public_path() . '/css');
    $this->helper->rmdir_recursive(public_path() . '/js');
  }

}