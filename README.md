Ini adalah project **TaskTracker** untuk membuat to do list dengan mudah.

## Installasi

- Pertama, clone repository ini ke dalam folder /laragon/www untuk pengguna laragon atau /xampp/htdocs untuk pengguna xampp:

```bash
git clone https://github.com/ArselAdy283/TaskTracker.git
```

- lalu, aktifkan Apache dan MySQL-nya
- buat database bernama `task_tracker`
- import file  `task_tracker.sql` ke dalam database
- setelah itu, aktifkan projectnya
```bash
npm install
npm run dev
```
- Buka http://localhost/TaskTracker dengan browser Anda untuk melihat hasilnya.


## Cara menggunakan aplikasinya

- tekan tombol + untuk menambahkan task
- lihat sidebar untuk melihat list dari task, ada kategori listnya yaitu 
1. today untuk menampilkan list yang dibuat hari ini
2. all task untuk menampilkan semua list yang dibuat
3. done untuk menampilkan list yang sudah selesai
- tekan checkbox di list nya untuk menandai tugas selesai

## Terima kasih
Created by Ega Adyatma
