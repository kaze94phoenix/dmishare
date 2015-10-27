<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <!--Jquery validate -->
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> 

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->



        <style>
            html {
                position: relative;
                min-height: 100%;
            }
            body {
                padding: 120px 0px;
            }
            footer {
                position: absolute;
                left: 0;
                bottom: 0;
                height: 70px;
                width: 100%;
                background-color: #0a0;
            }
            .up-button {
                position: fixed;
                bottom: 0;
                //width: 100%;
                right: 0;
                float:right;
                /* Set the fixed height of the footer here */
                height: 100px;
                background-color: transparent;
            }

            //sticky back-to-top
            .back-to-top {
                background: none;
                margin: 0;
                position: fixed;
                bottom: 0;
                right: 0;
                width: 70px;
                height: 70px;
                z-index: 100;
                display: none;
                text-decoration: none;
                color: #ffffff;
                background-color: #ff9000;
            }

            .back-to-top i {
                font-size: 60px;
            }
        </style>

        <title>
            <?php echo $title_for_layout; ?>
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <?php
        echo $this->Html->meta('icon');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
//        echo $this->Html->css('component');
        echo $this->Html->css('grid');
        echo $this->Html->script('classie');
        //using array
        echo $this->Html->css(array('search','col','2cols','3cols','4cols','5cols','6cols','7cols','8cols','9cols','10cols','11cols','12cols'));
        echo $this->Js->writeBuffer(array('cache' => TRUE));
        ?>


    </head>

    <body>

        <?php echo $this->Element('navegacao'); ?>

        <div class="container">

            <?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>

        </div><!-- /.container -->

        <?php echo $this->element('footer'); ?> 

        <a href="#" class="up-button" style="display: inline;">
            <i class="fa  fa-chevron-circle-up  fa-4x "></i>
        </a>

    </body>

    <script>
        jQuery(document).ready(function () {
            var offset = 50;
            var duration = 350;
            jQuery('.up-button').fadeOut(5);
            jQuery(window).scroll(function () {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.up-button').fadeIn(duration);
                } else {
                    jQuery('.up-button').fadeOut(duration);
                }
            });

            jQuery('.up-button').click(function (event) {
                event.preventDefault();
                jQuery('html, body').animate({scrollTop: 1}, duration);
                return false;
            })
        });
    </script>

</html>
