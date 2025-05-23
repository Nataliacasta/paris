# 💄 Beauty Cosmetics - Proyecto Laravel

Este proyecto es una aplicación web desarrollada con **Laravel 8** que permite la gestión de servicios cosméticos, personal, citas y clientes. Incluye autenticación de usuarios, roles diferenciados y panel administrativo.

---

## 🚀 Tecnologías utilizadas

- PHP 8.2
- Laravel 8
- MySQL
- Tailwind CSS (integrado parcialmente)
- Laravel Seeders
- Eloquent ORM

---

## ⚙️ Requisitos

Antes de comenzar, asegúrate de tener instalado:

- PHP 8.0 o superior
- Composer
- MySQL o MariaDB
- Node.js (si deseas compilar assets)
- XAMPP, Laragon o similar

---

## 🔧 Instalación

1. Clona este repositorio:

```bash
git clone https://github.com/--NOMBRE/Beauty_Cosmetics_Laravel.git
cd Beauty_Cosmetics_Laravel
```

2. Instala las dependencias de PHP:

```bash
composer install
```

3. Copia el archivo de entorno:

```bash
cp .env.example .env
```

4. Configura las variables de base de datos en el archivo `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=beauty_cosmetics
DB_USERNAME=root
DB_PASSWORD=
```

5. Genera la clave de aplicación:

```bash
php artisan key:generate
```

6. Crea la base de datos en tu gestor de bases de datos (phpMyAdmin o similar):

```sql
CREATE DATABASE beauty_cosmetics;
```

7. Ejecuta las migraciones:

```bash
php artisan migrate
```

8. Ejecuta el seeder para crear el usuario administrador:

```bash
php artisan db:seed --class=AdminSeeder
```

---

## 👤 Usuario administrador por defecto

| Campo       | Valor              |
|-------------|--------------------|
| **Email**   | admin@admin.com    |
| **Password**| admin@1234         |

---

## 🖥️ Levantar el servidor de desarrollo

```bash
php artisan serve
```

Accede en tu navegador a:  
👉 [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 📁 Estructura del proyecto (resumen)

- `app/Models` → Modelos Eloquent
- `database/migrations` → Estructura de base de datos
- `database/seeders` → Poblamiento inicial (AdminSeeder)
- `resources/views` → Vistas Blade (si existen)
- `routes/web.php` → Rutas del proyecto

---


## 📄 Licencia

Este proyecto está bajo la licencia [MIT](https://opensource.org/licenses/MIT).
