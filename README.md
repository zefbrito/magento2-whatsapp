# Magento 2 WhatsApp Button Module

A simple and customizable WhatsApp button module for Magento 2 that allows customers to contact you directly via WhatsApp.

## Features

- **Easy Integration**: Simple installation and configuration
- **Customizable Position**: Choose from 4 different button positions (top-left, top-right, bottom-left, bottom-right)
- **Configurable Appearance**: Customize button text and color
- **Admin Configuration**: Full control through Magento Admin panel
- **Responsive Design**: Works on all devices
- **Clean Code**: Follows Magento 2 best practices

## Installation

### Option 1: Composer Installation (Recommended)

1. Install the module via Composer:
   ```bash
   composer require zefbrito/magento2-whatsapp
   ```

2. Enable the module and run setup:
   ```bash
   php bin/magento module:enable Zefbrito_Whatsapp
   php bin/magento setup:upgrade
   php bin/magento setup:di:compile
   php bin/magento setup:static-content:deploy
   ```

3. Clear cache:
   ```bash
   php bin/magento cache:flush
   ```

### Option 2: Manual Installation

1. Download and extract the module files
2. Copy the module files to `app/code/Zefbrito/Whatsapp/` in your Magento 2 installation
3. Enable the module:
   ```bash
   php bin/magento module:enable Zefbrito_Whatsapp
   php bin/magento setup:upgrade
   php bin/magento setup:di:compile
   php bin/magento setup:static-content:deploy
   ```
4. Clear cache:
   ```bash
   php bin/magento cache:flush
   ```

## Configuration

1. Go to **Admin Panel** > **Stores** > **Configuration**
2. Navigate to **Zefbrito Extensions** > **WhatsApp Button**
3. Configure the following settings:
   - **Enable**: Turn the module on/off
   - **Phone Number**: Your WhatsApp number (with country code, e.g., +351987654321)
   - **Default Message**: Pre-filled message for customers
   - **Button Position**: Choose where to display the button
   - **Button Text**: Customize the button text
   - **Button Color**: Set button color (hex code, e.g., #25D366)

## Module Structure

```
├── Block/
│   └── WhatsappButton.php          # Block class for template logic
├── Model/
│   └── Config/
│       └── Source/
│           └── Position.php        # Position options source model
├── etc/
│   ├── acl.xml                     # Admin ACL permissions
│   ├── config.xml                  # Default configuration values
│   ├── module.xml                  # Module declaration
│   └── adminhtml/
│       └── system.xml              # Admin configuration fields
├── view/
│   └── frontend/
│       ├── layout/
│       │   └── default.xml         # Layout XML
│       ├── templates/
│       │   └── whatsapp-button.phtml # Button template
│       └── web/
│           └── css/
│               └── source/
│                   ├── _module.less # Main stylesheet
│                   └── whatsapp-button.less # Button styles
├── composer.json                   # Composer configuration
└── registration.php               # Module registration
```

## Requirements

- Magento 2.3.x or higher
- PHP 7.4 or higher

## License

This project is licensed under the MIT License.

## Support

For support or feature requests, please create an issue on GitHub.