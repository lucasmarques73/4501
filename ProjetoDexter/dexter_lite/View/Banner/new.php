<div class="container">
	<div class="row">
		<h3>Novo Banner</h3>
	</div>
	<form id="new_banner" method="POST" action="#">
	  <div class="form-group">
	    <label for="nome">Nome</label>
	    <input type="text" class="form-control" id="nome" name="nome" value="">
	  </div>
	  <div class="form-group">
	    <label for="descricao">Descrição</label>
	    <textarea class="form-control" id="descricao" name="descricao" form="new_banner"> </textarea>
	  </div>
	  <div class="form-group">
	    <label for="url">URL</label>
	    <input type="text" class="form-control" id="url" name="url" value="">
	  </div>
	  <input type="hidden" name="create" value="true">
	  <!-- <a href="?route=create_banner" class="btn btn-success">Salvar</a> -->
	  <button type="submit" class="btn btn-success">Salvar</button>
	  <a href="?route=banner" class="btn btn-warning">Cancelar</a>
	</form>
</div>

