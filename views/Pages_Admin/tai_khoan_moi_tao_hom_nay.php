<div class="card card-primary mx-1 mt-1">
	<div class="card-header">
		<div class="float-left">
			<ol class="thanh-dia-chi">
				<li><a class="vang" href="bang-dieu-khien"><i class="fas fa-home"></i> Trang Chủ</a></li>
				<li><span><i class="fal fa-chevron-right"></i></span></li>
				<li>Tài Khoản Mới Tạo</li>
			</ol>
		</div>
	</div>
	<div class="card-body px-0 py-0">
		<div class="table-responsive-sm">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Tên Đăng Nhập</th>
						<th scope="col">Tên Hiển Thị</th>
						<th scope="col">Mật Khẩu</th>
						<th scope="col">SĐT</th>
						<th scope="col">Mail</th>
						<th scope="col">Loại Tài Khoản</th>
						<th scope="col">Khóa</th>
					</tr>
				</thead>
				<tbody id="GetData">
					<?php $num = 1; foreach($data['danhsach'] as $value){ ?>
					<tr class="tr-<?php echo $value['user_name']; ?>">
						<th scope="row"><?php echo $num; ?></th>
						<td><?php echo $value['user_name']; ?></td>
						<td><?php echo $value['display_name']; ?></td>
						<td><?php echo $value['pass_word']; ?></td>
						<td><?php echo $value['phone']; ?></td>
						<td><?php echo $value['email']; ?></td>
						<td>
							<?php
								if($value['type_account'] == 0)
									echo '<span class="badge badge-warning">Quản Trị Viên</span>';
								else
									echo '<span class="badge badge-primary">Thành Viên</span>';
							?>
						</td>
						<td class="text-center">
							<?php if($value['lock_account'] == 1 && $value['user_name'] != "admin"){ ?>
								<button class="btn" onclick="Confirm_Lock('<?php echo $value['user_name']; ?>')"><i class="fas fa-unlock-alt t-<?php echo $value['user_name']; ?>" style="color: red;"></i></button>
							<?php } ?>
							<?php if($value['lock_account'] == 0 && $value['user_name'] != "admin"){ ?>
								<button class="btn" onclick="Confirm_Lock('<?php echo $value['user_name']; ?>')"><i class="fas fa-lock-alt t-<?php echo $value['user_name']; ?>" style="color: #007bff;"></i></button>
							<?php } ?>
							<?php if($value['user_name'] == "admin"){ ?>
							<button class="btn" onclick="Alert('Bạn không thể <b>khóa</b> tài khoản này!')"><i class="fas fa-unlock-alt" style="color: red;"></i></button>
							<?php } ?>
						</td>
					</tr>
					<?php $num++; } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
    $("title").text("Trang Quản Trị | Tài Khoản Bị Khóa"); 
</script>