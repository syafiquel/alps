<?php 

	
	function divisible() 

	{
		$x = 1;
		
		for($x=1; $x<101; $x++)
		{
			

			if(($x %3 ==0) && ($x %5 ==0))
			{

				$div35 = array($x);
				foreach ($div35 as $value35) 
				{
					$value35 = "Anonymous Llama";
					echo "$value35 </br>";
				}

			}
				
			elseif($x %3 ==0)
			{

				$div3 = array($x);
				foreach($div3 as $value3)
				{

					$value3 = "Anonymous";
					echo "$value3 </br>";
				}
			}


			elseif($x %5 ==0)
			{

				$div5 = array($x);
				foreach($div5 as $value5)
				{

					$value5 = "Llama";
					echo "$value5 </br>";
				}
			}

			

			else
			{
				echo "$x </br>";

			}
		}
	}
?>