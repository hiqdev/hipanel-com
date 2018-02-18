# HiPanel

#### Billing and Control panel for domains, hosting and more

### Service specification

<br><br><br>




#### Contents

- About
- Usability
- Modular architecture:
- Technologies used:
- Extensibility, customization and integrations
- Licensing

### About

#### Overview

HiPanel is billing and control panel for domains, hosting and more.

#### For whom/possible ways of use

- For ICANN accredited domain registrars.
- For hosting providers.
- For resellers.
- For TLD registries.

### Usability

- Modern and responsive design
- Use of AJAX, to reduce latency and server reloads
- Batch operations (with multiple objects simultaneously)

### Modular architecture

- Backend (API) server
    - Relational database (PostgreSQL)
    - Modern secure and fast web framework (Yii2)
- EPP servers
- Frontend
- User site
    - Demo at https://hiqloud.com/
- Identity and access management server
    - Login, registration, email confirmation, password restore
    - Single Sign-On
    - OAuth2 server
    - RBAC - Role Based Access Control
    - multi-factor authentication with:
        - TOTP (Time-based One-time Password) Google Authenticator compatible
        - Limited access from user allowed IPs only
    - Social login with Facebook, Google, VK, LinkedIn, GitHub, Live, Yandex
    - Full activity logging with searching and reporting (planned)
- Additional services:
    - WHOIS server
    - RDE - Registrar Data Escrow
- Reliable backup strategy
- System components diagrams

### Technologies used

- PHP (7.0 - 7.2), Nginx, PHP-FPM
- Yii2 framework (latest)
- PostgreSQL (9 - 10)
- Linux, Docker, docker-compose

### Customization, extensibility, and integrations

- Easy branding
- Easy theming with Yii2 themes

### Licensing

- Mostly open source - BSD license
- Available at [GitHub]

[Omnipay]:      http://omnipay.thephpleague.com/
[GitHub]:       https://github.com/hiqdev/hipanel
