<table class="table table-striped table-bordered table-condensed table-hover" >
          <thead>
            <tr>
              <th>Nome</th>
            </tr>
          </thead>
      <?php
        $resultado=mysqli_query($conexao,  "SELECT * FROM cliente");
          if($resultado){
            while($row = mysqli_fetch_assoc($resultado)){
      ?>
                <tbody>
                    <tr>
                      <td>
                        <?php echo "<p></p>".($row['nome']);?>
                      </td>
                    </tr>
                </tbody>
        <?php
            }//fim do while
          }//fim do i
        ?>
      </table>