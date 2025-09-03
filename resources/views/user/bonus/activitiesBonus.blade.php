<div class="container-fluid main-content px-2 px-lg-4">
    <!-- Tables -->
    <div class="row my-2 g-3 g-lg-4 pb-3  ">
        <div class="col-12">
            <div class="mainchart px-3 px-md-4 py-3 py-lg-4">
                <div class="activity">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <h5 class="mb-0">Activities Bonus</h5>
                        </div>

                        <div class="tab-content" id="pills-tabContent2">
                            
                            <div class="tab-pane fade show active" id="price" role="tabpanel" tabindex="0">
                                <div class="recent-contact pb-2 pt-3">
                                    
                                         <form action="{{ route('user.activitiesBonus') }}" method="GET" style="    width: 100%;">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="form-group mb-3">
                                                    <input type="text" style="" Placeholder="Search Users"
                                                        name="search" class="form-control" value="{{ @$search }}">
                                                </div>
                                            </div>
                
                
                                            <div class="col-xl-2">
                                                <div class="form-group mb-3">
                                                    <select name="limit" style="" class="form-control">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group mb-3">
                                                    <input type="submit" style="font-size: 12px; padding-left: 18px;" name="submit"
                                                        class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                                        value="Search" />
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group mb-3">
                                                    <a href="{{ route('user.activitiesBonus') }}" style="font-size: 12px; padding-left: 18px;"
                                                        name="reset"
                                                        class="btn btn-outline-theme btn-lg d-block w-100 btn-primary"
                                                        value="Reset">Reset</a>
                                                </div>
                                            </div>
                
                
                                        </div>
                                    </form>
                                    
                                    
                                    <table  id="example" class="display"  >
                                    <thead>
                                    <tr>
                                        <th>Sr No</th>
                                 
                                    
                                      <th>Amount</th>
                        
                                      <th>Date</th>


                                     
                              
                                      <th>Remarks </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($level_income) || is_object($level_income)){ ?>

                                        <?php $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
                                        @foreach ($level_income as $value)
                                            <tr>
                                                <td><?= $cnt += 1 ?></td>
    
    
                                      
                              
                                           
                                                <td>{{currency()}} {{ $value->comm }}</td>
                                                <td>{{date("D, d M Y", strtotime($value->created_at)) }} </td>
                                                
    
                                                <td>{{ $value->remarks }}</td>
    
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

