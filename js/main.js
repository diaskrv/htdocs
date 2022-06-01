$(function() {
  $('.add_to_cart').on('click', function() {
    e.preventDefault();
    let id = $(this).data('id');

    $.ajax({
      url: 'cart.php',
      type: 'GET',
      data: {cart: 'add', id: id},
      dataType: 'json',
      success: function(res) {
        console.log(res);
      },
      error: function() {
        alert("Error");
      }
    })
  })
})
