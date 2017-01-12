<?php

$users = (new App\Model\Users)->getAll();

echo '<ul>';
foreach ($users as $user) {
    echo '<li>'.$user['name'].'</li>';
}
echo '</ul>';

$banks = (new App\Model\Banks)->getAll();

echo '<ul>';
foreach ($banks as $bank) {
    echo '<li>'.$bank['title'].' - '.$bank['code'].'</li>';
}
echo '</ul>';
