$jq4Menu(document).ready(function(){

	$jq4Menu("ul.subnav").parent().append("<span></span>"); //Only shows drop down trigger when js is enabled (Adds empty span tag after ul.subnav*)
	//$jq4Menu("ul.subnav").parent().find('a').attr('onclick','openDropdown();');
	$jq4Menu("ul.subnav").parent().find('a').click(function() { //When trigger is clicked...
		
		//Following events are applied to the subnav itself (moving subnav up and down)
		$jq4Menu(this).parent().find("ul.subnav").slideDown('fast').show(); //Drop down the subnav on click

		$jq4Menu(this).parent().hover(function() {
		}, function(){	
			$jq4Menu(this).parent().find("ul.subnav").slideUp('slow'); //When the mouse hovers out of the subnav, move it back up
		});

		//Following events are applied to the trigger (Hover events for the trigger)
		}).hover(function() { 
			$jq4Menu(this).addClass("subhover"); //On hover over, add class "subhover"
		}, function(){	//On Hover Out
			$jq4Menu(this).removeClass("subhover"); //On hover out, remove class "subhover"
	});
		
	$jq4Menu("ul.topnav li span").click(function() { //When trigger is clicked...
		
		//Following events are applied to the subnav itself (moving subnav up and down)
		$jq4Menu(this).parent().find("ul.subnav").slideDown('fast').show(); //Drop down the subnav on click

		$jq4Menu(this).parent().hover(function() {
		}, function(){	
			$jq4Menu(this).parent().find("ul.subnav").slideUp('slow'); //When the mouse hovers out of the subnav, move it back up
		});

		//Following events are applied to the trigger (Hover events for the trigger)
		}).hover(function() { 
			$jq4Menu(this).addClass("subhover"); //On hover over, add class "subhover"
		}, function(){	//On Hover Out
			$jq4Menu(this).removeClass("subhover"); //On hover out, remove class "subhover"
	});

});

function openDropdown() { //When trigger is clicked...
	
$jq4Menu(this).parent().find("ul.subnav").slideDown('fast').show();

}
