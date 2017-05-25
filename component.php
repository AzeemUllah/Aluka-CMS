<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
	
<?php
	
		

		include 'cls_db.php';
		include 'cnp_all.php';
		$obj= new db();
		$conn = $obj->create_connection("localhost","root","","marocms");
		
$cpn = new components();

echo "<br><br><h3>TITLE</h3>";
echo $cpn->get_tittle(1,$conn);

echo "<br><br><h3>BUTTON</h3>";
echo $cpn->get_button(1,$conn);

echo "<br><br><h3>INPUT</h3>";
echo $cpn->get_input(1,$conn);

echo "<br><br><h3>INPUT WITH ICON</h3>";
echo $cpn->get_input_with_icon(1,$conn);

echo "<br><br><h3>CHECKBOX</h3>";
echo $cpn->get_checkbox(1,$conn);

echo "<br><br><h3>RADIO BUTTON</h3>";
echo $cpn->get_radio_button(1,$conn);

echo "<br><br><h3>TOGGLE BUTTON</h3>";
echo $cpn->get_toggle_button(1,$conn);

echo "<br><br><h3>SELECT</h3>";
echo $cpn->get_select(1,$conn);

echo "<br><br><h3>TEXTAREA</h3>";
echo $cpn->get_textarea(1,$conn);

echo "<br><br><h3>LABEL</h3>";
echo $cpn->get_label(1,$conn);

echo "<br><br><h3>TABS CARD</h3>";
echo $cpn->tabs_card(1,$conn);

echo "<br><br><h3>NAVIGATION PILLS</h3>";
echo $cpn->navigation_pills(1,$conn);

echo "<br><br><h3>BLOG CARD</h3>";
echo $cpn->blog_card(1,$conn);

echo "<br><br><h3>PROFILE CARD ONE</h3>";
echo $cpn->profile_card_one(1,$conn);

echo "<br><br><h3>PROFILE CARD TWO</h3>";
echo $cpn->profile_card_two(1,$conn);

echo "<br><br><h3>SOCAIL BUTTON DEFAULT</h3>";
echo $cpn->social_button_default(1,$conn);

echo "<br><br><h3>SOCIAL BUTTON SMALL</h3>";
echo $cpn->social_button_small(1,$conn);

echo "<br><br><h3>SOCIAL BUTTON SIMPLE</h3>";
echo $cpn->social_button_simple(1,$conn);

echo "<br><br><h3>NAVIGATION BAR STYLE ONE</h3>";
echo $cpn->navigation_bar_style_one(1,$conn);

echo "<br><br><h3>NAVIGATION BAR STYLE TWO</h3>";
echo $cpn->navigation_bar_style_two(1,$conn);

echo "<br><br><h3>PRE FOOTER STYLE ONE</h3>";
echo $cpn->pre_footer_style_one(1,$conn);

echo "<br><br><h3>PRE FOOTER STYLE TWO</h3>";
echo $cpn->pre_footer_style_two(1,$conn);

echo "<br><br><h3>SUBSCRIBE STYLE ONE</h3>";
echo $cpn->subscribe_style_one(1,$conn);

echo "<br><br><h3>SUBSCRIBE STYLE TWO</h3>";
echo $cpn->subscribe_style_two(1,$conn);

echo "<br><br><h3>FOOTER STYLE ONE</h3>";
echo $cpn->footer_style_one(1,$conn);

echo "<br><br><h3>FOOTER STYLE TWO</h3>";
echo $cpn->footer_style_two(1,$conn);

echo "<br><br><h3>FOOTER STYLE THREE</h3>";
echo $cpn->footer_style_three(1,$conn);

echo "<br><br><h3>FOOTER STYLE FOUR</h3>";
echo $cpn->footer_style_four(1,$conn);

echo "<br><br><h3>IMAGE ROUNDED</h3>";
echo $cpn->image_rounded(1,$conn);

echo "<br><br><h3>IMAGE CIRCLE</h3>";
echo $cpn->image_circle(1,$conn);

echo "<br><br><h3>COMMENT BOX</h3>";
echo $cpn->coment_box(1,$conn);

echo "<br><br><h3>TABLE SIMPLE</h3>";
echo $cpn->table_simple(1,$conn);

echo "<br><br><h3>PAGE HEADER</h3>";
echo $cpn->page_header(1,$conn);

echo "<br><br><h3>NAVIGATION BAR STYLE THREE</h3>";
echo $cpn->navigation_bar_style_three(1,$conn);

echo "<br><br><h3>FEATURE</h3>";
echo $cpn->feature(1,$conn);

echo "<br><br><h3>TEAM</h3>";
echo $cpn->team(1,$conn);

echo "<br><br><h3>CONTACT US</h3>";
echo $cpn->contact_us(1,$conn);


echo "<select>
<option value='get_tittle'>get_tittle</option>
<option value='get_button'>get_button</option>
<option value='get_input'>get_input</option>
<option value='get_input_with_icon'>get_input_with_icon</option>
<option value='get_checkbox'>get_checkbox</option>
<option value='get_radio_button'>get_radio_button</option>
<option value='get_toggle_button'>get_toggle_button</option>
<option value='get_select'>get_select</option>
<option value='get_textarea'>get_textarea</option>
<option value='get_label'>get_label</option>
<option value='tabs_card'>tabs_card</option>
<option value='navigation_pills'>navigation_pills</option>
<option value='blog_card'>blog_card</option>
<option value='profile_card_one'>profile_card_one</option>
<option value='profile_card_two'>profile_card_two</option>
<option value='social_button_default'>social_button_default</option>
<option value='social_button_small'>social_button_small</option>
<option value='social_button_simple'>social_button_simple</option>
<option value='navigation_bar_style_one'>navigation_bar_style_one</option>
<option value='navigation_bar_style_two'>navigation_bar_style_two</option>
<option value='pre_footer_style_one'>pre_footer_style_one</option>
<option value='pre_footer_style_two'>pre_footer_style_two</option>
<option value='subscribe_style_one'>subscribe_style_one</option>
<option value='subscribe_style_two'>subscribe_style_two</option>
<option value='footer_style_one'>footer_style_one</option>
<option value='footer_style_two'>footer_style_two</option>
<option value='footer_style_three'>footer_style_three</option>
<option value='footer_style_four'>footer_style_four</option>
<option value='image_rounded'>image_rounded</option>
<option value='image_circle'>image_circle</option>
<option value='coment_box'>coment_box</option>
<option value='table_simple'>table_simple</option>
<option value='page_header'>page_header</option>
<option value='navigation_bar_style_three'>navigation_bar_style_three</option>
<option value='feature'>feature</option>
<option value='team'>team</option>
<option value='contact_us'>contact_us</option>

</select>";




?>
<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--	Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!--	Plugin for Select Form control, full documentation here: https://github.com/FezVrasta/dropdown.js -->
	<script src="assets/js/jquery.dropdown.js" type="text/javascript"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
	<script src="assets/js/jquery.tagsinput.js"></script>

	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
	<script src="assets/js/jasny-bootstrap.min.js"></script>

	<!-- Plugin For Google Maps -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>
