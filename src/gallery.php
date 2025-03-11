<?

$stmt = $pdo->query("SELECT * FROM images ORDER BY created_at DESC");
$images = $stmt->fetchAll();