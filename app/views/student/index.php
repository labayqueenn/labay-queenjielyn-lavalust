<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title; ?></title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 90%;
            max-width: 750px;
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        .header {
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            color: white;
            text-align: center;
            padding: 45px 25px;
        }

        .profile-icon {
            width: 90px;
            height: 90px;
            margin: 0 auto 15px;
            border-radius: 50%;
            background: white;
            color: #5b21b6;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 40px;
            font-weight: bold;
        }

        .header h1 {
            margin: 10px 0;
            font-size: 30px;
        }

        .header p {
            margin: 0;
            font-size: 16px;
            opacity: 0.9;
        }

        .content {
            padding: 35px;
            text-align: center;
        }

        .welcome {
            font-size: 18px;
            color: #444;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .info-box {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 30px;
        }

        .info {
            background: #f5f3ff;
            padding: 18px;
            border-radius: 12px;
        }

        .info strong {
            display: block;
            color: #5b21b6;
            margin-bottom: 6px;
        }

        .navigation {
            margin-top: 20px;
        }

        .navigation a {
            display: inline-block;
            padding: 13px 25px;
            margin: 5px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .home-btn {
            background: #4f46e5;
            color: white;
        }

        .profile-btn {
            background: #ede9fe;
            color: #5b21b6;
        }

        .navigation a:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }

        .footer {
            text-align: center;
            padding: 18px;
            background: #f8fafc;
            color: #777;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .info-box {
                grid-template-columns: 1fr;
            }

            .content {
                padding: 25px;
            }
        }
    </style>
</head>

<body>

<div class="card">

    <div class="header">

        <div class="profile-icon">
            QL
        </div>

        <h1><?= $title; ?></h1>

        <p>BS Information Technology Student Portal</p>

    </div>

    <div class="content">

        <div class="welcome">
            <?= $message; ?>
        </div>

        <div class="info-box">

            <div class="info">
                <strong>Student ID</strong>
                2024-00209
            </div>

            <div class="info">
                <strong>Name</strong>
                Queenjielyn E. Labay
            </div>

            <div class="info">
                <strong>Course</strong>
                BS Information Technology
            </div>

            <div class="info">
                <strong>Year & Section</strong>
                3rd Year - 3-F5
            </div>

        </div>

        <div class="navigation">

           
           <div class="buttons">

    <a href="<?= site_url('student/profile'); ?>" class="profile">
        Student Profile
    </a>

        </div>

    </div>

    <div class="footer">
        © 2026 Queenjielyn E. Labay | Student Information System
    </div>

</div>

</body>
</html>