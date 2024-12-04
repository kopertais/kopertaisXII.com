<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3><?php echo $title; ?></h3>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
        <?php echo $this->session->flashdata('msg'); ?>
        <?php if (validation_errors()) { ?>
            <div class="alert alert-danger">
                <a class="close" data-dismiss="alert">x</a>
                <strong><?php echo strip_tags(validation_errors()); ?></strong>
            </div>
        <?php } ?>
        <!-- Default box -->
        <div class="box box-primary">
            <div class="box-body">
                <div class="table-responsive">
                    <table class=" table table-bordered table-hover" id="table-id" style="font-size:14px;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Nama File</th>
                                <th>Upload File</th>
                                <th>Tgl. Upload</th>
                                <th>Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($lap_bulanan_saya as $lbs) : ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $lbs['nama']; ?></td>
                                    <td><?php echo $lbs['nama_file']; ?></td>
                                    <td><?php echo $lbs['file_upload']; ?></td>
                                    <td><?php echo format_indo($lbs['date_upload']); ?></td>
                                    <td><a href="<?php echo base_url('admin/file_download_bulanan/' . $lbs['id']); ?>" class="btn btn-success btn-sm btn-block">Download</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</div>