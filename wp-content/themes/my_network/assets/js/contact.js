$(function() {
    $(".holder + input").keyup(function() {
        if($(this).val().length) {
            $(this).prev('.holder').hide();
        } else {
            $(this).prev('.holder').show();
        }
    });
    $(".holder").click(function() {
        $(this).next().focus();
    });
});



$(function() {
    $("form[name='contact']").validate({
      rules: {
        yourname: "required",
        email: {
          required: true,
          email: true
        },
        messages: "required",
      },
      messages: {
        yourname: "Vui lòng nhập tên của bạn",
        email: "Vui lòng nhập đúng địa chỉ email",
        messages: "Vui lòng nhập nội dung của bạn",
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });
  