$('document').ready(function(){
    var sluzby = new Array('rizikove_kaceni', 'smerove_kaceni', 'plosina', 'prorezy');
    var pathName = window.location.pathname.split('/');
    if (pathName.length >= 4) {
        var id = pathName[pathName.length - 2];
    }
    else{
       var id = pathName[pathName.length - 1];
       id = id.substring(0,id.lastIndexOf('.'));
	console.log(id);
       id = ($.inArray(id, sluzby) != -1)? 'sluzby': id;
    }
    
    $('#'+id).addClass('active').siblings('li').removeClass('active');
    
    $('#nav li').hover(function(){
        $(this).addClass('hover');
    },
        function(){
            $(this).removeClass('hover');
    })
    
    function center(el, newIndex){
        var imgWidth = $(el+' > li :eq('+newIndex+')').width();
        //var imgHeight = $(el+' > li :eq('+newIndex+')').height();
        //console.log(imgHeight);
        var id = el.split('-');
        id = id[1];
        var left = Math.ceil(Math.floor($(window).width()/2)-(Math.floor(imgWidth/2)));
        $('#galery-'+id).animate({width: imgWidth, left: left} , 200);

    }
    
   function bxSliderInit(el, id){
       var bxSlider = $(el).bxSlider({
           pager: false,
           sped: 600,
           slideWidth: 700,
           maxSlides: 1,
           prevSelector: 'div.prev-'+id,
           nextSelector: 'div.next-'+id,
           prevText: '',
           nextText: '',
           mode: 'fade',
           onSlideBefore: function(slideElement, oldIndex, newIndex) {center(el, newIndex)},
           onSliderLoad: function(currentIndex) {center(el, currentIndex)}
                
        });
        return bxSlider;
   }
   
   var bxSlider = bxSliderInit('ul.galery-examples',1);
   
   var bPopup;
   $('img.cert, #home-images img').click(function(){
       
       var certType = $(this).attr('title');
       /*
       var winHeight = $(document).height();
       var winWidth = $(document).width();
       var x = Math.floor((winHeight - 750)/2);
       var y = Math.floor((winWidth - 1000)/2);
       */
        
       bPopup = $('#'+certType).bPopup({
           //follow: [false, false], //x, y
          // position: [x, y]
       });
   })
   
   // images at service section
   $('div.images-cont > img.section-img').click(function(){
      bPopup =  $('div.section-galery').bPopup({
       // position: [0, 0]
      });
      bxSlider.reloadSlider();   
      var id = $(this).attr('id');
      bxSlider.goToSlide(id-1);
      //$('div.section-galery').show();
      
   });
   
   // main galery
   var mainBxSlider;
   $('img.galery-label').click(function() {
      var galeryId = $(this).attr('title');
      var id = galeryId.split('-');
      id = id[1];
      mainBxSlider = bxSliderInit('#'+galeryId+'-images', id);
      //mainBxSlider.reloadSlider();
      bPopup =  $('#'+galeryId).css('width',700).bPopup();     
   });
   
   
   $(document).on('click','span.close, div.galery-close', function() {
       bPopup.close();
       bPopup = '';
       
       window.setTimeout(function(){
           if (mainBxSlider != 'undefined'){
               mainBxSlider.destroySlider();
               mainBxSlider = '';
           }
       }, 600);
       
   });
   
   $('#send').click(function() {
        
       //(event.preventDefault) ? event.preventDefault() : event.returnValue = false;
       //alert('test');

       var email = $('#email_addr').val();
       var subject = $('#subject').val();
       var text = $('#mail_text').val();
       
       var data = {email_addr: email, subject: subject, mail_text: text};
       console.log(data);
       $.post('send_email.php', data, function(dataRcvd){
           console.log(dataRcvd);
           if (dataRcvd.result == true) {
               $('form#send-email').children('input[type=text], textarea').val('');
               alert('Váš email byl odeslán');
           }
           else{
               alert('Velice se omlouváme, ale Váš email nemohl být odeslán.\r\n Důvod: '+dataRcvd.err_msg);
           }
       }, 'json');


   });

   $('#send2').click(function() {
        
       //(event.preventDefault) ? event.preventDefault() : event.returnValue = false;
       //alert('test');

       var email = $('#email_addr').val();
       var subject = $('#subject').val();
       var text = $('#mail_text').val();
       
       var data = {email_addr: email, subject: subject, mail_text: text};
       console.log(data);
       $.post('send_email_test.php', data, function(dataRcvd){
           console.log(dataRcvd);
           if (dataRcvd.result == true) {
               $('form#send-email').children('input[type=text], textarea').val('');
               alert('Váš email byl odeslán');
           }
           else{
               alert('Velice se omlouváme, ale Váš email nemohl být odeslán.\r\n Důvod: '+dataRcvd.err_msg);
           }
       }, 'json');


   });
   
   // ajax call for getting images to the galery
   $.post('get_galery_images.php',{type: 'images'}, function(data) {
        if (data.result == true) {
            //console.log(data.images);
            for (var id in data.images){
               $('#'+id).html(data.images[id]);
            }
        };
   }, 'json')
   
    
});
