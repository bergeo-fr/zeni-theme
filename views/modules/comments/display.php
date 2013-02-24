<!-- comments list -->
<div id="comments-wrap">
    <h3 class="heading"><?php echo lang('comments:title'); ?></h3>
    <ol class="commentlist">

	<?php if ($comments): ?>
	
		<?php foreach ($comments as $item): ?>

		        <li class="comment even thread-even depth-1" id="li-comment-4">
                    
                    <div id="comment-5" class="comment-body clearfix">
                        <?php echo gravatar($item->email, 50); ?>      
                        <div class="comment-author vcard">
							<?php if ($item->user_id): ?>
								<?php echo anchor($item->website ? $item->website : 'user/'.$item->user_id, $this->ion_auth->get_user($item->user_id)->display_name); ?>
							<?php else: ?>
								<?php echo $item->website ? anchor($item->website, $item->name) : $item->name; ?>
							<?php endif; ?>
                        </div>
                        <div class="comment-meta commentmetadata">
                            <span class="comment-date"><?php echo format_date($item->created_on); ?>  </span>
                            <span class="comment-reply-link-wrap"><a class='comment-reply-link' href='replytocom=23#respond' onclick='return addComment.moveForm("comment-5", "1", "respond", "432")'>Reply</a></span>
                            
                        </div>
                        <div class="comment-inner">
                            <p>
								<?php if (Settings::get('comment_markdown') AND $item->parsed > ''): ?>
									<?php echo $item->parsed; ?>
								<?php else: ?>
									<p><?php echo nl2br($item->comment); ?></p>
								<?php endif; ?>
                            </p>
                        </div>
                    </div>
                </li>


		<?php endforeach; ?>  
	<?php else: ?>
		<p><?php echo lang('comments:no_comments'); ?></p>
		<hr>
	<?php endif; ?>		
    </ol>
</div>
