# html-twig
Lib for use twig 
Doc twig: https://twig.symfony.com/
Twig min ^3

Example use
```
$html = \xeki\module_manager::import_module('html-twig');
$data = [];
$data[name]='nameUser';
$html->render('users/list_all.html',$data);
```