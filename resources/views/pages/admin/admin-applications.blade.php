<?php
use function Livewire\Volt\{state};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Applications</title>
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
                    <li class="active"><a href="/admin/applications">Applications</a></li>
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
            <div>
                <a href="/login" class="btn btn-red logout-btn">Log out</a>
            </div>
        </aside>

        <main class="admin-main">
            <h1>Adoption Requests</h1>
            <div class="block-card">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>User ID</th>
                            <th>Animal ID</th>
                            <th>Employee ID</th>
                            <th>Comment</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="inline-add-row">
                            <td><span class="auto-id">Auto</span></td>
                            <td><input type="date" required></td>
                            <td><input type="text" placeholder="#U00" required></td>
                            <td><input type="text" placeholder="#000" required></td>
                            <td><input type="text" placeholder="#E00" required></td>
                            <td><input type="text" placeholder="Notes..." required></td>
                            <td>
                                <select>
                                    <option value="Pending">Pending</option>
                                    <option value="Approved">Approved</option>
                                    <option value="Rejected">Rejected</option>
                                </select>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-green table-inline-btn">Save</button>
                            </td>
                        </tr>
                        <tr>
                            <td>#A01</td>
                            <td>2026-05-12</td>
                            <td>#U44</td>
                            <td>#001</td>
                            <td>#E12</td>
                            <td>Has a large backyard.</td>
                            <td><span class="stat-purple-num">Pending</span></td>
                            <td class="table-actions">
                                <button class="btn btn-green">Approve</button>
                                <button class="btn btn-red">Reject</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <br><br>
            
            <h1>Shelter Visits</h1>
            <div class="block-card">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>User ID</th>
                            <th>Animal ID</th>
                            <th>Location ID</th>
                            <th>Employee ID</th>
                            <th>Comment</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="inline-add-row">
                            <td><span class="auto-id">Auto</span></td>
                            <td><input type="date" required></td>
                            <td><input type="text" placeholder="#U00" required></td>
                            <td><input type="text" placeholder="#000" required></td>
                            <td><input type="text" placeholder="#L00" required></td>
                            <td><input type="text" placeholder="#E00" required></td>
                            <td><input type="text" placeholder="Purpose..." required></td>
                            <td>
                                <button type="submit" class="btn btn-green table-inline-btn">Save</button>
                            </td>
                        </tr>
                        <tr>
                            <td>#V01</td>
                            <td>2026-06-15</td>
                            <td>#U44</td>
                            <td>#002</td>
                            <td>#L01</td>
                            <td>#E12</td>
                            <td>Wants to see cat character.</td>
                            <td class="table-actions">
                                <button class="btn btn-green">Approve</button>
                                <button class="btn btn-red">Reject</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>