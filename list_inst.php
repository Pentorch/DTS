
		<center><h1>List Data Instruktur</h1></center><br>
		<?php  
        if ($_SESSION['level']=='administrator') {
        ?>

		<a href="?p=tambah_inst"> [+] Tambah Data Instruktur </a><br>
		<?php
    	}
    	?>
		<table id="example1" class="table table-hover table-bordere"><br>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Email</th>
					<th>Nomor Telpon</th>
					<th>Skema</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php 
				include 'koneksi.php';
				$data=mysqli_query($db, "SELECT * FROM skema,instruktur where instruktur.id_skema=skema.id order by instruktur.id DESC");
				$no=1;
				while ($row=mysqli_fetch_array($data)) {
				?>
					<tr>
						<td><?= $no; ?></td>
						<td><?=$row['nama'];?></td>
						<td><?=$row['jekel'];?></td>
						<td><?=$row['email'];?></td>
						<td><?=$row['notelpon'];?></td>
						<td><?=$row['nama_skema'];?></td>
						<td><?=$row['alamat'];?></td>
						<td>
							<a href="delete_inst.php?id=<?= $row['id']?>" onclick="return confirm( 'Apakah Anda yakin Menghapus Data Ini')" > <i class="fa fa-trash-o"></i> </a>

								||

							<a href="?p=edit_inst&id=<?= $row['id']?>" > <i class="fa fa-edit"></i> </a>
						</td>
					</tr>
				<?php 
				$no++;
				}
				?>
		</tbody>
		</table>