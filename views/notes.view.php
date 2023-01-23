
        <?php
        require 'partials/header.php';
        require "partials/nav.php";
        require 'partials/banner.php';
        ?>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <?php foreach ($notes as $note) : ?>
                <li>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-red-500 hover:underline hover:text-blue-500">
                        <?= $note['body'] ?>
                    </a>
                </li>
                <?php endforeach ?>
            </div>
        </main>
        <?php require 'partials/footer.php' ?>
