<div class="container">
    <div class="row">
        <div class="offset-md-1 col-md-10">
            <form class="" action="save.php" method="get">
                <fieldset>
                    <legend>Preços de hospedagens</legend>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="empresa" class="col-form-label col-form-label-sm">Nome da empresa</label>
                                <input id="empresa" type="text" name="empresa" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="produto" class="col-form-label col-form-label-sm">Produto</label>
                                <input id="produto" type="text" name="produto" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="url" class="col-form-label col-form-label-sm">Link</label>
                                <input id="url" type="url" name="url" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="disco" class="col-form-label col-form-label-sm">Disco (GBs)</label>
                                <input id="disco" type="number" name="disco" min="1.5" step="0.5" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="ram" class="col-form-label col-form-label-sm">RAM (GBs)</label>
                                <input id="ram" type="number" step="0.01" name="ram" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="preco" class="col-form-label col-form-label-sm">Preço</label>
                                <input id="preco" type="number" step="0.01" name="preco" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="moeda" class="col-form-label col-form-label-sm">Moeda</label>
                                <select id="moeda" name="moeda" class="form-control form-control-sm">
                                    <option value="dolar">Dólares</option>
                                    <option value="euro">Euros</option>
                                    <option value="grivnia">Grívnias</option>
                                    <option value="real">Reais</option>
                                    <option value="rublo">Rublos</option>
                                    <option value="rupia-indonesia">Rupia Indonésia</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-sm">Registrar produto</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
            <?php
            $count=@count($produtos);
            if($count>0){
                require 'produtos.php';
            }
            ?>
        </div><!--md6-->
    </div>
</div>
</body>
</html>
