<?php

return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'enableStrictParsing' => false,
    'rules' => [
        '/ajax/<action>' => '/ajax/<action>',
        '/login' => '/site/login',
        '/logout' => '/site/logout',
        '/' => '/site/numerology',
	]
];