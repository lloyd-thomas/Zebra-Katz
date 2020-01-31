
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


function  callfilter(value)
{
    //alert(value);
     $('#'+value).prop("checked", true);
       	$('main > section').hide();
       	$('#filter-options :checkbox:checked').each(function()
       	{
           $('.' + $(this).val()).fadeIn();
		});

        if($('#filter-options :checkbox').filter(':checked').length < 1)
        {
        	$('main > section').fadeIn();

        }
          AOS.refresh();
        }

var hash = window.location.hash;


if (hash) {
        var hash = 'filter_' + location.hash.substr(1).split("|");

        $('#filter-options :checkbox[value=' + hash + ' ]').trigger('click');
        callfilter(hash);
    /*   hash.forEach(function(value) {
      $("input[value=" + value + "]").prop("checked", true);
    });*/
    }

//Filter posts
$('#filter-options :checkbox').click(function(){
  //callfilter($(this).val());
  $(this.val).prop("checked", true);
     $('main > section').hide();
     $('#filter-options :checkbox:checked').each(function()
     {
        $('.' + $(this).val()).fadeIn();
 });

     if($('#filter-options :checkbox').filter(':checked').length < 1)
     {
       $('main > section').fadeIn();

     }
       AOS.refresh();
     }
);
