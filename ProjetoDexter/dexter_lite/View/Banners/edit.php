<div class="container">
	<div class="row">
		<h3 class="text-center">Editar Banner</h3>
	</div>
	<form id="edit" method="POST" action="#">
	  <div class="form-group">
	    <!-- <label for="id">Id</label> -->
	    <input type="hidden" class="form-control" id="id" name="id" value="<?= $banner->getId()?>">    
	  </div>
	  <div class="form-group">
	    <label for="nome">Nome</label>
	    <input type="text" class="form-control" id="nome" name="nome" value="<?= $banner->getNome()?>">
	  </div>
	  <div class="form-group">
	    <label for="descricao">Descrição</label>
	    <textarea class="form-control" id="descricao" name="descricao" form="edit"><?= $banner->getDescricao()?>  </textarea>
	  </div>
	  <div class="form-group">
	    <label for="url">URL</label>
	    <input type="text" class="form-control" id="url" name="url" value="<?= $banner->getUrl()?>">
	  </div>
	  <input type="hidden" name="update" value="true">
	 <!--  <a href="?route=update_banner&id=id&nome=nome&descricao=descricao&url=url" class="btn btn-success">Salvar</a> -->
	 <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i>
</button>
	 <a href="?route=banner&function=index" class="btn btn-warning"><i class="fa fa-undo" aria-hidden="true"></i>
</a>
	</form>
</div>

