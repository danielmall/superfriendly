<?php require_once($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>

    <nav class="main-nav">
    	<ul class="no-bullets">
    		<?php 
                createNavItem(
                    $basepath . '/', 
                    'thumb-home',
                    '<svg xmlns="http://www.w3.org/2000/svg"><path id="shield" fill="#FF4800" d="M84.7 67.3c-28.7-11-27.5-23.8-27.5-23.8v-37.4c7.5-5.6 25.9-6.1 27.4-6.1h.2c1.6 0 20 .5 27.4 6.1v37.4s1.1 12.8-27.5 23.8z"/><path id="emblem" fill="#fff" d="M95 17.3h-17.4c-7.5 0-7.5 7.9-7.5 7.9 0 6 3.9 7.4 5.4 7.8h-5.7v5.8c0 4.2 3 5 4.8 5.1v.1h1.4v-17.6c0-3.8 4.9-3.6 4.9-3.6h12.7v5.2h-12v5.6h12v1c0 3.8-4.9 3.6-4.9 3.6h-7.1v5.6h10.5c7.5 0 7.5-7.9 7.5-7.9 0-6.6-4.3-7.6-5.3-7.8h5.6v-5.8c-.1-4.1-3.1-4.9-4.9-5z"/></svg>'
                ); 
            ?>

            <?php 
                createNavItem(
                    $basepath . '/work/',
                    'thumb-work', 
                    'Work'
                ); 
            ?>

                <ul class="no-bullets nested1">

                        <?php 
                            createNavItem(
                                $basepath . '/work/oreilly/', 
                                'thumb-oreilly',
                                'O&rsquo;Reilly'
                            ); 
                        ?>

                        <?php 
                            createNavItem(
                                $basepath . '/work/techcrunch/', 
                                'thumb-tc',
                                '<svg class="tc-shape" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="88" height="45" viewBox="0 0 88 45" aria-labelledby="title"><defs><style>.tc-shape-path { fill: #fff; fill-rule: evenodd; }</style></defs><title>TechCrunch</title><path d="M88 30v15h-44v-30h14v15h30zm-59 15h-14v-30h-15v-15h44v15h-15v30zm59-45v15h-30v-15h30z" class="tc-shape-path"/></svg>'
                            ); 
                        ?>

                        <?php 
                            createNavItem(
                                $basepath . '/work/grantland/', 
                                'thumb-grantland',
                                'Grantland'
                            ); 
                        ?>

                        <?php 
                            createNavItem(
                                $basepath . '/work/entertainment-weekly/',  
                                'thumb-ew',
                                'Entertainment Weekly'
                            ); 
                        ?>

                        <?php createNavItem(
                                $basepath . '/work/rif/', 
                                'thumb-rif',
                                'Reading Is Fundamental'
                            ); 
                        ?>

                        <?php 
                            createNavItem(
                                $basepath . '/work/7hd/', 
                                'thumb-7hd',
                                'Seven Heads Design'
                            ); 
                        ?>

                        <?php 
                            createNavItem(
                                $basepath . '/work/mastercard/', 
                                'thumb-mastercard',
                                'MasterCard Cashless Pioneers'
                            ); 
                        ?>

                        <?php 
                            createNavItem(
                                $basepath . '/work/moodpik/', 
                                'thumb-moodpik',
                                'MoodPik'
                            ); 
                        ?>

                        <?php 
                            createNavItem(
                                $basepath . '/work/no-chains/', 
                                'thumb-nochains',
                                'No Chains'
                            ); 
                        ?>

                        <?php 
                            createNavItem(
                                $basepath . '/work/1800contacts/', 
                                'thumb-1800contacts',
                                '1800Contacts'
                            ); 
                        ?>

                </ul>
            </li>    		
    		
            <?php 
                createNavItem(
                    $basepath . '/about/', 
                    'thumb-about',
                    'About'
                ); 
            ?>  		

    		<?php 
                createNavItem(
                    $basepath . '/contact/', 
                    'thumb-contact',
                    'Contact'
                ); 
            ?>

    	</ul>
    </nav><!-- .main-nav -->