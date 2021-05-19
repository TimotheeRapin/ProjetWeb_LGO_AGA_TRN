<?php
/**
 * @file      lost.php
 * @brief     This view is designed to inform the user when he tries to navigate to an resource who doesn't exist
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */



ob_start();
$title = 'annoncesfaciles - home';
?>

<!-- Users -->
<div id="contentpagecreat" class="container">

    <table class="table table-striped table-dark" class="tableArticles">
        <thead>
        <tr>
            <th class="tableArticles">Prénom</th>
            <th class="tableArticles">Nom</th>
            <th class="tableArticles">eMail</th>
            <th class="tableArticles">Type</th>
            <th class="tableArticles"><a  href="index.php?action=adManage&articleId="> <button class="button"> Ajouter</button></a></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <?php if(isset($users)): ?>
                    <?php foreach ($users as $user): ?>
                    <tr><!--
                        <td class="tableArticles">
                            </?php
                            switch ($user->categorie){
                                case 1:
                                    echo "Véhicule motorisé";
                                    break;
                                case 2:
                                    echo "Appreil électronique";
                                    break;
                                case 3:
                                    echo "Mobilier";
                                    break;
                                case 4:
                                    echo "Bijou";
                                    break;
                                case 5:
                                    echo "Immobilier";
                                    break;
                                case 6:
                                    echo "Décoration";
                                    break;
                            }
                            ?>
                        <td> </?php if(is_file($user->picture)) : ?>
                                <img class="imageProduct" src="</?=$user->picture; ?>" alt="IMG-PRODUCT"/>
                            </?php else :?>
                                <img class="imageProduct" src="view/contents/images/pas-image-disponible.png" alt="no image"/>
                            </?php endif;?>
                        </td>-->
                        <td class="tableArticles"><?=$user['Firstname']; ?></td>
                        <td class="tableArticles"><?=$user['Lastname']; ?></td>
                        <td class="tableArticles"><?=$user['Mail']; ?></td>
                        <td class="tableArticles"><?=$user['Type']; ?></td>
                        <td class="tableArticles"><a id="faficon" href="index.php?action=adManage&articleId=<?=$user['idUsers']?>"class="fa fa-cogs fa-2x"></a> <a id="faficon" href="index.php?action=articleDelete&articleId=<?=$user['idUsers']?>" class="fa fa-trash fa-2x"></a></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- Product -->
<div id="contentpagecreat" class="container">

    <table class="table table-striped table-dark" class="tableArticles">
        <thead>
        <tr>
            <th class="tableArticles">Catégorie</th>
            <th class="tableArticles">Image</th>
            <th class="tableArticles">Titre</th>
            <th class="tableArticles">Description</th>
            <th class="tableArticles">Prix</th>
            <th class="tableArticles"><a  href="index.php?action=adManage&articleId="> <button class="button"> Ajouter</button></a></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php if(isset($articles)): ?>
            <?php foreach ($articles as $article): ?>
            <?php if (isset($article->userEmail) && $article->userEmail == $_SESSION['userEmailAddress']): ?>
        <tr>
            <td class="tableArticles">
                <?php
                switch ($article->categorie){
                    case 1:
                        echo "Véhicule motorisé";
                        break;
                    case 2:
                        echo "Appreil électronique";
                        break;
                    case 3:
                        echo "Mobilier";
                        break;
                    case 4:
                        echo "Bijou";
                        break;
                    case 5:
                        echo "Immobilier";
                        break;
                    case 6:
                        echo "Décoration";
                        break;
                }
                ?>
            <td> <?php if(is_file($article->picture)) : ?>
                    <img class="imageProduct" src="<?=$article->picture; ?>" alt="IMG-PRODUCT"/>
                <?php else :?>
                    <img class="imageProduct" src="view/contents/images/pas-image-disponible.png" alt="no image"/>
                <?php endif;?>
            </td>
            <td class="tableArticles"><?=$article->title; ?></td>
            <td class="tableArticles"> <textarea class="descriptionArea"  readonly> <?=$article->description; ?></textarea></td>
            <td class="tableArticles"><?=$article->price; ?> CHF</td>
            <td class="tableArticles"><a id="faficon" href="index.php?action=adManage&articleId=<?=$article->id?>"class=" fa fa-cogs fa-2x"></a> <a id="faficon" href="index.php?action=articleDelete&articleId=<?=$article->id?>" class=" fa fa-trash fa-2x"></a></td>
        </tr>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>

