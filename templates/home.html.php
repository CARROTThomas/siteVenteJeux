<div class="container d-flex justify-content-center align-items-start homePageSearchGame">
    <form class="d-flex" action="recherche.php">
        <input class="inputSearchGame" type="text" name="rechercheJeux" id="" placeholder="Jeux">
        <button class="buttonSearchHomePage" type="submit"><i class="bi bi-search"></i></button>
    </form>
</div>

<div class="container mb-3">
    <h2>Tendances</h2>
</div>

<div class="container containerJeux">
    <?php foreach ($jeux as $jeu) : ?>
        <div class="col-4">
            <div class="p-3 border m-2">
                <h3><?= $jeu["title"] ?></h3>
                <p><?= $jeu["content"] ?></p>
                <p><?= $jeu["plateform"] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
