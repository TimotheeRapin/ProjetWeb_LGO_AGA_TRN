<?php
/**
 * Projet                      Project name
 * @file                       articles.php
 * @brief                      File description
 * @author                     Created by Timothée RAPIN
 * Date de création            01.03.2021
 * update                      01.03.2021
 * @version                    0.0
 * @note                       Création du fichier php
 */

$title = 'annoncesfaciles - Articles';

ob_start();
?>
    <!-- Title Page -->
    <div id="page" class="container">
            <div class="title">
                <h2>Articles - <?php
                        switch ($categorie["categorie"]){
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
                    ?></h2>
            </div>
    </div>

    <!-- Product -->
    <div id="page" class="container">

        <!--<form class="login100-form validate-form" action="index.php?action=articles" method="post">-->

    <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
        <div class="row">
            <?php foreach ($articles as $article): ?>
                <div class="col-sm-6 col-md-3 col-lg-4 p-b-50">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                            <a href="index.php?action=articleDetails&id=<?=$article['id'] ?>">
                                <?php if(is_file($article["image"])) : ?>
                                        <img class="imageProductList" src="<?=$article["image"]; ?>" alt="IMG-PRODUCT"/>
                                    <?php else :?>
                                        <img class="imageProductList" src="view/contents/images/noImages.jpg" alt="no image"/>
                                    <?php endif;?>
    
                                <div class="block2-overlay trans-0-3">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-3">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                    <h3><?=$article["title"]; ?></h3>
                                    <p><?=$article["description"]; ?></p>
                                    <p>CHF <?=$article["price"]; ?> .-</p>
                                    <div class="block2-btn-addcart w-size1 trans-0-3">
                                        <!-- Button -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>

<!--
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">-->

            <!-- Block2 --><!--
            <div class="block2">
                <//?php foreach ($articles as $article) :?>
                    <//?php if ($article["categorie"] == $categorie["categorie"]): ?>
                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                            <img src="<//?=$article->picture; ?>" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5"></a>

                            <span class="block2-price m-text6 p-r-5">
                                CHF <//?=$article['price']; ?> .-
                            </span>
                        </div>
                    <//?php endif; ?>
                <//?php endforeach; ?>
            </div>
        </div>
    </div>
-->

<?php
$content = ob_get_clean();
require 'gabarit.php';
?>