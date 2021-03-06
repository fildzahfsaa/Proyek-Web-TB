      <!-- page content -->
      <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tabel Data Barang Keluar</h3>
              </div>

              <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
              <form action="" method="post">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for..." name="keyword">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>
          
                <?php if (empty($keluar)) :?>
                <div class="alert alert-danger" role="alert">
                    Data Barang keluar tidak ditemukan
                </div>
                <?php endif; ?>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Tanggal Barang Keluar</th>
                          <th>Detail</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($keluar as $klr) : ?>
                              <tr>
                                <td><?php echo $klr->tanggal_penjualan ?></td>
                                <td>
                                    <a href="<?= base_url();?>penjual/detailKeluar/<?php echo $klr->tanggal_penjualan ?>" class="btn btn-outline-success btn-round">Detail</a>
                                </td>
                              </tr>
                            <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>