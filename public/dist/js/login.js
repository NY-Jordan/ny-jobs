$(document).on("submit", "#login_form", function (e) {
    e.preventDefault();
    var $form = $(this);    
    var data = $form.serialize()
    var btn = $("#login_btn");
    act = btn.html();
    $.ajax({
      type: "post",
      url: 'http://localhost:8000/login',
      data: data,
      datatype: "json",
      beforeSend: function () {
        btn.html('<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>')
          .prop("disabled", true);
      },
      success: function (json) {
        window.location.assign("http://localhost:8000/dashboard")
      },
      complete: function () {
        btn.html(act).prop("disabled", false);
      },
      error: function (jqXHR, textStatus, errorThrown) {
        var err = eval("("+ jqXHR.responseText + ")" )
        console.log(err.message);
        $('#error_login').html('<div class="alert alert-danger mt-2" > <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+err.message+'</div>');
      },
    });
  });