<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="featuredcontentglider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-1.2.2.pack.js"></script>
<script type="text/javascript" src="featuredcontentglider.js">
</script>
</head>
<body>
<div id="templatemo_container">
	<div id="templatemo_top_panel">
    	<div id="logo">
        </div>
        <script type="text/javascript">

			featuredcontentglider.init({
				gliderid: "canadaprovinces", //ID of main glider container
				contentclass: "glidecontent", //Shared CSS class name of each glider content
				togglerid: "p-select", //ID of toggler container
				remotecontent: "", //Get gliding contents from external file on server? "filename" or "" to disable
				selected: 0, //Default selected content index (0=1st)
				persiststate: false, //Remember last content shown within browser session (true/false)?
				speed: 500, //Glide animation duration (in milliseconds)
				direction: "updown", //set direction of glide: "updown", "downup", "leftright", or "downup"
				autorotate: false, //Auto rotate contents (true/false)?
				autorotateconfig: [3000, 2] //if auto rotate enabled, set [milliseconds_btw_rotations, cycles_before_stopping]
			})
		
		</script>
		
		<div id="p-select" class="glidecontenttoggler">
		
			<a href="#" class="toc page_01"><?php echo $link1; ?></a>
            <a href="#" class="toc page_02"><?php echo $link2; ?></a>
            <a href="#" class="toc page_03"><?php echo $link3; ?></a>
            <a href="#" class="toc page_04"><?php echo $link4; ?></a>
            <a href="#" class="toc page_05"><?php echo $link5; ?></a>
		
		</div>
        
    </div> <!-- end of top panel -->
