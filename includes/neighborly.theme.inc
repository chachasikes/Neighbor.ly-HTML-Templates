<?php 

/**
 * Global content variables
 */
$sitename = "Neighborly";
$tagline = "Meet your nearest neighbors.";


/**
 * Custom site content
 */
function page_preprocess() {

}

/**
 * Content on the registration page.
 */
function neighborly_register() {
  global $tagline;
  $output = '<h2 class="tagline">' . $tagline . '</h2>';
  $output .= '
    <div id="register-address">
      <form id="address">
        <label>Enter your address</label>
        <input value="" />
        <div class="description">
          to see your neighborly neighbors
        </div>
      </form>
    </div>
    ';
  return $output;
}
/**
 * Shuffle all image sets.
 */
function neighborly_shuffle_images($images) {
  shuffle($images['person']);
  shuffle($images['connection']);
  shuffle($images['corner']);
  return $images;
}
/**
 * Build tiles.
 * @TODO For performance tiles can be baked into individual files and then dynamically swapped.
 * Randomizing individuality while tiles are still being designed.
 */
function neighborly_tiles($region = 'top', $scale = 100, $quantity = 10) {
  $images = neighborly_tiles_load_images($quantity);
  $images = neighborly_shuffle_images($images);
  $even = TRUE;

  $corner_left = '';
  $corner_right = '';
  switch($region) {
    case 'top':
      $corner_left = 'corner-top-left';
      $corner_right = 'corner-top-right';
      break;
    case 'right':
      break;
    case 'bottom':
      $corner_left = 'corner-b-left';
      $corner_right = 'corner-b-right';
      break;
    case 'left':
      break;  
    default:
      break;
  }

  $output = '';

  for ($i = 0; $i <= ($quantity-1); $i++) {
    switch($i) {
      case 0:
        if($region == 'top' || $region == 'bottom') {
          $output .= '<img src="' . $images['corner'][$i] . '" alt="Corner" />';
        }
        break;
      case ($i == $quantity):
        if($region == 'top' || $region == 'bottom') {
          $output .= '<img src="' . $images['corner'][$i] . '" alt="Person" />';
        }
        break;
      default:
        if($even) {
          $output .= '<img src="' . $images['person'][$i] . '" alt="Person" />';
          $even = FALSE;
        }
        else {
          $output .= '<img src="' . $images['connection'][$i] . '" alt="Connection" />';
          $even = TRUE;
        }
        break;
    }
  }
  return $output;
}

function neighborly_tiles_load_images($quantity) {
  $images = array(
    'person' => neighborly_theme_get_images_from_dir("theme/images/tiles/person"),
    'connection' => neighborly_theme_get_images_from_dir("theme/images/tiles/connection"),
    'corner' => neighborly_theme_get_images_from_dir("theme/images/tiles/corners"),
  );
  return $images;
}
/** 
 * Load images from an directory and return an array containing the relative path to the image.
 */
function neighborly_theme_get_images_from_dir($path) {
    $images = array();
    if ( $img_dir = @opendir($path) ) {
        while ( false !== ($img_file = readdir($img_dir)) ) {
            // checks for gif, jpg, png
            if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
                $images[] = $path . '/' . $img_file;
            }
        }
        closedir($img_dir);
    }
    return $images;
} 

function neighborly_tiles_imageRotate($image, $rotation) {
  // This sets the image type to .jpg but can be changed to png or gif
  header('Content-type: image/jpeg') ;

  // Create the canvas
  $source = imagecreatefromjpeg($image) ;

  // Rotates the image
  $rotate = imagerotate($source, $degrees, 0) ;

  // Outputs a jpg image, you could change this to gif or png if needed
  imagejpeg($rotate);
}
?>