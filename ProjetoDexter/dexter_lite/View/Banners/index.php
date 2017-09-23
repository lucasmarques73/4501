<h2 class="text-center">Lista de Banners</h2>

<a href="?route=banner&function=new" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i>
</a>

<table class="table table-striped">
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
  	echo "<a href='?route=banner&function=edit&id={$banner->getId()}' class='btn btn-sm btn-primary'><i class='fa fa-pencil' aria-hidden='true'></i>
</a>";
  	echo "<a href='?route=banner&function=delete&id={$banner->getId()}' class='btn btn-sm btn-danger'><i class='fa fa-trash' aria-hidden='true'></i>
</a>";
  	echo "</td>";
  	echo "</tr>";

  }

  ?>
  </tbody>
</table>