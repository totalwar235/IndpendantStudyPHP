<?php
$dsn = 'mysql:host=localhost;dbname=dsuclass_quary12';
$username = 'dsuclass_quary12';
$password = 'dsuclass_quary12';

$db = new PDO($dsn, $username, $password);
$myUsers = $db->query('SELECT * FROM users');

echo '<ul>';
foreach ($myUsers as $user) {
    echo '<li>' . $user['userName'] . '</li>';
}
echo '</ul>';
