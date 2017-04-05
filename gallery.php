<?php 

     
     require_once('admin/phpscripts/init.php');

    $pageTitle = "Gallery";
    include "includes/header.php";
    include "includes/nav.php";
    include "admin/phpscripts/connect.php";




    $query = "SELECT * FROM tbl_gallery";
    $select_gallery = mysqli_query($link,$query);
    echo $query; //didn't display anything so I am not sure what is going on 

    while($row = mysqli_fetch_assoc($select_gallery)){
      $gallery_id = $row['gallery_id'];
      $gallery_thumb = $row['gallery_thumbnail'];
      $gallery_image = $row['gallery_image'];
      $gallery_title = $row['gallery_title'];
      $gallery_desc = $row['gallery_description'];
    }
 ?>


    <section>
    <div class="row">
    <div class="small-10 medium-10 large-12 columns">
    <h2>Photo Gallery</h2>
    <p>Welcome to our photo gallery. This section includes pictures of Chantry Island and the area of Lake Huron surrounding the Island. It also includes pictures of the lighthouse and keeper's cottage inside and out, as well as photos of some of the birds and flowers native to the island.</p>
    <p>If you have photos of Chantry Island that you would like to share with us, connect with our Facebook page.</p>

    <h2 class="text-center">Gallery</h2>

    <ul class="small-block-grid-2 medium-block-grid-6 large-block-grid-9">
      <li><a href="gallery/1.jpg" data-lightbox="gallery"><img src="gallery/Thumbs/Pic_01_TH.jpg" alt=""></a></li>
      <li><a href="gallery/2.jpg" data-lightbox="gallery"><img src="gallery/Thumbs/Pic_02_TH.jpg" alt=""></a></li>
      <li><img src="gallery/Thumbs/Pic_03_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_04_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_05_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_06_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_07_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_08_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_09_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_10_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_11_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_12_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_13_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_14_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_15_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_16_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_17_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_18_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_19_TH.jpg" alt=""></li>
      <li><img src="gallery/Thumbs/Pic_20_TH.jpg" alt=""></li>
    </ul>

   

	
    </div>
    </div>
    </section>

    

    <?php 
    include "includes/footer.php";
     ?>
