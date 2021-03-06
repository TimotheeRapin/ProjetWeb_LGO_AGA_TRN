<?php
/**
 * @param $categorie
 */
function articles($categorie){
    require_once "model/adManager.php";
    $articles = viewArticles(NULL, $categorie["categorie"]);
    require_once "view/articles.php";
}

/**
 * @param $id
 */
function articleDelete($id){
    require_once "model/adManager.php";
    deleteAd($id);
    displayAd($id);
}

/**
 *
 */
function displayAd($id){
    if ($id != NULL){
        require_once "model/adManager.php";
        $articles = viewArticles($id, NULL);
        require_once "view/myAds.php";
    }
    else{
        require_once "model/adManager.php";
        $articles = viewArticles(NULL, NULL);
        require_once "view/myAds.php";
    }
}

/**
 * @param $id
 */
function adManage($id){
    if ($id != NULL){
        require_once "model/adManager.php";
        $article = viewArticles($id, NULL);
        require_once "view/adManage.php";
    }
    else{
        require_once "view/adManage.php";
    }
}

/**
 * @param $id
 * @param $data
 * @param $picture
 */
function adValidation($id, $data, $image){
        require_once "model/adManager.php";
        adUpdate($id, $data, $image['image'], $_SESSION['userEmailAddress']);
        if (isset($id) && $id != NULL && $id != ""){
            articleDetails($id);
        }
        else{
            displayAd(NULL);
        }
}

function articleDetails($id){
    require_once "model/adManager.php";
    $article = viewArticles($id, NULL);
    require_once "view/articleDetails.php";
}

function like($id){
    require_once "model/adManager.php";
    addLike($id, $_SESSION['userEmailAddress']);
    $article = viewArticles($id, NULL);
    $like = existLike($id, $_SESSION['userEmailAddress']);
    require_once "view/articleDetails.php";
}