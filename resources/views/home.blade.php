<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Kreditplus Application</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,700;1,400&family=Roboto:wght@400;500;700&family=Courier+Prime:wght@700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #ffffff;
            color: #333333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            padding: 0 10px;
        }

        /* Header Container */
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 10px 15px;
            background-color: #fff;
            border-bottom: 2px solid #e0e0e0;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-top: 5px;
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

        /* Header Right: Info Panel & Buttons */
        .header-right {
            text-align: right;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 2px;
            font-family: Arial, sans-serif;
            font-size: 13px;
        }

        .header-clock {
            font-family: 'Courier Prime', 'Courier New', monospace;
            font-size: 16px;
            font-weight: bold;
            color: #0000ff;
        }

        .header-product {
            color: #ff0000;
            font-weight: bold;
        }

        .header-username {
            font-weight: bold;
            color: #000000;
        }

        .header-branch {
            font-weight: bold;
            color: #000000;
        }

        .header-buttons {
            display: flex;
            gap: 5px;
            margin-top: 5px;
        }

        .btn-header {
            background: linear-gradient(to bottom, #ffffff 0%, #e6e6e6 100%);
            border: 1px solid #707070;
            padding: 2px 12px;
            font-size: 11px;
            font-weight: bold;
            color: #000000;
            cursor: pointer;
            border-radius: 2px;
            box-shadow: inset 0 1px 0 #fff;
            text-decoration: none;
            display: inline-block;
        }
        .btn-header:hover {
            background: linear-gradient(to bottom, #f2f2f2 0%, #d9d9d9 100%);
            border-color: #333;
        }
        .btn-header:active {
            background: #ccc;
            box-shadow: inset 0 1px 3px rgba(0,0,0,0.2);
        }

        /* Navigation Menu bar */
        .nav-menu {
            display: flex;
            flex-wrap: wrap;
            padding: 8px 5px;
            margin-top: 10px;
            background-color: #ffffff;
            align-items: center;
        }

        .nav-link {
            color: #800000;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            margin-right: 15px;
            display: flex;
            align-items: center;
            transition: color 0.2s;
        }
        .nav-link:hover {
            color: #b30000;
        }
        .nav-link::after {
            content: " ▶";
            font-size: 9px;
            color: #800000;
            margin-left: 5px;
        }
        .nav-link.no-arrow::after {
            content: "";
        }

        /* Main Content Layout */
        .content-container {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 20px;
            margin-top: 10px;
            align-items: start;
        }

        @media (max-width: 1200px) {
            .content-container {
                grid-template-columns: 1fr;
            }
        }

        .column-title {
            font-family: Arial, sans-serif;
            font-size: 15px;
            font-weight: bold;
            color: #000000;
            margin-bottom: 8px;
        }

        /* Table Stylings */
        .table-wrapper {
            width: 100%;
            overflow-x: auto;
            border: 1px solid #ccc;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            font-size: 11px;
            text-align: center;
            background-color: #ffffff;
        }

        .data-table th, .data-table td {
            border: 1px solid #ccc;
            padding: 4px 6px;
        }

        /* Dark Purple Header Styling */
        .data-table thead th {
            background-color: #2e2a77;
            color: #ffffff;
            font-weight: bold;
            font-size: 11px;
        }

        .data-table thead th.sub-th {
            background-color: #3b368c;
            font-size: 10px;
            font-weight: 500;
        }

        .data-table tbody tr:hover {
            background-color: #f5f5f5;
        }

        /* Alignments and specific row styles */
        .align-left {
            text-align: left;
        }
        .align-right {
            text-align: right;
        }

        /* Row highlighting */
        .row-current-sales {
            background-color: #f9f9ff;
            font-weight: bold;
        }
        .row-total {
            background-color: #f0f0f5;
            font-weight: bold;
        }

        /* Blue styling for Bucket names */
        .bucket-name {
            color: #0000ff;
            cursor: pointer;
            text-decoration: none;
        }
        .bucket-name:hover {
            text-decoration: underline;
        }

        /* Right Column: Information Collection Table */
        .info-table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            font-size: 11px;
            background-color: #ffffff;
        }

        .info-table th, .info-table td {
            border: 1px solid #ccc;
            padding: 6px 8px;
            vertical-align: top;
        }

        .info-table thead th {
            background-color: #2e2a77;
            color: #ffffff;
            font-weight: bold;
            text-align: left;
        }

        .info-date {
            color: #000000;
            white-space: nowrap;
            font-weight: bold;
            width: 90px;
        }

        .info-desc {
            color: #3b5998;
            text-align: left;
            line-height: 1.4;
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
            <!-- JavaScript Real-time Clock -->
            <div class="header-clock" id="clock">00:00:00</div>
            <div class="header-product">Produk : KMOB {{ now()->timezone('Asia/Jakarta')->format('l, d F Y') }}</div>
            <div class="header-username">{{ Auth::user()->name }}</div>
            <div class="header-branch">JABODETABEK--&gt;TANGERANG---&gt;ALL</div>
            
            <div class="header-buttons">
                <a href="{{ route('home') }}" class="btn-header">HOME</a>
                
                <!-- Logout Form -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn-header">LOGOUT</button>
            </div>
        </div>
    </div>

    <!-- Navigation Menu -->
    <div class="nav-menu">
        <a href="#" class="nav-link">Produk</a>
        <a href="#" class="nav-link">Main Page</a>
        <a href="#" class="nav-link">Supervisor</a>
        <a href="#" class="nav-link">Report</a>
        <a href="#" class="nav-link">Download</a>
        <a href="#" class="nav-link">Admin</a>
        <a href="#" class="nav-link">Search</a>
        <a href="#" class="nav-link">HelpDesk Collection</a>
        <a href="#" class="nav-link no-arrow">PerKap 8/2011</a>
    </div>

    <!-- Main Content Layout -->
    <div class="content-container">
        
        <!-- Left Column: SBO Table -->
        <div>
            <div class="column-title">SBO</div>
            <div class="table-wrapper">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th rowspan="2" style="vertical-align: middle; width: 12%;">Bucket</th>
                            <th colspan="2">OS Awal</th>
                            <th colspan="4">OS Akhir</th>
                            <th colspan="4">Flow Down</th>
                        </tr>
                        <tr>
                            <th class="sub-th" style="width: 6%;">Acc</th>
                            <th class="sub-th" style="width: 12%;">OS</th>
                            <th class="sub-th" style="width: 6%;">Acc</th>
                            <th class="sub-th" style="width: 12%;">OS</th>
                            <th class="sub-th" style="width: 6%;">%Acc</th>
                            <th class="sub-th" style="width: 6%;">%OS</th>
                            <th class="sub-th" style="width: 6%;">Acc</th>
                            <th class="sub-th" style="width: 12%;">OS</th>
                            <th class="sub-th" style="width: 6%;">%Acc</th>
                            <th class="sub-th" style="width: 6%;">%OS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sboData as $row)
                            @php
                                $isTotal = str_contains($row->bucket, 'Total');
                                $isCurrentSales = str_contains($row->bucket, 'Current+Sales');
                                
                                $rowClass = '';
                                if ($isTotal) {
                                    $rowClass = 'row-total';
                                } elseif ($isCurrentSales) {
                                    $rowClass = 'row-current-sales';
                                }
                            @endphp
                            <tr class="{{ $rowClass }}">
                                <td class="align-left">
                                    @if(!$isTotal && !$isCurrentSales)
                                        <a href="#" class="bucket-name">{{ $row->bucket }}</a>
                                    @else
                                        {{ $row->bucket }}
                                    @endif
                                </td>
                                
                                <!-- OS Awal -->
                                <td class="align-right">{{ number_format($row->os_awal_acc) }}</td>
                                <td class="align-right">{{ number_format($row->os_awal_os) }}</td>
                                
                                <!-- OS Akhir -->
                                <td class="align-right">{{ number_format($row->os_akhir_acc) }}</td>
                                <td class="align-right">{{ number_format($row->os_akhir_os) }}</td>
                                <td class="align-right">{{ number_format($row->os_akhir_pct_acc, 2) }}</td>
                                <td class="align-right">{{ number_format($row->os_akhir_pct_os, 2) }}</td>
                                
                                <!-- Flow Down -->
                                <td class="align-right">{{ number_format($row->flow_down_acc) }}</td>
                                <td class="align-right">{{ number_format($row->flow_down_os) }}</td>
                                <td class="align-right">{{ number_format($row->flow_down_pct_acc, 2) }}</td>
                                <td class="align-right">{{ number_format($row->flow_down_pct_os, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Right Column: Informasi Collection -->
        <div>
            <div class="column-title">Informasi Collection</div>
            <div class="table-wrapper">
                <table class="info-table">
                    <thead>
                        <tr>
                            <th style="width: 25%;">Tanggal</th>
                            <th style="width: 75%;">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($informasi as $info)
                            <tr>
                                <td class="info-date">
                                    {{ \Carbon\Carbon::parse($info->tanggal)->format('d/m/Y') }}
                                </td>
                                <td class="info-desc">
                                    {{ $info->keterangan }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Clock Script -->
    <script>
        function updateClock() {
            const now = new Date();
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();

            // Add leading zero if less than 10
            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            document.getElementById('clock').textContent = hours + ':' + minutes + ':' + seconds;
        }

        // Run clock immediately and then every second
        updateClock();
        setInterval(updateClock, 1000);
    </script>

</body>
</html>
