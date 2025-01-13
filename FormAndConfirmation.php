<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', Arial, sans-serif;
        }

        body {
            background-color: #eef2f7;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            color: #333;
        }

        .form-container, .success-container {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #1a202c;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: bold;
        }

        .description {
            color: #4a5568;
            font-size: 16px;
            margin-bottom: 25px;
        }

        .box {
            margin-bottom: 20px;
            text-align: left;
        }

        .box label {
            display: block;
            margin-bottom: 8px;
            color: #2d3748;
            font-weight: 600;
        }

        .box input, .box select {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e0;
            border-radius: 8px;
            font-size: 15px;
            margin-top: 5px;
            background-color: #f7fafc;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .box input:focus, .box select:focus {
            border-color: #3182ce;
            box-shadow: 0 0 8px rgba(49, 130, 206, 0.5);
            outline: none;
        }

        button {
            background-color: #3182ce;
            color: #ffffff;
            border: none;
            padding: 14px;
            width: 100%;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #2b6cb0;
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(0);
        }

        .user-data {
            text-align: left;
            margin-top: 20px;
        }

        .user-data p {
            font-size: 15px;
            margin-bottom: 8px;
            color: #4a5568;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 24px;
            }

            .description {
                font-size: 14px;
            }

            button {
                font-size: 15px;
                padding: 12px;
            }
        }
    </style>
</head>
<body>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) { ?>
        <div class="success-container">
            <h1>Terima Kasih, <?php echo htmlspecialchars($_POST['nama']); ?>!</h1>
            <p class="description">Selamat, Anda telah berhasil mendaftar. Kami sangat senang Anda bergabung dengan kami!</p>
            <p>Anda sekarang menjadi bagian dari komunitas kami. Nikmati berbagai informasi, acara, dan kesempatan menarik yang kami tawarkan.</p>
            
            <div class="user-data">
                <h2>Data yang Anda Isi:</h2>
                <p><strong>Nama:</strong> <?php echo htmlspecialchars($_POST['nama']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
                <p><strong>Hobby:</strong> <?php echo htmlspecialchars($_POST['hobby']); ?></p>
                <p><strong>No Handphone:</strong> <?php echo htmlspecialchars($_POST['no_handphone']); ?></p>
                <p><strong>Gender:</strong> <?php echo htmlspecialchars($_POST['gender']); ?></p>
            </div>

            <button onclick="window.location.href='?'">Kembali ke Form</button>
        </div>
    <?php } else { ?>
        <div class="form-container">
            <h1>Form Pendaftaran</h1>
            <p class="description">Silakan isi data pendaftaran di bawah ini:</p>

            <form action="" method="POST">
                <div class="box">
                    <label for="nama">Nama *</label>
                    <input type="text" id="nama" name="nama" required>
                </div>

                <div class="box">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="box">
                    <label for="hobby">Hobby *</label>
                    <input type="text" id="hobby" name="hobby" required>
                </div>

                <div class="box">
                    <label for="no-handphone">No Handphone *</label>
                    <input type="tel" id="no-handphone" name="no_handphone" required>
                </div>

                <div class="box">
                    <label for="gender">Gender *</label>
                    <select id="gender" name="gender" required>
                        <option value="" disabled selected>Pilih Gender</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                        <option value="Non-binary">Non-binary</option>
                        <option value="Prefer not to say">Prefer not to say</option>
                    </select>
                </div>

                <div class="box">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    <?php } ?>
</body>
</html>
