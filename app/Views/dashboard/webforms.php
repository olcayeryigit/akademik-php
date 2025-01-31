<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Verileri</title>
</head>
<body>

    <h1>Tüm Form Verileri</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Ad</th>
                <th>Soyad</th>
                <th>Telefon</th>
                <th>Mesaj</th>
                <th>Tarih</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($webforms as $form): ?>
                <tr>
                    <td><?= esc($form['name']) ?></td>
                    <td><?= esc($form['lastname']) ?></td>
                    <td><?= esc($form['phone']) ?></td>
                    <td><?= esc($form['message']) ?></td>
                    <td><?= esc($form['created_at']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
