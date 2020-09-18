<div class="row">
	
	<div class="col-md-12">
		<h4 class="m-b-lg"> 
			Yeni Ürün Ekle
			<a href="#" class="btn btn-outline btn-primary btn-xs pull-right"><i class="fa fa-plus"></i> Yeni Ekle </a>
		</h4>
	</div>

	<div class="col-md-12">
		<div class="widget">
			<div class="widget-body">
				<form action="<?=base_url('product/save')?>" method="POST">
					<div class="form-group">
						<label for="exampleInputEmail1">Başlık</label>
						<input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1"> Açıklama </label>
						<textarea class="m-0" data-plugin="summernote" data-options="{height: 250}">Hello Summernote</textarea>
					</div>

					<div class="text-center">
						<button type="submit" class="btn btn-primary btn-md btn-outline"> Kaydet <i class="fa fa-save"> </i> </button>
						<a href="<?=base_url('product');?>" class="btn btn-md btn-danger btn-outline"> İptal <i class="fa fa-trash"></i> </a>
					</div>
				</form>
			</div><!-- .widget-body -->
		</div><!-- .widget -->
	</div>