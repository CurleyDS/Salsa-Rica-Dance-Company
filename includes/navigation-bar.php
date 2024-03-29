<!-- Navigation bar -->
<ul class="col-md-12 nav p-0 d-flex justify-content-around align-items-center">
    <li class="nav-brand">
        <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/Salsa-Rica-Dance-Company/">
            <img src="http://<?= $_SERVER['HTTP_HOST']; ?>/Salsa-Rica-Dance-Company/images/SRDC-Logo.png" alt="">
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-maroon" href="http://<?= $_SERVER['HTTP_HOST']; ?>/Salsa-Rica-Dance-Company/schedule">Lessen</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-maroon" href="#">Workshops</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-maroon" href="http://<?= $_SERVER['HTTP_HOST']; ?>/Salsa-Rica-Dance-Company/parties">Parties</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-maroon" href="#">Shows</a>
    </li>
    <?php if (isset($_SESSION['user'])) { ?>
        <li class="nav-item dropdown">
            <a class="nav-link text-maroon dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Admin</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profiel</a></li>
                <li><a class="dropdown-item" href="http://<?= $_SERVER['HTTP_HOST']; ?>/Salsa-Rica-Dance-Company/register.php">Registreer nieuwe gebruiker</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form method="post" action="http://<?= $_SERVER['HTTP_HOST']; ?>/Salsa-Rica-Dance-Company/logout.php">
                        <input type="submit" name="submit" class="dropdown-item" value="Uitloggen">
                    </form>
                </li>
            </ul>
        </li>
    <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link text-maroon" href="http://<?= $_SERVER['HTTP_HOST']; ?>/Salsa-Rica-Dance-Company/login.php">Inloggen</a>
        </li>
    <?php } ?>
</ul>