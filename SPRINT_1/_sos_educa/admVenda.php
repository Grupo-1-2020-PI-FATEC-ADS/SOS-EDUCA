<table class="table table-striped table-bordered table-condensed table-hover" >
          <thead>
            <tr>
              <th>Venda</th>
              <th>Total</th>
            </tr>
          </thead>
      <?php
        $resultado=mysqli_query($conexao,  "SELECT * FROM vendas");
          if($resultado){
            while($row = mysqli_fetch_assoc($resultado)){
      ?>
                <tbody>
                    <tr>
                      <td>
                        <?php echo "<p></p>".($row['id_venda']);?>
                      </td>
                      <td>
                        <?php echo "<p></p>".($row['total']);?>
                      </td>
                    </tr>
                </tbody>
        <?php
            }//fim do while
          }//fim do i
        ?>
      </table>