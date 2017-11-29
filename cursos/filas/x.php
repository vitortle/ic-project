<!DOCTYPE html>
<html>
<head>
<title>Template 2</title>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link href="/Sis/css/p.css" rel="stylesheet">
</head>
<?php

session_start();
require '../../db.php';

if ( $_SESSION['logged_in'] != 1 ) {
    $_SESSION['message'] = "You must log in before viewing your profile page!";
    header("location: error.php");    
}
else {    
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];   
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());
    $row = $result->fetch_object();
    $_SESSION['id'] = $row->id;
    $tipo = $row->tipo;
}

?>
<script src="/sis/scripts/player_video.js"
<meta charset="utf-8">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script src="flexsimweb/jquery/jQueryUI/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="flexsimweb/jquery/jQueryUI/jquery-ui.min.css">
<script src="flexsimweb/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.rawgit.com/noelboss/featherlight/1.7.0/release/featherlight.min.css" />
<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.0/release/featherlight.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="flexsimweb/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="flexsimweb/bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="flexsimweb/default.css">
<link rel="stylesheet" type="text/css" href="flexsimweb/featherlight/featherlight.min.css" />
<script src="/sis/flexsimweb/featherlight/featherlight.min.js"></script>
<link rel="apple-touch-icon" href="flexsimweb/images/logoSmall.png"/>
<script src="/sis/flexsimweb/jquery/jquery.min.js"></script>
<script src="/sis/scripts/simulation_functions.js"></script>
<body>
    <div id="wrapper">
        <div id="headerwrap">
        <div id="header">
            <p style="font-size: 20px"><b>Content </b>Subject</br>Notes</p>                        
        </div>                     
            <div id="profile">
                <div id="progresso">
                    Progresso: 35%
                </div>
                <div id="foto">
                    <div class="col-xs-4 col-sm-8 top-panel-right">
                            <ul class="nav navbar-nav pull-right panel-menu">                   
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle account" data-toggle="dropdown">
                                        <div class="avatar" width="100" height="39">
                                            <img src="/Sis/images/profile_pic" class="img-rounded" alt="avatar" style="width:100; height:39px;"/><b class="caret"></b>
                                        </div>
                                        <i class="fa fa-angle-down pull-right"></i>
                                        <div class="user-mini pull-right">
                                            <span class="welcome"></span>
                                            <span><?php echo $first_name.' '.$last_name ?></span>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu" style="padding-right: 100px">
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-user"></i>
                                            <span>Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ajax/page_messages.html" class="ajax-link">
                                            <i class="fa fa-envelope"></i>
                                            <span>Mensagens</span>
                                        </a>
                                        </li>
                                            <li>
                                                <a href="ajax/gallery_simple.html" class="ajax-link">
                                                        <i class="fa fa-picture-o"></i>
                                                        <span>Albums</span>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="#">
                                                        <i class="fa fa-cog"></i>
                                                        <span>Ajustes</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                        <i class="fa fa-power-off"></i>
                                                        <span>Sair</span>
                                                </a>
                                            </li>
                                        </ul>
                                </li>
                                    </ul>
                    </div>
                </div>
            </div>
                
        </div>
        
        <div id="navigationwrap">
        <div id="navigation">
            <div id="controles">
                <div id="botao_inicia" style="float: left; padding-left: 10px">
                    <button id="modelsButton" class="btn btn-primary dropdown-toggle" type="button" onclick="abre_simulacao()">
                        Iniciar Simulação</button>                            
                </div>     
                <div id="controles_simulacao">
                <button class="model-control" id="restart" onclick="restart();"><img src="/sis/images/_reset.png"/> Resetar</button>
                <button class="model-control" id="play" onclick="vidplay()";><img src="/sis/images/_go.png"/> Rodar</button>
                <button class="model-control" id="play" onclick="vidpause()";><img src="/sis/images/_stop.png"/> Parar</button>                                
                </div>
                <div id="simRunTime">
                    Tempo de execução:
                    <input type="text" id="runtime" name="cont" value="15.48" readonly/>                    
                </div>   
                <script type="text/javascript">
                function abre_simulacao() {
                    janela_inicia_simulacao = window.open("http://127.0.0.1:8080/webserver.dll?createinstance=1");                
                }            
                function fecha_janela_simulacao() {
                    janela_inicia_simulacao.close();
               }           
                </script>
            </div>
        </div>
        </div>
        <div id="leftcolumnwrap">
        <div id="leftcolumn">
            <p>Coluna da esquerda. Coluna da esquerda. Coluna da esquerda. Coluna da esquerda. Coluna da esquerda. Coluna da esquerda. Coluna da esquerda. Coluna da esquerda. Coluna da esquerda. Coluna da esquerda. Coluna da esquerda. Coluna da esquerda. Coluna da esquerda. Coluna da esquerda. Coluna da esquerda. Coluna da esquerda. Coluna da esquerda. Coluna da esquerda. </p>
        </div>
        </div>
        <div id="contentwrap">
        <div id="content">
            <video id="video1" width="917" height="498" controls="controls">
            <source src="/Sis/video/teste_ogg.ogg" type="video/ogg">
            <object data="" width="320" height="240">
            <embed width="900" height="470" src="/Sis/video/teste_ogg.ogg">
            </object>
            </video>
        </div>
        </div>
        <div id="footerwrap">
        <div id="footer">
            <div id="seta_esquerda">
                <img src="/Sis/images/setaesquerda2" alt="seta_esquerda" style="width:100; height:25px;"/>
            </div>
            <div id="seta_direita">
                <img src="/Sis/images/setadireita2" alt="seta_direita" style="width:100; height:25px;"/>
            </div>
        </div>
        </div>
    </div>
</body>
</html>