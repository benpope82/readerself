<div class="mdl-card mdl-cell mdl-cell--4-col share_email_result" id="share_email_<?php echo $itm->itm_id; ?>">
	<div class="mdl-card__title">
		<h1 class="mdl-card__title-text"><i class="material-icons md-18">email</i><?php echo $this->lang->line('share_email'); ?></h1>
		<div class="mdl-card__title-infos">
		</div>
	</div>
	<div class="mdl-card__supporting-text mdl-color-text--black">
		<?php echo validation_errors(); ?>

		<?php echo form_open(current_url()); ?>

		<p>
		<?php echo form_label($this->lang->line('email_subject')); ?>
		<?php echo form_input('email_subject', set_value('email_subject', $itm->itm_title), 'id="email_subject" class="required"'); ?>
		</p>

		<p>
		<?php echo form_label($this->lang->line('email_to')); ?>
		<?php echo form_input('email_to', set_value('email_to'), 'id="email_to" class="valid_email required"'); ?>
		</p>

		<p>
		<?php echo form_label($this->lang->line('email_message')); ?>
		<?php echo form_textarea('email_message', set_value('email_message', ''), 'id="email_message"'); ?>
		</p>

		<p>
		<button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--pink mdl-color-text--white">
			<i class="material-icons md-24">done</i>
		</button>
		</p>

		<?php echo form_close(); ?>
	</div>
	<div class="mdl-card__actions mdl-card--border">
		<a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon share_email_close" href="#share_email_<?php echo $itm->itm_id; ?>"><i class="material-icons md-18">close</i></a></li>
	</div>
</div>

