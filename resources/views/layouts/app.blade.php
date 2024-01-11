<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Employee Management') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            /* Add some styling to the table */
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
        
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
        
            th {
                background-color: #f2f2f2;
            }
        
            tr:hover {
                background-color: #f5f5f5;
            }
        
            /* Style the heading */
            h2 {
                color: #333;
                font-size: 1.5em;
                margin-bottom: 10px;
            }
            .action-buttons {
                display: flex;
                justify-content: flex-end;
            }

            .action-buttons a, .delete-button {
                margin-left: 5px;
                padding: 5px 10px;
                text-decoration: none;
                color: #fff;
                border-radius: 3px;
            }

            .view-button {
                background-color: #5cb85c; /* Green */
                color: white;
            }

            .edit-button {
                background-color: #5bc0de; /* Blue */
            }

            .delete-button {
                background-color: #d9534f; /* Red */
            }

            .employee-info-container {
                border: 1px solid #ddd;
                border-radius: 8px;
                margin: 20px;
                padding: 20px;
                background-color: #fff;
            }

            .employee-info-header h2 {
                color: #333;
                font-size: 24px;
                margin-bottom: 15px;
            }

            .employee-info-content {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 15px;
            }

            .info-item {
                margin-bottom: 15px;
            }

            label {
                font-weight: bold;
                display: block;
                margin-bottom: 5px;
            }

            span {
                display: block;
                color: #555;
            }

        </style>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function () {
                // Uncheck "Yes" when "No" is clicked
                $('#is_ot_enable_no').on('click', function () {
                    $('#is_ot_enable_yes').prop('checked', false);
                });

                // Uncheck "No" when "Yes" is clicked
                $('#is_ot_enable_yes').on('click', function () {
                    $('#is_ot_enable_no').prop('checked', false);
                });
            });
        </script>

    </body>
</html>
