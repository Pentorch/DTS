
		<center><h1>List Data User Pengguna</h1></center><br>
		<a href="?p=tambah_user"> [+] Tambah Data User </a><br>
		<table id="example1" class="table table-hover table-bordere"><br>
			<thead>
				<tr>
					<th>No</th>
					<th>username</th>
					<th>Email</th>
					<th>level</th>
				</tr>
			</thead>

			<tbody>
				<?php 
				include 'koneksi.php';
				$data=mysqli_query($db, "SELECT * FROM user order by username DESC");
				$no=1;
				while ($row=mysqli_fetch_array($data)) {
				?>
					<tr>
						<td><?= $no; ?></td>
						<td><?=$row['username'];?></td>
						<td><?=$row['email'];?></td>
						<td><?=$row['level'];?></td>
						<td>
							<a href="delete_user.php?username=<?= $row['username']?>" onclick="return confirm( 'Apakah Anda yakin Menghapus Data Ini')" > <i class="fa fa-trash-o"></i> </a>

								||

							<a href="?p=edit_user&username=<?= $row['username']?>" > <i class="fa fa-edit"></i> </a>
						</td>
					</tr>
				<?php 
				$no++;
				}
				?>
		</tbody>
		</table>