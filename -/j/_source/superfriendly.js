/*
*************************************************

SUPERFRIENDLY
JavaScript Functions
Requires jQuery

Created by the epic SuperFriendly team.
http://superfriend.ly/

*************************************************
*/

var Site = function(){

    this.init = function(){

        highlightNav();        

    }

    var highlightNav = function(){
        $('.main-nav, .main-cta').onePageNav({
            easing: 'easeInOutQuint'
        });
    }

    

}



/*-------------------------------------------    
    Initial Actions
-------------------------------------------*/

$(document).ready(function() {         
    var sf = new Site();
    sf.init();
});