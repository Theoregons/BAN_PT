<div class="card text-left">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-10 mt-2">
                <h2>Data Tabel Seleksi Mahasiswa</h2>
            </div>
            <div class="col-sm-2 mt-2">
                <button class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </div>
</div>

<?php
include "../config/database.php";

$query = mysqli_query($db, "SELECT * FROM tbl_seleksi_maba");

?>

<div class="card">
    <div class="card-body">
        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <!-- <div class="row">
				<div class="col-sm-12 col-md-6">
					<div class="dataTables_length" id="example_length">
						<label>Show <select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label>
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<div id="example_filter" class="dataTables_filter">
						<label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label>
					</div>
				</div>
			</div> -->
            <div class="row">
                <div class="col-sm-12">
                    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
                        <thead>
                            <tr role="row">
                                <th style="width: 118.2px;">Tahun Akademik </th>
                                <th style="width: 189.2px;">Daya Tampung </th>
                                <th style="width: 82.2px;">Jumlah Calon Pendaftar </th>
                                <th style="width: 40.2px;">Jumlah Calon lulus </th>
                                <th style="width: 87.2px;">Jumlah Maba Reguler </th>
                                <th style="width: 63.2px;">Jumlah Maba Transfer</th>
                                <th style="width: 63.2px;">Jumlah Mahasiswa Aktif Reguler </th>
                                <th style="width: 63.2px;">Jumlah Mahasiswa Aktif Transfer </th>
                                <th style="width: 40.2px;">Edit </th>
                                <th style="width: 40.2px;">Delete </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            while ($data = mysqli_fetch_array($query)) {
                            ?>

                                <tr role="row" class="odd" style="font-size: 14px;">
                                    <td>
                                        <?php echo $data["id_thajaran"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $data["daya_tampung"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $data["cama_pendaftar"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $data["cama_lolos"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $data["maba_reg"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $data["maba_transfer"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $data["mhs_reg"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $data["mhs_transfer"]; ?>
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                    <td>
                                        Delete
                                    </td>
                                </tr>

                            <?php } ?>

                        </tbody>


                        <!-- <tfoot>
						<tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
					</tfoot> -->
                    </table>
                </div>
            </div>
            <!-- <div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div> -->
        </div>
    </div>
</div>