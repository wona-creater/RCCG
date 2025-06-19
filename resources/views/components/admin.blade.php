<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&family=Noto+Sans:wght@400;500;700;900&display=swap"
        rel="stylesheet">
    <title>Stitch Design</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64,AA==">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Inter, 'Noto Sans', sans-serif;
            background-color: #101323;
            color: #fff;
            min-height: 100vh;
            display: flex;
            overflow-x: hidden;
        }

        .layout-container {
            display: flex;
            flex: 1;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #181d35;
            border-right: 1px solid #21284a;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            transition: transform 0.3s ease;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            z-index: 1000;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .logo-container svg {
            width: 24px;
            height: 24px;
        }

        .logo-container h2 {
            font-size: 18px;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            padding: 10px;
            border-radius: 8px;
            display: block;
        }

        .nav-links a:hover {
            background-color: #21284a;
        }

        .profile-pic {
            width: 40px;
            height: 40px;
            background-size: cover;
            background-position: center;
            border-radius: 50%;
            margin-top: auto;
        }

        .hamburger {
            display: none;
            font-size: 24px;
            background: none;
            border: none;
            color: #fff;
            cursor: pointer;
            position: fixed;
            top: 10px;
            right: 10px;
            z-index: 1001;
            padding: 10px;
        }

        .content-container {
            flex: 1;
            padding: 20px;
            margin-left: 250px;
            overflow-x: auto;
            transition: margin-left 0.3s ease;
        }

        .section-header {
            padding: 16px 0;
        }

        .section-header p:first-child {
            font-size: 32px;
            font-weight: bold;
        }

        .section-header p:last-child {
            color: #8e99cc;
            font-size: 14px;
        }

        .table-container {
            border: 1px solid #2f396a;
            border-radius: 12px;
            overflow-x: auto;
            background-color: #181d35;
            position: relative;
        }

        .table-container::after {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 20px;
            background: linear-gradient(to right, transparent, #181d35);
            pointer-events: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #101323;
            table-layout: auto;
        }

        thead {
            background-color: #181d35;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            font-size: 14px;
            min-width: 120px;
            white-space: nowrap;
        }

        th {
            font-weight: 500;
        }

        td {
            border-top: 1px solid #2f396a;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .status-button {
            width: 100%;
            padding: 8px;
            background-color: #21284a;
            border-radius: 9999px;
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            text-align: center;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .dropdown-button {
            background-color: #21284a;
            color: #8e99cc;
            padding: 8px 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            width: 100%;
            text-align: left;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #181d35;
            min-width: 120px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 8px;
            right: 0;
        }

        .dropdown-content a {
            color: #fff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 14px;
        }

        .dropdown-content a:hover {
            background-color: #21284a;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                width: 200px;
                background-color: #21284a;
                border-radius: 0 12px 12px 0;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .hamburger {
                display: block;
            }

            .content-container {
                margin-left: 0;
                padding: 10px;
            }

            .section-header p:first-child {
                font-size: 20px;
            }

            .section-header p:last-child {
                font-size: 12px;
            }

            th,
            td {
                padding: 8px;
                font-size: 12px;
                min-width: 100px;
            }

            .status-button {
                padding: 6px;
                font-size: 12px;
            }
        }

        @media (max-width: 600px) {

            th:nth-child(2),
            td:nth-child(2) {
                display: none;
            }

            .table-container {
                font-size: 12px;
            }

            th,
            td {
                min-width: 80px;
            }
        }

        @media (max-width: 400px) {

            th,
            td {
                font-size: 10px;
                min-width: 60px;
            }

            .content-container {
                padding: 5px;
            }

            .dropdown-button {
                padding: 6px 8px;
                font-size: 12px;
            }

            .dropdown-content {
                min-width: 100px;
            }
        }
    </style>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Inter, 'Noto Sans', sans-serif;
            background-color: #101323;
            color: #fff;
            min-height: 100vh;
            display: flex;
            overflow-x: hidden;
        }

        .layout-container {
            display: flex;
            flex: 1;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #181d35;
            border-right: 1px solid #21284a;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            transition: transform 0.3s ease;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            z-index: 1000;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .logo-container svg {
            width: 24px;
            height: 24px;
        }

        .logo-container h2 {
            font-size: 18px;
            font-weight: 700;
        }

        .nav-links {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            padding: 10px;
            border-radius: 8px;
            display: block;
        }

        .nav-links a:hover {
            background-color: #21284a;
        }

        .profile-pic {
            width: 40px;
            height: 40px;
            background-size: cover;
            background-position: center;
            border-radius: 50%;
            margin-top: auto;
        }

        .hamburger {
            display: none;
            font-size: 24px;
            background: none;
            border: none;
            color: #fff;
            cursor: pointer;
            position: fixed;
            top: 10px;
            right: 10px;
            z-index: 1001;
            padding: 10px;
        }

        .content-container {
            flex: 1;
            padding: 20px;
            margin-left: 250px;
            overflow-x: auto;
            transition: margin-left 0.3s ease;
            max-width: calc(100% - 250px);
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            padding: 16px 0;
        }

        .header-section p {
            color: #fff;
            font-size: 32px;
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -0.015em;
            min-width: 288px;
        }

        .add-button {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #223649;
            color: #fff;
            border-radius: 8px;
            height: 32px;
            padding: 0 16px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            border: none;
            min-width: 84px;
            max-width: 480px;
        }

        .section-title {
            color: #fff;
            font-size: 22px;
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -0.015em;
            padding: 20px 0 12px;
        }

        .table-container {
            padding: 12px 0;
            overflow-x: auto;
            position: relative;
        }

        .table-wrapper {
            border: 1px solid #314d68;
            border-radius: 8px;
            overflow: hidden;
            background-color: #101a23;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead tr {
            background-color: #182634;
        }

        th {
            padding: 12px 16px;
            text-align: left;
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.5;
            min-width: 120px;
        }

        td {
            padding: 8px 16px;
            color: #90adcb;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            height: 72px;
            border-top: 1px solid #314d68;
        }

        .action-column {
            font-weight: 700;
            letter-spacing: 0.015em;
            cursor: pointer;
        }

        .action-column:hover {
            color: #fff;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                width: 200px;
                background-color: #21284a;
                border-radius: 0 12px 12px 0;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .hamburger {
                display: block;
            }

            .content-container {
                margin-left: 0;
                padding: 10px;
                max-width: 100%;
            }

            .header-section p {
                font-size: 24px;
            }

            .section-title {
                font-size: 18px;
            }

            th,
            td {
                font-size: 12px;
                padding: 8px 12px;
            }

            .add-button {
                padding: 6px 12px;
                font-size: 12px;
            }
        }

        @media (max-width: 600px) {

            .bank-table-column-240,
            .crypto-table-column-240 {
                display: none;
            }

            .header-section {
                flex-direction: column;
                align-items: flex-start;
            }

            .table-container {
                font-size: 12px;
            }

            th,
            td {
                min-width: 80px;
            }
        }

        @media (max-width: 400px) {

            .bank-table-column-120,
            .crypto-table-column-120 {
                display: none;
            }

            th,
            td {
                font-size: 10px;
                padding: 6px 8px;
                min-width: 60px;
            }

            .content-container {
                padding: 5px;
            }

            .add-button {
                width: 100%;
                font-size: 12px;
            }
        }
    </style>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Inter, 'Noto Sans', sans-serif;
            background-color: #101323;
            color: #fff;
            min-height: 100vh;
            display: flex;
            overflow-x: hidden;
        }

        .layout-container {
            display: flex;
            flex: 1;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #181d35;
            border-right: 1px solid #21284a;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            transition: transform 0.3s ease;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            z-index: 1000;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .logo-container svg {
            width: 24px;
            height: 24px;
        }

        .logo-container h2 {
            font-size: 18px;
            font-weight: 700;
        }

        .nav-links {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            padding: 10px;
            border-radius: 8px;
            display: block;
        }

        .nav-links a:hover {
            background-color: #21284a;
        }

        .profile-pic {
            width: 40px;
            height: 40px;
            background-size: cover;
            background-position: center;
            border-radius: 50%;
            margin-top: auto;
        }

        .hamburger {
            display: none;
            font-size: 24px;
            background: none;
            border: none;
            color: #fff;
            cursor: pointer;
            position: fixed;
            top: 10px;
            right: 10px;
            z-index: 1001;
            padding: 10px;
        }

        .content-container {
            flex: 1;
            padding: 20px;
            margin-left: 250px;
            overflow-x: auto;
            transition: margin-left 0.3s ease;
            max-width: calc(100% - 250px);
        }

        .layout-content-container {
            display: flex;
            flex-direction: column;
            max-width: 512px;
            width: 100%;
            margin: 0 auto;
            padding: 20px 0;
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            padding: 16px;
        }

        .header-section p {
            color: #fff;
            font-size: 32px;
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -0.015em;
            min-width: 288px;
        }

        .radio-group {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            padding: 16px;
        }

        .radio-label {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #2f396a;
            border-radius: 12px;
            padding: 0 16px;
            height: 44px;
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.5;
            position: relative;
            cursor: pointer;
        }

        .radio-label input[type="radio"] {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        .radio-label input[type="radio"]:checked+.radio-label {
            border-width: 3px;
            padding: 0 14px;
            border-color: #607afb;
        }

        .section-title {
            color: #fff;
            font-size: 22px;
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -0.015em;
            padding: 20px 16px 12px;
        }

        .form-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            padding: 12px 16px;
            max-width: 480px;
        }

        .form-label {
            display: flex;
            flex-direction: column;
            min-width: 160px;
            flex: 1;
        }

        .form-label p {
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.5;
            padding-bottom: 8px;
        }

        .form-input {
            width: 100%;
            min-width: 0;
            flex: 1;
            resize: none;
            overflow: hidden;
            border-radius: 12px;
            border: 1px solid #2f396a;
            background-color: #181d35;
            color: #fff;
            height: 56px;
            padding: 15px;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.5;
        }

        .form-input::placeholder {
            color: #8e99cc;
        }

        .form-input:focus {
            outline: none;
            border-color: #2f396a;
        }

        .submit-button {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #607afb;
            color: #fff;
            border-radius: 9999px;
            height: 40px;
            padding: 0 16px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0.015em;
            border: none;
            min-width: 84px;
            max-width: 480px;
            margin: 12px 16px 12px auto;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                width: 200px;
                background-color: #21284a;
                border-radius: 0 12px 12px 0;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .hamburger {
                display: block;
            }

            .content-container {
                margin-left: 0;
                padding: 10px;
                max-width: 100%;
            }

            .header-section p {
                font-size: 24px;
            }

            .section-title {
                font-size: 18px;
            }

            .radio-label {
                font-size: 12px;
                height: 36px;
                padding: 0 12px;
            }

            .form-label p {
                font-size: 14px;
            }

            .form-input {
                font-size: 14px;
                height: 48px;
                padding: 12px;
            }

            .submit-button {
                font-size: 12px;
                height: 36px;
                padding: 0 12px;
            }
        }

        @media (max-width: 600px) {
            .header-section {
                flex-direction: column;
                align-items: flex-start;
            }

            .radio-group {
                flex-direction: column;
            }

            .form-group {
                flex-direction: column;
            }
        }

        @media (max-width: 400px) {
            .header-section p {
                font-size: 20px;
            }

            .section-title {
                font-size: 16px;
            }

            .radio-label {
                font-size: 10px;
                height: 32px;
                padding: 0 8px;
            }

            .form-label p {
                font-size: 12px;
            }

            .form-input {
                font-size: 12px;
                height: 40px;
                padding: 8px;
            }

            .submit-button {
                font-size: 10px;
                width: 100%;
            }
        }
    </style>

    <style>
        .content-container {
            flex: 1;
            padding: 20px;
            margin-left: 250px;
            overflow-x: auto;
            transition: margin-left 0.3s ease;
            max-width: calc(100% - 250px);
        }

        .layout-content-container {
            display: flex;
            flex-direction: column;
            max-width: 960px;
            width: 100%;
            margin: 0 auto;
            padding: 20px 0;
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            padding: 16px;
        }

        .header-section p {
            color: #fff;
            font-size: 32px;
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -0.015em;
            min-width: 288px;
        }

        .form-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            padding: 12px 16px;
            max-width: 480px;
        }

        .form-label {
            display: flex;
            flex-direction: column;
            min-width: 160px;
            flex: 1;
        }

        .form-label p {
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.5;
            padding-bottom: 8px;
        }

        .input-with-copy {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-input {
            width: 100%;
            min-width: 0;
            flex: 1;
            resize: none;
            overflow: hidden;
            border-radius: 12px;
            border: 1px solid #2f396a;
            background-color: #181d35;
            color: #fff;
            height: 56px;
            padding: 15px;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.5;
        }

        .form-input::placeholder {
            color: #8e99cc;
        }

        .form-input:focus {
            outline: none;
            border-color: #2f396a;
        }

        .copy-button {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #21284a;
            color: #fff;
            border-radius: 8px;
            height: 40px;
            width: 40px;
            cursor: pointer;
            border: none;
            font-size: 14px;
            font-weight: 500;
        }

        .copy-button:hover {
            background-color: #2f396a;
        }

        .generate-button {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #607afb;
            color: #fff;
            border-radius: 12px;
            height: 40px;
            padding: 0 16px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0.015em;
            border: none;
            min-width: 84px;
            max-width: 480px;
            margin: 12px 16px;
        }

        .table-container {
            padding: 12px 16px;
            overflow-x: auto;
            position: relative;
            -webkit-overflow-scrolling: touch;
            /* Smooth scrolling on iOS */
        }

        .table-container::after {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 20px;
            background: linear-gradient(to right, transparent, #101323);
            pointer-events: none;
            display: none;
        }

        .table-wrapper {
            border: 1px solid #2f396a;
            border-radius: 12px;
            overflow: hidden;
            background-color: #101323;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
            /* Ensures table is scrollable on mobile */
        }

        thead tr {
            background-color: #181d35;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        th {
            padding: 12px 16px;
            text-align: left;
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.5;
            white-space: nowrap;
        }

        td {
            padding: 8px 16px;
            color: #8e99cc;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            height: 72px;
            border-top: 1px solid #2f396a;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .status-button {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #21284a;
            color: #fff;
            border-radius: 12px;
            height: 32px;
            padding: 0 16px;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.5;
            border: none;
            width: 100%;
            max-width: 120px;
        }

        @media (max-width: 768px) {
            .content-container {
                margin-left: 0;
                padding: 10px;
                max-width: 100%;
            }

            .header-section p {
                font-size: 24px;
            }

            .form-label p {
                font-size: 14px;
            }

            .form-input {
                font-size: 14px;
                height: 48px;
                padding: 12px;
            }

            .copy-button {
                height: 36px;
                width: 36px;
                font-size: 12px;
            }

            .generate-button {
                font-size: 12px;
                height: 36px;
                padding: 0 12px;
            }

            .status-button {
                font-size: 12px;
                height: 28px;
            }

            .table-container {
                font-size: 12px;
            }

            .table-container::after {
                display: block;
            }

            th,
            td {
                padding: 8px 12px;
                min-width: 100px;
            }

            .table-fb017011-6a5e-4765-93b9-003352f27a83-column-360,
            .table-fb017011-6a5e-4765-93b9-003352f27a83-column-600,
            .table-fb017011-6a5e-4765-93b9-003352f27a83-column-720 {
                display: none;
            }
        }

        @media (max-width: 600px) {
            .header-section {
                flex-direction: column;
                align-items: flex-start;
            }

            .form-group {
                flex-direction: column;
            }

            .table-fb017011-6a5e-4765-93b9-003352f27a83-column-240 {
                display: none;
            }
        }

        @media (max-width: 400px) {
            .header-section p {
                font-size: 20px;
            }

            .form-label p {
                font-size: 12px;
            }

            .form-input {
                font-size: 12px;
                height: 40px;
                padding: 8px;
            }

            .copy-button {
                height: 32px;
                width: 32px;
                font-size: 10px;
            }

            .generate-button {
                font-size: 10px;
                width: 100%;
            }

            .status-button {
                font-size: 10px;
            }

            th,
            td {
                font-size: 10px;
                padding: 6px 8px;
                min-width: 80px;
            }
        }
    </style>

</head>

<body>
    {{-- <div class="layout-container"> --}}
    <nav class="sidebar" id="sidebar">
        <div class="logo-container">
            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M42.4379 44C42.4379 44 36.0744 33.9038 41.1692 24C46.8624 12.9336 42.2078 4 42.2078 4L7.01134 4C7.01134 4 11.6577 12.932 5.96912 23.9969C0.876273 33.9029 7.27094 44 7.27094 44L42.4379 44Z"
                    fill="currentColor"></path>
            </svg>
            <h2>Admin Panel</h2>
        </div>
        <div class="nav-links">
            <a href="{{ route('admin') }}">Dashboard</a>
            <a href="{{ route('payment') }}">Payment</a>
            <a href="{{ route('code') }}">Code</a>
           <form method="post" action="{{route ('logout')}}">@csrf <button>Logout</button> </form>
        </div>
        <div class="profile-pic"
            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCXaYgnwtZRFKooNyT-z8PuqCUrbIZayzmU6sCNqKEIexfHOuvYdZPZyWCD7Sg3wPlPaF6Qs-a2GpokUO2mD7S9fSOQhbAjmvw3AW7c9Hwrntc9lHwmSHzVM5Hv56mXs1dlIGGlM3XNpJtrVosSdSN6RlClXw3NTJp0z0G-Svijlgb-U4HxmoXLbnBW0cYEQQHoVzieQXlgq8K41v-zTstIJqzskfZHEcGtEJfjCHY-SH7xzEHPYjjkYglKICmiH9eaTLl0hehfpN0");'>
        </div>
    </nav>
    <button class="hamburger" id="hamburger">☰</button>

    {{-- </div> --}}
    <script>
        const hamburger = document.getElementById('hamburger');
        const sidebar = document.getElementById('sidebar');
        const contentContainer = document.querySelector('.content-container');

        hamburger.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            contentContainer.classList.toggle('sidebar-active');
        });

        document.addEventListener('click', (e) => {
            if (window.innerWidth <= 768 &&
                sidebar.classList.contains('active') &&
                !sidebar.contains(e.target) &&
                !hamburger.contains(e.target)) {
                sidebar.classList.remove('active');
                contentContainer.classList.remove('sidebar-active');
            }
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth > 768) {
                sidebar.classList.remove('active');
                contentContainer.classList.remove('sidebar-active');
            }
        });
    </script>
</body>

</html>
