 <div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				<?php
				$getLastestDell = $product->getLastestDell();
				if($getLastestDell){
					while($resultdell = $getLastestDell->fetch_assoc()){
				 ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php"> <img src="admin/uploads/<?php echo $resultdell['image'] ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Dell</h2>
						<p><?php echo $fm->textShorten($resultdell['productName'],35) ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $resultdell['productId'] ?>">Thêm vào giỏ</a></span></div>
				   </div>
			   </div>
			   <?php
				}}
			    ?>

			    <?php
				$getLastestAsus = $product->getLastestAsus();
				if($getLastestAsus){
					while($resultAsus = $getLastestAsus->fetch_assoc()){
				 ?>			
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="details.php"><img src="admin/uploads/<?php echo $resultAsus['image'] ?>" alt="" /></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Asus</h2>
						  <p><?php echo $fm->textShorten($resultAsus['productName'],35) ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $resultAsus['productId'] ?>">Thêm vào giỏ</a></span></div>
					</div>
				</div>
				<?php
				}}
			    ?>
			</div>
			<div class="section group">
				<?php
				$getLastestThinkPad = $product->getLastestThinkPad();
				if($getLastestThinkPad){
					while($result_ThinkPad = $getLastestThinkPad->fetch_assoc()){
				 ?>		
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php"> <img src="admin/uploads/<?php echo $result_ThinkPad['image'] ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>ThinkPad</h2>
						<p><?php echo $fm->textShorten($result_ThinkPad['productName'],35) ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result_ThinkPad['productId'] ?>">Thêm vào giỏ</a></span></div>
				   </div>
			   </div>
			   <?php
				}}
			    ?>

				<?php
				$getLastestMSI = $product->getLastestMSI();
				if($getLastestMSI){
					while($result_MSI = $getLastestMSI->fetch_assoc()){
				 ?>		
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php"> <img src="admin/uploads/<?php echo $result_MSI['image'] ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>MSI</h2>
						<p><?php echo $fm->textShorten($result_MSI['productName'],35) ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result_MSI['productId'] ?>">Thêm vào giỏ</a></span></div>
				   </div>
			   </div>
			   <?php
				}}
			    ?>			
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<?php 
						$get_slider = $product->show_slider();
						if ($get_slider) {
							while ($result_slider = $get_slider->fetch_assoc()) {
								# code...
							
						 ?>
						<li><img src="admin/uploads/<?php echo $result_slider['slider_image'] ?>" alt=""/></li>
						<?php 
						}
						}
						 ?>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>