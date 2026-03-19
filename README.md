# Cleanovative V2

The redesigned and improved version of the Cleanovative cleaning service website. Built with Laravel, this iteration features an updated UI/UX, enhanced functionality, and Docker support for streamlined development and deployment.

## Tech Stack

- **PHP** ^7.3 | ^8.0
- **Laravel** ^8.65
- **Webpack Mix** for asset compilation
- **Docker** support via Docker Compose
- **PHPUnit** for automated testing

## Features

- Redesigned service catalog and landing pages
- Improved booking and quote request flow
- Customer and admin account management
- Updated responsive design
- Docker-ready development environment
- Enhanced performance and SEO

## Getting Started

### Prerequisites

- PHP >= 7.3
- Composer
- Node.js & npm
- MySQL or compatible database

### Installation

```bash
# Clone the repository
git clone https://github.com/mhmalvi/cleanovative-v2.git
cd cleanovative-v2

# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install

# Configure environment
cp .env.example .env
php artisan key:generate

# Run database migrations
php artisan migrate

# Compile assets
npm run dev
```

### Development

```bash
# Start the development server
php artisan serve

# Watch for asset changes
npm run watch
```

### Docker

```bash
docker-compose up -d
```

### Testing

```bash
php artisan test
```

## Project Structure

```
cleanovative-v2/
├── app/                # Application logic
├── bootstrap/          # Framework bootstrap files
├── config/             # Configuration files
├── database/           # Migrations, factories, and seeders
├── public/             # Public assets and entry point
├── resources/          # Views, raw assets, and language files
├── routes/             # Route definitions
├── storage/            # Logs, cache, and compiled files
├── tests/              # Automated tests
├── docker-compose.yml  # Docker configuration
└── webpack.mix.js      # Asset compilation configuration
```

## Related

- [Cleanovative Web](https://github.com/mhmalvi/cleanovative-web) — Original version

## License

MIT