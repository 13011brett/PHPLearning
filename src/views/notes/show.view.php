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
            } ?> </p>

        <footer class="mt-6 ">
            <a href="/note/edit?id=<?=$note['id']?>" class="text-gray-500 border border-current px-4 py-1 rounded"> Edit </a>
        </footer>



    </div>
</main>
<?php require base_path('views/partials/footer.php') ?>
