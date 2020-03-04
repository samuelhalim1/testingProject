var count = 0
var files = [];
var dataFiles = [];
var docFile = "";
var mediaString = "";
var finalTotal = 0;
var spinner = "";

(function ($) {

  "use strict";

    // PRE LOADER
    $(window).load(function(){
      $("img.selectable").imgCheckbox();
      $('.preloader').fadeOut(1000); // set duration in brackets    
    });

    $(document).ready(function () {
      spinner = $('#loader');
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
              $(element).parent().addClass('error').removeClass('success');
          },
          success: function (element) {
              element.text('').addClass('valid').parent().removeClass('error').addClass('success');
          }
      });
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
      dataFiles.push(input.files[i]);
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
    var className = document.getElementsByClassName($(this).closest('#img-wrap').attr('class'));
    className[0].remove();
    files.splice(files.indexOf(id), 1);
    dataFiles.splice(files.indexOf(id), 1);
});

$("#file-photos").change(function() {
  $('.errorFile').html("");
  readURL(this);
});

$("#docpicker").change(function() {
  docFile = $('#docpicker')[0].files[0];
  if(docFile) {
    $('.nameFile').html("1 file selected - " + docFile['name']);
    $('.nameFile')[0].style.color = "#757575";
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
        var final2 = replaceResult.replace(/+/g, " ");
        if(final2.length === 0) {
          finalTotal = 0;
        } else {
          finalTotal = (final2.split(",")).length;
        }
        mediaString = final2;
        $('.countMedia').html(finalTotal + " Media Chosen");
        $('.countMedia')[0].style.color = "#757575";
        $('#largeModal').modal('toggle');
        return false;
      })

$('#form-form').on('submit', function(e) {
  e.preventDefault();
    if($('.tm-search-form').valid()) {
      var valid = true;
      if(docFile == "") {
        valid = false;
        $('.nameFile').html("Please choose file first");
        $('.nameFile')[0].style.color = "#FF0000";
      }
      if(files.length == 0) {
        valid = false;
        $('.errorFile').html("Please choose image first");
        $('.errorFile')[0].style.color = "#FF0000";
      }
      if(finalTotal == 0) {
        valid = false;
        $('.countMedia').html("Please choose media first");
        $('.countMedia')[0].style.color = "#FF0000";
      }
      if(valid) {
        var name = $('#name').val();
        var institution = $('#institution').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        sendMail(name, institution, phone, email, dataFiles);
      }
    }
})

function sendMail(name, institution, phone, email, files){
  spinner.show();
  var formData = new FormData();
  formData.append('name', name);
  formData.append('institution', institution);
  formData.append('phone', phone);
  formData.append('email', email);
  formData.append('docFile', docFile);
  formData.append('filesTotal', files.length);
  formData.append('mediaString', mediaString);
  files.forEach(function(files, i) {
    formData.append('files_' + i, files);
  });
  var request = new XMLHttpRequest();
  request.onreadystatechange = function()
      {
          if (request.readyState == 4 && request.status == 200)
          {
              spinner.hide();
              handleData(request.responseText); // Another callback here
          }
      }; 
  request.open("POST", "php/mail.php");
  request.send(formData);
}

function handleData(data) {
  window.location.replace("https://api.whatsapp.com/send?phone=6282299134990&text=Hi, aku " + $('#name').val() + " mau menggunakan service tampil berita");
}