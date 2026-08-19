<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($student['name'] ?? 'Student Profile'); ?></title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #fff7ed, #ffedd5);
            color: #1f2937;
        }
        .container {
            max-width: 980px;
            margin: 50px auto;
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 20px 50px rgba(120, 53, 15, 0.12);
            overflow: hidden;
        }
        .header {
            background: #7c2d12;
            color: #fff;
            padding: 26px 32px;
        }
        .nav {
            padding: 18px 32px;
            background: #ffedd5;
            display: flex;
            gap: 18px;
        }
        .nav a {
            text-decoration: none;
            color: #7c2d12;
            font-weight: 700;
        }
        .content {
            padding: 32px;
        }
        .profile-card {
            background: #fff7ed;
            border: 1px solid #fed7aa;
            border-radius: 14px;
            padding: 28px;
        }
        .profile-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 12px 0;
            border-bottom: 1px solid #fdba74;
        }
        .label {
            font-weight: 700;
            color: #9a4d22;
        }
        .badge {
            display: inline-block;
            padding: 6px 10px;
            margin: 4px 8px 4px 0;
            background: #fdba74;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            color: #7c2d12;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Student Profile</h1>
        </div>

        <div class="nav">
            <a href="<?= site_url('student'); ?>">Home</a>
            <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
        </div>

        <div class="content">
            <div class="profile-card">
                <h2><?= htmlspecialchars($student['name']); ?></h2>
                <p><?= htmlspecialchars($student['description']); ?></p>

                <div class="profile-row"><span class="label">Student ID</span><span><?= htmlspecialchars($student['student_id']); ?></span></div>
                <div class="profile-row"><span class="label">Course</span><span><?= htmlspecialchars($student['course']); ?></span></div>
                <div class="profile-row"><span class="label">Year Level</span><span><?= htmlspecialchars($student['year']); ?></span></div>
                <div class="profile-row"><span class="label">Section</span><span><?= htmlspecialchars($student['section']); ?></span></div>
                <div class="profile-row"><span class="label">Email</span><span><?= htmlspecialchars($student['email']); ?></span></div>
                <div class="profile-row"><span class="label">Address</span><span><?= htmlspecialchars($student['address']); ?></span></div>
                <div class="profile-row"><span class="label">Contact</span><span><?= htmlspecialchars($student['contact']); ?></span></div>
                <div class="profile-row">
                    <span class="label">Skills</span>
                    <span>
                        <?php foreach ($student['skills'] as $skill): ?>
                            <span class="badge"><?= htmlspecialchars($skill); ?></span>
                        <?php endforeach; ?>
                    </span>
                </div>
                <div class="profile-row">
                    <span class="label">Hobbies</span>
                    <span>
                        <?php foreach ($student['hobbies'] as $hobby): ?>
                            <span class="badge"><?= htmlspecialchars($hobby); ?></span>
                        <?php endforeach; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
