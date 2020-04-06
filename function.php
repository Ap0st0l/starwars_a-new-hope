<?php



const USERS_FILE = "users.json";
const POSTS_FILE = "posts.json";

function LoginView(): string
{

	$html = "";

	$html .= "<div class = forma><h2>Login</h2>
		<form action= 'index.php?action=login' method='POST'>
		<br>
		  <input type=	'text' name='login' placeholder='Login'>
            <br>
          <input type=	'password' name='password' placeholder='Password'>
            <br>
          <input type=	'submit' name='Register'>

		</form><br>
		Don't have an account <a href='index.php?action=register'>register</a> </div>";
		return $html;
		
		
}
	

function RegisterView(): string
{

	 return "<div class = forma><h2>Register</h2>
        <form action='index.php?action=register' method='POST'>
            <br>
            <input type='text' name='login' placeholder='Login'>
            <br>
            <input type='password' name='password' placeholder='Password'>
            <br>
            <input type='submit' name='Register'>
        </form><br>Have an account <a href='index.php?action=login'>login</a></div>
    ";


}

	
function readJsonFile(string $fileName): array
{
    return json_decode((file_get_contents($fileName) ?? '[]'), true) ?? [];
}



function writeJsonFile(array $data, string $fileName): void {
	$jsonString = json_encode($data);
	file_put_contents($fileName, $jsonString);
}


 
function createUser(string $login, string $password): bool
{
	$newUser = [
			'login' => $login, 
			'password' => md5($password)
	];

	$users = readJsonFile(USERS_FILE);
	$users[] = $newUser;
	writeJsonFile($users, USERS_FILE);

	$_SESSION['data']['user'] = $newUser;
	return true;

}

function loginUser (string $login, string $password)
{
	$users = readJsonFile(USERS_FILE);
	foreach ($users as $user) 
	{
		if ($user['login'] === $login && $user['password'] === md5($password) )
		{
			$_SESSION['data']['user'] = $user;
			header("Location: index.php");
			return;
		}
		echo "User not found";
	}
}

function mainPageView()
{
	if (isset($_SESSION['data']['user']['login'])) 
	{
		echo get_header();
		echo sendPost();
		$text = readJsonFile (POSTS_FILE);
		
		foreach ($text as $key => $value) {
			foreach ($value as $qwe => $zxc) {
				echo $zxc . "<br>";
			}
			
		}
	}
	else
	{
		echo LoginView();
	}	

}

function sendPost()
{
	return 
			"<br>
            Оставь комментарий 
            <br>
            <form action='index.php' method='POST'>
            <textarea class = textarea name='text'></textarea>
            <br>
            <input type='submit' name='send'>
            </form><br><br><br>
			";
			
			
}




function createPost(string $text)
{
	$newPost = [
			'text' => $text
	];

	$posts = readJsonFile(POSTS_FILE);
	$posts[] = $newPost;
	writeJsonFile($posts, POSTS_FILE);
	return;

}


function get_header(): string
{
return
"<button class=main_page><a class = main_page href='index.php'>Main Page</a></button>
<button class=logout><a class=main_page href='index.php?action=logout'>Logout</a></button>
<hr>
";
}




