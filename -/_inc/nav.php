<?php require_once($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>

    <nav class="main-nav">
    	<ul class="no-bullets">
    		<?php 
                createNavItem(
                    $basepath . '/', 
                    'thumb-home',
                    'Home'
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
                                '<svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="88" height="45" viewBox="0 0 88 45"><defs><style>.cls-1 { fill: #fff; fill-rule: evenodd; }</style></defs><path d="M88 30v15h-44v-30h14v15h30zm-59 15h-14v-30h-15v-15h44v15h-15v30zm59-45v15h-30v-15h30z" class="cls-1"/></svg>'
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