<?php require($_SERVER["DOCUMENT_ROOT"]."/__prototypes/002-nav-control/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>Identity, a SuperFriendly Service</title>
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

            <h1>Identity</h1>

            <section class="wf" style="height: 20em;">
                <h2>What Identity is</h2>
            </section>

            <section class="wf" style="height: 20em;">
                <h2>Statistics about the importance of Identity</h2>
            </section>

            <section class="wf">
                <h2>Examples of our Identity work</h2>

                <div class="clearfix">

                    <div class="wf col50" style="height: 10em;">
                        <h2>1800contacts</h2>
                    </div>

                    <div class="wf col50" style="height: 10em;">
                        <h2>TechCrunch</h2>
                    </div>

                </div>

                <div class="clearfix">
                    <div class="wf col50" style="height: 10em;">
                        <h2>MoodPik</h2>
                    </div>

                    <div class="wf col50" style="height: 10em;">
                        <h2>No Chains</h2>
                    </div>
                </div>


            </section>

            <nav class="pagination clearfix">
                <ul>
                    <li><a href="<?=$basepath?>/services/mobile/">Prev</a></li>
                    <li><a href="<?=$basepath?>/about/">Next</a></li>
                </ul>
            </nav><!-- .pagination -->

        </div><!-- .main -->

    </div><!-- .clearfix -->
    

    

<?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/close.php"); echo "\n"; ?>    