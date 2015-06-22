<?php require_once($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>

    <nav class="main-nav">
    	<ul class="no-bullets">
    		<?php 
                createNavItem(
                    $basepath . '/', 
                    'thumb-home',
                    '<svg class="thumb-home-shield" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45 55" enable-background="new 0 0 45 55" aria-labelledby="title"><title>SuperFriendly</title><path fill="#F04D23" d="M22.5 55c-23.5-9-22.5-19.5-22.5-19.5v-30.5c6.1-4.6 21.2-5 22.4-5h.2c1.3 0 16.3.4 22.4 5v30.6c0-.1.9 10.4-22.5 19.4z"/><path fill="#fff" d="M30.9 14.1h-14.2c-6.1 0-6.1 6.5-6.1 6.5 0 4.9 3.2 6 4.4 6.4h-4.7v4.7c0 3.4 2.5 4.1 3.9 4.2v.1h1.1v-14.4c0-3.1 4-2.9 4-2.9h10.4v4.2h-9.7v4.6h9.8v.8c0 3.1-4 2.9-4 2.9h-5.8v4.6h8.6c6.1 0 6.1-6.5 6.1-6.5 0-5.4-3.5-6.2-4.3-6.4h4.6v-4.7c-.1-3.3-2.6-4-4.1-4.1z"/></svg>'
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
                                '<svg class="thumb-oreilly-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59 48" enable-background="new 0 0 59 48" aria-labelledby="title"><title>O&rsquo;Reilly</title><path fill="#fff" d="M12.5 12.5c-3 3-4.8 7-4.8 11.5s1.8 8.6 4.8 11.5c3 3 7.1 4.8 11.6 4.8s8.6-1.8 11.6-4.8 4.8-7 4.8-11.5-1.8-8.6-4.8-11.5c-3-3-7.1-4.8-11.6-4.8s-8.6 1.8-11.6 4.8m-12.5 11.5c0-13.3 10.8-24 24.2-24 13.3 0 24.2 10.7 24.2 24s-10.8 24-24.2 24c-13.4 0-24.2-10.7-24.2-24"/><path fill="#7B1221" d="M59 5.7c0 3.1-2.5 5.7-5.7 5.7-3.1 0-5.7-2.5-5.7-5.7 0-3.1 2.5-5.7 5.7-5.7s5.7 2.5 5.7 5.7"/></svg>'
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
                                '<svg class="thumb-ew-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 127 27" enable-background="new 0 0 127 27" aria-labelledby="title"><title>Entertainment Weekly</title><path fill="#fff" d="M0 0h9.5v4.4h-4.8v5.6h3.8v4.4h-3.8v8.1h4.8v4.4h-9.5z"/><path fill="#fff" d="M10.2 6.5h4.3v1.1c.5-.8 1.5-1.3 2.9-1.3 2.7 0 3.1 1.2 3.1 4.7v16h-4.3v-15.3c0-1-.2-1.2-.8-1.2-.6 0-.9.1-.9 1.2v15.3h-4.3v-20.5z"/><path fill="#fff" d="M21.1 6.5h1.1v-5h4.2v4.9h1.6v4.1h-1.5v10.7c0 1.3.3 1.5 1.3 1.5h.2v4.1h-1.5c-2.9 0-4.2-1.2-4.2-4.6v-11.6h-1.1v-4.1z"/><path fill="#fff" d="M33.8 27c3.9 0 4.7-2 4.8-6.3l-4-.2c0 2.3-.3 2.6-1 2.6s-1-.4-1-2.3v-2.5h6v-5.9c0-4.4-1.1-6.2-4.8-6.2-3.8 0-5.2 1.4-5.2 6.2v8.3c-.1 4.5 1.1 6.3 5.2 6.3m-1.2-14.5c0-1.8.3-2.1 1-2.1.8 0 1 .4 1 2.1v2.2h-2v-2.2z"/><path fill="#fff" d="M39.6 6.5h4.3v1.2c.4-.7 1.1-1.2 1.7-1.2v4.1c-1.1.1-1.7.4-1.7 3.2v13.1h-4.3v-20.4z"/><path fill="#fff" d="M46 6.5h1v-5h4.2v4.9h1.5v4.2h-1.5v10.7c0 1.3.3 1.5 1.3 1.5h.2v4.1h-1.5c-2.9 0-4.2-1.2-4.2-4.6v-11.6h-1v-4.2z"/><path fill="#fff" d="M56.2 27c1.8 0 2.5-.3 2.9-1.1v1h3.9v-15.9c0-3.6-.8-4.8-4.7-4.8-3.6 0-5.1 1.7-5.4 5.2l4.1.4c.1-1.1.2-1.5 1.1-1.5.7 0 .8.3.8 1.5v.7c-5 1.3-6 3.3-6 8.6.2 4.2.5 5.9 3.3 5.9m1.8-3.7c-.7 0-.8-.6-.8-2.5 0-3 .4-3.6 1.9-4.2v4.8c-.1 1.6-.3 1.9-1.1 1.9"/><path fill="#fff" d="M64.3 1.5h4.2v4.3h-4.2v-4.3zm0 5h4.2v20.4h-4.2v-20.4z"/><path fill="#fff" d="M69.8 6.5h4.3v1.1c.6-.8 1.6-1.3 2.9-1.3 2.7 0 3.1 1.2 3.1 4.7v16h-4.3v-15.3c0-1-.2-1.2-.8-1.2-.6 0-.9.1-.9 1.2v15.3h-4.3v-20.5z"/><path fill="#fff" d="M92.9 11.7c0-1-.2-1.2-.7-1.2-.7 0-.9.3-.9 1.2v15.3h-4.2v-15.3c0-1-.2-1.2-.7-1.2-.6 0-.9.1-.9 1.2v15.3h-4.2v-20.5h4.2v1.1c.5-.8 1.5-1.3 2.8-1.3 1.7 0 2.4.5 2.7 1.7.6-1 1.4-1.7 3-1.7 2.7 0 3.1 1 3.1 4.7v16h-4.2v-15.3z"/><path fill="#fff" d="M103.4 27c3.9 0 4.7-2 4.8-6.3l-4-.2c0 2.3-.3 2.6-1 2.6s-1-.4-1-2.3v-2.5h6v-5.9c0-4.4-1.1-6.2-4.8-6.2-3.8 0-5.2 1.4-5.2 6.2v8.3c-.1 4.5 1.1 6.3 5.2 6.3m-1.2-14.5c0-1.8.3-2.1 1-2.1.8 0 1 .4 1 2.1v2.2h-2v-2.2z"/><path fill="#fff" d="M109.2 6.5h4.3v1.1c.6-.8 1.6-1.3 2.9-1.3 2.7 0 3.1 1.2 3.1 4.7v16h-4.3v-15.3c0-1-.2-1.2-.8-1.2-.6 0-.9.1-.9 1.2v15.3h-4.3v-20.5z"/><path fill="#fff" d="M120.1 6.5h1.1v-5h4.2v4.9h1.5v4.1h-1.5v10.7c0 1.3.3 1.5 1.3 1.5h.2v4.1h-1.5c-2.9 0-4.2-1.2-4.2-4.6v-11.6h-1.1v-4.1z"/><path d="M116.4 21.2h.7v3.6h1.1v.6h-1.9v-4.2zm6.8 2.7l-.8-2.7h.7l.5 1.8.5-1.8h.7l-.8 2.7v1.6h-.7v-1.6zm-12.9-2.7h.7v1.4l.8-1.4h.7l-.8 1.4.8 2.9h-.7l-.6-2.1-.2.3v1.8h-.7v-4.3zm-5.4 0h1.9v.6h-1.2v1h1v.6h-1v1.4h1.2v.6h-1.9v-4.2zm-5.1 0h1.9v.6h-1.2v1h1v.6h-1v1.4h1.2v.6h-1.9v-4.2zm-6.5 0h.7l.3 1.8.1.9.1-.9.3-1.8h.6l.3 1.8.1.9.1-.9.3-1.8h.7l-.7 4.3h-.7l-.5-2.7-.4 2.7h-.7l-.6-4.3z"/></svg>'
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