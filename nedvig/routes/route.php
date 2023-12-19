<?php 

use app\utils\Router;
use app\controllers\Info;


Router::myGet('/catalog' , 'catalog');
Router::myGet('/item' , 'item');
Router::myGet('/admin', 'admin');
Router::myGet('/login', 'login');
Router::myGet('/', 'main');

Router::myPost('/add', Info::class, 'addInfo', true, false);

Router::myPost('/signup', Info::class, 'signup', true, false);

Router::getContent();