<?php

/*************** IMAGE SIZES ***************/
if (function_exists('add_image_size')) {
  add_image_size('standard', 1280, 720, false);
  add_image_size('stats-img', 250, 250, false);
  add_image_size('for-whom', 570, 420, true);
  add_image_size('vehicles', 1360, 840, false);
}
