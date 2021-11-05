<?php
function get_data($file_name='color_srgb.csv'){
    $handle = fopen($file_name, 'r') or die("File could not open!");
    $users = [];
    while($entries = fgetcsv($handle)){
        $users[] = $entries;
    }
    fclose($handle);
    return $users;
}
$users = get_data();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>week 9</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        footer{
            background-color: black;
            color: greenyellow;
            padding: 4px;
        }
    </style>
</head>
<body>
<div class="container">
<?php if(count($users) > 0): ?>
            <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">HEX</th>
                <th scope="col">RGB</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach($users as $key => $user): ?>
                <?php if($key == 0){
                    continue;
                }
                ?>
                <tr bgcolor= <?= $user[1] ?>>
                    <td><?= $key?></td>
                    <td><?= $user[0] ?></td>
                    <td><?= $user[1] ?></td>
                    <td><?= $user[2] ?></td>
                    <td>
                        <a class="btn btn-primary" role="button">Edit</a>
                        <a class="btn btn-danger" role="button">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tr>
        </tbody>
        </table>
<?php else: ?>
    <h3>No data to display!!</h3>

<?php endif; ?>

<footer>&copy; Copyright 2021 - </footer>
</div>
<hr>
<script src=https://my.gblearn.com/js/loadscript.js></script>
</body>
</html>
