<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
    <h2 class="tit6 t-center">
        Reservation
    </h2>
</section>


<!-- Reservation -->
<section class="section-reservation bg1-pattern p-t-100 p-b-113">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-b-30">
                <div class="t-center">
                    <span class="tit2 t-center">
                        Reservation
                    </span>

                    <h3 class="tit3 t-center m-b-35 m-t-2">
                        Registrasi Pelanggan
                    </h3>
                    <?php if ($this->session->userdata('success')) {
                        echo '<div class="alert alert-success" role="alert">';
                        echo $this->session->userdata('success');
                        echo '</div>';
                    } ?>
                    <?php if ($this->session->userdata('error')) {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo $this->session->userdata('success');
                        echo '</div>';
                    } ?>
                </div>
                <form action="<?= base_url('pelanggan/clogin/registrasi') ?>" method="POST" class="wrap-form-reservation size22 m-l-r-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Name -->
                            <span class="txt9">
                                Nama Pelanggan
                            </span>
                            <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" value="<?= set_value('nama') ?>" name="nama" placeholder="Masukkan Username Anda">
                                <?= form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Phone -->
                            <span class="txt9">
                                Jenis Kelamin
                            </span>

                            <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <select name="jk" class="bo-rad-10 sizefull txt10 p-l-20">
                                    <option value="">---Jenis Kelamin---</option>
                                    <option value="P">Perempuan</option>
                                    <option value="L">Laki-Laki</option>
                                </select>
                                <?= form_error('jk', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Name -->
                            <span class="txt9">
                                Alamat
                            </span>
                            <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= set_value('alamat') ?>" type="text" name="alamat" placeholder="Masukkan Username Anda">
                                <?= form_error('alamat', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Phone -->
                            <span class="txt9">
                                No Telepon
                            </span>

                            <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= set_value('no_hp') ?>" type="number" name="no_hp" placeholder="Masukkan Password Anda">
                                <?= form_error('no_hp', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Name -->
                            <span class="txt9">
                                Username
                            </span>
                            <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= set_value('username') ?>" type="text" name="username" placeholder="Masukkan Username Anda">
                                <?= form_error('username', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Phone -->
                            <span class="txt9">
                                Password
                            </span>

                            <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" value="<?= set_value('password') ?>" type="text" name="password" placeholder="Masukkan Password Anda">
                                <?= form_error('password', '<small class="form-text text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small> Apakah Anda Sudah memiliki akun? <a href="<?= base_url('pelanggan/clogin') ?>">Login Disini!</a></small>
                        </div>
                    </div>
                    <div class="wrap-btn-booking flex-c-m m-t-6">
                        <!-- Button3 -->
                        <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>