<div class="table-header">
    <form role="form" class="form-inline form-table-search" method="post" action="<?php echo $action;?>">
        <a type="button" class="btn btn-success" data-toggle="modal" data-target="#dynamicModal" href="<?php echo site_url("products/add");?>">
            <span class="glyphicon glyphicon-plus"></span> Produto
        </a>
        <div class="form-group">
            <div class="input-group">
                <input name="term" type="search" class="form-control" id="inputProduto" placeholder="Nome ou código">
                <a href="" class="input-group-addon send-sarch">
                    <span class="glyphicon glyphicon-search"></span>
                </a>
            </div>
        </div>
        <div class="form-group">
            <select name="group" class="form-control select2" data-placeholder="Filtrar por grupo">
                <option value="0">Filtrar por grupo</option>
                <?php
                if(isset($groups)){
                    foreach($groups as $group){
                        echo "<option value='$group->idgroup'>$group->idgroup - $group->name</option>";
                    }
                }
                ?>
            </select>
        </div>
    </form>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th class="las-collum"></th>
            <th class="las-collum">
                Código
            </th>
            <th>
                Nome
            </th>
            <th class="las-collum">
                Quantidade
            </th>
            <th class="las-collum" colspan="2">
                Valor
            </th>
            <th class="las-collum">
                Grupo
            </th>
        </tr>
    </thead>
    <?php  include('tbodys/products.php')?>
</table>
