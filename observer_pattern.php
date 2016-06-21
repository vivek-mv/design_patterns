<?php 
	Class ClientList {
		private $clientList = array("client1", "client2", "client3");
		
		public function sendMessage($message) {
			//send the message to all the clients present in clientlist
			echo "Message sent to all the clients";
		}

	}

	Class ChatServer {
		private $clientlist;

		public function listenForMsg() {
			//code for listening for message

			//if a new message comes
			$this->clientlist = new ClientList();
			$this->clientlist->sendMessage($msg);
		}
	}
?>