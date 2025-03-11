<?

$page = $_GET['page'] ?? 1;
$limit = 5;
$offset = ($page - 1) * $limit;
$stmt = $pdo->prepare("SELECT * FROM images ORDER BY created_at DESC LIMIT ? OFFSET ?");
$stmt->execute([$limit, $offset]);