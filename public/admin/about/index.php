<?php require_once('../../../private/initialize.php'); ?>
<?php require_login(); ?>
<?php $page_title = 'About Section';

?>

<?php include(SHARED_PATH . '/admin_header.php') ?>

<header id = "main-header" class = "py-4 bg-info text-white">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-8">
				<h3>
					<i class = "fa fa-pencil"></i> Manage About Section</h3>
			</div>
			<div class = "col-md-4">
				<?php
					echo display_info(info());
				?>
			</div>
		</div>
	</div>
</header>

<!-- ACTIONS -->
<section id = "action" class = "py-4 mb-4 bg-light">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-3 mr-auto">
				<a href = "<?php echo url_for('/admin/index.php'); ?>" class = "btn btn-light btn-block">
					<i class = "fa fa-arrow-left"></i> Back To Dashboard
				</a>
			</div>
		</div>
	</div>
</section>

<!-- ABOUT -->
<?php $about_set = fetch_about(); ?>
<section id = "abouts-and-activities">
	<div class = "container pt-4">
		<div class = "row">
			<div class = "col">
				<div class = "card">
					<div class = "card-header">
						<h4>About Section</h4>
					</div>
					<table class = "table table-striped">
						<thead class = "thead-dark">
						<tr>
							<th>Published</th>
							<th>Head</th>
							<th>Body</th>
							<th></th>
						</tr>
						</thead>
						<tbody>
						<?php $about = mysqli_fetch_assoc($about_set); ?>
						<?php mysqli_free_result($about_set); ?>
						<tr>
							<td>
								<?php if ($about['visible']) {
									echo 'Yes';
								} else {
									echo 'No';
								} ?>
							</td>
							<td>
								<?php echo h($about['head']); ?>
							</td>
							<td>
								<?php echo h($about['body']); ?>
							</td>
						</tr>
						</tbody>
					</table>
				
				</div>
			</div>
		</div>
	</div>
</section>
<?php include(SHARED_PATH . '/admin_footer.php') ?>
