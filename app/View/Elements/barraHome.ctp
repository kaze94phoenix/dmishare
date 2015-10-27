<!--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <script src="js/jquery-ui.js"></script>
  <link rel="stylesheet" href="css/jquery-ui.css">


-->
<style>
    .busca{

        border: 1px solid black;
        width: 50%;
        margin: 0 auto;
        border-radius: 5px 5px ;
    }
    .busca  input {
        width: 90%;
        border: none;
        margin: 5px;
        font:50px;

    }
    .busca  {
        //width: 10%;

    }


</style>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<div class="containe" id="barraBusca">
    <div  id="rcorners">
        <!--    <div class="col-md-4 col-md-offset-3">  -->

        <div class="text-cente busca">
            <span>
                <input name="search" placeholder="Buscar" />
                <span class="glyphicon glyphicon-search"></span>

            </span> 
        </div>


    </div>
</div>




<!--/.navbar-collapse -->


<!--
<script>
    function aa(){
        alert('entrou');
        var texto = document.getElementById('searchin').value;
        var data = {'titulo': texto};
        var options = {};
        options.url = "<?php // echo Router::url(array('controller' => 'obras', 'action' => 'lista'), true);    ?>";
        options.type = "POST";
        options.data = JSON.stringify(data)
        options.dataType = "json";
        options.contentType = "application/json";
        options.success = function (resp) {
            alert(resp);

        };
        options.error = function (data, err) {
            alert("Erro ao ler dados!");
            alert(err);
            console.log(data);
            console.log(err);
        };
        $.ajax(options);

    }
    
function busca() {
    alert('entrou');
        var texto = document.getElementById('searchin').value;
        var data = {'titulo': texto};
        var options = {};
        options.url = "<?php // echo Router::url(array('controller' => 'obras', 'action' => 'lista'), true);    ?>";
        options.type = "POST";
        options.data = JSON.stringify(data)
        options.dataType = "json";
        options.contentType = "application/json";
        options.success = function (resp) {
            alert(resp);
            var obj=JSON.parse(resp);
            
            

        };
        options.error = function (data, err) {
            alert("Erro ao ler dados!");
            alert(err);
            console.log(data);
            console.log(err);
        };
        $.ajax(options);
    }
</script>
-->
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

