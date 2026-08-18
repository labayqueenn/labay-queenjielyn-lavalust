<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Queenjielyn | Student Profile</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f5f3ff, #e0e7ff);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .profile-wrapper {
            width: 100%;
            max-width: 850px;
            margin: auto;
        }

        .profile-header {
            background: linear-gradient(135deg, #4c1d95, #7c3aed);
            color: white;
            padding: 40px;
            border-radius: 25px 25px 0 0;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .avatar {
            width: 110px;
            height: 110px;
            margin: auto;
            border-radius: 50%;
            background: white;
            color: #6d28d9;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 42px;
            font-weight: bold;

            border: 5px solid rgba(255,255,255,0.5);
        }

        .profile-header h1 {
            margin: 18px 0 8px;
            font-size: 30px;
        }

        .profile-header p {
            margin: 0;
            opacity: 0.9;
        }

        .profile-content {
            background: white;
            padding: 35px;
            border-radius: 0 0 25px 25px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }

        .section-title {
            color: #4c1d95;
            margin-bottom: 20px;
            font-size: 22px;
        }

        .information {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .info-card {
            padding: 20px;
            border-radius: 15px;
            background: #f8fafc;
            border-left: 5px solid #7c3aed;
        }

        .info-card .label {
            display: block;
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 7px;
        }

        .info-card .value {
            font-size: 17px;
            font-weight: bold;
            color: #1f2937;
        }

        .about {
            margin-top: 30px;
            padding: 20px;
            background: #f5f3ff;
            border-radius: 15px;
        }

        .about h3 {
            margin-top: 0;
            color: #5b21b6;
        }

        .about p {
            color: #555;
            line-height: 1.6;
        }

        .navigation {
            text-align: center;
            margin-top: 30px;
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

        .home {
            background: #4c1d95;
            color: white;
        }

        .profile {
            background: #ede9fe;
            color: #5b21b6;
        }

        .navigation a:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            color: #6b7280;
            font-size: 13px;
        }

        @media (max-width: 650px) {

            .information {
                grid-template-columns: 1fr;
            }

            .profile-content {
                padding: 25px;
            }

            .profile-header {
                padding: 30px 20px;
            }

        }

    </style>

</head>

<body>

<div class="profile-wrapper">

    <!-- PROFILE HEADER -->

    <div class="profile-header">

        <div class="avatar">
            QL
        </div>

        <h1><?= $name; ?></h1>

        <p>BS Information Technology Student</p>

    </div>


    <!-- PROFILE CONTENT -->

    <div class="profile-content">

        <h2 class="section-title">
            Student Information
        </h2>


        <div class="information">

            <div class="info-card">

                <span class="label">
                    Student ID
                </span>

                <span class="value">
                    <?= $student_id; ?>
                </span>

            </div>


            <div class="info-card">

                <span class="label">
                    Full Name
                </span>

                <span class="value">
                    <?= $name; ?>
                </span>

            </div>


            <div class="info-card">

                <span class="label">
                    Course
                </span>

                <span class="value">
                    <?= $course; ?>
                </span>

            </div>


            <div class="info-card">

                <span class="label">
                    Year Level
                </span>

                <span class="value">
                    <?= $year; ?>
                </span>

            </div>


            <div class="info-card">

                <span class="label">
                    Section
                </span>

                <span class="value">
                    <?= $section; ?>
                </span>

            </div>


            <div class="info-card">

                <span class="label">
                    Email Address
                </span>

                <span class="value">
                    <?= $email; ?>
                </span>

            </div>

        </div>


        <!-- ABOUT STUDENT -->

        <div class="about">

            
        </div>


        <!-- NAVIGATION -->

        <div class="navigation">

            <a href="<?= site_url('student'); ?>" class="home">Home</a>
        </div>

    </div>


    <div class="footer">

        Student Information System |
        Queenjielyn E. Labay

    </div>

</div>

</body>
</html>