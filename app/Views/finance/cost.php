<?= $this->extend('templates/admin'); ?>
<?= $this->section('title'); ?>
sipak | Cost
<?= $this->endSection(); ?>
<?= $this->section('titlePage'); ?>
Cost
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<section class="section">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-info rounded-pill btn-sm " data-bs-toggle="modal" data-bs-target="#printCost" data-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Print Data Laba"><i class="bi bi-printer"></i></button>
            <button type="button" style="margin-right:5px;" class="btn btn-success rounded-pill btn-sm " data-bs-toggle="modal" data-bs-target="#excelExport" data-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Export Excel"><i class="bi bi-file-earmark-excel-fill"></i></button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table1">
                    <thead class="table-primary" style="text-align: center;">
                        <tr>
                            <th>Waktu</th>
                            <th>Berita Acara</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;">
                        <?php
                        function Rupiah($angka)
                        {
                            $hasil = "Rp " . number_format($angka, 2, ',', '.');
                            return $hasil;
                        }
                        foreach ($dataCost as $value) :
                        ?>
                            <tr>
                                <td><?= $value['cost_time'] ?></td>
                                <td><?= $value['berita_acara'] ?></td>
                                <td><?= Rupiah($value['nominal_cost']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>
<?= $this->include('finance/costFolder/modalPrint'); ?>
<?= $this->include('finance/costFolder/excelExport'); ?>
<?= $this->endSection(); ?>