<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>danh sach</title>
</head>
<body>
	

	<?php 
	include('connect.php');
	include('master.php');
	?>

	<div class=" text-center">
		<form method="GET">
			<h3 style="color: green;">Sắp xếp</h3>
			<button type="button" class="btn btn-default "><a href="sapxep.php?theoten" name="theoten">Theo tên</a></button>
			<button type="button" class="btn btn-default "><a href="sapxep.php?theotuoi"  name="theotuoi">Theo tuổi</a></button>			
		</form>
	</div>

	<div class="container">
		<div class="row">
			<h2 class="text-center" style="color: blue;">Danh sách nhân viên</h2>
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Họ và tên</th>
						<th>Ngay sinh</th>
						<th>Giới tính</th>
						<th>Email</th>
						<th>Chức vụ</th>
						<th>Địa chỉ</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php 
						$row_sql="SELECT * FROM nhanvien ";
						$row_thuchien=mysqli_query($conn,$row_sql);
						while($dulieu =mysqli_fetch_array($row_thuchien)){
							?>
							<td><?php echo $dulieu['id']; ?></td>
							<td><?php echo $dulieu['ten']; ?> </td>
							<td><?php echo $dulieu['ngaysinh']; ?></td>
							<td><?php echo $dulieu['gioitinh']; ?></td>
							<td><?php echo $dulieu['email']; ?></td>
							<td><?php echo $dulieu['chucvu']; ?></td>
							<td><?php echo $dulieu['diachi']; ?></td>	
							<td>
								<a onclick=" return confirm('bạn có chắc muốn sửa không')" href="sua.php?id=<?php echo $dulieu['id'] ?>" title="sửa"><img src="images/edit.png" width="25px">
								</a>
							</td>
							<td>
								<a onclick=" return confirm('bạn có chắc muốn xóa không') " href="xoa.php?id=<?php echo $dulieu['id']; ?>" ><img src='images/delete.jpg' width='25px' >
								</a>
							</td>
						</tr>					
					<?php 	} ?>
				</tbody>
			</table>
		</div>
	</div>


</body>
</html>