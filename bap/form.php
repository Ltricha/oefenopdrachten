<?php require('header.php') ?>


<form method="post" action="process.php">
    <div>
        <label for="title">Titel</label>
        <input type="text" id="title" name="title">
    </div>
    <div>
        <label for="artist">Artiest</label>
        <input type="text" id="artist" name="artist">
    </div>
    <div>
        <label for="album">Album</label>
        <input type="text" id="album" name="album">
    </div>
    <div>
        <label for="duration">Duur</label>
        <input type="text" id="duration" name="duration">
    </div>
    <input type="submit">
</form>

<?php require('footer.php') ?>
