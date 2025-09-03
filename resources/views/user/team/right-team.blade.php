<div class="contentLk">



    <h2 class="titleLk">Right Team</h2>
    <div class="historyPage">
        <form id="filter-form" class="filterBl" action="{{ route('user.referral-team') }}" method="GET">
           
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
                    $page= end($segments);?>

                    <label for="">type:</label>
                    <select name="type" class="selectricBl" onchange="location = this.value;">
                        <option value="">--SELECT--</option>
                        <option <?php ($page=="roi-bonus")?'selected':'';?> value="{{route('user.referral-team')}}">Referral Team</option>
                       
                        <option <?php ($page=="level-income")?'selected':'';?> value="{{route('user.level-team')}}" >Total Team</option>
                    
                      
                       
                    </select>
                </div>
            </div>
            
            <button type="submit" class="btn btnBlue">Filter</button>
        </form>
        <div class="tablePartners">
            <div class="thead">
                <span class="tit">Name </span>
                <span class="tit">User ID</span>
                <span class="tit">Email</span>

                <span class="tit">Joining Date</span>
                <span class="tit">Position</span>
          
                <span class="tit">Status</span>
            </div>
            <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

                <?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
                @foreach ($direct_team as $value)
            <div id="el830">
                <div class="slideBlock branch1">
                    <div class="slideTitle" onclick="return clickRef(2, 1074);" id="el1074" data-level="1">
                        <div class="line">
                         
                            <span class="txt"><span class="mobileTiTPart">Name</span><a
                                    href="#" class="txt">{{ $value->name }}</a></span>
                            <span class="txt"> <span class="mobileTiTPart">User ID</span>{{ $value->username }}</span>
                            <span class="txt"> <span class="mobileTiTPart">Email ID</span>{{ $value->email }}</span>
                            <span class="txt"> <span class="mobileTiTPart">Joining Date</span> {{ date('D, d M Y', strtotime($value->created_at)) }}</span>
                            <span class="txt"> <span class="mobileTiTPart">Position </span> {{"Right"}}</span>
      
                            <span class="txt"> <span class="mobileTiTPart">Status</span> {{ $value->active_status }}</span>
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
        {{ $direct_team->withQueryString()->links() }}
    </div>

</div>




</div>
