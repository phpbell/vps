<?php
print '<hr><h5 class="text-center">';
if($count==1){
    print $count.' produto registrado';
}else{
    print $count.' produtos registrados';
}
print '</h5>';
?>
<table id="produtos" class="table table-hover table-sm">
    <thead>
        <tr>
            <th>ID</th>
            <th>Empresa</th>
            <th>Produto</th>
            <th>Disco (NWM)</th>
            <th>RAM</th>
            <th>Preço</th>
            <th>Moeda</th>
            <th>R$</th>
            <th>R$/hora</th>
            <th>Criado em</th>
        </tr>
    </thead>
    <tbody>
        <?php
        date_default_timezone_set('America/Sao_Paulo');
        foreach($produtos as $produto){
            print '<tr>';
            print '<td>'.$produto['id'].'</td>';
            print '<td>'.$produto['empresa'].'</td>';
            if (filter_var($produto['url'], FILTER_VALIDATE_URL)) {
                $link='<a href="'.$produto['url'].'" target="_blank">';
                $link.=$produto['produto'].'</a>';
                print '<td>'.$link.'</td>';
            }else{
                print '<td>'.$produto['produto'].'</td>';
            }
            print '<td>'.$produto['disco'].'</td>';
            print '<td>'.$produto['ram'].'</td>';
            print '<td>'.$produto['preco'].'</td>';
            print '<td>'.$produto['moeda'].'</td>';
            if(isset($moedas[$produto['moeda']])){
                $precoEmReais=($produto['preco']*$moedas[$produto['moeda']]);
            }else{
                $precoEmReais=$produto['preco'];
            }
            //setlocale(LC_MONETARY, 'pt_BR');
            //$precoEmReais=money_format('%i', $precoEmReais) . "\n";
            $precoEmReais=number_format($precoEmReais,2);
            $precoEmReais=str_replace(",","",$precoEmReais);
            print '<td>'.$precoEmReais.'</td>';
            $precoEmReaisPorHora=$precoEmReais/720;
            print '<td>'.number_format($precoEmReaisPorHora,3).'</td>';
            print '<td>'.date('d/M/Y',$produto['created_at']).'</td>';
            print '</tr>';
        }
        ?>
    </tbody>
</table>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#produtos').DataTable( {
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
        },
        "order": [[ 8, "asc" ]]
    } );
} );
</script>
