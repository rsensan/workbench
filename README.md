workbench
=========

My First Laravel Package

======================================================================
Add following lines in routes.php

Route::get('/greeting', function(){
  echo Workbench::birthDayGreeting();
});

Route::get('/test', function(){
  echo Workbench::greeting();
});

======================================================================
Add following line in app/config.php

'Travelpickr\Mypackage\MypackageServiceProvider',
