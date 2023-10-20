<?php require base_path('views/partials/head.php'); ?>

<?php require base_path('views/partials/nav.php'); ?>

<?php require base_path('views/partials/banner.php'); ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <!--

    __DIR__ prints current path

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

<!--

<form class="mt-6" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="id" value="<?= $note['id']?>">
    <button class="text-sm text-red-500">Delete</button>
</form>

-->
    <form method="POST", action="/note">
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <input type="hidden" name="_method" value="PATCH">
          <input type="hidden" name="id" value="<?= $note['id'] ?>">
          <div class="col-span-full">
            <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
            <div class="mt-2">
              <textarea
                id="body"
                name="body"
                rows="3"
                placeholder="Here's an idea for a note..."
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                required
                ><?= $note['body'] ?></textarea>
              <?php if (isset($errors['body'])) : ?>
                <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
              <?php endif; ?>
            </div>
          </div>


        </div>
      </div>




  </div>

  <div class="mt-6 flex items-center justify-end flex gap-x-4 justify-end">
    <a href="/notes" class="rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cancel</a>
    <button type="update" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
  </form>

  </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>

<?php

/*

Form Notes. "name" corresponds to database column name.

<label for=""> the 'for' looks for an 'id' on the corresponding input.

Forms submit using GET request by default.

GET request should be "idempotent," meaning they don't change anything in the database. No permanent changes. Nothing destructive, etc..


Long way if user had filled out form data and we wanted to repopulate it on
a page refresh, due to errors: isset($_POST['body']) ? $_POST['body'] : '';

Short way. Use "null coalescing operator" like this:
<?= $_POST['body'] ?? '' ?>
Automatically checks for the presence and echoes it if true, otherwise echose the value
on the other side of the ??


*/
?>