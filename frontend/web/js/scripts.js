var coverageAreaTriggered = false;
$(window).scroll(function () {
  if (!coverageAreaTriggered ){
    var scrollTop = $(window).scrollTop(),
      windowHeight = $(window).height(),
      elem = $('#section-info').offset().top,
      final = elem - windowHeight,
      distance = final - scrollTop;
    if (distance < 0) {
      $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 3000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
      coverageAreaTriggered = true;
    }
  }
});