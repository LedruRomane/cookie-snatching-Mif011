
<?php 
require('db.php');

if(isset($_POST['submit'])){
	if(!empty($_POST['submit'])){
		date_default_timezone_set('Asia/Manila');
		$time = time();
		$dateTime = strftime('%Y-%m-%d %H:%M:%S ',$time);
		$postid = $_POST['id'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];
		$status = 'approved';
		$sql = "INSERT INTO comment (commentdate, email, comment, status, post_id, approved_by) VALUES ('$dateTime', '$email', '$comment', '$status', '$postid', 'admin')"; // Post auto approuvé!
		$execution = mysqli_query($db, $sql) or die(mysqli_error($db));
		if($execution){
			header("Location: single.php?id=$postid");
		}
		else{
			echo '<script>alert("Something Went Wrong!!!")</script>';
		}

	}
}
?>