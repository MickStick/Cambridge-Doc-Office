$(document).ready(function() {
    ////////////////////////////////// SlideShow /////////////////////////////////////////
    var slides = $('.slide');
    var count = 0;
    AniSlideShow();
    //slides.eq(0).css({"left": "0%"});
    function AniSlideShow() {
        var $this = slides.eq(count);

        $this.animate({"left": "0%"}).delay(3000).animate({ left: '-100%' }, function(){
            $this.css({ "left": "102%" });
            count < slides.length - 1 ? count++ : count = 0;
			AniSlideShow();
        });

    }
    //////////////////////////////////////////////////////////////////////////////////////
});