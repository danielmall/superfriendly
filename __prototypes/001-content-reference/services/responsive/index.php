<?php require($_SERVER["DOCUMENT_ROOT"]."/__prototypes/001-content-reference/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>Responsive, a SuperFriendly Service</title>
    <?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/meta.php"); echo "\n"; ?>        

    <?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/cssReference.php"); echo "\n"; ?>        

</head>
<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <div class="clearfix">

        <?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/nav.php"); echo "\n"; ?>        


        <div class="main">

            <h1>Responsive</h1>

            <section class="wf" style="height: 20em;">
                <h2>Why Responsive is an important service we offer</h2>
            </section>

            <section class="wf" style="height: 20em;">
                <h2>Statistics about the importance of Responsive</h2>
            </section>

            <section class="wf">
                <h2>Examples of our responsive work</h2>

                <div class="clearfix">
                    <div class="wf col50" style="height: 10em;">
                        <h2>TechCrunch</h2>
                    </div>

                    <div class="wf col50" style="height: 10em;">
                        <h2>Grantland</h2>
                    </div>
                </div>

                <div class="clearfix">
                    <div class="wf col50" style="height: 10em;">
                        <h2>EW</h2>
                    </div>
                </div>

            </section>

            <nav class="pagination clearfix">
                <ul>
                    <li><a href="<?=$basepath?>/services/web/">Prev</a></li>
                    <li><a href="<?=$basepath?>/services/mobile/">Next</a></li>
                </ul>
            </nav><!-- .pagination -->

        </div><!-- .main -->

    </div><!-- .clearfix -->
    

    

<?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/close.php"); echo "\n"; ?>    