<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Kreditplus Application</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,700;1,400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', 'Inter', sans-serif;
            background-color: #ffffff;
            color: #333333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header Container */
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 40px;
            border-bottom: 3px solid #ffcc00;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            background-color: #fff;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        /* Kreditplus Logo Badge */
        .logo-kreditplus {
            position: relative;
            background: linear-gradient(135deg, #ffcc00 0%, #ffdf6d 60%, #a2d2ff 100%);
            padding: 10px 20px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            font-weight: 800;
            font-size: 15px;
            letter-spacing: -0.5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .logo-kreditplus .kredit {
            color: #0b3c5d;
        }
        .logo-kreditplus .plus {
            color: #d9534f;
        }
        .logo-kreditplus .stars {
            display: inline-block;
            margin-left: 4px;
            font-size: 11px;
            color: #d9534f;
            vertical-align: super;
        }

        /* FiCoMS logo */
        .logo-ficoms {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .logo-ficoms-text {
            font-size: 24px;
            font-weight: 800;
            line-height: 1;
        }
        .logo-ficoms-text .f { color: #0b3c5d; }
        .logo-ficoms-text .i { color: #0b3c5d; font-style: italic; }
        .logo-ficoms-text .c { color: #0b3c5d; }
        .logo-ficoms-text .o { color: #0b3c5d; font-style: italic; }
        .logo-ficoms-text .m { color: #0b3c5d; }
        .logo-ficoms-text .s { color: #0b3c5d; }
        .logo-ficoms-text .web {
            color: #d9534f;
            margin-left: 8px;
            font-weight: 800;
        }
        .logo-ficoms-sub {
            font-size: 10px;
            font-weight: 700;
            color: #333;
            letter-spacing: 0.5px;
            margin-top: 2px;
        }

        /* Header Right: Date Info */
        .header-right {
            font-family: 'Playfair Display', Georgia, serif;
            font-weight: bold;
            font-size: 14px;
            color: #000;
        }

        /* Main Content Container */
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .login-box {
            width: 100%;
            max-width: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
        }

        .login-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 32px;
            font-weight: bold;
            color: #000000;
            text-align: center;
        }

        /* Google Sign In Button */
        .btn-google {
            display: flex;
            align-items: center;
            gap: 15px;
            background-color: #ffffff;
            color: #555555;
            border: 1px solid #dadce0;
            border-radius: 4px;
            padding: 12px 24px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            box-shadow: 0 1px 3px rgba(0,0,0,0.08);
            transition: all 0.2s ease;
            text-decoration: none;
            outline: none;
        }
        .btn-google:hover {
            background-color: #f8f9fa;
            border-color: #c6c6c6;
            box-shadow: 0 2px 4px rgba(0,0,0,0.12);
        }
        .btn-google:active {
            background-color: #eeeeee;
        }
        .btn-google svg {
            width: 20px;
            height: 20px;
        }

        /* Information Notice Card */
        .info-card {
            width: 100%;
            max-width: 600px;
            border: 1.5px solid #d9534f;
            background-color: #ffeb99;
            padding: 15px 25px;
            border-radius: 4px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.02);
        }
        .info-card-text {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 14px;
            color: #8a1a1a;
            line-height: 1.5;
        }
        .info-card-text strong {
            font-weight: bold;
            color: #b30000;
        }

        /* Footer */
        .footer {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 13px;
            color: #555555;
            text-align: center;
            padding: 20px;
            margin-top: auto;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="header-container">
        <div class="header-left">
            <div class="logo-kreditplus">
                <span class="kredit">financial</span>&nbsp;<span class="plus">automotif finance</span><span class="stars">✦</span>
            </div>
            <div class="logo-ficoms">
                <div class="logo-ficoms-text">
                    <span class="f">Collection</span><span class="web" style="margin-left: 5px;">Management</span>
                </div>
                <div class="logo-ficoms-sub">Collection Management System</div>
            </div>
        </div>
        <div class="header-right">
            <!-- Dynamic Date Display in English format -->
            {{ now()->timezone('Asia/Jakarta')->format('l, d F Y') }}
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="main-content">
        <div class="login-box">
            <h1 class="login-title">Sign In</h1>

            <!-- Google OAuth Login Form -->
            <form action="{{ route('login.google') }}" method="POST">
                @csrf
                <button type="submit" class="btn-google">
                    <!-- Google G Logo SVG -->
                    <svg viewBox="0 0 24 24">
                        <path fill="#ea4335" d="M12 5.04c1.78 0 3.37.61 4.62 1.8l3.46-3.46C17.99 1.19 15.22 0 12 0 7.31 0 3.25 2.69 1.25 6.61l4.08 3.16C6.31 6.84 8.92 5.04 12 5.04z"/>
                        <path fill="#4285f4" d="M23.49 12.27c0-.81-.07-1.59-.2-2.36H12v4.51h6.46c-.29 1.48-1.14 2.73-2.4 3.58l3.76 2.91c2.2-2.03 3.67-5.02 3.67-8.64z"/>
                        <path fill="#fbbc05" d="M5.33 14.23c-.24-.73-.38-1.5-.38-2.29s.14-1.56.38-2.29L1.25 6.49C.45 8.1.01 9.9.01 11.8s.44 3.7 1.24 5.31l4.08-3.11z"/>
                        <path fill="#34a853" d="M12 18.96c-3.08 0-5.69-1.8-6.67-4.47l-4.08 3.11c2 3.92 6.06 6.61 10.75 6.61 3.27 0 6.02-1.09 8.03-2.97l-3.76-2.91c-1.11.75-2.54 1.23-4.27 1.23z"/>
                    </svg>
                    <span>Sign in with Google</span>
                </button>
            </form>

            <!-- Warnings / Notice Information -->
            <div class="info-card">
                <p class="info-card-text">
                    Diinformasikan bagi seluruh pengguna <strong>FICOMS/RMS</strong>. Untuk pengalaman lebih baik, login <strong>FICOMS/RMS</strong> sudah menggunakan <strong>SSO Google</strong>.
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        @2015 PT. Finansia Multi Finance
    </div>

</body>
</html>
