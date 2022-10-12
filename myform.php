<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center">REGISTRATION FORM</h2>

                <form method="POST" action="user_data.php">
                    <div class="form-group" >
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    
                    <div class="form-group" >
                        <label for="email">Email </label>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <div class="form-group" >
                        <label for="date of birth">Date Of Birth</label>
                        <input type="date" name="dob" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="text" name="gender" class="form-control">
                    </div>

                    <div class="form-group" >
                        <label for="country">Country</label>
                        <input type="text" name="country" class="form-control">
                    </div>

                    <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
            
                </form>
            </div>

        </div>
    </div>
 

   
</body>
</html>