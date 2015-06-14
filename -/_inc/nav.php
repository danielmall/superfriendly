<?php require_once($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>

    <nav class="main-nav">
    	<ul class="no-bullets">
    		<?php createNavItem($basepath . '/', 'Home'); ?>
            <?php createNavItem($basepath . '/work/', 'Work'); ?>
                <ul class="no-bullets nested1">
                    <?php createNavItem($basepath . '/work/oreilly/', 'O&rsquo;Reilly'); ?>
                    <?php createNavItem($basepath . '/work/techcrunch/', 'TechCrunch'); ?>
                    <?php createNavItem($basepath . '/work/grantland/', 'Grantland'); ?>
                    <?php createNavItem($basepath . '/work/entertainment-weekly/', 'Entertainment Weekly'); ?>
                    <?php createNavItem($basepath . '/work/rif/', 'Reading Is Fundamental'); ?>
                    <?php createNavItem($basepath . '/work/7hd/', 'Seven Heads Design'); ?>
                    <?php createNavItem($basepath . '/work/mastercard/', 'MasterCard Cashless Pioneers'); ?>
                    <?php createNavItem($basepath . '/work/moodpik/', 'MoodPik'); ?>
                    <?php createNavItem($basepath . '/work/no-chains/', 'No Chains'); ?>
                    <?php createNavItem($basepath . '/work/1800contacts/', '1800Contacts'); ?>
                </ul>
            </li>    		
    		<?php createNavItem($basepath . '/about/', 'About'); ?>  		
    		<?php createNavItem($basepath . '/contact/', 'Contact'); ?>
    	</ul>
    </nav><!-- .main-nav -->