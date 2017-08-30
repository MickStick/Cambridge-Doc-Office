$(document).ready(function() {
    ////////////////////////////////// SlideShow /////////////////////////////////////////
    var slides = $('.slide');
    var count = 0;
    AniSlideShow();
    slides.eq(0).css({ "left": "0%" });

    function AniSlideShow() {
        var $this = slides.eq(count);
        var next = null;
        if ($this.next().length) {
            next = $this.next();
        } else {
            next = slides.eq(0);
        }

        $this.animate({ "left": "0%" }, function() {
            var move;
            $this.mouseover(function() {
                clearTimeout(move);
            });

            $this.mouseout(function() {
                AniSlideShow();
            });
            move = setTimeout(function() {
                $this.animate({ left: '-101%' });
                next.animate({ left: "0%" }, function() {
                    $this.css({ "left": "102%" });
                    count < slides.length - 1 ? count++ : count = 0;
                    AniSlideShow();
                });
            }, 3000);
        });
        /*.delay(3000).animate({ left: '-100%' }, function(){
            $this.css({ "left": "102%" });
            count < slides.length - 1 ? count++ : count = 0;
			AniSlideShow();
        });*/

    }
    //////////////////////////////////////////////////////////////////////////////////////

    ////////////////////////////////////// Show Doc Info /////////////////////////////////
    $('.one-third').click(function() {
        $(this).children('p').animate({ height: 'toggle' }, 150);
    });
    //////////////////////////////////////////////////////////////////////////////////////


});