<?php
use function Livewire\Volt\{state};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Animal Medications</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="admin-layout">
        <aside class="admin-sidebar">
            <div class="admin-sidebar-nav">
                <h2 class="admin-sidebar-title">🏠 Paw Forest</h2>
                <ul class="admin-menu">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a href="/admin/animals">Animals</a></li>
                    <li><a href="/admin/applications">Applications</a></li>
                    <li><a href="/admin/donations">Donations</a></li>
                    <li class="active"><a href="/admin/medicine">Medications</a></li>
                    <li><a href="/admin/users">Users</a></li>
                </ul>
            </div>
            
            <div class="admin-lang-container">
                <select class="lang-select admin-lang-select">
                    <option value="en" selected>🌐 EN</option>
                    <option value="lv">🌐 LV</option>
                </select>
            </div>

            <div>
                <a href="/login" class="btn btn-red logout-btn">Log out</a>
            </div>
        </aside>

        <main class="admin-main">
            <h1>Animal Medications Log</h1>
            <br>

            <div class="block-card">
                <table>
                    <thead>
                        <tr>
                            <th>Med ID</th>
                            <th>Animal ID</th>
                            <th>Medicine Name</th>
                            <th>Description</th>
                            <th>Method of Use</th>
                            <th>Frequency</th>
                            <th>Date From</th>
                            <th>Date Until</th>
                            <th>Assigned By (Emp ID)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="inline-add-row">
                            <td><span class="auto-id">Auto</span></td>
                            <td><input type="text" placeholder="#000" required></td>
                            <td><input type="text" placeholder="Name" required></td>
                            <td><input type="text" placeholder="Description" required></td>
                            <td><input type="text" placeholder="e.g. Orally" required></td>
                            <td><input type="text" placeholder="e.g. 1x day" required></td>
                            <td><input type="date" required></td>
                            <td><input type="date" required></td>
                            <td><input type="text" placeholder="#E00" required></td>
                            <td>
                                <button type="submit" class="btn btn-green table-inline-btn">Save</button>
                            </td>
                        </tr>
                        <tr>
                            <td>#M55</td>
                            <td>#001</td>
                            <td>Apoquel</td>
                            <td>Allergy relief</td>
                            <td>Orally</td>
                            <td>Once a day</td>
                            <td>2026-06-01</td>
                            <td>2026-06-30</td>
                            <td>#E12</td>
                            <td class="table-actions">
                                <a href="#" class="btn btn-blue">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>