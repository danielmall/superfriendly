<?php require($_SERVER["DOCUMENT_ROOT"]."/__prototypes/002-nav-control/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>SuperFriendly Help</title>
    <?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/meta.php"); echo "\n"; ?>        

    <?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/cssReference.php"); echo "\n"; ?>        

</head>
<body>
    

    <div class="clearfix">

        <?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/nav.php"); echo "\n"; ?>        


        <div class="main">

            <h1>SuperFriendly Help</h1>

            <section class="wf" style="height: 20em;">
                <h2>About Help</h2>
            </section>

            <section class="wf clearfix">

                <div class="col50 wf" style="height: 20em;">
                    <h2>Rescue Ops</h2>
                </div>

                <div class="col50 wf" style="height: 20em;">
                    <h2>Office Hours</h2>
                </div>

            </section>

            <nav class="pagination clearfix">
                <ul>
                    <li><a href="<?=$basepath?>/academy/">Prev</a></li>
                    <li><a href="<?=$basepath?>/help/rescue-ops/">Next</a></li>
                </ul>
            </nav><!-- .pagination -->
            

        </div><!-- .main -->

    </div><!-- .clearfix -->
    

    

<?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/close.php"); echo "\n"; ?>    