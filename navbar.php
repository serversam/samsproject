<div id="navbar">
	<div id="projectBtn" class="leftFlow"><a href="/projects">
		<span id="projWords" class="hideBlow1000">PROJECTS&nbsp;</span>
		<span id="projIcon" class="fa fa-clipboard fa-lg showBlow1000"></span></a>
	</div>
	<div id="myLogo" class="beforeSwipe"><a href ="/home">Lwande's Projects</a></div>
	<div id="rightNav" class="showHand">
		<div id="moreOpts" class="rightFlow"><span class="fa fa-bars fa-lg"></span></div>
		<div id="searchIco" class="rightFlow hideBlow460"><span class="fa fa-search fa-lg"></span></div>
		<div id="searchInput" class="rightFlow"><input type="search" placeholder="Search"></div>
		<div id="userAvatar" class="rightFlow hideBlow600"><span class="fa fa-circle fa-2x"></span></div>
	</div>
	<div id="optLists" class="showHand">
		<ul>
			<a class="showBlow600"><li>My Profile</li></a>
			<a id="searchProjDropDwn" class="showBlow460"><li>Search Projects</li></a>
			<!-- Load new content here -->
			<a><li>Option Content 1</li></a>
			<a><li>Option Content 2</li></a>
			<a><li>Option Content 3</li></a>
			<a><li>Option Content 4</li></a>
			<a><li>Option Content 5</li></a>
			<!--End loaded content-->
		</ul>
	</div>
		<script>
			var search = $("#searchInput");
			var ham = $("#optLists");
			var logo = $("#myLogo");

			$("#searchIco").click(function() {
				ham.hide();
				search.animate({width: 'toggle'}, 350);
				logo.toggleClass("sideSwipeLogo beforeSwipe");
			});

			$("#moreOpts").click(function() {
				search.hide();
				logo.addClass("beforeSwipe").removeClass("sideSwipeLogo");
				ham.toggle();
			});

			$("#searchProjDropDwn").click(function() {
				ham.hide();
				search.animate({width: 'toggle'}, 350);
			});

			$(document).ready(function () {
				search.hide();
				ham.hide();
			});
		</script>
 </div>