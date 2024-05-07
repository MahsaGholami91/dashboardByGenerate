<?php 


function textBoxLable($lable,$type,$id,$value,$lblClass,$inpClass){
    echo '<label for="'.$id.'" class="'.$lblClass.'">'.$lable.'</label>
        <input class="'.$inpClass.'" type="'.$type.'" value="'.$value.'" id="'.$id.'">';
}

function textBox($type,$id,$value,$inpClass){

    echo '<input class="'.$inpClass.'" type="'.$type.'" value="'.$value.'" id="'.$id.'">';
}

function dateTime($lable,$type,$id,$defaultValue){
    echo '
                <label for="example-datetime-local-input" class="col-form-label">'.$lable.'</label>
                <input class="form-control" type="'.$type.'" value="'.$defaultValue.'" id="'.$id.'">
            ';

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

function buttonToggle($type,$text){
    echo '<button class="btn btn-primary dropdown-toggle" type="'.$type.'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$text.'</button>';

}

function btnSubmit($type,$text){
    echo '<button type="'.$type.'" class="btn btn-primary mt-4 pr-4 pl-4">'.$text.'</button>';

}

function dropDown($options) {
    echo '<div class="input-group mb-3">
        <div class="input-group-prepend">';
        buttonToggle("button","Dropdown");
        echo '<div class="dropdown-menu">';
            foreach ($options as $option) {
                echo '<a class="dropdown-item" href="#">' . $option . '</a>';
            }
            echo '</div>
        </div>';
        textBox("text","","","form-control");
        echo ' 
         </div>';
}

function uploadFile($text){
    echo '<div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">'.$text.'</span>
            </div>
            <div class="custom-file">';
            textBoxLable("Choose file","file","inputGroupFile01","","custom-file-label","custom-file-input");
               
        echo '</div>
        </div>';
}

function formSubmit(){

    echo'<form>
            <div class="form-group">';
            textBoxLable("Email address","email","exampleInputEmail1","","col-form-label","form-control");
            echo'    <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>
            </div>
            <div class="form-group">';
            textBoxLable("Password","password","exampleInputPassword1","","col-form-label","form-control");
        echo '    </div>
            <div class="form-check">';
            checkBox("Check me out","exampleCheck1","");
                
            echo '</div>';
            btnSubmit("submit","Submit");
       echo' </form>';

}

function accordion($title,$parentId,$childId,$text,$class){
    echo'<div id="'.$parentId.'" class="according accordion-s2">
            <div class="card">
                <div class="card-header">
                    <a class="'.$class.'" data-toggle="collapse" href="#'.$childId.'" aria-expanded="false">'.$title.'</a>
                </div>
                <div id="'.$childId.'" class="collapse" data-parent="#'.$parentId.'" style="">
                    <div class="card-body">'.$text.'</div>
                </div>
            </div>
        </div>';
}

function alert($class,$alert,$text){
    echo'<div class="'.$class.'" role="alert">
            <strong>'.$alert.'</strong> '.$text.'
        </div>';
}

function alertLink($class,$alert,$text_1,$text_2,$linkUrl,$linkClass,$linkText){
    echo'
    <div class="'.$class.'" role="alert">
        <strong>'.$alert.'</strong> '.$text_1.' <a href="'.$linkUrl.'" class="'.$linkClass.'">'.$linkText.' </a>'.$text_2.'
    </div>
    ';    
}

function alertDismiss($class,$alert,$text){
    echo '<div class="'.$class.'" role="alert">
            <strong>'.$alert.'</strong> '.$text.';
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>
            </button>
           </div>';
}

function btn($type,$class,$text,$disabled){
    echo '<button type="'.$type.'" class="'.$class.'" '.$disabled.'>'.$text.'</button>';
}

function card($image,$title,$content){
    
    echo '<div class="col-lg-4 col-md-6 mt-5">
            <div class="card card-bordered">
                <img class="card-img-top img-fluid" src="'.$image.'" alt="image">
                <div class="card-body">
                    <h5 class="title">'.$title.'</h5>
                    <p class="card-text">'.$content.'</p>
                    <a href="#" class="btn btn-primary">Go More....</a>
                </div>
            </div>
        </div>';
}

function mediaObject($image,$title,$content){
    echo '
        <div class="media mb-5">
            <img class="align-self-center img-fluid mr-4" src="'.$image.'" alt="image">
            <div class="media-body">
                <h4 class="mb-3">'.$title.'</h4> '.$content.'
                
            </div>
        </div>
    ';
}

function modal(){
    echo '
            <div class="col-lg-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Large modal</h4>
                        <p>Modals have two optional sizes, available via modifier classes to be placed on a <code>.modal-dialog</code> These sizes kick in at certain breakpoints to avoid horizontal scrollbars on narrower viewports.</p>
                        <button type="button" class="btn btn-primary btn-flat btn-lg" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal
                        </button>
                        <div class="modal fade bd-example-modal-lg" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius voluptates explicabo natus nobis, aperiam placeat aliquid nisi ut exercitationem dolor quisquam nam tempora voluptatem. Unde dignissimos est aliquid quidem porro dolorum ipsam suscipit animi quas, debitis ea, sunt quo distinctio doloribus eveniet dolores tempore delectus voluptatum! Possimus earum asperiores animi.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
}


function pageInation(){
echo '
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
';

}


