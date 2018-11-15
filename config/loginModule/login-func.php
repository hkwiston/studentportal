<?php      
function login_function($username, $password, $mysqli) {
    if ($stmt = $mysqli->prepare("SELECT id, username, dwp, institute_instituteID FROM student WHERE username = ? LIMIT 1")) {
        $stmt->bind_param('s', $username);  // Bind "$username" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();
        // get variables from result.
        $stmt->bind_result($user_id, $username, $db_password, $inst_id);
        $stmt->fetch();
        if ($stmt->num_rows == 1) {
		
                if (password_verify($password, $db_password)) {
                    // Password is correct!
                    // Get the user-agent string of the user.
                    $user_browser = $_SERVER['HTTP_USER_AGENT'];
                    // XSS protection as we might print this value
                    $user_id = preg_replace("/[^0-9]+/", "", $user_id);
                    
					
					//sessions are created from here
					$_SESSION['user_id'] = $user_id;
                    // XSS protection as we might print this value
                    $username = preg_replace("/[^a-zA-Z0-9_\-]+/","",$username);
                    $_SESSION['username'] = $username;
                    $_SESSION['login_string'] = hash('sha512', $db_password . $user_browser);
                 
				 return true;
                
				} else {
                    //Password is not correct
                    return false;                         
                }
              
        }else{
               // No user exists.
               return false;  
        }
    }else{
      return false;  
    }
  }
  
  function login_check($mysqli) {
    // Check if all session variables are set 
    if (isset($_SESSION['user_id'],$_SESSION['username'],$_SESSION['login_string'])) {
        $user_id = $_SESSION['user_id'];
        $login_string = $_SESSION['login_string'];
        $username = $_SESSION['username'];
        // Get the user-agent string of the user.
        $user_browser = $_SERVER['HTTP_USER_AGENT'];
        if ($stmt = $mysqli->prepare("SELECT dwp FROM student WHERE id = ? LIMIT 1")) {
            // Bind "$user_id" to parameter. 
            $stmt->bind_param('i', $user_id);
            $stmt->execute();   // Execute the prepared query.
            $stmt->store_result();
            if ($stmt->num_rows == 1) {
                // If the user exists get variables from result.
                $stmt->bind_result($password);
                $stmt->fetch();
                $login_check = hash('sha512', $password . $user_browser);
                if (hash_equals($login_check, $login_string) ){
                    // Logged In!!!
                    return true;
                } else {
                    // Not logged in 
                    return false;
                }
            } else {
                // Not logged in 
                return false;
            }
        } else {
            // Not logged in 
            return false;
        }
    } else {
        // Not logged in 
        return false;
    }
}

function getfield($field,$mysqli)
{
    $query = "SELECT `$field` FROM `student` WHERE `id` = '".$_SESSION['user_id']."'";
    //Run the query.
    if($query_run = mysqli_query($mysqli,$query)){
        //If the result exists. Pick the result.
        if($query_result = mysqli_fetch_assoc($query_run)){
            return $query_result[$field];  //Return the field that has been input. Remember not to enclose the field within quotes.
        }
    }
}

function getfield_inst($field,$inst_id,$mysqli)
{
    $query = "SELECT `$field` FROM `institute` WHERE `id` = '".$inst_id."'";
    //Run the query.
    if($query_run = mysqli_query($mysqli,$query)){
        //If the result exists. Pick the result.
        if($query_result = mysqli_fetch_assoc($query_run)){
            return $query_result[$field];  //Return the field that has been input. Remember not to enclose the field within quotes.
        }
    }
}