<?php

	//Old Form - for compatibility
  foreach($this->xml->param as $option){
		$opt_name = '';
		$opt_name = $option['name'];
		//$opt_value = $instance["$opt_name"];
		$field_id = $this->get_field_id($option['name']);
		$field_name = $this->get_field_name($option['name']);
		$field_value = isset( $instance["$opt_name"] ) ? $instance["$opt_name"] : $option['default'];
		switch($option['type']){
			case "text":
			$output = '<p><label for="'.$field_id.'">'.$option['label'].':</label><br /><input class="widefat" id="'.$field_id.'"	name="'.$field_name.'" type="text" value="'.$field_value.'" style="width:100%;" /></p>';
			echo $output;
			unset($output);
			break;
			case "radio":
			case "list":
			$output = '<p><label for="'.$field_id.'">'.$option['label'].'</label><br /><select id="'.$field_id.'" name="'.$field_name.'" class="widefat" style="width:100%;">';
				foreach($option->option as $select){
					$output .='<option ';
					if ( $select['value'] == $field_value ) $output .= 'selected="selected"';
					$output .=' value="'.$select['value'].'">'.$select.'</option>';}

			$output .= '</select></p>';
			echo $output;
			unset($output);
			break;
			case "textarea":
			$output = '<p><label for="'.$field_id.'">'.$option['label'].':</label><br /><textarea class="widefat" id="'.$field_id.'"	name="'.$field_name.'" rows="'.$option['rows'].'" cols="'.$option['cols'].'" value="'.$field_value.'" style="width:100%;height:100px">'.$field_value.'</textarea></p>';
			echo $output;
			unset($output);
			break;
			default:
			break;
		}
  }

	//New Form Parser
	foreach ($this->xml->config->fields as $fields){
    if(isset($fields->fieldset[1])){
      $do_tabbed_form = true;
    }else{
      $do_tabbed_form = false;
    }
		foreach ($fields->fieldset as $fieldset){
			$fieldset_id = $this->get_field_id($fieldset['name']);
			$fieldset_id = $this->translate($fieldset_id);
			?>
			<p>
				<div id="<?php echo $fieldset_id.'"'; if($do_tabbed_form){echo 'style="display:none;"';} ?>>
					<?php
						foreach ($fieldset->field as $field){
							$opt_name = '';
							$opt_name = $this->translate($field['name']);
							if($opt_name == 'moduleclass_sfx'){continue;}
							$field_id = $this->get_field_id($opt_name);
							$field_name = $this->get_field_name($opt_name);
							$field_value = isset( $instance["$opt_name"] ) ? $instance["$opt_name"] : $field['default'];
              $field_value = !is_array($field_value)? esc_textarea($field_value) : $field_value;
							$field['label'] = $this->translate($field['label']);
							switch($field['type']){
								case "note":
									$output = '<p><label for="'.$field_id.'">'.$field['label'].'</label></p>';
									echo $output;
									unset($output);
								break;
								case "spacer":
									$output = '<p><label for="'.$field_id.'">'.$field['label'].'</label></p>';
									echo $output;
									unset($output);
								break;
								case "text":
									$output = '<p><label for="'.$field_id.'">'.$field['label'].'</label><br /><input class="widefat" id="'.$field_id.'"	name="'.$field_name.'" type="text" value="'.$field_value.'" /></p>';
									echo $output;
									unset($output);
								break;
								case "radio":
								case "list":
									$output = '<p><label for="'.$field_id.'">'.$field['label'].'</label><br /><select id="'.$field_id.'" name="'.$field_name.'" class="widefat">';
										foreach($field->option as $select){
											$output .='<option ';
											if ( $select['value'] == $field_value ) $output .= 'selected="selected"';
											$output .=' value="'.$select['value'].'">'.$this->translate($select).'</option>';}
											$output .= '</select></p>';
									echo $output;
									unset($output);
								break;
								case "category":
									$output = '<p><label for="'.$field_id.'">'.$field['label'].'</label><br /><ul style="max-height:180px;overflow:auto;">';
                  foreach ( get_terms( 'category' ) as $category ) { 
                    $output .='<li><input type="checkbox" value="'.(int) $category->term_id.'" id="'.$field_id. '-' . (int) $category->term_id.'" name="'.$field_name.'[]" '.checked( is_array( $field_value ) && in_array( $category->term_id, $field_value ),true,false ).' /><label for="'.$field_id . '-' . (int) $category->term_id.'">'.esc_html( $category->name ).'</label></li>';
                  }
                  $output .= '</ul></p>';
									echo $output;
									unset($output);
								break;
								case "authors":
									$output = '<p><label for="'.$field_id.'">'.$field['label'].'</label><br /><ul style="max-height:180px;overflow:auto;">';
                  foreach ( get_users(array('who' => 'author','orderby' => 'display_name')) as $author ) {
                    //echo '<pre>';print_r($author);echo '</pre>';
                    $output .='<li><input type="checkbox" value="'.(int) $author->data->ID.'" id="'.$field_id. '-' . (int) $author->data->ID.'" name="'.$field_name.'[]" '.checked( is_array( $field_value ) && in_array( $author->data->ID, $field_value ),true,false ).' /><label for="'.$field_id . '-' . (int) $author->data->ID.'">'.esc_html( $author->data->display_name ).'</label></li>';
                  }
                  $output .= '</ul></p>';
									echo $output;
									unset($output);
								break;
								case "textarea":
									$output = '<p><label for="'.$field_id.'">'.$field['label'].'</label><br /><textarea class="widefat" id="'.$field_id.'"	name="'.$field_name.'" rows="'.$field['rows'].'" cols="'.$field['cols'].'" value="'.$field_value.'" style="height:100px">'.$field_value.'</textarea></p>';
									echo $output;
									unset($output);
								break;
								default:
								break;
							}
						}
					?>
				</div>
        <?php if($do_tabbed_form){?>
				<a href="#TB_inline?width=800&height=600&inlineId=<?php echo $fieldset_id; ?>" class="thickbox button" style="width: 100%"><?php if(isset($fieldset['label'])){echo $fieldset['label'];}else{echo ucwords(str_replace('_',' ',$fieldset['name']));} ?> Options</a>
        <?php } ?>
			</p>
			<?php
		}
	}

?>