<?php
    require 'config/paths.php';
    require 'config/db_param.php';

    require 'libs/Bootstrap.php';
    require 'libs/Controller.php';
    require 'libs/Model.php';
    require 'libs/View.php';
    require 'libs/Database.php';
    require 'libs/Xss.php';
    require 'libs/Session.php';

    Session::init();
    $app = new Bootstrap();
?>