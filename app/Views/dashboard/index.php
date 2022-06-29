<?= $this->extend('templates/admin'); ?>
<?= $this->section('title'); ?>
sipak | Dashboard
<?= $this->endSection(); ?>
<?= $this->section('titlePage'); ?>
Dashboard
<?= $this->endSection(); ?>


<link href="<?= base_url('assets/apex/styles.css'); ?>" rel="stylesheet" />
<style>
    #chart {
        max-width: 650px;
        margin: 35px auto;
    }
</style>

<?= $this->section('content'); ?>
<div class="col-12 col-lg-9">
    <div class="row">
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon purple">
                                <i class="iconly-boldShow"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Profile Views</h6>
                            <h6 class="font-extrabold mb-0">112.000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon blue">
                                <i class="iconly-boldProfile"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Followers</h6>
                            <h6 class="font-extrabold mb-0">183.000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon green">
                                <i class="iconly-boldAdd-User"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Following</h6>
                            <h6 class="font-extrabold mb-0">80.000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon red">
                                <i class="iconly-boldBookmark"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Saved Post</h6>
                            <h6 class="font-extrabold mb-0">112</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Profile Visit</h4>
                </div>
                <div class="card-body">
                    <div id="mychart"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h4>Profile Visit</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                    <use xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                </svg>
                                <h5 class="mb-0 ms-3">Europe</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <h5 class="mb-0">862</h5>
                        </div>
                        <div class="col-12">
                            <div id="chart-europe"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <svg class="bi text-success" width="32" height="32" fill="blue" style="width:10px">
                                    <use xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                </svg>
                                <h5 class="mb-0 ms-3">America</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <h5 class="mb-0">375</h5>
                        </div>
                        <div class="col-12">
                            <div id="chart-america"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <svg class="bi text-danger" width="32" height="32" fill="blue" style="width:10px">
                                    <use xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                </svg>
                                <h5 class="mb-0 ms-3">Indonesia</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <h5 class="mb-0">1025</h5>
                        </div>
                        <div class="col-12">
                            <div id="chart-indonesia"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h4>Latest Comments</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-lg">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Comment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/faces/5.jpg">
                                            </div>
                                            <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">Congratulations on your graduation!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/faces/2.jpg">
                                            </div>
                                            <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">Wow amazing design! Can you make another tutorial for
                                            this design?</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12 col-lg-3">
    <div class="card">
        <div class="card-body py-4 px-5">
            <div class="d-flex align-items-center">
                <div class="avatar avatar-xl">
                    <img src="assets/images/faces/1.jpg" alt="Face 1">
                </div>
                <div class="ms-3 name">
                    <h5 class="font-bold">John Duck</h5>
                    <h6 class="text-muted mb-0">@johnducky</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Recent Messages</h4>
        </div>
        <div class="card-content pb-4">
            <div class="recent-message d-flex px-4 py-3">
                <div class="avatar avatar-lg">
                    <img src="assets/images/faces/4.jpg">
                </div>
                <div class="name ms-4">
                    <h5 class="mb-1">Hank Schrader</h5>
                    <h6 class="text-muted mb-0">@johnducky</h6>
                </div>
            </div>
            <div class="recent-message d-flex px-4 py-3">
                <div class="avatar avatar-lg">
                    <img src="assets/images/faces/5.jpg">
                </div>
                <div class="name ms-4">
                    <h5 class="mb-1">Dean Winchester</h5>
                    <h6 class="text-muted mb-0">@imdean</h6>
                </div>
            </div>
            <div class="recent-message d-flex px-4 py-3">
                <div class="avatar avatar-lg">
                    <img src="assets/images/faces/1.jpg">
                </div>
                <div class="name ms-4">
                    <h5 class="mb-1">John Dodol</h5>
                    <h6 class="text-muted mb-0">@dodoljohn</h6>
                </div>
            </div>
            <div class="px-4">
                <button class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>Start Conversation</button>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Visitors Profile</h4>
        </div>
        <div class="card-body">
            <div id="chart-visitors-profile"></div>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="<?= base_url('assets/apex/apexcharts.js') ?>"></script>
<script>
    $(document).ready(function() {
        getDataReport('2022')
    })

    function getDataReport(thn) {

        // $("#penjualan_charts").html("Loading...");
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('dashboard/getDataReport') ?>",
            data: {
                "tahun": thn
            },
            dataType: "json",
            async: true,
            cache: false,
            success: function(response) {
                chart.updateSeries([{
                    name: 'Penjualan',
                    data: response.penjualan
                }]);
                console.log(response)
            }
        });
    }

    var options = {
        series: [{
            name: 'Website Blog',
            type: 'column',
            data: []
        }],
        chart: {
            height: 350,
            type: 'bar',
        },
        plotOptions: {
            bar: {
                borderRadius: 4,
                horizontal: false,
            }
        },
        dataLabels: {
            enabled: false
        },
        yaxis: {
            labels: {
                formatter: function(value) {
                    // return value + " Rupiah";
                    return 'Rp  ' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                }
            },
        },
        xaxis: {
            categories: ['Jan ', 'Feb ', 'Mart ', 'Apr ', 'Mei ', 'Jun ', 'Jul ',
                'Agust ', 'Sept ', 'Okt ', 'Nov ', 'Des '
            ],
        }
    };

    var chart = new ApexCharts(document.querySelector("#mychart"), options);
    chart.render();
</script>

<?= $this->endSection(); ?>