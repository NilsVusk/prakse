// $(document).ready(function(){
//   $("button").click(function(){
//     $(".navbar").slideToggle();
//   });
// });

$(document).ready(function(){

  

  var rowNumber = 1;
  
  $('.more-images').click(function(){
    var newRow = $('.template').clone().removeClass('template').show();

    
    newRow.find('.images').attr('id', 'images' + rowNumber).val('');
    newRow.find('.delete-image').attr('data-row', rowNumber);
    newRow.appendTo('#input-row');
    rowNumber++;
    
});

  $('#input-row').on('click', '.delete-image', function() {
      var rowToDelete = $(this).data('row');
      $('#images' + rowToDelete).closest('.input-row').remove();
  });
});