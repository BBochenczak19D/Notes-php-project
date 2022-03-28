<?php
declare(strict_types=1);
namespace App;

    require_once("C:xampp/htdocs/project/src/utils/debug.php");
    require_once("C:xampp/htdocs/project/src/view.php");
    
    const DEFAULT_ACTION ='list';


    $action = $_GET['action'] ?? DEFAULT_ACTION;
    $view = new view();
    

    $viewParams = [];
        if($action === 'create'){
            $page = 'create';
            
            if(!empty($_POST)){
                $viewParams = 
                [
                    'title' => $_POST['title'],
                    'description' => $_POST['description']
                ];
            };
    } else {
        $page = 'list';
        $viewParams['resultList'] = "wyswietlamy notatki";
    };

    $view->render($page, $viewParams);
    dump($viewParams);

    

    
    


