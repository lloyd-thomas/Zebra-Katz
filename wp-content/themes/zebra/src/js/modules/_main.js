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
    delay: 1000,
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
  mirror: true,
  duration: 800,
  easing: 'ease-in-sine',
});

//Functions
$('#open-menu').on('click', function() {
  $('body').addClass('mob-open');
});
$('#close-menu').on('click', function() {
  $('body').removeClass('mob-open');
});

function removeHash() {
  history.pushState("", document.title, window.location.pathname +
    window.location.search);
}

function callfilter(value) {
  $('body').removeClass('mob-open');
  $('main > section').hide();
  $('.' + value).fadeIn();
  AOS.refresh();
}

var hash = window.location.hash;


if (hash) {
  var hash = 'filter_' + location.hash.substr(1).split("|");
  $('#filter-options :radio[value=' + hash + ' ]').trigger('click');
  callfilter(hash);
}

//Filter posts
$('#filter-options :radio').click(function() {
  callfilter($(this).val());
    removeHash();
});

$(window).on('load', function() {
  AOS.refresh();
});
