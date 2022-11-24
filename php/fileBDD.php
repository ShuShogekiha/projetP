<?php
	
	class fileBDD extends PDO {

		private $connexion;
		
		public function __construct() {
			try {
				$this->connexion = new PDO('mysql:host=localhost;dbname=pharmacie', "userBDD", "NdqQdcfKjP6VtUr6", array(PDO::ATTR_PERSISTENT => true)); 
				$this->connexion->exec("SET CHARACTER SET utf8");
			}
			
			catch(PDOException $e) {
				echo 'Erreur : '.$e->getMessage().'<br />';
				$this->connexion = false;
			}
		}
		
		public function __get($propriete) {
			switch($propriete) {
				case 'connexion' : {
					return $this->connexion;
					break;
				}
                /*case 'vpdo': {
                    return $this->vpdo = ;
                    break;
                }*/
			}
		}

		public function getListMedicament() {
			$requete = 'SELECT name FROM `medicament`';
			$result = $this->connexion->prepare($requete) or die(print_r($result->error(), TRUE));
			return($result);
		}
		

		public function getListAromatherapie() {
			$requete = 'SELECT name FROM `aromatherapie`';
			$result = $this->connexion->prepare($requete) or die(print_r($result->error(), TRUE));
			return($result);
		}

		public function getListParapharmacie() {
			$requete = 'SELECT name FROM `parapharmacie`';
			$result = $this->connexion->prepare($requete) or die(print_r($result->error(), TRUE));
			return($result);
		}

		public function getListVeterinaire() {
			$requete = 'SELECT name FROM `veterinaire`';
			$result = $this->connexion->prepare($requete) or die(print_r($result->error(), TRUE));
			return($result);
		}

		public function getListOrthopedie() {
			$requete = 'SELECT name FROM `orthopedie`';
			$result = $this->connexion->prepare($requete) or die(print_r($result->error(), TRUE));
			return($result);
		}
	}
?>
