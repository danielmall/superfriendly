<?php require_once($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>

<nav class="main-nav">
    	<ul class="no-bullets">
    		<li><a href="#main">Home</a></li>
    		<li>
                <?php createNavItem($basepath . '#work', 'Work'); ?>
                <ul class="no-bullets nested1">
                    <li><?php createNavItem($basepath . '#work-techcrunch', 'TechCrunch'); ?></li>
                    <li><?php createNavItem($basepath . '#work-grantland', 'Grantland'); ?></li>
                    <li><?php createNavItem($basepath . '#work-ew', 'Entertainment Weekly'); ?></li>
                    <?php /* ?><li><?php createNavItem($basepath . '#work-rif', 'Reading Is Fundamental'); ?></li><?php */ ?>
                    <li><?php createNavItem($basepath . '#work-7hd', 'Seven Heads Design'); ?></li>
                    <li><?php createNavItem($basepath . '#work-mastercard', 'MasterCard Cashless Pioneers'); ?></li>
                    <li><?php createNavItem($basepath . '#work-moodpik', 'MoodPik'); ?></li>
                    <li><?php createNavItem($basepath . '#work-no-chains', 'No Chains'); ?></li>
                    <li><?php createNavItem($basepath . '#work-1800contacts', '1800Contacts'); ?></li>                    
                </ul>
            </li>    		
    		<li><?php createNavItem($basepath . '#about', 'About'); ?></li>    		
    		<li><?php createNavItem($basepath . '#contact', 'Contact'); ?></li>
    	</ul>
    </nav><!-- .main-nav -->