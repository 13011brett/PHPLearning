<?php
require 'partials/header.php';
require "partials/nav.php";
require 'partials/banner.php';
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="py-6 sm:px-6 text-bold"> Welcome to the Notes Page!</p>
        <?php foreach ($notes as $note) : ?>
            <li>
                <a href="/note?id=<?= $note['id'] ?>" class="text-red-500 hover:underline hover:text-blue-500">
                    <?= $note['body'] ?>
                </a>
            </li>
        <?php endforeach ?>
        <div class=" py-20 flex justify-evenly">
            <button class="bg-blue-700 text-white rounded px-5 py-5 mt-3 mr-2 mb-2  text-left rounded-lg text-sm mb-2 font-medium focus:ring-4 hover:bg-blue-700 ">Create a Note</button>
            <button class="bg-blue-700 text-white rounded px-5 py-5 mt-3 mr-2 mb-2  text-left rounded-lg text-sm mb-2 font-medium focus:ring-4 hover:bg-blue-700">Delete a Note</button>
        </div>
    </div>
</main>
<?php require 'partials/footer.php' ?>
