    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <!-- <div class="row mb-2">
            <?php echo anchor('auth/create_user', 'Create a new user', array('title' => 'Create a new user!','class'=>'btn btn-info btn-primary'));?>&nbsp
            <?php echo anchor('auth/groups', 'Manage groups', array('title' => 'Manage groups!','class'=>'btn btn-info btn-primary'));?>
          </div> -->
        <div class="row">
          <div class="col-lg-12">
            
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap">
                <thead>
                <tr>
                    <th>Kriteria</th>
                    <th>Bobot</th>
                    <th>Cost/Benefit</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($kriterias as $kriteria)
                {
                    echo '<tr>';
                    echo '<td>'.$kriteria->kriteria.'</td>';
                    echo '<td>'.$kriteria->kepentingan.'</td>';
                    echo '<td>'.$kriteria->cost_benefit.'</td>';
                    echo '<td>
                            <a href="#"  class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>';
                            
                    echo'
                            </td>';
                    echo '</tr>';
                }
                ?>
                </tbody>
            </table>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->


