# Ions Study Web App

This is a simple web page built using PHP, HTML, JavaScript, and CSS to help study and memorize various ions for a General Chemistry I course.

## Features
- Interactive periodic table with clickable ions
- Toggle between ion names and symbols
- Sections for monatomic and polyatomic ions
- Practice input fields for memorization
- Pop-up instructions for first-time users

## Getting Started (with Docker)

You can run this project locally using Docker. No PHP or Apache installation required!

### Prerequisites
- [Docker Desktop](https://www.docker.com/products/docker-desktop/) installed on your machine

### Quick Start
1. Clone this repository:
   ```sh
   git clone <your-repo-url>
   cd Ions
   ```
2. Build and run the container:
   ```sh
   docker-compose up --build
   ```
3. Open your browser and go to [http://localhost:8080](http://localhost:8080)

## Project Structure
- `index.php` — Main web page
- `images/` — Monatomic ion images
- `AllComplex/`, `complex1/`, `complex2/`, `complex3/` — Polyatomic ion images
- `Dockerfile`, `docker-compose.yml` — For containerized development

## License
This project is for educational and personal use.
