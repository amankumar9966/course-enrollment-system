

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> STUDENT ENROLLMENT FORM</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="form_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>


<body>
     <section class="header">
        <nav>
            <a href="webindex.html"><img src="logo.png"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="webindex.html">HOME </a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="course.html">COURSES</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
        </nav>
     </section>

    <section class="enrollment"> 
    
    <form id="enrollmentForm" 
    action="submit.php"
    method="POST">

        <div class="container">
            <center>
                <h1 class="form-title"> Student Enrollment Form</h1>
                <h3 id="welcomeMsg"></h3>
            </center>
            <hr>
            <div class="form-row">

                <div class="form-group">
                  <label for="firstname">First Name</label>
                  <input
                    type="text"
                    id="firstname"
                    name="firstname"
                    placeholder="Enter First Name">
               </div>

               <div class="form-group">
                 <label for="lastname">Last Name</label>
                  <input
                    type="text"
                    id="lastname"
                    name="lastname"
                    placeholder="Enter Last Name">
               </div>

            </div>

    <div class="form-row">

        <div class="form-group">

          <label for="phone">Phone Number</label>

           <input
            type="tel"
            id="phone"
            name="phone"
            placeholder="Enter Phone Number"
            required>

            <small id="phoneError"></small>


        </div>

       <div class="form-group">

           <label for="course">Course</label>

            <select id="course" name="course">

               <option>BCA</option>
               <option>BBA</option>
               <option>B.Tech</option>
               <option>M.Tech</option>
               <option>MBA</option>

            </select>

        </div>

    </div>

    <!-- Add Gender Here -->

    <div class="form-group gender-group">
        <label>Gender</label>

       <label>
        <input type="radio" name="gender" value="Male" required>
           Male
       </label>
 
      <label>
          <input type="radio" name="gender" value="Female">
            Female
      </label>

      <label>
          <input type="radio" name="gender" value="Other">
            Other
      </label>
    </div>

       <div class="form-group">

           <label for="address">Current Address</label>

            <textarea id="address" name="address" maxlength="200" cols="80" rows="5" placeholder="Current Address" required> </textarea>

           <p id="counter">0 / 200</p>

    </div>

<button type="submit" class="registerbtn">
    Submit Form
</button>
    </form>
    </section>
    <script src="form.js"></script>
</body>
</html>
