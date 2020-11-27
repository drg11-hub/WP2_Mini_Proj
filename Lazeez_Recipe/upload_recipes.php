<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
    if (isset($_POST["submit_r"])){
        
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        include("Upload_Datasource.php");
        
        $Author = "";
        $RecipeName = $_POST['RecipeDesc'];
        $RecipeDesc = "";
        $FullRecipe = "";
        $Ingredients = "";
        $Date = $_POST["date"];
        $Time = $_POST["time"];
        $section = $_POST["radiobutton"];
        $usertype="User";
        $authorErr = $rnameErr = $rdescErr = $frErr = $ingErr = "";
        
        //Validations:

        //Author name:
        if (empty($_POST["author"])) {
            $authorErr = "Author Name is required";
        } 
        else {
            $Author = test_input($_POST["author"]);
            /*if (!preg_match("/^[a-zA-Z ]*$/",$Author) || str_word_count($Author)>1) {
            $authorErr = "Enter valid Author name.";
            }*/
        }
        
        //Recipe name:
        if (empty($_POST["RecipeName"])) {
            $rnameErr = "Recipe Name is required";
        } 
        else {
            $RecipeName = $_POST["RecipeName"];
            /*if (!preg_match("/^[a-zA-Z ]*$/",$RecipeName) || str_word_count($RecipeName)>1) {
            $rnameErr = "Enter valid Recipe name.";
            }*/
        }
        
        //Recipe Description:
        if (empty($_POST["RecipeDesc"])) {
            $rdescErr = "Recipe Description is required";
        } 
        else {
            $RecipeDesc = $_POST["RecipeDesc"];
            /*if (!preg_match("/^[a-zA-Z ]*$/",$RecipeDesc) || str_word_count($RecipeDesc)>1) {
            $rdescErr = "Enter valid Recipe description.";
            }*/
        }
        
        //Recipe Details:
        if (empty($_POST["FullRecipe"])) {
            $frErr = "Detailed Recipe is required";
        } 
        else {
            $FullRecipe = $_POST["FullRecipe"];
            /*if (!preg_match("/^[a-zA-Z ]*$/",$FullRecipe) || str_word_count($FullRecipe)>1) {
            $frErr = "Enter valid Recipe preparation details.";
            }*/
        }

        //Ingerdients Details:
        if (empty($_POST["RecipeIngredients"])) {
            $ingErr = "Recipe Ingredients are required";
        } 
        else {
            $Ingredients = $_POST["RecipeIngredients"];
            /*if (!preg_match("/^[a-zA-Z ]*$/",$Ingredients) || str_word_count($Ingredients)>1) {
            $ingErr = "Enter valid Recipe Ingredients.";
            }*/
        }
        

        if (empty($authorErr) && empty($rnameErr) && empty($rdescErr) && empty($frErr) && empty($ingErr)){

            $_SESSION['Author']=$Author;
            $_SESSION['RecipeName']=$RecipeName;
            $_SESSION['RecipeDesc']=$RecipeDesc;
            $_SESSION['FullRecipe']=$FullRecipe;
            $_SESSION['Ingredients']=$Ingredients;
            $_SESSION['Date']=$Date;
            $_SESSION['Time']=$Date;
            $_SESSION['section']=$section;
            //setcookie('Author',$Author,time()+(86400),"/");
            //setcookie('email',$emailaddress,time()+(86400),"/");

            $query1 = "INSERT INTO upload_recipe (Author,RecipeName,RecipeDesc,FullRecipe,Ingredients,Dt,Ti,section) VALUES ('$Author','$RecipeName','$RecipeDesc','$FullRecipe','$Ingredients','$Date','$Time','$section')";
            $result1 = mysqli_query($connect,$query1);
            if ($result1){
                header('Location:index1.php');
                echo "<script>alert('Recipe Data stored.')</script>";
            }
            else{
                echo "Error: " . mysqli_error($connect);
            }
            mysqli_close($connect);
        }
        else{
            echo "<hr><br>$authorErr<br>$rnameErr<br>$rdescErr<br>$frErr<br>$ingErr<br>";
            echo "<a class='nav-link' href='./index1.php' > Go to Home</a>";
        }
    }

?>

</body>
</html>