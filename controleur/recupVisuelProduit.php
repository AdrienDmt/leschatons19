<?php
/**
 * Created by IntelliJ IDEA.
 * User: julien
 * Date: 22/05/17
 * Time: 09:36
 * Description : Générer les images de produits qui seront affichées sur les pages web.
 *
 *version1 : Recupere les images dans le dossier ( a renseigner au moment de l'appel). Utiliser scanImage.
 */

/**
 * @param $groupDir : dossier où se trouve les autres dossiers (categories?) contenant les images.
 * @return mixed
 *
 */
    function recupererImages($groupDir){
        if($dh = opendir($groupDir)){
            while(($file = readdir($dh))!= false){
                if($file[0]!='.'){
                    if(pathinfo($file, PATHINFO_EXTENSION)=="jpg"){
                        $jpg[] = pathinfo($file,PATHINFO_FILENAME);
                    }
                }
            }
        }
        return $jpg[0];
    }

/**
 * @param $dataDir : Dossier contenant toutes les photos.
 * @return array : Tableau contenant tout les chemins relatifs vers les images.
 */
    function scanImage($dataDir){
        if(is_dir($dataDir)){
            if($dh = opendir($dataDir)){
                while(($dir = readdir($dh))!== false){
                    if($dir[0]!='.')
                        $data[] = $dir.'/'.(recupererImages($dataDir.'/'.$dir));
                }
            }
        }
        return $data;
    }

    function recupererProduits($categorie){
        include '../modele/DAO.php';
        $dao = new DAO();
        if($categorie == 'tous')
            $data[] = $dao->getProduits();
        else{
            $cate = $dao->getCategorie($categorie);
            $data[] = $dao->getProduitsCategorie($cate);
        }
        return $data[0];
    }

    if(!empty($_GET['categorie']))
    {
        return recupererProduits($_GET['categorie']);
    }
?>