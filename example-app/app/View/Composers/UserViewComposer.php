<?php 

namespace App\View\Composers;

use Illuminate\View\View;

class User {
  public $name;
  public $email;

  public function __construct($name, $email) {
      $this->name = $name;
      $this->email = $email;
  }
}

class UserViewComposer
{
  public function compose(View $view)
  {
    $view->with('user', new User('Renan Garcia', 'r@r.com'));
  }
}

?>