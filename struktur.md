# Struktur Folder Views - Project Magang CI4

## Overview
Project ini menggunakan 3 role utama:

- Admin / HR
- Mentor
- Intern

Struktur folder dibuat agar:
- mudah maintenance
- scalable
- konsisten
- mudah dipahami developer lain

---

# Struktur Folder

```bash
app/
└── Views/
    │
    ├── layouts/
    │   ├── Sidebar.php (File pengature role agar sidebar sesuia dengan rolenya sendiri)
    │   ├── header.php  (File pengature role agar sidebar sesuia dengan rolenya sendiri)
    │       └──Sidebar/
    │           ├──Mentor.php
    |           ├──Intern.php
    |           └──Admin.php
    │       └──Header/
    |           ├──Mentor.php
    |           ├──Intern.php
    |           └──Admin.php
    │   
    │
    ├── admin/
    │   ├── dashboard/
    │   ├── Data pendaftar/
    │   ├── jadwal/
    │   ├── magang/
    │   └── office/
    │   
    │
    ├── mentor/
    │   ├── dashboard/
    │   ├── Penilaian/
    │   ├── Project List/
    │   └── Sertifikat/
    │
    ├── intern/
    │   ├── dashboard/
    │   ├── Form Daftar/
    │   ├── Penugasan/
    │   ├── sertifikat/
    │   
    │
    ├── setting/
    ├── profile/
    ├── auth/
    └── errors/

# cara akses dashboard
http://localhost:8080/dashboard-##### (sesuaikan role mu ada 3 role admin,mentor,intern)