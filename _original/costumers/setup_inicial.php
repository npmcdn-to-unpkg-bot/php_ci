<?php

echo "

Como usar este codeigniter basico

Setup inicial

1) usamos a versão 2.2.5 Codeigniter. Caso precise confirmar entre em /system/core/codeigniter.php -> linha 37
   define('CI_VERSION', '2.2.5')

2) Dentro deste diretório já há um arquivo .htaccess / apenas edita-lo conforme necessidade.
	Lembre de colocar o nome do diretório ou site na frente do index na ultima linha do arquivo. 
	Ex. se o nosso site está no diretório /Application/XAMPP/xampfiles/htdocs/site_teste então a linhe que me refiro deverá ser:
	RewriteRule ^(.*)$ /site_teste/index.php/$1 [L]

3) Dentro do arquivo index.php dentro da raiz deste diretório também devemos setar o direório que o sistema esta para definir 
   o tipo de status do sistema -DEVELOPMENT / TESTING / PRODUCTION

4) O arquivo /application/config/database.php também precisa de uma olhadinha.


Este Codeigniter foi alterado para termos no mínimo dois tipos de classes pai

Conseguimos criar atravez de librearyes alem da classe pai em Core com nomes My_Controller e My_Model
Colocamos também as classes intermediarias Admin_Controller e Fronend_Controller que são filhos da classe My_Controller.

My_Controller
     Admin_Controller
     		Controllers

     Frontend_Controller
             Controllers


Na parte de My_Model, criamos uma especie de base model com as funções já pré-definidas
     get
     get_by
     bet_like
     save
     delete


5) Nao esquecer de carregar todas as classes no auto-load como url, etc..etc..etc..
6) Nao esquecer de setar também o base_url, etc..etc...etc...





";