# html-twig
Lib for use twig 
Doc twig for templates: https://twig.symfony.com/doc/3.x/templates.html
Twig min ^3

Example use 
```
$html = \xeki\module_manager::import_module('html-twig');
$data = [];
$data[name]='nameUser';
$html->render('users/list_all.html',$data);
```

Example template 
```
{% for item in users %}
    <li>{{ item.name }}</li>
{% endfor %}

{% if name starts with 'F' %}
    <li>{{ item.name }}</li>
{% endif %}
```