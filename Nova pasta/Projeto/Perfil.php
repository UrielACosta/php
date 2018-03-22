<?php
/**
 * Entidade que representa o Perfil
 */
class Usuario {
	/**
	 * @var	integer
	 */
	private $id;

	/**
	 * @var	string
	 */
	private $nome;

	/**
	 * @var	string
	 */
	private $email;

	/**
	 * @var	string
	 */
	private $telefone;

	/**
	 * @var	string
	 */
	private $dataNasc;

	/**
	 * @var	string
	 */
	private $cargo;

	/**
	 * @var	string
	 */
	private $salario;

	/**
	 * @var	string
	 */
	private $file;

	/**
	 * Recupera o valor de $id
	 * @return	integer
	 */
	public function getIdTask() {
		return $this->id;
	}

	/**
	 * Recupera o valor de $nome
	 * @return	string
	 */
	public function getNome() {
		return $this->nome;
	}

	/**
	 * Recupera o valor de $Email
	 * @return	string
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Recupera o valor de $Telefone
	 * @return	string
	 */
	public function getTelefone() {
		return $this->telefone;
	}

	/**
	 * Recupera o valor de $dataNasc
	 * @return	string
	 */
	public function getDataNasc() {
		return $this->dataNasc;
	}

	/**
	 * Recupera o valor de $cargo
	 * @return	string
	 */
	public function getCargo() {
		return $this->cargo;
	}

	/**
	 * Recupera o valor de $salario
	 * @return	string
	 */
	public function getSalario() {
		return $this->salario;
	}


	/**
	 * @param integer $id
	 */
	public function setId( $id ) {
		$this->Id = $id;
	}

	/**
	 * @param string $nome
	 */
	public function setNome( $nome ) {
		$this->nome = $nome;
	}

	/**
	 * @param string $email
	 */
	public function setEmail( $email ) {
		$this->email = $email;
	}

	/**
	 * @param string $telefone
	 */
	public function setTelefone( $telefone ) {
		$this->telefone = $telefone;
	}

	/**
	 * @param string $dataNasc
	 */
	public function setDataNasc( $dataNasc ) {
		$this->dataNasc = $dataNasc;
	}

	/**
	 * @param string $taskModified
	 */
	public function setCargo( $cargo ) {
		$this->cargo = $cargo;
	}

	/**
	 * @param string $taskModified
	 */
	public function setSalario( $salario ) {
		$this->salario = $salario;
	}
}