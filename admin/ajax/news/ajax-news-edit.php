<?php 
	include_once '../../config/conn.php';

$sql = "SELECT * FROM news";
$result = mysqli_query($conn, $sql);

if(!$result){
    die('Query failed '.mysqli_error($conn));
}

$html = '';
while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $date = $row['blogDate'];
    // $image = $row['image'];
    $heading = $row['heading'];
    // $subHeading = $row['subHeading'];
    // $description = $row['description'];

    $html .= '<tr>
    <td><h6>'.$heading.'</h6></td>
    <td><h6>'.$date.'</h6></td>
    <td><a href="javascript:void(0)" onclick=editBlog('.$id.')><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
    <td><a href="javascript:void(0)" onclick=deleteBlog('.$id.')><i class="fa fa-times" aria-hidden="true"></i></a></td>
  </tr>';

}

echo json_encode($html)



?>