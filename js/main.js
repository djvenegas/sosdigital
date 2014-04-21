  $(document).ready(function() {
  	var deck = new $.scrolldeck({
    buttons: '.nav-button',
    duration: 600,
    easing: 'easeInOutExpo',
	offset: 0
  });
if ($('html,body').position().top >=800){
alert("mayor a 800");
}

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
});
