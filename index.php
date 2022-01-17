<?php require_once __DIR__ . '/utilities/get_departments.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db-university</title>
    <style>
        table,
        th,
        td {
            margin: 0;
            padding: 4px;
            font-size: 14px;
            line-height: 24px;
            font-family: sans-serif;
            border: 1px solid #7a7a7a;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>address</th>
                <th>email</th>
                <th>website</th>
                <th>link</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($departments as $key => $value) : ?>
                <tr>
                    <td><?php echo "{$value['id']}"; ?></td>
                    <td><?php echo "{$value['name']}"; ?></td>
                    <td><?php echo "{$value['address']}"; ?></td>
                    <td><?php echo "{$value['email']}"; ?></td>
                    <td><?php echo "{$value['website']}"; ?></td>
                    <td><a href="#">view</a></td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
</body>

</html>