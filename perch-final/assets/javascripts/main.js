jQuery(document).ready(function($){
  $('a.scroll-to').click(function() {
    $.sidr('close')
    
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
  
  $("#accordion").accordion({
    activate: function(event, ui){
      var scrollTop = $(".accordion").scrollTop();
      var top = $(ui.newHeader).offset().top;
      //do magic to scroll the user to the correct location
      //works in IE, firefox chrome and safari
      $("html,body").animate({ scrollTop: scrollTop + top -10 }, "slow");
    },
    heightStyle: 'content',
    collapsible: true,
    active: false,
  });

  var carousel = $("#owl-demo");
  
  var $items = carousel.find('.item');
  if ($items.length == 2)
    carousel.addClass('items-2')
  else if ($items.length == 3)
    carousel.addClass('items-3')
  else if ($items.length == 4)
    carousel.addClass('items-4')
    
  carousel.owlCarousel({
    itemsScaleUp: true,
    navigation:true,
    navigationText: [
      "<i class='icon-chevron-left icon-white'><</i>",
      "<i class='icon-chevron-right icon-white'>></i>"
      ]
  });


  
  $('#simple-menu').sidr({onOpen: function () { /* Required to suppress an error in Sidr */ }});
  
  $('body').click(function () {
    if ($('body').hasClass('sidr-open'))
      $.sidr('close')
  });
  
  $('.parent-container').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
		}
	});
	
	$('.owl-carousel .item').click(function (event) {
    var $target = $(event.currentTarget);
    $('#project-name').html($target.data('name'));
    $('#project-description').html($target.data('description'));
    $('#client-name').html($target.data('client'));
    $('#project-status').html($target.data('status'));
    var $data = $('<ul>');
    $data.html($target.data('images'));
    $data.find('a').wrap('<li>');
    $('.parent-container').html($data);
    $('.item.active').removeClass('active')
    $target.addClass('active')
  });

  var clicked = false;
  
  if (window.location.hash) {
    $('.owl-carousel .item').each(function (i, e) {
      if ($(e).find('a').attr('href') == window.location.hash) {
        clicked = true;
        $(e).trigger('click');
        return false;
      }
    });
  }
  
  if (!clicked) {
    $('.owl-carousel .item:first').trigger('click')
  }
}); 