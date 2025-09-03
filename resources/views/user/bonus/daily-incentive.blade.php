<div class="contentLk">



    <h2 class="titleLk">Leadership Bonus</h2>
    <div class="historyPage">
        <form id="filter-form" class="filterBl" action="{{ route('user.level-income') }}" method="GET">
           
            <span class="iconBl icon-filtration"></span>
            <div class="col">
                <div class="inputLine">
                    <label for="">date from:</label>
                    <input type="text" name="from" id="from" class="setDate" value="">
                    <span class="iconArrow"></span>
                </div>
            </div>
            <div class="col">
                <div class="inputLine">
                    <label for="">to:</label>
                    <input type="text" name="to" id="to" class="setDate" value="">
                    <span class="iconArrow"></span>
                </div>
            </div>
            <div class="col">
                <div class="inputLine">
                    <?php 
                    $segments=request()->segments(); 
                    
                    $page= end($segments);
                    
                    // dd($page);
                    ?>
    
                    <label for="">type:</label>
                    <select name="type" class="selectricBl" onchange="location = this.value;">
                        <option value="">--SELECT--</option>
                        <option <?php ($page=="roi-bonus")?'selected':'';?> value="{{route('user.roi-bonus')}}">Roi Bonus</option>
                       
                        <option <?php ($page=="level-income")?'selected':'';?> value="{{route('user.level-income')}}" >Referral Bonus</option>
                        <option  <?php ($page=="dailyIncentive")?'selected':'';?> value="{{route('user.dailyIncentive')}}">Leadership Bonus</option>
                        <option  <?php ($page=="reward-bonus")?'selected':'';?> value="{{route('user.reward-bonus')}}">Royalty Bonus</option>
                        <option  <?php ($page=="DepositHistory")?'selected':'';?> value="{{route('user.DepositHistory')}}" >Deposit </option>
                 
                        <option  <?php ($page=="WithdrawHistory")?'selected':'';?> value="{{route('user.Withdraw-History')}}" >Withdrawal</option>
                    </select>
                </div>
            </div>
            
            <button type="submit" class="btn btnBlue">Filter</button>
        </form>
        <div class="tablePartners">
            <div class="thead">
                <span class="tit">SR</span>

                <span class="tit">Commission</span>
                <span class="tit">Date</span>
                <span class="tit">From ID</span>
                <span class="tit">Level</span>
          
                <span class="tit">Description</span>
            </div>
            <?php if(is_array($level_income) || is_object($level_income)){ ?>

                <?php $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
                @foreach ($level_income as $value)
            <div id="el830">
                <div class="slideBlock branch1">
                    <div class="slideTitle" onclick="return clickRef(2, 1074);" id="el1074" data-level="1">
                        <div class="line">
                            <span class="name"> <span class="mobileTiTPart">SR</span> <?= $cnt += 1 ?></span>
                        
                            <span class="txt"> <span class="mobileTiTPart">Commission</span> {{currency()}} {{ $value->comm }}</span>
                            <span class="txt"> <span class="mobileTiTPart">Date</span> {{ date('D, d M Y', strtotime($value->created_at)) }}</span>
                            <span class="txt"> <span class="mobileTiTPart">From ID</span>{{ $value->rname }}</span>
                            <span class="txt"> <span class="mobileTiTPart">Level </span>{{ $value->level }}</span>
                            <span class="txt"> <span class="mobileTiTPart">Description</span> {{ $value->remarks }}</span>
                        </div>
                    </div>
                    <div class="slideContent"></div>
                </div>
            </div>

            @endforeach

            <?php }?>

            

        </div>
        
    </div>
    <div class="pagination">
<br>
        {{ $level_income->withQueryString()->links() }}
    </div>

</div>




</div>
