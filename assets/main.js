$('.datepicker').datepicker();

$('.profile-lg').on('click', function() {
  var target = $(this).children('.dropdown-menu-custom');
  target.toggle();
});

$('a[href="'+location.href+'"]').parents('li').addClass('active');
