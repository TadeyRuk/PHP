<?php
$name = "Lord Xander Dacillo";
$title = "Student & AI Developer";
$bio = "I am a passionate developer with experience in PHP, HTML, Python, Java, C++, and Machine Learning frameworks (CoreML).";
$skills = ["PHP", "HTML", "Python", "Java", "Swift","CSS","3D Rendering","Cinematography", "Visual Effects", "Optimization", "Pandas", "Prompt Engineering", "Adobe Programs"];
$projects = [
    ["title" => "Kouri", "description" => "A smart AI assistant that understands personal contexts", "link" => "https://www.facebook.com/photo/?fbid=1063780345786012&set=a.634674778696573"],
    ["title" => "Echo", "description" => "Hear like never before", "link" => "https://www.google.com/search?sca_esv=032488618a09524f&q=rick+roll&udm=2&fbs=ABzOT_CWdhQLP1FcmU5B0fn3xuWpA-dk4wpBWOGsoR7DG5zJBkzPWUS0OtApxR2914vrjk7XZXfnfKsaRZouQANLhmphNyg6d7jx9WIegRytfuMfNwBSLAX8WsvrJKa122pJHULT0QMGk7davBushgHE-NJ8R4p9DV6GYGihF5A7HWiF02GLdfHfWuN_Ee3mbhYmzxvktglrZPO0v8t1dJNtsIfjcKjBYw&sa=X&sqi=2&ved=2ahUKEwiombL_g4aNAxWIS2wGHV3FCg8QtKgLegQIGRAB&biw=1366&bih=633&dpr=1"],
    ["title" => "Pulse", "description" => "Optimization framework for various operating systems", "link" => "https://developer.apple.com/documentation/coreml/"]
];
$contacts = [
    ["name" => "Facebook", "link" => "https://www.facebook.com/xander.rukkan/"],
    ["name" => "Instagram", "link" => "https://www.apple.com/ph/"],
    ["name" => "LinkedIn", "link" => "https://www.apple.com/ph/"],
];

$exp = [
    ["name" => "MARSU Certified Technician", "description" => "Marindque State University | 2021-2023"],
    ["name" => "Robotics Competition 2023 - 1st runner-up", "description" => "St. Mary's College of Marinduque | 2022-2023"],
    ["name" => "CodeWars - Recognition Award ", "description" => "University of the Philippines Los Banos | 2024-2025"],
    ["name" => "Azure Bootcamp", "description" => "Azure | 2024-2025"],
    ["name" => "Microsoft AI Development Seminar", "description" => "Microsoft Enterprise | 2024-2025"],
    ["name" => "UPS AI Quality Analyst", "description" => "UPS Philippines | 2024-2025"],
    
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $name; ?> | Portfolio</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #9beaff;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        header {
            text-align: center;
            margin-bottom: 30px;
        }
        header h1 {
            font-size: 3em;
            margin: 0;
            color: #007BFF;
        }
        header h2 {
            font-size: 1.8em;
            color: #555;
        }
        header p {
            font-size: 1.2em;
            color: #777;
        }
        .section {
            margin-bottom: 30px;
        }
	.section p{
	    color: #555;
        }
        .section h3 {
            border-bottom: 3px solid #007BFF;
            padding-bottom: 5px;
            color: #007BFF;
        }
        .contact-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 15px;
        }
        .contact-item {
            text-align: center;
        }
        .contact-item a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
            transition: color 0.3s;
        }
        .contact-item a:hover {
            color: #0056b3;
        }
        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        .skills-list li {
            background: #007BFF;
            color: white;
            padding: 12px 15px;
            border-radius: 7px;
            list-style: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.7);
            transition: transform 0.3s;
        }
        .skills-list li:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.7);
        }
        .project {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 20px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.7);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .project:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.7);
        }
        .project strong {
            color: #007BFF;
        }
        .project p {
            margin: 10px 0;
            color: #555;
        }
        .project a {
            color: #007BFF;
            text-decoration: none;
            transition: color 0.3s;
        }
        .project a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <header>
        <h1><?php echo htmlspecialchars($name); ?></h1>
        <h2><?php echo htmlspecialchars($title); ?></h2>
        <p><?php echo htmlspecialchars($bio); ?></p>
    </header>

    <div class="section">
        <h3>Skills</h3>
        <ul class="skills-list">
            <?php foreach ($skills as $skill): ?>
                <li><?php echo htmlspecialchars($skill); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="section">
        <h3>Experience</h3>
        <?php foreach ($exp as $item): ?>
            <div class="project">
                <strong><?php echo htmlspecialchars($item['name']); ?></strong><br>
                <p><?php echo htmlspecialchars($item['description']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="section">
        <h3>Projects</h3>
        <?php foreach ($projects as $project): ?>
            <div class="project">
                <strong><?php echo htmlspecialchars($project['title']); ?></strong><br>
                <p><?php echo htmlspecialchars($project['description']); ?></p>
                <a href="<?php echo htmlspecialchars($project['link']); ?>" target="_blank">View Project</a>
            </div>
        <?php endforeach; ?>
    </div>

 <div class="section">
        <h3>Contact Me</h3>
        <div class="contact-list">
            <?php foreach ($contacts as $contact): ?>
                <div class="contact-item">
                    <a href="<?php echo htmlspecialchars($contact['link']); ?>" target="_blank"><?php echo htmlspecialchars($contact['name']); ?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</body>
</html>
