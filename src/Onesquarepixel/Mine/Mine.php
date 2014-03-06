<?php namespace Onesquarepixel\Mine;

class Mine {

  public function adminPages()
  {
    $this->addAdminRouteGroup();
    $this->addAdminViewsFolder();
    $this->makeAdminLoginPage();
    $this->copyCss();
    $this->copyJs();
  }

  public function addAdminRouteGroup()
  {
    $content = \File::get(__DIR__ . '/../../templates/adminRoutes.txt');

    \File::append(app_path() . '/routes.php', $content);
  }

  public function addAdminViewsFolder()
  {
    \File::makeDirectory(app_path() . "/views/admin", 0700);
  }

  public function makeAdminLoginPage()
  {
    \File::copy(__DIR__ . '/../../templates/login.blade.php', app_path() . '/views/admin/login.blade.php');
  }

  public function copyCss()
  {
    \File::copyDirectory(__DIR__ . '/../../templates/css', public_path() . '/css');
  }

  public function copyJs()
  {
    \File::copyDirectory(__DIR__ . '/../../templates/js', public_path() . '/js');
  }

}