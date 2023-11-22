window.addEventListener('scroll', function() {
    var scrolled = window.scrollY;
    var windowHeight = window.innerHeight;
    var gradientHeight = 130; 

    if (scrolled <= windowHeight) {
      var gradientOpacity = 1 - scrolled / gradientHeight;
      document.body.style.background = 'linear-gradient(to bottom, rgba(52, 152, 219, ' + gradientOpacity + '), #e0fdff ' + gradientHeight + 'vh, #ffffff ' + gradientHeight + 'vh)';
    }
  });