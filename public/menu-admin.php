
<?php
//var_dump($_POST);
//var_dump($_FILES);
if(!empty($_POST)){

    $db->addFile($_FILES['image'], 'INSERT INTO article(titre, contenu, image, date)
        VALUES (:titre, :contenu, :image, :date)' ,array(
        'titre' => $_POST['titre'],
        'contenu' => $_POST['contenu'],
        'image' => $_FILES['image']['name'],
        'date' => date('Y-m-d H:i:s')
    ), null, true);
    $_POST = null;
}
$date = date('Y-m-d H:i:s T');
//var_dump($date);
?>
<div class="col-lg-8">
    <h1>Gestion d'Articles</h1>
    <section id="section-ajout-article">
        <div id="titre-ajout-article">
            <p>Ajouter un Article</p>
            <button id="bouton-ajout-article" type="button" class="btn btn-primary">+</button>
        </div>
        <form id="formulaire-ajout-article">
            <p><label class="label-formulaire-ajout-article" for="titre">Titre : </label><br><input type="text" name="titre"></p>
            <p><label class="label-formulaire-ajout-article" for="titre">Image :</label><br><input type="file" name="image" /></p>
            <p><label class="label-formulaire-ajout-article" for="contenu">Contenu : </label><br><textarea name="contenu"></textarea></p>
            <p><input type="submit" value="Envoyer"></p>
        </form>
    </section>

    <table class="table">
        <tbody>
            <tr>
                <td><img src="images/africaine.jpg" width="60px"></td>
                <td>Baltazar</td>
                <td>02/12/2016</td>
                <td><button type="button" class="btn btn-primary">Modifier</button></td>
                <td><button type="button" class="btn btn-danger">Supprimer</button></td>
            </tr>
            <tr>
                <td><img src="images/africaine.jpg" width="60px"></td>
                <td>Jean-claude</td>
                <td>02/12/2016</td>
                <td><button type="button" class="btn btn-primary">Modifier</button></td>
                <td><button type="button" class="btn btn-danger">Supprimer</button></td>
            </tr>
            <tr>
                <td><img src="images/africaine.jpg" width="60px"></td>
                <td>Africaine</td>
                <td>02/12/2016</td>
                <td><button type="button" class="btn btn-primary">Modifier</button></td>
                <td><button type="button" class="btn btn-danger">Supprimer</button></td>
            </tr>
        </tbody>
    </table>

</div>