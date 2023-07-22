<?php
require ('partials/header.php');
require ("partials/nav.php");
require ('partials/banner.php');
?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        Hello <?= $_SESSION['user']['name'] ?? 'Guest' ?>, this is the Home Page, where all things get presented.

    </div>
</main>
<?php require 'partials/footer.php' ?>
