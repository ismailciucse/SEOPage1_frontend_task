// Show hide iput form
function form() {
  var x = document.getElementById("fileUpload");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

// List view of uploaded attachment with extention
$(document).ready(function () {
  $("#submit").click(function () {
    var form_data = new FormData();

    // Read selected files
    var totalfiles = document.getElementById("files").files.length;
    for (var index = 0; index < totalfiles; index++) {
      $("#uploadPreview").append(
        document.getElementById("files").files[index].name + "<br/>"
      );
    }
  });
});
