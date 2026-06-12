<?php
use function Livewire\Volt\{state};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Donations</title>
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
                    <li class="active"><a href="/admin/donations"><b>Donations</b></a></li>
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
            <h1>Donation Ledger</h1>
            <br>

            <div class="block-card">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Method of Payment</th>
                            <th>Message</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="inline-add-row">
                            <td><span class="auto-id">Auto</span></td>
                            <td><input type="text" placeholder="#U00 (or Guest)"></td>
                            <td><input type="date" required></td>
                            <td><input type="text" placeholder="e.g. 50.00" required></td>
                            <td>
                                <select>
                                    <option value="Credit Card">Credit Card</option>
                                    <option value="PayPal">PayPal</option>
                                    <option value="Bank Transfer">Bank Transfer</option>
                                </select>
                            </td>
                            <td><input type="text" placeholder="Optional message..."></td>
                            <td>
                                <button type="submit" class="btn btn-green table-inline-btn">Save</button>
                            </td>
                        </tr>
                        <tr>
                            <td>#D991</td>
                            <td>#U44</td>
                            <td>2026-06-11</td>
                            <td><b class="stat-green-num">$50.00</b></td>
                            <td>Credit Card</td>
                            <td>Keep up the great work!</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>