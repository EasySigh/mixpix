import Framework7 from 'framework7';
import 'framework7-icons';
import '../../node_modules/framework7/framework7.esm.bundle.js';

var app = new Framework7({
  // App root element
  root: '#app',
  // App Name
  name: 'MixPix',
  // App id
  id: 'mixpix-id',
  sheet: {
    backdrop: true,
    closeByBackdropClick: true,
    on: {
      closed: function() {
        $('.sheet-select').removeClass('raised');
        $('.select-link').siblings().removeClass('active');
        $('.select-source').siblings().removeClass('active');
      }
    }
  }
});

var mainView = app.views.create('.view-main');

$(function(){
  var inputLength = "";
  var cardNumber = "";
  var cardNumberLength = "";

  var control = {
    inputLength: function(target, number){
      $(target).keyup(function(value){
        inputLength = $(target).val().length;
        if(parseInt(inputLength) >= number){
          $(target).val($(target).val().slice(0, number));
        }
      })
    },
    selectSocial: function(e){
      var tab = $(e.target);
      var tabContent = '#'+tab.attr('data-source');
      tab.siblings().removeClass('active');
      tab.addClass('active');
      $('.sheet-select').addClass('raised');
      $(tabContent).siblings().removeClass('active');
      $(tabContent).addClass('active');
    },
    tiles: document.querySelectorAll('.upload_block .product'),
  }
  control.inputLength('#cvv', 3);
  control.inputLength('#mm', 2);
  control.inputLength('#yy', 2);

  $('.inst').on('click', control.selectSocial);
  $('.fb').on('click', control.selectSocial);

  $("#up").on('click', function(e){
      e.preventDefault();
      // $("#upload:hidden").trigger('click');
      $('#upload_block').append('<div class="tile"><img src="desktop/img/pic/icon1.png" alt=""><a href="#" id="remove-tile">x</a></div>')
  });

  $('.remove-item').on('click', function(e) {
    e.target.closest('.product').remove();
  });

  // Just for time -------------------------------
  $(document).on('click', '#remove-tile', function(e) {
    e.target.closest('.tile').remove();
  });
  //----------------------------------------------

  $('#upload_block').bind('DOMSubtreeModified', function(e) {
    e.preventDefault();
    var tiles = document.getElementsByClassName('tile');
    if (tiles.length > 0) {
      $(e.target).addClass('product_added');
      $('.page-article').removeClass('arrow');
    }
    else {
      $(e.target).removeClass('product_added');
      $('.page-article').addClass('arrow');
    }
  });

  // Detect type of card on type in Card Number input
  $("#cardNumber").keyup(function(event){
    cardNumber = $(this).val();
    if(parseInt(cardNumber.substring(0, 2)) > 50 && parseInt(cardNumber.substring(0, 2)) < 56){
      $('.cards').children().removeClass('active');
      $('.mastercard').addClass('active');
    }else if(parseInt(cardNumber.substring(0, 1)) == 4){
      $('.cards').children().removeClass('active');
      $('.visa').addClass('active');
    }else if(cardNumber === ""){
      $('.cards').children().removeClass('active');
    }else {
      $('.cards').children().removeClass('active');
    }
  });

  // Add spaces to Card Number input.
  $('#cardNumber').keyup(function(value){
    cardNumberLength = $(this).val().length;
    control.inputLength('#cardNumber', 19);

    var val = $(this).val();
    var newval = '';
    val = val.replace(/\s/g, '');
    for(var i=0; i < val.length; i++) {
        if(i%4 == 0 && i > 0) newval = newval.concat(' ');
        newval = newval.concat(val[i]);
    }
    $(this).val(newval);
    $(this).val($(this).val().replace(/[A-Za-z!@#$%^&*,.()-]/g, ''));

    // return val.replace(/\s/g, '');
  });
});