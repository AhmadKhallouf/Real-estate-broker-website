<div align="center">

# Real Estate Broker Platform

**A Laravel marketplace where owners list properties for sale, rent, or mortgage — with admin moderation, duration-based listing fees, and rich property profiles.**

[![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![Laravel](https://img.shields.io/badge/Laravel-9.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/)
[![Livewire](https://img.shields.io/badge/Livewire-2.x-FB70A9?style=for-the-badge&logo=livewire&logoColor=white)](https://laravel-livewire.com/)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind-3.x-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com/)

</div>

---

## Overview

This application is a **broker-style real estate listing site**. Users can publish **residential apartments, villas, houses, commercial stores, and agricultural land** offered through **sale, rent, or mortgage**. Listings are shown at **nominal prices** that reflect how the business model ties **visibility duration** to **admin-configurable per-day fees** and payment reference fields (merchant account), so advertisers understand cost before extending or renewing a listing.

The product flow is built around **trust and quality**: new and renewed listings enter a **pending** state, **admins** approve or refuse them, and **accepted** listings become **active** with an **`expires_at`** timestamp derived from the chosen **ad duration** (`time_of_ad` in days). Owners can **edit** listings, **re-submit** expired ones, and receive **in-app notifications** about moderation outcomes.

---

## Why this project matters (for recruiters)

| Area | What the codebase shows |
|------|-------------------------|
| **Domain modeling** | Normalized schema: `posts`, conditional `post_infos` for residential types, `images`, configurable `numbers_and_costs`, `office_links`. |
| **Laravel depth** | MVC controllers, Eloquent relationships, policies via middleware (`admin`, `user`, `unblocked`), database notifications, scheduled-job hooks (expiration logic scaffolded in `Console\Kernel`). |
| **UX & admin** | **Livewire** dashboard counters (active / pending / expired posts, users, blocked accounts), Blade layouts, **Tailwind** + **Vite** frontend pipeline. |
| **Media handling** | **Intervention Image** resizing to consistent dimensions before saving under `public/images/PostsPhoto`. |
| **Auth** | **Laravel Breeze**-style stack with **email verification**, password reset, and role-aware redirects (`HomeController@redirect`). |

---

## Feature highlights

### For property owners (authenticated users)

- **Create listings** with location hierarchy (city, town, village, neighborhood), space, investment value, description, and optional map pointer text.
- **Investment channel**: `sell` · `rent` · `mortgage`.
- **Property type**: `apartment` · `house` · `villa` · `store` · `land` — with **extra fields** (floors, bedrooms, bathrooms, kitchen model) when the type is residential.
- **Multi-image uploads** with server-side resize and storage on disk.
- **Browse** all active listings or **filter** by investment type.
- **My listings** dashboard with status badges; **update** content and images; **delete** own posts.
- **Re-post flow** for expired listings: new duration and payment reference, returns to **pending** for admin review.
- **Queue limit**: up to **10 concurrent pending** submissions per user to reduce spam and moderation load.
- **Notifications**: upload confirmation, accept/refuse/re-post signals (via Laravel notifications + database channel).

### For administrators

- **Moderation queue**: accept (sets `status` to `active` and `expires_at = now() + time_of_ad` days) or refuse listings.
- **User management**: list users, view per-user post statistics, **block / unblock**, delete accounts.
- **Site configuration**: edit **social / contact / office** links; update **fee per day** and **merchant account number** shown on posting forms.
- **Livewire monitoring** component summarizing platform health (posts by status, user counts, blocked users).

### For visitors

- **Public home** with latest active listings and office/contact block from the database.

---

## Screenshots

Images live in [`public/docs/screenshoots/`](public/docs/screenshoots/). Files with the same base name and a numeric suffix (for example `01-home-public.png` … `01-home-public5.png`) are **different vertical slices of the same page** so the full scrollable layout is visible in the README.

### Public home (guest) — full page, top to bottom

<p align="center"><b>Home · part 1</b><br><img src="public/docs/screenshoots/01-home-public.png" alt="Public home part 1" width="780" /></p>
<p align="center"><b>Home · part 2</b><br><img src="public/docs/screenshoots/01-home-public2.png" alt="Public home part 2" width="780" /></p>
<p align="center"><b>Home · part 3</b><br><img src="public/docs/screenshoots/01-home-public3.png" alt="Public home part 3" width="780" /></p>
<p align="center"><b>Home · part 4</b><br><img src="public/docs/screenshoots/01-home-public4.png" alt="Public home part 4" width="780" /></p>
<p align="center"><b>Home · part 5</b><br><img src="public/docs/screenshoots/01-home-public5.png" alt="Public home part 5" width="780" /></p>

### Authentication & about

<p align="center"><b>Login</b><br><img src="public/docs/screenshoots/05-auth-login.png" alt="Login page" width="780" /></p>
<p align="center"><b>About the site</b><br><img src="public/docs/screenshoots/11-about-site.png" alt="About the site" width="780" /></p>

### All listings — full page, top to bottom

<p align="center"><b>All listings · part 1</b><br><img src="public/docs/screenshoots/02-listings-all.png" alt="All listings part 1" width="780" /></p>
<p align="center"><b>All listings · part 2</b><br><img src="public/docs/screenshoots/02-listings-all2.png" alt="All listings part 2" width="780" /></p>

### Listings (mortgage filter)

<p align="center"><b>Mortgage listings</b><br><img src="public/docs/screenshoots/03-listings-mortgage.png" alt="Mortgage listings" width="780" /></p>

### Property detail — full page, top to bottom

<p align="center"><b>Property detail · part 1</b><br><img src="public/docs/screenshoots/04-property-detail.png" alt="Property detail part 1" width="780" /></p>
<p align="center"><b>Property detail · part 2</b><br><img src="public/docs/screenshoots/04-property-detail2.png" alt="Property detail part 2" width="780" /></p>
<p align="center"><b>Property detail · part 3</b><br><img src="public/docs/screenshoots/04-property-detail3.png" alt="Property detail part 3" width="780" /></p>

### Create listing — full form, top to bottom

<p align="center"><b>Create listing · part 1</b><br><img src="public/docs/screenshoots/07-create-listing.png" alt="Create listing part 1" width="780" /></p>
<p align="center"><b>Create listing · part 2</b><br><img src="public/docs/screenshoots/07-create-listing2.png" alt="Create listing part 2" width="780" /></p>
<p align="center"><b>Create listing · part 3</b><br><img src="public/docs/screenshoots/07-create-listing3.png" alt="Create listing part 3" width="780" /></p>
<p align="center"><b>Create listing · part 4</b><br><img src="public/docs/screenshoots/07-create-listing4.png" alt="Create listing part 4" width="780" /></p>

### My posts

<p align="center"><b>My posts</b><br><img src="public/docs/screenshoots/08-my-post.png" alt="My posts dashboard" width="780" /></p>

### Edit listing — full form, top to bottom

<p align="center"><b>Edit listing · part 1</b><br><img src="public/docs/screenshoots/09-edit-listing.png" alt="Edit listing part 1" width="780" /></p>
<p align="center"><b>Edit listing · part 2</b><br><img src="public/docs/screenshoots/09-edit-listing2.png" alt="Edit listing part 2" width="780" /></p>
<p align="center"><b>Edit listing · part 3</b><br><img src="public/docs/screenshoots/09-edit-listing3.png" alt="Edit listing part 3" width="780" /></p>

### Admin dashboard — full page, top to bottom

<p align="center"><b>Admin dashboard · part 1</b><br><img src="public/docs/screenshoots/12-admin-dashboard.png" alt="Admin dashboard part 1" width="780" /></p>
<p align="center"><b>Admin dashboard · part 2</b><br><img src="public/docs/screenshoots/12-admin-dashboard2.png" alt="Admin dashboard part 2" width="780" /></p>
<p align="center"><b>Admin dashboard · part 3</b><br><img src="public/docs/screenshoots/12-admin-dashboard3.png" alt="Admin dashboard part 3" width="780" /></p>

### Admin — moderation, users, pricing

<p align="center"><b>Post moderation</b><br><img src="public/docs/screenshoots/13-admin-moderation.png" alt="Admin post moderation" width="780" /></p>
<p align="center"><b>User management</b><br><img src="public/docs/screenshoots/14-admin-users.png" alt="Admin user management" width="780" /></p>
<p align="center"><b>Pricing & merchant settings</b><br><img src="public/docs/screenshoots/15-admin-pricing.png" alt="Admin pricing and merchant settings" width="780" /></p>

### Admin — office & social links — full page, top to bottom

<p align="center"><b>Office & social links · part 1</b><br><img src="public/docs/screenshoots/16-admin-office-link.png" alt="Office links part 1" width="780" /></p>
<p align="center"><b>Office & social links · part 2</b><br><img src="public/docs/screenshoots/16-admin-office-link2.png" alt="Office links part 2" width="780" /></p>

### Admin — Livewire monitoring

<p align="center"><b>Livewire monitoring stats</b><br><img src="public/docs/screenshoots/17-admin-livewire-states.png" alt="Livewire admin monitoring statistics" width="780" /></p>

---

## Tech stack

| Layer | Technology |
|-------|------------|
| Backend | **PHP 8+**, **Laravel 9** |
| Auth | **Laravel Breeze**, **Sanctum** (API tokens available on `User`) |
| Frontend | **Blade**, **Tailwind CSS**, **Alpine.js**, **Vite** |
| Reactive admin UI | **Livewire 2** |
| Images | **Intervention Image 3** (GD driver) |
| HTTP / mail | **Guzzle**, **Symfony Mailgun Mailer** (optional transport) |
| Database | **MySQL** (default in `.env.example`) |

---

## High-level architecture

```mermaid
flowchart LR
  subgraph public [Public]
    Home[Welcome / listings preview]
  end

  subgraph user_area [Authenticated user]
    Post[Create / update / re-post]
    Browse[Filtered listings + detail]
  end

  subgraph admin_area [Admin]
    Mod[Accept / refuse]
    Users[Users + block]
    Config[Fees + office links]
    Livewire[Livewire monitoring stats]
  end

  Home --> Browse
  Post -->|pending| Mod
  Mod -->|active + expires_at| Browse
  Mod -->|refuse| user_area
  Config --> Post
  Livewire --> admin_area
```

---

## Database model (conceptual)

- **`users`**: authentication, `type` (`user` / `admin`), `active` flag for suspension, phone.
- **`posts`**: core listing; enums for investment and real-estate type; `time_of_ad` (listing duration in days); `status` (`pending`, `active`, `expired`, `refuse`); `expires_at` for visibility window; payment reference field (`numberOfProcess`).
- **`post_infos`**: one-to-one detail for apartment / house / villa.
- **`images`**: one-to-many gallery per post.
- **`numbers_and_costs`**: singleton-style config for **cost per day** and **merchant account** (shown on create / re-post forms).
- **`office_links`**: contact and social URLs for the public layout.

---

## Getting started

### Requirements

- PHP **8.0.2+** with extensions Laravel expects (pdo, openssl, mbstring, tokenizer, xml, ctype, json, fileinfo, gd recommended for Intervention)
- [Composer](https://getcomposer.org/)
- Node.js **16+** and npm
- MySQL (or adapt `.env` for your driver)

### Installation

```bash
git clone https://github.com/<your-username>/Real-estate-broker-website.git
cd Real-estate-broker-website

composer install
cp .env.example .env
php artisan key:generate
```

Configure **database** credentials in `.env`, then:

```bash
php artisan migrate
php artisan db:seed
```

Build frontend assets:

```bash
npm install
npm run dev
```

Run the application:

```bash
php artisan serve
```

Visit `http://127.0.0.1:8000` (or the URL shown in the terminal).

### Seeded configuration

`MainInfoSeeder` inserts starter rows for **`office_links`** (footer / contact content) and **`numbers_and_costs`** (default fee and merchant reference). Adjust these via the **admin UI** or by editing the seeder before first deploy.

### First admin user

Create a user through registration, then promote that user in the database (`users.type = 'admin'`) or seed an admin account according to your team’s convention. Only `type = admin'` accounts pass `AdminMiddleware` and reach moderation routes.

### Optional: automatic expiry of listings

The codebase includes a **commented** scheduler snippet in `app/Console/Kernel.php` that would mark overdue `active` posts as `expired` based on `expires_at`. For production, wire this up with Laravel’s **scheduler** (`* * * * * php artisan schedule:run`) or an equivalent worker so listing lifetimes stay in sync without manual status changes.

---

## Testing

```bash
php artisan test
```

The project ships with Laravel’s default **PHPUnit** feature tests (including Breeze auth flows).

---

## Project layout (selected)

```text
app/
  Http/Controllers/     # HomeController, UserController, AdminController, …
  Http/Middleware/      # AdminMiddleware, UserMiddleware, BlockUserMiddleware
  Http/Livewire/        # Monitoring (admin stats)
  Models/               # Posts, PostInfo, Images, User, …
  Notifications/        # GeneratePost, AcceptSuccessfully, RefusePostNotification, …
  Traits/               # ImageProcessingTrait
database/migrations/    # Schema for posts, users, images, …
resources/views/        # Blade pages for guest, user, admin
routes/web.php          # Application routes
```

---

## License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).

---

<div align="center">

**Built with Laravel — demonstrating full-stack delivery from schema design to admin tooling and production-minded configuration.**

</div>
