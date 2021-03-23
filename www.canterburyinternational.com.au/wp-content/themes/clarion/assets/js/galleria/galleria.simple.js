/**
 * Galleria Simple Theme 2015-02-27
 *
 *
 */

(function($) {

/*global window, jQuery, Galleria */

Galleria.addTheme({
    name: 'simple',
    version: 1.5,	
    author: 'Galleria',
    defaults: {
        transition: 'fade',
		thumbnails: false,
		responsive: true,
		showInfo: false,
		showCounter: false,
    },
    init: function(options) {

        Galleria.requires(1.4, 'This version of Classic theme requires Galleria 1.4 or later');

        // cache some stuff
            touch = Galleria.TOUCH;

        // some stuff for non-touch browsers
        if (! touch ) {
            this.addIdleState( this.get('image-nav-left'), { left:-50 });
            this.addIdleState( this.get('image-nav-right'), { right:-50 });
        }

        var activate = function(e) {
            $(e.thumbTarget).css('opacity',1).parent().siblings().children().css('opacity', 0.6);
        };
        
        this.bind('loadstart', function(e) {
            if (!e.cached) {
                this.$('loader').show().fadeTo(200, 0.4);
            }
            window.setTimeout(function() {
                activate(e);
            }, touch ? 300 : 0);
            this.$('info').toggle( this.hasInfo() );
        });

        this.bind('loadfinish', function(e) {
            this.$('loader').fadeOut(200);
        });
    }
});

}(jQuery));
