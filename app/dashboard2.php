<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="card col-md-12 mx-auto mt-3">
        <div class="card-body">
          <div class="row">
            <div class="col-md-8">
              <form method="POST" action="" class="form-inline">
                <label for="date2">Tampilkan transaksi bulan </label>
                <div class="col-sm-6">

                  <select class="form-control mr-2" name="bulan">
                    <?php

                    $b = mysqli_query($koneksi, "SELECT DISTINCT date_format(tanggal, '%M %Y') as month_year FROM data_pot order by tanggal desc");

                    while ($data = $b->fetch_array()) {
                      // echo "<option>$data[0]</option>";
                      echo '<option value="' . $data[0] . '">' . $data[0] . '</option>';
                    }
                    ?>
                  </select>
                  <button type="submit" name="submit" class="btn btn-primary">Tampilkan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover ">
            <thead>
              <tr>
                <th>Date</th>
                <th><img src="dist/img/a.png" alt="srcl" height="30" width="30"></th>
                <th><img src="dist/img/b.png" alt="srcl" eight="30" width="30"></th>
                <th><img src="dist/img/c.png" alt="srcl" eight="30" width="30"></th>
                <th><img src="dist/img/d.png" alt="srcl" eight="30" width="30"></th>
                <th><img src="dist/img/e.png" alt="srcl" eight="30" width="30"></th>
                <th><img src="dist/img/f.png" alt="srcl" eight="30" width="30"></th>
                <th><img src="dist/img/g.png" alt="srcl" eight="30" width="30"></th>
                <th><img src="dist/img/h.png" alt="srcl" eight="30" width="30"></th>
                <th><img src="dist/img/i.png" alt="srcl" eight="30" width="30"></th>
                <th><img src="dist/img/j.png" alt="srcl" eight="30" width="30"></th>
                <th>Keterangan</th>

              </tr>
            </thead>
            <tbody>
              <?php

              if (isset($_POST['submit'])) {
                $bulan = $_POST['bulan'];
                if (!empty($bulan)) {
                  $q = mysqli_query($koneksi, " SELECT day(tanggal) as tanggal,cut_up,take_out,CBD,CSE,work_b,IOS,work_12,ACDD,baking,start_up,keterangan
                    FROM data_pot where day(tanggal) >= 1 and day(tanggal) <= 15 and date_format(tanggal, '%M %Y')='$bulan' order by tanggal asc");
                }
              } else {
                $bulan = date('F Y');
                $q = mysqli_query($koneksi, " SELECT day(tanggal) as tanggal,cut_up,take_out,CBD,CSE,work_b,IOS,work_12,ACDD,baking,start_up,keterangan
                  FROM data_pot where day(tanggal) >= 1 and day(tanggal) <= 15 and date_format(tanggal, '%M %Y')='$bulan' order by tanggal asc");
              }

              while ($pot = mysqli_fetch_array($q)) {
              ?>
              <tr>
                <td><?php echo $pot['tanggal']; ?></td>
                <td><?php echo $pot['cut_up']; ?></td>
                <td><?php echo $pot['take_out']; ?></td>
                <td><?php echo $pot['CBD']; ?></td>
                <td><?php echo $pot['CSE']; ?></td>
                <td><?php echo $pot['work_b']; ?></td>
                <td><?php echo $pot['IOS']; ?></td>
                <td><?php echo $pot['work_12']; ?></td>
                <td><?php echo $pot['ACDD']; ?></td>
                <td><?php echo $pot['baking']; ?></td>
                <td><?php echo $pot['start_up']; ?></td>
                <td><?php echo $pot['keterangan']; ?></td>
              </tr>
              <?php } ?>
          </table>
        </div>

        <div class="card col-md-12 mx-auto mt-3">
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>

      <!-- /.card -->
      <div class="col-md-6">
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover ">
            <thead>
              <tr>
                <th>Date</th>
                <th><img src="dist/img/a.png" alt="srcl" height="30" width="30"></th>
                <th><img src="dist/img/b.png" alt="srcl" eight="30" width="30"></th>
                <th><img src="dist/img/c.png" alt="srcl" eight="30" width="30"></th>
                <th><img src="dist/img/d.png" alt="srcl" eight="30" width="30"></th>
                <th><img src="dist/img/e.png" alt="srcl" eight="30" width="30"></th>
                <th><img src="dist/img/f.png" alt="srcl" eight="30" width="30"></th>
                <th><img src="dist/img/g.png" alt="srcl" eight="30" width="30"></th>
                <th><img src="dist/img/h.png" alt="srcl" eight="30" width="30"></th>
                <th><img src="dist/img/i.png" alt="srcl" eight="30" width="30"></th>
                <th><img src="dist/img/j.png" alt="srcl" eight="30" width="30"></th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <?php

              if (isset($_POST['submit'])) {
                $bulan = $_POST['bulan'];
                if (!empty($bulan)) {
                  $q = mysqli_query($koneksi, " SELECT day(tanggal) as tanggal,cut_up,take_out,CBD,CSE,work_b,IOS,work_12,ACDD,baking,start_up,keterangan
                    FROM data_pot where day(tanggal) >= 16 and day(tanggal) <= 31 and date_format(tanggal, '%M %Y')='$bulan' order by tanggal asc");
                }
              } else {
                $bulan = date('F Y');
                $q = mysqli_query($koneksi, " SELECT day(tanggal) as tanggal,cut_up,take_out,CBD,CSE,work_b,IOS,work_12,ACDD,baking,start_up,keterangan
                  FROM data_pot where day(tanggal) >= 16 and day(tanggal) <= 31 and date_format(tanggal, '%M %Y')='$bulan' order by tanggal asc");
              }

              while ($pot = mysqli_fetch_array($q)) {
              ?>
              <tr>
                <td><?php echo $pot['tanggal']; ?></td>
                <td><?php echo $pot['cut_up']; ?></td>
                <td><?php echo $pot['take_out']; ?></td>
                <td><?php echo $pot['CBD']; ?></td>
                <td><?php echo $pot['CSE']; ?></td>
                <td><?php echo $pot['work_b']; ?></td>
                <td><?php echo $pot['IOS']; ?></td>
                <td><?php echo $pot['work_12']; ?></td>
                <td><?php echo $pot['ACDD']; ?></td>
                <td><?php echo $pot['baking']; ?></td>
                <td><?php echo $pot['start_up']; ?></td>
                <td><?php echo $pot['keterangan']; ?></td>
              </tr>
              <?php } ?>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>

    <!-- /.card -->
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>