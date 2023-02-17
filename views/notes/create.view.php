<?php
require base_path('views/partials/header.php');
require base_path("views/partials/nav.php");
require base_path('views/partials/banner.php');
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!--
         This example requires some changes to your config:

         ```
         // tailwind.config.js
         module.exports = {
           // ...
           plugins: [
             // ...
             require('@tailwindcss/forms'),
           ],
         }
         ```
       -->
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6 w-screen max-w-full">
                <div class="mt-5 md:col-span-2 md:mt-0 ">
                    <form action="#" method="POST">
                        <div class="shadow sm:overflow-hidden sm:rounded-md ">
                            <div class="space-y-6 bg-white px-4 py-5 sm:p-6 flex flex-col">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="subject"
                                               class="block text-sm font-medium text-gray-700">Subject</label>
                                        <div class="mt-1 flex rounded-md shadow-sm flex-grow w-48">

                                            <input type="text" name="subject" id="subject"
                                                   class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                   placeholder="My First Note!"
                                                value="<?= ($_POST['subject']) ?? '' ?>"
                                                   required>

                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label for="body" class="block text-sm font-medium text-gray-700">Notes</label>
                                    <div class="mt-1">
                                        <textarea id="body" name="body" rows="3"
                                                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                  placeholder="The ability to store notes... such power."
                                                  required
                                        ><?= ($_POST['body']) ?? '' ?> </textarea>
                                        <?php if (isset($errors['body']) || isset($errors['subject'])) : ?>
                                            <p class="text-red-500 mt-5"> <?php foreach ($errors as $error) {
                                                    echo $error; ?> <br> <?php } ?> </p>
                                        <?php endif; ?>
                                    </div>

                                </div>


                                <div class="bg-gray-0 px-4 py-3 text-right sm:px-6 flex justify-center">
                                    <button type="submit"
                                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                        Save
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</main>
<?php require base_path('views/partials/footer.php') ?>
