<?php require($_SERVER["DOCUMENT_ROOT"]."/__prototypes/002-nav-control/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title>Web, a SuperFriendly Service</title>
    <?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/meta.php"); echo "\n"; ?>        

    <?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/cssReference.php"); echo "\n"; ?>        

</head>
<body>
    

    <div class="clearfix">

        <?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/nav.php"); echo "\n"; ?>        


        <div class="main">

            <h1>Web</h1>

            <section class="wf" style="height: 20em;">
                <h2>Why Web is an important service we offer</h2>
            </section>

            <section class="wf" style="height: 20em;">
                <h2>Statistics about the importance of the web</h2>
            </section>

            <section class="wf">
                <h2>Examples of our web work</h2>

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
                        <h2>RIF</h2>
                    </div>

                    <div class="wf col50" style="height: 10em;">
                        <h2>MasterCard</h2>
                    </div>
                </div>

            </section>

            <nav class="pagination clearfix">
                <ul>
                    <li><a href="<?=$basepath?>/services/">Prev</a></li>
                    <li><a href="<?=$basepath?>/services/responsive/">Next</a></li>
                </ul>
            </nav><!-- .pagination -->

        </div><!-- .main -->

    </div><!-- .clearfix -->
    

    

<?php require($_SERVER["DOCUMENT_ROOT"].$basepath."/-/_inc/close.php"); echo "\n"; ?>    