<?php
class Test extends Controller {

	function index()
	{
		// crete new users and add data
		$user = new user();
		$user->username = "andrew";
		$user->password = "topbell447";
		$user->email = "andrew@utilitiessavings.co.uk";
		
		$user2 = new user();
		$user2->username = "matt";
		$user2->password = "popsikle";
		$user2->email = "matt@utilitiessavings.co.uk";

		$user3 = new user();
		$user3->username = "test";
		$user3->password = "test";
		$user3->email = "test@example.com";
		
		
		
		// create new accounts and add data
		$account = new Account();
		$account->name = "Company 1";
		
		$account2 = new Account();
		$account2->name = "Company 2";
		
		// add user to the accounts
		$account->User = $user;
		$account2->User = $user2;
		
		// create new sites and add data
		$site = new Site();
		$site->name = "King Road";
		$site->street = "10 King Road";
		$site->city = "Highgate";
		$site->county = "London";
		$site->zip = "N1 1AA";
		
		$site2 = new Site();
		$site2->name = "Queen Lane";
		$site2->street = "1 Queen Lane";
		$site2->city = "Wood Green";
		$site2->county = "London";
		$site2->zip = "N2 2AA";
		
		$site3 = new Site();
		$site3->name = "Prince Road";
		$site3->street = "21 Prince Road";
		$site3->city = "Enfield";
		$site3->county = "London";
		$site3->zip = "N3 3AA";
		
		
		// add accounts to the sites
		$site->Account = $account;
		$site2->Account = $account;
		$site3->Account = $account2;
		
		$mpan = new Mpan();
		$mpan->number = "038012221233334444555";
		
		$mpan2 = new Mpan();
		$mpan2->number = "048022221233334444666";
		
		$mpr = new Mpr();
		$mpr->number = "12345678";
		
		$mpr2 = new Mpr();
		$mpr2->number = "1122334455";
		
		
		// add sites to meters
		$mpan->Site = $site;
		$mpan2->Site = $site2;
		
		$mpr->Site = $site;
		$mpr2->Site = $site3;
		
		// create quotes and add data
		
		$quote = new Quote();
		$quote->name = "MyQuote1";
		$quote->User = $user;
		
		
		$quote = new Quote();
		$quote->name = "MyQuote2";
		$quote->User = $user2;
		
		$quote->Mprs[0] = $mpr;
		$quote->Mpans[0] = $mpan;
		$quote->Mpans[1] = $mpan2;

		
		
		// flush() saves all unsaved objects
		$conn = Doctrine_Manager::connection();
		$conn->flush();

		echo "Success!<br />";
		
		echo "<a href='doctrine_tools/create_tables'>Create Tables</a>";

	}

}

?>