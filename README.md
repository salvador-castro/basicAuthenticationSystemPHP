# Basic Authentication System in PHP

![License](https://img.shields.io/badge/license-MIT-blue.svg)  
A simple user authentication system using PHP and MySQL without frameworks. Supports user registration, login, and session management.

## Features 🚀
- User registration with secure password hashing (`password_hash`)
- User authentication with session management
- Secure login with `password_verify`
- PDO-based database connection for security
- Simple and clean structure

## Tech Stack 🛠
- PHP (Native)
- MySQL (Database)
- HTML & CSS (Basic UI)
- PDO (Database connection)

## Installation 🔧
1. **Clone the repository**
   ```sh
   git clone https://github.com/salvador-castro/basicAuthenticationSystemPHP.git
   cd basicAuthenticationSystemPHP
   ```

2. **Setup Database**
   - Import `database.sql` into MySQL
   - Update database credentials in `db/conexion.php`

3. **Run the application**
   - Start your local server (XAMPP, LAMP, or built-in PHP server)
   ```sh
   php -S localhost:8000
   ```
   - Open `http://localhost:8000/views/login.php` in your browser

## Database Schema 🛢
```sql
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Project Structure 📂
```
/basicAuthenticationSystemPHP
│── /db
│   ├── conexion.php
│── /auth
│   ├── registro.php
│   ├── login.php
│   ├── logout.php
│── /views
│   ├── home.php
│   ├── login.php
│   ├── registro.php
│── index.php
│── .htaccess
```

## Usage 👤
- **Register:** Create a new account in `/views/registro.php`
- **Login:** Authenticate using `/views/login.php`
- **Dashboard:** Access `/views/home.php` after login
- **Logout:** Click "Cerrar sesión" to log out

## Author ✍
**Salvador Castro**  
🔗 [LinkedIn](https://ar.linkedin.com/in/salvador-castro95)  
📂 [GitHub Repo](https://github.com/salvador-castro/basicAuthenticationSystemPHP.git)  

## License 📜
This project is licensed under the MIT License.

---
Made with ❤️ by Salvador Castro
