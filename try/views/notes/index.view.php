<?php include_once base_path('views/partials/head.php'); ?>
<?php include_once base_path('views/partials/nav.php'); ?>
<?php include_once base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($note as $data) : ?>
                <li>
                    <a href="/note?noteID=<?= $data['noteID']; ?>" class="text-blue-500 hover:underline">
                        <?= htmlspecialchars($data['body']); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
        </p>
    </div>
</main>
<?php include_once base_path('views/partials/footer.php'); ?>