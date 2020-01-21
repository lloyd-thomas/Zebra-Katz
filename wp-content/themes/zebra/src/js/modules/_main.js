
var timeline = anime.timeline();
timeline
  .add({
    targets: '.anim1',
    opacity: 1,
    //delay: 1000,
    duration: 1000,
    easing: 'easeInExpo'
  })
  .add({
    targets: '.anim2',
    opacity: 1,
    //delay: 1000,
    duration: 1000,
    easing: 'easeInExpo'
  })
  .add({
    targets: '.anim3',
    opacity: 1,
    //delay: 1000,
    duration: 1000,
    easing: 'easeInExpo'
  })

  // Accepts any class name
  var rellax = new Rellax('.rellax', {
    vertical: true,
horizontal: false,
      center: true,
      round: true,
    });

      AOS.init({
        mirror: true
      });
