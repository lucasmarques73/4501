<?php 

class Banner
{

    private $id;

    private $nome;

    private $descricao;

    private $url;


    public function __construct($id, $nome, $descricao, $url)
    {
    	$this->id 			= $id;
    	$this->nome 		= $nome;
    	$this->descricao 	= $descricao;
    	$this->url			= $url;
    }

    /**
     *
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     *
     * @param mixed $url            
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     *
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     *
     * @param mixed $descricao            
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     *
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     *
     * @param mixed $nome            
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     *
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @param field_type $id            
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function isNew()
    {
        return is_null($this->id);
    }
}

	$dsn = 'pgsql:host=localhost; dbname=dexter';
	$user = 'dexter';
	$pass = 'dexter@secret';

	$pdo = new PDO($dsn, $user, $pass);

	$prepare = $pdo->query('SELECT * FROM banners');
	$prepare->execute();

	$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

	// while ($row = $prepare->fetch(PDO::FETCH_ASSOC)) 
	// {
	// 	$result[] = $row;
	// }

	$banners = [];
	foreach ($result as $key => $item) 
	{	
		// $banner = new Banner;
		// $banner->setId($item['id']);
		// $banner->setNome($item['nome']);
		// $banner->setDescricao($item['descricao']);
		// $banner->setUrl($item['url']);

		// $banners[$key] = $banner;


		$banners[$key] = new Banner($item['id'],$item['nome'],$item['descricao'],$item['url']);

	
	}
	
	echo "<pre>";

	print_r($banners);

	echo "</pre>";