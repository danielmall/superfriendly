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
                <?php createNavItem($basepath . '/expertise/', 'Expertise'); ?>
                <ul class="no-bullets nested1">
                    <li><?php createNavItem($basepath . '/expertise/art-direction/', 'Art Direction'); ?></li>
                    <li><?php createNavItem($basepath . '/expertise/graphic-design/', 'Graphic Design'); ?></li>
                    <li><?php createNavItem($basepath . '/expertise/responsive/', 'Responsive Design'); ?></li>
                    <li><?php createNavItem($basepath . '/expertise/information-architecture/', 'Information Architecture'); ?></li>
                    <li><?php createNavItem($basepath . '/expertise/front-end-development/', 'Front-End Development'); ?></li>
                    <li><?php createNavItem($basepath . '/expertise/back-end-development/', 'Back-End Development'); ?></li>
                    <li><?php createNavItem($basepath . '/expertise/cms-integration/', 'CMS Integration'); ?></li>
                    <li><?php createNavItem($basepath . '/expertise/project-management/', 'Project Management'); ?></li>
                    <li><?php createNavItem($basepath . '/expertise/mobile-strategy/', 'Mobile Strategy'); ?></li>
                    <li><?php createNavItem($basepath . '/expertise/branding/', 'Branding'); ?></li>
                </ul>
            </li>
    		<li><?php createNavItem($basepath . '/about/', 'About'); ?></li>
    		<li><?php createNavItem($basepath . '/academy/', 'SuperFriendly Academy'); ?></li>
    		<li>
                <?php createNavItem($basepath . '/help/', 'SuperFriendly Help'); ?>
                <ul class="no-bullets nested1">
                    <li><?php createNavItem($basepath . '/help/rescue-ops/', 'Rescue Ops'); ?></li>
                    <li><?php createNavItem($basepath . '/help/office-hours/', 'Office Hours'); ?></li>
                </ul>
            </li>
    		<li><?php createNavItem($basepath . '/contact/', 'Contact'); ?></li>
    	</ul>
    </nav><!-- .main-nav -->