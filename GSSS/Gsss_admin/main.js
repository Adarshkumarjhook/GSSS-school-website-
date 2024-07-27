$(document).ready(function(){

function input_show_img(input_id,img_id) {
  var model_img = document.getElementById(input_id);
model_img.addEventListener('input',function(e){
  
  const input = e.target;
  const preview = document.getElementById(img_id);
  
  const file = input.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
    preview.src = e.target.result;
    };
    reader.readAsDataURL(file);
  } else {
    preview.src = ''; // Clear the preview if no file selected
  }
  
  
})


  // Tab to edit
}
input_show_img("scroller_img", "image_preview");
input_show_img("img","post_image_preview")
input_show_img("img", "add_img_teacher");
input_show_img($("img"), "edit_model_img_pr");
});



