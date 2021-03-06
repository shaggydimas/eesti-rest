$(function(){
    
    var $owl = $('.owl-carousel').owlCarousel({
        margin:10,
        nav:false,
        autoWidth:true,
        responsive:{
            0:{
                items:1,
                autoWidth:false
            },
            600:{
                items:3
            }
        }
    })
    
    $('.read-more-btn').on('click', function(e){
      var $this = $(this);
      var parent = $this.closest('.card');
      if(parent.find('.toggle-info').length === 0) return false;
      if(!parent.hasClass('open')) {
        $('.card.open').removeClass('open');
        parent.toggleClass('open');
        $owl.trigger('refresh.owl.carousel');
        $('html, body').animate({
          scrollTop: $('.card').offset().top - 10
        }) 
      }
    })
    
    $('.close-btn').on('click', function(e){
      $(this).closest('.card').removeClass('open');
    })
    
    var offset = $('nav .active').offset().left + 24;
    $('.line').css('width', offset);
    
    $(window).on('resize', function(e) {
      var offset = $('nav .active').offset().left + 24;
      $('.line').css('width', offset);
    })
    
    $('.gallery').modaal({
      type: 'image'
    });
})