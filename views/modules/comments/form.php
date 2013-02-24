<!-- Respond -->                
<div id="respond">
    <div class="cancel-comment-reply"><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a></div>
    <?php echo form_open("comments/create/{$module}", 'id="commentform"') ?>
    	<noscript><?php echo form_input('d0ntf1llth1s1n', '', 'style="display:none"') ?></noscript>
        <h3 class="heading"><?php echo lang('comments:your_comment') ?></h3>



        	<?php if ( ! is_logged_in()): ?>

			<input type="text" name="name" id="name" maxlength="40" value="<?php echo $comment['name'] ?>" />
			<label for="name"><?php echo lang('comments:name_label') ?><span class="required">*</span>:</label><br/>


			<input type="text" name="email" maxlength="40" value="<?php echo $comment['email'] ?>" />
			<label for="email"><?php echo lang('global:email') ?><span class="required">*</span>:</label><br/>

			<input type="text" name="website" maxlength="40" value="<?php echo $comment['website'] ?>" />
			<label for="website"><?php echo lang('comments:website_label') ?>:</label><br/>

			<?php endif ?>
			<?php echo form_hidden('entry', $entry_hash) ?>

			<textarea name="comment" id="comment" rows="5" cols="30" class="width-full"><?php echo $comment['comment'] ?></textarea>
			<label for="comment"><?php echo lang('comments:message_label') ?><span class="required">*</span>: </label>

			<p>
				<?php echo form_submit('submit', lang('comments:send_label')) ?>
			</p>

	<?php echo form_close() ?>
</div>
<div class="clearfix"></div>
<!-- ENDS Respond -->