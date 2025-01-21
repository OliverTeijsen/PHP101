<?php require'partials/head.php' ?>

<?php require'partials/nav.php' ?>

<?php require'partials/banner.php' ?>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="mb-6">
                <a href="/Demo/notes" class="bg-pink-500 text-white p-1 rounded">Go back to notes</a>
            </p>
            <p class="font-bold text-pink-500"><?= $note ['body']?></p>

        </div>
    </main>
<?php require'partials/footer.php' ?>