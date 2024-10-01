<html>
    <head>
        <title>Laboratory Exercise 2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="style.css"/>
    </head>
    <body>
	<!-- php code here-->
	
	<?php
	
		$FirstName = "Kenwrick";
		$LastName = "Espinosa";
		
		//Programming subjects
		$programmingSubjects = array(
			array(
				"title" => "Web Programming",
				"topics" => array("HTML, CSS, and JavaScript", "PHP", "ASP.NET"),
				"logo" => "img/html.png"
			),
			array(
				"title" => "Mobile Programming",
				"topics" => array("Android", "IOS", "Windows"),
				"logo" => "img/android.png"
			),
			array(
				"title" => "Desktop Programming",
				"topics" => array("Java", "C#.Net", "Visual Basic"),
				"logo" => "img/java.png"
			)
		);
	

	?>
    <div class="row header-content">
		<div class="column-12">
			<?php echo "$FirstName ". "$LastName"?>
		</div>
	</div> 
		<!-- end of div: header -->
		<div class="row">
			<div class="column-3 border-profile">
				<div class="row">
					<div class="column-12">
						<img src="img/login_logo.png"/>
					</div>
				</div>
				<div class="row">
					<div class="column-12">
						<p>Name: <?php echo "$FirstName ". "$LastName"?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-12 menu">
						<ul>
							<li>
								Home
							</li>
							<li>
								Subjects
							</li>
							<li>
								Assignment
							</li>
							<li>
								Quiz
							</li>
							<li>
								About
							</li>
						</ul>
					</div>
				</div>
				<!-- end of row: menu -->
			</div> 
			<!-- end of row: profile -->
			<!-- 2nd Column: Programming Subjects -->
			<div class="column-9">
				<div class="row">
                    
                    <!-- Foreach loop -->
					<?php foreach($programmingSubjects as $subject) { ?>
					<div class="column-4 menu">
						<div class="border-subjects">
							<div class="row">
								<div class="column-12">
									<img src="<?php echo $subject['logo'];?>"/>
								</div>
							</div>
							<div class="row">
								<div class="column-12">
									<ul>	
										<li class="subject">
											<?php echo $subject['title'];?>
										</li>
										<?php foreach($subject['topics'] as $topic) { ?>
										<li>
											<?php echo $topic;?>
										</li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div><!-- end of row -->
			</div>
		</div>
    </body>
</html>