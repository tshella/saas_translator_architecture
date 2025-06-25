# 🧠 saas_translator_architecture

![PHP](https://img.shields.io/badge/PHP-8.2-blue?logo=php&logoColor=white)  
![React](https://img.shields.io/badge/React-18-blue?logo=react&logoColor=white)  
![Docker](https://img.shields.io/badge/Docker-Container-blue?logo=docker&logoColor=white)  

A SaaS-grade language translation platform built with **Symfony (PHP 8.2)** backend and **React/Redux** frontend (upcoming). Engineered for **scalability, modularity, and performance** by leveraging:

- SOLID object-oriented design principles  
- Strategy pattern for translation engine extensibility  
- JWT authentication with role-based access control  
- Async messaging queue with Redis and Symfony Messenger  
- Docker-first cloud-native containerization  

---

## Created and Maintained by  
**Manaka Anthony Raphasha**

---

## 🧱 Project Structure

    
    .
    ├── backend
    │   ├── Dockerfile
    │   ├── docker-entrypoint.sh
    │   ├── Makefile
    │   ├── composer.json
    │   ├── .env
    │   ├── scripts
    │   │   ├── setup.sh
    │   │   ├── migrate.sh
    │   │   └── seed.sh
    │   ├── src
    │   │   ├── Command
    │   │   ├── Controller
    │   │   ├── Entity
    │   │   ├── Message
    │   │   ├── Repository
    │   │   ├── Security
    │   │   └── Service
    │   └── config
    │       ├── services.yaml
    │       └── jwt/
    ├── docker-compose.yml
    ├── README.md
    └── frontend (coming soon)

| Feature                      | Status   | Description                               |
|-----------------------------|----------|-------------------------------------------|
| Symfony API-driven backend   | ✅ Done  | Modular, extensible architecture          |
| Dockerized environment       | ✅ Done  | PHP, MySQL, Redis containers               |
| Async queue processing       | ✅ Done  | Symfony Messenger + Redis backend          |
| Strategy-based translation engine | ✅ Done  | Google, DeepL, LibreTranslate, OpenAI support |
| Glossary-based term replacement | ✅ Done  | Customizable dictionary integration        |
| Tone decorators             | ✅ Done  | Formal, casual, professional tone modes   |
| JWT authentication          | ✅ Done  | Lexik JWT bundle with role-based security |
| Database automation         | ✅ Done  | Auto-creation & migrations with Doctrine  |
| Shell scripts               | ✅ Done  | Setup, migration, seeding automation       |
| Makefile & docker-entrypoint | ✅ Done  | Clean orchestration & lifecycle management |
| Compatibility               | ✅ Done  | Symfony CLI, Docker, native PHP runtime    |

 ## 🚀 Quick Start

 ### 1. Clone & Setup

    git clone https://github.com/your-org/saas_translator_architecture.git
    cd saas_translator_architecture
    ./backend/scripts/setup.sh

### 2. Seed Sample Data
    
    ./backend/scripts/seed.sh

### 3. Start Translation Worker (in a new terminal)
   
    docker exec -it symfony_app php bin/console app:consume-translations

 ⚙️ How to Use
    Running the Application
    Once the setup and seed scripts complete, access the backend API at:

http://localhost:8000/api/translate
Use the /api/translate endpoint to queue translation jobs via HTTP POST requests.

Example cURL Request
    
    curl -X POST http://localhost:8000/api/translate \
    -H "Content-Type: application/json" \
    -d '{"text": "Hello", "from": "en", "to": "es"}'

Translation Worker
Keep the translation worker running in a separate terminal to process queued translation jobs asynchronously:

    docker exec -it symfony_app php bin/console app:consume-translations
    Running Locally (Without Docker)
    Export environment variables:

    export $(grep -v '^#' .env | xargs)

Install PHP dependencies:

    composer install

Create database and run migrations:

    php bin/console doctrine:database:create --if-not-exists
    php bin/console doctrine:migrations:migrate

Seed the database:

    php bin/console app:seed
    Start Symfony local server:

    
    php -S 0.0.0.0:8000 -t public

#### 📡 API Endpoints (v1)

| Method | Endpoint       | Description             |
| ------ | -------------- | ----------------------- |
| POST   | /api/translate | Queue a translation job |
| GET    | /api/doc       | Swagger documentation   |


Sample Request Body:

    json
 
        {
            "text": "Hello",
            "source": "en",
            "target": "fr",
            "engine": "nllb"
        }
       

#### 🧠 Design Principles

| Principle          | Description                                           |
| ------------------ | ----------------------------------------------------- |
| SOLID Principles   | Maintainable object-oriented code                     |
| Strategy Pattern   | Easily switch or add translation engines              |
| Async Messaging    | Redis + Symfony Messenger for non-blocking processing |
| JWT Authentication | Stateless secure API                                  |
| Modular Structure  | Decoupled services and pluggable components           |
| Docker-First       | Reproducible environments using Docker                |


🗺 Roadmap

| Stage | Feature                        | Status     |
| ----- | ------------------------------ | ---------- |
| 1     | Symfony backend                | ✅ Done     |
| 2     | Redis queue for async jobs     | ✅ Done     |
| 3     | Glossary/tone decorators       | ✅ Done     |
| 4     | LibreTranslate engine          | ✅ Done     |
| 5     | JWT authentication             | ✅ Done     |
| 6     | Makefile + Docker entrypoint   | ✅ Done     |
| 7     | API Gateway with Swagger UI    | ✅ Done     |
| 8     | Add NLLB-Mini engine (Meta AI) | ✅ Done     |
| 9     | React/Redux frontend scaffold  | 🔜 Next    |
| 10    | Token storage + UI login       | 🔜 Next    |
| 11    | Billing and usage metering     | 🔜 Planned |
| 12    | Multi-tenant SaaS billing      | 🔜 Planned |
| 13    | Usage analytics dashboard      | 🔜 Planned |



#### 📦 Technology Stack
| Layer     | Technology                           |
| --------- | ------------------------------------ |
| Backend   | Symfony 6.4 (PHP 8.2)                |
| Auth      | LexikJWTAuthenticationBundle         |
| Queue     | Redis + Symfony Messenger            |
| Database  | MySQL 8.0                            |
| Container | Docker + Docker Compose              |
| Engines   | LibreTranslate, DeepL, OpenAI, NLLB  |
| Docs      | NelmioApiDocBundle (Swagger/OpenAPI) |
| Frontend  | React 18 + Redux Toolkit (planned)   |


##### 🧪 Testing
- Unit tests for translation engine logic

- Token and glossary replacement tests

- Async Messenger job handler verification

- JWT authentication and security tests

#### 👩‍💻 Developer Guidance
Environment Setup
Ensure Docker and Docker Compose are installed.

Use ./backend/scripts/setup.sh to start with a clean environment.

Export .env variables before running commands locally, e.g.,


    export $(grep -v '^#' .env | xargs)

Common Commands
| Command      | Description                   |
| ------------ | ----------------------------- |
| make build   | Build backend Docker image    |
| make up      | Start all containers          |
| make down    | Stop all containers           |
| make migrate | Run Doctrine migrations       |
| make seed    | Seed database with dummy data |
| make shell   | Enter backend container       |
| make worker  | Run translation queue worker  |


Code Standards
Follow PSR-12 coding standard for PHP.

Use tools like phpstan and php-cs-fixer (planned).

Write clear, modular, and testable code.

#### 📊 Metrics & Diagrams
    (Placeholder for architecture diagrams, flowcharts, or graphs)

#### 🤝 Contributing
- Issue templates and pull request guidelines will be added soon.

- CI/CD workflows with GitHub Actions are planned.

- Please submit issues and pull requests for bugs and improvements.

#### 📚 Additional Resources
| Resource                     | Link                                                                                                           |
| ---------------------------- | -------------------------------------------------------------------------------------------------------------- |
| Symfony Docs                 | [https://symfony.com/doc/current](https://symfony.com/doc/current)                                             |
| LexikJWTAuthenticationBundle | [https://github.com/lexik/LexikJWTAuthenticationBundle](https://github.com/lexik/LexikJWTAuthenticationBundle) |
| Symfony Messenger            | [https://symfony.com/doc/current/messenger.html](https://symfony.com/doc/current/messenger.html)               |
| Docker Compose               | [https://docs.docker.com/compose](https://docs.docker.com/compose)                                             |
| OpenAI Translation API       | [https://platform.openai.com/docs](https://platform.openai.com/docs)                                           |
| DeepL API                    | [https://deepl.com/docs-api](https://deepl.com/docs-api)                                                       |
| LibreTranslate               | [https://libretranslate.com/docs](https://libretranslate.com/docs)                                             |
| NLLB (Meta AI)               | [https://github.com/facebookresearch/fairseq](https://github.com/facebookresearch/fairseq)                     |




For questions, feedback, or collaboration, reach out to Manaka Anthony Raphasha.

This project embraces best practices for modern SaaS backend development, designed for maintainability, security, and cloud deployment readiness.