<?php require_once($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>

<nav class="main-nav">
    	<ul class="no-bullets">
    		<li class="nav-home nav-title-slide"><a href="#main">Home</a></li>
    		<li class="nav-work nav-title-slide">
                <?php createNavItem($basepath . '#work', 'Work'); ?>
                <ul class="no-bullets nested1">
                    <li class="nav-work-techcrunch"><?php createNavItem($basepath . '#work-techcrunch', 'TechCrunch'); ?></li>
                    <li class="nav-work-grantland"><?php createNavItem($basepath . '#work-grantland', 'Grantland'); ?></li>
                    <li class="nav-work-ew"><?php createNavItem($basepath . '#work-ew', 'Entertainment Weekly'); ?></li>
                    <?php /* ?><li class=""><?php createNavItem($basepath . '#work-rif', 'Reading Is Fundamental'); ?></li><?php */ ?>
                    <li class="nav-work-7hd"><?php createNavItem($basepath . '#work-7hd', 'Seven Heads Design'); ?></li>
                    <li class="nav-work-mastercard"><?php createNavItem($basepath . '#work-mastercard', 'MasterCard Cashless Pioneers'); ?></li>
                    <li class="nav-work-moodpik"><?php createNavItem($basepath . '#work-moodpik', 'MoodPik'); ?></li>
                    <li class="nav-work-no-chains"><?php createNavItem($basepath . '#work-no-chains', 'No Chains'); ?></li>
                    <li class="nav-work-1800contacts"><?php createNavItem($basepath . '#work-1800contacts', '1800Contacts'); ?></li>                    
                </ul>
            </li>    		
    		<li class="nav-about nav-title-slide"><?php createNavItem($basepath . '#about', 'About'); ?></li>    		
    		<li class="nav-contact nav-title-slide"><?php createNavItem($basepath . '#contact', 'Contact'); ?></li>
    	</ul>
    </nav><!-- .main-nav -->