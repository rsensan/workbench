<?php namespace TravelPickr\Mypackage\Facades;

use Illuminate\Support\Facades\Facade;

class Mypackage extends Facade {

  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'mypackage'; }

}
?>