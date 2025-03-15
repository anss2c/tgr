<?php
namespace app\components;

use app\models\TMenu;
use app\models\Users;
use app\assets\AppAsset;
use Yii;


class MenuHelper{
    public static function display_children($parent, $level) {
        $level_user=Yii::$app->user->getIdentity()->role;
        $sql = 'SELECT a.id_menu, a.nama_menu, a.url_menu, a.level_menu, a.alias_menu,  a.jml_submenu, a.icon_menu, Deriv1.Count FROM `t_menu` a  LEFT OUTER JOIN (SELECT parent_id, COUNT(*) AS Count FROM `t_menu` GROUP BY parent_id) Deriv1 ON a.id_menu = Deriv1.parent_id WHERE a.parent_id='.$parent.' AND (jenis_role_user='.$level_user.' OR jenis_role_user=0)';
        $items=  TMenu::findBySql($sql)	
                ->asArray()
                ->all();
        if($parent==0){
            echo "<ul  class='sidebar-nav' id='sidebar-nav'>";
        }
        else{
            $idtarget= TMenu::findOne($parent);
            echo "<ul  id='".$idtarget->alias_menu."' class='nav-content collapse' data-bs-parent='#sidebar-nav'>";
        }    
        foreach ($items as $item){
            if ($item['Count'] > 0) {
                if($item['level_menu'] ==1 && $item['jml_submenu']==0){
                    echo "<li class='nav-item'><a href='" .\Yii::$app->getUrlManager()->createUrl($item['url_menu']) . "'><i class='".$item['icon_menu']."'></i><span>" . $item['nama_menu'] . "</span></a>";
                }elseif($item['jml_submenu']!=0){
                    echo "<li class='nav-item'><a class='nav-link collapsed' data-bs-target='#".$item['alias_menu']."' data-bs-toggle='collapse' href='#'><i class='".$item['icon_menu']."'></i><span>" . $item['nama_menu'] . "</span><i class='bi bi-chevron-down ms-auto'></i></a> ";
                }else{
                    echo "<li><a href='" .\Yii::$app->getUrlManager()->createUrl($item['url_menu']). "'><span>" . $item['nama_menu'] . "</span></a>";
                }
                static::display_children($item['id_menu'], $level + 1);
                echo "</li>";
            }elseif ($item['Count']==0) {
                if($item['level_menu'] ==1){
                     echo "<li class='nav-item'><a class='nav-link collapsed' href='" .\Yii::$app->getUrlManager()->createUrl($item['url_menu']) . "'><i class='".$item['icon_menu']."'></i><span>" . $item['nama_menu'] . "</span></a>";
                }elseif($item['jml_submenu']!=0){
                     echo "<li class='treeview'><a><span>" . $item['nama_menu'] . "</span><span class='pull-right-container'><i class='fa fa-angle-left pull-right'></i> </span></a> ";
                }else{
                    echo "<li><a href='" .\Yii::$app->getUrlManager()->createUrl($item['url_menu']). "'><i class='".$item['icon_menu']."'></i><span>" . $item['nama_menu'] . "</span></a>";
                }
                 echo "</li>";
            } else;
        }
        
        echo "</ul>";
}
}