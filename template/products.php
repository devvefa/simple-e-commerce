
<div class="box">
    <div class="container">
        <div class="row">

            <?php
           foreach($products as $product){


                ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="box-part text-center">

                        <div class="card mb-2">
                            <img class="card-img-top" src="assets/img/<?= $product->getImg() ?>" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product->getName(); ?></h5>
                                <strong class="text-success" > <?= $product->getPrice(); ?>
                                    <?= $product->getCurrency()==='TRY'? '₺':'$'; ?>
                                </strong>
                            </div>
                            <div class="card-footer text-center">



                                <form  action="index.php?action=add" method="POST" style="display: inline;">
                                    <input type="hidden" name="productid" value=" <?= $product->getProductId(); ?> "

                                    <label for="adet">Adet</label>
                                    <select class="form-select" name="quantity" id="adet" >
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary btn-sm">Add to Cart</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
