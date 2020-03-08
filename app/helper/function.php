<?php

function showError($errors,$nameInput){
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