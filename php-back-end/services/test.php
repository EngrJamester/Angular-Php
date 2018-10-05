
<?php

require_once '../services/testInfoRepo.php';

header('Access-Control-Allow-Origin: http://localhost:4200');
header('Content-type: application/json');

echo ")]}'\n";

$userinformation = testRepo::getUserInformation();
echo json_encode($userinformation);