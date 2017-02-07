<?php
    require 'config/paths.php';

    require 'libs/bootstrap.php';
    require 'libs/controller.php';
    require 'libs/model.php';
    require 'libs/view.php';
    require 'libs/database.php';
    require 'libs/session.php';

    $app = new Bootstrap();
    Session::init();
?>