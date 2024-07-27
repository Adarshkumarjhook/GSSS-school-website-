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
  function show_2(partner_div_id, url, runfunction, page="") {

  if (page!=="") {
   var pageValue = document.getElementById(page).value;
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

  function delete_(delete_button, url, who, runfunction) {
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



        function delect_parent(delete_id,partnerdiv_class) {
var delete_click = document.querySelectorAll(delete_id);
delete_click.forEach((e) => {
  e.addEventListener("click", function(c) {
    this.style.background = "green";
    var partner_div = this.closest(partnerdiv_class);
    //partner_div.remove()
     partner_div.style.background="green";
     partner_div.style.display="none";

  })

})




}




  //swiper ❌❌❌❌
  show("#show_swiper", './php/show_swiper.php', )
  delete_('#delete_btn_swaiper', './php/delete_swaiper.php', "Scroller", () => {
    show("#show_swiper", './php/show_swiper.php', )
  })
  add('#add_scoller_model_form', "./php/add.php", () => {
    show("#show_swiper", './php/show_swiper.php', )
  })
  show_edit('#edit_btn_swaiper', "#show_edit_swiper", './php/get_by_id.php', () => {
    edit("#edit_scroller_model_form", './php/edit.php', () => {
      show("#show_swiper", './php/show_swiper.php', )
    })
  })
  _0_1('#_0_1_btn_swaiper', "./php/status.php", 'Scroller', () => {
    show("#show_swiper", './php/show_swiper.php', )

  })
      pagination("#page_id","#show_swiper","./php/teacher/show_teacher.php",()=>{});

  //post ❌❌❌❌❌❌
  show("#post_show", './php/post/show_post.php', )
  add("#add_post", "./php/post/add_post.php", () => {
    show("#post_show", './php/post/show_post.php', )
  },'textrich')
  delete_('#delete_post', './php/delete_swaiper.php', "post", () => {
    show("#post_show", './php/post/show_post.php', )

  })
  _0_1('#_0_1_btn_post', "./php/status.php", 'post', () => {
    show("#post_show", './php/post/show_post.php', )

  })
  
  show_edit('#post_edit_', "#show_edit_post", './php/post/get_post_by_id.php', () => {
    edit("#edit_post_model_form_id",'./php/post/edit_post_.php',()=>{
        show("#post_show", './php/post/show_post.php', )
    },"post_editor_rrr")
    delete_('#delete_btn_post_edit_model_img', './php/delete_swaiper.php', "Post_img", () => {
    ///   cont.remove()
       // Get the element
       

      })
  })
    pagination("#page_id","#post_show","./php/teacher/show_teacher.php",()=>{});

/* gallerygallerygallery */
  show("#gallery_show", './php/gallery/show_gallery.php', )
  add("#add_gallery", "./php/gallery/add_gallery.php", () => {
     show("#gallery_show", './php/gallery/show_gallery.php')
  })
  delete_('#delete_gallery', './php/delete_swaiper.php', "Gallery", () => {
      show("#gallery_show", './php/gallery/show_gallery.php', )

  })
  _0_1('#_0_1_btn_gallery', "./php/status.php", 'Gallery', () => {
          show("#gallery_show", './php/gallery/show_gallery.php', )
  })
  
  show_edit('#gallery_edit_', "#show_edit_gallery", './php/gallery/get_gallery_by_id.php', () => {
    edit("#edit_gallery_model_form","./php/gallery/edit_gallery.php",)
  })
    pagination("#page_id","#gallery_show","./php/teacher/show_teacher.php",()=>{});

///show all img 

show_edit("#show_all_img_btn","#show_all_img_model","./php/gallery/get_all_img_by_gallery_id.php",()=>{
})

  delete_("#delete_gallery_img","./php/delete_swaiper.php","Gallery_img",()=>{
    
    delect_parent("#delete_gallery_img","div");
        
  })


///teacher 
show("#teacher_show","./php/teacher/show_teacher.php",)

add("#add_teacher",'./php/teacher/add_teacher.php',()=>{
  show("#teacher_show","./php/teacher/show_teacher.php")

},"add_teacher_editor")

  _0_1('#_0_1_btn_teacher', "./php/status.php", 'Teachers', () => {
    show("#teacher_show","./php/teacher/show_teacher.php",()=>{},"carrent_page");
  })


  delete_('#delete_teacher', './php/delete_swaiper.php', "Teachers", () => {
    show("#teacher_show","./php/teacher/show_teacher.php",()=>{},"carrent_page")


  })
  
  show_edit("#teacher_edit_","#show_edit_teacher","./php/teacher/get_teacher_by_id.php",()=>{
    edit("#edit_teacher_model_form_id","./php/teacher/edit_teacher_.php",()=>{
      show("#teacher_show","./php/teacher/show_teacher.php",()=>{},"carrent_page")


    },"rrr")
  })


  pagination("#page_id","#teacher_show","./php/teacher/show_teacher.php",()=>{});



///////////////facility


show("#facility_show","./php/facility/show_facility.php",()=>{})

add("#add_facility",'./php/facility/add_facility.php',()=>{
  show("#facility_show","./php/facility/show_facility.php",()=>{},"carrent_page");

},"add_facility_editor")

  _0_1('#_0_1_btn_facility', "./php/status.php", 'facility', () => {
  show("#facility_show","./php/facility/show_facility.php",()=>{},"carrent_page");
  
  })

  delete_('#delete_facility', './php/delete_swaiper.php', "facility", () => {
    show("#facility_show","./php/facility/show_facility.php")

  })
  
  show_edit("#facility_edit_","#show_edit_facility","./php/facility/get_facility_by_id.php",()=>{
    edit("#edit_facility_model_form_id","./php/facility/edit_facility_.php",()=>{
      show("#facility_show","./php/facility/show_facility.php")
    },"rrr")
  })

  pagination("#page_id","#facility_show","./php/teacher/show_teacher.php",()=>{});


/////student_showstudent_showstudent_show


show("#student_show","./php/student/show_student.php",()=>{})
  delete_('#delete_student', './php/delete_swaiper.php', "student_admission", () => {
  show("#student_show","./php/student/show_student.php",()=>{})

  })
    _0_1('#_0_1_btn_student', "./php/status.php", 'student_admission', () => {
show("#student_show","./php/student/show_student.php",()=>{})

  })
show_edit("#student_edit_","#show_edit_student","./php/student/get_student_by_id.php",()=>{
    edit("#edit_student_model_form_id","./php/student/edit_student_.php",()=>{
      show("#student_show","./php/student/show_student.php",()=>{})
    })
})

    pagination("#page_id","#student_show","./php/teacher/show_teacher.php",()=>{});

/* s_up==========___________&&____________ */


show("#s_up_show","./php/s_up/show_s_up.php");


add("#add_s_up_",'./php/s_up/add_s_up.php',()=>{
  show("#s_up_show","./php/s_up/show_s_up.php");

})

  delete_('#delete_s_up', './php/delete_swaiper.php', "admin", () => {
    show("#s_up_show","./php/s_up/show_s_up.php")

  })
  
  show_edit("#s_up_edit_","#show_edit_s_up_","./php/s_up/get_s_up_by_id.php",()=>{
       edit("#edit_s_up_model_form_id","./php/s_up/edit_s_up_.php",()=>{
        show("#s_up_show","./php/s_up/show_s_up.php");

    })

    
  })


  pagination("#page_id","#s_up_show","./php/s_up/show_s_up.php",()=>{});











})