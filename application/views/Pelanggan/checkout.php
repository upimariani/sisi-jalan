<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url('asset/pato-master/') ?>images/bg-title-page-02.jpg);">
    <h2 class="tit6 t-center">
        Reservation
    </h2>
</section>


<!-- Reservation -->
<section class="section-reservation bg1-pattern p-t-100 p-b-113">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="t-center">
                    <span class="tit2 t-center">
                        Reservation
                    </span>

                    <h3 class="tit3 t-center m-b-35 m-t-2">
                        Book table
                    </h3>
                </div>
            </div>
            <div class="col-lg-8 p-b-30">
                <form action="<?= base_url('pelanggan/chome/checkout') ?>" method="POST" class="wrap-form-reservation size22 m-l-r-auto">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Name -->
                            <span class="txt9">
                                Atas Nama
                            </span>
                            <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Name -->
                            <span class="txt9">
                                No Telepon
                            </span>

                            <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Name -->
                            <span class="txt9">
                                Pilih Metode Pembayaran
                            </span>
                            <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                <select name="pembayaran" class="bo-rad-10 sizefull txt10 p-l-20">
                                    <option value="">---Metode Pembayaran---</option>
                                    <option value="1">Take In</option>
                                    <option value="2">Transfer Bank Cimb Niaga</option>
                                    <option value="3">Transfer Bank BRI</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-btn-booking flex-c-m m-t-6">
                        <!-- Button3 -->
                        <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                            Checkout
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-lg-4">
                <table class="table table-striped">
                    <tr>
                        <th>Cart</th>
                        <th>&nbsp;</th>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>
                            <h5>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></h5>
                        </td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="info-reservation flex-w p-t-80">
            <div class="size23 w-full-md p-t-40 p-r-30 p-r-0-md">
                <h4 class="txt5 m-b-18">
                    Reserve by Phone
                </h4>

                <p class="size25">
                    Donec quis euismod purus. Donec feugiat ligula rhoncus, varius nisl sed, tincidunt lectus.
                    <span class="txt25">Nulla vulputate</span>
                    , lectus vel volutpat efficitur, orci
                    <span class="txt25">lacus sodales</span>
                    sem, sit amet quam:
                    <span class="txt24">(001) 345 6889</span>
                </p>
            </div>

            <div class="size24 w-full-md p-t-40">
                <h4 class="txt5 m-b-18">
                    For Event Booking
                </h4>

                <p class="size26">
                    Donec feugiat ligula rhoncus:
                    <span class="txt24">(001) 345 6889</span>
                    , varius nisl sed, tinci-dunt lectus sodales sem.
                </p>
            </div>

        </div>
    </div>
</section>