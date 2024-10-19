<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/0f4e2bc10d.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin-left: 250px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap; 
            justify-content: space-between; 
        }
        .form-group-stud {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            width: calc(50% - 10px);
            padding: 0 5px; 
        }
        .full-width {
            width: 100%;
        }
        label {
            margin-bottom: 5px;
            color: #555;
            text-align: left;
            font-weight: bold;
        }
        input[type="text"], input[type="date"], input[type="file"], textarea {
           padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box; 
        }
        textarea {
            height: 100px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
            .form-group {
                width: 100%;
            }
            .full-width {
                width: 100%;
            }
        }
        button{
            padding:5px;
            border-radius: 7px;
            background-color: #333;
            color:#fff;
        }
       
        .main-content{
            margin-top:100px;
        }
   
    </style>

    <!-- 
    <script src="https://cdn.tiny.cloud/1/ikqidsva7e09d7ojpfnaadk20er7mkf9ra3u324d63pp5cno/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#abstract',
        plugins: [
          'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
          'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown',
        ],
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
          { value: 'First.Name', title: 'First Name' },
          { value: 'Email', title: 'Email' },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
      });
      function downloadAbstract(event) {
            event.preventDefault(); 
            const abstractContent = tinymce.get("abstract").getContent({ format: 'text' });
            const blob = new Blob([abstractContent], { type: 'text/plain' });
            const downloadLink = document.createElement('a');
            downloadLink.href = URL.createObjectURL(blob);
            downloadLink.download = 'abstract.txt'; // Change the name if you want
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
        }

      function downloadAsPDF() {
            event.preventDefault();
            const abstractContent = tinymce.get("abstract").getContent({ format: 'text' });
            const blob = new Blob([abstractContent], { type: 'application/pdf' });
            const downloadLink = document.createElement('a');
            downloadLink.href = URL.createObjectURL(blob);
            downloadLink.download = 'abstract.pdf';
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
        }

      function downloadAsDOCX() {
            event.preventDefault();  // Prevent form submission if downloadAsDOCX is called
            const abstractContent = tinymce.get("abstract").getContent({ format: 'text' });
            const blob = new Blob([abstractContent], { type: 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' });
            const downloadLink = document.createElement('a');
            downloadLink.href = URL.createObjectURL(blob);
            downloadLink.download = 'abstract.docx';
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
        }
        


    </script>TinyMCE Integration -->
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <img src="assets/img/girlprofile.png" alt="" width="100px"/>
        <h2 class="profile-name">Vaishali</h2>
        <h2 class="profile-roll">21CS053</h2>
        <ul>
            <li><a href="stud_dash.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="stud_profiles.php"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="stud_projects.php"><i class="fas fa-address-card"></i>Projects</a></li>
            <li><a href="stud_mentors.php"><i class="fas fa-project-diagram"></i>Mentors</a></li>
            <li><a href="stud_submission.php"><i class="fas fa-blog"></i>Submission</a></li>
            <li><a href="create_teams.php"><i class="fas fa-address-book"></i>Teams</a></li>
            <li><a href="stud_editor.php"><i class="fas fa-address-book"></i>Editor</a></li>
        </ul>
    </div>

    <div class="main_header">
        <div class="header">
            <h1>SUBMISSION PAGE</h1>
            <div class="header_icons">
                <div class="search">
                    <input type="text" placeholder="Search..." />
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <i class="fa-solid fa-bell"></i>
            </div>
        </div>
        <br>
        <hr>
    </div>
</div>
<section class="main-content">
<div class="container">
        <form action="stud_submit.php" method="POST" enctype="multipart/form-data">
            <div class="form-group-stud">
                <label for="title">Project Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            
            <div class="form-group-stud">
                <label for="leader">Project Leader:</label>
                <input type="text" id="leader" name="leader" required>
            </div>
            <div class="form-group-stud">
                <label for="members">Project Members </label>
                <input type="text" id="members" name="members" required>
            </div>
            <div class="form-group-stud">
                <label for="mentor">Project Mentor </label>
                <input type="text" id="mentor" name="mentor" required>
            </div>
            <div class="form-group-stud">
                <label for="start_date">Start Date:</label>
                <input type="date" id="start_date" name="start_date" required>
            </div>
            <div class="form-group-stud">
                <label for="end_date">End Date:</label>
                <input type="date" id="end_date" name="end_date" required>
            </div>
            <!--<div class="form-group-stud full-width">
                <label for="abstract">Project Abstract:</label>
                <textarea id="abstract" name="abstract" required></textarea>
            </div>-->
            <div class="form-group-stud">
                <label for="ppt">Upload PPT:</label>
                <input type="file" id="ppt" name="ppt" accept=".ppt, .pptx" required>
            </div>
            <!--<button onclick="downloadAbstract()">Download Abstract as TXT</button>  
            <button onclick="downloadAsPDF()">Download Abstract as PDF</button> 
            <button onclick="downloadAsDOCX()">Download Abstract as DOCX</button> PDF download button -->
            
            <input type="submit" value="Submit">
        </form>
       
    </div>
</section>
</body>
</html>
