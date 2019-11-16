<?php
include ("Includes/Header.php");
include ("Class/ClassCrud.php");
?>
    <div class="Content">
        <table class="TabelaCrud">
            <tr>
                <td>Nome</td>
                <td>Sexo</td>
                <td>Cidade</td>
                <td>Ações</td>
            </tr>
            <!-- Loop -->
            <?php
                $Crud = new ClassCrud();
                $BFetch = $Crud->selectDB("*", "cadastro", "",array());
                while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr>
                    <td><?php echo $Fetch['Nome']; ?></td>
                    <td><?php echo $Fetch['Sexo']; ?></td>
                    <td><?php echo $Fetch['Cidade']; ?></td>
                    <td>
                        <a href="<?php echo "visualizar.php?id={$Fetch['id']}"; ?>"><img src="Images/visualizar.png" alt="Visualizar"></a>
                        <a href="<?php echo "cadastro.php?id={$Fetch['id']}"; ?>"><img src="Images/editar.png" alt="Editar"></a>
                        <a class="Deletar" href="<?php echo "Controllers/ControllerDeletar.php?id={$Fetch['id']}"; ?>"><img src="Images/deletar.png" alt="Deletar"></a>
                    </td>
                </tr>
            <?php
                }
            ?>


        </table>
    </div>
    <script src="Includes/zepto.min.js"></script>
    <script src="Javascript.js"></script>
<?php include ("Includes/Footer.php");?>