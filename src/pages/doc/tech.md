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
It provides management and operations of wide variety of objects used in hosting,
domains and more:

- Domains
    - Availability check
        - Similar domains suggestion
        - WHOIS lookup
    - Registration and Transfer
        - Bulk transfer
    - Automated renewal
    - Name servers
        - Creation and assignment
        - Default contacts for new domains
        - Custom NSs for expired domains
    - Contacts management (WHOIS data)
        - Creation and assignment
        - Default contacts for new domains
    - Domain data syncing
    - WHOIS protection
    - Transfer protection
    - Holding and freezing
    - DNS management
    - Email notifications
    - WDRP - WHOIS Data Reminder Policy
    - RDE - Registrar Data Escrow
- SSL certificates
    - Issue, renewal, cancel
    - Contacts reusable from domains
    - Domain control validation methods:
        - email
        - DNS (automatically for DNS under control)
- Hosting
    - Servers
        - Dedicated
        - VDS
        - CDN
    - Hosted objects
        - Accounts
        - Virtual hosts
        - Cronjobs
        - Mails
        - Databases
- Infrastructure management
    - Equipment inventory
        - Network switches
        - KVM - Keyboard Video Mouse
        - PDU - Power Distribution Units
        - Racks and units
        - IPMI - Intelligent Platform Management Interface
    - Hardware inventory (stock)
        - Models and model groups
        - Details with serial numbers
        - Movements history
            - Order, installation, deinstallation, RMA, trash
        - Orders
            - Suppliers
            - Prices
        - Stocks management
            - Remainders
            - Required minimum limits
    - IP addresses and network inventory
    - Resources consumption accounting
        - All kinds of resources consumption:
            - Traffic (IP, switch, domain)
            - Disk usage, backup usage
            - IP addresses number
        - Traffic graphs
    - Integration with monitoring
- Billing
    - Very extensible billing system
    - Reselling
    - Payments and detailed payments
    - Tariff plans
    - Coupons and discounts
    - Payment gateways integrations
        - 50+ available with [Omnipay]
    - Multi-currency support
    - PDF invoices generation with own templates
    - Payment reminders and overdue notices
    - Taxes/VAT
- User management
    - Different types of access:
        - client, reseller
        - support, admin, manager
        - precise control of permissions with RBAC
    - Contacts
        - Contact data verification
        - Attached documents
    - Documents and files upload and download
- User support
    - Ticketing system
        - Ticket assignment to user or support/manager
        - File attachment
        - Answer templates
        - Customizable email notifications
        - Answer with email
    - FAQ
    - Documentation

#### For whom/possible ways of use

HiPanel is suitable for different businesses:

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
- Integrated with many services
- Easy integratable with 
- Payment gateways integrations
    - 50+ available with [Omnipay]

### Licensing

- Mostly open source - BSD license
- Available at [GitHub]

[Omnipay]:      http://omnipay.thephpleague.com/
[GitHub]:       https://github.com/hiqdev/hipanel
