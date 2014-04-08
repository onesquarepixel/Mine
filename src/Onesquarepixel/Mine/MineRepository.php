<?php namespace Onesquarepixel\Mine;

class MineRepository {

  public function addAdminRouteGroup()
  {
    $content = \File::get(__DIR__ . '/../../templates/routes/adminRoutes.txt');

    $route_file = \File::get(app_path() . '/routes.php');

    if (!strpos($route_file, "'prefix' => 'admin'"))
      \File::append(app_path() . '/routes.php', $content);
  }

  public function addAdminViewsFolder()
  {
    if(!is_dir(app_path() . "/views/admin"))
      \File::makeDirectory(app_path() . "/views/admin", 0700);
  }

  public function makeAdminLoginPage()
  {
    if(!is_file(app_path() . '/views/admin/login.blade.php'))
      \File::copy(__DIR__ . '/../../templates/views/login.blade.php', app_path() . '/views/admin/login.blade.php');
  }

  public function copyCss()
  {
    if(!is_dir(public_path() . '/css'))
      \File::copyDirectory(__DIR__ . '/../../templates/css', public_path() . '/css');
  }

  public function copyJs()
  {
    if(!is_dir(public_path() . '/js'))
      \File::copyDirectory(__DIR__ . '/../../templates/js', public_path() . '/js');
  }
}