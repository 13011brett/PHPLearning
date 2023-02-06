<?php
require 'views/partials/header.php';
require "views/partials/nav.php";
require 'views/partials/banner.php';
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="py-6 sm:px-6 text-bold"> Welcome to the Notes Page!</p>
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li class="py-2">
                    <a href="/note?id=<?= $note['id'] ?>" class="text-red-500 hover:underline hover:text-blue-500">
                        <?= htmlspecialchars($note['subject']) ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
        <div class=" py-20 flex justify-evenly">
            <a class="text-blue-500 hover:underline hover:text-blue-800 mt-5" href="/notes/create">Create a new
                note!</a>
            <!--<button href="/note/create" class="bg-blue-700 text-white rounded px-5 py-5 mt-3 mr-2 mb-2  text-left rounded-lg text-sm mb-2 font-medium focus:ring-4 hover:bg-blue-700 ">Create a Note</button>
            <button class="bg-blue-700 text-white rounded px-5 py-5 mt-3 mr-2 mb-2  text-left rounded-lg text-sm mb-2 font-medium focus:ring-4 hover:bg-blue-700">Delete a Note</button>-->
        </div>
    </div>
</main>
<?php require 'views/partials/footer.php' ?>
