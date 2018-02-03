<?php
// creation d'une fonction pour verifier si le prix est gratuit
if(!function_exists('free')){
	 function Free($event)
	{
		if($event->price==0){
			echo "<strong>Gratuit</strong>"; 
		}
		else{
			echo $event->price.' FCFA';
		}
	}
}
