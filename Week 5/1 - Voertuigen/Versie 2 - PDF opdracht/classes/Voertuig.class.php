<?php
	class Voertuig
	{

		private $m_sMerk;
		private $m_iDeuren;
		private $m_iPassagiers;

		public function __set($p_sProperty, $p_vValue)
		{
			switch($p_sProperty)
			{
				case 'Merk':
				$this->m_sMerk = $p_vValue;	
				break;

				case 'Deuren':
				if ($p_vValue > 5) 
				{
					throw new Exception("Aantal deuren kan niet $this->m_iDeuren zijn.");
					
				}
				$this->m_iDeuren = $p_vValue;	
				break;

				case 'Passagiers':
				if ($p_vValue > 6) 
				{
					throw new Exception("Aantal passagiers mag niet $this->m_iPassagiers zijn.");
					
				}
				$this->m_iPassagiers = $p_vValue;	
				break;
			}
		}

		public function __get($p_sProperty)
		{
			switch ($p_sProperty)
			{
				case 'Merk':
				return $this->m_sMerk;
				break;

				case 'Deuren':
				return $this->m_iDeuren;
				break;

				case 'Passagiers':
				return $this->m_iPassagiers;
				break;
			}
		}

		public function __construct($m_sMerk, $m_iDeuren, $m_iPassagiers)
  		{
      	 	 $this->Merk = $m_sMerk;
      	     $this->Deuren = $m_iDeuren;
     	     $this->Passagiers = $m_iPassagiers;
     	}

    	public function __toString()
    	{
        	return $this->Merk;
        	return $this->Deuren;
        	return $this->Passagiers;
    	}

		public function Order()
		{
			echo "<h2>Order for: </h2>";
			echo "<p>Brand: " .$this->Merk."</p>";
			echo "<p>Amount of Doors: ".$this->Deuren."</p>";
			echo "<p>Amount of People: ".$this->Passagiers."</p>";

		}

	}



?>