<?php require_once($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>

<nav class="main-nav">
    	<ul class="no-bullets">
    		<li>
                <?php if($_SERVER['REQUEST_URI'] == '/') { ?>  
                <mark>Home</mark>
                <?php } else { ?>
                <a href="/">Home</a>
                <?php } ?>
            </li>
    		<li>
                <?php createNavItem('/work/', 'Work'); ?>
                <ul class="no-bullets nested1">
                    <li><?php createNavItem('/work/techcrunch/', 'TechCrunch'); ?></li>
                    <li><?php createNavItem('/work/grantland', 'Grantland'); ?></li>
                    <li><?php createNavItem('/work/entertainment-weekly/', 'Entertainment Weekly'); ?></li>
                    <li><?php createNavItem('/work/reading-is-fundamental/', 'Reading Is Fundamental'); ?></li>
                    <li><?php createNavItem('/work/mastercard/', 'MasterCard Cashless Pioneers'); ?></li>
                    <li><?php createNavItem('/work/moodpik/', 'MoodPik'); ?></li>
                    <li><?php createNavItem('/work/no-chains/', 'No Chains'); ?></li>
                    <li><?php createNavItem('/work/1800contacts', '1800Contacts'); ?></li>
                </ul>
            </li>
    		<li>
                <?php createNavItem('/services/', 'Services'); ?>
                <ul class="no-bullets nested1">
                    <li><?php createNavItem('/services/web/', 'Web'); ?></li>
                    <li><?php createNavItem('/services/mobile/', 'Mobile'); ?></li>
                    <li><?php createNavItem('/services/responsive/', 'Responsive'); ?></li>
                    <li><?php createNavItem('/services/identity/', 'Identity'); ?></li>
                </ul>
            </li>
    		<li><?php createNavItem('/about/', 'About'); ?></li>
    		<li><?php createNavItem('/academy/', 'SuperFriendly Academy'); ?></li>
    		<li><?php createNavItem('/rescue-ops/', 'SuperFriendly Rescue Ops'); ?></li>
    		<li><?php createNavItem('/contact/', 'Contact'); ?></li>
    	</ul>
    </nav><!-- .main-nav -->