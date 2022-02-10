
$(function(){
  $('button').on('click' , (e) => {
    if ( e.target.textContent == "Sign up" ) {
      $('.form1').addClass('d-none');
      $('.form2').removeClass('d-none');
    }else if (  e.target.textContent == "Login") {
      $('.form1').removeClass('d-none');
      $('.form2').addClass('d-none');
    }
  })
})
