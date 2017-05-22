<?php
/**
 * Created by IntelliJ IDEA.
 * User: julien
 * Date: 22/05/17
 * Time: 09:36
 * Description : Générer les images de produits qui seront affichées sur les pages web.
 *
 *version1 : Generation de simples images avec lorem
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
?>