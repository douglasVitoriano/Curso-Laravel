@extends('property.master')

@section('content')
<div class="container my-3" >
    <h1>Listagem de Produtos</h1>

    <?php
    if (!empty($properties)) {

        echo "<table class='table table-striped table-hover'>";

        echo "<thead class='bg-primary text-white'>
                <td>Título</td>
                <td>Valor Lotação</td>
                <td>Valor Compra</td>
                <td>Ações</td>
             </thead>";

        foreach ($properties as $property) {

            $linkReadMode = url('/imoveis/' . $property->name);
            $linkEditItem = url('/imoveis/editar/' . $property->name);
            $linkRemoveItem = url('/imoveis/remover/' . $property->name);

            echo "<tr>
                <td>{$property->title}</td>
                <td>R$ " . number_format($property->rental_price, 2, ",", ".") . "</td>
                <td>R$ " . number_format($property->sale_price, 2, ",", ".") . "</td>
                <td><a href='{$linkReadMode}'>ver mais</a> | <a href='{$linkEditItem}'>editar</a> | <a href='{$linkRemoveItem}'>remover</a></td>
             </tr>";
        }

        echo "</table>";
    }
    ?>
</div>
@endsection

