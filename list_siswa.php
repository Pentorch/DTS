
		<center><h1>List Data Siswa</h1></center><br>
		<a href="?p=tambah_siswa"> [+] Tambah Data Siswa </a><br>
		<table id="example1" class="table table-hover table-bordere"><br>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Skema</th>
					<th>Umur</th>
					<th>Hobi</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php 
				include 'koneksi.php';
				$data=mysqli_query($db, "SELECT * FROM skema,siswa where siswa.id_skema=skema.id order by siswa.id DESC");
				$no=1;
				while ($row=mysqli_fetch_array($data)) {
				?>
					<tr>
						<td><?= $no; ?></td>
						<td><?=$row['nama'];?></td>
						<td><?=$row['jk'];?></td>
						<td><?=$row['nama_skema'];?></td>
						<td><?=$row['umur'];?></td>
						<td><?=$row['hobi'];?></td>
						<td><?=$row['alamat'];?></td>
						<td>
							<a href="delete_siswa.php?id=<?= $row['id']?>" onclick="return confirm( 'Apakah Anda yakin Menghapus Data Ini')" > <i class="fa fa-trash-o"></i> </a>

								||

							<a href="?p=edit_siswa&id=<?= $row['id']?>" > <i class="fa fa-edit"></i> </a>
						</td>
					</tr>
				<?php 
				$no++;
				}
				?>
		</tbody>
		</table>