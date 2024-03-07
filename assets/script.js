$(document).ready(function(){

  

  
  $('body').on('click', '.more-images', function() {
    var newRow = $('#input-row .template:last-child').clone().show();

    var count = $('#input-row .template:last-child input').attr('data-count');
    count = parseInt(count) + 1;

    newRow.find('.images').attr('id', 'images' + count).val('');
    newRow.find('img').remove();
    newRow.find('.images').attr('data-count', count);
    newRow.appendTo('#input-row');
    
});

  $('.input-row').on('click', '.delete-image', function() {
    $(this).closest('.input-row').remove();
  });
  
});

