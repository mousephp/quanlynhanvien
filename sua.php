<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sua</title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap.min.css">
	<script src="vendor/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.error{
		color:red;
		
	}
</style>
<body>

	<?php 
	include('connect.php');
	include('master.php');
	?>

	


	<?php 
	$id=$_GET['id'];
	$row_sql="SELECT * FROM nhanvien WHERE id='$id' ";
	$row_thucthi=mysqli_query($conn,$row_sql);
	$row_dulieu=mysqli_fetch_array($row_thucthi);
	
	if(isset($_POST['btnsua'])){
		$ten=$_POST['ten'];
		$ngaysinh=$_POST['ngaysinh'];
		$gioitinh = $_POST["gioitinh"];		
		$email=$_POST['email'];
		$chucvu=$_POST['chucvu'];
		$diachi=$_POST['diachi'];

		if(empty($_POST['ten'])||empty($_POST['ngaysinh'])||empty($_POST['gioitinh'])||empty($_POST['email'])||empty($_POST['chucvu'])||empty($_POST['diachi'])){
			$err= "<p style='color:red;'>bạn cần nhập đầy đủ thông tin!</p>";
		}else{
			$thucthi="SELECT * FROM nhanvien WHERE ten='$ten' AND email='$email'";
			if(mysqli_num_rows($thucthi)>0){
				echo "<p style='color:red;text-align: center;'>đã tồn tại trong CSDL!</p>";
			}else{
				$sql="UPDATE nhanvien SET ten='$ten',ngaysinh='$ngaysinh',gioitinh='$gioitinh',email='$email',chucvu='$chucvu',diachi='$diachi' WHERE id='$id' ";
				mysqli_query($conn,$sql);
				echo "Sửa thành công";
				header("location:index.php");
			}
		}
	}

	?>





	<div class="container">
		<div class="row text-center">
			<div class="col-sm-10 col-sm-offset-1">
				<h2 class="" style="color: green;font-weight: 700;">Sửa nhân viên</h2>
				<form class="form-horizontal" action="" method="POST" >
					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1">Họ và tên</label>
						<div class="col-sm-6 ">
							<input type="text" class="form-control" placeholder="nhập tên" name="ten" value="<?php echo $row_dulieu['ten'];  ?>">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1">Ngày sinh</label>
						<div class="col-sm-6 ">
							<input type="date" class="form-control" placeholder="nhập ngày sinh" name="ngaysinh"  value="<?php echo $row_dulieu['ngaysinh'];  ?>">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1">giới tính</label>
						<div class="col-sm-6 ">

							<input type="radio" name="gioitinh" value="nu" <?php if ($row_dulieu['gioitinh']=="nu") echo "checked";?> >Nữ

							<input type="radio" name="gioitinh" value="nam" <?php if ( $row_dulieu['gioitinh']=="nam") echo "checked";?> >Nam

							<input type="radio" name="gioitinh" value="khac" <?php if ($row_dulieu['gioitinh']=="khac") echo "checked";?> >Khác 
							
							<br>						
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1" for="email">Email:</label>

						<div class="col-sm-6 ">
							<input type="email" class="form-control" id="email" placeholder="email" name="email"  value="<?php echo $row_dulieu['email'];  ?>">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1" >chức vụ</label>
						<div class="col-sm-6 ">
							<input type="text" class="form-control" placeholder="chức vụ" name="chucvu"  value="<?php echo $row_dulieu['chucvu'];  ?>">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1">địa chỉ</label>
						<div class="col-sm-6 ">
							<input type="text" class="form-control" placeholder="địa chỉ" name="diachi"  value="<?php echo $row_dulieu['diachi'];  ?>">
						</div>
					</div>

					<input class="form-control btn-success" name="btnsua" value="Sửa" type="submit"></input>
					<input  class="form-control btn-danger" name="btnhuy" type="reset" value="NHập lại"></input>
				</form>

			</div>
		</div>
	</div>
	




</body>
</html>