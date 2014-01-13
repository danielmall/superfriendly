<?php require_once($_SERVER["DOCUMENT_ROOT"]."/__prototypes/001-content-reference/-/_inc/functions.php"); echo "\n"; ?>

<nav class="main-nav">
    	<ul class="no-bullets">
    		<li>
                <?php if($_SERVER['REQUEST_URI'] == '/__prototypes/001-content-reference/') { ?>  
                <mark>Home</mark>
                <?php } else { ?>
                <a href="<?=$basepath?>">Home</a>
                <?php } ?>
            </li>
    		<li>
                <?php createNavItem($basepath . '/work/', 'Work'); ?>
                <ul class="no-bullets nested1">
                    <li><?php createNavItem($basepath . '/work/techcrunch/', 'TechCrunch'); ?></li>
                    <li><?php createNavItem($basepath . '/work/grantland', 'Grantland'); ?></li>
                    <li><?php createNavItem($basepath . '/work/entertainment-weekly/', 'Entertainment Weekly'); ?></li>
                    <li><?php createNavItem($basepath . '/work/reading-is-fundamental/', 'Reading Is Fundamental'); ?></li>
                    <li><?php createNavItem($basepath . '/work/mastercard/', 'MasterCard Cashless Pioneers'); ?></li>
                    <li><?php createNavItem($basepath . '/work/moodpik/', 'MoodPik'); ?></li>
                    <li><?php createNavItem($basepath . '/work/no-chains/', 'No Chains'); ?></li>
                    <li><?php createNavItem($basepath . '/work/1800contacts', '1800Contacts'); ?></li>
                </ul>
            </li>
    		<li>
                <?php createNavItem($basepath . '/services/', 'Services'); ?>
                <ul class="no-bullets nested1">
                    <li><?php createNavItem($basepath . '/services/web/', 'Web'); ?></li>
                    <li><?php createNavItem($basepath . '/services/mobile/', 'Mobile'); ?></li>
                    <li><?php createNavItem($basepath . '/services/responsive/', 'Responsive'); ?></li>
                    <li><?php createNavItem($basepath . '/services/identity/', 'Identity'); ?></li>
                </ul>
            </li>
    		<li><?php createNavItem($basepath . '/about/', 'About'); ?></li>
    		<li><?php createNavItem($basepath . '/academy/', 'SuperFriendly Academy'); ?></li>
    		<li><?php createNavItem($basepath . '/rescue-ops/', 'SuperFriendly Rescue Ops'); ?></li>
    		<li><?php createNavItem($basepath . '/contact/', 'Contact'); ?></li>
    	</ul>
    </nav><!-- .main-nav -->