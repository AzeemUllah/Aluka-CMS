<?php
class components
{
    
    function tittle($tittle_text, $type)
    {
        if ($type == 'normal')
            return "<div class='title'>
	                <h2>" . $tittle_text . "</h2>
	            </div>";
        else if ($type == 'blog')
            return "<h3 class='title'>" . $tittle_text . "</h3>";
    }
    
    function get_tittle($id, $conn)
    {
        $type   = $tittle_text = "";
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_tittle where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            $type        = $row['type'];
            $tittle_text = $row['tittle_text'];
        }
        return $this->tittle($tittle_text, $type);
    }
    
    
    
    
    
    function tittle_with_subtittle($tittle_text, $subtittle_text)
    {
        return "<div class='title'>
						<h3>" . $tittle_text . "<br />
							<small>" . $subtittle_text . "</small>
						</h3>
					</div>
					";
    }
    
    function get_tittle_with_subtittle($id, $conn)
    {
        $tittlete = "";
        $subtext  = "";
        $obj      = new db();
        $result   = $obj->read_db_single_row("select * from cpn_tittle_with_subtittle where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            $tittletext = $row['tittle_text'];
            $subtext    = $row['subtittle_text'];
        }
        return $this->tittle_with_subtittle($tittletext, $subtext);
    }
    
    
    
    
    
    
    
    
    
    function button($button_name, $round, $icon_name, $color, $button_id, $button_type, $button_size)
    {
        $class = '';
        if ($round == 'Y')
            $class .= 'btn-round';
        
        return "<div class='col-md-4'><button class='btn " . $color . " " . $button_size . " " . $class . "' id='" . $button_id . "' type='" . $button_type . "'>
					<i class='material-icons'>" . $icon_name . "</i> " . $button_name . "
				</button></div>";
    }
    
    
    function get_button($id, $conn)
    {
        $button_name = $round = $icon_name = $color = $button_id = $button_type = $button_size = '';
        $obj         = new db();
        $result      = $obj->read_db_single_row("select * from cpn_button where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            $button_name = $row['name'];
            $round       = $row['round'];
            $icon_name   = $row['icon_name'];
            $color       = $row['color'];
            $button_id   = $row['id'];
            $button_type = $row['type'];
            $button_size = $row['size'];
        }
        return $this->button($button_name, $round, $icon_name, $color, $button_id, $button_type, $button_size);
        
    }
    
    
    
    
    
    
    
    
    function input($input_id, $input_type, $label_text, $floating, $placeholder)
    {
        $class = '';
        if ($floating == 'Y')
            $class .= 'label-floating';
        
        
        return "<div class='col-md-4'>
							<div class='form-group " . $class . "'>
								<label class='control-label'>" . $label_text . "</label>
								<input type='" . $input_type . "' class='form-control' placeholder='" . $placeholder . "' id='" . $input_id . "'>
							</div>
							</div>
												
					";
    }
    
    function get_input($id, $conn)
    {
        $input_id = $input_type = $label_text = $floating = $placeholder = "";
        $obj      = new db();
        $result   = $obj->read_db_single_row("select * from cpn_input where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            $input_id    = $row['id'];
            $input_type  = $row['type'];
            $label_text  = $row['label_text'];
            $floating    = $row['floating'];
            $placeholder = $row['placeholder'];
        }
        return $this->input($input_id, $input_type, $label_text, $floating, $placeholder);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    function input_with_icon($input_id, $input_type, $icon_name, $placeholder)
    {
        
        return "<div class='col-md-4'><div class='input-group'>
								<span class='input-group-addon'>
									<i class='material-icons'>" . $icon_name . "</i>
								</span>
								<input type='" . $input_type . "' id= '" . $input_id . "' class='form-control' placeholder='" . $placeholder . "'>
							</div>
							</div>
					";
        
    }
    
    function get_input_with_icon($id, $conn)
    {
        $input_id = $input_type = $icon_name = $placeholder = "";
        $obj      = new db();
        $result   = $obj->read_db_single_row("select * from cpn_input_with_icon where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            $input_id    = $row['id'];
            $input_type  = $row['type'];
            $icon_name   = $row['icon_name'];
            $placeholder = $row['placeholder'];
        }
        return $this->input_with_icon($input_id, $input_type, $icon_name, $placeholder);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    function checkbox($checkbox_id, $checked, $checkbox_name)
    {
        $class = '';
        if ($checked == 'Y')
            $class .= "checked";
        
        return "<div class='checkbox'>
								<label>
									<input type='checkbox' name='" . $checkbox_id . "' id='" . $checkbox_id . "' " . $class . ">
									" . $checkbox_name . "
								</label>
							</div>";
    }
    
    
    function get_checkbox($id, $conn)
    {
        $checkbox_id = $checked = $checkbox_name = "";
        $obj         = new db();
        $result      = $obj->read_db_single_row("select * from cpn_checkbox where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            $checkbox_id   = $row['id'];
            $checked       = $row['checked'];
            $checkbox_name = $row['name'];
        }
        return $this->checkbox($checkbox_id, $checked, $checkbox_name);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    function radio_button($radio_id, $radio_name, $radio_text)
    {
        return "<div class='radio'>
								<label>
									<input type='radio' name='" . $radio_name . "' id='" . $radio_id . "'>
									" . $radio_text . "
								</label>
							</div>
			";
    }
    
    
    function get_radio_button($id, $conn)
    {
        $radio_id = $radio_name = $radio_text = "";
        $obj      = new db();
        $result   = $obj->read_db_single_row("select * from cpn_radio where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            $radio_id   = $row['id'];
            $radio_name = $row['name'];
            $radio_text = $row['text'];
        }
        return $this->radio_button($radio_id, $radio_name, $radio_text);
    }
    
    
    
    
    
    
    
    
    
    
    function toggle_button($toggle_id, $toggle_checked, $toggle_text)
    {
        $class = "";
        if ($toggle_checked == 'Y')
            $class .= "checked";
        return "
							<div class='togglebutton'>
				            	<label>
				                	<input type='checkbox' " . $class . " id='" . $toggle_id . "'>
									" . $toggle_text . "
				            	</label>
				            </div>";
        
    }
    
    function get_toggle_button($id, $conn)
    {
        $toggle_id = $toggle_checked = $toggle_text = "";
        $obj       = new db();
        $result    = $obj->read_db_single_row("select * from cpn_toggle where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            $toggle_id   = $row['id'];
            $toggle_name = $row['name'];
            $toggle_text = $row['text'];
        }
        return $this->toggle_button($toggle_id, $toggle_checked, $toggle_text);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    function select($placeholder, $data_set, $default_text, $style, $select_id)
    {
        $class = "";
        if ($style == 'fancy')
            $class .= 'btn btn-raised btn-primary btn-round';
        else
            $class .= "form-control";
        
        
        $toReturn = "<div class='col-md-1'><select class='select " . $class . "' placeholder='" . $placeholder . "' id='" . $select_id . "'>
		                                <option disabled selected class='disabled'>" . $default_text . "</option>
		                                ";
        $toReturn .= $data_set;
        
        $toReturn .= "
                   </select></div>";
        
        return $toReturn;
        
    }
    
    
    function get_select($id, $conn)
    {
        $placeholder = $default_text = $style = $select_id = "";
        $data_set    = "";
        $obj         = new db();
        $result      = $obj->read_db_single_row("select * from cpn_select where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            $placeholder  = $row['placeholder'];
            $default_text = $row['default_text'];
            $style        = $row['style'];
            $select_id    = $row['id'];
        }
        
        $result = $obj->read_db_single_row("select * from cpn_select_option where select_id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            $data_set .= "<option value='" . $row['value'] . "'>" . $row['text'] . "</option>";
        }
        
        return $this->select($placeholder, $data_set, $default_text, $style, $select_id);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    function textarea($textarea_id, $label_text, $floating)
    {
        $class = "";
        
        if ($floating == 'Y') {
            $class .= "label-floating";
        }
        
        return "<div class='col-md-4'><div class='form-group " . $class . "'>
							    <label class='control-label'>" . $label_text . "</label>
							    <textarea class='form-control' id='" . $textarea_id . "' rows='5'></textarea>
	                        </div></div>";
    }
    
    function get_textarea($id, $conn)
    {
        $textarea_id = $label_text = $floating = "";
        
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_textarea where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            $textarea_id = $row['id'];
            $label_text  = $row['label_text'];
            $floating    = $row['floating'];
        }
        return $this->textarea($textarea_id, $label_text, $floating);
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    function label($label_color, $label_text)
    {
        return "<span class='label " . $label_color . "'>" . $label_text . "</span>";
    }
    
    
    function get_label($id, $conn)
    {
        $label_color = $label_text = "";
        
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_label where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            $label_text  = $row['text'];
            $label_color = $row['color'];
        }
        return $this->label($label_color, $label_text);
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    function tabs_card($id, $conn)
    {
        $class  = "";
        $simple = $header_color = "";
        $count  = 0;
        
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_tabs_card where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            $simple       = $row['simple'];
            $header_color = $row['color'];
        }
        
        if ($simple == "Y")
            $class .= "card-plain";
        
        $toReturn = "<div class='col-md-4'><div class='card card-nav-tabs " . $class . "'>
								<div class='header " . $header_color . "'>
									
									<div class='nav-tabs-navigation'>
										<div class='nav-tabs-wrapper'>
											<ul class='nav nav-tabs' data-tabs='tabs'>";
        
        
        $result = $obj->read_db_single_row("select * from cpn_tabs_card_content where tc_id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($count == 0) {
                $class = "active";
                $count++;
            } else
                $class = "";
            $toReturn .= "<li class='" . $class . "'>
													<a href='#" . $row['heading'] . $row['id'] . "' data-toggle='tab'>
														<i class='material-icons'>" . $row['icon_name'] . "</i>
														" . $row['heading'] . "
													</a>
												</li>";
            
        }
        
        $toReturn .= "							</ul>
										</div>
									</div>
								</div>
								<div class='content'>
									<div class='tab-content text-center'>";
        $class  = "";
        $count  = 0;
        $result = $obj->read_db_single_row("select * from cpn_tabs_card_content where tc_id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($count == 0) {
                $class = "active";
                $count++;
            } else
                $class = "";
            $toReturn .= "<div class='tab-pane " . $class . "' id='" . $row['heading'] . $row['id'] . "'>
											<p>" . $row['paragraph'] . "</p>
										</div>";
        }
        
        $toReturn .= "			</div>
								</div>
							</div>
							</div>";
        
        
        return $toReturn;
    }
    
    
    
    function navigation_pills($id, $conn)
    {
        $tittle = $style = $classNavPillStyle = "";
        $count  = 0;
        
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_navigation_pill where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            $tittle = $row['tittle'];
            $style  = $row['style'];
        }
        
        $toReturn = "<h3><small>" . $tittle . "</small></h3>";
        
        if ($style == 'vertical') {
            $toReturn .= "<div class='row'><div class='col-md-4'>";
            $classNavPillStyle .= "nav-stacked";
        }
        
        $toReturn .= "<ul class='nav nav-pills nav-pills-rose " . $classNavPillStyle . "'>
							";
        
        $result = $obj->read_db_single_row("select * from cpn_navigation_pill_content where np_id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($count == 0) {
                $class = "active";
                $count++;
            } else
                $class = "";
            
            $toReturn .= "<li class='" . $class . "'><a href='#" . $row['heading'] . $row['id'] . "' data-toggle='tab'>" . $row['heading'] . "</a></li>";
        }
        
        
        
        $toReturn .= "				</ul>";
        
        if ($style == 'vertical')
            $toReturn .= "</div><div class='col-md-8'>";
        
        $toReturn .= "          	<div class='tab-content tab-space'>
	                    ";
        $class = "";
        $count = 0;
        
        $result = $obj->read_db_single_row("select * from cpn_navigation_pill_content where np_id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($count == 0) {
                $class = " active";
                $count++;
            } else
                $class = "";
            
            $toReturn .= "<div class='tab-pane" . $class . "' id='" . $row['heading'] . $row['id'] . "'>
									" . $row['paragraph'] . "
								  </div>
	                    	    ";
            
        }
        
        
        
        $toReturn .= "					
	                    	</div>";
        if ($style == 'vertical')
            $toReturn .= "</div></div>";
        
        
        
        return $toReturn;
    }
    
    
    
    
    
    function blog_card($id, $conn)
    {
        $image  = $link = $status = $status_icon = $heading = $username = $user_pic = $date = "";
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_blog_card bd, users u where bd.id = '" . $id . "' and u.id=bd.id", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            $toReturn = "
			<div class='col-md-6'>
			<div class='card card-blog'>
	    							<div class='card-image'>
	    								<a href='" . $row['link'] . "'>
	    									<img class='img' src='" . $row['image'] . "' />
	    								</a>
	    							</div>
	    							<div class='content'>
	    								<h6 class='category text-danger'>
	    									<i class='material-icons'>" . $row['status_icon'] . "</i> " . $row['status'] . "
	    								</h6>
	    								<h4 class='card-title'>
	    									<a href='" . $row['link'] . "'>" . $row['heading'] . "</a>
	    								</h4>
	    								<div class='footer'>
	    	                                <div class='author'>
	    	                                    <a href='" . $row['link'] . "'>
	    	                                       <img src='" . $row['pic'] . "' alt='...' class='avatar img-raised'>
	    	                                       <span>" . $row['user_name'] . "</span>
	    	                                    </a>
	    	                                </div>
	    	                               <div class='stats'>
	    	                                    <i class='material-icons'>schedule</i>" . $row['date'] . "
	    	                                </div>
	    	                            </div>
	    							</div>
	    						</div>
								
								</div>";
        }
        
        return $toReturn;
        
    }
    
    
    
    
    function profile_card_one($id, $conn)
    {
        
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_profile_card_one where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            
            $toReturn = "
				<div class='col-md-4 col-offset-2'>
			<div class='card card-profile'>
	    							<div class='card-image'>
	    								<a href='" . $row['link'] . "'>
	    									<img class='img' src='" . $row['pic'] . "' />

	    									<div class='card-title'>
	    										" . $row['name'] . "
	    									</div>
	    								</a>
	    							</div>

	    							<div class='content'>
	    								<h6 class='category text-info'>" . $row['desegnation'] . "</h6>

	    								<p class='card-description'>
	    									" . $row['few_words'] . "
	    								</p>

	    								<div class='footer'>
	    									<a href='" . $row['twitter'] . "' class='btn btn-just-icon btn-simple btn-twitter'><i class='fa fa-twitter'></i></a>
	    									<a href='" . $row['google'] . "' class='btn btn-just-icon btn-simple btn-google'><i class='fa fa-google'></i></a>
	    									<a href='" . $row['instagram'] . "' class='btn btn-just-icon btn-simple btn-instagram'><i class='fa fa-instagram'></i></a>
	    									<a href='" . $row['facebook'] . "' class='btn btn-just-icon btn-simple btn-facebook'><i class='fa fa-facebook'></i></a>
	    								</div>
	    							</div>
								</div>
								</div>";
        }
        
        return $toReturn;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    function profile_card_two($id, $conn)
    {
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_profile_card_two where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            
            $toReturn = "
			<div class='col-md-4'>
			<div class='card card-profile'>
	    							<div class='card-avatar'>
	    								<a href='" . $row['link'] . "'>
	    									<img class='img' src='" . $row['pic'] . "' />
	    								</a>
	    							</div>

	    							<div class='content'>
	    								<h6 class='category text-gray'>" . $row['desegnation'] . "</h6>

	    								<h4 class='card-title'>" . $row['name'] . "</h4>

	    								<p class='card-description'>
	    									" . $row['few_words'] . "
	    								</p>
	    							</div>
								</div>
								</div>";
        }
        
        return $toReturn;
    }
    
    
    
    
    
    
    
    
    function social_button_default($id, $conn)
    {
        
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_social_button_default where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            
            if ($row['type'] == 'twitter')
                $toReturn = "<button class='btn btn-social btn-fill btn-twitter' onclick=\"document.location.href='" . $row['address'] . "'\";>
	                			<i class='fa fa-twitter'></i>  " . $row['text'] . "
				</button>";
            else if ($row['type'] == 'facebook')
                $toReturn = "<button class='btn btn-social btn-fill btn-facebook' onclick=\"document.location.href='" . $row['address'] . "'\";>
	                			<i class='fa fa-facebook-square'></i>    " . $row['text'] . "
				</button>";
            else if ($row['type'] == 'google+')
                $toReturn = "<button class='btn btn-social btn-fill btn-google' onclick=\"document.location.href='" . $row['address'] . "'\";>
	                			<i class='fa fa-google-square'></i>  " . $row['text'] . "
				</button>";
            else if ($row['type'] == 'linkedin')
                $toReturn = "<button class='btn btn-social btn-fill btn-linkedin' onclick=\"document.location.href='" . $row['address'] . "'\";>
	                			<i class='fa fa-linkedin-square'></i>  " . $row['text'] . "
				</button>";
            else if ($row['type'] == 'pintrest')
                $toReturn = "<button class='btn btn-social btn-fill btn-pinterest' onclick=\"document.location.href='" . $row['address'] . "'\";>
	                			<i class='fa fa-pinterest'></i>  " . $row['text'] . "
				</button>";
            else if ($row['type'] == 'youtube')
                $toReturn = "<button class='btn btn-social btn-fill btn-youtube' onclick=\"document.location.href='" . $row['address'] . "'\";>
	                			<i class='fa fa-youtube-play'></i>  " . $row['text'] . "
				</button>";
            
            else if ($row['type'] == 'tumblr')
                $toReturn = "<button class='btn btn-social btn-fill btn-tumblr' onclick=\"document.location.href='" . $row['address'] . "'\";>
	                			<i class='fa fa-tumblr-square'></i>  " . $row['text'] . "
				</button>";
            else if ($row['type'] == 'github')
                $toReturn = "<button class='btn btn-social btn-fill btn-github' onclick=\"document.location.href='" . $row['address'] . "'\";>
	                			<i class='fa fa-github'></i>  " . $row['text'] . "
				</button>";
            else if ($row['type'] == 'behance')
                $toReturn = "<button class='btn btn-social btn-fill btn-behance' onclick=\"document.location.href='" . $row['address'] . "'\";>
	                			<i class='fa fa-behance-square'></i>  " . $row['text'] . "
				</button>";
            else if ($row['type'] == 'dribbble')
                $toReturn = "<button class='btn btn-social btn-fill btn-dribbble' onclick=\"document.location.href='" . $row['address'] . "'\";>
	                			<i class='fa fa-dribbble'></i>  " . $row['text'] . "
				</button>";
            else if ($row['type'] == 'reddit')
                $toReturn = "<button class='btn btn-social btn-fill btn-reddit' onclick=\"document.location.href='" . $row['address'] . "'\";>
	                			<i class='fa fa-reddit'></i>  " . $row['text'] . "
				</button>";
            
            
            
            
            
            
        }
        
        return $toReturn;
    }
    
    
    
    
    
    function social_button_small($id, $conn)
    {
        $class  = '';
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_social_button_small where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['round'] == 'Y')
                $class .= ' btn-round';
            
            
            if ($row['type'] == 'twitter')
                $toReturn = "<button class='btn btn-just-icon " . $class . " btn-twitter' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-twitter'></i>
	                		</button>";
            else if ($row['type'] == 'facebook')
                $toReturn = "<button class='btn btn-just-icon " . $class . " btn-facebook' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-facebook'></i>
	                		</button>";
            else if ($row['type'] == 'google+')
                $toReturn = "<button class='btn btn-just-icon " . $class . " btn-google' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-google'></i>
	                		</button>";
            else if ($row['type'] == 'linkedin')
                $toReturn = "<button class='btn btn-just-icon " . $class . " btn-linkedin' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-linkedin'></i>
	                		</button>";
            else if ($row['type'] == 'pintrest')
                $toReturn = "<button class='btn btn-just-icon " . $class . " btn-pinterest' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-pinterest'></i>
	                		</button>";
            else if ($row['type'] == 'youtube')
                $toReturn = "<button class='btn btn-just-icon " . $class . " btn-youtube' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-youtube'></i>
	                		</button>";
            else if ($row['type'] == 'tumblr')
                $toReturn = "<button class='btn btn-just-icon " . $class . " btn-tumblr' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-tumblr'></i>
	                		</button>";
            else if ($row['type'] == 'github')
                $toReturn = "<button class='btn btn-just-icon " . $class . " btn-github' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-github'></i>
	                		</button>";
            else if ($row['type'] == 'behance')
                $toReturn = "<button class='btn btn-just-icon " . $class . " btn-behance' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-behance'></i>
	                		</button>";
            else if ($row['type'] == 'dribbble')
                $toReturn = "<button class='btn btn-just-icon " . $class . " btn-dribbble' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-dribbble'></i>
	                		</button>";
            else if ($row['type'] == 'reddit')
                $toReturn = "<button class='btn btn-just-icon " . $class . " btn-reddit' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-reddit'></i>
	                		</button>";
            
            
            
            
            
            
        }
        
        return $toReturn;
    }
    
    
    
    function social_button_simple($id, $conn)
    {
        
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_social_button_simple where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            
            if ($row['type'] == 'twitter')
                $toReturn = "<button class='btn btn-simple  btn-twitter' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-twitter'></i> " . $row['text'] . "
	                		</button>";
            else if ($row['type'] == 'facebook')
                $toReturn = "<button class='btn btn-simple  btn-facebook' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-facebook'></i> " . $row['text'] . "
	                		</button>";
            else if ($row['type'] == 'google+')
                $toReturn = "<button class='btn btn-simple  btn-google' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-google'></i> " . $row['text'] . "
	                		</button>";
            else if ($row['type'] == 'linkedin')
                $toReturn = "<button class='btn btn-simple btn-linkedin' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-linkedin'></i> " . $row['text'] . "
	                		</button>";
            else if ($row['type'] == 'pintrest')
                $toReturn = "<button class='btn btn-simple  btn-pinterest' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-pinterest'></i> " . $row['text'] . "
	                		</button>";
            else if ($row['type'] == 'youtube')
                $toReturn = "<button class='btn btn-simple  btn-youtube' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-youtube'></i> " . $row['text'] . "
	                		</button>";
            else if ($row['type'] == 'tumblr')
                $toReturn = "<button class='btn btn-simple  btn-tumblr' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-tumblr'></i> " . $row['text'] . "
	                		</button>";
            else if ($row['type'] == 'github')
                $toReturn = "<button class='btn btn-simple  btn-github' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-github'></i> " . $row['text'] . "
	                		</button>";
            else if ($row['type'] == 'behance')
                $toReturn = "<button class='btn btn-simple  btn-behance' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-behance'></i> " . $row['text'] . "
	                		</button>";
            else if ($row['type'] == 'dribbble')
                $toReturn = "<button class='btn btn-simple  btn-dribbble' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-dribbble'></i> " . $row['text'] . "
	                		</button>";
            else if ($row['type'] == 'reddit')
                $toReturn = "<button class='btn btn-simple  btn-reddit' onclick=\"document.location.href='" . $row['address'] . "'\">
	                			<i class='fa fa-reddit'></i> " . $row['text'] . "
	                		</button>";
            
            
            
            
            
            
        }
        
        return $toReturn;
    }
    
    
    
    
    
    
    
    
    
    
    
    function navigation_bar_style_one($id, $conn)
    {
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_navigation_bar_style_one where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            
            echo "<nav class='navbar navbar-rose'>
	                  <div class='container'>
	                    
	                    <div class='navbar-header'>
	                      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar-Rose" . $row['id'] . "' aria-expanded='false'>
	                        <span class='sr-only'>Toggle navigation</span>
	                        <span class='icon-bar'></span>
	                        <span class='icon-bar'></span>
	                        <span class='icon-bar'></span>
	                      </button>
	                      <a class='navbar-brand' href='" . $row['brandNameAddress'] . "'>" . $row['brandName'] . "</a>
	                    </div>

	                    
	                    <div class='collapse navbar-collapse' id='navbar-Rose" . $row['id'] . "'>
	                      <ul class='nav navbar-nav'>

			";
            if ($row['cpn_navigation_bar_rose_links'] == 'Y') {
                $result2 = $obj->read_db_single_row("select * from cpn_navigation_bar_style_one_links where navigation_bar_rose_id = '" . $row['id'] . "'", $conn);
                while ($row2 = mysqli_fetch_assoc($result2)) {
                    echo "
						  <li class=''>
	    						<a href='" . $row2['pageAddress'] . "'>" . $row2['pageName'] . "</a>
			</li>";
                }
            }
            echo "</ul>
	                      <form class='navbar-form navbar-right' role='search'>
	                        <div class='form-group form-white'>
	                          <input type='text' class='form-control' placeholder='Search'>
	                        </div>
	                        <button type='submit' class='btn btn-white btn-raised btn-fab btn-fab-mini'><i class='material-icons'>search</i></button>
	                      </form>

	                    </div>
						</div>
	                </nav>
	   ";
        }
        
    }
    
    
    
    
    
    function navigation_bar_style_two($id, $conn)
    {
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_navigation_bar_style_two where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            
            
            
            echo "
			<nav class='navbar navbar-primary'>
						<div class='container'>
							<div class='navbar-header'>
								<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#nav-bar-style-two" . $row['id'] . "'>
									<span class='sr-only'>Toggle navigation</span>
									<span class='icon-bar'></span>
									<span class='icon-bar'></span>
									<span class='icon-bar'></span>
								</button>
								<a class='navbar-brand' href='" . $row['brandNameAddress'] . "'>" . $row['brandName'] . "</a>
							</div>

							<div class='collapse navbar-collapse' id='nav-bar-style-two" . $row['id'] . "'>
								<ul class='nav navbar-nav navbar-right'>
									";
            
            $result2 = $obj->read_db_single_row("select * from cpn_navigation_bar_style_two_links where navigation_bar_style_two_id = '" . $row['id'] . "'", $conn);
            while ($row2 = mysqli_fetch_assoc($result2)) {
                
                
                echo "
									<li class=''>
		                                <a href='" . $row2['pageAddress'] . "'>
											<i class='material-icons'>" . $row2['iconName'] . "</i>
											" . $row2['pageName'] . "
		                                </a>
		                            </li>";
            }
            
            echo "
									
								</ul>
							</div>
						</div>
					</nav>
		   ";
        }
    }
    
    
    
    
    
    
    function pre_footer_style_one($id, $conn)
    {
        
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_pre_footer_style_one where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            
            
            
            echo "<div class='social-line social-line-white text-center'>
	        		<div class='container'>
	        			<div class='row'>
	        				<div class='col-md-12'>
	        					<h4 class='title'>" . $row['tittle'] . "</h4>
	        				</div>";
            $result2 = $obj->read_db_single_row("select * from cpn_pre_footer_style_one_links where pre_footer_style_one_id = '" . $id . "'", $conn);
            while ($row2 = mysqli_fetch_assoc($result2)) {
                
                
                if ($row2['type'] == 'twitter')
                    echo "<a href='" . $row2['address'] . "' class='btn btn-twitter btn-round'>
								<i class='fa fa-twitter'></i> " . $row2['text'] . "</a> ";
                else if ($row2['type'] == 'facebook')
                    echo "<a href='" . $row2['address'] . "' class='btn btn-facebook btn-round'>
								<i class='fa fa-facebook'></i> " . $row2['text'] . "</a> ";
                
                
                else if ($row2['type'] == 'google+')
                    echo "<a href='" . $row2['address'] . "' class='btn btn-google btn-round'>
								<i class='fa fa-google'></i> " . $row2['text'] . "</a> ";
                
                else if ($row2['type'] == 'linkedin')
                    echo "<a href='" . $row2['address'] . "' class='btn btn-linkedin btn-round'>
								<i class='fa fa-linkedin'></i> " . $row2['text'] . "</a> ";
                
                
                else if ($row2['type'] == 'pintrest')
                    echo "<a href='" . $row2['address'] . "' class='btn btn-pintrest btn-round'>
								<i class='fa fa-pintrest'></i> " . $row2['text'] . "</a> ";
                else if ($row2['type'] == 'youtube')
                    echo "<a href='" . $row2['address'] . "' class='btn btn-youtube btn-round'>
								<i class='fa fa-youtube'></i> " . $row2['text'] . "</a> ";
                
                else if ($row2['type'] == 'tumblr')
                    echo "<a href='" . $row2['address'] . "' class='btn btn-tumblr btn-round'>
								<i class='fa fa-tumblr'></i> " . $row2['text'] . "</a> ";
                
                else if ($row2['type'] == 'github')
                    echo "<a href='" . $row2['address'] . "' class='btn btn-github btn-round'>
								<i class='fa fa-github'></i> " . $row2['text'] . "</a> ";
                
                else if ($row2['type'] == 'behance')
                    echo "<a href='" . $row2['address'] . "' class='btn btn-behance btn-round'>
								<i class='fa fa-behance'></i> " . $row2['text'] . "</a> ";
                
                else if ($row2['type'] == 'dribbble')
                    echo "<a href='" . $row2['address'] . "' class='btn btn-dribbble btn-round'>
								<i class='fa fa-dribbble'></i> " . $row2['text'] . "</a> ";
                
                else if ($row2['type'] == 'reddit')
                    echo "<a href='" . $row2['address'] . "' class='btn btn-reddit btn-round'>
								<i class='fa fa-reddit'></i> " . $row2['text'] . "</a> ";
                
                
                
                
            }
            echo "</div>
	        		</div>
	        	</div>
";
        }
        
    }
    
    
    
    
    
    
    function pre_footer_style_two($id, $conn)
    {
        $color_type = '';
        $obj        = new db();
        $result     = $obj->read_db_single_row("select * from cpn_pre_footer_style_two where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['colorType'] == 'dark')
                $color_type = 'social-line-black';
            else
                $color_type = 'social-line-white';
            
            echo "<div class='social-line social-line-big-icons " . $color_type . "'>
	        		<div class='container'>
	        			<div class='row'>";
            
            
            $result2  = $obj->read_db_single_row("select * from cpn_pre_footer_style_two_links where pre_footer_style_two_id = '" . $row['id'] . "'", $conn);
            $num_rows = $result2->num_rows;
            $num_rows = 12 / $num_rows;
            while ($row2 = mysqli_fetch_assoc($result2)) {
                
                echo "<div class='col-md-" . $num_rows . "'>
	        					<a href='index.html#pablo' class='btn btn-simple btn-just-icon btn-twitter'>
	        						<i class='fa fa-twitter'></i>
	        					</a>
	        				</div>";
            }
            
            echo "</div>
	        		</div>
	        	</div>";
            
        }
        
    }
    
    
    
    
    
    function subscribe_style_one($id, $conn)
    {
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_subscribe_style_one where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            
            echo "<div class='subscribe-line subscribe-line-image' style='background-image: url('" . $row['backgroundImage'] . "');'>
	        		<div class='container'>
	        			<div class='row'>
	        				<div class='col-md-6 col-md-offset-3'>
	        					<div class='text-center'>
	        						<h3 class='title'>" . $row['heading'] . "</h3>
	        						<p class='description'>
	        							" . $row['description'] . "
	        						</p>
	        					</div>

	        					<div class='card card-raised card-form-horizontal'>
	        						<div class='content'>
	        							<form method='' action='' id='subsStyleOneForm" . $row['id'] . "'>
	        								<div class='row'>
	        									<div class='col-sm-8'>

	        										<div class='input-group'>
	        											<span class='input-group-addon'>
	        												<i class='material-icons'>mail</i>
	        											</span>
	        											<input type='email' value='' placeholder='Your Email...' class='form-control' id='subsStyleOneEmailBox" . $row['id'] . "'/>
	        										</div>
	        									</div>
	        									<div class='col-sm-4'>
	        										<button type='button' class='btn btn-primary btn-block'>Subscribe</button>
	        									</div>
	        								</div>
	        							</form>
	        						</div>
	        					</div>

	        				</div>
	        			</div>
	        		</div>
	        	</div>";
        }
    }
    
    
    
    
    
    
    function subscribe_style_two($id, $conn)
    {
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_subscribe_style_two where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='subscribe-line subscribe-line-white'>
	        		<div class='container'>
	        			<div class='row'>
	        				<div class='col-md-6'>
	        					<h3 class='title'>" . $row['heading'] . "</h3>
	        					<p class='description'>
	        						" . $row['description'] . "
	        					</p>
	        				</div>
	        				<div class='col-md-6'>
	        					<div class='card card-plain card-form-horizontal'>
	        						<div class='content'>
	        							<form method='' action='' id='subsStyleTwoForm" . $row['id'] . "'>
	        								<div class='row'>
	        									<div class='col-sm-8'>

	        										<div class='input-group'>
	        											<span class='input-group-addon'>
	        												<i class='material-icons'>mail</i>
	        											</span>
	        											<input type='email' value='' placeholder='Your Email...' class='form-control' id='subsStyleTwoEmailBox" . $row['id'] . "' />
	        										</div>
	        									</div>
	        									<div class='col-sm-4'>
	        										<button type='button' class='btn btn-rose btn-round btn-block'>Subscribe</button>
	        									</div>
	        								</div>
	        							</form>
	        						</div>
	        					</div>

	        				</div>
	        			</div>
	        		</div>
	        	</div>";
        }
        
        
    }
    
    
    
    
    function footer_style_one($id, $conn)
    {
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_footer_style_one where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<footer class='footer footer-white'>
	            		<div class='container'>
	            			<a class='footer-brand' href='" . $row['brandAddress'] . "'>" . $row['brandName'] . "</a>

	            			<ul class='pull-center'>
	            				";
            
            $result2 = $obj->read_db_single_row("select * from cpn_footer_style_one_links where footer_style_one_id = '" . $row['id'] . "'", $conn);
            while ($row2 = mysqli_fetch_assoc($result2)) {
                
                echo "
								<li>
	            					<a href='" . $row2['linkAddress'] . "'>
	            						" . $row2['linkName'] . "
	            					</a>
	            				</li>";
            }
            echo "
	            			</ul>

	            			<ul class='social-buttons pull-right'>
";
            $result3 = $obj->read_db_single_row("select * from cpn_footer_style_one_social_link where footer_style_one_id = '" . $row['id'] . "'", $conn);
            while ($row3 = mysqli_fetch_assoc($result3)) {
                
                
                echo "						<li>";
                if ($row3['type'] == 'twitter')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn btn-twitter btn-just-icon btn-simple'>
								<i class='fa fa-twitter'></i> </a> ";
                else if ($row3['type'] == 'facebook')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn btn-facebook btn-just-icon btn-simple'>
								<i class='fa fa-facebook'></i></a> ";
                
                
                else if ($row3['type'] == 'google+')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn btn-google btn-just-icon btn-simple'>
								<i class='fa fa-google'></i> </a> ";
                
                else if ($row3['type'] == 'linkedin')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn btn-linkedin btn-just-icon btn-simple'>
								<i class='fa fa-linkedin'></i> </a> ";
                
                
                else if ($row3['type'] == 'pintrest')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn btn-pintrest btn-just-icon btn-simple'>
								<i class='fa fa-pintrest'></i></a> ";
                else if ($row3['type'] == 'youtube')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn btn-youtube btn-just-icon btn-simple'>
								<i class='fa fa-youtube'></i> </a> ";
                
                else if ($row3['type'] == 'tumblr')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn btn-tumblr btn-just-icon btn-simple'>
								<i class='fa fa-tumblr'></i> </a> ";
                
                else if ($row3['type'] == 'github')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn btn-github btn-just-icon btn-simple'>
								<i class='fa fa-github'></i> </a> ";
                
                else if ($row3['type'] == 'behance')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn btn-behance btn-just-icon btn-simple'>
								<i class='fa fa-behance'></i></a> ";
                
                else if ($row3['type'] == 'dribbble')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn btn-dribbble btn-just-icon btn-simple'>
								<i class='fa fa-dribbble'></i></a> ";
                
                else if ($row3['type'] == 'reddit')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn btn-reddit btn-just-icon btn-simple'>
								<i class='fa fa-reddit'></i> </a> ";
                
                echo "</li>
	      ";
            }
            
            echo "		  
	            			</ul>

	            		</div>
	            	</footer>
";
        }
    }
    
    // FORMATER USED HERE ON BEFORE > BACKUP IN OLD FOLDER
	
	
	
	
	
	
	
	
	function footer_style_two($id, $conn)
    {
        $obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_footer_style_two where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<footer class='footer footer-black'>
	            		<div class='container'>
	            			<a class='footer-brand' href='" . $row['brandAddress'] . "'>" . $row['brandName'] . "</a>

	            			<ul class='pull-center'>
	            				";
            
            $result2 = $obj->read_db_single_row("select * from cpn_footer_style_two_links where footer_style_two_id = '" . $row['id'] . "'", $conn);
            while ($row2 = mysqli_fetch_assoc($result2)) {
                
                echo "
								<li>
	            					<a href='" . $row2['linkAddress'] . "'>
	            						" . $row2['linkName'] . "
	            					</a>
	            				</li>";
            }
            echo "
	            			</ul>

	            			<ul class='social-buttons pull-right'>
";
            $result3 = $obj->read_db_single_row("select * from cpn_footer_style_two_social_link where footer_style_two_id = '" . $row['id'] . "'", $conn);
            while ($row3 = mysqli_fetch_assoc($result3)) {
                
                
                echo "						<li>";
                if ($row3['type'] == 'twitter')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn  btn-just-icon btn-simple'>
								<i class='fa fa-twitter'></i> </a> ";
                else if ($row3['type'] == 'facebook')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn  btn-just-icon btn-simple'>
								<i class='fa fa-facebook'></i></a> ";
                
                
                else if ($row3['type'] == 'google+')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn btn-just-icon btn-simple'>
								<i class='fa fa-google'></i> </a> ";
                
                else if ($row3['type'] == 'linkedin')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn  btn-just-icon btn-simple'>
								<i class='fa fa-linkedin'></i> </a> ";
                
                
                else if ($row3['type'] == 'pintrest')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn  btn-just-icon btn-simple'>
								<i class='fa fa-pintrest'></i></a> ";
                else if ($row3['type'] == 'youtube')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn  btn-just-icon btn-simple'>
								<i class='fa fa-youtube'></i> </a> ";
                
                else if ($row3['type'] == 'tumblr')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn  btn-just-icon btn-simple'>
								<i class='fa fa-tumblr'></i> </a> ";
                
                else if ($row3['type'] == 'github')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn  btn-just-icon btn-simple'>
								<i class='fa fa-github'></i> </a> ";
                
                else if ($row3['type'] == 'behance')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn  btn-just-icon btn-simple'>
								<i class='fa fa-behance'></i></a> ";
                
                else if ($row3['type'] == 'dribbble')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn  btn-just-icon btn-simple'>
								<i class='fa fa-dribbble'></i></a> ";
                
                else if ($row3['type'] == 'reddit')
                    echo "<a href='" . $row3['linkAddress'] . "' class='btn  btn-just-icon btn-simple'>
								<i class='fa fa-reddit'></i> </a> ";
                
                echo "</li>
	      ";
            }
            
            echo "		  
	            			</ul>

	            		</div>
	            	</footer>
";
        }
    }
	
    
    
    
    
    
    
    function footer_style_three($id,$conn){
		$obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_footer_style_three where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
        
		echo "<footer class='footer'>
	            		<div class='container'>
	            			<nav class='pull-left'>
	            				<ul>";
	    $result2 = $obj->read_db_single_row("select * from cpn_footer_style_three_links where footer_style_three_id = '" . $row['id'] . "'", $conn);
        while ($row2 = mysqli_fetch_assoc($result2)) {
        
									echo "<li>
	            						<a href='".$row2['linkAddress']."'>
	            							".$row2['linkName']."
	            						</a>
	            					</li>";
		}
	            				echo "</ul>
	            			</nav>
	            			<div class='copyright pull-right'>
	            				&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class='material-icons'>favorite</i> by ".$row['developersName'].".
	            			</div>
	            		</div>
	            	</footer>
";
		}
    }
    
    
    
	
	
	
	function footer_style_four($id,$conn){
		$color = '';
		$obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_footer_style_four where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
        if ($row['color'] == 'black'){
			$color = 'footer-black';
		}
		else 
			$color = 'footer-white';
		
		echo "
	            	
	            	<footer class='footer ".$color." footer-big'>
	            		<div class='container'>

	            			<div class='content'>
	            				<div class='row'>

	            					<div class='col-md-3'>
	            						<a href='".$row['brandAddress']."'><h5>".$row['brandName']."</h5></a>
	            						<p>".$row['brandParagraph']."</p>
	            					</div>
	            					<div class='col-md-2'>
	            						<h5>".$row['columnOneHeading']."</h5>
	            						<ul class='links-vertical'>";
	            							$result2 = $obj->read_db_single_row("select * from cpn_footer_style_four_heading_one where footer_style_four_id = '" . $row['id'] . "'", $conn);
        while ($row2 = mysqli_fetch_assoc($result2)) {
        
											echo "<li>
	            								<a href='".$row2['linkAddress']."'>
	            									".$row2['linkName']."
	            								</a>
	            							</li>";
	    }        						
										echo "</ul>
	            					</div>
	            					<div class='col-md-2'>
	            						<h5>".$row['columnTwoHeading']."</h5>
	            						<ul class='links-vertical'>
	            							";
											$result3 = $obj->read_db_single_row("select * from cpn_footer_style_four_heading_two where footer_style_four_id = '" . $row['id']. "'", $conn);
        while ($row3 = mysqli_fetch_assoc($result3)) {
        
											echo "<li>
	            								<a href='".$row3['linkAddress']."'>
	            									".$row3['linkName']."
	            								</a>
	            							</li>";
		}
	            						echo "</ul>
	            					</div>

	            					<div class='col-md-2'>
	            						<h5>".$row['columnThreeHeading']."</h5>
	            						<ul class='links-vertical'>";
	            							
				$result4 = $obj->read_db_single_row("select * from cpn_footer_style_four_heading_three where footer_style_four_id = '" . $row['id'] . "'", $conn);
        while ($row4 = mysqli_fetch_assoc($result4)) {
        
											echo "<li>
	            								<a href='".$row4['linkAddress']."'>
	            									".$row4['linkName']."
	            								</a>
	            							</li>";
		}
	            						echo "</ul>
	            					</div>
	            					<div class='col-md-3'>
	            						<h5>Subscribe to Newsletter</h5>
	            						<p>
	            							".$row['newsLetterParagraph']."
	            						</p>
	            						<form class='form form-newsletter' method='' action=''>

	            							<div class='form-group'>
	            								<input type='email' class='form-control' placeholder='Your Email...' id='footer_style_four_emailBox".$row['id']."'>
	            							</div>

	            							<button type='button' class='btn btn-primary btn-just-icon' name='button'>
	            								<i class='material-icons'>mail</i>
	            							</button>

	            						</form>
	            					</div>

	            				</div>
	            			</div>

	            			<hr />

	            			<ul class='social-buttons'>";
	            				$result4 = $obj->read_db_single_row("select * from cpn_footer_style_four_social_links where footer_style_four_id = '" . $row['id'] . "'", $conn);
        while ($row4 = mysqli_fetch_assoc($result4)) {
        
								 if ($row4['type'] == 'twitter')
                    echo "<a href='" . $row4['linkAddress'] . "' class='btn btn-twitter btn-just-icon btn-simple'>
								<i class='fa fa-twitter'></i> </a> ";
                else if ($row4['type'] == 'facebook')
                    echo "<a href='" . $row4['linkAddress'] . "' class='btn btn-facebook btn-just-icon btn-simple'>
								<i class='fa fa-facebook'></i></a> ";
                
                
                else if ($row4['type'] == 'google+')
                    echo "<a href='" . $row4['linkAddress'] . "' class='btn btn-google btn-just-icon btn-simple'>
								<i class='fa fa-google'></i> </a> ";
                
                else if ($row4['type'] == 'linkedin')
                    echo "<a href='" . $row4['linkAddress'] . "' class='btn btn-linkedin btn-just-icon btn-simple'>
								<i class='fa fa-linkedin'></i> </a> ";
                
                
                else if ($row4['type'] == 'pintrest')
                    echo "<a href='" . $row4['linkAddress'] . "' class='btn btn-pintrest btn-just-icon btn-simple'>
								<i class='fa fa-pintrest'></i></a> ";
                else if ($row4['type'] == 'youtube')
                    echo "<a href='" . $row4['linkAddress'] . "' class='btn btn-youtube btn-just-icon btn-simple'>
								<i class='fa fa-youtube'></i> </a> ";
                
                else if ($row4['type'] == 'tumblr')
                    echo "<a href='" . $row4['linkAddress'] . "' class='btn btn-tumblr btn-just-icon btn-simple'>
								<i class='fa fa-tumblr'></i> </a> ";
                
                else if ($row4['type'] == 'github')
                    echo "<a href='" . $row4['linkAddress'] . "' class='btn btn-github btn-just-icon btn-simple'>
								<i class='fa fa-github'></i> </a> ";
                
                else if ($row4['type'] == 'behance')
                    echo "<a href='" . $row4['linkAddress'] . "' class='btn btn-behance btn-just-icon btn-simple'>
								<i class='fa fa-behance'></i></a> ";
                
                else if ($row4['type'] == 'dribbble')
                    echo "<a href='" . $row4['linkAddress'] . "' class='btn btn-dribbble btn-just-icon btn-simple'>
								<i class='fa fa-dribbble'></i></a> ";
                
                else if ($row4['type'] == 'reddit')
                    echo "<a href='" . $row4['linkAddress'] . "' class='btn btn-reddit btn-just-icon btn-simple'>
								<i class='fa fa-reddit'></i> </a> ";
               
		}						
	            			echo "</ul>

	            			<div class='copyright pull-center'>
	            				".$row['subText']."
	            			</div>
	            		</div>
	            	</footer>";
		}
	}
    
 
	function image_rounded($id,$conn){
		$raised = '';
		$obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_image_rounded where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
        if ($row['raised'] == 'Y'){
			$raised = 'img-raised';
		}
		else 
			$raised = '';
		
		echo "
			<div class='col-md-2'>
		<h4>".$row['heading']."</h4>
			<img src='".$row['imageAdddress']."' alt='Rounded Image' class='img-rounded img-responsive ".$raised."'>
			
			</div>
			";
		}
	}
 
 
 
	function image_circle($id,$conn){
		$raised = '';
		$obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_image_circle where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
        if ($row['raised'] == 'Y'){
			$raised = 'img-raised';
		}
		else 
			$raised = '';
		
		echo "<div class='col-md-2'>
			<h4>".$row['heading']."</h4>
			<img src='".$row['imageAdddress']."' alt='Circle Image' class='img-circle img-responsive ".$raised."'>
			</div>";
		}
	}
 
 
	
	
	function coment_box($id,$conn){
		$obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_comentbox where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
			echo "<div id=coment_section><div class='col-md-8 col-md-offset-".$row['offset']."'>
		        				<div class='media-area'>
		        			";
								
			$result2 = $obj->read_db_single_row("select * from cpn_comentbox_coments where coment_box_id = '" . $row['id'] . "'", $conn);
        while ($row2 = mysqli_fetch_assoc($result2)) {
		
			echo "<div class='media'>
		        						<a class='pull-left' href='".$row2['commenterprofilelink']."'>
		        							<div class='avatar'>
		        								<img class='media-object' src='".$row2['commenterimage']."' alt='...'/>
		        							</div>
		        						</a>
		        						<div class='media-body'>
		        							<h4 class='media-heading'>".$row2['commenterName']."<small>  &middot;  ".$row2['commenttime']."</small></h4>
		        							<h6 class='text-muted'></h6>

		        							<p>".$row2['coment']."</p>

		        							<div class='media-footer'>
		        								<a href='' class='btn btn-danger btn-simple pull-right'>
		        									<i class='material-icons'>favorite</i> ".$row2['numberoflikes']."
		        								</a>
		        							</div>

											
											
											
											
											
											
											
											
											
		        						</div>
		        					</div>";
									
		}
									
									
									
		        echo  "</div>
		        					</div>
									
									
									<h3 class='text-center'>Post your comment <br><small>- Not Logged In User -</small></h3>
		                          <div class='media media-post'>
		        	                      <a class='pull-left author' href='index.html#pablo'>
		        	                          <div class='avatar'>
		        	                                <img class='media-object' alt='64x64' src='assets/img/placeholder.jpg'/>
		        	                          </div>
		        	                      </a>
		        	                      <div class='media-body'>
		        								<form class='form'>
		        		                            <div class='row'>
		        		                                <div class='col-md-6'>
		        		                                    <div class='form-group'>
		        		                                         <input id='name' type='text' class='form-control' placeholder='Your Name'/>
		        		                                    </div>
		        		                                </div>
		        		                                <div class='col-md-6'>
		        		                                    <div class='form-group'>
		        		                                         <input id='email' type='email' class='form-control' placeholder='Your email'/>
		        		                                    </div>
		        		                                </div>
		        		                            </div>
		        		                            <textarea id='coment' class='form-control' placeholder='Write some nice stuff or nothing...' rows='6'></textarea>
													<div class='media-footer'>
													<button type='button' onclick=addComent('".$id."'); class='btn btn-primary pull-right'>Post Comment</button>
													</div>
		        								</form>

		        	                      </div><!-- end media-body -->

		                          </div> <!-- end media-post -->
									
									
									
									
									</div>";
									
				
		                          
		}
	}
	
	
	
	
	
	function table_simple($id,$conn){
		$obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_table_simple where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
			
			echo "<div class='col-md-8 col-md-offset-".$row['offSet']."'>
		                    <h4><small>".$row['heading']."</small></h4>
		                        <div class='table-responsive'>
		                        <table class='table'>
		                            <thead>
		                                <tr>";
										
										
        $result2 = $obj->read_db_single_row("DESCRIBE ".$row['tableName'], $conn);
        while ($row2 = mysqli_fetch_assoc($result2)) {
		                                    echo "<th class='text-center'>".$row2['Field']."</th>";
		}
										
										echo "</tr>
		                            </thead>
		                            <tbody><tr>";
		                                
										
											
		$result3 = $obj->read_db_single_row("select * from ".$row['tableName'], $conn);
        while ($row3 = mysqli_fetch_assoc($result3)) {
			foreach($row3 as $key => $var){
			
										echo "
		                                    <td class='text-center'>".$row3[$key]."</td>
		                                    ";
			}
			echo "<td class='td-actions text-right'>
		                                        <button type='button' rel='tooltip' class='btn btn-info btn-simple'>
		                                            <i class='material-icons'>person</i>
		                                        </button>
		                                        <button type='button' rel='tooltip' class='btn btn-success btn-simple' >
		                                            <i class='material-icons'>edit</i>
		                                        </button>
		                                        <button type='button' rel='tooltip' class='btn btn-danger btn-simple'>
		                                            <i class='material-icons'>close</i>
		                                        </button>
		                                    </td>
										</tr>";
		}
		                            echo "</tbody>
		                        </table>
		                        </div>

		                        
		                        </div>";
			
			
			
			
			
			
		}
	
	
	
	
	
	
	}
	
	
	
	
	function page_header($id,$conn){
		$obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_page_header where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
	
	echo "
<div class='page-header header-filter' data-parallax='active' style='background-image: url(".$row['backgroundImage'].");'>
        <div class='container'>
            <div class='row'>
				<div class='col-md-6'>
					<h1 class='title'>".$row['heading']."</h1>
                    <h4>".$row['subHeading']."</h4>
                    <br />
                    
				</div>
            </div>
        </div>
    </div>
		";
		
		}
	}
	
	
	
	
	
	
	function navigation_bar_style_three($id,$conn){
		$obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_navigation_bar_style_three where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
		
		echo "<nav class='navbar navbar-danger navbar-transparent navbar-absolute'>
    	<div class='container'>
        	<div class='navbar-header'>
        		<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#navigation-example'>
            		<span class='sr-only'>Toggle navigation</span>
		            <span class='icon-bar'></span>
		            <span class='icon-bar'></span>
		            <span class='icon-bar'></span>
        		</button>
        		<a class='navbar-brand' href=''>".$row['brandName']."</a>
        	</div>

        	<div class='collapse navbar-collapse' id='navigation-example'>
        		<ul class='nav navbar-nav navbar-right'>";
    				
					$obj    = new db();
        $result2 = $obj->read_db_single_row("select * from cpn_navigation_bar_style_three_links where cpn_navigation_bar_style_three_id = '" . $row['id'] . "'", $conn);
        while ($row2 = mysqli_fetch_assoc($result2)) {
	
					if($row2['dropdown'] == 'Y'){
					echo "<li class='dropdown'>
						<a href='".$row2['linkAddress']."' class='dropdown-toggle' data-toggle='dropdown'>
							<i class='material-icons'>".$row2['linkIconName']."</i> ".$row2['linkName']."
							<b class='caret'></b>
						</a>
						<ul class='dropdown-menu dropdown-with-icons'>";
							
							
							
							$obj    = new db();
							$result3 = $obj->read_db_single_row("select * from cpn_navigation_bar_style_three_links_dropdown where cpn_navigation_bar_style_three_links_id = '" . $row2['id'] . "'", $conn);
							while ($row3 = mysqli_fetch_assoc($result3)) {
	
							echo "<li>
								<a href='".$row3['linkAddress']."'>
									<i class='material-icons'>".$row3['linkIconName']."</i> ".$row3['linkName']."
								</a>
							</li>";
							
							
							
		}
							
					echo "	</ul>
					</li>
					";
					}
					else{
						echo "<li>
						<a href='".$row2['linkAddress']."'>
							<i class='material-icons'>".$row2['linkIconName']."</i> ".$row2['linkName']."
						</a>
					</li>";
					
					}
		}
				echo "</ul>
        	</div>
    	</div>
    </nav>
";
		}
	
	}
	
	
	
	
	
	//for lannding page
    
	
	function feature($id,$conn)
    {
		$obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_feature where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
				echo "<div class='features'>
					<div class='row'>";
						
		$result2 = $obj->read_db_single_row("select * from cpn_feature_tiles where cpn_feature_id = '" . $row['id'] . "'", $conn);
        while ($row2 = mysqli_fetch_assoc($result2)) {
						echo "
						<div class='col-md-".$row['col_md']."'>
							<div class='info'>
								<div class='icon ".$row2['color_code']."'>
									<i class='material-icons'>".$row2['iconName']."</i>
								</div>
								<h4 class='info-title'>".$row2['heading']."</h4>
								<p>".$row2['subText']."</p>
							</div>
						</div>";
		}
						
						echo "
	                </div>
				
</div>
";
		
		
		}
	}

function team($id,$conn)
    {
		$obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_team where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {
	

	echo "
				<div class='team'>
					<div class='row'>
					
					";
					
					$obj    = new db();
        $result2 = $obj->read_db_single_row("select * from cpn_team_cards where cpn_team_id = '" . $row['id'] . "'", $conn);
        while ($row2 = mysqli_fetch_assoc($result2)) {
	
					echo "	<div class='col-md-".$row['col_md_image']."'>
							<div class='card card-profile card-plain'>
								<div class='col-md-5'>
									<div class='card-image'>
										<a href='".$row2['profileLink']."'>
											<img class='img' src='".$row2['imageLink']."' />
										</a>
									</div>
								</div>
								<div class='col-md-".$row['col_md_content']."'>
									<div class='content'>
										<h4 class='card-title'>".$row2['name']."</h4>
										<h6 class='category text-muted'>".$row2['tittle']."</h6>

										<p class='card-description'>
											".$row2['message']."
										</p>

										<div class='footer'>
											<a href='".$row2['twitterLink']."' class='btn btn-just-icon btn-simple btn-twitter'><i class='fa fa-twitter'></i></a>
											<a href='".$row2['facebookLink']."' class='btn btn-just-icon btn-simple btn-facebook'><i class='fa fa-facebook-square'></i></a>
											<a href='".$row2['googleLink']."' class='btn btn-just-icon btn-simple btn-google'><i class='fa fa-google'></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
	";					
		}			
		echo "				</div>
				</div>";

		}
	
	}

	
	function contact_us($id,$conn)
    {
		$obj    = new db();
        $result = $obj->read_db_single_row("select * from cpn_contact_us where id = '" . $id . "'", $conn);
        while ($row = mysqli_fetch_assoc($result)) {	
	
echo "
        	<div class='section section-contacts'>
                <div class='row'>
                    <div class='col-md-8 col-md-offset-2'>
                        <h2 class='text-center title'>".$row['heading']."</h2>
						<h4 class='text-center description'>".$row['subtext']."</h4>
                        <form class='contact-form'>
                            <div class='row'>
                                <div class='col-md-6'>
									<div class='form-group label-floating'>
										<label class='control-label'>Your Name</label>
										<input type='email' class='form-control'>
									</div>
                                </div>
                                <div class='col-md-6'>
									<div class='form-group label-floating'>
										<label class='control-label'>Your Email</label>
										<input type='email' class='form-control'>
									</div>
                                </div>
                            </div>

							<div class='form-group label-floating'>
								<label class='control-label'>Your Messge</label>
								<textarea class='form-control' rows='4'></textarea>
							</div>

                            <div class='row'>
                                <div class='col-md-4 col-md-offset-4 text-center'>
                                    <button class='btn btn-primary btn-raised'>
										Send Message
									</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>";

		}
	}
	
	
	
	// for blog
	
		
	
	
	
	
	
	
 
}

?>
