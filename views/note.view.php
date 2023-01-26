
        <?php
        require 'partials/header.php';
        require "partials/nav.php";
        require 'partials/banner.php';
        ?>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <p class="mb-6">
                    <a href="/notes" class="text-blue-500 underline bold">
                        Go back...
                    </a>
                </p>

                <p><?php if(!$note){
                    echo "Note could not be found or is inaccessible.";
                    }
                    else{
                        echo $note['body'];
                    }  ?>


            </div>
        </main>
        <?php require 'partials/footer.php' ?>
