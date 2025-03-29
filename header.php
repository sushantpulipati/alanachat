<?php
session_start();
$isLoggedIn = isset($_SESSION["user_id"]);
?>

<header>
    <div class="logo">
        <img src="assets/img/logo.png" alt="ALANA Chat Logo">
    </div>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.php">Chat</a></li>
            <li><a href="resources.php">Resources</a></li>
            <?php if ($isLoggedIn): ?>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="login.html">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

