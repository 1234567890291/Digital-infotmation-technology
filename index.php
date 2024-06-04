<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <meta name="description" content="Register This Form to enroll in Web Development Course">
    <link rel="shortcut icon" href="https://i.postimg.cc/15W2BtbR/Dit-9.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<body>
    <nav>
        <div class="nav-logo"><img src="https://i.postimg.cc/15W2BtbR/Dit-9.png" width="47px" alt="Dit Logo"></div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <!-- <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div> -->
    </nav>
    <div class="container">
        <img src="https://i.postimg.cc/15W2BtbR/Dit-9.png" width="50px" alt="Dit Logo" style="max-width: 100%; margin-bottom: 20px;">
        <h2 style="text-align: center; cursor: pointer;">Registration Form</h2>
        <form>
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" placeholder="First Name" name="firstname" required>
            </div>

            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" placeholder="Last Name" name="lastname" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="Email Address" name="email"  required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" placeholder="Phone Number" name="phonenumber" required>
            </div>

            <div class="form-group" name="course">
                <label for="course">Select Course</label>
                <select id="course" required>
                    <option value="">Select a course</option>
                    <option value="Course 1">Website Development</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" id="country" placeholder="Country" name="country" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" placeholder="City" name="city" required>
            </div>

            <div class="form-group">
                <label for="zip">Zip Code</label>
                <input type="text" id="zip" placeholder="Zip Code" name="zipcode" required>
            </div>

            <div class="form-group">
                <label for="male">Male</label>
                <input type="radio" id="male" name="gender" name="gendermale" required>
                <label for="female">Female</label>
                <input type="radio" id="female" name="gender" name="genderfemale" required>
            </div>

            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
    <script>
        const registrationForm = document.querySelector('form'); // Select the form element
    
        registrationForm.addEventListener('submit', async (e) => {
            e.preventDefault(); // Prevent the default form submission
    
            const formData = new FormData(registrationForm); // Collect form data
    
            const webhookUrl = 'https://discord.com/api/webhooks/1246878527878463540/ihqikiuPKUx4K3O9b5FqqAvT_5q3c_EmSKT1YGFC10LllNcOVT1YqmRfXnofXDFaJySv'; // Your Discord webhook URL
    
            try {
                await fetch(webhookUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        content: `New registration: \nFirst Name: ${formData.get('firstname')}\nLast Name: ${formData.get('lastname')}\nEmail: ${formData.get('email')}\nPhone Number: ${formData.get('phonenumber')}\nCourse: ${formData.get('course')}\nCountry: ${formData.get('country')}\nCity: ${formData.get('city')}\nZip Code: ${formData.get('zipcode')}\nGender: ${formData.get('gender')}`
                    }),
                });
                alert('Form data sent successfully to Dit server');
            } catch (error) {
                console.error('Error sending form data to Dit Server:', error);
                alert('Error sending form data to Dit Server. Please try again later.');
            }
        });
    </script>
    <style>
                body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 60px;
            background-color: #fff;
            padding: 0 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .nav-logo {
            background-image: url(Dit-9.png);
        }

        .nav-links {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            color: #333; /* Dark gray color for links */
            text-decoration: none;
            font-size: 18px;
            padding: 8px 12px;
            position: relative;
            transition: color 0.3s ease; /* Smooth color transition */
        }

        .nav-links a::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #333; /* Dark gray color for underline */
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .nav-links a:hover::before {
            transform: scaleX(1);
        }

        .nav-links a:hover {
            color: #FFA500; /* Orange color on hover */
        }

        .burger {
            display: none;
            cursor: pointer;
        }

        .burger div {
            width: 25px;
            height: 3px;
            background-color: #333; /* Dark gray color for burger lines */
            margin: 5px;
            transition: all 0.3s ease;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                width: 100%;
                position: absolute;
                top: 60px;
                left: 0;
                background-color: #fff; /* White background color */
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .nav-links li {
                margin: 10px 0;
            }

            .burger {
                display: block;
            }

            .nav-active {
                display: flex;
            }

            .toggle .line1 {
                transform: rotate(-45deg) translate(-5px, 6px);
            }

            .toggle .line2 {
                opacity: 0;
            }

            .toggle .line3 {
                transform: rotate(45deg) translate(-5px, -6px);
            }
        }

        .container {
            max-width: 600px; /* Increased max-width for a more spacious look */
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out; /* Apply the fade-in animation */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Make form elements inline */
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        /* Adjust label width for a horizontal layout */
        label {
            width: 120px;
            margin-right: 10px;
            text-align: right;
            font-weight: bold;
            cursor: pointer; /* Add cursor pointer to labels */
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="radio"],
        select {
            width: calc(100% - 130px); /* Adjusted width for input fields */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        
        input[type="submit"] {
            width: calc(100% - 130px); /* Adjusted width for input fields */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            margin-left: 60px;
            background-color: #ff6600;
            color: #fff;
            font-weight: bold;
            border: none;
            cursor: pointer; /* Add cursor pointer to submit button */
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #ff944d;
        }

        select {
            width: calc(100% - 130px); /* Adjusted width for select field */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            cursor: pointer; /* Add cursor pointer to select field */
            background-color: #fff; /* Add background color to select */
            appearance: none; /* Remove default styling */
            -webkit-appearance: none; /* Remove default styling in WebKit browsers */
            -moz-appearance: none; /* Remove default styling in Firefox */
            background-image: url('data:image/svg+xml;utf8,<svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5H7z" fill="black"/></svg>'); /* Add dropdown arrow */
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 12px;
        }

        select option {
            padding: 10px;
            background-color: #fff;
            color: #333;
        }

        select option:hover {
            background-color: #f0f0f0;
        }

        @media only screen and (max-width: 600px) {
            .container {
                width: 90%;
                margin: 50px auto;
            }
            /* Adjust label width for smaller screens */
            label {
                width: auto;
                text-align: left;
            }
            input[type="submit"] {
                margin-left: 2px;
        }
            
            /* Adjust input width for smaller screens */
            input[type="text"],
            input[type="email"],
            input[type="password"],
            input[type="tel"],
            input[type="submit"],
            input[type="radio"],
            select {
                width: 100%;
            }
        }

        @media only screen and (max-width: 537px) {
            .container {
                width: 80%;
                margin: 50px auto;
                font-size: medium;
            }
            /* Adjust label width for smaller screens */
            label {
                width: auto;
                text-align: left;
            }
            input[type="submit"] {
                margin-left: 2px;
        }
            
            /* Adjust input width for smaller screens */
            input[type="text"],
            input[type="email"],
            input[type="password"],
            input[type="tel"],
            input[type="submit"],
            input[type="radio"],
            select {
                width: 100%;
            }
        }
        @media only screen and (max-width: 200px) {
            .container {
                width: 30%;
                margin: 50px auto;
            }
            /* Adjust label width for smaller screens */
            label {
                width: auto;
                text-align: left;
            }
            input[type="submit"] {
                margin-left: 2px;
        }
            
            /* Adjust input width for smaller screens */
            input[type="text"],
            input[type="email"],
            input[type="password"],
            input[type="tel"],
            input[type="submit"],
            input[type="radio"],
            select {
                width: 100%;
            }
        }
    </style>
</body>
</html>