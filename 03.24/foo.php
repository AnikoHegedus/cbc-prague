<?php
$p = new PDO("mysql: host=localhost; dbname=foo; charset=utf8", "root", "");
$p->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$s = time();
$stmt = $p->prepare("INSERT INTO foo (name, address) VALUES (?, ?)");
for($i = 0; $i < 500; $i++){
    $stmt->execute([base64_encode(random_bytes(50)), base64_encode(random_bytes(100))]);
}

echo time()-$s;