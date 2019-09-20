<?php
App::uses('AppModel', 'Model');
class Page extends AppModel{
    public $page = 'Page';

    public $validate = array(
        'Masinhvien' => array(
            'rule' => 'notBlank'
        ),
        'Mamonhoc' => array(
            'rule' => 'notBlank'
        ),
        'Malop' => array(
            'rule' => 'notBlank'
        ),
        'Ten' => array(
            'rule' => 'notBlank'
        ),
        'Ngaysinh' => array(
            'rule' => 'notBlank'
        ),
        'Gioitinh' => array(
            'rule' => 'notBlank'
        )
    );
}