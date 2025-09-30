<?= $this->extend('shared/layout') ?>

<?= $this->section('content') ?>
<main class="app-main">
    <div class="app-content">
        <div class="container">
            <div class="row g-4 justify-content-center">

                <div class="col-md-4">
                    <a href="<?= base_url("recruitment/index"); ?>" style="text-decoration: none;">
                        <div class="card gradient-card text-center text-white p-3"
                            style="background: linear-gradient(135deg, #800080, #7030a0);">
                            <div class="card-body d-flex justify-content-center align-items-center" style="height:120px;">
                                <i class="fas fa-user-plus" style="font-size: 65px;"></i>
                            </div>
                            <div class="card-footer fw-bold text-warning">RECRUITMENT</div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="<?= base_url("recruitment/index"); ?>" style="text-decoration: none;">
                        <div class="card gradient-card text-center text-white p-3"
                            style="background: linear-gradient(135deg, #45083a, #880fb3);">
                            <div class="card-body d-flex justify-content-center align-items-center" style="height:120px;">
                                <i class="fas fa-handshake" style="font-size: 65px;"></i>
                            </div>
                            <div class="card-footer fw-bold text-warning">ONBOARDING</div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="<?= base_url("recruitment/index"); ?>" style="text-decoration: none;">
                        <div class="card gradient-card text-center text-white p-3"
                            style="background: linear-gradient(135deg, #7030a0, #800080);">
                            <div class="card-body d-flex justify-content-center align-items-center" style="height:120px;">
                                <i class="fas fa-id-badge" style="font-size: 65px;"></i>
                            </div>
                            <div class="card-footer fw-bold text-warning">EMPLOYEE INFO</div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="<?= base_url("recruitment/index"); ?>" style="text-decoration: none;">
                        <div class="card gradient-card text-center text-white p-3"
                            style="background: linear-gradient(135deg, #880fb3, #7030a0);">
                            <div class="card-body d-flex justify-content-center align-items-center" style="height:120px;">
                                <i class="fas fa-money-bill-wave" style="font-size: 65px;"></i>
                            </div>
                            <div class="card-footer fw-bold text-warning">PAYROLL</div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="<?= base_url("recruitment/index"); ?>" style="text-decoration: none;">
                        <div class="card gradient-card text-center text-white p-3"
                            style="background: linear-gradient(135deg, #7030a0, #45083a);">
                            <div class="card-body d-flex justify-content-center align-items-center" style="height:120px;">
                                <i class="fas fa-clock" style="font-size: 65px;"></i>
                            </div>
                            <div class="card-footer fw-bold text-warning">TIME SHEET ATTENDANCE</div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="<?= base_url("recruitment/index"); ?>" style="text-decoration: none;">
                        <div class="card gradient-card text-center text-white p-3"
                            style="background: linear-gradient(135deg, #45083a, #880fb3);">
                            <div class="card-body d-flex justify-content-center align-items-center" style="height:120px;">
                                <i class="fas fa-chart-line" style="font-size: 65px;"></i>
                            </div>
                            <div class="card-footer fw-bold text-warning">PERFORMANCE</div>
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </div>
</main>

<style>
    .gradient-card {
        border-radius: 16px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .gradient-card:hover {
        transform: translateY(-6px) scale(1.03);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.3);
    }

    .gradient-card i {
        color: #fff;
        transition: transform 0.3s ease;
    }

    .gradient-card:hover i {
        transform: scale(1.2) rotate(10deg);
    }

    .card-footer {
        font-size: 25px;
        background: rgba(0, 0, 0, 0.25);
        border-radius: 50px;
        width: fit-content;
        margin: 5px auto;
        padding: 5px 15px;
    }
</style>

<?= $this->endSection() ?>
<?= $this->section('script'); ?>
<script>
    $(document).ready(function() {
        // Optional JS for cards
    });
</script>
<?= $this->endSection() ?>