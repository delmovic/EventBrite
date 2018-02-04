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

// if(!function_exists(flash)){
// 	function flash($message,$type="success") {
// 		 session()->flash('notification.message',$message );
//         session()->flash('notification.type',$type);

// 	}
// }