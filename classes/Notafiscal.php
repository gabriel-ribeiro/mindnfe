<?php

	namespace mindnfe\classes;
	
	/**
	 * Classe Nota Fiscal
	 * Desenvolvida para guardar os dados básicos da nota fiscal eletrônica (NFe).	
	 * De acordo com o Manual da SEFAZ
	 *	
	 * @license	MIT <http://opensource.org/licenses/mit-license.php>
	 * @package	MindNFE
	 * @version	1.0
	 * @author		Gabriel Ribeiro Araújo <contato@gabrielribeiro.net>
	 */
	class Notafiscal {

		/**
		 * Versão do layout (v2.0)
		 * @var float
		 */
		private $schema_version = 2.0;
		
		/**
		 * Identificador da TAG a ser assinada
		 * Informar a chave de acesso da NF-e precedida do literal "NFe" acrescentada a validação do formato (v2.0).
		 * @var string
		 */
		private $id = '';
		
		/**
		 * Código da UF do emitente do Documento Fiscal
		 * Utilizar a Tabela do IBGE de código de unidades da federação (Anexo IX - Tabela de UF, Município e País).
		 * @var integer
		 */
		private $cUF = 0;
		
	}
	
