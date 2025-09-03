   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Settings</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Reward</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
     
     
                    <div class="col-xl-8 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Reward</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('admin.add_reward') }}" method="POST">
                                     {{ csrf_field() }}
                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Rank</label>
                                                
                                                <select name="rank" id="" class="form-control" required>
                                                    <option value="1">MANAGER</option>
                                                    <option value="2">VICE PRESIDENT</option>
                                                    <option value="3">CEO</option>
                                                    <option value="4">DIRECTOR</option>
                                                    <option value="5">CHAIRMAN(CBD)</option>
                                                    
                                                </select>
                                            </div>

                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">User ID</label>                                             
                                                <input type="text" placeholder="User ID" name="user_id" value="" class="form-control check_sponsor_exist" data-response="username_res" required id="">
                                                <span id="username_res"></span>
                                            </div>
                                            
                                            
                                           
                                        </div>
     
                                      
                                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
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
             
             <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
<script>

    $('.check_sponsor_exist').keyup(function(e) {
        var ths = $(this);
        var res_area = $(ths).attr('data-response');
        var sponsor = $(this).val();
        // alert(sponsor); 
        $.ajax({
            type: "POST"
            , url: "{{ route('getUserName') }}"
            , data: {
                "user_id": sponsor
                , "_token": "{{ csrf_token() }}"
            , }
            , success: function(response) {
                // alert(response);      
                if (response != 1) {
                    // alert("hh");
                    $(".submit-btn").prop("disabled", false);
                    $('#' + res_area).html(response).css('color', '#000').css('font-weight', '800')
                        .css('margin-buttom', '10px');
                } else {
                    // alert("hi");
                    $(".submit-btn").prop("disabled", true);
                    $('#' + res_area).html("User ID Not exists!").css('color', 'red').css(
                        'margin-buttom', '10px');
                }
            }
        });
    });

</script>
     