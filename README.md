# Shortia

Shorten links and generate QR codes — fast and free.

## Features

- **URL Shortener** — shorten any link with a custom short name and share it anywhere.
- **QR Code Generator** — turn any text or link into a scannable QR code.
- **Instant Redirects** — short links redirect via `/?s=<token>`.
- **Dark Mode** — toggle between light and dark themes (persisted in `localStorage`).
- **Copy to Clipboard** — one-click copy of your short link.
- **Client-Side Validation** — instant feedback on invalid names or URLs.
- **SweetAlert2 Notifications** — polished success and error dialogs.

## Tech Stack

- **Backend:** PHP (PDO)
- **Database:** MySQL
- **Styling:** Tailwind CSS v4
- **Frontend:** Vanilla JavaScript
- **Libraries:** qrcodejs, SweetAlert2

## Requirements

- PHP 8+
- MySQL
- Node.js and npm (for building Tailwind CSS)

## Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/ahmed1cb/shortia.git
   cd shortia
   ```

2. **Set up the database**

   Import the schema into MySQL:

   ```bash
   mysql -u root -p < database.sql
   ```

   This creates the `shortia` database and the `shorten_links` table.

3. **Configure database credentials**

   Edit `src/configs/database.php` and set your MySQL host, user, password, and database name:

   ```php
   $baseData = [
       "user" => "root",
       "pass" => "your_password",
       "host" => "localhost",
       "dbname" => "shortia",
   ];
   ```

4. **Install dependencies and build the CSS**

   ```bash
   npm install
   npx tailwindcss -i src/styles/input.css -o src/styles/output.css
   ```

5. **Run the server**

   ```bash
   php -S localhost:8000
   ```

   Open <http://localhost:8000> in your browser.

## Usage

- **URL Shortener** — navigate to `/pages/url`, enter a short name and a URL (starting with `http://` or `https://`), then click **Make it Shorter**. Your short link will be shown and can be copied to the clipboard.
- **QR Generator** — navigate to `/pages/qrcode`, enter any text, and click **Generate** to render a live QR code.
- **Redirects** — visiting a short link such as `/?s=<token>` redirects to the original URL.

## Project Structure

```
shortia/
├── index.php                  # Front controller (routing + redirects)
├── database.sql               # Database schema
├── package.json               # Tailwind CSS dependencies
└── src/
    ├── api/url.php            # POST endpoint for creating short links
    ├── components/            # Header and footer partials
    ├── configs/database.php   # Database credentials
    ├── core/database.php      # PDO connection
    ├── icons/                 # Dark mode toggle icons
    ├── pages/                 # URL shortener and QR generator pages
    ├── scripts/               # Vanilla JS, qrcodejs, and dark mode logic
    └── styles/                # Tailwind input and compiled output CSS
```

## License

MIT
