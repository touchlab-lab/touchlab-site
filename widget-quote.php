<?php 
	$module_posts = get_posts_by_category('quote');
	$num_module_posts = count($module_posts);
?>
			<?php if(count($num_module_posts)): ?>
			<!-- sidebar left widget start -->
			<div class="sidebar-module"><div class="smb"><div class="smt"><div class="smc">
				<ul id="quote-slideshow">
					<?php foreach($module_posts as $mp): ?>
						<li><?php echo $mp->post_content ?></li>
					<?php endforeach; ?>
				</ul>	
			</div></div></div></div>
			<!-- sidebar left widget end -->
			<?php endif; ?>