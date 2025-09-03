<div class="cab-content">
    <div class="container">
        <style>
            .cab-bal__item .main-btn {
                box-shadow: 1px 18px 20px 0px rgb(0 0 0 / 14%);
            }
        </style>

     
        <form method="post" name="add" action="{{ route('user.confirmDeposit_new') }}">
            
            {{ csrf_field() }}
       
            <div class="cab-title">select payment system<span>:</span></div>
            <div class="cab-wallets">
                <label style="position: relative;"><input class="PSys" checked type="radio" name="PSys" value="USDT.BEP20"
                        data-icon="usdt" data-curr="USDT" data-min="0.0000000000" data-rate="1">
                    <p> <img src="/assets/img/usdt.svg" alt="usdt" />USDT BEP20 <span>( USDT )</span>
                    </p>
                </label>
                <label style="position: relative;"><input class="PSys" type="radio" name="PSys" value="USDT.TRC20"
                        data-icon="usdt" data-curr="USDT" data-min="0.0000000000" data-rate="1">
                    <p> <img src="/assets/img/usdt.svg" alt="usdt" />USDT TRC20 <span>( USDT )</span>
                    </p>
                </label>

            </div>
            <div class="cab-title">select staking<span>:</span></div>
            <div class="cab-plans">
                <div class="cab-plans__col">
                    <div class="cab-plans__head">
                        <div class="cab-plans__arrow"><svg>
                                <use xlink:href="/assets/img/sprite.svg#arrow-left"></use>
                            </svg></div>
                        <div class="cab-plans__text">
                            <h3> <span>Beginner</span>Trader</h3>
                        </div>
                    </div><label><input type="radio" name="Plan" id="plan-6" value="6" data-min="50"
                            data-max="200" checked>
                        <div class="cab-plans__item">
                            <h3>2.5% <span>(daily)</span></h3>
                            <p>Min-Max: <span>50$ - 200$</span></p>
                            <p>total profit: <span>200%</span></p>
                        </div>
                    </label>
                </div>
                <div class="cab-plans__col">
                    <div class="cab-plans__head blue">
                        <div class="cab-plans__arrow"><svg>
                                <use xlink:href="/assets/img/sprite.svg#arrow-left"></use>
                            </svg></div>
                        <div class="cab-plans__text">
                            <h3> <span>Standard</span>Trader</h3>
                        </div>
                    </div><label><input type="radio" name="Plan" id="plan-9" value="9" data-min="400"
                            data-max="800">
                        <div class="cab-plans__item">
                            <h3>2.5% <span>(daily)</span></h3>
                            <p>Min-Max: <span>400$ - 800$</span></p>
                            <p>Total Profit: <span>200%</span></p>
                        </div>
                    </label>
                </div>
                <div class="cab-plans__col">
                    <div class="cab-plans__head orange">
                        <div class="cab-plans__arrow"><svg>
                                <use xlink:href="/assets/img/sprite.svg#arrow-left"></use>
                            </svg></div>
                        <div class="cab-plans__text">
                            <h3> <span>Exclusive</span>Trader</h3>
                        </div>
                    </div><label><input type="radio" disabled style="cursor: not-allowed" name="Plan" id="plan-12" value="12" data-min="1000"
                            data-max="2000">
                        <div class="cab-plans__item" style="    cursor: not-allowed;">
                            <style>
                                .box-item {
                                    position: absolute;
                                    right: 0;
                                    bottom: 3px;
                                }

                                .box-item img {
                                    width: 34px;
                                    position: relative;
                                    left: 5px;
                                }

                                @media screen and (max-width: 480px) {
                                    .box-item img {
                                        left: 0;
                                        width: 25px;
                                    }

                                    .box-item p {
                                        text-align: center;
                                        font-size: 10px;
                                        position: relative;
                                        top: -4px;
                                    }
                                }
                            </style>
                            
                            <h3>3% <span>(Soon)</span></h3>
                            <p>Min-Max: <span>1000$ - 2000$</span></p>
                            <p>total Profit: <span>200%</span></p>
                        </div>
                    </label> 
                   
                </div>
                <div class="cab-plans__col">
                    <div class="cab-plans__head green">
                        <div class="cab-plans__arrow"><svg>
                                <use xlink:href="/assets/img/sprite.svg#arrow-left"></use>
                            </svg></div>
                        <div class="cab-plans__text">
                            <h3> <span>Untimate</span>Trader</h3>
                        </div>
                    </div><label><input type="radio" name="Plan" disabled id="plan-15" value="15" data-min="2500"
                            data-max="5000">
                        <div class="cab-plans__item" style="    cursor: not-allowed;">
                            <h3>3% <span>(Soon)</span></h3>
                            <p>Min-Max: <span>2500$ - 5000$</span></p>
                            <p>total profit: <span>200%</span></p>
                        </div>
                    </label>
                </div>
            </div>
            <div class="cab-title">enter amount<style>
                    #dep_min,
                    #dep_max {
                        cursor: pointer;
                    }

                    #dep_min:hover,
                    #dep_max:hover {
                        text-decoration: underline;
                    }
                </style>
                <div style="display: none;">15.00055277/3499.983201743733.39000000</div>
                <div style="display: none;">15.00055277/3499.9832017</div>

             <input type="hidden" name="minimum_deposit" id="minimum_deposit" value="50">
             <input type="hidden" name="maximum_deposit" id="maximum_deposit" value="200">
                <div>
                    <p
                        style="font-family: 'Estricta', sans-serif; font-size: 13px;margin-left: 10px;margin-top: -5px;">
                        <span id="dep_curr" style="font-weight: bold;">USDT</span> <span id="dep_range">(from <span
                                id="dep_min" style="font-weight: bold;">50</span> to <span id="dep_max"
                                style="font-weight: bold;">200</span>)</span> 
                    </p>
                    <p class='bonus-info-label'></p>
                </div>
            </div><label class="cab-amount"><input type="text" name="Sum" value="50"
                    placeholder="0"><img class="amount-icon" src="/assets/img/usdt.svg" alt="btc" /></label>
            <p class="cashback-info-label"> </p>
            
            <input name="__Cert" value="2dca4dd8" type="hidden">
         
            
            <button
                class="main-btn main-btn_green main-btn_m main-btn_sm submit-btn" name="add_btn">create Deposit</button>
        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<script>
	$(function(){
		$('input[name="Sum"]').on('change keyup',function () {
			let str = $(this).val();
			str = str.replace(',','.');
			$(this).val(str);
           let min =  $('#minimum_deposit').val();
           let max =  $('#maximum_deposit').val();
			let amount = parseFloat(str);
            if (amount>=min && amount<=max) 
            {
                $(".submit-btn").prop("disabled", false);
                $('.cashback-info-label').html('');
            }
            else
            {

            $(".submit-btn").prop("disabled", true);
            $('.cashback-info-label').html("minimum deposit is "+min+" USDT and maximum is "+max+" USDT !").css('color', 'red');

            }
		
			//console.log(summ_usd);
		});
		$('input[name="PSys"]').change(function () {
			let icon = $(this).data('icon');
			$('.amount-icon').attr('src','/assets/img/'+icon+'.svg');
		});
		$('.PSys').change(function () {
			let dep_curr_rate = parseFloat($(this).data('rate'));
			let curr = $(this).data('curr');
			let c_min = $(this).data('min');
			$('#dep_curr').text(curr);
			$('input[name="Sum"]').val('');

			let dep_min = 0;
			if(c_min>0){
				dep_min = parseFloat(c_min);
			}else{
				dep_min = parseFloat($('input[name="Plan"]:checked').data('min'));
			}

			let dep_max = parseFloat($('input[name="Plan"]:checked').data('max'));
			let dep_sum_min = parseFloat((dep_min/dep_curr_rate).toFixed(6));
			let dep_sum_max = parseFloat((dep_max/dep_curr_rate).toFixed(6));
			let dep_amount_min = parseFloat((dep_sum_min*dep_curr_rate));
			let dep_amount_max = parseFloat((dep_sum_max*dep_curr_rate));

			while (dep_amount_min < dep_min){
				dep_sum_min=dep_sum_min+0.000001;
				dep_amount_min = dep_sum_min*dep_curr_rate;
			}
			while (dep_amount_max > dep_max){
				dep_sum_max=dep_sum_max-0.000001;
				dep_amount_max = dep_sum_max*dep_curr_rate;
			}
			$('#dep_min').text(dep_sum_min.toFixed(6));
			$('#dep_max').text(dep_sum_max.toFixed(6));
            $('#minimum_deposit').val(dep_sum_min.toFixed(0));
			$('#maximum_deposit').val(dep_sum_max.toFixed(0));
			$('input[name="Sum"]:not(.ex_sum)').val(dep_sum_min.toFixed(6));
			$('#eq').text((dep_sum_min*dep_curr_rate).toFixed(2));
		});
		$('input[name="Plan"]').change(function () {
			let c_min = $('input[name="PSys"]:checked').data('min');
			let d_min = parseFloat($(this).data('min'));;
			let dep_min = 0;
			if(c_min>0 && c_min>=d_min){
				dep_min = parseFloat(c_min);
			}else{
				dep_min = d_min;
			}
            // alert(dep_min);
			let dep_max = parseFloat($(this).data('max'));
			let dep_curr_rate = parseFloat($('input[name="PSys"]:checked').data('rate'));
			let dep_sum_min = parseFloat((dep_min/dep_curr_rate).toFixed(6));
			let dep_sum_max = parseFloat((dep_max/dep_curr_rate).toFixed(6));
			let dep_amount_min = parseFloat((dep_sum_min*dep_curr_rate));
			let dep_amount_max = parseFloat((dep_sum_max*dep_curr_rate));

			$('#dep_min').text(dep_min.toFixed(2));
			$('#dep_max').text(dep_max.toFixed(2));
			$('#minimum_deposit').val(dep_min.toFixed(0));
			$('#maximum_deposit').val(dep_max.toFixed(0));
			$('#eq').text((dep_sum_min*dep_curr_rate).toFixed(2));
			$('input[name="Sum"]').val(dep_min.toFixed(2));
		});
		$('#dep_min,#dep_max').click(function () {
			let amount = $(this).text();
			$('input[name="Sum"]').val(amount).change();
		});
		$('.ex_sum').on('change keyup',function () {
			let rate = $('input.PSys:checked').data('rate');
			let amount = parseFloat($(this).val());
			let usd_amount = amount * rate;
			let hnb_rate = 0.9479;
			let htb_amount = (usd_amount/hnb_rate).toFixed(6);
			if(!isNaN(htb_amount)){
				$('#actual_hnbt').text(htb_amount);
			}else{
				$('#actual_hnbt').text('0.000000');
			}

		});
	})
</script>

<div class='d-none'>
</div>

<script>

$(document).ready(function() {

 	$('input[name="Sum"]').on('change keydown keypress', function() {
		setTimeout(function() {
			refreshBonus();
		}, 100);
	});

	$('input[name="Plan"]').on('change', function() {
		setTimeout(function() {
			refreshBonus(1);
		}, 100);
 	});

 	$('input[name="PSys"]').on('change', function() {
		setTimeout(function() {
			refreshBonus();
		}, 100);
 	});

	function timerEnded(bn) {
		$('#pbonus' + bn).hide();
	}
	btext = null;
	bval = [];
	plans = [{"id":"137","group":"0","name":"0.1% daily for 68 working days","min":"15.0000000000","max":"1000000.0000000000","days":"68","perc":"0.10","return":"100.00","period":"24"},{"id":"138","group":"0","name":"330% after 68 working days","min":"15.0000000000","max":"100000.0000000000","days":"96","perc":"230.00","return":"100.00","period":"2300"},{"id":"6","group":"1","name":"3.2% daily for 11 working days (Classic staking)","min":"15.0000000000","max":"3500.0000000000","days":"11","perc":"3.20","return":"100.00","period":"24"},{"id":"7","group":"1","name":"210% after 11 working days (Classic staking)","min":"350.0000000000","max":"35000.0100000000","days":"16","perc":"110.00","return":"100.00","period":"375"},{"id":"8","group":"1","name":"14% daily for 11 working days (Classic staking)","min":"400.0000000000","max":"75000.0100000000","days":"11","perc":"14.00","return":"0.00","period":"24"},{"id":"9","group":"2","name":"4.3% daily for 19 working days (Premium staking)","min":"1900.0000000000","max":"58000.0100000000","days":"19","perc":"4.30","return":"100.00","period":"24"},{"id":"10","group":"2","name":"330% after 19 working days (Premium staking)","min":"1800.0000000000","max":"68000.0100000000","days":"29","perc":"230.00","return":"100.00","period":"700"},{"id":"11","group":"2","name":"18% daily for 19 working days (Premium staking)","min":"2100.0000000000","max":"78000.0100000000","days":"19","perc":"18.00","return":"0.00","period":"24"},{"id":"12","group":"3","name":"5.5% daily for 25 working days (Deluxe staking)","min":"3700.0000000000","max":"89000.0100000000","days":"25","perc":"5.30","return":"100.00","period":"24"},{"id":"13","group":"3","name":"550% after 25 working days   (Deluxe staking)","min":"3500.0000000000","max":"99000.0100000000","days":"38","perc":"450.00","return":"100.00","period":"900"},{"id":"14","group":"3","name":"22% daily for 25 working days (Deluxe staking)","min":"4500.0000000000","max":"109000.0100000000","days":"25","perc":"22.00","return":"0.00","period":"24"},{"id":"15","group":"4","name":"1700% after 35 working days (Long Investment staking)","min":"10.0000000000","max":"100000.0100000000","days":"50","perc":"1600.00","return":"100.00","period":"1200"},{"id":"16","group":"4","name":"2400% after 40 working days (Long Investment staking)","min":"15.0000000000","max":"100000.0100000000","days":"58","perc":"2300.00","return":"100.00","period":"1400"},{"id":"17","group":"4","name":"6500% after 45 working days (Long Investment staking)","min":"20.0000000000","max":"100000.0100000000","days":"67","perc":"6400.00","return":"100.00","period":"1600"}];
	var vplans = {};

	for (bn in bval) {
		for (i in plans) {
			var planId = plans[i].id;
			if (!vplans[planId]) {
				vplans[planId] = {};
			}
			if (bn == 1) {
				vplans[planId].bonus = bval[bn];
			}
			if (bn == 2 && planId == 12) {
        vplans[planId].bonus = bval[bn];
      }
			if (bn == 3) {
				vplans[planId].cashback = bval[bn];
			}
			if (bn == 4 && planId == 12) {
				vplans[planId].cashback = bval[bn];
			}
			if (bn == 5 && planId == 14) {
				vplans[planId].cashback = bval[bn];
			}
		}
	}

	//Show all label
	for (var plan in vplans) {
		if (vplans[plan].bonus) {
			$('#plan-' + plan).next().prepend('<div class="epc-bonus">Bonus: +'+ vplans[plan].bonus[0] +'% <span class="timer" data-time="'+ vplans[plan].bonus[1] +'">'+ vplans[plan].bonus[1] +'</span></div>');
			timer($('#plan-' + plan).next().find('.timer'));
		}
	}
	
	function refreshBonus( refresh = 0 ) {
		sum = parseFloat($('input[name="Sum"]').val());
		plan = parseInt($('input[name="Plan"]:checked').val());
		curr = $('input[name="PSys"]:checked').data('curr');
		$('.bonus-info-label').html('');
		if (!vplans[plan].cashback) {
			$('.cashback-info-label').html('');
		}
		if (vplans[plan].bonus) {
			bonus = number_format(sum + sum * vplans[plan].bonus[0] / 100, 8, '.', '');
			$('.bonus-info-label').html('You will get <b>' + bonus + ' <span>' + curr + '</span></b> deposit');
		}
		if (vplans[plan].cashback) {
			cashback = number_format(sum * vplans[plan].cashback[0] / 100, 8, '.', '');
			if (!$('.cashback-info-label').html()) {
				$('.cashback-info-label').html('<div><p>After deposit you will get <b class="cashback-label-percent">'+vplans[plan].cashback[0]+'%</b> (<abbr class="cashback-label-amount">' + cashback + ' ' + curr + '</abbr>)<br/> cashback on your account balance.</p> Expires in: <span> [<i class="cahsback-timer" data-time="'+vplans[plan].cashback[1]+'"></i>]</span></div>');
				timer($('.cahsback-timer'));
			}
			else {
				$('.cashback-label-percent').text(vplans[plan].cashback[0]+'%');
				$('.cashback-label-amount').text( cashback + ' ' + curr );
				if (refresh) {
					$('.cahsback-timer').data('time',vplans[plan].cashback[1] );
					timer($('.cahsback-timer'),1);
				}
			}
		}
	}

	function number_format(number, decimals, decPoint, thousandsSep) {

		number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
		var n = !isFinite(+number) ? 0 : +number
		var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
		var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
		var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
		var s = ''

		var toFixedFix = function (n, prec) {
			if (('' + n).indexOf('e') === -1) {
				return +(Math.round(n + 'e+' + prec) + 'e-' + prec)
			} else {
				var arr = ('' + n).split('e')
				var sig = ''
				if (+arr[1] + prec > 0) {
					sig = '+'
				}
				return (+(Math.round(+arr[0] + 'e' + sig + (+arr[1] + prec)) + 'e-' + prec)).toFixed(prec)
			}
		}

		s = (prec ? toFixedFix(n, prec).toString() : '' + Math.round(n)).split('.')
		if (s[0].length > 3) {
			s[0] = s[0].replace(/\B(?=(?:\d3)+(?!\d))/g, sep)
		}
		if ((s[1] || '').length < prec) {
			s[1] = s[1] || ''
			s[1] += new Array(prec - s[1].length + 1).join('0')
		}

		return s.join(dec)
	}

	setTimeout(function() {
		refreshBonus();
	}, 100);

});


let intervalId; // объявляем переменную для хранения возвращаемого значения setInterval

function timer(el, refresh = 0) {
    let timerElem = el;
    let timeLeft = parseInt(timerElem.data('time'), 10);
		if (refresh) {
			if (intervalId) {
					clearInterval(intervalId); // останавливаем предыдущий таймер, если он существует
			}
		}

    intervalId = setInterval(function() { // сохраняем возвращаемое значение setInterval
        if (timeLeft <= 0) {
            timerElem.text("00:00:00");
            clearInterval(intervalId); // останавливаем таймер, если время истекло
            return;
        }

        timerElem.text(formatTime(timeLeft));
        timeLeft--;
    }, 1000);
}

function formatTime(seconds) {
	let days = Math.floor(seconds / (3600 * 24));
	seconds -= days * 3600 * 24;
	let hours = Math.floor(seconds / 3600);
	seconds -= hours * 3600;
	let minutes = Math.floor(seconds / 60);
	seconds -= minutes * 60;
	hours = hours.toString().padStart(2, '0');
	minutes = minutes.toString().padStart(2, '0');
	seconds = seconds.toString().padStart(2, '0');
	return days + 'd ' + hours + 'h '+ minutes + 'm ' + seconds + 's';
}
</script>