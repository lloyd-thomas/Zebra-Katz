
//Animate stuff in
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
    duration: 2000,
    easing: 'easeInExpo'
  })

// Parallax scrolling
var rellax = new Rellax('.rellax', {
  vertical: true,
  horizontal: false,
  center: true,
  round: true,
});

//Animate on scroll
AOS.init({
  mirror: true
});

//Functions
$('#open-menu').on('click', function () {
  $('body').addClass('mob-open');
});
$('#close-menu').on('click', function () {
  $('body').removeClass('mob-open');
});
