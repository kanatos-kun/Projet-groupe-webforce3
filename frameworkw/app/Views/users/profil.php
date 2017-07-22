<?php $json  = file_get_contents("json/profil.json",true)?>
<?php $asset = json_decode($json,true)?>

<?php $this->layout('layout', ['title' => 'Accueil']) ?>


<!DOCTYPE html>
<html>
    <head>
        <title></title>
                <meta charset="utf-8" />
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="css/main.css">
                <script type="text/javascript" src="js/script.js"></script> 
                <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
                <script type="text/javascript" src="js/bootstrap.js"></script>

    </head>
    <body>
<?php $this->start('main_content') ?>
        <nav id="nav1">
             <a class="link1" href="#">Accueil</a>
             <a class="link1" href="#">Lien</a>
             <a class="link1" href="#">Lien</a>
             <a class="link1" href="file:///C:/Users/Etudiant/Desktop/Projet%20fin%20de%20soutenance/profile.html">Profil</a>
        </nav>

        <div class="container wrap">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
    
                        <div class="row card">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 profilePic">
                                <img src="<?=$this->assetUrl($asset['img']['profile-picture'])?>" alt="" />
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 summary">

                                <p>
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                    Christophe Roy, 20 ans
                                    <a href="#" class="" data-toggle="modal" data-target="#ModalHeader"><i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a>
                                </p>

                                <div class="modal fade" id="ModalHeader" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true"><!--Modal-->
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Modifier votre en-tête de profil</h4>
                                      </div>
                                      <div class="modal-body">
                                        <h3>Nom Prénom, Âge</h3>
                                        <div class="form-group row">
                                           <div class="col-md-12">
                                                <input class="form-control" type="text" value="Christophe Roy, 20 ans" id="example-text-input">
                                            </div>
                                        </div>

                                        <h3>Localisation</h3>
                                        <div class="form-group row">
                                           <div class="col-md-12">
                                                <input class="form-control" type="text" value="Auxerre, France" id="example-text-input">
                                            </div>
                                        </div>

                                        <h3>Statut</h3>
                                        <div class="form-group row">
                                           <div class="col-md-12">
                                                <input class="form-control" type="text" value="~" id="example-text-input">
                                            </div>
                                        </div>

                                       <h3>Mobilité</h3>
                                        <div class="form-group row">
                                           <div class="col-md-12">
                                                <input class="form-control" type="text" value="~" id="example-text-input">
                                            </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div><!--/Modal-->

                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> Auxerre, France</p>
                                <p>Statut : ~</p>
                                <p>Mobilité : ~</p>



                            </div>
                        </div>

                </div>
            </div>
        </div>

        <div class="container"><!-- container -->
            <div class="row"><!-- row -->

                <ul class="nav nav-tabs">
                    <li class="active col-md-4"><a data-toggle="tab" href="#tab1">Home</a></li>
                    <li class="col-md-4"><a data-toggle="tab" href="#tab2">Social</a></li>
                    <li class="col-md-4"><a data-toggle="tab" href="#tab3">Projets</a></li>
                </ul>
            </div>    


                    <div class="tab-content">

                        <div class="tab-pane fade in active row" id="tab1">

                            <div class="col-md-12 cat">

                                    <div class="page-header">
                                        <h2 id="timeline">Présentation<a href="#"><i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></h2>
                                    </div>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lectus est, luctus id risus at, pulvinar euismod elit.</p>


    




                            </div> 







                            <div class="col-md-12 cat">


                                    <div class="page-header">
                                        <h2 id="timeline">Formations<a href="#"><i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></h2>
                                    </div>
                                    <ul class="timeline">
                                        <li>
                                          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                                          <div class="timeline-panel">
                                            <div class="timeline-heading">
                                              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
                                            </div>
                                            <div class="timeline-body">
                                              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="timeline-inverted">
                                          <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                                          <div class="timeline-panel">
                                            <div class="timeline-heading">
                                              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                            </div>
                                            <div class="timeline-body">
                                              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                              <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
                                            </div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                                          <div class="timeline-panel">
                                            <div class="timeline-heading">
                                              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                            </div>
                                            <div class="timeline-body">
                                              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="timeline-inverted">
                                          <div class="timeline-panel">
                                            <div class="timeline-heading">
                                              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                            </div>
                                            <div class="timeline-body">
                                              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                            </div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
                                          <div class="timeline-panel">
                                            <div class="timeline-heading">
                                              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                            </div>
                                            <div class="timeline-body">
                                              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                              <hr>
                                              <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                                  <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                  <li><a href="#">Action</a></li>
                                                  <li><a href="#">Another action</a></li>
                                                  <li><a href="#">Something else here</a></li>
                                                  <li class="divider"></li>
                                                  <li><a href="#">Separated link</a></li>
                                                </ul>
                                              </div>
                                            </div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="timeline-panel">
                                            <div class="timeline-heading">
                                              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                            </div>
                                            <div class="timeline-body">
                                              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="timeline-inverted">
                                          <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
                                          <div class="timeline-panel">
                                            <div class="timeline-heading">
                                              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                                            </div>
                                            <div class="timeline-body">
                                              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                                            </div>
                                          </div>
                                        </li>
                                    </ul>


                            </div> 
                            <div class="col-md-12 cat skills">
                                <div class="page-header">
                                  <h2 id="timeline">Compétences<a href="#"><i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></h2>
                                </div>
                                <span class="label label-danger">HTML5</span>
                                <span class="label label-primary">CSS3</span>
                                <span class="label label-warning">Javascript</span>
                                <span class="label label-info">jQuery</span>
                                <span class="label label-info labelPhp">PHP</span>
                            </div>    

                            <div class="col-md-12 cat">
                                <div class="page-header">
                                  <h2 id="timeline">Centres d'intérêts<a href="#"><i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></h2>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lectus est, luctus id risus at, pulvinar euismod elit.</p>
                            </div>





                        </div>

                            <div class="tab-pane fade in" id="tab2">

                                <div class="row"><!--row-->
                                    <div class="col-md-12 cat">
                                        <div class="page-header">
                                            <h2 id="timeline">Me contacter<a href="#"><i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></h2>
                                        </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <h3>Informations de contact</h3>
                                          <p><i class="fa fa-envelope-o" aria-hidden="true"></i> exemple@gmail.com </p>
                                          <p><i class="fa fa-phone" aria-hidden="true"></i> 07 42 15 36 97</p>
                                          <p><i class="fa fa-globe" aria-hidden="true"></i><a href="#">mon-cv-en-ligne.com</a></p>
                                        </div>
                                             
                                        <div class="col-md-6">
                                          <h3>Réseaux sociaux</h3>
                                          <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                          <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                          <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                          <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                                        </div> 
                                     </div>    
                                    </div> 
                                    <div class="col-md-12 cat">
                                        <div class="row">
                                        <div class="page-header col-md-12">
                                        <h2>Contacts<a href="#"><i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></h2>
                                    </div>    
                                            <div class="col-md-3 user">
                                                <img class="userPic" src="<?=$this->assetUrl($asset['img']['contacts'][0])?>" alt="" />
                                                <ul>
                                                    <li>Gobind Victor</li>
                                                    <li>Élève</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 user">
                                                <img class="userPic" src="<?=$this->assetUrl($asset['img']['contacts'][1])?>" alt="" />
                                                <ul>
                                                    <li>Tatjana Stošija</li>
                                                    <li>Ancienne élève</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 user">
                                                <img class="userPic" src="<?=$this->assetUrl($asset['img']['contacts'][2])?>" alt="" />
                                                <ul>
                                                    <li>Dan Lambert</li>
                                                    <li>Ancien élève</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 user">
                                                <img class="userPic" src="<?=$this->assetUrl($asset['img']['contacts'][3])?>" alt="" />
                                                <ul>
                                                    <li>Teobaldo Caiazzo</li>
                                                    <li>Élève</li>
                                                </ul>
                                            </div>                                
                                        </div>

                                        <div class="row">    
                                            <div class="col-md-3 user">
                                                <img class="userPic" src="<?=$this->assetUrl($asset['img']['contacts'][4])?>" alt="" />
                                                <ul>
                                                    <li>Harvie Notoriano</li>
                                                    <li>Formateur</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 user">
                                                <img class="userPic" src="<?=$this->assetUrl($asset['img']['contacts'][5])?>" alt="" />
                                                <ul>
                                                    <li>Svetopolk Jain</li>
                                                    <li>Entreprise</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 user">
                                                <img class="userPic" src="<?=$this->assetUrl($asset['img']['contacts'][6])?>" alt="" />
                                                <ul>
                                                    <li>Aleksandr Andries</li>
                                                    <li>Élève</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 user">
                                                <img class="userPic" src="<?=$this->assetUrl($asset['img']['contacts'][7])?>" alt="" />
                                                <ul>
                                                    <li>Roshan Lara</li>
                                                    <li>Entreprise</li>
                                                </ul>
                                            </div>                                
                                        </div>

                                        <div class="row">    
                                            <div class="col-md-3 user">
                                                <img class="userPic" src="<?=$this->assetUrl($asset['img']['contacts'][8])?>" alt="" />
                                                <ul>
                                                    <li>Grosvenor Giese</li>
                                                    <li>Entreprise</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 user">
                                                <img class="userPic" src="<?=$this->assetUrl($asset['img']['contacts'][9])?>" alt="" />
                                                <ul>
                                                    <li>Herberto Thorne</li>
                                                    <li>Élève</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 user">
                                                <img class="userPic" src="<?=$this->assetUrl($asset['img']['contacts'][10])?>" alt="" />
                                                <ul>
                                                    <li>Gero Järvi</li>
                                                    <li>Formateur</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 user">
                                                <img class="userPic" src="<?=$this->assetUrl($asset['img']['contacts'][11])?>" alt="" />
                                                <ul>
                                                    <li>Alexis Hirsch</li>
                                                    <li>Entreprise</li>
                                                </ul>
                                            </div>                                
                                        </div>                                                        
                                  
                                    </div>
                               

                                                                    
                                </div><!--/row-->




                            </div>




                        <div class="tab-pane fade in" id="tab3">
                          <div class="row">
                              <div class="col-md-12 cat">

                                <div class="page-header">
                                  <h2 id="timeline">Projets<a href="#"><i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></h2>
                                </div>

                                <div class="row projet">
                                    <img class="col-md-2" src="img/img.png" alt="" />
                                    <div class="col-md-8">
                                      <h4>Nom du projet</h4>
                                      <p>Descriptif du projet Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel eros blandit eros tincidunt dapibus. Duis dapibus, erat vel pretium eleifend, lorem libero gravida lorem, dapibus rhoncus dolor ex a turpis. In ut tristique dui. Donec lobortis arcu et lectus auctor interdum vitae eget nibh. Praesent vitae augue ut mauris fringilla vehicula</p>
                                    </div>
                                </div>

                                <div class="row projet">
                                    <img class="col-md-2" src="img/img.png" alt="" />
                                    <div class="col-md-8">
                                      <h4>Nom du projet</h4>
                                      <p>Descriptif du projet Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel eros blandit eros tincidunt dapibus. Duis dapibus, erat vel pretium eleifend, lorem libero gravida lorem, dapibus rhoncus dolor ex a turpis. In ut tristique dui. Donec lobortis arcu et lectus auctor interdum vitae eget nibh. Praesent vitae augue ut mauris fringilla vehicula</p>
                                    </div>
                                </div>

                                <div class="row projet">
                                    <img class="col-md-2" src="img/img.png" alt="" />
                                    <div class="col-md-8">
                                      <h4>Nom du projet</h4>
                                      <p>Descriptif du projet Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel eros blandit eros tincidunt dapibus. Duis dapibus, erat vel pretium eleifend, lorem libero gravida lorem, dapibus rhoncus dolor ex a turpis. In ut tristique dui. Donec lobortis arcu et lectus auctor interdum vitae eget nibh. Praesent vitae augue ut mauris fringilla vehicula</p>
                                    </div>
                                </div>

                              </div>
                          </div>
                    </div>



        </div><!-- /container -->
<?php $this->stop('main_content') ?>
    </body>
</html>


<!--********************************************************************
                   Gestion des fichiers JS et CSS
*********************************************************************-->
<?php $this->start('css') ?>
<?php foreach($asset["css"] as $index => $value)
  {?>
    <link type='text/css' rel='stylesheet' href='
    <?php
    if($value["link"] == "relative")
    {
      echo $this->assetUrl($value["url"]);
    }
    else
    {
      echo $value["url"];
    }
    ?>'/>
  <?php } ?>

<?php $this->stop('css') ?>

<?php $this->start('js')?>

<?php foreach($asset["js"] as $index => $value)
      {?>
        <script type='text/javascript' src='
        <?php
        if($value["link"] == "relative")
        {
          echo $this->assetUrl($value["url"]);
        }
        else
        {
          echo $value["url"];
        }
        ?>'></script>
<?php } ?>

<?php $this->stop('js')?>