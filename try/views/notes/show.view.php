<?php include_once base_path('views/partials/head.php'); ?>
<?php include_once base_path('views/partials/nav.php'); ?>
<?php include_once base_path('views/partials/banner.php'); ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>
            <a href="/notes" class="text-blue-500 hover:underline">go back...</a>
        </p>

        <P class="mt-5">
            <?= htmlspecialchars($note['body']); ?>
        </P>

        <form class="mt-6" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="noteID" value="<?= $note['noteID']; ?>">

            <button class="text-sm text-red-500" type="submit">Delete</button>
        </form>
    </div>
</main>
<?php include_once base_path('views/partials/footer.php'); ?>