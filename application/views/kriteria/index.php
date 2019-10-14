    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <!-- <div class="card-header">
                    <h3 class="card-title"></h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
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
                </div>
            </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->


