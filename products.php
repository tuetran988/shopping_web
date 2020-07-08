<?php 
	include 'inc/header.php';
	include 'inc/slider.php';
 ?>

 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Latest from MSI</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      			<?php 
						$pd = new product();
						$LatestMSI = $pd->getLastestMSI2();
						if($LatestMSI)
						{
							while($msi=$LatestMSI->fetch_assoc())
							{

					 ?>
				<div class="grid_1_of_4 images_1_of_4">					
					 <a href="preview-3.php"><img src="admin/uploads/<?php echo $msi['image'] ?>" alt="" /></a>
					 <h2><?php echo $msi['productName'] ?> </h2>
					<!--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p> -->
					 <p><span class="price"><?php echo $msi['price'] ?></span></p>
				     <a href="details.php?proid=<?php echo $msi['productId'] ?>">Details</a>	 	
				</div>
				<?php }} ?>
				
			</div> <!-- end sectionGroup -->
			<div class="content_bottom">
		    		<div class="heading">
		    		<h3>Latest from Thinkpad</h3>
		    		</div>
		    		<div class="clear"></div>
    		</div>
			<div class="section group">
				<?php 
						$pd = new product();
						$LatestThink = $pd->getLastestThinkPad2();
						if($LatestThink)
						{
							while($Think=$LatestThink->fetch_assoc())
							{

					 ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview-3.php"><img src="admin/uploads/<?php echo $Think['image'] ?>" alt="" /></a>
					 <h2><?php echo $Think['productName'] ?> </h2>
					 <p><span class="price"><?php echo $Think['price'] ?></span></p>
				    
				     <a href="details.php?proid=<?php echo $Think['productId'] ?>" >Details</a>
				</div>
				<?php }} ?>
			
			</div><!-- end sectionGroup -->
    </div>
 </div>
<?php 
	include 'inc/footer.php';
 ?>

