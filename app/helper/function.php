<?php

function showError($errors,$nameInput){
    if($errors->has($nameInput)) {
        echo '<div class="alert alert-danger" role="alert"><strong>';
        echo $errors->first($nameInput);
        echo '</strong></div>';
    }
}

function showErrors($errors,$nameInput){
    if($errors->has($nameInput)) {
        echo '<div class="alert alert-danger" role="alert"><strong>';
        echo $errors->first($nameInput);
        echo '</strong></div>';
    }
}

function showErrorCategory($errors, $name){
    if ($errors->has($name)) {
        echo '<div class="alert bg-danger" role="alert">';
        echo '<svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg>';
        echo  $errors->first('name');
        echo '<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a></div>';
    }
}

function getCategory($danhMuc,$idCha,$chuoiTab, $idSeleted) {
	foreach($danhMuc as $banGhi) {
	    if($banGhi['parent']==$idCha) {
            if ($banGhi['id'] == $idSeleted ){
                echo '<option selected value="'.$banGhi['id'].'" >'.$chuoiTab.$banGhi['name'].'</option>';
            } else {
                echo '<option value="'.$banGhi['id'].'">'.$chuoiTab.$banGhi['name'].'</option>';
            }
            getCategory($danhMuc,$banGhi['id'],$chuoiTab.'---|', $idSeleted);
        }
	}
}

function showCategoryList($category,$parent,$chuoiTab) {
	foreach($category as $item) {
	    if($item['parent']==$parent) {
            echo '  <div class="item-menu"><span>'.$chuoiTab.$item['name'].'</span>';
			echo '  <div class="category-fix">';
			echo '  <a class="btn-category btn-primary" href="/admin/category/edit/'.$item['id'].'"><i class="fa fa-edit"></i></a>';
		    echo '  <a class="btn-category btn-danger" href="/admin/category/delete/'.$item['id'].'"><i class="fas fa-times"></i></i></a>';
			echo '  </div> </div>';
            showCategoryList($category,$item['id'],$chuoiTab.'---|');
        }
    }   
}

function GetLevel($mang,$parent,$count){
    foreach($mang as $value) {
        if($value["id"]==$parent) {
            $count++;
            if($value["parent"]==0) {
                return $count;
            }
            return Getlevel($mang,$value["parent"],$count);
        }
    }
}

function getSeletedCategory($danhMuc,$idCha,$chuoiTab, $idSeleted) {
	foreach($danhMuc as $banGhi) {
	    if($banGhi['parent']==$idCha) {
            if ($banGhi['id'] == $idSeleted ){
                echo '<option selected value="'.$banGhi['id'].'" >'.$chuoiTab.$banGhi['name'].'</option>';
            } else {
                echo '<option value="'.$banGhi['id'].'">'.$chuoiTab.$banGhi['name'].'</option>';
            }
            getCategory($danhMuc,$banGhi['id'],$chuoiTab.'---|', $idSeleted);
        }
	}
}