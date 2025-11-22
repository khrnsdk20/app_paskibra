<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: sans-serif; }
        .card {
            border: 2px solid #333;
            padding: 20px;
            width: 350px;
            margin: auto;
            text-align: center;
        }
        h3 { margin: 0; padding: 0; }
        .line { border-bottom: 1px solid #999; margin: 10px 0; }
    </style>
</head>

<body>

<div class="card">
    <h3>PASKIBRA SPANSA SERA</h3>
    <div class="line"></div>

    <p><strong><?= $user['nama'] ?></strong></p>
    <p>NIS: <?= $user['nis'] ?></p>
    <p>Angkatan: <?= $user['angkatan'] ?></p>
    <p>Status: <?= strtoupper($user['status']) ?></p>

    <div class="line"></div>
    <small>ID: <?= $user['id'] ?></small>
</div>

</body>
</html>
