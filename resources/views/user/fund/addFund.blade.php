   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Fund</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Fund</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
     
     
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Fund</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('user.SubmitBuyFund') }}" method="POST">
                                     {{ csrf_field() }}

                                     @if(@$_GET['res'])
                                     <div class="alert alert-success">
                                     <strong style="color:#006633;">
                                    Fund  Request Submited successfully
                                     </strong>
                                     </div>
                                     @endif
                                     
                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Enter Amount</label>
                                                <input class="form-control" placeholder="Enter Amount" min="0" required type="number" name="amount"
                                                    value=""
                                                    >
                                            </div>
     
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Payment Mode</label>
                                                <input class="form-control" readonly type="text" placeholder=""  name="memberID"
                                                    value="USDT">
                                            </div>
                                           
                                        </div>
     
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" required type="checkbox">
                                                <label class="form-check-label">
                                                    Check me out
                                                </label>
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
     