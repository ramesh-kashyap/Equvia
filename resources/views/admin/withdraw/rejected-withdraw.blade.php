<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Withdrawal </a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Rejected Withdrawal</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Rejected Withdrawal</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>S NO.</th>


                                        <th>Name</th>
                                        <th>User ID</th>
                                        <th>Request Amount</th>


                                        <th>Payment Mode.</th>
                                        <th>Transaction Date.</th>
                                        <th>Payment Address</th>
                                        <th>Status</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($withdraw_list) || is_object($withdraw_list)){ ?>

                                    <?php $cnt = $withdraw_list->perPage() * ($withdraw_list->currentPage() - 1); ?>
                                    @foreach ($withdraw_list as $value)
                                        <tr>
                                            <td><?= $cnt += 1 ?></td>
                                            <td>{{ $value->user->name }}</td>
                                            <td>{{ $value->user_id_fk }}</td>

                                            <td>{{currency()}} {{ $value->amount }} </td>
                                            <td> {{ $value->payment_mode }} </td>

                                            <td>{{ $value->created_at }}</td>
                                            <td><span id="myInput<?= $cnt ?>">{{ $value->account }}</span>
                                                &nbsp;&nbsp;&nbsp; <span><i class="fa fa-clone"
                                                        onclick="copyTextFromElement('myInput<?= $cnt ?>')"
                                                        title="Copy Address" aria-hidden="true"></i>
                                                </span></td>
                                                <td ><span class="badge bg-{{ $value->status == 'Active' ? 'success' : 'danger' }}">{{$value->status}}</span></td>


                                         

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
