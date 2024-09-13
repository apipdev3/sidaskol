<!-- Zero config.table start -->
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary btn-sm waves-effect" data-toggle="modal" data-target="#large-Modal" data-backdrop="static">Anggota Rombel</button>


        </div>
        <div class="card-block">
            <div class="dt-responsive table-responsive">
                <table id="simpletable" class="table table-striped table-bordered nowrap">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        
                        
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
    <!-- Zero config.table end -->

   


    <!-- Modal large-->

    <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   
                     <div class="row">
                        <div class="col-md-6 ">
                            <div class="card bg-light">
                                <div class="card-header bg-success p-2">Kelas 12</div>
                                <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                        </tr>
                                    </thead> 
                                   <tbody id="kelas_tujuan" style="overflow-y:scroll;">
                                    <?php foreach ($siswa as $row): ?>
                                    <tr class="sortable-item" data-id="<?= $row->nis; ?>">                                        
                                      <td ><?= $row->nis; ?></td>
                                      <td><?= $row->nama_siswa; ?></td>
                                    </tr>

                                    <?php endforeach ?>                      
                                    </tbody>  
                                </table>
                                </div>
                            </div>
                        </div>



                        <div class="col-md-6 ">
                            <div class="card bg-light">
                               <div class="card-header bg-info p-2">
                                    Kelas Asal
                                  </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="simpletable" class="table table-bordered table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                            </tr>
                                        </thead> 
                                       <tbody id="kelas_asal">
                                        <?php foreach ($siswa as $row): ?>
                                        <tr class="sortable-item" data-id="<?= $row->nis; ?>">
                                          <td ><?= $row->nis; ?></td>
                                          <td><?= $row->nama_siswa; ?></td>
                                        </tr>

                                        <?php endforeach ?>                      
                                        </tbody>  
                                    </table> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>


                </div>
                
            </div>
        </div>
</div>



