src ="jquery-3.3.1.min.js";

$(document).ready(function(){
  $('.col-sm-2').on('click', function(){
    $('.navigation').slideToggle();
  });
  $('.news').on('click', function(){
      $('.drop').slideToggle();
  });
  $('.music').on('click', function(){
      $('.drop1').slideToggle();
  });

// sumission of track url or upload
  $('#upload1').on('click', function(){
    $("#upload").slideDown();
    $('#url').slideUp();
  });
  $('#url1').on('click', function(){
    $("#url").slideDown();
    $('#upload').slideUp();
  });

  // for the show of the immedite up thingie
  $(document).scroll(function () {
      $('.fixed').show();
  });
  // on click transtion
  $('.fix').click(function(){
    $('.fix').hide();
  });
});
