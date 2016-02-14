<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html"/>
    <meta name="generator" content="Bootply">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<body>
<header class="navbar navbar-default" role="banner">
        <div class="container">
                <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        <a href="index.php" class="navbar-brand">Home</a>
                    </div>
                <nav class="collapse navbar-collapse" role="navigation">
                        <ul class="nav navbar-nav">
                                <li>
                                        <a href="#">Lista de Clientes</a>
                                    </li>
                            </ul>
                    </nav>
            </div>
    </header>

<?php

include_once('_app/config.inc.php');

$cliente1 = new Cliente('Jose Santos','jose@gmail.com','(61) 8832-1299','Qr 122, DF','00183489913');

$cliente2 = new Cliente('Manuel Silva','manuel@gmail.com','(61) 3321-1299','RUA MARTINS, RJ','02183431213');

$cliente3 = new Cliente('Flavia Santos','flavinha@gmail.com','(61) 3321-2211','QNO 13, DF','00183489913');

$cliente4 = new Cliente('Antonio Freitas','antoniof@gmail.com','(11) 3322-1299','QND 32, DF','00183329913');

$cliente5 = new Cliente('Monica Gomes','monicao@hotmail.com','(61) 6653-3321','Recanto 32, DF','00183489122');

$cliente6 = new Cliente('Lidiane Moura','Lidi@gmail.com','(61) 3321-1299','SQWS 409, DF','12283489922');

$cliente7 = new Cliente('Paulo Silva','paulos@gmail.com','(61) 2133-1299','QNM 32, DF','32183489433');

$cliente8 = new Cliente('Felipe Chaves','fchaves@gmail.com','(11) 8832-5231','SAMAMBAIA N 322, DF','33343489211');

$cliente9 = new Cliente('Diogo Santos','diogosantos@gmail.com','(11) 1233-3322','SQLW 409, DF','33283321211');

$cliente10 = new Cliente('Patricia Lima','pati@gmail.com','(61) 8832-1299','QNO 12, DF','33283329211');

$ArrClientes = array($cliente1, $cliente2, $cliente3, $cliente4, $cliente5, $cliente6, $cliente7, $cliente8, $cliente9, $cliente10);


$ord = filter_input(INPUT_GET, 'ordena');
$ordena = (!empty($ord) ? $ord : 'asc');

if($ordena == 'asc'):
    arsort($ArrClientes);

else:
    sort($ArrClientes);

endif;
$usuarios =  new ArrayObject($ArrClientes);

?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="panel">
                    <div class="panel-body">

                        <div class="panel-group">
                            <div class="panel-heading">

                                <a href="index.php?ordena=desc" title="Valor" class="btn btn-sm btn-warning pull-right">Ordem crescente </a>
                                <a href="index.php?ordena=asc" title="Valor" class="btn btn-sm btn-sm btn-success pull-right">Ordem decrescente </a>


                                <table class="table table-bordered">
                                    <thead>
                                        <tr>

                                            <th><a href="#" class="blue"><i class="glyphicon glyphicon-user"> Clientes</i></a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        foreach($usuarios as $keys => $values):
                                    ?>
                                        <tr>
                                            <td>
                                                <a href="#<?php  echo $keys; ?>"  data-toggle="collapse"><?php echo $values->getNome(); ?></a>
                                                <div id="<?php  echo $keys; ?>" class="collapse">
                                                    <hr>
                                                    <p><b>Cpf: </b><?php  echo $values->getCpf(); ?></p>
                                                    <p><b>Email: </b><?php echo  $values->getEmail(); ?></p>
                                                    <p><b>Telefone: </b><?php echo  $values->getTelefone(); ?></p>
                                                    <p><b>Endereco: </b><?php echo  $values->getEndereco(); ?></p>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php

                                        endforeach;
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
