<?php 


function textBox($lable,$type,$id,$value){
    echo '<div class="form-group">
            <label for="example-text-input" class="col-form-label">'.$lable.'</label>
            <input class="form-control" type="'.$type.'" value="'.$value.'" id="'.$id.'">
        </div>';
}

function dateTime($lable,$type,$id,$defaultValue){
    echo '<div class="form-group">
                <label for="example-datetime-local-input" class="col-form-label">'.$lable.'</label>
                <input class="form-control" type="'.$type.'" value="'.$defaultValue.'" id="'.$id.'">
            </div>';

}

function selectBox($lable,$name){
    echo '<div class="form-group">
            <label class="col-form-label">'.$lable.'</label>
            <select name="'.$name.'" class="form-control">
                <option>Select</option>
                <option>Large select</option>
                <option>Small select</option>
            </select>
        </div>';
}

function radioButton($lable,$id,$name,$checked){
    echo '<input type="radio" id="'.$id.'"  name="'.$name.'" class="custom-control-input" checked="'.$checked.'" >
            <label class="custom-control-label" for="'.$id.'">'.$lable.'</label>';
}

function checkBox($lable,$id,$checked){
    echo '<input type="checkbox" checked="'.$checked.'" class="custom-control-input" id="'.$id.'">
        <label class="custom-control-label" for="'.$id.'">'.$lable.'</label>';
}

function button(){

}

function dropDown($options) {
    echo '<div class="input-group mb-3">
        <div class="input-group-prepend">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
            <div class="dropdown-menu">';
            foreach ($options as $option) {
                echo '<a class="dropdown-item" href="#">' . $option . '</a>';
            }
            echo '</div>
        </div>';
        textBox("","text","","");
        echo ' 
         </div>';


 
}










