<?php 
	include 'inc/header.php';
	include 'inc/slider.php';
 ?>	
<style>
	.pageOne:hover
	{
		background-color: lightblue;
	}
	
</style>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Danh Sách Sản Phẩm</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      	<?php 
	      	$product_featheread = $product->showProductOnePage();
	      	if($product_featheread){
	      		while ($result = $product_featheread->fetch_assoc()) {
	      			      	
	      	 ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proid=<?php echo $result['productId'] ?>"><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
					 <h2><?php echo $result['productName'] ?></h2>
					 <p><?php echo $fm->textShorten($result['product_desc'], 50) ?></p>
					 <p><span class="price"><?php echo $fm->format_currency($result['price'])." "."VND" ?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Chi tiết</a></span></div>
				</div>
				<?php 
				}
				}
				 ?>
			</div>
			<div class="row">
				<div class="pageon">
					<?php 
					$AllProduct = $product->show_product();
					$AllCount = mysqli_num_rows($AllProduct);
					$AllButton= ceil($AllCount/4);
					echo"<p>Page : </p>";
					for($i=1;$i<=$AllButton;$i++)
					{
						echo '<a class= "pageOne" style=" margin:0px 10px;border:1px solid #00FFFF; padding:0px 20px;" href="?page='.$i.'">'.$i.'</a>';
					}

					?>
				</div>
			</div>            	
			
    </div>
 </div>
<?php 
	include 'inc/footer.php';
 ?>
