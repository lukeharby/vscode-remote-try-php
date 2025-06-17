<?php 
    include 'common/header.php';
    $token = $_ENV['TOKEN'];
    $secret = getenv('SECRET')
?>


    <h1>PHP test</h1>

    <nav>
        <ul>
            <li><a href="php-functions.php">php functions</a></li>
            <li><a href="php-info.php">php info</a></li>
        </ul>
    </nav>

    <pre>$_ENV: <?php var_dump($token); ?></pre>
    <pre>getenv(): <?php var_dump($secret); ?></pre>

<?php include 'common/footer.php'; ?>