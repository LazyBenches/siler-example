<?php

use App\Repository\User as UserRepository;
use Siler\Http;
use Symfony\Component\Yaml\Yaml;

$users = new UserRepository();

switch (Http\get('format', 'json')) {
    case 'json':
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($users->all());
        break;

    case 'xml':
        header('Content-Type: application/xml; charset=utf-8');
        echo Siler\Twig\render('api/users.twig', ['users' => $users->all()]);
        break;

    case 'yaml':
    case 'yml':
        header('Content-Type: application/yaml; charset=utf-8');
        echo Yaml::dump($users->all());
        break;

    default:
        echo 'Sorry, format not supported';
}

exit();
