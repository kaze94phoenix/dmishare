<style>
    @media screen and (min-width: 500px) {

        /*  .row {
              display: table;
          }
  
          [class*="col-"] {
              float: none;
              display: table-cell;
              vertical-align: top;
          } */
        /*    .equal, .equal > div[class*='col-'] {  
                display: -webkit-box;
                display: -webkit-flex;
                display: flex;
                flex:1 0 auto;
            } */
        .row-eq-height {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display:         flex;
        }


    }

    .mwell{
        background-color: white;
        box-shadow: 5px 5px 20px #888888;
        margin: 20px;

    } 

    .wrap{

        margin: 0 auto;
    }
    body{
        background-color:#F0F0F0;


    }

</style>
<?php
if(empty($result))
    echo '<div class="alert alert-danger" role="alert"> Sem Resultados </div>';
else
    echo '<div class="alert alert-success" role="alert"> Mostrando '.count($result).' Resultados para a busca "'.$name.'" </div>';
?>

<div class="wrap">
    <div class="container">
        <?php foreach ($result as $work): ?>
            <div class="row row-eq-height">
                <div class="col-xs-12 col-md-6 mwell ">
                    <div class="row"><div class="page-header text-center"><?php echo $this->Html->link($work['Work']['title'], array('controller' => 'works', 'action' => 'view', $work['Work']['id'])); ?></div></div>
                    <img src="" alt="" width="200" height="200">        </div>
                <div class="col-xs-12 col-md-2 mwell ">
                    Partilhar
                    <p> ahshj
                    <p> ahshj
                </div>


            </div>
        <?php endforeach; ?>

    </div>
</div>