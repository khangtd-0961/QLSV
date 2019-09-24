<?php
 App::uses('AppController','Controller');
 class DiemsController extends AppController{


    public $helpers = array('Html','Form','Flash');
    public $components = array('Flash');
    public $name = 'Diems';

     public function index(){
        $this->set('diem', $this->Page->find('all'));
    }
 }
?>