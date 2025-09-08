<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Compiler</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
</head>
<body>
    <h1>PHP Online Compiler (Localhost)</h1>
    <form method="post">
        <textarea id="output-text" name="code" rows="15" cols="80" placeholder="Tulis kode PHP di sini..."><?php echo isset($_POST['code']) ? htmlspecialchars($_POST['code']) : ''; ?></textarea>
        <br><br>
        <button class="copy-btn" type="button" data-clipboard-target="#output-text">
            <i class="fas fa-copy"></i> Salin
        </button>
        <button type="submit">Jalankan Kode</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['code'])) {
        echo "<h2>Output:</h2>";
        echo "<pre>";
        
        // Set posted code to a variable
        $code = $_POST['code'];

        // Save the code to a temporary file
        $filename = "temp_" . uniqid() . ".php";
        file_put_contents($filename, "<?php\n" . $code);

        // Run the PHP code and capture the output
        $output = shell_exec("php " . escapeshellarg($filename));

        // Display the output safely
        echo htmlspecialchars($output);

        // Delete the temporary file
        unlink($filename);

        echo "</pre>";
    }
    ?>

    <!-- npm install clipboard --save -->
    <script src="node_modules/clipboard/dist/clipboard.min.js"></script> 
    <script>
        // Initialize ClipboardJS
        var clipboard = new ClipboardJS('.copy-btn');

        // event if successfully copied
        clipboard.on('success', function(e) {
            alert('Teks berhasil disalin!');
        });

        // event if error occurs
        clipboard.on('error', function(e) {
            alert('Gagal menyalin teks!');
        });

        document.querySelector('.copy-btn').addEventListener('click', function(e) {
            e.preventDefault();  // Prevent form submission
        });
    </script>
</body>
</html>
