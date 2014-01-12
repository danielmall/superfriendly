<?php require_once($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>

<nav class="main-nav">
    	<ul class="no-bullets">
    		<li><a href="/">Home</a></li>
    		<li>
                <?php createNavItem('/work/', 'Work'); ?>
                <ul class="no-bullets nested1">
                    <li><?php createNavItem('/work/techcrunch/', 'TechCrunch'); ?></li>
                    <li><?php createNavItem('/work/ew/', 'Entertainment Weekly'); ?></li>
                    <li><?php createNavItem('/work/mastercard/', 'MasterCard'); ?></li>
                    <li><?php createNavItem('/work/no-chains/', 'No Chains'); ?></li>
                    <li><?php createNavItem('/work/grantland', 'Grantland'); ?></li>
                    <li><?php createNavItem('/work/rif', 'Reading Is Fundamental'); ?></li>
                    <li><?php createNavItem('/work/1800contacts', '1800Contacts'); ?></li>
                </ul>
            </li>
    		<li>
                <?php createNavItem('/services/', 'Services'); ?>
                <ul class="no-bullets nested1">
                    <li><?php createNavItem('/services/web/', 'Web'); ?></li>
                    <li><?php createNavItem('/services/mobile/', 'Mobile'); ?></li>
                    <li><?php createNavItem('/services/responsive/', 'Responsive'); ?></li>
                    <li><?php createNavItem('/services/branding/', 'Branding'); ?></li>
                </ul>
            </li>
    		<li><?php createNavItem('/about/', 'About'); ?></li>
    		<li><?php createNavItem('/academy/', 'SuperFriendly Academy'); ?></li>
    		<li><?php createNavItem('/rescue-ops/', 'SuperFriendly Rescue Ops'); ?></li>
    		<li><?php createNavItem('/contact/', 'Contact'); ?></li>
    	</ul>
    </nav><!-- .main-nav -->