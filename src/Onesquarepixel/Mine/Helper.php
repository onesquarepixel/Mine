<?php namespace Onesquarepixel\Mine;

class Helper {

  public static function rmdir_recursive($dir) {
      if(is_dir($dir))
      {
        foreach(scandir($dir) as $file) {
            if ('.' === $file || '..' === $file) continue;
            if (is_dir("$dir/$file")) static::rmdir_recursive("$dir/$file");
            else unlink("$dir/$file");
        }
        rmdir($dir);
      }
  }
}