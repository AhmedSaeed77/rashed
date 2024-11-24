/* Source and licensing information for the line(s) below can be found at https://www.thiqah.sa/themes/thiqah/assets/public/dist/custom.js. */
(function($,Drupal){'use strict';var customInputForm=$('.form-item .form-control'),customInputFormVal=customInputForm.val();console.log(customInputFormVal);customInputForm.val('');customInputForm.each(function(){if($(this).val('')){blur()}else focus()})
function focus(){customInputForm.focus(function(){$(this).parent().find('label').addClass('focus')})}
function blur(){customInputForm.blur(function(){if($(this).val()=='')$(this).parent().find('label').removeClass('focus')})}
function keyup(){customInputForm.keyup(function(){if($(this).val()==''){blur()}else focus()})};focus();blur();keyup()}(jQuery,Drupal))
/* Source and licensing information for the above line(s) can be found at https://www.thiqah.sa/themes/thiqah/assets/public/dist/custom.js. */;
;
