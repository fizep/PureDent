<?php

require'../hms/include/config.php';


function error422($message){
    
    $data = [
        'status'=> 422,
        'message'=> $message,
    
    ];
    header("HTTP/1.1 422 Unprocessable Entity");
    echo json_encode($data);
    exit();
}

function userlogin($userinput){
    global $con;
    
    $name = mysqli_real_escape_string($con, $userinput['fullName']);
    $address = mysqli_real_escape_string($con, $userinput['address']);
    $city = mysqli_real_escape_string($con, $userinput['city']);
    $gender = mysqli_real_escape_string($con, $userinput['gender']);
    $email = mysqli_real_escape_string($con, $userinput['email']);
    $password = mysqli_real_escape_string($con, $userinput['password']);
    // $regDate = mysqli_real_escape_string($con, $userinput['regDate']);
    // $updationDate = mysqli_real_escape_string($con, $userinput['updationDate']);
    
    
    
    if(empty(trim($name))){
        return error422('Enter your name');
    }
    elseif(empty(trim($address)))
    {
        return error422('Enter your address');
    }
    elseif(empty(trim($city)))
    {
        return error422('Enter your city');
    }
    elseif(empty(trim($gender)))
    {
        return error422('Enter your gender');
    }
    elseif(empty(trim($email)))
    {
        return error422('Enter your email');
    }
    elseif(empty(trim($password)))
    {
        return error422('Enter your password');
    }
    else{
        
        $query = "INSERT INTO users (fullName, address, city, gender, email, password) VALUES ('$name', '$address', '$city', '$gender', '$email','$password')";
        $result = mysqli_query($con, $query);

        if($result){ 
         
            $data = [
                'status'=> 201,
                'message'=> 'User Created Successfully',
            
            ];
            header("HTTP/1.1 201 Created");
            return json_encode($data);
            
        }
        else
        {
            $data = [
                'status'=> 500,
                'message'=> 'Internal Server Error',
            
            ];
            header("HTTP/1.1 500 Internal Server Error");
            return json_encode($data);
        }
    }


    
}

function getUser($userParams){
    
    global $con;

    if($userParams['id'] == null){
        return error422('Enter the user id');
    }

    $userid = mysqli_real_escape_string($con,$userParams['id']);

    $query = "SELECT * FROM users WHERE id = '$userid' LIMIT 1";
    $result = mysqli_query($con, $query);

    if($result){

        if(mysqli_num_rows($result)==1){
            
            $res = mysqli_fetch_assoc($result);
            $data = [
                'status'=> 200,
                'message'=> 'User Fetched Successfully',
                'data'=>$res
            
            ];
            header("HTTP/1.1 200 Success");
            return json_encode($data);
            
        }
        else{
            $data = [
                'status'=> 404,
                'message'=> 'No User Found',
            
            ];
            header("HTTP/1.1 404 Not Found ");
            return json_encode($data);
        }
        
    }else{
       
        $data = [
            'status'=> 500,
            'message'=> 'Internal Server Error',
        
        ];
        header("HTTP/1.1 500 Internal Server Error");
        return json_encode($data);
        
    }
    
}

function getUsers(){
    global $con ;
    
    $query = "SELECT * FROM users";
    
    $query_run = mysqli_query($con, $query);

    if($query_run){
        if(mysqli_num_rows($query_run) > 0){
            
            $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
            
            $data = [
                'status'=> 200,
                'message'=>'Users List Fetched Successfully ',
                'data' => $res 
            
            ];
            header("HTTP/1.1 200 Success");
            return json_encode($data);
            
        }else
        {
            $data = [
                'status'=> 404,
                'message'=>'No Users Found',
            
            ];
            header("HTTP/1.1 404 No Users Found");
            return json_encode($data);
        }
    }
    else
    {
        $data = [
            'status'=> 500,
            'message'=> 'Internal Server Error',
        
        ];
        header("HTTP/1.1 500 Internal Server Error");
        return json_encode($data);
    }

}

function updateuser($userinput, $userParams){
    global $con;

    if(!isset($userParams['id'])){
        return error422(' User ID not Found in URL');
    }
    elseif($userParams['id'] == null){
        return error422(' Enter the User Id');
    }
    
    $userid = mysqli_real_escape_string($con, $userParams['id']);
    
    $name = mysqli_real_escape_string($con, $userinput['fullName']);
    $address = mysqli_real_escape_string($con, $userinput['address']);
    $city = mysqli_real_escape_string($con, $userinput['city']);
    $gender = mysqli_real_escape_string($con, $userinput['gender']);
    $email = mysqli_real_escape_string($con, $userinput['email']);
    $password = mysqli_real_escape_string($con, $userinput['password']);
    // $regDate = mysqli_real_escape_string($con, $userinput['regDate']);
    // $updationDate = mysqli_real_escape_string($con, $userinput['updationDate']);
    
    
    
    if(empty(trim($name))){
        return error422('Enter your name');
    }
    elseif(empty(trim($address)))
    {
        return error422('Enter your address');
    }
    elseif(empty(trim($city)))
    {
        return error422('Enter your city');
    }
    elseif(empty(trim($gender)))
    {
        return error422('Enter your gender');
    }
    elseif(empty(trim($email)))
    {
        return error422('Enter your email');
    }
    elseif(empty(trim($password)))
    {
        return error422('Enter your password');
    }
    else{
        
        $query = "UPDATE users SET fullName='$name',address='$address', city='$city', gender='$gender', email='$email', password='$password' WHERE id='$userid' LIMIT 1 ";
        $result = mysqli_query($con, $query);

        if($result){ 
         
            $data = [
                'status'=> 200,
                'message'=> 'User Updated Successfully',
            
            ];
            header("HTTP/1.1 200 Success");
            return json_encode($data);
            
        }
        else
        {
            $data = [
                'status'=> 500,
                'message'=> 'Internal Server Error',
            
            ];
            header("HTTP/1.1 500 Internal Server Error");
            return json_encode($data);
        }
    }


    
}

function deleteuser( $userParams){
    
    global $con;
    
    if(!isset($userParams['id'])){
        return error422(' User ID not Found in URL');
    }
    elseif($userParams['id'] == null){
        return error422(' Enter the User Id');
    }
    
    $userid = mysqli_real_escape_string($con, $userParams['id']);

    $query = "DELETE FROM users WHERE id = '$userid' LIMIT 1";
    $result = mysqli_query($con, $query);

    if($result){

        $data = [
            'status'=> 200,
            'message'=> 'User Deleted Successfully',
        
        ];
        header("HTTP/1.1 200 Success");
        return json_encode($data);
        
    }else{
        
        $data = [
            'status'=> 404,
            'message'=> 'User not Found',
        
        ];
        header("HTTP/1.1 404 Not Found");
        return json_encode($data);
    }
}

?>