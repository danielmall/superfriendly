<?php require($_SERVER["DOCUMENT_ROOT"]."/__prototypes/001-content-reference/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>TechCrunch, a SuperFriendly collaboration</title>
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

            <h1>TechCrunch</h1>

            <section class="wf" style="height: 30em;">
                <h2>Overview and brief</h2>
                <p><strong>Our Role:</strong> Art Direction, Design</p>
                <p><strong>Services</strong>: <a href="<?=$basepath?>/services/web/">web</a>, <a href="<?=$basepath?>/services/responsive/">responsive</a>, <a href="<?=$basepath?>/services/identity/">identity</a></p>
            </section>

            <section class="wf" style="height: 80em;">
                <h2>Detailed shots of work</h2>
            </section>

            <section class="wf" style="height: 20em;">
                <h2>Credits</h2>
                <p><strong>Client:</strong> AOL, Inc.</p>
                <p><strong>Agency:</strong> Global Moxie</p>
                <p><strong>SuperFriends:</strong> Brad Frost, Jennifer Brook, Jonathan Stark, Pon Kattera, Greg Sarault. <a href="<?=$basepath?>/about/">More about the SuperFriend model</a></p>
            </section>

            <nav class="pagination clearfix">
                <ul>
                    <li><a href="<?=$basepath?>/work/">Prev</a></li>
                    <li><a href="<?=$basepath?>/work/grantland/">Next</a></li>
                </ul>
            </nav><!-- .pagination -->

        </div><!-- .main -->

    </div><!-- .clearfix -->
    

    

<?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/close.php"); echo "\n"; ?>    