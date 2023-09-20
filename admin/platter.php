<?php 
	include_once 'config/conn.php';
	include_once 'layout/header/header.php';
	include_once 'layout/side-nav/left-side-nav.php';
	
	include_once 'include/function.php';
	

	
?>

<section class="microsite-area">
	<div class="contaienr">
		<a href="platter-add.php">Add Platter</a>
	<div class="inner-table">
	<table class="table text-white">
					<thead>
						<tr>
							<th>Sr. No.</th>
							<th>Project Name</th>
							<th>Type</th>

						
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$sql_res = "SELECT * FROM platter_page ";
							$query_res = mysqli_query($conn, $sql_res);
							if(mysqli_num_rows($query_res) > 0){
								$count = 1;
								while($row_res = mysqli_fetch_array($query_res)){
						?>
						
								<tr>
									<td><?php echo $count;?></td>
									<td><?php echo $row_res['name']; ?></td>
									<td><?php echo getCatName($conn,$row_res['cat_id']); ?></td>

								
									<td><span><a href="platter-update.php?page=<?php echo encryptor('encrypt',$row_res['id']); ?>"><i class="fa fa-pencil" aria-hidden="true"></i><a></span></td>
									<td><span class="deleteplatterfile" data-id="<?php echo encryptor('encrypt',$row_res['id']); ?>"><i class="fa fa-times" aria-hidden="true"></i></span></td>
								</tr>
						
						<?php	
								$count++;}
							}
						?>
					</tbody>
				</table>
			</div>
	</div>
</section>

<?php 
	include_once 'layout/footer/footer.php';
?>

<script src="vendor/addPlatter.js"></script>