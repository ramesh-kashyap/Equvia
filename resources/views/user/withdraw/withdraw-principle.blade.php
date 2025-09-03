<div class="container-fluid main-content settings px-2 px-lg-4">
    <!-- Tables -->
    <div class="row my-2 g-3 g-lg-4 pb-3 settings-inner">

   

        <div class="col-sm-6 col-lg-6 col-xl-6 col-xxl-7">
            <div class="settings-tab">
                <h5 class="mb-0">Withdrawal Principal </h5>
       <br>
                <code class="badge badge-rounded badge-outline-warning" style="color:#0f0e11;font-size:15px">Principal Balance : <b>{{ currency() }} {{ number_format(Auth::user()->principleBalance(), 2) }}  </b></code>
                

                <div class="tab-content pt-2" id="pills-tabContent">
                   

                    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" tabindex="0">
                        <form action="{{ route('user.WithdrawRequestPrinciple') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="fw-semibold mb-2 mt-3" for="fname">Enter Amount</label>
                                    <input type="number" min="20" name="amount" id="pkg_amount"   class="form-control check_amount_valid"  data-response="min_amount_error" required=""  placeholder="Request Amount"/>
                                </div>
                                <span style="color:red;display:none" id='min_amount_error'>Minimum Withdrawal is 20$ </span>
                                <div class="col-md-12">
                                    <label class="fw-semibold mb-2 mt-3" for="fname">Payment Mode</label>
                                    <input type="text" readonly name="paymentMode" id="pkg_amount"  readonly  class="form-control" required=""  value="USDT.TRC20" placeholder=""/>

                                  
                                </div>

                                <div class="col-md-12">
                                    <label class="fw-semibold mb-2 mt-3" for="fname">Transaction Password</label>
                                    <input type="password" name="transaction_password" id="pkg_amount"   class="form-control"  required=""  placeholder="Transaction Password"/>
                                </div>


                             

                                <div class="col-12">

                                    <div class="mt-4 d-flex gap-3">
                                        <button type="submit" class="primary-btn-lg submit-btn">Confirm</button>
                                     
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
    
    <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
    <script>
            $('.check_amount_valid').keyup(function(e) {
            var ths = $(this);
            var res_area = $(ths).attr('data-response');
            var amt = $(this).val();

            if (amt < 20) {
            $(".submit-btn").prop("disabled", true);
            $('#min_amount_error').show();
        } else {
            $('#min_amount_error').hide();
            $(".submit-btn").prop("disabled", false);

        }

        });



    </script>