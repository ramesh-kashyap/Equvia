<div class="cab-content">
    <div class="container">
        <div class="cab-tabs">
            <a class="cab-tabs__item" href="{{ route('user.profile') }}" style="text-decoration: none;">Account
                settings</a>
            <a class="cab-tabs__item active" href="{{ route('user.wallets') }}" style="text-decoration: none;">Wallets
                settings</a>
            <a class="cab-tabs__item " href="{{ route('user.ChangePass') }}" style="text-decoration: none;">Change
                password</a>
        </div>
        <form method="post" action="{{route('user.update-password')}}" name="balance/wallets_frm">
            <div class="cab-inputs">
              {{ csrf_field() }}
                 <!--one-time password send on your registered email!-->
              <label class="cab-input cab-input_wallet">
               
              
                        <input type="text" name="code"   value="" 
                        placeholder="One time password"></label>
                       
                   
                       
                        
                        
                        
            </div>
            <input name="__Cert" value="b6bff6ff" type="hidden"><button name="balance/wallets_frm_btn"
                class="main-btn main-btn_orange main-btn_m">Submit</button>
        </form>
    </div>
</div>
