<?php
	<div class="headerTable">
	<div class="header_left">
		<div id="logowrap">
			<a href="http://ilearn.asam.mq.edu.au/"><div id="logo"></div></a>
		</div>
	<div class="header_right">
		<div id="menuwrap">
	</div>
	</div>
	
		
				<div id="headerstrip">
					<div id="searchbox"><?php echo $OUTPUT->blocks_for_region('search') ?></div>
					<div class="jcontrolsleft">		
        					<div class="navbar clearfix">
            					<div class="breadcrumb"> <?php echo $OUTPUT->navbar();  ?></div>
				</div>
				
            <div class="copyright"><?php echo $PAGE->theme->settings->copyright; ?></div>
            <?php
            echo $PAGE->theme->settings->footnote;
            echo $OUTPUT->login_info();