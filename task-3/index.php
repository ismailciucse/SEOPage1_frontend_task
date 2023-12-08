<?php
//Connection
    define('LOCALHOST', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'frontend_task');
    $conn = mysqli_connect(LOCALHOST,USERNAME,PASSWORD) or die(mysqli_error());
    $db_select = mysqli_select_db($conn,DATABASE) or die(mysqli_error());

    $sql = "SELECT * FROM upfiles";
    $res = mysqli_query($conn, $sql);
    if($res == true){
      $count = mysqli_num_rows($res);
      if($count>0){
        while($rows = mysqli_fetch_assoc($res)){				
          $total = $rows['total_files'];
        }
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Task for Frontend Developer</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="main">
      <!-- File upload form -->
      <div class="fileUpload" id="fileUpload" style="display: none">
        <form method="post" action="" enctype="multipart/form-data">
          <span onclick="form()">x</span>
          <input type="file" id="files" name="files[]" multiple /><br />
          <input type="button" id="submit" value="Upload" />
          <br />
          <div id="uploadPreview"></div>
        </form>
      </div>

      <!-- Carts -->
      <div class="carts">
        <!-- Single cart -->
        <div class="cart">
          <!-- Cart Header -->
          <div class="cartTitle">
            <h5><span></span> Incomplete</h5>
            <h5 class="totalCount">0</h5>
          </div>
          <!-- Cart Items -->
          <div class="items">
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"
                      ><i class="fa-solid fa-paperclip" id="upload_files"></i>
                      <?php echo $total; ?></a
                    >
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single cart -->
        <div class="cart">
          <!-- Cart Header -->
          <div class="cartTitle">
            <h5><span></span> To Do</h5>
            <h5 class="totalCount">0</h5>
          </div>
          <!-- Cart Items -->
          <div class="items">
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single cart -->
        <div class="cart">
          <!-- Cart Header -->
          <div class="cartTitle">
            <h5><span></span> Doing</h5>
            <h5 class="totalCount">0</h5>
          </div>
          <!-- Cart Items -->
          <div class="items">
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single cart -->
        <div class="cart">
          <!-- Cart Header -->
          <div class="cartTitle">
            <h5>Under Review</h5>
            <h5 class="totalCount">0</h5>
          </div>
          <!-- Cart Items -->
          <div class="items">
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single cart -->
        <div class="cart">
          <!-- Cart Header -->
          <div class="cartTitle">
            <h5>Completed</h5>
            <h5 class="totalCount">0</h5>
          </div>
          <!-- Cart Items -->
          <div class="items">
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single cart -->
        <div class="cart">
          <!-- Cart Header -->
          <div class="cartTitle">
            <h5>Overdate</h5>
            <h5 class="totalCount">0</h5>
          </div>
          <!-- Cart Items -->
          <div class="items">
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
            <!-- Single item -->
            <div class="item">
              <!-- Item top part -->
              <div class="profiles">
                <div class="profileItem">
                  <h6>
                    <img
                      src="img/person1.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Client Name</a>
                  </h6>
                  <h6>
                    <img
                      src="img/person2.jpg"
                      alt="Client Name"
                      class="itemImg"
                    />
                    <a href="#"> Sadik Istiak</a>
                  </h6>
                </div>
              </div>
              <!-- Item content -->
              <div class="content">
                <p>
                  <i class="fa-solid fa-layer-group"></i> Lorem ipsum dolor sit,
                  amet...
                </p>
                <p><i class="fa-solid fa-clipboard"></i> 1/2</p>
              </div>
              <!-- Item content details -->
              <div class="contentDetails">
                <img src="img/person3.jpg" alt="Client Name" class="itemImg" />
                <img src="img/person4.webp" alt="Client Name" class="itemImg" />
                <div class="likeCount">
                  <p><a href="#">12+</a></p>
                </div>
                <div class="commentCount">
                  <p>
                    <a href="#"><i class="fa-regular fa-comments"></i> 15</a>
                  </p>
                </div>
                <div class="fileCount" onclick="form()">
                  <p>
                    <a href="#"><i class="fa-solid fa-paperclip"></i> 25</a>
                  </p>
                </div>
                <div class="date">
                  <p><i class="fa-regular fa-calendar-days"></i> 30-12-2022</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
