var count = 0
var files = [];
var mediaString = "";
var finalTotal = 0;

(function ($) {

  "use strict";

    // PRE LOADER
    $(window).load(function(){
      $("img.selectable").imgCheckbox();
      $('.preloader').fadeOut(1000); // set duration in brackets    
    });

    $(document).ready(function () {

    $('.tm-search-form').validate({
          rules: {
              name: {
                  minlength: 2,
                  required: true
              },
              phone: {
                digits: true,
                required: true
              },
              email: {
                  required: true,
                  email: true
              },
              institution: {
                  minlength: 3,
                  required: true
              }
          },
          highlight: function (element) {
              $(element).closest('.control-group').removeClass('success').addClass('error');
          },
          success: function (element) {
              element.text('OK').addClass('valid')
                  .closest('.control-group').removeClass('error').addClass('success');
          }
      });

    // $('#btnSubmit').on('click', function() {
    //   if($('.tm-search-form').valid()) {
    //     console.log("hehe");
    //   }
    // });
    });


    // MENU
    $('.navbar-collapse a').on('click',function(){
      $(".navbar-collapse").collapse('hide');
    });

    $(window).scroll(function() {
      if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
          } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
          }
    });


    // SLIDER
    $('.owl-carousel').owlCarousel({
      animateOut: 'fadeOut',
      items:1,
      loop:true,
      autoplayHoverPause: false,
      autoplay: true,
      smartSpeed: 1000,
    })


    // PARALLAX EFFECT
    $.stellar({
      horizontalScrolling: false,
    }); 


    // MAGNIFIC POPUP
    $('.image-popup').magnificPopup({
        type: 'image',
        removalDelay: 300,
        mainClass: 'mfp-with-zoom',
        gallery:{
          enabled:true
        },
        zoom: {
        enabled: true, // By default it's false, so don't forget to enable it

        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function

        // The "opener" function should return the element from which popup will be zoomed in
        // and to which popup will be scaled down
        // By defailt it looks for an image tag:
        opener: function(openerElement) {
        // openerElement is the element on which popup was initialized, in this case its <a> tag
        // you don't need to add "opener" option if this code matches your needs, it's defailt one.
        return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
      }
    });  

/*
    // CONTACT FORM
    $("#contact-form").submit(function (e) {
      e.preventDefault();
      var name = $("#cf-name").val();
      var email = $("#cf-email").val();
      var subject = $("#cf-subject").val();
      var message = $("#cf-message").val();
      var dataString = 'name=' + name + '&email=' + email + '&subject=' + subject + '&message=' + message;

      function isValidEmail(emailAddress) {
          var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
          return pattern.test(emailAddress);
      };
      if (isValidEmail(email) && (message.length > 1) && (name.length > 1)) {
          $.ajax({
              type: "POST",
              url: "email.php",
              data: dataString,
              success: function () {
                  $('.text-success').fadeIn(1000);
                  $('.text-danger').fadeOut(500);
              }
          });
      }
      else {
          $('.text-danger').fadeIn(1000);
          $('.text-success').fadeOut(500);
      }
      return false;
    });

*/


    // SMOOTHSCROLL
    $(function() {
      $('.custom-navbar a, #home a').on('click', function(event) {
        var $anchor = $(this);
          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 49
          }, 1000);
            event.preventDefault();
      });
    });  


    // WOW ANIMATION
    new WOW({ mobile: false }).init();

})(jQuery);


async function readURL(input) {
 if (input.files && input.files[0]) {
    for(var i = 0; i < input.files.length; i++){
      if(files.length == 0) {
        var photoWrap = document.getElementById("img-wrap");
        photoWrap.style.display = "block";
        var reader = new FileReader();      
        reader.onload = function(e) {
          $('.photo').attr('src', e.target.result);
          $('.photo').attr('data-id' , input.files[0].name);
        }
        reader.readAsDataURL(input.files[0]);
      } else {
        count++;
        var name = input.files[i].name;
        var result = await readFile(input.files[i]);
        var cloneDiv = $("#img-wrap").clone(true);
        cloneDiv[0].style.display = "block";
        cloneDiv.attr('class', "img-wrapper"+count+" col-md-3 col-sm-3");
        cloneDiv.find('img').attr('class', "photo"+count);
        cloneDiv.appendTo("#photos-row");
        $('.photo'+count).attr('src', result);
        $('.photo'+count).attr('data-id' , name);
      }
      files.push(input.files[i].name); 
    }
  }
}

function readFile(file) {
  var reader = new FileReader();    
  return new Promise(resolve => {
    reader.onload = function(e) {
      resolve(e.target.result);
    }
    reader.readAsDataURL(file)
  });
}

$('#img-wrap .close').on('click', function() {
    var id = $(this).closest('#img-wrap').find('img').data('id');
    // console.log($(this).closest('#img-wrap').find('img').attr('src'));
    var className = document.getElementsByClassName($(this).closest('#img-wrap').attr('class'));
    className[0].remove();
    files.splice(files.indexOf(id), 1);
    console.log(files.length);
});

$("#file-photos").change(function() {
  readURL(this);
});

$("#docpicker").change(function() {
  var file = $('#docpicker')[0].files[0]
  if(file) {
    $('.nameFile').html("1 file selected - " + file['name']);
  }
});

$('.addPhotos').on('click', function() { $('#file-photos').click();return false;});
$('.addFile').on('click', function() { $('#docpicker').click();return false;});
$(".media-list").submit(function() {
        var str = $(this).serialize();
        var replace = str.replace(/=on/g, ", ");
        var n = replace.lastIndexOf(",");
        var replaceResult = replace.slice(0, n) + replace.slice(n).replace(", ", ".");
        var final = replaceResult.replace(/&/g, "");
        if(final.length === 0) {
          finalTotal = 0;
        } else {
          finalTotal = (final.split(",")).length;
        }
        console.log(final);
        console.log(finalTotal);
        mediaString = final;
        $('.countMedia').html(finalTotal + " Media Chosen");
        $('#largeModal').modal('toggle');
        return false;
      })

$('#form-form').on('submit', function(e) {
  e.preventDefault();
    if($('.tm-search-form').valid()) {
      if(files.length == 0) {
        console.log("hehe");
      }
      var name = $('#name').val();
      console.log(name);
      console.log(count);
      jQuery.ajax({
        type: "POST",
        url: '../php/mail.php',
        dataType: 'json',
        data: {functionname: 'add', arguments: [1, 2]},

        success: function (obj, textstatus) {
                      if( !('error' in obj) ) {
                         
                      }
                      else {
                          console.log(obj.error);
                      }
                }
    });
    }
})