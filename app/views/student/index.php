<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title; ?></title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            background:
                linear-gradient(
                    135deg,
                    #4f46e5,
                    #7c3aed,
                    #9333ea
                );
        }

        .welcome-card {
            width: 90%;
            max-width: 700px;

            padding: 60px 45px;

            text-align: center;

            background: rgba(255, 255, 255, 0.95);

            border-radius: 25px;

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.25);
        }

        .icon {
            width: 100px;
            height: 100px;

            margin: 0 auto 25px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: linear-gradient(
                135deg,
                #4f46e5,
                #7c3aed
            );

            color: white;

            font-size: 40px;
            font-weight: bold;

            box-shadow:
                0 10px 25px rgba(79, 70, 229, 0.35);
        }

        h1 {
            color: #312e81;
            font-size: 36px;
            margin-bottom: 15px;
        }

        .subtitle {
            color: #6b7280;
            font-size: 18px;
            line-height: 1.7;

            margin-bottom: 10px;
        }

        .description {
            color: #777;
            font-size: 15px;
            line-height: 1.6;

            max-width: 520px;
            margin: 0 auto 35px;
        }

        .button {
            display: inline-block;

            padding: 14px 30px;

            background: linear-gradient(
                135deg,
                #4f46e5,
                #7c3aed
            );

            color: white;

            text-decoration: none;

            font-size: 15px;
            font-weight: bold;

            border-radius: 10px;

            transition: 0.3s;

            box-shadow:
                0 8px 20px rgba(79, 70, 229, 0.3);
        }

        .button:hover {
            transform: translateY(-3px);

            box-shadow:
                0 12px 25px rgba(79, 70, 229, 0.4);
        }

        .footer {
            margin-top: 35px;

            font-size: 13px;
            color: #9ca3af;
        }

        @media (max-width: 600px) {

            .welcome-card {
                padding: 45px 25px;
            }

            h1 {
                font-size: 28px;
            }

            .subtitle {
                font-size: 16px;
            }

            .icon {
                width: 85px;
                height: 85px;
                font-size: 32px;
            }
        }
    </style>

</head>

<body>

    <div class="welcome-card">

        <div class="icon">
            QL
        </div>

        <h1>
            <?= $title; ?>
        </h1>

        <p class="subtitle">
            Welcome to My Student Information System
        </p>

        <p class="description">
            <?= $message; ?>
            This website provides access to my student profile
            and personal academic information.
        </p>

        <a href="<?= site_url('student/profile'); ?>" class="button">
            View My Student Profile
        </a>

        <div class="footer">
            © 2026 Queenjielyn E. Labay
        </div>

    </div>

</body>

</html>