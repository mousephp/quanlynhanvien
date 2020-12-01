<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>them</title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap.min.css">
	<script src="vendor/bootstrap.min.js"></script>
</head>
<body>
	
	<?php 
	include('connect.php');
	include('master.php');
	?>

	<?php 
	$err="";
	if (isset($_POST['btnsubmit'])) {
		$ten = $_POST["ten"];		
		$ngaysinh=$_POST['ngaysinh'];
		$gioitinh = $_POST["gioitinh"];
		$email=$_POST['email'];
		$chucvu=$_POST['chucvu'];
		$diachi=$_POST['diachi'];

		if(empty($_POST['ten'])||empty($_POST['ngaysinh'])||empty($_POST['email'])||empty($_POST['chucvu'])||empty($_POST['diachi'])){
			$err= "<p style='color:red;'>bạn cần nhập đầy đủ thông tin!</p>";
		}else{
			$sql="SELECT * FROM nhanvien WHERE ten='$ten' AND email='$email'";
			$thucthi=mysqli_query($conn,$sql);
			if(mysqli_num_rows($thucthi)>0){
				echo "<p style='color:red;text-align: center;'>đã tồn tại trong CSDL!</p>";
			}else{
				$sql_insert="INSERT INTO nhanvien (ten,ngaysinh,gioitinh,email,chucvu,diachi) VALUES ('$ten','$ngaysinh','$gioitinh','$email','$chucvu','$diachi')";
				
				mysqli_query($conn,$sql_insert);
				echo "<p style='color:green;text-align: center;'>đã thêm thành công!</p>";	
				header("location:index.php");			
			}
		}
	}
	?>


	<div class="container">
		<div class="row text-center">
			<div class="col-sm-10 col-sm-offset-1">
				<h2 class="" style="color: green;font-weight: 700;">Thêm nhân viên</h2>
				<?php echo $err; ?>
				<form class="form-horizontal" action="" method="POST">
					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1">Họ và tên</label>
						
						<div class="col-sm-6 ">
							<input type="text" class="form-control" placeholder="nhập tên" name="ten">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1">Ngày sinh</label>
						<div class="col-sm-6 ">
							<input type="date" class="form-control" placeholder="nhập ngày sinh" name="ngaysinh">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1">giới tính</label>
						<div class="col-sm-6 ">
							<input type="radio" checked name="gioitinh" value="nu">Nữ
							<input type="radio" name="gioitinh" value="nam">Nam
							<input type="radio" name="gioitinh" value="khac">Khác  

							<br>						
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1" for="email">Email:</label>
						<div class="col-sm-6 ">
							<input type="email" class="form-control" id="email" placeholder="email" name="email">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1" >chức vụ</label>
						<div class="col-sm-6 ">
							<input type="text" class="form-control" placeholder="chức vụ" name="chucvu">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1">địa chỉ</label>
						<div class="col-sm-6 ">
							<input type="text" class="form-control" placeholder="địa chỉ" name="diachi">
						</div>
					</div>

					<input class="form-control btn-success" name="btnsubmit" value="Thêm" type="submit"></input>
					<input  class="form-control btn-danger" type="reset" name="btnreset" value="nhập lại"></input>
				</form>
			</div>
		</div>
	</div>


</body>
</html>
