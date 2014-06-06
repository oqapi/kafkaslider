/** Main slider function **/
jQuery(document).ready(function($) {
    var unslider = $('.banner').unslider({
        speed : 500, //  The speed to animate each slide (in milliseconds)
        delay : 300000, //  The delay between slide animations (in milliseconds)
        complete : function() {
        }, //  A function that gets called after every slide animation
        keys : true, //  Enable keyboard (left, right) arrow shortcuts
        dots : true, //  Display dot navigation
        fluid : true //  Support responsive design. May break non-responsive designs
    });
    $('.unslider-arrow').click(function() {
        var fn = this.className.split(' ')[1];
        
        //  Either do unslider.data('unslider').next() or .prev() depending on the className
        unslider.data('unslider')[fn]();
    });
});
/** END Main slider function **/


/** Drop down fase and jaar **/
function DropDown(el) {
    this.dd = el;
    this.placeholder = this.dd.children('span');
    this.opts = this.dd.find('ul.dropdown > li');
    this.val = '';
    this.index = -1;
    this.initEvents();
}

DropDown.prototype = {
    initEvents : function() {
        var obj = this;

        obj.dd.on('click', function(event) {
            $(this).toggleClass('active');
            $('.banner').height('1000px');
            $('.banner ul').height('1000px');
            $('.banner ul.dropdown').height('auto');
            return false;
        });

        obj.opts.on('click', function() {
            var opt = $(this);
            obj.val = opt.text();
            obj.index = opt.index();
            obj.placeholder.text(obj.val);
        });
    },
    getValue : function() {
        return this.val;
    },
    getIndex : function() {
        return this.index;
    }
};

$(function() {

    var dd_fase = new DropDown($('.select_fase'));
    var dd_jaar = new DropDown($('.select_jaar'));

    $(document).click(function() {
        // all dropdowns
        $('.dropdown').removeClass('active');
    });
    
    $('.filter_year').click(function() {
        location.href="/?snslider=1&jaar=" + $(this).text();
    });

});

/** END Drop down fase and jaar **/

/** Fases menu **/
jQuery(document).ready(function($) {

    $('.verbreden').click( function(){
        select_fase('verbreden');
    });
    $('.evalueren').click( function(){
        select_fase('evalueren');
    });
    $('.experimenteren').click( function(){
        select_fase('experimenteren');
    });
    $('.adopteren').click( function(){
        select_fase('adopteren');
    });
    $('.schetsen').click( function(){
        select_fase('schetsen');
    });
    $('.initieren').click( function(){
        select_fase('initieren');
    });

});

var select_fase = function(fase){
    //hide all text classes
    $('.text').hide();
    //show the text
    $('.fase_'+fase).show();
    //set menu right
    //set current
    $('.selected').removeClass('selected');
    $('.'+fase).addClass('selected');
    //set done
    $('.done').removeClass('done');
    if (fase == 'schetsen'){
        $('.initieren').addClass('done');
    }
    if (fase == 'adopteren'){
        $('.initieren').addClass('done');
        $('.schetsen').addClass('done');
    }
    if (fase == 'experimenteren'){
        $('.initieren').addClass('done');
        $('.schetsen').addClass('done');
        $('.adopteren').addClass('done');
    }
    if (fase == 'evalueren'){
        $('.initieren').addClass('done');
        $('.schetsen').addClass('done');
        $('.adopteren').addClass('done');
        $('.experimenteren').addClass('done');
    }
    if (fase == 'verbreden'){
        $('.initieren').addClass('done');
        $('.schetsen').addClass('done');
        $('.adopteren').addClass('done');
        $('.experimenteren').addClass('done');
        $('.evalueren').addClass('done');
    }
    
};

/** END Fases menu **/
