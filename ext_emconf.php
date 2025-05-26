<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Anyrel - Distributor - Mail',
    'description' => 'Send form data via Mail',
    'category' => 'be',
    'author' => 'Damian Ickler',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'version' => '3.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
            'dmf_distributor_core' => '3.0.0-3.99.99',
            'dmf_mail' => '2.0.0-2.99.99',
            'dmf_template_engine_twig' => '3.0.0-3.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
