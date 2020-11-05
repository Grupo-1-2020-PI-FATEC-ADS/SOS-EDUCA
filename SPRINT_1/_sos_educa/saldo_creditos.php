<html>
</script>
    <?php
    $pesquisa = $_SESSION['id_cliente'];
    $resultado=mysqli_query($conexao,  "SELECT vd.* from vendas as vd  WHERE vd.id_cliente=$pesquisa" );
   
    
      if($resultado){
        $credito = 0;
        while($row = mysqli_fetch_assoc($resultado)){
          $idVenda = $row['id_venda'];
          $itensVendidos=mysqli_query($conexao,  "SELECT it.*,pr.* from itens_venda as it, produtos as pr  WHERE (it.id_produto=pr.id_produto) AND (it.id_venda='$idVenda')" );
          $total = $row['total'];
  
             

          if($total>20){
              $credito = $credito + 1;
          }else{
              $credito = $credito;
          }
  
   
        }//fim do while
      }//fim do if

    
             echo 'saldo de créditos:'.$credito.' créditos';
      ?>
        
    <br>
      

      <p>
      <?php

        $restante = 5 - $credito;

      echo 'Faltam '.$restante.' ponto(s) para o próximo desconto';

      if($restante<=0){
          $desconto = uniqid();
      } else{
          $desconto = "";
      }  
      
    ?>
    <br>
    <?php

    echo 'Cupom de desconto: '.$desconto;

    ?>
</html>


