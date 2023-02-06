<?php
require 'views/partials/header.php';
require "views/partials/nav.php";
require 'views/partials/banner.php';
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mx-auto font-mono">
            <a href="/notes" class="text-blue-500 underline bold">
                Go back...
            </a>
        </p>

        <p><?php if (!$note) {
                echo "Note could not be found or is inaccessible.";
            } else {
                echo htmlspecialchars($note['body']);
            } ?>


    </div>
</main>
<?php require 'views/partials/footer.php' ?>
