
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Activities </a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Activities List</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Activities List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S NO.</th>
                                                <th>User Name</th>
                                                <th>User Id</th>
                                                <th>URL</th>
                                                <th>Date.</th>
                
                                             
                                                {{-- <th>Proof</th> --}}
                
                                                <th>Status</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($activities) || is_object($activities)){ ?>

                                                <?php $cnt = $activities->perPage() * ($activities->currentPage() - 1); ?>
                                                 @foreach($activities as $value)
                
                                                  <tr>
                                                      <td><?= $cnt += 1?></td>
                                                      <td>{{$value->user->name}}</td>
                                                      <td>{{$value->user->username}}</td>
                                                      <td>{{$value->url}}</td>
                                                      <td>{{$value->created_at}}</td>
                                                     
                
                                                      <td ><span class="badge bg-{{ $value->status == 'Approved' ? 'success' : 'danger' }}">{{$value->status}}</span></td>
                                                      
                                                  </tr>
                                                  @endforeach
                
                                             <?php }?>
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                 
					
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
