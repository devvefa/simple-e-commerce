
<div class="container mt-4">

    <div class="row">
        <?php



        if( count($_SESSION['cart'])===0)
        {
            ?>
                <div class="col-md-8">
                    <div class="alert alert-warning">
                        Sepetinizde ürün yok.
                    </div>
                </div>
        <?php }else{?>


        <div class="col-md-8">

            <div class="page-header">
                <div class="float-left">
                    <h4><?= "Sepette ".count($_SESSION["cart"])." Ürün "?></h4>
                </div>
                <div class="float-right">
                    <a href="index?action=empty"><h4 class="text-right text-danger mr-2">hepsini sil</h4></a>
                </div>
                <div class="clearfix"></div>
            </div>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>resim</th>
                    <th>Ürün Adı</th>
                    <th>Fiyat</th>
                    <th>Miktar</th>
                    <th>Toplam</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                <?php
                foreach( $_SESSION["cart"] as $k => $value){
                    $data=db::getById($value['id']);

                    ?>

                <tr>
                    <td>
                        <img src="assets/img/<?= $data['img'] ?>" width="80" alt="">
                    </td>
                    <td> <?= $data['name'] ?> </td>
                    <td><?= $data['price'].$data['currency'] ?></td>
                    <td> <?= $_SESSION["cart"] [$k]['quantity'] ?></td>
                    <td><?php  $t=$_SESSION["cart"] [$k]['quantity']*$data['price'];
                        $total+= $_SESSION["cart"] [$k]['quantity']*$data['price'];echo $t .$data['currency']?></td>
                    <td>

                        <form action="index.php?action=remove"  method="post">
                            <input type="hidden" name="productid" value="<?= $data['id'] ?>">
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-times fa-fw"></i>
                            </button>
                        </form>
                    </td>
                </tr>

                <?php   }      ?>

                </tbody>
            </table>
        </div>

        <?php }?>
        <div class="col-md-3">
            <div class="text-left">
                <h4>Cart Summary</h4>
            </div>
            <table class="table">
                <tbody>
                <tr>
                    <th>Cart Total</th>
                    <td><?= $total ?></td>
                </tr>
                <tr>
                    <th>Shipping</th>
                    <th>Free</th>
                </tr>
                </tbody>
            </table>
            <div class="text-center">

                <a href="/checkout" class="btn btn-primary">
                    <i class="fa fa-arrow-circle-right fa-fw"></i> Checkout
                </a>
            </div>
        </div>
    </div>
</div>