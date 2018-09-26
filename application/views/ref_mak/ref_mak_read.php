<section class='content-header'>
    <h1>
        Mata Anggaran Kegiatan
    </h1>
    <ol class='breadcrumb'>
        <li><a href='dashboard'><i class='fa fa-dashboard'></i>Home</a></li>
        <li><a href='#'><i class='fa fa-navicon'></i>Manajemen Referensi</a></li>
        <li class='active'>Mata Anggaran Kegiatan</li>
    </ol>
</section> 

<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Detail Data</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                  <div class="box-body">
                    <dl class="dl-horizontal">
                      <dt>Kode</dt>
                      <dd><?php echo $makKode; ?></dd>
                    </dl>
                    <dl class="dl-horizontal">
                      <dt>Nama</dt>
                      <dd><?php echo $makNama; ?></dd>
                    </dl>
                    <dl class="dl-horizontal">
                      <dt>Biaya SBU</dt>
                      <dd><?php echo $makBiayaSbuId; ?></dd>
                    </dl>
                  </div>
                  <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo site_url('mak') ?>" class="btn btn-warning"><i class="fa fa-reply-all"></i> Kembali</a>
              </div>
          </div>
          </div><!-- /.row -->
        </section><!-- /.content -->