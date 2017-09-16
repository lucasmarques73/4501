<h2>Lista de Banners</h2>

<a href="?route=new_banner" class="btn btn-info">Novo Banner</a>

<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>URL</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($banners as $key => $banner) {

  	echo "<tr>";
  	echo "<th>{$banner->getId()}</th>";
  	echo "<td>{$banner->getNome()}</td>";
  	echo "<td>{$banner->getDescricao()}</td>";
  	echo "<td>{$banner->getUrl()}</td>";
  	echo "<td>";
  	echo "<a href='?route=edit_banner&id={$banner->getId()}' class='btn btn-sm btn-primary'>Editar</a>";
  	echo "<a href='?route=delete_banner&id={$banner->getId()}' class='btn btn-sm btn-danger'>Excluir</a>";
  	echo "</td>";
  	echo "</tr>";

  }

  ?>
  </tbody>
</table>