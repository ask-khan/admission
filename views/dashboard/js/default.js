
$(document).ready(function() {

  $.ajax({
    type: "GET",
    url: 'http://admission.dev/dashboard/getUserData',
    dataType: 'json',
    success: function(data) {
      for (var i = 0; i < data.length; i++) {
        $("#listInserts").append('<div>' + data[i].username + '<a class="del" rel="'+ data[i].id + '" href="" >X</a></div>');
      }
    }
  });

  $('.addAccount').submit(function() {

    var url = $(this).attr('action');
    var data = $(this).serialize();

    $.post(url, data, function(o) {

      $("#listInserts").append('<div>' + o['userName'] + '<a class="del" rel="'+ o['id'] + '" href="" >X</a></div>');
    });

    return false;
  });

  $(document.body).on('click', '.del' ,function(){
      var id = $(this).attr('rel');
      $.post( 'dashboard/deleteUserData', { 'id': id },function( o ){

      });
  });
});
