<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'Student Home'); ?></title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #eef7ff, #dfeeff);
            color: #1f2937;
        }
        .container {
            max-width: 960px;
            margin: 50px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.12);
            overflow: hidden;
        }
        .header {
            background: #0f172a;
            color: #fff;
            padding: 26px 32px;
        }
        .nav {
            padding: 18px 32px;
            background: #e2e8f0;
            display: flex;
            gap: 18px;
        }
        .nav a {
            text-decoration: none;
            color: #0f172a;
            font-weight: 700;
        }
        .content {
            padding: 28px 32px 40px;
        }
        .card {
            background: #f8fafc;
            border: 1px solid #dbeafe;
            border-radius: 12px;
            padding: 22px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 14px;
            margin-top: 20px;
        }
        .info-item {
            background: #fff;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            padding: 14px 16px;
        }
        .label {
            display: block;
            font-size: 12px;
            text-transform: uppercase;
            color: #475569;
            letter-spacing: 0.08em;
            margin-bottom: 6px;
        }
        .value {
            font-size: 1.05rem;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Student Information Page</h1>
        </div>

        <div class="nav">
            <a href="<?= site_url('student'); ?>">Home</a>
            <a href="<?= site_url('student/profile'); ?>">Student Profile</a>
        </div>

        <div class="content">
            <div class="card">
                <h2>Welcome, <?= htmlspecialchars($name); ?></h2>
                <p>This page is a simple Student Information dashboard built using the LavaLust framework.</p>

                <div class="info-grid">
                    <div class="info-item">
                        <span class="label">Student ID</span>
                        <span class="value"><?= htmlspecialchars($student_id); ?></span>
                    </div>
                    <div class="info-item">
                        <span class="label">Name</span>
                        <span class="value"><?= htmlspecialchars($name); ?></span>
                    </div>
                    <div class="info-item">
                        <span class="label">Course</span>
                        <span class="value"><?= htmlspecialchars($course); ?></span>
                    </div>
                    <div class="info-item">
                        <span class="label">Section</span>
                        <span class="value"><?= htmlspecialchars($section); ?></span>
                    </div>
                    <div class="info-item">
                        <span class="label">Program</span>
                        <span class="value"><?= htmlspecialchars($program); ?></span>
                    </div>
                    <div class="info-item">
                        <span class="label">Email</span>
                        <span class="value"><?= htmlspecialchars($email); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
