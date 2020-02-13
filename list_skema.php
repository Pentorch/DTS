<center><h1>List Data Skema</h1></center><br>
		<a href="?p=tambah_skema"> [+] Tambah Data Skema </a><br>
		<table id="example1" class="table table-hover table-bordere"><br>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Skema</th>
					<th>Keterangan</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
			<?php 
			include 'koneksi.php';
			$data=mysqli_query($db, "SELECT * FROM skema");
			$no=1;
			while ($row=mysqli_fetch_array($data)) {
			?>
				<tr>
					<td><?= $no; ?></td>
					<td><?=$row['nama_skema'];?></td>
					<td><?=$row['keterangan'];?></td>
					<td>
						<a href="delete_skema.php?id=<?= $row['id']?>" onclick="return confirm( 'Apakah Anda yakin Menghapus Data Ini')" > <i class="fa fa-trash-o"></i> </a>

							||

						<a href="?p=edit_skema&id=<?= $row['id']?>" > <i class="fa fa-edit"></i> </a>
					</td>
			</tr>
			<?php 
			$no++;
			}
			?>
			</tbody>
		</table>
