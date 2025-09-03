   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Settings</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Address</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
     
     
                    <div class="col-xl-8 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Address</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('admin.add_wallet') }}" method="POST">
                                     {{ csrf_field() }}
                                        <div class="row">
                                       

                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">USDT.TRC20</label>                                             
                                                <input type="text" placeholder="USDT.TRC20" name="usdtTrc20" value="{{generalDetail()->usdtTrc20}}" class="form-control" required id="">
                                            </div>
                                            
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">USDT.BEP20</label>                                             
                                                <input type="text" placeholder="USDT.BEP20" name="usdtBep20" value="{{generalDetail()->usdtBep20}}" class="form-control" required id="">
                                            </div>
                                            
                                         
                                           
                                        </div>
     
                                      
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
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
     