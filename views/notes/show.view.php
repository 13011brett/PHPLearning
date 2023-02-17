<?php
require base_path('views/partials/header.php');
require base_path("views/partials/nav.php");
require base_path('views/partials/banner.php');
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
            <form class="mt-6" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">

                <button class="text-red-500 text-sm"> Delete </button>
            </form>


    </div>
</main>
<?php require base_path('views/partials/footer.php') ?>
