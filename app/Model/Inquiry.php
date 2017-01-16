<?php
class Inquiry extends AppModel {

    public $validate = [
        'name' => [
            'rule' => ['notBlank']
        ],
        'email' => [
            'rule' => ['notBlank']
        ],
        'tel' => [
            'rule' => ['notBlank']
        ],
        'kind' => [
            'rule' => ['notBlank']
        ],
        'when' => [
            'rule' => ['notBlank']
        ],

      ];
}
