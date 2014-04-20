  $(document).ready(function() {
    $('.cycle-slideshow').on('cycle-after', function(event, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag) {
      $('.label > h1').show('drop', {
        direction: 'up'
      }, 450);
      return $('.label > h2').show('drop', {
        direction: 'down'
      }, 450);
    });
    $('.cycle-slideshow').on('cycle-before', function(event, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag) {
      $('.label > h1').hide('drop', {
        direction: 'up'
      }, 450);
      return $('.label > h2').hide('drop', {
        direction: 'down'
      }, 450);
    });
});
