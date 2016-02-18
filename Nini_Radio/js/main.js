	// function to display close button and video in player web-resizer and description
	function webresizer(){
		document.getElementById("video_player").innerHTML ="<button id='close' onclick='closeVplayer()'>" + "<a title='Close Player' class='tooltip'>" + "</a>" + "<img src='images/close-button-md.png' alt='close' style='width:65%;'>" + "</button>"  +  
		"<video height='500' width='700' controls poster='images/wpr-poster.jpg'>" + 
		"<source src='Video/web-resizer.mp4'>" + 
		"<source src='Video/web-resizer.flv'>" + 
		"<source src='Video/web-resizer.ogv'>" + 
		"<source src='Video/web-resizer.webm'>" + 
		"</video>";
		document.getElementById("wpr-desc").style.display="inline";
	    			
	};
	// function to display close button and video in player marketing-ad and description
	function marketing(){
		document.getElementById("video_player").innerHTML = 
		"<button id='close' onclick='closeVplayer()'>" + "<a title='Close player' class='tooltip'>" + "</a>"  + "<img src='images/close-button-md.png' alt='close'style='width:65%;'>" + "</button>"  +
			"<video height='500' width='700' controls poster='images/ptr-poster.jpg'>" + 
			"<source src='Video/marketing-ad.mp4'>" + 
			"<source src='Video/marketing-ad.flv'>" + 
			"<source src='Video/marketing-ad.ogv'>" + 
			"<source src='Video/marketing-ad.webm'>" + 
			"</video>";
			document.getElementById("ptr-desc").style.display="inline";
	};
	// function to close video player and description
	function closeVplayer(){
		document.getElementById("video_player").innerHTML = "";
		document.getElementById("ptr-desc").style.display="none";
		document.getElementById("wpr-desc").style.display="none";

	};
	//fuction to display close button and audio in audio player and description
	function RMOB(){
		document.getElementById("audio_player").innerHTML = "<audio controls>" + "<source src='audio/RMO-Broadcast.mp3'>" + "<source src='audio/RMO-Broadcast.aac'>" + "<source src='audio/RMO-Broadcast.aiff'>" + "</audio>" + "<button onclick='closeAplayer()'>" + "<a title='Close player' class='tooltip'>" + "</a>" + "<img src='images/close-button-md.png' alt='close'style='width:65%;'>" + "</button>";
		document.getElementById("RMO-desc").style.display="inline";
	};
	//function to close audio player and description
	function closeAplayer(){
		document.getElementById("audio_player").innerHTML = "";
		document.getElementById("RMO-desc").style.display="none";
	};
	//function to show download links
	function alinks_show(){
		document.getElementById("downloads").style.display="inline";
		document.getElementById("dlpop").style.display="none";
	}
	//function to close download links and show download button
	function closelinks(){
		document.getElementById("downloads").style.display="none";
		document.getElementById("dlpop").style.display="inline";
	};



	



