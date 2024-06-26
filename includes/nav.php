<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

echo '
<nav class="container__navbar">
    <h1 class="container__navbar__logo"><a href="/club_sportiv/index.php">Club Sportiv</a></h1>
    <ul class="container__navbar__links">
        <li><a href="/club_sportiv/index.php">Acasa</a></li>
        <li><a href="/club_sportiv/pages/announcements/announcements.php">Anunturi</a></li>
        <li><a href="/club_sportiv/pages/gallery/gallery.php">Galerie</a></li>
        <li><a href="/club_sportiv/pages/departments/departments.php">Sectii</a></li>
        <li><a href="/club_sportiv/pages/teams/teams.php">Echipe</a></li>
        <li><a href="/club_sportiv/pages/contact/contact.php">Contact</a></li>';

if (isset($_SESSION['loggedin'])) {
    echo '
        <li><a href="/club_sportiv/pages/admin/admin.php">Admin</a></li>
        <li><a href="/club_sportiv/logout.php">Logout</a></li>';
}

echo '
    </ul>
</nav>
';
?>