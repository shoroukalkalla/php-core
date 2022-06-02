<?php

session_start();

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    echo "welcome $email";
}

$links_arr = [
    [
        'title' => 'Google',
        'link' => 'https://www.google.com'
    ],
    [
        'title' => 'Facebook',
        'link' => 'https://www.facebook.com'
    ],
    [
        'title' => 'Twitter',
        'link' => 'https://www.twitter.com'
    ],
];



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Dynamic Page Content</title>
</head>

<body>

    <?php if (isset($_SESSION['email'])) { ?>
        <a href="logout.php">Logout</a>
    <?php } else { ?>
        <a href="login.php">Login</a>
    <?php } ?>

    <?php
    echo '<div class="list-group">';
    //loop
    foreach ($links_arr as $link_elem) {
        // $title = $link_elem['title'];
        // $link = $link_elem['link'];
        // echo "<a href='$link' class='list-group-item list-group-item-action'>
        //     $title
        //     </a>";
        echo "<a href='{$link_elem['link']}' class='list-group-item list-group-item-action'>
            {$link_elem['title']}
            </a>";
    }
    echo '</div>';
    ?>

    <br />

    <div class="list-group">
        <?php foreach ($links_arr as $elem) { ?>
            <a href="<?php echo $elem['link']; ?>" class='list-group-item list-group-item-action'>
                <?php echo $elem['title']; ?>
            </a>
        <?php } ?>
    </div>

</body>

</html>