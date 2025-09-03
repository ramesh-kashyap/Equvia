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
                                    <table id="example" class="display" style="min-width: 845px">
                                        <?php if(is_array($open_ticket_msg) || is_object($open_ticket_msg)){ ?>
                                            <?php $count= 0; ?>
                                            <?php foreach ($open_ticket_msg as $item): ?>
                                            <?php if($item->reply_by == 'user'){ }  ?>

                                            <h5 class="form-header" style="width: 274px; background:#e92266;padding: 7px;color: #0f0e11;border-radius: 10px;"> <?= $item->category ?> (<?=$item->gen_date?>)</h5>
                                            <br>
                                           <p class="comp_bank_p" style="color:#0f0e11" ><?= $item->msg ?></p>
                                           <p class="text-right" style="margin-right: 30px;color:#0f0e11;margin-left:300px"><?=($item->reply_by == 'admin')? 'Admin' : 'You'?></p>
                                           <?php endforeach; ?>
                                           <?php } ?>
                                       
                                    </table>
                                    <br>

                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

