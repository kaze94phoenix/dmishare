<style>
    .carousel .item {
        //height: 500px;

    }

    .carousel .item .botoes {
        /*   float: left;
          margin-left: auto;
           margin-right: auto; */
        text-align: center !important;
    }

    .carousel {
        /* background: url(http://placehold.it/620x420/ff9900); */

    }
    .carousel[role="1"] {
        background: url(http://placehold.it/620x420/ff9900); 

    }
    .carousel[role="2"] {
        background: url(http://placehold.it/620x420/ff5900); 

    }
    .carousel[role="3"] {
        background: url(http://placehold.it/620x420/ff9300); 

    }

    .nav-tabs > li, .nav-pills > li {
        float:none;
        display:inline-block;
        *display:inline; /* ie7 fix */
        zoom:1; /* hasLayout ie7 trigger */
    }

    .nav-tabs, .nav-pills {
        text-align:center;
    }

    .green{
        color: green;
    }
    .rectangulo1{
        display: inline;
        border: 5px solid #005f00;
    }

    .tinybanner h1 {
        padding-bottom: 0.5em;
        margin-bottom: 50px;
        display: inline-block;
        @include adjust-font-size-to(24px);
        background: url("img/worlds1.png") center bottom no-repeat;
    }

    .tinybanner h1:after {
        height:1px;
        content:'';
        display:block;
        border-left: 40px solid #005f00; 
        border-right:40px solid #005f00;
    }
    .bordado{
        border-top: 1px solid #005f00;
        border-bottom: 1px solid #005f00;
        margin-left: 10 px;
        margin-right: 10 px;
    }
    .logo{
        display: inline;
    }

    #content {
        position: relative;
        bottom: 470px;
        //top: 20px;
        z-index: 500;
        opacity: 1.0;
    }
    #content > .row {
        min-height: 400px;
        background: transparent;
    }
    .carousel-caption {
        text-align: left;
    }

    .texto-escuro{
        text-shadow: 0 0 0.2em #FFA000;
    }
    .voce-quer{
        background: whitesmoke;
        // box-shadow: 5px 5px 5px #FFEB3B;
        width: 40%;	
    }
    .partilhar{
        background: #FFEB3B;
        // box-shadow: 5px 5px 5px #FF5722;
        width: 60%;	
    }
    .conteudo{
        background: #FF5722;
        //box-shadow: 5px 5px 5px #FF5722;
        width: 80%;	
    }

    .item > img{
        box-shadow: inset 0px 0px 30px 30px rgba(0,0,0,0.9);
        color: #ffffff;
        text-decoration: none;
        opacity: 0.9;
        filter: alpha(opacity=90);
        // filter: blur(2px);
        // -webkit-filter: blur(2px);
    }
    .div-blur{
        color: #ffffff;
        text-decoration: none;
        opacity: 0.9;
        filter: alpha(opacity=90);
    }

</style>

<div class="row" >    
    <div id="carousel-example-generic" class="carousel slide"  data-ride="carousel">
        <div class=" container">

        </div>

        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img data-src="holder.js/1140x500/auto/#777:#555/text:First slide" src="../../img/bannerhd.png" alt="First slide">
                <div class="carousel-caption rectangulo tinybanne">
                    <div class="voce-quer">  <h2 class=""  align="center">  Você quer.... </h2> </div>
                    <div class="partilhar"> <h1 class="" align="center">  Partilhar obter..... </h1> </div>
                    <div class="conteudo"> <h2 class="" >   Conteúdo de qualquer parte do mundo ? </h2> </div>
                    <div class="botoes"> <button id="sim" onclick="desce" class="btn btn-success btn-lg"> Sim. <span class="glyphicon glyphicon-chevron-down"></span> </button>  <button id="nao"  class="btn btn-lg btn-warning"> Convenca-me! <span class="glyphicon glyphicon-chevron-right"></span> </button> </div>
                </div>
            </div>
            <div class="item">
                <img data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" src="img/bannerhd1.png" alt="Second slide">
                <div class="carousel-caption text-center rectangulo tinybanne">
                    <h1>
                        Mais de 1000 obras registradas
                    </h1>
                    <h2>Partilhe conte&uacute;do com pessoas em todo o mundo</h2>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class=" container" id="content">
    <div class="ro">
        <div class="col-md-2">
            <div>

                <a href="http://www.google.com">  <img src="img/worlds.png" height="70" width="70" alt="Icone"> DMI<small>share</small> </a>


   <!--             <a href="http://www.google.com"><h2>DMI<small>share</small></h2> <img src="img/worlds.png" height="70" width="70" alt="Icone"> </a> --> 
            </div>

        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-2">
            <?php
            if ($this->Session->check('Auth.User')) { ?>
            <h3>  <?php echo $this->Html->link('Sair', array('controller' => 'users', 'action' => 'logout')); } ?> </h3>
            
            <h3>  
            <?php
            if (!$this->Session->check('Auth.User')) { 
                echo $this->Html->link('Entrar|Regista', array('controller' => 'users', 'action' => 'login'));
            }
            ?> </h3>
   
        </div>

    </div>
</div>
<?php /*
$a = 'job.pdf[0]';
$piece = "uploads\\";
$piece2 = $piece . $a;
$filename = WWW_ROOT . $piece2;

echo $filename;
echo exec('convert ' . $filename . ' C:\wamp\www\new\dmishare\app\webroot\uploads\job.jpg ');
*/ ?>
<div class="">
    <?php echo $this->Element('barraHome'); ?>

  <!--  <input id="tags"  type="text" class="btn-lg" placeholder="Search"> -->
</div>

<div class="container">
    <div class="page-header">
        <h1><div class="text-center">  Discover the world </div>
    </div></h1>

</div>
<!-------publicacoes --------------->
<ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="#">Todos</a></li>
    <li role="presentation"><a href="#">Mais recentes</a></li>
    <li role="presentation"><a href="#">Mais populares</a></li>
    <li role="presentation"><a href="#">Ta bater</a></li>
    <li role="presentation"><a href="#">Classicos</a></li>
</ul>

<div class="container">
    <div class = row>
        <?php
        $posts = $this->requestAction('Works/listWorks');
        foreach ($posts as $work):
            ?>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="text-center">
                            <h2 class="panel-title"> <?php echo $this->Html->link($work['Work']['title'], array('controller' => 'works', 'action' => 'view', $work['Work']['id'])); /* echo $work['Work']['title']; */ ?> </h2> 
                        </div>
                    </div>
                    <div class="panel-body">
                        <a href="#" class="thumbnail">
                            <img src="img/world.png" alt="icone">
                        </a>
                    </div>
                </div>
            </div>
<?php endforeach; ?>

    </div>
</div>

<div class="container">
<div class="row">
    <div class="jumbotron">
        <div class="page-header"> <h1><div class="text-center">We love Sharing </div> </h1></div>
        <div class="row">
            <div class="col-md-5 bordado">
                <a href="https://www.facebook.com/dmishare"><img src="img/facebookIcon.png" alt="facebook-logo" height="40px" width="40px" /> Signa-nos no facebook </a> 
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-5 bordado">
                <a href="https://twitter.com/dmishare"><img src="img/twitterIcon.png" alt="facebook-logo" height="40px" width="40px" />   Siga-nos no twitter </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 bordado">
                <a><img src="img/instagramIcon.png" alt="facebook-logo" height="40px" width="40px" />  Siga-nos pelo Google Plus </a>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-5 bordado">
                <a href="https://www.linkedin.com/profile/view?id=426467264"><img src="img/linkedinIcon.png" alt="facebook-logo" height="40px" width="40px" /> <img src="" /> siga-nos pelo Linkedin </a>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(function () {
        var availableTags = [
            "ActionScript",
            "AppleScript",
            "Asp",
            "BASIC",
            "C",
            "C++",
            "Clojure",
            "COBOL",
            "ColdFusion",
            "Erlang",
            "Fortran",
            "Groovy",
            "Haskell",
            "Java",
            "JavaScript",
            "Lisp",
            "Perl",
            "PHP",
            "Python",
            "Ruby",
            "Scala",
            "Scheme"
        ];
        $("#tags").autocomplete({
            source: availableTags
        });
    });
</script>

<script>
    jQuery(document).ready(function desce() {
        var duration = 350;
        jQuery('#sim').click(function (event) {
            event.preventDefault();
            jQuery('html, body').animate({scrollTop: 700}, duration);
            return false;
        })
    });
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>