<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Posyandu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-logo">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <span class="logo-text">Sistem Posyandu</span>
        </div>
        <button class="logout-btn">● Keluar</button>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Dashboard Title -->
        <div class="dashboard-header">
            <h1>Dashboard Posyandu</h1>
            <p>Halaman pertama untuk melihat Progress</p>
        </div>

        <!-- Stats Cards -->
        <div class="stats-grid">
            <!-- Card 1 -->
            <div class="stat-card">
                <div class="stat-info">
                    <p class="stat-label">Total Ibu Hamil</p>
                    <p class="stat-value">45</p>
                </div>
                <div class="stat-icon green">
                    <div class="icon-inner"></div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="stat-card">
                <div class="stat-info">
                    <p class="stat-label">Ibu Hamil</p>
                    <p class="stat-value">12</p>
                </div>
                <div class="stat-icon blue">
                    <div class="icon-inner"></div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="stat-card">
                <div class="stat-info">
                    <p class="stat-label">Anggota Barun Ini</p>
                    <p class="stat-value">8</p>
                </div>
                <div class="stat-icon teal">
                    <div class="icon-inner"></div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="stat-card">
                <div class="stat-info">
                    <p class="stat-label">Ibu Hamil</p>
                    <p class="stat-value">156</p>
                </div>
                <div class="stat-icon cyan">
                    <div class="icon-inner"></div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="activity-card">
            <h2>Aktivitas Terbaru</h2>
            <div class="activity-list">
                <!-- Activity Item 1 -->
                <div class="activity-item">
                    <input type="checkbox" checked>
                    <div class="activity-info">
                        <p class="activity-title">Pemeriksaan Bayi</p>
                        <p class="activity-time">Ibu Ani - 12 menit yang lalu</p>
                    </div>
                </div>

                <!-- Activity Item 2 -->
                <div class="activity-item">
                    <input type="checkbox">
                    <div class="activity-info">
                        <p class="activity-title">Pemeriksaan Ibu Hamil</p>
                        <p class="activity-time">Ibu Siti - 45 menit yang lalu</p>
                    </div>
                </div>

                <!-- Activity Item 3 -->
                <div class="activity-item">
                    <input type="checkbox">
                    <div class="activity-info">
                        <p class="activity-title">Imunisasi Lengkap</p>
                        <p class="activity-time">Ibu Dewi - 2 jam yang lalu</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>