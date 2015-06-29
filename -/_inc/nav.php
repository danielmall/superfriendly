<?php //require_once($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>

    <nav class="main-nav">

        <div class="thumb-holder">

    		<?php 
                createNavItem(
                    $basepath . '/', 
                    'thumb-home',
                    '<svg class="thumb-home-shield" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45 55" enable-background="new 0 0 45 55" aria-labelledby="thumb-home-title"><title id="thumb-home-title">SuperFriendly</title><path fill="#F04D23" d="M22.5 55c-23.5-9-22.5-19.5-22.5-19.5v-30.5c6.1-4.6 21.2-5 22.4-5h.2c1.3 0 16.3.4 22.4 5v30.6c0-.1.9 10.4-22.5 19.4z"/><path fill="#fff" d="M30.9 14.1h-14.2c-6.1 0-6.1 6.5-6.1 6.5 0 4.9 3.2 6 4.4 6.4h-4.7v4.7c0 3.4 2.5 4.1 3.9 4.2v.1h1.1v-14.4c0-3.1 4-2.9 4-2.9h10.4v4.2h-9.7v4.6h9.8v.8c0 3.1-4 2.9-4 2.9h-5.8v4.6h8.6c6.1 0 6.1-6.5 6.1-6.5 0-5.4-3.5-6.2-4.3-6.4h4.6v-4.7c-.1-3.3-2.6-4-4.1-4.1z"/></svg>'
                );
            ?>

            <?php 
                createNavItem(
                    $basepath . '/work/',
                    'thumb-work', 
                    'Work'
                );
            ?>

            <?php 
                createNavItem(
                    $basepath . '/work/oreilly/', 
                    'thumb-nested thumb-oreilly',
                    '<svg class="thumb-oreilly-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59 48" enable-background="new 0 0 59 48" aria-labelledby="thumb-oreilly-title"><title id="thumb-oreilly-title">O&rsquo;Reilly</title><path fill="#fff" d="M12.5 12.5c-3 3-4.8 7-4.8 11.5s1.8 8.6 4.8 11.5c3 3 7.1 4.8 11.6 4.8s8.6-1.8 11.6-4.8 4.8-7 4.8-11.5-1.8-8.6-4.8-11.5c-3-3-7.1-4.8-11.6-4.8s-8.6 1.8-11.6 4.8m-12.5 11.5c0-13.3 10.8-24 24.2-24 13.3 0 24.2 10.7 24.2 24s-10.8 24-24.2 24c-13.4 0-24.2-10.7-24.2-24"/><path fill="#7B1221" d="M59 5.7c0 3.1-2.5 5.7-5.7 5.7-3.1 0-5.7-2.5-5.7-5.7 0-3.1 2.5-5.7 5.7-5.7s5.7 2.5 5.7 5.7"/></svg>'
                ); 
            ?>

            <?php 
                createNavItem(
                    $basepath . '/work/techcrunch/', 
                    'thumb-nested thumb-tc',
                    '<svg class="thumb-tc-logo" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="88" height="45" viewBox="0 0 88 45" aria-labelledby="thumb-tc-title"><defs><style>.tc-shape-path { fill: #fff; fill-rule: evenodd; }</style></defs><title id="thumb-tc-title">TechCrunch</title><path d="M88 30v15h-44v-30h14v15h30zm-59 15h-14v-30h-15v-15h44v15h-15v30zm59-45v15h-30v-15h30z" class="tc-shape-path"/></svg>'
                ); 
            ?>

            <?php 
                createNavItem(
                    $basepath . '/work/grantland/', 
                    'thumb-nested thumb-grantland',
                    '<svg class="thumb-grantland-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51 55" enable-background="new 0 0 51 55" aria-labelledby="thumb-grantland-title"><title id="thumb-grantland-title">Grantland</title><path fill="#C7C6C3" d="M15.8 29.6c0-13.1 5-18.7 14.8-18.7 1.6 0 3.1.2 4.4.7-.1-.1-.2-.2-.2-.3-2.7-2.7-5.5-3.9-9.2-3.9-9.2 0-13.3 5.3-13.3 17.2v.7c0 7.4 1.5 12.1 4.8 14.8-.9-2.6-1.4-5.9-1.4-9.8l.1-.7z"/><g fill="#B2B2AF"><path d="M13.4 15.9l3.8 3.8.4-1-3.8-3.8c-.2.3-.3.6-.4 1z"/><path d="M13 17.3c-.1.4-.2.8-.2 1.2l3.7 3.7c.1-.4.2-.8.3-1.1l-3.8-3.8z"/><path d="M15.2 12l3.9 3.9.6-.8-3.9-3.9-.6.8z"/><path d="M20.2 14.6c2.5-2.5 5.9-3.7 10.3-3.7 1.6 0 3.1.2 4.4.7-.1-.1-.2-.2-.2-.3-2.7-2.7-5.5-3.9-9.2-3.9-4.1 0-7.1 1-9.3 3.2l4 4z"/><path d="M14.2 13.7l3.9 3.8.5-.9-3.9-3.9c-.2.4-.3.7-.5 1z"/></g><path fill="#B2B2AF" d="M39.9 17.1l3.5 3.4h1l-3.5-3.4z"/><path fill="#C7C6C3" d="M40.9 15.6v1.5l3.5 3.4v-12.9l-3.5-3.5z"/><path fill="#C32127" d="M27.4 27.1c3.1.6 4.3 1.8 4.3 4.1v11.7c-2 .8-3.9 1.2-5.8 1.2-9.8 0-15.1-5.3-15.1-18.7v-.7c0-13.1 5-18.7 14.8-18.7 4.1 0 7.3 1.4 10.2 4.3 1.2 1.2 2.2 3.4 2.6 5.3h1v-12.9c-4.7-2-9.5-2.7-13.8-2.7-15.6 0-25.6 8.1-25.6 24.7v.7c0 16.6 10 24.7 24.6 24.7 6.6 0 13.2-1.7 17.2-4.2v-14.7c0-2.3 1.1-3.4 4.3-4.1v-1h-18.7v1z"/><path fill="#C7C6C3" d="M47.5 27.6v1l3.5 3.4v-.9z"/><path fill="#BDBCBF" d="M47.5 28.6c-3.1 0-4.3.8-4.3 2.6v15.5l3.5 3.5v-14c0-2.3 1.1-3.4 4.3-4.1l-3.5-3.5z"/><g fill="#B2B2AF"><path d="M43.7 29.7l3.9 3.9c.7-.7 1.7-1.2 3.3-1.5l-3.5-3.5c-1.9 0-3.1.3-3.7 1.1z"/><path d="M46.8 35.1c.1-.4.2-.7.4-1l-3.8-3.8c-.1.3-.1.5-.1.9v.4l3.5 3.5z"/></g><path fill="#B2B2AF" d="M42.6 47.2c-4.4 2.7-11.2 4.4-17.9 4.4-4.7 0-8.9-.8-12.4-2.4 4.2 3.8 10.2 5.8 17.3 5.8 6.6 0 13.2-2.3 17.2-4.8l-3.5-3.5-.7.5z"/></svg>'
                ); 
            ?>

            <?php 
                createNavItem(
                    $basepath . '/work/entertainment-weekly/',  
                    'thumb-nested thumb-ew',
                    '<svg class="thumb-ew-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 127 27" enable-background="new 0 0 127 27" aria-labelledby="thumb-ew-title"><title id="thumb-ew-title">Entertainment Weekly</title><path fill="#fff" d="M0 0h9.5v4.4h-4.8v5.6h3.8v4.4h-3.8v8.1h4.8v4.4h-9.5z"/><path fill="#fff" d="M10.2 6.5h4.3v1.1c.5-.8 1.5-1.3 2.9-1.3 2.7 0 3.1 1.2 3.1 4.7v16h-4.3v-15.3c0-1-.2-1.2-.8-1.2-.6 0-.9.1-.9 1.2v15.3h-4.3v-20.5z"/><path fill="#fff" d="M21.1 6.5h1.1v-5h4.2v4.9h1.6v4.1h-1.5v10.7c0 1.3.3 1.5 1.3 1.5h.2v4.1h-1.5c-2.9 0-4.2-1.2-4.2-4.6v-11.6h-1.1v-4.1z"/><path fill="#fff" d="M33.8 27c3.9 0 4.7-2 4.8-6.3l-4-.2c0 2.3-.3 2.6-1 2.6s-1-.4-1-2.3v-2.5h6v-5.9c0-4.4-1.1-6.2-4.8-6.2-3.8 0-5.2 1.4-5.2 6.2v8.3c-.1 4.5 1.1 6.3 5.2 6.3m-1.2-14.5c0-1.8.3-2.1 1-2.1.8 0 1 .4 1 2.1v2.2h-2v-2.2z"/><path fill="#fff" d="M39.6 6.5h4.3v1.2c.4-.7 1.1-1.2 1.7-1.2v4.1c-1.1.1-1.7.4-1.7 3.2v13.1h-4.3v-20.4z"/><path fill="#fff" d="M46 6.5h1v-5h4.2v4.9h1.5v4.2h-1.5v10.7c0 1.3.3 1.5 1.3 1.5h.2v4.1h-1.5c-2.9 0-4.2-1.2-4.2-4.6v-11.6h-1v-4.2z"/><path fill="#fff" d="M56.2 27c1.8 0 2.5-.3 2.9-1.1v1h3.9v-15.9c0-3.6-.8-4.8-4.7-4.8-3.6 0-5.1 1.7-5.4 5.2l4.1.4c.1-1.1.2-1.5 1.1-1.5.7 0 .8.3.8 1.5v.7c-5 1.3-6 3.3-6 8.6.2 4.2.5 5.9 3.3 5.9m1.8-3.7c-.7 0-.8-.6-.8-2.5 0-3 .4-3.6 1.9-4.2v4.8c-.1 1.6-.3 1.9-1.1 1.9"/><path fill="#fff" d="M64.3 1.5h4.2v4.3h-4.2v-4.3zm0 5h4.2v20.4h-4.2v-20.4z"/><path fill="#fff" d="M69.8 6.5h4.3v1.1c.6-.8 1.6-1.3 2.9-1.3 2.7 0 3.1 1.2 3.1 4.7v16h-4.3v-15.3c0-1-.2-1.2-.8-1.2-.6 0-.9.1-.9 1.2v15.3h-4.3v-20.5z"/><path fill="#fff" d="M92.9 11.7c0-1-.2-1.2-.7-1.2-.7 0-.9.3-.9 1.2v15.3h-4.2v-15.3c0-1-.2-1.2-.7-1.2-.6 0-.9.1-.9 1.2v15.3h-4.2v-20.5h4.2v1.1c.5-.8 1.5-1.3 2.8-1.3 1.7 0 2.4.5 2.7 1.7.6-1 1.4-1.7 3-1.7 2.7 0 3.1 1 3.1 4.7v16h-4.2v-15.3z"/><path fill="#fff" d="M103.4 27c3.9 0 4.7-2 4.8-6.3l-4-.2c0 2.3-.3 2.6-1 2.6s-1-.4-1-2.3v-2.5h6v-5.9c0-4.4-1.1-6.2-4.8-6.2-3.8 0-5.2 1.4-5.2 6.2v8.3c-.1 4.5 1.1 6.3 5.2 6.3m-1.2-14.5c0-1.8.3-2.1 1-2.1.8 0 1 .4 1 2.1v2.2h-2v-2.2z"/><path fill="#fff" d="M109.2 6.5h4.3v1.1c.6-.8 1.6-1.3 2.9-1.3 2.7 0 3.1 1.2 3.1 4.7v16h-4.3v-15.3c0-1-.2-1.2-.8-1.2-.6 0-.9.1-.9 1.2v15.3h-4.3v-20.5z"/><path fill="#fff" d="M120.1 6.5h1.1v-5h4.2v4.9h1.5v4.1h-1.5v10.7c0 1.3.3 1.5 1.3 1.5h.2v4.1h-1.5c-2.9 0-4.2-1.2-4.2-4.6v-11.6h-1.1v-4.1z"/><path d="M116.4 21.2h.7v3.6h1.1v.6h-1.9v-4.2zm6.8 2.7l-.8-2.7h.7l.5 1.8.5-1.8h.7l-.8 2.7v1.6h-.7v-1.6zm-12.9-2.7h.7v1.4l.8-1.4h.7l-.8 1.4.8 2.9h-.7l-.6-2.1-.2.3v1.8h-.7v-4.3zm-5.4 0h1.9v.6h-1.2v1h1v.6h-1v1.4h1.2v.6h-1.9v-4.2zm-5.1 0h1.9v.6h-1.2v1h1v.6h-1v1.4h1.2v.6h-1.9v-4.2zm-6.5 0h.7l.3 1.8.1.9.1-.9.3-1.8h.6l.3 1.8.1.9.1-.9.3-1.8h.7l-.7 4.3h-.7l-.5-2.7-.4 2.7h-.7l-.6-4.3z"/></svg>'
                ); 
            ?>

            <?php createNavItem(
                    $basepath . '/work/rferl/', 
                    'thumb-nested thumb-rferl',
                    'Radio Free Europe'
                ); 
            ?>

            <?php createNavItem(
                    $basepath . '/work/rif/', 
                    'thumb-nested thumb-rif',
                    '<svg class="thumb-rif-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78 53" enable-background="new 0 0 78 53" aria-labelledby="thumb-rif-title"><title id="thumb-rif-title">Reading Is Fundamental</title><path fill="#2172B9" d="M75 41.9c0 1-.7 1.8-1.6 1.8h-21.1c-9.4 0-13.3 5.4-13.3 5.4s-3.9-5.4-13.3-5.4h-21c-.9 0-1.6-.8-1.6-1.8v-37.2c-.1-.9.6-1.7 1.5-1.7h21c6.9 0 10.8 3.5 12.4 5.3.1.1.4.4.9.4s.8-.3.9-.4c1.7-1.9 5.6-5.3 12.5-5.3h21.1c.9 0 1.6.7 1.6 1.7v37.2z"/><path fill="#F6E20B" d="M75 41.9c0 1-.7 1.8-1.6 1.8h-21.1c-9.4 0-13.3 5.4-13.3 5.4s-3.9-5.4-13.3-5.4h-21c-.9 0-1.6-.8-1.6-1.8v-37.2c-.1-.9.6-1.7 1.5-1.7h21c6.9 0 10.8 3.5 12.4 5.3.1.1.4.4.9.4s.8-.3.9-.4c1.7-1.9 5.6-5.3 12.5-5.3h21.1c.9 0 1.6.7 1.6 1.7v37.2zm-1.7-41.9h-21c-9.4 0-13.3 5.1-13.3 5.1s-4-5.1-13.4-5.1h-20.9c-2.6 0-4.7 2-4.7 4.5v37.7c0 2.5 2.1 4.5 4.7 4.5h20.9c6.8 0 10.7 3.9 12.4 6 0 0 .3.4.9.4.6 0 .9-.4.9-.4 1.6-2.1 5.6-6 12.4-6h21c2.6 0 4.7-2 4.7-4.5v-37.7c.1-2.5-2-4.5-4.6-4.5z"/><path fill="#F6E20B" d="M39 13.6c-.8 0-1.5.7-1.5 1.5v25.2c0 .8.7 1.5 1.5 1.5s1.5-.7 1.5-1.5v-25.2c0-.8-.7-1.5-1.5-1.5"/><path fill="#F6E20B" d="M25.7 23.8h-12.2v-10.2h12.2c2.8 0 5.1 2.2 5.1 5.1 0 2.8-2.3 5.1-5.1 5.1m8.1-5.1c0-4.4-3.6-8-8.1-8h-13.7c-.7 0-1.5.6-1.5 1.5v23.4c0 .8.7 1.5 1.5 1.5s1.5-.7 1.5-1.5v-8.7h9.5l6.1 10.6c.5.7 1.3 1 2.1.6.7-.4 1-1.3.5-2l-5.3-9.2c3.2-.4 7.4-3.2 7.4-8.2"/><path fill="#F6E20B" d="M67.5 10.6h-13.9c-4.3 0-7.9 3.7-7.9 8.1v18c0 .8.7 1.5 1.5 1.5s1.5-.7 1.5-1.5v-9.9h17.2c.8 0 1.5-.7 1.5-1.5s-.7-1.5-1.5-1.5h-17.2v-5c0-3.3 2.6-5.3 5-5.3h13.8c.8 0 1.5-.6 1.5-1.5 0-.7-.7-1.4-1.5-1.4"/></svg>'
                ); 
            ?>

            <?php 
                createNavItem(
                    $basepath . '/work/7hd/', 
                    'thumb-nested thumb-7hd',
                    'Seven Heads Design'
                ); 
            ?>

            <?php 
                createNavItem(
                    $basepath . '/work/mastercard/', 
                    'thumb-nested thumb-mastercard',
                    'MasterCard Cashless Pioneers'
                ); 
            ?>

            <?php 
                createNavItem(
                    $basepath . '/work/moodpik/', 
                    'thumb-nested thumb-moodpik',
                    'MoodPik'
                ); 
            ?>

            <?php 
                createNavItem(
                    $basepath . '/work/no-chains/', 
                    'thumb-nested thumb-nochains',
                    'No Chains'
                ); 
            ?>

            <?php 
                createNavItem(
                    $basepath . '/work/1800contacts/', 
                    'thumb-nested thumb-1800contacts',
                    '<svg class="thumb-1800contacts-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 79 40" enable-background="new 0 0 79 40" aria-labelledby="thumb-1800contacts-title"><title id="thumb-1800contacts-title">1800contacts</title><path fill="#fff" d="M60.2 0c-4.7 0-9.2 1.8-12.6 5.2-2.1 1.7-4.5 2.5-7 2.5-4.3 0-8.8-2.4-10.2-3.4-3.4-2.8-7.4-4.3-11.6-4.3-10.4 0-18.8 9-18.8 20s8.4 20 18.8 20c4.5 0 8.6-1.5 12.2-4.8 2.5-1.7 5.7-2.9 9.5-2.9 2.6 0 5.1.9 7.2 2.6.3.3.7.6 1.1.9l.1.1.1.1c3.3 2.6 7.2 4 11.2 4 10.4 0 18.8-9 18.8-20s-8.4-20-18.8-20m-32.2 32.1c-.3.2-.6.4-.8.6-2.4 1.8-5.3 2.7-8.4 2.7-8 0-14.5-7-14.5-15.5 0-8.6 6.5-15.5 14.5-15.5s14.5 7 14.5 15.5c0 5-1.9 9.4-5.3 12.2m9.6-12.1c0-2.9-.6-5.8-1.7-8.4 1.3.3 3.4.5 4.7.5.8 0 1.7-.1 2.5-.2-1.1 2.6-1.6 5.3-1.6 8.1 0 2.9.6 5.6 1.6 8.2-.8-.1-1.6-.2-2.4-.2-1.4 0-3.5.2-4.9.5 1.2-2.6 1.8-5.6 1.8-8.5m22.6 15.5c-3.3 0-6.4-1.2-9-3.4l-.3-.3c-3.3-3-5.2-7.3-5.2-11.9 0-8.6 6.5-15.5 14.5-15.5s14.5 7 14.5 15.5c0 8.7-6.5 15.6-14.5 15.6"/></svg>'
                ); 
            ?>   		
    		
            <?php 
                createNavItem(
                    $basepath . '/about/', 
                    'thumb-about',
                    'About'
                ); 
            ?>

            <?php 
                createNavItem(
                    $basepath . '/apprenticeship/', 
                    'thumb-apprenticeship',
                    'Apprenticeship'
                ); 
            ?>  		

            <?php 
                createNavItem(
                    $basepath . '/rescue-ops/', 
                    'thumb-rescue-ops',
                    'Rescue Ops'
                ); 
            ?>

    		<?php 
                createNavItem(
                    $basepath . '/contact/', 
                    'thumb-contact',
                    'Contact'
                ); 
            ?>

        </div><!-- .thumb-holder -->

    </nav><!-- .main-nav -->
