
<div div style="background-color: #fff; min-height: 500px; width: 80%; margin-left: auto; margin-right: auto">
    <div class="col-xs-9 col-sm-4 col-md-3 col-lg-3" style=" margin-top: 5%; margin-left: 5%; float: left">

        <ul class="nav navbar-inverse">
            <li role="presentation">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Homepage <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?= Yii::$app->request->baseUrl ?>/posts/">
                            Create Posts
                        </a>
                    </li>
                    <li class="divider"></li>                    
                    <li>
                        <a href="<?= Yii::$app->request->baseUrl ?>/site/picture-upload">
                            Posts Picture Upload
                        </a>
                    </li>

                </ul>
            </li>
            
            <li role="presentation" class="dropdown" style="border-top: 1px solid #fff">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Campus Mag <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?= Yii::$app->request->baseUrl ?>/campus-posts/">
                            Create Homepage Post
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?= Yii::$app->request->baseUrl ?>/site/campus-picture-upload">
                            Homepage Picture Upload
                        </a>
                    </li>
                </ul>
            </li>
            <li role="presentation" style="border-top: 1px solid #fff">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Events and Places <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?= Yii::$app->request->baseUrl ?>/events-and-places/">
                            Create Event
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?= Yii::$app->request->baseUrl ?>/events-and-places/event-picture-upload">
                            Upload Event Picture
                        </a>
                    </li>

                </ul>
            </li>
            <li role="presentation" style="border-top: 1px solid #fff">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Edit Comments <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?= Yii::$app->request->baseUrl ?>/comments">
                            Delete Homepage Comments
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?= Yii::$app->request->baseUrl ?>/campus-comments">
                            Delete Campus Comments
                        </a>
                    </li>

                </ul>
            </li>
            <li role="presentation" style="border-top: 1px solid #fff">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Fillers <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?= Yii::$app->request->baseUrl ?>/fillers">
                            Create Fillers
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?= Yii::$app->request->baseUrl ?>/site/fillers-picture-upload">
                            Upload Filler Picture
                        </a>
                    </li>

                </ul>
            </li>
           <li role="presentation" style="border-top: 1px solid #fff">
                <a href="<?= Yii::$app->request->baseUrl ?>/categories">
                    Create Categories
                </a>
                
            </li>   
            <li role="presentation" style="border-top: 1px solid #fff">
                <a href="<?= Yii::$app->request->baseUrl ?>/unique-categories">
                    Create Unique Categories
                </a>
                
            </li> 
            <li role="presentation" style="border-top: 1px solid #fff">
                <a href="<?= Yii::$app->request->baseUrl ?>/quotes">
                    Upload Quotes
                </a>
                
            </li>
        </ul>
       
    </div>   
    
</div>



