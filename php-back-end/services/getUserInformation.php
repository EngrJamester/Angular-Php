<?php

    require_once '../classes/userInformationRepository.php';

    header('Access-Control-Allow-Origin: http://localhost:4200');
    header('Content-type: application/json');

    echo ")]}'\n";

    $userinformation = userInformationRepository::getUserInformation();
    echo json_encode($userinformation);




