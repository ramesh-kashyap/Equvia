

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Support </a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Support Query</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Support Query</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S NO.</th>
                                                <th>User ID</th>
                                                <th>Ticket Number</th>
                                               <th>Category</th>
                                               <th>Request Date</th>
                                               <th>Closing Date</th>
                                               <th>Status</th>
                                               <th>View</th>
                                               <th>close</th>
                                               <th>Reply</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($support_query) || is_object($support_query)){ ?>

                                                <?php $cnt =  $support_query->perPage() * ($support_query->currentPage() - 1); ?>
                                                 @foreach($support_query as $value)
                                                  <tr>
                                                      <td><?= $cnt += 1?></td>
                                                   
                                                      <td>{{$value->user_id_fk}}</td>
                                                    
                                                      <td>{{$value->ticket_no}}</td>
                                                      <td>{{$value->category}}</td>
                                                      <td>{{$value->gen_date}}</td>
                                                      <td>{{$value->closing_date}}</td>
                                                      <td><?=($value->status) ? "Closed" : "Open"?></td>
                                                      
                                                      <td> <a class="btn btn-primary" href="{{route('admin.get_support_msg')}}?ticket_no=<?=$value->ticket_no?>">View all message</a></td>
                                                      
                                                        <td><a class="btn btn-danger" href="{{route('admin.close_ticket_')}}?ticket_no=<?=$value->ticket_no?>">Close Ticket</a></td>
                                                       
                                                        <td> <a class="btn btn-success" href="{{route('admin.reply_support_msg')}}?ticket_no=<?=$value->ticket_no?>">Reply Ticket</a></td>
                                                 
                                                     
                                                     
                                                     
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
