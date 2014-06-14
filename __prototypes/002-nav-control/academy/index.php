<?php require($_SERVER["DOCUMENT_ROOT"]."/__prototypes/002-nav-control/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>SuperFriendly Academy</title>
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

            <h1>SuperFriendly Academy</h1>

            <section class="wf" style="height: 20em;">
                <h2>About the Academy</h2>
            </section>

            <section class="wf clearfix">

                <h2>Journeymen</h2>

                <div class="col50 wf" style="height: 20em;">
                    <h2>Josh</h2>
                </div>

                <div class="col50 wf" style="height: 20em;">
                    <h2>Greg</h2>
                </div>

            </section>

            <section class="wf clearfix">
                <h2>Apply</h2>

                <div class="col50 wf" style="height: 20em;">
                    <h2>I&rsquo;m interested in design or development but have little to no experience with it</h2>
                </div>

                <div class="col50 wf" style="height: 20em;">
                    <h2>I&rsquo;m in charge of resourcing at a company and we can&rsquo;t find good people</h2>
                </div>

            </section>

            <nav class="pagination clearfix">
                <ul>
                    <li><a href="<?=$basepath?>/about/">Prev</a></li>
                    <li><a href="<?=$basepath?>/help/">Next</a></li>
                </ul>
            </nav><!-- .pagination -->
            

        </div><!-- .main -->

    </div><!-- .clearfix -->
    

    

<?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/close.php"); echo "\n"; ?>    