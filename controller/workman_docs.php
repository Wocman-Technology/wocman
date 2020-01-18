<?php
/**
 * wocman
 *
 * Details: This file is part of the wocman technology file
 * Author: Ugbogu Justice, 08138184872
 *
*/
header("location:../");
die();



// //  WOCMAN API DOCUMMENTATION




// 		// WORKMAN

// 		//POST
// 		http://localhost/wocman/v1/?workman_signup

// 		//PARAMETERS
// 		{
// 			'email' : "justice@gmail.com",
// 			'password' : "Password@1",
// 		}
		
// 		//RESPONSE

// 		//success
// 		{
// 			"row":"none",
// 			"count":0,
// 			"status":true,
// 			"status_code":"Successful"
// 		}



// 		//email confirm link sample
// 		'http://localhost/wocman/verify/?url=$2y$10$3z6Uq2ax6fl12Ezl3u7EluVS6EzdfisI5CbUMnb1Eo7NbuEx9fHnGxxwocmanxxjustccice@gmail.comxxwocmanxxWorkman'


// 		//_____________________________________________________________________________________________


// 		//POST
// 		http://localhost/wocman/v1/?workman_login

// 		//PARAMETERS
// 		{
// 			'email' : "justice@gmail.com",
// 			'password' : "Password@1"
			
// 		}
		
// 		//RESPONSE

// 		//success
// 		{
//			"row":
//				{
//					"email":"justice@gmail.com",
//					"password":"$2y$10$0TC3flLMiibcfVrVC8aJHe8y9utQWCmo2z9Kt1U0hdZrAz5.JoxLa",
//					"active":"1",
//					"fname":null,
//					"lname":null,
//					"uname":null,
//					"phone":null,
//					"country":null,
//					"city":null,
//					"image":null,
//					"qualification":null,
//					"qualification_link":null,
//					"secret_key":null,
//					"date":"2020-01-1401:14:36",
//					"wocmanVat2ooff_tokenXDF":"l9ekvlP0NWAEpS57es3OY5gdxOvsbSE9ngbTVk9U6SaI9XHfd7DFBzQajiZjSpXQ129Ptc4Foo7drJTLkMUBPEVUjroDbI4wsixbJd0vesf5Fv0g45wwRpBy"
//				},
//				"count":1,
//				"status":"workman_logedin",
//				"status_code":202
//    	}

// 		//ERROR
// 		{
// 			"row":"none",
// 			"count":0,
// 			"status":false,
// 			"status_code":"Invalid login credentials"
// 		}

// 	//__________________________________________________________________________________________

// 		//POST
// 		http://localhost/wocman/v1/?workman_setup

// 		//PARAMETERS
// 		{
// 			'email' : "justice@gmail.com",
// 			'password' : "Password@1",
//			'firstname' : "Justice",
//			'lastname' : "George",
//			'phone' : "+2348138184872",
//			'username' : "G Dev",
//			'country' : "Nigeria",
//			'city' : "Uyo",
//			'uuidToken' : "6uBOJt8xd14EFqYTa9QUCuV4XbYmNyrDqqIixXids53uUa6tXNMZNQjcQJh3IoizUNMk29duD5C6XIzpvVVI3fRh74ryVIcOz0JMh1Qv3lJV3zpzCdZRR9LT"
			
// 		}
		
// 		//RESPONSE

// 		//success
// 		{
//			"row":
//				{
//					"email":"justice@gmail.com",
//					"password":"$2y$10$0TC3flLMiibcfVrVC8aJHe8y9utQWCmo2z9Kt1U0hdZrAz5.JoxLa",
//					"active":"1",
//					"fname":"Justice",
//					"lname":"George",
//					"uname":"G Dev",
//					"phone":"+2348138184872",
//					"country":"Nigeria",
//					"city":"Uyo",
//					"image":null,
//					"qualification":null,
//					"qualification_link":null,
//					"secret_key":null,
//					"date":"2020-01-1401:14:36",
//					"wocmanVat2ooff_tokenXDF":"6uBOJt8xd14EFqYTa9QUCuV4XbYmNyrDqqIixXids53uUa6tXNMZNQjcQJh3IoizUNMk29duD5C6XIzpvVVI3fRh74ryVIcOz0JMh1Qv3lJV3zpzCdZRR9LT"
//				},
//				"count":1,
//				"status":"User Setup Was Successful!",
//				"status_code":202
//    	}

// 		

// 	//__________________________________________________________________________________________

// 		//GET
// 		http://localhost/wocman/v1/?workman_setup_profile_services

// 		//PARAMETERS
// 		{
// 	
//			'uuidToken' : "6uBOJt8xd14EFqYTa9QUCuV4XbYmNyrDqqIixXids53uUa6tXNMZNQjcQJh3IoizUNMk29duD5C6XIzpvVVI3fRh74ryVIcOz0JMh1Qv3lJV3zpzCdZRR9LT"
			
// 		}
		
// 		//RESPONSE

// 		//success
// 		{
//			"row":
//				{
//					"id":"1",
//					"name":"Barbing",
//					"description":"All Hair Style Apply",
//					"qualification":"WAEC",
//					"date":"2020-01-1401:14:36",
//				
//				},
//				"count":1,
//				"status":"Services Found",
//				"status_code":202
//    	}

// 		

// 	//__________________________________________________________________________________________

// 	//__________________________________________________________________________________________

// 		//GET
// 		http://localhost/wocman/v1/?workman_setup_profile_service_type

// 		//PARAMETERS
// 		{
// 	
//			'uuidToken' : "6uBOJt8xd14EFqYTa9QUCuV4XbYmNyrDqqIixXids53uUa6tXNMZNQjcQJh3IoizUNMk29duD5C6XIzpvVVI3fRh74ryVIcOz0JMh1Qv3lJV3zpzCdZRR9LT"
//			'service_id' : "1"
			
// 		}
		
// 		//RESPONSE

// 		//success
// 		{
//			"row":
//				{
//					"id":"1",
//					"service_id":"1",
//					"name":"Ladies",
//					"description":"Woman hair making",
//					"pricee":"1500",
//					"date":"2020-01-1401:14:36",
//				
//				},
//				{
//					"id":"1",
//					"service_id":"1",
//					"name":"Men",
//					"description":"Men Hair Styling",
//					"pricee":"500",
//					"date":"2020-01-1401:14:36",
//				
//				},
//				"count":1,
//				"status":"Services Found",
//				"status_code":202
//    	}

// 		

// 	//__________________________________________________________________________________________

// 	//__________________________________________________________________________________________

// 		//POST
// 		http://localhost/wocman/v1/?workman_setup_profile

// 		//PARAMETERS
// 		{
// 	
//			'uuidToken' : "6uBOJt8xd14EFqYTa9QUCuV4XbYmNyrDqqIixXids53uUa6tXNMZNQjcQJh3IoizUNMk29duD5C6XIzpvVVI3fRh74ryVIcOz0JMh1Qv3lJV3zpzCdZRR9LT"
//			'service_id' : "1"
//			'service_type_id' : "1"
//			'scale' : "1"
			
// 		}
		
// 		//RESPONSE

// 		//success
// 		{
//			"row":"none",
//			"count":"none,
//			"status":"Service Save Successful!",
//			"status_code":202
//    	}

// 		

// 	//__________________________________________________________________________________________


?>