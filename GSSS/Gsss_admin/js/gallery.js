$(document).ready(function() {
  

function loader(switch_) {
         var x_t = document.getElementById("loader_upload_img_id");

  if (switch_) {
         x_t.style.display = "flex";
  } else {
       x_t.style.display = "none";

  }
}


  
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
  function show_1(partner_div_id,url, runfunction,page='') {
    if (page!=="") {
      var page =document.querySelector(page).value;
    }
    $.ajax({
      type: "POST",
      data:{id:page},
      url: url,
      //data: data,
      success: function(response) {
        rs = response;
        // Assuming you want to fill the clicked element with the response
        $(partner_div_id).html(response);

        if (typeof runfunction === 'function') {
          runfunction(); // Invoke the function passed as a parameter
        }

        // alert(response);
      },
      error: function(err) {
        console.error("Error:", err);
      }
    });

  }
  function show(partner_div_id, url, runfunction, page="") {
  if (page!=="") {
    try {
      var pageValue = document.getElementById(page).value;
    } catch (e) {
      
      
    }
    
  }

  $.ajax({
    type: "POST",
    data: {id:pageValue}, // Changed variable name to pageValue
    url: url,
    success: function(response) {
      // Assuming you want to fill the clicked element with the response
      $(partner_div_id).html(response);

      if (typeof runfunction === 'function') {
        runfunction(); // Invoke the function passed as a parameter
      }
    },
    error: function(err) {
      console.error("Error:", err);
    }
  });
}
  
 function delete_(delete_button, url, who, runfunction,delete_element='') {
    $(document).on('click', delete_button, function() {
      var idToDelete = $(this).data('id'); // Use $(this) to reference the clicked element
      var cl =$(this);
      var data = {
        id: idToDelete,
        who: who,
      };
      var confirm_1 =confirm(`kya aap id ${idToDelete} ko delete karna chahti ha`);
      if (confirm_1) {
        $.ajax({
        type: "POST",
        url: url,
        data: data,
        dataType: 'json',
        success: function(response) {
          rs = response;
          if (delete_element!=='') {
              cl.closest(delete_element).remove();
          }

          // Assuming you want to fill the clicked element with the response
          if (typeof runfunction === 'function') {
            runfunction(response); // Pass the response to the callback function
          }
        },
        error: function(err) {
          console.error("Error:", err);
        }
      });
      }else{
        return;
      }
      
    });
  }
  function _0_1(button, url, who, runfunction) {
    $(document).on('click', button, function() {
      var idToDelete = $(this).data('id'); // Use $(this) to reference the clicked element
      var data = {
        id: idToDelete,
        who: who,
      };

      $.ajax({
        type: "POST",
        url: url,
        data: data,
        //  dataType: 'json',
        success: function(response) {
          rs = response;

          // Assuming you want to fill the clicked element with the response
          if (typeof runfunction === 'function') {
            runfunction(response); // Pass the response to the callback function
          }
        },
        error: function(err) {
          console.error("Error:", err);
        }
      });
    });
  }
  function edit(from_id, url, runfunction,editor_id='') {

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
loader(true);

  
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
  function show_edit(edit_btn, partner_div_id, url, runfunction) {
    $(document).on('click', edit_btn, function() {
      var idToEdit = $(this).data('id'); // Use $(this) to reference the clicked element
      var data = {
        id: idToEdit,
      };

      $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: function(response) {
          rs = response;

          $(partner_div_id).html(response); // Fill the specified div with the response

          // Assuming you want to fill the specified div with the response
          if (typeof runfunction === 'function') {
            runfunction(response); // Pass the response to the callback function
          } else {}
        },
        error: function(err) {
          console.error("Error:", err);
        }
      });
    });
  }

  function pagination(edit_btn, partner_div_id, url, runfunction) {
    $(document).on('click', edit_btn, function() {
      var idToEdit = $(this).data('id');
     var idToEdit_ = $(this).data('gallery_id_');

      
      // Use $(this) to reference the clicked element
      var data = {
        page:idToEdit,
        id:idToEdit_,
      };




      $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: function(response) {
          rs = response;

          $(partner_div_id).html(response); // Fill the specified div with the response

          // Assuming you want to fill the specified div with the response
          if (typeof runfunction === 'function') {
            runfunction(response); // Pass the response to the callback function
          } else {}
        },
        error: function(err) {
          console.error("Error:", err);
        }
      });
    });
  }


  show("#gallery_show", './php/gallery/show_gallery.php',()=>{},"carrent_page")
  add("#add_gallery", "./php/gallery/add_gallery.php", () => {
     show("#gallery_show", './php/gallery/show_gallery.php',()=>{});
  })
  
  
  delete_('#delete_gallery', './php/delete_swaiper.php', "Gallery", () => {
     show("#gallery_show", './php/gallery/show_gallery.php',()=>{},"carrent_page");

  },"tr")
  _0_1('#_0_1_btn_gallery', "./php/status.php", 'Gallery', () => {
               show("#gallery_show", './php/gallery/show_gallery.php',()=>{},"carrent_page");

  })
  
  show_edit('#gallery_edit_', "#show_edit_gallery", './php/gallery/get_gallery_by_id.php', () => {
    edit("#edit_gallery_model_form","./php/gallery/edit_gallery.php",()=>{
      show("#gallery_show", './php/gallery/show_gallery.php',()=>{},"carrent_page");
      loader(false);

    })
  
  })
  
 pagination("#page_id","#gallery_show","./php/gallery/show_gallery.php",()=>{});





///show all img 

show_edit("#show_all_img_btn","#show_all_img_model","./php/gallery/get_all_img_by_gallery_id.php",()=>{
})

delete_("#delete_gallery_img","./php/delete_swaiper.php","Gallery_img",()=>{
    
    delect_parent("#delete_gallery_img","div");
        
  },".pics")

pagination("#page_id_","#show_all_img_model","./php/gallery/get_all_img_by_gallery_id.php",()=>{
  
  
});







})