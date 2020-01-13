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

// 	// CUSTOMERS

// 		//_____________________________________________________________________________________________

// 		//POST
// 		http://localhost/wocman/v1/?customer_register

// 		//PARAMETERS
// 		{
// 			'email' : "justice@gmail.com",
// 			'password' : "Password@1",
// 			'name' : "Justice George",
// 			'phone' : "08138184872"
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
// 		'http://localhost/wocman/verify/?url=$2y$10$a/q7IIlsjyy.MOFVkiLGw.8dIOaCAH0kmu5kc72fBzukmz90qLjDexxwocmanxxjust2ice@gmail.comxxwocmanxxCustomer'


// 		//_____________________________________________________________________________________________


// 		//POST
// 		http://localhost/wocman/v1/?customer_login

// 		//PARAMETERS
// 		{
// 			'email' : "justice@gmail.com",
// 			'password' : "Password@1"
			
// 		}
		
// 		//RESPONSE

// 		//success
// 		{
// 			"row":{
// 				"email":"just2ice@gmail.com",
// 				"name":"Justice George",
// 				"phone":"08138184872",
// 				"password":"$2y$10$a\/q7IIlsjyy.MOFVkiLGw.8dIOaCAH0kmu5kc72fBzukmz90qLjDe",
// 				"active":null,
// 				"image":null,
// 				"location":null,
//				"wocmanVat2ooff_tokenXDF":"$2y$10$a\/q7IIlsaCAH0kmu5kc72fBzukmz90qLjDe$2y$10$a\/q7IIlsjyy.MOFVkiLGw.8dIOaCAH0kmu5kc72fBzukmz90qLjDe",
// 				"date":"2019-12-09 15:04:08"
// 			},
// 			"count":1,
// 			"status":true,
// 			"status_code":202
// 		}


// 	//_____________________________________________________________________________________________



// 		// WORKMAN

// 		//POST
// 		http://localhost/wocman/v1/?workman_register

// 		//PARAMETERS
// 		{
// 			'email' : "justice@gmail.com",
// 			'password' : "Password@1",
// 			'name' : "Justice George",
// 			'phone' : "08138184872",
// 			'qualfication' : "OND",
// 			'location' : "aja"
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
// 			"row":{
// 				"email":"justccice@gmail.com",
// 				"name":"Justice George",
// 				"phone":"08138184872",
// 				"password":"$2y$10$3z6Uq2ax6fl12Ezl3u7EluVS6EzdfisI5CbUMnb1Eo7NbuEx9fHnG",
// 				"qualification":"OND",
// 				"active":"1",
// 				"image":null,
// 				"location":"aja",
//				"wocmanVat2ooff_tokenXDF":"$2y$10$a\/q7IIlsaCAH0kmu5kc72fBzukmz90qLjDe$2y$10$a\/q7IIlsjyy.MOFVkiLGw.8dIOaCAH0kmu5kc72fBzukmz90qLjDe",
// 				"date":"2019-12-09 15:23:52"
// 			},
// 			"count":1,
// 			"status":true,
// 			"status_code":202
// 		}

// 		//ERROR
// 		{
// 			"row":"none",
// 			"count":0,
// 			"status":false,
// 			"status_code":"Invalid login credentials"
// 		}

// 	//__________________________________________________________________________________________


// 	// GENERAL

// 		//GET
// 		http://localhost/wocman/v1/?get_token

// 		//PARAMETERS
// 		{
			
// 		}
		
// 		//RESPONSE

// 		//success
// 		{
// 			"status":"O4bVUjvOsfn0vHHH23qw1I5Jz3d6oTVDHxx9j9qvZoaWnD3B6R4De0JSUNac1Adxwn4m7phI11mohqSDjPtNnQUt2oB1ffejVnHw4MeTPP2rAcoY8GDOsgQ5"
// 		}



		


// 		//_____________________________________________________________________________________________


// 		//GET
// 		http://localhost/wocman/v1/?get_location

// 		//PARAMETERS

// 		{

// 		}

// 		//RESPONSE

// 		//success

// 		{
// 			"row":[
// 				{
// 					"id":"2",
// 					"title":"HNDhjdfff",
// 					"description":"you dfdfdf",
// 					"date":"2019-12-08 02:48:12"
// 				}
// 			],
// 			"count":1,
// 			"status":true,
// 			"status_code":202
// 		}
		
		
// 		//_____________________________________________________________________________________________


// 		//GET
// 		http://localhost/wocman/v1/?get_qualification

// 		//PARAMETERS

// 		{

// 		}

// 		//RESPONSE

// 		//success

// 		{
// 			"row":"none",
// 			"count":0,
// 			"status":true,
// 			"status_code":"No data found from the table"
// 		}

// 		//_____________________________________________________________________________________________


// 		//GET
// 		http://localhost/wocman/v1/?logout

// 		//PARAMETERS

// 		{

// 		}

// 		//RESPONSE

// 		//success

// 		{
// 			"status":"logout",
//			//"status_code":"Logged out"
// 		}

			


			//ADMIN




// 		//_____________________________________________________________________________________________


// 		//POST
// 		http://localhost/wocman/v1/?wocman_login

// 		//PARAMETERS

// 		{
			//'email' : "justice@gmail.com",
// 			'password' : "Password@1",
// 		}

// 		//RESPONSE

// 		//success

// 		{
// 			"row":
				// {
				// 	"email":"justccice@gmail.com",
				// 	"name":"Justice George",
				// 	"phone":"08138184872",
				// 	"password":"$2y$10$hms.druLehfo3yU6bKSc6ubDjWr74ansE2LGHS6mgrHMqs7ei5gGi",
				// 	"image":null,
				// 	"location":"",
				// 	"wocmanVat2ooff_tokenXDF":"$2y$10$a\/q7IIlsaCAH0kmu5kc72fBzukmz90qLjDe$2y$10$a\/q7IIlsjyy.MOFVkiLGw.8dIOaCAH0kmu5kc72fBzukmz90qLjDe",
				// 	"date":"2019-12-10 01:07:57"
				// },
				// "count":1,
				// "status":"wocman_logedin",
				// "status_code":202
// 		}




// 		//_____________________________________________________________________________________________

// 		//POST
// 		http://localhost/wocman/v1/?wocman_register

// 		//PARAMETERS
// 		{
// 			'email' : "justice@gmail.com",
// 			'password' : "Password@1",
// 			'name' : "Justice George",
// 			'phone' : "08138184872",
//			'secret' : "pub_tQWSy5678fdcvdsf434dfbvnv_woman"
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
// 		http://localhost/wocman/verify/?url=$2y$10$g/BqG/eJQ0HR2HEkkoZG4eBbZ9Swv4fEHRdG/T6IU32hG4x2ot1iWxxwocmanxxjustccice@gmmail.comxxwocmanxxWocman'
	
?>