<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صور المنتجات - Products Image</title>
<style>
  .vv {
    padding-top: 20px;
  }
  .image-wrapper {
    position: relative;
    width: 600px;
    height: 600px;
    margin: 0 auto;
    box-shadow: 0 0 16px #0000ff;
    border-radius: 0.5rem;
  }

  .big-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .small-images {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
  }

  .small-image {
    width: 120px;
    height: 120px;
    margin: 0 10px;
    object-fit: cover;
    cursor: pointer;
  }

  .active {
    border: 2px solid #333;
  }

  .left-bracket, .right-bracket {
  position: absolute;
  top: 50%;
  font-size: 64px;
  color: black;
  cursor: pointer;
  z-index: 2;
}
.left-bracket:hover, .right-bracket:hover {
  color: #ff0000;
}
.left-bracket {
  left: -64px;
  transform: translateY(-50%);
}

.right-bracket {
  right: -64px;
  transform: translateY(-50%);
}
img {
    border-radius: 0.5rem;
}
img:hover {
    -webkit-transform: scaleX(-1);
    -moz-transform: scaleX(-1);
    -o-transform: scaleX(-1);
    transform: scaleX(-1);
    transition: 0.4s all linear;
}
@media only screen and (max-width: 1058px) {
  .left-bracket {
  font-size: 50px;
  padding-left: 15px;
  }

  .right-bracket {
    font-size: 50px;
    padding-right: 12px;
  }
}
@media only screen and (max-width: 991px) {
  .left-bracket {
  font-size: 50px;
  padding-left: 15px;
  }

  .right-bracket {
    font-size: 50px;
    padding-right: 12px;
  }
}
@media only screen and (max-width: 768px) {
  .left-bracket {
  font-size: 30px;
  padding-left: 12px;
  }

  .right-bracket {
    font-size: 30px;
    padding-right: 15px;
  }
}
@media only screen and (max-width: 614px) {
  .vv {
    padding-top: 40px;
  }
  .image-wrapper {
    width: 500px;
    height: 500px;
  }
  .left-bracket {
  font-size: 30px;
  padding-left: 20px;
  }

  .right-bracket {
    font-size: 30px;
    padding-right: 20px;
  }
}
@media only screen and (max-width: 360px) {
  .vv {
    padding-top: 40px;
  }
  .image-wrapper {
    width: 270px;
    height: 270px;
  }
  .left-bracket {
  font-size: 30px;
  padding-left: 30px;
  }

  .right-bracket {
    font-size: 30px;
    padding-right: 30px;
  }
}
</style>

</head>
<body>
<?php
$images = explode(',', $_GET['images']);
?>
<div class="vv">
<div class="image-wrapper">
  <img id="main-image" class="big-image" src="<?php echo $images[0] ?>" alt="" data-zoom-image="<?php echo $images[0] ?>">
  <span class="left-bracket" onclick="changeImage(-1)">&lt;</span>
  <span class="right-bracket" onclick="changeImage(1)">&gt;</span>
</div>
</div>
<script>
  var imageIndex = 0;
  var images = [
    <?php
    foreach($images as $index => $img) {
      echo "'" . $img . "'";
      if($index !== count($images)-1) {
        echo ",";
      }
    }
    ?>
  ];

  // Initialize ElevateZoom on the main image
  $('#main-image').elevateZoom({
    gallery: 'image-gallery',
    cursor: 'pointer',
    galleryActiveClass: 'active',
    imageCrossfade: true,
    zoomWindowFadeIn: 500,
    zoomWindowFadeOut: 500,
    lensFadeIn: 500,
    lensFadeOut: 500,
    easing: true,
    scrollZoom: true,
    zoomType: 'inner',
    responsive: true
  });

  function changeImage(direction) {
  // Increment or decrement the index based on the direction
  imageIndex += direction;

  // If the index goes out of bounds, reset it to the opposite end of the array
  if (imageIndex < 0) {
    imageIndex = images.length - 1;
  } else if (imageIndex >= images.length) {
    imageIndex = 0;
  }

  // Update the src and data-zoom-image attributes of the main image
  var mainImage = document.getElementById('main-image');
  mainImage.src = images[imageIndex];
  mainImage.setAttribute('data-zoom-image', images[imageIndex]);

  // Reload ElevateZoom on the main image with the updated image
  $('.zoomContainer').remove();
  $('#main-image').removeData('elevateZoom');
  $('#main-image').removeData('zoomImage');
  $('#main-image').elevateZoom({
    gallery: 'image-gallery',
    cursor: 'pointer',
    galleryActiveClass: 'active',
    imageCrossfade: true,
    zoomWindowFadeIn: 500,
    zoomWindowFadeOut: 500,
    lensFadeIn: 500,
    lensFadeOut: 500,
    easing: true,
    scrollZoom: true,
    zoomType: 'inner',
    responsive: true
  });
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
</body>
</html>


