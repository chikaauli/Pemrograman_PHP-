<?php
error_reporting((0));
$p = $_REQUEST['page'];
?>

<nav id="navbar" class="navbar nav-menu">
    <ul>
        <li><a href="index.php?hal=home" class="nav-link scrollto" <?= ($p == 'home') ? 'active' : ''; ?>>Home</a></li>
        <li><a href="index.php?hal=about" class="nav-link scrollto" <?= ($p == 'about') ? 'active' : ''; ?>>About</a></li>
        <li><a href="index.php?hal=study" class="nav-link scrollto" <?= ($p == 'study') ? 'active' : ''; ?>>My study</a></li>
        <li><a href="index.php?hal=tasks" class="nav-link scrollto" <?= ($p == 'tasks') ? 'active' : ''; ?>>Tasks</a></li>
        <li><a href="index.php?hal=portfolio" class="nav-link scrollto" <?= ($p == 'portfolio') ? 'active' : ''; ?>>Portfolio</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->