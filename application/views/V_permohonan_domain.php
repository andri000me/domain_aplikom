<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Permohonan Domain</h1>

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data pemohon domain berhasil
            <strong> <?php echo $this->session->flashdata('flash'); ?> </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>SKPD</th>
                            <th>Nama Domain</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach ($domain as $d) : ?>
                            <tr>
                                <td> <?php echo $no++; ?> </td>
                                <td> <?php echo $d->nip; ?> </td>
                                <td> <?php echo $d->nama; ?> </td>
                                <td> <?php echo $d->skpd; ?> </td>
                                <td> <?php echo $d->nama_domain; ?> </td>
                                <td> <?php echo $d->log; ?> </td>
                                <td>
                                    <a href="<?= base_url(); ?>C_tindakan_domain/detail/<?= $d->id_domain; ?>" class="btn btn-info btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
                                        <span class="text">Tindakan</span>
                                    </a>

                                    <a href="" class="btn btn-danger btn-icon-split btn-sm" data-toggle="modal" data-target="#modalHapus_<?= $d->id_domain; ?>">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


<!--Modal Hapus-->
<?php if ($domain) : ?>
    <?php foreach ($domain as $d) : ?>
        <div class="modal fade" id="modalHapus_<?= $d->id_domain; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Anda yakin ingin menghapus ini ?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-danger" href="<?= base_url(); ?>C_hapus_domain/hapus/<?= $d->id_domain; ?>">Hapus</a>
                    </div>
                    <!-- <?php echo base_url() . 'C_hapus_domain/hapus' / $d->id_domain ?> -->
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
</div>