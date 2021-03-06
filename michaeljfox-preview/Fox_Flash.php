<? include '../include/preview-features.php'; ?>

<style type="text/css"><!--
/***** BEST PRACTICE CSS *****/

/* This is included in the mobile stylesheet so that it doesn't get removed when you inline CSS for desktop */
	/* Force Hotmail to display emails at full width */
	.ExternalClass {width: 100%;}
	.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}

/*** Drop your chosen modules' 480px and 320px CSS below ***//*** remember not to include this when you inline your CSS ***/

/***** MEDIA QUERIES DECLARATIONS *****/

	@media only screen and (max-width: 599px) {

	/*** General font styles 480px ***//* keep these in all your layouts */
	h1[class="h1"] {font-size:24px !important; letter-spacing:-1px !important;}
	h2[class="h2"] {font-size:21px !important; letter-spacing:-1px !important;}
	h3[class="h3"] {font-size:19px !important; letter-spacing:-1px !important;}
	h4[class="h4"] {font-size:17px !important; letter-spacing:0 !important;}
	h5[class="h5"] {font-size:15px !important; letter-spacing:0 !important;}

	/*** Container/Preheader 480px ***//* keep also these in all your layouts */
	table[class="MCwrapper"] {width:460px !important;}
	td[class="MCwrappercell"] {padding-top:0px !important; padding-bottom:23px !important;}
	table[class="hide"], td[class="hide"], img[class="hide"], p[class="hide"] {display:none !important;}

	/*** Header-06 module 480px ***/
	td[id="header06MC"] {background:#2C5768 !important; width:460px !important; padding-bottom:10px !important;}
	td[id="logonameWrapper"] {padding-bottom:0 !important;}

/******* Drop the CSS marked with '480px' in the section below *******/

	/*** Highlight-01 module 480px ***/
	td[class="HL01MC"] {background:#1B7B8D !important;width:460px !important; padding-top:5px !important; padding-bottom:5px !important;}
	td[class="HL02MC"] {background:#FFF !important;width:460px !important; padding-top:5px !important; padding-bottom:5px !important;}
	td[class="HL01wrapper"] {padding-top:15px; padding-bottom:5px;}
	td[class="HL01image"] {padding-left:15px !important; padding-top:0 !important;}
	td[class="HL01text"] {padding-left:10px !important; padding-right:10px !important;}
	td[class="HL01text"] h3 {font-size:15px !important; line-height:120% !important;}
	td[class="HL02text"] h3 {font-size:13px !important; line-height:120% !important;}

	/*** Featured-04 module 480px ***/
	td[class="featured04MC"] {width:460px !important; padding-bottom:0px !important;}
	td[class="featured04imageText"] {width:460px !important;}
	td[class="featured04image"] {width:284px !important;}
	td[class="featured04image"] a img {width:284px !important; height:229px !important;}
	td[class="featured04textBtn"] {width:175px !important;}
	td[class="featured04title"], td[class="featured04text"], td[class="featured04button"] {padding-left:15px !important; padding-top:10px !important; padding-right:15px !important; padding-bottom:7px !important;}
	td[class="featured04title"] {font-size:19px !important; padding-bottom:5px !important}
	td[class="featured04text"] {font-size:13px !important; line-height:18px !important; padding-bottom:7px !important;}
	td[class="featured04text"], td[class="featured04button"] {padding-top:5px !important;}

	/*** Category03 module 480px ***/
	td[class="category03MC"] {width:414px !important; padding-top:15px !important; padding-bottom:7px !important;}
	table[class="category03wrapperTable"] {width:414px !important;}
	td[class="category03wrapper"] {width:170px !important; padding-left:15px; padding-right:15px;}
	td[class="category03wrapper"] h1 {font-size:14px !important; letter-spacing:0 !important; padding-left:0 !important;}
	td[class="cat03colorblock"] {width:23px !important; height:23px !important;}

	/*** Text-Photo-Combo-13 module 480px ***/
	td[class="TPC13MC"] {width:414px !important; padding-top:20px !important; padding-bottom:20px !important;}
	td[class="TPC13imageWrapper"] {padding-right:23px !important;}
	td[class="TPC13title"] h2 {margin-bottom:5px !important;}

	/*** Divider-06 module 480px ***/
	td[class="divider06MC"] {width:414px !important;}
	td[class="divider06MC"] img {width:414px !important; height:7px !important;}

	/*** Images-05 module 480px ***/
	td[class="Img05MC"] {width:414px !important; padding-top:10px !important; padding-bottom:15px !important;}
	td[class="Img05container1"], td[class="Img05container2"] {width:143px !important;}
	td[class="Img05supratitle"], td[class="Img05Title"], td[class="Img05p"], td[class="Img05Item1"] {width:130px !important;}
	td[class="Img05Item2"], td[class="Img05Item3"] {width:130px !important;}
	td[class="Img05img"] img {width:114px !important; height:114px !important;}

	/*** Footer-07 module 480px ***/
	td[id="footer07MC"] {width:460px !important; padding-top:15px !important; padding-bottom:15px !important;}
	td[id="footer07copyText"], td[id="footer07linksWrapper"] {width:414px !important;}
	td[id="footer07logo"], td[id="footer07copyText"], td[id="footer07linksWrapper"], td[id="footer07social"], td[id="footer07connect"], td[id="footer07permRem"] {padding-left:23px !important; padding-right:23px !important;}
	td[id="footer07linksWrapper"] {padding-bottom:15px !important;}
	td[id="footer07links"] {line-height:30px !important; font-size:13px !important;}
	td[id="footer07permRem"], td[id="footer07copyText"] span, td[id="footer07copyText"] span a {color:#666666 !important; font-size:13px !important;}
	td[id="footer07permRem"] {font-size:16px !important; padding-top:10px !important; padding-bottom:10px !important;}



/******* End of 480px CSS *******/
	}


	@media only screen and (max-width: 479px) {

	/*** General font styles 320px ***//* keep these in all your layouts */
	h1[class="h1"] {font-size:20px !important; letter-spacing:-1px !important;}
	h2[class="h2"] {font-size:18px !important; letter-spacing:-1px !important;}
	h3[class="h3"] {font-size:17px !important; letter-spacing:-1px !important;}
	h4[class="h4"] {font-size:16px !important; letter-spacing:0 !important;}
	h5[class="h5"] {font-size:15px !important; letter-spacing:0 !important;}

	/*** Container / Preheader 320px ***//* keep also these in all your layouts */
	table[class="MCwrapper"] {width:300px !important;}
	td[class="MCwrappercell"] {padding-top:0px !important; padding-bottom:15px !important;}

	/*** Header06 module 320px ***/
	td[id="header06MC"] {width:300px !important; padding-bottom:10px !important;}

	/*** Featured-04 module 320px ***/
	td[class="featured04MC"] {width:300px !important; padding-bottom:10px !important;}
	td[class="featured04image"] {width:300px !important;}
	td[class="featured04image"] a img {width:300px !important; height:243px !important;}
	td[class="featured04textBtn"] {width:300px !important; padding-bottom:20px !important; padding-top:5px !important;}

	/*** Highlight-01 module 320px ***/
	td[class="HL01MC"] {width:300px !important; padding-top:0px !important; padding-bottom:8px !important;}
	td[class="HL02MC"] {width:300px !important; padding-top:0px !important; padding-bottom:8px !important;}
	td[class="HL01wrapper"] {padding-top:15px; padding-bottom:5px;}
	td[class="HL01image"] {width:270px !important; padding-left:70px !important; padding-top:0 !important;}
	td[class="HL01text"] {width:300px !important; padding-top:10px !important; padding-left:15px; padding-right:15px;}
	td[class="HL01text"] h3 {font-size:17px !important;}
	td[class="HL02text"] h3 {font-size:17px !important;}

	/*** Category03 module 320px ***/
	td[class="category03MC"] {width:270px !important; padding-top:10px !important; padding-bottom:5px !important;}
	table[class="category03wrapperTable"] {width:270px !important;}
	td[class="category03wrapper"] {width:160px !important; padding-left:10px; padding-right:10px;}
	td[class="category03wrapper"] h1 {font-size:14px !important; letter-spacing:0 !important;}

	/*** Text-Photo-Combo-13 module 320px ***/
	td[class="TPC13MC"] {width:270px !important; padding-top:10px !important; padding-bottom:15px !important;}
	td[class="TPC13imageWrapper"] {padding-right:0 !important; padding-left:52px !important; padding-bottom:15px !important;}
	td[class="TPC13title"] h2 {font-size:17px !important; padding-top:10px !important; margin-bottom:3px !important;}

	/*** Divider-06 module 320px ***/
	td[class="divider06MC"] {width:270px !important;}
	td[class="divider06MC"] img {width:270px !important; height:5px !important;}

	/*** Images-05 module 320px ***/
	td[class="Img05MC"] {width:270px !important; padding-top:10px !important; padding-bottom:10px !important;}
	table[class="Img05columnTable"] {margin-right:0 !important;}
	td[class="Img05supratitle"], td[class="Img05Title"] {width:270px !important;}
	td[class="Img05Item1"], td[class="Img05Item2"], td[class="Img05Item3"] {padding-left:45px !important;}
	td[class="Img05container1"], td[class="Img05container2"], td[class="Img05container3"] {width:270px !important;}
	td[class="Img05img"] a img {width:167px !important; height:167px !important;}
	td[class="Img05p"] {padding-bottom:30px !important;}
	td[class="Img05divider"] {width:270px !important; display:block !important; border-top:3px dotted #efefef !important; height:3px !important; font-size:3px !important; line-height:0 !important; padding-bottom:15px !important;}


	/*** Footer-07 module 320px ***/
	td[id="footer07MC"] {width:300px !important; padding-top:10px !important; padding-bottom:10px !important;}
	td[id="footer07logo"], td[id="footer07copyText"], td[id="footer07linksWrapper"], td[id="footer07social"], td[id="footer07connect"], td[id="footer07permRem"] {padding-left:15px !important; padding-right:15px !important;}
	td[id="footer07links"] {line-height:36px !important;}



/******* Drop the CSS marked with '320px' in the section below *******/



/******* End of 320px CSS *******/
	}
--></style>
<!-- Outlook 2007+ fix -->
<!--[if gte mso 9]>
<mce:style type="text/css"><! 
	/********** START FEATURED-04 MODULE OUTLOOK FIX **********/
	/*** Featured-04 ***/
	table.featured04imageTable {mso-table-lspace:0pt;mso-table-rspace:0;}
	td.featured04textBtn {width:220px;}
/********** END FEATURED-04 MODULE OUTLOOK FIX **********/
-->
<!--[endif] -->
<!-- / Outlook 2007+ fix -->
<!--  START OVERALL WRAPPER TABLE   -->
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td style="padding-bottom: 50px; padding-top: 0; color: #555555; border-collapse: collapse; padding-left: 0; padding-right: 0; margin: 0;" bgcolor="#eeeeee">
	<!--  ******* START HEADER 6 MODULE *******   -->
	
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td id="topSpace" class="hide" style="color: #555555; border-collapse: collapse; padding: 0; margin: 0;"><img style="border: 0; display: block; outline: none;" src="http://www.joshwdesign.com/emails/_layouts/img/spacer.gif" alt="" height="5" /></td>
</tr>
</tbody>
</table>
<!--- just some space -->
	
<table border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td id="header06MC" style="margin-top: -15px; margin-bottom: 0; color: #555555; border-collapse: collapse; margin-left: 0; margin-right: 0; padding: 0;" width="600">
		<!--  START PREHEADER / BROWSER VIEW MODULE   -->
		
<table class="hide" border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td id="preheader" style="padding-bottom: 10px; padding-top: 0; color: #555555; border-collapse: collapse; padding-left: 0; padding-right: 0; margin: 0;" width="300" align="left" valign="bottom">
<p style="font-family: 'Lucida Grande','Lucida Sans Unicode','Lucida Sans',Helvetica,Arial,Verdana,sans-serif; margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; font-size: 12px; line-height: 100%; color: #777777; letter-spacing: 0;">FOX FLASH - July 2013</p>
</td>
<td id="browserView" style="padding-bottom: 10px; padding-top: 0; color: #555555; border-collapse: collapse; padding-left: 0; padding-right: 0; margin: 0;" width="300" align="right" valign="bottom">
<p style="font-family: 'Lucida Grande','Lucida Sans Unicode','Lucida Sans',Helvetica,Arial,Verdana,sans-serif; margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; font-size: 12px; line-height: 100%; color: #777777; letter-spacing: 0;">Can't see email? <a style="color: #3ab5ed; text-decoration: none;" href="http://www2.michaeljfox.org/site/MessageViewer?pw_id=1601&amp;s_AffiliateSecCatId=1" target="_blank">View in browser</a></p>
</td>
</tr>
</tbody>
</table>
<!--  END PREHEADER / BROWSER VIEW MODULE  -->
		<!--  START LOGO+NAME CONTAINER   -->
		
<table border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td id="logonameWrapper" style="background: #2C5768; padding-top: 10px; padding-bottom: 20px; color: #555555; border-collapse: collapse; padding-left: 0; padding-right: 0; margin: 0;" width="600" align="center">
				<a style="color: #3ab5ed; text-decoration: none;" href="https://www.michaeljfox.org/" target="_blank"><img id="logonameImage" style="border: 0; display: block; outline: none;" src="http://www.joshwdesign.com/emails/_layouts/img/mjff_logo_white_trans.png" alt="" width="240" /></a>
			</td>
</tr>
</tbody>
</table>
<!--  END LOGO+NAME CONTAINER   -->
	</td>
</tr>
</tbody>
</table>
<!--  START 600px WRAPPER   -->
	
<table class="MCwrapper" border="0" cellspacing="0" cellpadding="0" width="600" align="center">
<tbody>
<tr>
<td class="MCwrappercell" style="padding-bottom: 30px; border-top: 1px solid #22505e; border-bottom: 1px solid #9ddaf6; color: #555555; border-collapse: collapse; padding-left: 0; padding-right: 0; margin: 0;" bgcolor="#ffffff">
	<!--  ******* END HEADER 6 MODULE *******   -->
		<!--  START HIGHLIGHT-01 MODULE   -->
		
<table border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td class="HL01MC" style="padding-bottom: 0px; color: #fff; border-collapse: collapse; padding-left: 0; padding-right: 0; margin: 0;" width="600">

<table border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#307A8C">
<tbody>
<tr>
<td class="HL01wrapper" style="padding-top: 8px; padding-bottom: 3px; color: #555555; border-collapse: collapse; padding-left: 0; padding-right: 0; margin: 0;" width="600">

<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="HL01text" style="padding-left: 20px; padding-top: 0; padding-bottom: 0; color: #fff; border-collapse: collapse; text-align: left; margin: 0;" width="300">
<h3 style="mso-line-height-rule: exactly; line-height: 18pt; letter-spacing: 0; margin-bottom: 5px; font-weight: normal; font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif; margin-top: 0; padding-top: 0; padding-bottom: 0; padding-left: 0px; color: #fff; font-size: 17px;">FOXFLASH - JULY 2013</h3>
</td>
<td class="HL01text" style="padding-right: 20px; padding-top: 0; padding-bottom: 4px; color: #fff; border-collapse: collapse; text-align: right; margin: 0;" width="300">
<div><!--[if mso]>
  <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://emailbtn.net/" style="height:26px;v-text-anchor:middle;width:120px;" strokecolor="#4e95ab" fillcolor="#478ca1">
    <w:anchorlock />
    <center style="color:#ffffff;font-family:'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif;font-size:13px;font-weight:normal;" _mce_style="color: #ffffff; font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif; font-size: 13px; font-weight: normal;">DONATE</center>
  </v:rect>
<![endif]--><!--[if !mso]--><a style="background-color: #478ca1; border: 1px solid #4e95ab; color: #ffffff; display: inline-block; font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif; font-size: 14px; font-weight: normal; line-height: 26px; text-align: center; text-decoration: none; width: 120px; padding-top: 3px; box-shadow: 2px 2px 0px rgba(0,0,0,.15);" href="https://www.michaeljfox.org/get-involved/donation.php?fr_id=2380">DONATE</a><!--[endif]--></div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--  END HIGHLIGHT-01 MODULE   -->
		<!--  START FEATURED-04 MODULE   -->
		
<table border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td class="featured04MC" style="padding-bottom: 10px;" width="600">
			
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="featured04imageText" style="border-top: 5px solid #efefef; border-bottom: 5px solid #efefef; border-collapse: collapse; background-color: #2e576a;" width="600">
				
<table class="featured04imageTable" border="0" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td class="featured04image" width="370" align="left">
					<!-- <a href="https://www.michaeljfox.org/foundation/news-detail.php?doctors-differ-on-genetic-testing-for-parkinson-vs-breast-cancer" target="_blank"> -->
					<!-- <img style="border-style: none;" src="http://www2.michaeljfox.org/images/content/pagebuilder/Genetics.png" alt="" hspace="0" vspace="0" width="370" height="300" /> -->
					<div style="width:370; height:300; text-decoration:none; background-color:#3c3c3c; text-align:center; vertical-align:middle; color:white; font-size:2em; display: table-cell;">370px width x 300px height</div>

					<!-- </a> -->
				</td>
</tr>
</tbody>
</table>
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="featured04textBtn" style="background-color: #2e576a; color: #fefefe; border-collapse: collapse;" width="230" valign="top">
					
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="featured04title" style="padding-left: 20px; padding-top: 15px; padding-right: 20px; padding-bottom: 15px; color: #fefefe; font-size: 21px; line-height: 1.2; letter-spacing: -1px; font-style: normal; font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif;"><a style="color: #f77f00; text-decoration: none;" href="https://www.michaeljfox.org/foundation/news-detail.php?doctors-differ-on-genetic-testing-for-parkinson-vs-breast-cancer" target="_blank">Clinicians' Attitudes on Genetic Testing for Parkinson's vs. Breast Cancer</a></td>
</tr>
<tr>
	<td class="featured04text" style="padding-left: 20px; padding-top: 0; padding-right: 20px; padding-bottom: 20px; color: #fefefe; font-size: 14px; line-height: 21px; letter-spacing: 0; font-style: normal; font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif;"><p>The availability of disease prevention and treatment options may influence whether doctors recommend genetic testing for their patients.</p></td>
</tr>
<tr>
<td class="featured04button" style="padding-left: 20px; padding-top: 0; padding-right: 20px; padding-bottom: 10px; color: #fefefe; font-size: 14px; line-height: 21px; letter-spacing: 0; font-style: normal; font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif;" align="left"><a style="color: #40b3dd;" href="https://www.michaeljfox.org/foundation/news-detail.php?doctors-differ-on-genetic-testing-for-parkinson-vs-breast-cancer" target="_blank">Read more</a></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--  END FEATURED-04 MODULE   -->
		<!--  START HIGHLIGHT-01 MODULE   -->
		
<table border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td class="HL02MC" style="padding-bottom: 10px; color: #555555; border-collapse: collapse; padding-left: 0; padding-right: 0; margin: 0;" width="600">

<table style="border-top: 1px solid #d8f0fb; border-bottom: 1px solid #d8f0fb;" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#f5fbfe">
<tbody>
<tr>
<td class="HL01wrapper" style="padding-top: 10px; padding-bottom: 5px; color: #555555; border-collapse: collapse; padding-left: 0; padding-right: 0; margin: 0;" width="600">

<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="HL02text" style="padding-top: 0; padding-bottom: 0; color: #555555; border-collapse: collapse; margin: 0;" width="600">
<h3 style="mso-line-height-rule: exactly; line-height: 18pt; font-size: 13px; letter-spacing: 0; margin-bottom: 5px; font-weight: normal; font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif; margin-top: 0; padding-top: 0; padding-bottom: 0; color: #666; text-align: center;"><span class="HL02Icon"><img style="position: relative; top: 2px;" src="http://www.joshwdesign.com/emails/_layouts/img/webinar_icon.png" alt="" width="14" height="14" /></span> &nbsp;&nbsp;Next Hot Topics Webinar: "Genetics and PD" on September 24. <a style="color: #40b3dd;" href="https://event.on24.com/eventRegistration/EventLobbyServlet?target=registration.jsp&amp;eventid=650784&amp;sessionid=1&amp;key=76E57441700D26DFBA1D3CFDC23B427A&amp;sourcepage=register">Register Now</a></h3>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--  END HIGHLIGHT-01 MODULE   -->
		<!--  START CATEGORY-03 MODULE   -->
		
<table border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td class="category03MC" style="width: 540px; padding-top: 10px; padding-bottom: 0;" width="540">
			
<table class="category03wrapperTable" border="0" cellspacing="0" cellpadding="0" width="540">
<tbody>
<tr>
<td class="category03wrapper" style="padding-top: 0; padding-bottom: 0; padding-left: 15px; padding-right: 20px; border-bottom: 2px solid #377388;" width="180" height="35" bgcolor="#5F98AC">
<h1 style="color: #ffffff; margin-bottom: 0; margin-top: 0; font-weight: normal; font-size: 15px; font-variant: normal; letter-spacing: 0; font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif;">This Month's Stories</h1>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--  END CATEGORY-03 MODULE   -->
		<!--  START TEXT-PHOTO-COMBO-13 MODULE   -->
        
<table border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td class="TPC13MC" style="padding-top: 30px; padding-bottom: 30px;" width="540">
			
<table class="TPC13imageWrapperTable" border="0" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td class="TPC13imageWrapper" style="padding-right: 30px;">
            	
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="TPC13image" style="padding: 5px; border: 1px solid #cfcfcf; background-color: #efefef;" align="center" valign="bottom">
<!-- 						<a href="https://www.michaeljfox.org/page.html?lrrk2-cohort-consortium" target="_blank"><img style="border-style: none;" src="http://www2.michaeljfox.org/images/content/pagebuilder/Researcher2.jpg" alt="" hspace="0" vspace="0" width="154" height="154" /></a> -->
						<div style="width:154; height:154; text-decoration:none; background-color:#3c3c3c; text-align:center; vertical-align:middle; color:white; font-size:1em; display: table-cell;">154px width <br>x <br>154px height</div>
					</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="TPC13textBtnWrapper" width="320">
				
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="TPC13title" style="font-size: 17px; letter-spacing: -1px; margin-bottom: 0; font-weight: bold; color: #555555; font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif; line-height: 1.3em; margin-top: 0; padding-top: 0; padding-bottom: 0;"><a style="color: #40b3dd; text-decoration: none;" href="https://www.michaeljfox.org/page.html?lrrk2-cohort-consortium" target="_blank">LRRK2 Cohort Consortium Data and Biospecimens Available</a></td>
</tr>
<tr>
<td class="TPC13text" style="padding-bottom: 15px; font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif; font-size: 13px;">
<p class="p" align="top">We've opened access to LRRK2 clinical data and biospecimens from 1,910 individuals. Funding for use and analysis is also available. The deadline for our August biospecimen access and funding review is Thursday, July 25.</p>
</td>
</tr>
<tr>
<td class="TPC13button" style="font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif; font-size: 13px;" align="left">
							<a style="color: #40b3dd;" href="https://www.michaeljfox.org/page.html?lrrk2-cohort-consortium" target="_blank">
								Read the full story
							</a>
						</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--  END TEXT-PHOTO-COMBO-13 MODULE   -->
		<!--  START DIVIDER-06 MODULE   -->
		
<table border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff">
<tbody>
<tr>
<td class="divider06MC" style="border-top: 3px dotted #efefef; height: 3px; font-size: 3px; line-height: 0;" width="540" height="1">
			<img src="http://www.joshwdesign.com/emails/_layouts/img/spacer.gif" alt="" hspace="0" vspace="0" width="540" height="1" />
		</td>
</tr>
</tbody>
</table>
<!--  END DIVIDER-06 MODULE   -->
		<!--  START TEXT-PHOTO-COMBO-13 MODULE   -->
        
<table border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td class="TPC13MC" style="padding-top: 30px; padding-bottom: 30px;" width="540">
			
<table class="TPC13imageWrapperTable" border="0" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td class="TPC13imageWrapper" style="padding-right: 30px;">
            	
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="TPC13image" style="padding: 5px; border: 1px solid #cfcfcf; background-color: #efefef;" align="center" valign="bottom">
						<!-- <a href="https://www.michaeljfox.org/foundation/news-detail.php?repositioning-existing-therapies-to-get-novel-parkinson-drug-leads-off-the-ground" target="_blank"><img style="border: none;" src="http://www2.michaeljfox.org/images/content/pagebuilder/Don_Frail_of_AstraZeneca.png" alt="" hspace="0" vspace="0" width="154" height="154" /></a> -->
												<div style="width:154; height:154; text-decoration:none; background-color:#3c3c3c; text-align:center; vertical-align:middle; color:white; font-size:1em; display: table-cell;">154px width <br>x <br>154px height</div>
					</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="TPC13textBtnWrapper" width="320">
				
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="TPC13title" style="font-size: 17px; letter-spacing: -1px; margin-bottom: 0; font-weight: bold; color: #555555; font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif; line-height: 1.3em; margin-top: 0; padding-top: 0; padding-bottom: 0;"><a style="color: #40b3dd; text-decoration: none;" href="https://www.michaeljfox.org/foundation/news-detail.php?repositioning-existing-therapies-to-get-novel-parkinson-drug-leads-off-the-ground" target="_blank">Drug Repositioning: A Conversation with Don Frail of AstraZeneca</a></td>
</tr>
<tr>
<td class="TPC13text" style="padding-bottom: 15px; font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif; font-size: 13px;">
<p class="p" align="top">Like many pharmaceutical companies, AstraZeneca is increasing its focus on repositioning projects. Don Frail, co-author of <a style="color:#40b3dd;" href="http://www.amazon.com/books/dp/0470878274">Drug Repositioning: Bringing New Life to Shelved Assets and Existing Drugs</a>, talks about the potential.</p>
</td>
</tr>
<tr>
<td class="TPC13button" style="font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif; font-size: 13px;" align="left">
							<a style="color: #40b3dd;" href="https://www.michaeljfox.org/foundation/news-detail.php?repositioning-existing-therapies-to-get-novel-parkinson-drug-leads-off-the-ground" target="_blank">
								Read the full story
							</a>
						</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--  END TEXT-PHOTO-COMBO-13 MODULE   -->
		<!--  START DIVIDER-06 MODULE   -->
		
<table border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff">
<tbody>
<tr>
<td class="divider06MC" style="border-top: 3px dotted #efefef; height: 3px; font-size: 3px; line-height: 0;" width="540" height="1">
			<img src="http://www.joshwdesign.com/emails/_layouts/img/spacer.gif" alt="" hspace="0" vspace="0" width="540" height="1" />
		</td>
</tr>
</tbody>
</table>
<!--  END DIVIDER-06 MODULE   -->
		<!--  START TEXT-PHOTO-COMBO-13 MODULE   -->
        
<table border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td class="TPC13MC" style="padding-top: 30px; padding-bottom: 30px;" width="540">
			
<table class="TPC13imageWrapperTable" border="0" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td class="TPC13imageWrapper" style="padding-right: 30px;">
            	
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="TPC13image" style="padding: 5px; border: 1px solid #cfcfcf; background-color: #efefef;" align="center" valign="bottom">
						<!-- <a style="border: none;" href="https://www.michaeljfox.org/foundation/news-detail.php?mjff-provides-the-right-tools-to-drive-forward-parkinson-disease-research" target="_blank"><img style="border: none;" src="https://secure3.convio.net/mjff/images/content/pagebuilder/Beekers.jpg" alt="" hspace="0" vspace="0" width="154" height="154" /></a> -->
						<div style="width:154; height:154; text-decoration:none; background-color:#3c3c3c; text-align:center; vertical-align:middle; color:white; font-size:1em; display: table-cell;">154px width <br>x <br>154px height</div>
					</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="TPC13textBtnWrapper" width="320">
				
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="TPC13title" style="font-size: 17px; letter-spacing: -1px; margin-bottom: 0; font-weight: bold; color: #555555; font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif; line-height: 1.3em; margin-top: 0; padding-top: 0; padding-bottom: 0;"><a style="color: #40b3dd; text-decoration: none;" href="https://www.michaeljfox.org/foundation/news-detail.php?mjff-provides-the-right-tools-to-drive-forward-parkinson-disease-research" target="_blank">Study Shows Best Use of New LRRK2 Antibodies</a></td>
</tr>
<tr>
<td class="TPC13text" style="padding-bottom: 15px; font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif; font-size: 13px;">
<p class="p" align="top"><i>Biochemical Journal</i> has published a <a style="color:#40b3dd;" href="http://www.biochemj.org/bj/453/bj4530101.htm">paper and podcast</a> detailing MJFF-supported work to furnish researchers with better LRRK2 antibodies.</p>
</td>
</tr>
<tr>
<td class="TPC13button" style="font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif; font-size: 13px;" align="left">
							<a style="color: #40b3dd;" href="https://www.michaeljfox.org/foundation/news-detail.php?mjff-provides-the-right-tools-to-drive-forward-parkinson-disease-research" target="_blank">
								Read the full story
							</a>
						</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--  END TEXT-PHOTO-COMBO-13 MODULE   -->
		<!--  START CATEGORY-03 MODULE   -->
		
<table border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td class="category03MC" style="width: 540px; padding-top: 10px; padding-bottom: 0;" width="540">
			
<table class="category03wrapperTable" border="0" cellspacing="0" cellpadding="0" width="540">
<tbody>
<tr>
<td class="category03wrapper" style="padding-top: 0; padding-bottom: 0; padding-left: 15px; padding-right: 20px; border-bottom: 2px solid #377388;" width="180" height="35" bgcolor="#5F98AC">
<h1 style="color: #ffffff; margin-bottom: 0; margin-top: 0; font-weight: normal; font-size: 15px; font-variant: normal; letter-spacing: 0; font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif;">Featured Topics</h1>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--  END CATEGORY-03 MODULE   -->
		<!--  START IMAGES-05 MODULE   -->
		
<table border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td class="Img05MC" style="padding-top: 10px; padding-bottom: 20px;" width="540">
			<!--  Column 1   -->
			
<table class="Img05columnTable1" border="0" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td class="Img05container1" width="187">
				
<table border="0" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td class="Img05inner">
					
<table border="0" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
	<td class="Img05Title" style="font-family: Tahoma,Helvetica,Arial,Verdana,sans-serif; margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0px; font-size: 15px; line-height: 21px; color: #777777; letter-spacing: 0; font-weight: bold;" width="167"><p>PD Therapeutics Conference</p></td>
</tr>
<tr>
<td class="Img05p" style="font-family: Tahoma,Helvetica,Arial,Verdana,sans-serif; margin-top: 0; margin-bottom: 0; padding-top: 10px; padding-bottom: 0; font-size: 14px; line-height: 21px; color: #777777; letter-spacing: 0; font-weight: normal;" width="167" align="left"><p>Early registration pricing effective through July 26, 2013.</p><br />
	<a style="line-height: 21px; color: #40b3dd;" href="https://www.michaeljfox.org/page.html?therapeutics-conference" target="_blank"><p>Read More</p></a>
						</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--  Column 2   -->
			
<table class="Img05columnTable2" border="0" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td class="Img05container2" width="187">
				
<table border="0" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td class="Img05inner">
					
<table border="0" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td class="Img05Title" style="font-family: Tahoma,Helvetica,Arial,Verdana,sans-serif; margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0px; font-size: 15px; line-height: 21px; color: #777777; letter-spacing: 0; font-weight: bold;" width="167"><p>Funding Opportunities</p></td>
</tr>
<tr>
	<td class="Img05p" style="font-family: Tahoma,Helvetica,Arial,Verdana,sans-serif; margin-top: 0; margin-bottom: 0; padding-top: 10px; padding-bottom: 0; font-size: 14px; line-height: 21px; color: #777777; letter-spacing: 0; font-weight: normal;" width="167" align="left"><p>Learn more about our available funding programs and apply now!</p><br />
	<a style="line-height: 21px; color: #40b3dd;" href="https://www.michaeljfox.org/research/apply-for-grant.html" target="_blank"><p>Read More</p></a>
						</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--  Column 3   -->
			
<table class="Img05columnTable3" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="Img05container3">
				
<table border="0" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td class="Img05inner">
					
<table border="0" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td class="Img05Title" style="font-family: Tahoma,Helvetica,Arial,Verdana,sans-serif; margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0px; font-size: 15px; line-height: 21px; color: #777777; letter-spacing: 0; font-weight: bold;" width="167"><p>Partnering Program</p></td>
</tr>
<tr>
	<td class="Img05p" style="font-family: Tahoma,Helvetica,Arial,Verdana,sans-serif; margin-top: 0; margin-bottom: 0; padding-top: 10px; padding-bottom: 0; font-size: 14px; line-height: 21px; color: #777777; letter-spacing: 0; font-weight: normal;" width="167" align="left"><p>Some of our most promising projects made the first 2013 class.</p><br />
		<a style="line-height: 21px; color: #40b3dd;" href="https://www.michaeljfox.org/foundation/publication-detail.html?id=477&category=7" target="_blank"><p>Read More</p></a>
						</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--  END IMAGES-05 MODULE   -->
	</td>
</tr>
</tbody>
</table>
<!--  END 600px WRAPPER   -->
	<!--  ******* START FOOTER-07 MODULE *******   -->
	
<table border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td id="footer07MC" style="padding-top: 20px; padding-bottom: 30px;" width="600" bgcolor="#f5fbfe">
		
<table border="0" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td id="footer07midWrapper" style="padding-bottom: 10px;" width="600">
				
<table class="footer07linksTable" border="0" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td id="footer07copyText" style="padding-left: 30px; padding-bottom: 10px;" width="275"><span style="font-size: 12px; line-height: 18px; letter-spacing: 0; margin-top: 0; font-family: 'Lucida Grande','Lucida Sans Unicode','Lucida Sans',Tahoma,Helvetica,Arial,Verdana,sans-serif; color: #666;"><span>&copy; The Michael J. Fox Foundation<br />Grand Central Station, P.O. Box 4777<br />New York, NY 10163-4777<br />Tel: <a style="color: #40b3dd;" href="tel:18007087644">1-800-708-7644</a></span></span></td>
</tr>
<tr>
<td id="footer07linksWrapper" style="padding-left: 30px;" width="275">
						
<table border="0" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td id="footer07links" style="font-family: 'Lucida Grande','Lucida Sans Unicode','Lucida Sans',Helvetica,Arial,Verdana,sans-serif; color: #777777; font-size: 12px; line-height: 24px; letter-spacing: 0; margin-top: 0;" valign="top">
							<span><a style="color: #40b3dd;" href="http://www2.michaeljfox.org/site/TellAFriend" target="_blank">Forward</a>&nbsp;|</span>
							<span><a style="color: #40b3dd;" href="#" target="_blank">Privacy Policy</a>&nbsp;|</span>
							<span><a style="color: #40b3dd;" href="http://www2.michaeljfox.org/site/CO?pw_id=1601&amp;s_AffiliateSecCatId=1" target="_blank">Unsubscribe</a></span>
						</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td id="footer07connect" style="padding-left: 15px; font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif; line-height: 100%; margin-top: 0; padding-top: 0; padding-bottom: 10px; color: #666; font-size: 18px; letter-spacing: 0; margin-bottom: 5px; font-weight: normal;" width="260">Connect with us:</td>
</tr>
<tr>
<td id="footer07social" style="padding-left: 15px;">
						
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<!--- facebook -->
<td width="43" align="left"><a style="border: none;" href="http://www.facebook.com/michaeljfoxfoundation" target="_blank"><img title="Like us on Facebook" src="http://www.joshwdesign.com/emails/_layouts/img/social/facebook_32x32.png" alt="Like us on Facebook" hspace="0" vspace="0" width="32" height="32" /></a></td>
<!--- twitter -->
<td width="43" align="left"><a style="border: none;" href="http://twitter.com/#!/michaeljfoxorg" target="_blank"><img title="Follow us on Twitter" src="http://www.joshwdesign.com/emails/_layouts/img/social/twitter_32x32.png" alt="Follow us on Twitter" hspace="0" vspace="0" width="32" height="32" /></a></td>
<!--- linkedin -->
<td width="42" align="left"><a style="border: none;" href="http://www.linkedin.com/company/the-michael-j.-fox-foundation-for-parkinson's-research" target="_blank"><img title="Join our network on LinkedIn" src="http://www.joshwdesign.com/emails/_layouts/img/social/linkedin_32x32.png" alt="Join our network on LinkedIn" hspace="0" vspace="0" width="32" height="32" /></a></td>
<!--- googleplus -->
<td width="42" align="left"><a style="border: none;" href="https://plus.google.com/+michaeljfoxfoundation/posts" target="_blank"><img title="Add us on Google+" src="http://www.joshwdesign.com/emails/_layouts/img/social/googleplus_32x32.png" alt="Add us on Google+" hspace="0" vspace="0" width="32" height="32" /></a></td>
<!--- pinterest -->
<td width="43" align="left"><a style="border: none;" href="http://www.pinterest.com/michaeljfoxorg/" target="_blank"><img title="Follow us on Pinterest" src="http://50.57.35.97/files/Pinterest_Icon.png" alt="Follow us on Pinterest" hspace="0" vspace="0" width="37" height="37"></a></td>
<!--- RSS -->
<td width="42" align="left"><a style="border: none;" href="http://www.michaeljfox.org/foundation/news.html" target="_blank"><img title="Subscribe to our feed" src="http://www.joshwdesign.com/emails/_layouts/img/social/RSS_32x32.png" alt="Subscribe to our feed" hspace="0" vspace="0" width="32" height="32" /></a></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td id="footer07permRem" style="padding-left: 30px; font-size: 12px; line-height: 1.2; letter-spacing: 0; color: #999999; margin-top: 0; margin-bottom: 0; font-style: italic; font-family: 'Lucida Sans Unicode','Lucida Grande','Lucida Sans',Helvetica,Verdana,sans-serif;" width="600">
				You're receiving this newsletter because you signed up at <a style="color: #40b3dd;" href="#" target="_blank">www.michaeljfox.org</a>.
			</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--  ******* END FOOTER-07 MODULE *******   -->
<!--  END OVERALL WRAPPER TABLE   -->


