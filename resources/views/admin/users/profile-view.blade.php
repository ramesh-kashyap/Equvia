   <!--**********************************
            Content body start
        ***********************************-->
        
        <style>
            .widget-stat .media .media-body h3, .widget-stat .media .media-body .h3 {
                font-size: 1.5rem;
                font-weight: 600;
                margin: 0;
                line-height: 1.2;
            }
        </style>
   <div class="content-body">
       <div class="container-fluid">
           <div class="row page-titles">
               <ol class="breadcrumb">
                   <li class="breadcrumb-item active"><a href="javascript:void(0)">User Management</a></li>
                   <li class="breadcrumb-item"><a href="javascript:void(0)">User Profile View</a></li>
               </ol>
           </div>
           <!-- row -->
              <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo rounded"></div>
                                </div>
                                <div class="profile-info">
									<div class="profile-photo">
										<img src="{{asset('')}}admin/images/profile/profile.png" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-primary mb-0">{{$profile->name}} , ID: {{$profile->username}}</h4>
											<p><?php if($profile->rank==1){echo "MANAGER";}elseif ($profile->rank==2) {echo "VICE PRESIDENT";}elseif ($profile->rank==3) {echo "CEO";}elseif ($profile->rank==4) {echo "DIRECTOR";}elseif ($profile->rank==5) {echo "CHAIRMAN(CBD)";}else{echo "N/A";}?></p>
										</div>
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0">{{$profile->email}}</h4>
											<p>Email</p>
										</div>
										<div class="dropdown ms-auto">
											<a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
										
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                    	<div class="widget-stat card bg-danger">
                    		<div class="card-body  p-4">
                    			<div class="media">
                    				<span class="me-3">
                    					<i class="flaticon-381-calendar-1"></i>
                    				</span>
                    				<div class="media-body text-white text-end">
                    					<p class="mb-1">Balance</p>
                    					<h3 class="text-white">{{ currency() }} {{number_format(($profile->totalIncome->sum('comm')+($profile->trading_profit->sum('comm')-$profile->trading_lose->sum('comm'))-$profile->withdrawal->sum('amount')), 2)}}</h3>
                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-success">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="flaticon-381-diamond"></i>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">Deposit</p>
										<h3 class="text-white">{{ currency() }} {{number_format($profile->package, 2)}}</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-info">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="flaticon-381-heart"></i>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">AI TOOL</p>
										<h3 class="text-white">{{ currency() }} {{ number_format($profile->tradeAmt, 2) }} </h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-primary">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="flaticon-381-user-7"></i>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">Withdrawal</p>
										<h3 class="text-white">{{ currency() }}
                            {{ number_format($profile->withdrawal->sum('amount'), 2) }}</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
                      <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-success">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="flaticon-381-user-7"></i>
									</span>
									<div class="media-body text-white text-end">
										<p class="mb-1">Principal Withdrawal</p>
										<h3 class="text-white">{{ currency() }}
                            {{ number_format($profile->Priciplewithdrawal->sum('amount'), 2) }}</h3>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    
                    <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-primary">
							<div class="card-body  p-4">
								<div class="media">
									<span class="me-3">
										<i class="la la-users"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Direct</p>
										<h3 class="text-white">{{$user_direct}}</h3>
										<div class="progress mb-2 bg-secondary">
                                            <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                                        </div>
										<small>Total Business {{ currency() }} {{$totalBusiness}}</small>
									</div>
								</div>
							</div>
						</div>
                    </div>
                     <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-primary">
							<div class="card-body  p-4">
								<div class="media">
									<span class="me-3">
										<i class="la la-users"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Team</p>
										<h3 class="text-white">{{$totalTeam}}</h3>
										<div class="progress mb-2 bg-secondary">
                                            <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                                        </div>
										<small>Team Business {{ currency() }} {{$team_business}}</small>
									</div>
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
