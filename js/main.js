  $(document).ready(function() {
  	var deck = new $.scrolldeck({
    buttons: '.nav-button',
    duration: 600,
    easing: 'easeInOutExpo',
	offset: 0
  });
    var controller = $.superscrollorama();
    //  controller.addTween('#fade-it', TweenMax.from( $('#fade-it'), .5, {css:{opacity: 0}}));
      controller.addTween('#titulo-ser', TweenMax.from( $('#titulo-ser'), .5, {css:{right:'1000px'}, ease:Quad.easeInOut}));
      controller.addTween('#text-ser', TweenMax.from( $('#text-ser'), .5, {css:{opacity: 0}}));
      controller.addTween('#btn1-ser', TweenMax.from( $('#btn1-ser'), .8, {css:{left:'2000px'}, ease:Quad.easeInOut}));
      controller.addTween('#btn2-ser', TweenMax.from( $('#btn2-ser'), .5, {css:{opacity: 0}}));
      controller.addTween('#btn3-ser', TweenMax.from( $('#btn3-ser'), .8, {css:{right:'2000px'}, ease:Quad.easeInOut}));
    //  controller.addTween('#spin-it', TweenMax.from( $('#spin-it'), .25, {css:{opacity:0, rotation: 720}, ease:Quad.easeOut}));
    // controller.addTween('#scale-it', TweenMax.fromTo( $('#scale-it'), .25, {css:{opacity:0, fontSize:'20px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'240px'}, ease:Quad.easeInOut}));
    //  controller.addTween('#smush-it', TweenMax.fromTo( $('#smush-it'), .25, {css:{opacity:0, 'letter-spacing':'30px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, 'letter-spacing':'-10px'}, ease:Quad.easeInOut}), 0, 100); // 100 px offset for better timing

    $('.slide-banner').on('cycle-after', function(event, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag) {
      $('.label > img').show('drop', {
        direction: 'up'
      }, 450);
    });
    $('.slide-banner').on('cycle-before', function(event, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag) {
      $('.label > img').hide('drop', {
        direction: 'up'
      }, 450);
    });
    $('.ser-btn1').hover(function() {
      $('#over-1').show('fast', function() {
        
      });
    }, function() {
       $('#over-1').hide('fast', function() {
         
       });
    });
     $('.ser-btn2').hover(function() {
      $('#over-2').show('fast', function() {
        
      });
    }, function() {
       $('#over-2').hide('fast', function() {
         
       });
    });
      $('.ser-btn3').hover(function() {
      $('#over-3').show('fast', function() {
        
      });
    }, function() {
       $('#over-3').hide('fast', function() {
         
       });
    });
});
