<?php require($_SERVER["DOCUMENT_ROOT"]."/__prototypes/002-nav-control/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>Reading Is Fundamental, a SuperFriendly collaboration</title>
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

            <h1>Reading Is Fundamental</h1>

            <section class="wf" style="height: 30em;">
                <h2>Overview and brief</h2>
                <p><strong>Services</strong>: <a href="<?=$basepath?>/services/web/">web</a>, <a href="<?=$basepath?>/services/responsive/">responsive</a></p>
            </section>

            <section class="wf" style="height: 80em;">
                <h2>Detailed shots of work</h2>
            </section>

            <section class="wf" style="height: 20em;">
                <h2>Credits</h2>
                <p><strong>Client:</strong> Reading Is Fundamental</p>
                <p><strong>SuperFriends:</strong> Kevin M. Hoffman, Joshua Luciano, Bold, Mother. <a href="<?=$basepath?>/about/">More about the SuperFriend model</a></p>
            </section>

            <nav class="pagination clearfix">
                <ul>
                    <li><a href="<?=$basepath?>/work/entertainment-weekly/">Prev</a></li>
                    <li><a href="<?=$basepath?>/work/mastercard/">Next</a></li>
                </ul>
            </nav><!-- .pagination -->

        </div><!-- .main -->

    </div><!-- .clearfix -->
    

    

<?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/close.php"); echo "\n"; ?>    