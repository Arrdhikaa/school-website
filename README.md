📘 School PPDB Project Website

📌 Project Description

This project is a simple PPDB (New Student Admission) website created as a Web Programming course assignment. This website displays school information and provides a new student registration form with basic validation using HTML, CSS, and PHP (GET & POST) without a database.

This project focuses on:

Understanding the form flow (input → validation → output)

Implementing a simple and consistent UI design

Simulating a static (non-production) PPDB system



---

🛠️ Technologies Used

HTML5 – Page structure

CSS3 – Display and layout (Flexbox & Grid)

Native PHP – Form processing & validation (without framework)

Local Web Server – XAMPP / Laragon / localhost



---

📂 Folder Structure

/ppdb-project
│── index.html          # School website main page
│── form_ppdb.php       # PPDB registration form
│── hasil_ppdb.php      # Registration results & validation page
│── style.css           # Main styling file
│── /image              # Image & icon assets
│── README.md           # Project documentation


---

🧾 Main Features

School profile page

Program & extracurricular information

PPDB registration form

Required input validation

Report card score validation (minimum 80)

NISN length restriction (database simulation)

Registration results page

Responsive & modern design



---

📝 Form Validation



📝 Form Validation

Validations applied:

All fields are required

NISN is limited to a maximum of 10 characters

Indonesian Language, Mathematics, and Science scores must be at least 80

Validations are performed in:

HTML (client-side) using required & min

PHP (server-side) using if conditions



> This validation is a simulation for learning purposes.




---

🔁 System Flow

1. User opens the website page


2. User enters the PPDB Form page


3. User fills in the registration data


4. Data is sent using the POST method


5. PHP validates the data


6. If the data is invalid → an error message appears


7. If valid → registration results page appears




---

⚠️ Important Notes

The project does not use a database

Data is not permanently stored

Used for learning and college assignments, not production



---

🎯 Learning Objectives

Understand the concept of form submission

Apply input validation

Connect external CSS to PHP

Practice simple web project structure



---

👤 Author

Name  : Arrdhikaa


---

📄 License

This project is created for academic purposes and is free to use for learning.

Translated with DeepL.com (free version)
