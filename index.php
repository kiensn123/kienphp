<?php

require_once("functions/contactdatabase.php");

$contacs = contact();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class ="container">
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($contacs as $item):?>
                    <tr>
                            <th scope="row"><?php echo $item["contact_id "] ?></th>
                            <td><?php echo $item["last_name"] ?></td>
                            <td><?php echo $item["phone_number"] ?></td>
                            <td><?php echo $item["created_at"] ?></td>

                            <td>   <a href="/delete.php?id=<?php echo $item["contact_id "] ?> " class="btn btn-primary">delete</a></td>
                    </tr>
                <?php endforeach;?>   
                </tbody>
                </table>


    </div>
    <a class="nav-link" href="category.php>"><?php echo $item["name"]; ?></a>


</body>
</html>