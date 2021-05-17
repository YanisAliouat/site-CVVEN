<style>
	.center {
		margin: 10px 50px 20px;
		text-align: center;
	}

	body {

		background-color: #C6F1DF;

	}
</style>

<?php
$this->load->view('admin/header');
?>
<br><br><br><br><br><br>
<div class="card">
	<div class="card-body">

		<h1>Ajouter Une Offre</h1>
		<form action="<?php echo site_url('admin/news/save'); ?>" method="post" enctype="multipart/form-data">
			<div class="col-md-7">
				<div class="form-group">
					<div class="row">
						<label class="col-md-3">Titre</label>
						<div class="col-md-9">
							<input type="text" name="title" class="form-control">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<label class="col-md-3">auteur</label>
						<div class="col-md-9">
							<input type="text" name="author" class="form-control">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<label class="col-md-3">Description</label>
						<div class="col-md-9">
							<textarea name="description" class="form-control"></textarea>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<label class="col-md-3">Image</label>
						<div class="col-md-9">
							<input type="file" name="image" class="form-control">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<input type="submit" name="submit" class="btn btn-info" value="Ajouter l'offre">
			</div>
			<div class="clearfix"></div>
		</form>
	</div>
</div>
<?php
$this->load->view('admin/footer');
?>