# PHP Online Compiler (Localhost)

This is a simple web-based PHP compiler that allows users to write, run, and test PHP code locally through a web browser. The application takes PHP code from a text area, runs it, and displays the output directly on the same page.

## Features

* **Run PHP Code Locally**: Write and execute PHP code on the server via a local web interface.
* **Code Copying**: Easily copy the code using the integrated copy button powered by ClipboardJS.
* **Temporary Code Execution**: The PHP code is written to a temporary file, executed via the PHP CLI, and then removed to ensure no lingering files on the server.

## Requirements

* PHP (version 7.x or higher)
* Web server (e.g., Apache, Nginx) running PHP
* `ClipboardJS` library for copy functionality (can be installed via npm)

## Installation

1. Clone this repository to your local machine:

   ```bash
   git clone https://github.com/filipuscz/php-compiler.git
   cd php-online-compiler
   ```

2. Ensure PHP is installed on your server and running. You can verify this by running:

   ```bash
   php -v
   ```

3. Set up a local web server (e.g., Apache or Nginx) and point it to this directory.

4. Open the `index.html` file in your browser or visit the page via your web server URL.

## How to Use

1. Write or paste your PHP code into the provided text area.
2. Click the **Run Code** button to execute the PHP code.
3. The output will be displayed below the form.
4. If you need to copy your code, simply click the **Copy** button next to the text area.

## Acknowledgments

Special thanks to ClipboardJS
for providing the amazing clipboard functionality. It's an easy-to-use library for copying content to the clipboard and enhancing the user experience!

## Security Warning

**Important**: This is a simple local PHP execution tool and should **not** be used on a live production server without further security measures. Executing arbitrary PHP code can be dangerous, and extra precautions (such as sandboxing) are recommended if deploying publicly.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

Feel free to replace the placeholder in the GitHub URL with your actual repo link! Let me know if you want me to add or modify any sections.
