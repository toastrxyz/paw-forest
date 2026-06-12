<?php
use function Livewire\Volt\{state};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Animals</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="admin-layout">
        <aside class="admin-sidebar">
            <div class="admin-sidebar-nav">
                <h2 class="admin-sidebar-title">🏠 Paw Forest</h2>
                <ul class="admin-menu">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li class="active"><a href="/admin/animals">Animals</a></li>
                    <li><a href="/admin/applications">Applications</a></li>
                    <li><a href="/admin/donations">Donations</a></li>
                    <li><a href="/admin/medicine">Medications</a></li>
                    <li><a href="/admin/users">Users</a></li>
                </ul>
            </div>
            <div class="admin-lang-container">
                <select class="lang-select admin-lang-select">
                    <option value="en" selected>🌐 EN</option>
                    <option value="lv">🌐 LV</option>
                </select>
            </div>
            <div><a href="/login" class="btn btn-red logout-btn">Log out</a></div>
        </aside>

        <main class="admin-main">
            <h1>Manage Animals Database</h1>
            <br>

            <div class="block-card">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Species</th>
                            <th>Breed</th>
                            <th>Gender</th>
                            <th>Health Status</th>
                            <th>Location ID</th>
                            <th>Date Added</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="inline-add-row">
                            <td><span class="auto-id">Auto</span></td>
                            <td><input type="text" placeholder="e.g. Buddy" required></td>
                            <td><input type="text" placeholder="e.g. Dog" required></td>
                            <td><input type="text" placeholder="e.g. Golden" required></td>
                            <td>
                                <select>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </td>
                            <td><input type="text" placeholder="e.g. Healthy" required></td>
                            <td><input type="text" placeholder="e.g. #L01" required></td>
                            <td><input type="date" required></td>
                            <td>
                                <button type="submit" class="btn btn-green table-inline-btn">Save</button>
                            </td>
                        </tr>
                        <tr>
                            <td>#001</td>
                            <td>Buddy</td>
                            <td>Dog</td>
                            <td>Golden Retriever</td>
                            <td>Female</td>
                            <td>Healthy</td>
                            <td>#L01</td>
                            <td>2025-04-10</td>
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