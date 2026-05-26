<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Anyrel - Distributor - Mail',
    'description' => 'Send form data via Mail',
    'category' => 'be',
    'author' => 'Damian Ickler',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'version' => '4.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-14.99.99',
            'dmf_distributor_core' => '4.0.0-4.99.99',
            'dmf_mail' => '3.0.0-3.99.99',
            'dmf_template_engine_twig' => '4.0.0-4.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
