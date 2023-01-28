<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
    <title>Contact Form</title>
</head>
<body>
    <div class="all-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <h3 style="text-align:center;">Send us a message</h3>
                        <hr>
                        <form action="" class="mt-5" >
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-icon">
                                        <i class="fa-solid fa-user"></i>
                                        <input type="text" name="name" placeholder="Enter Your Name">
                                    </div>
                                    <div class="input-icon">
                                        <i class="fa-solid fa-phone"></i>
                                        <input type="text" name="phone" placeholder="Enter Your Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-icon">
                                        <i class="fa-solid fa-envelope"></i>   
                                        <input type="text" name="email" placeholder="Enter Your Email">
                                    </div>
                                    <div class="input-icon">
                                        <i class="fa-solid fa-globe"></i>
                                        <input type="text" name="website" placeholder="Enter Your Website">
                                    </div>
                                </div>
                                <div class="col-lg-12 ">
                                    <div class="input-icon">
                                        <i class="fa-solid fa-message"></i>
                                        <textarea name="msg" id="" placeholder="Write Your Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-submit">
                                <input type="submit" class="btn btn-primary" value="Send Message">
                                <span >Sending Your message ....</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>