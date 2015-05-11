				<ul id="sideBar">
					<?php 
                        if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar 2')) :					
                    ?>
                    <p>You are not using a Dynamic Sidebar</p>
                    <?php endif; ?>
				</ul><!--END SIDEBAR-->
