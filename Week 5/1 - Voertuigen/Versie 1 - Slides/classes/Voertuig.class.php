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
					throw new Exception("De $this->m_sMerk heeft maar 5 deuren.");
					
				}
				$this->m_iDeuren = $p_vValue;	
				break;

				case 'Passagiers':
				if ($p_vValue > 6) 
				{
					throw new Exception("De $this->m_sMerk kan maximum 6 mensen vervoeren.");
					
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

		public function Reserveer()
		{
			
    			echo "<h2>Bestelling voor: </h2>";
				echo "<p>Merk: " .$this->Merk."</p>";
				echo "<p>Aantal deuren: ".$this->Deuren."</p>";
				echo "<p>Aantal passagiers: ".$this->Passagiers."</p>";
				echo "<br />";
			

		}

	}
?>