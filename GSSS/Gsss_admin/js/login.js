$(document).ready(function() {

 function add(from_id, url, runfunction, editor_id="") {
    $(from_id).submit(function(e) {
      e.preventDefault();
      var formData = new FormData(this);

    function add_edter(editor_id="",formData) {
        // Tab to edit
        if (editor_id !== '') {
          var objEditor = CKEDITOR.instances[editor_id];
          var sessionID = objEditor.getData();
          formData.append('editor', sessionID);
        }

      }

    add_edter(editor_id,formData)

      // var send_data = { formData: formData, who_add: who_add }
      $.ajax({
        url: url, // Replace with your PHP script URL
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
          rs = response;

          function clearForm(from_id) {
            var form = document.querySelector(from_id);
            form.reset();
            const modalDismissButtons = form.querySelectorAll('img');
            modalDismissButtons.forEach(button => button.src = '');
          }
          clearForm(from_id);

          function closeModal(from_id) {
            var form = document.querySelector(from_id);
            const modalDismissButtons = form.querySelectorAll('[data-bs-dismiss="modal"]');
            modalDismissButtons.forEach(button => button.click());
          }


          closeModal(from_id)
          // Assuming you want to fill the clicked element with the response
          //  $(get_all_produc:t_cat).html(response);

          if (typeof runfunction === 'function') {
            runfunction(); // Invoke the function passed as a parameter
          }





          // Handle the server response here
        }
      });
    });
  };
 add("#login_id","./php/login/login.php",()=>{
  if (rs==1){
      $("#smg").html("Login Susses");
      document.getElementById("smg").style.color='green';
      window.location.href="index.php";

  } else {
          $("#smg").html("Login Failed");
           document.getElementById("smg").style.color='red';
  
  }
  
 

  
});





  



})