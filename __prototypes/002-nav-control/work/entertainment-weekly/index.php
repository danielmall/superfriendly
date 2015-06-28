<?php require($_SERVER["DOCUMENT_ROOT"]."/__prototypes/002-nav-control/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>Entertainment Weekly, a SuperFriendly collaboration</title>
    <?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/meta.php"); echo "\n"; ?>        

    <?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/cssReference.php"); echo "\n"; ?>        

</head>
<body>
    

    <div class="clearfix">

        <?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/nav.php"); echo "\n"; ?>        


        <div class="main">

            <h1>Entertainment Weekly</h1>

            <section class="wf" style="height: 30em;">
                <h2>Overview and brief</h2>
                <p><strong>Services</strong>: <a href="<?=$basepath?>/services/web/">web</a>, <a href="<?=$basepath?>/services/responsive/">responsive</a>, <a href="<?=$basepath?>/services/mobile/">mobile</a></p>
            </section>

            <section class="wf" style="height: 80em;">
                <h2>Detailed shots of work</h2>
            </section>

            <section class="wf" style="height: 20em;">
                <h2>Credits</h2>
                <p><strong>Client:</strong> Global Moxie</p>
                <p><strong>SuperFriends:</strong> Brad Frost, Robert Gorell, Jonathan Stark, Kristina Frantz, Scott Cook. <a href="<?=$basepath?>/about/">More about the SuperFriend model</a></p>
            </section>

            <nav class="pagination clearfix">
                <ul>
                    <li><a href="<?=$basepath?>/work/grantland/">Prev</a></li>
                    <li><a href="<?=$basepath?>/work/reading-is-fundamental/">Next</a></li>
                </ul>
            </nav><!-- .pagination -->

        </div><!-- .main -->

    </div><!-- .clearfix -->
    

    

<?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/close.php"); echo "\n"; ?>    