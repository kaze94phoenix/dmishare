<nav class="navbar navbar-default  navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" required="true" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"  href="<?php echo $this->Html->url('/home/index') ?>">  <img height="30px" width="30px" alt="Brand" src="../../img/worlds1.png">DMI<small>share</small></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"> <?php echo $this->Session->read('Auth.User.name') ?></span> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link('Perfil', array('controller' => 'Users', 'action' => 'view', $this->Session->read('Auth.User.id'))); ?></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Notifica&ccedil;&otilde;es <span class="badge">0</span></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo $this->Html->url('/users/logout') ?>">Sair</a></li>
                    </ul>
                </li>
            </ul>
            <form action="<?php echo Router::url(array('controller' => 'works', 'action' => 'search'), true); ?>" method="post" class="navbar-form navbar-left" role="search">
                <div class="input-group">
                    <input type="text" name="texto" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
                <!--    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">

                    </div>
                    <span class=" glyphicon glyphicon-search"></span> -->
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>






<!--

<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">DMIshare</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"> <i class="fa fa-home fa-fw"></i>&nbsp;In&iacute;cio</a></li>
                <li><a href="#Sobre">Sobre</a></li>
                <li><a href="#contacto">Contacto</a></li>
                <li</a></li>
                F
            </ul>


            <div>
<!--    <div class="col-md-4 col-md-offset-3">  -->
<!--    <form action="" class="search-form">
        <div class="form-group has-feedback">
            <label for="search" class="sr-only">Search</label>
            <input type="text" class="form-control" name="search" id="search" placeholder="search">
            <span class="glyphicon glyphicon-search form-control-feedback"></span>
<!--	</div> -->
<!--    </form>
</div>




</div><!--/.navbar-collapse 
</div>
</nav> -->

<script>
    $(function () {
        var availableData = [
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
        $("#search").autocomplete({
            source: availableData
        });
    });
</script>

<script>
    $(function () {
        //dados padrao
        var availableData = [
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
        $("#search").change(function () {
            var tt = document.getElementById('search');
            alert('entrou')
            var data = {'texto': tt.value};
            var options = {};
            options.url = "<?php echo Router::url(array('controller' => 'obras', 'action' => 'lista'), true); ?>";
            options.type = "POST";
            options.data = JSON.stringify(data)
            options.dataType = "json";
            options.contentType = "application/json";
            options.success = function (resp) {
                alert(resp.length);
                var arr = JSON.parse(resp);
                for (var i = 0; i < resp.length; i++)
                    availableData.push(resp[i].nome)
                //alert(resp[i].nome);

            };
            options.error = function (data, err) {
                alert("Erro ao ler dados!");
                alert(err);
                console.log(data);
                console.log(err);
            };
            $.ajax(options);


        });

        $("#search").autocomplete({
            source: availableData
        });
    });

</script>