<?php require_once($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>

    <nav class="main-nav">
    	<ul class="no-bullets">
    		<?php 
                createNavItem(
                    $basepath . '/', 
                    'thumb-home',
                    '<svg class="thumb-home-shield" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45 55" enable-background="new 0 0 45 55"><path fill="#F04D23" d="M22.5 55c-23.5-9-22.5-19.5-22.5-19.5v-30.5c6.1-4.6 21.2-5 22.4-5h.2c1.3 0 16.3.4 22.4 5v30.6c0-.1.9 10.4-22.5 19.4z"/><path fill="#fff" d="M30.9 14.1h-14.2c-6.1 0-6.1 6.5-6.1 6.5 0 4.9 3.2 6 4.4 6.4h-4.7v4.7c0 3.4 2.5 4.1 3.9 4.2v.1h1.1v-14.4c0-3.1 4-2.9 4-2.9h10.4v4.2h-9.7v4.6h9.8v.8c0 3.1-4 2.9-4 2.9h-5.8v4.6h8.6c6.1 0 6.1-6.5 6.1-6.5 0-5.4-3.5-6.2-4.3-6.4h4.6v-4.7c-.1-3.3-2.6-4-4.1-4.1z"/></svg>'
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
                                '<svg class="thumb-tc-logo" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="88" height="45" viewBox="0 0 88 45" aria-labelledby="title"><defs><style>.tc-shape-path { fill: #fff; fill-rule: evenodd; }</style></defs><title>TechCrunch</title><path d="M88 30v15h-44v-30h14v15h30zm-59 15h-14v-30h-15v-15h44v15h-15v30zm59-45v15h-30v-15h30z" class="tc-shape-path"/></svg>'
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