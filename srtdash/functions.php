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
            <strong>'.$alert.'</strong>';
            echo $text;
            btnDismiss("close","alert",'<span class="fa fa-times"></span>');
            
        echo'</div>';
}

function btn($type,$class,$text,$disabled){
    echo '<button type="'.$type.'" class="'.$class.'" '.$disabled.'>'.$text.'</button>';
}

function btnDismiss($class,$dataDismiss,$text){
    echo '
        <button type="button" class="'.$class.'" data-dismiss="'.$dataDismiss.'" aria-label="Close">
            '.$text.'
        </button>
    ';

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

function btnModal($dataToggle,$dataTarget,$text){
    echo'
        <button type="button" class="btn btn-primary btn-flat btn-lg" data-toggle="'.$dataToggle.'" data-target="'.$dataTarget.'">'.$text.'
        </button>
    ';
}

function modal(){
    echo '
        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Large modal</h4>
                    <p>Modals have two optional sizes, available via modifier classes to be placed on a 
                        <code>.modal-dialog</code> These sizes kick in at certain breakpoints to avoid horizontal scrollbars on narrower viewports.</p>';
                    btnModal("modal",".bd-example-modal-lg","Large modal");
                   
                echo'<div class="modal fade bd-example-modal-lg" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>';
                                    btnDismiss("close","modal","<span>×</span>");
                            echo'        
                                </div>
                                <div class="modal-body">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius voluptates explicabo natus nobis, aperiam placeat aliquid nisi ut exercitationem dolor quisquam nam tempora voluptatem. Unde dignissimos est aliquid quidem porro dolorum ipsam suscipit animi quas, debitis ea, sunt quo distinctio doloribus eveniet dolores tempore delectus voluptatum! Possimus earum asperiores animi.</p>
                                </div>
                                <div class="modal-footer">';
                                    btnDismiss("btn btn-secondary","modal","Close");
                                    btnDismiss("btn btn-primary","modal","Save changes");
                            echo    '</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
}


function pageInation($currentPage, $totalPages) {
    echo '<nav aria-label="...">
            <ul class="pagination">
                <li class="page-item ' . ($currentPage == 1 ? 'disabled' : '') . '">
                    <a class="page-link" href="?page=' . ($currentPage - 1) . '" tabindex="-1">Previous</a>
                </li>';
                
    for ($i = 1; $i <= $totalPages; $i++) {
        echo '<li class="page-item ' . ($currentPage == $i ? 'active' : '') . '">
                    <a class="page-link" href="?page=' . $i . '">' . $i . ' <span class="sr-only">' . ($currentPage == $i ? '(current)' : '') . '</span></a>
                </li>';
    }
                
    echo '<li class="page-item ' . ($currentPage == $totalPages ? 'disabled' : '') . '">
                    <a class="page-link" href="?page=' . ($currentPage + 1) . '">Next</a>
                </li>
            </ul>
        </nav>';
}

function btnPopover($class,$text,$dataPlacement){
    echo '<button type="button" class="'.$class.'" data-container="body" data-toggle="popover" data-placement="'.$dataPlacement.'" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">'.$text.'</button>';
    }
   

function progressBar($class,$valueNow,$valueMin,$valueMax){
    echo '
        <div class="'.$class.'" role="progressbar" aria-valuenow="'.$valueNow.'" aria-valuemin="'.$valueMin.'" aria-valuemax="'.$valueMax.'" style="width: '.$valueNow.'%"></div>
    ';

}


function tabControl($tabIds, $subIds, $texts,$content) {
    echo '
            <ul class="nav nav-tabs" id="myTab" role="tablist">';
    
    foreach ($tabIds as $index => $tabId) {
        echo '
                <li class="nav-item">
                    <a class="nav-link ' . ($index === 0 ? 'active' : '') . '" id="' . $tabId . '" data-toggle="tab" href="#' . $subIds[$index] . '" role="tab" aria-controls="' . $subIds[$index] . '" aria-selected="' . ($index === 0 ? 'true' : 'false') . '">' . $texts[$index] . '</a>
                </li>';
    }
    
    echo '
            </ul>
            <div class="tab-content mt-3" id="myTabContent">';
    
    foreach ($subIds as $index => $subId) {
        echo '
                <div class="tab-pane fade ' . ($index === 0 ? 'show active' : '') . '" id="' . $subId . '" role="tabpanel" aria-labelledby="' . $tabIds[$index] . '">
                    <p>'.$content[$index].'</p>
                </div>';
    }
    
    echo '
            </div>
    ';
}


function tabControlDive($tabsIds, $subsIds, $text, $contents) {
    echo '
    <div class="d-md-flex">
        <div class="nav flex-column nav-pills mr-4 mb-3 mb-sm-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">';
    
    foreach ($tabsIds as $index => $tabsId) {
        echo '
            <a class="nav-link ' . ($index === 0 ? 'active' : '') . '" id="' . $tabsId . '" data-toggle="pill" href="#' . $subsIds[$index] . '" role="tab" aria-controls="' . $subsIds[$index] . '" aria-selected="' . ($index === 0 ? 'true' : 'false') . '">' . $text[$index] . '</a>';
    }
    
    echo '
        </div>
        <div class="tab-content" id="v-pills-tabContent">';
    
    foreach ($subsIds as $index => $subsId) {
        echo '
            <div class="tab-pane fade ' . ($index === 0 ? 'show active' : '') . '" id="' . $subsId . '" role="tabpanel" aria-labelledby="' . $tabsIds[$index] . '">
                <p>' . $contents[$index] . '</p>
            </div>';
    }
    
    echo '
        </div>
    </div>';
}


function blockquote($text,$detail,$italic){
    echo'
        <blockquote class="blockquote">
            <p class="mb-3">'.$text.'</p>
            <footer class="blockquote-footer">'.$detail.'
                <cite title="Source Title">';
                
                italicText($italic);
                
             echo   '</cite>
            </footer>
        </blockquote>
    ';
}

function highlightText($highlight){
    echo '<mark>'.$highlight.'</mark>';
}
function underlineText($underline){
    echo '<u>'.$underline.'</u>';
}
function boldText($underline){
    echo '<strong>'.$underline.'</strong>';
}
function italicText($italic){
    echo '<em>'.$italic.'</em>';
}


function basicTable($headers, $data,$headClass,$bodyClass) {
    echo '<div class="single-table">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead class="'.$headClass.'">
                        <tr class="text-white">';
    
                        foreach ($headers as $header) {
                            echo '<th scope="col">' . $header . '</th>';
                        }
                        echo '<th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>';
                    foreach ($data as $row) {
                        echo '<tr class="'.$bodyClass.'">';
                        foreach ($row as $value) {
                            echo '<td>' . $value . '</td>';
                        }
                        echo '<td><i class="ti-trash"></i></td>
                            </tr>';
                    }
                    echo '</tbody>
                    </table>
                </div>
            </div>';
}


function dataTable($headers, $data) {
    echo '<div class="data-tables datatable-dark">
            <div id="dataTable3_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="dataTable3_length">
                            <label>Show 
                                <select name="dataTable3_length" aria-controls="dataTable3" class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="dataTable3_filter" class="dataTables_filter">
                            <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable3"></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="dataTable3" class="text-center dataTable no-footer dtr-inline collapsed" role="grid" aria-describedby="dataTable3_info" style="width: 1162px;">
                            <thead class="text-capitalize">
                                <tr role="row">';
    
    foreach ($headers as $header) {
        echo '<th class="sorting_asc" tabindex="0" aria-controls="dataTable3" rowspan="1" colspan="1" style="width: 147px;" aria-sort="ascending" aria-label="' . $header . ': activate to sort column descending">' . $header . '</th>';
    }
    
    echo '<th class="sorting" tabindex="0" aria-controls="dataTable3" rowspan="1" colspan="1" style="width: 104px; display: none;" aria-label="salary: activate to sort column ascending">salary</th></tr>
                            </thead>
                            <tbody>';
    
    foreach ($data as $row) {
        echo '<tr role="row" class="odd">';
        
        foreach ($row as $value) {
            echo '<td tabindex="0" class="sorting_1">' . $value . '</td>';
        }
        
        echo '<td style="display: none;">$162,700</td></tr>';
    }
    
    echo '</tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="dataTable3_info" role="status" aria-live="polite">Showing 1 to 10 of 11 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable3_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="dataTable3_previous">
                                    <a href="#" aria-controls="dataTable3" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                </li>
                                <li class="paginate_button page-item active">
                                    <a href="#" aria-controls="dataTable3" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="dataTable3" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                </li>
                                <li class="paginate_button page-item next" id="dataTable3_next">
                                    <a href="#" aria-controls="dataTable3" data-dt-idx="3" tabindex="0" class="page-link">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
}


