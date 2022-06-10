<?php
require 'functions.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM `websites`');

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Websites</title>
    </head>

    <body>  
        <div class="container">

            <section class="website-list-section">

                <?php foreach($result as $row):?>
                <article class="website-list-name">
                    <h2>
                        <?php echo $row['project_name']; ?>
                    </h2>
                    <figure class="website-list-img" style="background-image: url(images/<?php echo $row['project_image']; ?>)"></figure>
                    <header>
                        <h3>
                            <?php echo $row['id']; ?>
                        </h3>
                        <em><?php echo $row['project_date']; ?></em>
                    </header>
                    
                </article>
                <?php endforeach; ?>
            </section>
        </div>
    </body>

    </html>