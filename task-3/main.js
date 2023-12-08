// Show hide input from
function form() {
  var x = document.getElementById("fileUpload");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

$(document).ready(function () {
  $("#submit").click(function () {
    var form_data = new FormData();

    // Read selected files
    var totalfiles = document.getElementById("files").files.length;
    for (var index = 0; index < totalfiles; index++) {
      form_data.append(
        "files[]",
        document.getElementById("files").files[index]
      );
    }

    // AJAX request
    $.ajax({
      url: "upload.php",
      type: "post",
      data: form_data,
      dataType: "json",
      contentType: false,
      processData: false,
      success: function (response) {
        // Success message in <div id='preview'>
        $("#uploadPreview").append("Uploaded successfuly" + "<br/>");
      },
    });
  });
});
