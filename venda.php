<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de venda</title>
    <link rel="stylesheet" href="./recursos/venda.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="imagex/png"
    href="https://cdn-icons-png.flaticon.com/512/5607/5607725.png">


</head>
<body>
<div class="container">
<h3>tela de venda</h3>


<div class="row">
<div class="col-md-8">
    <form action="" method="POST">
        <div class="row">
            
            <div class="form-group col-">
                <label>PRODUTO</label>
                <select class="form-control">
                    <option> MOUSE </option>
                    <option> TECLADO </option>
                    <option> FONE </option>
                    
                </select>
                
            </div>

            <div class="form-group col-">
                <label> QUANTIDADE </label>
                <input type="number" required class="form-control">

            </div>

            <div class="col-md">
                <button type="submit" class="btn btn-primary"  style="margin-top: 32px;">


                    <i class="fa-solid fa-plus"></i>
                </button>




            </div>

            <table class="table mt-4 table-striped table-bordered table-sm">
                <thead>



                        <th class="col-6"> PRODUTO</th>
                        <th  class="col-1" > Qtd</td>
                        <th  class="col-2" > VALOR </th>
                        <th  class="col-2" > TOTAL</th>
                        <th  class="col-1"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        vvv   > OPÇÕES</th>
                </thead>

                <tbody>
                    <tr>
                        <td> MOUSE </td>
                        <td> 2 </td>
                        <td> 20 </td>
                        <td> 40 </td>
                        <td> <i class="fa-solid fa-minus" style="color:red"></i></td>

                    </tr>
                    <tr>
                        <td> Compultador </td>
                        <td> 2 </td>
                        <td> 20 </td>
                        <td> 40 </td>
                        <td> <a href=""> <i class="fa-solid fa-minus" style="color:red"></a></td>

                    </tr>






                </tbody>



            </table>

        </div>

            
        </form>
        
    </div>
    <div class="col-md-4">
    <h3> Resumo da venda</h3>


    <form action="" method="post">
        <div class="form-group">
            <label> Cliente </label>
            <select class="form-control">
             <option> João </option>
             <option> Aline </option> 
            </select>

<div class="form-goup">
    <label> Funcionario </label>
    <select class="form-control">
        <option> Juliano </option>
        <option> Tatiane </option>
    </select>

</div>

<div class="form-group">
    <label> Quantidade total </label>
    <input type="text" class="form-control" value="2" readonly>
</div>

<div class="form-group">
    <label> Valor Total</label>
    <input type="text" class="form-control" value="40" readonly>

</div>

<div class="form-group">
    <label> Observação </label>
    <textarea class="form-control"></textarea>
</div>

<a  href="" class="btn btn-success"><i class="fa-solid fa-cart-shopping"></i> Finalizar </a>
<A href="" class="btn btn-outline-danger"> <i class=></i> Cancelar </a>
</form>

</div>
</body>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
</body>
</html>