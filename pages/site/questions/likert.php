<?php
if ($question['likertscale'] != "Agree/Disagree") {
	$scale = (int) $question['likertscale'];
	for ( $i = 1; $i <= $scale; $i++){ ?>
		<span class="wpsqt_likert_answer"><input type="radio" name="answers[<?php echo $questionKey; ?>]" value="<?php echo $i; ?>" <?php if ( $i == $givenAnswer ) { ?> checked="checked" <?php } ?> id="answer_<?php echo $question['id']; ?>_<?php echo $i; ?>" /> <label for="answer_<?php echo $question['id']; ?>_<?php echo $i; ?>"><?php echo $i; ?></label></span>
	<?php }
} else {
	$likert_agree_disagree =  array( 'stronglydisagree' => 'Strongly Disagree',
					'disagree' => 'Disagree',
					'noopinion' => 'No Opinion',
					'agree' => 'Agree',
					'stronglyagree' => 'Strongly Agree');
	
	foreach ($likert_agree_disagree as $key => $answer_text):
	?>
		<span class="wpsqt_likert_answer"><input type="radio" <?php checked( $givenAnswer, $answer_text );?> name="answers[<?php echo $questionKey; ?>]" value="<?php _e($answer_text, 'wp-survey-and-quiz-tool'); ?>" id="answer_<?php echo $question['id']; ?>_<?php echo $key;?>" /> <label for="answer_<?php echo $question['id']; ?>_<?php echo $key;?>"><?php _e($answer_text, 'wp-survey-and-quiz-tool'); ?></label></span>
	<?php endforeach;?>
<?php } ?>
<br /><br />
