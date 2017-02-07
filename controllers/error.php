<?php
  class Error extends Controller {
      public function __construct() {
          parent::__construct();
          $this->view->msg = 'Error! Page is not find.';
          $this->view->render('error/index');
      }
  }
?>