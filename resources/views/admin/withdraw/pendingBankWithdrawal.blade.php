<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Withdrawal </a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Pending Withdrawal</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pending Withdrawal</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>S NO.</th>
                                        <th>Name</th>
                                        <th>User ID</th>
                                        <th> Amount</th>
                                        <th>Transaction Date.</th>
                                        <th>Account Name</th>
                                        <th>Bank Name</th>
                                        <th>Brand Name</th>
                                        <th>Account No</th>
                                        <th>Ifsc Code</th>
                                        <th>Payment Mode</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($pendingBankWithdrawal) || is_object($pendingBankWithdrawal)){ ?>

                                    <?php $cnt = $pendingBankWithdrawal->perPage() * ($pendingBankWithdrawal->currentPage() - 1); ?>
                                    @foreach ($pendingBankWithdrawal as $value)

                                    <?php
                                    $name_user=\App\Models\Bank::where('user_id',$value->user_id)->first();
                                   ?>
                                    <tr>
                                        <td><?= $cnt += 1?></td>

                                        <td>{{$value->user->name}}</td>
                                        <td>{{$value->user_id_fk}}</td>
                                        <td>&#8377; {{$value->amount}} </td>

                                        <td>{{$value->created_at}}</td>

                                        <td>{{($name_user)?$name_user->account_holder:''}}</td>
                                        <td>{{($name_user)?$name_user->bank_name:''}}</td>
                                        <td>{{($name_user)?$name_user->branch_name:''}}</td>
                                        <td>{{($name_user)?$name_user->account_no:''}}</td>
                                        <td>{{($name_user)?$name_user->ifsc_code:''}}</td>
                                        <td>{{$value->payment_mode}}</td>


                                        <td><a href="{{ route('admin.withdraw_request_done') }}?id={{ $value->id }}&withdraw_status=success"
                                                class='btn btn-success'>Success</a> <a
                                                href="{{ route('admin.withdraw_request_done') }}?id={{ $value->id }}&withdraw_status=blocked"
                                                class='btn btn-danger'>Reject</a></td>

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
