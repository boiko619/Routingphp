

    <?php

switch ($_SERVER['REQUEST_URI']) {
    case '/':
        # code...
        require_once CONTROLLERS.'homecontroller.php';
        break;
    case '/about':
        # code...
        require_once CONTROLLERS.'aboutcontroller.php';
        break;
    case '/blog':

        require_once CONTROLLERS.'blogcontroller.php';
        break;
    default:
        # code...
       require_once VIEWS.'error/404.php';
}
/*function getURI(){
    if(isset($_SERVER['REQUEST_URI']) and empty($_SERVER['REQUEST_URI'])){
        return trim($_SERVER['REQUEST_URI'],'/');

    }
}
$URI=getURI();
 $filename= CONFIG.'routers.php';
  if(file_exists($filename)){
      $routes=include_once $filename;

  }
  else{
      echo('Это не работает $filename');
      
  }
  foreach($routes as $route => $path){
      if($route==$URI){
          $controllername = $path;

                   $controllerFile = CONTROLLERS . $controllername . ".php";
        
             if (file_exists($controllerFile)) {
                 include_once $controllerFile;
                 $result = true;
             }
            
             if ($result !== null) {
                 break;
             }
         }
     }
        
     if ($result === null) {
             include_once VIEWS.'errors/404'.EXT;
     }

  */

?>