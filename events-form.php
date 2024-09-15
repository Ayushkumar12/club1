<?php
// Database connection settings
 require_once __DIR__ . '/auth/db_config.php';

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $qualification = $_POST["qualification"];
    $enrollment_number = $_POST["Enrollment_number"];

    // Check for duplicate phone number
    $phone_check_sql = "SELECT * FROM Registration_data WHERE phone = '$phone'";
    $phone_result = $conn->query($phone_check_sql);
    if ($phone_result->num_rows > 0) {
        echo "<script>alert('Error: Phone number already exists.'); window.location.href='events-form.php';</script>";
        exit();
    }

    // Check for duplicate email
    $email_check_sql = "SELECT * FROM Registration_data WHERE email = '$email'";
    $email_result = $conn->query($email_check_sql);
    if ($email_result->num_rows > 0) {
        echo "<script>alert('Error: Email address already exists.'); window.location.href='events-form.php';</script>";
        exit();
    }

    // Check for duplicate enrollment number
    $enrollment_check_sql = "SELECT * FROM Registration_data WHERE enrollment_number = '$enrollment_number'";
    $enrollment_result = $conn->query($enrollment_check_sql);
    if ($enrollment_result->num_rows > 0) {
        echo "<script>alert('Error: Enrollment number already exists.'); window.location.href='events-form.php';</script>";
        exit();
    }

    // If no duplicates, insert data into the Registration_data table
    $insert_sql = "INSERT INTO Registration_data (first_name, last_name, dob, gender, phone, email, qualification, enrollment_number)
            VALUES ('$first_name', '$last_name', '$dob', '$gender', '$phone', '$email', '$qualification', '$enrollment_number')";

    if ($conn->query($insert_sql) === TRUE) {
        echo '<script>alert("New record created successfully!");</script>';
    } else {
        echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "'); window.location.href='events-form.php';</script>";
        exit();
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Events|registration</title>
</head>

<body class="bg-black">
    <main class="flex-1">
        <div class="flex mx-auto my-16 overflow-hidden bg-black rounded-lg lg:space-x-8 lg:max-w-5xl">
            <div class="items-center hidden lg:flex lg:w-1/2">
                <img src="assets/images/cyberzero_logo.png" alt="#">
            </div>
            <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">
                <h2 class="text-2xl font-semibold text-center mb-10 text-white">Registration Form</h2>
                <form action="" method="post">
                    <div class="flex space-x-4">
                        <div class="w-1/2">
                            <div class="mt-4">
                                <label class="block mb-2 text-sm text-gray-200">First-name</label>
                                <input id="first-name" type="text" name="first-name" value="" required="required"
                                    class="w-full px-4 py-2 border rounded-lg bg-black text-gray-300 border-gray-600 focus:border-primary focus:border-purple-950 focus:outline-none  placeholder-gray-400">
                            </div>
                        </div>
                        <div class="w-1/2 ml-3">
                            <div class="mt-4">
                                <label class="block mb-2 text-sm text-gray-200">last-name</label>
                                <input id="last-name" type="text" name="last-name" value="" required="required"
                                    class="w-full px-4 py-2 border rounded-lg bg-black text-gray-300 border-gray-600 focus:border-primary focus:border-purple-950 focus:outline-none  placeholder-gray-400">
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="block mb-2 text-sm text-gray-200">Date of Birth</label>
                        <input id="dob" type="date" name="dob" value="" required="required"
                            class="w-full px-4 py-2 border rounded-lg bg-black text-gray-300 border-gray-600 focus:border-primary focus:border-purple-950 focus:outline-none  placeholder-gray-400">
                    </div>
                    <div class="mt-4">
                        <label class="block mb-2 text-sm text-gray-200">Gender</label>
                        <select id="gender" name="gender"
                            class="w-full px-4 py-2 border rounded-lg bg-black text-gray-300 border-gray-600 focus:border-primary focus:border-purple-950 focus:outline-none  placeholder-gray-400">
                            <option value="" disabled selected>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Prefer not to say">Prefer not to say</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <label class="block mb-2 text-sm text-gray-200">Phone</label>
                        <input id="phone" type="tel" name="phone" value="" required="required" pattern="\+91 \d{10}"
                            class="w-full px-4 py-2 border rounded-lg bg-black text-gray-300 border-gray-600 focus:border-primary focus:border-purple-950 focus:outline-none  placeholder-gray-400">
                    </div>
                    <div class="mt-4">
                        <label class="block mb-2 text-sm text-gray-200">E-Mail</label>
                        <input id="Email" type="email" name="email" value="" required="required" autocomplete="email"
                            class="w-full px-4 py-2 border rounded-lg bg-black text-gray-300 border-gray-600 focus:border-primary focus:border-purple-950 focus:outline-none  placeholder-gray-400">
                    </div>
                    <div class="mt-4">
                        <label class="block mb-2 text-sm text-gray-200">Qualification</label>
                        <select id="qualification" name="qualification" required="required"
                            class="w-full px-4 py-2 border rounded-lg bg-black text-gray-300 border-gray-600 focus:border-primary focus:border-purple-950 focus:outline-none placeholder-gray-400">
                            <option value="" disabled selected>Select Qualification</option>
                            <option value="BCA">BCA</option>
                            <option value="BSC">BSC</option>
                            <option value="MCA">MCA</option>
                            <option value="B-TECH">B-TECH</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <label class="block mb-2 text-sm text-gray-200">Enrollment number</label>
                        <input id="Enrollment_number" type="#" name="Enrollment_number" required="required" pattern="Niu_"
                            class="w-full px-4 py-2 border rounded-lg bg-black text-gray-300 border-gray-600 focus:border-primary focus:border-purple-950 focus:outline-none placeholder-gray-400">
                    </div>
                    <div class="mt-8">
                        <button type="submit"
                            class="w-full px-4 py-2 tracking-wide bg-purple-950 text-white transition-colors duration-300 transform rounded-md hover:bg-gray-600 focus:outline-none focus:bg-slate-950">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>