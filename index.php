<!DOCTYPE html>
<html>
    
	<head> 
		<title>MaintDB</title>
        <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/index.css">
        <!--Comment-->
        
    </head>
	
	<body>
        <header class="header-strip">
            <img src="./images/favicon-32x32.png" alt="T">
            <p>Header Placeholder</p>
        </header>
        <main>
            <section class="login-section">
                <p class="form-heading">Login</p>
                <form action="#">
                    <label for="user_name">User name:</label><br>
                    <input type="text" id="user_name" name="user_name" value="User Name"><br>
                    <label for="password">Password:</label><br>
                    <input type="text" id="password" name="password" value="Password"><br><br>
                    <input type="submit" value="Submit">
                </form> 
            </section>
            <section class="signup-section">
                <p class="form-heading">Signup</p>
                <form action="#">
                    <label for="user_name">User name:</label><br>
                    <input type="text" id="user_name" name="user_name" value="User Name"><br>
                    <label for="password">Password:</label><br>
                    <input type="text" id="passeord" name="password" value="Choose a Password"><br>
                    <label for="password">Retype Password:</label><br>
                    <input type="text" id="password" name="password" value="Retype Password"><br>
                    <label for="token">Input Token:</label><br>
                    <input type="text" id="token" name="token" value="Enter Token"><br><br>
                    <input type="submit" value="Submit">
                </form>
            </section>
            <section class="create-new-db">
                <p class="form-heading">New DB Placeholder</p>
            </section>
        </main>
	</body>
</html>