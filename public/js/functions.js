jQuery(function($){
	var clipboard = new Clipboard('.btn');
	$('.tabs .tab-links a').on('click', function(e){
        var currentAttrValue = $(this).attr('href');
		// Show/Hide Tabs
        $('.tabs '+ currentAttrValue).slideDown(400).siblings().slideUp(400);  
        // Change/remove current tab to active
        $(this).parent('li').addClass('active').siblings().removeClass('active');
        e.preventDefault();
      });
	// faq // 
    var action = 'click';
    var speed = "500";
    $('.faq-col h4.question').on(action, function(){
       $(this).toggleClass('active');
       $(this).next().slideToggle(400);
    });
	//Setting calculator
	var percent = [6,7,8,9,10];
	var minMoney = [10,100,500,1000,1500];
	var maxMoney	= [99,499,999,1499,999999];
	$("#btc_amt").val(minMoney[0]);
	/*calculator*/
	function calc(){
		money = parseFloat($("#btc_amt").val());
		id = -1;
		var length = percent.length;
		var i = 0;
		do {
			if(minMoney[i] <= money && money <= maxMoney[i]){
				id = i;
				i = i + length;
			}
			i++
		}
		while(i < length)	
		if(id != -1){
		    profitDaily = money / 100 * percent[id];
			profitDaily = profitDaily.toFixed(8);
			profitWeekly = profitDaily * 7;
			profitWeekly = profitWeekly.toFixed(8);
			profitMonthly = profitDaily * 30;
			profitMonthly = profitMonthly.toFixed(8);

			if(money < minMoney[id] || isNaN(money) == true){
				$("#profitDaily").text("Error!");
				$("#profitWeekly").text("Error!");
				$("#profitMonthly").text("Error!");
			} else {
				$("#profitDaily").text("$ " + profitDaily);
				$("#profitWeekly").text("$ " + profitWeekly);
				$("#profitMonthly").text("$ " + profitMonthly);
			}
		} else {
			$("#profitDaily").text("Error!");
			$("#profitWeekly").text("Error!");
			$("#profitMonthly").text("Error!");
		}
		if(money <= 0.5){
			$('.investment-list li').removeClass('enabled');
			$('#plan-1').addClass('enabled');
			$('#dselect-1').prop('checked', true);
		}
		if(money <= 499 && money >= 100){
			$('.investment-list li').removeClass('enabled');
			$('#plan-2').addClass('enabled');
			$('#dselect-2').prop('checked', true);
		}
		if(money <= 999 && money >= 500){
			$('.investment-list li').removeClass('enabled');
			$('#plan-3').addClass('enabled');
			$('#dselect-3').prop('checked', true);
		}
		if(money <= 1499 && money >= 1000){
			$('.investment-list li').removeClass('enabled');
			$('#plan-4').addClass('enabled');
			$('#dselect-4').prop('checked', true);
		}
		if(money >= 1500){
			$('.investment-list li').removeClass('enabled');
			$('#plan-5').addClass('enabled');
			$('#dselect-5').prop('checked', true);
		}
	}
	calc();
	if($("#btc_amt").length){
		calc();
	}
	$("#btc_amt").keyup(function(){
		calc();
	});
	$('ul.investment-list li').each(function(){
		$(this).click(function(){
			var data_amt = $(this).attr('data-amount');
			$('#btc_amt').val(data_amt);
			$(this).find('.dselect').prop('checked', true);
			calc();
		});
	});
});