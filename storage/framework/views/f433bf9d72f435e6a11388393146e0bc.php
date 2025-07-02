<!DOCTYPE html>
<html>
<head>
   <title>CRUD Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #e2ebfa; /* Warna latar belakang lembut */
    color: #333;
    margin: 0;
    padding: 0;
    line-height: 1.6;
    box-sizing: border-box; 
}

.container {
    width: 90%;
    max-width: 1200px; /* Lebar maksimum konten */
    margin: 30px auto; /* Pusatkan di halaman dengan margin atas/bawah */
    background-color: #e2ebfa;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); 
    box-sizing: border-box;
    position: relative; 
}

h1 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 25px;
    font-size: 2.2em;
    border-bottom: 2px solid #e0e0e0; /* Garis bawah */
    padding-bottom: 15px;
}

h2 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 30px;
    font-size: 2em;
    border-bottom: 2px solid #e0e0e0;
    padding-bottom: 15px;
}

.action-buttons {
    text-align: right; /* Posisikan tombol ke kanan */
    margin-bottom: 25px;
}

.action-buttons a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff; /* Warna biru */
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    font-weight: 600; /* Sedikit lebih tebal */
}

.action-buttons a:hover {
    background-color: #0056b3; /* Warna biru lebih gelap saat hover */
}

/* --- tabel --- */
table {
    width: 100%;
    border-collapse: collapse; /* Hilangkan spasi antar sel */
    margin-top: 20px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08); /* Bayangan tabel */
    border-radius: 8px;
    overflow: hidden; /* Penting agar border-radius bekerja pada sel pertama/terakhir */
}

table th,
table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd; /* Garis bawah antar baris */
}

table thead th {
    background-color: #007bff; /* Hijau untuk header tabel */
    color: white;
    font-weight: bold;
    text-transform: uppercase; /* Huruf kapital di header */
}

table tbody tr:nth-child(even) {
    background-color: #f8f8f8; /* Warna latar belakang sel genap */
}

table tbody tr:hover {
    background-color: #f1f1f1; /* Warna latar belakang saat hover */
}


.table-actions a {
    display: inline-block;
    padding: 6px 10px;
    margin-right: 5px; /* Jarak antar tombol aksi */
    border-radius: 4px;
    text-decoration: none;
    font-size: 0.9em;
    font-weight: 500;
}

.table-actions .edit-btn {
    background-color: #ffc107; /* Kuning untuk edit */
    color: #333;
}

.table-actions .edit-btn:hover {
    background-color: #e0a800;
}

.table-actions .delete-btn {
    background-color: #dc3545; /* Merah untuk hapus */
    color: white;
}

.table-actions .delete-btn:hover {
    background-color: #c82333;
}

.form-container {
    background-color: #c1eaff;
    padding: 30px 40px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px; /* Lebar maksimum form */
    margin: 30px auto; /* Pusatkan form di halaman */
    box-sizing: border-box;
}

.form-group {
    margin-bottom: 20px; /* Jarak antar grup input */
}

.form-group label {
    display: block; /* Agar label berada di atas input */
    margin-bottom: 8px;
    font-weight: bold;
    color: #555;
    font-size: 0.95em;
}

.form-container p {
    margin-bottom: 20px;
}

.form-container p label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #555;
    font-size: 0.95em;
}

.form-container p input[type="text"],
.form-container p input[type="number"],
.form-container p input[type="email"],
.form-container p textarea,
.form-container p select {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ced4da;
    border-radius: 6px;
    box-sizing: border-box;
    font-size: 1em;
    color: #495057;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-container p input:focus,
.form-container p textarea:focus,
.form-container p select:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    outline: none;
}

/* --- Textarea --- */
.form-group textarea {
    resize: vertical; /* Izinkan user mengubah ukuran tinggi textarea */
    min-height: 90px;
}

/* --- Form Buttons untuk Simpan dan Batal --- */
.btn-submit,
.btn-cancel {
    width: 100%;
    padding: 15px;
    border: none;
    border-radius: 6px;
    font-size: 1.1em;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-submit {
    background-color: #2070f2; /* Biru untuk simpan */
    color: white;
}

.btn-submit:hover {
    background-color: #1363e3; /* Warna berubah jadi biru lebih gelap saat hover */
    transform: translateY(-2px); /* Efek sedikit naik, saat kursor mengarah ke button */
}

.btn-cancel {
    background-color: #6c757d; /* Abu-abu untuk batal */
    color: white;
    text-align: center; 
    text-decoration: none; 
}

.btn-cancel:hover {
    background-color: #5a6268; /* saat di klik, akan berubah warna */
    transform: translateY(-2px);
}

.button-group {
    display: flex;
    gap: 15px; 
    margin-top: 25px; 
}

.button-group .btn-submit,
.button-group .btn-cancel {
    flex: 1; 
    margin-top: 0; 
}

/* --- Responsive  --- */
@media (max-width: 768px) {
    .container {
        width: 95%;
        padding: 20px;
        margin: 20px auto;
    }

    .form-container {
        padding: 25px 30px;
    }

    h1 {
        font-size: 1.8em;
    }

    h2 {
        font-size: 1.5em;
    }

    table, thead, tbody, th, td, tr {
        display: block;
    }

    thead tr {
        position: absolute;
        top: -9999px;
        left: -9999px;
    }

    table tr {
        border: 1px solid #ddd;
        margin-bottom: 10px;
        border-radius: 8px;
    }

    table td {
        border: none;
        border-bottom: 1px solid #eee; 
        position: relative;
        padding-left: 50%; 
        text-align: right; 
    }

    table td:last-child {
        border-bottom: none; 
    }

    table td::before {
        content: attr(data-label); 
        position: absolute;
        left: 15px;
        width: calc(50% - 30px); 
        padding-right: 10px;
        white-space: nowrap; 
        text-align: left; 
        font-weight: bold;
        color: #555;
    }

    .table-actions {
        text-align: right; 
        padding-top: 10px;
    }


    .button-group {
        flex-direction: column; 
        gap: 10px;
    }
}
   </style>
</head>
<body>
   <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\P13\crud-mahasiswa\resources\views/layout/app.blade.php ENDPATH**/ ?>