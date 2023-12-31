<?php 
	include_once ("include/config.php");

	
	
	$project_id = '';
	$pagi = '';
	if((isset($_POST['pages']) && $_POST['pages'] != '') && (isset($_POST['id']) && $_POST['id'] != '')){
		$project_id = $_POST['id'];
		$pagi = $_POST['pages'];
		
		$ss = get_transaction($project_id, $pagi);
		print_r($ss);
		$html = '';
		
		// echo json_encode($ss);
	}
	
	function get_typology($id){
		global $conn;
		
		$temp_data = '';
		$sql = "SELECT name FROM projectstatus WHERE id = '$id'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$row = mysqli_fetch_array($query);
			return $row['name'];
		}
	}
	
	
	function get_developer($id){
		global $conn;
		
		$temp_data = '';
		$sql = "SELECT * FROM developer WHERE id = '$id'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$row = mysqli_fetch_assoc($query);
			return $row;
		}else{
			$status = 'No Data';
			return $status;
		}
	}
	
	
	function get_all_city(){
		global $conn;
		
		$temp_data = '';
		$sql = "SELECT * FROM city ORDER BY city_name ASC";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$city = [];
			while($row = mysqli_fetch_assoc($query)){
				$city[] = $row;
			}
				return json_encode($city);
		}else{
			$status = 'No Data';
			return $status;
		}
	}
	
	
	function get_all_category(){
		global $conn;
		
		$temp_data = '';
		$sql = "SELECT * FROM category ORDER BY name DESC";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$category = [];
			while($row = mysqli_fetch_assoc($query)){
				$category[] = $row;
			}
				return json_encode($category);
		}else{
			$status = 'No Data';
			return $status;
		}
	}


	function get_all_developer(){
		global $conn;
		
		$sql = "SELECT * FROM developer ORDER BY id DESC";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$developer = array();
			while($row = mysqli_fetch_assoc($query)){
				$developer[] = $row;
			}
				return json_encode(['data' => $developer, 'status' => 1]);
		}else{
			return json_encode(['status'=>0, 'error'=>"You have'nt more records!"]);
		}
	}
	
	
	function get_all_property(){
		global $conn;
		
		
		$temp_data = '';
		$sql = "SELECT * FROM property";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$hot_projetct = [];
			while($row = mysqli_fetch_assoc($query)){
				$hot_projetct[] = $row;
			}
				$data = array('data' => $hot_projetct, 'status' => 1);
				return json_encode($data);
		}else{
			$status = array('status' => 0);
			return json_encode($status);
		}
	}
	
	
	function get_hot_projects_cat($id){
		global $conn;

		$condition = '';
		if($id != ''){
			$condition = "WHERE cat_id = '$id' AND hot_project = '1' ORDER BY id DESC";
		}else{
			$condition = "WHERE hot_project = '1' ORDER BY id DESC";
		}
		
		$temp_data = '';
		$sql = "SELECT * FROM micro_site $condition";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$hot_projetct = [];
			while($row = mysqli_fetch_assoc($query)){
				$hot_projetct[] = $row;
			}
				$data = array('data' => $hot_projetct, 'status' => 1);
				return json_encode($data);
		}else{
			$status = array('status' => 0);
			return json_encode($status);
		}
	}
	
		
	function get_banner($id){
		global $conn;

		$temp_data = '';
		$sql = "SELECT * FROM micro_site_banner WHERE project_id = '$id'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$row = mysqli_fetch_assoc($query);
			return $row;
		}else{
			$status = 'No Data';
			return $status;
		}
	}
	
		
	function get_overview($id){
		global $conn;
		
		$status = '';
		$temp_data = '';
		$sql = "SELECT * FROM micro_site_overview WHERE project_id = '$id'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$row = mysqli_fetch_assoc($query);
			return $row;
		}else{
			$status = 'No data';
			return $status;
		}
	}
	
	
	function get_property($id){
		global $conn;
		
		$temp_data = '';
		$sql = "SELECT * FROM property WHERE id = '$id'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$row = mysqli_fetch_assoc($query);
			return $row;
		}
	}
	
		
	function get_transaction($id, $page_no){
		global $conn;
		print_r($id, $page_no);
		
		$limit = 2;
		if($page_no != ''){
		  $page_number = $page_no;
		}else{
		  $page_number = 1;
		}
		
		$pn = intval($page_number);
		$start_from = ($pn - 1) * $limit;

		// print_r($start_from);

			$sql = "SELECT * FROM micro_site_transaction WHERE project_id = '$id' LIMIT $start_from, $limit";
			$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$history = '';
			$temp_data = [];
			$sql_count = "SELECT COUNT(*) FROM micro_site_transaction WHERE project_id = '$id'";  
			$query_count = mysqli_query($conn, $sql_count);  
			$row_count = mysqli_fetch_row($query_count);  
			$total_records = $row_count[0];   
					
			// Number of pages required.   
			$total_pages = ceil($total_records / $limit);     
			$pagLink = "";       
			$pre = "";
			$next = "";
			$html = '';
			if($pn >= 2){
				$pre .= "<a class='page-link' href='javascript:void(0)' onclick=trans_pagination($id,$pn-1) >«</a>";   
			}
					
			for ($i=1; $i<=$total_pages; $i++) {
				if ($i == $pn) {
					$pagLink .= "<li class='page-item active'><a class = 'page-link' onclick=trans_pagination($id,$i) href='javascript:void(0)'>".$i." </a></li>";   
				}else{   
					$pagLink .= "<li class='page-item'><a class='page-link' onclick=trans_pagination($id,$i) href='javascript:void(0)'>".$i.	"</a></li>";     
				}   
			};        

			if($pn < $total_pages){
				$next = "<a class='page-link' onclick=trans_pagination($id,$pn+1) href='javascript:void(0)'>»</a>";   
			}
			
			$html .="
				<ul class='pagination'>
				  <li class='page-item'>$pre</li>
					$pagLink
				   <li class='page-item'>$next</li>
				</ul>
			";
		
			while($row = mysqli_fetch_assoc($query)){
				$sold_price = $row['sold_price'];
				$registry_date = $row['registry_date'];
				$area = $row['area'];
				$floor = $row['floor'];
				$price = $row['price'];
				
				$history .= "
					<tr>
						<td>
							<h4>(₹) $sold_price</h4>
							<p>$registry_date</p>
						</td>
						<td>
							<h4>$area</h4>
							<p># $floor</p>
						</td>
						<td>
							<h4>₹ $price</h4>
							<p>/Sq.ft.</p>
						</td>
					</tr>
				";
				
				$temp_data[] = $row;
				
			}
			return json_encode(['data' => $temp_data, 'history' => $history, 'pagination' => $html]);
		}else{
			$status = 'No Data';
			return $status;
		}
	}
	
		
	function get_price_insight($id){
		global $conn;
		
		$temp_data = [];
		$sql = "SELECT * FROM micro_site_price_insight WHERE project_id = '$id'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$row = mysqli_fetch_assoc($query);
			
			return $row;
		}else{
			$status = 'No Data';
			return $status;
		}
	}


	function get_price_list_years(){

		global $conn;
		
		$sql = "SELECT DISTINCT years FROM `micro_site_price_list`;";
			$query = mysqli_query($conn, $sql);
			
			if(mysqli_num_rows($query) > 0){
				while($row = mysqli_fetch_assoc($query)){
					// $id = $row['id'];
					$years = $row['years'];
					echo '<li><a href="javascript:void(0)" onclick=listYears('.$years.')>'.$years.'</a></li>';
				}
			}
	}


	function get_price_insight_list($id){
		global $conn;
	
		$temp_data = [];
		$sql = "SELECT * FROM micro_site_price_list WHERE project_id = '$id'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$temp_data[] = $row;
			}
			return $temp_data;
		}
	}
	
	
	function get_location($id){
		global $conn;
		
		$temp_data = '';
		$sql = "SELECT * FROM micro_site_location WHERE project_id = '$id'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$row = mysqli_fetch_assoc($query);
			return $row;
		}else{
			$status = 'No Data';
			return $status;
		}
	}

	
	function get_location_list($id){
		global $conn;
	
		$temp_data = [];
		$sql = "SELECT * FROM micro_site_location_list WHERE project_id = '$id'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$temp_data[] = $row;
			}
			return $temp_data;
		}else{
			$status = 0;
			return $status;
		}
	}
	
	
	function get_amenities($id){
		global $conn;
		
		$row_data = [];
		$sql = "SELECT * FROM micro_site_amenities WHERE project_id = '$id'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$row = mysqli_fetch_assoc($query);
			$sep_amenities_id = explode(',', $row['amenities_logo_id']);
			foreach($sep_amenities_id as $sep_amenities){
				$solo_sql = "SELECT * FROM amenities_logo WHERE id = '$sep_amenities'";
				$solo_query = mysqli_query($conn, $solo_sql);
				if(mysqli_num_rows($solo_query) > 0){
					$solo_row = mysqli_fetch_assoc($solo_query);
					$row_data[] = $solo_row;
				}
			}
			return $row_data;
		}else{
			$status = 'No Data';
			return $status;
		}
	}
	
	
	function get_floorplan($id){
		global $conn;
	
		$temp_data = [];
		$sql = "SELECT * FROM micro_site_floorplan WHERE project_id = '$id' ORDER BY bhk ASC";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$temp_data[] = $row;
			}
			return $temp_data;
		}else{
			$status = 'No Data';
			return $status;
		}
	}
	
	
	function get_builder($id){
		global $conn;
		
		$temp_data = '';
		$sql = "SELECT * FROM micro_site_builder WHERE project_id = '$id'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$row = mysqli_fetch_assoc($query);
			return $row;
		}else{
			$status = 'No Data';
			return $status;
		}
	}
	
	
	function get_projects_by_builder($id){
		global $conn;
		
		$page = 1;
		$limit = 8;
		$start = intval($page - 1) * $limit;
		
		$status = '';
		$temp_data = '';
		$sql = "SELECT * FROM micro_site WHERE developer_id = $id LIMIT $start, $limit ";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$hot_projetct = [];
			while($row = mysqli_fetch_assoc($query)){
				$hot_projetct[] = $row;
			}
				$data = array('data' => $hot_projetct, 'status' => 1);
				return json_encode($data);
		}else{
			$status = array('status' => 0);
			return json_encode($status);
		}
	}
	
	
	function get_projects_by_category($id){
		global $conn;
		
		$page = 1;
		$limit = 8;
		$start = intval($page - 1) * $limit;
		
		$cat_id = '';
		if($id == 'residential'){
			$cat_id = 1;
		}else if($id == 'commercial'){
			$cat_id = 2;
		}
			
		$status = '';
		$temp_data = '';
		$sql = "SELECT * FROM micro_site WHERE cat_id = '$cat_id' LIMIT $start, $limit ";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$hot_projetct = [];
			while($row = mysqli_fetch_assoc($query)){
				$hot_projetct[] = $row;
			}
				$data = array('data' => $hot_projetct, 'status' => 1);
				return json_encode($data);
		}else{
			$status = array('status' => 0);
			return json_encode($status);
		}
	}
	
	
	function get_projects_by_city($id){
		global $conn;
		$page = 1;
		$limit = 8;
		$start = intval($page - 1) * $limit;
		
		
		$status = '';
		$temp_data = '';
		$sql = "SELECT * FROM micro_site WHERE city_id = $id LIMIT $start, $limit";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$hot_projetct = [];
			while($row = mysqli_fetch_assoc($query)){
				$hot_projetct[] = $row;
			}
				$data = array('data' => $hot_projetct, 'status' => 1);
				return json_encode($data);
		}else{
			$status = array('status' => 0);
			return json_encode($status);
		}
	}
	
	
	function get_projects_by_locality($id){
		global $conn;
		
		$page = 1;
		$limit = 8;
		$start = intval($page - 1) * $limit;
		
		$status = '';
		$temp_data = '';
		$sql = "SELECT * FROM micro_site WHERE locality_id = $id LIMIT $start, $limit";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$hot_projetct = [];
			while($row = mysqli_fetch_assoc($query)){
				$hot_projetct[] = $row;
			}
				$data = array('data' => $hot_projetct, 'status' => 1);
				return json_encode($data);
		}else{
			$status = array('status' => 0);
			return json_encode($status);
		}	
	}
	
	
	function search_city($id){
		global $conn;
		
		$temp_data = '';
		$sql = "SELECT * FROM city WHERE id = '$id'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$row = mysqli_fetch_assoc($query);
			return $row;
		}else{
			$status = 'No Data';
			return $status;
		}		
	}
	
	
	function search_developer($id){
		global $conn;
		
		$temp_data = '';
		$sql = "SELECT * FROM developer WHERE id = '$id'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$row = mysqli_fetch_assoc($query);
			return $row;
		}else{
			$status = 'No Data';
			return $status;
		}
	}
	
	
	function search_locality($id){
		global $conn;
		
		$temp_data = '';
		$sql = "SELECT * FROM locality WHERE id = '$id'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$row = mysqli_fetch_assoc($query);
			return $row;
		}else{
			$status = 'No Data';
			return $status;
		}
	}
	
	
	function search_category($id){
		global $conn;
		
		$cat_id = '';
		if($id == 'residential'){
			$cat_id = 1;
		}else if($id == 'commercial'){
			$cat_id = 2;
		}
		
		$temp_data = '';
		$sql = "SELECT * FROM category WHERE id = '$cat_id'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$row = mysqli_fetch_assoc($query);
			return $row;
		}else{
			$status = 'No Data';
			return $status;
		}
	}
	
	
	function get_property_listing($city, $category, $searching){
		global $conn;
		
		$page = 1;
		$limit = 8;
		$start = intval($page - 1) * $limit;
		
		$keywords = '';
		if($searching != ''){
			$keywords = " AND ( developer.name LIKE '%".$searching."%' OR micro_site.name LIKE '%".$searching."%' OR locality.address LIKE '%".$searching."%' )";
		}
		
		$status = '';
		$temp_data = '';
		// SELECT micro_site.* FROM micro_site, developer WHERE micro_site.developer_id = developer.id AND micro_site.city_id = 2 AND micro_site.cat_id = 1 AND ( developer.name LIKE '%cou%' OR micro_site.name LIKE '%cou%' OR micro_site.address LIKE '%cou%' );
		
		// SELECT b.*, p.name as developer_name, a.address as locality_address
		// FROM micro_site b
		// JOIN developer p ON p.id = b.developer_id
		// JOIN locality a ON a.id = b.locality_id
		// WHERE b.city_id = 2 AND b.cat_id = 1 AND ( p.name LIKE '%nagar%' OR b.name LIKE '%nagar%' OR a.address LIKE '%nagar%' );
		
		$sql = "SELECT  micro_site.* FROM micro_site, developer, locality WHERE micro_site.developer_id = developer.id AND micro_site.locality_id = locality.id AND micro_site.city_id = $city AND micro_site.cat_id = $category $keywords LIMIT $start, $limit";
		// echo $sql;
		// $sql = "SELECT  micro_site.* FROM micro_Site, developer WHERE micro_site.developer_id = developer.id AND ( developer.name LIKE '%".$searching."%' OR micro_site.name LIKE '%".$searching."%' ) AND cat_id = '$category' AND city_id = '$city'";
	
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$hot_projetct = [];
			while($row = mysqli_fetch_assoc($query)){
				$hot_projetct[] = $row;
			}
				$data = array('data' => $hot_projetct, 'status' => 1);
				return json_encode($data);
		}else{
			$status = array('status' => 0);
			return json_encode($status);
		}
	}
	
	
	function total_projects (){
		global $conn;
		
		$sql = "SELECT * FROM micro_site";
		$query = mysqli_query($conn, $sql);
		$total_projects = mysqli_num_rows($query);
		if($query){
			return $total_projects;
		}else{
			echo 0;
		}
	}
	
	
	function under_construction_projects (){
		global $conn;
		
		$sql = "SELECT * FROM micro_site WHERE status_id = 2";
		$query = mysqli_query($conn, $sql);
		$construction_projects = mysqli_num_rows($query);
		if($query){
			return $construction_projects;
		}
		
	}
	
	
	function get_highlight_list($id){
		global $conn;
	
		$temp_data = [];
		$sql = "SELECT * FROM micro_site_highlights WHERE project_id = '$id'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query) > 0){
			$hot_projetct = [];
			while($row = mysqli_fetch_assoc($query)){
				$hot_projetct[] = $row;
			}
				$data = array('data' => $hot_projetct, 'status' => 1);
				return json_encode($data);
		}else{
			$status = array('status' => 0);
			return json_encode($status);
		}
	}

	function get_services ($title = null, $limit = null) {
		global $conn;

		$sql = '';
		$query = '';

		if($title != null){
			$sql = "SELECT * FROM services WHERE page_url = '$title'";
			$query = mysqli_query($conn, $sql);
		}else if($limit != null){
			$sql = "SELECT * FROM services ORDER BY id DESC LIMIT $limit";
			$query = mysqli_query($conn, $sql);
		}else{
			$sql = "SELECT * FROM services ORDER BY id DESC";
			$query = mysqli_query($conn, $sql);
		}

		if(mysqli_num_rows($query) > 0){
			$hot_projetct = array();
			while($row = mysqli_fetch_assoc($query)){
				$hot_projetct[] = $row;
			}
				$data = array('data' => $hot_projetct, 'status' => 1);
				return json_encode($data);
		}else{
			$status = array('status' => 0);
			return json_encode($status);
		}
	}

	function get_testimonials() {
		global $conn;
		$query = mysqli_query($conn, "SELECT * FROM `testimonials_emp` ORDER BY id DESC");
		if(mysqli_num_rows($query) > 0){
			$array = array();
			while($row = mysqli_fetch_assoc($query)){
				$array[] = $row;
			}
			$data = ['data'=> $array, 'status'=>1];
			return json_encode($data);
		}else{
			return json_encode(['status'=>0]);
		}
	}



// faiz code 	
function getCatName($conn,$id){

    $getrecords = mysqli_query($conn, "SELECT `name`,page_url FROM `category` WHERE id=".$id."");

    if($getrecords->num_rows >0){
        $data=mysqli_fetch_assoc($getrecords);
        return array(
			'name'=>$data['name'],
			'page_url'=>$data['page_url'],
		);
    }
}

function getTypologyName($conn,$id){
    $getrecords = mysqli_query($conn, "SELECT name FROM `property` WHERE id = ".$id."");
    if($getrecords->num_rows>0){
        $row=mysqli_fetch_assoc($getrecords);
        return $row['name'];
    }

}



function getoThersectionItems($conn,$id){
    $getrecords = mysqli_query($conn, "SELECT icon,name FROM `other_icons` WHERE id=".$id."");
    if($getrecords->num_rows>0){
        $row=mysqli_fetch_assoc($getrecords);
        return $row;
    }

}

function getSizeType($type=""){
    $array=array(
        1=>'Sq.Ft.',
        2=>'Sq.yards.'
    );
    if(!empty($type)){
        return $array[$type];
    }else{
        return $array;
    }
}
function getPriceType($type=""){
    $array=array(
        1=>'Lacs ',
        2=>'crs'
    );
    if(!empty($type)){
        return $array[$type];
    }else{
        return $array;
    }
}

// end faiz code 


// vikase code 

function get_awards(){
    global $conn;
    $sql = "SELECT * FROM awards";
    $query = mysqli_query($conn, $sql);
    $html = [];
    if(!$query){
        die('Query failed '.mysqli_error($conn));
    }else{

       while($row = mysqli_fetch_array($query)){
            $html[] = $row;
        }
        
        return json_encode($html);
    }
}


function get_blogs(){
    global $conn;
    $sql = "SELECT * FROM blogs";
    $query = mysqli_query($conn, $sql);
    $html = [];
    if(!$query){
        die('Query failed '.mysqli_error($conn));
    }else{

       while($row = mysqli_fetch_array($query)){
            $html[] = $row;
        }
        
        return json_encode($html);
    }
}


function get_blog($id){
    global $conn;
    $sql = "SELECT * FROM blogs WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    if(!$query){
        die('Query failed '.mysqli_error($conn));
    }else{

       $row = mysqli_fetch_array($query);
    }
        
        return json_encode($row);
    }



	function getjobType($type=""){
		$array=array(
			1=>'Full Time ',
			2=>'Part Time'
		);
		if(!empty($type)){
			return $array[$type];
		}else{
			return $array;
		}
	}
	
function time_elapsed_string($ptime)
{
    $etime = time() - $ptime;

    if ($etime < 1)
    {
        return '0 seconds';
    }

    $a = array( 365 * 24 * 60 * 60  =>  'year',
                 30 * 24 * 60 * 60  =>  'month',
                      24 * 60 * 60  =>  'day',
                           60 * 60  =>  'hour',
                                60  =>  'minute',
                                 1  =>  'second'
                );
    $a_plural = array( 'year'   => 'years',
                       'month'  => 'months',
                       'day'    => 'days',
                       'hour'   => 'hours',
                       'minute' => 'minutes',
                       'second' => 'seconds'
                );

    foreach ($a as $secs => $str)
    {
        $d = $etime / $secs;
        if ($d >= 1)
        {
            $r = round($d);
            return $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . ' ago';
        }
    }
}
	function getjobExperienced($type=""){
		$array=array(
			1=>'Fresher',
			2=>'1+ year',
			3=>'2+ year',
			4=>'3+ year',
			5=>'4+ year',
			6=>'5+ year',
			7=>'6+ year',
			8=>'7+ year',
			9=>'8+ year',
			10=>'9+ year',
			11=>'10+ year',
	
	
		);
		if(!empty($type)){
			return $array[$type];
		}else{
			return $array;
		}
	}

 
	function encryptor($action, $string) {


		$output = false;
		$encrypt_method = "AES-256-CBC";
		
		$secret_key = 'PerfectTutorHash';
		$secret_iv = 'faiz@12345678';
	
	   
		$key = hash('sha256', $secret_key);
		
	   
		$iv = substr(hash('sha256', $secret_iv), 0, 16);
	
		
		if( $action == 'encrypt' ) 
		{
			$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
			$output = base64_encode($output);
		}
		else if( $action == 'decrypt' )
		{
			
			$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0,      $iv);
		  
		}
	
		return $output;
	}
// end vikase code 
?>



