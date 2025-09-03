<div class="container-fluid main-content px-2 px-lg-4">
    <!-- Tables -->
    <div class="row my-2 g-3 g-lg-4 pb-3  ">
        <div class="col-12">
            <div class="mainchart px-3 px-md-4 py-3 py-lg-4">
                <div class="activity">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <h5 class="mb-0">Support Message</h5>
                        </div>

                        <div class="tab-content" id="pills-tabContent2">
                            
                            <div class="tab-pane fade show active" id="price" role="tabpanel" tabindex="0">
                                <div class="recent-contact pb-2 pt-3">
                                    <table  id="example" class="display"  >
                                    <thead>
                                    <tr>
                                        <th class="wd-15p">#S.NO</th>
                                                <th>Ticket No</th>
                                                <th>Category</th>
                                                <th>Request Date</th>
                                                <!--<th>Closing Date</th>-->
                                                <th>Status</th>
                                                <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($level_income) || is_object($level_income)){ ?>

                                        <?php $cnt =$level_income->perPage() * ($level_income->currentPage() - 1); ?>
                                        @foreach($level_income as $value)
                                            <tr>
                                                <td><?= $cnt += 1?></td>

                                                <!--<td>{{ $value->user_id_fk }}</td>-->
                                                <td>{{ $value->ticket_no }}</td>
                                                <td>{{ $value->category }}</td>
                                                <td>{{ $value->gen_date }}</td>
                                                <!--<td>{{ $value->closing_date }}</td>-->
                                                <?php if($value->status=="1"){$color="red";}else{$color="green";}?>
                                                <td style="color:<?=@$color?>;font-weight:700">
                                                    {{ ($value->status)?"Closed":"Open" }}
                                                </td>
                                                <td><a
                                                        href="{{ route('user.ViewMessage') }}?ticket_no={{ $value->ticket_no }}"><button
                                                            style="color:#000;border:1px solid #000;padding:8px;border-radius:15px">View
                                                            all message</button></a></td>

                                            </tr>
                                        @endforeach

                                        <?php }?>
    
                                </tbody>
                                    </table>
                                    <br>

                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

